<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class PageController extends Controller
{
    public function home()
    {

        // dd(Lang::get('English'));
        // dd(trans('English'));
        // dd(__('English'));

        return view('home');
    }

    public function about()
    {
        return view('about');
    }
}
