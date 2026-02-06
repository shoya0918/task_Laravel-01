<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show()
    {
        $title = '詳細画面';

        return view('show',['title' => $title]);
    }
}
