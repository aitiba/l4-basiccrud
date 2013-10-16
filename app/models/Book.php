<?php
class Book extends Eloquent
{
	protected $table = 'book';
	protected $fillable = array('titulo','descripcion','enlace');

}
