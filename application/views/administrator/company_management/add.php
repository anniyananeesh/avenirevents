<link rel="stylesheet" href="<?php echo PLUGINS_PATH?>/sumoselect/sumoselect2.css" type="text/css" />
<script src="<?php echo PLUGINS_PATH?>/sumoselect/jquery.sumoselect.min.js"></script>


<script type="text/javascript" language="javascript">
		$("document").ready(function(){
			$("#frmRegister").validate();

			$("#language").SumoSelect({
		    	placeholder: 'Choose',
		     	csvDispCount: 2
			});

			$("#promotes").SumoSelect({
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

					<div class="fieldTitle">Model Info: </div>
					<div>
						<select name="model_info" id="model_info" class="textBox required">
							<option value="">Choose</option>
 							<option value="hostess" <?php echo ("hostess" == $model_info) ? 'selected':'';?>>Hostess</option>
 							<option value="beauty" <?php echo ("beauty" == $model_info) ? 'selected':'';?>>Beauty</option>
							<option value="premium_promoter" <?php echo ("premium_promoter" == $model_info) ? 'selected':'';?>>Premium promoter</option>
							<option value="secondary_promoter" <?php echo ("secondary_promoter" == $model_info) ? 'selected':'';?>>Secondary promoter</option>
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

					<div class="fieldTitle">Likes to promote: </div>
					<div>
						<select name="promotes[]" id="promotes" multiple class="textBox required">

								<option value="cars">Cars</option>
								<option value="beauty">Beauty</option>
								<option value="alcoholic_beverages">Alcoholic beverages</option>
								<option value="non_alcoholic_beverages">Non alcoholic beverages</option>
								<option value="cigarettes">Cigarettes</option>
								<option value="electronics">Electronics</option>
								<option value="other">Other</option>

						</select>
					</div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Contact No. : </div>
					<div><?php echo form_input('contact_no',$contact_no, 'id="contact_no" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Email Address : </div>
					<div><?php echo form_input('email',$email, 'id="email" class="textBox required"'); ?></div>
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
						<div class="options_title">Account Settings</div>
					</div>
					<div class="box">
						<div class="fieldTitle">Username</div>
						<div><?php echo form_input('username',$username, 'id="username" class="textBox required"'); ?></div>
						<div class="spacer">&nbsp;</div>

						<div class="fieldTitle">Password</div>
						<div><?php echo form_password('pwd','', 'id="pwd" class="textBox required"'); ?></div>
						<div class="spacer">&nbsp;</div>

						<div class="fieldTitle">Confirm Password</div>
						<div><?php echo form_password('cpwd','', 'id="cpwd" class="textBox required"'); ?></div>
						<div class="spacer">&nbsp;</div>

					</div>

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
