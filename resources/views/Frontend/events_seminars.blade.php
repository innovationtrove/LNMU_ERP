@extends('Frontend.includes.layout')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

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
                                                href="#" style="color:#7C0000" title="">Event/Seminars</a>
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
        <p class="text-center">Events/Seminars</p>
    </div>
    <!-- slider ends here -->

    <section class="container " style="margin-top: 50px;">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingEight">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Academic Year 2020-21
                        </a>
                    </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">Chemistry</a></li>
                                    <li> <a href="#"
                                            target="_blank">Commerce</a></li>
                                    <li> <a href="#"
                                            target="_blank">Geography</a></li>
                                    <li> <a href="#"
                                            target="_blank">Hindi</a></li>
                                    <li> <a href="#"
                                            target="_blank">History</a></li>
                                    <li> <a href="#"
                                            target="_blank">Home Science</a></li>
                                    <li> <a href="#"
                                            target="_blank">Maithili</a></li>
                                    <li> <a href="#"
                                            target="_blank">Sociology</a></li>
                                    <li> <a href="#"
                                        target="_blank">Zoology</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container ">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Academic Year 2019-20
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">Chemistry</a></li>
                                    <li> <a href="#"
                                            target="_blank">Commerce</a></li>
                                    <li> <a href="#"
                                            target="_blank">Geography</a></li>
                                    <li> <a href="#"
                                            target="_blank">Hindi</a></li>
                                    <li> <a href="#"
                                            target="_blank">History</a></li>
                                    <li> <a href="#"
                                            target="_blank">Home Science</a></li>
                                    <li> <a href="#"
                                            target="_blank">Maithili</a></li>
                                    <li> <a href="#"
                                            target="_blank">Sociology</a></li>
                                    <li> <a href="#"
                                        target="_blank">Zoology</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container ">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Academic Year 2018-19
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">Chemistry</a></li>
                                    <li> <a href="#"
                                            target="_blank">Commerce</a></li>
                                    <li> <a href="#"
                                            target="_blank">Geography</a></li>
                                    <li> <a href="#"
                                            target="_blank">Hindi</a></li>
                                    <li> <a href="#"
                                            target="_blank">History</a></li>
                                    <li> <a href="#"
                                            target="_blank">Home Science</a></li>
                                    <li> <a href="#"
                                            target="_blank">Maithili</a></li>
                                    <li> <a href="#"
                                            target="_blank">Sociology</a></li>
                                    <li> <a href="#"
                                        target="_blank">Zoology</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container " >
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Academic Year 2017-18
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">Chemistry</a></li>
                                    <li> <a href="#"
                                            target="_blank">Commerce</a></li>
                                    <li> <a href="#"
                                            target="_blank">Geography</a></li>
                                    <li> <a href="#"
                                            target="_blank">Hindi</a></li>
                                    <li> <a href="#"
                                            target="_blank">History</a></li>
                                    <li> <a href="#"
                                            target="_blank">Home Science</a></li>
                                    <li> <a href="#"
                                            target="_blank">Maithili</a></li>
                                    <li> <a href="#"
                                            target="_blank">Sociology</a></li>
                                    <li> <a href="#"
                                        target="_blank">Zoology</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
