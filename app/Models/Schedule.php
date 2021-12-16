<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
  protected $fillable = [
    'id',
    'schedule_date',
  ];

  protected $table = 'schedule';
  protected $primaryKey = 'id';
  public $timestamps = false;
  use HasFactory;
}
