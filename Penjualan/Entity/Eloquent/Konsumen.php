<?php

namespace Gunawandy\Penjualan\Entity\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{	
	protected $table = "konsumen";
    public $timestamps = false;
	protected $guarded = array("id");

	public function isp()
	{
		return $this->belongsToMany("Gunawandy\Penjualan\Entity\Eloquent\Isp", "penjualan");
	}
 public function user() {
        return $this->hasOne("Gunawandy\User\Entity\Eloquent\user");
    }
}
