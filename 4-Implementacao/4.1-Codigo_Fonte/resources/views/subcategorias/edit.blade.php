@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Subcategoria</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($subcategoria, ['route' => ['subcategorias.update', $subcategoria->id], 'method' => 'patch']) !!}

            @include('subcategorias.fields')

            {!! Form::close() !!}
        </div>
@endsection