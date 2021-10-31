<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\ApiController;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerCategoryController extends ApiController
{
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Seller $seller)
    {
        $categories = $seller->products()   // Lista de productos del vendedor
            ->with('categories')            // Traer las categorias
            ->get()                         // Obtener los resultados
            ->pluck('categories')           // Nos aseguramos de tener en la lista unicamente las categorías
            ->collapse()                    // Para juntar todas las listas en una
            ->unique('id')                  // Nos aseguramos que las categorías no se repitan
            ->values();                     // Nos aseguramos de eliminar los elementos vacios
        return $this->showAll($categories);
    }
}
