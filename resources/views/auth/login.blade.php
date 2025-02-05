@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-title">
                    User Login
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="{{route('process_login')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label class="form-control-label">Username</label>
                                <input type="text" class="form-control" requied name="username">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>







@endsection