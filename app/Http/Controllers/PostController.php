<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Http\Requests\NewPost;
use Auth;

class PostController extends Controller
{
    public function getAll()
    {
        return view('admin.posts', array(
            'posts' => Post::all()
        ));
    }

    public function create(NewPost $request)
    {
        $data = array_merge($request->all(), array('author' => Auth::user()->id));
        $postModel = new Post();
        $postModel->new($data);
        return redirect()->route('admin.dashboard');
    }

    public function delete($id)
    {
        Post::destroy($id);
        return redirect()->route('admin.dashboard');
    }
}
