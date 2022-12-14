@extends('Frontend.includes.layout')
@section('content')
    <!-- slider starts here -->
    <section id="yt_spotlight1" class="block">
        <div class="container">
            <div class="row">
                <div id="slideshow" class="col-sm-12">
                    <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right" data-interval="5000"
                        data-pause="hover">
                        <!-- Carousel items -->
                        <div class="slickslider-items bg-style1">
                            <div class="slickslider-item item clearfix active">
                                <div class="images-slideshow"><img alt=""
                                        src="{{ asset('Frontend/images/internal%20banners/banner119.jpg') }}" /></div>
                                <div class="item-content">
                                    <div class="item-content-inner">
                                        <h5 class="item-title">
                                            <a href="#" style="color:#7C0000" title="">Home</a> | <a
                                                href="#" style="color:#7C0000" title="">Archive</a>
                                            </h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom:40px;">
        <p class="text-center">Archive</p>
    </div>
    <!-- slider ends here -->

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Archive
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <ul>
                            <li><a href="#">Regarding Reschedule of East Zone Inter University, Table- Tennis (W)
                                    Tournament 2021-22</a></li>
                            <li><a href="#">Fixture For East Zone Inter University Table Tennis (W) tournament
                                    2021-22</a></li>
                            <li><a href="#">Admission 2021-23 Two year Full Time Master of Business Administration
                                    Programmemeu</a></li>
                            <li><a href="#">LIST OF CANDIDATES FOUND ELIGIBLE FOR INTERVIEW IN PHYSICS (CLICK
                                    HERE)</a></li>
                            <li><a href="#">Notice About Interview Letter of Physics (CLICK HERE)</a></li>
                            <li><a href="#">Notice Interview Letter of Botany (CLICK HERE)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel-body">
                <ul>
                    <li><a href="#">Regarding Reschedule of East Zone Inter University, Table- Tennis (W) Tournament
                            2021-22</a></li>
                    <li><a href="#">Fixture For East Zone Inter University Table Tennis (W) tournament 2021-22</a>
                    </li>
                    <li><a href="#">Admission 2021-23 Two year Full Time Master of Business Administration
                            Programmemeu</a></li>
                    <li><a href="#">LIST OF CANDIDATES FOUND ELIGIBLE FOR INTERVIEW IN PHYSICS (CLICK HERE)</a></li>
                    <li><a href="#">Notice About Interview Letter of Physics (CLICK HERE)</a></li>
                    <li><a href="#">Notice Interview Letter of Botany (CLICK HERE)</a></li>
                    <li><a href="{{asset('upload/aqardata/Guest_FacultyPDF')}}">Advertisement For Guest/Part-Time Teacher</a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
