<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Book;
use App\User;

class MypageController extends Controller
{

    public function show()
    {
        $id   = Auth::id();
        $user = User::find($id);
        
        return view('mypage.profileShow',[

            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {

        $id   = Auth::id();
        $user = User::find($id);

        return view('mypage.profileEdit',[
            'user' => $user,
        ]);
    }

    public function update()
    {

    }

}
