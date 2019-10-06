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
    public function getbook(){
        return $result = Book::with('info','info.author','info.faculty','info.course','info.department')->get()->toArray();
    }
    public function addauthor(Request $request)
    {
    //    dd($request->toArray());
        $data = [
            'name' => $request->name,
            'author_code' => rand(1,99),
        ];
        Author::create($data);
        return redirect('/home');
    }
    public function addfaculty(Request $request)
    {
        // dd($request->toArray());
        $data = [
            'name' => $request->name,
            'faculty_code' => rand(1,99),
        ];
        Faculty::create($data);
        return redirect('/home');
    }
    public function addcourse(Request $request)
    {
        //dd($request->toArray());
        $data = [
            'name' => $request->name,
            'course_code' => rand(1,99),
            'faculty_id' => $request->faculty_name['id'],
            'department_id' => $request->department_name['id'],
        ];
        Course::create($data);
        return redirect('/home');
    }
    public function adddepertment(Request $request)
    {
        $data = [
            'name' => $request->name,
            'department_code' => rand(1,99),
        ];
        Department::create($data);
        return redirect('/home');
    }
    public function addbook(Request $request)
    {
        //dd($request->toArray());
        $info = [
            'author_id' => $request->book_info['author_name']['id'],
            'faculty_id' => $request->book_info['faculty_name']['id'],
            'course_id' => $request->book_info['course_name']['id'],
            'department_id' => $request->book_info['department_name']['id'],
        ];
        $book=BookInfo::create($info);
        $data = [
            'name' => $request->name,
            'book_info' => $book->id,
            'book_code' => rand(1,99),
            'version' => $request->version,
            'price' => $request->price,
        ];
        Book::create($data);
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
