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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-center">
                        You are logged in!
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
