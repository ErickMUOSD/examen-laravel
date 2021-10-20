<?php
use Illuminate\Database\Seeder;
use App\Accidentes;
use App\Sucursales;
use App\Clientes;
use App\Vehiculos;
use App\Vendedores;
use App\Polizas;
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
        $cantidadVendedores=10;
        factory(Vendedores::class,$cantidadVendedores)->create();
        $cantidadPolizas=10;
        factory(Polizas::class,$cantidadPolizas)->create();
        //$cantidadProductos=10;
                        //factory(Accidentes::class,$cantidadAccidentes)->create();
                        //factory(Product::class,$cantidadProductos)->create();
    }
}

