<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Product;
use App\Payment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $category_id
 * @property string $category_name
 * 
 * @property Collection|Payment[] $payments
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'categories';
	protected $primaryKey = 'category_id';

	public $timestamps = false;

	protected $fillable = [
		'category_name'
	];

	public function products(){
		return $this->hasMany(Product::class, 'category_id');
	}

	public function payments(){
		return $this->hasMany(Payment::class, 'category_id');
	}
}
