<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  // login
  public function login() {
    return view('auth.login');
  }

  // masuk
  public function masuk(Request $request)
  {
    $request->validate([
      'email' => 'required',
      'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
      $user = $request->user();
      if ($user->isAdmin()) {
        return redirect(route('adminDashboard'))->withSuccess('Signed in');
      } else if ($user->isCustomer()) {
        return redirect(route('home'))->withSuccess('Signed in');
      }
    }

    return redirect("login")->withErrors('Login details are not valid');
  }

  public function balikHomepage(){
    $userid = Auth::id();
    // $customer = User::where('nama', $nama)->get();
    return view('homepage', ['id' => $userid]);

  }

  // register
  public function register() {
    return view('auth.register');
  }

  // daftar customer
  public function daftar(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required_with:confirm|confirmed|min:6',
      'password_confirmation' => 'same:password|min:6',
    ]);

    $data = $request->all();
    $check = $this->create($data);

    return redirect(route('login'))->withSuccess('Anda berhasil didaftarkan');
  }

  // bikin customer
  public function create(array $data)
  {
    return User::create([
    'name' => $data['name'],
    'email' => $data['email'],
    'password' => Hash::make($data['password']),
    'role' => 'customer',
    ]);
  }

  // signout
  public function signout() {
    Session::flush();
    Auth::logout();

    return Redirect('login');
  }
}
