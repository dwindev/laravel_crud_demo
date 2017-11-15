<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

    public function index(Request $request)
    {
        $books = Book::all();
        return view('book.index', ['books' => $books]);
    }

    public function create(Request $request)
    {
        $book = Book::create($request->all());
        return back();
    }

    public function getBooks(Request $request)
    {
        return Book::all();
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('book.edit', ['book' => $book]);
    }

    public function update(Request $request, $id)
    {
        $book = Book::where('id', $id)
        ->update($request->only('name','author'));
        return redirect('/view/books');
    }

    public function destroy(Request $request)
    {
        $book = Book::find($request->id)->delete();
        return back();
    }
}
