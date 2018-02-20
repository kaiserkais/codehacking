<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = '/images/';

    protected $fillable = ['file'];


    // function with laravel
    public function getFileAttribute($photo) {
        return $this->uploads . $photo;
    }

}
