<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{
  use HasFactory;

  protected $fillable = [
    'label'
  ];

  protected $hidden = [
    'created_at',
    'updated_at',
  ];

  public function posts()
  {
    return $this->belongsToMany(Post::class);
  }
}