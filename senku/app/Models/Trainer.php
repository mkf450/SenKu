<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
  protected $fillable = [
    'id',
    'interest',
    'phone_number',
    'personality',
  ];

  protected $table = 'trainer';
  protected $primaryKey = 'id';
  public $timestamps = false;
  use HasFactory;
}
