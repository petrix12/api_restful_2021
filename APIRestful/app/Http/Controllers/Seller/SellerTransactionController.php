<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\ApiController;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerTransactionController extends ApiController
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
        $transactions = $seller->products()     // Lista de productos del vendedor
            ->whereHas('transactions')          // Unicamente los productos con transacciones
            ->with('transactions')              // Traer las transacciones
            ->get()                             // Obtener los resultados
            ->pluck('transactions')             // De la colección completa dejar solo las transacciones
            ->collapse();                       // Para juntar todas las listas en una
        return $this->showAll($transactions);
    }
}
