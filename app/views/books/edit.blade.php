@extends('layouts.main')

@section('content')

  <h3 class="thin underline">Editar libro </h3>
  <div class="columns">
  <div class="six-columns">


{{ Form::open(array('route' => array('books.update', $book->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
{{ Form::hidden('actionType', 'update') }}
{{ Form::token(); }}

<!-- titulo -->
<p class="inline-large-label button-height">
{{ Form::label('titulo', 'Título', array('class' => 'label')); }}
{{ $errors->first('titulo', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('titulo', $book->titulo ,array('required')); }}
</p>

<!-- descripcion -->
<p class="inline-large-label button-height">
{{ Form::label('descripcion', 'descripcion', array('class' => 'label')); }}
{{ $errors->first('descripcion', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('descripcion', $book->descripcion, array('required')); }}
</p>

<!-- enlace -->
<p class="inline-large-label button-height">
{{ Form::label('enlace', Lang::get('groups.enlace'), array('class' => 'label')); }}
{{ $errors->first('enlace', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('enlace', $book->enlace, array('required')); }}
</p>

<!-- submit -->
<p class="inline-large-label button-height">
{{ Form::submit( Lang::get('perms.Send!')); }}
</p>
@stop