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

    //一覧
    public function index() {


        $books = Book::orderBy('created_at', 'asc')->paginate(5);
       
        //マイページで自分が登録した書籍のみ表示するときは下記
        //$books = Book::where('user_id', Auth::user()->id)->orderBy('created_at', 'asc')->paginate(5);
        
        return view('books', [
            'books' => $books
        ]);
    }

    //登録
    public function create(Book $books) {
        return view('bookstore', [
            'book' => $books
        ]);
    }
    public function store(BookPostRequest $request, Book $books) {
    
        $user = Auth::user();
    
        $books->user_id   = Auth::user()->id;
        $books->item_name   = $request->item_name;
        $books->item_number = $request->item_number;
        $books->item_amount = $request->item_amount;
        $books->published   = $request->published;
        $books->save();
        return redirect('/')->with('message','書籍を登録しました');
    }

    // 編集
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
        return redirect('/')->with('message','書籍を更新しました');
    }

    //削除
    public function destroy(Book $books) {
        $books->delete();
        return redirect('/')->with('message','書籍を削除しました');
    }
    
}
