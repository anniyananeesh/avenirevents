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
						<div class="options_title">Title and Metadata</div>
					</div>
					<div class="spacer" style="height:20px;">&nbsp;</div>
					<div class="fieldTitle">Website Title : </div>
					<div><?php echo form_textarea('website_title', $website_title, 'id="website_title" class="textArea required"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Meta Keywords : </div>
					<div><?php echo form_textarea('meta_keywords', $meta_keywords, 'id="meta_keywords" class="textArea required"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Meta Description : </div>
					<div><?php echo form_textarea('meta_description', $meta_description, 'id="meta_description" class="textArea required"'); ?></div>
					<div class="spacer" style="height:30px;">&nbsp;</div>
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
					<!--<div class="fieldTitle">Youtube : </div>
					<div><?php //echo form_input('youtube',$youtube, 'id="youtube" class="textBox textBoxSettings"'); ?></div>
					<div class="spacer">&nbsp;</div>-->
                                        <div class="fieldTitle">Google Plus : </div>
					<div><?php echo form_input('googleplus',$googleplus, 'id="googleplus" class="textBox textBoxSettings"'); ?></div>
					<div class="spacer">&nbsp;</div>
                                        <div class="fieldTitle">Instagram : </div>
					<div><?php echo form_input('instagram',$instagram, 'id="instagram" class="textBox textBoxSettings"'); ?></div>
					<div class="spacer">&nbsp;</div>
                                        <div class="fieldTitle">Youtube : </div>
					<div><?php echo form_input('youtube',$youtube, 'id="youtube" class="textBox textBoxSettings"'); ?></div>
					<div class="spacer" style="height:30px;">&nbsp;</div>

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
                                        <div class="fieldTitle">Mobile</div>
					<div><?php echo form_input('cn_mob',$cn_mob, 'id="cn_mob" class="textBox textBoxSettings"'); ?></div>

					<div class="spacer">&nbsp;</div>
               		<div class="fieldTitle">P.Box No.</div>
					<div><?php echo form_input('cn_pbno',$cn_pbno, 'id="cn_pbno" class="textBox textBoxSettings"'); ?></div>

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
						<div class="options_title">Global thumbnail Width and Height</div>
					</div>
					<div class="spacer" style="height:20px;">&nbsp;</div>
					<div class="fieldTitle">Thumbnail Width : </div>
					<div><?php echo form_input('thumb_width',$thumb_width, 'id="thumb_width" class="textBoxSmall"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Thumbnail Height : </div>
					<div><?php echo form_input('thumb_height',$thumb_height, 'id="thumb_height" class="textBoxSmall"'); ?></div>

					<div class="spacer" style="height:30px;">&nbsp;</div>
					<div id="options-header">
						<div class="options_title">Editor Settings</div>
					</div>
					<div class="spacer" style="height:20px;">&nbsp;</div>
					<div class="fieldTitle">Editor : </div>
					<div class="float1"><select name="editor" id="editor" class="listBox" style="padding:5px !important; width:165px;">
						<option value="none" <? if ($editor=="none"){ echo "selected='selected'"; }?>>No Editor</option>
                  <option value="openWYSIWYG" <? if ($editor=="openWYSIWYG"){ echo "selected='selected'"; }?>>openWYSIWYG</option>
                  <option value="tinyMCE" <? if ($editor=="tinyMCE"){ echo "selected='selected'"; }?>>tinyMCE</option>
					</select></div>

					<div class="spacer" style="height:30px;">&nbsp;</div>
					<div id="options-header">
						<div class="options_title">Watermark Settings</div>
					</div>
					<div class="spacer" style="height:20px;">&nbsp;</div>
					<div class="fieldTitle">Vertical Position : </div>
					<div><select name="vertical_alignment" id="vertical_alignment" class="listBox" style="padding:5px !important; width:165px;">
						<option value="top" <? if ($vertical_alignment=="top"){ echo "selected='selected'"; } ?>>Top</option>
						<option value="middle" <? if ($vertical_alignment=="middle"){ echo "selected='selected'"; } ?>>Middle</option>
						<option value="bottom" <? if ($vertical_alignment=="bottom"){ echo "selected='selected'"; } ?>>Bottom</option>
					</select></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Horizontal Position : </div>

					<div><select name="horizontal_alignment" id="horizontal_alignment" class="listBox" style="padding:5px !important; width:165px;">
						<option value="left" <? if ($horizontal_alignment=="left"){ echo "selected='selected'"; } ?>>Left</option>
						<option value="center" <? if ($horizontal_alignment=="center"){ echo "selected='selected'"; } ?>>Center</option>
						<option value="right" <? if ($horizontal_alignment=="right"){ echo "selected='selected'"; } ?>>Right</option>
					</select></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Watermark Padding : </div>
					<div><?php echo form_input('watermark_padding',$watermark_padding, 'id="watermark_padding" class="textBoxSmall"'); ?></div>

					<div class="fieldTitle">Watermark Image : </div>
					<div><? echo form_upload('image1','', 'id="image1" class="fileBox"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<? if (!empty($watermark_image)){ ?>
						<div class="fieldTitle">&nbsp;</div>
						<div class="float1"><img src="<?php echo $this->image_show_path; ?>/<? echo $watermark_image; ?>" class="thumb" /> <img src="<?=ADMIN_IMG_PATH?>/cross.png" alt="Delete" hspace="2" border="0" onclick="javascript:if(delConfirmation()==true){DeleteImage()}" style="cursor:pointer;" /></div>
					<? } ?>
					<div id="options-header">
						<div class="options_title">Contact Settings</div>
					</div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Address : </div>
					<div><?php echo form_textarea('cn_address_en',$cn_address_en, 'id="cn_address_en" class="textBoxSmall" style="width:250px;"'); ?></div>
                    <div class="spacer" style="height:30px;">&nbsp;</div>


										<div class="fieldTitle">Address (Arabic): </div>
										<div><?php echo form_textarea('cn_address_ar',$cn_address_ar, 'id="cn_address_ar" class="textBoxSmall" style="width:250px;"'); ?></div>
					                    <div class="spacer" style="height:30px;">&nbsp;</div>


                	<div class="fieldTitle">Email Client registration:</div>
					<div><?php echo form_input('creg_email',$creg_email, 'id="creg_email" class="textBox textBoxSettings"'); ?></div>
					<div class="spacer">&nbsp;</div>
                	<div class="fieldTitle">Email Model registration:</div>
					<div><?php echo form_input('mreg_email',$mreg_email, 'id="mreg_email" class="textBox textBoxSettings"'); ?></div>
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
