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
                                                href="#" style="color:#7C0000" title="">Affilliated Technical
                                                Colleges</a>
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
            @include('Frontend.includes.sidebar.academics_menu')
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Affilliated Technical Colleges</h2>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Sr.No.</th>
                                <th>Name of the college</th>
                                <th>Principal</th>
                                <th>Phone</th>
                                <th>Mobile</th>
                                <th>Email Id</th>
                                <th>Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Women's Institute of Technology</td>
                                <td>DR. B. S. JHA</td>
                                <td>N/A</td>
                                <td>8340379501</td>
                                <td>directorwit@yahoo.co.in</td>
                                <td>witlnmu.ac.in</td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection
