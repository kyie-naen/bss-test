<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function show () {
        $books = Book::get();

        $data = [
            'books' => $books
        ];

        return view('view', $data);
    }

    public function addBook() {
        return view('add-book');
    }

    public function processAddBook() {
        Book::insert([
            'book' => request('buku')
        ]);

        return redirect('/');
    }

    public function removeBook($id) {
        Book::where('id', $id)->delete();

        response()->json(['success' => 'success'], 200);
    }

    public function editBook($id) {
        $books = Book::where('id', $id)->get();
        $data = [
            'books' => $books
        ];

        return view('edit-book', $data);
    }

    public function processEditBook($id) {
        Book::where('id', $id)->update(['book' => request('buku')]);
        return redirect('/');
    }
}
