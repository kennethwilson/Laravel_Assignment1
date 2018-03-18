<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
class UserControl extends Controller
{
  protected $user;
  public function __construct(UserModel $user) // dependency injection
  {
    $this->user = $user;
  }
    public function register(Request $request)
    {
      $user = [
        "name"     => $request->name,
        "email"    => $request->email,
        "password" => md5($request->pass)
      ];

      $add = $this->user->create($user);
      if($add)
      {
        return "Successfully added!";
      }
      else {
        return "Failed";
      }
    }
    public function all()
    {
      $users = $this->user->all(); //select * from user
      return view("all")->with('members',$users);
    }
    public function update($id)
    {
      $users = $this->user->find($id);
      return view("updateform")->with('members',$users);
    }
    public function find($id)
    {
      $user = $this->user->find($id);
      //$user = $this->user->where("id","=",$id);
      return $user;
    }
    public function delete($id)
    {
      $user = $this->user->where('id',$id) ->delete();
      return "Delete Successful";
    }
    public function updaterecord(Request $request,$id)
    {
      $query = $this->user->where('id',$id)->find($id);
      if($request->pass == $query->pass)
      {
        $query->name =$request->name;
        $query->email=$request->email;
        $query->password =$request->pass;
      }
      else {
        $query->name =$request->name;
        $query->email=$request->email;
        $query->password = md5($request->pass);
      }
      $update =  $query->save();

      if($update)
      {
        return "Successfully updated!";
      }
      else {
        return "Failed";
      }
  }
}
