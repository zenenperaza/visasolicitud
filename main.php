<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("inclusion/head.php"); ?>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: Verdana, Arial, Helvetica, sans-serif;
            background-color: #ddd;
            font-size: 11px;
        }
       
        .submit {
            float: right;
            width: 230px;
            color: white;   
            font-size: 12px;
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
        #siteinfo {
            background: #ddd url(./imagenes/iconos/bg-siteinfo.gif) top left repeat-x;
            height: 80px;
            position: relative;
            z-index: 100;
            font-size: 10px;
        }
        #siteinfo a {
            color: #0600e6;
            background: url(./imagenes/iconos/external.gif) right no-repeat;
            padding-right: 13px;
        }
        #siteinfo-legal {
            display: flex;
            border-right: ridge;
            justify-content: center;
            align-items: center;
        }
        #siteinfo p {
            font-size: 11px;
        }
        .container {
            max-width: 760px;
            background-color: #fff;
            margin-left: 0px;
        }
        .banner{
            background: url(./imagenes/logo/banner.png) top left no-repeat;
            color: white;
            height: 80px;
            display: flex;
            align-items: start;
            text-align: -webkit-right;
        }
        .language {
            display: flex;
            align-self: start;
            place-content: flex-end;
            font-size: smaller;
            margin: 17px 0px;
        }
        select#language {
            border-radius: 0px;
            padding: 0px;
            margin: 5px 5px;
            width: 185px!important;
            min-height: 20px;
            text-transform: uppercase;
        }
        .text-apply {
            color: #1c2960;
            font: normal 24px Times, serif;
        }
        .text-online {
            font: normal 16px Times, serif;
            color: #881502;
        }
        .faqs {
            color: Navy;
            background: #fff url(./imagenes/iconos/bg_button.gif) bottom repeat-x;
            border: solid 1px #b0c4dc;
            padding: 3px 3px;
            width: 105px;
            height: 25px;
            text-align: center;
            text-transform: none;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            margin-right: 10px;
            font-weight: bold;
        }
        div.language-panel {
            border-top: solid 5px #a7b3cd;
            border-bottom: solid 1px #d9e3ec;
            padding: 5px 0 0 10px;
            margin: 0 0;
            background: #e1e5ee url(./imagenes/iconos/bg_language.jpg) 0px 20px no-repeat;
        }
        div.toggle-trigger {
            float: right;
            padding-right: 10px;
            margin-top: -1px;
            border-top: solid 1px #d9e3ec;
        }
        .getting-started {
            color: #891300;
            font: bold 12px Iimes, serif;
        }
        a#ctl00_SiteContentPlaceHolder_ucCultures_lnkToolTipHelp {
            text-decoration: none;
            color: #131c44;
            font-size: small;
        }
        
    </style>
</head>

<body>
    <!-- Body Inner -->
    <div class="body-inner">
    <!-- CONTENIDO -->
<div class="container">
    <div class="row banner">
    <div class="language">
        
        <label for="language" id="">Select Tooltip Language</label>   
        <select name="" class="form-control" id="language" style="font-size:8pt;width:190px;">
            <option selected="selected" value="en-US">English</option>
            <option value="ar-EG">العربية (Arabic)</option>
            <option value="bn-BD">বাংলা (Bangla)</option>
            <option value="zh-CN">中文(简体）(Chinese-Simplified) </option>
            <option value="zh-TW">中文(繁體）(Chinese-Traditional) </option>
            <option value="fr-FR">Français (French)</option>
            <option value="de-DE">Deutsch (German)</option>
            <option value="he-IL">עברית (Hebrew)</option>
            <option value="hi-IN">हिन्दी (Hindi)</option>
            <option value="id-ID">Indonesia (Indonesian)</option>
            <option value="it-IT">Italiano (Italian)</option>
            <option value="ja-JP">日本語 (Japanese)</option>
            <option value="ko-KR">한국어 (Korean)</option>
            <option value="sr-Latn-CS">Crnogorski (Montenegrin(Latin))</option>
            <option value="fa-IR">فارسی (Persian(Farsi))</option>
            <option value="pl-PL">Polski (Polish)</option>
            <option value="pt-BR">Português (Portuguese)</option>
            <option value="ro-RO">Română (Romanian)</option>
            <option value="ru-RU">Русский (Russian)</option>
            <option value="es-MX">Español (Spanish)</option>
            <option value="th-TH">ภาษาไทย (Thai)</option>
            <option value="tr-TR">Türkçe (Turkish)</option>
            <option value="ur-PK">اردو (Urdu)</option>
            <option value="vi-VN">Việt (Vietnamese)</option>
        </select>

    </div>
    </div>
    <div class="row mt-5 border-bottom">
        <h4 class="text-online">Online Nonimmigrant Visa Application (DS-160)</h4>
    </div>
    <div class="row">
        <div class="col-8 py-4 d-flex justify-content-start"><h3 class="text-apply">Apply For a Nonimmigrant Visa</h3></div>
        <div class="col-4 mr-1 py-3 d-flex justify-content-end "><button type="button" class="faqs">FAQs</button></div>
    </div>
    <div class="row">
    <div id="ctl00_SiteContentPlaceHolder_ucCultures_updConfirm">
		  
          <div id="" style="border: 0px; margin: 0px; padding: 0px; overflow-y: hidden; visibility: visible; height: 59px;" class=""><div id="ctl00_SiteContentPlaceHolder_ucCultures_pnlLanguages" style="overflow-x: hidden; visibility: visible; height: auto;">
                 
              <div class="toggle-trigger" style="cursor:hand;">
                  <img id="" src="./imagenes/iconos/icon_roll_up.png" style="border-width:0px;">
              </div>
              <div class="language-panel" id="languagePanel">
                  <h4 id="languagePanelHeader">
                      <span id="ctl00_SiteContentPlaceHolder_ucCultures_lblToolTip" class="getting-started" onmousemove="widetip=false; tip='<%= getLocalResource(\'lblToolTip.ToolTip\') %>'; delayToolTip(event,tip,widetip,0,-20);return false" onmouseout="hideToolTip()">Tooltip Language:</span>
                      <span id="ctl00_SiteContentPlaceHolder_ucCultures_lblSelectedLang">English</span>
                      &nbsp;&nbsp;&nbsp;
                      <a id="ctl00_SiteContentPlaceHolder_ucCultures_lnkToolTipHelp" href="common/tooltiphelp.aspx" target="_blank" style="text-decoration:underline;">[View Tool Tip Help]</a>
                      <div style="margin-top:3px;" id="instructionsDiv">
                          <span id="ctl00_SiteContentPlaceHolder_ucCultures_lblInstructions" style="font-weight:normal; color:#9e0b0f; font-size:14px;">Most of this application has been translated.  To see the translation point your mouse over any sentence on the page.</span>
                      </div>
                  </h4> 
                  <table id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages" cellspacing="0" border="0" style="border-collapse:collapse;">
                  <tbody><tr>
                      <td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl00$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl00_btnLanguage" title="English" onfocus="return ValidNavigation();" src="_res/img/culture/en-US.gif" onclick="syncLanguageSelections2('en-US','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl00$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl04$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl04_btnLanguage" title="Chinese" onfocus="return ValidNavigation();" src="_res/img/culture/zh-TW.gif" onclick="syncLanguageSelections2('zh-TW','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl04$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl08$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl08_btnLanguage" title="Hindi" onfocus="return ValidNavigation();" src="_res/img/culture/hi-IN.gif" onclick="syncLanguageSelections2('hi-IN','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl08$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl12$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl12_btnLanguage" title="Korean" onfocus="return ValidNavigation();" src="_res/img/culture/ko-KR.gif" onclick="syncLanguageSelections2('ko-KR','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl12$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl16$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl16_btnLanguage" title="Portuguese" onfocus="return ValidNavigation();" src="_res/img/culture/pt-BR.gif" onclick="syncLanguageSelections2('pt-BR','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl16$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl20$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl20_btnLanguage" title="Thai" onfocus="return ValidNavigation();" src="_res/img/culture/th-TH.gif" onclick="syncLanguageSelections2('th-TH','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl20$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td>
                  </tr><tr>
                      <td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl01$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl01_btnLanguage" title="Arabic" onfocus="return ValidNavigation();" src="_res/img/culture/ar-EG.gif" onclick="syncLanguageSelections2('ar-EG','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl01$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl05$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl05_btnLanguage" title="French" onfocus="return ValidNavigation();" src="_res/img/culture/fr-FR.gif" onclick="syncLanguageSelections2('fr-FR','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl05$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl09$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl09_btnLanguage" title="Indonesian" onfocus="return ValidNavigation();" src="_res/img/culture/id-ID.gif" onclick="syncLanguageSelections2('id-ID','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl09$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl13$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl13_btnLanguage" title="Montenegrin (Latin)" onfocus="return ValidNavigation();" src="_res/img/culture/sr-Latn-CS.gif" onclick="syncLanguageSelections2('sr-Latn-CS','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl13$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl17$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl17_btnLanguage" title="Romanian" onfocus="return ValidNavigation();" src="_res/img/culture/ro-RO.gif" onclick="syncLanguageSelections2('ro-RO','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl17$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl21$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl21_btnLanguage" title="Turkish" onfocus="return ValidNavigation();" src="_res/img/culture/tr-TR.gif" onclick="syncLanguageSelections2('tr-TR','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl21$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td>
                  </tr><tr>
                      <td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl02$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl02_btnLanguage" title="Bengali" onfocus="return ValidNavigation();" src="_res/img/culture/bn-BD.gif" onclick="syncLanguageSelections2('bn-BD','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl02$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl06$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl06_btnLanguage" title="German" onfocus="return ValidNavigation();" src="_res/img/culture/de-DE.gif" onclick="syncLanguageSelections2('de-DE','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl06$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl10$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl10_btnLanguage" title="Italian" onfocus="return ValidNavigation();" src="_res/img/culture/it-IT.gif" onclick="syncLanguageSelections2('it-IT','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl10$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl14$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl14_btnLanguage" title="Persian (Farsi)" onfocus="return ValidNavigation();" src="_res/img/culture/fa-IR.gif" onclick="syncLanguageSelections2('fa-IR','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl14$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl18$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl18_btnLanguage" title="Russian" onfocus="return ValidNavigation();" src="_res/img/culture/ru-RU.gif" onclick="syncLanguageSelections2('ru-RU','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl18$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl22$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl22_btnLanguage" title="Urdu" onfocus="return ValidNavigation();" src="_res/img/culture/ur-PK.gif" onclick="syncLanguageSelections2('ur-PK','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl22$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td>
                  </tr><tr>
                      <td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl03$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl03_btnLanguage" title="Chinese" onfocus="return ValidNavigation();" src="_res/img/culture/zh-CN.gif" onclick="syncLanguageSelections2('zh-CN','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl03$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl07$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl07_btnLanguage" title="Hebrew" onfocus="return ValidNavigation();" src="_res/img/culture/he-IL.gif" onclick="syncLanguageSelections2('he-IL','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl07$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl11$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl11_btnLanguage" title="Japanese" onfocus="return ValidNavigation();" src="_res/img/culture/ja-JP.gif" onclick="syncLanguageSelections2('ja-JP','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl11$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl15$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl15_btnLanguage" title="Polish" onfocus="return ValidNavigation();" src="_res/img/culture/pl-PL.gif" onclick="syncLanguageSelections2('pl-PL','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl15$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl19$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl19_btnLanguage" title="Spanish" onfocus="return ValidNavigation();" src="_res/img/culture/es-MX.gif" onclick="syncLanguageSelections2('es-MX','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl19$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td><td>
                          <input type="image" name="ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl23$btnLanguage" id="ctl00_SiteContentPlaceHolder_ucCultures_gridLanguages_ctl23_btnLanguage" title="Vietnamese" onfocus="return ValidNavigation();" src="_res/img/culture/vi-VN.gif" onclick="syncLanguageSelections2('vi-VN','ctl00_ddlLanguage');WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$SiteContentPlaceHolder$ucCultures$gridLanguages$ctl23$btnLanguage&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" style="background-color:Transparent;height:25px;width:100px;border-width:0px;">                 
                      </td>
                  </tr>
              </tbody></table>
              </div>
          
          </div></div>                
          
          <input type="hidden" name="ctl00$SiteContentPlaceHolder$ucCultures$cpeLanguages_ClientState" id="ctl00_SiteContentPlaceHolder_ucCultures_cpeLanguages_ClientState" value="true">
          
          
      
      </div>
    </div>
    <div class="row border-bottom" style="margin-top:5px">
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
        <div class="col-10 align-self-end">
        <p class="m-0">This site is managed by the Bureau of Consular Affairs, U.S. Department of State. External links to other Internet sites should not be construed as an endorsement of the views contained therein.</p>
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