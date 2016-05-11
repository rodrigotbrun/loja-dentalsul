@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Pedido</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($pedido, ['route' => ['pedidos.update', $pedido->id], 'method' => 'patch']) !!}

            @include('pedidos.fields')

            {!! Form::close() !!}
        </div>
@endsection