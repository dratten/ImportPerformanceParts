<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\CarModel;
use App\Category;
use App\Payment;

/**
 * Class Product
 * 
 * @property int $product_id
 * @property string $product_name
 * @property string $product_specifications
 * @property int $category_id
 * @property int $car_id
 * @property float $product_price
 * @property int $product_rating
 * @property string $product_image
 *
 * @package App\Models
 */

class Product extends Model
{
	protected $table = 'products';
	protected $primaryKey = 'product_id';
	public $timestamps = false;

	protected $casts = [
		'car_id' => 'int',
		'category_id' => 'int',
		'product_price' => 'float',
		'product_rating' => 'int',
	];

	protected $fillable = [
		'product_name',
		'product_specifications',
		'category_id',
		'car_id',
		'product_price',
		'product_rating',
		'product_image'
	];  
	
	//relationship with CarModel
	public function carmodel(){
		return $this->belongsTo(CarModel::class, 'car_id');
	}


	//relationship with Category
	public function category(){
		return $this->belongsTo(Category::class, 'category_id');
	}

	//relationship with Payments
	public function payments(){
		return $this->hasMany(Payment::class);
	}

}
