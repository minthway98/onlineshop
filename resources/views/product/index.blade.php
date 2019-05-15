@extends('layouts.app')

@section('content')
    <a rel="stylesheet" href="{{ route('product.create') }}">create</a> <br>
    @foreach ($products as $product)
        {{$product->name}}    <br>
        @foreach ($product->attributes as $item)
            {{$item}}
        @endforeach
    @endforeach
@endsection