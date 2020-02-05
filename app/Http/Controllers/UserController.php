<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use \App\User;
use \App\Post;

class UserController extends Controller
{
    //
    public function getLoginForm(){
    	return view('login.loginForm');
    }

    public function doLogin(Request $req){
    	if (\Auth::attempt(['email' => $req->email, 'password' => $req->password], $req->remember))
        {
         	return redirect('admin');
        }else{
        	return back()->with('message', 'your email and password is not correct. Please try again !');
        }
    }

    // register new users
    public function getUserList(Request $req){
    	$users = User::all();
    	return view('admin.users.userList', compact('users'));
    }

    public function getResponeData($viewName){

       if ($viewName == 'user') {
            $data = [];
            foreach (User::all() as $key => $value) {
                $data[] = [
                    'username' => $value['username'],
                    'phone' => $value['phone'],
                    'email' => $value['email']
                ];
            }      
            // var_dump($data);
            return response()->json(['data'=>$data]);
           
       }else{
            return response()->json(['data' => Post::all()]);
       }
        // return response()->json(['data' => 'hello']);
    }


    public function getUserForm(){
    	return view('admin.users.userForm');
    }

    public function addUserData(Request $req){
    	if (!User::exitEmail($req->email)) {
    		$addu = new User;
	    	$addu->username = $req->username;
	    	$addu->fullname = $req->fullname;
	    	$addu->password = bcrypt($req->password);
	    	$addu->text_password = $req->password;
	    	$addu->email = $req->email;
	    	$addu->phone = $req->phone;
	    	if ($addu->save()) {
	    		return response()
	        	->json(['message' => 'Save Success', 'status' => 1]);
	    	}      
    	}else{
    		return response()
	        	->json(['message' => 'Your email already exits', 'status' => 0]);
    	}
    }

    public function editUserData($id){
    	$user = User::find($id);
    	return view('admin.users.userEditForm', compact('user'));
    }

    public function updateUserData(Request $req){
		$addu = User::find($req->eid);
    	$addu->username = $req->username;
    	$addu->fullname = $req->fullname;
    	$addu->password = bcrypt($req->password);
    	$addu->text_password = $req->password;
    	$addu->email = $req->email;
    	$addu->phone = $req->phone;
    	if ($addu->save()) {
    		return response()
        	->json(['message' => 'Update Success', 'status' => 1]);  
    	}      
    }

    public function destroy(Request $req){
    	if (User::find($req->dataId)->delete()) {
    		return response()
	        	->json(['message' => $req->dataId, 'status' => 1]);
    	}
    }

    public function signout(){
		\Auth::logout();
		return redirect('/');
    }
}
