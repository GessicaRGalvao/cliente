<?php

namespace App\Http\Controllers;
//namespace App\Http\Auth;

//namespace App\Http\Controllers\Controller;
//use App\Http\Controller;
//use App\Http\Clientes;
use Illuminate\Http\Request;
use Redirect;

class ClientesController extends Controller
{
   public function index()
   {
   	return view('clientes.listas');
   }

   public function novo()
   {
   	return view('clientes.formulario');
   } 

   public function salvar(Request $request)
   {
   	//	$cliente = new cliente();
   	//	$cliente = $cliente->create($request->all());
   	//	\Session::flash('Sucesso','Cliente sucess');
   	//	return Redirect::to('clientes/novo');
   }
}
