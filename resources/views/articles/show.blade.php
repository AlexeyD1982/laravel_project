@extends('layouts.app')

@section('page-title')
    Статья
@endsection

@section('content')
    <a href="/public/articles" class="btn btn-warning">назад</a>
    <br><br>
    <h1>{{ $article->title }}</h1>

    <div>
        <p>{!! $article->text !!}</p>
        <p>Создана: {{ $article->created_at }}</p>
    </div>

    @foreach($article->comments as $comment)
        <div class="alert alert-primary p-3 rounded mt-3">
            {{$comment->text}}
        </div>
    @endforeach

    @include('comments.create')

    @if(!Auth::guest() && Auth::user()->id === $article->user_id)
    <hr>
    <a href="/public/articles/{{ $article->id }}/edit" class="btn btn-warning">Редактировать</a>
    <br><br>
    {!! Form::open(['action' => ['ArticlesController@destroy', $article->id], 'method' => 'POST']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Удалить статью', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
    @endif
@endsection


