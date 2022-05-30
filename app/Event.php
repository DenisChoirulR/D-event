<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'organization_id', 'event_name', 'category_id', 'image', 'start_date', 'end_date', 'start_time', 'end_time', 'place', 'address', 'event_description', 'account_number', 'contact_person', 'created_at', 'link'
	];

	public function ticket()
    {
        return $this->hasMany('App\Ticket','event_id');
    }

	// public function users()
 //    {
 //        return $this->belongsTo('App\Ticket','user_id');
 //    }
}
