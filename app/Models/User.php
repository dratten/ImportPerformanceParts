<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use App\Payment;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $user_id
 * @property string $customer_firstname
 * @property string $customer_lastname
 * @property string $email_address
 * @property Carbon|null $email_verified_at
 * @property int $telephone
 * @property string $fax
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Payment[] $payments
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'user_id';

	protected $casts = [
		'telephone' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'customer_firstname',
		'customer_lastname',
		'email_address',
		'email_verified_at',
		'telephone',
		'fax',
		'password',
		'remember_token'
	];

	public function payments()
	{
		return $this->hasMany(Payment::class, 'customer_id');
	}
}
