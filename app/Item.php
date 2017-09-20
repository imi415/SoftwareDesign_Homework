<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
  use SoftDeletes;


  protected $fillable = [
    'name',
    'image_url',
    'description',
    'is_available',
    'available_amount',
    'price',
    'sold_amount'
  ];

  protected $dates = ['deleted_at'];
}
