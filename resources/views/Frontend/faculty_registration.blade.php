<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LNMU Faculty Registration</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html {
            height: 100%;
        }

        /*Background color*/
        #grad1 {
            background-color: #9C27B0;
            background-image: linear-gradient(120deg, #7C0000, #81D4FA);
        }

        /*form styles*/
        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
        }

        #msform fieldset .form-card {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E;
        }

        #msform select,
        input,
        #msform textarea {
            padding: 0px 8px 4px 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 16px;
            letter-spacing: 1px;
        }

        #msform select,
        input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none;
            font-weight: bold;
            border-bottom: 2px solid skyblue;
            outline-width: 0;
        }

        /*Blue Buttons*/
        #msform .action-button {
            width: 100px;
            background: skyblue;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
        }

        /*Previous Buttons*/
        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
        }

        /*Dropdown List Exp Date*/
        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px;
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue;
        }

        /*The background card*/
        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative;
        }

        /*FieldSet headings*/
        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }

        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey;
        }

        #progressbar .active {
            color: #000000;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 20%;
            float: left;
            position: relative;
        }

        /*Icons in the ProgressBar*/
        #progressbar #verification:before {
            font-family: FontAwesome;
            content: "\f0e0";
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f023";
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007";
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f09d";
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c";
        }

        /*ProgressBar before any progress*/
        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px;
        }

        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        }

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: skyblue;
        }

        /*Imaged Radio Buttons*/
        .radio-group {
            position: relative;
            margin-bottom: 25px;
        }

        .radio {
            display: inline-block;
            width: 204;
            height: 104;
            border-radius: 0;
            background: lightblue;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            cursor: pointer;
            margin: 8px 2px;
        }

        .radio:hover {
            box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .radio.selected {
            box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
        }

        /*Fit image in bootstrap div*/
        .fit-image {
            width: 100%;
            object-fit: cover;
        }

        #rowAdder {
            margin-left: 17px;
        }
    </style>
</head>

<body>
    <!-- MultiStep Form -->
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-10 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2><strong>LNMU Faculty Registration</strong></h2>
                    <p>Please, fill all form field to go to next step</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="verification"><strong>Personal</strong></li>
                                    <li id="account"><strong>Educational</strong></li>
                                    <li id="personal"><strong>Background</strong></li>
                                    <li id="payment"><strong>Other</strong></li>
                                    <li id="confirm"><strong>Finish</strong></li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Personal Information</h2>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="fname" placeholder="First Name" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="lname" placeholder="Last Name" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" name="email" placeholder="Email" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" name="phone" placeholder="Phone" />
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="department">
                                                    <option value="">--Select Department--</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select name="designation">
                                                    <option value="">--Select Designation--</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" name="aadharno" placeholder="Aadhar Number" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="pan" placeholder="PAN Number" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="file" id="pic" name="pic" />
                                            </div>
                                            <div class="col-sm-6 holder">
                                                <img id="picPreview" src="#" alt="uploaded pic" height="200"
                                                    width="200" />
                                            </div>

                                        </div>
                                    </div>
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Educational Qualification</h2>
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <input type="number" name="matriculation"
                                                    placeholder="10th Roll Number" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="file" name="matriculation" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" name="intermediate"
                                                    placeholder="12th Roll Number" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="file" name="intermediate" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" name="graduation"
                                                    placeholder="Graduation Roll Number" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="file" name="graduation" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" name="postgraduation"
                                                    placeholder="Post Graduation Roll Number" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="file" name="postgraduation" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" name="phd" placeholder="Phd. Roll Number" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="file" name="phd" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="number" name="net" placeholder="NET/SLET Roll Number" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="file" name="net" />
                                            </div>
                                            <div class="col-sm-5">
                                                <h5>Qualification</h5>
                                                <div class="input-group m-3">
                                                    <input type="text" class="form-control m-input">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-danger" id="DeleteRow" type="button">
                                                            <i class="bi bi-trash"></i>
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="newinput"></div>
                                                <button id="rowAdder" type="button" class="btn btn-dark">
                                                    <span class="bi bi-plus-square-dotted">
                                                    </span> ADD
                                                </button>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5">
                                                <h5>Specialization</h5>
                                                <div class="input-group m-3">
                                                    <input type="text" class="form-control m-input">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-danger" id="DeleteRow" type="button">
                                                            <i class="bi bi-trash"></i>
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="newinput1"></div>
                                                <button id="rowAdder1" type="button" class="btn btn-dark">
                                                    <span class="bi bi-plus-square-dotted">
                                                    </span> ADD
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Background Verification</h2>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="appointed_on" placeholder="Appointed On" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="service_length" placeholder="Service Length" />
                                            </div>
                                            <div class="col-sm-5">
                                                <h5>Orientation Courses</h5>
                                                <div class="input-group m-3">
                                                    <input type="text" class="form-control m-input">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-danger" id="DeleteRow" type="button">
                                                            <i class="bi bi-trash"></i>
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="newinput2"></div>
                                                <button id="rowAdder2" type="button" class="btn btn-dark">
                                                    <span class="bi bi-plus-square-dotted">
                                                    </span> ADD
                                                </button>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5">
                                                <h5>Refresher Courses</h5>
                                                <div class="input-group m-3">
                                                    <input type="text" class="form-control m-input">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-danger" id="DeleteRow" type="button">
                                                            <i class="bi bi-trash"></i>
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="newinput3"></div>
                                                <button id="rowAdder3" type="button" class="btn btn-dark">
                                                    <span class="bi bi-plus-square-dotted">
                                                    </span> ADD
                                                </button>
                                            </div>
                                            
                                            <div class="col-sm-5" style="margin-top: 20px;">
                                                <h5>Other Courses</h5>
                                                <div class="input-group m-3">
                                                    <input type="text" class="form-control m-input">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-danger" id="DeleteRow" type="button">
                                                            <i class="bi bi-trash"></i>
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="newinput4"></div>
                                                <button id="rowAdder4" type="button" class="btn btn-dark">
                                                    <span class="bi bi-plus-square-dotted">
                                                    </span> ADD
                                                </button>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5" style="margin-top: 20px;">
                                                <h5>Teaching Methods</h5>
                                                <div class="input-group m-3">
                                                    <input type="text" class="form-control m-input">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-danger" id="DeleteRow" type="button">
                                                            <i class="bi bi-trash"></i>
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="newinput5"></div>
                                                <button id="rowAdder5" type="button" class="btn btn-dark">
                                                    <span class="bi bi-plus-square-dotted">
                                                    </span> ADD
                                                </button>
                                            </div>
                                            <div class="col-sm-5" style="margin-top: 20px;">
                                                <h5>Technology Using</h5>
                                                <div class="input-group m-3">
                                                    <input type="text" class="form-control m-input">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-danger" id="DeleteRow" type="button">
                                                            <i class="bi bi-trash"></i>
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="newinput6"></div>
                                                <button id="rowAdder6" type="button" class="btn btn-dark">
                                                    <span class="bi bi-plus-square-dotted">
                                                    </span> ADD
                                                </button>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5" style="margin-top: 20px;">
                                                <h5>Project Guided</h5>
                                                <div class="input-group m-3">
                                                    <input type="text" class="form-control m-input">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-danger" id="DeleteRow" type="button">
                                                            <i class="bi bi-trash"></i>
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="newinput7"></div>
                                                <button id="rowAdder7" type="button" class="btn btn-dark">
                                                    <span class="bi bi-plus-square-dotted">
                                                    </span> ADD
                                                </button>
                                            </div>
                                            <div class="col-sm-5" style="margin-top: 20px;">
                                                <h5>Books Authored</h5>
                                                <div class="input-group m-3">
                                                    <input type="text" class="form-control m-input">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-danger" id="DeleteRow" type="button">
                                                            <i class="bi bi-trash"></i>
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="newinput8"></div>
                                                <button id="rowAdder8" type="button" class="btn btn-dark">
                                                    <span class="bi bi-plus-square-dotted">
                                                    </span> ADD
                                                </button>
                                            </div>
                                            <div class="col-sm-1"></div>
                                            <div class="col-sm-5" style="margin-top: 20px;">
                                                <h5>Books Edited</h5>
                                                <div class="input-group m-3">
                                                    <input type="text" class="form-control m-input">
                                                    <div class="input-group-prepend">
                                                        <button class="btn btn-danger" id="DeleteRow" type="button">
                                                            <i class="bi bi-trash"></i>
                                                            Delete
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="newinput9"></div>
                                                <button id="rowAdder9" type="button" class="btn btn-dark">
                                                    <span class="bi bi-plus-square-dotted">
                                                    </span> ADD
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Other Information</h2>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="sem_participated" placeholder="Sem/w/s participated" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="session_chaired" placeholder="Session Chaired" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="Key_note_addressed" placeholder="Key-note addressed" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="Sem_orging_team" placeholder="Sem/w/s orging Team" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="curriculum_designing" placeholder="Curriculum Designing" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="editorship" placeholder="Editorship" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="mentorship" placeholder="Mentorship" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="corporate_contribution_dept" placeholder="Corporate contribution @ Dept" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="corporate_contribution_univ" placeholder="Corporate contribution @ Univ" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="othe_intellectual_contributions" placeholder="Other Intellectual contributions" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="professional_bodies_membership" placeholder="Professional Bodies Membership" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="empanelment" placeholder="Empanelment" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="assignments_heis" placeholder="Assignments in other HEIs" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="extension_consultancy" placeholder="Extension/outreach/consultancy" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="awards_loc" placeholder="Awards/LoC" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" name="other_importance" placeholder="Any other of importance, if:" />
                                            </div>
                                            

                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Previous" />
                                    <input type="button" name="next" class="next action-button" value="Next Step" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Success !</h2>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                    class="fit-image">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>You have successfully registered</h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function () {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({ 'opacity': opacity });
                    },
                    duration: 600
                });
            });

            $(".previous").click(function () {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({ opacity: 0 }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({ 'opacity': opacity });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function () {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function () {
                return false;
            });

            $('#pic').change(function () {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        console.log(event.target.result);
                        $('#picPreview').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });

            $("#rowAdder").click(function () {
                newRowAdd =
                    '<div id="row"> <div class="input-group m-3">' +
                    '<input type="text" class="form-control m-input"> ' +
                    '<div class="input-group-prepend">' +
                    '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                    '<i class="bi bi-trash"></i> Delete</button>' +
                    '</div> </div>';

                $('#newinput').append(newRowAdd);
            });

            $("#rowAdder1").click(function () {
                newRowAdd =
                    '<div id="row"> <div class="input-group m-3">' +
                    '<input type="text" class="form-control m-input"> ' +
                    '<div class="input-group-prepend">' +
                    '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                    '<i class="bi bi-trash"></i> Delete</button>' +
                    '</div> </div>';

                $('#newinput1').append(newRowAdd);
            });

            $("#rowAdder2").click(function () {
                newRowAdd =
                    '<div id="row"> <div class="input-group m-3">' +
                    '<input type="text" class="form-control m-input"> ' +
                    '<div class="input-group-prepend">' +
                    '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                    '<i class="bi bi-trash"></i> Delete</button>' +
                    '</div> </div>';

                $('#newinput2').append(newRowAdd);
            });

            $("#rowAdder3").click(function () {
                newRowAdd =
                    '<div id="row"> <div class="input-group m-3">' +
                    '<input type="text" class="form-control m-input"> ' +
                    '<div class="input-group-prepend">' +
                    '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                    '<i class="bi bi-trash"></i> Delete</button>' +
                    '</div> </div>';

                $('#newinput3').append(newRowAdd);
            });

            $("#rowAdder4").click(function () {
                newRowAdd =
                    '<div id="row"> <div class="input-group m-3">' +
                    '<input type="text" class="form-control m-input"> ' +
                    '<div class="input-group-prepend">' +
                    '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                    '<i class="bi bi-trash"></i> Delete</button>' +
                    '</div> </div>';

                $('#newinput4').append(newRowAdd);
            });

            $("#rowAdder5").click(function () {
                newRowAdd =
                    '<div id="row"> <div class="input-group m-3">' +
                    '<input type="text" class="form-control m-input"> ' +
                    '<div class="input-group-prepend">' +
                    '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                    '<i class="bi bi-trash"></i> Delete</button>' +
                    '</div> </div>';

                $('#newinput5').append(newRowAdd);
            });

            $("#rowAdder6").click(function () {
                newRowAdd =
                    '<div id="row"> <div class="input-group m-3">' +
                    '<input type="text" class="form-control m-input"> ' +
                    '<div class="input-group-prepend">' +
                    '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                    '<i class="bi bi-trash"></i> Delete</button>' +
                    '</div> </div>';

                $('#newinput6').append(newRowAdd);
            });

            $("#rowAdder7").click(function () {
                newRowAdd =
                    '<div id="row"> <div class="input-group m-3">' +
                    '<input type="text" class="form-control m-input"> ' +
                    '<div class="input-group-prepend">' +
                    '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                    '<i class="bi bi-trash"></i> Delete</button>' +
                    '</div> </div>';

                $('#newinput7').append(newRowAdd);
            });

            $("#rowAdder8").click(function () {
                newRowAdd =
                    '<div id="row"> <div class="input-group m-3">' +
                    '<input type="text" class="form-control m-input"> ' +
                    '<div class="input-group-prepend">' +
                    '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                    '<i class="bi bi-trash"></i> Delete</button>' +
                    '</div> </div>';

                $('#newinput8').append(newRowAdd);
            });

            $("#rowAdder9").click(function () {
                newRowAdd =
                    '<div id="row"> <div class="input-group m-3">' +
                    '<input type="text" class="form-control m-input"> ' +
                    '<div class="input-group-prepend">' +
                    '<button class="btn btn-danger" id="DeleteRow" type="button">' +
                    '<i class="bi bi-trash"></i> Delete</button>' +
                    '</div> </div>';

                $('#newinput9').append(newRowAdd);
            });

            $("body").on("click", "#DeleteRow", function () {
                $(this).parents("#row").remove();
            })

        });
    </script>
</body>

</html>