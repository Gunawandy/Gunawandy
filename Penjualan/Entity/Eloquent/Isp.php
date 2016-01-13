<?php
namespace Gunawandy\Penjualan\Entity\Eloquent;
use Illuminate\Database\Eloquent\Model;

Class Isp extends Model
{
	protected $table="isp";
	public $timestamps=false;
	public $guarded=array('id');

	function konsumen()
	{
		return $this->belongsToMany("Gunawandy\Penjualan\Entity\Eloquent\Konsumen", "penjualan");
	}

}