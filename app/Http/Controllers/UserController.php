<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\User;
use App\Http\Requests\MyProfile;

class UserController extends Controller
{

    public function myProfile()
    {
        return view('user.profile', ['user' => Auth::user()]);
    }

    public function updateProfile(MyProfile $request)
    {
        $user = User::find(Auth::user()->id);
        if (!$user) {
            return redirect()->route('user.profile');
        }
        // update user data
        return redirect()->route('user.profile');
    }

    /**
     * Get all users - admin page used for users CRUD
     * @return Illuminate\Support\Facades\View - view helper
     */
    public function getAll()
    {
        return view('admin.users', array(
            'users' => User::all()
        ));
    }
}
