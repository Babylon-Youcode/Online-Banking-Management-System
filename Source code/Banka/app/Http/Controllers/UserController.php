<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
 
    public function AdminProfile()
    {
        return view('/admin/profile');
    }
  
    public function AdminUpdate(Request  $request, $id){
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if($request->image){
            $img = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $img);
            $user->image = $img;
        }
        $save = $user->save();
        if ($save) {
        return back()->with('success','You have successfuly update your profile');
        }else{
            return redirect('/') ;
        }
   }
 public function delete($id)
{
    User::destroy(array('id',$id));
    return redirect('/admin/home')->with('success','You have successfuly Delete the User') ;
}



   public function UserProfile()
   {
       return view('/user/profile');
   }
  
 
   public function UserUpdate(Request  $request, $id){
       $user = User::find($id);
       $user->name = $request->input('name');
       $user->email = $request->input('email');
       if($request->image){
        $img = date('mdYHis').uniqid().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $img);
        $user->image = $img;
    }
       $save = $user->save();
       if ($save) {
       return back()->with('success','You have successfuly update your profile');
       }else{
           return redirect('/') ;
       }
  }
  
  public function crypto()
  {
      return view('/admin/crypto');
  }


  
  protected function create(Request $request)
  {
      $user= new User;
      $user->name =$request->name;
      $user->email =$request->email;
      $user->rip =$this->randString(14);
      $user->password = Hash::make($request->password);
         $user->save();
         return back();
  
  }
  public function randString($length){
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;

}

  
}
