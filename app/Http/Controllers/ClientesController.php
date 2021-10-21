<?php

namespace App\Http\Controllers;
use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index (){
       $clientes = Clientes::all();
           return view('clientes.index',['clientes'=>$clientes]);
       }
          public function store (){

             Category::create([
                   'nombre'=>$request->nombre,
                   'domicilio'=>$request->domicilio,
                   'telefono'=>$request->name
               ]);
              }
              public function delete ($id){
                             $cliente = Clientes::find($id);
                              $cliente->delete();
                            return redirect('/clientes');
                            }
}
