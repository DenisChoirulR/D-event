<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'gender', 'age', 'user_id', 'phone_number'
	];

	public function booking()
    {
        return $this->hasMany('App\Booking','guest_id');
    }
}
