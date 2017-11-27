<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
  protected $fillable =
    [
      'comment', 'post_id',
    ];

  public function posts()
    {
      return $this->hasOne('App\Post');
    }
}
