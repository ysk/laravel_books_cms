<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\BookPostRequest;
use App\Http\Requests\BookUpdateRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\User;

class BooksController extends Controller
{

    //一覧
    public function index() {

        $books = Book::orderBy('created_at', 'desc')->paginate(10);

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
   
        $file = $request->file('item_img');
        if(!empty($file)){
            $filename = $file->getClientOriginalName();
            $move = $file->move('./upload/', $filename);
        }else{
            $filename = '';
        }

        $books->user_id   = Auth::user()->id;
        $books->item_name   = $request->item_name;
        $books->item_number = $request->item_number;
        $books->item_amount = $request->item_amount;
        $books->item_img    = $filename;
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

    public function update(BookPostRequest $request, Book $books) {

        $file = $request->file('item_img');
        if(!empty($file)){
            $filename = $file->getClientOriginalName();
            $move = $file->move('./upload/', $filename);
        }else{
            $filename = '';
        }

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


    //検索
    public function searchBooks(Request $request)
    {
        $query = Book::query();
        if ($request->filled('keyword')) {
            $keyword = '%' . $this->escape($request->input('keyword')) . '%';
            $query->where(function ($query) use ($keyword) {
                $query->where('item_name', 'LIKE', $keyword);
            });
        }
        $books  = $query->orderBy('created_at', 'desc')->paginate(10);
        $count  = count($books);
        $result = $count ? "{$count}件の検索結果が表示されました" : '検索結果はありませんでした';
        return view('books', [
            'books' => $books,
            'result' => $result,
            ]);
    }

    //不正な値をエスケープする
    private function escape(string $value)
    {
        return str_replace(
            ['\\', '%', '_'],
            ['\\\\', '\\%', '\\_'],
            $value
        );
    }

}
