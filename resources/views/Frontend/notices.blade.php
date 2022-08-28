@extends('Frontend.includes.layout')
@section('content')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!-- slider starts here -->
    <section id="yt_spotlight1" class="block" >
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
                                                href="#" style="color:#7C0000" title="">Notices</a>
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
    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom:40px;">
        <p class="text-center">Notices</p>
    </div>
    <!-- slider ends here -->

<div class="container" style="font-size:15px;">
  <div class="row g-2 mt-3">
      <ul>
      @if ($notices)
          @foreach($notices as $notice)
                @if ($notice->type == 'link')
                <li>
                  <div class="col-6">
                      <div class="p-2 border bg-light">
                          <a href=" {{ $notice->filename }}} " target="_blank"> {{ $notice->title }}  </a>
                      </div>
                  </div>
                  </li>
                @elseif($notice->type == 'file')
                <li>
                    <div class="col-6">
                      <div class="p-2 border bg-light">
                          <a href="  {{ asset('upload/Notice/'.$notice->filename) }} " target="_blank"> {{ $notice->title }} </a>
                      </div>
                    </div>
                    </li>
                @endif
            @endforeach
        @endif
        </ul>
       
        <div classs='col-sm-6 container' style="margin-bottom:25px; margin-top:20px;">
               <center>  {!! $notices->links() !!}</center>
      </div>
 </div>
</div>





@endsection
