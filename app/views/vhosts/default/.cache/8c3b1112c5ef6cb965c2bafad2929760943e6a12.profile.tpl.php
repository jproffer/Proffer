<?php /*%%SmartyHeaderCode:9054241935127235bc04324-56322500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c3b1112c5ef6cb965c2bafad2929760943e6a12' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Accounts/profile.tpl',
      1 => 1360093893,
      2 => 'file',
    ),
    'd09c536007830edb2f84e199d62a1a1329de7440' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/includes/header.tpl',
      1 => 1360570617,
      2 => 'file',
    ),
    'd4ba03b79ba41890529a0cc8978f9a0fd28d2b07' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/includes/menu.tpl',
      1 => 1360796789,
      2 => 'file',
    ),
    '1333e7478421d0a96fc491b34260d321128cebba' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Accounts/profile_profile.tpl',
      1 => 1359942812,
      2 => 'file',
    ),
    'e66bf7781917cb562d30d7adf5446e6e4d3c45d1' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Accounts/profile_shipping.tpl',
      1 => 1359942857,
      2 => 'file',
    ),
    'b107aa93b34e97415a59fec31925e3ee5eebf0ae' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/Accounts/profile_billing.tpl',
      1 => 1359942904,
      2 => 'file',
    ),
    'e9d4d619f63ed68279681cbdf8b85194d7dfabc1' => 
    array (
      0 => '/home/firewall/www/vs.profferlabs.com/app/views/vhosts/default/Client/includes/footer.tpl',
      1 => 1360038412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9054241935127235bc04324-56322500',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5127235bcfe5c',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5127235bcfe5c')) {function content_5127235bcfe5c($_smarty_tpl) {?><!DOCTYPE html >
<html>
<head>
	<title>Company Title</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="robots" content="all,follow" />
	<style type='text/css' media='screen' charset='utf-8'>@import url('/themes/default/inc_000_reset.css?24045995');
@import url('/themes/default/inc_010_jquery.css?506022825');
@import url('/themes/default/inc_030_file-upload.css?3932438815');
@import url('/themes/default/inc_040_file-upload-noscript.css?91114233');
@import url('/cache/css/inc_020_main.css');
@import url('/cache/css/inc_022_albums.css');
@import url('/cache/css/inc_050_topmenu.css');
@import url('/themes/default/plugins/colorbox.css?2271957919');
</style>
	<script type='text/javascript' src='/js/jquery.js?4046275924'></script>
<script type='text/javascript' src='/js/jqueryui.js?3554238949'></script>
<script type='text/javascript' src='/js/plugins/jquery/colorbox.js?223878822'></script>
<script type='text/javascript' src='/js/plugins/jquery/validate.js?798737007'></script>
<script type='text/javascript' src='/get/js/name/Client_Accounts_profile'></script>

	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script type="text/javascript" src="/js/Includes/menu.js"></script>
	<script type="text/javascript" src="/js/Includes/Client/menu.js"></script>
	<script type="text/javascript" src="/js/Includes/global.js"></script>

</head>
<body>
<div id="main">
  <div id="header">
	<div style="float:right"> <span style="display:block; padding-top:30px"></span> </div>
	<span style='float: left;'><a href="#"><img id="logo" src="/themes/default/images/logo.png" alt=""  class="border_none" /></a></span>
	<div id="topmenu">
		<div id="smoothmenu" class="ddsmoothmenu">
<ul class="parentmenu">
<li><a href="#">Projects</a>
  <ul class="submenu">
	<li><a href="/projects/join/" class="ajax cboxElement joinproject">Join Project</a></li>
	<li><a href="/projects/new/" class="ajax cboxElement">Create New</a></li>
	<li><a href="/projects/list/">View/Edit</a></li>
  </ul>
</li>
<li><a href="#">Profile</a>
	<ul class="submenu ui-corner-bottom">
		<li><a href="/accounts/profile/">Edit</a></li>
		<li><a href="/accounts/shipping/">Shipping Info</a></li>
		<li><a href="/accounts/billing/">Billing Info</a></li>
	</ul>
</li>
<li><a href="/auth/logout">Logout</a></li>
</ul>
<br style="clear: left" />
</div>

	</div>
  </div>

<div id="toplong" class="panel">
		<form method='post' autocomplete="on" name='frmProfile' id='frmProfile'>
		<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Profile</a></li>
				<li><a href="#tabs-2">Shipping</a></li>
				<li><a href="#tabs-3">Billing</a></li>
			</ul>
			<div id='tabs-1' class='section'>
									<div class="row">
						<div class="label">Email Address</div>
						<div class="field w300"><input class="w200 required email" id="email" name="email" type="text" value="jproffer@gmail.com" placeholder="example@example.com" /></div>
					</div>
				<div class="row">
					<div class="label"></div>
					<div class="toplabel w200">First</div>
					<div class="toplabel w50">M.I.</div>
					<div class="toplabel w200">Last</div>
				</div>
				<div class="row">
					<div class="label">Name</div>
					<div class="field w200"><input class="w150 required" id="fname" name="fname" value="" type="text" placeholder="John" /></div>
					<div class="field w50"><input class="w20" id="mi" name="mi" type="text" placeholder="D" title="Middle Initial" size="2" value="" maxlength="1"  /></div>
					<div class="field w200"><input class="w150 required" id="lname" name="lname" type="text" value="" placeholder="Smith"  /></div>
				</div>
				<div class="row">
					<div class="label">Address</div>
					<div class="field w300"><input class="w200 required" id="address" name="address" type="text" value="" placeholder="100 somestreet ave." title="Address is required."  /></div>
				</div>
				<div class="row">
					<div class="label">Address</div>
					<div class="field w300"><input class="w200" id="address2" name="address2" type="text" value="" placeholder="Suite 771"  /></div>
				</div>
				<div class="row">
					<div class="label">City</div>
					<div class="field w300"><input class="w200 required" id="city" name="city" type="text" value="" placeholder="Austin" title="City is required."  /></div>
				</div>
				<div class="row">
					<div class="label">State</div>
					<div class="field w300" id="statefield">
						<select name="state" id="state" class="required">
							<option value="" selected="selected">Select a State</option> 
							<option value="AL">Alabama</option> 
							<option value="AK">Alaska</option> 
							<option value="AZ">Arizona</option> 
							<option value="AR">Arkansas</option> 
							<option value="CA">California</option> 
							<option value="CO">Colorado</option> 
							<option value="CT">Connecticut</option> 
							<option value="DE">Delaware</option> 
							<option value="DC">District Of Columbia</option> 
							<option value="FL">Florida</option> 
							<option value="GA">Georgia</option> 
							<option value="HI">Hawaii</option> 
							<option value="ID">Idaho</option> 
							<option value="IL">Illinois</option> 
							<option value="IN">Indiana</option> 
							<option value="IA">Iowa</option> 
							<option value="KS">Kansas</option> 
							<option value="KY">Kentucky</option> 
							<option value="LA">Louisiana</option> 
							<option value="ME">Maine</option> 
							<option value="MD">Maryland</option> 
							<option value="MA">Massachusetts</option> 
							<option value="MI">Michigan</option> 
							<option value="MN">Minnesota</option> 
							<option value="MS">Mississippi</option> 
							<option value="MO">Missouri</option> 
							<option value="MT">Montana</option> 
							<option value="NE">Nebraska</option> 
							<option value="NV">Nevada</option> 
							<option value="NH">New Hampshire</option> 
							<option value="NJ">New Jersey</option> 
							<option value="NM">New Mexico</option> 
							<option value="NY">New York</option> 
							<option value="NC">North Carolina</option> 
							<option value="ND">North Dakota</option> 
							<option value="OH">Ohio</option> 
							<option value="OK">Oklahoma</option> 
							<option value="OR">Oregon</option> 
							<option value="PA">Pennsylvania</option> 
							<option value="RI">Rhode Island</option> 
							<option value="SC">South Carolina</option> 
							<option value="SD">South Dakota</option> 
							<option value="TN">Tennessee</option> 
							<option value="TX">Texas</option> 
							<option value="UT">Utah</option> 
							<option value="VT">Vermont</option> 
							<option value="VA">Virginia</option> 
							<option value="WA">Washington</option> 
							<option value="WV">West Virginia</option> 
							<option value="WI">Wisconsin</option> 
							<option value="WY">Wyoming</option>
						</select>
						<input class="w200 hidden required" id="fstate" name="fstate" type="text" value="" placeholder="Enter state/province name" title="State/province is required." />
					</div>
				</div>
				<div class="row">
					<div class="label">Zip/Post Code</div>
					<div class="field w300"><input class="w100" id="zip" name="zip" type="text" value="" placeholder="78704" title="Postal is required." /></div>
				</div>
				<div class="row">
					<div class="label">Country</div>
					<div class="field w300" required>
						<select name="country" id="country" class="country required" >
							<optgroup label="Popular Options">
								<option value="US">United States</option>
								<option value="CA">Canada</option>
							</optgroup>
							<optgroup label="Other">
								<option value="AD">Andorra</option><option value="AE">United Arab Emirates</option><option value="AF">Afghanistan</option><option value="AG">Antigua and Barbuda</option><option value="AI">Anguilla</option><option value="AL">Albania</option><option value="AM">Armenia</option><option value="AN">Netherlands Antilles</option><option value="AO">Angola</option><option value="AQ">Antarctica</option><option value="AR">Argentina</option><option value="AS">American Samoa</option><option value="AT">Austria</option><option value="AU">Australia</option><option value="AW">Aruba</option><option value="AX">Åland Islands</option><option value="AZ">Azerbaijan</option><option value="BA">Bosnia and Herzegovina</option><option value="BB">Barbados</option><option value="BD">Bangladesh</option><option value="BE">Belgium</option><option value="BF">Burkina Faso</option><option value="BG">Bulgaria</option><option value="BH">Bahrain</option><option value="BI">Burundi</option><option value="BJ">Benin</option><option value="BL">Saint Barthélemy</option><option value="BM">Bermuda</option><option value="BN">Brunei</option><option value="BO">Bolivia</option><option value="BQ">British Antarctic Territory</option><option value="BR">Brazil</option><option value="BS">Bahamas</option><option value="BT">Bhutan</option><option value="BV">Bouvet Island</option><option value="BW">Botswana</option><option value="BY">Belarus</option><option value="BZ">Belize</option><option value="CC">Cocos [Keeling] Islands</option><option value="CD">Congo - Kinshasa</option><option value="CF">Central African Republic</option><option value="CG">Congo - Brazzaville</option><option value="CH">Switzerland</option><option value="CI">Côte d’Ivoire</option><option value="CK">Cook Islands</option><option value="CL">Chile</option><option value="CM">Cameroon</option><option value="CN">China</option><option value="CO">Colombia</option><option value="CR">Costa Rica</option><option value="CS">Serbia and Montenegro</option><option value="CT">Canton and Enderbury Islands</option><option value="CU">Cuba</option><option value="CV">Cape Verde</option><option value="CX">Christmas Island</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DD">East Germany</option><option value="DE">Germany</option><option value="DJ">Djibouti</option><option value="DK">Denmark</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="DZ">Algeria</option><option value="EC">Ecuador</option><option value="EE">Estonia</option><option value="EG">Egypt</option><option value="EH">Western Sahara</option><option value="ER">Eritrea</option><option value="ES">Spain</option><option value="ET">Ethiopia</option><option value="FI">Finland</option><option value="FJ">Fiji</option><option value="FK">Falkland Islands</option><option value="FM">Micronesia</option><option value="FO">Faroe Islands</option><option value="FQ">French Southern and Antarctic Territories</option><option value="FR">France</option><option value="FX">Metropolitan France</option><option value="GA">Gabon</option><option value="GB">United Kingdom</option><option value="GD">Grenada</option><option value="GE">Georgia</option><option value="GF">French Guiana</option><option value="GG">Guernsey</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GL">Greenland</option><option value="GM">Gambia</option><option value="GN">Guinea</option><option value="GP">Guadeloupe</option><option value="GQ">Equatorial Guinea</option><option value="GR">Greece</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="GT">Guatemala</option><option value="GU">Guam</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HK">Hong Kong SAR China</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HR">Croatia</option><option value="HT">Haiti</option><option value="HU">Hungary</option><option value="ID">Indonesia</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IM">Isle of Man</option><option value="IN">India</option><option value="IO">British Indian Ocean Territory</option><option value="IQ">Iraq</option><option value="IR">Iran</option><option value="IS">Iceland</option><option value="IT">Italy</option><option value="JE">Jersey</option><option value="JM">Jamaica</option><option value="JO">Jordan</option><option value="JP">Japan</option><option value="JT">Johnston Island</option><option value="KE">Kenya</option><option value="KG">Kyrgyzstan</option><option value="KH">Cambodia</option><option value="KI">Kiribati</option><option value="KM">Comoros</option><option value="KN">Saint Kitts and Nevis</option><option value="KP">North Korea</option><option value="KR">South Korea</option><option value="KW">Kuwait</option><option value="KY">Cayman Islands</option><option value="KZ">Kazakhstan</option><option value="LA">Laos</option><option value="LB">Lebanon</option><option value="LC">Saint Lucia</option><option value="LI">Liechtenstein</option><option value="LK">Sri Lanka</option><option value="LR">Liberia</option><option value="LS">Lesotho</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="LV">Latvia</option><option value="LY">Libya</option><option value="MA">Morocco</option><option value="MC">Monaco</option><option value="MD">Moldova</option><option value="ME">Montenegro</option><option value="MF">Saint Martin</option><option value="MG">Madagascar</option><option value="MH">Marshall Islands</option><option value="MI">Midway Islands</option><option value="MK">Macedonia</option><option value="ML">Mali</option><option value="MM">Myanmar [Burma]</option><option value="MN">Mongolia</option><option value="MO">Macau SAR China</option><option value="MP">Northern Mariana Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MS">Montserrat</option><option value="MT">Malta</option><option value="MU">Mauritius</option><option value="MV">Maldives</option><option value="MW">Malawi</option><option value="MX">Mexico</option><option value="MY">Malaysia</option><option value="MZ">Mozambique</option><option value="NA">Namibia</option><option value="NC">New Caledonia</option><option value="NE">Niger</option><option value="NF">Norfolk Island</option><option value="NG">Nigeria</option><option value="NI">Nicaragua</option><option value="NL">Netherlands</option><option value="NO">Norway</option><option value="NP">Nepal</option><option value="NQ">Dronning Maud Land</option><option value="NR">Nauru</option><option value="NT">Neutral Zone</option><option value="NU">Niue</option><option value="NZ">New Zealand</option><option value="OM">Oman</option><option value="PA">Panama</option><option value="PC">Pacific Islands Trust Territory</option><option value="PE">Peru</option><option value="PF">French Polynesia</option><option value="PG">Papua New Guinea</option><option value="PH">Philippines</option><option value="PK">Pakistan</option><option value="PL">Poland</option><option value="PM">Saint Pierre and Miquelon</option><option value="PN">Pitcairn Islands</option><option value="PR">Puerto Rico</option><option value="PS">Palestinian Territories</option><option value="PT">Portugal</option><option value="PU">U.S. Miscellaneous Pacific Islands</option><option value="PW">Palau</option><option value="PY">Paraguay</option><option value="PZ">Panama Canal Zone</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RS">Serbia</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="SA">Saudi Arabia</option><option value="SB">Solomon Islands</option><option value="SC">Seychelles</option><option value="SD">Sudan</option><option value="SE">Sweden</option><option value="SG">Singapore</option><option value="SH">Saint Helena</option><option value="SI">Slovenia</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SK">Slovakia</option><option value="SL">Sierra Leone</option><option value="SM">San Marino</option><option value="SN">Senegal</option><option value="SO">Somalia</option><option value="SR">Suriname</option><option value="ST">São Tomé and Príncipe</option><option value="SU">Union of Soviet Socialist Republics</option><option value="SV">El Salvador</option><option value="SY">Syria</option><option value="SZ">Swaziland</option><option value="TC">Turks and Caicos Islands</option><option value="TD">Chad</option><option value="TF">French Southern Territories</option><option value="TG">Togo</option><option value="TH">Thailand</option><option value="TJ">Tajikistan</option><option value="TK">Tokelau</option><option value="TL">Timor-Leste</option><option value="TM">Turkmenistan</option><option value="TN">Tunisia</option><option value="TO">Tonga</option><option value="TR">Turkey</option><option value="TT">Trinidad and Tobago</option><option value="TV">Tuvalu</option><option value="TW">Taiwan</option><option value="TZ">Tanzania</option><option value="UA">Ukraine</option><option value="UG">Uganda</option><option value="UM">U.S. Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VA">Vatican City</option><option value="VC">Saint Vincent and the Grenadines</option><option value="VD">North Vietnam</option><option value="VE">Venezuela</option><option value="VG">British Virgin Islands</option><option value="VI">U.S. Virgin Islands</option><option value="VN">Vietnam</option><option value="VU">Vanuatu</option><option value="WF">Wallis and Futuna</option><option value="WK">Wake Island</option><option value="WS">Samoa</option><option value="YD">People's Democratic Republic of Yemen</option><option value="YE">Yemen</option><option value="YT">Mayotte</option><option value="ZA">South Africa</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option><option value="ZZ">Unknown or Invalid Region</option>
							</optgroup>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="label">Phone Number</div>
					<div class="field w200"><input class="w150 required" id="phone" name="phone" type="text" value="" placeholder="555-666-7777" title="Phone is required." /></div>
				</div>

			</div>
			<div id='tabs-2' class='section'>
								<div class="row">
					<div class="label">Location Name</div>
					<div class="field w200"><input class="w150 required" id="shipping_name" name="shipping_name" value="" type="text" placeholder="John"  /></div>
				</div>
				<div class="row">
					<div class="label">Address</div>
					<div class="field w300"><input class="w200 required" id="shipping_address" name="shipping_address" type="text" value="" placeholder="100 somestreet ave." title="Address is required." /></div>
				</div>
				<div class="row">
					<div class="label">Address</div>
					<div class="field w300"><input class="w200" id="shipping_address2" name="shipping_address2" type="text" value="" placeholder="Suite 771" /></div>
				</div>
				<div class="row">
					<div class="label">City</div>
					<div class="field w300"><input class="w200 required" id="shipping_city" name="shipping_city" type="text" value="" placeholder="Austin" title="City is required."  /></div>
				</div>
				<div class="row">
					<div class="label">State</div>
					<div class="field w300" id="shipping_statefield">
						<select name="shipping_state" id="shipping_state" class="required"> 
							<option value="" selected="selected">Select a State</option> 
							<option value="AL">Alabama</option> 
							<option value="AK">Alaska</option> 
							<option value="AZ">Arizona</option> 
							<option value="AR">Arkansas</option> 
							<option value="CA">California</option> 
							<option value="CO">Colorado</option> 
							<option value="CT">Connecticut</option> 
							<option value="DE">Delaware</option> 
							<option value="DC">District Of Columbia</option> 
							<option value="FL">Florida</option> 
							<option value="GA">Georgia</option> 
							<option value="HI">Hawaii</option> 
							<option value="ID">Idaho</option> 
							<option value="IL">Illinois</option> 
							<option value="IN">Indiana</option> 
							<option value="IA">Iowa</option> 
							<option value="KS">Kansas</option> 
							<option value="KY">Kentucky</option> 
							<option value="LA">Louisiana</option> 
							<option value="ME">Maine</option> 
							<option value="MD">Maryland</option> 
							<option value="MA">Massachusetts</option> 
							<option value="MI">Michigan</option> 
							<option value="MN">Minnesota</option> 
							<option value="MS">Mississippi</option> 
							<option value="MO">Missouri</option> 
							<option value="MT">Montana</option> 
							<option value="NE">Nebraska</option> 
							<option value="NV">Nevada</option> 
							<option value="NH">New Hampshire</option> 
							<option value="NJ">New Jersey</option> 
							<option value="NM">New Mexico</option> 
							<option value="NY">New York</option> 
							<option value="NC">North Carolina</option> 
							<option value="ND">North Dakota</option> 
							<option value="OH">Ohio</option> 
							<option value="OK">Oklahoma</option> 
							<option value="OR">Oregon</option> 
							<option value="PA">Pennsylvania</option> 
							<option value="RI">Rhode Island</option> 
							<option value="SC">South Carolina</option> 
							<option value="SD">South Dakota</option> 
							<option value="TN">Tennessee</option> 
							<option value="TX">Texas</option> 
							<option value="UT">Utah</option> 
							<option value="VT">Vermont</option> 
							<option value="VA">Virginia</option> 
							<option value="WA">Washington</option> 
							<option value="WV">West Virginia</option> 
							<option value="WI">Wisconsin</option> 
							<option value="WY">Wyoming</option>
						</select>
						<input class="w200 hidden required" id="shipping_fstate" name="shipping_fstate" type="text" value="" placeholder="Enter state/province name" title="State/province is required." />
					</div>
				</div>
				<div class="row">
					<div class="label">Zip/Post Code</div>
					<div class="field w300"><input class="w100 required" id="shipping_zip" name="shipping_zip" type="text" value="" placeholder="78704" title="Postal is required."  /></div>
				</div>
				<div class="row">
					<div class="label">Country</div>
					<div class="field w300">
						<select name="shipping_country" id="shipping_country" class="country required" >
							<optgroup label="Popular Options">
								<option value="US">United States</option>
								<option value="CA">Canada</option>
							</optgroup>
							<optgroup label="Other">
								<option value="AD">Andorra</option><option value="AE">United Arab Emirates</option><option value="AF">Afghanistan</option><option value="AG">Antigua and Barbuda</option><option value="AI">Anguilla</option><option value="AL">Albania</option><option value="AM">Armenia</option><option value="AN">Netherlands Antilles</option><option value="AO">Angola</option><option value="AQ">Antarctica</option><option value="AR">Argentina</option><option value="AS">American Samoa</option><option value="AT">Austria</option><option value="AU">Australia</option><option value="AW">Aruba</option><option value="AX">Åland Islands</option><option value="AZ">Azerbaijan</option><option value="BA">Bosnia and Herzegovina</option><option value="BB">Barbados</option><option value="BD">Bangladesh</option><option value="BE">Belgium</option><option value="BF">Burkina Faso</option><option value="BG">Bulgaria</option><option value="BH">Bahrain</option><option value="BI">Burundi</option><option value="BJ">Benin</option><option value="BL">Saint Barthélemy</option><option value="BM">Bermuda</option><option value="BN">Brunei</option><option value="BO">Bolivia</option><option value="BQ">British Antarctic Territory</option><option value="BR">Brazil</option><option value="BS">Bahamas</option><option value="BT">Bhutan</option><option value="BV">Bouvet Island</option><option value="BW">Botswana</option><option value="BY">Belarus</option><option value="BZ">Belize</option><option value="CC">Cocos [Keeling] Islands</option><option value="CD">Congo - Kinshasa</option><option value="CF">Central African Republic</option><option value="CG">Congo - Brazzaville</option><option value="CH">Switzerland</option><option value="CI">Côte d’Ivoire</option><option value="CK">Cook Islands</option><option value="CL">Chile</option><option value="CM">Cameroon</option><option value="CN">China</option><option value="CO">Colombia</option><option value="CR">Costa Rica</option><option value="CS">Serbia and Montenegro</option><option value="CT">Canton and Enderbury Islands</option><option value="CU">Cuba</option><option value="CV">Cape Verde</option><option value="CX">Christmas Island</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DD">East Germany</option><option value="DE">Germany</option><option value="DJ">Djibouti</option><option value="DK">Denmark</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="DZ">Algeria</option><option value="EC">Ecuador</option><option value="EE">Estonia</option><option value="EG">Egypt</option><option value="EH">Western Sahara</option><option value="ER">Eritrea</option><option value="ES">Spain</option><option value="ET">Ethiopia</option><option value="FI">Finland</option><option value="FJ">Fiji</option><option value="FK">Falkland Islands</option><option value="FM">Micronesia</option><option value="FO">Faroe Islands</option><option value="FQ">French Southern and Antarctic Territories</option><option value="FR">France</option><option value="FX">Metropolitan France</option><option value="GA">Gabon</option><option value="GB">United Kingdom</option><option value="GD">Grenada</option><option value="GE">Georgia</option><option value="GF">French Guiana</option><option value="GG">Guernsey</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GL">Greenland</option><option value="GM">Gambia</option><option value="GN">Guinea</option><option value="GP">Guadeloupe</option><option value="GQ">Equatorial Guinea</option><option value="GR">Greece</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="GT">Guatemala</option><option value="GU">Guam</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HK">Hong Kong SAR China</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HR">Croatia</option><option value="HT">Haiti</option><option value="HU">Hungary</option><option value="ID">Indonesia</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IM">Isle of Man</option><option value="IN">India</option><option value="IO">British Indian Ocean Territory</option><option value="IQ">Iraq</option><option value="IR">Iran</option><option value="IS">Iceland</option><option value="IT">Italy</option><option value="JE">Jersey</option><option value="JM">Jamaica</option><option value="JO">Jordan</option><option value="JP">Japan</option><option value="JT">Johnston Island</option><option value="KE">Kenya</option><option value="KG">Kyrgyzstan</option><option value="KH">Cambodia</option><option value="KI">Kiribati</option><option value="KM">Comoros</option><option value="KN">Saint Kitts and Nevis</option><option value="KP">North Korea</option><option value="KR">South Korea</option><option value="KW">Kuwait</option><option value="KY">Cayman Islands</option><option value="KZ">Kazakhstan</option><option value="LA">Laos</option><option value="LB">Lebanon</option><option value="LC">Saint Lucia</option><option value="LI">Liechtenstein</option><option value="LK">Sri Lanka</option><option value="LR">Liberia</option><option value="LS">Lesotho</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="LV">Latvia</option><option value="LY">Libya</option><option value="MA">Morocco</option><option value="MC">Monaco</option><option value="MD">Moldova</option><option value="ME">Montenegro</option><option value="MF">Saint Martin</option><option value="MG">Madagascar</option><option value="MH">Marshall Islands</option><option value="MI">Midway Islands</option><option value="MK">Macedonia</option><option value="ML">Mali</option><option value="MM">Myanmar [Burma]</option><option value="MN">Mongolia</option><option value="MO">Macau SAR China</option><option value="MP">Northern Mariana Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MS">Montserrat</option><option value="MT">Malta</option><option value="MU">Mauritius</option><option value="MV">Maldives</option><option value="MW">Malawi</option><option value="MX">Mexico</option><option value="MY">Malaysia</option><option value="MZ">Mozambique</option><option value="NA">Namibia</option><option value="NC">New Caledonia</option><option value="NE">Niger</option><option value="NF">Norfolk Island</option><option value="NG">Nigeria</option><option value="NI">Nicaragua</option><option value="NL">Netherlands</option><option value="NO">Norway</option><option value="NP">Nepal</option><option value="NQ">Dronning Maud Land</option><option value="NR">Nauru</option><option value="NT">Neutral Zone</option><option value="NU">Niue</option><option value="NZ">New Zealand</option><option value="OM">Oman</option><option value="PA">Panama</option><option value="PC">Pacific Islands Trust Territory</option><option value="PE">Peru</option><option value="PF">French Polynesia</option><option value="PG">Papua New Guinea</option><option value="PH">Philippines</option><option value="PK">Pakistan</option><option value="PL">Poland</option><option value="PM">Saint Pierre and Miquelon</option><option value="PN">Pitcairn Islands</option><option value="PR">Puerto Rico</option><option value="PS">Palestinian Territories</option><option value="PT">Portugal</option><option value="PU">U.S. Miscellaneous Pacific Islands</option><option value="PW">Palau</option><option value="PY">Paraguay</option><option value="PZ">Panama Canal Zone</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RS">Serbia</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="SA">Saudi Arabia</option><option value="SB">Solomon Islands</option><option value="SC">Seychelles</option><option value="SD">Sudan</option><option value="SE">Sweden</option><option value="SG">Singapore</option><option value="SH">Saint Helena</option><option value="SI">Slovenia</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SK">Slovakia</option><option value="SL">Sierra Leone</option><option value="SM">San Marino</option><option value="SN">Senegal</option><option value="SO">Somalia</option><option value="SR">Suriname</option><option value="ST">São Tomé and Príncipe</option><option value="SU">Union of Soviet Socialist Republics</option><option value="SV">El Salvador</option><option value="SY">Syria</option><option value="SZ">Swaziland</option><option value="TC">Turks and Caicos Islands</option><option value="TD">Chad</option><option value="TF">French Southern Territories</option><option value="TG">Togo</option><option value="TH">Thailand</option><option value="TJ">Tajikistan</option><option value="TK">Tokelau</option><option value="TL">Timor-Leste</option><option value="TM">Turkmenistan</option><option value="TN">Tunisia</option><option value="TO">Tonga</option><option value="TR">Turkey</option><option value="TT">Trinidad and Tobago</option><option value="TV">Tuvalu</option><option value="TW">Taiwan</option><option value="TZ">Tanzania</option><option value="UA">Ukraine</option><option value="UG">Uganda</option><option value="UM">U.S. Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VA">Vatican City</option><option value="VC">Saint Vincent and the Grenadines</option><option value="VD">North Vietnam</option><option value="VE">Venezuela</option><option value="VG">British Virgin Islands</option><option value="VI">U.S. Virgin Islands</option><option value="VN">Vietnam</option><option value="VU">Vanuatu</option><option value="WF">Wallis and Futuna</option><option value="WK">Wake Island</option><option value="WS">Samoa</option><option value="YD">People's Democratic Republic of Yemen</option><option value="YE">Yemen</option><option value="YT">Mayotte</option><option value="ZA">South Africa</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option><option value="ZZ">Unknown or Invalid Region</option>
							</optgroup>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="label">Phone Number</div>
					<div class="field w200"><input class="w150 required" id="shipping_phone" name="shipping_phone" type="text" value="" placeholder="555-666-7777" title="Phone is required." /></div>
				</div>

			</div>
			<div id='tabs-3' class='section'>
								<div class="row">
					<div class="label"></div>
					<div class="toplabel w200">First</div>
					<div class="toplabel w50">M.I.</div>
					<div class="toplabel w200">Last</div>
				</div>
				<div class="row">
					<div class="label">Name</div>
					<div class="field w200"><input class="w150 required" id="billing_fname" name="billing_fname" value="" type="text" placeholder="John"  /></div>
					<div class="field w50"><input class="w20" id="billing_mi" name="billing_mi" type="text" placeholder="D" title="Middle Initial" size="2" value="" maxlength="1" /></div>
					<div class="field w200"><input class="w150 required" id="billing_lname" name="billing_lname" type="text" value="" placeholder="Smith" /></div>
				</div>
				<div class="row">
					<div class="label">Address</div>
					<div class="field w300"><input class="w200 required" id="billing_address" name="billing_address" type="text" value="" placeholder="100 somestreet ave." title="Address is required." /></div>
				</div>
				<div class="row">
					<div class="label">Address</div>
					<div class="field w300"><input class="w200" id="billing_address2" name="billing_address2" type="text" value="" placeholder="Suite 771" /></div>
				</div>
				<div class="row">
					<div class="label">City</div>
					<div class="field w300"><input class="w200 required" id="billing_city" name="billing_city" type="text" value="" placeholder="Austin" title="City is required."  /></div>
				</div>
				<div class="row">
					<div class="label">State</div>
					<div class="field w300" id="billing_statefield">
						<select name="billing_state" id="billing_state" class="required"> 
							<option value="" selected="selected">Select a State</option> 
							<option value="AL">Alabama</option> 
							<option value="AK">Alaska</option> 
							<option value="AZ">Arizona</option> 
							<option value="AR">Arkansas</option> 
							<option value="CA">California</option> 
							<option value="CO">Colorado</option> 
							<option value="CT">Connecticut</option> 
							<option value="DE">Delaware</option> 
							<option value="DC">District Of Columbia</option> 
							<option value="FL">Florida</option> 
							<option value="GA">Georgia</option> 
							<option value="HI">Hawaii</option> 
							<option value="ID">Idaho</option> 
							<option value="IL">Illinois</option> 
							<option value="IN">Indiana</option> 
							<option value="IA">Iowa</option> 
							<option value="KS">Kansas</option> 
							<option value="KY">Kentucky</option> 
							<option value="LA">Louisiana</option> 
							<option value="ME">Maine</option> 
							<option value="MD">Maryland</option> 
							<option value="MA">Massachusetts</option> 
							<option value="MI">Michigan</option> 
							<option value="MN">Minnesota</option> 
							<option value="MS">Mississippi</option> 
							<option value="MO">Missouri</option> 
							<option value="MT">Montana</option> 
							<option value="NE">Nebraska</option> 
							<option value="NV">Nevada</option> 
							<option value="NH">New Hampshire</option> 
							<option value="NJ">New Jersey</option> 
							<option value="NM">New Mexico</option> 
							<option value="NY">New York</option> 
							<option value="NC">North Carolina</option> 
							<option value="ND">North Dakota</option> 
							<option value="OH">Ohio</option> 
							<option value="OK">Oklahoma</option> 
							<option value="OR">Oregon</option> 
							<option value="PA">Pennsylvania</option> 
							<option value="RI">Rhode Island</option> 
							<option value="SC">South Carolina</option> 
							<option value="SD">South Dakota</option> 
							<option value="TN">Tennessee</option> 
							<option value="TX">Texas</option> 
							<option value="UT">Utah</option> 
							<option value="VT">Vermont</option> 
							<option value="VA">Virginia</option> 
							<option value="WA">Washington</option> 
							<option value="WV">West Virginia</option> 
							<option value="WI">Wisconsin</option> 
							<option value="WY">Wyoming</option>
						</select>
						<input class="w200 hidden  required" id="billing_fstate" name="billing_fstate" type="text" value="" placeholder="Enter state/province name" title="State/province is required." />
					</div>
				</div>
				<div class="row">
					<div class="label">Zip/Post Code</div>
					<div class="field w300"><input class="w100 required" id="billing_zip" name="billing_zip" type="text" value="" placeholder="78704" title="Postal is required."  /></div>
				</div>
				<div class="row">
					<div class="label">Country</div>
					<div class="field w300">
						<select name="billing_country" id="billing_country" class="country required" >
							<optgroup label="Popular Options">
								<option value="US">United States</option>
								<option value="CA">Canada</option>
							</optgroup>
							<optgroup label="Other">
								<option value="AD">Andorra</option><option value="AE">United Arab Emirates</option><option value="AF">Afghanistan</option><option value="AG">Antigua and Barbuda</option><option value="AI">Anguilla</option><option value="AL">Albania</option><option value="AM">Armenia</option><option value="AN">Netherlands Antilles</option><option value="AO">Angola</option><option value="AQ">Antarctica</option><option value="AR">Argentina</option><option value="AS">American Samoa</option><option value="AT">Austria</option><option value="AU">Australia</option><option value="AW">Aruba</option><option value="AX">Åland Islands</option><option value="AZ">Azerbaijan</option><option value="BA">Bosnia and Herzegovina</option><option value="BB">Barbados</option><option value="BD">Bangladesh</option><option value="BE">Belgium</option><option value="BF">Burkina Faso</option><option value="BG">Bulgaria</option><option value="BH">Bahrain</option><option value="BI">Burundi</option><option value="BJ">Benin</option><option value="BL">Saint Barthélemy</option><option value="BM">Bermuda</option><option value="BN">Brunei</option><option value="BO">Bolivia</option><option value="BQ">British Antarctic Territory</option><option value="BR">Brazil</option><option value="BS">Bahamas</option><option value="BT">Bhutan</option><option value="BV">Bouvet Island</option><option value="BW">Botswana</option><option value="BY">Belarus</option><option value="BZ">Belize</option><option value="CC">Cocos [Keeling] Islands</option><option value="CD">Congo - Kinshasa</option><option value="CF">Central African Republic</option><option value="CG">Congo - Brazzaville</option><option value="CH">Switzerland</option><option value="CI">Côte d’Ivoire</option><option value="CK">Cook Islands</option><option value="CL">Chile</option><option value="CM">Cameroon</option><option value="CN">China</option><option value="CO">Colombia</option><option value="CR">Costa Rica</option><option value="CS">Serbia and Montenegro</option><option value="CT">Canton and Enderbury Islands</option><option value="CU">Cuba</option><option value="CV">Cape Verde</option><option value="CX">Christmas Island</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DD">East Germany</option><option value="DE">Germany</option><option value="DJ">Djibouti</option><option value="DK">Denmark</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="DZ">Algeria</option><option value="EC">Ecuador</option><option value="EE">Estonia</option><option value="EG">Egypt</option><option value="EH">Western Sahara</option><option value="ER">Eritrea</option><option value="ES">Spain</option><option value="ET">Ethiopia</option><option value="FI">Finland</option><option value="FJ">Fiji</option><option value="FK">Falkland Islands</option><option value="FM">Micronesia</option><option value="FO">Faroe Islands</option><option value="FQ">French Southern and Antarctic Territories</option><option value="FR">France</option><option value="FX">Metropolitan France</option><option value="GA">Gabon</option><option value="GB">United Kingdom</option><option value="GD">Grenada</option><option value="GE">Georgia</option><option value="GF">French Guiana</option><option value="GG">Guernsey</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GL">Greenland</option><option value="GM">Gambia</option><option value="GN">Guinea</option><option value="GP">Guadeloupe</option><option value="GQ">Equatorial Guinea</option><option value="GR">Greece</option><option value="GS">South Georgia and the South Sandwich Islands</option><option value="GT">Guatemala</option><option value="GU">Guam</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HK">Hong Kong SAR China</option><option value="HM">Heard Island and McDonald Islands</option><option value="HN">Honduras</option><option value="HR">Croatia</option><option value="HT">Haiti</option><option value="HU">Hungary</option><option value="ID">Indonesia</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IM">Isle of Man</option><option value="IN">India</option><option value="IO">British Indian Ocean Territory</option><option value="IQ">Iraq</option><option value="IR">Iran</option><option value="IS">Iceland</option><option value="IT">Italy</option><option value="JE">Jersey</option><option value="JM">Jamaica</option><option value="JO">Jordan</option><option value="JP">Japan</option><option value="JT">Johnston Island</option><option value="KE">Kenya</option><option value="KG">Kyrgyzstan</option><option value="KH">Cambodia</option><option value="KI">Kiribati</option><option value="KM">Comoros</option><option value="KN">Saint Kitts and Nevis</option><option value="KP">North Korea</option><option value="KR">South Korea</option><option value="KW">Kuwait</option><option value="KY">Cayman Islands</option><option value="KZ">Kazakhstan</option><option value="LA">Laos</option><option value="LB">Lebanon</option><option value="LC">Saint Lucia</option><option value="LI">Liechtenstein</option><option value="LK">Sri Lanka</option><option value="LR">Liberia</option><option value="LS">Lesotho</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="LV">Latvia</option><option value="LY">Libya</option><option value="MA">Morocco</option><option value="MC">Monaco</option><option value="MD">Moldova</option><option value="ME">Montenegro</option><option value="MF">Saint Martin</option><option value="MG">Madagascar</option><option value="MH">Marshall Islands</option><option value="MI">Midway Islands</option><option value="MK">Macedonia</option><option value="ML">Mali</option><option value="MM">Myanmar [Burma]</option><option value="MN">Mongolia</option><option value="MO">Macau SAR China</option><option value="MP">Northern Mariana Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MS">Montserrat</option><option value="MT">Malta</option><option value="MU">Mauritius</option><option value="MV">Maldives</option><option value="MW">Malawi</option><option value="MX">Mexico</option><option value="MY">Malaysia</option><option value="MZ">Mozambique</option><option value="NA">Namibia</option><option value="NC">New Caledonia</option><option value="NE">Niger</option><option value="NF">Norfolk Island</option><option value="NG">Nigeria</option><option value="NI">Nicaragua</option><option value="NL">Netherlands</option><option value="NO">Norway</option><option value="NP">Nepal</option><option value="NQ">Dronning Maud Land</option><option value="NR">Nauru</option><option value="NT">Neutral Zone</option><option value="NU">Niue</option><option value="NZ">New Zealand</option><option value="OM">Oman</option><option value="PA">Panama</option><option value="PC">Pacific Islands Trust Territory</option><option value="PE">Peru</option><option value="PF">French Polynesia</option><option value="PG">Papua New Guinea</option><option value="PH">Philippines</option><option value="PK">Pakistan</option><option value="PL">Poland</option><option value="PM">Saint Pierre and Miquelon</option><option value="PN">Pitcairn Islands</option><option value="PR">Puerto Rico</option><option value="PS">Palestinian Territories</option><option value="PT">Portugal</option><option value="PU">U.S. Miscellaneous Pacific Islands</option><option value="PW">Palau</option><option value="PY">Paraguay</option><option value="PZ">Panama Canal Zone</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RS">Serbia</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="SA">Saudi Arabia</option><option value="SB">Solomon Islands</option><option value="SC">Seychelles</option><option value="SD">Sudan</option><option value="SE">Sweden</option><option value="SG">Singapore</option><option value="SH">Saint Helena</option><option value="SI">Slovenia</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SK">Slovakia</option><option value="SL">Sierra Leone</option><option value="SM">San Marino</option><option value="SN">Senegal</option><option value="SO">Somalia</option><option value="SR">Suriname</option><option value="ST">São Tomé and Príncipe</option><option value="SU">Union of Soviet Socialist Republics</option><option value="SV">El Salvador</option><option value="SY">Syria</option><option value="SZ">Swaziland</option><option value="TC">Turks and Caicos Islands</option><option value="TD">Chad</option><option value="TF">French Southern Territories</option><option value="TG">Togo</option><option value="TH">Thailand</option><option value="TJ">Tajikistan</option><option value="TK">Tokelau</option><option value="TL">Timor-Leste</option><option value="TM">Turkmenistan</option><option value="TN">Tunisia</option><option value="TO">Tonga</option><option value="TR">Turkey</option><option value="TT">Trinidad and Tobago</option><option value="TV">Tuvalu</option><option value="TW">Taiwan</option><option value="TZ">Tanzania</option><option value="UA">Ukraine</option><option value="UG">Uganda</option><option value="UM">U.S. Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VA">Vatican City</option><option value="VC">Saint Vincent and the Grenadines</option><option value="VD">North Vietnam</option><option value="VE">Venezuela</option><option value="VG">British Virgin Islands</option><option value="VI">U.S. Virgin Islands</option><option value="VN">Vietnam</option><option value="VU">Vanuatu</option><option value="WF">Wallis and Futuna</option><option value="WK">Wake Island</option><option value="WS">Samoa</option><option value="YD">People's Democratic Republic of Yemen</option><option value="YE">Yemen</option><option value="YT">Mayotte</option><option value="ZA">South Africa</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option><option value="ZZ">Unknown or Invalid Region</option>
							</optgroup>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="label">Phone Number</div>
					<div class="field w200"><input class="w150 required" id="billing_phone" name="billing_phone" type="text" value="" placeholder="555-666-7777" title="Phone is required." /></div>
				</div>

			</div>
			<fieldset>
				<div class="row">
					<div class="label"></div>
					<div class="field w150">
						<input type="submit" name="submit" id="submit" value="Save" class="ui-widget ui-button-text-only ui-corner-all" />
					</div>
				</div>
			</fieldset>
	</div>
	</form>
</div>

<div id="footer">
  <div >Copyright (c) 2013 Storymix Media</div>
</div>

	<script type='text/javascript'>
/**
 * A very (VERY) Quick JavaScript method to
 * remove LastPass elements from the screen
 * 
 * Written by Roger Thomas (http://www.rogerethomas.com)
 */
function bustLastpass()
{
        var badLastpass = ["lptopspacer","lpiframeoverlay"];
        var divs = document.getElementsByTagName("div");
        for (var i = 0; i < divs.length; i++) {
                if (typeof divs[i] != "undefined") {
                        var divThis = divs[i];
                        var divId = divThis.id;
                        if (typeof divId != "undefined" && divId != "") {
                                for (var aI = 0; aI < badLastpass.length; aI++) {
                                    var thisTest = badLastpass[aI];
                                    var thisLength = thisTest.length;
                                    if (divId.substring(0,thisLength) == thisTest) {
                                        var element = document.getElementById(divId);
                                        element.parentNode.removeChild(element);
                                    }
                                }
                        }
                }
        }

        return setTimeout(function(){bustLastpass();},10);

}
setTimeout(function(){bustLastpass();},10);	
</script>

</body>
</html>
<?php }} ?>