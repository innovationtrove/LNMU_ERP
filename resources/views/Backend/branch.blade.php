@extends('Backend.includes.layout')
@section('content')
    <!-- Page-header start -->
    {{-- {{ $branchd }} --}}
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Branch</h5>
                        <p class="m-b-0">Welcome to LNMU</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.dashboard') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">Branch</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><br><br>

<div class="container">
<div class="card">
    <div class="card-header">
        <h5>{{ isset($bdata)?'Edit Branach':'Add New Branch' }}</h5>
    </div>
    <div class="card-body">
<form method="POST" action="{{isset($bdata)?route('admin.branch.update',$bdata->id):route('admin.branch.store') }} " enctype="multipart/form-data">
    @isset($bdata)
    @method('PATCH')
    @endisset
    @csrf
<div class="form-group row">
    <div class="col-6">
        <label>Name</label>
       <input type="text" class="form-control" name="name" value="{{ $bdata->name??'' }}" placeholder="Enter name" required>
       <input type="hidden" value="{{ $bdata->id??'' }}" name="data_id">
    </div>
    <div class="col-6">
        <label>Pic</label>
       <input type="file" class="form-control" name="file" >
       @isset($dbdata)
       <img src="{{ asset($bdata->pic)}}" height="50px" width="50px"/>
        @endisset
    </div>
    <div class="col-12">
        <label>Title</label>
        <input type="text" class="form-control" name="title" value="{{ $bdata->title??'' }}" placeholder="Enter Title"
            required>
    </div>
    <div class="col-2 sub" >
<input type="submit" value="{{ isset($bdata)?'Update Branch':'Add Branch' }}" class="btn btn-primary btn-block mt-3" />
    </div>
</div>
</form>
    </div>
</div>
</div>
{{-- {{ $branchd }} --}}

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Branch Data</h5>
            <div class="card-header-right">
                <ul class="list-unstyled card-option">
                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                    <li><i class="fa fa-window-maximize full-card"></i></li>
                    <li><i class="fa fa-minus minimize-card"></i></li>
                    <li><i class="fa fa-refresh reload-card"></i></li>
                    <li><i class="fa fa-trash close-card"></i></li>
                </ul>
            </div>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Picture</th>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($branchd as $k=>$brdt)
                        {{-- {{ ($brdt->currentpage()-1) * $brdt->perpage() + $brdt+ 1 }} --}}

                        <tr>
                                <th>{{++$k }}</th>
                                <td>{{$brdt->name }}</td>
                                <td><img class="rounded" src="{{ asset($brdt->pic) }}"
                                        alt="" width="50px" height="50px"></td>
                                <td>{{ $brdt->title }}</td>
                              <td><a href="{{route('admin.branch.edit',$brdt->id )}}" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <form method="post" action="{{route('admin.branch.destroy',$brdt->id)}}">
                                            @method('DELETE')
                                           @csrf
                                        <button type="submit" class="btn btn-danger"><i class="icofont icofont-trash"></i></button>
                                           </form>
                                    </td>

                        </div>
                    </div>
                </div>
            </div>
        </td>
    </tr>

                                {{-- <td>
                                    <a href="{{$brdt->id}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="{{$brdt->id}}" class="btn btn-danger">Delete</a> --}}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- {{ $branchd->links('pagination::bootstrap-4') }} --}}
        </div>
    </div>
</div>
@endsection
