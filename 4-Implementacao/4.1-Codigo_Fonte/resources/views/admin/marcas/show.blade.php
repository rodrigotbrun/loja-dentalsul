@extends('layouts.app')

@section('content')
    @include('marcas.show_fields')

    <div class="form-group">
           <a href="{!! route('marcas.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
