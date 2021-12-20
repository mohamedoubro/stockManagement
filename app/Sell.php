<?php

namespace App;

use GuzzleHttp\RetryMiddleware;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sell extends Model
{
    //
    use SoftDeletes;

    protected $fillable =['id', 'provider_id', 'product_id', 'comandDate', 'quantity'];
    protected $primaryKey = 'id';
    protected $policies = [
        Sell::class => 'SellPolicy::class',
        ];

    protected $dates = ['deleted_at'];

    public function providers(){
        return $this->hasMany('App\Provider','id');
    }
    public function products(){
        return $this->hasMany('App\Product','id');
    }
    public function users(){
        return $this->belongsTo('App\User','id');
    }
    public function user(){
        return $this->belongsTo('App\User','id');
    }
}
