<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Tax Calculator</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <meta name="theme-color" content="#7952b3">
    
    <style>
        .body {
            background-color: #f9fafb;
            font-size: 18px;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .form-label {
            margin-bottom: 0.5rem;
            display: block;
            font-weight: 500;
            line-height: 1.25;
            font-size: 16px;
        }

        .paddingleft {
            padding-left: 30px;
        }

        .paddingtop {
            padding-top: 10px;
        }

        .bluetext {
            color: blue;
        }

        .input-group {
            position: relative;
            display: flex;
            width: 100%;
            flex-wrap: wrap;
            align-items: stretch;
        }

        h2 {
            font-size: 1.875rem;
            line-height: 2.25rem;
            font-weight: 700;
        }

        .form-check-inline {
            float: right;
        }

        .alignright {
            text-align: right;
        }

        .greytext {
            color: #787878;
        }

        svg {
            color: #505050;
        }

        .py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem
        }

        .text-green-600 {
            --tw-text-opacity: 1;
            color: rgb(22 163 74/var(--tw-text-opacity))
        }

        .bg-gray-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251/var(--tw-bg-opacity))
        }

        .justify-center {
            justify-content: center;
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        /* The sticky class is added to the navbar with JS when it reaches its scroll position */
        .sticky {
            position: fixed;
            top: -50px;
            right: 95px;
            width: 31%;
        }


        .children {
            display: none;
        }

        .spouse_not_working_rebate {
            display: none;
        }

        .disperson {
            display: none;
        }

        .mydiv {
            position: fixed;

            right: 95px;
            width: 31%;

        }
    </style>
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Tax Calculator Project Test</h2>
                <p class="lead">Malaysia Tax Calculator for the year {{ $year }}</p>
                <div>
                    <a href="">ENGLISH</a> | 
                    <a href="">MALAY</a>
                </div>
            </div>
            {{-- SUMMARY FORM --}}
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last mydiv" id="mydiv">
                    <h2 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Summary</span>
                    </h2>
                    <form class="needs-validation shadow bg-white rounded-lg" novalidate=""
                        style="background-color: white; padding: 22px; border-radius: 20px; width:100%;">
                        <div class="row g-3">
                            <div class="col-sm-7">
                                <label for="yearlyincome" class="form-label">Yearly income</label>
                            </div>
                            <div class="col-sm-5">
                                <label for="yearlyincome" class="form-label alignright greytext yearlyincome">RM
                                    0.00</label>
                            </div>
                            <div class="col-sm-7">
                                <label for="relieftotal" class="form-label">Relief</label>
                            </div>
                            <div class="col-sm-5">
                                <label for="relieftotal" class="form-label alignright greytext relieftotal">RM
                                    0.00</label>
                            </div>
                            <div class="col-sm-7">
                                <label for="taxableincome" class="form-label">Taxable income</label>
                            </div>
                            <div class="col-sm-5">
                                <label for="taxableincome" class="form-label alignright greytext taxableincome">RM
                                    0.00</label>
                            </div>
                            <div class="col-sm-7">
                                <label for="incometax" class="form-label">Income tax</label>
                            </div>
                            <div class="col-sm-5">
                                <label for="incometax" class="form-label alignright greytext incometax">RM 0.00</label>
                            </div>
                            <div class="col-sm-12">
                                <label for="year" class="form-label">Tax bracket</label>
                            </div>
                            <div class="col-sm-12">
                                <label for="year" class="form-label greytext taxbracket">RM 5,001 - RM 20,000
                                    (1%)</label>
                            </div>
                            <div class="col-sm-7">
                                <label for="totalrebate" class="form-label">Rebate</label>
                            </div>
                            <div class="col-sm-5">
                                <label for="totalrebate" class="form-label alignright greytext totalrebate">RM
                                    0.00</label>
                            </div>
                            <div class="col-sm-7">
                                <label for="year" class="form-label">Tax levied</label>
                            </div>
                            <div class="col-sm-5">
                                <label for="year" class="form-label alignright greytext taxlevied">RM 0.00</label>
                            </div>
                            <div class="col-sm-7">
                                <label for="year" class="form-label">Monthly Tax Deduction (MTD) that has been
                                    paid</label>
                            </div>
                            <div class="col-sm-5">
                                <label for="year" class="form-label alignright greytext monthlydeductiontext">RM
                                    0.00</label>
                            </div>

                            <div class="text-center border border-gray-200 bg-gray-50 rounded-lg py-8">
                                <span class="text-green-600 requiredpaytext">Excess tax paid</span>
                                <h2 class="text-4xl font-medium py-1">
                                    <div class="requiredpay">RM 0.00</div>
                                </h2>
                                <div class="text-lg text-gray-500 py-1 flex space-x-2 justify-center">
                                    <div><span class="requiredpaymonthly">RM 0.00</span> <span>Monthly</span></div>
                                </div>
                            </div>

                            <form class="card p-2">
                                <div class="input-group">
                                    <button type="submit" class="btn btn-secondary btn-md">Reset</button>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
                {{-- PERSONAL DETAILS  --}}
                <div class="col-md-7 col-lg-8">
                    <h2 class="mb-3">Personal Details</h2>
                    <form class="needs-validation shadow bg-white rounded-lg" novalidate=""
                        style="background-color: white; padding: 20px; border-radius: 20px;">
                        <div class="row g-3">
                            <div class="col-sm-8">
                                <label for="year" class="form-label">Year of Assessment</label>
                            </div>

                            <div class="col-sm-4">
                                <form id="yearForm" method="POST" action="/">
                                    @csrf
                                    <select class="form-control" id="year" name="year" required>
                                        @foreach ($getyears as $years)
                                            <option value="{{ $years->year }}"
                                                {{ $year == $years->year ? 'selected' : '' }}>{{ $years->year }}
                                            </option>
                                        @endforeach
                                    </select>
                                    {{-- <select class="form-control" id="year" name="year" required>
                                        @foreach ($getyears as $years)
                                            <option value="{{ $years->year }}" {{ $year == $years->year ? 'selected' : '' }}>
                                                {{ $years->year }}
                                            </option>
                                        @endforeach
                                    </select> --}}
                                    

                                </form>
                            </div>


                            <div class="col-sm-8">
                                <label for="gender" class="form-label">Gender</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="gender" id="genderf"
                                        value="Female">
                                    <label class="form-check-label" for="gender">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="gender" id="genderm"
                                        value="Male">
                                    <label class="form-check-label" for="gender">Male</label>
                                </div>

                            </div>

                            <div class="col-sm-8">
                                <label for="government_servant" class="form-label">Are you government servant?</label>
                            </div>

                            <div class="col-sm-4">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="government_servant"
                                        id="government_servant" value="Yes">
                                    <label class="form-check-label" for="government_servant">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="government_servant"
                                        id="government_servant" value="No" checked>
                                    <label class="form-check-label" for="government_servant">No</label>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="disabled_person" class="form-label">Are you disabled person?</label>
                            </div>

                            <div class="col-sm-4">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="disabled_person"
                                        id="disabled_person_yes" value="{{ $taxcalc->disabled_person }}">
                                    <label class="form-check-label" for="disabled_person">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="disabled_person"
                                        id="disabled_person_no" value="No" value="0" checked>
                                    <label class="form-check-label" for="disabled_person">No</label>
                                </div>
                            </div>


                            <div class="col-sm-8">
                                <label for="marital_status" class="form-label">Marital Status</label>
                            </div>

                            <div class="col-sm-4">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="marital_status"
                                        id="marital_status_married">
                                    <label class="form-check-label" for="marital_status">Married</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="marital_status"
                                        id="marital_status_single" value="0" checked>
                                    <label class="form-check-label" for="marital_status">Single</label>
                                </div>
                            </div>




                            <div class="col-sm-12 spouse">
                                <label for="spouse" class="form-label">Spouse</label>
                            </div>

                            <div class="col-sm-8 spouse">
                                <label for="marital_status" class="form-label">Is working?</label>
                            </div>

                            <div class="col-sm-4 spouse">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="spouse_not_working"
                                        id="spouse_not_working_yes" value="0">
                                    <label class="form-check-label" for="spouse_not_working">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="spouse_not_working"
                                        id="spouse_not_working" value="{{ $taxcalc->spouse_not_working }}" checked>
                                    <label class="form-check-label" for="spouse_not_working_no">No</label>
                                </div>
                            </div>

                            <div class="col-sm-8 spouse">
                                <label for="marital_status" class="form-label">Is disabled?</label>
                            </div>

                            <div class="col-sm-4 spouse">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="spouse_is_disabled"
                                        id="spouse_is_disabled" value="{{ $taxcalc->spouse_is_disabled }}">
                                    <label class="form-check-label" for="spouse_is_disabled">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="spouse_is_disabled"
                                        id="spouse_is_disabled_no" value="0" checked>
                                    <label class="form-check-label" for="spouse_is_disabled">No</label>
                                </div>
                            </div>


                            <div class="col-sm-8 spouse">
                                <label for="havechild" class="form-label">Do you have child?</label>
                            </div>

                            <div class="col-sm-4 spouse">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="doyouhavechild"
                                        id="childyes">
                                    <label class="form-check-label" for="marital_status">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input key" type="radio" name="doyouhavechild"
                                        id="childno" checked>
                                    <label class="form-check-label" for="marital_status">No</label>
                                </div>
                            </div>

                            <div class="col-sm-12 children">
                                <label for="children" class="form-label">Children</label>
                            </div>

                            <div class="col-sm-8 children">
                                <label for="noofchildless18" class="form-label paddingleft">No of Child (<18)< /label>
                            </div>


                            <div class="col-sm-4 children">
                                <input type="number" class="form-control key childval" id="noofchildless18"
                                    name="noofchildless18" value="0" min="0" required>
                            </div>

                            <div class="col-sm-8 children">
                                <label for="noofchildmore18alevel" class="form-label paddingleft">No of Child (≥18),A
                                    Level</label>
                            </div>


                            <div class="col-sm-4 children">
                                <input type="number" class="form-control key childval" id="noofchildmore18alevel"
                                    name="noofchildmore18alevel" value="0" min="0" required>
                            </div>

                            <div class="col-sm-8 children">
                                <label for="noofchildmore18diploma" class="form-label paddingleft">No of Child
                                    (≥18),Diploma and above</label>
                            </div>


                            <div class="col-sm-4 children">
                                <input type="number" class="form-control key childval" id="noofchildmore18diploma"
                                    name="noofchildmore18diploma" value="0" min="0" required>
                            </div>


                            <div class="col-sm-12 children">
                                <label for="disabledchild" class="form-label">Disabled Child</label>
                            </div>

                            <div class="col-sm-8 children">
                                <label for="noofdisabledchild" class="form-label paddingleft">No. of disabled
                                    child</label>
                            </div>


                            <div class="col-sm-4 children">
                                <input type="number" class="form-control key childval" id="noofdisabledchild"
                                    name="noofdisabledchild" value="0" min="0" required>
                            </div>

                            <div class="col-sm-8 children">
                                <label for="noofdisabledchildmore18diploma" class="form-label paddingleft">No. of
                                    disabled child (≥18),Diploma and above</label>
                            </div>


                            <div class="col-sm-4 children">
                                <input type="number" class="form-control key childval"
                                    id="noofdisabledchildmore18diploma" name="noofdisabledchildmore18diploma"
                                    value="0" min="0" required>
                            </div>

                            <div class="col-sm-8 children">
                                <label for="sspnchildsaving" class="form-label paddingleft">SSPN (Child Education
                                    Saving)</label>
                            </div>


                            <div class="col-sm-4 children">
                                <input type="number" class="form-control key childval max-value-input"
                                    id="sspnchildsaving" name="sspnchildsaving" value="0" min="0"
                                    max="{{ $taxcalc->sspnchildsaving }}" required>
                                <div class="max-value-message"
                                    style="display: none; color: grey; font-size:12px; margin-top:10px;"></div>
                            </div>

                            <div class="col-sm-8 children">
                                <label for="breastfeedingequipment" class="form-label paddingleft">Breastfeeding
                                    Equipment</label>
                            </div>


                            <div class="col-sm-4 children">
                                <input type="number" class="form-control key childval max-value-input"
                                    id="breastfeedingequipment" name="breastfeedingequipment" value="0"
                                    min="0" max="{{ $taxcalc->breastfeedingequipment }}" required>
                                <div class="max-value-message"
                                    style="display: none; color: grey; font-size:12px; margin-top:10px;"></div>
                            </div>

                            <div class="col-sm-8 children">
                                <label for="childcarefees" class="form-label paddingleft">Childcare centres and
                                    kindergartens fees</label>
                            </div>


                            <div class="col-sm-4 children">
                                <input type="number" class="form-control key childval max-value-input"
                                    id="childcarefees" name="childcarefees" value="0" min="0"
                                    max="{{ $taxcalc->childcarefees }}" required>
                                <div class="max-value-message"
                                    style="display: none; color: grey; font-size:12px; margin-top:10px;"></div>
                            </div>



                            <div class="col-sm-8">
                                <label for="yearlyincome" class="form-label">Yearly income<br><a class="bluetext"
                                        href="#" data-bs-toggle="modal" data-bs-target="#calcModal">Calculate
                                        yearly income</a></label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key" id="yearlyincome"
                                        name="yearlyincome" value="0" required>
                                </div>
                            </div>


                            <div class="col-sm-8">
                                <label for="monthlytaxdeduction" class="form-label">Monthly tax deduction (MTD) that
                                    has been paid for<br> year 2023</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key" id="monthlytaxdeduction"
                                        name="monthlytaxdeduction" value="0" required>
                                </div>
                            </div>

                    </form>


                </div>
            </div>





        </main>
        <br>
        <main>
            {{-- RELIEF --}}
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                </div>
                <div class="col-md-7 col-lg-8">
                    <h2 class="mb-3">Relief</h2>
                    <form class="needs-validation shadow bg-white rounded-lg" novalidate=""
                        style="background-color: white; padding: 20px; border-radius: 20px;">
                        <div class="row g-3">
                            <div class="col-sm-8">
                                <label for="individualdependentrelatives" class="form-label">Individual & dependent
                                    relatives</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control" id="individualdependentrelatives"
                                        name="individualdependentrelatives"
                                        value="{{ $taxcalc->individual_dependent_relatives_relief }}" readonly>
                                </div>
                            </div>

                            <div class="col-sm-8 disperson">
                                <label for="disperson" class="form-label">Disabled person</label>
                            </div>

                            <div class="col-sm-4 disperson">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control" id="disperson" name="disperson"
                                        value="{{ $taxcalc->disabled_person }}" readonly>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="educationfeeforself" class="form-label">Education fee for self</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input"
                                        id="educationfeeforself" name="educationfeeforself" value="0"
                                        max="{{ $taxcalc->educationfeeforself }}" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="children" class="form-label">Children</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control" id="children" name="children"
                                        value="0" readonly>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="equipmentfordisabledperson" class="form-label">Equipment for disabled
                                    person</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input"
                                        id="equipmentfordisabledperson" name="equipmentfordisabledperson"
                                        max="{{ $taxcalc->equipmentfordisabledperson }}" value="0" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="dischildcarefees" class="form-label">Childcare fees</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input"
                                        id="dischildcarefees" name="dischildcarefees" value="0"
                                        max="{{ $taxcalc->dischildcarefees }}" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="medicalexpenses" class="form-label">Medical expenses for self, spouse or
                                    children</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input"
                                        id="medicalexpenses" name="medicalexpenses" value="0"
                                        max="{{ $taxcalc->medicalexpenses }}" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="medicalexpensesparents" class="form-label">Medical expenses for
                                    parent</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input"
                                        id="medicalexpensesparents" name="medicalexpensesparents" value="0"
                                        max="{{ $taxcalc->medicalexpensesparents }}" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>

                            <div class="col-sm-8 epf">
                                <label for="epf" class="form-label">EPF</label>
                            </div>

                            <div class="col-sm-4 epf">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input" id="epf"
                                        name="epf" value="0" max="{{ $taxcalc->epf }}" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="socso" class="form-label">SOCSO</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input" id="socso"
                                        name="socso" value="0" max="{{ $taxcalc->socso }}" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="lifeinsurance" class="form-label">Life insurance</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input" id="lifeinsurance"
                                        name="lifeinsurance" max="{{ $taxcalc->epf }}" value="0" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="educationmedicalinsurance" class="form-label">Education & medical
                                    insurance</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input"
                                        id="educationmedicalinsurance" name="educationmedicalinsurance"
                                        max="{{ $taxcalc->educationmedicalinsurance }}" value="0" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="prs" class="form-label">Private Retirement Scheme (PRS)</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input" id="prs"
                                        name="prs" value="0" max="{{ $taxcalc->prs }}" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="sspn" class="form-label">SSPN</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input" id="sspn"
                                        name="sspn" value="0" max="{{ $taxcalc->sspn }}" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="lifestyle" class="form-label">Lifestyle <br>
                                    <p class="text-muted"><small>Purchases of reading materials, computer, tablet,
                                            smartphone, sport equipment, gymnasium membership and / or internet
                                            subscription</small></p>
                                </label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input" id="lifestyle"
                                        name="lifestyle" max="{{ $taxcalc->prs }}" value="0" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>



                            <div class="col-sm-8">
                                <label for="lifestyleaddsports" class="form-label">Lifestyle - Additional relief for
                                    sport activity <br>
                                    <p class="text-muted"><small>Purchases of sports equipment, rental / entrance fee
                                            to any sports facility and / or registration fee for any sports
                                            competition</small></p>
                                </label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input"
                                        id="lifestyleaddsports" name="lifestyleaddsports"
                                        max="{{ $taxcalc->lifestyleaddsports }}" value="0" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="electricalvehiclecharging" class="form-label">Electric Vehicle Charging
                                    Facilities <br>
                                    <p class="text-muted"><small>Expenses on charging facilities for Electric Vehicle
                                            (Not for business use)</small></p>
                                </label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key max-value-input"
                                        id="electricalvehiclecharging" name="electricalvehiclecharging"
                                        max="{{ $taxcalc->electricalvehiclecharging }}" value="0" required>
                                </div>
                                <div class="max-value-message" style="display: none; color: grey; font-size:12px;">
                                </div>
                            </div>



                            <div class="col-sm-8">
                                <label for="donationgift" class="form-label">Donation / Gift</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key" id="donationgift"
                                        name="donationgift" value="0" required>
                                </div>
                            </div>

                    </form>


                </div>
            </div>

        </main>

        <br>
        <main>
            {{-- REBATE --}}
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                </div>
                <div class="col-md-7 col-lg-8">
                    <h2 class="mb-3">Rebate</h2>
                    <form class="needs-validation shadow bg-white rounded-lg" novalidate=""
                        style="background-color: white; padding: 20px; border-radius: 20px;">
                        <div class="row g-3">

                            <div class="col-sm-8">
                                <label for="selfrebate" class="form-label">Self</label>
                            </div>

                            <div class="col-sm-4 ">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key" id="selfrebate" name="selfrebate"
                                        value="{{ $taxcalc->selfrebate }}" readonly>
                                </div>
                            </div>

                            <div class="col-sm-8 spouse_not_working_rebate">
                                <label for="spouse_not_working_rebate" class="form-label">Spouse</label>
                            </div>

                            <div class="col-sm-4 spouse_not_working_rebate">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control" id="spouse_not_working_rebate"
                                        name="spouse_not_working_rebate"
                                        value="{{ $taxcalc->spouse_not_working_rebate }}" readonly>
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <label for="zakatfitrah" class="form-label">Zakat & Fitrah</label>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">RM</span>
                                    <input type="number" class="form-control key" id="zakatfitrah"
                                        name="zakatfitrah" value="0" required>
                                </div>
                            </div>

                    </form>


                </div>
            </div>
            {{-- MODAL FOR CALC YEARLY INCOME --}}
            @include('Tax.Modal.calculateYearlyIncome')
        </main>

        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2024 Tax Calculator</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <script>
        window.onscroll = function() {
            myFunction()
        };
        var mydiv = document.getElementById("mydiv");
        var sticky = mydiv.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                mydiv.classList.add("sticky")
            } else {
                mydiv.classList.remove("sticky");
            }
        }

        function enforceMaxValue(inputElement) {
            var maxValue = parseFloat(inputElement.attr('max'));

            inputElement.on('input', function() {
                var enteredValue = parseFloat($(this).val());

                if (enteredValue > maxValue) {
                    $(this).val(maxValue);
                }
            });
        }

        function formatNumberWithCommas(number) {
            number = parseFloat(number);

            if (isNaN(number) || number === null) {
                return '0.00';
            } else {
                return number.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
            }
        }


        function formatNumberWithCommasNoDecimal(number) {
            number = parseFloat(number);

            if (!isNaN(number)) {
                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            } else {
                return 0.00;
            }
        }


        $(document).ready(function() {


            $('input[type="number"]').blur(function() {

                if ($(this).val() === '') {

                    $(this).val('0').trigger('change');
                }
            });

            $('#year').on('change', function() {

                $('form').eq(1).submit();
            });

            //max value message
            $('.max-value-input').on('focus', function() {
                var maxValue = $(this).attr('max');
                var formattedMaxValue = formatNumber(parseFloat(maxValue));
                $(this).closest('.col-sm-4').find('.max-value-message').text('Maximum limit RM ' +
                    formattedMaxValue).show();
            });

            $('.max-value-input').on('blur', function() {
                $(this).closest('.col-sm-4').find('.max-value-message').hide();
            });

            function formatNumber(number) {
                return number.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
            }


            enforceMaxValue($('#educationfeeforself'));
            enforceMaxValue($('#equipmentfordisabledperson'));
            enforceMaxValue($('#dischildcarefees'));
            enforceMaxValue($('#medicalexpenses'));
            enforceMaxValue($('#medicalexpensesparents'));
            enforceMaxValue($('#epf'));
            enforceMaxValue($('#socso'));
            enforceMaxValue($('#lifeinsurance'));
            enforceMaxValue($('#educationmedicalinsurance'));
            enforceMaxValue($('#prs'));
            enforceMaxValue($('#sspn'));
            enforceMaxValue($('#lifestyle'));
            enforceMaxValue($('#lifestyleaddsports'));
            enforceMaxValue($('#electricalvehiclecharging'));




            $('#sameordiff').on('click', function() {

                if ($(this).prop('checked')) {
                    $('.same').show();
                    $('.diff').hide();
                } else {
                    $('.same').hide();
                    $('.diff').show();
                }

            });

            //calc yearly income -> popup modal 
            $('#calculateyearly').on('click', function() {

                if ($('#sameordiff').prop('checked')) {
                    var monthlyincome = $('#monthlyincome').val();

                    if (monthlyincome <= 0) {
                        alert('Monthly income must be more than 0!');
                    } else {
                        var myyearlyincome = monthlyincome * 12;
                        $('#yearlyincome').val(myyearlyincome).trigger('change');
                        $('#calcModal').modal('hide');


                        for (var i = 1; i <= 12; i++) {
                            $('#monthlyincome' + i).val(monthlyincome);
                        }

                    }
                } else {
                    var jan = parseFloat($('#monthlyincome1').val()) || 0;
                    var feb = parseFloat($('#monthlyincome2').val()) || 0;
                    var mar = parseFloat($('#monthlyincome3').val()) || 0;
                    var apr = parseFloat($('#monthlyincome4').val()) || 0;
                    var may = parseFloat($('#monthlyincome5').val()) || 0;
                    var jun = parseFloat($('#monthlyincome6').val()) || 0;
                    var july = parseFloat($('#monthlyincome7').val()) || 0;
                    var aug = parseFloat($('#monthlyincome8').val()) || 0;
                    var sep = parseFloat($('#monthlyincome9').val()) || 0;
                    var oct = parseFloat($('#monthlyincome10').val()) || 0;
                    var nov = parseFloat($('#monthlyincome11').val()) || 0;
                    var dec = parseFloat($('#monthlyincome12').val()) || 0;

                    var totalIncome = jan + feb + mar + apr + may + jun + july + aug + sep + oct + nov +
                        dec;

                    if (totalIncome < 0) {
                        alert("Total income must be equal to or more than 0.");
                    } else {
                        var myyearlyincome = totalIncome;
                        $('#yearlyincome').val(myyearlyincome).trigger('change');
                        $('#calcModal').modal('hide');
                    }





                }
            });


            $('.key').on('change keyup', function() {

                if (!$('#government_servant').prop('checked')) {
                    $('.epf').show();
                } else {
                    $('.epf').hide();
                    $('#epf').val(0);
                }


                if ($('#disabled_person_yes').prop('checked')) {
                    $('.disperson').show();
                }

                if ($('#disabled_person_no').prop('checked')) {
                    $('.disperson').hide();
                }

                if ($('#marital_status_single').prop('checked')) {
                    $('.spouse_not_working_rebate').hide();
                    var spousenotworkingrebate = 0;
                    $('.childval').val(0);
                    $('#childno').prop('checked', true);
                }

                if ($('#marital_status_married').prop('checked')) {
                    $('.spouse').show();

                } else {
                    $('.spouse').hide();




                    if (!$('#spouse_not_working').prop('checked')) {
                        $('#spouse_not_working').prop('checked', true).change();

                    }
                    if (!$('#spouse_is_disabled_no').prop('checked')) {
                        $('#spouse_is_disabled_no').prop('checked', true).change();
                    }
                }


                if (!$('#childno').prop('checked')) {
                    $('.children').show();
                } else {
                    $('.children').hide();
                    $('.childval').val(0);
                }

                var yearlyincome = $('#yearlyincome').val();
                var selfrebate = $('#selfrebate').val();
                var zakatfitrah = $('#zakatfitrah').val();
                var individualdependentrelatives = $('#individualdependentrelatives').val();
                var disabledperson = $('#disabled_person_yes').prop('checked') ? $('#disabled_person_yes')
                    .val() : 0;
                var maritalstatus = 0;

                if (!$('#marital_status_single').prop('checked')) {

                    if ($('#spouse_not_working').prop('checked') == true) {

                        var spousenotworkingrebate = {{ $taxcalc->spouse_not_working_rebate }};
                        var spousenotworking = {{ $taxcalc->spouse_not_working }};

                        $('.spouse_not_working_rebate').show();

                    } else {
                        var spousenotworkingrebate = 0;
                        var spousenotworking = 0;
                        $('.spouse_not_working_rebate').hide();
                    }

                    if ($('#spouse_is_disabled').prop('checked') == true) {
                        var spouseisdisabled = {{ $taxcalc->spouse_is_disabled }};
                    } else {
                        var spouseisdisabled = 0;
                    }
                } else {
                    var spousenotworking = 0;
                    var spouseisdisabled = 0;
                }

                console.log(spousenotworking);


                var noofchildless18 = parseInt($('#noofchildless18').val()) * parseFloat(
                    {{ $taxcalc->noofchildless18 }});
                var noofchildmore18alevel = parseInt($('#noofchildmore18alevel').val()) * parseFloat(
                    {{ $taxcalc->noofchildmore18alevel }});
                var noofchildmore18diploma = parseInt($('#noofchildmore18diploma').val()) * parseFloat(
                    {{ $taxcalc->noofchildmore18diploma }});

                var noofdisabledchild = parseInt($('#noofdisabledchild').val()) * parseFloat(
                    {{ $taxcalc->noofdisabledchild }});
                var noofdisabledchildmore18diploma = parseInt($('#noofdisabledchildmore18diploma').val()) *
                    parseFloat({{ $taxcalc->noofdisabledchildmore18diploma }});
                var sspnchildsaving = $('#sspnchildsaving').val();
                var breastfeedingequipment = $('#breastfeedingequipment').val();
                var childcarefees = $('#childcarefees').val();
                var educationfeeforself = $('#educationfeeforself').val();

                var equipmentfordisabledperson = $('#equipmentfordisabledperson').val();
                var dischildcarefees = $('#dischildcarefees').val();
                var medicalexpenses = $('#medicalexpenses').val();
                var medicalexpensesparents = $('#medicalexpensesparents').val();
                var epf = $('#epf').val();
                var socso = $('#socso').val();
                var lifeinsurance = $('#lifeinsurance').val();
                var educationmedicalinsurance = $('#educationmedicalinsurance').val();
                var prs = $('#prs').val();
                var sspn = $('#sspn').val();
                var lifestyle = $('#lifestyle').val();
                var lifestyleaddsports = $('#lifestyleaddsports').val();
                var electricalvehiclecharging = $('#electricalvehiclecharging').val();
                var donationgift = $('#donationgift').val();
                var monthlytaxdeduction = $('#monthlytaxdeduction').val();


                $('.monthlydeductiontext').text('RM ' + formatNumberWithCommas(monthlytaxdeduction));


                var totalrelief = parseFloat(disabledperson) +
                    parseFloat(individualdependentrelatives) +
                    parseFloat(spousenotworking) +
                    parseFloat(spouseisdisabled) +
                    parseFloat(noofchildless18) +
                    parseFloat(noofchildmore18alevel) +
                    parseFloat(noofchildmore18diploma) +
                    parseFloat(noofdisabledchild) +
                    parseFloat(noofdisabledchildmore18diploma) +
                    parseFloat(sspnchildsaving) +
                    parseFloat(breastfeedingequipment) +
                    parseFloat(childcarefees) +
                    parseFloat(educationfeeforself) +
                    parseFloat(equipmentfordisabledperson) +
                    parseFloat(dischildcarefees) +
                    parseFloat(medicalexpenses) +
                    parseFloat(medicalexpensesparents) +
                    parseFloat(epf) +
                    parseFloat(socso) +
                    parseFloat(lifeinsurance) +
                    parseFloat(educationmedicalinsurance) +
                    parseFloat(prs) +
                    parseFloat(sspn) +
                    parseFloat(lifestyle) +
                    parseFloat(lifestyleaddsports) +
                    parseFloat(electricalvehiclecharging) +
                    parseFloat(donationgift);

                $('.yearlyincome').text('RM ' + formatNumberWithCommas(yearlyincome));

                var taxableincome = yearlyincome - totalrelief;

                //Rebate Calc
                $('.totalrebate').text('RM ' + formatNumberWithCommas(parseFloat(selfrebate) + parseFloat(
                    zakatfitrah) + parseFloat(spousenotworkingrebate)));

                $('.relieftotal').text('RM ' + formatNumberWithCommas(totalrelief));

                if (taxableincome > 0) {
                    $('.taxableincome').text('RM ' + formatNumberWithCommas(taxableincome));

                    var years = $('#year').val();

                    $.ajax({
                        url: "{{ route('calculate.tax') }}",
                        method: 'post',
                        data: {
                            '_token': '{{ csrf_token() }}',
                            'taxableincome': parseFloat(taxableincome),
                            'years': years
                        },
                        success: function(response) {
                            var taxlevied = response.incometax - (parseFloat(selfrebate) +
                                parseFloat(zakatfitrah));

                            // Check if taxlevied is negative
                            if (taxlevied < 0) {
                                taxlevied = 0; // Set to zero if negative
                            }

                            $('.incometax').text('RM ' + formatNumberWithCommas(response
                                .incometax));
                            $('.taxlevied').text('RM ' + formatNumberWithCommas(taxlevied));

                            var requiredpay = taxlevied - parseFloat(monthlytaxdeduction);
                            var requiredpaymonthly = requiredpay / 12;

                            if (requiredpay > 0) {
                                $('.requiredpay').text('RM ' + formatNumberWithCommas(
                                    requiredpay));
                                $('.requiredpaymonthly').text('RM ' + formatNumberWithCommas(
                                    requiredpaymonthly));
                                $('.requiredpaytext').text('Tax required to pay').css('color',
                                    'red');
                            } else {
                                $('.requiredpay').text('RM 0.00');
                                $('.requiredpaymonthly').text('RM 0.00');
                                $('.requiredpaytext').text('Excess tax paid').css('color',
                                    'green');
                            }
                        }
                    });


                } else {
                    $('.taxableincome').text('RM 0.00');
                    $('.incometax').text('RM 0.00');
                    $('.taxlevied').text('RM 0.00');
                    $('.requiredpay').text('RM 0.00');
                    $('.requiredpaymonthly').text('RM 0.00');


                }


            });
            $('#genderm').prop('checked', true).trigger('change');

        });
    </script>


</body>

</html>
