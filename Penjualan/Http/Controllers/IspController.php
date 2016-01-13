<?php
namespace Gunawandy\Penjualan\Http\Controllers;

use Gunawandy\Penjualan\Entity\Eloquent\Isp;

use Gunawandy\Penjualan\Http\Requests\IspRequest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IspController extends Controller
{
	public function create()
	{
		$isp= new Isp;
		return view("GunawandyPenjualan::isp/form-addIsp")
		->with("url",url("/isp/store"))
		->with("isp",$isp)
		;
	}

	public function store(IspRequest $request)
	{
		$isp = new Isp;
		$isp->nama			=$_POST['nama'];
		$isp->kuota			=$_POST['kuota'];
		$isp->operator		=$_POST['operator'];
		$isp->kadaluarsa    =$_POST['kadaluarsa'];
		$isp->retailer		=$_POST['retailer'];
		$isp->harga			=$_POST['harga'];
		$isp->save();
		return redirect(url("/isp"));
	}

	public function index()
	{
		return view("GunawandyPenjualan::isp.index", ['isp'=>Isp::all()]);
	}

	public function show() 
	{
		return view("GunawandyPenjualan::isp.isp", ['isp'=>Isp::all()]);
	}

	 public function edit($id) {
		$isp =Isp::find($id);
		return view("GunawandyPenjualan::isp/form-editIsp")
		->with("url",url("/isp/$id/update"))
		->with("isp",$isp)
		;
	}

	public function update(IspRequest $request, $id) {
		$isp= Isp::find($id);
		$isp->nama			=$_POST['nama'];
		$isp->kuota			=$_POST['kuota'];
		$isp->operator		=$_POST['operator'];
		$isp->kadaluarsa    =$_POST['kadaluarsa'];
		$isp->retailer		=$_POST['retailer'];
		$isp->harga			=$_POST['harga'];
		$isp->save();
		return redirect(url("/isp"));
	}

	public function delete($id){
		kartu::destroy($id);
		return redirect(url("/isp"));
	}

}
?>
