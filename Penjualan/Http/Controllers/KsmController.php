<?php
namespace Gunawandy\Penjualan\Http\Controllers;
use Gunawandy\Penjualan\Entity\Eloquent\Konsumen;
use Gunawandy\Penjualan\Entity\Eloquent\Isp;
use Gunawandy\User\Entity\Eloquent\User;

use Illuminate\Http\Request;
use Gunawandy\Penjualan\Http\Requests\RegisterKsmRequest;
use Gunawandy\Penjualan\Http\Requests\EditKsmRequest;
use App\Http\Controllers\Controller;

class KsmController extends Controller
{
    public function create()
    {
        $konsumen= new Konsumen;
        return view("GunawandyPenjualan::konsumen/form-regKsm")
        ->with("url",url("/ksm/store"))
        ->with("konsumen",$konsumen)
        ;
    }

    public function store(RegisterKsmRequest $request)
    {
        $user = new User;
        $user->username =$_POST['username'];
        $user->password =$_POST['password'];
        $user->level ='konsumen';
        $user->save();

        $konsumen = new Konsumen;
        $konsumen->nama      	   =$_POST['nama'];
        $konsumen->alamat          =$_POST['alamat'];
        $konsumen->tgl_lahir       =$_POST['tgl_lahir'];
        $konsumen->email  		   =$_POST['email'];
        $konsumen->telp            =$_POST['telp'];
        $konsumen->user_id         =$user->id;

        $konsumen->save();

        
        return redirect(url("/registered"));
    }

    public function index()
    {   
        return view("GunawandyPenjualan::konsumen.index", ['konsumen'=>Konsumen::all()]);
    }
public function konsumen()
    {   
        return view("GunawandyPenjualan::konsumen.ksm", ['konsumen'=>Konsumen::all()]);
    }
    public function show($id)
    {
       $konsumen=Konsumen::find($id);
        return view("GunawandyPenjualan::konsumen.show", array("konsumen"=>$konsumen));
    }

     public function edit($id)
    {
        $konsumen = Konsumen::find($id);
        return view("GunawandyPenjualan::konsumen/form-edit")
        ->with("url",url("/members/$id/update"))
        ->with("konsumen",$konsumen)
        ;
    }

    public function update(EditKsmRequest $request,$id)
    {
        $konsumen = konsumen::find($id);
        $konsumen->nama      	    =$_POST['nama'];
        $konsumen->alamat           =$_POST['alamat'];
        $konsumen->tgl_lahir        =$_POST['tgl_lahir'];
        $konsumen->email  		    =$_POST['email'];
        $konsumen->telp    		    =$_POST['telp'];
        $konsumen->save();
        return redirect(url("/members"));
    }

    public function delete($id)
    {
        konsumen::destroy($id);
        return redirect(url("/members"));
    }

    public function jual($id){
        $konsumen = Konsumen::find($id);
        $list_isp = Isp::all();
        return view("GunawandyPenjualan::konsumen/form-jual")
        ->with("url",url("/members/$id/prosesjual"))
        ->with("konsumen",$konsumen)
        ->with("list_isp", $list_isp)
        ;
    }

        public function jual2($id){
        $konsumen = Konsumen::find($id);
        $list_isp = Isp::all();
        return view("GunawandyPenjualan::konsumen/form-jual")
        ->with("url",url("/mbr/$id/prosesjual2"))
        ->with("konsumen",$konsumen)
        ->with("list_isp", $list_isp)
        ;
    }

    public function prosesJual($id) {
        $konsumen = Konsumen::find($id);
        $konsumen->waktu_beli=new \DateTime;
        $konsumen->save();
        if(isset($_POST['isp']))
            $konsumen->isp()->sync($_POST['isp']);
        else
            $konsumen->isp()->sync(array());
        return redirect(url("/members"));
    }

        public function prosesJual2($id) {
        $konsumen = Konsumen::find($id);
        $konsumen->waktu_beli=new \DateTime;
        $konsumen->save();
        if(isset($_POST['isp']))
            $konsumen->isp()->sync($_POST['isp']);
        else
            $konsumen->isp()->sync(array());
        return redirect(url("/mbr"));
    }

    public function __construct() {
        $this->middleware('guest', array(
            'only'=>array('create', 'store')
            ));
    } 
}