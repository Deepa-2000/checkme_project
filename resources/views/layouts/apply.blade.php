@include('components.header')
  <style>
        .formErrorArrow{
            display: none;
        }
    .error {
        color:red;
        font-size:11px;
        opacity:0.75
    }
    .formError .formErrorContent {
        background: none;
        color: red;
       /* width: 175px;*/
        /* //font-family: Arial, Helvetica, sans-serif; */
        font-size: 11px;
        padding: 2px 5px;
        margin-left: 0px;
        opacity: 1;
        border: 0px solid #CCCCCC;
    }

    .bigdrop{
        width:600px;
    }
    .has-select2 .formErrorContent {
        position: absolute !important;
        left: 0;
        top: 30px;
    }
    .year_from_pgformError, .year_from_ugformError, .year_from_12formError, .year_from_10formError, .year_to_pgformError, .year_to_ugformError, .year_to_ugformError, .year_to_12formError, .year_to_10formError, .employement_year11formError, .employement_year_month12formError{
        z-index: 1 !important;
    }

    #educationtable tr td:last-child .cgpa_in_pg_nuformError{
        top: 23.2px !important;
        left: -2px !important;
        width:75px !important;
        line-height: 12px !important;
    }
    #educationtable tr td:last-child .cgpa_in_pg_deformError{
        top: 23.2px !important;
        left: 95.5px !important;
        width: 75px !important;
        line-height: 12px !important;
    }

    #educationtable tr td:last-child .cgpa_of_ug_nuformError{
        top: 23.2px !important;
        left: -2px !important;
        width:75px !important;
        line-height: 12px !important;
    }
    #educationtable tr td:last-child .cgpa_of_ug_deformError{
        top: 23.2px !important;
        left: 95.5px !important;
        width: 75px !important;
        line-height: 12px !important;
    }
    #educationtable tr td:last-child .cgpa_in_12_nuformError{
        top: 23.2px !important;
        left: -2px !important;
        width:75px !important;
        line-height: 12px !important;
    }
    #educationtable tr td:last-child .cgpa_in_12_deformError{
        top: 23.2px !important;
        left: 95.5px !important;
        width: 75px !important;
        line-height: 12px !important;
    }
    #educationtable tr td:last-child .cgpa_in_10_nuformError{
        top: 23.2px !important;
        left: -2px !important;
        width:75px !important;
        line-height: 12px !important;
    }
    #educationtable tr td:last-child .cgpa_in_10_deformError{
        top: 23.2px !important;
        left: 95.5px !important;
        width: 75px !important;
        line-height: 12px !important;
    }
    .errorPrivacy {
    color: #d9534f;
    font-size: 11px;
    font-weight: 100;
    }

</style>
    </head>
    <body>
        <div class="wrapper h-100">
            <div class="container-fluid pt-3 pb-5">
                <div class="container bg-white mt-3 rounded custom-shadow  pl-4 pr-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pt-3 text-center">
                                <img src="img/logo.jpg" alt="">
                            </div>
                            <hr>
                        </div>
                    </div>
                    <form action="#" enctype="multipart/form-data" method="post" id="myform" class="custom-form-theme fnt-8 pb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="text-secondary d-inline-block legend">Basic Details</h5>
                            </div>
                        </div>
                        					<input type="hidden"  name="requisition_id" value="197" >
					<input type="hidden"  name="recruiter_id" value="5032" >


                        <input type="hidden"  name="hiring_source_id" value="campus" >
                        <input type="hidden"  name="url_parameters" value="c291cmNlPXdlYnNpdGUmcmVxdWlzaXRpb25fbm89QVJTLzAxODY=">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Full Name<sup class="text-danger">*</sup></label>
                                    <input type="text" value="" name="full_name" class="form-control validate[required]"  >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Email ID<sup class="text-danger">*</sup></label>
                                    <input type="text" value="" name="email" class="form-control validate[required]"  >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Gender<sup class="text-danger">*</sup></label>
                                    <div class="custom-radio mb-0">
                                        <input name="gender" type="radio"  id="male" value="m">
                                        <label for="male">Male</label>

                                        <input name="gender" type="radio" id="female" value="f">
                                        <label for="female">Female</label>

                                        <input name="gender" type="radio" id="other" value="o">
                                        <label for="other">Other</label>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Marital Status<sup class="text-danger">*</sup></label>
                                    <div class="custom-radio mb-0">
                                        <input name="maritalStatus" type="radio" id="married" value="Married">
                                        <label for="married">Married</label>

                                        <input name="maritalStatus" type="radio" id="unmarried" value="Unmarried">
                                        <label for="unmarried">Unmarried</label>

                                        <input name="maritalStatus" type="radio" id="separated" value="Separated">
                                        <label for="separated">Separated</label>

                                    </div>
                                    <div class="mul-option"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Phone Number<sup class="text-danger">*</sup></label>
                                    <input type="text" value="" autocomplete="off" name="mobileNo" class="form-control validate[required,custom[phone],maxSize[10],minSize[10]]" style="width: 50%;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Current Address<sup class="text-danger">*</sup></label>
                                    <textarea name="address" autocomplete="off" rows="2" class="form-control validate[required]"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="text-secondary d-inline-block legend">Current/Last Employment</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-1">
                                <div class="form-group">
                                    <label for="">Are you experienced?<sup class="text-danger">*</sup></label>
                                    <div class="custom-radio mb-0">
                                        <input name="experience" type="radio" id="expYes" value="1" onchange="handleExperience(this.value)">
                                        <label for="expYes">Yes</label>

                                        <input name="experience" type="radio" id="expNo" value="0" onchange="handleExperience(this.value)">
                                        <label for="expNo">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" id="ifExpNo" style="display: none;">
                                <div class="form-group">
                                    <label for="">Available to join(in Days)<sup class="text-danger">*</sup></label>
                                    <input type="text" autocomplete="off" name="availableToJoin" class="form-control validate[required,custom[onlyNumberSp],min[1],max[180]]" style="width: 25%;">
                                </div>
                            </div>
                        </div>
                        <div id="ifExpYes" style="display: none;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Are you currently employed?<sup class="text-danger">*</sup></label>
                                        <div class="custom-radio mb-0">
                                            <input name="employed" type="radio" id="employedYes" value="1" onchange="handleEmployed(this.value)">
                                            <label for="employedYes">Yes</label>

                                            <input name="employed" type="radio" id="employedNo" value="0" onchange="handleEmployed(this.value)">
                                            <label for="employedNo">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="current_employer_div has-select2">
                                            <label for="">Current/Last Employer<sup class="text-danger">*</sup></label><br/>
                                            <select name="current_employer" id="current_employer" class="form-control  validate[required]" style="width:90%" onchange="handleCurrentEmployer(this.value)">
                                                <option value="">--Select company--</option>
                                            </select><br/>
                                            <input type="text" autocomplete="off" placeholder="company name" id="other_company" name="other_company" style="display:none;margin-top: 10px;"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Designation<sup class="text-danger">*</sup></label>
                                        <input type="text" autocomplete="off" name="current_designation" class="form-control validate[required]" onchange="handleCurrentDesignation(this.value)">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">Current/Last Company's Location<sup class="text-danger">*</sup></label>
                                        <input type="text" autocomplete="off" name="company_location" class="form-control validate[required,custom[onlyLetterSp]]">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div id="ifEmpYes" class="col-md-2" style="display: none;">
                                    <div class="form-group">
                                        <label for="">Notice Period(in Days)<sup class="text-danger">*</sup></label>
                                        <input type="text" autocomplete="off" name="notice_period" class="form-control validate[required,custom[onlyNumberSp],min[1],max[180]]">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="">Years of Experience<sup class="text-danger">*</sup></label>
                                        <input type="text" autocomplete="off" name="yearOfExperience" class="form-control validate[required,custom[onlyNumberSp],min[0],max[40]]">
                                    </div>
                                </div>
                                <div id="ifCurrentEmp" class="col-md-3" style="display: none;">
                                    <div class="form-group">
                                        <label for="">Available to join(in Days)<sup class="text-danger">*</sup></label>
                                        <input type="text" autocomplete="off" name="availableToJoin" class="form-control validate[required,custom[onlyNumberSp],min[1],max[180]]">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="text-secondary d-inline-block legend">Salary Details</h5>
                                </div>
                            </div>
                            <div class="p-3 mt-1 mb-3 border border-muted rounded">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="text-secondary d-inline-block legend">Compensation Details</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Annual Fixed(in Lacs)<sup class="text-danger">*</sup></label>
                                            <input autocomplete="off" type="text" name="annualFixed" class="form-control total_ctc validate[required,custom[number],min[0],max[99]]">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Annual Variable(in Lacs)<sup class="text-danger">*</sup></label>
                                            <input autocomplete="off" type="text" name="annualVariables" class="form-control total_ctc validate[required,custom[number],min[0],max[50]]">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Annual Total CTC(in Lacs)<sup class="text-danger">*</sup></label>
                                            <input  type="text" name="totalCtc" class="form-control annualPay" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Frequency of Variable Payout<sup class="text-danger">*</sup></label>
                                            <select name="freq_variable_payouts" class="form-control validate[required]" >
                                                <option value="" > Select </option>
                                                                                                    <option value="1">Monthly</option>
                                                                                                        <option value="2">Quarterly</option>
                                                                                                        <option value="3">Biannual</option>
                                                                                                        <option value="4">Annual</option>
                                                                                                </select>
                                            <!--<input autocomplete="off" type="text" name="freq_variable_payouts" class="form-control validate[required,custom[onlyNumberSp],min[1],max[12]]">-->
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Non Monetary Components</label>
                                            <div class="non_monetary_component_class">
                                                <select style="width:10%" class=" 3col active" multiple="multiple"  name="non_monetary_component[]" id="non_monetary_component_id">
                                                                                                            <option value="1">Meals</option>
                                                                                                                <option value="2">Daily Cabs</option>
                                                                                                                <option value="3">Tuition Assitance</option>
                                                                                                                <option value="4">Free Parking</option>
                                                                                                                <option value="5">Discounted gym subscription</option>
                                                                                                                <option value="6">Others</option>
                                                                                                        </select>
                                            </div>
                                        </div>
                                        <div  class="material-design-box new-area-inputbox" id="nn_comp" style="display: none">
                                            <input class="material-input custom-form-control" name="non_monetary_component_other" id="other_nm_comp">
                                            <label class="material-label">Other Component</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 mt-1 mb-3 border border-muted rounded">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6 class="text-secondary d-inline-block legend">Last Appraisal Details</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="checkbox" name="appraisal" id="notApplicable" class="align-checkbox" value="1" onclick="handleNotApplicable(this)">
                                            <label for="appraisalNotApplicable">Not Applicable</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="ifNotApplicable" class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Year of Appraisal<sup class="text-danger">*</sup></label>
                                            <input autocomplete="off" type="text" name="yearApparisal" class="form-control validate[required]"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Increment %<sup class="text-danger">*</sup></label>
                                            <input type="text" name="increment" class="form-control validate[required,custom[onlyNumberSp],min[1],max[100]" style="width: 25%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="text-secondary d-inline-block legend">Education Details</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Highest Qualification<sup class="text-danger">*</sup></label>
                                    <div class="custom-radio mb-0">
                                        <input name="qualification" type="radio" id="qualificationGraduate" value="Graduate" onchange="handleQualification(this.value)">
                                        <label for="qualificationGraduate">Graduation</label>

                                        <input name="qualification" type="radio" id="qualificationPostGraduate" value="Post Graduate" onchange="handleQualification(this.value)">
                                        <label for="qualificationPostGraduate">Post Graduation</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row education_block">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered mt-2 fnt-8 mb-0 has-sml-ele" id="educationtable">
                                        <thead class="fnt-weight-500 brdr-btm-blue">
                                            <tr class="table-primary">
                                                <th width="12%">Education Details</th>
                                                <th width="10%">Yr(From)</th>
                                                <th width="10%">Yr(To)</th>
                                                <th width="17%">Full Time/Part-Time</th>
                                                <th width="12%">Course/Stream</th>
                                                <th width="15%">College/Board/University	</th>
                                                <th width="24%">%age/CGPA</th>
                                            </tr>
                                        </thead>
                                        <tbody class="v-align-middle first-td-bld">
                                            <tr id="ifPostGrad">
                                                <td>
                                                    <label for="" class="mb-0">Post Graduation<sup class="text-danger">*</sup></label>
                                                </td>
                                                <td>
                                                    <input type="text" autocomplete="off" name="postGradYearTo" id="year_from_pg" placeholder='year' class="form-control validate[required] date-picker" style="width:65px">
                                                </td>
                                                <td>
                                                    <input type="text" autocomplete="off" name="postGradYearFrom" id="year_to_pg" placeholder='year' class="form-control validate[required] date-picker" style="width:65px">
                                                </td>
                                                <td>
                                                    <div class="custom-radio mb-0">
                                                        <input name="postGradEducationType" type="radio" id="postGradEducationTypeFull" value="F">
                                                        <label for="postGradEducationTypeFull">Full Time</label>

                                                        <input name="postGradEducationType" type="radio" id="postGradEducationTypePart" value="P">
                                                        <label for="postGradEducationTypePart">Part Time</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="post_graduate_list">
                                                        <select style="width:200px" class="form-control validate[required] post_graduation_course fnt-8" name="post_graduation_course" id="post_graduation_course">
                                                            <option value="">Select</option>
                                                                                                                            <option value="27">MCA</option>
                                                                                                                                <option value="28">MBA</option>
                                                                                                                                <option value="29">Diploma</option>
                                                                                                                                <option value="30">GNIIT</option>
                                                                                                                                <option value="31">Integrated PG</option>
                                                                                                                                <option value="32">M.COM</option>
                                                                                                                                <option value="33">M Tech</option>
                                                                                                                                <option value="34">M.A</option>
                                                                                                                                <option value="35">M.Sc</option>
                                                                                                                                <option value="36">MBE</option>
                                                                                                                                <option value="37">MMM</option>
                                                                                                                                <option value="38">MFA</option>
                                                                                                                                <option value="39">MMS</option>
                                                                                                                                <option value="40">PGDM</option>
                                                                                                                                <option value="41">PG Diploma</option>
                                                                                                                                <option value="42">PGDBA</option>
                                                                                                                                <option value="43">PGDBM</option>
                                                                                                                                <option value="44">PGP</option>
                                                                                                                                <option value="45">PGPBA</option>
                                                                                                                                <option value="46">PHD</option>
                                                                                                                        </select>
                                                        <!--select style="width:200px" name="post_graduation_course"  class="form-control validate[required] post_graduation_course fnt-8" id="post_graduation_course">
                                                                <option value="">--Select Course--</option>
                                                        </select-->
                                                    </div>
                                                    <div class="specializationPg" style="margin-top:10px;display:none">

                                                        <input type="text" name="specializationPG" class="form-control validate[required,custom[onlyLetterSp]]" placeholder=" Enter Specialization">

                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="postGradCollege" class="form-control validate[required,custom[onlyLetterSp]]">
                                                </td>
                                                <td width="140">
                                                    <div>
                                                        <input type="checkbox" name="pursuing" id="pursuing" value="1" style="margin-top: -2px;" onchange="handleScorePG(this)">
                                                        <label for="pursuing" class="d-inline-block" style="margin: 0;">Pursuing</label>
                                                    </div>
                                                    <div class="custom-radio mb-0" id="pgscore_type_div">
                                                        <input name="postGradScoreType" type="radio" id="postGradScoreTypePercent" class="first" value="Percentage" onchange="handleScoreType(this)">
                                                        <label for="postGradScoreTypePercent">%age</label>

                                                        <input name="postGradScoreType" type="radio" id="postGradScoreTypeCGPA" value="CGPA" onchange="handleScoreType(this)">
                                                        <label for="postGradScoreTypeCGPA">CGPA</label>
                                                    </div>
                                                    <div id="percentScore" class="mt-1" style="display: none;">
                                                        <input name="percentPg" type="text" class="form-control validate[required,custom[number],min[40],max[100]] fnt-8">
                                                    </div>
                                                    <div id="cgpaScore" class="mt-1" style="display: none;">
                                                        <div class="input-group">
                                                            <input name="cgpa_in_pg_nu" id="cgpa_in_pg_nu" type="text" data-prompt-position="bottomLeft:-50;topLeft:0,0" class="form-control validate[required,custom[number],min[1],max[10]] fnt-8">
                                                            <input name="cgpa_in_pg_de" id="cgpa_in_pg_de"  type="text" class="form-control validate[required,custom[number],min[1],max[10]] fnt-8" placeholder="Out of" data-prompt-position="bottomLeft:-50;">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="" class="mb-0">Graduation<sup class="text-danger">*</sup></label>
                                                </td>
                                                <td>
                                                    <input type="text" autocomplete="off" name="gradYearTo" id="year_from_ug" placeholder="year" class="form-control validate[required] date-picker"style="width:65px">
                                                </td>
                                                <td>
                                                    <input type="text" autocomplete="off" name="gradYearFrom" id="year_to_ug" placeholder='year' class="form-control validate[required] date-picker"style="width:65px">
                                                </td>
                                                <td>
                                                    <div class="custom-radio mb-0">
                                                        <input name="gradEducationType" type="radio" id="gradEducationTypeFull" value="F">
                                                        <label for="gradEducationTypeFull">Full Time</label>

                                                        <input name="gradEducationType" type="radio" id="gradEducationTypePart" value="P">
                                                        <label for="gradEducationTypePart">Part Time</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="graduate_list">
                                                        <select class="form-control graduation_course fnt-8 validate[required]" name="graduation_course" id="graduation_course" style="width:100%">
                                                            <option value="">Select</option>
                                                                                                                            <option value="1">BCA</option>
                                                                                                                                <option value="2">B E</option>
                                                                                                                                <option value="3">B Tech</option>
                                                                                                                                <option value="4">B.A</option>
                                                                                                                                <option value="5">B.A.H</option>
                                                                                                                                <option value="6">B.B.A</option>
                                                                                                                                <option value="7">B.COM</option>
                                                                                                                                <option value="8">B.Pharma</option>
                                                                                                                                <option value="9">B.Sc</option>
                                                                                                                                <option value="10">BA (English H)</option>
                                                                                                                                <option value="11">Bachelors in Bio informatics</option>
                                                                                                                                <option value="12">BBM</option>
                                                                                                                                <option value="13">BBS</option>
                                                                                                                                <option value="14">Bcom H</option>
                                                                                                                                <option value="15">BDS</option>
                                                                                                                                <option value="16">BFA</option>
                                                                                                                                <option value="17">BHM</option>
                                                                                                                                <option value="18">BIT</option>
                                                                                                                                <option value="19">BMM</option>
                                                                                                                                <option value="20">BMS</option>
                                                                                                                                <option value="21">BPT</option>
                                                                                                                                <option value="22">BTM</option>
                                                                                                                                <option value="23">DIploma</option>
                                                                                                                                <option value="24">IB</option>
                                                                                                                                <option value="25">IHM</option>
                                                                                                                                <option value="26">LLB</option>
                                                                                                                        </select>
                                                        <!--select name="graduation_course"  class="form-control graduation_course fnt-8 validate[required]" id="graduation_course" style="width:100%">
                                                                <option value="">--Select Course--</option>
                                                        </select-->
                                                    </div>
                                                    <div class="specializationUg" style="margin-top:10px;display:none">

                                                        <input type="text" name="specializationUG" class="form-control validate[required,custom[onlyLetterSp]]" placeholder=" Enter Specialization">

                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="graduateCollege" class="form-control validate[required,custom[onlyLetterSp]]">
                                                </td>
                                                <td width="140">
                                                    <div>
                                                    <input type="checkbox" name="pursuing" id="pursuing" value="1" style="margin-top: -2px;" onchange="handleScoreUG(this)">
                                                    <label for="pursuing" class="d-inline-block" style="margin: 0;">Pursuing</label>
                                                    </div>
                                                    <div class="custom-radio mb-0" id="ugscore_type_div">
                                                        <input name="gradScoreType" type="radio" id="gradScoreTypePercent" class="last" value="Percentage" onchange="handleScoreType(this)">
                                                        <label for="gradScoreTypePercent">%age</label>

                                                        <input name="gradScoreType" type="radio" id="gradScoreTypeCGPA" value="CGPA" onchange="handleScoreType(this)">
                                                        <label for="gradScoreTypeCGPA">CGPA</label>
                                                    </div>
                                                    <div id="percentScore" class="mt-1 last percentScore" style="display: none;">
                                                        <input name="percentageUg" type="text" class="form-control validate[required,custom[number],min[40],max[100]] fnt-8">
                                                    </div>
                                                    <div id="cgpaScore" class="mt-1 cgpaScore" style="display: none;">
                                                        <div class="input-group">
                                                            <input name="cgpa_of_ug_nu" id="cgpa_of_ug_nu" type="text" class="form-control validate[required,custom[number],min[1],max[10]] fnt-8" data-prompt-position="bottomLeft:-50;">
                                                            <input name="cgpa_of_ug_de" id="cgpa_of_ug_de" type="text" class="form-control validate[required,custom[number],min[1],max[10]] fnt-8" placeholder="Out of" data-prompt-position="bottomLeft:-50;">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="" class="mb-0">SSC(XII)<sup class="text-danger">*</sup></label>
                                                </td>
                                                <td>
                                                    <input type="text" autocomplete="off" name="sscYearTo" id="year_from_12" placeholder="year" class="form-control validate[required] date-picker" style="width:65px">
                                                </td>
                                                <td>
                                                    <input type="text" autocomplete="off" name="sscYearFrom" id="year_to_12" placeholder='year' class="form-control validate[required] date-picker" style="width:65px">
                                                </td>
                                                <td>
                                                    <select class="form-control validate[required]" name="inter">
                                                        <option value="">Select</option>
                                                                                                                    <option value="CBSE">CBSE</option>
                                                                                                                        <option value="ICSE">ICSE</option>
                                                                                                                        <option value="IGCSE">IGCSE</option>
                                                                                                                        <option value="IB">IB</option>
                                                                                                                        <option value="State Board">State Board</option>
                                                                                                                </select>
                                                            <!--<input type="text" name="inter" class="form-control validate[required]">-->
                                                </td>
                                                <td width="140">
                                                    <div class="custom-radio mb-0">
                                                        <input name="sscScoreType" type="radio" id="sscScoreTypePercent" class="last" value="Percentage" onchange="handleScoreType(this)">
                                                        <label for="sscScoreTypePercent">%age</label>

                                                        <input name="sscScoreType" type="radio" id="sscScoreTypeCGPA" value="CGPA" onchange="handleScoreType(this)">
                                                        <label for="sscScoreTypeCGPA">CGPA</label>
                                                    </div>
                                                    <div id="percentScore" class="mt-1 last" style="display: none;">
                                                        <input name="percentage12" type="text" class="form-control validate[required,custom[number],min[40],max[100]] fnt-8">
                                                    </div>
                                                    <div id="cgpaScore" class="mt-1" style="display: none;">
                                                        <div class="input-group">
                                                            <input name="cgpa_in_12_nu" id="cgpa_in_12_nu" type="text" class="form-control validate[required,custom[number],min[1],max[10]] fnt-8" data-prompt-position="bottomLeft:-50;">
                                                            <input name="cgpa_in_12_de" id="cgpa_in_12_de" type="text" class="form-control validate[required,custom[number],min[1],max[10]] fnt-8" placeholder="Out of" data-prompt-position="bottomLeft:-50;">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="" class="mb-0">HSC (X)<sup class="text-danger">*</sup></label>
                                                </td>
                                                <td>
                                                    <input type="text" autocomplete="off" name="hscYearTo" id="year_from_10" placeholder="year" class="form-control validate[required] date-picker" style="width:65px">
                                                </td>
                                                <td>
                                                    <input type="text" autocomplete="off" name="hscYearFrom" id="year_to_10" placeholder="year" class="form-control validate[required] date-picker" style="width:65px">
                                                </td>
                                                <td>
                                                    <!--div class="custom-radio mb-0">
      <input name="hscEducationType" type="radio" id="hscEducationTypeFull" value="F">
      <label for="hscEducationTypeFull">Full Time</label>

      <input name="hscEducationType" type="radio" id="hscEducationTypePart" value="P">
      <label for="hscEducationTypePart">Part Time</label>
    </div-->
                                                </td>
                                                <td>
                                                        <!-- <select name="" id="" class="form-control fnt-8">
                                                                <option value="">List</option>
                                                                <option value="">Dummy</option>
                                                        </select> -->
                                                </td>
                                                <td>
                                                    <select class="form-control validate[required]" name="high_school_college">
                                                        <option value="">Select</option>
                                                                                                                    <option value="CBSE">CBSE</option>
                                                                                                                        <option value="ICSE">ICSE</option>
                                                                                                                        <option value="IGCSE">IGCSE</option>
                                                                                                                        <option value="IB">IB</option>
                                                                                                                        <option value="State Board">State Board</option>
                                                                                                                </select>
                                                            <!--<input type="text" name="high_school_college" class="form-control validate[required]">-->
                                                </td>
                                                <td width="140">
                                                    <div class="custom-radio mb-0">
                                                        <input name="hscScoreType" type="radio" id="hscScoreTypePercent" class="last" value="Percentage" onchange="handleScoreType(this)">
                                                        <label for="hscScoreTypePercent">%age</label>

                                                        <input name="hscScoreType" type="radio" id="hscScoreTypeCGPA" value="CGPA" onchange="handleScoreType(this)">
                                                        <label for="hscScoreTypeCGPA">CGPA</label>
                                                    </div>
                                                    <div id="percentScore" class="mt-1 last" style="display: none;">
                                                        <input name="percentage10" type="text" class="form-control validate[required,custom[number],min[40],max[100]] fnt-8">
                                                    </div>
                                                    <div id="cgpaScore" class="mt-1" style="display: none;">
                                                        <div class="input-group">
                                                            <input name="cgpa_in_10_nu" id="cgpa_in_10_nu" type="text" class="form-control validate[required,custom[number],min[1],max[10]] fnt-8" data-prompt-position="bottomLeft:-50;">
                                                            <input name="cgpa_in_10_de" id="cgpa_in_10_de" type="text" class="form-control validate[required,custom[number],min[1],max[10]] fnt-8" placeholder="Out of" data-prompt-position="bottomLeft:-50;">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="employmentLatestToPrev">
                            <div class="row">
                                <div class="col-md-12 mt-4">
                                    <h5 class="text-secondary d-inline-block legend">Employment(from Latest to previous)</h5>
                                    <p><strong>NOTE:</strong> Please mention at least recent 3 employments, if applicable</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered mt-2 fnt-8 mb-0 has-sml-ele">
                                            <thead class="fnt-weight-500 brdr-btm-blue">
                                                <tr class="table-primary">
                                                    <th width="5%">S.No.</th>
                                                    <th width="25%">Employer Name</th>
                                                    <th width="10%">Yr(From)</th>
                                                    <th width="10%">Yr(To)</th>
                                                    <th width="25%">Department</th>
                                                    <th width="25%">Designation</th>
                                                </tr>
                                            </thead>
                                            <tbody class="v-align-middle first-td-bld">
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        <div class="employee1_div">
                                                            <select name="current_emp1" id="employee1" class="form-control validate[required] fnt-8 valid" style="width:100%">
                                                                <option value="">--Select Company--</option>

                                                            </select>
                                                            <input type="text" placeholder='other company name' id="other_company_1" name="other_company1" style="display:none" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="employement_year11" id="employement_year11" class="form-control validate[required] datepickerMon" autocomplete="off" placeholder="choose year/month">
                                                    </td>
                                                    <td>
                                                        <input type="text" autocomplete="off" placeholder="choose year/month" name="employement_year_month12" id="employement_year_month12" class="form-control validate[required] datepickerMon">
                                                    </td>

                                                    <td>
                                                        <input type="text" name="employee_department1" class="form-control validate[required]">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="employee_designation1" id="employee_designation1" class="form-control validate[required]">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        <div class="employee2_div has-select2">
                                                            <select name="current_emp2" id="employee2" class=" form-control  fnt-8"style="width:100%">
                                                                <option value="">--Select Company--</option>
                                                            </select>
                                                            <input type="text" id="other_company_2" name="other_company2" placeholder="other company name" style="display:none" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" placeholder="choose year/month" autocomplete="off" name="employement_year_month21" id="employement_year_month21" class=" form-control datepickerMon">
                                                    </td>
                                                    <td>
                                                        <input type="text" placeholder="choose year/month" autocomplete="off" name="employement_year_month22" id="employement_year_month22" class=" form-control datepickerMon">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="employee_department2" class="form-control ">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="employee_designation2" class="form-control ">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="employee3_div has-select2">
                                                            <select name="current_emp3" id="employee3" class=" form-control  fnt-8" style="width:100%">
                                                                <option value="">--Select Company--</option>
                                                            </select>
                                                            <input type="text" id="other_company_3" name="other_company3" placeholder="other company name" style="display:none" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" placeholder="choose year/month" autocomplete="off" name="employement_year_month31" id="employement_year_month31" class=" form-control datepickerMon">
                                                    </td>
                                                    <td>
                                                        <input type="text" placeholder="choose year/month" autocomplete="off" name="employement_year_month32" id="employement_year_month32" class=" form-control datepickerMon">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="employee_department3" class="form-control ">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="employee_designation3" class="form-control ">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <h5 class="text-secondary d-inline-block legend">Others</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Why are you looking for job change?<sup class="text-danger">*</sup></label>
                                    <textarea name="jobChangeReason" id="" rows="3" class="form-control validate[required]"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Have you applied for any position with Lynx3Sixty in past 6 months?<sup class="text-danger">*</sup></label>
                                    <div class="custom-radio mb-0">
                                        <input name="alreadyApplied" type="radio" id="alreadyAppliedYes" value="Yes" onchange="handleAlreadyApplied(this.value)">
                                        <label for="alreadyAppliedYes">Yes</label>

                                        <input name="alreadyApplied" type="radio" id="alreadyAppliedNo" value="No" onchange="handleAlreadyApplied(this.value)">
                                        <label for="alreadyAppliedNo">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ifAlreadyApplied" class="row" style="display: none;">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Please Specify Details<sup class="text-danger">*</sup></label>
                                    <textarea name="details" class="form-control validate[required]" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">What prompts you to apply for Lynx3Sixty?<sup class="text-danger">*</sup></label>
                                    <textarea name="promptsToapplyLynx3Sixty" id="" rows="3" class="form-control validate[required,minSize[30]]"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <h5 class="text-secondary d-inline-block legend">Resume</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                        <!-- <for<label for="resume">Resume</label><sup class="text-danger">*</sup></label> -->
                                    <input type="file" name="candidate_resume" class="form-control-file validate[required]">
                                </div>
                            </div>
                        </div>


			  			   <div class="col-sm-12">
                <div class="privacy_policy" style="margin-top:20px">
                    <input class="" type="checkbox" id="accept_privacy_policy" name="accept_privacy_policy" value="1" /><label style="margin-left:10px;"> I have read and accept the Recruitment <a href="https://www.Lynx3Sixty.com/recruitment-policy" target="_blank">Privacy Policy</a> * </label>
				</div>
				 <div><label class="errorPrivacy" id="myerrorPrivacy" generated="true"  style="display:none;"> *This field is required</label></div>

                           </div>

                        <div class="col-sm-12">
                        <div class="privacy_policy" style="margin-top:2px">
                            <!--input class="" type="checkbox" id="acknowledgement" name="acknowledgement" value="1" /-->
                            <label style="margin-left:10px;"><strong>Note:</strong> I acknowledge that the information provided by me is correct and can be used for background verification subjected to my offer acceptance, if I'm offered a job opportunity<br> by Lynx3Sixty * </label>
                        </div>
			<div><label class="errorPrivacy" id="myacknowledgement" generated="true"  style="display:none;"> *This field is required</label></div>

                           </div>
			                          <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <center>
                                        <button class="btn btn-primary" name="submitDetails" value="Submit" type="submit">Submit</button>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


@include('components.footer')
