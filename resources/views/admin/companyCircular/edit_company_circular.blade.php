@extends('admin.master')
@section('title')
Edit Company Circular
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Company Circular</h4>
                    <p class="card-description">

                    </p>
                    <form action="{{ route ('update.company.circular')}}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <input type="hidden" name="circular_id" value="{{ $companys->id}}">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group ">
                                    <label for="exampleInputUsername2">Company </label>
                                    <div class="d-flex justify-content-between">
                                        <select name="company_id" class="form-control" value="{{$companys->company_id}}" id="exampleFormControlSelect1">
                                            <option selected>Select Company</option>
                                            @foreach($companies as $company)
                                            <option value="{{$company->id}}" <?php if (!empty($company->id) && $company->id ==
                                                $companys->company_id) {
                                                echo 'selected';
                                                }
                                                ?>>{{$company->company_name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername2">Vacancy</label>
                                    <input type="number" class="form-control" name="vacancy" value="{{$companys->vacancy}}" id="exampleInputUsername2"
                                        placeholder="Enter Vacency">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername2">Location</label>
                                    <input type="textarea" class="form-control" name="job_location" value="{{$companys->job_location}}"
                                        id="exampleInputUsername2" placeholder="Enter job location">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername2">Salary</label>
                                    <input type="text" class="form-control" name="salary" value="{{$companys->salary}}" id="exampleInputUsername2"
                                        placeholder="Enter Salary">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername2">Experience</label>
                                    <input type="text-area" class="form-control" name="experience" value="{{$companys->experience}}"
                                        id="exampleInputUsername2" placeholder="Enter experience">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername2">Education Requirments</label>
                                    <input type="textarea" class="form-control" name="education_requirments" value="{{$companys->education_requirments}}"
                                        id="exampleInputUsername2" placeholder="Enter Education Requirments">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputUsername2">Published Date</label>
                                    <input type="date" class="form-control" name="published_date" value="{{$companys->published_date}}"
                                        id="exampleInputUsername2" placeholder="Enter published date">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername2">Application Deadline</label>
                                    <input type="date" class="form-control" name="application_deadline" value="{{$companys->application_deadline}}"
                                        id="exampleInputUsername2" placeholder="Enter Email Address">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername2">Responsibilities Context</label>
                                    <input type="text" class="form-control" name="responsibilities_context" value="{{$companys->responsibilities_context}}"
                                        id="exampleInputUsername2" placeholder="Enter responsibilities context">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername2">Compensation Benefits</label>
                                    <input type="text" class="form-control" name="compensation_other_benefits" value="{{$companys->compensation_other_benefits}}"
                                        id="exampleInputUsername2" placeholder="Enter compensation other benefits">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername2">Workplace</label>
                                    <input type="text" class="form-control" name="workplace"  value="{{$companys->workplace}}" id="exampleInputUsername2"
                                        placeholder="Enter workplace">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername2">Employment Status</label>
                                    <input type="text" class="form-control" name="employment_status" value="{{$companys->employment_status}}"
                                        id="exampleInputUsername2" placeholder="Enter employment status">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername2">Slug URL</label>
                                    <input type="text" class="form-control" name="slug" value="{{$companys->slug}}"
                                        id="exampleInputUsername2" placeholder="Enter Slug">
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