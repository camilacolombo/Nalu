<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\post;
use App\comment;
use Illuminate\Support\Facades\DB;

class TableroController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function verpost()
  {
    $user_id = Auth::user()->id;
    $posteos = DB::table('posts')
                    ->select('post','id')
                    ->where('user_id','=',$user_id)
                    ->get();

    return view('tablero', [
      'posteos' => $posteos,
      ]);
  }

  public function guardapost(Request $request)
  {
      post::create([
      'user_id' => Auth::user()->id,
      'post' => $request['post'],
    ]);
  }
}
