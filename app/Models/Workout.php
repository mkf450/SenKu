<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
  protected $fillable = [
    'id',
    'userid',
    'workout_date',
    'description',
  ];

  protected $table = 'workout';
  protected $primaryKey = 'id';
  public $timestamps = false;
  use HasFactory;
}
