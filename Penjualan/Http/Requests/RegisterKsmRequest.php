<?php
namespace Gunawandy\Penjualan\Http\Requests;
use App\Http\Requests\Request;

class RegisterKsmRequest extends Request {
	public function authorize() {
		return true;
	}

	public function rules() {
		return [
		 "nama"	     	=>"required",
		 "alamat"	 	=>"required",
		 "tgl_lahir"    =>"required|date",
		 "email"        =>"required",
		 "telp"	        =>"required",
		];
	}
}