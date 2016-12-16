<link rel="stylesheet" href="<?php echo PLUGINS_PATH?>/sumoselect/sumoselect2.css" type="text/css" />
<script src="<?php echo PLUGINS_PATH?>/sumoselect/jquery.sumoselect.min.js"></script>


<script type="text/javascript" language="javascript">
		$("document").ready(function(){
			$("#frmRegister").validate();

			$("#language").SumoSelect({
		    	placeholder: 'Choose',
		     	csvDispCount: 2
			});

			$("#model_pref").SumoSelect({
		    	placeholder: 'Choose',
		     	csvDispCount: 2
			});

			$("#model_spl").SumoSelect({
		    	placeholder: 'Choose',
		     	csvDispCount: 2
			});

		});
</script>

<? include(ADMIN_VIEW_PATH."/editors.php"); ?>
<div class="page">
	<?php echo form_open_multipart(HOST_URL."/".$folder_name."/add",'name="frmRegister" id="frmRegister"'); ?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig"><?php echo $module_name; ?> : Add Record</a></div>
		<div class="buttons">
			<ul class="actions">
				<li><input type="submit" name="submit" id="submit" value="Save & Close" class="btn_save_close" ></li>
				<li><input type="submit" name="submit" id="submit" value="Save & New" class="btn_save_new" ></li>
				<li class="line lineHover">&nbsp;</li>
				<a href="<?=HOST_URL?>/<?=$folder_name?>"><li>
					<div class="icon_back">&nbsp;</div>
					<div class="action_text">Back</div>
				</li></a>
			</ul>
		</div>
	</div>
	<div>&nbsp;</div>
	<? if (isset($MSG)){ ?>
	<div id="MSG" class="<? if (isset($Error) && $Error=="Y"){ echo "alert"; }else{ echo "success"; }  ?>"><?php echo $MSG; ?></div>
	<? } ?>
	<div class="contents">
		<div id="panel_title">Add Details</div>
		<div id="panel">
			<div class="left-colum">
				<div class="col-contents">

          <div class="fieldTitle">Name : </div>
					<div><?php echo form_input('name',$name, 'id="name" class="textBox"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Age : </div>
					<div>
						<select name="model_age" id="model_age" class="textBox required">
							<option value="">Choose</option>
							<option value="below_6" <?php echo ("below_6" == $model_age) ? 'selected':'';?>>below 6</option>
							<option value="6_12" <?php echo ("6_12" == $model_age) ? 'selected':'';?>>6-12</option>
							<option value="12_18" <?php echo ("12_18" == $model_age) ? 'selected':'';?>>12-18</option>
							<option value="18_24" <?php echo ("18_24" == $model_age) ? 'selected':'';?>>18-24</option>
							<option value="24_30" <?php echo ("24_30" == $model_age) ? 'selected':'';?>>24-30</option>
							<option value="30_40" <?php echo ("30_40" == $model_age) ? 'selected':'';?>>30-40</option>
							<option value="above_40" <?php echo ("above_40" == $model_age) ? 'selected':'';?>>above 40</option>n>
						</select>
					</div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Model Info: </div>
					<div>
						<select name="model_info" id="model_info" class="textBox required">
							<option value="">Choose</option>
 							<option value="professional" <?php echo ("professional" == $model_info) ? 'selected':'';?>>Professional</option>
 							<option value="non_professional" <?php echo ("non_professional" == $model_info) ? 'selected':'';?>>Non professional</option>

						</select>
					</div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Specialization: </div>
					<div>
						<select name="model_spl[]" multiple id="model_spl" class="textBox required">

							<option value="Fashion Photographer" <?php echo (is_array($model_spl) && in_array("Fashion Photographer", $model_spl)) ? 'selected':'';?>>Fashion Photographer</option>
							<option value="Advertising Photographer" <?php echo (is_array($model_spl) && in_array("Advertising Photographer", $model_spl)) ? 'selected':'';?>>Advertising Photographer</option>
							<option value="Event Photographer" <?php echo (is_array($model_spl) && in_array("Event Photographer", $model_spl)) ? 'selected':'';?>>Event Photographer</option>
							<option value="Wedding Photographer" <?php echo (is_array($model_spl) && in_array("Wedding Photographer", $model_spl)) ? 'selected':'';?>>Wedding Photographer</option>
							<option value="Food Photographer" <?php echo (is_array($model_spl) && in_array("Food Photographer", $model_spl)) ? 'selected':'';?>>Food Photographer</option>
							<option value="Vehicle Photographer" <?php echo (is_array($model_spl) && in_array("Vehicle Photographer", $model_spl)) ? 'selected':'';?>>Vehicle Photographer</option>
							<option value="Family Photographer" <?php echo (is_array($model_spl) && in_array("Family Photographer", $model_spl)) ? 'selected':'';?>>Family Photographer</option>
							<option value="Real Estate and Architecture Photographer" <?php echo (is_array($model_spl) && in_array("Real Estate and Architecture Photographer", $model_spl)) ? 'selected':'';?>>Real Estate and Architecture Photographer</option>
							<option value="Landscape Photographer" <?php echo (is_array($model_spl) && in_array("Landscape Photographer", $model_spl)) ? 'selected':'';?>>Landscape Photographer</option>
							<option value="Action / sports photographer" <?php echo (is_array($model_spl) && in_array("Action / sports photographer", $model_spl)) ? 'selected':'';?>>Action / sports photographer</option>
							<option value="Medical Photographer" <?php echo (is_array($model_spl) && in_array("Medical Photographer", $model_spl)) ? 'selected':'';?>>Medical Photographer</option>
							<option value="Travel Photographer" <?php echo (is_array($model_spl) && in_array("Travel Photographer", $model_spl)) ? 'selected':'';?>>Travel Photographer</option>
							<option value="Street Photographer" <?php echo (is_array($model_spl) && in_array("Street Photographer", $model_spl)) ? 'selected':'';?>>Street Photographer</option>
							<option value="Stock Photographer" <?php echo (is_array($model_spl) && in_array("Stock Photographer", $model_spl)) ? 'selected':'';?>>Stock Photographer</option>
							<option value="Pet Photographer" <?php echo (is_array($model_spl) && in_array("Pet Photographer", $model_spl)) ? 'selected':'';?>>Pet Photographer</option>
							<option value="Photojournalist" <?php echo (is_array($model_spl) && in_array("Photojournalist", $model_spl)) ? 'selected':'';?>>Photojournalist</option>
							<option value="Concert Photographer" <?php echo (is_array($model_spl) && in_array("Concert Photographer", $model_spl)) ? 'selected':'';?>>Concert Photographer</option>
							<option value="School Photographer" <?php echo (is_array($model_spl) && in_array("School Photographer", $model_spl)) ? 'selected':'';?>>School Photographer</option>
							<option value="Baby Photographer" <?php echo (is_array($model_spl) && in_array("Baby Photographer", $model_spl)) ? 'selected':'';?>>Baby Photographer</option>
							<option value="Underwater Photographer" <?php echo (is_array($model_spl) && in_array("Underwater Photographer", $model_spl)) ? 'selected':'';?>>Underwater Photographer</option>
							<option value="Equine Photographer" <?php echo (is_array($model_spl) && in_array("Equine Photographer", $model_spl)) ? 'selected':'';?>>Equine Photographer</option>
							<option value="Paparazzi" <?php echo (is_array($model_spl) && in_array("Paparazzi", $model_spl)) ? 'selected':'';?>>Paparazzi</option>

						</select>
					</div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Model Region: </div>
					<div>
						<select name="model_region" id="model_region" class="textBox required">
							<option value="">Choose</option>
							<option value="african" <?php echo ("african" == $model_region) ? 'selected':'';?>>African</option>
 							<option value="arabic" <?php echo ("arabic" == $model_region) ? 'selected':'';?>>Arabic</option>
							<option value="asian" <?php echo ("asian" == $model_region) ? 'selected':'';?>>Asian</option>
							<option value="european_caucasian" <?php echo ("european_caucasian" == $model_region) ? 'selected':'';?>>European/Caucasian</option>
							<option value="indian_south_asian" <?php echo ("indian_south_asian" == $model_region) ? 'selected':'';?>>Indian/South Asian</option>
							<option value="latino" <?php echo ("latino" == $model_region) ? 'selected':'';?>>Latino</option>
 							<option value="meditaranian" <?php echo ("meditaranian" == $model_region) ? 'selected':'';?>>Meditaranian</option>
						</select>
					</div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Gender: </div>
					<div>
						<select name="model_gender" id="model_gender" class="textBox required">
							<option value="">Choose</option>
 							<option value="male" <?php echo ("male" == $model_gender) ? 'selected':'';?>>Male</option>
 							<option value="female" <?php echo ("female" == $model_gender) ? 'selected':'';?>>Female</option>
						</select>
					</div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Marrital Status: </div>
					<div>
						<select name="model_marrital_status" id="model_marrital_status" class="textBox required">
							<option value="">Choose</option>
 							<option value="married" <?php echo ("married" == $model_marrital_status) ? 'selected':'';?>>Married</option>
 							<option value="single" <?php echo ("single" == $model_marrital_status) ? 'selected':'';?>>Single</option>
						</select>
					</div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Contact No. : </div>
					<div><?php echo form_input('contact_no',$contact_no, 'id="contact_no" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Email Address : </div>
					<div><?php echo form_input('email',$email, 'id="email" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">City : </div>
					<div><?php echo form_input('city',$city, 'id="city" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Country: </div>
					<div>
						<select name="country" id="country" class="textBox required">
							<option value="">Choose</option>
							<option value="AF">Nationality</option>
								<option value="AF">Afghanistan</option>
								<option value="AX">Åland Islands</option>
								<option value="AL">Albania</option>
								<option value="DZ">Algeria</option>
								<option value="AS">American Samoa</option>
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
								<option value="BE">Belgium</option>
								<option value="BZ">Belize</option>
								<option value="BJ">Benin</option>
								<option value="BM">Bermuda</option>
								<option value="BT">Bhutan</option>
								<option value="BO">Bolivia, Plurinational State of</option>
								<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
								<option value="BA">Bosnia and Herzegovina</option>
								<option value="BW">Botswana</option>
								<option value="BV">Bouvet Island</option>
								<option value="BR">Brazil</option>
								<option value="IO">British Indian Ocean Territory</option>
								<option value="BN">Brunei Darussalam</option>
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
								<option value="CG">Congo</option>
								<option value="CD">Congo, the Democratic Republic of the</option>
								<option value="CK">Cook Islands</option>
								<option value="CR">Costa Rica</option>
								<option value="CI">Côte dIvoire</option>
								<option value="HR">Croatia</option>
								<option value="CU">Cuba</option>
								<option value="CW">Curaçao</option>
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
								<option value="FK">Falkland Islands (Malvinas)</option>
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
								<option value="GU">Guam</option>
								<option value="GT">Guatemala</option>
								<option value="GG">Guernsey</option>
								<option value="GN">Guinea</option>
								<option value="GW">Guinea-Bissau</option>
								<option value="GY">Guyana</option>
								<option value="HT">Haiti</option>
								<option value="HM">Heard Island and McDonald Islands</option>
								<option value="VA">Holy See (Vatican City State)</option>
								<option value="HN">Honduras</option>
								<option value="HK">Hong Kong</option>
								<option value="HU">Hungary</option>
								<option value="IS">Iceland</option>
								<option value="IN">India</option>
								<option value="ID">Indonesia</option>
								<option value="IR">Iran, Islamic Republic of</option>
								<option value="IQ">Iraq</option>
								<option value="IE">Ireland</option>
								<option value="IM">Isle of Man</option>
								<option value="IL">Israel</option>
								<option value="IT">Italy</option>
								<option value="JM">Jamaica</option>
								<option value="JP">Japan</option>
								<option value="JE">Jersey</option>
								<option value="JO">Jordan</option>
								<option value="KZ">Kazakhstan</option>
								<option value="KE">Kenya</option>
								<option value="KI">Kiribati</option>
								<option value="KP">Korea, Democratic Peoples Republic of</option>
								<option value="KR">Korea, Republic of</option>
								<option value="KW">Kuwait</option>
								<option value="KG">Kyrgyzstan</option>
								<option value="LA">Lao Peoples Democratic Republic</option>
								<option value="LV">Latvia</option>
								<option value="LB">Lebanon</option>
								<option value="LS">Lesotho</option>
								<option value="LR">Liberia</option>
								<option value="LY">Libya</option>
								<option value="LI">Liechtenstein</option>
								<option value="LT">Lithuania</option>
								<option value="LU">Luxembourg</option>
								<option value="MO">Macao</option>
								<option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
								<option value="FM">Micronesia, Federated States of</option>
								<option value="MD">Moldova, Republic of</option>
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
								<option value="NC">New Caledonia</option>
								<option value="NZ">New Zealand</option>
								<option value="NI">Nicaragua</option>
								<option value="NE">Niger</option>
								<option value="NG">Nigeria</option>
								<option value="NU">Niue</option>
								<option value="NF">Norfolk Island</option>
								<option value="MP">Northern Mariana Islands</option>
								<option value="NO">Norway</option>
								<option value="OM">Oman</option>
								<option value="PK">Pakistan</option>
								<option value="PW">Palau</option>
								<option value="PS">Palestinian Territory, Occupied</option>
								<option value="PA">Panama</option>
								<option value="PG">Papua New Guinea</option>
								<option value="PY">Paraguay</option>
								<option value="PE">Peru</option>
								<option value="PH">Philippines</option>
								<option value="PN">Pitcairn</option>
								<option value="PL">Poland</option>
								<option value="PT">Portugal</option>
								<option value="PR">Puerto Rico</option>
								<option value="QA">Qatar</option>
								<option value="RE">Réunion</option>
								<option value="RO">Romania</option>
								<option value="RU">Russian Federation</option>
								<option value="RW">Rwanda</option>
								<option value="BL">Saint Barthélemy</option>
								<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
								<option value="KN">Saint Kitts and Nevis</option>
								<option value="LC">Saint Lucia</option>
								<option value="MF">Saint Martin (French part)</option>
								<option value="PM">Saint Pierre and Miquelon</option>
								<option value="VC">Saint Vincent and the Grenadines</option>
								<option value="WS">Samoa</option>
								<option value="SM">San Marino</option>
								<option value="ST">Sao Tome and Principe</option>
								<option value="SA">Saudi Arabia</option>
								<option value="SN">Senegal</option>
								<option value="RS">Serbia</option>
								<option value="SC">Seychelles</option>
								<option value="SL">Sierra Leone</option>
								<option value="SG">Singapore</option>
								<option value="SX">Sint Maarten (Dutch part)</option>
								<option value="SK">Slovakia</option>
								<option value="SI">Slovenia</option>
								<option value="SB">Solomon Islands</option>
								<option value="SO">Somalia</option>
								<option value="ZA">South Africa</option>
								<option value="GS">South Georgia and the South Sandwich Islands</option>
								<option value="SS">South Sudan</option>
								<option value="ES">Spain</option>
								<option value="LK">Sri Lanka</option>
								<option value="SD">Sudan</option>
								<option value="SR">Suriname</option>
								<option value="SJ">Svalbard and Jan Mayen</option>
								<option value="SZ">Swaziland</option>
								<option value="SE">Sweden</option>
								<option value="CH">Switzerland</option>
								<option value="SY">Syrian Arab Republic</option>
								<option value="TW">Taiwan, Province of China</option>
								<option value="TJ">Tajikistan</option>
								<option value="TZ">Tanzania, United Republic of</option>
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
								<option value="GB">United Kingdom</option>
								<option value="US">United States</option>
								<option value="UM">United States Minor Outlying Islands</option>
								<option value="UY">Uruguay</option>
								<option value="UZ">Uzbekistan</option>
								<option value="VU">Vanuatu</option>
								<option value="VE">Venezuela, Bolivarian Republic of</option>
								<option value="VN">Viet Nam</option>
								<option value="VG">Virgin Islands, British</option>
								<option value="VI">Virgin Islands, U.S.</option>
								<option value="WF">Wallis and Futuna</option>
								<option value="EH">Western Sahara</option>
								<option value="YE">Yemen</option>
								<option value="ZM">Zambia</option>
								<option value="ZW">Zimbabwe</option>
						</select>
					</div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Experience : </div>
					<div><?php echo form_input('model_exp',$model_exp, 'id="model_exp" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Language Spoken : </div>
					<div>
						<select name="language[]" id="language" multiple class="textBox required">
							<?php foreach($languages AS $lang):?>
								<option value="<?php echo $lang->id;?>" <?php echo ($lang->id && in_array($lang->id, $langretArray)) ? 'selected' : '';?>><?php echo $lang->name_en;?></option>
							<?php endforeach;?>
						</select>
					</div>
					<div class="spacer">&nbsp;</div>

 					<div>
						<div class="fieldTitle">Description: </div>
					</div>
					<div class="clear"><?php echo form_textarea('description', $description, 'id="description" class="textBox"'); ?></div>
	     	  <div class="spacer">&nbsp;</div>


				</div>


			</div>
			<div class="rigth-colum">
				<div class="col-contents">

					<!-- ********** Options SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Options</div>
					</div>
					<div class="box">
						<div class="fieldTitle2">Status</div>
						<div class=""><? echo form_radio('is_active', 'Y', TRUE); ?> Publish  <? echo form_radio('is_active', 'N', FALSE); ?> Unpublish</div>
						<div class="spacer">&nbsp;</div>
					</div>

					<!-- ********** Options SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Model Gallery Photos (atleast 3 photos required)</div>
					</div>
					<div class="box">
						<div class="fieldTitle2">Image 1</div>
						<div><? echo form_upload('image[]','', 'multiple="multiple" class="fileBox required"'); ?></div>
						<div class="spacer">&nbsp;</div>

						<div class="fieldTitle2">Image 2</div>
						<div><? echo form_upload('image[]','', 'multiple="multiple" class="fileBox required"'); ?></div>
						<div class="spacer">&nbsp;</div>

						<div class="fieldTitle2">Image 3</div>
						<div><? echo form_upload('image[]','', 'multiple="multiple" class="fileBox required"'); ?></div>
						<div class="spacer">&nbsp;</div>

						<div class="fieldTitle2">Image 4</div>
						<div><? echo form_upload('image[]','', 'multiple="multiple" class="fileBox"'); ?></div>
						<div class="spacer">&nbsp;</div>

						<div class="fieldTitle2">Image 5</div>
						<div><? echo form_upload('image[]','', 'multiple="multiple" class="fileBox"'); ?></div>
						<div class="spacer">&nbsp;</div>

						<div class="fieldTitle2">Image 6</div>
						<div><? echo form_upload('image[]','', 'multiple="multiple" class="fileBox"'); ?></div>
						<div class="spacer">&nbsp;</div>

					</div>

					<!-- ********** Options SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Upload CV</div>
					</div>

					<div class="box">
						<div class="fieldTitle2">.doc,.pdf</div>
						<div><? echo form_upload('filecv','', 'id="filecv" class="fileBox required"'); ?></div>
						<div class="spacer">&nbsp;</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>

<script type="text/javascript">
	$(function(){
		$("#clanguage").hide();
		$(document).on('change','#language',doCheckToggle);
	});

	function doCheckToggle()
	{
		var elem = $('#language :selected').val(),
			toggleElem = $("#clanguage");
		if(elem == 'Other')
		{
			toggleElem.show();
		}else{
			toggleElem.hide();
		}
	}
</script>
