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
 * @property float $product_price
 * @property string $product_category
 * @property int $category_id
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';
	protected $primaryKey = 'product_id';
	public $timestamps = false;

	protected $casts = [
		'product_price' => 'float',
		'category_id' => 'int'
	];

	protected $fillable = [
		'product_name',
		'product_specifications',
		'product_price',
		'product_category',
		'category_id'
	];
}
