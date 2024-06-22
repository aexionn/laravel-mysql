<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function show() : View {
        return view ('blog', ['title'=>'Blog', 'name' => 'Linggar']);
    }
}
