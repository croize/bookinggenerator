<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datebook extends Model
{
  protected $table = 'table_date_activity';
  public $timestamps = false;
  public function activity()
  {
    return $this->belongsTo('App\Activity','activity_id','id');
  }
}
