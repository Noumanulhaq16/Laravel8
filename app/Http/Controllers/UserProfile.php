<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Facade\Ignition\Solutions\MakeViewVariableOptionalSolution;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfile extends Controller
{
    function profilesetting()
    {
        return view('pages.profile_setting');
    }
    function updateprofile(Request $req)
    {
        // dd($req);
        $controlls = $req->all();
        // $rules=array(
        //     "first_name"=>"required",
        //     "last_name"=>"required",
        //     "email"=>"required|unique:users,email,".Auth::guard('user')->user()->id,
        //     "image"=>"nullable|image"
        // );

        // $validator=Validator::make($controlls,$rules);
        // if ($validator->fails()) {
        //     // dd($validator);
        //     return redirect()->back()->withErrors($validator)->withInput($controlls);
        // }
        // else{
        // dd($req);
        $updateuser = User::find(Auth::id());
        // dd($updateuser);
        $updateuser->name = $req->name;
        $updateuser->phone = $req->phone;
        $updateuser->company = $req->company;
        $updateuser->language = $req->language;
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $filename = time() . $file->getClientOriginalName();
            $path = public_path("/uploads/user/profile/");
            $file->move($path, $filename);
            $updateuser->image = $filename;
        }
        $updateuser->save();
        // dd($updateuser);

        return redirect()->back()->withSuccess('User Profile Successfully Updated');
        // }
    }
    public function changePassword(Request $request)
    {
        $controlls = $request->all();
        // dd($controlls);

        $rules =
            [
                "newpassword" => "required|min:8",
                "confirm_password" => "required|same:newpassword",
                "currentpassword" => "required"
            ];
        $validator = Validator::make($controlls, $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($controlls);
        }
        $user_id = Auth::user()->id;
        if (Hash::check($request->currentpassword, Auth::user()->password)) {
            $user = User::find($user_id);
            $user->password = Hash::make($request->newpassword);
            $user->confirm_password = Hash::make($request->confirm_password);
            $user->save();
        } else {
            return redirect()->back()->withErrors(["current_password" => 'Current Password Not Matched...!']);
        }
        return redirect()->back()->withSuccess('Password Successfully Updated');

        // dd(Auth::user()->password);
        // $currentpassword = Auth::user()->password;
        // if (Hash::check($request->currentpassword, Auth::user()->password)
        // {
        //     $user = User::find($user_id);
        //     $user->password = Hash::make($request->newpassword);
        //     // dd($ob_user);
        //     $user->save();
        // } else {
        //     return redirect()->back()->with(["current_password" => 'Current Password Not Matched...!']);
        // }
        // return redirect()->back()->withSuccess('Password Successfully Updated');
    }
}
