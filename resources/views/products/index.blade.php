@extends('layouts.app')

@section('page-title')
    Мерч
@endsection

@section('content')
    <h1>Магазин</h1>
    <p>В нашем магазине представлен широкий ассортимент мерча, для того, чтобы выглядеть оригинально!</p>
    @if(count($products) > 0)
        @foreach($products as $elem)
            <div class="bg-light p-3 rounded mt-3">
                <h3>{{ $elem->name }}</h3>
                <p>{!! $elem->description !!}</p>
                <p><b>Цена: </b>{{$elem->price}} рублей</p>
                <a href="/public/shop/{{ $elem->id }}" class="btn btn-success">Details</a>
            </div>
        @endforeach
    @else
        <p>No products at the moment</p>
    @endif
    <br>

@endsection


