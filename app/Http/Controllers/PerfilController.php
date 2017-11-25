<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class PerfilController extends Controller
{
    public function prueba()
    {
      $valor = DB::table('users');
      $valor = $valor->first();
      $valor = collect ($valor);
      $valor->toArray();

      return view('perfil', ['valor' => $valor ]);
    }
}
