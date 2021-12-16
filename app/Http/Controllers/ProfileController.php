<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProfileController extends Controller
{
  public function profile()
  {
    $id = Auth::id();

    $user = DB::table('users')
        ->where('id', $id)
        ->get(['users.*'])-> first();

    // dd($user);
    // return view('profile.profile', ['users' => $user]);
    return view('profile.profile', compact('user'));
  }

  public function profileUpdate(Request $request)
  {
    $id = Auth::id();
    $tinggi = $user = DB::table('users')->where('id', $id)->get(['users.tinggi'])->first();
    $berat = $user = DB::table('users')->where('id', $id)->get(['users.berat'])->first();
    // dd($tinggi);

    $update = User::find($id)->update($request->all());
    return redirect()->route('profile')->withSuccess('Data profile telah diperbaharui');
    // dd($user);
    // return view('profile.profile', ['users' => $user]);
    // return view('profile.profile', compact('user'));
  }

  public function reminder()
  {
    $id = Auth::id();

    $user = DB::table('users')
        ->where('id', $id)
        ->get(['users.*'])-> first();
        
    return view('profile.reminder', compact('user'));
  }
}
