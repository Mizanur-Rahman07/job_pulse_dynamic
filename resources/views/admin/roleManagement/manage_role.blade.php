@extends('admin.master')
@section('title')
Role List
@endsection

@section('content')


<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Role List</h4>
            <!-- Button trigger modal -->


            <div class=" d-flex justify-content-end">
                <button type="button" class="btn btn-primary d-flex flex-row-reverse" data-toggle="modal"
                    data-bs-toggle="tooltip" title="Add Role" data-target="#exampleModalCenter">
                    <i class="fa-solid fa-user-plus"></i>
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add Role Form</h5>
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
                                                <form action="{{ route ('new.role')}}" method="POST"
                                                    enctype="multipart/form-data" class="forms-sample">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">User Name</label>
                                                                <input type="text" class="form-control" name="user_name"
                                                                    id="exampleInputUsername1"
                                                                    placeholder="Enter User Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">First Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="first_name" id="exampleInputUsername1"
                                                                    placeholder="Enter First Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Last Name</label>
                                                                <input type="text" class="form-control" name="last_name"
                                                                    id="exampleInputUsername1"
                                                                    placeholder="Enter Last Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Phone No</label>
                                                                <input type="text" class="form-control" name="phone_no"
                                                                    id="exampleInputUsername1"
                                                                    placeholder="Enter Phone No">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Email</label>
                                                                <input type="email" class="form-control"
                                                                    name="email_address" id="exampleInputUsername1"
                                                                    placeholder="Enter Email Address">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Role</label>
                                                                <select name="role" class="form-control"
                                                                    id="exampleFormControlSelect1">
                                                                    <option selected>Select Type</option>
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
                                                                <input type="file" class="form-control" name="image"
                                                                    id="exampleInputUsername1"
                                                                    placeholder="Enter Role Person Photo">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputUsername1">Role URL</label>
                                                                <input type="text" class="form-control" name="slug"
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
                        <th> User Name</th>
                        <th> Full Name</th>
                        <th> Phone No </th>
                        <th> Email</th>
                        <th> Image</th>
                        <th> Role</th>
                        <th> Status</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($roles as $role)
                    <tr class="table-info">
                        <td>{{ $i++ }}</td>
                        <td>{{ $role->user_name}}</td>
                        <td>{{ $role->first_name }} {{ $role->last_name }}</td>
                        <td>{{ $role->phone_no }}</td>
                        <td>{{ $role->email_address }}</td>
                        <td>
                            <img src="{{ asset($role->image) }}" style="height:60px; width:60px;" alt="" srcset="">
                        </td>
                        <td>{{ $role->role}}</td>
                        <td>{{ $role->status==1? 'Active':'In Active' }}</td>
                        <td class="d-flex justify-content">

                            @if($role->status==1)
                            <a href=" {{route ('role.status',['id'=>$role->id])}}" class="btn btn-primary mr-1"
                                data-bs-toggle="tooltip" title="Active"><i
                                    class="fa-brands fa-creative-commons-by"></i></a>
                            @else
                            <a href=" {{route ('role.status',['id'=>$role->id])}}" class="btn btn-warning mr-1"
                                data-bs-toggle="tooltip" title="Deactive"><i
                                    class="fa-solid fa-person-arrow-down-to-line"></i></a>
                            @endif

                            <a href=" {{route ('edit.role',['id'=>$role->id])}}" class="btn btn-success mr-1 "
                                data-bs-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('delete.role')}}" method="POST" id="delete">
                                @csrf
                                <input type="hidden" name="role_id" value="{{$role->id}}">
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