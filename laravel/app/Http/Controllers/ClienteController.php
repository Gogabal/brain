<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
 	public function index()
 	{
 			$clientes= Cliente::latest()->paginate(5);
 		
 			return view('clientes.index',compact('clientes'));


 	}

 	public function create()
 	{
 		return view('clientes.create');

 	}

 	public function store(request $request)
 	{

 		
 	
 			Cliente::create($request->all());
 			return redirect()->route('clientes.index')->with('succes','Cliente se creo satisfactoriamente');
 	}

 	public function show($id)
 	{
		$cliente = Cliente::find($id);
        return view('clientes.show',compact('cliente'));

 	}

 	public function  edit($id)
 	{
 			$cliente = Cliente::find($id);
        return view('clientes.show',compact('cliente'));

 	}

 	public function update()
 	{


 	}

 	public function destroy()
 	{


 	}
}
