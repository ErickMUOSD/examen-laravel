<?php
use Illuminate\Database\Seeder;
use App\Accidentes;
use App\Sucursales;
use App\Clientes;
use App\Vehiculos;

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
        $cantidadSucursales=10;
        factory(Sucursales::class,$cantidadSucursales)->create();
        $cantidadClientes=10;
        factory(Clientes::class,$cantidadClientes)->create(); 
        $cantidadVehiculos=10;
        factory(Vehiculos::class,$cantidadVehiculos)->create(); 
                     
                        //$cantidadProductos=10;
                        //factory(Accidentes::class,$cantidadAccidentes)->create(); 
                        //factory(Product::class,$cantidadProductos)->create(); 
    }
}

