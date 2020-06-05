<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

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

	public function payments()
	{
		return $this->hasMany(Payment::class);
	}
}
