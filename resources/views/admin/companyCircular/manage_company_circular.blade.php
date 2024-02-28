@extends('admin.master')
@section('title')
Company Circular List
@endsection

@section('content')


<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All circular List</h4>
            <!-- Button trigger modal -->
            <div class=" d-flex justify-content-end">
                <button type="button" class="btn btn-primary d-flex flex-row-reverse" data-toggle="modal"
                    data-bs-toggle="tooltip" title="Add Circular" data-target="#exampleModalCenter">
                    <i class="fa-solid fa-user-plus"></i>
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Circular Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="col-md-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <p class="card-description">
                                                </p>
                                                <form action="{{ route ('new.company.circular')}}" method="POST"
                                                    enctype="multipart/form-data" class="forms-sample">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="form-group ">
                                                                <label for="exampleInputEmail1">Company </label>
                                                                <div class="d-flex justify-content-between">
                                                                    <select name="company_id" class="form-control"
                                                                        id="exampleFormControlSelect1">
                                                                        <option selected>Select Company</option>
                                                                        @foreach($circulars as $company)
                                                                        <option value="{{$company->id}}">
                                                                            {{$company->company_name}}
                                                                        </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Vacancy</label>
                                                                <input type="number" class="form-control" name="vacancy"
                                                                    id="exampleInputUsername1"
                                                                    placeholder="Enter Vacency">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Location</label>
                                                                <input type="textarea" class="form-control"
                                                                    name="job_location" id="exampleInputUsername1"
                                                                    placeholder="Enter job location">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Salary</label>
                                                                <input type="text" class="form-control" name="salary"
                                                                    id="exampleInputUsername1"
                                                                    placeholder="Enter Salary">
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Experience</label>
                                                                <input type="text-area" class="form-control"
                                                                    name="experience" id="exampleInputUsername1"
                                                                    placeholder="Enter experience">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Education
                                                                    Requirments</label>
                                                                <input type="textarea" class="form-control"
                                                                    name="education_requirments"
                                                                    id="exampleInputUsername1"
                                                                    placeholder="Enter Education Requirments">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Published
                                                                    Date</label>
                                                                <input type="date" class="form-control"
                                                                    name="published_date" id="exampleInputUsername1"
                                                                    placeholder="Enter published date">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Application
                                                                    Deadline</label>
                                                                <input type="date" class="form-control"
                                                                    name="application_deadline"
                                                                    id="exampleInputUsername1"
                                                                    placeholder="Enter Email Address">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Responsibilities
                                                                    Context</label>
                                                                <input type="text" class="form-control"
                                                                    name="responsibilities_context"
                                                                    id="exampleInputUsername1"
                                                                    placeholder="Enter responsibilities context">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Compensation
                                                                    Benefits</label>
                                                                <input type="text" class="form-control"
                                                                    name="compensation_other_benefits"
                                                                    id="exampleInputUsername1"
                                                                    placeholder="Enter compensation other benefits">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Workplace</label>
                                                                <input type="text" class="form-control" name="workplace"
                                                                    id="exampleInputUsername1"
                                                                    placeholder="Enter workplace">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Employment
                                                                    Status</label>
                                                                <input type="text" class="form-control"
                                                                    name="employment_status" id="exampleInputUsername1"
                                                                    placeholder="Enter employment status">
                                                            </div>


                                                        </div>
                                                        <div class="text-left">
                                                            <button class="btn btn-light">Cancel</button>
                                                            <button type="submit"
                                                                class="btn btn-primary mr-2">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Sl No</td>
                            <th> Company </th>
                            <th> Vacancy</th>
                            <th> Salary</th>
                            <th> Experience</th>
                            <th> Published Date</th>
                            <th> Application Deadline</th>
                            <th> Workplace</th>
                            <th> Employment Status</th>
                            <th> Status</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1 @endphp
                        @foreach ($circulars as $circular)
                        <tr class="table-info">
                            <td>{{ $i++ }}</td>
                            <td>{{ $circular->company_name}}</td>
                            <td>{{ $circular->vacancy }}</td>
                            <td>{{ $circular->salary }}</td>
                            <td>{{ $circular->experience }}</td>
                            <td>{{ $circular->published_date }}</td>
                            <td>{{ $circular->application_deadline }}</td>
                            <td>{{ $circular->workplace }}</td>
                            <td>{{ $circular->employment_status }}</td>
                            <td>{{ $circular->status==1? 'Active':'In Active' }}</td>
                            <td class="d-flex justify-content">

                                @if($circular->status==1)
                                <a href=" {{route ('company.circular.status',['id'=>$circular->id])}}"
                                    class="btn btn-primary mr-1" data-bs-toggle="tooltip" title="Active"><i
                                        class="fa-brands fa-creative-commons-by"></i></a>
                                @else
                                <a href=" {{route ('company.circular.status',['id'=>$circular->id])}}"
                                    class="btn btn-warning mr-1" data-bs-toggle="tooltip" title="Deactive"><i
                                        class="fa-solid fa-person-arrow-down-to-line"></i></a>
                                @endif

                                <a href=" {{route ('edit.company.circular',['id'=>$circular->id])}}"
                                    class="btn btn-success mr-1 " data-bs-toggle="tooltip" title="Edit"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('delete.company.circular')}}" method="POST" id="delete">
                                    @csrf
                                    <input type="hidden" name="circular_id" value="{{$circular->id}}">
                                    <button type="submit" class="btn btn-danger" title="Delete"
                                        onclick="return confirm('Are You Sure delete this!!')" data-bs-toggle="tooltip"
                                        title="Delete"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection