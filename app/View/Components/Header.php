<?php

namespace App\View\Components;

use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $user = Auth::user();
        $categories = Category::orderBy('sort_no')->get();

        return view('components.header')
            ->with('user', $user)
            ->with('categories', $categories)
        ;
    }
}

