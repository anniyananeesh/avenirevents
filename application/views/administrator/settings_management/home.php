<script type="text/javascript" language="javascript">
		$("document").ready(function(){
			$("#frmRegister").validate();
		});
</script>
<div class="page">
	<?php echo form_open_multipart(HOST_URL."/".$folder_name,'name="frmRegister" id="frmRegister"'); ?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig"><?php echo $module_name; ?></a></div>
		<div class="buttons">
			<ul class="actions">
				<li><input type="submit" name="btnsubmit" id="btnsubmit" value="Save" class="btn_save_close" style="width:50px;" ></li>
				<a href="<?=HOST_URL?>/adminhome"><li>
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
		<div id="panel_title">Settings</div>
		<div id="panel">
			<div class="left-colum" style="min-width:470px !important; width:50%">
				<div class="col-contents">
					<div id="options-header">
						<div class="options_title">Title</div>
					</div>
					<div class="spacer" style="height:20px;">&nbsp;</div>
					<div class="fieldTitle">Website Title : </div>
					<div><?php echo form_textarea('website_title', $website_title, 'id="website_title" class="textArea required"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div id="options-header">
						<div class="options_title">Social Media Settings</div>
					</div>
					<div class="spacer" style="height:20px;">&nbsp;</div>
					<div class="fieldTitle">Facebook : </div>
					<div><?php echo form_input('facebook',$facebook, 'id="facebook" class="textBox textBoxSettings"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Twitter : </div>
					<div><?php echo form_input('twitter',$twitter, 'id="twitter" class="textBox textBoxSettings"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">LinkedIn : </div>
					<div><?php echo form_input('linkedin',$linkedin, 'id="linkedin" class="textBox textBoxSettings"'); ?></div>
					<div class="spacer">&nbsp;</div>
                                        <div class="fieldTitle">Instagram : </div>
					<div><?php echo form_input('instagram',$instagram, 'id="instagram" class="textBox textBoxSettings"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Skype : </div>
					<div><?php echo form_input('skype',$skype, 'id="skype" class="textBox textBoxSettings"'); ?></div>
					<div class="spacer" style="height:30px;">&nbsp;</div>

                                        <div id="options-header">
                                            <div class="options_title">Common Settings</div>
					</div>
                                        <div class="spacer" style="height:20px;">&nbsp;</div>
                                        <div class="fieldTitle">Support Email</div>
                                        <div><?php echo form_input('sup_email',$sup_email, 'id="sup_email" class="textBox textBoxSettings"'); ?></div>
                                        <div class="spacer">&nbsp;</div>
                                        <div class="fieldTitle">Phone</div>
					<div><?php echo form_input('cn_phone',$cn_phone, 'id="cn_phone" class="textBox textBoxSettings"'); ?></div>
                                        <div class="spacer">&nbsp;</div>
                                        <div class="fieldTitle">Fax</div>
					<div><?php echo form_input('cn_fax',$cn_fax, 'id="cn_fax" class="textBox textBoxSettings"'); ?></div>
                                        <div class="spacer">&nbsp;</div>

                	<div class="fieldTitle">Google Map URL</div>
					<div><?php echo form_input('gmap_iframe',$gmap_iframe, 'id="gmap_iframe" class="textBox textBoxSettings"'); ?></div>


                  	<div class="spacer">&nbsp;</div>
					<div class="spacer" style="height:30px;">&nbsp;</div>


				</div>
			</div>
			<div class="rigth-colum" style="min-width:400px; width:48%">
				<div class="col-contents">

					<div id="options-header">
						<div class="options_title">Contact Settings</div>
					</div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Address : </div>
					<div><?php echo form_textarea('cn_address_en',$cn_address_en, 'id="cn_address_en" class="textBoxSmall" style="width:250px;"'); ?></div>
                    <div class="spacer" style="height:30px;">&nbsp;</div>
 			   </div>
			</div>
		</div>
	</div>
	<?php echo form_hidden('delete_image',''); ?>
	<?php echo form_close(); ?>
</div>
<script language="javascript">

	function DeleteImage(){
		document.frmRegister.delete_image.value="Y";
		document.frmRegister.submit();
	}
	function delConfirmation(){
		var a = confirm("Are you want to delete the Watermark?");
		if (a == true){
			return true;
		}else{
			return false;
		}
	}
</script>
