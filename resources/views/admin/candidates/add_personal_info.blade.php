@extends('admin.master')
@section('title')
Add Personal Info
@endsection

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-11 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add Personal Info</h4>
                    <p class="card-description">

                    </p>
                    <form action="{{ route ('new.personal.info')}}" method="POST" enctype="multipart/form-data"
                        class="forms-sample">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">First Name</label>
                                    <input type="text" class="form-control" name="candidate_first_name"
                                        id="exampleInputUsername1" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Father Name</label>
                                    <input type="text" class="form-control" name="father_name"
                                        id="exampleInputUsername1" placeholder="Enter Father Name">
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputUsername1">Date OF Birth</label>
                                    <input type="date" class="form-control" name="date_of_birth"
                                        id="exampleInputUsername1" placeholder="Enter Date OF Birth">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="exampleInputEmail1">Gender </label>
                                            <div class="d-flex justify-content-between">
                                                <select name="gender" class="form-control"
                                                    id="exampleFormControlSelect1">
                                                    <option selected>Select Gender</option>
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
                                                <select name="religion" class="form-control"
                                                    id="exampleFormControlSelect1">
                                                    <option selected>Select Religion</option>
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
                                    <input type="textarea" class="form-control" name="career_objective"
                                        id="exampleInputUsername1" placeholder="Enter career objective">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Job Category</label>
                                    <input type="text" class="form-control" name="job_category"
                                        id="exampleInputUsername1" placeholder="Enter job category">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Profile Image</label>
                                    <input type="file" class="form-control" name="image" id="exampleInputUsername1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Last Name</label>
                                    <input type="text" class="form-control" name="candidate_last_name"
                                        id="exampleInputUsername1" placeholder="Enter Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Mother Name</label>
                                    <input type="text-area" class="form-control" name="mother_name"
                                        id="exampleInputUsername1" placeholder="Enter Mother Name">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="exampleInputEmail1">Marital Status </label>
                                            <div class="d-flex justify-content-between">
                                                <select name="marital_status" class="form-control"
                                                    id="exampleFormControlSelect1">
                                                    <option selected>Select</option>
                                                    <option value="Male">Unmarried</option>
                                                    <option value="Female">Married</option>
                                                    <option value="Others">Single</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="exampleInputEmail1">Blood Group </label>
                                            <div class="d-flex justify-content-between">
                                                <select name="blood_group" class="form-control"
                                                    id="exampleFormControlSelect1">
                                                    <option selected>Select</option>
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
                                    <input type="email" class="form-control" name="email_address"
                                        id="exampleInputUsername1" placeholder="Enter email_address">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Height</label>
                                            <input type="text" class="form-control" name="height"
                                                id="exampleInputUsername1" placeholder="Enter height">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Weight</label>
                                            <input type="text" class="form-control" name="weight"
                                                id="exampleInputUsername1" placeholder="Enter weight">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputUsername1">Career Summary</label>
                                    <input type="textarea" class="form-control" name="career_summary"
                                        id="exampleInputUsername1" placeholder="Enter career summary">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Special Qualification</label>
                                    <input type="textarea" class="form-control" name="special_qualification"
                                        id="exampleInputUsername1" placeholder="Enter special qualification">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Phone No</label>
                                    <input type="text" class="form-control" name="phone_no" id="exampleInputUsername1"
                                        placeholder="Enter Phone No">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Alternative Phone</label>
                                    <input type="Text" class="form-control" name="alternative_phone_no"
                                        id="exampleInputUsername1" placeholder="Enter alternative phone no">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">National Id</label>
                                    <input type="number" class="form-control" name="national_id"
                                        id="exampleInputUsername1" placeholder="Enter national id">
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputUsername1">Alternative Email</label>
                                    <input type="text" class="form-control" name="alternative_email"
                                        id="exampleInputUsername1" placeholder="Enter alternative_email">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Present Address</label>
                                    <input type="text" class="form-control" name="present_address"
                                        id="exampleInputUsername1" placeholder="Enter present address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Permanent Address</label>
                                    <input type="text" class="form-control" name="permanent_address"
                                        id="exampleInputUsername1" placeholder="Enter permanent address">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Permanent Address</label>
                                    <input type="text" class="form-control" name="image" id="exampleInputUsername1">
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