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
                                    <a href="#" style="color:#7C0000" title="" >Home</a> | <a href="#" style="color:#7C0000" title="" >R&D Cell</a>
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


<div class="container" style="margin-top: 40px;" >
    <div class="row">
        <div class=" col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-sm-5 col-xs-12">
                            <h4 class="title ">Research & Development Cell</span></h4>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover" border="2" style="text-align: left;">
                        <thead  >
                            <tr >
                                <th  style="font-size:15px;">S.No.</th>
                                <th style="font-size:15px;">Title / Heading</th>
                                <th style="font-size:15px;">Published</th>
                                <th style="font-size:15px;">File</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Particulars of organization, functions and duties</td>
                                <td>12/07/2022</td>
                                <td><a href="#"><img src="{{ asset('Frontend/images/pdf-icon.png') }}"
                                    alt=""></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
