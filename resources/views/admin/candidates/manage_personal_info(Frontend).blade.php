@extends('admin.master')
@section('title')
Company Circular List
@endsection

@section('content')


<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All circular List</h4>

            <div class="table-responsive pt-3">
                <table class="table">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link border-0" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Contact</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="bs-example" data-example-id="collapse-accordion">
                                <div style="color: rgb(0, 0, 0);" id="accordion" role="main"
                                    class="panel-group resume-panel-group personal" aria-multiselectable="true">
                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h2 class="panel-title">
                                                <button role="button" class="btn" data-toggle="collapse"
                                                    data-parent="#accordion" data-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    <i class="indicator icon-angle-up"></i>&nbsp;Personal Details
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                            aria-labelledby="headingOne" aria-expanded="true" style="">
                                            <div class="panel-body">



                                                <div class="container-img">
                                                    <div class="form-group uppic">
                                                        <!--    user-photo should use-->


                                                        <img class="userImg" id="userImg"
                                                            src="https://storage.googleapis.com/bdjobs/mybdjobs/photos/5275001-5300000/2125276959w0r0v.jpg?var=hAx2w8eo67KD365"
                                                            alt="No photo for resume">
                                                        <a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_05_view.asp"
                                                            type="button" class="browse  img-btn"
                                                            aria-describedby="uipu">Change Photo</a>


                                                    </div>
                                                </div>

                                                <div class="all-info per_0">
                                                    <div class="sub-header">
                                                        <div class="edit-tools">
                                                            <button class="btn edit-btn"
                                                                aria-label="Click on Edit to fill up personal details"><i
                                                                    class="icon-pencil-o"></i>&nbsp;Edit</button>
                                                        </div>
                                                    </div>
                                                    <div id="alertDiv_per"></div>
                                                    <form class="row view-mode" id="personalForm">

                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="txtFirstName">First Name
                                                                        <abbr title="Required" class="required"></abbr>
                                                                        <span class="help-block"
                                                                            id="fnameErrorMsg"></span>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control aria-disabled"
                                                                        disabled="disabled" placeholder=""
                                                                        value="Mizanur" name="txtFirstName"
                                                                        id="txtFirstName" maxlength="50">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="txtLastName">Last Name
                                                                        <span class="help-block"
                                                                            id="lnameErrorMsg"></span>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control aria-disabled"
                                                                        disabled="disabled" placeholder=""
                                                                        value="Rahman" name="txtLastName"
                                                                        id="txtLastName" maxlength="50">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="txtFName">Father's Name
                                                                        <span class="help-block"
                                                                            id="fhrErrorMsg"></span>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control aria-disabled"
                                                                        disabled="disabled" placeholder=""
                                                                        value="Khalilur Rahman" name="txtFName"
                                                                        id="txtFName" maxlength="50">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="txtMName">Mother's Name
                                                                        <span class="help-block"
                                                                            id="mhrErrorMsg"></span>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control aria-disabled"
                                                                        disabled="disabled" placeholder=""
                                                                        value="Marium Begum" name="txtMName"
                                                                        id="txtMName" maxlength="50">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="txtBirthDate">Date of Birth
                                                                        <abbr title="Required" class="required"></abbr>
                                                                        <span class="help-block"
                                                                            id="dobErrorMsg"></span>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control datepicker fromDate aria-disabled"
                                                                        disabled="disabled" placeholder="MM/DD/YYYY"
                                                                        value="9/2/1998" name="txtBirthDate"
                                                                        id="txtBirthDate">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="cboGender">Gender
                                                                        <abbr title="Required" class="required"></abbr>
                                                                        <span class="help-block"
                                                                            id="gdrErrorMsg"></span>
                                                                    </label>
                                                                    <select name="cboGender" id="cboGender"
                                                                        class="form-control aria-disabled"
                                                                        disabled="disabled">
                                                                        <option value="-1" selected="">Select</option>
                                                                        <option value="M" selected="">Male</option>
                                                                        <option value="F">Female</option>
                                                                        <option value="O">Others</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="txtReligion">Religion</label>
                                                                    <span class="onclick-hidden text-tundora"
                                                                        id="religion_view">
                                                                        Islam
                                                                    </span>
                                                                    <select name="txtReligion" id="txtReligion"
                                                                        class="btn-form-control hidden form-control aria-disabled"
                                                                        disabled="disabled"
                                                                        onchange="changeReligionView()">
                                                                        <option value="-1" selected="">Select</option>
                                                                        <option value="Buddhism">Buddhism</option>
                                                                        <option value="Christianity">Christianity
                                                                        </option>
                                                                        <option value="Hinduism">Hinduism</option>
                                                                        <option value="Islam" selected="">Islam</option>
                                                                        <option value="Jainism">Jainism</option>
                                                                        <option value="Judaism">Judaism</option>
                                                                        <option value="Sikhism">Sikhism</option>
                                                                        <option value="Others">Others</option>
                                                                    </select>

                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="cboMStatus">Marital Status
                                                                        <abbr title="Required" class="required"></abbr>
                                                                        <span class="help-block"
                                                                            id="mtsErrorMsg"></span>
                                                                    </label>

                                                                    <select name="cboMStatus" id="cboMStatus"
                                                                        class="form-control aria-disabled"
                                                                        disabled="disabled">
                                                                        <option value="-1" selected="selected">Select
                                                                        </option>
                                                                        <option value="2" selected="">Unmarried</option>
                                                                        <option value="1"> Married </option>
                                                                        <option value="3"> Single </option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <!-- Start Nationality -->
                                                                <div class="form-group col-md-6">
                                                                    <div class="title-wrap">
                                                                        <label for="otherNationality">Nationality
                                                                            <abbr title="Required"
                                                                                class="required"></abbr>
                                                                            <span class="help-block"
                                                                                id="otherNationalityErrorMsg"
                                                                                style="font-weight: 600;"></span>
                                                                        </label>
                                                                        <input
                                                                            class="form-control onclick-hidden aria-disabled"
                                                                            disabled="disabled" aria-label="Nationality"
                                                                            id="nViewFild" placeholder=""
                                                                            value="Bangladeshi" type="text">
                                                                        <div class=" btn-form-control hidden">
                                                                            <div>
                                                                                <div class="checkbox">
                                                                                    <label for="bangladeshi">
                                                                                        <input type="checkbox"
                                                                                            name="txtNationality"
                                                                                            onclick="DisableNationality();"
                                                                                            class="aria-disabled"
                                                                                            disabled="disabled"
                                                                                            value="Bangladeshi"
                                                                                            checked="" id="bangladeshi">
                                                                                        Bangladeshi
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row btn-form-control hidden">
                                                                        <div class="col-md-12">
                                                                            <span class="label" id="txtNationality"
                                                                                style="font-weight: normal;">
                                                                                <input type="text" id="otherNationality"
                                                                                    name="txtNationality"
                                                                                    class="form-control btn-form-control autosuggest ui-autocomplete-input"
                                                                                    value="Bangladeshi"
                                                                                    autocomplete="off"
                                                                                    onclick="SetParam(9,'','',10,'');"
                                                                                    placeholder="For other country please type"
                                                                                    maxlength="50">
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- End Nationality -->

                                                                <div class="form-group col-md-6">
                                                                    <label for="txtNationalId">National Id
                                                                        <span class="help-block"
                                                                            id="nidErrorMsg"></span>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control aria-disabled"
                                                                        disabled="disabled" placeholder=""
                                                                        value="5555618965" name="txtNationalId"
                                                                        id="txtNationalId" maxlength="17">
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="passportNo">Passport Number
                                                                        <span class="help-block"
                                                                            id="passNoErrorMsg"></span>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control aria-disabled"
                                                                        disabled="disabled" placeholder="" value=""
                                                                        name="passportNo" id="passportNo"
                                                                        maxlength="20">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="issueDate">Passport Issue Date
                                                                        <span class="help-block"
                                                                            id="passIssdateErrorMsg"></span>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control datepicker fromDate aria-disabled"
                                                                        disabled="disabled" value="" name="issueDate"
                                                                        id="issueDate">
                                                                    <input type="hidden" name="h_catId" value="">
                                                                    <input type="hidden" name="isBlueColor"
                                                                        id="isBlueColor1" value="False">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="txtMobile" class="sui">Primary Mobile
                                                                        <small
                                                                            class="btn-form-control hidden color-green">(Provide
                                                                            at least one Phone Number)</small>
                                                                        <span class="help-block"
                                                                            id="txtMob1ErrorMsg"></span>
                                                                    </label>

                                                                    <div class="row">
                                                                        <div class="col-sm-6 cl-pr" id="country">
                                                                            <select aria-label="select country"
                                                                                name="txtCountryCode"
                                                                                id="txtCountryCode" required="required"
                                                                                class="form-control from-control-login aria-disabled"
                                                                                disabled="disabled">
                                                                                <option value="93">Afghanistan (93)
                                                                                </option>
                                                                                <option value="355">Albania (355)
                                                                                </option>
                                                                                <option value="213">Algeria (213)
                                                                                </option>
                                                                                <option value="376">Andorra (376)
                                                                                </option>
                                                                                <option value="244">Angola (244)
                                                                                </option>
                                                                                <option value="264">Anguilla (264)
                                                                                </option>
                                                                                <option value="672">Antarctica (672)
                                                                                </option>
                                                                                <option value="268">Antigua (268)
                                                                                </option>
                                                                                <option value="54">Argentina (54)
                                                                                </option>
                                                                                <option value="374">Armenia (374)
                                                                                </option>
                                                                                <option value="297">Aruba (297)</option>
                                                                                <option value="61">Australia (61)
                                                                                </option>
                                                                                <option value="43">Austria (43)</option>
                                                                                <option value="994">Azerbaijan (994)
                                                                                </option>
                                                                                <option value="242">Bahamas (242)
                                                                                </option>
                                                                                <option value="973">Bahrain (973)
                                                                                </option>
                                                                                <option value="88" selected="">
                                                                                    Bangladesh (88)</option>
                                                                                <option value="246">Barbados (246)
                                                                                </option>
                                                                                <option value="375">Belarus (375)
                                                                                </option>
                                                                                <option value="32">Belgium (32)</option>
                                                                                <option value="501">Belize (501)
                                                                                </option>
                                                                                <option value="229">Benin (229)</option>
                                                                                <option value="441">Bermuda (441)
                                                                                </option>
                                                                                <option value="975">Bhutan (975)
                                                                                </option>
                                                                                <option value="591">Bolivia (591)
                                                                                </option>
                                                                                <option value="387">Bosnia and
                                                                                    Herzegovina (387)</option>
                                                                                <option value="267">Botswana (267)
                                                                                </option>
                                                                                <option value="55">Brazil (55)</option>
                                                                                <option value="284">British Virgin
                                                                                    Islands (284)</option>
                                                                                <option value="673">Brunei (673)
                                                                                </option>
                                                                                <option value="359">Bulgaria (359)
                                                                                </option>
                                                                                <option value="226">Burkina Faso (226)
                                                                                </option>
                                                                                <option value="257">Burundi (257)
                                                                                </option>
                                                                                <option value="855">Cambodia (855)
                                                                                </option>
                                                                                <option value="237">Cameroon (237)
                                                                                </option>
                                                                                <option value="1">Canada (1)</option>
                                                                                <option value="238">Cape Verde (238)
                                                                                </option>
                                                                                <option value="236">Central African
                                                                                    Republic (236)</option>
                                                                                <option value="235">Chad (235)</option>
                                                                                <option value="56">Chile (56)</option>
                                                                                <option value="86">China (86)</option>
                                                                                <option value="57">Colombia (57)
                                                                                </option>
                                                                                <option value="269">Comoros (269)
                                                                                </option>
                                                                                <option value="242">Congo (242)</option>
                                                                                <option value="243">Congo (Zaire) (243)
                                                                                </option>
                                                                                <option value="682">Cook Islands (682)
                                                                                </option>
                                                                                <option value="506">Costa Rica (506)
                                                                                </option>
                                                                                <option value="225">Cote d'Ivoire (Ivory
                                                                                    Coast) (225)</option>
                                                                                <option value="385">Croatia (385)
                                                                                </option>
                                                                                <option value="53">Cuba (53)</option>
                                                                                <option value="357">Cyprus (357)
                                                                                </option>
                                                                                <option value="420">Czech Republic (420)
                                                                                </option>
                                                                                <option value="45">Denmark (45)</option>
                                                                                <option value="253">Djibouti (253)
                                                                                </option>
                                                                                <option value="767">Dominica (767)
                                                                                </option>
                                                                                <option value="809">Dominican Republic
                                                                                    (809)</option>
                                                                                <option value="670">East Timor (670)
                                                                                </option>
                                                                                <option value="593">Ecuador (593)
                                                                                </option>
                                                                                <option value="20">Egypt (20)</option>
                                                                                <option value="503">El Salvador (503)
                                                                                </option>
                                                                                <option value="240">Equatorial Guinea
                                                                                    (240)</option>
                                                                                <option value="291">Eritrea (291)
                                                                                </option>
                                                                                <option value="372">Estonia (372)
                                                                                </option>
                                                                                <option value="251">Ethiopia (251)
                                                                                </option>
                                                                                <option value="500">Falkland Islands
                                                                                    (500)</option>
                                                                                <option value="691">Federated States of
                                                                                    Micronesia (691)</option>
                                                                                <option value="679">Fiji (679)</option>
                                                                                <option value="358">Finland (358)
                                                                                </option>
                                                                                <option value="33">France (33)</option>
                                                                                <option value="594">French Guiana (594)
                                                                                </option>
                                                                                <option value="689">French Polynesia
                                                                                    (689)</option>
                                                                                <option value="241">Gabon (241)</option>
                                                                                <option value="995">Georgia (995)
                                                                                </option>
                                                                                <option value="49">Germany (49)</option>
                                                                                <option value="233">Ghana (233)</option>
                                                                                <option value="350">Gibraltar (350)
                                                                                </option>
                                                                                <option value="30">Greece (30)</option>
                                                                                <option value="299">Greenland (299)
                                                                                </option>
                                                                                <option value="473">Grenada (473)
                                                                                </option>
                                                                                <option value="590">Guadeloupe (590)
                                                                                </option>
                                                                                <option value="502">Guatemala (502)
                                                                                </option>
                                                                                <option value="224">Guinea (224)
                                                                                </option>
                                                                                <option value="245">Guinea-Bissau (245)
                                                                                </option>
                                                                                <option value="592">Guyana (592)
                                                                                </option>
                                                                                <option value="509">Haiti (509)</option>
                                                                                <option value="504">Honduras (504)
                                                                                </option>
                                                                                <option value="852">Hong Kong (852)
                                                                                </option>
                                                                                <option value="36">Hungary (36)</option>
                                                                                <option value="354">Iceland (354)
                                                                                </option>
                                                                                <option value="91">India (91)</option>
                                                                                <option value="62">Indonesia (62)
                                                                                </option>
                                                                                <option value="98">Iran (98)</option>
                                                                                <option value="964">Iraq (964)</option>
                                                                                <option value="353">Ireland (353)
                                                                                </option>
                                                                                <option value="972">Israel (972)
                                                                                </option>
                                                                                <option value="39">Italy (39)</option>
                                                                                <option value="876">Jamaica (876)
                                                                                </option>
                                                                                <option value="81">Japan (81)</option>
                                                                                <option value="962">Jordan (962)
                                                                                </option>
                                                                                <option value="7">Kazakhstan (7)
                                                                                </option>
                                                                                <option value="254">Kenya (254)</option>
                                                                                <option value="686">Kiribati (686)
                                                                                </option>
                                                                                <option value="965">Kuwait (965)
                                                                                </option>
                                                                                <option value="996">Kyrgyzstan (996)
                                                                                </option>
                                                                                <option value="856">Laos (856)</option>
                                                                                <option value="371">Latvia (371)
                                                                                </option>
                                                                                <option value="961">Lebanon (961)
                                                                                </option>
                                                                                <option value="266">Lesotho (266)
                                                                                </option>
                                                                                <option value="231">Liberia (231)
                                                                                </option>
                                                                                <option value="218">Libya (218)</option>
                                                                                <option value="423">Liechtenstein (423)
                                                                                </option>
                                                                                <option value="370">Lithuania (370)
                                                                                </option>
                                                                                <option value="352">Luxembourg (352)
                                                                                </option>
                                                                                <option value="853">Macau (853)</option>
                                                                                <option value="389">Macedonia (389)
                                                                                </option>
                                                                                <option value="261">Madagascar (261)
                                                                                </option>
                                                                                <option value="265">Malawi (265)
                                                                                </option>
                                                                                <option value="60">Malaysia (60)
                                                                                </option>
                                                                                <option value="960">Maldives (960)
                                                                                </option>
                                                                                <option value="223">Mali (223)</option>
                                                                                <option value="356">Malta (356)</option>
                                                                                <option value="692">Marshall Islands
                                                                                    (692)</option>
                                                                                <option value="596">Martinique (596)
                                                                                </option>
                                                                                <option value="222">Mauritania (222)
                                                                                </option>
                                                                                <option value="230">Mauritius (230)
                                                                                </option>
                                                                                <option value="262">Mayotte (262)
                                                                                </option>
                                                                                <option value="52">Mexico (52)</option>
                                                                                <option value="373">Moldova (373)
                                                                                </option>
                                                                                <option value="377">Monaco (377)
                                                                                </option>
                                                                                <option value="976">Mongolia (976)
                                                                                </option>
                                                                                <option value="382">Montenegro (382)
                                                                                </option>
                                                                                <option value="664">Montserrat (664)
                                                                                </option>
                                                                                <option value="212">Morocco (212)
                                                                                </option>
                                                                                <option value="258">Mozambique (258)
                                                                                </option>
                                                                                <option value="95">Myanmar (95)</option>
                                                                                <option value="264">Namibia (264)
                                                                                </option>
                                                                                <option value="674">Nauru (674)</option>
                                                                                <option value="977">Nepal (977)</option>
                                                                                <option value="31">Netherlands (31)
                                                                                </option>
                                                                                <option value="599">Netherlands Antilles
                                                                                    (599)</option>
                                                                                <option value="687">New Caledonia (687)
                                                                                </option>
                                                                                <option value="64">New Zealand (64)
                                                                                </option>
                                                                                <option value="505">Nicaragua (505)
                                                                                </option>
                                                                                <option value="227">Niger (227)</option>
                                                                                <option value="234">Nigeria (234)
                                                                                </option>
                                                                                <option value="850">North Korea (850)
                                                                                </option>
                                                                                <option value="47">Norway (47)</option>
                                                                                <option value="968">Oman (968)</option>
                                                                                <option value="92">Pakistan (92)
                                                                                </option>
                                                                                <option value="680">Palau (680)</option>
                                                                                <option value="507">Panama (507)
                                                                                </option>
                                                                                <option value="675">Papua New Guinea
                                                                                    (675)</option>
                                                                                <option value="595">Paraguay (595)
                                                                                </option>
                                                                                <option value="51">Peru (51)</option>
                                                                                <option value="63">Philippines (63)
                                                                                </option>
                                                                                <option value="48">Poland (48)</option>
                                                                                <option value="351">Portugal (351)
                                                                                </option>
                                                                                <option value="974">Qatar (974)</option>
                                                                                <option value="383">Republic of Kosovo
                                                                                    (383)</option>
                                                                                <option value="40">Romania (40)</option>
                                                                                <option value="7">Russia (7)</option>
                                                                                <option value="250">Rwanda (250)
                                                                                </option>
                                                                                <option value="869">Saint Kitts and
                                                                                    Nevis (869)</option>
                                                                                <option value="758">Saint Lucia (758)
                                                                                </option>
                                                                                <option value="508">Saint Pierre and
                                                                                    Miquelon (508)</option>
                                                                                <option value="784">Saint Vincent and
                                                                                    the Grenadines (784)</option>
                                                                                <option value="685">Samoa (685)</option>
                                                                                <option value="378">San Marino (378)
                                                                                </option>
                                                                                <option value="239">Sao Tome and
                                                                                    Principe (239)</option>
                                                                                <option value="966">Saudi Arabia (966)
                                                                                </option>
                                                                                <option value="221">Senegal (221)
                                                                                </option>
                                                                                <option value="381">Serbia (381)
                                                                                </option>
                                                                                <option value="248">Seychelles (248)
                                                                                </option>
                                                                                <option value="232">Sierra Leone (232)
                                                                                </option>
                                                                                <option value="65">Singapore (65)
                                                                                </option>
                                                                                <option value="421">Slovakia (421)
                                                                                </option>
                                                                                <option value="386">Slovenia (386)
                                                                                </option>
                                                                                <option value="677">Solomon Islands
                                                                                    (677)</option>
                                                                                <option value="252">Somalia (252)
                                                                                </option>
                                                                                <option value="27">South Africa (27)
                                                                                </option>
                                                                                <option value="82">South Korea (82)
                                                                                </option>
                                                                                <option value="2011">South Sudan (2011)
                                                                                </option>
                                                                                <option value="34">Spain (34)</option>
                                                                                <option value="94">Sri Lanka (94)
                                                                                </option>
                                                                                <option value="249">Sudan (249)</option>
                                                                                <option value="597">Suriname (597)
                                                                                </option>
                                                                                <option value="268">Swaziland (268)
                                                                                </option>
                                                                                <option value="46">Sweden (46)</option>
                                                                                <option value="41">Switzerland (41)
                                                                                </option>
                                                                                <option value="963">Syria (963)</option>
                                                                                <option value="886">Taiwan (886)
                                                                                </option>
                                                                                <option value="992">Tajikistan (992)
                                                                                </option>
                                                                                <option value="255">Tanzania (255)
                                                                                </option>
                                                                                <option value="66">Thailand (66)
                                                                                </option>
                                                                                <option value="220">The Gambia (220)
                                                                                </option>
                                                                                <option value="228">Togo (228)</option>
                                                                                <option value="676">Tonga (676)</option>
                                                                                <option value="868">Trinidad and Tobago
                                                                                    (868)</option>
                                                                                <option value="216">Tunisia (216)
                                                                                </option>
                                                                                <option value="90">Turkey (90)</option>
                                                                                <option value="993">Turkmenistan (993)
                                                                                </option>
                                                                                <option value="649">Turks and Caicos
                                                                                    Islands (649)</option>
                                                                                <option value="688">Tuvalu (688)
                                                                                </option>
                                                                                <option value="256">Uganda (256)
                                                                                </option>
                                                                                <option value="380">Ukraine (380)
                                                                                </option>
                                                                                <option value="971">United Arab Emirates
                                                                                    (971)</option>
                                                                                <option value="44">United Kingdom (44)
                                                                                </option>
                                                                                <option value="1">United States (1)
                                                                                </option>
                                                                                <option value="598">Uruguay (598)
                                                                                </option>
                                                                                <option value="998">Uzbekistan (998)
                                                                                </option>
                                                                                <option value="678">Vanuatu (678)
                                                                                </option>
                                                                                <option value="58">Venezuela (58)
                                                                                </option>
                                                                                <option value="84">Vietnam (84)</option>
                                                                                <option value="967">Yemen (967)</option>
                                                                                <option value="260">Zambia (260)
                                                                                </option>
                                                                                <option value="263">Zimbabwe (263)
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-sm-6 voffset-s">
                                                                            <input type="tel"
                                                                                class="form-control from-control-login aria-disabled"
                                                                                disabled="disabled" placeholder=""
                                                                                id="txtMobile" name="txtMobile"
                                                                                value="01825337148" maxlength="15"
                                                                                autocomplete="off">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label for="txtPhone_H">Secondary Mobile
                                                                        <span class="help-block"
                                                                            id="txtPhoneHmeErrorMsg"></span>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control aria-disabled phone-number"
                                                                        disabled="disabled" placeholder="" value=""
                                                                        name="txtPhone_H" id="txtPhone_H"
                                                                        maxlength="15">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="txtPhone_Off">Emergency Contact
                                                                        <span class="help-block"
                                                                            id="txtPhoneoffErrorMsg"></span>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control aria-disabled phone-number"
                                                                        disabled="disabled" placeholder=""
                                                                        value="01755463304" name="txtPhone_Off"
                                                                        id="txtPhone_Off" maxlength="15">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="txtEmail1" class="sui">Primary Email
                                                                        <small
                                                                            class="btn-form-control hidden color-green">(Do
                                                                            not enter/provide more than one e-mail
                                                                            address in either of the fields)</small>
                                                                        <span class="help-block"
                                                                            id="txtemail1ErrorMsg"></span>
                                                                    </label>

                                                                    <a href="https://mybdjobs.bdjobs.com/mybdjobs/set_userId/email_step_01.asp"
                                                                        aria-label="click here to visit and change email address (mzrahman075@gmail.com) as user id"
                                                                        class="btn btn-link"><i
                                                                            class="icon-plus"></i>&nbsp;<span>Change
                                                                            User Id</span></a>

                                                                    <input type="text"
                                                                        class="form-control aria-disabled"
                                                                        disabled="disabled" placeholder=""
                                                                        value="mzrahman075@gmail.com" name="txtEmail1"
                                                                        id="txtEmail1" maxlength="50" readonly="">
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="txtEmail2">Alternate Email
                                                                        <span class="help-block"
                                                                            id="altMailErrorMsg"></span>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control aria-disabled"
                                                                        disabled="disabled" placeholder=""
                                                                        value="mizanur35-2482@diu.edu.bd"
                                                                        name="txtEmail2" id="txtEmail2" maxlength="50">
                                                                    <input type="hidden" name="h_catId" value="">
                                                                </div>

                                                                <div class="form-group col-md-6">
                                                                    <label for="txtBloodGroup">Blood Group
                                                                        <span class="help-block"
                                                                            id="bloodGroupErrorMsg"></span>
                                                                    </label>

                                                                    <span class="onclick-hidden text-tundora"
                                                                        id="blood_view">
                                                                        B+
                                                                    </span>
                                                                    <select name="txtBloodGroup" id="txtBloodGroup"
                                                                        class="btn-form-control hidden form-control aria-disabled"
                                                                        disabled="disabled"
                                                                        onchange="changeBloodView()">
                                                                        <option value="-1">Select</option>
                                                                        <option value="A+">A(+ve)</option>
                                                                        <option value="A-">A(-ve)</option>
                                                                        <option value="B+" selected="">B(+ve)</option>
                                                                        <option value="B-">B(-ve)</option>
                                                                        <option value="O+">O(+ve)</option>
                                                                        <option value="O-">O(-ve)</option>
                                                                        <option value="AB+">AB(+ve)</option>
                                                                        <option value="AB-">AB(-ve)</option>
                                                                    </select>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="height">Height (meters)</label>
                                                                    <span class="help-block" id="heightErrorMsg"></span>
                                                                    <input type="text"
                                                                        class="form-control heightWeightCheck"
                                                                        placeholder="" value="5.5"
                                                                        aria-label="Type height in meters" name="height"
                                                                        id="height" maxlength="6">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="weight">Weight (kg)</label>
                                                                    <span class="help-block" id="weightErrorMsg"></span>
                                                                    <input type="text" aria-label="Type weight in kg"
                                                                        class="form-control heightWeightCheck"
                                                                        placeholder="" value="60" name="weight"
                                                                        id="weight" maxlength="6">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="btn-form-control hidden">
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-primary save"
                                                                    aria-label="CLick to save personal details information"
                                                                    onclick="cnahgeValuePer();commonUpdate('step_01_update_per.asp','personalForm','per_0','EN');"
                                                                    id="perbtn-save">Save</a>
                                                                <a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp"
                                                                    aria-label="Click close to go back to edit resume without saving"
                                                                    class="btn btn-default btn-cancel reset">Close</a>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div><!-- end of collapseOne div-->
                                    </div><!-- end of personal details panel-->
                                    <!--start details address-->
                                    <div class="panel">
                                        <!-- do in bangla -->

                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h2 class="panel-title">
                                                <!-- do in bangla -->
                                                <button class="btn collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" data-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="indicator icon-angle-down"></i>&nbsp;Address Details
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingTwo" aria-expanded="false">
                                            <div class="panel-body">
                                                <!-- do in bangla -->

                                                <!-- do in bangla -->
                                                <div class="all-info adrs_0" style="display:block;">
                                                    <div class="sub-header">
                                                        <div id="alertDiv_adrs"></div>
                                                        <div class="edit-tools">
                                                            <button class="btn edit-btn"
                                                                aria-label="Click on Edit to fill up address."
                                                                id="addressEditBtn"><i
                                                                    class="icon-pencil-o"></i>&nbsp;Edit</button>
                                                        </div>
                                                    </div>

                                                    <form class="row view-mode" id="addressForm" name="addressForm">

                                                        <div class="col-md-12">
                                                            <div class="address-wrap">
                                                                <div class="form-group">
                                                                    <span class="label">Present Address<abbr
                                                                            title="Required" class="required"></abbr>
                                                                    </span>
                                                                    <div id="txtPresentAdd" cols="30"
                                                                        class="height-2x address_Previous word-break-all text-tundora"
                                                                        style="margin-bottom: 5px;">New Market 1205
                                                                        Katabon Rd, Dhaka 1205, New Market, Dhaka</div>
                                                                </div>
                                                                <div class="form-group btn-form-control hidden">
                                                                    <fieldset>
                                                                        <legend class="sr-only">Present Address</legend>
                                                                        <div id="txtpresnErrorDiv"></div>
                                                                        <label class="radio-inline"><input type="radio"
                                                                                name="presentLocation" id="radioPrsn1"
                                                                                value="0" checked=""
                                                                                aria-describedby="txtpresnLocErrorMsg">Inside
                                                                            Bangladesh</label>
                                                                        <label class="radio-inline"><input type="radio"
                                                                                name="presentLocation" value="1"
                                                                                class="outside">Outside
                                                                            Bangladesh</label>
                                                                    </fieldset>
                                                                </div>
                                                                <div class="select-country hide hide"
                                                                    id="countrySelectID">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <select
                                                                                    class="form-control aria-disabled"
                                                                                    disabled="disabled"
                                                                                    aria-label="present countrey list"
                                                                                    id="present_country_list"
                                                                                    name="present_country_list"
                                                                                    aria-describedby="txtpresnContryErrorMsg">
                                                                                    <option value="-1" selected="">
                                                                                        Select Country</option>
                                                                                    <option value="101">Afghanistan
                                                                                    </option>
                                                                                    <option value="102">Albania</option>
                                                                                    <option value="103">Algeria</option>
                                                                                    <option value="104">American Samoa
                                                                                    </option>
                                                                                    <option value="105">Andorra</option>
                                                                                    <option value="106">Angola</option>
                                                                                    <option value="107">Anguilla
                                                                                    </option>
                                                                                    <option value="108">Antarctica
                                                                                    </option>
                                                                                    <option value="109">Antigua</option>
                                                                                    <option value="110">Argentina
                                                                                    </option>
                                                                                    <option value="111">Armenia</option>
                                                                                    <option value="112">Aruba</option>
                                                                                    <option value="113">Australia
                                                                                    </option>
                                                                                    <option value="114">Austria</option>
                                                                                    <option value="115">Azerbaijan
                                                                                    </option>
                                                                                    <option value="116">Bahamas</option>
                                                                                    <option value="117">Bahrain</option>
                                                                                    <option value="119">Barbados
                                                                                    </option>
                                                                                    <option value="120">Belarus</option>
                                                                                    <option value="121">Belgium</option>
                                                                                    <option value="122">Belize</option>
                                                                                    <option value="123">Benin</option>
                                                                                    <option value="124">Bermuda</option>
                                                                                    <option value="125">Bhutan</option>
                                                                                    <option value="126">Bolivia</option>
                                                                                    <option value="127">Bosnia and
                                                                                        Herzegovina</option>
                                                                                    <option value="128">Botswana
                                                                                    </option>
                                                                                    <option value="129">Brazil</option>
                                                                                    <option value="130">British Virgin
                                                                                        Islands</option>
                                                                                    <option value="131">Brunei</option>
                                                                                    <option value="132">Bulgaria
                                                                                    </option>
                                                                                    <option value="133">Burkina Faso
                                                                                    </option>
                                                                                    <option value="135">Burundi</option>
                                                                                    <option value="136">Cambodia
                                                                                    </option>
                                                                                    <option value="137">Cameroon
                                                                                    </option>
                                                                                    <option value="138">Canada</option>
                                                                                    <option value="139">Cape Verde
                                                                                    </option>
                                                                                    <option value="140">Central African
                                                                                        Republic</option>
                                                                                    <option value="141">Chad</option>
                                                                                    <option value="142">Chile</option>
                                                                                    <option value="143">China</option>
                                                                                    <option value="144">Colombia
                                                                                    </option>
                                                                                    <option value="145">Comoros</option>
                                                                                    <option value="147">Congo</option>
                                                                                    <option value="146">Congo (Zaire)
                                                                                    </option>
                                                                                    <option value="148">Cook Islands
                                                                                    </option>
                                                                                    <option value="149">Costa Rica
                                                                                    </option>
                                                                                    <option value="150">Cote d'Ivoire
                                                                                        (Ivory Coast)</option>
                                                                                    <option value="151">Croatia</option>
                                                                                    <option value="152">Cuba</option>
                                                                                    <option value="153">Cyprus</option>
                                                                                    <option value="154">Czech Republic
                                                                                    </option>
                                                                                    <option value="155">Denmark</option>
                                                                                    <option value="156">Djibouti
                                                                                    </option>
                                                                                    <option value="157">Dominica
                                                                                    </option>
                                                                                    <option value="158">Dominican
                                                                                        Republic</option>
                                                                                    <option value="323">East Timor
                                                                                    </option>
                                                                                    <option value="159">Ecuador</option>
                                                                                    <option value="160">Egypt</option>
                                                                                    <option value="161">El Salvador
                                                                                    </option>
                                                                                    <option value="162">Equatorial
                                                                                        Guinea</option>
                                                                                    <option value="163">Eritrea</option>
                                                                                    <option value="164">Estonia</option>
                                                                                    <option value="165">Ethiopia
                                                                                    </option>
                                                                                    <option value="166">Falkland Islands
                                                                                    </option>
                                                                                    <option value="232">Federated States
                                                                                        of Micronesia</option>
                                                                                    <option value="167">Fiji</option>
                                                                                    <option value="168">Finland</option>
                                                                                    <option value="169">France</option>
                                                                                    <option value="170">French Guiana
                                                                                    </option>
                                                                                    <option value="171">French Polynesia
                                                                                    </option>
                                                                                    <option value="172">Gabon</option>
                                                                                    <option value="174">Gaza Strip and
                                                                                        West Bank</option>
                                                                                    <option value="175">Georgia</option>
                                                                                    <option value="176">Germany</option>
                                                                                    <option value="177">Ghana</option>
                                                                                    <option value="178">Gibraltar
                                                                                    </option>
                                                                                    <option value="179">Greece</option>
                                                                                    <option value="180">Greenland
                                                                                    </option>
                                                                                    <option value="181">Grenada</option>
                                                                                    <option value="182">Guadeloupe
                                                                                    </option>
                                                                                    <option value="183">Guam</option>
                                                                                    <option value="184">Guatemala
                                                                                    </option>
                                                                                    <option value="185">Guinea</option>
                                                                                    <option value="186">Guinea-Bissau
                                                                                    </option>
                                                                                    <option value="187">Guyana</option>
                                                                                    <option value="188">Haiti</option>
                                                                                    <option value="190">Honduras
                                                                                    </option>
                                                                                    <option value="191">Hong Kong
                                                                                    </option>
                                                                                    <option value="192">Hungary</option>
                                                                                    <option value="193">Iceland</option>
                                                                                    <option value="194">India</option>
                                                                                    <option value="195">Indonesia
                                                                                    </option>
                                                                                    <option value="196">Iran</option>
                                                                                    <option value="197">Iraq</option>
                                                                                    <option value="198">Ireland</option>
                                                                                    <option value="199">Israel</option>
                                                                                    <option value="200">Italy</option>
                                                                                    <option value="201">Jamaica</option>
                                                                                    <option value="202">Japan</option>
                                                                                    <option value="203">Jordan</option>
                                                                                    <option value="204">Kazakhstan
                                                                                    </option>
                                                                                    <option value="205">Kenya</option>
                                                                                    <option value="206">Kiribati
                                                                                    </option>
                                                                                    <option value="207">Kuwait</option>
                                                                                    <option value="208">Kyrgyzstan
                                                                                    </option>
                                                                                    <option value="209">Laos</option>
                                                                                    <option value="210">Latvia</option>
                                                                                    <option value="211">Lebanon</option>
                                                                                    <option value="212">Lesotho</option>
                                                                                    <option value="213">Liberia</option>
                                                                                    <option value="214">Libya</option>
                                                                                    <option value="215">Liechtenstein
                                                                                    </option>
                                                                                    <option value="216">Lithuania
                                                                                    </option>
                                                                                    <option value="217">Luxembourg
                                                                                    </option>
                                                                                    <option value="218">Macau</option>
                                                                                    <option value="219">Macedonia
                                                                                    </option>
                                                                                    <option value="220">Madagascar
                                                                                    </option>
                                                                                    <option value="221">Malawi</option>
                                                                                    <option value="222">Malaysia
                                                                                    </option>
                                                                                    <option value="223">Maldives
                                                                                    </option>
                                                                                    <option value="224">Mali</option>
                                                                                    <option value="225">Malta</option>
                                                                                    <option value="226">Marshall Islands
                                                                                    </option>
                                                                                    <option value="227">Martinique
                                                                                    </option>
                                                                                    <option value="228">Mauritania
                                                                                    </option>
                                                                                    <option value="229">Mauritius
                                                                                    </option>
                                                                                    <option value="230">Mayotte</option>
                                                                                    <option value="231">Mexico</option>
                                                                                    <option value="233">Moldova</option>
                                                                                    <option value="234">Monaco</option>
                                                                                    <option value="235">Mongolia
                                                                                    </option>
                                                                                    <option value="325">Montenegro
                                                                                    </option>
                                                                                    <option value="236">Montserrat
                                                                                    </option>
                                                                                    <option value="237">Morocco</option>
                                                                                    <option value="238">Mozambique
                                                                                    </option>
                                                                                    <option value="134">Myanmar</option>
                                                                                    <option value="239">Namibia</option>
                                                                                    <option value="240">Nauru</option>
                                                                                    <option value="241">Nepal</option>
                                                                                    <option value="242">Netherlands
                                                                                    </option>
                                                                                    <option value="243">Netherlands
                                                                                        Antilles</option>
                                                                                    <option value="244">New Caledonia
                                                                                    </option>
                                                                                    <option value="245">New Zealand
                                                                                    </option>
                                                                                    <option value="246">Nicaragua
                                                                                    </option>
                                                                                    <option value="247">Niger</option>
                                                                                    <option value="248">Nigeria</option>
                                                                                    <option value="249">North Korea
                                                                                    </option>
                                                                                    <option value="250">Northern Mariana
                                                                                        Islands</option>
                                                                                    <option value="251">Norway</option>
                                                                                    <option value="252">Oman</option>
                                                                                    <option value="253">Pakistan
                                                                                    </option>
                                                                                    <option value="254">Palau</option>
                                                                                    <option value="255">Panama</option>
                                                                                    <option value="256">Papua New Guinea
                                                                                    </option>
                                                                                    <option value="257">Paraguay
                                                                                    </option>
                                                                                    <option value="258">Peru</option>
                                                                                    <option value="259">Philippines
                                                                                    </option>
                                                                                    <option value="260">Pitcairn Islands
                                                                                    </option>
                                                                                    <option value="261">Poland</option>
                                                                                    <option value="262">Portugal
                                                                                    </option>
                                                                                    <option value="263">Puerto Rico
                                                                                    </option>
                                                                                    <option value="264">Qatar</option>
                                                                                    <option value="327">Republic of
                                                                                        Kosovo</option>
                                                                                    <option value="265">Reunion</option>
                                                                                    <option value="266">Romania</option>
                                                                                    <option value="267">Russia</option>
                                                                                    <option value="268">Rwanda</option>
                                                                                    <option value="269">Saint Kitts and
                                                                                        Nevis</option>
                                                                                    <option value="270">Saint Lucia
                                                                                    </option>
                                                                                    <option value="271">Saint Pierre and
                                                                                        Miquelon</option>
                                                                                    <option value="272">Saint Vincent
                                                                                        and the Grenadines</option>
                                                                                    <option value="273">Samoa</option>
                                                                                    <option value="274">San Marino
                                                                                    </option>
                                                                                    <option value="275">Sao Tome and
                                                                                        Principe</option>
                                                                                    <option value="276">Saudi Arabia
                                                                                    </option>
                                                                                    <option value="277">Senegal</option>
                                                                                    <option value="278">Serbia</option>
                                                                                    <option value="279">Seychelles
                                                                                    </option>
                                                                                    <option value="280">Sierra Leone
                                                                                    </option>
                                                                                    <option value="281">Singapore
                                                                                    </option>
                                                                                    <option value="282">Slovakia
                                                                                    </option>
                                                                                    <option value="283">Slovenia
                                                                                    </option>
                                                                                    <option value="284">Solomon Islands
                                                                                    </option>
                                                                                    <option value="285">Somalia</option>
                                                                                    <option value="286">South Africa
                                                                                    </option>
                                                                                    <option value="287">South Korea
                                                                                    </option>
                                                                                    <option value="324">South Sudan
                                                                                    </option>
                                                                                    <option value="288">Spain</option>
                                                                                    <option value="289">Sri Lanka
                                                                                    </option>
                                                                                    <option value="290">Sudan</option>
                                                                                    <option value="291">Suriname
                                                                                    </option>
                                                                                    <option value="292">Swaziland
                                                                                    </option>
                                                                                    <option value="293">Sweden</option>
                                                                                    <option value="294">Switzerland
                                                                                    </option>
                                                                                    <option value="295">Syria</option>
                                                                                    <option value="296">Taiwan</option>
                                                                                    <option value="297">Tajikistan
                                                                                    </option>
                                                                                    <option value="298">Tanzania
                                                                                    </option>
                                                                                    <option value="299">Thailand
                                                                                    </option>
                                                                                    <option value="173">The Gambia
                                                                                    </option>
                                                                                    <option value="189">The Holy See
                                                                                    </option>
                                                                                    <option value="300">Togo</option>
                                                                                    <option value="301">Tonga</option>
                                                                                    <option value="302">Trinidad and
                                                                                        Tobago</option>
                                                                                    <option value="303">Tunisia</option>
                                                                                    <option value="304">Turkey</option>
                                                                                    <option value="305">Turkmenistan
                                                                                    </option>
                                                                                    <option value="306">Turks and Caicos
                                                                                        Islands</option>
                                                                                    <option value="307">Tuvalu</option>
                                                                                    <option value="308">Uganda</option>
                                                                                    <option value="309">Ukraine</option>
                                                                                    <option value="310">United Arab
                                                                                        Emirates</option>
                                                                                    <option value="311">United Kingdom
                                                                                    </option>
                                                                                    <option value="312">United States
                                                                                    </option>
                                                                                    <option value="313">United States
                                                                                        Virgin Islands</option>
                                                                                    <option value="314">Uruguay</option>
                                                                                    <option value="315">Uzbekistan
                                                                                    </option>
                                                                                    <option value="316">Vanuatu</option>
                                                                                    <option value="317">Venezuela
                                                                                    </option>
                                                                                    <option value="318">Vietnam</option>
                                                                                    <option value="319">West Bank and
                                                                                        Gaza Strip</option>
                                                                                    <option value="320">Western Sahara
                                                                                    </option>
                                                                                    <option value="321">Yemen</option>
                                                                                    <option value="322">Zambia</option>
                                                                                    <option value="326">Zimbabwe
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="select-wrap ">
                                                                    <div class="row">
                                                                        <div
                                                                            class="col-sm-4 pr-control btn-form-control hidden">
                                                                            <div class="form-group">
                                                                                <select
                                                                                    class="form-control aria-disabled"
                                                                                    disabled="disabled"
                                                                                    aria-label="Present district"
                                                                                    id="present_district"
                                                                                    name="present_district"
                                                                                    onchange="GetLoadLocations(0,'present','EN','addressForm');"
                                                                                    aria-describedby="txtpresnDistrictErrorMsg">
                                                                                    <option value="-1" selected="">
                                                                                        Select District</option>
                                                                                    <option value="1">Brahmanbaria
                                                                                    </option>
                                                                                    <option value="2">Bagerhat</option>
                                                                                    <option value="3">Bandarban</option>
                                                                                    <option value="4">Barishal</option>
                                                                                    <option value="5">Bhola</option>
                                                                                    <option value="6">Bogura</option>
                                                                                    <option value="7">Barguna</option>
                                                                                    <option value="8">Chandpur</option>
                                                                                    <option value="9">Chapainawabganj
                                                                                    </option>
                                                                                    <option value="10">Chattogram
                                                                                    </option>
                                                                                    <option value="11">Chuadanga
                                                                                    </option>
                                                                                    <option value="12">Cumilla</option>
                                                                                    <option value="13">Cox's Bazar
                                                                                    </option>
                                                                                    <option value="14" selected="">Dhaka
                                                                                    </option>
                                                                                    <option value="15">Dinajpur</option>
                                                                                    <option value="16">Faridpur</option>
                                                                                    <option value="17">Feni</option>
                                                                                    <option value="18">Gaibandha
                                                                                    </option>
                                                                                    <option value="19">Gazipur</option>
                                                                                    <option value="20">Gopalganj
                                                                                    </option>
                                                                                    <option value="21">Habiganj</option>
                                                                                    <option value="22">Jamalpur</option>
                                                                                    <option value="23">Jashore</option>
                                                                                    <option value="24">Jhalakathi
                                                                                    </option>
                                                                                    <option value="25">Jhenaidah
                                                                                    </option>
                                                                                    <option value="26">Joypurhat
                                                                                    </option>
                                                                                    <option value="27">Khagrachhari
                                                                                    </option>
                                                                                    <option value="28">Khulna</option>
                                                                                    <option value="29">Kishoreganj
                                                                                    </option>
                                                                                    <option value="30">Kurigram</option>
                                                                                    <option value="31">Kushtia</option>
                                                                                    <option value="32">Lalmonirhat
                                                                                    </option>
                                                                                    <option value="33">Laksmipur
                                                                                    </option>
                                                                                    <option value="34">Madaripur
                                                                                    </option>
                                                                                    <option value="35">Magura</option>
                                                                                    <option value="36">Manikganj
                                                                                    </option>
                                                                                    <option value="37">Meherpur</option>
                                                                                    <option value="38">Moulvibazar
                                                                                    </option>
                                                                                    <option value="39">Munshiganj
                                                                                    </option>
                                                                                    <option value="40">Mymensingh
                                                                                    </option>
                                                                                    <option value="41">Naogaon</option>
                                                                                    <option value="42">Narail</option>
                                                                                    <option value="43">Narayanganj
                                                                                    </option>
                                                                                    <option value="44">Narsingdi
                                                                                    </option>
                                                                                    <option value="45">Natore</option>
                                                                                    <option value="46">Netrokona
                                                                                    </option>
                                                                                    <option value="47">Nilphamari
                                                                                    </option>
                                                                                    <option value="48">Noakhali</option>
                                                                                    <option value="49">Pabna</option>
                                                                                    <option value="50">Panchagarh
                                                                                    </option>
                                                                                    <option value="51">Patuakhali
                                                                                    </option>
                                                                                    <option value="52">Pirojpur</option>
                                                                                    <option value="53">Rajbari</option>
                                                                                    <option value="54">Rajshahi</option>
                                                                                    <option value="55">Rangamati
                                                                                    </option>
                                                                                    <option value="56">Rangpur</option>
                                                                                    <option value="57">Satkhira</option>
                                                                                    <option value="58">Shariatpur
                                                                                    </option>
                                                                                    <option value="59">Sherpur</option>
                                                                                    <option value="60">Sirajganj
                                                                                    </option>
                                                                                    <option value="61">Sunamganj
                                                                                    </option>
                                                                                    <option value="62">Sylhet</option>
                                                                                    <option value="63">Tangail</option>
                                                                                    <option value="64">Thakurgaon
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-sm-4 p-control btn-form-control hidden">
                                                                            <div class="form-group"
                                                                                id="present_thanaLocation">

                                                                                <select aria-label="present thana"
                                                                                    class="form-control thanacommon aria-disabled"
                                                                                    disabled="disabled"
                                                                                    id="present_thana"
                                                                                    name="present_thana"
                                                                                    onchange="GetLoadLocations(1,'present','EN','addressForm');"
                                                                                    aria-describedby="presenttxtThanaErrorMsg">
                                                                                    <option value="-1" selected="">
                                                                                        Select Thana</option>
                                                                                    <option value="1102">Adabor</option>
                                                                                    <option value="1126">Badda</option>
                                                                                    <option value="1146">Bangsal
                                                                                    </option>
                                                                                    <option value="1178">Bimanbandar
                                                                                    </option>
                                                                                    <option value="1194">Cantonment
                                                                                    </option>
                                                                                    <option value="1195">Chawk Bazar
                                                                                    </option>
                                                                                    <option value="1224">Dakshinkhan
                                                                                    </option>
                                                                                    <option value="1227">Darus Salam
                                                                                    </option>
                                                                                    <option value="1238">Demra</option>
                                                                                    <option value="1242">Dhamrai
                                                                                    </option>
                                                                                    <option value="1244">Dhanmondi
                                                                                    </option>
                                                                                    <option value="1253">Dohar</option>
                                                                                    <option value="1280">Gendaria
                                                                                    </option>
                                                                                    <option value="1293">Gulshan
                                                                                    </option>
                                                                                    <option value="1306">Hazaribagh
                                                                                    </option>
                                                                                    <option value="1320">Jatrabari
                                                                                    </option>
                                                                                    <option value="1333">Kadamtali
                                                                                    </option>
                                                                                    <option value="1334">Kafrul</option>
                                                                                    <option value="1337">Kalabagan
                                                                                    </option>
                                                                                    <option value="1354">Kamrangirchar
                                                                                    </option>
                                                                                    <option value="1368">Keraniganj
                                                                                    </option>
                                                                                    <option value="1376">Khilgaon
                                                                                    </option>
                                                                                    <option value="1377">Khilkhet
                                                                                    </option>
                                                                                    <option value="1383">Kotwali
                                                                                    </option>
                                                                                    <option value="1397">Lalbagh
                                                                                    </option>
                                                                                    <option value="1431">Mirpur</option>
                                                                                    <option value="1438">Mohakhali
                                                                                    </option>
                                                                                    <option value="1439">Mohammadpur
                                                                                    </option>
                                                                                    <option value="1448">Motijheel
                                                                                    </option>
                                                                                    <option value="1482">Nawabganj
                                                                                    </option>
                                                                                    <option value="1486">Natun Bazar
                                                                                    </option>
                                                                                    <option value="1498">Pallabi
                                                                                    </option>
                                                                                    <option value="1499">Paltan</option>
                                                                                    <option value="1538">Ramna</option>
                                                                                    <option value="1540">Rampura
                                                                                    </option>
                                                                                    <option value="1554">Sabujbagh
                                                                                    </option>
                                                                                    <option value="1570">Savar</option>
                                                                                    <option value="1572">Shah Ali
                                                                                    </option>
                                                                                    <option value="1574">Shahbag
                                                                                    </option>
                                                                                    <option value="1584">Sher-e-Bangla
                                                                                        Nagar</option>
                                                                                    <option value="1593">Shyampur
                                                                                    </option>
                                                                                    <option value="1617">Sutrapur
                                                                                    </option>
                                                                                    <option value="1629">Tejgaon
                                                                                    </option>
                                                                                    <option value="1630">Tejgaon
                                                                                        Industrial Area</option>
                                                                                    <option value="1640">Turag</option>
                                                                                    <option value="1644">Uttar Khan
                                                                                    </option>
                                                                                    <option value="1645">Uttara</option>
                                                                                    <option value="1658">Joypara
                                                                                    </option>
                                                                                    <option value="1664">Ashulia
                                                                                    </option>
                                                                                    <option value="1665">Rupnagar
                                                                                    </option>
                                                                                    <option value="1678">Shahjahanpur
                                                                                    </option>
                                                                                    <option value="1679">Shahjalal
                                                                                        Airport</option>
                                                                                    <option value="1680">Uttara East
                                                                                    </option>
                                                                                    <option value="1681">Uttara West
                                                                                    </option>
                                                                                    <option value="1682">Vatara</option>
                                                                                    <option value="1683">Wari</option>
                                                                                    <option value="1686">Dakshin Khan
                                                                                    </option>
                                                                                    <option value="1688">Dhaka Railway
                                                                                    </option>
                                                                                    <option value="1690">Mugda</option>
                                                                                    <option value="1691" selected="">New
                                                                                        Market</option>
                                                                                    <option value="1693">South
                                                                                        Keraniganj</option>
                                                                                    <option value="1694">Bhashantek
                                                                                    </option>
                                                                                    <option value="1752">New Market TSO
                                                                                    </option>
                                                                                    <option value="4006">Shantinagar
                                                                                    </option>
                                                                                    <option value="4007">Banani</option>
                                                                                    <option value="4014">Bhashantek
                                                                                    </option>
                                                                                    <option value="4017">Mugdapara
                                                                                    </option>
                                                                                    <option value="4020">Shankar
                                                                                    </option>
                                                                                    <option value="4021">Kawran Bazar
                                                                                    </option>
                                                                                    <option value="4022">Banglamotor
                                                                                    </option>
                                                                                    <option value="4023">Kakrail
                                                                                    </option>
                                                                                    <option value="4025">Malibagh
                                                                                    </option>
                                                                                    <option value="4026">Jigatola
                                                                                    </option>
                                                                                    <option value="4027">Azimpur
                                                                                    </option>
                                                                                    <option value="4028">Kallyanpur
                                                                                    </option>
                                                                                    <option value="4029">Shyamoli
                                                                                    </option>
                                                                                    <option value="4030">Gulistan
                                                                                    </option>
                                                                                    <option value="4031">Mouchak
                                                                                    </option>
                                                                                    <option value="4032">Baridhara
                                                                                    </option>
                                                                                    <option value="4033">ECB Chottor
                                                                                    </option>
                                                                                    <option value="4034">Shegunbagicha
                                                                                    </option>
                                                                                    <option value="4035">Abdullhapur
                                                                                    </option>
                                                                                    <option value="4036">Old Dhaka
                                                                                    </option>
                                                                                    <option value="4037">Luxmibazar
                                                                                    </option>
                                                                                    <option value="4038">Sadarghat
                                                                                    </option>
                                                                                    <option value="4086">60 Feet
                                                                                    </option>
                                                                                    <option value="4087">Abudharr
                                                                                        Ghifari College</option>
                                                                                    <option value="4088">Aftabnagar
                                                                                    </option>
                                                                                    <option value="4089">Aganogor
                                                                                        Keranigonj</option>
                                                                                    <option value="4090">Agargaon
                                                                                    </option>
                                                                                    <option value="4091">Ahmed Nagar
                                                                                        Mirpur</option>
                                                                                    <option value="4092">Air HQ</option>
                                                                                    <option value="4093">Alia Madrasha
                                                                                    </option>
                                                                                    <option value="4094">Amin Bazar
                                                                                    </option>
                                                                                    <option value="4095">Amligola
                                                                                    </option>
                                                                                    <option value="4096">Arambag
                                                                                    </option>
                                                                                    <option value="4097">Armanitola
                                                                                    </option>
                                                                                    <option value="4098">ASA University
                                                                                        Bangladesh</option>
                                                                                    <option value="4099">Ashkona
                                                                                    </option>
                                                                                    <option value="4100">Ashrafabad
                                                                                    </option>
                                                                                    <option value="4101">Ashulia City
                                                                                    </option>
                                                                                    <option value="4102">Azimpur
                                                                                    </option>
                                                                                    <option value="4103">Azimpur
                                                                                        koborsthan</option>
                                                                                    <option value="4104">Babu Bazar
                                                                                    </option>
                                                                                    <option value="4105">BAF Base
                                                                                    </option>
                                                                                    <option value="4106">Baily Road
                                                                                    </option>
                                                                                    <option value="4107">Bakshi Bazar
                                                                                    </option>
                                                                                    <option value="4108">Banarasi Polli
                                                                                    </option>
                                                                                    <option value="4109">Banasree
                                                                                    </option>
                                                                                    <option value="4110">Bangabhaban
                                                                                    </option>
                                                                                    <option value="4111">Bangla Academy
                                                                                    </option>
                                                                                    <option value="4112">Bangla Bazar
                                                                                    </option>
                                                                                    <option value="4113">Baridhara
                                                                                    </option>
                                                                                    <option value="4114">Baridhara J
                                                                                        Block</option>
                                                                                    <option value="4115">Basabo</option>
                                                                                    <option value="4116">Basundhara RA
                                                                                    </option>
                                                                                    <option value="4117">Bawnia</option>
                                                                                    <option value="4118">BDR 1 no gate
                                                                                    </option>
                                                                                    <option value="4119">BDR Head
                                                                                        Quarter</option>
                                                                                    <option value="4120">Begum Bazaar
                                                                                    </option>
                                                                                    <option value="4121">Beraid</option>
                                                                                    <option value="4122">BIDC</option>
                                                                                    <option value="4123">Borisur
                                                                                        Keranigonj</option>
                                                                                    <option value="4124">Bosila</option>
                                                                                    <option value="4125">BUET Campus
                                                                                    </option>
                                                                                    <option value="4126">Capital Tower
                                                                                        Shopping Complex</option>
                                                                                    <option value="4127">Central Road
                                                                                    </option>
                                                                                    <option value="4128">ChalkBazar
                                                                                    </option>
                                                                                    <option value="4129">Chandmiya
                                                                                        Housing</option>
                                                                                    <option value="4130">Chankharpul
                                                                                    </option>
                                                                                    <option value="4131">Chanpara
                                                                                    </option>
                                                                                    <option value="4132">Chapakhana mor
                                                                                        Mirpur</option>
                                                                                    <option value="4133">Chinese Bus
                                                                                        Stop Mirpur</option>
                                                                                    <option value="4134">Chunkutia
                                                                                        Keranigonj</option>
                                                                                    <option value="4135">Demra Staff
                                                                                        Quarter</option>
                                                                                    <option value="4136">Dhaka Court
                                                                                    </option>
                                                                                    <option value="4137">Dhaka GPO
                                                                                    </option>
                                                                                    <option value="4138">Dhaka Medical
                                                                                        College</option>
                                                                                    <option value="4139">Dhaka
                                                                                        Politechnic</option>
                                                                                    <option value="4140">Dhaka Sadar
                                                                                    </option>
                                                                                    <option value="4141">Dhaka Shikkha
                                                                                        board Mirpur</option>
                                                                                    <option value="4142">Dhaka Uddan
                                                                                    </option>
                                                                                    <option value="4143">Dhaka
                                                                                        University</option>
                                                                                    <option value="4144">Dhakeshari
                                                                                        mondir</option>
                                                                                    <option value="4145">Dhanmondi 27
                                                                                    </option>
                                                                                    <option value="4146">Dhanmondi 32
                                                                                    </option>
                                                                                    <option value="4147">Dharmik para
                                                                                    </option>
                                                                                    <option value="4148">Dholairpar
                                                                                    </option>
                                                                                    <option value="4149">Dhonia</option>
                                                                                    <option value="4150">Dhonia</option>
                                                                                    <option value="4151">Dilkhusha
                                                                                    </option>
                                                                                    <option value="4152">Dogai</option>
                                                                                    <option value="4153">DOHS Banani
                                                                                    </option>
                                                                                    <option value="4154">DOHS Baridhara
                                                                                    </option>
                                                                                    <option value="4155">DOHS Mirpur
                                                                                    </option>
                                                                                    <option value="4156">DOHS Mohakhali
                                                                                    </option>
                                                                                    <option value="4157">Doyagonj
                                                                                    </option>
                                                                                    <option value="4158">Dr. Amanat Khan
                                                                                        Hospital Road</option>
                                                                                    <option value="4159">Elephant Road
                                                                                    </option>
                                                                                    <option value="4160">English Road
                                                                                    </option>
                                                                                    <option value="4161">Eskaton
                                                                                    </option>
                                                                                    <option value="4162">Faridabad
                                                                                    </option>
                                                                                    <option value="4163">Farmgate
                                                                                    </option>
                                                                                    <option value="4164">FDC</option>
                                                                                    <option value="4165">Ganabhaban
                                                                                    </option>
                                                                                    <option value="4166">Gazetted
                                                                                        Officers Hostel</option>
                                                                                    <option value="4167">Golapbag
                                                                                    </option>
                                                                                    <option value="4168">Gopibag
                                                                                    </option>
                                                                                    <option value="4169">Goran</option>
                                                                                    <option value="4170">Government
                                                                                        Bangla College</option>
                                                                                    <option value="4171">Green Road
                                                                                    </option>
                                                                                    <option value="4172">Gulistan
                                                                                    </option>
                                                                                    <option value="4173">GULSHAN 1
                                                                                    </option>
                                                                                    <option value="4174">GULSHAN 2
                                                                                    </option>
                                                                                    <option value="4175">Gulshan Model
                                                                                        Town</option>
                                                                                    <option value="4176">Habibnagar
                                                                                    </option>
                                                                                    <option value="4177">Haji Camp
                                                                                    </option>
                                                                                    <option value="4178">Hatirpool
                                                                                    </option>
                                                                                    <option value="4179">High Court
                                                                                    </option>
                                                                                    <option value="4180">Ibrahimpur
                                                                                    </option>
                                                                                    <option value="4181">Indira Road
                                                                                    </option>
                                                                                    <option value="4182">Iraqi math
                                                                                    </option>
                                                                                    <option value="4183">Islambag
                                                                                    </option>
                                                                                    <option value="4184">Jagannath
                                                                                        University Campus</option>
                                                                                    <option value="4185">Jahangirnagar
                                                                                        University Area</option>
                                                                                    <option value="4186">Japan Garden
                                                                                        City</option>
                                                                                    <option value="4187">Jashim Uddin
                                                                                    </option>
                                                                                    <option value="4188">Jurain</option>
                                                                                    <option value="4189">Kaderabad
                                                                                        housing</option>
                                                                                    <option value="4190">Kalachandpur
                                                                                    </option>
                                                                                    <option value="4191">Kaligonj
                                                                                        Keranigonj</option>
                                                                                    <option value="4192">Kalindi
                                                                                        Keranigonj</option>
                                                                                    <option value="4193">Kallyanpur
                                                                                    </option>
                                                                                    <option value="4194">Kalshi</option>
                                                                                    <option value="4195">Kamlapur
                                                                                    </option>
                                                                                    <option value="4196">Karzon Hall
                                                                                    </option>
                                                                                    <option value="4197">Kathalbagan
                                                                                    </option>
                                                                                    <option value="4198">Kaula</option>
                                                                                    <option value="4199">Kazipara
                                                                                    </option>
                                                                                    <option value="4200">Keraniganj
                                                                                        Model Town</option>
                                                                                    <option value="4201">Khamarbari
                                                                                    </option>
                                                                                    <option value="4202">Khaze Dewan
                                                                                    </option>
                                                                                    <option value="4203">Khaze Dewan
                                                                                    </option>
                                                                                    <option value="4204">Kochukhet
                                                                                    </option>
                                                                                    <option value="4205">Kodomtoli
                                                                                        Keranigonj</option>
                                                                                    <option value="4206">krisnochura
                                                                                        Residential Area Mirpur</option>
                                                                                    <option value="4207">Kuril</option>
                                                                                    <option value="4208">Lakshibazar
                                                                                    </option>
                                                                                    <option value="4209">Lalbag killah
                                                                                    </option>
                                                                                    <option value="4210">Lalmatia
                                                                                    </option>
                                                                                    <option value="4211">Leather
                                                                                        Institute</option>
                                                                                    <option value="4212">Malibag Abul
                                                                                        hotel</option>
                                                                                    <option value="4213">Malibag
                                                                                        Chowdhuripara</option>
                                                                                    <option value="4214">Malibag
                                                                                        Railgate</option>
                                                                                    <option value="4215">Mandail
                                                                                        Keranigonj</option>
                                                                                    <option value="4216">Manikdi
                                                                                    </option>
                                                                                    <option value="4217">Maniknagar
                                                                                    </option>
                                                                                    <option value="4218">Matikata
                                                                                    </option>
                                                                                    <option value="4219">Merul Badda
                                                                                    </option>
                                                                                    <option value="4220">Middle Paikpara
                                                                                        Mirpur</option>
                                                                                    <option value="4221">Mirpur 1
                                                                                    </option>
                                                                                    <option value="4222">Mirpur 10
                                                                                    </option>
                                                                                    <option value="4223">Mirpur 13
                                                                                    </option>
                                                                                    <option value="4224">Mirpur 14
                                                                                    </option>
                                                                                    <option value="4225">Mirpur 2
                                                                                    </option>
                                                                                    <option value="4226">Mirpur 6
                                                                                    </option>
                                                                                    <option value="4227">Mirpur 7
                                                                                    </option>
                                                                                    <option value="4228">Mirpur Love
                                                                                        Road</option>
                                                                                    <option value="4229">Mirpur Police
                                                                                        Complex</option>
                                                                                    <option value="4230">Mirpur Section
                                                                                        1 Block A</option>
                                                                                    <option value="4231">Mirpur Section
                                                                                        1 Block C</option>
                                                                                    <option value="4232">Mirpur Section
                                                                                        1 Block D</option>
                                                                                    <option value="4233">Mirpur Section
                                                                                        1 Block G</option>
                                                                                    <option value="4234">Mirpur Section
                                                                                        11</option>
                                                                                    <option value="4235">Mirpur Zoo
                                                                                    </option>
                                                                                    <option value="4236">Mirpur12
                                                                                    </option>
                                                                                    <option value="4237">Mitford
                                                                                    </option>
                                                                                    <option value="4238">Moghbazaar
                                                                                    </option>
                                                                                    <option value="4239">Mohammadpu
                                                                                        rHousing</option>
                                                                                    <option value="4240">Monipur
                                                                                    </option>
                                                                                    <option value="4241">Mouchak market
                                                                                    </option>
                                                                                    <option value="4242">Nababpur
                                                                                    </option>
                                                                                    <option value="4243">Nabisco
                                                                                    </option>
                                                                                    <option value="4244">Nadda</option>
                                                                                    <option value="4245">Nakhalpara
                                                                                    </option>
                                                                                    <option value="4246">Narinda
                                                                                    </option>
                                                                                    <option value="4247">Natunbazar
                                                                                    </option>
                                                                                    <option value="4248">Naya Paltan
                                                                                    </option>
                                                                                    <option value="4249">Nayabazar
                                                                                    </option>
                                                                                    <option value="4250">Neval Head
                                                                                        Quarter</option>
                                                                                    <option value="4251">Niketan
                                                                                    </option>
                                                                                    <option value="4252">Nikunja
                                                                                    </option>
                                                                                    <option value="4253">Nilkhet
                                                                                    </option>
                                                                                    <option value="4254">Nobinagor
                                                                                    </option>
                                                                                    <option value="4255">Nojorgonj
                                                                                        Keranigonj</option>
                                                                                    <option value="4256">Nurjahan Road
                                                                                    </option>
                                                                                    <option value="4257">OrdnenceDepot
                                                                                    </option>
                                                                                    <option value="4258">Other</option>
                                                                                    <option value="4259">Paikpara
                                                                                    </option>
                                                                                    <option value="4260">PanthaPath
                                                                                    </option>
                                                                                    <option value="4261">Paradogair
                                                                                    </option>
                                                                                    <option value="4262">Patuatuli
                                                                                    </option>
                                                                                    <option value="4263">Pilkhana
                                                                                    </option>
                                                                                    <option value="4264">Pink City
                                                                                    </option>
                                                                                    <option value="4265">Pirerbag
                                                                                    </option>
                                                                                    <option value="4266">Polashi
                                                                                    </option>
                                                                                    <option value="4267">Poribag
                                                                                    </option>
                                                                                    <option value="4268">Posta</option>
                                                                                    <option value="4269">Posta</option>
                                                                                    <option value="4270">Postagola
                                                                                    </option>
                                                                                    <option value="4271">Priyanka
                                                                                        Housing Mirpur</option>
                                                                                    <option value="4272">Public Health
                                                                                    </option>
                                                                                    <option value="4273">Purana Paltan
                                                                                    </option>
                                                                                    <option value="4274">RAB 4
                                                                                        Headquater Mirpur</option>
                                                                                    <option value="4275">Rajabazar
                                                                                    </option>
                                                                                    <option value="4276">Rajarbagh
                                                                                    </option>
                                                                                    <option value="4277">Rajarbagh
                                                                                        Police Line</option>
                                                                                    <option value="4278">Rajlaxmi
                                                                                    </option>
                                                                                    <option value="4279">Rasulpur
                                                                                        Keranigonj</option>
                                                                                    <option value="4280">Rayerbag
                                                                                    </option>
                                                                                    <option value="4281">Rayerbazar
                                                                                    </option>
                                                                                    <option value="4282">Razia Sultana
                                                                                        Road</option>
                                                                                    <option value="4283">S Bishil Road
                                                                                        Mirpur</option>
                                                                                    <option value="4284">Saddam Market
                                                                                    </option>
                                                                                    <option value="4285">Salauddin
                                                                                        Market Road Mirpur</option>
                                                                                    <option value="4286">Salimullah Road
                                                                                    </option>
                                                                                    <option value="4287">Sangsad Bhaban
                                                                                    </option>
                                                                                    <option value="4288">Sattar Match
                                                                                        Works</option>
                                                                                    <option value="4289">Savar city
                                                                                    </option>
                                                                                    <option value="4290">Savar EPZ
                                                                                    </option>
                                                                                    <option value="4291">Sayedabad
                                                                                    </option>
                                                                                    <option value="4292">Science Lab
                                                                                    </option>
                                                                                    <option value="4293">Secretariate
                                                                                        3rd Phase</option>
                                                                                    <option value="4294">Segunbagicha
                                                                                    </option>
                                                                                    <option value="4295">Sekertek
                                                                                    </option>
                                                                                    <option value="4296">Senpara
                                                                                    </option>
                                                                                    <option value="4297">Shahzadpur
                                                                                    </option>
                                                                                    <option value="4298">Shakhari Bazar
                                                                                    </option>
                                                                                    <option value="4299">Shanarpar
                                                                                    </option>
                                                                                    <option value="4300">Shanarpara
                                                                                    </option>
                                                                                    <option value="4301">Shantibag
                                                                                    </option>
                                                                                    <option value="4302">Shaymoli
                                                                                    </option>
                                                                                    <option value="4303">Shaymoli Haque
                                                                                        Shaheber Garage</option>
                                                                                    <option value="4304">Shaymoli
                                                                                        Housing</option>
                                                                                    <option value="4305">Shaymoli Shapla
                                                                                        Housing</option>
                                                                                    <option value="4306">Shaymoli
                                                                                        Shishumela</option>
                                                                                    <option value="4307">Shaymoli Square
                                                                                    </option>
                                                                                    <option value="4308">Shewrapara
                                                                                    </option>
                                                                                    <option value="4309">Shipahibag
                                                                                    </option>
                                                                                    <option value="4310">ShohidBag
                                                                                    </option>
                                                                                    <option value="4311">Shonir Akhra
                                                                                    </option>
                                                                                    <option value="4312">Siddheswari
                                                                                    </option>
                                                                                    <option value="4313">Sk Burhauddin
                                                                                        College</option>
                                                                                    <option value="4314">Sobhanbag
                                                                                    </option>
                                                                                    <option value="4315">Sukrabad
                                                                                    </option>
                                                                                    <option value="4316">Swamibag
                                                                                    </option>
                                                                                    <option value="4317">Taltola
                                                                                    </option>
                                                                                    <option value="4318">Tanti Bazar
                                                                                    </option>
                                                                                    <option value="4319">Tarabo</option>
                                                                                    <option value="4320">Tejgaon Air
                                                                                        Port</option>
                                                                                    <option value="4321">Tejgaon
                                                                                        polytechnic</option>
                                                                                    <option value="4322">Tejgaon
                                                                                        Satrasta</option>
                                                                                    <option value="4323">Tejkunipara
                                                                                    </option>
                                                                                    <option value="4324">Tejturi Bazar
                                                                                    </option>
                                                                                    <option value="4325">Tikatuli
                                                                                    </option>
                                                                                    <option value="4326">Tolarbag
                                                                                    </option>
                                                                                    <option value="4327">Tushardhara
                                                                                    </option>
                                                                                    <option value="4328">Urdu Road
                                                                                    </option>
                                                                                    <option value="4329">Uttara Model
                                                                                        Town</option>
                                                                                    <option value="4330">Uttara Sector 1
                                                                                    </option>
                                                                                    <option value="4331">Uttara Sector
                                                                                        10</option>
                                                                                    <option value="4332">Uttara Sector
                                                                                        11</option>
                                                                                    <option value="4333">Uttara Sector
                                                                                        12</option>
                                                                                    <option value="4334">Uttara Sector
                                                                                        13</option>
                                                                                    <option value="4335">Uttara Sector
                                                                                        14</option>
                                                                                    <option value="4336">Uttara Sector
                                                                                        15</option>
                                                                                    <option value="4337">Uttara Sector
                                                                                        16</option>
                                                                                    <option value="4338">Uttara Sector
                                                                                        17</option>
                                                                                    <option value="4339">Uttara Sector
                                                                                        18</option>
                                                                                    <option value="4340">Uttara Sector 2
                                                                                    </option>
                                                                                    <option value="4341">Uttara Sector 3
                                                                                    </option>
                                                                                    <option value="4342">Uttara Sector 4
                                                                                    </option>
                                                                                    <option value="4343">Uttara Sector 5
                                                                                    </option>
                                                                                    <option value="4344">Uttara Sector 6
                                                                                    </option>
                                                                                    <option value="4345">Uttara Sector 7
                                                                                    </option>
                                                                                    <option value="4346">Uttara Sector 8
                                                                                    </option>
                                                                                    <option value="4347">Uttara Sector 9
                                                                                    </option>
                                                                                    <option value="4348">Uttor Tolarbag
                                                                                    </option>
                                                                                    <option value="4349">V Aid</option>
                                                                                    <option value="4350">Wari TSO
                                                                                    </option>
                                                                                    <option value="4351">Zigatola Staff
                                                                                        Quarter</option>
                                                                                    <option value="4352">Zinzira
                                                                                        Keranigonj</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="col-sm-4 pl-control btn-form-control hidden">
                                                                            <div class="form-group"
                                                                                id="present_POLocation">
                                                                                <select aria-label="present post office"
                                                                                    class="form-control pofficecommon aria-disabled"
                                                                                    disabled="disabled"
                                                                                    id="present_p_office"
                                                                                    name="present_p_office">
                                                                                    <option value="-1" selected="">
                                                                                        Select P.O</option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group btn-form-control hidden">
                                                                    <input type="text"
                                                                        class="form-control aria-disabled"
                                                                        disabled="disabled" id="present_Village"
                                                                        name="present_Village"
                                                                        aria-label="present Village"
                                                                        value="New Market 1205 Katabon Rd, Dhaka 1205"
                                                                        placeholder="Type your House No/Road/Village"
                                                                        aria-describedby="txtpresnVillErrorMsg"
                                                                        maxlength="150">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="address-wrap permanent-address">
                                                                <div class="title-wrap">
                                                                    <span class="label">Permanent
                                                                        Address
                                                                    </span>
                                                                    <div class="checkbox btn-form-control hidden">
                                                                        <label><input type="checkbox"
                                                                                class="same-address aria-disabled"
                                                                                disabled="disabled" name="same_address"
                                                                                id="same_address">Same as Present
                                                                            Address</label>
                                                                    </div>
                                                                </div>
                                                                <div class="disable-area ">
                                                                    <div class="form-group">
                                                                        <div id="txtPermanentAdd" cols="30"
                                                                            class="height-2x address_Previous word-break-all text-tundora"
                                                                            style="margin-bottom: 5px;">Nefra
                                                                            khatalipara Satdargah Ulipur Kurigram,
                                                                            Ulipur, Ulipur, Kurigram 5620</div>
                                                                    </div>
                                                                    <div class="form-group btn-form-control hidden aria-disabled"
                                                                        disabled="disabled" id="pr_Option">
                                                                        <fieldset>
                                                                            <legend class="sr-only">Permanent Address
                                                                            </legend>
                                                                            <div id="txtPrmtErrorDiv"></div>
                                                                            <label class="radio-inline inside"><input
                                                                                    type="radio"
                                                                                    id="radiopermanentLocation1"
                                                                                    name="permanentLocation" value="0"
                                                                                    checked=""
                                                                                    aria-describedby="txtprmtLocErrorMsg">Inside
                                                                                Bangladesh</label>
                                                                            <label class="radio-inline outside"><input
                                                                                    type="radio"
                                                                                    id="radiopermanentLocation2"
                                                                                    name="permanentLocation" value="1"
                                                                                    class="outside">Outside
                                                                                Bangladesh</label>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="select-country hide hide"
                                                                        id="permanentCountryID">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group">
                                                                                    <select
                                                                                        aria-label="permanent country list"
                                                                                        class="form-control aria-disabled"
                                                                                        disabled="disabled"
                                                                                        id="permanent_country_list"
                                                                                        name="permanent_country_list"
                                                                                        aria-describedby="txtprmtContryErrorMsg">
                                                                                        <option value="-1" selected="">
                                                                                            Select Country</option>
                                                                                        <option value="101">Afghanistan
                                                                                        </option>
                                                                                        <option value="102">Albania
                                                                                        </option>
                                                                                        <option value="103">Algeria
                                                                                        </option>
                                                                                        <option value="104">American
                                                                                            Samoa</option>
                                                                                        <option value="105">Andorra
                                                                                        </option>
                                                                                        <option value="106">Angola
                                                                                        </option>
                                                                                        <option value="107">Anguilla
                                                                                        </option>
                                                                                        <option value="108">Antarctica
                                                                                        </option>
                                                                                        <option value="109">Antigua
                                                                                        </option>
                                                                                        <option value="110">Argentina
                                                                                        </option>
                                                                                        <option value="111">Armenia
                                                                                        </option>
                                                                                        <option value="112">Aruba
                                                                                        </option>
                                                                                        <option value="113">Australia
                                                                                        </option>
                                                                                        <option value="114">Austria
                                                                                        </option>
                                                                                        <option value="115">Azerbaijan
                                                                                        </option>
                                                                                        <option value="116">Bahamas
                                                                                        </option>
                                                                                        <option value="117">Bahrain
                                                                                        </option>
                                                                                        <option value="119">Barbados
                                                                                        </option>
                                                                                        <option value="120">Belarus
                                                                                        </option>
                                                                                        <option value="121">Belgium
                                                                                        </option>
                                                                                        <option value="122">Belize
                                                                                        </option>
                                                                                        <option value="123">Benin
                                                                                        </option>
                                                                                        <option value="124">Bermuda
                                                                                        </option>
                                                                                        <option value="125">Bhutan
                                                                                        </option>
                                                                                        <option value="126">Bolivia
                                                                                        </option>
                                                                                        <option value="127">Bosnia and
                                                                                            Herzegovina</option>
                                                                                        <option value="128">Botswana
                                                                                        </option>
                                                                                        <option value="129">Brazil
                                                                                        </option>
                                                                                        <option value="130">British
                                                                                            Virgin Islands</option>
                                                                                        <option value="131">Brunei
                                                                                        </option>
                                                                                        <option value="132">Bulgaria
                                                                                        </option>
                                                                                        <option value="133">Burkina Faso
                                                                                        </option>
                                                                                        <option value="135">Burundi
                                                                                        </option>
                                                                                        <option value="136">Cambodia
                                                                                        </option>
                                                                                        <option value="137">Cameroon
                                                                                        </option>
                                                                                        <option value="138">Canada
                                                                                        </option>
                                                                                        <option value="139">Cape Verde
                                                                                        </option>
                                                                                        <option value="140">Central
                                                                                            African Republic</option>
                                                                                        <option value="141">Chad
                                                                                        </option>
                                                                                        <option value="142">Chile
                                                                                        </option>
                                                                                        <option value="143">China
                                                                                        </option>
                                                                                        <option value="144">Colombia
                                                                                        </option>
                                                                                        <option value="145">Comoros
                                                                                        </option>
                                                                                        <option value="147">Congo
                                                                                        </option>
                                                                                        <option value="146">Congo
                                                                                            (Zaire)</option>
                                                                                        <option value="148">Cook Islands
                                                                                        </option>
                                                                                        <option value="149">Costa Rica
                                                                                        </option>
                                                                                        <option value="150">Cote
                                                                                            d'Ivoire (Ivory Coast)
                                                                                        </option>
                                                                                        <option value="151">Croatia
                                                                                        </option>
                                                                                        <option value="152">Cuba
                                                                                        </option>
                                                                                        <option value="153">Cyprus
                                                                                        </option>
                                                                                        <option value="154">Czech
                                                                                            Republic</option>
                                                                                        <option value="155">Denmark
                                                                                        </option>
                                                                                        <option value="156">Djibouti
                                                                                        </option>
                                                                                        <option value="157">Dominica
                                                                                        </option>
                                                                                        <option value="158">Dominican
                                                                                            Republic</option>
                                                                                        <option value="323">East Timor
                                                                                        </option>
                                                                                        <option value="159">Ecuador
                                                                                        </option>
                                                                                        <option value="160">Egypt
                                                                                        </option>
                                                                                        <option value="161">El Salvador
                                                                                        </option>
                                                                                        <option value="162">Equatorial
                                                                                            Guinea</option>
                                                                                        <option value="163">Eritrea
                                                                                        </option>
                                                                                        <option value="164">Estonia
                                                                                        </option>
                                                                                        <option value="165">Ethiopia
                                                                                        </option>
                                                                                        <option value="166">Falkland
                                                                                            Islands</option>
                                                                                        <option value="232">Federated
                                                                                            States of Micronesia
                                                                                        </option>
                                                                                        <option value="167">Fiji
                                                                                        </option>
                                                                                        <option value="168">Finland
                                                                                        </option>
                                                                                        <option value="169">France
                                                                                        </option>
                                                                                        <option value="170">French
                                                                                            Guiana</option>
                                                                                        <option value="171">French
                                                                                            Polynesia</option>
                                                                                        <option value="172">Gabon
                                                                                        </option>
                                                                                        <option value="174">Gaza Strip
                                                                                            and West Bank</option>
                                                                                        <option value="175">Georgia
                                                                                        </option>
                                                                                        <option value="176">Germany
                                                                                        </option>
                                                                                        <option value="177">Ghana
                                                                                        </option>
                                                                                        <option value="178">Gibraltar
                                                                                        </option>
                                                                                        <option value="179">Greece
                                                                                        </option>
                                                                                        <option value="180">Greenland
                                                                                        </option>
                                                                                        <option value="181">Grenada
                                                                                        </option>
                                                                                        <option value="182">Guadeloupe
                                                                                        </option>
                                                                                        <option value="183">Guam
                                                                                        </option>
                                                                                        <option value="184">Guatemala
                                                                                        </option>
                                                                                        <option value="185">Guinea
                                                                                        </option>
                                                                                        <option value="186">
                                                                                            Guinea-Bissau</option>
                                                                                        <option value="187">Guyana
                                                                                        </option>
                                                                                        <option value="188">Haiti
                                                                                        </option>
                                                                                        <option value="190">Honduras
                                                                                        </option>
                                                                                        <option value="191">Hong Kong
                                                                                        </option>
                                                                                        <option value="192">Hungary
                                                                                        </option>
                                                                                        <option value="193">Iceland
                                                                                        </option>
                                                                                        <option value="194">India
                                                                                        </option>
                                                                                        <option value="195">Indonesia
                                                                                        </option>
                                                                                        <option value="196">Iran
                                                                                        </option>
                                                                                        <option value="197">Iraq
                                                                                        </option>
                                                                                        <option value="198">Ireland
                                                                                        </option>
                                                                                        <option value="199">Israel
                                                                                        </option>
                                                                                        <option value="200">Italy
                                                                                        </option>
                                                                                        <option value="201">Jamaica
                                                                                        </option>
                                                                                        <option value="202">Japan
                                                                                        </option>
                                                                                        <option value="203">Jordan
                                                                                        </option>
                                                                                        <option value="204">Kazakhstan
                                                                                        </option>
                                                                                        <option value="205">Kenya
                                                                                        </option>
                                                                                        <option value="206">Kiribati
                                                                                        </option>
                                                                                        <option value="207">Kuwait
                                                                                        </option>
                                                                                        <option value="208">Kyrgyzstan
                                                                                        </option>
                                                                                        <option value="209">Laos
                                                                                        </option>
                                                                                        <option value="210">Latvia
                                                                                        </option>
                                                                                        <option value="211">Lebanon
                                                                                        </option>
                                                                                        <option value="212">Lesotho
                                                                                        </option>
                                                                                        <option value="213">Liberia
                                                                                        </option>
                                                                                        <option value="214">Libya
                                                                                        </option>
                                                                                        <option value="215">
                                                                                            Liechtenstein</option>
                                                                                        <option value="216">Lithuania
                                                                                        </option>
                                                                                        <option value="217">Luxembourg
                                                                                        </option>
                                                                                        <option value="218">Macau
                                                                                        </option>
                                                                                        <option value="219">Macedonia
                                                                                        </option>
                                                                                        <option value="220">Madagascar
                                                                                        </option>
                                                                                        <option value="221">Malawi
                                                                                        </option>
                                                                                        <option value="222">Malaysia
                                                                                        </option>
                                                                                        <option value="223">Maldives
                                                                                        </option>
                                                                                        <option value="224">Mali
                                                                                        </option>
                                                                                        <option value="225">Malta
                                                                                        </option>
                                                                                        <option value="226">Marshall
                                                                                            Islands</option>
                                                                                        <option value="227">Martinique
                                                                                        </option>
                                                                                        <option value="228">Mauritania
                                                                                        </option>
                                                                                        <option value="229">Mauritius
                                                                                        </option>
                                                                                        <option value="230">Mayotte
                                                                                        </option>
                                                                                        <option value="231">Mexico
                                                                                        </option>
                                                                                        <option value="233">Moldova
                                                                                        </option>
                                                                                        <option value="234">Monaco
                                                                                        </option>
                                                                                        <option value="235">Mongolia
                                                                                        </option>
                                                                                        <option value="325">Montenegro
                                                                                        </option>
                                                                                        <option value="236">Montserrat
                                                                                        </option>
                                                                                        <option value="237">Morocco
                                                                                        </option>
                                                                                        <option value="238">Mozambique
                                                                                        </option>
                                                                                        <option value="134">Myanmar
                                                                                        </option>
                                                                                        <option value="239">Namibia
                                                                                        </option>
                                                                                        <option value="240">Nauru
                                                                                        </option>
                                                                                        <option value="241">Nepal
                                                                                        </option>
                                                                                        <option value="242">Netherlands
                                                                                        </option>
                                                                                        <option value="243">Netherlands
                                                                                            Antilles</option>
                                                                                        <option value="244">New
                                                                                            Caledonia</option>
                                                                                        <option value="245">New Zealand
                                                                                        </option>
                                                                                        <option value="246">Nicaragua
                                                                                        </option>
                                                                                        <option value="247">Niger
                                                                                        </option>
                                                                                        <option value="248">Nigeria
                                                                                        </option>
                                                                                        <option value="249">North Korea
                                                                                        </option>
                                                                                        <option value="250">Northern
                                                                                            Mariana Islands</option>
                                                                                        <option value="251">Norway
                                                                                        </option>
                                                                                        <option value="252">Oman
                                                                                        </option>
                                                                                        <option value="253">Pakistan
                                                                                        </option>
                                                                                        <option value="254">Palau
                                                                                        </option>
                                                                                        <option value="255">Panama
                                                                                        </option>
                                                                                        <option value="256">Papua New
                                                                                            Guinea</option>
                                                                                        <option value="257">Paraguay
                                                                                        </option>
                                                                                        <option value="258">Peru
                                                                                        </option>
                                                                                        <option value="259">Philippines
                                                                                        </option>
                                                                                        <option value="260">Pitcairn
                                                                                            Islands</option>
                                                                                        <option value="261">Poland
                                                                                        </option>
                                                                                        <option value="262">Portugal
                                                                                        </option>
                                                                                        <option value="263">Puerto Rico
                                                                                        </option>
                                                                                        <option value="264">Qatar
                                                                                        </option>
                                                                                        <option value="327">Republic of
                                                                                            Kosovo</option>
                                                                                        <option value="265">Reunion
                                                                                        </option>
                                                                                        <option value="266">Romania
                                                                                        </option>
                                                                                        <option value="267">Russia
                                                                                        </option>
                                                                                        <option value="268">Rwanda
                                                                                        </option>
                                                                                        <option value="269">Saint Kitts
                                                                                            and Nevis</option>
                                                                                        <option value="270">Saint Lucia
                                                                                        </option>
                                                                                        <option value="271">Saint Pierre
                                                                                            and Miquelon</option>
                                                                                        <option value="272">Saint
                                                                                            Vincent and the Grenadines
                                                                                        </option>
                                                                                        <option value="273">Samoa
                                                                                        </option>
                                                                                        <option value="274">San Marino
                                                                                        </option>
                                                                                        <option value="275">Sao Tome and
                                                                                            Principe</option>
                                                                                        <option value="276">Saudi Arabia
                                                                                        </option>
                                                                                        <option value="277">Senegal
                                                                                        </option>
                                                                                        <option value="278">Serbia
                                                                                        </option>
                                                                                        <option value="279">Seychelles
                                                                                        </option>
                                                                                        <option value="280">Sierra Leone
                                                                                        </option>
                                                                                        <option value="281">Singapore
                                                                                        </option>
                                                                                        <option value="282">Slovakia
                                                                                        </option>
                                                                                        <option value="283">Slovenia
                                                                                        </option>
                                                                                        <option value="284">Solomon
                                                                                            Islands</option>
                                                                                        <option value="285">Somalia
                                                                                        </option>
                                                                                        <option value="286">South Africa
                                                                                        </option>
                                                                                        <option value="287">South Korea
                                                                                        </option>
                                                                                        <option value="324">South Sudan
                                                                                        </option>
                                                                                        <option value="288">Spain
                                                                                        </option>
                                                                                        <option value="289">Sri Lanka
                                                                                        </option>
                                                                                        <option value="290">Sudan
                                                                                        </option>
                                                                                        <option value="291">Suriname
                                                                                        </option>
                                                                                        <option value="292">Swaziland
                                                                                        </option>
                                                                                        <option value="293">Sweden
                                                                                        </option>
                                                                                        <option value="294">Switzerland
                                                                                        </option>
                                                                                        <option value="295">Syria
                                                                                        </option>
                                                                                        <option value="296">Taiwan
                                                                                        </option>
                                                                                        <option value="297">Tajikistan
                                                                                        </option>
                                                                                        <option value="298">Tanzania
                                                                                        </option>
                                                                                        <option value="299">Thailand
                                                                                        </option>
                                                                                        <option value="173">The Gambia
                                                                                        </option>
                                                                                        <option value="189">The Holy See
                                                                                        </option>
                                                                                        <option value="300">Togo
                                                                                        </option>
                                                                                        <option value="301">Tonga
                                                                                        </option>
                                                                                        <option value="302">Trinidad and
                                                                                            Tobago</option>
                                                                                        <option value="303">Tunisia
                                                                                        </option>
                                                                                        <option value="304">Turkey
                                                                                        </option>
                                                                                        <option value="305">Turkmenistan
                                                                                        </option>
                                                                                        <option value="306">Turks and
                                                                                            Caicos Islands</option>
                                                                                        <option value="307">Tuvalu
                                                                                        </option>
                                                                                        <option value="308">Uganda
                                                                                        </option>
                                                                                        <option value="309">Ukraine
                                                                                        </option>
                                                                                        <option value="310">United Arab
                                                                                            Emirates</option>
                                                                                        <option value="311">United
                                                                                            Kingdom</option>
                                                                                        <option value="312">United
                                                                                            States</option>
                                                                                        <option value="313">United
                                                                                            States Virgin Islands
                                                                                        </option>
                                                                                        <option value="314">Uruguay
                                                                                        </option>
                                                                                        <option value="315">Uzbekistan
                                                                                        </option>
                                                                                        <option value="316">Vanuatu
                                                                                        </option>
                                                                                        <option value="317">Venezuela
                                                                                        </option>
                                                                                        <option value="318">Vietnam
                                                                                        </option>
                                                                                        <option value="319">West Bank
                                                                                            and Gaza Strip</option>
                                                                                        <option value="320">Western
                                                                                            Sahara</option>
                                                                                        <option value="321">Yemen
                                                                                        </option>
                                                                                        <option value="322">Zambia
                                                                                        </option>
                                                                                        <option value="326">Zimbabwe
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="select-wrap ">
                                                                        <div class="row">
                                                                            <div
                                                                                class="col-sm-4 pr-control btn-form-control hidden">
                                                                                <div class="form-group">
                                                                                    <select
                                                                                        aria-label="permanent district"
                                                                                        class="form-control aria-disabled"
                                                                                        disabled="disabled"
                                                                                        id="permanent_district"
                                                                                        name="permanent_district"
                                                                                        onchange="GetLoadLocations(0,'permanent','EN','addressForm');"
                                                                                        aria-describedby="txtprmtDistrictErrorMsg">
                                                                                        <option value="-1" selected="">
                                                                                            Select District</option>
                                                                                        <option value="1">Brahmanbaria
                                                                                        </option>
                                                                                        <option value="2">Bagerhat
                                                                                        </option>
                                                                                        <option value="3">Bandarban
                                                                                        </option>
                                                                                        <option value="4">Barishal
                                                                                        </option>
                                                                                        <option value="5">Bhola</option>
                                                                                        <option value="6">Bogura
                                                                                        </option>
                                                                                        <option value="7">Barguna
                                                                                        </option>
                                                                                        <option value="8">Chandpur
                                                                                        </option>
                                                                                        <option value="9">
                                                                                            Chapainawabganj</option>
                                                                                        <option value="10">Chattogram
                                                                                        </option>
                                                                                        <option value="11">Chuadanga
                                                                                        </option>
                                                                                        <option value="12">Cumilla
                                                                                        </option>
                                                                                        <option value="13">Cox's Bazar
                                                                                        </option>
                                                                                        <option value="14">Dhaka
                                                                                        </option>
                                                                                        <option value="15">Dinajpur
                                                                                        </option>
                                                                                        <option value="16">Faridpur
                                                                                        </option>
                                                                                        <option value="17">Feni</option>
                                                                                        <option value="18">Gaibandha
                                                                                        </option>
                                                                                        <option value="19">Gazipur
                                                                                        </option>
                                                                                        <option value="20">Gopalganj
                                                                                        </option>
                                                                                        <option value="21">Habiganj
                                                                                        </option>
                                                                                        <option value="22">Jamalpur
                                                                                        </option>
                                                                                        <option value="23">Jashore
                                                                                        </option>
                                                                                        <option value="24">Jhalakathi
                                                                                        </option>
                                                                                        <option value="25">Jhenaidah
                                                                                        </option>
                                                                                        <option value="26">Joypurhat
                                                                                        </option>
                                                                                        <option value="27">Khagrachhari
                                                                                        </option>
                                                                                        <option value="28">Khulna
                                                                                        </option>
                                                                                        <option value="29">Kishoreganj
                                                                                        </option>
                                                                                        <option value="30" selected="">
                                                                                            Kurigram</option>
                                                                                        <option value="31">Kushtia
                                                                                        </option>
                                                                                        <option value="32">Lalmonirhat
                                                                                        </option>
                                                                                        <option value="33">Laksmipur
                                                                                        </option>
                                                                                        <option value="34">Madaripur
                                                                                        </option>
                                                                                        <option value="35">Magura
                                                                                        </option>
                                                                                        <option value="36">Manikganj
                                                                                        </option>
                                                                                        <option value="37">Meherpur
                                                                                        </option>
                                                                                        <option value="38">Moulvibazar
                                                                                        </option>
                                                                                        <option value="39">Munshiganj
                                                                                        </option>
                                                                                        <option value="40">Mymensingh
                                                                                        </option>
                                                                                        <option value="41">Naogaon
                                                                                        </option>
                                                                                        <option value="42">Narail
                                                                                        </option>
                                                                                        <option value="43">Narayanganj
                                                                                        </option>
                                                                                        <option value="44">Narsingdi
                                                                                        </option>
                                                                                        <option value="45">Natore
                                                                                        </option>
                                                                                        <option value="46">Netrokona
                                                                                        </option>
                                                                                        <option value="47">Nilphamari
                                                                                        </option>
                                                                                        <option value="48">Noakhali
                                                                                        </option>
                                                                                        <option value="49">Pabna
                                                                                        </option>
                                                                                        <option value="50">Panchagarh
                                                                                        </option>
                                                                                        <option value="51">Patuakhali
                                                                                        </option>
                                                                                        <option value="52">Pirojpur
                                                                                        </option>
                                                                                        <option value="53">Rajbari
                                                                                        </option>
                                                                                        <option value="54">Rajshahi
                                                                                        </option>
                                                                                        <option value="55">Rangamati
                                                                                        </option>
                                                                                        <option value="56">Rangpur
                                                                                        </option>
                                                                                        <option value="57">Satkhira
                                                                                        </option>
                                                                                        <option value="58">Shariatpur
                                                                                        </option>
                                                                                        <option value="59">Sherpur
                                                                                        </option>
                                                                                        <option value="60">Sirajganj
                                                                                        </option>
                                                                                        <option value="61">Sunamganj
                                                                                        </option>
                                                                                        <option value="62">Sylhet
                                                                                        </option>
                                                                                        <option value="63">Tangail
                                                                                        </option>
                                                                                        <option value="64">Thakurgaon
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-sm-4 p-control btn-form-control hidden">
                                                                                <div class="form-group"
                                                                                    id="permanent_thanaLocation">
                                                                                    <select aria-label="permanent thana"
                                                                                        class="form-control thanacommon aria-disabled"
                                                                                        disabled="disabled"
                                                                                        id="permanent_thana"
                                                                                        name="permanent_thana"
                                                                                        onchange="GetLoadLocations(1,'permanent','EN','addressForm');"
                                                                                        aria-describedby="permanenttxtThanaErrorMsg">
                                                                                        <option value="-1" selected="">
                                                                                            Select Thana</option>
                                                                                        <option value="1176">
                                                                                            Bhurungamari</option>
                                                                                        <option value="1202">Char
                                                                                            Rajibpur</option>
                                                                                        <option value="1212">Chilmari
                                                                                        </option>
                                                                                        <option value="1390">Kurigram
                                                                                            Sadar</option>
                                                                                        <option value="1462">Nageshwari
                                                                                        </option>
                                                                                        <option value="1514">Phulbari
                                                                                        </option>
                                                                                        <option value="1529">Rajarhat
                                                                                        </option>
                                                                                        <option value="1548">Roumari
                                                                                        </option>
                                                                                        <option value="1642"
                                                                                            selected="">Ulipur</option>
                                                                                        <option value="1741">Dusmara
                                                                                        </option>
                                                                                        <option value="1742">Kachakata
                                                                                        </option>
                                                                                        <option value="1766">Rajibpur
                                                                                        </option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-sm-4 pl-control btn-form-control hidden">
                                                                                <div class="form-group"
                                                                                    id="permanent_POLocation">
                                                                                    <select
                                                                                        aria-label="parmanet post office"
                                                                                        class="form-control pofficecommon aria-disabled"
                                                                                        disabled="disabled"
                                                                                        id="permanent_p_office"
                                                                                        name="permanent_p_office">
                                                                                        <option value="-1" selected="">
                                                                                            Select P.O</option>
                                                                                        <option value="2851">Bazarhat
                                                                                        </option>
                                                                                        <option value="2852"
                                                                                            selected="">Ulipur</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group btn-form-control hidden">
                                                                        <input aria-label="parmanent village"
                                                                            type="text"
                                                                            class="form-control aria-disabled"
                                                                            disabled="disabled" id="permanent_Village"
                                                                            name="permanent_Village"
                                                                            value="Nefra khatalipara Satdargah Ulipur Kurigram"
                                                                            placeholder="Type your House No/Road/Village"
                                                                            aria-describedby="txtprmtVillErrorMsg"
                                                                            maxlength="150">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" name="present_adrsID" value="4919873">
                                                            <input type="hidden" name="permanent_adrsID"
                                                                value="4919873">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="btn-form-control hidden">
                                                                <a href="javascript:void(0)"
                                                                    aria-label="CLick to save address information "
                                                                    class="btn btn-primary save" id="addressSaveBtn"
                                                                    onclick="commonUpdate('step_01_update_adrs.asp','addressForm','adrs_0','EN');">Save</a>
                                                                <a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp"
                                                                    aira-levl="Click close to go back to edit resume without saving"
                                                                    id="addressCloseBtn"
                                                                    class="btn btn-default btn-cancel reset">Close</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h2 class="panel-title">
                                                <button class="btn collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="indicator icon-angle-down"></i>&nbsp;Career and
                                                    Application Information
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingThree" aria-expanded="false">
                                            <div class="panel-body">
                                                <div class="all-info cai_0">
                                                    <div class="sub-header">
                                                        <div id="alertDiv_cai"></div>
                                                        <div class="edit-tools">
                                                            <button class="btn edit-btn"
                                                                aria-label="Click on Edit to fill up career and application information"><i
                                                                    class="icon-pencil-o"></i>&nbsp;Edit</button>
                                                        </div>
                                                    </div>
                                                    <form class="row view-mode" id="caiForm">

                                                        <div class="col-md-12 form-group">
                                                            <label for="txtObjective">Objective<abbr title="Required"
                                                                    class="required"></abbr>
                                                                <button type="button"
                                                                    class="btn sub-popover btn-form-control hidden aria-disabled"
                                                                    disabled="disabled" data-trigger="focus hover"
                                                                    data-container="body" data-toggle="popover"
                                                                    aria-label="What is objective?" data-placement="top"
                                                                    data-original-title="What is objective?"
                                                                    data-content="A resume objective is a short summary of your career growth. Objective should be carefully written to fit the job you are  applying for.">
                                                                    <span class="icon-question"></span>
                                                                </button>

                                                                <span class="help-block"
                                                                    id="txtObjectiveErrorMsg"></span>
                                                            </label>
                                                            <textarea name="txtObjective" id="txtObjective" cols="10"
                                                                rows="3"
                                                                onkeyup="countLetterV1(this.id , 250 , 'CADD_sp' , 'Objective' , 1)"
                                                                class="form-control height-2x aria-disabled"
                                                                disabled="disabled">As a Web Developer &amp; Software Engineer</textarea>
                                                            <span id="CADD_sp"
                                                                class="btn-form-control hidden aria-disabled"
                                                                disabled="disabled" name="CADD_sp"></span>
                                                            <div class="example-area m-t-10 btn-form-control hidden">
                                                                <label>View Example
                                                                    <button type="button"
                                                                        class="btn sub-popover btn-form-control"
                                                                        data-trigger="focus hover" data-container="body"
                                                                        data-toggle="popover" data-placement="top"
                                                                        aria-label="Objective Example"
                                                                        data-original-title="Objective Example"
                                                                        data-html="true"
                                                                        data-content="<div><h2>Good Example</h2>
                                        <p>To secure a position with a well-established organization with a stable environment that will lead to a lasting relationship in the field of HealthCare. To obtain a position that will enable the use of my strong organizational skills, Microsoft expertise, and ability to work well with people.<br/></p><h2>Bad Example</h2>
                                        <p> My objective is to deliver my best to satisfy my clients. I am dedicated and hard working. I will be very much active to meet the deadlines of your company.</p></div>">
                                                                        <span class="icon-question"></span>

                                                                    </button></label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6 form-group">
                                                                    <label for="txtPresentSalary">Present Salary
                                                                        <span class="help-block"
                                                                            id="txtPrsnSalaryErrorMsg"></span>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control aria-disabled"
                                                                        disabled="disabled" placeholder="" value="22000"
                                                                        name="txtPresentSalary" id="txtPresentSalary"
                                                                        onblur="extractNumber(this,0,false)"
                                                                        onkeypress="return blockNonNumbers(this, event, false, false);"
                                                                        onkeyup="extractNumber(this,0,false)"
                                                                        maxlength="10">
                                                                    <input type="hidden" value="22000"
                                                                        name="hPrePresentSalary" id="hPrePresentSalary">
                                                                    <span class="input-note btn-form-control hidden">TK/
                                                                        Month</span>
                                                                </div>
                                                                <div class="col-md-6 form-group">
                                                                    <label for="txtExpectedSalary">Expected Salary
                                                                        <span class="help-block"
                                                                            id="txtExpectedSalaryErrorMsg"></span>
                                                                    </label>
                                                                    <input type="text"
                                                                        class="form-control aria-disabled"
                                                                        disabled="disabled" placeholder="" value="30000"
                                                                        name="txtExpectedSalary" id="txtExpectedSalary"
                                                                        onblur="extractNumber(this,0,false)"
                                                                        onkeypress="return blockNonNumbers(this, event, false, false);"
                                                                        onkeyup="extractNumber(this,0,false)"
                                                                        maxlength="10">
                                                                    <span class="input-note btn-form-control hidden">TK/
                                                                        Month</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-6 form-group">
                                                                    <label for="lookForView">Looking for (Job
                                                                        Level)</label>

                                                                    <input
                                                                        class="form-control onclick-hidden aria-disabled"
                                                                        disabled="disabled" placeholder=""
                                                                        id="lookForView" value="Mid Level job"
                                                                        type="text">

                                                                    <div class="btn-form-control hidden">
                                                                        <fieldset>
                                                                            <legend class="sr-only">Looking for (Job
                                                                                Level)</legend>
                                                                            <label aria-label="entry level"
                                                                                class="radio-inline">
                                                                                <input type="radio" name="optLevel"
                                                                                    id="levelRadio" value="Entry"> Entry
                                                                                Level
                                                                            </label>
                                                                            <label aria-label="mid level"
                                                                                class="radio-inline">
                                                                                <input type="radio" name="optLevel"
                                                                                    id="levelRadio" value="Mid"
                                                                                    checked="checked"> Mid Level
                                                                            </label>

                                                                            <label aria-label="top level"
                                                                                class="radio-inline">
                                                                                <input type="radio" name="optLevel"
                                                                                    id="levelRadio" value="Top"> Top
                                                                                Level
                                                                            </label>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6 form-group">
                                                                    <label for="" id="availForInfo">Available for (Job
                                                                        Nature)</label>

                                                                    <input
                                                                        class="form-control onclick-hidden aria-disabled"
                                                                        disabled="disabled" placeholder=""
                                                                        aria-label="Available For" value="Full Time"
                                                                        type="text" id="availView">

                                                                    <div class="btn-form-control hidden">
                                                                        <div>
                                                                            <fieldset>
                                                                                <legend class="sr-only">Available for
                                                                                    (Job Nature)</legend>
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="optAvail"
                                                                                        id="avaiRadio"
                                                                                        aria-describedby="availForInfo"
                                                                                        value="Full Time"
                                                                                        checked="checked"> Full time
                                                                                </label>
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="optAvail"
                                                                                        id="avaiRadio"
                                                                                        aria-describedby="availForInfo"
                                                                                        value="Part Time"> Part time
                                                                                </label>
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="optAvail"
                                                                                        id="avaiRadio"
                                                                                        aria-describedby="availForInfo"
                                                                                        value="Contract"> Contract
                                                                                </label>
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="optAvail"
                                                                                        id="avaiRadio"
                                                                                        aria-describedby="availForInfo"
                                                                                        value="Internship"> Internship
                                                                                </label>
                                                                                <label class="radio-inline">
                                                                                    <input type="radio" name="optAvail"
                                                                                        id="avaiRadio"
                                                                                        aria-describedby="availForInfo"
                                                                                        value="Freelance"> Freelance
                                                                                </label>
                                                                            </fieldset>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="btn-form-control hidden">
                                                                <a href="javascript:void(0)"
                                                                    aria-label="CLick to save information Application Information"
                                                                    class="btn btn-primary save"
                                                                    onclick="cnahgeValueCai();commonUpdate('step_01_update_cai.asp','caiForm','cai_0','EN');">Save</a>
                                                                <a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp"
                                                                    aria-label="Click close to go back to edit resume without saving"
                                                                    class="btn btn-default btn-cancel reset">Close</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end career application information -->
                                    <!-- start prefferred areas -->
                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h2 class="panel-title">
                                                <button class="btn collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" data-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    <i class="indicator icon-angle-down"></i>&nbsp;Preferred Areas
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingFour" aria-expanded="false">
                                            <div class="panel-body">
                                                <div class="all-info jclo_0">
                                                    <div class="sub-header">
                                                        <div id="alertDiv_jclo"></div>
                                                        <!--<h4>Prefered area information</h4>-->
                                                        <div class="edit-tools">
                                                            <button class="btn edit-btn"
                                                                aria-label="Click on Edit to fill up preferred areas information"><i
                                                                    class="icon-pencil-o"></i>&nbsp;Edit</button>

                                                        </div>
                                                    </div>
                                                    <form class="row view-mode" id="jcloForm">

                                                        <div class="form-group col-md-12" tabindex="0">
                                                            <label aria-label="Preferred Job Categories">Preferred Job
                                                                Categories
                                                                <span class="sr-only">required</span>
                                                                <abbr title="Required" class="required"></abbr>
                                                                <span class="help-block"
                                                                    id="txtPrfJobCatErrorMsg"></span>
                                                            </label>
                                                            <span
                                                                class="input-note m-b-10 btn-form-control hidden">Preferred
                                                                job categories represents your desired sector(s) to work
                                                                <em><b>(at least 1 category any of
                                                                        section)</b></em></span>

                                                            <div class="row">
                                                                <div class="col-md-6 clearfix">

                                                                    <label aria-label="max(3)">Functional&nbsp;<em
                                                                            class="btn-form-control hidden">(max
                                                                            3)</em></label>

                                                                    <div
                                                                        class="checkbox-container btn-form-control hidden">
                                                                        <fieldset>
                                                                            <legend class="sr-only">Functional (max 3)
                                                                            </legend>
                                                                            <div id="item0" class="items_left"><label
                                                                                    id="lebel0"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="1"
                                                                                        id="1cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(1,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat1"
                                                                                        class="industry_lebel">Accounting/Finance</span></label>
                                                                            </div>
                                                                            <div id="item1" class="items_left"><label
                                                                                    id="lebel1"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="2"
                                                                                        id="2cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(2,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat2"
                                                                                        class="industry_lebel">Bank/Non-Bank
                                                                                        Fin. Institution</span></label>
                                                                            </div>
                                                                            <div id="item2" class="items_left"><label
                                                                                    id="lebel2"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="3"
                                                                                        id="3cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(3,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat3"
                                                                                        class="industry_lebel">Supply
                                                                                        Chain/Procurement</span></label>
                                                                            </div>
                                                                            <div id="item3" class="items_left"><label
                                                                                    id="lebel3"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="4"
                                                                                        id="4cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(4,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat4"
                                                                                        class="industry_lebel">Education/Training</span></label>
                                                                            </div>
                                                                            <div id="item4" class="items_left"><label
                                                                                    id="lebel4"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="5"
                                                                                        id="5cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(5,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat5"
                                                                                        class="industry_lebel">Engineer/Architect</span></label>
                                                                            </div>
                                                                            <div id="item5" class="items_left"><label
                                                                                    id="lebel5"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="6"
                                                                                        id="6cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(6,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat6"
                                                                                        class="industry_lebel">Garments/
                                                                                        Textile</span></label></div>
                                                                            <div id="item6" class="items_left"><label
                                                                                    id="lebel6"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="7"
                                                                                        id="7cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(7,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat7"
                                                                                        class="industry_lebel">General
                                                                                        Management/Admin</span></label>
                                                                            </div>
                                                                            <div id="item7" class="items_left"><label
                                                                                    id="lebel7"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="8"
                                                                                        id="8cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(8,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat8"
                                                                                        class="industry_lebel">IT/Telecommunication</span></label>
                                                                            </div>
                                                                            <div id="item8" class="items_left"><label
                                                                                    id="lebel8"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="9"
                                                                                        id="9cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(9,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat9"
                                                                                        class="industry_lebel">Marketing/Sales</span></label>
                                                                            </div>
                                                                            <div id="item9" class="items_left"><label
                                                                                    id="lebel9"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="10"
                                                                                        id="10cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(10,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat10"
                                                                                        class="industry_lebel">Media/Advertisement/Event
                                                                                        Mgt.</span></label></div>
                                                                            <div id="item10" class="items_left"><label
                                                                                    id="lebel10"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="11"
                                                                                        id="11cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(11,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat11"
                                                                                        class="industry_lebel">Medical/Pharma</span></label>
                                                                            </div>
                                                                            <div id="item11" class="items_left"><label
                                                                                    id="lebel11"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="12"
                                                                                        id="12cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(12,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat12"
                                                                                        class="industry_lebel">NGO/Development</span></label>
                                                                            </div>
                                                                            <div id="item12" class="items_left"><label
                                                                                    id="lebel12"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="13"
                                                                                        id="13cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(13,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat13"
                                                                                        class="industry_lebel">Research/Consultancy</span></label>
                                                                            </div>
                                                                            <div id="item13" class="items_left"><label
                                                                                    id="lebel13"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="14"
                                                                                        id="14cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(14,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat14"
                                                                                        class="industry_lebel">Receptionist/
                                                                                        PS</span></label></div>
                                                                            <div id="item14" class="items_left"><label
                                                                                    id="lebel14"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="15"
                                                                                        id="15cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(15,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat15"
                                                                                        class="industry_lebel">Data
                                                                                        Entry/Operator/BPO</span></label>
                                                                            </div>
                                                                            <div id="item15" class="items_left"><label
                                                                                    id="lebel15"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="16"
                                                                                        id="16cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(16,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat16"
                                                                                        class="industry_lebel">Customer
                                                                                        Service/Call
                                                                                        Centre</span></label></div>
                                                                            <div id="item16" class="items_left"><label
                                                                                    id="lebel16"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="17"
                                                                                        id="17cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(17,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat17"
                                                                                        class="industry_lebel">HR/Org.
                                                                                        Development</span></label></div>
                                                                            <div id="item17" class="items_left"><label
                                                                                    id="lebel17"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="18"
                                                                                        id="18cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(18,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat18"
                                                                                        class="industry_lebel">Design/Creative</span></label>
                                                                            </div>
                                                                            <div id="item18" class="items_left"><label
                                                                                    id="lebel18"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="19"
                                                                                        id="19cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(19,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat19"
                                                                                        class="industry_lebel">Production/Operation</span></label>
                                                                            </div>
                                                                            <div id="item19" class="items_left"><label
                                                                                    id="lebel19"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="20"
                                                                                        id="20cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(20,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat20"
                                                                                        class="industry_lebel">Hospitality/
                                                                                        Travel/ Tourism</span></label>
                                                                            </div>
                                                                            <div id="item20" class="items_left"><label
                                                                                    id="lebel20"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="21"
                                                                                        id="21cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(21,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat21"
                                                                                        class="industry_lebel">Beauty
                                                                                        Care/ Health &amp;
                                                                                        Fitness</span></label></div>
                                                                            <div id="item21" class="items_left"><label
                                                                                    id="lebel21"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="22"
                                                                                        id="22cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(22,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat22"
                                                                                        class="industry_lebel">Law/
                                                                                        Legal</span></label></div>
                                                                            <div id="item22" class="items_left"><label
                                                                                    id="lebel22"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="23"
                                                                                        id="23cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(23,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat23"
                                                                                        class="industry_lebel">Electrician/
                                                                                        Construction/
                                                                                        Repair</span></label></div>
                                                                            <div id="item23" class="items_left"><label
                                                                                    id="lebel23"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="24"
                                                                                        id="24cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(24,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat24"
                                                                                        class="industry_lebel">Security/Support
                                                                                        Service</span></label></div>
                                                                            <div id="item24" class="items_left"><label
                                                                                    id="lebel24"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="25"
                                                                                        id="25cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(25,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat25"
                                                                                        class="industry_lebel">Driving/Motor
                                                                                        Technician</span></label></div>
                                                                            <div id="item25" class="items_left"><label
                                                                                    id="lebel25"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="26"
                                                                                        id="26cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(26,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat26"
                                                                                        class="industry_lebel">Agro
                                                                                        (Plant/Animal/Fisheries)</span></label>
                                                                            </div>
                                                                            <div id="item26" class="items_left"><label
                                                                                    id="lebel26"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="27"
                                                                                        id="27cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(27,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat27"
                                                                                        class="industry_lebel">Commercial</span></label>
                                                                            </div>
                                                                            <div id="item27" class="items_left"><label
                                                                                    id="lebel27"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="28"
                                                                                        id="28cat" name="chkBolckCM"
                                                                                        onclick="getChkValue(28,'selected_Cat','FilterCat',3,'hidCountCat','cat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="Valuecat28"
                                                                                        class="industry_lebel">Company
                                                                                        Secretary/Regulatory
                                                                                        affairs</span></label></div>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="chips-container" id="FilterCat">

                                                                        <div id="catDIV2" class="well well-sm">
                                                                            <span>Bank/Non-Bank Fin.
                                                                                Institution</span><a class="btn"
                                                                                aria-label="Remove Bank/Non-Bank Fin. Institution"
                                                                                href="javascript:removeDiv(2,0,'selected_Cat','hidCountCat','cat');">&nbsp;<i
                                                                                    class="icon-times-o"></i></a><input
                                                                                type="hidden" id="Hidcat0"
                                                                                name="Hidcat0" value="2"></div>
                                                                        <div id="catDIV5" class="well well-sm">
                                                                            <span>Engineer/Architect</span><a
                                                                                class="btn"
                                                                                aria-label="Remove Engineer/Architect"
                                                                                href="javascript:removeDiv(5,0,'selected_Cat','hidCountCat','cat');">&nbsp;<i
                                                                                    class="icon-times-o"></i></a><input
                                                                                type="hidden" id="Hidcat1"
                                                                                name="Hidcat1" value="5"></div>
                                                                        <div id="catDIV8" class="well well-sm">
                                                                            <span>IT/Telecommunication</span><a
                                                                                class="btn"
                                                                                aria-label="Remove IT/Telecommunication"
                                                                                href="javascript:removeDiv(8,0,'selected_Cat','hidCountCat','cat');">&nbsp;<i
                                                                                    class="icon-times-o"></i></a><input
                                                                                type="hidden" id="Hidcat2"
                                                                                name="Hidcat2" value="8"></div><input
                                                                            type="hidden" id="hidCountCat"
                                                                            name="hidCountCat" value="3">

                                                                    </div>
                                                                    <input name="selected_Cat" type="hidden"
                                                                        id="selected_Cat" value=",2,5,8,">
                                                                    <input name="hOption" type="hidden" id="hOption"
                                                                        value="1">
                                                                    <input type="hidden" id="hidChar" name="hidChar">
                                                                    <input type="hidden" id="hidACCat" name="hidACCat"
                                                                        value="5">

                                                                </div>
                                                                <div class="col-md-6 clearfix">

                                                                    <label aria-label="Special Skills">Special
                                                                        Skills&nbsp;<em
                                                                            class="btn-form-control hidden">(max
                                                                            3)</em></label>
                                                                    <div
                                                                        class="checkbox-container btn-form-control hidden">
                                                                        <fieldset>
                                                                            <legend class="sr-only">Special Skills (max
                                                                                3)</legend>
                                                                            <div id="item0" class="items_left"><label
                                                                                    id="lebel0"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="79"
                                                                                        id="79BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(79,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat79"
                                                                                        class="industry_lebel">পিয়ন</span></label>
                                                                            </div>
                                                                            <div id="item1" class="items_left"><label
                                                                                    id="lebel1"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="80"
                                                                                        id="80BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(80,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat80"
                                                                                        class="industry_lebel">ক্লিনার</span></label>
                                                                            </div>
                                                                            <div id="item2" class="items_left"><label
                                                                                    id="lebel2"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="81"
                                                                                        id="81BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(81,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat81"
                                                                                        class="industry_lebel">মালী</span></label>
                                                                            </div>
                                                                            <div id="item3" class="items_left"><label
                                                                                    id="lebel3"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="78"
                                                                                        id="78BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(78,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat78"
                                                                                        class="industry_lebel">গার্মেন্টস
                                                                                        টেকনিশিয়ান / মেশিন
                                                                                        অপারেটর</span></label></div>
                                                                            <div id="item4" class="items_left"><label
                                                                                    id="lebel4"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="82"
                                                                                        id="82BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(82,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat82"
                                                                                        class="industry_lebel">কার্পেন্টার</span></label>
                                                                            </div>
                                                                            <div id="item5" class="items_left"><label
                                                                                    id="lebel5"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="83"
                                                                                        id="83BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(83,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat83"
                                                                                        class="industry_lebel">শো-রুম
                                                                                        সহকারি/সেলসম্যান</span></label>
                                                                            </div>
                                                                            <div id="item6" class="items_left"><label
                                                                                    id="lebel6"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="84"
                                                                                        id="84BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(84,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat84"
                                                                                        class="industry_lebel">সেলস
                                                                                        রিপ্রেজেন্টেটিভ/ বিক্রয়
                                                                                        প্রতিনিধি</span></label></div>
                                                                            <div id="item7" class="items_left"><label
                                                                                    id="lebel7"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="85"
                                                                                        id="85BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(85,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat85"
                                                                                        class="industry_lebel">ইমাম/
                                                                                        খতিব/ মুয়াজ্জিন</span></label>
                                                                            </div>
                                                                            <div id="item8" class="items_left"><label
                                                                                    id="lebel8"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="86"
                                                                                        id="86BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(86,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat86"
                                                                                        class="industry_lebel">জিম/
                                                                                        ফিটনেস ট্রেইনার</span></label>
                                                                            </div>
                                                                            <div id="item9" class="items_left"><label
                                                                                    id="lebel9"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="87"
                                                                                        id="87BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(87,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat87"
                                                                                        class="industry_lebel">ইন্টারপ্রিটার/
                                                                                        দোভাষী</span></label></div>
                                                                            <div id="item10" class="items_left"><label
                                                                                    id="lebel10"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="88"
                                                                                        id="88BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(88,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat88"
                                                                                        class="industry_lebel">বিউটিশিয়ান/
                                                                                        সেলুন</span></label></div>
                                                                            <div id="item11" class="items_left"><label
                                                                                    id="lebel11"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="89"
                                                                                        id="89BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(89,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat89"
                                                                                        class="industry_lebel">ফায়ার
                                                                                        সেফটি/
                                                                                        ফায়ারফাইটার</span></label></div>
                                                                            <div id="item12" class="items_left"><label
                                                                                    id="lebel12"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="90"
                                                                                        id="90BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(90,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat90"
                                                                                        class="industry_lebel">বয়লার
                                                                                        অপারেটর</span></label></div>
                                                                            <div id="item13" class="items_left"><label
                                                                                    id="lebel13"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="91"
                                                                                        id="91BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(91,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat91"
                                                                                        class="industry_lebel">কেয়ারগিভার/ন্যানী</span></label>
                                                                            </div>
                                                                            <div id="item14" class="items_left"><label
                                                                                    id="lebel14"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="61"
                                                                                        id="61BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(61,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat61"
                                                                                        class="industry_lebel">ডাটা
                                                                                        এন্ট্রি/ কম্পিউটার
                                                                                        অপারেটর</span></label></div>
                                                                            <div id="item15" class="items_left"><label
                                                                                    id="lebel15"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="62"
                                                                                        id="62BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(62,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat62"
                                                                                        class="industry_lebel">মেকানিক/
                                                                                        টেকনিশিয়ান</span></label></div>
                                                                            <div id="item16" class="items_left"><label
                                                                                    id="lebel16"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="63"
                                                                                        id="63BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(63,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat63"
                                                                                        class="industry_lebel">নার্স</span></label>
                                                                            </div>
                                                                            <div id="item17" class="items_left"><label
                                                                                    id="lebel17"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="64"
                                                                                        id="64BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(64,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat64"
                                                                                        class="industry_lebel">ওয়েটার /
                                                                                        ওয়েট্রেস</span></label></div>
                                                                            <div id="item18" class="items_left"><label
                                                                                    id="lebel18"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="65"
                                                                                        id="65BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(65,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat65"
                                                                                        class="industry_lebel">প্যাথলজিষ্ট/ল্যাব
                                                                                        সহকারী</span></label></div>
                                                                            <div id="item19" class="items_left"><label
                                                                                    id="lebel19"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="66"
                                                                                        id="66BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(66,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat66"
                                                                                        class="industry_lebel">ইলেকট্রিশিয়ান/ইলেকট্রনিকস্
                                                                                        টেকনিশিয়ান</span></label></div>
                                                                            <div id="item20" class="items_left"><label
                                                                                    id="lebel20"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="67"
                                                                                        id="67BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(67,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat67"
                                                                                        class="industry_lebel">ড্রাইভার</span></label>
                                                                            </div>
                                                                            <div id="item21" class="items_left"><label
                                                                                    id="lebel21"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="68"
                                                                                        id="68BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(68,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat68"
                                                                                        class="industry_lebel">শেফ/বাবুর্চী</span></label>
                                                                            </div>
                                                                            <div id="item22" class="items_left"><label
                                                                                    id="lebel22"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="69"
                                                                                        id="69BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(69,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat69"
                                                                                        class="industry_lebel">হাউজকিপার</span></label>
                                                                            </div>
                                                                            <div id="item23" class="items_left"><label
                                                                                    id="lebel23"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="70"
                                                                                        id="70BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(70,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat70"
                                                                                        class="industry_lebel">সিকিউরিটি
                                                                                        গার্ড</span></label></div>
                                                                            <div id="item24" class="items_left"><label
                                                                                    id="lebel24"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="71"
                                                                                        id="71BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(71,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat71"
                                                                                        class="industry_lebel">গ্রাফিক
                                                                                        ডিজাইনার</span></label></div>
                                                                            <div id="item25" class="items_left"><label
                                                                                    id="lebel25"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="72"
                                                                                        id="72BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(72,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat72"
                                                                                        class="industry_lebel">ওয়েল্ডার</span></label>
                                                                            </div>
                                                                            <div id="item26" class="items_left"><label
                                                                                    id="lebel26"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="73"
                                                                                        id="73BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(73,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat73"
                                                                                        class="industry_lebel">প্লাম্বার/পাইপফিটিং</span></label>
                                                                            </div>
                                                                            <div id="item27" class="items_left"><label
                                                                                    id="lebel27"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="74"
                                                                                        id="74BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(74,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat74"
                                                                                        class="industry_lebel">স্যুইং
                                                                                        মেশিন অপারেটর</span></label>
                                                                            </div>
                                                                            <div id="item28" class="items_left"><label
                                                                                    id="lebel28"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="75"
                                                                                        id="75BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(75,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat75"
                                                                                        class="industry_lebel">রাজমিস্ত্রি/
                                                                                        নির্মান কর্মী</span></label>
                                                                            </div>
                                                                            <div id="item29" class="items_left"><label
                                                                                    id="lebel29"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="76"
                                                                                        id="76BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(76,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat76"
                                                                                        class="industry_lebel">CAD
                                                                                        অপারেটর</span></label></div>
                                                                            <div id="item30" class="items_left"><label
                                                                                    id="lebel30"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="77"
                                                                                        id="77BlueCat" name="chkBolckCM"
                                                                                        onclick="getChkValue(77,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat77"
                                                                                        class="industry_lebel">ডেলিভারী
                                                                                        ম্যান</span></label></div>
                                                                            <div id="item31" class="items_left"><label
                                                                                    id="lebel31"
                                                                                    class="industry_lebel"><input
                                                                                        type="checkbox" value="-11"
                                                                                        id="-11BlueCat"
                                                                                        name="chkBolckCM"
                                                                                        onclick="getChkValue(-11,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');"
                                                                                        class="email-notification-checkbox">&nbsp;<span
                                                                                        id="ValueBlueCat-11"
                                                                                        class="industry_lebel">অন্যান্য
                                                                                        স্পেশাল স্কিল্&zwnj;ড
                                                                                        জব্&zwnj;স</span></label></div>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="chips-container" id="FilterBlueCat">

                                                                        <input type="hidden" id="hidCountBlueCat"
                                                                            name="hidCountBlueCat" value="0">
                                                                    </div>
                                                                    <input name="selected_blue_Cat" type="hidden"
                                                                        id="selected_blue_Cat" value="">
                                                                    <input name="hOption" type="hidden" id="hOption"
                                                                        value="1">
                                                                    <input type="hidden" id="hidChar" name="hidChar">



                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- blue color -->


                                                        <div class="form-group col-md-12" tabindex="0">
                                                            <label aria-label="Preferred Job Location">Preferred Job
                                                                Location
                                                                <span class="sr-only">required</span>
                                                                <abbr title="Required" class="required"></abbr>
                                                                <span class="help-block"
                                                                    id="txtPrfJobLocationErrorMsg"></span>
                                                            </label>
                                                            <span
                                                                class="input-note m-b-10 btn-form-control hidden">Preferred
                                                                Job Location defines the <b>geographical place</b> where
                                                                you prefer to work. Add your priority wise preferred job
                                                                locations. i.e. 1st: Dhaka, 2nd: Sylhet, 3rd:
                                                                Khulna.</span>
                                                            <div class="" id="subInsideDiv">
                                                                <label for="txtSubject" class="text-normal">Inside
                                                                    Bangladesh&nbsp;<small
                                                                        class="note-grey btn-form-control hidden">Add
                                                                        Districts (max 15)</small>
                                                                    <span class="help-block"
                                                                        id="txtInsideBDLocationErrorMsg"
                                                                        style="font-weight: 600;"></span>
                                                                </label>
                                                                <div id="lstJobArea">
                                                                    <div class="selected-location">
                                                                        <input
                                                                            class="autosuggest txt-add-location ui-autocomplete-input btn-form-control hidden form-control aria-disabled"
                                                                            disabled="disabled" type="text"
                                                                            id="txtSubject" name="txtSubject"
                                                                            onkeyup="SetParam(1,'hid_location','0',2,'');"
                                                                            placeholder=""
                                                                            aria-describedby="txtPrfJobLocationErrorMsg">
                                                                        <div id="FilterLocation"
                                                                            class="chips-container">

                                                                            <div id="distDIV-1" class="well well-sm">
                                                                                <span>Anywhere in Bangladesh</span><a
                                                                                    class="btn"
                                                                                    aria-label="Remove Anywhere in Bangladesh"
                                                                                    href="javascript:removeDiv(-1,0,'selected_Dist','hidCountDist','dist');">&nbsp;<i
                                                                                        class="icon-times-o"></i></a><input
                                                                                    type="hidden" id="Hiddist0"
                                                                                    name="Hiddist0" value="-1"></div>
                                                                            <input type="hidden" id="hidCountDist"
                                                                                name="hidCountDist" value="1">
                                                                        </div>

                                                                        <input type="hidden" name="hid_location"
                                                                            id="hid_location" readonly="readonly">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input id="selected_Dist" type="hidden" name="selected_Dist"
                                                                value=",-1,-1,">


                                                            <div class="" id="subOutsideDiv">
                                                                <label for="txtOutSide" class="text-normal">Outside
                                                                    Bangladesh&nbsp;<small
                                                                        class="note-grey btn-form-control hidden">Add
                                                                        Countries (max 10)</small>
                                                                    <span class="help-block"
                                                                        id="txtOutsideBDLocationErrorMsg"
                                                                        style="font-weight: 600;"></span>
                                                                </label>
                                                                <div id="lstJobArea">
                                                                    <div class="selected-location">
                                                                        <input
                                                                            class="autosuggest txt-add-location ui-autocomplete-input btn-form-control hidden form-control"
                                                                            type="text" id="txtOutSide"
                                                                            name="txtSubject"
                                                                            onkeyup="SetParam(1,'hid_outLocation','1',3,'');"
                                                                            placeholder="">
                                                                        <div id="FilterOverseas"
                                                                            class="chips-container">
                                                                            <div id="overDIV104" class="well well-sm">
                                                                                <span>American Samoa</span><a
                                                                                    class="btn"
                                                                                    aria-label="Remove American Samoa"
                                                                                    href="javascript:removeDiv(104,0,'selected_JobCountry','hidCountOver','over');">&nbsp;<i
                                                                                        class="icon-times-o"></i></a><input
                                                                                    type="hidden" id="Hidover0"
                                                                                    name="Hidover0" value="104"></div>
                                                                            <div id="overDIV138" class="well well-sm">
                                                                                <span>Canada</span><a class="btn"
                                                                                    aria-label="Remove Canada"
                                                                                    href="javascript:removeDiv(138,0,'selected_JobCountry','hidCountOver','over');">&nbsp;<i
                                                                                        class="icon-times-o"></i></a><input
                                                                                    type="hidden" id="Hidover1"
                                                                                    name="Hidover1" value="138"></div>
                                                                            <div id="overDIV143" class="well well-sm">
                                                                                <span>China</span><a class="btn"
                                                                                    aria-label="Remove China"
                                                                                    href="javascript:removeDiv(143,0,'selected_JobCountry','hidCountOver','over');">&nbsp;<i
                                                                                        class="icon-times-o"></i></a><input
                                                                                    type="hidden" id="Hidover2"
                                                                                    name="Hidover2" value="143"></div>
                                                                            <div id="overDIV176" class="well well-sm">
                                                                                <span>Germany</span><a class="btn"
                                                                                    aria-label="Remove Germany"
                                                                                    href="javascript:removeDiv(176,0,'selected_JobCountry','hidCountOver','over');">&nbsp;<i
                                                                                        class="icon-times-o"></i></a><input
                                                                                    type="hidden" id="Hidover3"
                                                                                    name="Hidover3" value="176"></div>
                                                                            <div id="overDIV202" class="well well-sm">
                                                                                <span>Japan</span><a class="btn"
                                                                                    aria-label="Remove Japan"
                                                                                    href="javascript:removeDiv(202,0,'selected_JobCountry','hidCountOver','over');">&nbsp;<i
                                                                                        class="icon-times-o"></i></a><input
                                                                                    type="hidden" id="Hidover4"
                                                                                    name="Hidover4" value="202"></div>
                                                                            <input type="hidden" id="hidCountOver"
                                                                                name="hidCountOver" value="5">
                                                                        </div>

                                                                        <input type="hidden" name="hid_location"
                                                                            id="hid_outLocation" readonly="readonly">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input id="selected_JobCountry" type="hidden"
                                                            name="selected_JobCountry" value=",138,202,176,104,143,">

                                                        <div class="form-group col-md-12">
                                                            <label for="txtJobArea">Add your preferred organization type
                                                                (max 12)
                                                                <span class="help-block" id="txtPreOrgTypeErrorMsg"
                                                                    style="font-weight: 600;"></span>
                                                            </label>
                                                            <div class="" id="prefOrgDiv">
                                                                <div id="lstJobArea">
                                                                    <div class="selected-location">
                                                                        <input type="text" id="txtJobArea"
                                                                            name="txtJobArea"
                                                                            class="autosuggest txt-add-location ui-autocomplete-input btn-form-control hidden form-control aria-disabled"
                                                                            disabled="disabled"
                                                                            onkeyup="SetParam(2,'hid_jobArea','',4,'');"
                                                                            placeholder="">
                                                                        <div class="chips-container" id="FilterOrg">
                                                                            <div id="orgDIV16" class="well well-sm">
                                                                                <span>Software Company</span><a
                                                                                    class="btn"
                                                                                    aria-label="Remove Software Company"
                                                                                    href="javascript:removeDiv(16,0,'selected_Job','hidOrg','org');">&nbsp;<i
                                                                                        class="icon-times-o"></i></a><input
                                                                                    type="hidden" id="Hidorg0"
                                                                                    name="Hidorg0" value="16"></div>
                                                                            <div id="orgDIV17" class="well well-sm">
                                                                                <span>IT Enabled Service</span><a
                                                                                    class="btn"
                                                                                    aria-label="Remove IT Enabled Service"
                                                                                    href="javascript:removeDiv(17,0,'selected_Job','hidOrg','org');">&nbsp;<i
                                                                                        class="icon-times-o"></i></a><input
                                                                                    type="hidden" id="Hidorg1"
                                                                                    name="Hidorg1" value="17"></div>
                                                                            <input type="hidden" id="hidOrg"
                                                                                name="hidOrg" value="2">
                                                                        </div>
                                                                        <input type="hidden" name="hid_jobArea"
                                                                            id="hid_jobArea" readonly="readonly">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input id="selected_Job" type="hidden" name="selected_Job"
                                                            value=",16,17,">
                                                        <input type="hidden" name="isBlueColor" id="isBlueColor2"
                                                            value="False">
                                                        <div class="col-md-12">
                                                            <div class="btn-form-control hidden">
                                                                <a href="javascript:void(0)"
                                                                    aria-label="CLick to save Preferred Area informations"
                                                                    class="btn btn-primary save"
                                                                    onclick="commonUpdate('step_01_update_jclo.asp','jcloForm','jclo_0','EN');">Save</a>
                                                                <a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp"
                                                                    aria-label="Click close to go back to edit resume without saving"
                                                                    class="btn btn-default btn-cancel reset">Close</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end prefferred areas -->

                                    <!-- other relevant information -->
                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="headingFive">
                                            <h2 class="panel-title">
                                                <button class="btn collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" data-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    <i class="indicator icon-angle-down"></i>&nbsp;Other Relevant
                                                    Information
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingFive" aria-expanded="false">
                                            <div class="panel-body">
                                                <div class="all-info ori_0">
                                                    <div class="sub-header">
                                                        <div class="edit-tools">
                                                            <button class="btn edit-btn"
                                                                aria-label="Click on Edit to fill up Other relevant information"><i
                                                                    class="icon-pencil-o"></i>&nbsp;Edit</button>
                                                        </div>
                                                    </div>
                                                    <div id="commonForm_ori">
                                                        <div id="commonForm_ori_0">
                                                            <div id="alertDiv_ori"></div>
                                                            <form class="row view-mode" id="oriForm">
                                                                <div class="col-md-12 form-group"><label
                                                                        for="txtCareerSummary">Career Summary<button
                                                                            type="button"
                                                                            class="btn sub-popover btn-form-control hidden"
                                                                            data-trigger="focus hover"
                                                                            data-container="body" data-toggle="popover"
                                                                            data-placement="top"
                                                                            aria-label="What is career summary?"
                                                                            data-original-title="What is career summary?"
                                                                            data-content="The career summary section is an optional customized section of a resume that lists key achievements, skills, and experience relevant to the position for which you are applying.The career summary section of your resume focuses on your relevant experience and lets the prospective employer know that you have taken the time to create a resume that shows how you are qualified for the job."><span
                                                                                class="icon-question"></span></button><span
                                                                            class="help-block"
                                                                            id="txtCareerSumErrorMsg"></span></label><textarea
                                                                        name="txtCareerSummary" id="txtCareerSummary"
                                                                        cols="10" rows="3"
                                                                        class="form-control height-2x btn-form-control hidden"
                                                                        onkeyup="countLetterV1(this.id,490,'CADD_sp1','Career','1')">Position,  BIDDABARI (Online Study Platform) company with 10 month of experience, and more experience in CODEXCUBE.COM a complete software company with 1.5 years of experience . Adept in web developer, office management and preparing well-researched software documents. Skilled in time management, software development, and ERP management, team management etc. Also experienced in creative thinking meeting minutes book keeping and appointment management while meeting deadlines</textarea>
                                                                    <div class="onclick-hidden textarea-texts">Position,
                                                                        BIDDABARI (Online Study Platform) company with
                                                                        10 month of experience, and more experience in
                                                                        CODEXCUBE.COM a complete software company with
                                                                        1.5 years of experience . Adept in web
                                                                        developer, office management and preparing
                                                                        well-researched software documents. Skilled in
                                                                        time management, software development, and ERP
                                                                        management, team management etc. Also
                                                                        experienced in creative thinking meeting minutes
                                                                        book keeping and appointment management while
                                                                        meeting deadlines</div><span id="CADD_sp1"
                                                                        class="btn-form-control hidden"
                                                                        name="CADD_sp1"></span>
                                                                    <div
                                                                        class="example-area m-t-10 btn-form-control hidden">
                                                                        <label>View Example <button type="button"
                                                                                class="btn sub-popover btn-form-control"
                                                                                data-trigger="focus hover"
                                                                                data-container="body"
                                                                                data-toggle="popover"
                                                                                aria-label="Career Summary Example"
                                                                                data-placement="top"
                                                                                data-original-title="Career Summary Example"
                                                                                data-html="true"
                                                                                data-content="<div><h4>Good Example</h4><strong>Corporate Real Estate Executive (Your Job title):</strong><br/>Increasing Bottom-Line Profitability through Real Estate Strategies<br/><strong>Professional Profile </strong><br/>Accomplished executive with a proven ability to develop and implement real estate strategies that support business and financial objectives. Have led key initiatives that reduced operating budget by $32 million and contributed to 550 percent stock increase. Recognized as an expert in applying financial concepts to asset management decisions.<br/><strong>Areas of Expertise</strong><br/><div style=margin-left:5px><ul><li> High-Volume, High-Dollar Negotiations</li><li>Strategic/Tactical Planning</li><li>Multimillion-Dollar Operating and Capital Budget Administration</li><li>Analytical and Financial Skills</li><li>Statistical Modeling and ROI Analyses</li></ul></div></p><h4>Bad Example</h4><p>I worked for many reputed companies and earned enough knowledge in the field of your given post. I think I am the most eligible candidate for your given post.</p></div>"><span
                                                                                    class="icon-question"></span></button></label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 form-group"><label
                                                                        for="txtSpecialQualification">Special
                                                                        Qualification<button type="button"
                                                                            class="btn sub-popover btn-form-control hidden"
                                                                            data-trigger="focus hover"
                                                                            data-container="body" data-toggle="popover"
                                                                            data-placement="top"
                                                                            aria-label="What is Special Qualification?"
                                                                            data-original-title="What is Special Qualification?"
                                                                            data-content="Special Qualifications (Replacing the Objective) is 3-5 concise sentences on a resume.  It is a summary of your most pertinent experience and qualifications that is customized for the position in which you are applying. This is also a place where attributes, such as punctuality and honesty, can be conveyed that would otherwise not be appropriate under work experience.  Use the job description to help identify the areas of expertise, distinction, traits and related experiences you have without using the words "
                                                                            i'="" or="" 'my' .'=""><span
                                                                                class="icon-question"></span></button><span
                                                                            class="help-block"
                                                                            id="txtSpeQualiErrorMsg"></span></label><textarea
                                                                        name="txtSpecialQualification"
                                                                        id="txtSpecialQualification" cols="10" rows="3"
                                                                        class="form-control height-2x btn-form-control hidden"
                                                                        onkeyup="countLetterV1(this.id,245,'CADD_sp2','Special','1')">Web Development , Software Development &amp; Software Tester</textarea>
                                                                    <div class="onclick-hidden textarea-texts">Web
                                                                        Development , Software Development &amp;
                                                                        Software Tester</div><span id="CADD_sp2"
                                                                        class="btn-form-control hidden"
                                                                        name="CADD_sp2"></span>
                                                                    <div
                                                                        class="example-area m-t-10 btn-form-control hidden">
                                                                        <label>View Example <button type="button"
                                                                                class="btn sub-popover btn-form-control"
                                                                                data-trigger="focus hover"
                                                                                data-container="body"
                                                                                aria-label="Special Qualification Example"
                                                                                data-toggle="popover"
                                                                                data-placement="top"
                                                                                data-original-title="Special Qualification Example"
                                                                                data-html="true"
                                                                                data-content="<div><h4>Good Example</h4><p><strong>Example #1</strong><div style=margin-left:5px><ul><li>Three years experience working in the_______ (fill in the blank) industry </li><li>Competent at managing responsibilities in a high-volume atmosphere</li><li>Skilled at interacting with customers of all socioeconomic backgrounds </li><li>Hard worker, quick learner, and ability to assume responsibility</li></ul></div><br/><strong>Example2</strong><div style=margin-left:5px><ul><li>Work well under pressure as part of a team</li><li>Well-groomed appearance</li><li>Polite, respectful, and courteous manners</li><li>Responsible, efficient, and flexible</li><li>Ability to work in a fast-paced, intense environment smoothly</li><li>Ability to elicit confidence and build rapport</li><li>Talented in problem solving and office system design</li></ul><br/><strong>Example #3</strong><ul><li>Quick learner, eager to further my _____(fill in the blank) knowledge and skills</li><li>Meticulous worker; attentive to quality and detail</li><li>Able and willing to assist co-workers, supervisors, and clients in a cooperative manner</li><li>Committed to providing total quality work</li><li>Dependable employee with common sense and a variety of skills</li><li>Work well under pressure to meet deadlines</li></ul></div></p><h4>Bad Example</h4><p>I am very energetic and dedicated to office work. I am regular and know the very basic of your required field. I have 5 years of experience in the field and I think I am the best candidate for your Job post.</p></div>"><span
                                                                                    class="icon-question"></span></button></label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-md-12"><label
                                                                        for="txtKeyword">Keywords<abbr title="Required"
                                                                            class="required"></abbr><button
                                                                            type="button"
                                                                            class="btn sub-popover btn-form-control hidden"
                                                                            data-trigger="focus hover"
                                                                            data-container="body" data-toggle="popover"
                                                                            data-placement="top"
                                                                            data-original-title="What is Keywords?"
                                                                            aria-label="What is Keywords?"
                                                                            data-content="Keywords are specific words or phrases that job seekers use to search for jobs and employers use to find the right candidates. Keywords are used as search criteria in the same way you do research on the Internet. The more keywords you use, the more closely the job will match what you are really looking for.Example:  MBA, BBA, Photography, Computer Diploma, Visual Basic, Visual C++, Java, HTML, Photo Shop, AIUB, BUET, DU, IBA, NSU etc"><span
                                                                                class="icon-question"></span></button><span
                                                                            class="help-block"
                                                                            id="txtKeywordsErrorMsg"></span></label>
                                                                    <div class="onclick-hidden textarea-texts">*</div>
                                                                    <input class="form-control btn-form-control hidden"
                                                                        type="text" value="*" name="txtKeyword"
                                                                        id="txtKeyword" autocomplete="off">
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="btn-form-control hidden"><a
                                                                            href="javascript:void(0)"
                                                                            aria-label="Save changes for Other Relevant Information "
                                                                            class="btn btn-primary save"
                                                                            onclick="commonUpdate('step_01_update_ori_LC.asp','oriForm','ori_0','EN');">Save</a><a
                                                                            href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp"
                                                                            aria-label="Close Other Relevant Information edit form"
                                                                            class="btn btn-default btn-cancel reset">Close</a>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        .empty-message {
                                            text-align: left;
                                            padding: 0px;
                                            margin-top: 20px;
                                        }

                                        .empty-message i.icon {
                                            font-size: 14px;
                                            margin: 0px 0px 0px 0px;
                                            color: #ffffff;
                                            display: inline-block;
                                        }

                                        .empty-message i.icon:before {
                                            background-color: #f7f7f7;
                                            display: inline-block;
                                            border-radius: 100px;
                                            padding: 7px;
                                            color: #008020;
                                            margin-bottom: 20px;
                                            font-size: 14px;
                                            width: 28px;
                                            height: 28px;
                                        }

                                        .empty-message span {
                                            font-size: 14px;
                                            font-weight: 600;
                                            color: #595959;
                                            outline: none;
                                        }

                                        .disaCont1 {
                                            color: #494949;
                                            font-size: 14px;
                                            font-weight: 400;
                                        }

                                        .disaBtn {
                                            margin-top: 20px;
                                        }

                                        .disaCont2 {
                                            color: #455a64;
                                            font-size: 13px;
                                            font-weight: 500;
                                            margin-top: 20px;
                                        }

                                        .notGiven {
                                            color: #494949;
                                            font-size: 14px;
                                            font-weight: 400;
                                            word-wrap: break-word;
                                        }

                                        .spDisabilityTxt {
                                            border: 1px solid #707070;
                                            border-radius: 6px;
                                            padding: 6px 31px 6px 10px;
                                            font-size: 14px;
                                            font-weight: normal;
                                            color: #707070;
                                            margin-top: 15px;
                                            margin-bottom: 15px;
                                        }
                                    </style>

                                    <style>
                                        .row.view-mode label {
                                            color: #595959;
                                        }

                                        .btn-toggle-s-1 .btn {
                                            background-color: #ffffff !important;
                                            color: #5C5C5C !important;
                                            box-shadow: none;
                                            border: 1px solid #5C5C5C !important;
                                        }

                                        .btn-toggle-s-1 .btn-grey.active {
                                            background-color: #5C5C5C !important;
                                            color: #ffffff !important;
                                            box-shadow: none !important;
                                            border: 1px solid #5C5C5C !important;
                                        }

                                        .btn-toggle-s-1 .btn {
                                            float: left;
                                            margin-right: -1px;
                                        }

                                        .btn-toggle-s-1 .btn,
                                        .btn-toggle-s-1 .btn:focus {
                                            box-shadow: none;
                                            background-color: #ffffff;
                                            border: 1px solid #4c4c4c;
                                            color: #4c4c4c;
                                            font-size: 14px;
                                            padding: 8px 12px;
                                        }

                                        .btn.active,
                                        .btn:active {
                                            background-image: none;
                                            -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
                                            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
                                        }

                                        .btn.active.focus,
                                        .btn.active:focus,
                                        .btn.focus,
                                        .btn:active.focus,
                                        .btn:active:focus,
                                        .btn:focus {
                                            outline: thin dotted;
                                            outline: 5px auto -webkit-focus-ring-color;
                                            outline-offset: -2px;
                                        }
                                    </style>

                                    <!-- FOR forbidden functionality -->
                                    <style>
                                        .forbidden {
                                            cursor: not-allowed;
                                        }

                                        .forbidden.btn-group .btn.disabled {
                                            opacity: 1 !important;
                                        }
                                    </style>

                                    <style>
                                        .dissinf-wrap .disinfotle {
                                            display: flex;
                                            align-items: center;
                                            font-size: 14px;
                                            font-weight: 600;
                                            color: #595959;
                                            margin-bottom: 10px;
                                        }

                                        .dissinf-wrap .disinfotle .ico {
                                            width: 36px;
                                            height: 36px;
                                            line-height: 36px;
                                            text-align: center;
                                            border-radius: 50%;
                                            display: inline-block;
                                            font-size: 18px;
                                            color: #008020;
                                            background-color: #f7f7f7;
                                            margin-right: 10px;
                                        }

                                        .dissinf-wrap .stxt {
                                            color: #595959;
                                            font-size: 14px;
                                            line-height: 1.5;
                                            margin: 5px 0px 5px 0px;
                                        }

                                        .dissinf-wrap .adbtn {
                                            margin: 0px 0px 10px 0px;
                                        }

                                        .spDisabilityTxt {
                                            border: 1px solid #707070;
                                            border-radius: 6px;
                                            padding: 5px 10px;
                                            font-size: 14px;
                                            font-weight: normal;
                                            color: #595959;
                                            margin-bottom: 15px;
                                        }

                                        .dyhdn .ldistxt {
                                            font-size: 13px;
                                            line-height: 1.5;
                                            font-weight: 600;
                                            display: block;
                                            text-align: left;
                                            padding-left: 0;
                                            margin-bottom: 2px;
                                            color: #595959;
                                        }

                                        .row.view-mode .dyhdn label,
                                        .dyhdn label {
                                            font-size: 14px;
                                            font-weight: normal;
                                            display: inline-block;
                                            color: #595959;
                                        }

                                        .pwd_0 .dyhndid,
                                        .pwd_0 .dismsg,
                                        .pwd_0 .pwdbbtn {
                                            display: none;
                                        }

                                        .pwd_0 .dyhndid,
                                        .pwd_0 .dismsg,
                                        .pwd_0 .pwdfemt,
                                        .pwd_0 .nding {
                                            display: none;
                                        }

                                        .pwd_0 .nding .ndingstxtu {
                                            font-size: 13px;
                                            font-weight: 600;
                                            color: #595959;
                                        }

                                        .pwd_0 .nding .ndingstxtb {
                                            font-size: 13px;
                                            font-weight: normal;
                                            color: #595959;
                                            margin-bottom: 10px;
                                        }

                                        @media only screen and (max-width: 767px) {

                                            .row.view-mode .dyhdn label,
                                            .dyhdn label {
                                                font-size: 14px;
                                                font-weight: normal;
                                                display: inline-block;
                                                color: #595959;
                                                width: auto;
                                                margin-right: 10px;
                                            }

                                            .row.view-mode .dyhdn .radio-inline+.radio-inline,
                                            .dyhdn .radio-inline+.radio-inline {
                                                margin: 0px 10px 0px 0px;
                                            }
                                        }
                                    </style>

                                    <script>
                                        $('.forbidden').on('click', function (e) {
                                            e.preventDefault();
                                        });
                                        $('.forbidden .btn-group .btn.disabled').click(function (event) {
                                            event.stopPropagation();
                                        });
                                    </script>
                                    <!-- END -->

                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="headingSix">
                                            <h2 class="panel-title">
                                                <button class="btn collapsed" role="button" data-toggle="collapse"
                                                    data-parent="#accordion" data-target="#collapseSix"
                                                    aria-expanded="false" aria-controls="collapseSix">
                                                    <i class="indicator icon-angle-down"></i>&nbsp;Disability
                                                    Information (if any)
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                                            aria-labelledby="headingSix" aria-expanded="false">
                                            <div class="panel-body">
                                                <div class="all-info pwd_0">
                                                    <div class="sub-header">
                                                        <div class="edit-tools" style="display: block;">
                                                            <button class="btn edit-btn"
                                                                aria-label="Click on Edit to fill up person with disability details"><i
                                                                    class="icon-pencil-o"></i>&nbsp;Edit</button>
                                                        </div>
                                                    </div>

                                                    <div id="commonForm_pwd">
                                                        <div id="commonForm_pwd_0">

                                                            <div id="alertDiv_pwd"></div>

                                                            <form class="row view-mode" id="pwdForm">

                                                                <div class="col-md-12" id="pwdNodataDiv">
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <div class="onclick-hidden  yes"
                                                                                id="disabilityIdNotGiven">
                                                                                <label for="txtDisabilityId_1">National
                                                                                    Disability ID
                                                                                    <abbr title="Required"
                                                                                        class="required"></abbr>
                                                                                </label>
                                                                                <span class="notGiven">You didn't
                                                                                    mention your ID yet.</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12" id="askDisabilityInfo">
                                                                            <div
                                                                                class="form-group btn-form-control dyhdn hidden">
                                                                                <fieldset>
                                                                                    <legend class="ldistxt">Do you have
                                                                                        National Disability ID Number?
                                                                                        <abbr title="Required"
                                                                                            class="required"></abbr>
                                                                                        <span class="help-block"
                                                                                            id="txtDisibilityIdRadioOptionErrorMsg"></span>
                                                                                    </legend>
                                                                                    <label class="radio-inline"><input
                                                                                            type="radio"
                                                                                            name="isDisability"
                                                                                            checked="checked" value="1"
                                                                                            id="pwdbYes">Yes</label>
                                                                                    <label class="radio-inline">
                                                                                        <input type="radio"
                                                                                            name="isDisability"
                                                                                            value="0" id="pwdbNo">No
                                                                                        <span class="sr-only">
                                                                                            If you are a person with
                                                                                            disability and have no
                                                                                            Disability ID Number,
                                                                                            please contact i2i support
                                                                                            +88 01730369802 by Call/
                                                                                            SMS/ WhatsApp.
                                                                                        </span>
                                                                                    </label>
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" id="pwdNodataMsgDiv"
                                                                    style="display: none;">
                                                                    <div class="spDisabilityTxt" id="no_id_step_msg">
                                                                        If you are a person with disability and have no
                                                                        Disability ID Number,
                                                                        please contact i2i support +88 01730369802 by
                                                                        Call/ SMS/ WhatsApp
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-12 pwdfemt" style="display: block;">
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="txtDisabilityId">National
                                                                                Disability ID
                                                                                <abbr title="Required"
                                                                                    class="required"></abbr>
                                                                                <span class="help-block"
                                                                                    id="txtDisibilityIdErrorMsg"></span>
                                                                            </label>

                                                                            <span
                                                                                class="onclick-hidden word-break-all text-tundora"
                                                                                id="spanDisabilityId"
                                                                                style="color:#494949">5555618965</span>
                                                                            <input type="text"
                                                                                class="form-control btn-form-control hidden aria-disabled"
                                                                                autocomplete="off" maxlength="100"
                                                                                value="5555618965"
                                                                                name="txtDisabilityId"
                                                                                id="txtDisabilityId" disabled="disabled"
                                                                                onpaste="return false;">
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label>Show on Resume&nbsp;</label>
                                                                            <span class="onclick-hidden text-tundora"
                                                                                id="spanDisabilityIsShown">Yes</span>
                                                                            <div id="showInCVDivId"
                                                                                class="btn-group btn-toggle-s-1 btn-form-control hidden"
                                                                                data-toggle="buttons">
                                                                                <fieldset>
                                                                                    <legend class="sr-only">Show on
                                                                                        Resume </legend>
                                                                                    <label for="PwdoptYes"
                                                                                        class="btn btn-primary active">
                                                                                        <input
                                                                                            class="visuallyhidden crop aria-disabled"
                                                                                            disabled="disabled"
                                                                                            type="radio"
                                                                                            name="isshownCV"
                                                                                            id="PwdoptYes" value="1"
                                                                                            autocomplete="off"
                                                                                            checked="">
                                                                                        <i
                                                                                            class="icon-check-sign toggle"></i>&nbsp;Yes
                                                                                    </label>

                                                                                    <label for="PwdoptNo"
                                                                                        class="btn btn-primary btn-grey ">
                                                                                        <input
                                                                                            class="visuallyhidden crop aria-disabled"
                                                                                            disabled="disabled"
                                                                                            type="radio"
                                                                                            name="isshownCV"
                                                                                            id="PwdoptNo" value="0"
                                                                                            autocomplete="off">
                                                                                        <i
                                                                                            class="icon-check-sign toggle"></i>&nbsp;No
                                                                                    </label>
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="cboDisabilitySee">Difficulty to
                                                                                See&nbsp;

                                                                            </label>
                                                                            <span class="onclick-hidden text-tundora"
                                                                                id="spanDisabilitySee"></span>
                                                                            <select name="cboDisabilitySee"
                                                                                id="cboDisabilitySee"
                                                                                class="form-control aria-disabled btn-form-control hidden"
                                                                                disabled="disabled">
                                                                                <option value="-1" selected="selected">
                                                                                    Select</option>
                                                                                <option value="Yes - some difficulty">
                                                                                    Yes - some difficulty</option>
                                                                                <option
                                                                                    value="Yes - a lot of difficulty">
                                                                                    Yes - a lot of difficulty</option>
                                                                                <option value="Can not do at all">Can
                                                                                    not do at all</option>
                                                                            </select>
                                                                            <input type="hidden" name="txtSeenProbDtId"
                                                                                id="txtSeenProbDtId" value="1">
                                                                            <input type="hidden" name="txtSeenProbDiId"
                                                                                id="txtSeenProbDiId" value="0">
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="cboDisabilityHear">Difficulty to
                                                                                Hear&nbsp;

                                                                            </label>
                                                                            <span class="onclick-hidden text-tundora"
                                                                                id="spanDisabilityHear"></span>
                                                                            <select name="cboDisabilityHear"
                                                                                id="cboDisabilityHear"
                                                                                class="form-control aria-disabled btn-form-control hidden"
                                                                                disabled="disabled">
                                                                                <option value="-1" selected="">Select
                                                                                </option>
                                                                                <option value="Yes - some difficulty">
                                                                                    Yes - some difficulty</option>
                                                                                <option
                                                                                    value="Yes - a lot of difficulty">
                                                                                    Yes - a lot of difficulty</option>
                                                                                <option value="Can not do at all">Can
                                                                                    not do at all</option>
                                                                            </select>
                                                                            <input type="hidden" name="txtHearProbDtId"
                                                                                id="txtHearProbDtId" value="2">
                                                                            <input type="hidden" name="txtHearProbDiId"
                                                                                id="txtHearProbDiId" value="0">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label
                                                                                for="cboDisabilityRemember">Difficulty
                                                                                to Concentrate or remember &nbsp;

                                                                            </label>
                                                                            <span class="onclick-hidden text-tundora"
                                                                                id="spanDisabilityRemember"></span>
                                                                            <select name="cboDisabilityRemember"
                                                                                id="cboDisabilityRemember"
                                                                                class="form-control aria-disabled btn-form-control hidden"
                                                                                disabled="disabled">
                                                                                <option value="-1" selected="">Select
                                                                                </option>
                                                                                <option value="Yes - some difficulty">
                                                                                    Yes - some difficulty</option>
                                                                                <option
                                                                                    value="Yes - a lot of difficulty">
                                                                                    Yes - a lot of difficulty</option>
                                                                                <option value="Can not do at all">Can
                                                                                    not do at all</option>
                                                                            </select>
                                                                            <input type="hidden" name="txtConcProbDtId"
                                                                                id="txtConcProbDtId" value="4">
                                                                            <input type="hidden" name="txtConcProbDiId"
                                                                                id="txtConcProbDiId" value="0">
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="cboDisabilitySit">Difficulty to
                                                                                Sit, Stand, Walk or Climb Stairs&nbsp;

                                                                            </label>
                                                                            <span class="onclick-hidden text-tundora"
                                                                                id="spanDisabilitySit"></span>
                                                                            <select name="cboDisabilitySit"
                                                                                id="cboDisabilitySit"
                                                                                class="form-control aria-disabled btn-form-control hidden"
                                                                                disabled="disabled">
                                                                                <option value="-1" selected="">Select
                                                                                </option>
                                                                                <option value="Yes - some difficulty">
                                                                                    Yes - some difficulty</option>
                                                                                <option
                                                                                    value="Yes - a lot of difficulty">
                                                                                    Yes - a lot of difficulty</option>
                                                                                <option value="Can not do at all">Can
                                                                                    not do at all</option>
                                                                            </select>
                                                                            <input type="hidden" name="txtSswcProbDtId"
                                                                                id="txtSswcProbDtId" value="3">
                                                                            <input type="hidden" name="txtSswcProbDiId"
                                                                                id="txtSswcProbDiId" value="0">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="cboDisabilityComm">Difficulty to
                                                                                Communicate&nbsp;

                                                                            </label>
                                                                            <span class="onclick-hidden text-tundora"
                                                                                id="spanDisabilityComm"></span>
                                                                            <select name="cboDisabilityComm"
                                                                                id="cboDisabilityComm"
                                                                                class="form-control aria-disabled btn-form-control hidden"
                                                                                disabled="disabled">
                                                                                <option value="-1" selected="">Select
                                                                                </option>
                                                                                <option value="Yes - some difficulty">
                                                                                    Yes - some difficulty</option>
                                                                                <option
                                                                                    value="Yes - a lot of difficulty">
                                                                                    Yes - a lot of difficulty</option>
                                                                                <option value="Can not do at all">Can
                                                                                    not do at all</option>
                                                                            </select>
                                                                            <input type="hidden" name="txtCommProbDtId"
                                                                                id="txtCommProbDtId" value="6">
                                                                            <input type="hidden" name="txtCommProbDiId"
                                                                                id="txtCommProbDiId" value="0">
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="cboDisabilityTC">Difficulty of
                                                                                Taking Care
                                                                                <span style="font-size:12px;">(example:
                                                                                    shower, wearing
                                                                                    clothes)</span>&nbsp;

                                                                            </label>
                                                                            <span class="onclick-hidden text-tundora"
                                                                                id="spanDisabilityTC"></span>
                                                                            <select name="cboDisabilityTC"
                                                                                id="cboDisabilityTC"
                                                                                class="form-control aria-disabled btn-form-control hidden"
                                                                                disabled="disabled">
                                                                                <option value="-1" selected="selected">
                                                                                    Select</option>
                                                                                <option value="Yes - some difficulty">
                                                                                    Yes - some difficulty</option>
                                                                                <option
                                                                                    value="Yes - a lot of difficulty">
                                                                                    Yes - a lot of difficulty</option>
                                                                                <option value="Can not do at all">Can
                                                                                    not do at all</option>
                                                                            </select>
                                                                            <input type="hidden" name="txtTcareProbDtId"
                                                                                id="txtTcareProbDtId" value="5">
                                                                            <input type="hidden" name="txtTcareProbDiId"
                                                                                id="txtTcareProbDiId" value="0">
                                                                        </div>
                                                                    </div>

                                                                </div>


                                                                <div class="col-md-12">
                                                                    <div class="btn-form-control hidden">
                                                                        <button type="button"
                                                                            class="btn btn-primary save"
                                                                            aria-label="Click to person with save disability details information"
                                                                            onclick="commonUpdate('step_01_update_pwd.asp','pwdForm','pwd_0','EN');"
                                                                            id="perbtn-save">Save
                                                                        </button>
                                                                        <a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp"
                                                                            aria-label="Click close to go back to edit resume without saving"
                                                                            class="btn btn-default btn-cancel reset">Close
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel"
                            aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                    </div>

                </table>
            </div>
        </div>
    </div>
</div>

@endsection