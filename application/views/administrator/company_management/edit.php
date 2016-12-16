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

								<option value="cars" <?php echo (!empty($promotes) && in_array('cars', $promotes)) ? 'selected' : '';?>>Cars</option>
								<option value="beauty" <?php echo (!empty($promotes) && in_array('beauty', $promotes)) ? 'selected' : '';?>>Beauty</option>
								<option value="alcoholic_beverages" <?php echo (!empty($promotes) && in_array('alcoholic_beverages', $promotes)) ? 'selected' : '';?>>Alcoholic beverages</option>
								<option value="non_alcoholic_beverages" <?php echo (!empty($promotes) && in_array('non_alcoholic_beverages', $promotes)) ? 'selected' : '';?>>Non alcoholic beverages</option>
								<option value="cigarettes" <?php echo (!empty($promotes) && in_array('cigarettes', $promotes)) ? 'selected' : '';?>>Cigarettes</option>
								<option value="electronics" <?php echo (!empty($promotes) && in_array('electronics', $promotes)) ? 'selected' : '';?>>Electronics</option>
								<option value="other" <?php echo (!empty($promotes) && in_array('other', $promotes)) ? 'selected' : '';?>>Other</option>

						</select>
					</div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Contact No. : </div>
					<div><?php echo form_input('contact_no',$contact_no, 'id="contact_no" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Email Address : </div>
					<div><?php echo form_input('email',$email, 'id="email" class="textBox required"'); ?></div>
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
						<div class="options_title">Account Settings</div>
					</div>
					<div class="box">
						<div class="fieldTitle">Username</div>
						<div><?php echo $username;?></div>
						<div class="spacer">&nbsp;</div>

						<div class="fieldTitle">Password</div>
						<div><?php echo form_password('pwd','', 'id="pwd" class="textBox"'); ?></div>
						<div class="spacer">&nbsp;</div>

						<div class="fieldTitle">Confirm Password</div>
						<div><?php echo form_password('cpwd','', 'id="cpwd" class="textBox"'); ?></div>
						<div class="spacer">&nbsp;</div>

					</div>


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
						<div class="options_title">Gallery Photos (atleast 3 photos required)</div>
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
