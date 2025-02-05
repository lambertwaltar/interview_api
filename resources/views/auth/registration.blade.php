@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-title">
                    User Registration
                </div>


                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="{{route('process_registration')}}" method="post">
                        @csrf
                            <div class="form-group">
                                <label class="form-control-label">First Name</label>
                                <input type="text" class="form-control" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Surname</label>
                                <input type="text" class="form-control" name="surname" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Phone Number</label>
                                <input type="text" class="form-control" name="phone_number" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">HIV Status</label>
                                <select class="form-control" name="HIV_staus" required>
                                    <option value="Negative">Negative</option>
                                    <option value="Positive">Positive</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Year</label>
                                <input type="number" class="form-control" name="year" required>
                            </div>

                            <hr>
                            <div class="form-group">
                                <label class="form-control-label">Username</label>
                                <input type="text" class="form-control" name="username" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Select Image</label>
                                <input type="file" class="form-control" name="image_path" except="jpg, png, jpeg">
                            </div>
                            

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>







@endsection