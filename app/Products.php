<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //Model Product
    protected $table = "products";
    public $timestamps = false;
    protected $fillable = ['id','name','description','amount','price_cost','price_resale','providers_id','brands_id','categories_id'];
	/*
    public function category(){
        return $this->BelongsTo(Category::class);
    }
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }
    public function providers(){
        return $this->belongsToMany(Provider::class);
    }
	*/
}
