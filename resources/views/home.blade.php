@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('author') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="author" class="col-md-4 col-form-label text-md-right">Add Author</label>
                            <div class="col-md-6">
                                <input id="author_id" type="text" class="form-control" name="author">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                            </button>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('faculty') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="faculty" class="col-md-4 col-form-label text-md-right">Add Faculty</label>
                            <div class="col-md-6">
                                <input id="faculty_id" type="text" class="form-control" name="faculty">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                            </button>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('course') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">Add Course</label>
                            <div class="col-md-6">
                                <input id="course_id" type="text" class="form-control" name="course">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                            </button>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('depertment') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="depertment" class="col-md-4 col-form-label text-md-right">Add Depertment</label>
                            <div class="col-md-6">
                                <input id="depertment_id" type="text" class="form-control" name="depertment">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                            </button>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('addbook') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="book" class="col-md-4 col-form-label text-md-right">Add Book</label>
                            <div class="col-md-3">
                                <input id="book" type="text" class="form-control" name="book">
                            </div>
                            <div class="col-md-3">
                                <input id="book" type="number" class="form-control" name="book_info">
                            </div>
                            <div class="form-group">
                                {{-- {!! Form::Label('author', 'Author:') !!} --}}
                                @if(isset($data))
                                    @foreach($data as $value)
                                        <ul>
                                            <li>{{$value}}</li>
                                        </ul>
                                    @endforeach
                                @endif
                                {{-- <select class="form-control" name="item_id">
                                  @foreach($data as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                  @endforeach
                                </select> --}}
                            </div>
                            {{-- <div class="col-md-3">
                                <input id="book" type="number" class="form-control" name="book_info">
                            </div>
                            <div class="col-md-3">
                                <input id="book" type="number" class="form-control" name="book_info">
                            </div>
                            <div class="col-md-3">
                                <input id="book" type="number" class="form-control" name="book_info">
                            </div> --}}
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                            </button>
                        </div>
                    </form>
                    {{-- <form method="POST" action="{{ route('addbookinfo') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="depertment" class="col-md-4 col-form-label text-md-right">Add BookInfo</label>
                            <div class="col-md-2">
                                <input id="author_id" type="number" class="form-control" name="author_id">
                            </div>
                            <div class="col-md-2">
                                <input id="facultie_id" type="number" class="form-control" name="facultie_id">
                            </div>
                            <div class="col-md-2">
                                <input id="course_id" type="number" class="form-control" name="course_id">
                            </div>
                            <div class="col-md-2">
                                <input id="department_id" type="number" class="form-control" name="department_id">
                            </div>
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                            </button>
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
