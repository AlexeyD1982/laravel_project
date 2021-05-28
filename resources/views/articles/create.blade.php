@extends('layouts.app')

@section('page-title')
    Новая статья
@endsection

@section('content')
    <h1>Добавление новой статьи</h1>
    {!! Form::open(['action' => 'ArticlesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Название статьи') }}
        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'enter heading']) }}
    </div>
    <div class="form-group">
        {{ Form::label('text', 'Текст статьи') }}
        {{ Form::textarea('text', '', ['id' => 'app-ckeditor', 'placeholder' => 'enter text']) }}
    </div>
    {{ Form::file('main_image') }}
    <br><br>
    {{ Form::submit('добавить', ['class' => 'btn btn-success mt-2']) }}
    {!! Form::close() !!}
@endsection


