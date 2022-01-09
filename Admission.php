<?php
{
?>
<html>

<head>
    <title>
        Admission Enquiry
    </title>


    <!-- Ionicons -->

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .f_header {

            padding: 10px 0px;
            font-family: 'Roboto Condensed', sans-serif;
            height: 300px;
            width: 100%;
            background-image: url("image/Collage_1.jpeg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            position: relative;
            filter: blur(6px);

        }

        .back-Text {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 5;
            width: 100%;
            border-top-left-radius: 70px;

        }


        .f_header-img {
            float: left;
            height: 100%;
            width: 30%;
            margin-top: 1%;
            margin-left: 30px;
        }

        .mob {
            display: inline-block;
        }

        .f_logName {
            display: inline-block;
            font-size: 34px;
            color: #000;
            margin-top: 40px;
            margin-left: 0px;
            font-weight: bold;
            font-family: 'Roboto Condensed', sans-serif;
            text-align: left;
        }

        .f_headerRight {
            font-size: 28px;
            text-align: right;
        }

        .f_headerRight h2 {
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: bold;
            font-size: 26px;
            text-transform: uppercase;
            color: #ed141d;
            margin-top: 8px;
            line-height: 35px;
        }

        .f_headerRight span {
            display: block;
            color: #000;
        }

        #lblYEAR {
            display: inline-block;
        }

        select {
            border: 1px solid #555;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 8px 8px 8px;
            box-sizing: border-box;
            height: 55%;
            text-align: justify;
            border-radius: 5px;
        }

        .inputStyle {
            border: 1px solid #555;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0px 8px 8px;
            box-sizing: border-box;
            height: 50%;
            text-align: justify;
            border-radius: 5px;
        }

        label {
            text-align: justify;
            font: 20px;
            font-family: Arial, Helvetica, sans-serif;
            margin: 3px, 8px, 8px, 8px;
            margin-left: 10px;
        }

        .row {
            margin: 30px;
        }

        .col-auto {
            width: 33.33%;
        }



        .body {
            background-color: grey;
        }



        form {
            display: block;
        }


        .nav-tabs {
            border-radius: 5px;
            margin-left: 150px;
            margin-right: 150px;
        }

        .nav-item {
            margin: 8px 8px 8px 0px;
            box-sizing: border-box;
            border: 3px solid black;
            align-items: center;
            border-radius: 10px;
            text-align: center;
        }
    </style>

</head>

<body>


    <script>

        $(document).ready(function () {
            //Initialize tooltips
            $('.nav-tabs > li a[title]').tooltip();


            $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
                var $target = $(e.target);
                if ($target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function (e) {
                var $active = $('.nav-tabs li>.active');
                $active.parent().next().find('.nav-link').removeClass('disabled');
                nextTab($active);
                $(window).scrollTop(0);
            });

            $(".prev-step").click(function (e) {
                var $active = $('.nav-tabs li>a.active');
                prevTab($active);
                $(window).scrollTop(0);
            });
        });

        function nextTab(elem) {
            $(elem).parent().next().find('a[data-toggle="tab"]').click();
        }
        function prevTab(elem) {
            $(elem).parent().prev().find('a[data-toggle="tab"]').click();
        }


    </script>

    <div class="f_header"></div>
    <div class="back-Text">
        <div class="row">
            <div class="col-md-7">
                <img src="image/logo1.png" class="f_header-img" />
                <h2 class="f_logName">Government Womens Residence<br />
                    Polytechnic Tasgoan</h2>

            </div>
            <div class="col-md-5 f_headerRight">
                <h2>FY/DSE Admission Form <span>
                        For A.Y. <span id="lblacademicyear" class="adFormAc">2021-2022</span></span></h2>
                <h4><i class="fa fa-phone"></i>For Technical Support Call <a style="color: red"
                        href="tel:02346 250447">02346 250447</a></h4>
                <h4><i class="fa fa-clock-o"></i>10.00 AM to 6.00 PM</h4>
            </div>
        </div>
    </div>

    <div class="container py-3 my-3 border rounded shadow-sm">
        <div class="row">
            <section class="col-12">
                <ul class="nav nav-tabs flex-nowrap" role="tablist">
                    <li role="presentation" class="nav-item">
                        <a href="#step1" class="nav-link active" data-toggle="tab" aria-controls="step1" role="tab"
                            title="Step 1"> STUDENT DETAILS </a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="#step2" class="nav-link disabled" data-toggle="tab" aria-controls="step2" role="tab"
                            title="Step 2"> PARENT DETAILS </a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="#step3" class="nav-link disabled" data-toggle="tab" aria-controls="step3" role="tab"
                            title="Step 3"> OTHER DETAILS </a>
                    </li>

                    <li role="presentation" class="nav-item">
                        <a href="#step4" class="nav-link disabled" data-toggle="tab" aria-controls="step4" role="tab"
                            title="Step 4"> DOCUMENT DETAILS </a>
                    </li>
                    <li role="presentation" class="nav-item" hidden>
                        <a href="#complete" class="nav-link disabled" data-toggle="tab" aria-controls="complete"
                            role="tab" title="Complete"> </a>
                    </li>
                </ul>
                <form role="form">
                    <div class="tab-content py-2">
                        <div class="tab-pane active" role="tabpanel" id="step1">

                            <div class="row">

                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Application for<a style="color: red;">*</a></label><br>
                                    <select name="ApplicationFor">
                                        <option value="0">--select--</option>
                                        <option>CAP ALLOTMENT</option>
                                        <option>INSTITUTE LEVEL SEAT ALLOTMENT</option>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <label>Admission To <a style="color: red;">*</a></label><br>
                                    <select name="AdmissionTO">
                                        <option value="0">--select--</option>
                                        <option>FIRST YEAR</option>
                                        <option>DIRECT SECOND YEAR </option>
                                    </select>
                                </div>

                                <div class="col-auto">
                                    <label>Branch <a style="color: red;">*</a></label><br>
                                    <select name="Branch">
                                        <option value="0">--select--</option>
                                        <option>Computer Engineering</option>
                                        <option>Information Technology </option>
                                        <option>Civil Engineering </option>
                                        <option>Electrical Engineering </option>
                                        <option>Electronics And Telecommunication </option>
                                        <option>Dress Designing </option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Admission Year<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="AdmissionYear" value="2021-2022" disabled
                                        class="inputStyle">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <h6><a style="font-style:bold;">Name As Per 10th Marksheet</a></h6> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Last Name<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="LastName" class="inputStyle">
                                </div>

                                <div class="col-auto">
                                    <label>Middle Name<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="MiddleName" class="inputStyle">
                                </div>

                                <div class="col-auto">
                                    <label>First Name<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="FirstName" class="inputStyle">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Date of Birth<a style="color: red;">*</a></label> <br>
                                    <input type="date" name="DOB" class="inputStyle">
                                </div>

                                <div class="col-auto">
                                    <label>Place Of Birth<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="PlaceOfBirth" class="inputStyle">
                                </div>

                                <div class="col-auto">
                                    <label>Mobile No<a style="color: red;">*</a></label> <br>
                                    <input type="tel" name="MobileNo" class="inputStyle">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Candidature Type<a style="color: red;">*</a></label> <br>
                                    <select name="CandidatureType">
                                        <option value="0">--select--</option>
                                        <option value="TYPE-A">TYPE-A</option>
                                        <option value="TYPE-B">TYPE-B</option>
                                        <option value="TYPE-C">TYPE-C</option>
                                        <option value="TYPE-D">TYPE-D</option>
                                        <option value="TYPE-E">TYPE-E</option>
                                    </select>
                                </div>

                                <div class="col-auto">
                                    <label> Admission Type<a style="color: red;">*</a></label> <br>
                                    <select name="AdmissionType">
                                        <option value="0">--select--</option>
                                        <option value="CAP I">CAP I</option>
                                        <option value="CAP II">CAP II</option>
                                        <option value="CAP III">CAP III</option>
                                        <option value="CAP IV">CAP IV</option>
                                        <option value="ACAP">ACAP</option>
                                    </select>
                                </div>

                                <div class="col-auto">
                                    <label>DTE Application No<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="DteApplicationNo" class="inputStyle">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Blood Group<a style="color: red;">*</a></label> <br>
                                    <select name="AdmissionType">
                                        <option value="0">--select--</option>
                                        <option value="o+ve">o+ve</option>
                                        <option value="A+ve">A+ve</option>
                                        <option value="B+ve">B+ve</option>
                                        <option value="AB+ve">AB+ve</option>
                                        <option value="o-ve">o-ve</option>
                                        <option value="A-ve">A-ve</option>
                                        <option value="B-ve">B-ve</option>
                                        <option value="AB-ve">AB-ve</option>
                                    </select>
                                </div>

                                <div class="col-auto">
                                    <label>Nationality<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="Nationality" class="inputStyle">
                                </div>

                                <div class="col-auto">
                                    <label>State Merit No<a style="color: red;">*</a></label> <br>
                                    <input type="tel" name="SateMeritNo" class="inputStyle">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Is Handicapped<a style="color: red;">*</a></label> <br>
                                    <select name="IsHandicapped">
                                        <option value="0">--select--</option>
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>

                                <div class="col-auto">
                                    <label>Religion<a style="color: red;">*</a></label> <br>
                                    <select name="Religion">
                                        <option value="0">--select--</option>
                                        <option value="HINDU">HINDU</option>
                                        <option value="MUSLIM">MUSLIM</option>
                                        <option value="CHRISTIAN">CHRISTIAN</option>
                                        <option value="SIKH">SIKH</option>
                                        <option value="JAIN">JAIN</option>
                                        <option value="BUDDHIST">BUDDHIST</option>
                                        <option value="ISLAM">ISLAM</option>
                                        <option value="OTHER">OTHER</option>
                                    </select>
                                </div>
                                <div class="col-auto">
                                    <label>Caste<a style="color: red;">*</a></label> <br>
                                    <select name="Caste">
                                        <option value="0">- Select -</option>
                                        <option value="1">ATTAR</option>
                                        <option value="2">BADHINI</option>
                                        <option value="3">BAGADI</option>
                                        <option value="4">BANJARA</option>
                                        <option value="5">BELDAR</option>
                                        <option value="6">BHANDARI</option>
                                        <option value="7">BHOI</option>
                                        <option value="8">BOUDDHA</option>
                                        <option value="10">CHAMBHAR</option>
                                        <option value="11">DARJI</option>
                                        <option value="12">DAVARI</option>
                                        <option value="13">DEVANG</option>
                                        <option value="14">DHANGAR</option>
                                        <option value="15">DHOR</option>
                                        <option value="16">GAVANDI</option>
                                        <option value="17">GOLLA</option>
                                        <option value="18">GUJRATI</option>
                                        <option value="19">GURAV</option>
                                        <option value="20">JAIN</option>
                                        <option value="21">JAIN CHATURATH</option>
                                        <option value="22">JANGAM</option>
                                        <option value="23">KASAI</option>
                                        <option value="24">KASAR</option>
                                        <option value="25">KHATIK</option>
                                        <option value="26">KOKANI</option>
                                        <option value="27">KOLI</option>
                                        <option value="28">KOSHTI</option>
                                        <option value="29">KUMBHAR</option>
                                        <option value="30">KUNBI</option>
                                        <option value="31">LINGAYAT</option>
                                        <option value="32">LOHAR</option>
                                        <option value="33">LONARI</option>
                                        <option value="34">MAHAR</option>
                                        <option value="35">MAHESHWARI</option>
                                        <option value="36">MALI</option>
                                        <option value="37">MANG</option>
                                        <option value="38">MARATHA</option>
                                        <option value="39">MOMIN</option>
                                        <option value="40">MUJAWAR</option>
                                        <option value="41">MUSLIM</option>
                                        <option value="42">NHAVI</option>
                                        <option value="43">OTHER</option>
                                        <option value="44">PADAMSHALI</option>
                                        <option value="45">PANCHAL</option>
                                        <option value="46">PARIT</option>
                                        <option value="47">PATHARWAT</option>
                                        <option value="48">PINJARI</option>
                                        <option value="49">POWAR</option>
                                        <option value="50">RAJPUT</option>
                                        <option value="51">SALI</option>
                                        <option value="52">SHIMPI</option>
                                        <option value="53">SONAR</option>
                                        <option value="54">SUTAR</option>
                                        <option value="55">TAMBOLI</option>
                                        <option value="56">VADAR</option>
                                        <option value="57">VAISHYA WANI</option>
                                        <option value="58">VANJARI</option>
                                        <option value="59">DEVADIGA</option>
                                        <option value="60">TELI</option>
                                        <option value="61">GAVALI</option>
                                        <option value="62">AATAR</option>
                                        <option value="63">THAKUR</option>
                                        <option value="64">SANGAR</option>
                                        <option value="65">RANGARI</option>
                                        <option value="66">KAIKADI</option>
                                        <option value="67">HOLAR</option>
                                        <option value="68">KESHARWANI</option>
                                        <option value="69">BHANGI</option>
                                        <option value="70">YADAV</option>
                                        <option value="71">YOG</option>
                                        <option value="72">BURUD</option>
                                        <option value="73">SUNNY</option>
                                        <option value="74">CHRISTIAN</option>
                                        <option value="75">AARAKH</option>
                                        <option value="76">DHOBI</option>
                                        <option value="77">BHAT</option>
                                        <option value="78">Vishwa 31</option>
                                        <option value="79">HATKAR</option>
                                        <option value="80">GUPTA</option>
                                        <option value="81">RAMOSHI</option>
                                        <option value="1081">GONDHALI </option>
                                        <option value="1082">NANDIWALE</option>
                                        <option value="1083">BRAHMIN</option>
                                        <option value="1084">BRAHMAN</option>
                                        <option value="1085">NAV-BOUDHA</option>
                                        <option value="1086">GUJAR</option>
                                        <option value="1087">BHAVSAR</option>
                                        <option value="1088">RANGARI BHAVSAR</option>
                                        <option value="1089">YELAM</option>
                                        <option value="1090">PADMASHALI</option>
                                        <option value="1091">KOMTI</option>
                                        <option value="1092">KOIRI</option>
                                        <option value="1093">BELDAR N.T.</option>
                                        <option value="1094">OBC</option>
                                        <option value="1096">THOGATA</option>
                                        <option value="1097">ARORA</option>
                                        <option value="1098">BOUDHA</option>
                                        <option value="1099">BHOI-NT-B</option>
                                        <option value="1100">OBC - LEVA PATIDAR</option>
                                        <option value="1101">KADVA PATEL</option>
                                        <option value="1102">BANIYA</option>
                                        <option value="1103">MARWADI SONAR</option>
                                        <option value="1104">PHASE PARDI</option>
                                        <option value="1105">BUDHHA</option>
                                        <option value="1106">LINGAYAT WANI</option>
                                        <option value="1107">PARDESHI BHAAMTA</option>
                                        <option value="1108">RAJSTHANI BRAHMIN</option>
                                        <option value="1109">BUDDHIST</option>
                                        <option value="1110">JAIN KAALAR</option>
                                        <option value="1111">LAMANI</option>
                                        <option value="1112">NIRALI - 172</option>
                                        <option value="1113">MANG-46</option>
                                        <option value="1114">JAIN SHIMPI</option>
                                        <option value="1115">KHOJA</option>
                                        <option value="1116">AGRI</option>
                                        <option value="1117">BARI</option>
                                        <option value="1118">NT</option>
                                        <option value="1119">REVE - GUJAR</option>
                                        <option value="1120">MARWADI</option>
                                        <option value="1121">BANJARI</option>
                                        <option value="1122">WANI</option>
                                        <option value="1123">PHULMALI</option>
                                        <option value="1124">ISLAM</option>
                                        <option value="1125">BHOI (25)</option>
                                        <option value="1127">TELANGI</option>
                                        <option value="1128">KOLHI</option>
                                        <option value="1129">KANSARA</option>
                                        <option value="1130">PARDHI</option>
                                        <option value="1131">GURJAR</option>
                                        <option value="1132">REDDY</option>
                                        <option value="1133">VANIK</option>
                                        <option value="1134">ROMAN CATHOLIC</option>
                                        <option value="1135">CHATURTH</option>
                                        <option value="1136">KSHATRIYA</option>
                                        <option value="1137">BRAHMA-KSHATTRIAS</option>
                                        <option value="1138">KARHADAS</option>
                                        <option value="1139">KOSHTIS</option>
                                        <option value="1140">PADMA SHALI</option>
                                        <option value="1142">DESHASTHAS</option>
                                        <option value="1143">LAD</option>
                                        <option value="1144">KUNBI</option>
                                        <option value="1145">BAUDHA</option>
                                        <option value="1146">LEWA PATIDAR</option>
                                        <option value="1147">BAVA GOSAVI</option>
                                        <option value="1148">MATANG</option>
                                        <option value="1149">GOSAVI</option>
                                        <option value="1150">RAJPUT BHAMTA
                                        </option>
                                        <option value="1151">MAHADEV KOLI</option>
                                        <option value="1152">BEDAJANGAM
                                        </option>
                                        <option value="1153">PUJARI
                                        </option>
                                        <option value="1154">PATKAR
                                        </option>
                                        <option value="1155">BAUDDHA
                                        </option>
                                        <option value="1156">SIKH
                                        </option>
                                        <option value="1157">NATHPANTHI DAVARI GOSAVI
                                        </option>
                                        <option value="1158">LAVA GUJAR
                                        </option>
                                        <option value="1159">YALAM
                                        </option>
                                        <option value="1160">ANDH
                                        </option>
                                        <option value="1161">WARLI
                                        </option>
                                        <option value="1162">KAMMA
                                        </option>
                                        <option value="1163">BOHRA
                                        </option>

                                        <option value="1164">PUNJABI
                                        </option>
                                        <option value="1165">NAV BUDDHA
                                        </option>
                                        <option value="1166">EZHAVA
                                        </option>
                                        <option value="1167">DHANCHI</option>
                                        <option value="1168">MALHAR KOLI
                                        </option>
                                        <option value="1169">MULANI
                                        </option>
                                        <option value="1170">OTARI
                                        </option>
                                        <option value="1171">WANJARI
                                        </option>
                                        <option value="1172">LAMBADIS
                                        </option>
                                        <option value="1173">SINDHI
                                        </option>
                                        <option value="1174">KOHALI
                                        </option>
                                        <option value="1175">VAISHNAV KHADAYATA
                                        </option>
                                        <option value="1176">CHALWADI
                                        </option>
                                        <option value="1177">TAMBAT
                                        </option>
                                        <option value="1178">SAMAGAR
                                        </option>
                                        <option value="1179">TELGU MOCHI</option>
                                        <option value="1180">TAKARI
                                        </option>
                                        <option value="1181">JAIN OSWAL
                                        </option>
                                        <option value="1182">KOMATI
                                        </option>
                                        <option value="1183">KLAL
                                        </option>
                                        <option value="1184">YELLAM
                                        </option>
                                        <option value="1185">JAIN GUJRATHI
                                        </option>
                                        <option value="1186">RAJAKA
                                        </option>
                                        <option value="1187">SAO TELI
                                        </option>
                                        <option value="1188">BHILL</option>
                                        <option value="1189">DHIWAR
                                        </option>
                                        <option value="1190">BENGALI
                                        </option>
                                        <option value="1191">BAWA
                                        </option>
                                        <option value="1192">MUSLIM SUNNI
                                        </option>
                                        <option value="1193">KASHIKAPADE
                                        </option>
                                        <option value="1194">MUSLIM JULLAH
                                        </option>
                                        <option value="1195">KAMNA
                                        </option>
                                        <option value="1196">GADRIYA</option>
                                        <option value="1197">BUNT</option>
                                        <option value="1198">GHISADI</option>
                                        <option value="1199">MISTRI</option>
                                        <option value="1200">JULAH</option>
                                        <option value="1201">RAWAL</option>
                                        <option value="1202">NAIR</option>
                                        <option value="1203">NAMDEV SHIMPI</option>
                                        <option value="1204">ROHIDAS</option>
                                        <option value="1205">MARWADI JAIN</option>
                                        <option value="1206">KHANDILWAL</option>
                                        <option value="1207">KALAL</option>
                                        <option value="1208">AGARWAL</option>
                                        <option value="1209">KHATRI PUNJABI</option>
                                        <option value="1210">BAGWAN</option>
                                        <option value="1211">HALBA
                                        </option>
                                        <option value="1212">AHIR</option>
                                        <option value="1213">GUJRATHI LOHANA</option>
                                        <option value="1214">GADIVADAR</option>
                                        <option value="1215">MOCHI</option>
                                        <option value="1216">MARWADI BRAHMIN BHIKSHUK</option>
                                        <option value="1217">GURADI</option>
                                        <option value="1218">RAVAL</option>
                                        <option value="1219">LEVA PATIDAR</option>
                                        <option value="1220">BALIJA</option>
                                        <option value="1221">FUL 36</option>
                                        <option value="1222">BRAHMIN KOKANASTHA</option>
                                        <option value="1223">GAUD BRAHMIN</option>
                                        <option value="1224">PARSEE</option>
                                        <option value="1225">ARAYA VAISYA</option>
                                        <option value="1226">AARYAVANSH KOMTI</option>
                                        <option value="1227">SHETTY</option>
                                        <option value="1228">PADMA SALI</option>
                                        <option value="1229">SWAKUL SALI</option>
                                        <option value="1230">SHEGAR</option>
                                        <option value="1231">KAYASTHA</option>
                                        <option value="1232">ERUKULA</option>
                                        <option value="1233">KIRAT</option>
                                        <option value="1234">BORUL</option>
                                        <option value="1235">KURHINSHETTI</option>
                                        <option value="1236">JULEHA</option>
                                        <option value="1237">WADAR</option>
                                        <option value="1238">KADIYA</option>
                                        <option value="1239">BAIRAGI</option>
                                        <option value="1240">BAIRAGI</option>
                                        <option value="1241">BAIRAGI</option>
                                        <option value="1242">DODEGUJAR</option>
                                        <option value="1243">PAWARA</option>
                                        <option value="1244">VAIDU</option>
                                        <option value="1245">VISHWAKARMIYA</option>
                                        <option value="1246">MANA</option>
                                        <option value="1247">NT-B</option>
                                        <option value="1248">NT-C</option>
                                        <option value="1249">NT-D</option>
                                        <option value="1253">KOKNA</option>
                                        <option value="1254">GOND</option>
                                        <option value="1255">LEVA PATIL</option>
                                        <option value="1256">-</option>
                                        <option value="1257">JACOBITE SYRIAN</option>
                                        <option value="1258">PASI</option>
                                        <option value="1259">MARATHA KUNBI</option>
                                        <option value="1260">KONKAN MARATHA</option>
                                        <option value="1261">DIWANI HINDU GUJARATHI</option>
                                        <option value="1262">TIROLE KUNBI OBC</option>
                                        <option value="1263">YALMAR</option>
                                        <option value="1264">KUNBI PATIL</option>
                                        <option value="1265">NAV - BOUDHA SC</option>
                                        <option value="1266">GENERAL</option>
                                        <option value="1267">SC</option>
                                        <option value="1268">OSWAL GENERAL</option>
                                        <option value="1269">GADI LOHAR</option>
                                        <option value="1270">GAWALI</option>
                                        <option value="1271">BRAMHAN</option>
                                        <option value="1272">SONI</option>
                                        <option value="1273">LEWA KUNBHI</option>
                                        <option value="1274">REVE GUJAR OBC</option>
                                        <option value="1275">BADGUJAR</option>
                                        <option value="1276">BRAHMAN KOKANSTHA</option>
                                        <option value="1277">NORIYA</option>
                                        <option value="1278">DEVALI</option>
                                        <option value="1279">OC</option>
                                        <option value="1280">MAHAR SC</option>
                                        <option value="1281">OBC KUNBI</option>
                                        <option value="1282">KACHHI</option>
                                        <option value="1283">PILLAI SAIVA VELALLA</option>
                                        <option value="1284">BHAMTA RAJPUT</option>
                                        <option value="1285">JOSHI</option>
                                        <option value="1286">H MARATHA</option>
                                        <option value="1287">KOYA</option>
                                        <option value="1288">OBC KALAR</option>
                                        <option value="1289">LAD SHAKIHY WANI</option>
                                        <option value="1290">MARATHA OPEN</option>
                                        <option value="1291">GENERAL HINDU MARATHA</option>
                                        <option value="1292">MUSALMAN</option>
                                        <option value="1293">LEVA KUNBI</option>
                                        <option value="1294">DAIVADNYA BRAHMIN</option>
                                        <option value="1295">LOHANA</option>
                                        <option value="1296">BANIYA OBC</option>
                                        <option value="1297">AHIR SONAR</option>
                                        <option value="1298">SIMPI</option>
                                        <option value="1299">MEHTAR</option>
                                        <option value="1300">LINGAVANTH</option>
                                        <option value="1301">ORTHODOX</option>
                                        <option value="1302">MALI OBC</option>
                                        <option value="1303">MARTHOMITE</option>
                                        <option value="1304">KURMI</option>
                                        <option value="1305">BRAHMIN OPEN</option>
                                        <option value="1306">TAMIL</option>
                                        <option value="1307">PATEL</option>
                                        <option value="1308">MARWADI DARJI</option>
                                        <option value="1309">DHANWAR</option>
                                        <option value="1310">NIRALI</option>
                                        <option value="1311">GOWARI</option>
                                        <option value="1312">MANNERWARLU</option>
                                        <option value="1313">TELI OBC</option>
                                        <option value="1314"></option>
                                        <option value="1315">GIRI GOSAVI</option>
                                        <option value="1316">MARATHA DHOBI OBC</option>
                                        <option value="1317">RAJPUT BHAMTA</option>
                                        <option value="1318">DIGAMBAR</option>
                                        <option value="1319">NAMBIAR</option>
                                        <option value="1320">PATHARE PRABHU</option>
                                        <option value="1321">OPEN</option>
                                        <option value="1322">FULARI</option>
                                        <option value="1323">MUSLIM MAHAT</option>
                                        <option value="1324">MAHAR</option>
                                        <option value="1325">MADIGA</option>
                                        <option value="1326">HINDU LEWA GUJAR</option>
                                        <option value="1327">RAJWANSHI</option>
                                        <option value="1328">HINDU BRAHMIN</option>
                                        <option value="1329">BHAGAT</option>
                                        <option value="1330">TYAGI</option>
                                        <option value="1331">GANIKA</option>
                                        <option value="1332">OPEN KSHATRIYA</option>
                                        <option value="1333">BHANDARI OBC</option>
                                        <option value="1334">YADAV OBC</option>
                                        <option value="1335">KOSHTI SBC</option>
                                        <option value="1336">KUNBI OBC</option>
                                        <option value="1337">SBC PADMASHALI</option>
                                        <option value="1338">DODE GUJAR OBC</option>
                                        <option value="1339">FULMALI</option>
                                        <option value="1340">MUSLIM MOMIN OBC</option>
                                        <option value="1341">DHANGAR NT</option>
                                        <option value="1342">OBC NAMDEOSHIMPI</option>
                                        <option value="1343">BUDDHISM MAHAR</option>
                                        <option value="1344">OBC KASAR</option>
                                        <option value="1345">JANGAM OBC</option>
                                        <option value="1346">CHAMBHAR SC</option>
                                        <option value="1347">KOLI SBC</option>
                                        <option value="1348">BARI OBC</option>
                                        <option value="1349">KASHIKAPADI NT B</option>
                                        <option value="1350">OBC GURAV</option>
                                        <option value="1351">MANG GARUDI</option>
                                        <option value="1352">ST</option>
                                        <option value="1353">GADI LOHAR VJNT</option>
                                        <option value="1354">LEVA GUJAR OBC</option>
                                        <option value="1355">RANA RAJPUT</option>
                                        <option value="1356">JAIN PANCHAM</option>
                                        <option value="1357">OBC DHANGAR</option>
                                        <option value="1358">DHANGAR NTC</option>
                                        <option value="1359">KATHAR WANI</option>
                                        <option value="1360">ZOROASTRIAN</option>
                                        <option value="1361">BC A</option>
                                        <option value="1362">MARWADI MAHESHWARI</option>
                                        <option value="1363">BADGUJAR OBC</option>
                                        <option value="1364">BHOI NT</option>
                                        <option value="1365">SALI SBC</option>
                                        <option value="1366">DEVANG KOSHTI</option>
                                        <option value="1367">KHANGAR</option>
                                        <option value="1368">SHIMPI OBC</option>
                                        <option value="1369">CKP</option>
                                        <option value="1370">PANGUL</option>
                                        <option value="1371">GADRIYA SC-ST</option>
                                        <option value="1372">REVE - GUJAR OBC</option>
                                        <option value="1373">GUJAR OBC</option>
                                        <option value="1374">NAMASUDRA</option>
                                        <option value="1375">VAISHYAWANI EMA</option>
                                        <option value="1376">TURPUKOPUBED</option>
                                        <option value="1377">CHOUDHARI</option>
                                        <option value="1378">JANGID</option>
                                        <option value="1379">KORI SC</option>
                                        <option value="1380">JABBIN</option>
                                        <option value="1381">LEVA PATIDAR GUJAR</option>
                                        <option value="1382">VAISHYA</option>
                                        <option value="1383">RAJPUT OPEN</option>
                                        <option value="1384">BHOI ZINGA</option>
                                        <option value="1385">LAD VANJARI</option>
                                        <option value="1386">SHIMPI KSHATRIYA AHER</option>
                                        <option value="1387">PARDHAN</option>
                                        <option value="1388">MAIRAL</option>
                                        <option value="1389">KASHMIRI</option>
                                        <option value="1390"></option>
                                        <option value="1391">BHRAMAN</option>
                                        <option value="1392">THIYA</option>
                                        <option value="1393">MALA JANGAM</option>
                                        <option value="1394">SARASWAT BRAHMIN</option>
                                        <option value="1395">TOKRE KOLI</option>
                                        <option value="1396">MAHISHAW</option>
                                        <option value="1397">SAYYAD</option>
                                        <option value="1398">TELANGI BELDAR</option>
                                        <option value="1399">KOLHATI</option>
                                        <option value="1400">KOLI MAHADEV</option>
                                        <option value="1401">SIRVI</option>
                                        <option value="1402">GUJAR</option>
                                        <option value="1403">BHRAMIN</option>
                                        <option value="1404">BHUMIHAAR</option>
                                        <option value="1405">RAJPUT</option>
                                        <option value="1406">MUDIRAJ TELUGU</option>
                                        <option value="1407">KOMTI</option>
                                        <option value="-Other-">-Other-</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Domiciled<a style="color: red;">*</a></label> <br>
                                    <select name="Domiciled">
                                        <option value="0">-Select-</option>
                                        <option value="Maharashtra State (MS)">Maharashtra State (MS)</option>
                                        <option value="Out of Maharashtra State (OMS)">Out of Maharashtra State
                                            (OMS)
                                        </option>
                                    </select>
                                </div>

                                <div class="col-auto">
                                    <label> Category<a style="color: red;">*</a></label> <br>
                                    <select name="Category">
                                        <option value="0">- Select -</option>
                                        <option value="1">OPEN</option>
                                        <option value="2">SC</option>
                                        <option value="3">ST</option>
                                        <option value="4">DT/VJ</option>
                                        <option value="22">VJNT</option>
                                        <option value="23">NT-B</option>
                                        <option value="24">NT-C</option>
                                        <option value="25">NT-D</option>
                                        <option value="8">OBC</option>
                                        <option value="9">SBC</option>
                                        <option value="20">SEBC</option>

                                    </select>
                                </div>

                                <div class="col-auto">
                                    <label>Defence<a style="color: red;">*</a></label> <br>
                                    <select name="Defence">
                                        <option value="0">-Select-</option>
                                        <option value="yes">YES</option>
                                        <option value="No">NO</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Student Aadhar No<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="StudentAdharNo" class="inputStyle"
                                        pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}">
                                </div>

                                <div class="col-auto">
                                    <label>Student Mail Id<a style="color: red;">*</a></label> <br>
                                    <input type="email" name="MailId" class="inputStyle">
                                </div>

                                <div class="col-auto">
                                    <label>PAN<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="PanNo" class="inputStyle"
                                        pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}">
                                </div>
                            </div>

                            <hr style="height: 2px;">
                            <div class="row">
                                <div class="col-auto">
                                    <h6>Student Bank Details</h6>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Account No<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="AccountNo" class="inputStyle">
                                </div>

                                <div class="col-auto">
                                    <label>Bank Name<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="BankName" class="inputStyle">
                                </div>

                                <div class="col-auto">
                                    <label>Branch Name<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="BranchName" class="inputStyle">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Branch Code<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="BranchCode" class="inputStyle" pattern="">
                                </div>

                                <div class="col-auto">
                                    <label>IFSC Code<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="IFSCCode" class="inputStyle">
                                </div>

                                <div class="col-auto">
                                    <label>Is Account Linked With Aadhar <a style="color: red;">*</a></label> <br>
                                    <input type="text" name="IsLinked" class="inputStyle">
                                </div>
                            </div>


                            <div class="row">

                            </div>
                            <button type="button" class="btn btn-primary next-step float-right">Next</button>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step2">

                            <div class="row">

                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <label>Father's Last Name<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="FLastName" class="inputStyle" pattern="">
                                </div>

                                <div class="col-auto">
                                    <label>Father's First Name<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="FFirstName" class="inputStyle">
                                </div>

                                <div class="col-auto">
                                    <label>Father's Middle Name <a style="color: red;">*</a></label> <br>
                                    <input type="text" name="FMiddleName" class="inputStyle">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Mother's Last Name <a style="color: red;">*</a></label> <br>
                                    <input type="text" name="MLastName" class="inputStyle" pattern="">
                                </div>

                                <div class="col-auto">
                                    <label>Mother's First Name<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="MFirstName" class="inputStyle">
                                </div>

                                <div class="col-auto">
                                    <label>Mother's Middle Name <a style="color: red;">*</a></label> <br>
                                    <input type="text" name="MMiddleName" class="inputStyle">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Father's Profession <a style="color: red;">*</a></label> <br>
                                    <input type="text" name="FProfesion" class="inputStyle" pattern="">
                                </div>

                                <div class="col-auto">
                                    <label>Mother's Profession<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="MProfession" class="inputStyle">
                                </div>

                                <div class="col-auto">
                                    <label>Parent's Mail ID<a style="color: red;">*</a></label> <br>
                                    <input type="email" name="PEmail" class="inputStyle">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Parent's Mobile No<a style="color: red;">*</a></label> <br>
                                    <input type="tel" name="PMobileNo" class="inputStyle" pattern="">
                                </div>
                            </div>

                            <hr style="height: 2px;">

                            <div class="row">
                                <div class="col-auto">
                                    <h6>Permanent Address Details<a style="color: red;">*</a></h6> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>State <a style="color: red;">*</a></label> <br>
                                    <select name="PADDState">
                                        <option value="0">- Select -</option>
                                        <option value="22">MAHARASHTRA</option>
                                        <option value="23">KARNATAKA</option>
                                        <option value="25">RAJASTHAN</option>
                                        <option value="26">BIHAR</option>
                                        <option value="36">GUJARAT</option>
                                        <option value="39">GOA</option>
                                        <option value="40">KERALA</option>
                                        <option value="41">JAMMU &amp; KASHMIR</option>
                                        <option value="42">WEST BENGAL</option>
                                        <option value="43">TAMIL NADU</option>
                                        <option value="44">MADHYA PRADESH</option>
                                        <option value="45">UTTAR PRADESH</option>
                                        <option value="46">HIMACHAL PRADESH</option>
                                        <option value="47">UTTARAKHAND</option>
                                        <option value="48">ANDHRA PRADESH</option>
                                        <option value="49">ARUNACHAL PRADESH</option>
                                        <option value="50">TELANGANA</option>
                                        <option value="51">MEGHALAYA</option>
                                        <option value="52">MIZORAM</option>
                                        <option value="53">NEW DELHI</option>
                                        <option value="54">CHATTISGARH</option>
                                        <option value="55">JHARKHAND</option>
                                        <option value="56">HARYANA</option>
                                        <option value="57">ORISSA</option>
                                        <option value="58">PUNJAB</option>
                                        <option value="59">DIU &amp; DAMAN</option>
                                        <option value="60">DADRA NAGRA HAVELI</option>
                                        <option value="61">Odisha</option>

                                    </select>
                                </div>

                                <div class="col-auto">
                                    <label>District<a style="color: red;">*</a></label> <br>
                                    <select name="PADDDistrict">
                                        <option value="0">- Select -</option>
                                        <option value="1">AHMEDNAGAR</option>
                                        <option value="2">AKOLA</option>
                                        <option value="3">AMRAVATI</option>
                                        <option value="4">AURANGABAD</option>
                                        <option value="5">BEED</option>
                                        <option value="6">BHANDARA</option>
                                        <option value="7">BULDANA</option>
                                        <option value="8">CHANDRAPUR</option>
                                        <option value="9">DHULE</option>
                                        <option value="10">GADCHIROLI</option>
                                        <option value="11">GONDIA</option>
                                        <option value="12">HINGOLI</option>
                                        <option value="13">JALGAON</option>
                                        <option value="14">JALNA</option>
                                        <option value="15">KOLHAPUR</option>
                                        <option value="16">LATUR</option>
                                        <option value="17">MUMBAI</option>
                                        <option value="18">MUMBAI SUBURBAN DISTRICT</option>
                                        <option value="19">NAGPUR</option>
                                        <option value="20">NANDED</option>
                                        <option value="21">NANDURBAR</option>
                                        <option value="22">NASHIK</option>
                                        <option value="23">OSMANABAD</option>
                                        <option value="24">PALGHAR</option>
                                        <option value="25">PARBHANI</option>
                                        <option value="26">PUNE</option>
                                        <option value="27">RAIGAD</option>
                                        <option value="28">RATNAGIRI</option>
                                        <option value="29">SANGLI</option>
                                        <option value="30">SATARA</option>
                                        <option value="31">SINDHUDURG</option>
                                        <option value="32">SOLAPUR</option>
                                        <option value="33">THANE</option>
                                        <option value="34">WARDHA</option>
                                        <option value="35">WASHIM</option>
                                        <option value="36">YAVATMAL</option>
                                        <option value="37">MALAPPURAM</option>
                                        <option value="38">THIRUVANANTHAPURAM</option>
                                        <option value="39">ERNAKULAM</option>
                                        <option value="40">THRISSUR</option>
                                        <option value="41">KOZHIKODE</option>
                                        <option value="42">PALAKKAD</option>
                                        <option value="43">KOLLAM</option>
                                        <option value="44">KANNUR</option>
                                        <option value="45">ALAPPUZHA</option>
                                        <option value="46">KOTTAYAM</option>
                                        <option value="47">JAMMU</option>
                                        <option value="48">SRINAGAR</option>
                                        <option value="49">ANANTNAG</option>
                                        <option value="50">BARAMULA</option>
                                        <option value="51">KUPWARA</option>
                                        <option value="52">BADGAM</option>
                                        <option value="53">RAJOURI</option>
                                        <option value="54">KATHUA</option>
                                        <option value="55">PULWAMA</option>
                                        <option value="56">UDHAMPUR</option>
                                        <option value="57">NORTH TWENTY FOUR PARGANAS</option>
                                        <option value="58">SOUTH TWENTY FOUR PARGANAS</option>
                                        <option value="59">BARDDHAMAN</option>
                                        <option value="60">MURSHIDABAD</option>
                                        <option value="61">PASCHIM MEDINIPUR</option>
                                        <option value="62">HUGLI</option>
                                        <option value="63">NADIA</option>
                                        <option value="64">PURBA MEDINIPUR</option>
                                        <option value="65">HAORA</option>
                                        <option value="66">KOLKATA</option>
                                        <option value="67">PATNA</option>
                                        <option value="68">PURBI CHAMPARAN</option>
                                        <option value="69">MUZAFFARPUR</option>
                                        <option value="70">MADHUBANI</option>
                                        <option value="71">GAYA</option>
                                        <option value="72">SAMASTIPUR</option>
                                        <option value="73">SARAN</option>
                                        <option value="74">DARBHANGA</option>
                                        <option value="75">PASHCHIM CHAMPARAN</option>
                                        <option value="76">VAISHALI</option>
                                        <option value="77">BANGALORE</option>
                                        <option value="78">BELGAUM</option>
                                        <option value="79">MYSORE</option>
                                        <option value="80">TUMKUR</option>
                                        <option value="81">GULBARGA</option>
                                        <option value="82">BELLARY</option>
                                        <option value="83">BIJAPUR</option>
                                        <option value="84">DAKSHINA KANNADA</option>
                                        <option value="85">DAVANAGERE</option>
                                        <option value="86">RAICHUR</option>
                                        <option value="87">CHENNAI</option>
                                        <option value="88">KANCHEEPURAM</option>
                                        <option value="89">VELLORE</option>
                                        <option value="90">THIRUVALLUR</option>
                                        <option value="91">SALEM</option>
                                        <option value="92">VILUPPURAM</option>
                                        <option value="93">COIMBATORE</option>
                                        <option value="94">TIRUNELVELI</option>
                                        <option value="95">MADURAI</option>
                                        <option value="96">TIRUCHIRAPPALLI</option>
                                        <option value="97">INDORE</option>
                                        <option value="98">JABALPUR</option>
                                        <option value="99">SAGAR</option>
                                        <option value="100">KANPUR NAGAR</option>
                                        <option value="101">JAUNPUR</option>
                                        <option value="102">SITAPUR</option>
                                        <option value="103">BAREILLY</option>
                                        <option value="104">GORAKHPUR</option>
                                        <option value="105">MUZAFFARNAGAR</option>
                                        <option value="106">MEERUT</option>
                                        <option value="107">MIRZAPUR</option>
                                        <option value="108">JHANSI</option>
                                        <option value="109">FARRUKHABAD</option>
                                        <option value="110">KANNAUJ</option>
                                        <option value="111">BIKANER</option>
                                        <option value="112">JHUNJHUNUN</option>
                                        <option value="113">GANGANAGAR</option>
                                        <option value="114">KOTA</option>
                                        <option value="115">DAUSA</option>
                                        <option value="116">JAISALMER</option>
                                        <option value="117">JAIPUR</option>
                                        <option value="118">JODHPUR</option>
                                        <option value="119">ALWAR</option>
                                        <option value="120">NAGAUR</option>
                                        <option value="121">UDAIPUR</option>
                                        <option value="122">SIKAR</option>
                                        <option value="123">BARMER</option>
                                        <option value="124">AJMER</option>
                                        <option value="125">BHARATPUR</option>
                                        <option value="126">BHILWARA</option>
                                        <option value="127">KOTA</option>
                                        <option value="128">HARIDWAR</option>
                                        <option value="129">DEHRADUN</option>
                                        <option value="130">UDHAM SINGH NAGAR</option>
                                        <option value="131">NAINITAL</option>
                                        <option value="132">PAURI GARHWAL</option>
                                        <option value="133">ALMORA</option>
                                        <option value="134">TEHRI GARHWAL</option>
                                        <option value="135">PITHORAGARH</option>
                                        <option value="136">CHAMOLI</option>
                                        <option value="137">UTTARKASHI</option>
                                        <option value="138">BAGESHWAR</option>
                                        <option value="139">CHAMPAWAT</option>
                                        <option value="140">RUDRAPRAYAG</option>
                                        <option value="141">RANGAREDDY</option>
                                        <option value="142">EAST GODAVARI</option>
                                        <option value="143">GUNTUR</option>
                                        <option value="144">KRISHNA</option>
                                        <option value="145">VISAKHAPATNAM</option>
                                        <option value="146">CHITTOOR</option>
                                        <option value="147">ANANTAPUR</option>
                                        <option value="148">KURNOOL</option>
                                        <option value="149">MAHBUBNAGAR</option>
                                        <option value="150">HYDERABAD</option>
                                        <option value="151">WEST GODAVARI</option>
                                        <option value="152">KARIMNAGAR</option>
                                        <option value="153">WARANGAL</option>
                                        <option value="154">NALGONDA</option>
                                        <option value="155">PRAKASAM</option>
                                        <option value="156">MEDAK</option>
                                        <option value="157">SRI POTTI SRIRAMULU NELLORE</option>
                                        <option value="158">YSR</option>
                                        <option value="159">KHAMMAM</option>
                                        <option value="160">ADILABAD</option>
                                        <option value="161">SRIKAKULAM</option>
                                        <option value="162">NIZAMABAD</option>
                                        <option value="163">REWA</option>
                                        <option value="164">SATNA</option>
                                        <option value="165">DHAR</option>
                                        <option value="166">CHHINDWARA</option>
                                        <option value="167">GWALIOR</option>
                                        <option value="168">UJJAIN</option>
                                        <option value="169">ALLAHABAD</option>
                                        <option value="170">MORADABAD</option>
                                        <option value="171">GHAZIABAD</option>
                                        <option value="172">AZAMGARH</option>
                                        <option value="173">LUCKNOW</option>
                                        <option value="174">KASARAGOD</option>
                                        <option value="175">PATHANAMTHITTA</option>
                                        <option value="176">IDUKKI</option>
                                        <option value="177">WAYANAD</option>
                                        <option value="178">PUNCH</option>
                                        <option value="179">KULGAM</option>
                                        <option value="180">DODA</option>
                                        <option value="181">BANDIPORA</option>
                                        <option value="182">KARGIL</option>
                                        <option value="183">SAMBA</option>
                                        <option value="184">DARJILING</option>
                                        <option value="185">JEHANABAD</option>
                                        <option value="186">KHAGARIA</option>
                                        <option value="187">SUPAUL</option>
                                        <option value="188">BAGALKOT</option>
                                        <option value="189">DHARWAD</option>
                                        <option value="190">MANDYA</option>
                                        <option value="191">BIDAR</option>
                                        <option value="192">KOPPAL</option>
                                        <option value="193">UDUPI</option>
                                        <option value="194">CHIKMAGALUR</option>
                                        <option value="195">YADGIR</option>
                                        <option value="196">THOOTHUKKUDI</option>
                                        <option value="197">THIRUVARUR</option>
                                        <option value="198">AGRA</option>
                                        <option value="199">PAPUMPARE</option>
                                        <option value="200">CHANGLANG</option>
                                        <option value="201">LOHIT</option>
                                        <option value="202">WEST SIANG</option>
                                        <option value="203">TIRAP</option>
                                        <option value="204">EAST SIANG</option>
                                        <option value="205">KURUNG KUMEY</option>
                                        <option value="206">WEST KAMENG</option>
                                        <option value="207">UPPER SUBANSIRI</option>
                                        <option value="208">LOWER SUBANSIRI</option>
                                        <option value="209">EAST KAMENG</option>
                                        <option value="210">LOWER DIBANG VALLEY</option>
                                        <option value="211">TAWANG</option>
                                        <option value="212">UPPER SIANG</option>
                                        <option value="213">ANJAW</option>
                                        <option value="214">DIBANG VALLEY</option>
                                        <option value="215">NORTH GOA</option>
                                        <option value="216">SOUTH GOA</option>
                                        <option value="217">ADILABAD</option>
                                        <option value="218">BHADRADRI</option>
                                        <option value="219">HYDERABAD</option>
                                        <option value="220">JAGTIAL</option>
                                        <option value="221">JANGAON</option>
                                        <option value="222">JAYASHANKAR</option>
                                        <option value="223">JOGULAMBA</option>
                                        <option value="224">KAMAREDDY</option>
                                        <option value="225">KARIMNAGAR</option>
                                        <option value="226">KHAMMAM</option>
                                        <option value="227">KOMARAM BHEEM</option>
                                        <option value="228">MAHABUBABAD</option>
                                        <option value="229">WEST GARO HILLS</option>
                                        <option value="230">JAINTIA HILLS</option>
                                        <option value="231">WEST KHASI HILLS</option>
                                        <option value="232">EAST GARO HILLS</option>
                                        <option value="233">RI BHOI</option>
                                        <option value="234">SOUTH GARO HILLS</option>
                                        <option value="235">CHANGLANG</option>
                                        <option value="236">TAWANG</option>
                                        <option value="237">CHANGLANG</option>
                                        <option value="238">LOHIT</option>
                                        <option value="239">WEST SIANG</option>
                                        <option value="240">TIRAP</option>
                                        <option value="241">EAST SIANG</option>
                                        <option value="242">CHANGLANG</option>
                                        <option value="243">LOHIT</option>
                                        <option value="244">WEST SIANG</option>
                                        <option value="245">TIRAP</option>
                                        <option value="246">EAST SIANG</option>
                                        <option value="247">KURUNG KUMEY</option>
                                        <option value="248">WEST KAMENG</option>
                                        <option value="249">UPPER SUBANSIRI</option>
                                        <option value="250">VIZIANAGARAM</option>
                                        <option value="251">EAST KHASI HILLS</option>
                                        <option value="252">LOHIT</option>
                                        <option value="253">WEST SIANG</option>
                                        <option value="254">TIRAP</option>
                                        <option value="255">EAST SIANG</option>
                                        <option value="256">KURUNG KUMEY</option>
                                        <option value="257">WEST KAMENG</option>
                                        <option value="258">UPPER SUBANSIRI</option>
                                        <option value="259">LOWER SUBANSIRI</option>
                                        <option value="260">EAST KAMENG</option>
                                        <option value="261">LOWER DIBANG VALLEY</option>
                                        <option value="262">WEST KAMENG</option>
                                        <option value="263">UPPER SUBANSIRI</option>
                                        <option value="264">LOWER SUBANSIRI</option>
                                        <option value="265">EAST KAMENG</option>
                                        <option value="266">LOWER DIBANG VALLEY</option>
                                        <option value="267">TAWANG</option>
                                        <option value="268">UPPER SIANG</option>
                                        <option value="269">ANJAW</option>
                                        <option value="270">DIBANG VALLEY</option>
                                        <option value="271">LOWER SUBANSIRI</option>
                                        <option value="272">EAST KAMENG</option>
                                        <option value="273">LOWER DIBANG VALLEY</option>
                                        <option value="274">TAWANG</option>
                                        <option value="275">UPPER SIANG</option>
                                        <option value="276">ANJAW</option>
                                        <option value="277">DIBANG VALLEY</option>
                                        <option value="278">ANJAW</option>
                                        <option value="279">DIBANG VALLEY</option>
                                        <option value="280">CHANGLANG</option>
                                        <option value="281">LOHIT</option>
                                        <option value="282">WEST SIANG</option>
                                        <option value="283">TIRAP</option>
                                        <option value="284">EAST SIANG</option>
                                        <option value="285">KURUNG KUMEY</option>
                                        <option value="286">WEST KAMENG</option>
                                        <option value="287">UPPER SUBANSIRI</option>
                                        <option value="288">LOWER SUBANSIRI</option>
                                        <option value="289">EAST KAMENG</option>
                                        <option value="290">LOWER DIBANG VALLEY</option>
                                        <option value="291">TAWANG</option>
                                        <option value="292">UPPER SIANG</option>
                                        <option value="293">ANJAW</option>
                                        <option value="294">DIBANG VALLEY</option>
                                        <option value="295">NORTH GOA</option>
                                        <option value="296">SOUTH GOA</option>
                                        <option value="297">ADILABAD</option>
                                        <option value="298">BHADRADRI</option>
                                        <option value="299">HYDERABAD</option>
                                        <option value="300">JAGTIAL</option>
                                        <option value="301">JANGAON</option>
                                        <option value="302">JAYASHANKAR</option>
                                        <option value="303">JOGULAMBA</option>
                                        <option value="304">KAMAREDDY</option>
                                        <option value="305">KARIMNAGAR</option>
                                        <option value="306">KHAMMAM</option>
                                        <option value="307">KOMARAM BHEEM</option>
                                        <option value="308">MAHABUBABAD</option>
                                        <option value="309">EAST KHASI HILLS</option>
                                        <option value="310">WEST GARO HILLS</option>
                                        <option value="311">JAINTIA HILLS</option>
                                        <option value="312">WEST KHASI HILLS</option>
                                        <option value="313">EAST GARO HILLS</option>
                                        <option value="314">RI BHOI</option>
                                        <option value="315">SOUTH GARO HILLS</option>
                                        <option value="316">MANDI</option>
                                        <option value="317">VALSAD</option>
                                        <option value="318">EAST JAINTIA HILLS</option>
                                        <option value="319">AIZAWL</option>
                                        <option value="320">SURAT</option>
                                        <option value="321">VADODARA</option>
                                        <option value="322">BALAGHAT</option>
                                        <option value="323">SINGRAULI</option>
                                        <option value="324">BURHANPUR</option>
                                        <option value="325">INDAPUR</option>
                                        <option value="326">NAJAFGARH</option>
                                        <option value="327">RAIPUR</option>
                                        <option value="328">DHANBAD</option>
                                        <option value="329">AMBALA CANTT.</option>
                                        <option value="330">CHITTORGARH</option>
                                        <option value="331">CUTTACK</option>
                                        <option value="332">PAITHAN</option>
                                        <option value="333">RAIGARH</option>
                                        <option value="334">PURNIA</option>
                                        <option value="335">DURG</option>
                                        <option value="336">BAKARO</option>
                                        <option value="337">BHARUCH</option>
                                        <option value="338">KACHCHH</option>
                                        <option value="339">NAVSARI</option>
                                        <option value="340">DUNGARPUR</option>
                                        <option value="341">BUDHERA</option>
                                        <option value="342">CHATTERPUR</option>
                                        <option value="343">UNJHA</option>
                                        <option value="344">LUDHIANA</option>
                                        <option value="345">JALGOAN</option>
                                        <option value="346">ARARIA</option>
                                        <option value="347">BANKA</option>
                                        <option value="348">SILVASSA</option>
                                        <option value="349">AHMEDABAD</option>
                                        <option value="350">SITAMARHI</option>
                                        <option value="351">DAMAN</option>
                                        <option value="352">BULANDSHAHR</option>
                                        <option value="353">SONIPAT</option>
                                        <option value="354">TAPI</option>
                                        <option value="355">GHAZIPUR</option>
                                        <option value="356">BARASHAT</option>
                                        <option value="357">KUTCH</option>
                                        <option value="358">MUNGER</option>
                                        <option value="359">CHAMPARAN</option>
                                        <option value="360">South West Delhi</option>
                                        <option value="361">BILASPUR</option>
                                        <option value="362">KUSHINAGAR</option>
                                        <option value="363">MATHURA</option>
                                        <option value="364">KEONJHAR</option>
                                        <option value="365">VARANASI</option>
                                        <option value="366">BHAGALPUR</option>
                                        <option value="367">BHOPAL</option>
                                        <option value="368">DADRA NAGAR HAVELI</option>
                                        <option value="369">NAGAR</option>
                                        <option value="370">KARNAL</option>
                                        <option value="371">KHORDA</option>

                                    </select>
                                </div>

                                <div class="col-auto">
                                    <label>Taluka<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="PADDTaluka" class="inputStyle">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Pincode<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="PADDPincode" class="inputStyle"
                                        pattern="[0-9]{3}-[0-9]{3}">
                                </div>
                            </div>

                            <hr style="height: 2px;">

                            <div class="row">
                                <div class="col-auto">
                                    <h6>Guardian Details<a style="color: red;">*</a></h6> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Guardian Name <a style="color: red;">*</a></label> <br>
                                    <input type="text" name="Gname" class="inputStyle" pattern="">
                                </div>

                                <div class="col-auto">
                                    <label>Relationship<a style="color: red;">*</a></label> <br>
                                    <input type="text" name="GRelationship" class="inputStyle" pattern="">
                                </div>

                                <div class="col-auto">
                                    <label>Mobile<a style="color: red;">*</a></label> <br>
                                    <input type="tel" name="GMobileNo" class="inputStyle">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-auto">
                                    <label>Email<a style="color: red;">*</a></label> <br>
                                    <input type="email" name="GEmail" class="inputStyle" pattern="[0-9]{3}-[0-9]{3}">
                                </div>

                            </div>
                            <div class="row">

                            </div>
                            <ul class="float-right">
                                <li class="list-inline-item">
                                    <button type="button" class="btn btn-outline-primary prev-step">Previous</button>
                                </li>
                                <li class="list-inline-item">
                                    <button type="button" class="btn btn-primary next-step">Save and
                                        continue</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="step3">

                            <div class="row">

                            </div>

                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Board/University</th>
                                        <th>School/Collage</th>
                                        <th>Month</th>
                                        <th>Year</th>
                                        <th>Seat No</th>
                                        <th>Mark<br>Obtained</th>
                                        <th>OutOff</th>
                                        <th>Percentage</th>
                                        <th>Result</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10th</td>
                                        <td><input type="text" name="10thUniversity" placeholder="Enter University "
                                                class="inputStyle">
                                        </td>
                                        <td><input type="text" name="SchoolName" placeholder="Enter School Name "
                                                class="inputStyle">
                                        </td>
                                        <td>
                                            <select name="Month">
                                                <option value="0">--select--</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="Year">
                                                <option value="0">--select--</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                            </select>
                                        </td>

                                        <td><input type="text" name="10thSeatNo" placeholder="Enter Seat No "
                                                class="inputStyle">
                                        </td>
                                        <td><input type="text" name="10thMarkObtained" placeholder="Enter Marks "
                                                class="inputStyle">
                                        </td>
                                        <td><input type="text" name="10thMarkOutoff" placeholder="" class="inputStyle">
                                        </td>
                                        <td><input type="text" name="10thpercentage" placeholder="Enter percentage "
                                                class="inputStyle">
                                        </td>
                                        <td>
                                            <select name="Result">
                                                <option value="0">--select--</option>
                                                <option value="Pass">Pass</option>
                                                <option value="Fail">Fail</option>
                                            </select>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>12th</td>
                                        <td><input type="text" name="12thUniversity" placeholder="Enter University "
                                                class="inputStyle">
                                        </td>
                                        <td><input type="text" name="CollageName" placeholder="Enter Collage Name "
                                                class="inputStyle">
                                        </td>
                                        <td>
                                            <select name="Month">
                                                <option value="0">--select--</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select name="Year">
                                                <option value="0">--select--</option>
                                                <option value="2023">2023</option>
                                                <option value="2022">2022</option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                            </select>
                                        </td>
                                        <td><input type="text" name="12thSeatNo" placeholder="Enter Seat No "
                                                class="inputStyle">
                                        </td>
                                        <td><input type="text" name="12thMarkObtained" placeholder="Enter Marks "
                                                class="inputStyle">
                                        </td>
                                        <td><input type="text" name="12thMarkOutoff" placeholder=" " class="inputStyle">
                                        </td>
                                        <td><input type="text" name="12thpercentage" placeholder="Enter percentage "
                                                class="inputStyle">
                                        </td>
                                        <td>
                                            <select name="Result">
                                                <option value="0">--select--</option>
                                                <option value="Pass">Pass</option>
                                                <option value="Fail">Fail</option>
                                            </select>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <h6>SSC Marks details</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Mathematics</th>
                                        <th>General Science</th>
                                        <th>English</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10th</td>
                                        <td><input type="text" name="10thMathematics" placeholder=" "
                                                class="inputStyle">
                                        </td>
                                        <td><input type="text" name="10thGeneralScience" placeholder=" "
                                                class="inputStyle"></td>
                                        <td><input type="text" name="10thEnglish" placeholde=" " class="inputStyle">
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                            <h6>Hsc Marks details</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>Mathematics</th>
                                        <th>Physics</th>
                                        <th>Chemistry</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>12th</td>
                                        <td><input type="text" name="12thMathematics" placeholder=" "
                                                class="inputStyle">
                                        </td>
                                        <td><input type="text" name="12thPhysics" placeholder=" " class="inputStyle">
                                        </td>
                                        <td><input type="text" name="12thChemistry" placeholde=" " class="inputStyle">
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                            <h6>Other details</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Name of School/Institute last Attended(Full Name) </th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" name="PastInstitute" placeholder=" " class="inputStyle">
                                        </td>
                                        <td><input type="text" name="PastInstituteAdd" placeholder=" "
                                                class="inputStyle"></td>
                                    </tr>
                                </tbody>
                            </table>


                            <div class="row">

                            </div>


                            <ul class="float-right">
                                <li class="list-inline-item">
                                    <button type="button" class="btn btn-outline-primary prev-step">Previous</button>
                                </li>
                                <li class="list-inline-item">
                                    <button type="button" class="btn btn-primary btn-info-full next-step">Save and
                                        continue</button>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane" role="tabpanel" id="step4">

                            <div class="row">

                            </div>
                            <h6>Admission Document List</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Document Name</th>
                                        <th>Document</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Passport Size Photo</td>
                                        <td><input type="file" name="ProfilePhoto
                                    " placeholder=" " class="inputStyle"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Allotment Letter</td>
                                        <td><input type="file" name="AllotmentLetter" placeholder=" "
                                                class="inputStyle"></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>ARC Confirmation Letter</td>
                                        <td><input type="file" name="ARC Confirmation Letter" placeholder=" "
                                                class="inputStyle">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>HSC (12th Std.) Marksheet (if applicable)</td>
                                        <td><input type="file" name="HSCMarksheet" placeholder=" " class="inputStyle">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>SSC (10th Std.) Marksheet</td>
                                        <td><input type="file" name="SSCMarksheet" placeholder=" " class="inputStyle">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Leaving or Transfer Certificate</td>
                                        <td><input type="file" name="LC" placeholder=" " class="inputStyle"></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Domicile Certificate</td>
                                        <td><input type="file" name="Domicile" placeholder=" " class="inputStyle">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Aadhar Card</td>
                                        <td><input type="file" name="AadharCard" placeholder=" " class="inputStyle">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Caste Certificate (if applicable)</td>
                                        <td><input type="file" name="CasteCertificate" placeholder=" "
                                                class="inputStyle"></td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Caste Validity Certificate (if applicable)</td>
                                        <td><input type="file" name="CasteValidity" placeholder=" " class="inputStyle">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Non-Creamy Layer Certificate (if applicable)</td>
                                        <td><input type="file" name="Non-CreamyLayer" placeholder=" "
                                                class="inputStyle"></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Income Certificate (if applicable)</td>
                                        <td><input type="file" name="IncomeCertificate" placeholder=" "
                                                class="inputStyle"></td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>EWS Certificate (if applicable)</td>
                                        <td><input type="file" name="EWSCertificate" placeholder=" " class="inputStyle">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Defense Certificate (if applicable)</td>
                                        <td><input type="file" name="DefenseCertificate" placeholder=" "
                                                class="inputStyle"></td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Bank Passbook</td>
                                        <td><input type="file" name="BankPassbook" placeholder=" " class="inputStyle">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Gap Certificate (if applicable)</td>
                                        <td><input type="file" name="GapCertificate" placeholder=" " class="inputStyle">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Other</td>
                                        <td><input type="file" name="OtherCertificate" placeholder=" "
                                                class="inputStyle"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">

                            </div>

                            <ul class="float-right">
                                <li class="list-inline-item">
                                    <button type="button" class="btn btn-outline-primary prev-step">Previous</button>
                                </li>
                                <li class="list-inline-item">
                                    <button type="button" class="btn btn-primary btn-info-full next-step">Save and
                                        continue</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="complete">
                            <h3>Complete!</h3>
                            <p>You have successfully completed all steps.</p>
                        </div>

                    </div>
                </form>
            </section>
        </div>
    </div>
</body>

</html>
<?php
}
?>