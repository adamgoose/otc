<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Student extends Eloquent
{

    protected $fillable = [
      'name',
      'email',
      'comments',
    ];

    public function getGravatarAttribute()
    {
        return 'http://www.gravatar.com/avatar/' . md5($this->email);
    }
}