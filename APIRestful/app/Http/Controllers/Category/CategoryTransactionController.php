<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\ApiController;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryTransactionController extends ApiController
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
        $transactions = $category->products()   // Seleccionar todos los productos
            ->whereHas('transactions')          // Filtrar solo los productos que tiene al menos una transacción
            ->with('transactions')              // Nos traemos la transacción
            ->get()
            ->pluck('transactions')             // Obtener unicamente la lista de las transacciones
            ->collapse();                       // Obtener unicamente una lista y no una lista de colecciones      
        return $this->showAll($transactions);
    }
}
