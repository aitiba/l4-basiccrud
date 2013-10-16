@extends('layouts.main')

@section('content')
<h3 class="thin underline">Ver libro</h3>
  <div class="columns">
  <div class="six-columns">

<!-- titulo -->
  <p class="inline-large-label button-height">
{{ Form::label('titulo', 'Título ', array('class' => 'label')); }}
{{ $errors->first('titulo', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ $book->titulo }}
</p>

<!-- descripcion -->
  <p class="inline-large-label button-height">
{{ Form::label('descripcion', 'Descripción ', array('class' => 'label')); }}
{{ $errors->first('descripcion', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ $book->descripcion }}
</p>

<!-- enlace -->
  <p class="inline-large-label button-height">
{{ Form::label('enlace', 'Enlace ', array('class' => 'label')); }}
{{ $errors->first('enlace', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ $book->enlace }}
</p>

@stop