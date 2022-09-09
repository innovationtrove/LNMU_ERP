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
                                                href="#" style="color:#7C0000" title="">Office Orders</a>
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

            @include('Frontend.includes.sidebar.documents_menu')

            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>


                <div class="container" style="margin-top: 20px;">
                    <div class="row">
                        <div class=" col-md-9">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col col-sm-5 col-xs-12">
                                            <h4 class="title">Office <span>Orders</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sr.No.</th>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($notices)
                                                @foreach ($notices as $notice)
                                                    @if ($notice->type == 'link')
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $notice->title }}</td>
                                                            <td>{{ $notice->updated_at }}</td>
                                                            <td>
                                                                <div class="user_icon">
                                                                    <a href="{{ $notice->filename }}"><img
                                                                            style="height:50px;width:50px;"
                                                                            src="{{ asset('Frontend/images/links-icon.jpeg') }}"
                                                                            alt=""></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @elseif($notice->type == 'file')
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $notice->title }}</td>
                                                            <td>{{ $notice->updated_at }}</td>
                                                            <td>
                                                                <div class="user_icon">
                                                                    <a
                                                                        href="{{ asset('upload/Notice') }}/{{ $notice->filename }}"><img
                                                                            style="height:50px;width:50px;"
                                                                            src="{{ asset('Frontend/images/pdf.png') }}"
                                                                            alt=""></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td class="w-100">No Data</td>
                                                </tr>
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
