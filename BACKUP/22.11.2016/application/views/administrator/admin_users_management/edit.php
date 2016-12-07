<script type="text/javascript" language="javascript">
		$("document").ready(function(){
			$("#frmRegister").validate();
		});
</script>
<? include(ADMIN_VIEW_PATH."/editors.php"); ?>
<div class="page">
	<?php echo form_open_multipart(HOST_URL."/".$folder_name."/edit/".$data_record->id,'name="frmRegister" id="frmRegister"'); ?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig">Admin Users Management : Edit Record</a></div>
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
					<div class="fieldTitle">Full Name : </div>
					<div class="float1"><?php echo form_input('full_name',$full_name, 'id="full_name" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Email : </div>
					<div class="float1"><?php echo form_input('email',$email, 'id="email" class="textBox required email"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Phone : </div>
					<div class="float1"><?php echo form_input('phone',$phone, 'id="phone" class="textBox"'); ?></div>
					<div class="spacer" style="height:30px;">&nbsp;</div>
					
					<div class="fieldTitle">Username : </div>
					<div class="float1"><?php echo form_input('username', $username, 'id="username" class="textBox" disabled="disabled"'); ?> &nbsp;Not Editable</div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">User Type : </div>
					<?
						$select_array = array('A'=>'Administrator', 'SA'=>'System Admin'); 
						
					?>
					<div class="float1"><select name="user_type" id="user_type" class="listBox">
						<option value="SA">System Admin</option>
						<option value="A">Administrator</option>
					</select></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Rights : </div>
					<div class="" style="overflow:auto">
						<ul class="RightsModules">
							<? foreach($all_modules as $key=>$value){ ?>
							<li>
								<div class="float1"><input type="checkbox" name="rights[]" id="rights[]" value="<?php echo $value->id; ?>" <? if (in_array($value->id, $data_right)){ echo "checked='checked'"; } ?> /></div>
								<div class="float1">&nbsp;&nbsp;<? echo $value->module_name; ?></div>
							</li>
							<? } ?>
						</ul>
					</div>
					
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
					<!-- ********** IMAGES SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Images</div>
						<div class="box_gray_notice">Jpeg, Gif & PNG only</div>
					</div>
					<div class="box">
						<div class="fieldTitle2">Image</div>						
						<div><? echo form_upload('image1','', 'id="image1" class="fileBox"'); ?></div>
						<div class="spacer">&nbsp;</div>
						<? if (!empty($image_name)){ ?>
						<div class="fieldTitle2">&nbsp;</div>	
						<div class="float1"><img src="<?=$thumb_path?>" class="thumb" /> <img src="<?=ADMIN_IMG_PATH?>/cross.png" alt="Delete" hspace="2" border="0" onclick="javascript:if(delConfirmation()==true){DeleteImage()}" style="cursor:pointer;" /></div>
						<? } ?>
					</div>
					
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
		var a = confirm("Are you want to delete the Selected Image?");
		if (a == true){
			return true;
		}else{
			return false;
		}
	}
</script>