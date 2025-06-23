<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{$page}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://db.onlinewebfonts.com/c/2f86dc938a55788d3416b876b43a116a?family=Poppins" rel="stylesheet" />
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap");

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            padding: 50px 0;
            background: linear-gradient(217deg, #69318d, #69318d, #69318d, #ee567a);
            width: 100%;
            height: 100%;
            font-size: 18px;
            line-height: 1.5;
            font-family: "Poppins";
            color: #222;

            @media(max-width:768px) {
                padding: 0px !important;

            }
        }

        main {

            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(0.6px);
            -webkit-backdrop-filter: blur(0.6px);
            border: 1px solid rgba(105, 49, 141, 0.83);
            max-width: 900px;
            margin: auto;

            @media(max-width:768px) {
                margin: 10px;
            }


        }

        section {

            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(19.1px);
            -webkit-backdrop-filter: blur(19.1px);
            border: 1px solid rgba(105, 49, 141, 0.3);
            padding: 20px 0;
        }

        .container {
            max-width: 1230px;
            width: 100%;
        }

        h1 {
            font-weight: 700;
            font-size: 45px;
            font-family: "Roboto", sans-serif;
        }

        .header {
            margin-bottom: 20px;
            text-align: center;
        }

        .header h2 {
            color: white;
        }

        .header p {
            color: red;
        }

        #description {
            font-size: 24px;
        }

        .form-wrap {
            background: rgba(255, 255, 255, 1);
            width: 100%;
            max-width: 850px;
            padding: 25px;
            margin: 0 auto;
            position: relative;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            border: 1px solid #581980;
            -webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
            box-shadow: rgb(254 254 254 / 37%) 0px 10px 36px 0px, rgb(246 244 244 / 26%) 0px 0px 0px 1px;
        }

        .declaration {
            width: 100%;
            max-width: 850px;

            margin: 0 auto;
            position: relative;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group>label {
            display: block;
            font-size: 16px;
            color: #000;

            @media(max-width:768px) {
                font-size: 14px;
            }
        }

        h4 {
            font-size: 20px;
        }

        select {
            background: url(https://info2.altimetrik.com/l/1088812/2025-05-21/9qsp8q/1088812/1747838004ttutBTws/Caret_down_font_awesome_whitevariation.svg), gray;
            appearance: none !important;
        }

        .custom-control-label {
            color: #000;
            font-size: 16px;
        }

        .form-control {
            height: 50px;
            background: #ecf0f4;
            border-color: transparent;
            padding: 0 15px;
            font-size: 16px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #00bcd9;
            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .form-select {
            background-color: #ecf0f4;
            height: 50px !important;
        }

        .employee-subheading {
            font-size: 12px;
            color: red;
        }


        /* Add and delete buttuon */

        /* From Uiverse.io by david-mohseni */
        .wrapper {
            display: inline-flex;
            list-style: none;
            /* width: 100%; */
            margin: 0px;
            font-family: "Poppins", sans-serif;
            /* justify-content: center; */
            max-width: 850px;
            display: flex;
            margin: auto;
            display: flex;
            justify-content: flex-end;
        }

        .wrapper .icon {
            position: relative;
            background: #fff;
            border-radius: 50%;
            margin: 10px;
            width: 40px;
            height: 40px;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);

            @media(max-width:768px) {
                width: 20px;
                height: 20px;
                margin: 5px 5px 0;
            }
        }

        .wrapper .tooltip {
            position: absolute;
            top: 0;
            width: 240px;
            font-size: 14px;
            background: #fff;
            color: #fff;
            padding: 5px 8px;
            border-radius: 5px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);

            @media(max-width:768px) {
                width: 170px;
                right: -50px;
                top: -95px;
            }
        }

        .wrapper .tooltip::before {
            position: absolute;
            content: "";
            height: 8px;
            width: 8px;
            background: #fff;
            bottom: -3px;
            left: 50%;
            transform: translate(-50%) rotate(45deg);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .icon:hover .tooltip {
            top: -45px;
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .wrapper .icon:hover span,
        .wrapper .icon:hover .tooltip {
            text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
        }


        .wrapper .facebook:hover .tooltip,
        .wrapper .facebook:hover .tooltip::before {
            background: #1877f2;
            text-align: center;

        }






        .wrapper .delete:hover .tooltip,
        .wrapper .delete:hover .tooltip::before {
            background: #e4405f;
            color: #fff;
            text-align: center;
        }

        svg {
            max-width: 16px;
            width: 100%;

            @media(max-width:768px) {
                max-width: 7px;
            }
        }

        .delbtn {

            top: 0px;
            right: 5px;

            @media(max-width:768px) {
                right: 0px;
            }

        }

        .icon.delete {
            border: 1px solid red;
        }

        .icon.facebook {
            border: 1px solid blue;
        }

        .icon.facebook:hover path {
            fill: white;
        }

        .icon.facebook:hover,
        .icon.facebook:active,
        .icon.facebook:focus,
        .icon.facebook:focus-within {
            background: #1877f2;
        }

        .file-input-custom {
            height: 100%;
            padding: 12px 0rem 0px 5px;
            display: flex;
            align-items: center;
            font-size: 1rem;
            line-height: 1.5;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            box-sizing: border-box;
        }

        .auth-font {
            font-size: 14px;
        }

        .candidate {
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        #candidate-name {
            width: 60%;

            @media(max-width:768px) {
                width: 100%;
            }
        }

        .date-time-display {
            gap: 20px;

        }

        .autorization-note {
            padding: 0 0 25px 0 !important;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
            border-radius: 20px;
        }

        .auth-heading {
            padding: 25px 0;
            background: purple;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
            color: white;
        }

        .auth-font {
            padding: 0 25px;
        }

        .candidate-details {
            padding: 0 25px;
        }

        .auth-content h3 {
            margin: 20px 0;
        }


        #submit {
            --color: #560bad;
            font-family: inherit;
            display: inline-block;
            width: 8em;
            height: 2.6em;
            line-height: 2.5em;
            margin: 20px;
            position: relative;
            cursor: pointer;
            margin: 20px auto;
            overflow: hidden;
            border: 2px solid var(--color);
            transition: color 0.5s;
            z-index: 1;
            font-size: 17px;
            border-radius: 6px;
            font-weight: 500;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #581980;
            font-weight: 600;
        }

        #submit:before {
            content: "";
            position: absolute;
            z-index: -1;
            background: var(--color);
            height: 150px;
            width: 200px;
            border-radius: 50%;
        }

        #submit:hover {
            color: black;
            background: #EC2E5B;
            border-color: #EC2E5B;
            transition: .34s ease-in-out;


        }

        #submit:before {
            top: 100%;
            left: 100%;
            transition: all 0.7s;
        }

        #submit:hover:before {
            top: -30px;
            left: -30px;
        }

        #submit:active:before {
            background: #3a0ca3;
            transition: background 0s;
        }
    </style>
</head>

<body>
    <main>
        <section id="form" class="form">
            <form method="post" action="{{url('backgroundverification/add')}}" enctype="multipart/form-data">
                <div class="conatiner">
                    <div class="header">
                        <h2 class="heading fw-bold text-black">Background Verification</h2>
                        <p class="sub-heading">
                            Note: Please fill this form carefully because once you submit after that you can't edit
                            this.
                        </p>
                    </div>
                    <hr />
                    <div class="container">
                        <!-- Person details -->

                        <div class="form-wrap">
                            <h4 class="text-center text-decoration-underline fw-semibold py-1 py-md-2">Person Details
                            </h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="name-label" for="name">Name*</label>
                                        <input type="text" name="name" id="name" placeholder="Enter your name"
                                            class="form-control" required />
                                        @csrf
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="surname-label" for="surnamename">Surname*</label>
                                        <input type="text" name="surname" id="surname" placeholder="Enter your Surname"
                                            class="form-control" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="father's_name">Father's Name*</label>
                                        <input type="text" class="form-control" name="father_name"
                                            placeholder="Enter your father's name" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="present_address">Present Address*</label>
                                        <input type="text" class="form-control" name="present_address"
                                            placeholder="Enter your Present Address" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group select">
                                        <label for="residence_statues">Residence Status*</label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="residence_status" id="residence_status" required>
                                            <option value="Owned">Owned</option>
                                            <option value="Rented">Rented</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="landline_number">Landline Phone Number*</label>
                                        <input type="number" class="form-control" name="landline_phone"
                                            id="landline_phone" placeholder="Enter your father's name" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile_number">Mobile Number*</label>
                                        <input type="number" class="form-control" id="mobile_number"
                                            name="mobile_number" placeholder="Mobile number" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City*</label>
                                        <input type="text" class="form-control" placeholder="City" name="city" id="city"
                                            required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state">State*</label>
                                        <input type="text" class="form-control" name="state" id="state"
                                            placeholder="State" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="state">Land Mark*</label>
                                        <input type="text" class="form-control" name="landmark" id="landmark"
                                            placeholder="Landmark" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="postal_code">Postal Code*</label>
                                        <input type="text" class="form-control" name="postcode" id="postal_code"
                                            placeholder="Postal Code" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="police_station">Police Station Name*</label>
                                        <input type="text" class="form-control" name="police_station"
                                            id="police-station" placeholder="Police sation name" required />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Period of stay  -->
                        <div class="form-wrap my-3">
                            <h4 class="text-center text-decoration-underline fw-semibold py-1 py-md-2">Period of Stay
                            </h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="from">From*</label>
                                        <input type="date" name="stay_from" id="stay_from" placeholder="dd-mm-yyyy"
                                            class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="to">To*</label>
                                        <input type="date" name="stay_to" id="to" placeholder="dd-mm-yyyy"
                                            class="form-control" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Identify Verification -->
                        <div class="form-wrap my-3">
                            <h4 class="text-center text-decoration-underline fw-semibold py-1 py-md-2">Identify
                                Verification
                            </h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_of_birth">Date of Birth*</label>
                                        <input type="date" name="dob" id="date_of_birth" placeholder="dd-mm-yyyy"
                                            class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="aadhar">Aadhar Number*</label>
                                        <input type="text" name="aadhar" id="aadhar" placeholder="Aadhar Number"
                                            class="form-control" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Education Qualification  -->
                        <div class="form-wrap my-3">
                            <h4 class="text-center text-decoration-underline fw-semibold py-1 py-md-2">Highest
                                Educational Qualification</h4>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="school">Name of College</label>
                                        <input type="text" name="college_name" id="school" placeholder="Name of College"
                                            class="form-control" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="college_address">Full Address of College:</label>
                                        <input type="text" name="college_address" id="college_address"
                                            placeholder="Address of College:" class="form-control" required />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_of_entering">Date of Entering</label>
                                        <input type="date" class="form-control" id="date_of_entering"
                                            name="date_of_entering" placeholder="dd-mm-yyyy" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_of_leaving">Date of Leaving</label>
                                        <input type="date" class="form-control" id="date_of_leaving"
                                            name="date_of_leaving" placeholder="dd-mm-yyyy" required />
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="examination_passed">Examination Passed</label>
                                        <input type="date" class="form-control" id="examination_passed" name="examination_passed" />
                                    </div>
                                </div> -->

                        </div>

                        <!--  Add/Delete Buttuon  -->




                        <!-- Details of Pervious Employees  -->
                        <div class="form-wrap employees-details section my-3">
                            <div class="emp-details positon-relative">

                                <ul class="wrapper delbtn position-absolute">
                                    <li class="icon facebook addBtn" style="cursor:pointer;">
                                        <span class="tooltip">Add More Details of Previous Employees</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="#3257ec"
                                                d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                                        </svg>
                                        <path fill="#1877f2" d="..." />
                                        </svg>
                                    </li>
                                    <li class="icon delete deleteBtn" style="cursor:pointer;">
                                        <span class="tooltip">Delete</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path fill="#f00a0a"
                                                d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                        </svg>
                                        <path fill="#e20813" d="..." />
                                        </svg>
                                    </li>
                                </ul>


                                <h4 class="text-center text-decoration-underline fw-semibold py-1 py-md-2">Details of
                                    Pervious Employees 1</h4>
                                <p class="employee-subheading text-center">Note: - If any of the company names has been
                                    changed / merged / closed / shifted, please do provide with the details</p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_name">Company Name</label>
                                            <input type="text" name="company_name[]" id="company_name"
                                                placeholder="Company Name" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emp_id">Employee ID</label>
                                            <input type="text" name="emp_id[]" id="emp_id" placeholder="Employee ID"
                                                class="form-control" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emp_from">From</label>
                                            <input type="date" class="form-control" id="emp_from" name="emp_from[]"
                                                placeholder="dd-mm-yyyy" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emp_to">To</label>
                                            <input type="date" class="form-control" id="emp_to" name="emp_to[]"
                                                placeholder="dd-mm-yyyy" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_address">Street Address</label>
                                            <input type="exam" class="form-control" id="company_address"
                                                name="company_address[]" placeholder="Company address" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="employer_number">Employer's Landline No.</label>
                                            <input type="text" class="form-control" name="employer_number[]"
                                                id="employer_number" placeholder="Employer's Landline No." required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"><label for="company_city">City</label><input type="text"
                                                class="form-control" name="company_city[]" id="company_city"
                                                placeholder="Company City" required /></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="company_state">State</label><input
                                                type="text" class="form-control" name="company_state[]"
                                                id="company_state" placeholder="Company State" required /></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="company_country">Country</label><input
                                                type="text" class="form-control" name="company_country[]"
                                                id="company_country" placeholder="Country" required /></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="company_postalcode">Postal Code</label><input type="text"
                                                class="form-control" name="company_postal_code[]"
                                                id="company_postal_code" placeholder="Postal Code" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"><label for="job_designation">Job Title</label><input
                                                type="text" class="form-control" name="job_designation[]"
                                                id="job_designation" placeholder="Job-title" required /></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="leaving_reason">Reason for Leaving</label><input type="text"
                                                class="form-control" name="leaving_reason[]" id="leaving_reason"
                                                placeholder="Reason for Leaving" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group select">
                                            <label for="residence_statues">Employment Status</label>
                                            <select class="form-select" aria-label="Default select example"
                                                name="employment_status[]" id="employment_status" required>
                                                <option value="full_time">Full Time</option>
                                                <option value="contract">Contract / Through Outsourcing Agency</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <h4 class="text-center text-decoration-underline fw-semibold py-1 py-md-2">Outsourcing
                                    Agency Details</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="agency_name">Agency Name</label>
                                            <input type="text" class="form-control" name="agency_name[]"
                                                id="agency_name" placeholder="Agency name"  />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="agency_address">Agency address</label>
                                            <input type="text" name="agency_address[]" id="agency_address"
                                                class="form-control" placeholder="Agency Address"  />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"><label for="agency_number">Agency Number</label><input
                                                type="text" class="form-control" id="agency_number"
                                                name="agency_number[]" placeholder="Agency Number"  /></div>
                                    </div>
                                </div>


                                <h4 class="text-center text-decoration-underline fw-semibold py-1 py-md-2">Supervisors
                                    Details</h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sup_name">Supervisor Name</label>
                                            <input type="text" class="form-control" name="sup_name[]" id="sup_name" placeholder="Supervisor Name" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sup_title">Supervisor Designation</label>
                                            <input type="text" name="sup_desgignation[]" id="sup_desgignation"
                                                class="form-control" placeholder="Supervisor Designation" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"><label for="sup_num">Supervisor Number</label><input
                                                type="number" class="form-control" id="sup_number" name="sup_number[]" placeholder="Supervisor Number" required /></div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sup_email">Supervisor Email ID</label>
                                            <input type="email" class="form-control" id="sup_email" name="sup_email[]" placeholder="Supervisor official Email ID" required />
                                        </div>
                                    </div>
                                </div>


                                <h4 class="text-center text-decoration-underline fw-semibold py-1 py-md-2">HR Manager's
                                    Details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hr_name">HR Manager Name</label>
                                            <input type="text" class="form-control" name="hr_name[]" id="hr_name" placeholder="HR Manager Name" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hr_title">HR Designation</label>
                                            <input type="text" name="hr_desgignation[]" id="hr_desgignation"
                                                class="form-control" placeholder="HR Designation" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"><label for="hr_num">HR Number</label><input
                                                type="number" class="form-control" id="hr_number" name="hr_number[]" placeholder="HR Number" required /></div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hr_email">HR Email ID</label>
                                            <input type="email" class="form-control" id="hr_email" name="hr_email[]" placeholder="HR official Email ID" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Refrence Verification -->

                        <div class="form-wrap verification-section position-relative my-3">
                            <div class="refrence">
                                <ul class="wrapper delbtn position-absolute">
                                    <li class="icon facebook addrefBtn" style="cursor:pointer;">
                                        <span class="tooltip">Add More Refrence Details</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="#3257ec"
                                                d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z" />
                                        </svg>
                                        <path fill="#1877f2" d="..." />
                                        </svg>
                                    </li>
                                    <li class="icon delete deletrefeBtn" style="cursor:pointer;">
                                        <span class="tooltip">Delete</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                            <path fill="#f00a0a"
                                                d="M135.2 17.7L128 32 32 32C14.3 32 0 46.3 0 64S14.3 96 32 96l384 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-96 0-7.2-14.3C307.4 6.8 296.3 0 284.2 0L163.8 0c-12.1 0-23.2 6.8-28.6 17.7zM416 128L32 128 53.2 467c1.6 25.3 22.6 45 47.9 45l245.8 0c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                        </svg>
                                        <path fill="#e20813" d="..." />
                                        </svg>
                                    </li>
                                </ul>

                                <h4 class="text-center text-decoration-underline fw-semibold py-1 py-md-2">Reference
                                    Verification 1</h4>
                                <p class="refrence-subheading text-center">Professional References Provided By The
                                    Candidate</p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ref_name">Reference Name</label>
                                            <input type="text" class="form-control" name="ref_name[]" id="ref_name" placeholder="Reference Name" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ref_phone_no">Mobile Number</label>
                                            <input type="number" name="ref_phone_no[]" id="ref_phone_no"
                                                class="form-control" placeholder="9876XXXXXX" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"><label for="ref_details">Reference Company Name & Designation</label>
                                            <input type="text" class="form-control" id="ref_details"
                                                name="ref_details[]"
                                                placeholder="Reference Company Name & Designation:" required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ref_relation">Relation and Acquiantance with the
                                                candidate</label>
                                            <input type="text" class="form-control" id="ref_relation"
                                                name="ref_relation[]" placeholder="Relation and Acquiantance with the candidate" required />
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="declaration form-wrap mb-3">
                            <p class="fw-semi-bold">I certify that the foregoing information is correct and complete to
                                the best of my knoledge and belief.</p>
                            <div class="declartaion-field">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="" for="upload-file">Upload Your Digital Signature*</label>
                                        <div class="form-group" style="height: 50px;">
                                            <input type="file" class="form-control file-input-custom" id="upload-file" name="sign"
                                                accept=".jpeg,.jpg,.png,.svg,.webp" required />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <label for="place">Place*</label>
                                        <input type="text" class="form-control" name="place" id="place" required>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-wrap autorization-note">
                            <h6 class="auth-heading text-center">AUTHORIZATION NOTE</h6>
                            <div class="auth-content">
                                <h3 class="text-decoration text-center">To whom so ever it may concern</h3>

                                <p class="auth-font">I hereby authorize the retained third party verification services
                                    provider engaged by M/s. Codleo Consulting to obtain investigative employment
                                    screening report in connection to my application for employment. I understand that
                                    the continue
                                </p>
                                <p class="auth-font">All the information furnished by me in the Candidate Information
                                    Sheet
                                    is true to the best of my knowledge.</p>
                                <div class="row align-items-center candidate-details">
                                    <div class="col-md-8 candidate">
                                        <label for="candidate-name">
                                            Candidate Name*
                                        </label>
                                        <input type="text" name="candidate_name" id="candidate-name"
                                            class="form-control" required>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="date-content">
                                            <div
                                                class="date-time-display d-flex justify-content-center align-items-center">
                                                <p class="mb-0">Date:- </p>
                                                <p class="mb-0" id="currentDateTime"></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>

                    <input value="Submit" class="submit" type="submit" id="submit">

                </div>
            </form>
        </section>
    </main>

    <!-- Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Details of Pervious Employees -->
    <script>
        $(function () {
            const container = $(".employees-details").parent();
            ///when delete all events will trigger
            const toggleDelete = () => {
                $(".deleteBtn").css({
                    pointerEvents: $(".employees-details").length > 1 ? "auto" : "none",
                    opacity: $(".employees-details").length > 1 ? 1 : 0.5
                });
            };

            const showTooltipMessage = (selector, message) => {
                const tooltip = selector.find(".tooltip");
                const original = tooltip.text();
                tooltip.text(message);
                tooltip.fadeIn(200).delay(800).fadeOut(200, function () {
                    tooltip.text(original).fadeIn(0); // Restore original text
                });
            };

            container.on("click", ".addBtn", function () {
                const last = $(".employees-details").last();
                const clone = last.clone();
                const index = $(".employees-details").length + 1;

                clone.find("input, select").val("");
                clone.find("label, input, select").each(function () {
                    const attr = $(this).attr("for") || $(this).attr("id") || $(this).attr("name");
                    if (attr) {
                        const base = attr.replace(/_\d+$/, "");
                        if ($(this).attr("for")) $(this).attr("for", `${base}_${index}`);
                        if ($(this).attr("id")) $(this).attr("id", `${base}_${index}`);
                        if ($(this).attr("name")) $(this).attr("name", `${base}[]`);
                    }
                });

                clone.find("h4").first().text(`Details of Previous Employees ${index}`);
                last.after(clone);
                toggleDelete();

                showTooltipMessage($(this), "Added");  ///details
            });

            container.on("click", ".deleteBtn", function () {
                const sections = $(".employees-details");
                if (sections.length > 1) {
                    sections.last().remove();
                    sections.each(function (i) {
                        $(this).find("h4").first().text(`Details of Previous Employees ${i + 1}`);
                    });

                    toggleDelete();

                    showTooltipMessage($(this), "Deleted");
                }
            });

            toggleDelete();
        });
    </script>



    <!-- Reference Verification  -->
    <script>
        $(function () {
            const refContainer = $(".verification-section").parent();

            const toggleRefDelete = () => {
                $(".deletrefeBtn").css({
                    pointerEvents: $(".verification-section").length > 1 ? "auto" : "none",
                    opacity: $(".verification-section").length > 1 ? 1 : 0.5
                });
            };

            refContainer.on("click", ".addrefBtn", function () {
                const last = $(".verification-section").last();
                const clone = last.clone();
                const index = $(".verification-section").length + 1;

                // Clear input values
                clone.find("input").val("");

                // Update heading
                const heading = clone.find("h4");
                if (heading.length) {
                    heading.text(`Reference Details ${index}`);
                } else {
                    // If no heading exists, add one
                    clone.prepend(`<h4 class="mb-3">Reference Details ${index}</h4>`);
                }

                // Update ids, names, and for attributes
                clone.find("label, input").each(function () {
                    const $el = $(this);
                    const attr = $el.attr("for") || $el.attr("id") || $el.attr("name");

                    if (attr) {
                        const base = attr.replace(/_\d+$/, "").replace(/\d+$/, "");
                        const newAttr = base + "_" + index;
                        // const newAttr = base +"[]";

                        if ($el.attr("for")) $el.attr("for", newAttr);
                        if ($el.attr("id")) $el.attr("id", newAttr);
                        if ($el.attr("name")) $el.attr("name", (base + "[]"));
                    }
                });

                last.after(clone);

                $(".tooltip").text("Added new reference details");

                toggleRefDelete();
            });

            refContainer.on("click", ".deletrefeBtn", function () {
                const sections = $(".verification-section");
                if (sections.length > 1) {
                    sections.last().remove();

                    // Renumber headings
                    $(".verification-section").each(function (i) {
                        const heading = $(this).find("h4");
                        if (heading.length) {
                            heading.text(`Reference Details ${i + 1}`);
                        }
                    });

                    $(".tooltip").text("Deleted reference details");

                    toggleRefDelete();
                }
            });

            toggleRefDelete();
        });
    </script>



    <!--cURRENT DATE AND TIME -->
    <script>
        const now = new Date();
        const options = { day: '2-digit', month: 'short', year: 'numeric' };
        document.getElementById('currentDateTime').textContent = now.toLocaleDateString('en-GB', options);
    </script>

    <!-- App Url of Site  -->
    <script>
        const APP_URL = "{{url('')}}";
        console.log(APP_URL); 
    </script>

</body>

</html>