<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;
use App\Faculty;
use App\Course;
use App\Department;

class BookInfo extends Model
{
    protected $guarded = [];

    public function author()
    {
        return $this->hasOne(Author::class,'id');
    }
    public function faculty()
    {
        return $this->hasOne(Faculty::class, 'id');
    }
    public function course()
    {
        return $this->hasOne(Course::class, 'id');
    }
    public function department()
    {
        return $this->hasOne(Department::class, 'id');
    }
}


