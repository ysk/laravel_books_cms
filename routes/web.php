<?php

use App\Book;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

/**
 * 本の一覧
 */
Route::get('/', function () {
    $books = Book::orderBy('created_at', 'asc')->get();
    return view('books',[
        'books' => $books
    ]);
});


/**
* 本を追加 
*/
Route::post('/books', function (Request $request) {
    
    //バリデーション
    $validator = Validator::make($request->all(), [
        'item_name' => 'required|max:255',
    ]);
    //バリデーションエラー
    if($validator->fails()){
        return redirect('/')
                ->withInput()
                ->withErrors($validator);
    }
    
    //Eloquentモデル(登録処理)
    $books = new Book;
    $books->item_name = $request->item_name;
    $books->item_number = $request->item_number;
    $books->item_amount =  $request->item_amount;
    $books->published =  $request->published;
    $books->save();
    return redirect('/');
});

/**
* 本を編集
*/
Route::post('/bookedit/{book}', function (Request $request) {
    //バリデーション
    $validator = Validator::make($request->all(), [
        'item_name' => 'required|max:255',
    ]);
    //バリデーションエラー
    if($validator->fails()){
        return redirect('/')
                ->withInput()
                ->withErrors($validator);
    }
    
    //Eloquentモデル(登録処理)
    $books = Book::find($request->id);
    $books->item_name   = $request->item_name;
    $books->item_number = $request->item_number;
    $books->item_amount = $request->item_amount;
    $books->published   = $request->published;
    $books->save();
    return redirect('/');
});


/**
* 本を削除 
*/
Route::delete('/books/{book}', function (Book $book) {
    $book->delete();
    return redirect('/');
});

