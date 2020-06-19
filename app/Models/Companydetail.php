<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\Payment;

/**
 * Class Companydetail
 * 
 * @property int $company_id
 * @property string $company_name
 * @property string $main_address
 * @property string $second_address
 * @property string $city_name
 * @property string $postcode
 * @property string $country
 * @property string $state/province
 * 
 * @property Collection|Payment[] $payments
 *
 * @package App\Models
 */
class Companydetail extends Model
{
	protected $table = 'companydetails';
	protected $primaryKey = 'company_id';
	public $timestamps = false;

	protected $fillable = [
		'company_name',
		'main_address',
		'second_address',
		'city_name',
		'postcode',
		'country',
		'state/province'
	];

	public function payments()
	{
		return $this->hasMany(Payment::class, 'company_id');
	}
}
