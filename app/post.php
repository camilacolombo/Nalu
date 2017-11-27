<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{

    protected $fillable =
      [
        'post', 'user_id'
      ];

  public function users()
    {
      return $this->hasOne('App\User');
    }

  public function comments()
    {
      return $this->hasMany('App\Comment');
    }
}
