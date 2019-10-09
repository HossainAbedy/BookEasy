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
        return $this->belongsTo(Author::class,'id');
    }
    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'id');
    }
}


