<?php

namespace App\Http\Controllers;

use App\Http\Requests\accounting;
use App\Models\User;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public static function buatAkun(accounting $req){
        $data = $req->validate(accounting::rules());

        User::create([
            "name"=> $data["name"],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect()->route("login");
    }

    public function doLogout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("home");
    }
    public function doLogin(Request $req){
        $data = $req->validate([
            "email"=>"required|email" ,
            "password"=>"required|min:6"
        ]);
        $email= $req->input("email");


        $validator = validator()->make($data, [
            "email" => "required|email"
        ]);

        try {
            $user = User::where('email', $data)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            $errorMessage = "User not found.";
            $validator->errors()->add('email', $errorMessage);
            return back()->withErrors($validator)->withInput();
        }

        if (auth()->attempt($data)){
            return redirect()->route("home");
        } else {
            return redirect()->route("login")->with("error","login error please try again");
        }
    }



    ##main page
    public function login(){
        if(Auth::check()){
            return redirect()->route("home");
        } else {
            return  view("user.loginv2");
        }
    }

    public static function register(){
        return view("user.registerv2");
    }

    public static function forgotpw() {
        return view("user.password-request");
    }

    /**
     * @throws BindingResolutionException
     */
    public static function reqpw(Request $request){
        $data = $request->validate([
            "email"=>"required|email"
        ]);
        $email= $request->input("email");


        $validator = validator()->make($data, [
            "email" => "required|email"
        ]);

        try {
            $user = User::where('email', $data)->firstOrFail();
            return redirect()->route("pw-view",$user->id);
        } catch (ModelNotFoundException $e) {
            $errorMessage = "User with email '$email' not found.";
            $validator->errors()->add('email', $errorMessage);
            return back()->withErrors($validator)->withInput();
        }

    }

    public static function userPanel(){

    }

    public static function pwView($id){
        return view("user.password-change",["id"=>$id]);
    }

    public function pwChange(Request $request, $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        // Validate the request
        $request->validate([
            'pwFirst' => 'required', // Add more validation rules if necessary
            'pwSecond' => 'required|same:pwFirst', // Ensure new password matches the first password
        ]);

        // Check if the old password matches the user's current password
        if (!Hash::check($request->input('pwFirst'), $user->password)) {
            return redirect()->back()->with('error', 'Old password is incorrect');
        }

        // Update the user's password
        $user->password = Hash::make($request->input('pwSecond'));
        $user->save();

        return redirect()->route('login')->with('success', 'Password changed successfully');
    }
}
