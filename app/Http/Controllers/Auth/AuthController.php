<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;




class AuthController extends Controller
{

    public function index()
    {
        $cats = DB::table('categories')->get();
        $products=DB::table('produits')->get();
        return view('auth.login',compact(['cats','products']));
    }


    public function registration()
    {
        $cats = DB::table('categories')->get();
        $products=DB::table('produits')->get();
        return view('auth.registration',compact(['cats','products']));
    }


    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)  and Auth::id() == 1 ) {
            request()->session()->put('gestion', "dashboard");
            return redirect()->intended('Admin')
                    ->with('success','You have Successfully loggedin');
        }
        if (Auth::attempt($credentials) ) {
            return redirect()->intended('client/products')
                        ->with('success','You have Successfully loggedin');
        }
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }


    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $this->create($data);

        return redirect("login")->with('success',' You have Successfully signin !');
    }


    public function clientview()
    {

        if(Auth::check() ){
            if(Auth::id() == 1) return redirect("Admin");
            $chariots=DB::table('chariots')->get();

            return view('client',compact('chariots'));
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return \response
     */
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }


}
