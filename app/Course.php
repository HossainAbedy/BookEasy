<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Faculty;
use App\Department;
use App\Book;

class Course extends Model
{
    protected $guarded = [];

    public function faculty()
    {
        return $this->hasOne(Faculty::class, 'id');
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
