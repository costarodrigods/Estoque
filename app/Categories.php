<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //Model Categories
    protected $table = "categories";
    public $timestamps = false;
    protected $fillable = ['id','name'];
	/*
    public function products(){
        return $this->hasMany(Product::class);
    }
	*/
}
