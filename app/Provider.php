<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provider extends Model
{
    //
    use SoftDeletes;
    protected $policies = [
        Provider::class => 'ProviderPolicy::class',
        ];
    protected $dates = ['deleted_at'];
    protected $primaryKey = 'id';
    public function sells(){
        return $this->belongsTo('App\Sell','id');
    }
    public function users(){
        return $this->belongsTo('App\User','id');
    }
    public function user(){
        return $this->belongsTo('App\User','id');
    }
}
