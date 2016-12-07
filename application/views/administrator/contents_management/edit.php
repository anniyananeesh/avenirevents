<script type="text/javascript" language="javascript">
		$("document").ready(function(){
			$("#frmRegister").validate();
		});
</script>
<? include(ADMIN_VIEW_PATH."/editors.php"); ?>
<div class="page">
	<?php echo form_open_multipart(HOST_URL."/".$folder_name."/edit/".$data_record->id."/".$parent_id."/".$parent_name,'name="frmRegister" id="frmRegister"'); ?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig"><?php echo $module_name; ?> : Edit Record</a></div>
		<div class="buttons">
			<ul class="actions">
				<li><input type="submit" name="btnsubmit" id="btnsubmit" value="Save & Close" class="btn_save_close" ></li>
				<li class="line lineHover">&nbsp;</li>
				<a href="<?=HOST_URL?>/<?=$folder_name?>/pages/<?=$parent_id?>/<?=$parent_name?>"><li>
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
					<div class="fieldTitle">Heading (English) : </div>
					<div><?php echo form_input('heading_en',$heading_en, 'id="heading_en" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Website Title : </div>
					<div><?php echo form_textarea('website_title', $website_title, 'id="website_title" class="textArea required"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Meta Keywords : </div>
					<div><?php echo form_textarea('meta_keywords', $meta_keywords, 'id="meta_keywords" class="textArea required"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Meta Description : </div>
					<div><?php echo form_textarea('meta_description', $meta_description, 'id="meta_description" class="textArea required"'); ?></div>

                                        <div class="spacer">&nbsp;</div>

					<div>
						<div class="fieldTitle">Description Small : </div>
					</div>
					<div class="clear"><?php echo form_textarea('description_sm_en', $description_sm_en, 'id="description_sm" style="height:60px; width:80%;" class="textArea required"'); ?></div>
                                        <div class="spacer">&nbsp;</div>

					<div class="spacer">&nbsp;</div>
                                        <?php if($parent_name != 'home'):?>
					<div class="spacer">&nbsp;</div>
					<div>
                                            <div class="fieldTitle">Description : </div>
					</div>
					<div class="clear"><?php echo form_textarea('description_en', $description_en, 'id="description_en" class="editor"'); ?></div>
                                        <div class="spacer">&nbsp;</div>
 				  <?php endif;?>
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
						<div class="red">Width = 94 pixels , Height = 92 pixels</div>
                        <div class="spacer">&nbsp;</div>
                        <div class="fieldTitle2">Image</div>
						<div><? echo form_upload('image1','', 'id="image1" class="fileBox"'); ?></div>
						<div class="spacer">&nbsp;</div>
						<? if (!empty($data_record->image1)){ ?>
						<div class="fieldTitle2">&nbsp;</div>
						<div class="float1"><img src="<?=$this->thumb_show_path?><?=$data_record->image1?>" class="thumb" /> <img src="<?=ADMIN_IMG_PATH?>/cross.png" alt="Delete" hspace="2" border="0" onclick="javascript:if(delConfirmation()==true){DeleteFile('<?=$data_record->image1?>', 'image1')}" style="cursor:pointer;" /></div>
						<? } ?>
						<div class="spacer">&nbsp;</div>
						<div class="red"><?php echo $comments; ?></div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<?php echo form_hidden('delete_file',''); ?>
	<?php echo form_hidden('file_name',''); ?>
	<?php echo form_hidden('field_name',''); ?>
	<?php echo form_close(); ?>
</div>
<script language="javascript">
	function DeleteFile(filename, fieldname){
		document.frmRegister.file_name.value = filename;
		document.frmRegister.field_name.value = fieldname;
		document.frmRegister.delete_file.value="Y";
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
