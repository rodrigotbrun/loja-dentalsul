@extends('layouts.app')

@section('content')
    @include('produtos.show_fields')

    <div class="form-group">
           <a href="{!! route('produtos.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
