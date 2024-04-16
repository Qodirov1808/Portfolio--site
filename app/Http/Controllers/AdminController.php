<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
  
    public function user($id){
        $user = User::find($id);
       return view('dashboart.adminpanel.userUpdate', compact('user'));
    }
    public function userUpdate(Request $request){
        $request->validate([
            'name' =>'required|string|max:255',
            'password1' => 'required|string|min:8',
            'password2' => 'required|string|min:8',
            'phone' =>'required|string|max:255',
        ]);
    
        $user = User::first();
        $name = $user->password;
        if ($request->password1 != $request->password2) {
            return redirect()->back()->with('error', 'Passwords do not match');
                     
        } else{
             $user->update([
                'name' => $request->name,
                'password' => bcrypt($request->password2),
                'phone' => $request->phone,
                 ]);
        }
   
        return redirect(route('home'));
    }
    
}
