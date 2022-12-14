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
                                                href="#" style="color:#7C0000" title="">Criteria</a>
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
    <!-- slider ends here -->

    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-3 float-left col-1 pl-0 pr-0  width" id="sidebar">
                @include('Frontend.includes.sidebar.iqac_menu')
            </div>
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">AQAR 2020-21</h2>
                </div>



                <div class="row">
                    <div class="col-md-12">
                        <div class="tab" role="tabpanel">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#Section1" aria-controls="home"
                                        role="tab" data-toggle="tab">Criteria 1</a></li>
                                <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab"
                                        data-toggle="tab">Criteria 2</a></li>
                                <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab"
                                        data-toggle="tab">Criteria 3</a></li>
                                <li role="presentation"><a href="#Section4" aria-controls="home" role="tab"
                                        data-toggle="tab">Criteria 4</a></li>
                                <li role="presentation"><a href="#Section5" aria-controls="profile" role="tab"
                                        data-toggle="tab">Criteria 5</a></li>
                                <li role="presentation"><a href="#Section6" aria-controls="messages" role="tab"
                                        data-toggle="tab">Criteria 6</a></li>
                                <li role="presentation"><a href="#Section7" aria-controls="messages" role="tab"
                                        data-toggle="tab">Criteria 7</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseOne"
                                                                aria-expanded="false" aria-controls="collapseOne">
                                                                Curricular Aspects
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingOne">
                                                        <div class="panel-body text-justify">

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse2" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">1.1.2. Number of Programmes
                                                                where syllabus revision was carried out. </a>
                                                            <div class="collapse" id="Collapse2">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse5" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">1.1.3. Total number of courses
                                                                having focus on employability skill development offered by
                                                                the University. </a>
                                                            <div class="collapse" id="Collapse5">
                                                                <div class="card card-body">
                                                                    <div class="col-sm-6">
                                                                        <ul>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Physics.pdf') }}">Physics</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/AIH A & C.pdf') }}">Ancient
                                                                                    History</a></li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/BLIS.pdf') }}">BLIS</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Botany.pdf') }}">Botany</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/APJAKWIT.pdf') }}">B.Tech</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Chemistry.pdf') }}">Chemistry</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Economics.pdf') }}">Economics</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/English.pdf') }}">English</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Geography.pdf') }}">Geography</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Hindi.pdf') }}">Hindi</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/MBA.pdf') }}">MBA</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/B.Ed.pdf') }}">B.Ed</a>
                                                                            </li>

                                                                        </ul>

                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <ul>

                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/IGG.pdf') }}">PGDGC</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Maithili.pdf') }}">Maithili</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Math.pdf') }}">Math</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Music & Dramatics.pdf') }}">Music
                                                                                    & Dramatics</a></li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Psychology.pdf') }}">Psychology</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Sanskrit.pdf') }}">Sanskrit</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Sociology.pdf') }}">Sociology</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Urdu.pdf') }}">Urdu</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/History.pdf') }}">History</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Home Science.pdf') }}">Home
                                                                                    Science</a></li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/IFL.pdf') }}">IFL</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.1.3/Commerce.pdf') }}">Commerce</a>
                                                                            </li>
                                                                        </ul>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse6" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">1.2.1. Number of new courses
                                                                introduced of the total number of courses across all
                                                                programs offered. </a>
                                                            <div class="collapse" id="Collapse6">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/Bioinformatics.pdf') }}">View
                                                                        Data</a> 
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse7" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">1.2.2. Number of Programmes in
                                                                which (CBCS)/elective course system has been implemented.
                                                            </a>
                                                            <div class="collapse" id="Collapse7">
                                                                <div class="card card-body">
                                                                    
                                                                
                                                                <ul>
                                                                    <li><a href="{{ asset('upload/aqardata/CBCS-Ordinance & Regulation (2).pdf') }}">PG Programme</a></li>
                                                                    <li><a href="{{ asset('upload/aqardata/MBA- CBCS -06-08-2018_compressed (1).pdf') }}">MBA Programme</a></li>
                                                                    <li><a href="{{ asset('upload/aqardata/2-year B. Ed. Syllabus (1).pdf') }}">B.Ed Programme</a></li>
                                                                    <li><a href="#">B.Tech</a></li>
                                                                    <li><a href="#">I.G.G</a></li>
                                                                </ul>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse99" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">1.3.1. Crosscutting issue
                                                                relevent to Professional Ethics, Gender,Human
                                                                Values,Environment<br />and sustainability into the
                                                                curriculum </a>
                                                            <div class="collapse" id="Collapse99">
                                                                <div class="card card-body">
                                                                    <div class="col-sm-6">
                                                                        <ul>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Physics.pdf') }}">Physics</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/AIH A & C.pdf') }}">Ancient
                                                                                    History</a></li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/BLIS.pdf') }}">BLIS</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Botany.pdf') }}">Botany</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/APJAKWIT.pdf') }}">Btech</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Chemistry.pdf') }}">Chemistry</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Economics.pdf') }}">Economics</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/English.pdf') }}">English</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Geography.pdf') }}">Geography</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Hindi.pdf') }}">Hindi</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/History.pdf') }}">History</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Commerce.pdf') }}">Commerce</a>
                                                                            </li>

                                                                        </ul>

                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <ul>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Home Science.pdf') }}">Home
                                                                                    Science</a></li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/IFL.pdf') }}">IFL</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/IGG.pdf') }}">IGG</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Maithili.pdf') }}">Maithili</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Math.pdf') }}">Math</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Music & Dramatics.pdf') }}">Music
                                                                                    & Dramatics</a></li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Psychology.pdf') }}">Psychology</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Sanskrit.pdf') }}">Sanskrit</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Sociology.pdf') }}">Sociology</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/Urdu.pdf') }}">Urdu</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/B.Ed.pdf') }}">B.Ed</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/1.3.1/MBA.pdf') }}">MBA</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                             <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse10" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">1.3.2/1.3.3 Number of value-added
                                                                courses for imparting transferable and life skills
                                                                <br />Total number of students enrolled in the
                                                                courses under 1.3.2  </a>
                                                            <div class="collapse" id="Collapse10">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>
                                                            
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse8" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">1.3.4. Number of students
                                                                undertaking field projects / research projects / internships
                                                            </a>
                                                             <div class="collapse" id="Collapse8">
                                                                <div class="card card-body">
                                                                    <div class="col-sm-12">
                                                                        <div class="col-sm-6">
                                                                        <ul>
                                                                            <li><a href="{{ asset('upload/aqardata/criteria1/Project Work Certificate-1.3.4/Home Science.pdf') }}">Home Science</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/Project Work Certificate-1.3.4/Music & Dramatics.pdf') }}">Music & Dramatics</a></li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/Project Work Certificate-1.3.4/Economics.pdf') }}">Economics</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/Project Work Certificate-1.3.4/MBA (PRO).pdf') }}">MBA (PRO)</a>
                                                                            </li>
                                                                            <li><a
                                                                                    href="{{ asset('upload/aqardata/criteria1/Project Work Certificate-1.3.4/MBA (INT).pdf') }}">MBA (INT)</a>
                                                                            </li>
                                                                             <li><a
                                                                                        href="{{ asset('upload/aqardata/criteria1/Project Work Certificate-1.3.4/Geography.pdf') }}">Geography</a>
                                                                                </li>
                                                                        </ul>

                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                       <ul>
                                                                            <li><a href="{{ asset('upload/aqardata/criteria1/Project Work Certificate-1.3.4/Maithili.pdf') }}">Maithili</a>   </li>
                                                                            <li><a href="{{ asset('upload/aqardata/criteria1/Project Work Certificate-1.3.4/Urdu.pdf') }}">Urdu</a>    </li>
                                                                            <li><a href="{{ asset('upload/aqardata/criteria1/Project Work Certificate-1.3.4/Philosophy.pdf') }}">Philosophy</a>    </li>
                                                                            <li><a href="{{ asset('upload/aqardata/criteria1/Project Work Certificate-1.3.4/Sociology.pdf') }}">Sociology</a>    </li>
                                                                            <li><a href="{{ asset('upload/aqardata/criteria1/Project Work Certificate-1.3.4/B. Tech (CS).pdf') }}">B.Tech (CS)</a>    </li>
                                                                            <li><a href="{{ asset('upload/aqardata/criteria1/Project Work Certificate-1.3.4/B. Tech (IT).pdf') }}">B.Tech (IT)</a>    </li>
                                                                        </ul>
                                                                    </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse3333" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">1.4.1/1.4.2. Feedback
                                                                processes of the institution </a>
                                                            <div class="collapse" id="Collapse3333">
                                                                <div class="card card-body">
                                                                    <a href="{{route('iqacFeedback')}}">View Data</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="Section2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                Teaching-Learning and Evaluation
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingTwo">
                                                        <div class="panel-body text-justify">
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse21" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">2.1.1. Demand ratio. </a>
                                                            <div class="collapse" id="Collapse21">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/2.1.1.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div><br />
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse22" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">2.1.2. Total number of seats
                                                                filled against reserved categories. </a>
                                                            <div class="collapse" id="Collapse22">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/2.1.2.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div><br />

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse23" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">2.2.2.student-Full time
                                                                teacher ratio </a>
                                                            <div class="collapse" id="Collapse23">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/2.2.2.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse24" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">2.3.3:Ratio of students to
                                                                mentor for academic and other related issues. </a>
                                                            <div class="collapse" id="Collapse24">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/2.4.3.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse25" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">2.4.1.Total number of full
                                                                time teachers against sanchioned posts . </a>
                                                            <div class="collapse" id="Collapse25">
                                                                <div class="card card-body">
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse6" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">2.4.2.Total numbers of full
                                                                time teachers with Ph.D./D.M/M.Ch./D.N.B super
                                                                speciality/D.Sc./D.lit. </a>
                                                            <div class="collapse" id="Collapse6">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse27" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">2.4.3.Total teaching
                                                                experience of full time teachers in the same institution.
                                                            </a>
                                                            <div class="collapse" id="Collapse27">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/2.4.3.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse28" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">2.4.4. Total number of full
                                                                time teachers who recieved awards,recognition,fellowship
                                                            </a>
                                                            <div class="collapse" id="Collapse28">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/2.4.4.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>


                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse29" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">2.5.1. Number of days from the
                                                                date of last semester-end/year-end examination till the
                                                                declaration of results </a>
                                                            <div class="collapse" id="Collapse29">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>


                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse30" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">2.5.2.Total number of student
                                                                complaints/grievances about evalution against total number
                                                                appeared <br />in the examinations. </a>
                                                            <div class="collapse" id="Collapse30">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/2.5.2.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>


                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse31" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">2.5.4.status of automations of
                                                                examination division along with approved<br /> Examination
                                                                manual </a>
                                                            <div class="collapse" id="Collapse31">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>


                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse232" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">2.6.3. Number of students
                                                                passed. </a>
                                                            <div class="collapse" id="Collapse232">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div><br />


                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collaps233" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">2.7.1.Students satisfaction
                                                                survey. </a>
                                                            <div class="collapse" id="Collapse233">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="Section3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseThree"
                                                                aria-expanded="false" aria-controls="collapseThree">
                                                                Research,Innovations and Extension
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body text-justify">
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse331" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.1.2.The institution provides
                                                                seed money to its teachers for research{amount INR in
                                                                lakhs}. </a>
                                                            <div class="collapse" id="Collapse331">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse332" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.1.3.Number of teachers
                                                                receiving national/international fellowship/financial
                                                                support by various agencies <br />advanced studies/research.
                                                            </a>
                                                            <div class="collapse" id="Collapse332">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse333" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.1.4.Number of
                                                                JRFs,SRFs,Post-Doctoral Fellows.Research Associates and
                                                                other research fellows enrolled <br /> in the insititution
                                                            </a>
                                                            <div class="collapse" id="Collapse333">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/3.1.4.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse34" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.1.5:Institution has the
                                                                following facilities to support research. </a>
                                                            <div class="collapse" id="Collapse34">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse35" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.1.6.Number of departments
                                                                with UGC-SAP,CAS,DST-FIST,DBT,ICSSR and other recognitions
                                                                by national and <br /> international agencies. </a>
                                                            <div class="collapse" id="Collapse35">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse36" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.2.1. Extramural funding for
                                                                Research{INR in Lakhs}. </a>
                                                            <div class="collapse" id="Collapse36">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse37" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.2.2.Grants for research
                                                                projects sponsored by the government agencies{INR in Lakhs}.
                                                            </a>
                                                            <div class="collapse" id="Collapse37">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/3.2.2.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse38" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.2.3. Number of research
                                                                projects funded by government and non-government agencies
                                                            </a>
                                                            <div class="collapse" id="Collapse38">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/3.2.3.PDF') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse39" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.3.2.Numbers of
                                                                workshops/seminars conducted on Research
                                                                methodology,Intellectual property Right
                                                                {IPR},<br />enterpreneurship,skill development. </a>
                                                            <div class="collapse" id="Collapse39">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse40" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.3.3.Number of
                                                                awards/recognitions received for research/innovations by the
                                                                institution/teachers/research<br /> scolars/students </a>
                                                            <div class="collapse" id="Collapse40">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/3.3.3.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse41" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.4.1.The institution provides
                                                                incentives to teachers who receive state,national and
                                                                internatinal recognitions/awards. </a>
                                                            <div class="collapse" id="Collapse41">
                                                                <div class="card card-body">
                                                                    <a
                                                                        href="{{ asset('upload/aqardata/3.4.1 Final.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse42" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.4.2. The institutions
                                                                ensures implementation of its stated code of Ethics for
                                                                reaserch. </a>
                                                            <div class="collapse" id="Collapse42">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse43" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.4.3. Number of patents
                                                                published/awarded. </a>
                                                            <div class="collapse" id="Collapse43">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse44" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.4.4.Number of Ph.Ds
                                                                awarded.3.4.4.1:How many Ph.Ds are awarded during the
                                                                year?3.4.4.2:Number of <br /> teachers recognized as guides.
                                                            </a>
                                                            <div class="collapse" id="Collapse44">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/3.4.4.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse45" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.4.5.Number of research
                                                                pagers in the journals notified on UGC websites. </a>
                                                            <div class="collapse" id="Collapse45">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/3.4.5.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse46" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.4.6.Number of books and
                                                                chapters in edited volumes published. </a>
                                                            <div class="collapse" id="Collapse46">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse47" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.4.7. E-content is developed
                                                                by teachers. </a>
                                                            <div class="collapse" id="Collapse47">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse48" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.4.8.Bibliometrics of the
                                                                publications during the year based on average citation Index
                                                                in Scopus/web<br /> of Science/pubmed. </a>
                                                            <div class="collapse" id="Collapse48">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/3.4.8.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse49" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.4.9. Bibliometrics of the
                                                                publications during the year based on scopus/web of
                                                                science-h-Index of the University. </a>
                                                            <div class="collapse" id="Collapse49">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse50" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.5.2. Revenue generated from
                                                                consultancy and corporate training {INR in Lakhs}. </a>
                                                            <div class="collapse" id="Collapse50">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse51" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.6.2.Number of awards
                                                                received by the institution,its teachers and students. </a>
                                                            <div class="collapse" id="Collapse51">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse52" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.6.3. Number of extension and
                                                                outreach programs conducted bt the institution. </a>
                                                            <div class="collapse" id="Collapse52">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/3.6.3.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse53" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.6.4.Total number of students
                                                                participating extension activities listed at 3.6.3 above.
                                                            </a>
                                                            <div class="collapse" id="Collapse53">
                                                                <div class="card card-body">
                                                                    <a
                                                                        href="{{ asset('upload/aqardata/3.6.3 and 3.6.4.pdf ') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse54" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.7.1. Number of collaborative
                                                                activities with other institutions/reseach
                                                                establishment/industry for research <br />and academic
                                                                development. </a>
                                                            <div class="collapse" id="Collapse54">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse55" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">3.7.2. Number of functional
                                                                MoUs with institutions/industries in india and abroad. </a>
                                                            <div class="collapse" id="Collapse55">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="Section4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingFour">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseFour"
                                                                aria-expanded="false" aria-controls="collapseFour">
                                                                Infrastructure and Learning Resources
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFour" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingFour">
                                                        <div class="panel-body text-justify">
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse441" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">4.1.4.Total expenditure
                                                                excluding salary for infrastructure augmentation{INR in
                                                                Lakhs}. </a>
                                                            <div class="collapse" id="Collapse441">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/4.1.4.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse442" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">4.2.2.Institution has
                                                                subsciption for e-Library resources. </a>
                                                            <div class="collapse" id="Collapse442">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/4.2.2.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse443" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">4.2.3.Annual expenditure for
                                                                purchase of books/e-books and subsciption to
                                                                journals/e-journals
                                                                [INR in Lakhs] </a>
                                                            <div class="collapse" id="Collapse443">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/4.2.3.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse444" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">4.2.4.Number of usasge of
                                                                library by teachers and students per day{foot falls and
                                                                login data for online access}. </a>
                                                            <div class="collapse" id="Collapse444">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/4.2.4.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse445" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">4.3.1.Number of classrooms and
                                                                seminar halls with ICT-enable facilities such as LCD,smart
                                                                board,Wi-Fi/LAN,<br />audio video recording facilities. </a>
                                                            <div class="collapse" id="Collapse445">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/4.3.1.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse446" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">4.3.3.student-computer ratio.
                                                            </a>
                                                            <div class="collapse" id="Collapse446">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/4.3.3.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse447" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">4.3.4.Available bandwidht of
                                                                internet connection in the institution{Leased line}. </a>
                                                            <div class="collapse" id="Collapse447">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/4.3.4.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse448" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">4.3.5.Institution has the
                                                                following facilities for e-content development. </a>
                                                            <div class="collapse" id="Collapse448">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse449" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">4.4.1.Total expenditure
                                                                incurred on maintenance of physical facilities and academic
                                                                support facilities excluding <br />salary component.</a>
                                                            <div class="collapse" id="Collapse449">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/4.4.1.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="Section5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingfive">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapsefive"
                                                                aria-expanded="false" aria-controls="collapseFive">
                                                                Student Support and Progression
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapsefive" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="headingFive">
                                                        <div class="panel-body text-justify">
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse51" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">5.1.1.Total number of students
                                                                benefited by scholarships and free ships. </a>
                                                            <div class="collapse" id="Collapse51">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/5.1.1.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse52" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">5.1.2.Total number of students
                                                                benefited by career counselling and guidance for
                                                                <br />competitive examinations offered by the institution.
                                                            </a>
                                                            <div class="collapse" id="Collapse52">
                                                                <div class="card card-body">
                                                                    <a href="#">View Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse53" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">5.1.3. Following capacity development
                                                                and skills enhancement initiatives are taken by the
                                                                institution. </a>
                                                            <div class="collapse" id="Collapse53">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse54" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">5.1.4.The institution adopts
                                                                the following for redressal of student grievances including
                                                                <br />sexual harassment and ragging cases. </a>
                                                            <div class="collapse" id="Collapse54">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse55" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">5.2.1.Number of students
                                                                qualifying in state/national/international level
                                                                examinations. </a>
                                                            <div class="collapse" id="Collapse55">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse56" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">5.2.2.Total number of outgoing
                                                                students placed. </a>
                                                            <div class="collapse" id="Collapse56">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse57" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">5.2.3.Number of recently
                                                                graduated students who have progressed to higher education.
                                                            </a>
                                                            <div class="collapse" id="Collapse57">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse58" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">5.3.1.Number of awards/medals
                                                                won by students for outstanding performance in
                                                                sports/cultural activities. </a>
                                                            <div class="collapse" id="Collapse58">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse511" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">5.3.3.Number of sports and
                                                                cultural events/competitions organised by the institution.
                                                            </a>
                                                            <div class="collapse" id="Collapse511">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse512" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">5.4.2.alumni contribution{INR
                                                                in lakhs}. </a>
                                                            <div class="collapse" id="Collapse512">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="Section6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingsix">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapsesix"
                                                                aria-expanded="false" aria-controls="collapsesix">
                                                                Governance,leadership and management
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingsix">
                                                        <div class="panel-body text-justify">
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse61" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">6.2.3.e-governance in the
                                                                following area. </a>
                                                            <div class="collapse" id="Collapse61">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/6.2.3.pdf') }}">View Data</a>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse62" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">6.3.2.Total number of teachers
                                                                provided with financial support to attend
                                                                conferences/workshops and <br /> towards membership fee of
                                                                professional bodies. </a>
                                                            <div class="collapse" id="Collapse62">
                                                                <div class="card card-body">
                                                                    <a href="#">View Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse63" role="button" aria-expanded="false"
                                                                aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">6.3.3.Number of professional
                                                                development/administrative training Programmes organzied by
                                                                the <br /> institution for teaching and non-teaching staff.
                                                            </a>
                                                            <div class="collapse" id="Collapse63">
                                                                <div class="card card-body">
                                                                    <a href="#">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse64" role="button"
                                                                aria-expanded="false" aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">6.3.4.Total number of
                                                                teachers undergoing online/face to face faculty development
                                                                Programmes{FDP}. </a>
                                                            <div class="collapse" id="Collapse64">
                                                                <div class="card card-body">
                                                                    <a
                                                                        href="{{ asset('upload/aqardata/6.3.4_Motiur_FDP.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse65" role="button"
                                                                aria-expanded="false" aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">6.4.2.Funds/grants received
                                                                from government bodies during the year for development and
                                                                maintenance <br /> of infrastructure{not covered under
                                                                criteria III and V}{INR in Lakhs}. </a>
                                                            <div class="collapse" id="Collapse65">
                                                                <div class="card card-body">
                                                                    <a href="#">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse66" role="button"
                                                                aria-expanded="false" aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">6.4.3.Funds/Grants recieved
                                                                from non-goverment bodies,individuals,philanthropists for
                                                                development and <br /> maintenance of infrastructure{not
                                                                covered under criteria III and V}{INR in Lakhs}. </a>
                                                            <div class="collapse" id="Collapse66">
                                                                <div class="card card-body">
                                                                    <a href="#">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse67" role="button"
                                                                aria-expanded="false" aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">6.5.2.Institution has adopted
                                                                the following for quality assurance. </a>
                                                            <div class="collapse" id="Collapse67">
                                                                <div class="card card-body">
                                                                    <a href="#">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in" id="Section7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingseven">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseseven"
                                                                aria-expanded="false" aria-controls="collapseseven">
                                                                Institutional values of best practices
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseseven" class="panel-collapse collapse"
                                                        role="tabpanel" aria-labelledby="heading">
                                                        <div class="panel-body text-justify">
                                                            
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse72" role="button"
                                                                aria-expanded="false" aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">7.1.1.Measures initiated by the Institution for the promotion of 
                                                                gender equity. </a>
                                                            <div class="collapse" id="Collapse72">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/7.1.4.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse71" role="button"
                                                                aria-expanded="false" aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">7.1.2.The institution has
                                                                facilities for alternate sources of energy and energy
                                                                conservation. </a>
                                                            <div class="collapse" id="Collapse71">
                                                                <div class="card card-body">
                                                                    <a
                                                                        href="{{ asset('upload/aqardata/CRT 7.1.2.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse76" role="button"
                                                                aria-expanded="false" aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">7.1.3.Facilities in the Institution for the 
                                                                management of degradable and non-degrdable waste.
                                                            </a>
                                                            <div class="collapse" id="Collapse76">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>
                                                            
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse72" role="button"
                                                                aria-expanded="false" aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">7.1.4.Water conservation
                                                                facilities available in the Institution. </a>
                                                            <div class="collapse" id="Collapse72">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/7.1.4.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <br />
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse73" role="button"
                                                                aria-expanded="false" aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">7.1.5.Green campus
                                                                initiatives. </a>
                                                            <div class="collapse" id="Collapse73">
                                                                <div class="card card-body">
                                                                    <a
                                                                        href="{{ asset('upload/aqardata/CRT 7.1.5.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <br />
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse74" role="button"
                                                                aria-expanded="false" aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">7.1.6.Quality audits on
                                                                environment and energy. </a>
                                                            <div class="collapse" id="Collapse74">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/7.1.6.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>

                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse75" role="button"
                                                                aria-expanded="false" aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">7.1.7.Divyangan-friendly and
                                                                barrier-free environment. </a>
                                                            <div class="collapse" id="Collapse75">
                                                                <div class="card card-body">
                                                                    <a href="{{ asset('upload/aqardata/7.1.7.pdf') }}">View
                                                                        Data</a>
                                                                </div>
                                                            </div>
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse76" role="button"
                                                                aria-expanded="false" aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">7.1.10.Code of conduct for
                                                                students,teachers,administrators and other staff and conucts
                                                                periodic <br /> sensitization programmes in this regard.
                                                            </a>
                                                            <div class="collapse" id="Collapse76">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>
                                                            
                                                            <a class="btn btn-primary" data-toggle="collapse"
                                                                href="#Collapse76" role="button"
                                                                aria-expanded="false" aria-controls="myCollapseExample"
                                                                style="margin-bottom: 12px;">7.1.11.Institution celebrates/organizes national 
                                                                and international commemorative days,events and festivals
                                                                </a>
                                                            <div class="collapse" id="Collapse76">
                                                                <div class="card card-body">
                                                                    No data uploaded
                                                                </div>
                                                            </div>

                                                            
                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
