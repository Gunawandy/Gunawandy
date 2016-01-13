<?php
namespace Gunawandy\Penjualan\Http\Controllers;
use Gunawandy\Penjualan\Entity\Eloquent\Penjualan;

use App\Http\Controllers\Controller;

class PenjualanController extends Controller
{
	public function create()
	{
		$penjualan= new Penjualan;
		return view("GunawandyPenjualan::penjualan/form-penjualan")
		->with("url",url("/penjualan/store"))
		->with("penjualan",$penjualan)
		;
	}

	public function store()
	{
		$penjualan = new Penjualan;
		$penjualan->konsumen_id	=$_POST['konsumen_id'];
		$penjualan->isp_id		=$_POST['isp_id'];
		$penjualan->status		="Lunas";
		$penjualan->save();
		return redirect(url("/penjualan"));
	
	}

	public function index()
	{
		return view("GunawandyPenjualan::penjualan.index", ['penjualan'=>Penjualan::all()]);
	}

	 public function edit($id) {
		$penjualan =Penjualan::find($id);
		return view("GunawandyPenjualan::penjualan/form-edit")
		->with("url",url("/penjualan/$id/update"))
		->with("penjualan",$penjualan)
		;
	}

		public function update( $id) {
		$penjualan= Penjualan::find($id);
		$penjualan->status	=$_POST['status'];
		$penjualan->save();
		return redirect(url("/penjualan"));

}

	public function delete($id){
		Peminjaman::destroy($id);
		return redirect(url("/penjualan"));
	}

}
?>
