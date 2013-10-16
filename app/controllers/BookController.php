<?php

class BookController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$books = Book::all();
        return View::make('books.index')->with('books', $books);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('books.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::except('_token');
        //var_dump($data);exit();
        /*$v = $this->perm->validation($data);
        if ( is_object($v) ) {
            return Redirect::route('perms.create')->withErrors($v)->withInput();
        }*/
        
        if ( Book::create($data) )
        {
            return Redirect::route('books.index')->with("flash_message", Lang::get('Book succesfully created!'));
        }
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$book = Book::find($id);
        if (!$book) {
            return Redirect::route('books.index');
        }
        return View::make('books.edit')->with('book', $book);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$book = Book::find($id);

		$book->titulo = Input::get('titulo');
		$book->descripcion = Input::get('descripcion');
		$book->enlace = Input::get('enlace');
		if($book->save()) {
		  return Redirect::route('books.index')->with("flash_message", Lang::get('Book succesfully edited!'));
		}
       // $data['id'] = $id;
        /*$v = $this->perm->validation($data);
        if ( is_object($v) ) {
            return Redirect::route('perms.edit', $id)->withErrors($v)->withInput();
        }*/
        
        return false;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$book = Book::find($id);

		if ($book->delete()){
            return Redirect::route('books.index')->with("flash_message", Lang::get('Book succesfully deleted!'));
        } else {
            return Redirect::route('books.index')->with("flash_message", Lang::get('Book problems to delete!'));
        }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if ($book = Book::findOrFail($id)) 
		{
			return View::make('books.show')->with('book', $book);
		}
		return false;
	}


}