<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\ApiController;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryBuyerController extends ApiController
{
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        $buyers = $category->products()     // Seleccionar todos los productos
            ->whereHas('transactions')      // Filtrar solo los productos que tiene al menos una transacción
            ->with('transactions.buyer')    // Requerir el comprador de la transacción
            ->get()
            ->pluck('transactions')         // Obtener unicamente la lista de las transacciones
            ->collapse()                    // Obtener unicamente una lista y no una lista de colecciones  
            ->pluck('buyer')                // pluck nuevamente pero ahora para obtener los compradores
            ->unique()                      // Vaciar los registros repetidos
            ->values();                     // Eliminar los registros vacios
        return $this->showAll($buyers);
    }
}
