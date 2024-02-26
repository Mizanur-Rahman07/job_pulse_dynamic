@extends('admin.master')
@section('title')
Add Company
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Company</h4>
                    <p class="card-description">

                    </p>
                    <form action="{{ route ('new.company')}}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Name</label>
                                    <input type="text" class="form-control" name="company_name" id="exampleInputUsername1"
                                        placeholder="Enter Company Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Business</label>
                                    <input type="text" class="form-control" name="company_business" id="exampleInputUsername1"
                                        placeholder="Enter FCompany Business">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Employee List</label>
                                    <input type="text" class="form-control" name="company_emp_list" id="exampleInputUsername1"
                                        placeholder="Enter Employee List">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Address</label>
                                    <input type="text-area" class="form-control" name="company_address" id="exampleInputUsername1"
                                        placeholder="Enter Company Address">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Phone</label>
                                    <input type="text" class="form-control" name="company_phone"
                                        id="exampleInputUsername1" placeholder="Enter Phone no">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Email</label>
                                    <input type="email" class="form-control" name="company_email"
                                        id="exampleInputUsername1" placeholder="Enter Email Address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Logo</label>
                                    <input type="file" class="form-control" name="company_logo" id="exampleInputUsername1"
                                        placeholder="Enter company Person Photo">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company URL</label>
                                    <input type="text" class="form-control" name="company_web_address" id="exampleInputUsername1"
                                        placeholder="Enter Slug">
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputUsername1">Slug URL</label>
                                    <input type="text" class="form-control" name="slug" id="exampleInputUsername1"
                                        placeholder="Enter Slug">
                                </div> -->

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