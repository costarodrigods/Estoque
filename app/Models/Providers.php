<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
    //Model Provider
    protected $table = "providers";
    public $timestamps = false;
    protected $fillable = ['id','name'];
	/*
    public function products(){
        return $this->belongsToMany(Product::class);
    }
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }
	*/
}

