<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PostM as postMn;

class UserController extends Controller
{
    public function index()

    {
        $datall = PostMn::all();
        
    	$Variabel = DB::table('artikel')->get();
 
    	return view('index',['artikel' => $Variabel]);
 
    }
}
