@extends('layouts.app')

@section('page-title')
    {{ $header }}
@endsection

@section('content')
    <div class="jumbotron text-center">
        <h1>Мой блог</h1>
        <p>В данном блоге вы можете ознакомиться с интересными статьями, написать свою или прокомментировать чью-либо. Нам важно ваше мнение!</p>
        <br>
        <p>Для того, чтобы написать свою статью, вам необходимо зарегистрироваться, либо войти, если вы уже зарегистрированы.</p>
{{--        <button class="btn btn-warning">Sign up</button>--}}
    </div>

@endsection
