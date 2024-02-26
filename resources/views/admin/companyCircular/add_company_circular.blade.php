@extends('admin.master')
@section('title')
Add Company Circular
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Company Circular</h4>
                    <p class="card-description">

                    </p>
                    <form action="{{ route ('new.company.circular')}}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group ">
                                    <label for="exampleInputEmail1">Company </label>
                                    <div class="d-flex justify-content-between">
                                        <select name="company_id" class="form-control" id="exampleFormControlSelect1">
                                            <option selected>Select Company</option>
                                            @foreach($companies as $company)
                                            <option value="{{$company->id}}">{{$company->company_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Vacancy</label>
                                    <input type="number" class="form-control" name="vacancy"
                                        id="exampleInputUsername1" placeholder="Enter Vacency">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Location</label>
                                    <input type="textarea" class="form-control" name="job_location"
                                        id="exampleInputUsername1" placeholder="Enter job location">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Salary</label>
                                    <input type="text" class="form-control" name="salary"
                                        id="exampleInputUsername1" placeholder="Enter Salary">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Experience</label>
                                    <input type="text-area" class="form-control" name="experience"
                                        id="exampleInputUsername1" placeholder="Enter experience">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Education Requirments</label>
                                    <input type="textarea" class="form-control" name="education_requirments"
                                        id="exampleInputUsername1" placeholder="Enter Education Requirments">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Published Date</label>
                                    <input type="date" class="form-control" name="published_date"
                                        id="exampleInputUsername1" placeholder="Enter published date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Application Deadline</label>
                                    <input type="date" class="form-control" name="application_deadline"
                                        id="exampleInputUsername1" placeholder="Enter Email Address">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Responsibilities Context</label>
                                    <input type="text" class="form-control" name="responsibilities_context"
                                        id="exampleInputUsername1" placeholder="Enter responsibilities context">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Compensation Benefits</label>
                                    <input type="text" class="form-control" name="compensation_other_benefits"
                                        id="exampleInputUsername1" placeholder="Enter compensation other benefits">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Workplace</label>
                                    <input type="text" class="form-control" name="workplace"
                                        id="exampleInputUsername1" placeholder="Enter workplace">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Employment Status</label>
                                    <input type="text" class="form-control" name="employment_status"
                                        id="exampleInputUsername1" placeholder="Enter employment status">
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