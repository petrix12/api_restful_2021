<?php

namespace App\Transformers;

use App\Models\Product;
use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];
    
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];
    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Product $product)
    {
        return [
            'identificador' => (int)$product->id,
            'titulo' => (string)$product->name,
            'detalles' => (string)$product->description,
            'cantidad' => (int)$product->quantity,
            'estado' => (string)$product->status,
            'imagen' => url("img/{$product->image}"),
            'vendedor' => (int)$product->seller_id,
            'fechaCreacion' => (string)$product->created_at,
            'fechaActualizaciln' => (string)$product->updated_at,
            'fechaEliminacion' => isset($product->deleted_at) ? (string) $product->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('products.show', $product->id),
                ],
                [
                    'rel' => 'product.buyers',
                    'href' => route('products.buyers.index', $product->id),
                ],
                [
                    'rel' => 'product.categories',
                    'href' => route('products.categories.index', $product->id),
                ],
                [
                    'rel' => 'product.transactions',
                    'href' => route('products.transactions.index', $product->id),
                ],
                [
                    'rel' => 'seller',
                    'href' => route('sellers.show', $product->seller_id),
                ],
            ],
        ];
    }

    public static function originalAttribute($index){
        $attributes = [
            'identificador' => 'id',
            'titulo' => 'name',
            'detalles' => 'description',
            'cantidad' => 'quantity',
            'estado' => 'status',
            'imagen' => 'image',
            'vendedor' => 'seller_id',
            'fechaCreacion' => 'created_at',
            'fechaActualizaciln' => 'updated_at',
            'fechaEliminacion' => 'deleted_at'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }

    public static function transformedAttribute($index){
        $attributes = [
            'id' => 'identificador',
            'name' => 'titulo',
            'description' => 'detalles',
            'quantity' => 'cantidad',
            'status' => 'estado',
            'image' => 'imagen',
            'seller_id' => 'vendedor',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizaciln',
            'deleted_at' => 'fechaEliminacion'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }
}
