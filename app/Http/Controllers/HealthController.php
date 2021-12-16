<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HealthController extends Controller
{
  // health
  public function health(Request $request)
  {
    $id = Auth::id();
    $user = DB::table('users')
        ->where('id', $id)
        ->get(['users.*'])-> first();

    $search = $request->input('search');
    $trivia = DB::table('health')
    ->where('title', 'LIKE', "%{$search}%")
    ->get(['health.*']);

    // $date = DB::table('health')
    // ->where('title', 'LIKE', "%{$search}%")
    // ->get(['health.updated_at'])->first();
    // $dt = $date->toDateString();

    // dd($dt);
    return view('health.health', compact('user', 'trivia'));
  }

  public function calc(Request $request)
  {
    $id = Auth::id();
    $user = DB::table('users')
        ->where('id', $id)
        ->get(['users.*'])-> first();

    $search = $request->input('search');
    $trivia = DB::table('health')
        ->where('title', 'LIKE', "%{$search}%")
        ->get(['health.*']);
    // $date = DB::table('health')
    // ->where('title', 'LIKE', "%{$search}%")
    // ->get(['health.updated_at'])->first();
    // $dt = $date->toDateString();

    // dd($hasil);
    return view('health.health', compact('user', 'trivia'));
  }

  public function article1()
  {
    return view('health.8MustHaveHerbs');
  }

}
