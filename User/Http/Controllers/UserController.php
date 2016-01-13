<?php
namespace Gunawandy\User\Http\Controllers;

use Gunawandy\User\Entity\Eloquent\User;
use Gunawandy\User\Entity\Eloquent\Profile;
use Gunawandy\User\Http\Requests\RegisterRequest;
use Gunawandy\User\Http\Requests\EditUserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function index()
    {
        if(\Auth::user()->level == "seller")
            return redirect("/user");
        else
        return view("GunawandyUser::user.index", ['user'=>User::all()]);
    }

    public function sellersUser() {
        $user=User::where("id", \Auth::user()->id)->paginate(2);
        return view("GunawandyUser::user.seller")
        ->with("user", $user);
    }

    public function create()
    {
        $user= new User;
        return view("GunawandyUser::user/form-reg")
        ->with("url",url("/user/store"))
        ->with("user",$user)
        ;
    }

    public function store(RegisterRequest $request)
    {
        $user = new User;
        $user->username =$_POST['username'];
        $user->password =$_POST['password'];
        $user->level    ="seller";
        $user->save();
        
        $profile = new Profile;
        $profile->nama      =$_POST['nama'];
        $profile->nip       =$_POST['nip'];
        $profile->alamat    =$_POST['alamat'];
        $profile->email     =$_POST['email'];
        $profile->telp      =$_POST['telp'];
        $profile->user_id   =$user->id;
        $profile->save();
        return redirect(url("/users"));
    }

    public function show($id) {
        $user=User::find($id);
        return view("GunawandyUser::user.show", array("user"=>$user));
    }

    public function edit($id)
    {
         $user = User::find($id);
        return view("GunawandyUser::user/form-edit")
        ->with("url",url("/user/$id/update"))
        ->with("user",$user)
        ;
    }

    public function update(EditUserRequest $request,$id)
    {
        $user = User::find($id);
        $user->username =$_POST['username'];
        $user->password =$_POST['password'];
        $user->save();
        return redirect(url("/users"));
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect(url("/users"));
    }
}