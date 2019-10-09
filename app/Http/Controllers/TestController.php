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
        // $result = Book::with(['info' => function($q){
        //     $q->with('course.faculty','course.department');
        // },'info.author' => function($q){
        //     $q->join('book_infos','info.author_id','author.id')
        //       ->select('name')
        //       ->where('authors.id','book_infos.author_id');
        // }])->get()->toArray();
        $result = Book::join('book_infos','book_infos.id','=','books.book_info')
                ->join('authors','authors.id','=','book_infos.author_id')
                ->join('faculties','faculties.id','=','book_infos.faculty_id')
                ->join('departments','departments.id','=','book_infos.department_id')
                ->join('courses','courses.id','=','book_infos.course_id')
                ->select('books.name','books.image','books.version','books.publication','books.price','books.created_at',
                        'authors.name as author_name','faculties.name as faculty_name','courses.name as course_name','departments.name as department_name')
                ->get()
                ->toArray();
        return response()->json(['status'=>'success','data'=>$result]);

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
        // dd($request->toArray());
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $info = [
            'author_id' => $request->author_id,
            'faculty_id' => $request->faculty_id,
            'course_id' => $request->course_id,
            'department_id' => $request->department_id,
        ];
        $book=BookInfo::create($info);
        $data = [
            'name' => $request->name,
            'book_info' => $book->id, 
            'book_code' => rand(1,99),
            'version' => $request->version,
            'price' => $request->price,
            'publication' => $request->publication,
            'image' => $imageName   
        ];
        Book::create($data);
        return redirect('/home');
    }
}
