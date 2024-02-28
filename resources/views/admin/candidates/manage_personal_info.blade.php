@extends('admin.master')
@section('title')
Personal Info List
@endsection

@section('content')


<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Candidate Personal Info List</h4>

            <div class="table-responsive pt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>Sl No</td>
                            <th> Full Name </th>
                            <th> Phone No</th>
                            <th> National ID</th>
                            <th> Email</th>
                            <th> Blood Group</th>
                            <th> Date OF Birth</th>
                            <th> Gender</th>
                            <th> Present Address</th>
                            <th> Status</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $i = 1 @endphp
                    @foreach ($candidates as $candidate)
                    <tr class="table-info">
                        <td>{{ $i++ }}</td>
                        <td>{{ $candidate->candidate_first_name}} {{ $candidate->candidate_last_name}}</td>
                        <td>{{ $candidate->phone_no }}</td>
                        <td>{{ $candidate->national_id }}</td>
                        <td>{{ $candidate->email_address }}</td>
                        <td>{{ $candidate->blood_group }}</td>
                        <td>{{ $candidate->date_of_birth }}</td>
                        <td>{{ $candidate->gender }}</td>
                        <td>{{ substr($candidate->present_address,0,50) }}</td>
                        <td>{{ $candidate->status==1? 'Active':'In Active' }}</td>
                        <td class="d-flex justify-content">

                            @if($candidate->status==1)
                            <a href=" {{route ('personal.info.status',['id'=>$candidate->id])}}" class="btn btn-primary mr-1"
                                data-bs-toggle="tooltip" title="Active"><i
                                    class="fa-brands fa-creative-commons-by"></i></a>
                            @else
                            <a href=" {{route ('personal.info.status',['id'=>$candidate->id])}}" class="btn btn-warning mr-1"
                                data-bs-toggle="tooltip" title="Deactive"><i
                                    class="fa-solid fa-person-arrow-down-to-line"></i></a>
                            @endif

                            <a href=" {{route ('edit.personal.info',['id'=>$candidate->id])}}" class="btn btn-success mr-1 "
                                data-bs-toggle="tooltip" title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('delete.personal.info')}}" method="POST" id="delete">
                                @csrf
                                <input type="hidden" name="candidate_id" value="{{$candidate->id}}">
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