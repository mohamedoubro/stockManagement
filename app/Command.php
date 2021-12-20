<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Command extends Model
{
    //
    use SoftDeletes;
    protected $policies = [
        Command::class => 'CommandPolicy::class',
        ];
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    public function products(){
        return $this->hasMany('App\Product','id');
    }
    public function user(){
        return $this->belongsTo('App\User','id');
    }
    public function users(){
        return $this->belongsTo('App\User','id');
    }
}
