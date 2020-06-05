<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $comment_id
 * @property int $product_id
 * @property int $customer_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comments';
	protected $primaryKey = 'comment_id';

	protected $casts = [
		'product_id' => 'int',
		'customer_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'customer_id'
	];
}
