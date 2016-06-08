@extends('layouts.app')

@section('content')
    @include('pedidos.show_fields')

    <div class="form-group">
           <a href="{!! route('pedidos.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
