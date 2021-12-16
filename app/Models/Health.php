<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
  protected $fillable = [
    'idHealth',
    'mass',
    'height',
    'title',
    'tag',
  ];

  protected $table = 'health';
  protected $primaryKey = 'idHealth';

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
