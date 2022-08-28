@extends('Frontend.includes.layout')
<style>

.text-head{
    color: #7c0000;
    font-family: 'Tajawal', sans-serif;
    font-size: 40px;
    font-weight: bolder;
    display: inline-block;
    position: relative;
}
.text-head:before{
    content: attr(data-effect);
    color: #fff;
    background: #7c0000;
    overflow: hidden;
    position: absolute;
    top: 0;
    left: 0;
    clip-path: polygon(0% 0%, 50% 0%, 50% 100%, 0% 100%);
    animation: slide 4s 1s linear infinite;
}
@keyframes slide{
    70%{ clip-path: polygon(70% 0%, 100% 0%, 100% 100%, 70% 100%); }
}
@media only screen and (max-width: 990px){
    .text-head{ font-size: 90px; }
}
@media only screen and (max-width: 767px){
    .text-head{ font-size: 75px; }
}
@media only screen and (max-width: 576px){
    .text-head{ font-size: 55px; }
}
@media only screen and (max-width: 479px){
    .text-head{ font-size: 40px; }
}
</style>
@section('content')
    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom: 40px;">
        <p class="text-center">Lalit Narayan Mithila University Alumni Administration</p>
    </div>
    <div class="container-fluid text-center">
        <div class="text-head" data-effect="Office Bearers">Office Bearers</div>
    </div>
   
 <div class="container mt-5" style="margin-top:50px;">
     <div class="row" style="margin-bottom:35px;">
        <div class="container" style="display:flex; align-items:center;justify-content:center;">
               <div class="col-md-4 col-sm-12" style="width:25%">
                <div class="box2">
                    <div class="box-top">
                        Vice-Chancellor & Chairperson
                    </div>
                    <img src="{{ asset('Frontend/images/officers/vc.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Prof. Surendra Pratap Singh</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row" style="margin-bottom:35px;">
        <div class="container" style="display:flex; align-items:center;justify-content:center;">
               <div class="col-md-4 col-sm-12" style="width:25%">
                   <div class="box2">
                        <div class="box-top">
                            President
                        </div>
                        <img src="{{ asset('Frontend/images/officers/institute of_gerontology and geriatrics.jpeg') }}" style="height: 300px;width:500px;">
                        <div class="box-content">
                            <h3 class="title">Prof. S.K. Verma</h3>
                        </div>
                  </div>
               </div>
            <div class="col-md-4 col-sm-12" style="width:25%">
                  <div class="box2">
                    <div class="box-top">
                        Vice-President
                    </div>
                    <img src="{{ asset('Frontend/images/faculty/punita jah english.jpg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Punita Jha</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="row" style="margin-bottom:35px;">
        <div class="container" style="display:flex; align-items:center;justify-content:center;">
            <div class="col-md-4 col-sm-12" style="width:25%">
                <div class="box2">
                    <div class="box-top">
                        General Secretary
                    </div>
                    <img src="{{ asset('Frontend/images/faculty/Divakar Sir.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Divakar Jha</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-12" style="width:25%">
                <div class="box2">
                    <div class="box-top">
                         Treasurer
                    </div>
                    <img src="{{ asset('Frontend/images/officers/development_officer.jpg') }}"
                        style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Surendra Kumar</h3>
                        <!--<span class="post">8544513256 & fa@lnmu.ac.in</span>-->
                    </div>

                </div>
            </div>

            <div class="col-md-4 col-sm-12" style="width:25%">
                <div class="box2">
                    <div class="box-top">
                        Joint Secretary
                    </div>
                    <img src="{{ asset('Frontend/images/officers/dr1.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Kameshwar Paswan</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
 
    
    <div class="container-fluid text-center mt-5" style="margin-top:50px;">
        <div class="text-head" data-effect="Members">Members</div>
    </div>
   
 <div class="container mt-5" >
        <div class="row container text-center" style="margin-bottom: 40px;">
        </div>
        <div class="row" style="margin-bottom: 40px;">
            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    
                    <img src="{{ asset('Frontend/images/officers/dean_social science.jpeg') }}"
                        style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Prof. Jitendra Narayan</h3>
                        <!--<span class="post">8544513256 & fa@lnmu.ac.in</span>-->
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    
                    <img src="{{ asset('Frontend/images/officers/Avani.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Avni Ranjan Singh</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    
                    <img src="{{ asset('Frontend/images/officers/iqac_director.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Dr. Md. Zeya Haider</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="box2">
                    
                    <img src="{{ asset('Frontend/images/officers/Kali.jpeg') }}" style="height: 300px;width:500px;">
                    <div class="box-content">
                        <h3 class="title">Mr. Kali Charan Mishra</h3>
                    </div>
                </div>
            </div>

            

        </div>
    </div>
@endsection
