<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'guest_id', 'status', 'proof_of_payment', 'uploaded_at', 'code'
	];

	public function booking_detail()
    {
        return $this->hasMany('App\BookingDetail','booking_id');
    }
}
