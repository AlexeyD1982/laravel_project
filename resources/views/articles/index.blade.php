@extends('layouts.app')

@section('page-title')
    Все статьи на сайте
@endsection

@section('content')
    <h1>Все статьи на сайте</h1>
    @if(count($articles) > 0)
        @foreach($articles as $elem)
            <div class="well">
                <img src="/public/storage/images/{{ $elem->image }}" alt="{{ $elem->title }}" class="img-thumbnail" style="max-width: 300px">
                <a href="/public/articles/{{ $elem->id }}"><h3 class="mt-3">{{ $elem->title }}</h3></a>
                <p><b>Обновлено: </b>{{ $elem->updated_at }}</p>
                <p><b>Автор: </b>{{ $elem->user->name }}</p>
            </div>
        @endforeach
    @else
        <p>В настоящий момент статей на сайте нет</p>
    @endif
@endsection

