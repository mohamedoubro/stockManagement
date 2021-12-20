<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    //
    use SoftDeletes;
    protected $policies = [
        Company::class => 'CompanyPolicy::class',
        ];

    protected $fillable =['id', 'name', 'image', 'email', 'phone', 'adress','specialty','content'];

    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    
    public function user(){
        return $this->belongsTo('App\User','id');
    }
    public function users(){
        return $this->belongsTo('App\User','id');
    }
    
}
