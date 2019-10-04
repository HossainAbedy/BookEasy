<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;
use App\Book;
use App\Department;

class Faculty extends Model
{
    protected $guarded = [];

    public function course()
    {
        return $this->hasMany(Course::class, 'id');
    }
    public function book()
    {
        return $this->hasMany(Book::class, 'id');
    }
    public function department()
    {
        return $this->hasOne(Department::class, 'id');
    }
}
