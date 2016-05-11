@extends('layouts.app')

@section('content')
    @include('subcategorias.show_fields')

    <div class="form-group">
           <a href="{!! route('subcategorias.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
