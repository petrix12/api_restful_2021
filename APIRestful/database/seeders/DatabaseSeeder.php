<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Desactivar claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        // Vaciar todas las tablas
        User::truncate();
        Category::truncate();
        Product::truncate();
        Transaction::truncate();
        DB::table('category_product')->truncate();

        // Evitar que se disparen eventos como los correos de verificación
        User::flushEventListeners();
        Category::flushEventListeners();
        Product::flushEventListeners();
        Transaction::flushEventListeners();

        // Establecer las cantidades de registros a crear por tablas
        $cantidadesUsuarios = 1000;
        $cantidadesCategorias = 30;
        $cantidadesProductos = 1000;
        $cantidadesTransacciones = 1000;

        // Crear los registros de prueba
        User::factory($cantidadesUsuarios)->create();
        Category::factory($cantidadesCategorias)->create();
        Product::factory($cantidadesProductos)->create()->each(
            function ($producto){
                $categorias = Category::all()->random(mt_rand(1, 5))->pluck('id');
                $producto->categories()->attach($categorias);
            }
        );
        Transaction::factory($cantidadesTransacciones)->create();
    }
}
