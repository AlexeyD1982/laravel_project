@extends('layouts.app')

@section('page-title')
    Product
@endsection

@section('content')
    <a href="/public/shop" class="btn btn-warning">back</a>
    <br>
    <div class="bg-light p-3 rounded mt-3">
        <h3>{{ $product->name }}</h3>
        <p>{!! $product->description !!}</p>
        <p><b>Price: </b>{{$product->price}} rubles</p>
        <a href="#" class="btn btn-primary">Buy</a>
    </div>
@endsection



