<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;


class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->with('message', 'Welcome to the website.');
        }
  
        return back("login")->with('message', 'Login details are not valid');
    }      

    public function customRegistration(Request $request)
    {  
        try{
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required|min:6',
            ]);
            
            $data = $request->all();
            $check = $this->create($data);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->intended('/')->with('message', 'You have Signed');
            }
            
        }
        catch (Exception $e){ 
            return back()->with('message', 'Already a registered user.');
        }
    }


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    

    public function dashboard()
    {
        if(Auth::check()){
            return view('/');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    

    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    public function settingpage() {
        $users = User::where('id', Auth::user()->id)->get();
        return view('auth.setting')->with('users', $users);
    }

    public function changePassword($id, Request $request)
    {
        $users = User::where('id', $id)->get('password');
        foreach($users as $user){
            $password = $user->password;
        }
        $validatedData = $request->validate([
            'password' => 'required',
            'new_password' => 'required',
        ]);
        if(Hash::check($validatedData['password'], $password) == 1){
            User::where('id', $id)->update([
                'password' => Hash::make($validatedData['new_password'])
            ]);
            return response()->json(['success'=>true]);
        }
        else{
            return response()->json(['success'=>false]);
        }

    }

    public function changeProfile($id, Request $request)
    {
        
        $imagenameget = $id.'.png';
        
        if ($request->file('user_img')) {
            $imagePath = $request->file('user_img');
            
            $imagenameget = $id.'.png';
            $imagePath->move(public_path('/assets/images/users/'), $imagenameget);

        }
        try{
            User::where('id', $id)->update([
                'name' => $request->username,
                'email'=> $request->useremail,
                'user_img' => '/assets/images/users/'.$imagenameget
            ]);
    
            return response()->json(['success'=>true]);
        }
        catch(Exception $e){
            return response()->json(['success'=>false]);
        }
        
    }
}