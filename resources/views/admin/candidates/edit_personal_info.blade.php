@extends('admin.master')
@section('title')
Edit Personal Info
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Personal Info</h4>
                    <p class="card-description">

                    </p>
                    <form action="{{ route ('update.personal.info')}}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <div class="row">
                        <input type="hidden" name="candidate_id" value="{{ $candidates->id}}">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">First Name</label>
                                    <input type="text" class="form-control"
                                        value="{{$candidates->candidate_first_name}}" name="candidate_first_name"
                                        id="exampleInputUsername1" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Father Name</label>
                                    <input type="text" class="form-control" value="{{$candidates->father_name}}"
                                        name="father_name" id="exampleInputUsername1" placeholder="Enter Father Name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Date OF Birth</label>
                                    <input type="date" class="form-control" value="{{$candidates->date_of_birth}}"
                                        name="date_of_birth" id="exampleInputUsername1"
                                        placeholder="Enter Date OF Birth">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="exampleInputEmail1">Gender </label>
                                            <div class="d-flex justify-content-between">
                                                <select value="{{$candidates->gender}}" name="gender"
                                                    class="form-control" id="exampleFormControlSelect1">
                                                    <option selected>{{$candidates->gender}}</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="exampleInputEmail1">Religion </label>
                                            <div class="d-flex justify-content-between">
                                                <select name="religion"
                                                    class="form-control" id="exampleFormControlSelect1">
                                                    <option selected>{{$candidates->religion}}</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Buddho">Buddho</option>
                                                    <option value="Kheristan">Kheristan</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Career Objective</label>
                                    <input type="textarea" class="form-control"
                                        value="{{$candidates->career_objective}}" name="career_objective"
                                        id="exampleInputUsername1" placeholder="Enter career objective">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Job Category</label>
                                    <input type="text" class="form-control" value="{{$candidates->job_category}}"
                                        name="job_category" id="exampleInputUsername1" placeholder="Enter job category">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Profile Image</label>
                                    <input type="file" class="form-control" name="image" id="exampleInputUsername1">
                                    <img src="{{ asset($candidates->image) }}" style="width:80px; height: 80px; "
                                        alt="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Last Name</label>
                                    <input type="text" class="form-control" value="{{$candidates->candidate_last_name}}"
                                        name="candidate_last_name" id="exampleInputUsername1"
                                        placeholder="Enter Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Mother Name</label>
                                    <input type="text-area" class="form-control" value="{{$candidates->mother_name}}"
                                        name="mother_name" id="exampleInputUsername1" placeholder="Enter Mother Name">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="exampleInputEmail1">Marital Status </label>
                                            <div class="d-flex justify-content-between">
                                                <select name="marital_status"
                                                    class="form-control" id="exampleFormControlSelect1">
                                                    <option selected>{{$candidates->marital_status}}</option>
                                                    <option value="Unmarried">Unmarried</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Single">Single</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="exampleInputEmail1">Blood Group </label>
                                            <div class="d-flex justify-content-between">
                                                <select  name="blood_group"
                                                    class="form-control" id="exampleFormControlSelect1">
                                                    <option selected>{{$candidates->blood_group}}</option>
                                                    <option value="A(+ve)">A(+ve)</option>
                                                    <option value="A(-ve)">A(-ve)</option>
                                                    <option value="B(+ve)">B(+ve)</option>
                                                    <option value="B(-ve)">B(-ve)</option>
                                                    <option value="O(+ve)">O(+ve)</option>
                                                    <option value="O(-ve)">O(-ve)</option>
                                                    <option value="AB(+ve)">AB(+ve)</option>
                                                    <option value="AB(-ve)">AB(-ve)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Email</label>
                                    <input type="email" class="form-control" value="{{$candidates->email_address}}"
                                        name="email_address" id="exampleInputUsername1"
                                        placeholder="Enter email_address">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Height</label>
                                            <input type="text" class="form-control" value="{{$candidates->height}}"
                                                name="height" id="exampleInputUsername1" placeholder="Enter height">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Weight</label>
                                            <input type="text" class="form-control" value="{{$candidates->weight}}"
                                                name="weight" id="exampleInputUsername1" placeholder="Enter weight">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Career Summary</label>
                                    <input type="textarea" class="form-control" value="{{$candidates->career_summary}}"
                                        name="career_summary" id="exampleInputUsername1"
                                        placeholder="Enter career summary">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Special Qualification</label>
                                    <input type="textarea" class="form-control"
                                        value="{{$candidates->special_qualification}}" name="special_qualification"
                                        id="exampleInputUsername1" placeholder="Enter special qualification">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Phone No</label>
                                    <input type="text" class="form-control" value="{{$candidates->phone_no}}"
                                        name="phone_no" id="exampleInputUsername1" placeholder="Enter Phone No">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Alternative Phone</label>
                                    <input type="Text" class="form-control"
                                        value="{{$candidates->alternative_phone_no}}" name="alternative_phone_no"
                                        id="exampleInputUsername1" placeholder="Enter alternative phone no">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">National Id</label>
                                    <input type="number" class="form-control" value="{{$candidates->national_id}}"
                                        name="national_id" id="exampleInputUsername1" placeholder="Enter national id">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Alternative Email</label>
                                    <input type="text" class="form-control" value="{{$candidates->alternative_email}}"
                                        name="alternative_email" id="exampleInputUsername1"
                                        placeholder="Enter alternative_email">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Present Address</label>
                                    <input type="text" class="form-control" value="{{$candidates->present_address}}"
                                        name="present_address" id="exampleInputUsername1"
                                        placeholder="Enter present address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Permanent Address</label>
                                    <input type="text" class="form-control" value="{{$candidates->permanent_address}}"
                                        name="permanent_address" id="exampleInputUsername1"
                                        placeholder="Enter permanent address">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Permanent Address</label>
                                    <input type="text" class="form-control" value="{{$candidates->permanent_address}}"
                                        name="permanent_address" id="exampleInputUsername1">
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