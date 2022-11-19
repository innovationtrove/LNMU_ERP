@extends('Frontend.includes.layout')
@section('content')
    <link href="{{ asset('Frontend/galleryasset/lightgallery.css') }}" rel="stylesheet">
    <style type="text/css">
        body {
            background-color: #152836
        }

        .demo-gallery>ul {
            margin-bottom: 0;
        }

        .demo-gallery>ul>li {
            float: left;
            margin-bottom: 15px;
            margin-right: 20px;
            width: 200px;
        }

        .demo-gallery>ul>li a {
            border: 3px solid #FFF;
            border-radius: 3px;
            display: block;
            overflow: hidden;
            position: relative;
            float: left;
        }

        .demo-gallery>ul>li a>img {
            -webkit-transition: -webkit-transform 0.15s ease 0s;
            -moz-transition: -moz-transform 0.15s ease 0s;
            -o-transition: -o-transform 0.15s ease 0s;
            transition: transform 0.15s ease 0s;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            height: 100%;
            width: 100%;
        }

        .demo-gallery>ul>li a:hover>img {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
        }

        .demo-gallery>ul>li a:hover .demo-gallery-poster>img {
            opacity: 1;
        }

        .demo-gallery>ul>li a .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.1);
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            -webkit-transition: background-color 0.15s ease 0s;
            -o-transition: background-color 0.15s ease 0s;
            transition: background-color 0.15s ease 0s;
        }

        .demo-gallery>ul>li a .demo-gallery-poster>img {
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            opacity: 0;
            position: absolute;
            top: 50%;
            -webkit-transition: opacity 0.3s ease 0s;
            -o-transition: opacity 0.3s ease 0s;
            transition: opacity 0.3s ease 0s;
        }

        .demo-gallery>ul>li a:hover .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .demo-gallery .justified-gallery>a>img {
            -webkit-transition: -webkit-transform 0.15s ease 0s;
            -moz-transition: -moz-transform 0.15s ease 0s;
            -o-transition: -o-transform 0.15s ease 0s;
            transition: transform 0.15s ease 0s;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            height: 100%;
            width: 100%;
        }

        .demo-gallery .justified-gallery>a:hover>img {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
        }

        .demo-gallery .justified-gallery>a:hover .demo-gallery-poster>img {
            opacity: 1;
        }

        .demo-gallery .justified-gallery>a .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.1);
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            -webkit-transition: background-color 0.15s ease 0s;
            -o-transition: background-color 0.15s ease 0s;
            transition: background-color 0.15s ease 0s;
        }

        .demo-gallery .justified-gallery>a .demo-gallery-poster>img {
            left: 50%;
            margin-left: -10px;
            margin-top: -10px;
            opacity: 0;
            position: absolute;
            top: 50%;
            -webkit-transition: opacity 0.3s ease 0s;
            -o-transition: opacity 0.3s ease 0s;
            transition: opacity 0.3s ease 0s;
        }

        .demo-gallery .justified-gallery>a:hover .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .demo-gallery .video .demo-gallery-poster img {
            height: 48px;
            margin-left: -24px;
            margin-top: -24px;
            opacity: 0.8;
            width: 48px;
        }

        .demo-gallery.dark>ul>li a {
            border: 3px solid #04070a;
        }

        .home .demo-gallery {
            padding-bottom: 80px;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
                                                href="#" style="color:#7C0000" title="">Central Library
                                                Gallery</a>
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

    <div class="container" style="margin-top: 60px;margin-bottom:60px;">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            @include('Frontend.includes.sidebar.central_library_menu')
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Central Library (Gallery)</h2>
                </div>

                <section class="col-md-12 col-sm-12">
                    <div class="container demo-gallery">
                        <ul id="lightgallery" class="list-unstyled row">
                            <li class="col-xs-6 col-sm-4 col-md-3"
                                style="border: 3px dotted gold;border-radius:5px;box-shadow:0px 0px 15px 10px grey;"
                                data-src="{{ asset('Frontend/images/library/central-library/cl1.jpeg')}}">
                                <a href="">
                                    <img class="img-responsive"
                                        src="{{ asset('Frontend/images/library/central-library/cl1.jpeg')}}" style="height:150px;">
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3"
                                style="border: 3px dotted gold;border-radius:5px;box-shadow:0px 0px 15px 10px grey;"
                                data-src="{{ asset('Frontend/images/library/central-library/cl2.jpeg')}}" >
                                <a href="">
                                    <img class="img-responsive"
                                        src="{{ asset('Frontend/images/library/central-library/cl2.jpeg')}}" style="height:150px;">
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3"
                                style="border: 3px dotted gold;border-radius:5px;box-shadow:0px 0px 15px 10px grey;"
                                data-src="{{ asset('Frontend/images/library/central-library/cl3.jpeg')}}">
                                <a href="">
                                    <img class="img-responsive"
                                        src="{{ asset('Frontend/images/library/central-library/cl3.jpeg')}}" style="height:150px;">
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3"
                                style="border: 3px dotted gold;border-radius:5px;box-shadow:0px 0px 15px 10px grey;"
                                data-src="{{ asset('Frontend/images/library/central-library/cl4.jpeg')}}">
                                <a href="">
                                    <img class="img-responsive"
                                        src="{{ asset('Frontend/images/library/central-library/cl4.jpeg')}}" style="height:150px;">
                                </a>
                            </li>
                            
                        </ul>
                        <ul id="lightgallery" class="list-unstyled row">
                            <li class="col-xs-6 col-sm-4 col-md-3"
                                style="border: 3px dotted gold;border-radius:5px;box-shadow:0px 0px 15px 10px grey;"
                                data-src="{{ asset('Frontend/images/library/central-library/cl5.jpeg')}}">
                                <a href="">
                                    <img class="img-responsive"
                                        src="{{ asset('Frontend/images/library/central-library/cl5.jpeg')}}" style="height:150px;">
                                </a>
                            </li>
                            {{-- <li class="col-xs-6 col-sm-4 col-md-3"
                                style="border: 3px dotted gold;border-radius:5px;box-shadow:0px 0px 15px 10px grey;"
                                data-responsive="Frontend/images/college/s2.jpg 375, Frontend/images/college/s2.jpg 480, Frontend/images/college/s2.jpg 800"
                                data-src="Frontend/images/college/s2.jpg"
                                data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                                <a href="">
                                    <img class="img-responsive"
                                        src="{{ asset('upload/gallery/golden-jubilee/jubli2.jpg') }}" style="height:150px;">
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3"
                                style="border: 3px dotted gold;border-radius:5px;box-shadow:0px 0px 15px 10px grey;"
                                data-responsive="Frontend/images/college/s3.jpeg 375, Frontend/images/college/s3.jpeg 480, Frontend/images/college/s3.jpeg 800"
                                data-src="Frontend/images/college/s3.jpeg"
                                data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                                <a href="">
                                    <img class="img-responsive"
                                        src="{{ asset('upload/gallery/golden-jubilee/jubli3.jpg') }}" style="height:150px;">
                                </a>
                            </li>
                            <li class="col-xs-6 col-sm-4 col-md-3"
                                style="border: 3px dotted gold;border-radius:5px;box-shadow:0px 0px 15px 10px grey;"
                                data-responsive="Frontend/images/college/s3.jpeg 375, Frontend/images/college/s3.jpeg 480, Frontend/images/college/s3.jpeg 800"
                                data-src="Frontend/images/college/s3.jpeg"
                                data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                                <a href="">
                                    <img class="img-responsive"
                                        src="{{ asset('upload/gallery/golden-jubilee/jubli3.jpg') }}" style="height:150px;">
                                </a>
                            </li> --}}
                            
                        </ul>
                    </div>

                </section>


            </main>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#lightgallery').lightGallery();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="{{ asset('Frontend/galleryasset/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('Frontend/galleryasset/jquery.mousewheel.min.js') }}"></script>
@endsection
