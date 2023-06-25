<?php

namespace app\Http\Controllers;

use App\Models\User as null;
use App\Models\new_model;
use App\Models\PostM;
use Illuminate\Http\Request;

class DatabasesController extends Controller
{
    public function index()
    {
        $users = null::latest()->get();
        return view('user.index', compact('users'));
    }
    
    // public function create()
    // {
    //     return view('posts.login');
    // }
}
