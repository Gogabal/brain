@extends('layout')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.5 CRUD Example from scratch</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clientes.create') }}"> Create New Cliente</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($clientes as $cliente)
    <tr>
       
        <td>{{ $cliente->id}}</td>
        <td>{{ $cliente->nombre}}</td>
        <td>{{ $cliente->apellido}}</td>
        <td>
            <a class="btn btn-info" href="{{ route('clientes.show',$cliente->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('clientes.edit',$cliente->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['clientes.destroy', $cliente->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>


    {!! $clientes->links() !!}
@endsection