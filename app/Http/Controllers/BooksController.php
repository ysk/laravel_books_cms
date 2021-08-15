<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\BookPostRequest;
use App\Http\Requests\BookUpdateRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Book;


class BooksController extends Controller
{

    public function index() {
        $books = Book::orderBy('created_at', 'asc')->get();
        return view('books', [
            'books' => $books
        ]);
    }
    
    public function edit(Book $books) {
        return view('booksedit', [
            'book' => $books
        ]);
    }
    
    public function update(BookUpdateRequest $request, Book $books) {
        $books = Book::find($request->id);
        $books->item_name   = $request->item_name;
        $books->item_number = $request->item_number;
        $books->item_amount = $request->item_amount;
        $books->published   = $request->published;
        $books->save();
        return redirect('/');
    }
    
    public function store(BookPostRequest $request, Book $books) {
        $books->item_name = $request->item_name;
        $books->item_number = $request->item_number;
        $books->item_amount = $request->item_amount;
        $books->published = $request->published;
        $books->save();
        return redirect('/');
    }
        
    public function destroy(Book $books) {
        $books->delete();
        return redirect('/');
    }
    
}
