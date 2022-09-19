@extends('Frontend.includes.layout')
@section('header-area')
    <style>
        .form-container {
            background-color: #e8ddbf;
            font-family: 'Nunito', sans-serif;
            text-align: center;
            padding: 52px 106px 90px;
            border-radius: 50%;
        }

        .form-container .title {
            color: #666157;
            font-size: 30px;
            font-weight: 700;
            text-transform: capitalize;
            margin: 0 0 20px;
            display: inline-block;
            position: relative;
        }

        .form-container .form-horizontal .form-group {
            font-size: 0px;
            margin: 0 0 15px;
        }

        .form-container .form-horizontal .form-control {
            color: #666157;
            background: #E6E6E6;
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 1px;
            height: 45px;
            padding: 6px 30px;
            border-radius: 50px;
            box-shadow: inset -3px -3px 10px #eee;
            border: none;
            border-top: 2px solid #CECECE;
            border-left: 2px solid #CECECE;
        }

        .form-container .form-horizontal .form-control:focus {
            outline: none;
            box-shadow: none;
        }

        .form-container .form-horizontal .form-control::placeholder {
            color: #666157;
            font-weight: 600;
            font-style: italic;
        }

        .form-container .form-horizontal .btn {
            color: #fff;
            background-color: #e6a760;
            font-size: 25px;
            font-weight: 700;
            font-style: italic;
            text-transform: capitalize;
            width: 100%;
            border: none;
            border-radius: 50px;
            box-shadow: inset -3px -3px 10px #bd841b;
            transition: all 0.3s ease 0s;
        }

        .form-container .form-horizontal .btn:hover {
            letter-spacing: 3px;
        }

        .form-container .form-horizontal .btn:focus {
            outline: none;
        }

        @media only screen and (max-width:479px) {
            .form-container {
                padding: 50px 50px 70px;
                border-radius: 30%;
            }
        }
    </style>
@endsection
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
                                                href="#" style="color:#7C0000" title="">Verify Faculty Email</a>
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

    <div class="container" style="margin-top:50px; margin-bottom:50px;">
        <h2 class="text-center" style="margin-bottom: 20px;">Please enter your correct email address for faculty
            registration !</h2>
        <div class="form-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                        <div class="form-container">
                            <h3 class="title">Email Verification</h3>
                            <form class="form-horizontal" action="{{ route('sendFacultyEmail') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Enter your correct email address">

                                </div>
                                @error('email')
                                    <div class="alert alert-danger mt-1 mb-1  rounded-pill">{{ $message }}</div>
                                @enderror
                                <button class="btn btn-default"> Send </button>
                            </form>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (Session::has('success'))
        <script>
            Swal.fire(
                'Success !',
                'Register Link has been send on your email',
                'success'
            )
        </script>
    @endif
@endsection
