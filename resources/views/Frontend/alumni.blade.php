@extends('Frontend.includes.layout')
<style>
.btn{
    font-family: 'Raleway', sans-serif;
    color:#fff;
    background: #7C0000;
    font-size: 18px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 10px 20px;
    border-radius: 6px;
    border: none;
    transition: 0.5s ease-in-out;
}
.btn:focus{ color: #fff; }
.btn:hover{
    color:#037c5e;
    background: none;
    border-radius: 100px;
    box-shadow: 0 0 0 1px #fff, 0 0 0 2px #7C0000, 
                0 0 0 5px #7C0000,0 0 0 6.5px #fff, 0 0 0 7px #7C0000;
}
@media only screen and (max-width: 767px){
    .btn{ margin-bottom: 30px; }
}
</style>
@section('content')
    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom: 40px;">
        <p class="text-center">Lalit Narayan Mithila University Alumni Association</p>
    </div>
<br/>
<div class="container text-center">
    <div class="row mb-4">
        <div class="col-sm-4">
            <a href="{{ route('alumniAdministration') }}" class="btn btn-lg">
                <span>Office bearers</span>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="{{asset('upload/alumni/executive council.jpeg')}}" class="btn btn-lg">
                <span>Executive Council</span>
            </a>
        </div>
        <div class="col-sm-4">
            <a href="https://forms.gle/NrJjNJu2xW2rmF88A" class="btn btn-lg">
                <span>Alumni Registration</span>
            </a>
        </div>
        </div>
        <div class="row mb-4">
        
        <div class="col-sm-4" style="margin-top:15px;">
            <a href="#" class="btn btn-lg">
                <span>Document</span>
            </a>
        </div>
        <div class="col-sm-4" style="margin-top:15px;">
            <a href="{{ route('photogallery2') }}" class="btn btn-lg">
                <span>Photo Gallery</span>
            </a>
        </div>
    </div>
</div>
<br/><br/><br/><br/><br/>
@endsection
