<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $product_id
 * @property string $product_name
 * @property string $product_specifications
 * @property string $product_category
 * @property int $product_car
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
		'product_car' => 'int',
		'product_price' => 'float',
		'product_rating' => 'int',
	];

	protected $fillable = [
		'product_name',
		'product_specifications',
		'product_category',
		'product_car',
		'product_price',
		'product_rating',
		'product_image'
	];
}
