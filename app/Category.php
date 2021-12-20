<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //
    use SoftDeletes;

    protected $policies = [
        Category::class => 'CategoryPolicy::class',
        ];

    protected $fillable =['id', 'name'];
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    public function products(){
        return $this->belongsTo('App\Product','id');
    }
    public function user(){
        return $this->belongsTo('App\User','id');
    }
    public function users(){
        return $this->belongsTo('App\User','id');
    }
}
