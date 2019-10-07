<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BookInfo;
use App\BookImage;

class Book extends Model
{
    protected $guarded = [];

    public function info()
    {
        return $this->hasOne(BookInfo::class, 'id');
    }
}
