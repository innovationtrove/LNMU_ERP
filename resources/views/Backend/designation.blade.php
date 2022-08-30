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
        <h5>{{ isset($destData)?'Edit Designation':'Add Designation' }}</h5>
    </div>
    <div class="card-body">
<form method="post" action="{{isset($destData)?route('admin.designation.update',$destData->id):route('admin.designation.store')}}" enctype="multipart/form-data">
    @isset($destData)
    @method('PUT')
    @endisset
    @csrf
<div class="form-group row">
<div class="col-12">
    <div class="col-6 ">
        <label>Designation Name</label>
       <input type="text" class="form-control" name="desig_name" placeholder="Enter department name" value="{{$destData->designation_name??''}}" required />
    </div>
    <div class="col-3 sub" >
    <input type="submit" value="{{isset($destData)?'Update Designation':'Add Designation'}}" class=" btn btn-primary mt-3"/>
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
                    <th>Designation Name</th>
                    <th>Action</th>
                </tr>
        </div>
        <div class="card-body">
            <tbody>
                @php
                $i=1;
                @endphp 
                @foreach($Designation as  $dest)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$dest->designation_name}}</td>
                    <td>
                        <a href="{{route('admin.designation.edit',$dest->id)}}" class="btn waves-effect waves-light btn-info btn-icon"><i
                                class="icofont icofont-edit"></i></a>
                        <form action='{{route("admin.designation.destroy",$dest->id)}}' method="post">
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
