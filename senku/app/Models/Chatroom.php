<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
  protected $fillable = [
    'id',
    'userid',
    'trainerid',
    'chat',
  ];

  protected $table = 'chatroom';
  protected $primaryKey = 'id';
  public $timestamps = false;
  use HasFactory;
}
