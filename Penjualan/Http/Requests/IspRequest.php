<?php
namespace Gunawandy\Penjualan\Http\Requests;
use App\Http\Requests\Request;

class IspRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		'nama'    		=>"required",
		'kuota'         =>"required",
		'operator' 		=>"required",
		'kadaluarsa' 	=>"required|date",
		'retailer' 		=>"required",
		'harga'			=>"required|numeric",
		];
	}
}