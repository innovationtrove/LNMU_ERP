@extends('Frontend.includes.layout')
@section('content')

       <!-- slider starts here -->

<div class="container-fluid" style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;">
<p class="text-center">Sports Calendar</p>
</div>
<!-- slider ends here -->


    <section class="container" style="margin-top: 50px;margin-bottom:50px;">
        <ul>
            <li> <a href="{{ asset('upload/Sports Calender/Academic Calendar_ 2020-21.pdf') }}" style="font-size: 20px;color:black;">Sports Calendar 2020-21 </a></li>
           <li> <a href="{{ asset('upload/Sports Calender/Academic Calendar_19-20.jpg') }}" style="font-size: 20px;color:black;">Sports Calendar 2019-20 </a></li>
            <li> <a href="{{ asset('upload/Sports Calender/Academic Calendar_ 2018-19.jpg') }}" style="font-size: 20px;color:black;">Sports Calendar 2018-19 </a></li>
        </ul>
    </section>

@endsection
