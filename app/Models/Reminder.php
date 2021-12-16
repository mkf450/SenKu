<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
  protected $fillable = [
    'id',
    'userid',
    'alarm_date',
    'activity',
  ];

  protected $table = 'reminder';
  protected $primaryKey = 'id';
  public $timestamps = false;
  use HasFactory;
}
