@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row justify-content-center">
                        <b>BookEasy</b>
                    </div>    
                </div>
                <div class="card-body">
                    <vue-progress-bar></vue-progress-bar>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                        <p>You are logged in as</p>
                        @if(Auth::user()->user_type == 'admin')
                            <p class="admin">{{Str::upper(Auth::user()->user_type)}}</p>
                        @elseif(Auth::user()->user_type == 'user')
                            <p class="user">{{Str::upper(Auth::user()->user_type)}}</p>
                        @endif
                    </div>    
                    <router-view    :author="{{json_encode($author)}}"
                                    :faculty="{{json_encode($faculty)}}"
                                    :course="{{json_encode($course)}}"
                                    :department="{{json_encode($department)}}"
                    ></router-view>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
