@extends('Frontend.includes.layout')
@section('content')
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
                                                href="#" style="color:#7C0000" title="">Raj Library</a>
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
            @include('Frontend.includes.sidebar.raj_library_menu')
            <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
                <a href="#" data-target="#sidebar" data-toggle="collapse"><i
                        class="text-dark fa fa-navicon fa-lg py-2 p-1"></i></a>
                <div class="page-header">
                    <h2 class="display-4 font-weight-light text-center">Raj Library (Home)</h2>
                </div>

                <section class="col-md-12 col-sm-12">
                    {{-- <ul>
                        <li>
                            <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                        style="font-size: medium;">The Central Library, L.N. Mithila University, Darbhanga
                                        was established in 1972 for the purpose of providing facilities for students to
                                        acquire knowledge.</span></span></p>
                        </li>
                        <li>
                            <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                        style="font-size: medium;">The Library has its own building and a very beautiful
                                        spacious campus.</span></span></p>
                        </li>
                        <li>
                            <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                        style="font-size: medium;">Teaching of BLIS course is also available in this
                                        Library.</span></span></p>
                        </li>
                        <li>
                            <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                        style="font-size: medium;">The Library possesses a well furnished Air Conditioned
                                        Reading Hall for students as well as Research Scholars.</span></span></p>
                        </li>
                        <li>
                            <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                        style="font-size: medium;">Library is a Heart of University.</span></span></p>
                        </li>
                        <li>
                            <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                        style="font-size: medium;">Reading Materials support teaching and learning
                                        process.</span></span></p>
                        </li>
                        <li>
                            <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                        style="font-size: medium;">Library is well equipped with Reference Books, Text
                                        Books, Journals, Periodicals and Newspapers.</span></span></p>
                        </li>
                        <li>
                            <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                        style="font-size: medium;">Central Library is situated in the campus of L. N.
                                        Mithila University near Moti Mahal.</span></span></p>
                        </li>
                        <li>
                            <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                        style="font-size: medium;">The total area of Central Library is approx 25,000
                                        sq.fts</span></span></p>
                        </li>
                        <li>
                            <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                        style="font-size: medium;">This Library uses Colon Classification system &amp; Books
                                        are arranged in broken order system.</span></span></p>
                        </li>
                    </ul> --}}
                    <section class="container" style="margin-top: 10px;margin-bottom:50px;">
                        <strong>
                            <h3>Collections -</h3>
                        </strong>
                        <ul>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Social Science Collections</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Science Collection</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;"> Art Collection</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Humanities Collection</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Government Publicatons </span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Special Collections </span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Recommendation for Acquisition </span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Online Databases </span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Online Journals</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Print Journals </span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Bound Volumes </span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Donation / Gift </span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Archives </span></span></p>
                            </li>
                        </ul>
                    </section>
                    {{-- <section class="container" style="margin-top: 10px;margin-bottom:50px;">
                        <strong>
                            <h3>Collections of the Library</h3>
                        </strong>
                        <ul>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Book format – 219059</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">No. of Title – 122523</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Journals/Periodicals - 14660</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Bind Back Volumes - 2359</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">News Papers</span></span></p>
                            </li>
                        </ul>
                    </section> --}}
                    <section class="container" style="margin-top: 10px;margin-bottom:50px;">
                        <strong>
                            <h3>Services -</h3>
                        </strong>
                        <ul>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Reference Current Additions</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">IT Facilities</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;"> Imaging Services</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Inter Library Loan</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Information Desk </span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Download Forms </span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Plagiarism </span></span></p>
                            </li>
                        </ul>
                    </section>

                    <section class="container" style="margin-top: 10px;margin-bottom:50px;">
                        <strong>
                            <h3>Digital Services -</h3>
                        </strong>
                        <ul>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Library Information</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Online Catalogue</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;"> Single Window Search</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Electronic Resources</span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Remote Access </span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Trial Resources </span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Data Portal </span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Institutional Repository </span></span></p>
                            </li>
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">Open Access </span></span></p>
                            </li> 
                            <li>
                                <p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span
                                            style="font-size: medium;">ETDs </span></span></p>
                            </li>
                        </ul>
                    </section>

                </section>


            </main>
        </div>
    </div>
@endsection
