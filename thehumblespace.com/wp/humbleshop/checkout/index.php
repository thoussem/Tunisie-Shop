<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from thehumblespace.com/wp/humbleshop/my-account/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2015 22:17:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
                  <?php
                //include("submit.php");
                  include("../connexion/lock.php");
                include("../panier/panier.php");
            ?>

      <meta charset="UTF-8" />
      <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Mon Compte | HumbleShop</title>

      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="pingback" href="../xmlrpc.php" />

      <!--Favicon-->
      <link rel="icon" href="../wp-content/uploads/2013/01/hsfavicon.png">

      <meta name='robots' content='noindex,follow' />
<link rel="alternate" type="application/rss+xml" title="HumbleShop &raquo; Feed" href="../feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="HumbleShop &raquo; Comments Feed" href="../comments/feed/index.html" />
<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/styles0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='select2-css'  href='../wp-content/plugins/woocommerce/assets/css/select20235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='yith-woo-featured-video-css'  href='../wp-content/plugins/yith-woocommerce-featured-video/assets/css/woo-featured-video0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='../wp-content/themes/humbleshop/framework/css/bootstrap.min0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='font-css'  href='../wp-content/themes/humbleshop/framework/css/font0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='../wp-content/themes/humbleshop-child/style0235.css?ver=4.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='ot-dynamic-hs_css-css'  href='../wp-content/themes/humbleshop-child/dynamic2f91.css?ver=2.4.6' type='text/css' media='all' />
<script type='text/javascript' src='../wp-includes/js/jquery/jquery90f9.js?ver=1.11.1'></script>
<script type='text/javascript' src='../wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.1.1" />
<meta name="generator" content="WooCommerce 2.3.7" />
<link rel='canonical' href='index.html' />
<link rel='shortlink' href='../index64b4.html?p=10' />
      <!-- Open Graph -->
      <meta property="og:title" content="My Account" />
      <meta property="og:url" content="http://thehumblespace.com/wp/humbleshop/my-account/" />
      <meta property="og:site_name" content="HumbleShop" />
      <meta property="og:description" content="" />
      <meta property="og:image" content=""/>

      <link rel="stylesheet" href="../style/style.css" type="text/css" media="screen" />
      <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
             
            







</head>

<body class="page page-id-10 page-template page-template-page-full page-template-page-full-php woocommerce-account woocommerce-page wf-active">

                  
      
      
      <!-- ====== -->
      <!-- TOPBAR -->
      <!-- ====== -->
      <?php include"../topbar/topbar.php";?>
      
      
      <!-- ================= -->
      <!-- HEADER & BRANDING -->
      <!-- ================= -->
      
<?php include"../header/header.php";?>
      <!-- ================ -->
      <!-- MAIN NAV SECTION -->
      <!-- ================ -->
      <?php include"../navbar/nav.php" ;?>
<!-- ============= -->
<!-- PAGE TEMPLATE -->
<!-- ============= -->

<div class="container">
      <section class="page">
            
            <div class="row">
                  <header class="col-xs-12 prime">
                        <h3>Mon Compte</h3>
                  </header>
            </div>

            <div class="wrap">
                  <div class="row ">

                        <!-- Content -->
                        <div class="col-xs-12"> 
                              
                                    <div class="content clearfix">
                                          <div class="woocommerce">

<div class="woocommerce-info alert alert-warning">Déjà client?<a href="#" class="showlogin">Cliquez ici pour vous identifier</a>
               </div>
               <form name="checkout" method="post" class="checkout woocommerce-checkout" action="http://thehumblespace.com/wp/humbleshop/checkout/" enctype="multipart/form-data">
                  <div class="col2-set row" id="customer_details">
                     <div class="col-1 col-xs-6">
                        <div class="woocommerce-billing-fields">
                           <h3>Billing Details</h3>
                           <p class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated" id="billing_country_field"><label for="billing_country" class="">Country <abbr class="required" title="required">*</abbr></label>
                           <div class="select2-container country_to_state country_select" id="s2id_billing_country" style="width: 100%;"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-1">United Kingdom (UK)</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen1" class="select2-offscreen">Country *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1"></div>
                           <select name="billing_country" id="billing_country" class="country_to_state country_select " tabindex="-1" title="Country *" style="display: none;">
                              <option value="">Select a country…</option>
                              <option value="AX">Åland Islands</option>
                              <option value="AF">Afghanistan</option>
                              <option value="AL">Albania</option>
                              <option value="DZ">Algeria</option>
                              <option value="AD">Andorra</option>
                              <option value="AO">Angola</option>
                              <option value="AI">Anguilla</option>
                              <option value="AQ">Antarctica</option>
                              <option value="AG">Antigua and Barbuda</option>
                              <option value="AR">Argentina</option>
                              <option value="AM">Armenia</option>
                              <option value="AW">Aruba</option>
                              <option value="AU">Australia</option>
                              <option value="AT">Austria</option>
                              <option value="AZ">Azerbaijan</option>
                              <option value="BS">Bahamas</option>
                              <option value="BH">Bahrain</option>
                              <option value="BD">Bangladesh</option>
                              <option value="BB">Barbados</option>
                              <option value="BY">Belarus</option>
                              <option value="PW">Belau</option>
                              <option value="BE">Belgium</option>
                              <option value="BZ">Belize</option>
                              <option value="BJ">Benin</option>
                              <option value="BM">Bermuda</option>
                              <option value="BT">Bhutan</option>
                              <option value="BO">Bolivia</option>
                              <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                              <option value="BA">Bosnia and Herzegovina</option>
                              <option value="BW">Botswana</option>
                              <option value="BV">Bouvet Island</option>
                              <option value="BR">Brazil</option>
                              <option value="IO">British Indian Ocean Territory</option>
                              <option value="VG">British Virgin Islands</option>
                              <option value="BN">Brunei</option>
                              <option value="BG">Bulgaria</option>
                              <option value="BF">Burkina Faso</option>
                              <option value="BI">Burundi</option>
                              <option value="KH">Cambodia</option>
                              <option value="CM">Cameroon</option>
                              <option value="CA">Canada</option>
                              <option value="CV">Cape Verde</option>
                              <option value="KY">Cayman Islands</option>
                              <option value="CF">Central African Republic</option>
                              <option value="TD">Chad</option>
                              <option value="CL">Chile</option>
                              <option value="CN">China</option>
                              <option value="CX">Christmas Island</option>
                              <option value="CC">Cocos (Keeling) Islands</option>
                              <option value="CO">Colombia</option>
                              <option value="KM">Comoros</option>
                              <option value="CG">Congo (Brazzaville)</option>
                              <option value="CD">Congo (Kinshasa)</option>
                              <option value="CK">Cook Islands</option>
                              <option value="CR">Costa Rica</option>
                              <option value="HR">Croatia</option>
                              <option value="CU">Cuba</option>
                              <option value="CW">CuraÇao</option>
                              <option value="CY">Cyprus</option>
                              <option value="CZ">Czech Republic</option>
                              <option value="DK">Denmark</option>
                              <option value="DJ">Djibouti</option>
                              <option value="DM">Dominica</option>
                              <option value="DO">Dominican Republic</option>
                              <option value="EC">Ecuador</option>
                              <option value="EG">Egypt</option>
                              <option value="SV">El Salvador</option>
                              <option value="GQ">Equatorial Guinea</option>
                              <option value="ER">Eritrea</option>
                              <option value="EE">Estonia</option>
                              <option value="ET">Ethiopia</option>
                              <option value="FK">Falkland Islands</option>
                              <option value="FO">Faroe Islands</option>
                              <option value="FJ">Fiji</option>
                              <option value="FI">Finland</option>
                              <option value="FR">France</option>
                              <option value="GF">French Guiana</option>
                              <option value="PF">French Polynesia</option>
                              <option value="TF">French Southern Territories</option>
                              <option value="GA">Gabon</option>
                              <option value="GM">Gambia</option>
                              <option value="GE">Georgia</option>
                              <option value="DE">Germany</option>
                              <option value="GH">Ghana</option>
                              <option value="GI">Gibraltar</option>
                              <option value="GR">Greece</option>
                              <option value="GL">Greenland</option>
                              <option value="GD">Grenada</option>
                              <option value="GP">Guadeloupe</option>
                              <option value="GT">Guatemala</option>
                              <option value="GG">Guernsey</option>
                              <option value="GN">Guinea</option>
                              <option value="GW">Guinea-Bissau</option>
                              <option value="GY">Guyana</option>
                              <option value="HT">Haiti</option>
                              <option value="HM">Heard Island and McDonald Islands</option>
                              <option value="HN">Honduras</option>
                              <option value="HK">Hong Kong</option>
                              <option value="HU">Hungary</option>
                              <option value="IS">Iceland</option>
                              <option value="IN">India</option>
                              <option value="ID">Indonesia</option>
                              <option value="IR">Iran</option>
                              <option value="IQ">Iraq</option>
                              <option value="IM">Isle of Man</option>
                              <option value="IL">Israel</option>
                              <option value="IT">Italy</option>
                              <option value="CI">Ivory Coast</option>
                              <option value="JM">Jamaica</option>
                              <option value="JP">Japan</option>
                              <option value="JE">Jersey</option>
                              <option value="JO">Jordan</option>
                              <option value="KZ">Kazakhstan</option>
                              <option value="KE">Kenya</option>
                              <option value="KI">Kiribati</option>
                              <option value="KW">Kuwait</option>
                              <option value="KG">Kyrgyzstan</option>
                              <option value="LA">Laos</option>
                              <option value="LV">Latvia</option>
                              <option value="LB">Lebanon</option>
                              <option value="LS">Lesotho</option>
                              <option value="LR">Liberia</option>
                              <option value="LY">Libya</option>
                              <option value="LI">Liechtenstein</option>
                              <option value="LT">Lithuania</option>
                              <option value="LU">Luxembourg</option>
                              <option value="MO">Macao S.A.R., China</option>
                              <option value="MK">Macedonia</option>
                              <option value="MG">Madagascar</option>
                              <option value="MW">Malawi</option>
                              <option value="MY">Malaysia</option>
                              <option value="MV">Maldives</option>
                              <option value="ML">Mali</option>
                              <option value="MT">Malta</option>
                              <option value="MH">Marshall Islands</option>
                              <option value="MQ">Martinique</option>
                              <option value="MR">Mauritania</option>
                              <option value="MU">Mauritius</option>
                              <option value="YT">Mayotte</option>
                              <option value="MX">Mexico</option>
                              <option value="FM">Micronesia</option>
                              <option value="MD">Moldova</option>
                              <option value="MC">Monaco</option>
                              <option value="MN">Mongolia</option>
                              <option value="ME">Montenegro</option>
                              <option value="MS">Montserrat</option>
                              <option value="MA">Morocco</option>
                              <option value="MZ">Mozambique</option>
                              <option value="MM">Myanmar</option>
                              <option value="NA">Namibia</option>
                              <option value="NR">Nauru</option>
                              <option value="NP">Nepal</option>
                              <option value="NL">Netherlands</option>
                              <option value="AN">Netherlands Antilles</option>
                              <option value="NC">New Caledonia</option>
                              <option value="NZ">New Zealand</option>
                              <option value="NI">Nicaragua</option>
                              <option value="NE">Niger</option>
                              <option value="NG">Nigeria</option>
                              <option value="NU">Niue</option>
                              <option value="NF">Norfolk Island</option>
                              <option value="KP">North Korea</option>
                              <option value="NO">Norway</option>
                              <option value="OM">Oman</option>
                              <option value="PK">Pakistan</option>
                              <option value="PS">Palestinian Territory</option>
                              <option value="PA">Panama</option>
                              <option value="PG">Papua New Guinea</option>
                              <option value="PY">Paraguay</option>
                              <option value="PE">Peru</option>
                              <option value="PH">Philippines</option>
                              <option value="PN">Pitcairn</option>
                              <option value="PL">Poland</option>
                              <option value="PT">Portugal</option>
                              <option value="QA">Qatar</option>
                              <option value="IE">Republic of Ireland</option>
                              <option value="RE">Reunion</option>
                              <option value="RO">Romania</option>
                              <option value="RU">Russia</option>
                              <option value="RW">Rwanda</option>
                              <option value="ST">São Tomé and Príncipe</option>
                              <option value="BL">Saint Barthélemy</option>
                              <option value="SH">Saint Helena</option>
                              <option value="KN">Saint Kitts and Nevis</option>
                              <option value="LC">Saint Lucia</option>
                              <option value="SX">Saint Martin (Dutch part)</option>
                              <option value="MF">Saint Martin (French part)</option>
                              <option value="PM">Saint Pierre and Miquelon</option>
                              <option value="VC">Saint Vincent and the Grenadines</option>
                              <option value="SM">San Marino</option>
                              <option value="SA">Saudi Arabia</option>
                              <option value="SN">Senegal</option>
                              <option value="RS">Serbia</option>
                              <option value="SC">Seychelles</option>
                              <option value="SL">Sierra Leone</option>
                              <option value="SG">Singapore</option>
                              <option value="SK">Slovakia</option>
                              <option value="SI">Slovenia</option>
                              <option value="SB">Solomon Islands</option>
                              <option value="SO">Somalia</option>
                              <option value="ZA">South Africa</option>
                              <option value="GS">South Georgia/Sandwich Islands</option>
                              <option value="KR">South Korea</option>
                              <option value="SS">South Sudan</option>
                              <option value="ES">Spain</option>
                              <option value="LK">Sri Lanka</option>
                              <option value="SD">Sudan</option>
                              <option value="SR">Suriname</option>
                              <option value="SJ">Svalbard and Jan Mayen</option>
                              <option value="SZ">Swaziland</option>
                              <option value="SE">Sweden</option>
                              <option value="CH">Switzerland</option>
                              <option value="SY">Syria</option>
                              <option value="TW">Taiwan</option>
                              <option value="TJ">Tajikistan</option>
                              <option value="TZ">Tanzania</option>
                              <option value="TH">Thailand</option>
                              <option value="TL">Timor-Leste</option>
                              <option value="TG">Togo</option>
                              <option value="TK">Tokelau</option>
                              <option value="TO">Tonga</option>
                              <option value="TT">Trinidad and Tobago</option>
                              <option value="TN">Tunisia</option>
                              <option value="TR">Turkey</option>
                              <option value="TM">Turkmenistan</option>
                              <option value="TC">Turks and Caicos Islands</option>
                              <option value="TV">Tuvalu</option>
                              <option value="UG">Uganda</option>
                              <option value="UA">Ukraine</option>
                              <option value="AE">United Arab Emirates</option>
                              <option value="GB" selected="selected">United Kingdom (UK)</option>
                              <option value="US">United States (US)</option>
                              <option value="UY">Uruguay</option>
                              <option value="UZ">Uzbekistan</option>
                              <option value="VU">Vanuatu</option>
                              <option value="VA">Vatican</option>
                              <option value="VE">Venezuela</option>
                              <option value="VN">Vietnam</option>
                              <option value="WF">Wallis and Futuna</option>
                              <option value="EH">Western Sahara</option>
                              <option value="WS">Western Samoa</option>
                              <option value="YE">Yemen</option>
                              <option value="ZM">Zambia</option>
                              <option value="ZW">Zimbabwe</option>
                           </select>
                           <noscript>&lt;input type="submit" name="woocommerce_checkout_update_totals" value="Update country" /&gt;</noscript>
                           </p>
                           <p class="form-row form-row-first validate-required" id="billing_first_name_field"><label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value=""></p>
                           <p class="form-row form-row-last validate-required" id="billing_last_name_field"><label for="billing_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value=""></p>
                           <div class="clear"></div>
                           <p class="form-row form-row-wide" id="billing_company_field"><label for="billing_company" class="">Company Name</label><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value=""></p>
                           <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field"><label for="billing_address_1" class="">Address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" value=""></p>
                           <p class="form-row form-row-wide address-field" id="billing_address_2_field"><input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value=""></p>
                           <p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-o_class="form-row form-row-wide address-field validate-required"><label for="billing_city" class="">Town / City <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="Town / City" value=""></p>
                           <p class="form-row form-row-first address-field validate-state" id="billing_state_field" data-o_class="form-row form-row-first address-field validate-state"><label for="billing_state" class="">County</label><input type="text" class="input-text " value="" placeholder="" name="billing_state" id="billing_state"></p>
                           <p class="form-row form-row-last address-field validate-required validate-postcode" id="billing_postcode_field" data-o_class="form-row form-row-last address-field validate-required validate-postcode"><label for="billing_postcode" class="">Postcode <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="Postcode" value=""></p>
                           <div class="clear"></div>
                           <p class="form-row form-row-first validate-required validate-email" id="billing_email_field"><label for="billing_email" class="">Email Address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_email" id="billing_email" placeholder="" value=""></p>
                           <p class="form-row form-row-last validate-required validate-phone" id="billing_phone_field"><label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value=""></p>
                           <div class="clear"></div>
                           <p class="form-row form-row-wide create-account">
                              <input class="input-checkbox" id="createaccount" type="checkbox" name="createaccount" value="1"> <label for="createaccount" class="checkbox">Create an account?</label>
                           </p>
                           <div class="create-account" style="display: none;">
                              <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                              <p class="form-row validate-required" id="account_password_field"><label for="account_password" class="">Account password <abbr class="required" title="required">*</abbr></label><input type="password" class="input-text " name="account_password" id="account_password" placeholder="Password" value=""></p>
                              <div class="clear"></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-2 col-xs-6">
                        <div class="woocommerce-shipping-fields">
                           <h3 id="ship-to-different-address">
                              <label for="ship-to-different-address-checkbox" class="checkbox">Ship to a different address?</label>
                              <input id="ship-to-different-address-checkbox" class="input-checkbox" checked="checked" type="checkbox" name="ship_to_different_address" value="1">
                           </h3>
                           <div class="shipping_address" style="display: block;">
                              <p class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated" id="shipping_country_field"><label for="shipping_country" class="">Country <abbr class="required" title="required">*</abbr></label>
                              <div class="select2-container country_to_state country_select" id="s2id_shipping_country" style="width: 100%;">
                                 <a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">United Kingdom (UK)</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen">Country *</label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2">
                                 <div class="select2-drop select2-display-none select2-with-searchbox">
                                    <div class="select2-search">       <label for="s2id_autogen2_search" class="select2-offscreen">Country *</label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">   </div>
                                    <ul class="select2-results" role="listbox" id="select2-results-2">   </ul>
                                 </div>
                              </div>
                              <select name="shipping_country" id="shipping_country" class="country_to_state country_select " tabindex="-1" title="Country *" style="display: none;">
                                 <option value="">Select a country…</option>
                                 <option value="AX">Åland Islands</option>
                                 <option value="AF">Afghanistan</option>
                                 <option value="AL">Albania</option>
                                 <option value="DZ">Algeria</option>
                                 <option value="AD">Andorra</option>
                                 <option value="AO">Angola</option>
                                 <option value="AI">Anguilla</option>
                                 <option value="AQ">Antarctica</option>
                                 <option value="AG">Antigua and Barbuda</option>
                                 <option value="AR">Argentina</option>
                                 <option value="AM">Armenia</option>
                                 <option value="AW">Aruba</option>
                                 <option value="AU">Australia</option>
                                 <option value="AT">Austria</option>
                                 <option value="AZ">Azerbaijan</option>
                                 <option value="BS">Bahamas</option>
                                 <option value="BH">Bahrain</option>
                                 <option value="BD">Bangladesh</option>
                                 <option value="BB">Barbados</option>
                                 <option value="BY">Belarus</option>
                                 <option value="PW">Belau</option>
                                 <option value="BE">Belgium</option>
                                 <option value="BZ">Belize</option>
                                 <option value="BJ">Benin</option>
                                 <option value="BM">Bermuda</option>
                                 <option value="BT">Bhutan</option>
                                 <option value="BO">Bolivia</option>
                                 <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                 <option value="BA">Bosnia and Herzegovina</option>
                                 <option value="BW">Botswana</option>
                                 <option value="BV">Bouvet Island</option>
                                 <option value="BR">Brazil</option>
                                 <option value="IO">British Indian Ocean Territory</option>
                                 <option value="VG">British Virgin Islands</option>
                                 <option value="BN">Brunei</option>
                                 <option value="BG">Bulgaria</option>
                                 <option value="BF">Burkina Faso</option>
                                 <option value="BI">Burundi</option>
                                 <option value="KH">Cambodia</option>
                                 <option value="CM">Cameroon</option>
                                 <option value="CA">Canada</option>
                                 <option value="CV">Cape Verde</option>
                                 <option value="KY">Cayman Islands</option>
                                 <option value="CF">Central African Republic</option>
                                 <option value="TD">Chad</option>
                                 <option value="CL">Chile</option>
                                 <option value="CN">China</option>
                                 <option value="CX">Christmas Island</option>
                                 <option value="CC">Cocos (Keeling) Islands</option>
                                 <option value="CO">Colombia</option>
                                 <option value="KM">Comoros</option>
                                 <option value="CG">Congo (Brazzaville)</option>
                                 <option value="CD">Congo (Kinshasa)</option>
                                 <option value="CK">Cook Islands</option>
                                 <option value="CR">Costa Rica</option>
                                 <option value="HR">Croatia</option>
                                 <option value="CU">Cuba</option>
                                 <option value="CW">CuraÇao</option>
                                 <option value="CY">Cyprus</option>
                                 <option value="CZ">Czech Republic</option>
                                 <option value="DK">Denmark</option>
                                 <option value="DJ">Djibouti</option>
                                 <option value="DM">Dominica</option>
                                 <option value="DO">Dominican Republic</option>
                                 <option value="EC">Ecuador</option>
                                 <option value="EG">Egypt</option>
                                 <option value="SV">El Salvador</option>
                                 <option value="GQ">Equatorial Guinea</option>
                                 <option value="ER">Eritrea</option>
                                 <option value="EE">Estonia</option>
                                 <option value="ET">Ethiopia</option>
                                 <option value="FK">Falkland Islands</option>
                                 <option value="FO">Faroe Islands</option>
                                 <option value="FJ">Fiji</option>
                                 <option value="FI">Finland</option>
                                 <option value="FR">France</option>
                                 <option value="GF">French Guiana</option>
                                 <option value="PF">French Polynesia</option>
                                 <option value="TF">French Southern Territories</option>
                                 <option value="GA">Gabon</option>
                                 <option value="GM">Gambia</option>
                                 <option value="GE">Georgia</option>
                                 <option value="DE">Germany</option>
                                 <option value="GH">Ghana</option>
                                 <option value="GI">Gibraltar</option>
                                 <option value="GR">Greece</option>
                                 <option value="GL">Greenland</option>
                                 <option value="GD">Grenada</option>
                                 <option value="GP">Guadeloupe</option>
                                 <option value="GT">Guatemala</option>
                                 <option value="GG">Guernsey</option>
                                 <option value="GN">Guinea</option>
                                 <option value="GW">Guinea-Bissau</option>
                                 <option value="GY">Guyana</option>
                                 <option value="HT">Haiti</option>
                                 <option value="HM">Heard Island and McDonald Islands</option>
                                 <option value="HN">Honduras</option>
                                 <option value="HK">Hong Kong</option>
                                 <option value="HU">Hungary</option>
                                 <option value="IS">Iceland</option>
                                 <option value="IN">India</option>
                                 <option value="ID">Indonesia</option>
                                 <option value="IR">Iran</option>
                                 <option value="IQ">Iraq</option>
                                 <option value="IM">Isle of Man</option>
                                 <option value="IL">Israel</option>
                                 <option value="IT">Italy</option>
                                 <option value="CI">Ivory Coast</option>
                                 <option value="JM">Jamaica</option>
                                 <option value="JP">Japan</option>
                                 <option value="JE">Jersey</option>
                                 <option value="JO">Jordan</option>
                                 <option value="KZ">Kazakhstan</option>
                                 <option value="KE">Kenya</option>
                                 <option value="KI">Kiribati</option>
                                 <option value="KW">Kuwait</option>
                                 <option value="KG">Kyrgyzstan</option>
                                 <option value="LA">Laos</option>
                                 <option value="LV">Latvia</option>
                                 <option value="LB">Lebanon</option>
                                 <option value="LS">Lesotho</option>
                                 <option value="LR">Liberia</option>
                                 <option value="LY">Libya</option>
                                 <option value="LI">Liechtenstein</option>
                                 <option value="LT">Lithuania</option>
                                 <option value="LU">Luxembourg</option>
                                 <option value="MO">Macao S.A.R., China</option>
                                 <option value="MK">Macedonia</option>
                                 <option value="MG">Madagascar</option>
                                 <option value="MW">Malawi</option>
                                 <option value="MY">Malaysia</option>
                                 <option value="MV">Maldives</option>
                                 <option value="ML">Mali</option>
                                 <option value="MT">Malta</option>
                                 <option value="MH">Marshall Islands</option>
                                 <option value="MQ">Martinique</option>
                                 <option value="MR">Mauritania</option>
                                 <option value="MU">Mauritius</option>
                                 <option value="YT">Mayotte</option>
                                 <option value="MX">Mexico</option>
                                 <option value="FM">Micronesia</option>
                                 <option value="MD">Moldova</option>
                                 <option value="MC">Monaco</option>
                                 <option value="MN">Mongolia</option>
                                 <option value="ME">Montenegro</option>
                                 <option value="MS">Montserrat</option>
                                 <option value="MA">Morocco</option>
                                 <option value="MZ">Mozambique</option>
                                 <option value="MM">Myanmar</option>
                                 <option value="NA">Namibia</option>
                                 <option value="NR">Nauru</option>
                                 <option value="NP">Nepal</option>
                                 <option value="NL">Netherlands</option>
                                 <option value="AN">Netherlands Antilles</option>
                                 <option value="NC">New Caledonia</option>
                                 <option value="NZ">New Zealand</option>
                                 <option value="NI">Nicaragua</option>
                                 <option value="NE">Niger</option>
                                 <option value="NG">Nigeria</option>
                                 <option value="NU">Niue</option>
                                 <option value="NF">Norfolk Island</option>
                                 <option value="KP">North Korea</option>
                                 <option value="NO">Norway</option>
                                 <option value="OM">Oman</option>
                                 <option value="PK">Pakistan</option>
                                 <option value="PS">Palestinian Territory</option>
                                 <option value="PA">Panama</option>
                                 <option value="PG">Papua New Guinea</option>
                                 <option value="PY">Paraguay</option>
                                 <option value="PE">Peru</option>
                                 <option value="PH">Philippines</option>
                                 <option value="PN">Pitcairn</option>
                                 <option value="PL">Poland</option>
                                 <option value="PT">Portugal</option>
                                 <option value="QA">Qatar</option>
                                 <option value="IE">Republic of Ireland</option>
                                 <option value="RE">Reunion</option>
                                 <option value="RO">Romania</option>
                                 <option value="RU">Russia</option>
                                 <option value="RW">Rwanda</option>
                                 <option value="ST">São Tomé and Príncipe</option>
                                 <option value="BL">Saint Barthélemy</option>
                                 <option value="SH">Saint Helena</option>
                                 <option value="KN">Saint Kitts and Nevis</option>
                                 <option value="LC">Saint Lucia</option>
                                 <option value="SX">Saint Martin (Dutch part)</option>
                                 <option value="MF">Saint Martin (French part)</option>
                                 <option value="PM">Saint Pierre and Miquelon</option>
                                 <option value="VC">Saint Vincent and the Grenadines</option>
                                 <option value="SM">San Marino</option>
                                 <option value="SA">Saudi Arabia</option>
                                 <option value="SN">Senegal</option>
                                 <option value="RS">Serbia</option>
                                 <option value="SC">Seychelles</option>
                                 <option value="SL">Sierra Leone</option>
                                 <option value="SG">Singapore</option>
                                 <option value="SK">Slovakia</option>
                                 <option value="SI">Slovenia</option>
                                 <option value="SB">Solomon Islands</option>
                                 <option value="SO">Somalia</option>
                                 <option value="ZA">South Africa</option>
                                 <option value="GS">South Georgia/Sandwich Islands</option>
                                 <option value="KR">South Korea</option>
                                 <option value="SS">South Sudan</option>
                                 <option value="ES">Spain</option>
                                 <option value="LK">Sri Lanka</option>
                                 <option value="SD">Sudan</option>
                                 <option value="SR">Suriname</option>
                                 <option value="SJ">Svalbard and Jan Mayen</option>
                                 <option value="SZ">Swaziland</option>
                                 <option value="SE">Sweden</option>
                                 <option value="CH">Switzerland</option>
                                 <option value="SY">Syria</option>
                                 <option value="TW">Taiwan</option>
                                 <option value="TJ">Tajikistan</option>
                                 <option value="TZ">Tanzania</option>
                                 <option value="TH">Thailand</option>
                                 <option value="TL">Timor-Leste</option>
                                 <option value="TG">Togo</option>
                                 <option value="TK">Tokelau</option>
                                 <option value="TO">Tonga</option>
                                 <option value="TT">Trinidad and Tobago</option>
                                 <option value="TN">Tunisia</option>
                                 <option value="TR">Turkey</option>
                                 <option value="TM">Turkmenistan</option>
                                 <option value="TC">Turks and Caicos Islands</option>
                                 <option value="TV">Tuvalu</option>
                                 <option value="UG">Uganda</option>
                                 <option value="UA">Ukraine</option>
                                 <option value="AE">United Arab Emirates</option>
                                 <option value="GB" selected="selected">United Kingdom (UK)</option>
                                 <option value="US">United States (US)</option>
                                 <option value="UY">Uruguay</option>
                                 <option value="UZ">Uzbekistan</option>
                                 <option value="VU">Vanuatu</option>
                                 <option value="VA">Vatican</option>
                                 <option value="VE">Venezuela</option>
                                 <option value="VN">Vietnam</option>
                                 <option value="WF">Wallis and Futuna</option>
                                 <option value="EH">Western Sahara</option>
                                 <option value="WS">Western Samoa</option>
                                 <option value="YE">Yemen</option>
                                 <option value="ZM">Zambia</option>
                                 <option value="ZW">Zimbabwe</option>
                              </select>
                              <noscript>&lt;input type="submit" name="woocommerce_checkout_update_totals" value="Update country" /&gt;</noscript>
                              </p>
                              <p class="form-row form-row-first validate-required" id="shipping_first_name_field"><label for="shipping_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="shipping_first_name" id="shipping_first_name" placeholder="" value=""></p>
                              <p class="form-row form-row-last validate-required" id="shipping_last_name_field"><label for="shipping_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="shipping_last_name" id="shipping_last_name" placeholder="" value=""></p>
                              <div class="clear"></div>
                              <p class="form-row form-row-wide" id="shipping_company_field"><label for="shipping_company" class="">Company Name</label><input type="text" class="input-text " name="shipping_company" id="shipping_company" placeholder="" value=""></p>
                              <p class="form-row form-row-wide address-field validate-required" id="shipping_address_1_field"><label for="shipping_address_1" class="">Address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="shipping_address_1" id="shipping_address_1" placeholder="Street address" value=""></p>
                              <p class="form-row form-row-wide address-field" id="shipping_address_2_field"><input type="text" class="input-text " name="shipping_address_2" id="shipping_address_2" placeholder="Apartment, suite, unit etc. (optional)" value=""></p>
                              <p class="form-row form-row-wide address-field validate-required" id="shipping_city_field" data-o_class="form-row form-row-wide address-field validate-required"><label for="shipping_city" class="">Town / City <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="shipping_city" id="shipping_city" placeholder="Town / City" value=""></p>
                              <p class="form-row form-row-first address-field validate-state" id="shipping_state_field" data-o_class="form-row form-row-first address-field validate-state"><label for="shipping_state" class="">County</label><input type="text" class="input-text " value="" placeholder="" name="shipping_state" id="shipping_state"></p>
                              <p class="form-row form-row-last address-field validate-required validate-postcode" id="shipping_postcode_field" data-o_class="form-row form-row-last address-field validate-required validate-postcode"><label for="shipping_postcode" class="">Postcode <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="shipping_postcode" id="shipping_postcode" placeholder="Postcode" value=""></p>
                              <div class="clear"></div>
                           </div>
                           <p class="form-row notes" id="order_comments_field"><label for="order_comments" class="">Order Notes</label><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea></p>
                        </div>
                     </div>
                  </div>
                  <h5 id="order_review_heading">Your order</h5>
                  <div id="order_review" class="woocommerce-checkout-review-order">
                     <table class="shop_table woocommerce-checkout-review-order-table table table-bordered">
                        <thead>
                           <tr>
                              <th class="product-name">Product</th>
                              <th class="product-total">Total</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="cart_item">
                              <td class="product-name">
                                 Radiohead Pocket                                          <strong class="product-quantity">× 1</strong>                                                                          
                              </td>
                              <td class="product-total">
                                 <span class="amount">£99.00</span>                                   
                              </td>
                           </tr>
                        </tbody>
                        <tfoot>
                           <tr class="cart-subtotal">
                              <th>Cart Subtotal</th>
                              <td><span class="amount">£99.00</span></td>
                           </tr>
                           <tr class="shipping">
                              <th>Shipping</th>
                              <td>
                                 <ul id="shipping_method">
                                    <li>
                                       <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate" value="flat_rate" checked="checked" class="shipping_method">
                                       <label for="shipping_method_0_flat_rate">Flat Rate: <span class="amount">£8.49</span></label>
                                    </li>
                                    <li>
                                       <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_free_shipping" value="free_shipping" class="shipping_method">
                                       <label for="shipping_method_0_free_shipping">Free Shipping</label>
                                    </li>
                                    <li>
                                       <input type="radio" name="shipping_method[0]" data-index="0" id="shipping_method_0_local_delivery" value="local_delivery" class="shipping_method">
                                       <label for="shipping_method_0_local_delivery">Local Delivery: <span class="amount">£4.95</span></label>
                                    </li>
                                 </ul>
                              </td>
                           </tr>
                           <tr class="order-total">
                              <th>Order Total</th>
                              <td><strong><span class="amount">£107.49</span></strong> </td>
                           </tr>
                        </tfoot>
                     </table>
                     <div id="payment" class="woocommerce-checkout-payment well">
                        <ul class="payment_methods methods">
                           <li class="payment_method_bacs">
                              <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked" data-order_button_text="">
                              <label for="payment_method_bacs">
                              Direct Bank Transfer    </label>
                              <div class="payment_box payment_method_bacs">
                                 <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</p>
                              </div>
                           </li>
                           <li class="payment_method_cheque">
                              <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" data-order_button_text="">
                              <label for="payment_method_cheque">
                              Cheque Payment    </label>
                              <div class="payment_box payment_method_cheque" style="display:none;">
                                 <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                              </div>
                           </li>
                           <li class="payment_method_paypal">
                              <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">
                              <label for="payment_method_paypal">
                              PayPal <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/AM_mc_vs_ms_ae_UK.png" alt="PayPal Acceptance Mark"><a href="https://www.paypal.com/gb/webapps/mpp/paypal-popup" class="about_paypal" onclick="javascript:window.open('https://www.paypal.com/gb/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" title="What is PayPal?">What is PayPal?</a>   </label>
                              <div class="payment_box payment_method_paypal" style="display:none;">
                                 <p>Pay via PayPal; you can pay with your credit card if you don't have a PayPal account</p>
                              </div>
                           </li>
                           <li class="payment_method_cod">
                              <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="">
                              <label for="payment_method_cod">
                              Cash on Delivery  </label>
                              <div class="payment_box payment_method_cod" style="display:none;">
                                 <p>Pay with cash upon delivery.</p>
                              </div>
                           </li>
                        </ul>
                        <div class="form-row place-order">
                           <noscript>Since your browser does not support JavaScript, or it is disabled, please ensure you click the &lt;em&gt;Update Totals&lt;/em&gt; button before placing your order. You may be charged more than the amount stated above if you fail to do so.&lt;br/&gt;&lt;input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" /&gt;</noscript>
                           <input type="hidden" id="_wpnonce" name="_wpnonce" value="c5f77209e9"><input type="hidden" name="_wp_http_referer" value="/wp/humbleshop/wp-admin/admin-ajax.php">
                           <p class="form-row terms checkbox">
                              <label for="terms" class="checkbox">
                              <input type="checkbox" class="input-checkbox" name="terms" id="terms"> I’ve read and accept the <a href="http://thehumblespace.com/wp/humbleshop/terms-conditions/" target="_blank">terms &amp; conditions</a>                      </label>
                           </p>
                           <input type="submit" class="button btn btn-lg theme alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">            
                        </div>
                        <div class="clear"></div>
                     </div>
                  </div>
               </form>
            </div>


           

</div>

</div>
                                    </div>
                                                                        
                                    <div class="comments clearfix">
                                    
                                    

      <!-- Comments -->

      <div id="comments" class="comments-area">

      
      
      
</div><!-- #comments .comments-area -->
      
                                    </div>

                                                            
                        </div>
                  
                  </div>
            </div>

      </section>
</div>

<!-- ============== -->
<!-- FOOTER SECTION -->
<!-- ============== -->

<?php include"../footer/footer.php";?>

<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/thehumblespace.com\/wp\/humbleshop\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scripts0235.js?ver=4.1.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp\/humbleshop\/wp-admin\/admin-ajax.php","i18n_view_cart":"View Cart","cart_url":"http:\/\/thehumblespace.com\/wp\/humbleshop\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minc0b8.js?ver=2.3.7'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/select2/select2.min49eb.js?ver=3.5.2'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.minc8cb.js?ver=2.60'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp\/humbleshop\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minc0b8.js?ver=2.3.7'></script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min330a.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp\/humbleshop\/wp-admin\/admin-ajax.php","fragment_name":"wc_fragments"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.minc0b8.js?ver=2.3.7'></script>
<script type='text/javascript' src='../wp-content/plugins/yith-woocommerce-featured-video/assets/js/woo-featured-videoc64e.js?ver=1.1.1'></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?sensor=false&amp;ver=20121210'></script>
<script type='text/javascript' src='../wp-content/themes/humbleshop/framework/js/shop6223.js?ver=20121210'></script>
<script type='text/javascript' src='../wp-content/themes/humbleshop/framework/js/scriptf3bd.js?ver=20130124'></script>

</body>

<!-- Mirrored from thehumblespace.com/wp/humbleshop/my-account/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2015 22:17:09 GMT -->
</html>