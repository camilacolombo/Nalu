<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class follower extends Model
{
  public function users()
    {
      return $this->hasOne('App\User');
    }
}
