<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
  protected $fillable = [
    'id',
    'userid',
    'trainerid',
    'scheduleid',
    'description',
  ];

  protected $table = 'kelas';
  protected $primaryKey = 'id';
  public $timestamps = false;
  use HasFactory;
}
