@extends('Frontend.includes.layout')

@section('content')
    <!-- slider starts here -->

    <div class="container-fluid"
        style="background-color: #00aeef;color:white;font-size:25px;font-weight:bold;padding:10px;margin-bottom:40px;">
        <p class="text-center">Department of Sociology</p>
    </div>
    <!-- slider ends here -->

    <div class="container">
        <div class="row d-flex d-md-block flex-nowrap wrapper">
            <div class="col-md-4 col-sm-4">
                <div class="pic">
                    <img src="{{ asset('Frontend/images/department/sociology.png') }}">

                </div>
            </div>
            <main class="col-md-8 col-sm-8">
                <div class="col-md-12" id="content_main">
                    <h2><strong>About the Sociology</strong></h2>
                    <p style="text-align: justify;font-size:13px;">Keeping changing needs in mine for professional education
                        and training in society, Department of Sociology was established in the year 1975. The department
                        prepares students to become effective and efficient social workers in the new developed era and
                        emphasis is given on quality education and promoting a culture of enquiry and quality of life. The
                        Department provides direct learning with individuals, groups and developed organizations to the
                        students. The Department gladly accepts a challenge to train the students as per the contemporary
                        needs of the society.</p>
                </div>
            </main>
        </div>





    </div>

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class=" col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-sm-5 col-xs-12">
                                <h4 class="title">Faculty Members</h4>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Mobile</th>
                                    <th>Email Id</th>
                                    <th>Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Prof. Md. Shahid Hassan</td>
                                    <td>Professor & Head</td>
                                    <td>9631961063</td>
                                    <td>mdshahidhassan1961@gmail.com</td>
                                    <td>
                                        <div class="user_icon">
                                            <img src="{{ asset('Frontend/images/user.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dr. Manju Jha</td>
                                    <td>Associate Professor</td>
                                    <td>6205719550</td>
                                    <td>manjujha1702@gmail.com</td>
                                    <td>
                                        <div class="user_icon">
                                            <img src="{{ asset('Frontend/images/user.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dr. Sarika Pandey</td>
                                    <td>Assistant Professor</td>
                                    <td>9044391314</td>
                                    <td>sarikapandaybhu@gmail.com</td>
                                    <td>
                                        <div class="user_icon">
                                            <img src="{{ asset('Frontend/images/user.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Miss Laxmi Kumari</td>
                                    <td>Assistant Professor</td>
                                    <td>8004993149</td>
                                    <td>laxmisakarwar@gmail.com</td>
                                    <td>
                                        <div class="user_icon">
                                            <img src="{{ asset('Frontend/images/user.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Programmes Organized</h2>
        <ul>
            <li>UGC Sponsored Workshop on “Research Methodology in Sociology” 20-22 Jan. 2015 Organized by University Deptt. Of Sociology, LN Mithila Univ. Darbhanga.</li>
            <li>Workshop on Assessing Knowledge Text Translation in Maithili (Sociology) Organized by National Translation Mission Mysore and University Deptt. Of Sociology, LN Mithila Univ. Darbhanga-2010</li>
            <li>UGC Sponsored Workshop on “Research Methodology in Sociology” 20-22 Jan 2015 Organized by University Deptt. Of Sociology, LN Mithila Univ. Darbhanga.</li>
            <li>ICSSR Sponsored Workshop on Research Methodology in Social Science . 19-20 Feb. 2020 </li>
        </ul>
    </div>

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class=" col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-sm-5 col-xs-12">
                                <h4 class="title">Supporting Staff</h4>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Mobile</th>
                                    <th>Email Id</th>
                                    <th>Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ashish Kumar Arvind</td>
                                    <td>Assistant</td>
                                    <td>9430037722</td>
                                    <td>-----</td>
                                    <td>
                                        <div class="user_icon">
                                            <img src="{{ asset('Frontend/images/user.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Shyamanand Jha</td>
                                    <td>Peon</td>
                                    <td>9708991034</td>
                                    <td>-----</td>
                                    <td>
                                        <div class="user_icon">
                                            <img src="{{ asset('Frontend/images/user.png') }}"
                                                alt="">
                                        </div>
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
