<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\ApiController;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerBuyerController extends ApiController
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
        $buyers = $seller->products()       // Lista de productos del vendedor
            ->whereHas('transactions')      // Unicamente los productos que tengan transacciones
            ->with('transactions.buyer')    // Traer los comprador presentes en la transacción
            ->get()                         // Obtener los resultados
            ->pluck('transactions')         // Obtener las colecciones de transacciones independientes
            ->collapse()                    // Juntar todas las colecciones de las transacciones
            ->pluck('buyer')                // Obtener el comprador de cada una de esas transacciones
            ->unique('id')                  // Nos aseguramos que los compradores no se repitan
            ->values();                     // Nos aseguramos de eliminar los elementos vacios
        return $this->showAll($buyers);
    }
}
