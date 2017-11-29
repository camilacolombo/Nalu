<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function mostrar()
    {
      return view('post', ['post' => 'Default' ]);
    }

    public function guardapost(Request $request)
    {
        post::create([
        'user_id' => Auth::user()->id,
        'post' => $request['post'],
      ]);
    }
}
