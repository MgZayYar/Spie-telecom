<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Subplan extends Model
{
    use SoftDeletes;
    protected $fillable=['photo','name','plan_id','description','price'];

    public function plan($value='')
    {
    	return $this->belongsTo('App\Plan');
    }
}
