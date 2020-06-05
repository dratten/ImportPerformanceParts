<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 * 
 * @property int $payment_id
 * @property float $product_price
 * @property int $customer_id
 * @property string $customer_name
 * @property float $total_price
 * @property int $product_id
 * @property bool $payment_status
 * @property string $product_name
 * @property int $category_id
 * @property int $company_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Category $category
 * @property Companydetail $companydetail
 * @property User $user
 *
 * @package App\Models
 */
class Payment extends Model
{
	protected $table = 'payments';
	protected $primaryKey = 'payment_id';

	protected $casts = [
		'customer_id' => 'int',
		'product_id' => 'int',
		'payment_status' => 'bool',
		'category_id' => 'int',
		'company_id' => 'int'
	];

	protected $fillable = [
		'product_price',
		'customer_id',
		'payment_status',
		'product_id',
		'category_id',
		'company_id'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function companydetail()
	{
		return $this->belongsTo(Companydetail::class, 'company_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'customer_id');
	}
}
