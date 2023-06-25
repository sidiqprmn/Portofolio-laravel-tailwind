<?php

namespace app\Http\Controllers;

use App\Models\User as nulla;
use App\Models\new_model;
use App\Models\PostM;
use Illuminate\Http\Request;

class DatabasesController extends Controller
{
    public function index()
    {
        $users = nulla::latest()->get();
        return view('user.index', compact('users'));
    }
    
    // public function create()
    // {
    //     return view('posts.login');
    // }
}
