<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;

trait ApiResponser{
    private function successResponse($data, $code){
        return response()->json($data, $code);
    }

    protected function errorResponse($message, $code){
        return response()->json(['error' => $message, 'code' => $code], $code);
    }

    protected function showAll(Collection $collection, $code = 200){
        if($collection->isEmpty()){ // En caso de collection este vacia
            return $this->successResponse(['data' => $collection], $code);
        }
        $transformer = $collection->first()->transformer;   // Para obtener el transformer de la clase adecuada
        $collection = $this->filterData($collection, $transformer);
        $collection = $this->sortData($collection, $transformer);
        $collection = $this->paginate($collection);
        $collection = $this->transformData($collection, $transformer);
        $collection = $this->cacheResponse($collection);
        return $this->successResponse($collection, $code);
    }

    protected function showOne(Model $instance, $code = 200){
        $transformer = $instance->transformer;   // Para obtener el transformer de la clase adecuada
        $instance = $this->transformData($instance, $transformer);
        return $this->successResponse($instance, $code);
    }

    protected function showMessage($message, $code = 200){
        return $this->successResponse(['data' => $message], $code);
    }

    protected function filterData(Collection $collection, $transformer){
        foreach(request()->query() as $query => $value){
            $attribute = $transformer::originalAttribute($query);
            // Verifica que el atributo y el valor no sean vacios
            if(isset($attribute, $value)){
                // Obtener la colección en donde el atributo sea igual al valor
                $collection = $collection->where($attribute, $value);
            }
        }
        return $collection;
    }

    protected function sortData(Collection $collection, $transformer){
        if(request()->has('sort_by')){  // Verifica que en la petición de la url exista un parámetro de nombre sort_by
            $attribute = $transformer::originalAttribute(request()->sort_by);
            $collection = $collection->sortBy->{$attribute};
        }
        return $collection;
    }

    protected function paginate(Collection $collection){
        $rules = [
            'per_page' => 'integer|min:2|max:100'
        ];
        Validator::validate(request()->all(), $rules);
        $page = LengthAwarePaginator::resolveCurrentPage();
       
        $perPage = 15;
        if (request()->has('per_page')) {
            $perPage = (int) request()->per_page;
        }
        $results = $collection->slice(($page -1) * $perPage, $perPage)->values();
        $paginated = new LengthAwarePaginator($results, $collection->count(), $perPage, $page, [
            'path' => LengthAwarePaginator::resolveCurrentPath()
        ]);
        $paginated->appends(request()->all());
        return $paginated;
    }

    protected function transformData($data, $transformer){
        $transformation = fractal($data, $transformer);
        return $transformation->toArray();
    }

    protected function cacheResponse($data){
        $url = request()->url();
        $queryParams = request()->query();  // Obtener los parámetros da la url
        ksort($queryParams);    // Ordena los parámetros de la url
        $queryString = http_build_query($queryParams);  // Recontruir la forma en que la url lee el arreglo de parámetros
        $fullUrl = "{$url}?{$queryString}";  // Reconstruir la url completa
        return Cache::remember($url, 15/60, function () use($data) {
            return $data;
        });
    }
}