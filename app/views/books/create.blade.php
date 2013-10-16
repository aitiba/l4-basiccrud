@extends('layouts.main')

@section('content')

  <h3 class="thin underline">Crear libro nuevo</h3>
  <div class="columns">
  <div class="six-columns">
{{ Form::open(array('url' => 'books')) }}
{{ Form::token(); }}

<!-- titulo -->
<p class="inline-large-label button-height">
{{ Form::label('titulo', 'Titulo', array('class' => 'label')); }}
{{ $errors->first('titulo', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('titulo', null ,array('required', 'class' => 'input full-width')); }}
</p>

<!-- descripcion -->
<p class="inline-large-label button-height">
{{ Form::label('descripcion', 'Descripcion', array('class' => 'label')); }}
{{ $errors->first('descripcion', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('descripcion', null ,array('required',  'class' => 'input full-width')); }}
</p>

<!-- enlace -->
<p class="inline-large-label button-height">
{{ Form::label('enlace', 'Enlace', array('class' => 'label')); }}
{{ $errors->first('enlace', '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>:message</div>') }}
{{ Form::text('enlace', null ,array('required',  'class' => 'input full-width')); }}
</p>

<!-- submit -->
{{ Form::submit('Crear', array('class' => 'button')); }}
</div>
@stop
