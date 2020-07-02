<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class CarModel extends Model
{
    protected $table = 'car_models';
	protected $primaryKey = 'car_id';
	public $timestamps = false;

	protected $casts = [
		'car_id' => 'int'
	];

	protected $fillable = [
		'car_brand',
		'car_model',
		'car_code',
    ];
    
    public function products(){
        return $this->hasMany(Product::class);
    }
}
