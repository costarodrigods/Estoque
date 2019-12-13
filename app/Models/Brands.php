<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    /*Model Brands */
    protected $table = "brands";
    public $timestamps = false;
    protected $fillable = ['id','name'];
	/*
    public function products(){
        return $this->belongsToMany(Product::class);
    }
    public function providers(){
        return $this->belongsToMany(Provider::class);
    }
	*/
}
