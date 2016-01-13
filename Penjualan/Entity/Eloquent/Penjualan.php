<?php
namespace Gunawandy\Penjualan\Entity\Eloquent;
use Illuminate\Database\Eloquent\Model;
Class Penjualan extends Model
{
	protected $table="penjualan";
	public $timestamps=false;
	public $guarded=array('id');

	public function konsumen()
	{
	return $this->belongsTo("Gunawandy\Penjualan\Entity\Eloquent\Konsumen");
	}

	public function isp()
	{
	return $this->belongsTo("Gunawandy\Penjualan\Entity\Eloquent\Isp");
	}
}