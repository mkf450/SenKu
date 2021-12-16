<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  protected $fillable = [
    'id',
    'judul',
    'durasi',
  ];

  protected $casts = [
    'durasi' => 'hh:mm:ss'
  ];

  // protected $table = 'health';
  protected $primaryKey = 'id';

  /**
   * The name of the "created at" column.
   *
   * @var string
   */
  const CREATED_AT = 'post_date';

  /**
   * The name of the "updated at" column.
   *
   * @var string
   */
  const UPDATED_AT = 'update_date';

  use HasFactory;
}
