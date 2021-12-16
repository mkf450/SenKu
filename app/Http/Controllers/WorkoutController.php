<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WorkoutController extends Controller
{
  // workout
  public function workout(Request $request)
  {
    $id = Auth::id();
    $user = DB::table('users')
        ->where('id', $id)
        ->get(['users.*'])-> first();

    $search = $request->input('search');

    $trainer = DB::table('trainer')
    ->where('trainer.nama', 'LIKE', "%{$search}%")
    ->get(['trainer.*']);


    $cari = DB::table('trainer')
    ->join('kelas', 'kelas.trainerid', '=', 'trainer.id')
    ->join('schedule', 'kelas.scheduleid', '=', 'schedule.id')
    ->join('videos', 'videos.id', '=', 'schedule.id')
    ->where('trainer.nama', 'LIKE', "%{$search}%")
    ->orWhere('kelas.description', 'LIKE', "%{$search}%")
    ->orWhere('videos.judul', 'LIKE', "%{$search}%")
    // ->orWhere('b', '=', 1)
    ->get(['kelas.*', 'trainer.*', 'schedule.*', 'videos.*']);

    $kelas = DB::table('kelas')
    ->join('trainer', 'kelas.trainerid', '=', 'trainer.id')
    ->join('schedule', 'kelas.scheduleid', '=', 'schedule.id')
    ->Where('kelas.description', 'LIKE', "%{$search}%")
    ->get(['kelas.*', 'trainer.*', 'schedule.*']);


    // $date = DB::table('health')
    // ->where('title', 'LIKE', "%{$search}%")
    // ->get(['health.updated_at'])->first();
    // $dt = $date->toDateString();

    $video = DB::table('videos')
    ->where('videos.judul', 'LIKE', "%{$search}%")
    ->get(['videos.*']);

    // dd($kelas);
    return view('workout.workout', compact('user', 'trainer', 'kelas', 'video', 'cari'));
  }

}
