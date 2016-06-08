@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Departamento</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($departamento, ['route' => ['departamentos.update', $departamento->id], 'method' => 'patch']) !!}

            @include('departamentos.fields')

            {!! Form::close() !!}
        </div>
@endsection