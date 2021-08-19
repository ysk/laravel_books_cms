<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Book;

class UsersController extends Controller
{
    public function show(int $user_id)
    {

        $auth_id = Auth::id();
        $user  = User::find($user_id);
        $books = Book::where('user_id', $user_id)->get();

        return view('userShow', [
            'books' => $books,
            'user' => $user
        ]);
    }
}


