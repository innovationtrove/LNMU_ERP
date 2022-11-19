@extends('Frontend.includes.layout')
@section('content')

       <!-- slider starts here -->
<section id="yt_spotlight1" class="block">
    <div class="container">
        <div class="row">
        <div id="slideshow" class="col-sm-12">
            <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right" data-interval="5000" data-pause="hover">
                <!-- Carousel items -->
                <div class="slickslider-items bg-style1">
                    <div class="slickslider-item item clearfix active">
                        <div class="images-slideshow"><img alt="" src="{{asset('Frontend/images/internal%20banners/banner119.jpg')}}"/></div>
                        <div class="item-content">
                            <div class="item-content-inner">
                                <h5 class="item-title" >
                                    <a href="#" style="color:#7C0000" title="" >Home</a> | <a href="#" style="color:#7C0000" title="" >E-Learning Resources</a>
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
<div class="container-fluid" style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;">
<p class="text-center">E-Learning Resources</p>
</div>
<!-- slider ends here -->


    {{-- <section class="container" style="margin-top: 50px;margin-bottom:50px;">
        <ul>
            <li> <a href="/pg-materials" style="font-size: 20px;color:black;">CLick here to access faculty wise study Materials for PG courses</a></li>
            <li> <a href="ug-materials" style="font-size: 20px;color:black;">CLick here to access college wise study Materials for UG courses</a></li>
            <li> <a href="https://drive.google.com/drive/folders/1GaNgTDAwRUFnwlzDbAH4xoRX7OMr4oNS" style="font-size: 20px;color:black;">CLick here to access student learning materials of Directorate of Distance Education</a></li>
            <li> <a href="https://www.youtube.com/channel/UCxASdduIM9Vc7CYjGFAf50w/videos" style="font-size: 20px;color:black;">YouTube Links</a></li>
        </ul>
    </section> --}}

    <section class="container" style="margin-top: 30px;">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            LNMU Web Resources 
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">

                        <div class=" col-md-12">
                            <div class="panel">
                                <div class="panel-body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Resource Name</th>
                                                <th>Resource Link</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>E-content courseware in PG /UG subjects</td>
                                                <td><a href="https://lnmu.ac.in/e-learning-resources"
                                                        target="_blank">View Link</a></td>
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

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Open E-Resources by MHRD & UGC
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">

                        <div class=" col-md-12">
                            <div class="panel">
                                <div class="panel-body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Resource Name</th>
                                                <th>Resource Link</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>ESWAYAM Online Courses</td>
                                                <td><a href="http://storage.googleapis.com/uniquecourses/online.html"
                                                        target="_blank">View Link</a></td>
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

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            E-Books
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">

                        <div class=" col-md-12">
                            <div class="panel">
                                <div class="panel-body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Resource Name</th>
                                                <th>Resource Link</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>UGC</td>
                                                <td><a href="https://ugc.ac.in/ebook.aspx"
                                                        target="_blank">View Link</a></td>
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

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            International Open E-Resources
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">

                        <div class=" col-md-12">
                            <div class="panel">
                                <div class="panel-body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Resource Name</th>
                                                <th>Resource Link</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Univeristy of California</td>
                                                <td><a href="http://ocw.uci.edu"
                                                        target="_blank">View Link</a></td>
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

    <section class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            E-Tutorials
                        </a>
                    </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">

                        <div class=" col-md-12">
                            <div class="panel">
                                <div class="panel-body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Resource Name</th>
                                                <th>Resource Link</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Excel Tutorials</td>
                                                <td><a href="http://www.excel-easy.com/"
                                                        target="_blank">View Link</a></td>
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
