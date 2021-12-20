<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;
    protected $policies = [
        Product::class => 'ProductPolicy::class',
        ];
    protected $dates = ['deleted_at'];

    protected $fillable =['id', 'name', 'category_id', 'buyPrice', 'sellPrice', 'quantity'];

    protected $primaryKey = 'id';

    public function categories(){
        return $this->hasMany('App\Category','id');
    }
    public function sells(){
        return $this->belongsTo('App\Sell','id');
    }
    public function commands(){
        return $this->belongsTo('App\Command','id');
    }
    public function users(){
        return $this->belongsTo('App\User','id');
    }
    public function user(){
        return $this->belongsTo('App\User','id');
    }

}
