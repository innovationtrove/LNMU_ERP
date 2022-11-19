@extends('Frontend.includes.layout')
<style>
    /* Accordion & Toggle */
    .alterna-accordion {
        margin-bottom: 10px;
    }

    .alterna-accordion .accordion-panel {
        margin-bottom: 10px;
        background: none;
        border: none;
        border-radius: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 1px solid #e8e8e8;
        padding: 10px;
        border-radius: 4px;
    }

    .alterna-accordion .accordion-title {
        line-height: 26px;
        margin: 0;
    }

    .alterna-accordion .accordion-title a {
        position: relative;
        padding-left: 34px;
        display: block;
    }

    .alterna-accordion .accordion-icon {
        font-size: 14px;
        position: absolute;
        left: 0;
        top: 50%;
        margin-top: -13px;
        width: 26px;
        height: 26px;
        color: #ffffff;
        padding: 3px 5px;
        text-align: center;
        line-height: 20px;
        border-radius: 4px;
    }

    .alterna-accordion .accordion-icon i {
        margin: 0;
    }

    .alterna-accordion .accordion-heading .fa-plus {
        display: none;
    }

    .alterna-accordion .accordion-heading .fa-minus {
        display: inline-block;
    }

    .alterna-accordion .accordion-heading .collapsed .fa-plus {
        display: inline-block;
    }

    .alterna-accordion .accordion-heading .collapsed .fa-minus {
        display: none;
    }

    .alterna-accordion .accordion-body {
        padding: 10px;
        padding-left: 60px;
    }

    .alterna-accordion .accordion-collapse {
        margin-top: 10px;
        background: #efefef;
        border-radius: 4px;
    }

    .alterna-toggle {
        border: 1px solid #e8e8e8;
        padding: 10px;
        border-radius: 4px;
    }
</style>
@section('content')
    <!-- slider starts here -->
    <div class="container-fluid" style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;">
        <p class="text-center">Programme/Courses</p>
    </div>
    <!-- slider ends here -->
    <section class="container " style="margin-top: 50px;">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingEight">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Post Doctoral Programmes
                        </a>
                    </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Ancient Indian History)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Economics)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Education)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Geogrophy)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (History)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Home Science)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Political Science)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Psychology)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Sociology)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Commerce)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Management)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (English)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Hindi)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Maithili)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Philosophy)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Sanskrit)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Urdu)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Dramatics)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Litt (Music)</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Sc (Botany)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Sc (Bio-technology)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Sc (Chemistry)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Sc (Mathematics)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Sc (Physics)</a></li>
                                    <li> <a href="{{ asset('upload/course/syllabus/D.Litt & D.Sc regulation.pdf') }}"
                                            target="_blank">D.Sc (Zoology)</a></li>
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
                            Doctoral Programmes
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <ul>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Botany.pdf') }}" target="_blank">PhD
                                    (Botany)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Bio-Technology.pdf') }}"
                                    target="_blank">PhD (Bio-technology)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Chemistry.pdf') }}" target="_blank">PhD
                                    (Chemistry)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Physics.pdf') }}" target="_blank">PhD
                                    (Mathematics)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Physics.pdf') }}" target="_blank">PhD
                                    (Physics)</a></li>
                            <li> <a href="#" target="_blank">PhD (Zoology)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/AIH.pdf') }}" target="_blank">PhD
                                    (Ancient Indian History)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Economics.pdf') }}f" target="_blank">PhD
                                    (Economics)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Education.pdf') }}" target="_blank">PhD
                                    (Education)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Geography.pdf') }}" target="_blank">PhD
                                    (Geogrophy)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/History.pdf') }}" target="_blank">PhD
                                    (History)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Home%20Science.pdf') }}"
                                    target="_blank">PhD (Home Science)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Pol.%20Science.pdf') }}"
                                    target="_blank">PhD (Political Science)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Psychology.pdf') }}" target="_blank">PhD
                                    (Psychology)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Sociology.pdf') }}" target="_blank">PhD
                                    (Sociology)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Commerce.pdf') }}" target="_blank">PhD
                                    (Commerce)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Botany.pdf') }}" target="_blank">PhD
                                    (Management)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/English.pdf') }}" target="_blank">PhD
                                    (English)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Hindi.pdf') }}" target="_blank">PhD
                                    (Hindi)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Maithili.pdf') }}" target="_blank">PhD
                                    (Maithili)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Philosophy.pdf') }}" target="_blank">PhD
                                    (Philosophy)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Sanskrit.pdf') }}" target="_blank">PhD
                                    (Sanskrit)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Urdu.pdf') }}" target="_blank">PhD
                                    (Urdu)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Dramatics.pdf') }}" target="_blank">PhD
                                    (Dramatics)</a></li>
                            <li> <a href="{{ asset('upload/course/syllabus/Ph.D/Music.pdf') }}" target="_blank">PhD
                                    (Music)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            PG Programmes
                        </a>
                    </h4>
                </div>


                <div id="collapseThree" class="accordion-collapse collapse ">
                    <div class="accordion-body">


                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->
                        <hr>

                        <ul>
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0010"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.Sc (Botany)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0010" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Botany (1).pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/Revised CBCS Botany.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse"
                                                            href="#toggle-0011">
                                                            <span class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i>
                                                                <i class="fa fa-plus"></i></span>M.Sc (Chemistry)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0011" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Chemistry.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/pg%20syllabus/MSc%20Chemistry%20syllabus%20LMU.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0012"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.Sc (Mathematics)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0012" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Mathematics.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/msc%20syllabus%20Math_compressed.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0013"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.Sc (Physics)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0013" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Physics.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/Physics%20syllabus%20PG.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0014"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.Sc (Zoology)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0014" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Zoology.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/Zoology(CBCS)-Modified.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0015"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.Com</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0015" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Commerce.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/M.%20Com.%20Syllabus%20CBCS-2018_compressed.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0016"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>MBA</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0016" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/MBA.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/MBA-%20CBCS%20-06-08-2018_compressed.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0017"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(Economics)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0017" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Economics.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/PG%20Economics-CBCS-Syll_compressed.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0018"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(English)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0018" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/English.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/English%20Syllabus-min-compressed-ilovepdf-compressed.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0019"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(Geography)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0019" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Geography.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/Syllabus%20-Geography%20Department%20(L%20N%20M%20U,%20DBG)_compressed.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0020"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(Home-Science)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0020" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Home Science (1).pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/Home%20sci%20CBCS.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0021"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(AIHC)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0021" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/AIH.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/Ancient%20Indian%20History-min_compressed.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0023"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(Maithili)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0023" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/History.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="#" target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0024"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(Philosophy)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0024" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Philosophy.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href={{ asset('upload/course/syllabus/philosophy%20syllabus.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0025"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(Political
                                                            Science)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0025" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Pol. Sc..pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/Political%20Science%20CBCS-min.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0026"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(Sanskrit)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0026" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Sanskrit.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/sanskrit_compressed.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0027"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(Sociology)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0027" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Sociology.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/PG%20Sociology%20Syllabus.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--<li><a href="http://lnmuacin.in/studentnotice/PG%20Subjects/Hindi%20CBCS%20(Revised)-min.pdf" target="_blank">Hindi</a></li>-->
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0028"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(Hindi)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0028" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Hindi.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/hindi%20Syllabus-min.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0029"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(Urdu)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0029" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Urdu.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/Urdu-min.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0030"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(Psychology)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0030" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Psychology.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/Psychology%20%20syllabus_compressed.pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="alterna-toggle alterna-accordion">
                                                <div class="accordion-heading">
                                                    <h4 class="accordion-title"><a class="accordion-toggle collapsed"
                                                            data-toggle="collapse" href="#toggle-0031"><span
                                                                class="accordion-icon btn-theme"><i
                                                                    class="fa fa-minus"></i><i
                                                                    class="fa fa-plus"></i></span>M.A(Music)</a>
                                                    </h4>
                                                </div>
                                                <div id="toggle-0031" class="accordion-collapse collapse ">
                                                    <div class="accordion-body">


                                                        <!--<h2 style="text-align:left; border-bottom:1px solid #000;">PG Programmes</h2>-->


                                                        <ul>
                                                            <li><a href="{{ asset('upload/course/Learning outcome/Music.pdf') }}"
                                                                    target="_blank">Learning Outcome</a></li>
                                                            <li><a href="{{ asset('upload/course/syllabus/Syllabus%20(MUSIC).pdf') }}"
                                                                    target="_blank">Syllabus</a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            PG Diploma Programmes
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        <ul>
                            <li> <a href="{{ asset('upload/course/syllabus/PGDGC%20Syllabus%20Latest%20IGG.pdf') }}"
                                    target="_blank">PG Diploma in Geriatric Care</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            UG Programmes
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                        <ul>
                            <li><a href="{{ asset('upload/course/syllabus/Complete syllabus B-Tech IT.pdf') }}">B.Tech.(Information
                                    Technology)</a></li>
                            <li><a href="{{ asset('upload/course/syllabus/Complete Syllabus of B-Tech CSE.pdf') }}">B.Tech.(Computer
                                    Science &amp; Engineering)</a></li>
                            <li><a
                                    href="{{ asset('upload/course/syllabus/BIOINFORMATICS SYLLABUS (1).pdf') }}">B.Tech.(Bioinformatics)</a>
                            </li>
                            <li><a href="{{ asset('upload/course/syllabus/BLIS Syllabus  LNMU.pdf') }}">BLIS</a></li>
                            <li><a href="{{ asset('upload/course/syllabus/B.ed/2-year B. Ed. Syllabus.pdf') }}">Bachelor
                                    of Education.(B.Ed)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Certificate Courses
                        </a>
                    </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body">

                        <ul>
                            <li><a href="#">Certification in Flute</a></li>
                            <li><a href="#">Certification in Pahawaj</a></li>
                            <li><a href="#">Certification in Harmonium</a></li>
                            <li><a href="#">Certification in Tabla</a></li>
                            <li><a href="#">Certification in Acting</a></li>
                            <li><a href="#">Certification in Sikki Art</a></li>
                            <li><a href="#">Certification in Mithila Painting</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingNine">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Learning Outcomes
                        </a>
                    </h4>
                </div>
                <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                    <div class="panel-body">
                        <ul>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Botany (1).pdf') }}"
                                    target="_blank">M.Sc (Botany)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Chemistry.pdf') }}"
                                    target="_blank">M.Sc (Chemistry)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Mathematics.pdf') }}"
                                    target="_blank">M.Sc (Mathmatics)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Physics.pdf') }}" target="_blank">M.Sc
                                    (Physics)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Zoology.pdf') }}"
                                    target="_blank">M.Sc (Zoology)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Commerce.pdf') }}"
                                    target="_blank">M.Com</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/MBA.pdf') }}" target="_blank">MBA</a>
                            </li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Economics.pdf') }}"
                                    target="_blank">M.A(Economics)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/English.pdf') }}"
                                    target="_blank">M.A(English)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Geography.pdf') }}"
                                    target="_blank">M.A(Geography)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Home Science (1).pdf') }}"
                                    target="_blank">M.A(Home Science)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/AIH.pdf') }}"
                                    target="_blank">M.A(AIHC)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Philosophy.pdf') }}"
                                    target="_blank">M.A(Philosophy)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Pol. Sc..pdf') }}"
                                    target="_blank">M.A(Political Science)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Sanskrit.pdf') }}"
                                    target="_blank">M.A(Sanskrit)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Sociology.pdf') }}"
                                    target="_blank">M.A(Sociology)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Hindi.pdf') }}"
                                    target="_blank">M.A(Hindi)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Urdu.pdf') }}"
                                    target="_blank">M.A(Urdu)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Psychology.pdf') }}"
                                    target="_blank">M.A(Psychology)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Music.pdf') }}"
                                    target="_blank">M.A(Music)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Dramatics.pdf') }}"
                                    target="_blank">M.A(Dramatics)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/History.pdf') }}"
                                    target="_blank">M.A(History)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/Maithili.pdf') }}"
                                    target="_blank">M.A(Maithili)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/B.Ed.pdf') }}"
                                    target="_blank">B.Ed</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/B.TEch CS.pdf') }}"
                                    target="_blank">B.Tech(CS)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/B.Tech IT.pdf') }}"
                                    target="_blank">B.Tech(IT)</a></li>
                            <li> <a href="{{ asset('upload/course/Learning outcome/B.Tech (Bioinformatics).pdf') }}"
                                    target="_blank">B.Tech(Bioinformatics))</a></li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container" style="margin-bottom: 50px;">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSeven">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Regulation / Syllabus
                        </a>
                    </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                    <div class="panel-body">

                        <div class=" col-md-12">
                            <div class="panel">
                                <div class="panel-body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Programme Name</th>
                                                <th>Regulation</th>
                                                <th>Syllabus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>M.Sc (Botany)</td>
                                                <td><a href="https://lnmu.ac.in/upload/Regulation/CBCS-Ordinance%20&%20Regulation%20for%20PG%20Degree%20Course_Science.pdf"
                                                        target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/Revised CBCS Botany.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>M.Sc (Chemistry)</td>
                                                <td><a href="https://lnmu.ac.in/upload/Regulation/CBCS-Ordinance%20&%20Regulation%20for%20PG%20Degree%20Course_Science.pdf"
                                                        target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/pg%20syllabus/MSc%20Chemistry%20syllabus%20LMU.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>M.Sc (Mathematics)</td>
                                                <td><a href="https://lnmu.ac.in/upload/Regulation/CBCS-Ordinance%20&%20Regulation%20for%20PG%20Degree%20Course_Science.pdf"
                                                        target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/msc%20syllabus%20Math_compressed.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>M.Sc (Physics)</td>
                                                <td><a href="https://lnmu.ac.in/upload/Regulation/CBCS-Ordinance%20&%20Regulation%20for%20PG%20Degree%20Course_Science.pdf"
                                                        target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/Physics%20syllabus%20PG.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>M.Sc (Zoology)</td>
                                                <td><a href="https://lnmu.ac.in/upload/Regulation/CBCS-Ordinance%20&%20Regulation%20for%20PG%20Degree%20Course_Science.pdf"
                                                        target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/Zoology(CBCS)-Modified.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>M.Com</td>
                                                <td><a href="https://lnmu.ac.in/upload/Regulation/CBCS-Ordinance%20&%20Regulation%20for%20PG%20Degree%20Course_Commerce.pdf"
                                                        target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/M.%20Com.%20Syllabus%20CBCS-2018_compressed.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>MBA</td>
                                                <td><a href="https://lnmu.ac.in/upload/Regulation/CBCS%20Curriulum_MBA.pdf"
                                                        target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/MBA-%20CBCS%20-06-08-2018_compressed.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>M.A. (Economics)</td>
                                                <td><a href="https://lnmu.ac.in/upload/Regulation/CBCS-Ordinance%20&%20Regulation%20for%20PG%20Degree%20Course_Social%20Science12.pdf"
                                                        target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/PG%20Economics-CBCS-Syll_compressed.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>M.A. (English)</td>
                                                <td><a href="https://lnmu.ac.in/regulation" target="_blank">View
                                                        Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/English%20Syllabus-min-compressed-ilovepdf-compressed.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>M.A. (Geography)</td>
                                                <td><a href="https://lnmu.ac.in/upload/Regulation/CBCS-Ordinance%20&%20Regulation%20for%20PG%20Degree%20Course_Social%20Science12.pdf"
                                                        target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/Syllabus%20-Geography%20Department%20(L%20N%20M%20U,%20DBG)_compressed.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>M.A. (Home Science)</td>
                                                <td><a href="https://lnmu.ac.in/upload/Regulation/CBCS-Ordinance%20&%20Regulation%20for%20PG%20Degree%20Course_Social%20Science12.pdf"
                                                        target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/Home%20sci%20CBCS.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>M.A. (AIHC)</td>
                                                <td><a href="https://lnmu.ac.in/upload/Regulation/CBCS-Ordinance%20&%20Regulation%20for%20PG%20Degree%20Course_Social%20Science12.pdf"
                                                        target="_blank">View Regulation</a></td>
                                                <td><a
                                                        href="{{ asset('upload/course/syllabus/Ancient%20Indian%20History-min_compressed.pdf') }} target="_blank">View
                                                        Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>M.A. (Philosphy)</td>
                                                <td><a href="https://lnmu.ac.in/regulation" target="_blank">View
                                                        Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/philosophy%20syllabus.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>M.A. (Political Science)</td>
                                                <td><a href="https://lnmu.ac.in/upload/Regulation/CBCS-Ordinance%20&%20Regulation%20for%20PG%20Degree%20Course_Social%20Science12.pdf"
                                                        target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/Political%20Science%20CBCS-min.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>M.A. (Sanskrit)</td>
                                                <td><a href="https://lnmu.ac.in/regulation" target="_blank">View
                                                        Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/sanskrit_compressed.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>M.A. (Sociology)</td>
                                                <td><a href="https://lnmu.ac.in/regulation" target="_blank">View
                                                        Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/PG%20Sociology%20Syllabus.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>M.A. (Hindi)</td>
                                                <td><a href="https://lnmu.ac.in/regulation" target="_blank">View
                                                        Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/hindi%20Syllabus-min.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>M.A. (Urdu)</td>
                                                <td><a href="https://lnmu.ac.in/regulation" target="_blank">View
                                                        Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/Urdu-min.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>M.A. (Psychology)</td>
                                                <td><a href="https://lnmu.ac.in/upload/Regulation/CBCS-Ordinance%20&%20Regulation%20for%20PG%20Degree%20Course_Social%20Science12.pdf"
                                                        target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/Psychology%20%20syllabus_compressed.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>M.A. (Music)</td>
                                                <td><a href="https://lnmu.ac.in/regulation" target="_blank">View
                                                        Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/Syllabus%20(MUSIC).pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>

                                            <tr>
                                                <td>21</td>
                                                <td>PG Diploma in Geriatric Care</td>
                                                <td><a href="#" target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/PGDGC%20Syllabus%20Latest%20IGG.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td>B.Tech.(Information Technology)</td>
                                                <td><a href="#" target="_blank">View Regulation</a></td>
                                                <td><a href="#" target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>23</td>
                                                <td>B.Tech.(Computer Science &amp; Engineering)</td>
                                                <td><a href="#" target="_blank">View Regulation</a></td>
                                                <td><a href="#" target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>24</td>
                                                <td>B.Tech.(Bioinformatics)</td>
                                                <td><a href="#" target="_blank">View Regulation</a></td>
                                                <td><a href="#" target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>25</td>
                                                <td>Bachelor of Education.(B.Ed)</td>
                                                <td><a href="#" target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/B.ed/2-year B. Ed. Syllabus.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>26</td>
                                                <td>Certification in Flute</td>
                                                <td><a href="#" target="_blank">View Regulation</a></td>
                                                <td><a href="#" target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>Certification in Pahawaj</td>
                                                <td><a href="#" target="_blank">View Regulation</a></td>
                                                <td><a href="#" target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>28</td>
                                                <td>Certification in Harmonium</td>
                                                <td><a href="#" target="_blank">View Regulation</a></td>
                                                <td><a href="#" target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>29</td>
                                                <td>Certification in Tabla</td>
                                                <td><a href="#" target="_blank">View Regulation</a></td>
                                                <td><a href="#" target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>30</td>
                                                <td>Certification in Acting</td>
                                                <td><a href="#" target="_blank">View Regulation</a></td>
                                                <td><a href="{{ asset('upload/course/syllabus/Psychology%20%20syllabus_compressed.pdf') }}"
                                                        target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td>Certification in Sikki Art</td>
                                                <td><a href="#" target="_blank">View Regulation</a></td>
                                                <td><a href="#" target="_blank">View Syllabus</a></td>
                                            </tr>
                                            <tr>
                                                <td>32</td>
                                                <td>Certification in Mithila Painting</td>
                                                <td><a href="#" target="_blank">View Regulation</a></td>
                                                <td><a href="#" target="_blank">View Syllabus</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
