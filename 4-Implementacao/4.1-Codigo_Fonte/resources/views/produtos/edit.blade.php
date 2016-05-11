@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Produto</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($produto, ['route' => ['produtos.update', $produto->id], 'method' => 'patch']) !!}

            @include('produtos.fields')

            {!! Form::close() !!}
        </div>
@endsection