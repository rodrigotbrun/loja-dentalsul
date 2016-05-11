@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Marca</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($marca, ['route' => ['marcas.update', $marca->id], 'method' => 'patch']) !!}

            @include('marcas.fields')

            {!! Form::close() !!}
        </div>
@endsection