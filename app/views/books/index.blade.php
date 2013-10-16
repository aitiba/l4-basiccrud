@extends('layouts.main')

@section('content')
<style type="text/css">
  .destino_name {
    display: none;
  }

</style>
{{ link_to_route('books.create', '+ Book') }}
@if($books)
 <h3 class="thin underline">Libros</h3>
<div style="float:right;margin-top:-50px;">
  <a class="button icon-add-user with-tooltip" href="books/create" title="Crear nuevo libro"></a>
</div>
<div class="new-row twelve-columns">
  <table class="simple-table responsive-table responsive-table-on" id="sorting-example2">
    <thead>
      <tr>
        <th class="header headerSortDown hide-on-mobile" scope="col">Titulo </td>
        <th width="30%" scope="col" class="hide-on-mobile header hide-on-mobile">Descripcion </td>
        <th width="30%" scope="col" class="hide-on-mobile header hide-on-mobile">Enlace</td>
      </tr>
    </thead>

    <tbody>
      @foreach ($books as $book)
        <tr>
          <th class="hide-on-mobile">
            {{ $book->titulo }}
          </th>
          <td class="hide-on-mobile">{{ $book->descripcion }}</td>
          <td class="hide-on-mobile">{{ $book->enlace }}</td>
          <td class="center ">
             <!-- view -->
            <span class="button-group">
              {{ Form::open(array('method' => 'GET', 'route' => array('books.show', $book->id))) }}
              <a class="button icon-download" href="books/{{ $book->id }}">View</a>
              {{ Form::close() }}
            </span>

            <span class="button-group">
              <a class="button icon-download" href="books/{{ $book->id }}/edit">Edit</a>
              </span>

             <!-- delete -->
            <span class="button-group">
            {{ Form::open(array('route' => array('books.destroy', $book->id), 'method' => 'delete')) }}
              {{ Form::submit('Delete', array('class' => 'button glossy mid-margin-right')) }}
            {{ Form::close()}}
            </span>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endif
@stop