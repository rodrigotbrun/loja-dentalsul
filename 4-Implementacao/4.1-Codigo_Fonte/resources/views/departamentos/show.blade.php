@extends('layouts.app')

@section('content')
    @include('departamentos.show_fields')

    <div class="form-group">
           <a href="{!! route('departamentos.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
