<?php
use Illuminate\Database\Seeder;
use App\Accidentes;
//use App\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $cantidadAccidentes=10;
        Factory(Accidentes::class ,$cantidadAccidentes)->create();
                     
                        //$cantidadProductos=10;
                        //factory(Accidentes::class,$cantidadAccidentes)->create(); 
                        //factory(Product::class,$cantidadProductos)->create(); 
    }
}
