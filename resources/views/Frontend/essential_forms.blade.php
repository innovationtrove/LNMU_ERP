@extends('Frontend.includes.layout')
@section('content')

       <!-- slider starts here -->

<div class="container-fluid" style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;">
<p class="text-center">Essentials Documents For Employee.</p>
</div>
<!-- slider ends here -->


    <section class="container" style="margin-top: 50px;margin-bottom:50px;">
        <ul>
            <li> <a href="{{ asset('upload/Essential Document/00. Check list-PENSION-LNMU.pdf') }}" style="font-size: 20px;color:black;">Check list-PENSION LNMU </a></li>
           <li> <a href="{{ asset('upload/Essential Document/01. Pension Application - LNMU.pdf') }}" style="font-size: 20px;color:black;">Pension Application LNMU </a></li>
           <li> <a href="{{ asset('upload/Essential Document/02. Family Pension Application - LNMU.pdf') }}" style="font-size: 20px;color:black;">Family Pension Application LNMU </a></li>
           <li> <a href="{{ asset('upload/Essential Document/03.NOMINATION-Pension-LNMU.pdf') }}" style="font-size: 20px;color:black;">NOMINATION-Pension-LNMU </a></li>
           <li> <a href="{{ asset('upload/Essential Document/04. KYP-PENSION-LNMU.pdf') }}" style="font-size: 20px;color:black;">KYP-PENSION-LNMU</a></li>
            <li> <a href="{{ asset('upload/Essential Document/Life Certificate - Pension- LNMU.pdf') }}" style="font-size: 20px;color:black;">Life Certificate - Pension- LNMU</a></li>
           <li> <a href="{{ asset('upload/Essential Document/02. List of required documents for appointment on compassionate ground at LNMU._1.pdf') }}" style="font-size: 20px;color:black;">List of required documents for appointment on compassionate ground at LNMU </a></li>
        <li> <a href="{{ asset('upload/Essential Document/Compassionate Appointment Application form.pdf') }}" style="font-size: 20px;color:black;">Compassionate Appointment Application form</a></li>
         <li> <a href="{{ asset('upload/Essential Document/Performa - I.pdf') }}" style="font-size: 20px;color:black;">Performa - I</a></li>
         <li> <a href="{{ asset('upload/Essential Document/Performa - II.pdf') }}" style="font-size: 20px;color:black;">Performa - II</a></li>
        </ul>
    </section>

@endsection
