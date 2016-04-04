<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Resource extends Eloquent
{

    protected $fillable = [
      'title',
      'url',
      'description',
    ];

}