@extends('layouts.app')

@section('page-title')
    Article update
@endsection

@section('content')
    <h1>Редактирование статьи</h1>
    {!! Form::open(['action' => ['ArticlesController@update', $article->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Название статьи') }}
        {{ Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'enter heading']) }}
    </div>
    <div class="form-group">
        {{ Form::label('text', 'Текст') }}
        {{ Form::textarea('text', $article->text, ['id' => 'app-ckeditor', 'placeholder' => 'enter text']) }}
    </div>
    {{ Form::file('main_image') }}
    <br><br>
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Изменить', ['class' => 'btn btn-success mt-2']) }}
    {!! Form::close() !!}
@endsection


