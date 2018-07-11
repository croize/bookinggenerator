<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'table_order';
    public function activity()
    {
      return $this->belongsTo('App\Activity','activity_id','id');
    }
    public function user()
    {
      return $this->belongsTo('App\Activity','user_id','id');
    }
}
