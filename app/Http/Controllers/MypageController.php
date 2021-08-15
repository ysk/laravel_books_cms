<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\profileUpdateRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
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

    public function edit()
    {

        $id   = Auth::id();
        $user = User::find($id);

        return view('mypage.profileEdit',[
            'user' => $user,
        ]);
    }

    public function update(profileUpdateRequest $request, User $user) {
        $id   = Auth::id();
        $user = User::find($id);
        $user->name   = $request->name;
        $user->email = $request->email;
        $user->text = $request->text;
        $user->url   = $request->url;
        $user->save();
        return redirect('/mypage/show')->with('message','書籍を更新しました');
    }

}
