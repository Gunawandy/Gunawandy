<?php
namespace Gunawandy\User\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Gunawandy\User\Entity\Eloquent\Profile;
use Gunawandy\User\Http\Requests\EditProfileRequest;
use Gunawandy\User\Http\Requests\EditUserRequest;


class ProfileController extends Controller
{
    
    public function index()
    {   if(\Auth::user()->level == "petugas")
            return redirect("/profile");
        else
        return view("GunawandyUser::profile.index", ['profile'=>Profile::all()]);
    }

    
    public function sellerProfile() {
        $profile=Profile::where("user_id", \Auth::user()->id)->paginate(11);
        return view("GunawandyUser::profile.seller")
        ->with("profile", $profile);
    }
    
    public function show($id)
    {
       $profile=Profile::find($id);
        return view("GunawandyUser::profile.show", array("profile"=>$profile));
    }

   
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view("GunawandyUser::profile/form-edit")
        ->with("url",url("/profile/$id/update"))
        ->with("profile",$profile)
        ;
    }

    public function update(EditProfileRequest $request,$id)
    {
        $profile = Profile::find($id);
        $profile->nama      =$_POST['nama'];
        $profile->alamat    =$_POST['alamat'];
        $profile->email     =$_POST['email'];
        $profile->telp      =$_POST['telp'];
        $profile->save();
        return redirect(url("/seller"));
    }

   
    public function delete($id)
    {
        Profile::destroy($id);
        return redirect(url("/seller"));
    }

    public function contact()
    {   
        return view("GunawandyUser::profile.contact", ['profile'=>Profile::all()]);
    }
}
