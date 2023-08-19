<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("inclusion/head.php"); ?>
    <style>
       
        .submit {
            float: right;
            width: 214px;
            color: white;
            padding: 5px 30px 5px 0px;
            text-align: right;
            border-left: solid 1px #a21a1e;
            background: #9e191a url(./imagenes/iconos/bg_action_btn_2.png) right no-repeat;
        }
        .category.create {
            margin-bottom: 1px;
            border-left: solid 10px #6f8db1;
            background: #95b3d7 url(./imagenes/iconos/bg_corner.gif) top right no-repeat;
        }
        .category.retrieve {
            margin-bottom: 1px;
            border-left: solid 10px #b8cce4;
            background: #dbe5f1 url(./imagenes/iconos/bg_corner.gif) top right no-repeat;
        }
        #siteinfo-legal {
            display: flex;
            border-right: ridge;
        }
        #siteinfo a {
            color: #0600e6;
            background: url(./imagenes/iconos/external.gif) right no-repeat;
            padding-right: 13px;
        }
        
    </style>
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
    <?php include("inclusion/topbar.php"); ?>
    <?php include("inclusion/menu.php"); ?>
    <!-- CONTENIDO -->
<div class="container">
    <div class="row ">
    <img src="./imagenes/logo/banner.png" alt="" class="img-fluid">
    </div>
    <div class="row mt-5 border-bottom">
        <h4 class="text-danger">Online Nonimmigrant Visa Application (DS-160)</h4>
    </div>
    <div class="row">
        <div class="col-6 py-4 d-flex justify-content-start"><h3 class="text-info">Apply For a Nonimmigrant Visa</h3></div>
        <div class="col-6 mr-1 py-3 d-flex justify-content-end "><button type="button" class="btn btn-lg btn-info rounded-0 py-0">FAQs</button></div>
    </div>
    <div class="row border-bottom">
        <div class="col-6"><p class="text-danger font-weight-bold">Welcome!</p></div>
        <div class="col-6"><p class="text-danger font-weight-bold">Get Started</p></div>
    </div>
    <div class="row ">
        <div class="col-6 ">
            <p class="">The first step in applying for a U.S. nonimmigrant visa is to complete your application. It takes approximately 90 minutes to do this. After you submit your application, you can move on to the next steps such as scheduling your interview.</p>
     
            <p class="text-primary border-bottom">Important: Before You Start</p>
            <ol id="start-checklist">                    
                <li>
                Learn about <a href="https://travel.state.gov/content/travel/en/us-visas/visa-information-resources/all-visa-categories.html"> Types of Visas.</a>
                </li>
                <li><strong>This website is designed to be accessed using Chrome, Edge, or Firefox only.</strong></li>
                <li> <a href="https://travel.state.gov/content/travel/en/us-visas/visa-information-resources/forms/ds-160-online-nonimmigrant-visa-application/ds-160-faqs.html#doclist">Gather your documents.</a></li>
                <li>Review the <a href="https://ceac.state.gov/GenNIV/Common/Instructions.aspx">instructions</a> and <a href="https://travel.state.gov/content/travel/en/us-visas/visa-information-resources/forms/ds-160-online-nonimmigrant-visa-application/ds-160-faqs.html">FAQ</a>.</li>
            </ol>
            <p class="border-bottom">Notes:</p>
            <p>Other people can assist you with your visa application. Note that under U.S. law (22 C.F.R. 41.103) you must electronically sign and submit your own application unless you qualify for an exemption. Even if someone else helped you complete the application, you (the applicant) must click the “Sign Application” button, or your application may not be accepted.</p>
            <p>**Please be patient as you use this form. Download times may vary depending on your internet connection speed.**</p>
        </div>
        
        <div class="col-6 d-flex flex-column">
            <label for="languaje">Select a location where you will be applying for this visa</label>
            <div class="d-flex p-1 align-items-center">
                <img id="" title="Filter locations" src="./imagenes/iconos/icon_globe.gif" style="height:21px;width:21px;border-width:0px;">
                
                <select name=""  id="languaje"  style="width:320px;" class="form-control m-2">
                    <option selected="selected" value="">- SELECT ONE -</option>
                    <option value="TIA">ALBANIA, TIRANA</option>
                    <option value="ALG">ALGERIA, ALGIERS</option>
                    <option value="LUA">ANGOLA, LUANDA</option>
                    <option value="BNS">ARGENTINA, BUENOS AIRES</option>
                    <option value="YRV">ARMENIA, YEREVAN</option>
                    <option value="MLB">AUSTRALIA, MELBOURNE</option>
                    <option value="PRT">AUSTRALIA, PERTH</option>
                    <option value="SYD">AUSTRALIA, SYDNEY</option>
                    <option value="VNN">AUSTRIA, VIENNA</option>
                    <option value="BKU">AZERBAIJAN, BAKU</option>
                    <option value="NSS">BAHAMAS, NASSAU</option>
                    <option value="MNA">BAHRAIN, MANAMA</option>
                    <option value="DHK">BANGLADESH, DHAKA</option>
                    <option value="BGN">BARBADOS, BRIDGETOWN</option>
                    <option value="BRS">BELGIUM, BRUSSELS</option>
                    <option value="BLZ">BELIZE, BELMOPAN</option>
                    <option value="COT">BENIN, COTONOU</option>
                    <option value="HML">BERMUDA, HAMILTON</option>
                    <option value="LPZ">BOLIVIA, LA PAZ</option>
                    <option value="SAR">BOSNIA-HERZEGOVINA, SARAJEVO</option>
                    <option value="GAB">BOTSWANA, GABORONE</option>
                    <option value="BRA">BRAZIL, BRASILIA</option>
                    <option value="PTA">BRAZIL, PORTO ALEGRE</option>
                    <option value="RCF">BRAZIL, RECIFE</option>
                    <option value="RDJ">BRAZIL, RIO DE JANEIRO</option>
                    <option value="SPL">BRAZIL, SAO PAULO</option>
                    <option value="BSB">BRUNEI, BANDAR SERI BEGAWAN</option>
                    <option value="SOF">BULGARIA, SOFIA</option>
                    <option value="OUG">BURKINA FASO, OUAGADOUGOU</option>
                    <option value="RNG">BURMA, RANGOON</option>
                    <option value="BUJ">BURUNDI, BUJUMBURA</option>
                    <option value="PIA">CABO VERDE, PRAIA</option>
                    <option value="PHP">CAMBODIA, PHNOM PENH</option>
                    <option value="YDE">CAMEROON, YAOUNDE</option>
                    <option value="CLG">CANADA, CALGARY</option>
                    <option value="HLF">CANADA, HALIFAX</option>
                    <option value="MTL">CANADA, MONTREAL</option>
                    <option value="OTT">CANADA, OTTAWA</option>
                    <option value="QBC">CANADA, QUEBEC</option>
                    <option value="TRT">CANADA, TORONTO</option>
                    <option value="VAC">CANADA, VANCOUVER</option>
                    <option value="NDJ">CHAD, N`DJAMENA</option>
                    <option value="SNT">CHILE, SANTIAGO</option>
                    <option value="BEJ">CHINA, BEIJING</option>
                    <option value="GUZ">CHINA, GUANGZHOU</option>
                    <option value="SHG">CHINA, SHANGHAI</option>
                    <option value="SNY">CHINA, SHENYANG</option>
                    <option value="WUH">CHINA, WUHAN</option>
                    <option value="BGT">COLOMBIA, BOGOTA</option>
                    <option value="BRZ">CONGO, BRAZZAVILLE</option>
                    <option value="KIN">CONGO, KINSHASA</option>
                    <option value="SNJ">COSTA RICA, SAN JOSE</option>
                    <option value="ABJ">COTE D`IVORIE, ABIDJAN</option>
                    <option value="ZGB">CROATIA, ZAGREB</option>
                    <option value="HAV">CUBA, HAVANA</option>
                    <option value="CRC">CURACAO, CURACAO</option>
                    <option value="NCS">CYPRUS, NICOSIA</option>
                    <option value="PRG">CZECH REPUBLIC, PRAGUE</option>
                    <option value="CPN">DENMARK, COPENHAGEN</option>
                    <option value="DJI">DJIBOUTI, DJIBOUTI</option>
                    <option value="SDO">DOMINICAN REPUBLIC, SANTO DOMINGO</option>
                    <option value="GYQ">ECUADOR, GUAYAQUIL</option>
                    <option value="QTO">ECUADOR, QUITO</option>
                    <option value="CRO">EGYPT, CAIRO</option>
                    <option value="SNS">EL SALVADOR, SAN SALVADOR</option>
                    <option value="LND">ENGLAND, LONDON</option>
                    <option value="MBO">EQUATORIAL GUINEA, MALABO</option>
                    <option value="ASM">ERITREA, ASMARA</option>
                    <option value="TAL">ESTONIA, TALLINN</option>
                    <option value="MBA">ESWATINI, MBABANE</option>
                    <option value="ADD">ETHIOPIA, ADDIS ABABA</option>
                    <option value="SUV">FIJI, SUVA</option>
                    <option value="HLS">FINLAND, HELSINKI</option>
                    <option value="PRS">FRANCE, PARIS</option>
                    <option value="LIB">GABON, LIBREVILLE</option>
                    <option value="BAN">GAMBIA, BANJUL</option>
                    <option value="TBL">GEORGIA, TBILISI</option>
                    <option value="BRL">GERMANY, BERLIN</option>
                    <option value="FRN">GERMANY, FRANKFURT</option>
                    <option value="MUN">GERMANY, MUNICH</option>
                    <option value="ACC">GHANA, ACCRA</option>
                    <option value="ATH">GREECE, ATHENS</option>
                    <option value="GTM">GUATEMALA, GUATEMALA CITY</option>
                    <option value="CRY">GUINEA, CONAKRY</option>
                    <option value="GEO">GUYANA, GEORGETOWN</option>
                    <option value="PTP">HAITI, PORT-AU-PRINCE</option>
                    <option value="TGG">HONDURAS, TEGUCIGALPA</option>
                    <option value="HNK">HONG KONG</option>
                    <option value="BDP">HUNGARY, BUDAPEST</option>
                    <option value="RKJ">ICELAND, REYKJAVIK</option>
                    <option value="MDR">INDIA, CHENNAI</option>
                    <option value="HYD">INDIA, HYDERABAD</option>
                    <option value="CLC">INDIA, KOLKATA</option>
                    <option value="BMB">INDIA, MUMBAI</option>
                    <option value="NWD">INDIA, NEW DELHI</option>
                    <option value="JAK">INDONESIA, JAKARTA</option>
                    <option value="SRB">INDONESIA, SURABAYA</option>
                    <option value="BGH">IRAQ, BAGHDAD</option>
                    <option value="ERB">IRAQ, ERBIL</option>
                    <option value="DBL">IRELAND, DUBLIN</option>
                    <option value="TLV">ISRAEL, TEL AVIV</option>
                    <option value="FLR">ITALY, FLORENCE</option>
                    <option value="MLN">ITALY, MILAN</option>
                    <option value="NPL">ITALY, NAPLES</option>
                    <option value="RME">ITALY, ROME</option>
                    <option value="KNG">JAMAICA, KINGSTON</option>
                    <option value="NHA">JAPAN, NAHA</option>
                    <option value="KBO">JAPAN, OSAKA/FUKUOKA</option>
                    <option value="TKY">JAPAN, TOKYO/SAPPORO</option>
                    <option value="JRS">JERUSALEM</option>
                    <option value="AMM">JORDAN, AMMAN</option>
                    <option value="ATA">KAZAKHSTAN, ALMATY</option>
                    <option value="AST">KAZAKHSTAN, ASTANA</option>
                    <option value="NRB">KENYA, NAIROBI</option>
                    <option value="PRI">KOSOVO, PRISTINA</option>
                    <option value="KWT">KUWAIT, KUWAIT CITY</option>
                    <option value="BKK">KYRGYZSTAN, BISHKEK</option>
                    <option value="VNT">LAOS, VIENTIANE</option>
                    <option value="RGA">LATVIA, RIGA</option>
                    <option value="BRT">LEBANON, BEIRUT</option>
                    <option value="MAS">LESOTHO, MASERU</option>
                    <option value="MRV">LIBERIA, MONROVIA</option>
                    <option value="VIL">LITHUANIA, VILNIUS</option>
                    <option value="LXM">LUXEMBOURG, LUXEMBOURG</option>
                    <option value="ANT">MADAGASCAR, ANTANANARIVO</option>
                    <option value="LIL">MALAWI, LILONGWE</option>
                    <option value="KLL">MALAYSIA, KUALA LUMPUR</option>
                    <option value="BAM">MALI, BAMAKO</option>
                    <option value="VLL">MALTA, VALLETTA</option>
                    <option value="MAJ">MARSHALL ISLANDS, MAJURO</option>
                    <option value="NUK">MAURITANIA, NOUAKCHOTT</option>
                    <option value="PTL">MAURITIUS, PORT LOUIS</option>
                    <option value="CDJ">MEXICO, CIUDAD JUAREZ</option>
                    <option value="GDL">MEXICO, GUADALAJARA</option>
                    <option value="HER">MEXICO, HERMOSILLO</option>
                    <option value="MTM">MEXICO, MATAMOROS</option>
                    <option value="MER">MEXICO, MERIDA</option>
                    <option value="MEX">MEXICO, MEXICO CITY</option>
                    <option value="MTR">MEXICO, MONTERREY</option>
                    <option value="NGL">MEXICO, NOGALES</option>
                    <option value="NVL">MEXICO, NUEVO LAREDO</option>
                    <option value="TJT">MEXICO, TIJUANA</option>
                    <option value="KOL">MICRONESIA, KOLONIA</option>
                    <option value="CHS">MOLDOVA, CHISINAU</option>
                    <option value="ULN">MONGOLIA, ULAANBAATAR</option>
                    <option value="POD">MONTENEGRO, PODGORICA</option>
                    <option value="CSB">MOROCCO, CASABLANCA</option>
                    <option value="MAP">MOZAMBIQUE, MAPUTO</option>
                    <option value="WHK">NAMIBIA, WINDHOEK</option>
                    <option value="KDU">NEPAL, KATHMANDU</option>
                    <option value="AMS">NETHERLANDS, AMSTERDAM</option>
                    <option value="ACK">NEW ZEALAND, AUCKLAND</option>
                    <option value="MNG">NICARAGUA, MANAGUA</option>
                    <option value="NMY">NIGER, NIAMEY</option>
                    <option value="ABU">NIGERIA, ABUJA</option>
                    <option value="LGS">NIGERIA, LAGOS</option>
                    <option value="SKO">NORTH MACEDONIA, SKOPJE</option>
                    <option value="BLF">NORTHERN IRELAND, BELFAST</option>
                    <option value="OSL">NORWAY, OSLO</option>
                    <option value="MST">OMAN, MUSCAT</option>
                    <option value="ISL">PAKISTAN, ISLAMABAD</option>
                    <option value="KRC">PAKISTAN, KARACHI</option>
                    <option value="KOR">PALAU, KOROR</option>
                    <option value="PNM">PANAMA, PANAMA CITY</option>
                    <option value="PTM">PAPUA NEW GUINEA, PORT MORESBY</option>
                    <option value="ASN">PARAGUAY, ASUNCION</option>
                    <option value="LMA">PERU, LIMA</option>
                    <option value="MNL">PHILIPPINES, MANILA</option>
                    <option value="KRK">POLAND, KRAKOW</option>
                    <option value="WRW">POLAND, WARSAW</option>
                    <option value="LSB">PORTUGAL, LISBON</option>
                    <option value="DOH">QATAR, DOHA</option>
                    <option value="BCH">ROMANIA, BUCHAREST</option>
                    <option value="MOS">RUSSIA, MOSCOW</option>
                    <option value="KGL">RWANDA, KIGALI</option>
                    <option value="APA">SAMOA, APIA</option>
                    <option value="DHR">SAUDI ARABIA, DHAHRAN</option>
                    <option value="JDD">SAUDI ARABIA, JEDDAH</option>
                    <option value="RID">SAUDI ARABIA, RIYADH</option>
                    <option value="DKR">SENEGAL, DAKAR</option>
                    <option value="BLG">SERBIA, BELGRADE</option>
                    <option value="FTN">SIERRA LEONE, FREETOWN</option>
                    <option value="SGP">SINGAPORE, SINGAPORE</option>
                    <option value="BTS">SLOVAKIA, BRATISLAVA</option>
                    <option value="LJU">SLOVENIA, LJUBLJANA</option>
                    <option value="CPT">SOUTH AFRICA, CAPE TOWN</option>
                    <option value="DRB">SOUTH AFRICA, DURBAN</option>
                    <option value="JHN">SOUTH AFRICA, JOHANNESBURG</option>
                    <option value="SEO">SOUTH KOREA, SEOUL</option>
                    <option value="JBA">SOUTH SUDAN, JUBA</option>
                    <option value="MDD">SPAIN, MADRID</option>
                    <option value="CLM">SRI LANKA, COLOMBO</option>
                    <option value="PRM">SURINAME, PARAMARIBO</option>
                    <option value="STK">SWEDEN, STOCKHOLM</option>
                    <option value="BEN">SWITZERLAND, BERN</option>
                    <option value="TAI">TAIWAN, TAIPEI</option>
                    <option value="DHB">TAJIKISTAN, DUSHANBE</option>
                    <option value="DRS">TANZANIA, DAR ES SALAAM</option>
                    <option value="BNK">THAILAND, BANGKOK</option>
                    <option value="CHN">THAILAND, CHIANG MAI</option>
                    <option value="DIL">TIMOR LESTE, DILI</option>
                    <option value="LOM">TOGO, LOME</option>
                    <option value="PTS">TRINIDAD, PORT OF SPAIN</option>
                    <option value="TNS">TUNISIA, TUNIS</option>
                    <option value="ANK">TURKEY, ANKARA</option>
                    <option value="IST">TURKEY, ISTANBUL</option>
                    <option value="AKD">TURKMENISTAN, ASHGABAT</option>
                    <option value="KMP">UGANDA, KAMPALA</option>
                    <option value="KEV">UKRAINE, KYIV</option>
                    <option value="ABD">UNITED ARAB EMIRATES, ABU DHABI</option>
                    <option value="DUB">UNITED ARAB EMIRATES, DUBAI</option>
                    <option value="MTV">URUGUAY, MONTEVIDEO</option>
                    <option value="THT">UZBEKISTAN, TASHKENT</option>
                    <option value="HAN">VIETNAM, HANOI</option>
                    <option value="HCM">VIETNAM, HO CHI MINH CITY</option>
                    <option value="LUS">ZAMBIA, LUSAKA</option>
                    <option value="HRE">ZIMBABWE, HARARE</option>

                </select>
            </div>
            <label for="" id="" class="mt-3">Enter the code as shown:</label>
            <input type="text" name="" id="" class="form-control">
            <div class="m-3">
                CATCHA AQUI
            </div>
            <div class="category create">
                <p style="padding:5px 10px;">Select a location and make sure you have the documents and information you will need.</p>
                <div class="submit" >
                    <span>
                    START AN APPLICATION
                    </span>
                </div>
            </div>
            <div class="category retrieve">
                <p style="padding:5px 10px;">You will be asked for your application ID and answer a security question.</p>
                <div class="submit"> 
                    <span>
                    RETRIEVE AN APPLICATION
                    </span>
                </div>
            </div>
            <div class="m-3 border-bottom">
                <p>Additional Information</p>
            </div>
            <div class="m-2">
                <p>» <strong> Write down the Application </strong> ID displayed on the top right hand corner of the page. If you close your browser window, you will need your ID to access your application again.</p>
                <p>» <strong> Save your application frequently. </strong>  The system will time out after 20 minutes of inactivity, and you will lose all unsaved information.</p>
                <p>» Read more about U.S. visas at <a href="travel.state.gov"> travel.state.gov.</a></p>
                <p>»  Visit the website of the <a href="https://www.usembassy.gov/"> U.S. Embassy or Consulate.</a> </p>

            </div>

                                       

        </div>
    </div>
    <div class="row mb-5" id="siteinfo">
        <div class="col-2" id="siteinfo-legal">
            <img src="./imagenes/iconos/bg-siteinfo-legal.gif" alt="">
        </div>
        <div class="col-10">
        <p>This site is managed by the Bureau of Consular Affairs, U.S. Department of State. External links to other Internet sites should not be construed as an endorsement of the views contained therein.</p>
        <span id="ctl00_siteInfo_hplCopyrightToolTip" class="tooltip_text" tip = &#39;&#39;><a id="ctl00_siteInfo_hplCopyright" tabindex="6010" href="https://ceac.state.gov/genniv/Common/Copyright.aspx" target="_ceac">Copyright Information</a></span>
        &nbsp;
        <span id="ctl00_siteInfo_hplDisclaimersToolTip" class="tooltip_text" tip = &#39;&#39;><a id="ctl00_siteInfo_hplDisclaimers" tabindex="6020" href="https://ceac.state.gov/ceac/Common/Disclaimer.aspx" target="_ceac">Disclaimers</a></span>
        &nbsp;
        <span id="ctl00_siteInfo_hplPaperworkReductionToolTip" class="tooltip_text" tip = &#39;&#39;><a id="ctl00_siteInfo_hplPaperworkReduction" tabindex="6030" href="https://ceac.state.gov/genniv/common/paperworkreduction.aspx" target="_ceac">Paperwork Reduction Act</a></span>
        &nbsp;
        <span id="ctl00_siteInfo_hplFbiPrivacyActToolTip" class="tooltip_text" tip = &#39;&#39;><a id="ctl00_siteInfo_hplFbiPrivacyAct" tabindex="6040" href="https://ceac.state.gov/genniv/common/fbiprivacyact.aspx" target="_ceac">FBI Privacy Act</a></span>
        <span style="float:right;">
            <span id="ctl00_siteInfo_lblIP" tabindex="6050" style="background-color:LightGrey;font-size:0.6em;">(226)</span>
        </span>
        </div>
    </div>
</div> 




    
    <!-- FIN DE CONTENIDO -->


    

    </div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
    <!-- Partical Js files  -->
    <script src="plugins/particles/particles.js" type="text/javascript"></script>
    <script src="plugins/particles/particles-dots.js" type="text/javascript"></script>
    <!-- end: Partical Js files  -->



    <script src="plugins/particles/particles-stars.js" type="text/javascript"></script>
    <!--Particles bubbles-->
    <script src="plugins/particles/particles-bubble.js" type="text/javascript"></script>
    <!--Particles snow-->
    <script src="plugins/particles/particles-snow.js" type="text/javascript"></script>
    <?php include("inclusion/script_validaciones.php"); ?>

</body>

</html>