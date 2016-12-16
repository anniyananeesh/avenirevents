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
	<?php echo form_open_multipart(HOST_URL."/".$folder_name."/edit/".$data_record->id,'name="frmRegister" id="frmRegister"'); ?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig"><?php echo $module_name; ?> : Edit Record</a></div>
		<div class="buttons">
			<ul class="actions">
				<li><input type="submit" name="btnsubmit" id="btnsubmit" value="Save & Close" class="btn_save_close" ></li>
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
	<div class="<? if (isset($Error) && $Error=="Y"){ echo "alert"; }else{ echo "success"; }  ?>"><?php echo $MSG; ?></div>
	<? } ?>
	<div class="contents">
		<div id="panel_title">Edit Details</div>
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
							<option value="">Choose</option>
 							<option value="professional" <?php echo ("professional" == $model_info) ? 'selected':'';?>>Professional</option>
 							<option value="non_professional" <?php echo ("non_professional" == $model_info) ? 'selected':'';?>>Non professional</option>

						</select>
					</div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Model Specialization: </div>
					<div>
						<select name="model_spl[]" multiple id="model_spl" class="textBox required">

							<option value="DJ" <?php echo (is_array($model_spl) && in_array("DJ", $model_spl)) ? 'selected':'';?>>DJ</option>
							<option value="Clown" <?php echo (is_array($model_spl) && in_array("Clown", $model_spl)) ? 'selected':'';?>>Clown</option>
							<option value="Magician" <?php echo (is_array($model_spl) && in_array("Magician", $model_spl)) ? 'selected':'';?>>Magician</option>
							<option value="Comedian" <?php echo (is_array($model_spl) && in_array("Comedian", $model_spl)) ? 'selected':'';?>>Comedian</option>
							<option value="Musician" <?php echo (is_array($model_spl) && in_array("Musician", $model_spl)) ? 'selected':'';?>>Musician</option>
							<option value="Circus artist" <?php echo (is_array($model_spl) && in_array("Circus artist", $model_spl)) ? 'selected':'';?>>Circus artist</option>
							<option value="Dancer" <?php echo (is_array($model_spl) && in_array("Dancer", $model_spl)) ? 'selected':'';?>>Dancer</option>
							<option value="Caricature artist" <?php echo (is_array($model_spl) && in_array("Caricature artist", $model_spl)) ? 'selected':'';?>>Caricature artist</option>
							<option value="Balloon artist" <?php echo (is_array($model_spl) && in_array("Balloon artist", $model_spl)) ? 'selected':'';?>>Balloon artist</option>
							<option value="Strolling juggler" <?php echo (is_array($model_spl) && in_array("Strolling juggler", $model_spl)) ? 'selected':'';?>>Strolling juggler</option>
							<option value="Stilt walker" <?php echo (is_array($model_spl) && in_array("Stilt walker", $model_spl)) ? 'selected':'';?>>Stilt walker</option>
							<option value="Symphony orchestra" <?php echo (is_array($model_spl) && in_array("Symphony orchestra", $model_spl)) ? 'selected':'';?>>Symphony orchestra</option>
							<option value="Mime acter" <?php echo (is_array($model_spl) && in_array("Mime acter", $model_spl)) ? 'selected':'';?>>Mime acter</option>
							<option value="Fire eater" <?php echo (is_array($model_spl) && in_array("Fire eater", $model_spl)) ? 'selected':'';?>>Fire eater </option>
							<option value="Rolling Stone" <?php echo (is_array($model_spl) && in_array("Rolling Stone", $model_spl)) ? 'selected':'';?>>Rolling Stone</option>
							<option value="Football / Basketball freestyle" <?php echo (is_array($model_spl) && in_array("Football / Basketball freestyle", $model_spl)) ? 'selected':'';?>>Football / Basketball freestyle</option>
							<option value="Caroler" <?php echo (is_array($model_spl) && in_array("Caroler", $model_spl)) ? 'selected':'';?>>Caroler</option>
							<option value="Living statue" <?php echo (is_array($model_spl) && in_array("Living statue", $model_spl)) ? 'selected':'';?>>Living statue</option>
							<option value="Snake charmer" <?php echo (is_array($model_spl) && in_array("Snake charmer", $model_spl)) ? 'selected':'';?>>Snake charmer</option>
							<option value="Mentalist" <?php echo (is_array($model_spl) && in_array("Mentalist", $model_spl)) ? 'selected':'';?>>Mentalist</option>
							<option value="Acrobats" <?php echo (is_array($model_spl) && in_array("Acrobats", $model_spl)) ? 'selected':'';?>>Acrobats</option>
							<option value="Singing waiter" <?php echo (is_array($model_spl) && in_array("Singing waiter", $model_spl)) ? 'selected':'';?>> Singing waiter</option>
							<option value="Painter" <?php echo (is_array($model_spl) && in_array("Painter", $model_spl)) ? 'selected':'';?>>Painter</option>
							<option value="Storyteller" <?php echo (is_array($model_spl) && in_array("Storyteller", $model_spl)) ? 'selected':'';?>>Storyteller</option>
							<option value="Sword swallower" <?php echo (is_array($model_spl) && in_array("Sword swallower", $model_spl)) ? 'selected':'';?>> Sword swallower</option>

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

						<script type="text/javascript">

								$(function() {

										$('#country').val('<?php echo $country ?>');

								})

						</script>

					</div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Experience : </div>
					<div><?php echo form_input('model_exp',$model_exp, 'id="model_exp" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<?php

						$langretArray = array();

						if($mdlLngs)
						{
							foreach($mdlLngs AS $mdLng)
							{
								array_push($langretArray, $mdLng->id);
							}
						}

					?>

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
						<? if ($is_active=="Y"){ $p=TRUE; $up=FALSE; }else{ $p=FALSE; $up=TRUE; }  ?>
						<div class=""><? echo form_radio('is_active', 'Y', $p); ?> Publish  <? echo form_radio('is_active', 'N', $up); ?> Unpublish</div>
						<div class="spacer">&nbsp;</div>
					</div>

					<!-- ********** Options SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Upload CV</div>
					</div>

					<div class="box">
						<div class="fieldTitle2">.doc,.pdf</div>
						<div><? echo form_upload('filecv','', 'id="filecv" class="fileBox"'); ?></div>
						<div class="spacer">&nbsp;</div>
						<? if (!empty($data_record->cv_path)){ ?>
						<div class="fieldTitle2">&nbsp;</div>
						<div class="float1">
							<a href="<?php echo MODELS_CV_PATH.$data_record->cv_path;?>" target="_blank">View & Download CV</a>
						</div>
						<? } ?>
						<div class="spacer">&nbsp;</div>
					</div>

					<!-- ********** Options SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Model Gallery Photos (atleast 3 photos required)</div>
					</div>
					<div class="box">

						<?php for($i=0; $i<6; $i++):?>

							<div class="fieldTitle2">Image <?php echo $i+1;?></div>
							<div>

								<?php if ($gallery && isset($gallery[$i])):?>
									<div class="fieldTitle2">&nbsp;</div>
									<div class="float1">
										<img src="<?php echo $this->thumb_show_path?><?php echo $gallery[$i]->image?>" class="thumb" />
										<img src="<?php echo ADMIN_IMG_PATH?>/cross.png" alt="Delete" hspace="2" border="0" onclick="javascript:if(delConfirmation()==true){DeleteGalleryFile('<?php echo $gallery[$i]->image?>', 'image')}" style="cursor:pointer;" />
									</div>
								<?php else:?>
									<? echo form_upload('image[]','', 'multiple="multiple" class="fileBox"'); ?>
								<?php endif;?>

							</div>
							<div class="spacer">&nbsp;</div>

						<?php endfor;?>

					</div>

				</div>
			</div>
		</div>
	</div>
	<?php echo form_hidden('delete_file',''); ?>
	<?php echo form_hidden('file_name',''); ?>
	<?php echo form_hidden('field_name',''); ?>

	<?php echo form_hidden('delete_gallery_file',''); ?>
	<?php echo form_hidden('file_gallery_name',''); ?>
	<?php echo form_hidden('field_gallery_name',''); ?>


	<?php echo form_close(); ?>
</div>
<script language="javascript">
	function DeleteFile(filename, fieldname){
		document.frmRegister.file_name.value = filename;
		document.frmRegister.field_name.value = fieldname;
		document.frmRegister.delete_file.value="Y";
		document.frmRegister.submit();
	}

	function DeleteGalleryFile(filename, fieldname){
		document.frmRegister.file_gallery_name.value = filename;
		document.frmRegister.field_gallery_name.value = fieldname;
		document.frmRegister.delete_gallery_file.value="Y";
		document.frmRegister.submit();
	}

	function delConfirmation(){
		var a = confirm("Are you sure you want to delete?");
		if (a == true){
			return true;
		}else{
			return false;
		}
	}
</script>

<script type="text/javascript">
	$(function(){
		//$("#clanguage").hide();
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
