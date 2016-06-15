@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editar</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    {!! Form::model($cliente, ['route' => ['clientes.update', $cliente->id], 'method' => 'patch']) !!}

                    @include('clientes.fields')

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>

    @include('core-templates::common.errors')

@endsection