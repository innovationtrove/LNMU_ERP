<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('Frontend.includes.head')
</head>

<body id="bd" class="homepage home-layout1 res" >
    <div class="loader">
        <img src="{{ asset('Frontend/images/icon/newlnmu.gif') }}" />
    </div>
    <div id="yt_wrapper" class="layout-wide">
        <!-- header starts here -->
        @include('Frontend.includes.header')
        <!-- header ends here -->
        <!-- slider starts here -->
        <section id="yt_spotlight1" class="block">
            <div class="container">
                <div class="row">
                    <div id="slideshow" class="col-sm-9" style="padding-right:0 !important">
                        <div id="sj_k2slickslider346" class="sj-k2slickslider slide slickslider-right"
                            data-interval="5000" data-pause="hover">
                            <!-- Carousel items -->
                            <div class="slickslider-items bg-style1">

                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow">
                                        <img alt="" src="{{ asset('Frontend/images/banners/0001.jpg') }}"
                                            style="height:350px ;" />
                                    </div>
                                </div>

                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow"><img alt=""
                                            src="{{ asset('Frontend/images/banners/s1.jpg') }}"
                                            style="height:350px ;" /></div>
                                </div>

                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow"><img alt=""
                                            src="{{ asset('Frontend/images/banners/s2.jpg') }}"
                                            style="height:350px ;" /></div>
                                </div>

                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow"><img alt=""
                                            src="{{ asset('Frontend/images/banners/s3.jpg') }}"
                                            style="height:350px ;" /></div>
                                </div>
                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow"><img alt=""
                                            src="{{ asset('Frontend/images/banners/s4.jpg') }}"
                                            style="height:350px ;" /></div>
                                </div>
                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow"><img alt=""
                                            src="{{ asset('Frontend/images/banners/s5.jpg') }}"
                                            style="height:350px ;" /></div>
                                </div>

                                <div class="slickslider-item item clearfix">
                                    <div class="images-slideshow"><img alt=""
                                            src="{{ asset('Frontend/images/banners/slider7.jpg') }}"
                                            style="height:350px ;" />
                                    </div>
                                </div>


                            </div>

                            <!-- Carousel nav -->
                            <div class="nav-pagination conner-tl bg-style1">
                                <a class="left" href="#sj_k2slickslider346" data-jslide="prev">Prev<span
                                        class="over-row"></span></a>
                                <a class="right" href="#sj_k2slickslider346" data-jslide="next">Next<span
                                        class="over-row"></span></a>
                            </div>
                            <div class="pag-item">
                                <a class="sel" href="#sj_k2slickslider346" data-jslide="0">1</a>
                                <a class="" href="#sj_k2slickslider346" data-jslide="1">2</a>
                                <a class="" href="#sj_k2slickslider346" data-jslide="2">3</a>
                                <a class="" href="#sj_k2slickslider346" data-jslide="3">4</a>

                                <a class="" href="#sj_k2slickslider346" data-jslide="4">5</a>
                                <a class="" href="#sj_k2slickslider346" data-jslide="5">6</a>
                                <a class="" href="#sj_k2slickslider346" data-jslide="6">7</a>
                                <a class="" href="#sj_k2slickslider346" data-jslide="7">8</a>

                                <a class="" href="#sj_k2slickslider346" data-jslide="8">9</a>
                            </div>
                        </div>

                        <script>
                            //<![CDATA[
                            jQuery(document).ready(function($) {
                                $('#sj_k2slickslider346').each(function() {
                                    var $this = $(this),
                                        options = options = !$this.data('modal') && $.extend({}, $this.data());
                                    $this.jcarousel(options);
                                    $this.bind('jslide', function(e) {
                                        var index = $(this).find(e.relatedTarget).index();
                                        // process for nav
                                        $('[data-jslide]').each(function() {
                                            var $nav = $(this),
                                                $navData = $nav.data(),
                                                href, $target = $($nav.attr('data-target') || (href = $nav.attr(
                                                    'href')) && href.replace(/.*(?=#[^\s]+$)/, ''));
                                            if (!$target.is($this)) return;
                                            if (typeof $navData.jslide == 'number' && $navData.jslide ==
                                                index) {
                                                $nav.addClass('sel');
                                            } else {
                                                $nav.removeClass('sel');
                                            }
                                        });
                                    });

                                    $this.touchSwipeLeft(function() {
                                        $this.jcarousel('next');
                                    });
                                    $this.touchSwipeRight(function() {
                                        $this.jcarousel('prev');
                                    });
                                });
                                return;
                            });
                            //]]>
                        </script>
                    </div>
                    <div class="col-sm-3 slideLft">

                        <div class="module  feature-teachers" style="height:468px; padding:0px">
                            <div class="modcontent clearfix">
                                <div class="carousel-custommer">
                                    <div id="yt-extra-carousel1" style="width:100%; height:100%"
                                        class="yt-extra-carousel carousel slide pull-center" data-ride="carousel"
                                        data-interval='false'>
                                        <div class="carousel-inner">

                                            <div class='item'>

                                                <div class="customslider">
                                                    <div class="item-image"><a
                                                            href="RegistrarP%20Laxminarayana%20CV.pdf"
                                                            target="_blank"><img
                                                                src="{{ asset('Frontend/images/officers/chancellor.jpg') }}"
                                                                alt="" /></a>
                                                    </div>
                                                    <h3 class="modtitle">Shri Phagu Chauhan </h3>
                                                    <div class="content-main">
                                                        <h3 class="title" style='color:#00aeef;font-weight:bold'>
                                                            HE Governor-Cum-Chancellor <br />
                                                            Bihar
                                                        </h3>
                                                        <br />
                                                        <a href="https://governor.bih.nic.in/" target="_blank"><strong
                                                                style="color:black;">Read
                                                                More</strong></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class='item'>

                                                <div class="customslider">
                                                    <div class="item-image"><img
                                                            src="{{ asset('Frontend/images/officers/vc1.jpeg') }}"
                                                            alt="" />
                                                    </div>

                                                    <h3 class="modtitle">Prof. Surendra Pratap Singh </h3>
                                                    <div class="content-main">
                                                        <h3 class="title" style='color:#00aeef;font-weight:bold'>
                                                            Hon'ble Vice-Chancellor <br />

                                                        </h3>
                                                        <br />
                                                        <a href="{{ route('adm.vc') }}" target="_blank"><strong
                                                                style="color:black;">Read
                                                                More</strong></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <a class="carousel-control left" href="#yt-extra-carousel1"
                                            data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="carousel-control right" href="#yt-extra-carousel1"
                                            data-slide="next"><i class="fa fa-angle-right"></i></a>
                                        <ol class="carousel-indicators">
                                            <li data-slide-to="0" data-target="#yt-extra-carousel1"></li>
                                            <li data-slide-to="1" data-target="#yt-extra-carousel1"></li>

                                        </ol>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- slider ends here -->

        <!-- list box starts here -->

        <section id="yt_spotlight2" class="block" style="margin-bottom:0 !important">
            <div class="container">
                <div class="row">
                    <div id="top3" class="col-sm-12">
                        <div class="module categories-ii">
                            <div class="modcontent clearfix">
                                <div id="category_16297137721453353795" class="sj_category theme4">
                                    <ul class="line items-row1">
                                        <li class="" style="width: -20px;">
                                            <a href="{{ route('examHome') }}" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon6.png') }}" alt=""
                                                    hspace="3">Examination</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="#" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon3.png') }}" alt=""
                                                    hspace="3">Self Finance</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="{{ route('admission.home') }}" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon2.png') }}" alt=""
                                                    hspace="3">Admissions </a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="{{ route('eLearningResource') }}" target="_blank"
                                                style="font-size:11px;"><img
                                                    src="{{ asset('Frontend/images/icon5.png') }}" alt=""
                                                    hspace="3">E-Learning Resources</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="{{ route('photogallery') }}" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon11.png') }}" alt=""
                                                    hspace="3">Photo Gallery</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="#" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon8.png') }}" alt=""
                                                    hspace="3">Grievance Redressal</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="{{ route('iqacFeedback') }}"><img
                                                    src="{{ asset('Frontend/images/icon1.png') }}" alt=""
                                                    hspace="3">Feedback</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="{{ route('iqacSsr') }}"><img
                                                    src="{{ asset('Frontend/images/icon4.png') }}" alt=""
                                                    hspace="3">SSS </a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="{{ route('centralLibrary') }}" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon12.png') }}" alt=""
                                                    hspace="3">Library</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="#" target="_blank"><img
                                                    src="{{ asset('Frontend/images/icon7.png') }}" alt=""
                                                    hspace="3">Alumni Association</a>
                                        </li>
                                        <li class="" style="width: -20px;">
                                            <a href="{{ route('cells') }}"><img
                                                    src="{{ asset('Frontend/images/icon9.png') }}" alt=""
                                                    hspace="3">Committees</a>
                                        </li>

                                        <li class="" style="width: -20px;">
                                            <a href="{{ route('rtiAct') }}"><img
                                                    src="{{ asset('Frontend/images/icon9.png') }}" alt=""
                                                    hspace="3">RTI</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- list box ends here -->
        <script type="text/javascript" src="{{ asset('Frontend/js/crawler.js') }}"></script>
        <style>
            .marquee0 {
                background: #7C0000;
                padding: 10px 0;
                margin-bottom: 10px
            }

            .marquee0 a {
                color: #fff;
                border-right: 1px solid #fff;
                padding: 0 10px
            }
        </style>
        <section id="yt_spotlight5" class="block">
            <div class="container">
                <div class="row">
                    <div id="top3" class="col-sm-12">
                        <div class="marquee" id="mycrawler" style="width:100%;">
                            <!--@if($topnotices)-->
                            <!--@foreach ($topnotices as $tnotice)-->
                            <!--    @if ($tnotice->type == 'link')-->
                            <!--            <a href="{{ $notice->filename }}" target="_blank"><i class="fa fa-envelope"></i>{{ $tnotice->title }}<img-->
                            <!--                    src="{{ asset('Frontend/images/newanim.gif') }}" /></a>-->
                            <!--    @elseif($tnotice->type == 'file')-->
                            <!--            <a href="{{ asset('upload/Notice') }}/{{ $notice->filename }}" target="_blank"><i class="fa fa-envelope"></i>{{ $tnotice->title }}<img-->
                            <!--                    src="{{ asset('Frontend/images/newanim.gif') }}" /></a>t-->
                            <!--    @endif-->
                            <!--    @endforeach-->
                            <!--@endif-->
                            
                             <a href="{{asset('upload/Notice/26-Jul-20224767.pdf')}}" target="_blank"><i class="fa fa-envelope">
                             </i> Notification of Examination Forms and Fee of M.Ed  <img src="{{ asset('Frontend/images/newanim.gif') }}" /></a>
                             
                              <a href="{{asset('upload/Notice/26-Jul-20222946.pdf')}}" target="_blank"><i class="fa fa-envelope">
                             </i> Notification of Examination forms and Fee of Six Month Certificate  <img src="{{ asset('Frontend/images/newanim.gif') }}" /></a>

                            <a href="{{asset('upload/Notice/25-Jul-20225340.pdf')}}" target="_blank"><i class="fa fa-envelope">
                             </i> Notification of Date Extend Examination form  <img src="{{ asset('Frontend/images/newanim.gif') }}" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script type="text/javascript">
            marqueeInit({
                uniqueid: 'mycrawler',
                style: {
                    'width': '100%',
                },
                inc: 8, //speed - pixel increment for each iteration of this marquee's movement
                mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
                moveatleast: 1,
                neutral: 150,
                savedirection: true
            });
        </script>

        <section id="yt_spotlight5" class="block">
            <div class="container">
                <div class="row">

                    <div id="top9" class="col-lg-3 col-sm-6  slideLft1">
                        <ul>
                            <li><a href="http://lnmuniversity.com/ug_22/" target="_blank">Online Portal

                                    <img src="http://newweb.lnmudde.com/Frontend/images/newanim.gif"></a></li>
                            <li><a href="{{ asset('upload/Notice/Student_Helpline.pdf') }}" target="_blank">Helpline
                                    For University Student</a></li>
                            <li><a href="{{ route('aqardsRecognition') }}" target="_blank">Awards/Recognition</a>
                            </li>
                            <li><a href="{{ route('nirf') }}" target="_blank">NIRF</a></li>

                            <li><a href="#" target="_blank">Surprise Visit Report</a></li>
                            <li><a href="#" target="_blank">Sport Calendar</a></li>
                            <li><a href="#">Careers &amp; Fellowships</a></li>

                            <li><a href="#" target="_blank">Academic Calendar</a></li>
                            <li><a href="{{ route('iqacSsr') }}">Student Satisfactory Survey</a></li>
                            <li><a href="{{ route('archive') }}" target="_blank">Archive</a></li>
                            <li><a href="#">Careers &amp; Services</a></li>
                        </ul>
                    </div>

                    <div id="top7" class="col-lg-4 col-sm-12 pr0">

                        <div class="module  k2-mega-new-main ">
                            <h3 class="modtitle">Latest News, Announcements, Circulars, etc.</h3>

                            <div class="modcontent clearfix">

                                <div id="sj_meganew_3938173111453353795" class="sj-meganew ">
                                    <!--<![endif]-->
                                    <div
                                        class="meganew-wrap  meganew-rps01-1 meganew-rps02-1 meganew-rps03-1 meganew-rps04-1">
                                        <div class="meganew-box">
                                            <div class="meganew-box-inner">
                                                <div class="meganew-items theme1">
                                                    <div class="item-other">
                                                            <ul class="otehr-link" style="font-size: 14px;">
                                                                <!--@if($notices)-->
                                                                <!--@foreach ($notices as $notice)-->
                                                                <!--    @if ($notice->type == 'link')-->
                                                                <!--        <li class="row">-->
                                                                <!--            <a href="{{ $notice->filename }}"-->
                                                                <!--                class="col-xs-12" title=""-->
                                                                <!--                target="_blank"><i-->
                                                                <!--                    class="fa fa-envelope"></i>{{ $notice->title }}<img-->
                                                                <!--                    src="{{ asset('Frontend/images/newanim.gif') }}" /></a>-->
                                                                <!--        </li>-->
                                                                <!--    @elseif($notice->type == 'file')-->
                                                                <!--        <li class="row">-->
                                                                <!--            <a href="{{ asset('upload/Notice') }}/{{ $notice->filename }}"-->
                                                                <!--                class="col-xs-12" title=""-->
                                                                <!--                target="_blank"><i-->
                                                                <!--                    class="fa fa-envelope"></i>{{ $notice->title }}<img-->
                                                                <!--                    src="{{ asset('Frontend/images/newanim.gif') }}" /></a>-->
                                                                <!--        </li>-->
                                                                <!--    @endif-->
                                                                <!--@endforeach-->
                                                                <!--@endif-->
                                                                
                                                                <li class="row">
                                                                    <a href="{{ asset('upload/Notice/26-Jul-20224767.pdf') }}" class="col-xs-12" title=""
                                                                        target="_blank"><i class="fa fa-envelope"></i>Notification of Examination Forms and Fee of M.Ed. 2nd Semester (Session : 2021-23) and M.Ed. 4th Semester (Session : 2020-22) Examination 2022 <img
                                                                        src="{{ asset('Frontend/images/newanim.gif') }}" />
                                                                    </a>
                                                                </li>
                                                                <li class="row">
                                                                    <a href="{{ asset('upload/Notice/26-Jul-20222946.pdf') }}" class="col-xs-12" title=""
                                                                        target="_blank"><i class="fa fa-envelope"></i>Notification of Examination forms and Fee of Six Month Certificate Course in Management of Music and Dramatics (Session : 2021-22) Examination - 2022 <img
                                                                        src="{{ asset('Frontend/images/newanim.gif') }}" />
                                                                    </a>
                                                                </li>
                                                                <li class="row">
                                                                    <a href="{{ asset('upload/Notice/25-Jul-20225340.pdf') }}" class="col-xs-12" title=""
                                                                        target="_blank"><i class="fa fa-envelope"></i>Notification of Date Extend Examination form B.A./B.Sc./B.Com. Part-III (Session : 2019-22, 2014-17, 2015-18) Examination-2021 <img
                                                                        src="{{ asset('Frontend/images/newanim.gif') }}" />
                                                                    </a>
                                                                </li>
                                                                 <li class="row">
                                                                    <a href="http://lnmuniversity.com/LNMU_ERP/UserLogin.aspx" class="col-xs-12" title=""
                                                                        target="_blank"><i class="fa fa-envelope"></i>Examination form for part 3 session 2019-22 <img
                                                                        src="{{ asset('Frontend/images/newanim.gif') }}" />
                                                                    </a>
                                                                </li>
                                                                <li class="row">
                                                                    <a href="{{ asset('upload/Notice/22-Jul-20222413.pdf') }}" class="col-xs-12" title=""
                                                                        target="_blank"><i class="fa fa-envelope"></i>Result of B.Lib. and Inf. Sc. (Session : 2021-22) Examination - 2022 <img
                                                                        src="{{ asset('Frontend/images/newanim.gif') }}" />
                                                                    </a>
                                                                </li>
                                                                <li class="row">
                                                                    <a href="http://lnmuniversity.com/ug_22/" class="col-xs-12" title=""
                                                                        target="_blank"><i class="fa fa-envelope"></i>Online Apply Admission form for B.A./B.Sc./B.Com. (session 2022-2025) <img
                                                                        src="{{ asset('Frontend/images/newanim.gif') }}" />
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        <a href="#" class="col-xs-12" title=""
                                                            style="background: #7C0000; color: #fff; width: auto;"><strong>More
                                                                News</strong></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clr1"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div id="top7" class="col-lg-5 col-sm-12 pr0">
                        <div class="module  k2-mega-new-main ">
                            <h3 class="modtitle">Upcoming Events, Conferences, Seminars, Workshops, etc.</h3>
                            <div class="modcontent clearfix">

                                <div id="sj_meganew_3938173111453353795" class="sj-meganew ">
                                    <!--<![endif]-->
                                    <div
                                        class="meganew-wrap  meganew-rps01-1 meganew-rps02-1 meganew-rps03-1 meganew-rps04-1">
                                        <div class="meganew-box">
                                            <div class="meganew-box-inner">

                                                <div class="meganew-items theme1">
                                                    <div class="item-other">
                                                        <ul class="otehr-link">
                                                            @foreach ($events as $event)
                                                            @if ($event->type == 'link')

                                                                <li class="row">
                                                                    <a href="{{ $event->filename }}" class="col-xs-2 pr0"
                                                                        title=""><span
                                                                            style="float: left; background:#7C0000">13th-17th</span><span
                                                                            style="float: left; background: #00aeef">June
                                                                            2022</span></a>
                                                                    <a href="{{ asset('upload/Notice') }}/{{ $event->filename }}" target="_blank" class="col-xs-10"
                                                                        title="">{{ $event->title }} <img
                                                                        src="{{ asset('Frontend/images/newanim.gif') }}" /></a>
                                                                </li>
                                                            @elseif($event->type == 'file')
                                                                <li class="row">
                                                                    <a href="#" class="col-xs-2 pr0"
                                                                        title=""><span
                                                                            style="float: left; background:#7C0000">13th-17th</span><span
                                                                            style="float: left; background: #00aeef">June
                                                                            2022</span></a>
                                                                    <a href="{{ asset('upload/Notice') }}/{{ $event->filename }}" target="_blank" class="col-xs-10"
                                                                        title="">{{ $event->title }} <img
                                                                        src="{{ asset('Frontend/images/newanim.gif') }}" /></a>
                                                                </li>
                                                            @endif
                                                        @endforeach



                                                            <a href="#" class="col-xs-12" title=""
                                                                style="background: #7C0000; color: #fff; width: auto; margin-top:10px;"><strong>More
                                                                    Events</strong></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="clr1"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </section>

        <section id="content" class="  no-left  no-right block com_content">
            <div class="container">
                <div class="row">
                    <aside id="content_left" class="col-md-3 col-sm-12 hidden"></aside>
                    <div id="content_main" class="col-sm-12">
                        <div id="system-message-container"></div>
                        <p style="display:none">Hide Main content block</p>
                    </div>
                    <aside id="content_right" class="col-md-3 col-sm-12 hidden"></aside>
                </div>
            </div>
        </section>

        <section id="yt_spotlight3" class="block " style="margin-bottom:50px;">
            <div class="container">
                <div class="row">
                    <div id="top4" class="col-lg-9 col-sm-6">
                        <div class="module  k2-slider-style-one">
                            <h3 class="modtitle">Events Gallery</h3>
                            <div class="modcontent clearfix">
                                <div id="sj_k2_slider_2843493131453353795" class="sj-k2-container-slider"
                                    style="">
                                    <div class="page-button top style">
                                        <ul class="control-button preload">
                                            <li class="preview"><i class="fa fa-chevron-left"></i></li>
                                            <li class="next"><i class="fa fa-chevron-right"></i></li>
                                        </ul>
                                    </div>

                                    <div
                                        class="slider not-js cols-6 preset01-3 preset02-3 preset03-1 preset04-1 preset05-1">
                                        <div class="vpo-wrap">
                                            <div class="vp">
                                                <div class="vpi-wrap">
                                                    <div class="item">
                                                        <div class="item-wrap">
                                                            <div class="item-img item-height">
                                                                <div class="item-img-info">
                                                                    <a href="#" target="_blank"><img
                                                                            alt=" "
                                                                            src="{{ asset('Frontend/images/index/NationalSeminar1.jpg') }}" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>

                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title">
                                                                        <a href="#" title=" "
                                                                            target="_blank">National Seminar</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-wrap">
                                                            <div class="item-img item-height">
                                                                <div class="item-img-info">
                                                                    <a href="#" target="_blank"><img
                                                                            alt=" "
                                                                            src="{{ asset('Frontend/images/index/NationalSeminar12jpg.jpg') }}" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>

                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title">
                                                                        <a href="#" title=" "
                                                                            target="_blank">National Seminar 2</a>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="item-wrap">
                                                            <div class="item-img item-height">
                                                                <div class="item-img-info">
                                                                    <a href="#" target="_blank"><img
                                                                            alt=" "
                                                                            src="{{ asset('Frontend/images/index/NationalSeminar3.jpg') }}" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>

                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title">
                                                                        <a href="#" title=" "
                                                                            target="_blank">National Seminar </a>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="item">
                                                        <div class="item-wrap">
                                                            <div class="item-img item-height">
                                                                <div class="item-img-info">
                                                                    <a href="#" target="_blank"><img
                                                                            alt=" "
                                                                            src="{{ asset('Frontend/images/index/InternationalEconfrence.jpg') }}" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>

                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title">
                                                                        <a href="#" title=" "
                                                                            target="_blank">International E-Confrence
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="item-wrap">
                                                            <div class="item-img item-height">
                                                                <div class="item-img-info">
                                                                    <a href="#" target="_blank"><img
                                                                            alt=" "
                                                                            src="{{ asset('Frontend/images/index/natiEcon1.jpg') }}" /></a>
                                                                    <div class="over-image"></div>
                                                                </div>
                                                            </div>

                                                            <div class="item-info">
                                                                <div class="item-inner">
                                                                    <div class="item-title">
                                                                        <a href="#" title=" "
                                                                            target="_blank">International E-Confrence
                                                                        </a>
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
                                <script type="text/javascript">
                                    //<![CDATA[
                                    jQuery(document).ready(function($) {
                                        ;
                                        (function(element) {
                                            var $element = $(element);
                                            var $slider = $('.slider', $element)
                                            $('.slider', $element).responsiver({
                                                interval: 0,
                                                speed: 1000,
                                                start: 0,
                                                step: 1,
                                                circular: true,
                                                preload: true,
                                                fx: 'slide',
                                                pause: 'hover',
                                                control: {
                                                    prev: '#sj_k2_slider_2843493131453353795 .control-button li[class="preview"]',
                                                    next: '#sj_k2_slider_2843493131453353795 .control-button li[class="next"]'
                                                },
                                                getColumns: function(element) {
                                                    var match = $(element).attr('class').match(/cols-(\d+)/);
                                                    if (match[1]) {
                                                        var column = parseInt(match[1]);
                                                    } else {
                                                        var column = 1;
                                                    }
                                                    if (!column) column = 1;
                                                    return column;
                                                }
                                            });
                                            $slider.touchSwipeLeft(function() {
                                                $slider.responsiver('next');
                                            });
                                            $slider.touchSwipeRight(function() {
                                                $slider.responsiver('prev');
                                            });

                                            $('.control-button', $element).removeClass('preload');
                                        })('#sj_k2_slider_2843493131453353795');
                                    });
                                    //]]>
                                </script>
                            </div>
                        </div>
                    </div>

                    <div id="top4" class="col-lg-3 col-sm-6">
                        <div class="module">
                            <h3 class="modtitle">Useful Links</h3>
                            <div class="acd-item1">
                                <ul class="line items-row1">
                                    <li><a href="#">Press Notes</a></li>
                                    <li><a href="#" target="_blank">University Library</a>
                                    </li>

                                    <li><a href="#">Admission Notifications</a></li>
                                    <li><a href="https://www.aiu.ac.in/Meetings/meeting.asp" target="_blank">AIU
                                            Meetings Notificationsmeu</a></li>
                                    <li><a href="https://ugc.ac.in/ugc_notices.aspx" target="_blank">UGC
                                            Notificationmeu </a></li>
                                    <li><a href="#">Grievance</a></li>



                                    <li><a href="https://lnmu.ac.in:2096/" target="_blank">University
                                            e-mail</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('Frontend.includes.footertop')

        @include('Frontend.includes.footer')
    </div>


    @include('Frontend.includes.foot')

</body>

</html>
