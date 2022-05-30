<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'logo', 'description', 'user_id'
	];

	public function event()
    {
        return $this->hasMany('App\Event','organization_id');
    }
}
