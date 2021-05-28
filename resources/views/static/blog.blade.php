@extends('layouts.app')

@section('page-title')
    {{ $title }}
@endsection

@section('content')
    @for($i = 0; $i < $blogsCount; $i++)
        <div class="h-100 p-3 mb-3 border bg-light rounded-3">
            <h2>Запись на сайте</h2>
            <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
            <button class="btn btn-success" type="button">Детальнее</button>
        </div>
    @endfor

@endsection
