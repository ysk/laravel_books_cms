<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Book;

class UsersController extends Controller
{
    public function show(int $user_id)
    {

        $user = User::find($user_id);

        return view('userShow', [
            'user' => $user
        ]);
    }
}
