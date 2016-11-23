<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Post;

class AdminController extends BaseController
{
    /**
     * Dashboard Action
     * @return Illuminate\Support\Facades\View - view helper
     */
    public function dashboard()
    {
        return view('admin.dashboard', array(
            'posts' => Post::all()
        ));
    }

}
