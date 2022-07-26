@extends('layouts.app')

@section('content')
    @switch($contenido)
        @case('index')
            @include('products.show2')
            <h1>qwq</h1>
            @break

        @case('users')
            <h1>wawa</h1>

            @break
        @case('products')

            @break

    @endswitch
@endsection()

