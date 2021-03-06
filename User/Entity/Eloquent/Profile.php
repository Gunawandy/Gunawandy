<?php

namespace Gunawandy\User\Entity\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{	
	protected $table = "profile";
    public $timestamps = false;
	protected $guarded = array("id");

	public function user()
	{
	return $this->belongsTo("Gunawandy\User\Entity\Eloquent\User");
	}
}
