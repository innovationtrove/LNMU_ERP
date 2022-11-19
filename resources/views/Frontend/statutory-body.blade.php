@extends('Frontend.includes.layout')
@section('content')
    <!-- slider starts here -->
    <section id="yt_spotlight1" class="block mb30">

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
                                                href="#" style="color:#7C0000" title="">Proceedings of Statutory
                                                Bodies</a>
                                            </h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider starts here -->
        <div class="container-fluid"
            style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;">
            <p class="text-center">Proceedings of Statutory Bodies</p>
        </div>
        <!-- slider ends here -->
    </section>
    <!-- slider ends here -->

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Senate
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body text-justify">
                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse2" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2017 </a><br />
                                <div class="collapse" id="Collapse2">
                                    <div class="card card-body" style="padding-left: 25px;">
                                        <a href="{{ asset('upload/aqardata/criteria1/1.1.3/Physics.pdf') }}">Demo Senate</a> <br />
                                    </div>
                                </div>

                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse5" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2018 </a> <br />
                                <div class="collapse" id="Collapse5">
                                    <div class="card card-body" style="padding-left: 25px;">
                                        <a href="{{ asset('upload/aqardata/criteria1/1.1.3/Physics.pdf') }}">Demo Senate</a> <br />
                                    </div>
                                </div>
                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse6" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2019</a><br />
                                <div class="collapse" id="Collapse6">
                                    <div class="card card-body" style="padding-left: 25px;">
                                        <a href="{{ asset('upload/aqardata/criteria1/1.1.3/Physics.pdf') }}">Demo Senate</a> <br />
                                    </div>
                                </div>

                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse7" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2020
                                </a><br />
                                <div class="collapse" id="Collapse7">
                                    <div class="card card-body" style="padding-left: 25px;">
                                        <a href="{{ asset('upload/aqardata/criteria1/1.1.3/Physics.pdf') }}">Demo Senate</a> <br />
                                    </div>
                                </div>
                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse99" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2021 </a><br />
                                <div class="collapse" id="Collapse99">
                                    <div class="card card-body" style="padding-left: 25px;">
                                        <a href="{{ asset('upload/aqardata/criteria1/1.1.3/Physics.pdf') }}">Demo Senate</a> <br />
                                    </div>
                                </div>

                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse10" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2022 </a><br />
                                <div class="collapse" id="Collapse10">
                                    <div class="card card-body" style="padding-left: 25px;">
                                        <a href="{{ asset('upload/aqardata/criteria1/1.1.3/Physics.pdf') }}">Demo Senate</a> <br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="height: auto;">
            <div class="col-md-10">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Syndicate
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body text-justify">

                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse777" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2017 </a> <br />
                                <div class="collapse" id="Collapse777">
                                    <div class="card card-body" style="padding-left: 25px;">
                                            <a href="{{ asset('upload/Syndicate/2017/Proceeding 01.02.2017.pdf') }}">Proceeding of 01.02.2017</a> <br />
                                            <a href="{{ asset('upload/Syndicate/2017/Proceeding 8.10.2017.pdf') }}">Proceeding of 08.10.2017</a><br />
                                            <a href="{{ asset('upload/Syndicate/2017/Proceeding 11.04.2017.pdf') }}">Proceeding of 11.04.2017</a> <br />
                                            <a href="{{ asset('upload/Syndicate/2017/Proceeding 12.12.2017.pdf') }}">Proceeding of 12.12.2017</a> <br />
                                            <a href="{{ asset('upload/Syndicate/2017/Proceeding 19.12.2017.pdf') }}">Proceeding of 19.12.2017</a> <br />
                                            <a href="{{ asset('upload/Syndicate/2017/Proceeding 25.07.2017.pdf') }}">Proceeding of 25.07.2017</a> <br />
                                            <a href="{{ asset('upload/Syndicate/2017/Proceeding 27.05.2017.pdf') }}">Proceeding of 27.05.2017</a> <br />
                                    </div>
                                </div>

                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse12" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2018 </a> <br />
                                <div class="collapse" id="Collapse12">
                                    <div class="card card-body" style="padding-left: 25px;">
                                        <a href="{{ asset('upload/Syndicate/2018/Proceeding 01.12.2018.pdf') }}">Proceeding
                                            of 01.12.2018</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2018/Proceeding 02.02.2018.pdf') }}">Proceeding
                                            of 02.02.2018</a><br/>
                                        <a href="{{ asset('upload/Syndicate/2018/Proceeding 02.02.2018.pdf') }}">Proceeding
                                            of 02.12.2018</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2018/Proceeding 15.04.2018.pdf') }}">Proceeding
                                            of 15.04.2018</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2018/Proceeding 19.02.2018.pdf') }}">Proceeding
                                            of 19.02.2018</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2018/Proceeding 19.06.2018.pdf') }}">Proceeding
                                            of 19.06.2018</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2018/Proceeding 20.09.2018.pdf') }}">Proceeding
                                            of 20.09.2018</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2018/Proceeding 29.10.2018.pdf') }}">Proceeding
                                            of 29.10.2018</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2018/Proceeding 31.03.2018.pdf') }}">Proceeding
                                            of 31.03.2018</a><br/>

                                    </div>
                                </div>
                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse13" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2019</a><br />
                                <div class="collapse" id="Collapse13">
                                    <div class="card card-body" style="padding-left: 25px;">
                                      
                                        <a href="{{ asset('upload/Syndicate/2019/Proceeding 01.03.2019.pdf') }}">Proceeding
                                            of 01.03.2019</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2019/Proceeding 02.12.2019.pdf') }}">Proceeding
                                            of 02.12.2019</a><br/>
                                        <a href="{{ asset('upload/Syndicate/2019/Proceeding 03.08.2019.pdf') }}">Proceeding
                                            of 03.08.2019</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2019/Proceeding 13.12.2019.pdf') }}">Proceeding
                                            of 13.12.2019</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2019/Proceeding 14.06.2019.pdf') }}">Proceeding
                                            of 14.06.2019</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2019/Proceeding 20.07.2019.pdf') }}">Proceeding
                                            of 20.07.2019</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2019/Proceeding 29.08.2019.pdf') }}">Proceeding
                                            of 29.08.2019</a><br/>

                                    </div>
                                </div>

                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse14" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2020
                                </a><br />
                                <div class="collapse" id="Collapse14">
                                    <div class="card card-body" style="padding-left: 25px;">
                                         
                                        <a href="{{ asset('upload/Syndicate/2020/Proceeding 05.05.2020.pdf') }}">Proceeding
                                            of 05.05.2020</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2020/Proceeding 10.12.2020.pdf') }}">Proceeding
                                            of 10.12.2020</a><br/>
                                        <a href="{{ asset('upload/Syndicate/2020/Proceeding 13.11.2020.pdf') }}">Proceeding
                                            of 13.11.2020</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2020/Proceeding 28.11.2020.pdf') }}">Proceeding
                                            of 28.11.2020</a><br/>

                                    </div>
                                </div>
                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse15" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2021 </a><br />
                                <div class="collapse" id="Collapse15">
                                    <div class="card card-body" style="padding-left: 25px;">
                                 
                                        <a href="{{ asset('upload/Syndicate/2021/Proceeding  09.12.2021.pdf') }}">Proceeding
                                            of 09.12.2021</a><br/>

                                        <a href="{{ asset('upload/Syndicate/2021/Proceeding 19.12.2021.pdf') }}">Proceeding
                                            of 19.12.2021</a><br/>

                                    </div>
                                </div>

                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse16" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2022 </a><br />
                                <div class="collapse" id="Collapse16">
                                    <div class="card card-body" style="padding-left: 25px;">
                                        <a href="{{ asset('upload/Syndicate/2022/Proceeding of 04.01.2022.pdf') }}">Proceeding
                                            of 04.01.2022</a><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Academic Council
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body text-justify">

                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse18" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2017 </a><br />
                                <div class="collapse" id="Collapse18">
                                    <div class="card card-body" style="padding-left: 25px;">
                                        <a href="{{ asset('upload/Academic Councile/2017/Academic council 17.07.2017.pdf') }}">Academic Council
                                            17.07.2017</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2017/Academic Council 27.11.2017.pdf') }}">Academic Council
                                            27.11.2017</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2017/Academic council proceeding 17.07.2017.pdf ') }}">Academic Council
                                            17.07.2017</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2017/Academic Coundil 19.12.2017.pdf') }}">Academic Council
                                            19.12.2017</a> <br />
                                    </div>
                                </div>

                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse19" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2018 </a> <br />
                                <div class="collapse" id="Collapse19">
                                    <div class="card card-body" style="padding-left: 25px;">
                                        <a href="{{ asset('upload/Academic Councile/2018/Academic Council 07.03.2018.pdf') }}">Academic Council
                                            07.03.2018</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2018/Academic Council 12.06.2018.pdf') }}">Academic Council
                                            12.06.2018</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2018/Academic Council 22.10.2018.pdf') }}">Academic Council
                                            22.10.2018</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2018/Academic Council 26.03.2018.pdf') }}">Academic Council
                                            26.03.2018</a> <br />
                                    </div>
                                </div>
                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse20" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2019</a><br />
                                <div class="collapse" id="Collapse20">
                                    <div class="card card-body" style="padding-left: 25px;">
                                        <a href="{{ asset('upload/Academic Councile/2019/Academic Council 07.06.2019.pdf') }}">Academic Council
                                            07.06.2019</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2019/Academic Council 10.12.2019.pdf') }}">Academic Council
                                            10.12.2019</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2019/Academic Council 24.07.2019.pdf') }}">Academic Council
                                            24.07.2019</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2019/Academic Council 25.02.2019.pdf') }}">Academic Council
                                            25.02.2019</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2019/Academic Council 25.10.2019.pdf') }}">Academic Council
                                            25.10.2019</a> <br />
                                    </div>
                                </div>

                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse21" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2020
                                </a><br />
                                <div class="collapse" id="Collapse21">
                                    <div class="card card-body" style="padding-left: 25px;">
                                        <a href="{{ asset('upload/Academic Councile/2020/Academic Council 04.05.2020.pdf') }}">Academic Council
                                            04.05.2020</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2020/Academic Council 07.10.2020.pdf') }}">Academic Council
                                            07.10.2020</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2020/Academic Council 09.12.2020.pdf') }}">Academic Council
                                            09.12.2020</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2020/Academic Council 18.02.2020.pdf') }}">Academic Council
                                            18.02.2020</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2020/Academic Council 21.10.2020.pdf') }}">Academic Council
                                            21.10.2020</a> <br />
                                    </div>
                                </div>
                                <a class="btn btn-primary" data-toggle="collapse" href="#Collapse22" role="button"
                                    aria-expanded="false" aria-controls="myCollapseExample"
                                    style="margin-bottom: 12px;">2021 </a><br />
                                <div class="collapse" id="Collapse22" >
                                    <div class="card card-body" style="padding-left: 25px;">
                                        <a href="{{ asset('upload/Academic Councile/2021/Academic Council 17.12.2021.pdf') }}">Academic Council
                                            17.12.2021</a> <br />
                                        <a href="{{ asset('upload/Academic Councile/2021/Academic Council 19.06.2021.pdf') }}">Academic Council
                                            19.06.2021</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
