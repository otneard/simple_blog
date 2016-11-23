<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class AppController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postModel = new Post();
        $posts = $postModel->getAll();
        return view('static.home', array('posts' => $posts));
    }
}
