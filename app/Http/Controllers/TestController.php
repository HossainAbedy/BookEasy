<?php

namespace App\Http\Controllers;
use App\Author;
use App\Faculty;
use App\Course;
use App\Department;
use App\Book;
use App\BookInfo;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function addauthor(Request $request)
    {
        //dd($request->author);
        $data = [
            'name' => $request->author,
            'author_code' => rand(1,99),
        ];
        Author::create($data);
        return redirect('/home');
    }
    public function addfaculty(Request $request)
    {
        // dd($request->toArray());
        $data = [
            'name' => $request->faculty,
            'facultie_code' => rand(1,99),
        ];
        Faculty::create($data);
        return redirect('/home');
    }
    public function addcourse(Request $request)
    {
        $data = [
            'name' => $request->course,
            'course_code' => rand(1,99),
        ];
        Course::create($data);
        return redirect('/home');
    }
    public function adddepertment(Request $request)
    {
        $data = [
            'name' => $request->depertment,
            'department_code' => rand(1,99),
        ];
        Department::create($data);
        return redirect('/home');
    }
    public function addbook(Request $request)
    {
        $data = [
            'name' => $request->book,
            'book_info' => $request->book_info,
            'book_code' => rand(1,99),
            'version' => rand(0.1,.99),
            'price' => rand(100,900),
        ];
        Book::create($data);
        $info = [
            'author_id' => $request->author_id,
            'facultie_id' => $request->facultie_id,
            'course_id' => $request->course_id,
            'department_id' => $request->department_id,
        ];
        BookInfo::create($info);
        return redirect('/home');
    }
    public function addbookinfo(Request $request)
    {
        // dd($request->toArray());
        // $data = [
        //     'author_id' => $request->author_id,
        //     'facultie_id' => $request->facultie_id,
        //     'course_id' => $request->course_id,
        //     'department_id' => $request->department_id,
        // ];
        $result = BookInfo::with('author','faculty','course','department')->get();
        dd($result->toArray());
        BookInfo::create($data);
        return redirect('/home');
    }
}
