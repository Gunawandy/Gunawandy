<?php
namespace Gunawandy\Penjualan\Http\Requests;
use App\Http\Requests\Request;

class EditKsmRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		 "nama"	     	=>"required",
		 "alamat"	 	=>"required",
		 "tgl_lahir"    =>"required|date",
		 "email"        =>"required|email",
		 "telp"	        =>"required|numeric",
		];
	}
}