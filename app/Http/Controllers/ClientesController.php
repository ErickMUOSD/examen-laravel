<?php

namespace App\Http\Controllers;
use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index (Request $request){
//         $clientes = App\clientes->vehiculos()-> cliente()->orderBy('created_at','desc')->get();
 $clientes = App\Clientes::all();
           return view('clientes.index',['clientes'=>$clientes]);
       }
}
