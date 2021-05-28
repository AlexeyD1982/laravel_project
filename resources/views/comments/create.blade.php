<h1>Форма комментариев</h1>

{!! Form::open(['action' => 'CommentController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{ Form::label('text', 'Комментарий') }}
    <br>
    {{ Form::textarea('text', '', ['placeholder' => 'Введите комментарий']) }}
</div>

{{ Form::hidden('article_id', $article->id) }}
{{ Form::submit('добавить', ['class' => 'btn btn-success mt-2']) }}

{!! Form::close() !!}
