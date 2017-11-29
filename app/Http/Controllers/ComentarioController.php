<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\post;
use App\comment;
use Illuminate\Support\Facades\DB;

class ComentarioController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function mostrarComentario($id)
  {
    $post = DB::table('posts')
                    ->select('post')
                    ->where('id','=',$id)
                    ->get();
    $comentario = DB::table('comments')
                    ->select('comment')
                    ->where('post_id','=',$id)
                    ->get();
    return view('/comentario', [
                'id' => $id,
                'post' => $post,
                'comentario' => $comentario
  ]);
}
 public function guardarComentario(Request $request, $id)
 {
   comment::create([
   'post_id' => $id,
   'comment' => $request['comentario'],
 ]);
 }
}
