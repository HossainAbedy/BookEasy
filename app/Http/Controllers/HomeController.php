<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Faculty;
use App\Course;
use App\Department;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $author = Author::all()->toArray();
        $faculty = Faculty::all()->toArray();
        $course = Course::all()->toArray();
        $department = Department::all()->toArray();

        $data = [
            'author' => $author,
            'faculty' => $faculty,
            'course' => $course,
            'department' => $department
        ];

        return view('home',$data);
    }
}
