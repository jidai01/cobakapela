<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main()
    {
        $title = "Main";
        $content = "";
        return view('main', compact('title', 'content'));
    }
}
