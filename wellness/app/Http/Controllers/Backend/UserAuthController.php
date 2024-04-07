<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserAuthController extends Controller
{
    private $entryDate;
    public function __construct()
    {
        $this->entryDate = date("Y-m-d H:i:s");
    }
    public function signup(){
        return view('frontend.register');
    }
    Public function register(Request $request){
        $request -> validate([
            'name'=>'required|max:255',
            'email'=>'required|email|unique:user',
            'password=>min:6|required_with:confirm_password|same:confirm_password',
        ]);
        $param = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        );
        $user = User::create($param);

        // send mail verification in DB
        $code = substr(str_shuffle('1234567890'),0,4);
        $param = array(
            'user_id' => $user->id,
            'verification_code' => $code,
            'created_at' =>$this->entryDate,
            'update_at' =>$this->entryDate,
        );
    }
}
