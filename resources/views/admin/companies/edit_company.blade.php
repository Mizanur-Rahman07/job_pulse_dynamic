@extends('admin.master')
@section('title')
Edit Company
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Company Form</h4>
                    <p class="card-description">
                        
                    </p>
                    <form action="{{ route ('update.company')}}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <input type="hidden" name="company_id" value="{{ $companys->id}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Name</label>
                                    <input type="text" class="form-control" name="company_name" value="{{$companys->company_name}}"  id="exampleInputUsername1"
                                        placeholder="Enter Company Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Business</label>
                                    <input type="text" class="form-control" name="company_business" value="{{$companys->company_business}}"  id="exampleInputUsername1"
                                        placeholder="Enter FCompany Business">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Employee List</label>
                                    <input type="text" class="form-control" name="company_emp_list" value="{{$companys->company_emp_list}}"  id="exampleInputUsername1"
                                        placeholder="Enter Employee List">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Address</label>
                                    <input type="text-area" class="form-control" name="company_address" value="{{$companys->company_address}}"  id="exampleInputUsername1"
                                        placeholder="Enter Company Address">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Phone</label>
                                    <input type="text" class="form-control" name="company_phone" value="{{$companys->company_phone}}" 
                                        id="exampleInputUsername1" placeholder="Enter Phone no">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Email</label>
                                    <input type="email" class="form-control" name="company_email" value="{{$companys->company_email}}" 
                                        id="exampleInputUsername1" placeholder="Enter Email Address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company Logo</label>
                                    <input type="file" class="form-control" name="company_logo" id="exampleInputUsername1"
                                        placeholder="Enter company Person Photo">
                                        <img src="{{ asset($companys->company_logo) }}"
                                                style="width:80px; height: 80px; " alt="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Company URL</label>
                                    <input type="text" class="form-control" name="company_web_address" value="{{$companys->company_web_address}}"  id="exampleInputUsername1"
                                        placeholder="Enter Slug">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Slug URL</label>
                                    <input type="text" class="form-control" name="slug" value="{{$companys->slug}}"  id="exampleInputUsername1"
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