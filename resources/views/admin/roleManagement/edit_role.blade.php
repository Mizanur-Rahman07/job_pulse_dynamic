@extends('admin.master')
@section('title')
Edit Role
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Role</h4>
                    <p class="card-description">

                    </p>
                    <form action="{{ route ('update.role')}}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <input type="hidden" name="role_id" value="{{ $roles->id}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">User Name</label>
                                    <input type="text" class="form-control" name="user_name" value="{{$roles->user_name}}" id="exampleInputUsername1"
                                        placeholder="Enter User Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">First Name</label>
                                    <input type="text" class="form-control" name="first_name" value="{{$roles->first_name}}" id="exampleInputUsername1"
                                        placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" value="{{$roles->last_name}}" id="exampleInputUsername1"
                                        placeholder="Enter Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Phone No</label>
                                    <input type="text" class="form-control" name="phone_no" value="{{$roles->phone_no}}" id="exampleInputUsername1"
                                        placeholder="Enter Phone No">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Email</label>
                                    <input type="email" class="form-control" name="email_address" value="{{$roles->email_address}}"
                                        id="exampleInputUsername1" placeholder="Enter Email Address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Role</label>
                                    <select name="role" class="form-control" id="exampleFormControlSelect1">
                                    <option selected>{{$roles->role}}</option>
                                        <option value="Super Admin">Super Admin</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Editor">Editor</option>
                                        <option value="Company HR">Company HR</option>
                                        <option value="Candidate">Candidate</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Image</label>
                                    <input type="file" class="form-control" name="image" id="exampleInputUsername1"
                                        placeholder="Enter Role Person Photo">
                                        <img src="{{ asset($roles->image) }}"
                                                style="width:80px; height: 80px; " alt="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Role URL</label>
                                    <input type="text" class="form-control" name="slug" value="{{$roles->slug}}" id="exampleInputUsername1"
                                        placeholder="Enter Slug">
                                </div>

                            </div>
                            <div class="text-left">
                                <button class="btn btn-light">Cancel</button>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection