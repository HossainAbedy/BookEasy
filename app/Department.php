<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Faculty;
use App\Course;
use App\Book;

class Department extends Model
{
    protected $guarded = [];

    public function faculty()
    {
        return $this->hasMany(Faculty::class, 'id');
    }
    public function course()
    {
        return $this->hasMany(Course::class, 'id');
    }
    public function book()
    {
        return $this->hasMany(Book::class, 'id');
    }
}
