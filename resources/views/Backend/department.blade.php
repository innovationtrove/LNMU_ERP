@extends('Backend.includes.layout')
@section('content')
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Department</h5>
                        <p class="m-b-0">Welcome to LNMU</p>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">Branch</li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div><br><br>

<div class="container">
<div class="card">
    <div class="card-header">
        <h5>{{ isset($editdep)?'Edit Department':'Add New Department' }}</h5>
    </div>
    <div class="card-body">
<form method="post" action="{{isset($editdep)?route('admin.department.update',$editdep->id):route('admin.department.store')}}" enctype="multipart/form-data">
    @isset($editdep)
    @method('PUT')
    @endisset
    @csrf
<div class="form-group row">
<div class="col-6">
    {{-- <input type="hidden" name="id" value="{{$editdep->id??''}}" --}}
        <label>Branch</label>
        <select name="branch_id" class="form-control">
            @isset($editdep->branch)
            <option value="{{$editdep->branch??''}}" selected hidden>{{$editdep->branches->name??''}}</option>
            @endisset
            <option value="">Branch</option>
        @foreach($Branch as $branch)
            <option value="{{$branch->id}}">{{$branch->name}}</option>
        @endforeach
        </select>
    </div>
    <div class="col-6">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{$editdep->title??''}}"
            required>
    </div>
    <div class="col-6 mt-3">
        <label>Department Name</label>
       <input type="text" class="form-control" name="d_name" placeholder="Enter department name" value="{{$editdep->department_name??''}}   " required>
    </div>
    <div class="col-6 mt-3">
        <label>Pic</label>
       <input type="file" class="form-control" name="d_file" >
       @isset($editdep->pic)
        <img src="{{asset($editdep->pic)}}" height="50px" width="50px" />
            @endisset
            <input type="hidden" name="old_pic" value="{{$editdep->pic??''}}" />
    </div>
    <div class="col-3 sub" >
    <input type="submit" value="{{isset($editdep)?'Update Department':'Add Department'}}"  class="btn btn-primary btn-block mt-3" />
    </div>
</div>
</form>
    </div>
</div>
</div>



{{-- //  List Department --}}
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-block table-border-style">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Brnach ID</th>
                    <th>Title</th>
                    <th>Department Name</th>
                    <th>File</th>
                    <th>Uploaded Date</th>
                    <th>Action</th>
                </tr>
        </div>
        <div class="card-body">
            <tbody>
                @php
                $i=1;
                @endphp
                @foreach($Department as  $dept)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$dept->branch}}</td>
                    <td>{{$dept->title}}</td>
                    <td>{{$dept->department_name}}</td>
                    @if($dept->type=='file')
                    <td><a href="{{asset($dept->pic)}}" target="_blank">View</a></td>
                    @else
                    <td><a href="{{asset($dept->pic)}}" target="_blank">View</a></td>
                    @endif

                    <td>{{$dept->updated_at}}</td>
                    <td>
                        <a href="{{route('admin.department.edit',$dept->id)}}" class="btn waves-effect waves-light btn-info btn-icon"><i
                                class="icofont icofont-edit"></i></a>
                    </td>
                    <td>
                        <form action='{{route("admin.department.destroy",$dept->id)}}' method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn waves-effect waves-light btn-info btn-icon"><i
                                class="icofont icofont-trash"></i></button>
                                <form>
                    </td>
                </tr>
                @php
                    $i++;
                @endphp
                @endforeach
            </tbody>


        </div>
    </table>
    </div>
</div>
    </div>
</div>
@endsection
