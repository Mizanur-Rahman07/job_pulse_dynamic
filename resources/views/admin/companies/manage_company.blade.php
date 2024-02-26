@extends('admin.master')
@section('title')
Company List
@endsection

@section('content')


<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Company List</h4>
            <!-- Button trigger modal -->


            <div class=" d-flex justify-content-end">
                <button type="button" class="btn btn-primary d-flex flex-row-reverse" data-toggle="modal"
                    data-bs-toggle="tooltip" title="Add Company" data-target="#exampleModalCenter2">
                    <i class="fa-solid fa-user-plus"></i>
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter2" tabindex="-1" company="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" company="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add company Form</h5>
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
                                                <form action="{{ route ('new.company')}}" method="POST"
                                                    enctype="multipart/form-data" class="forms-sample">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Company Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="company_name" id="exampleInputUsername1"
                                                                    placeholder="Enter Company Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Company Business</label>
                                                                <input type="text" class="form-control"
                                                                    name="company_business" id="exampleInputUsername1"
                                                                    placeholder="Enter FCompany Business">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Company Employee
                                                                    List</label>
                                                                <input type="text" class="form-control"
                                                                    name="company_emp_list" id="exampleInputUsername1"
                                                                    placeholder="Enter Employee List">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Company Address</label>
                                                                <input type="text-area" class="form-control"
                                                                    name="company_address" id="exampleInputUsername1"
                                                                    placeholder="Enter Company Address">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Company Phone</label>
                                                                <input type="text" class="form-control"
                                                                    name="company_phone" id="exampleInputUsername1"
                                                                    placeholder="Enter Phone no">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Company Email</label>
                                                                <input type="email" class="form-control"
                                                                    name="company_email" id="exampleInputUsername1"
                                                                    placeholder="Enter Email Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Company Logo</label>
                                                                <input type="file" class="form-control"
                                                                    name="company_logo" id="exampleInputUsername1"
                                                                    placeholder="Enter company Person Photo">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Company URL</label>
                                                                <input type="text" class="form-control"
                                                                    name="company_web_address"
                                                                    id="exampleInputUsername1" placeholder="Enter Slug">
                                                            </div>
                                                          

                                                        </div>
                                                        <div class="text-left">
                                                            <button class="btn btn-light">Cancel</button>
                                                            <button type="submit"
                                                                class="btn btn-primary mr-2">Submit</button>
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
        </div>


        <div class="table-responsive pt-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Sl No</td>
                        <th> Company Name</th>
                        <th> Company Business</th>
                        <th> Company Emp List</th>
                        <th> Company Address</th>
                        <th> Company Phone </th>
                        <th> Company Email</th>
                        <th> Status</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($companys as $company)
                    <tr class="table-info">
                        <td>{{ $i++ }}</td>
                        <td>{{ $company->company_name}}</td>
                        <td>{{ $company->company_business }}</td>
                        <td>{{ $company->company_emp_list }}</td>
                        <td>{{ substr($company->company_address,0,40) }}</td>
                        <td>{{ $company->company_phone }}</td>
                        <td>{{ $company->company_email }}</td>
                        <td>{{ $company->status==1? 'Active':'In Active' }}</td>
                        <td class="d-flex justify-content">

                            @if($company->status==1)
                            <a href=" {{route ('company.status',['id'=>$company->id])}}" class="btn btn-primary mr-1"
                                data-bs-toggle="tooltip" title="Active"><i
                                    class="fa-brands fa-creative-commons-by"></i></a>
                            @else
                            <a href=" {{route ('company.status',['id'=>$company->id])}}" class="btn btn-warning mr-1"
                                data-bs-toggle="tooltip" title="Deactive"><i
                                    class="fa-solid fa-person-arrow-down-to-line"></i></a>
                            @endif

                            <a href=" {{route ('edit.company',['id'=>$company->id])}}" class="btn btn-success mr-1 "
                                data-bs-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('delete.company')}}" method="POST" id="delete">
                                @csrf
                                <input type="hidden" name="company_id" value="{{$company->id}}">
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