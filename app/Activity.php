<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
  protected $table = 'table_activity';
  public function book()
  {
    return $this->hasMany('App\Booking');
  }
}
