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
					<div class="fieldTitle">Title : </div>
					<div><?php echo form_input('heading_en',$heading_en, 'id="heading_en" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>


					<div class="fieldTitle">Date : </div>
					<div><?php echo form_input('event_date',$event_date, 'id="event_date" class="textBox required" placeholder="dd-mm-yyyy"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Venue : </div>
					<div><?php echo form_input('venue_en',$venue_en, 'id="venue_en" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div>
						<div class="fieldTitle">Description (English) : </div>
					</div>
					<div class="clear"><?php echo form_textarea('description_en', $description_en, 'id="description_en" class="editor" placeholder="mm-dd-yyyy"'); ?></div>
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
					<!-- ********** IMAGES SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Images (150px X 150px)</div>
						<div class="box_gray_notice">Jpeg, Gif & PNG only</div>
					</div>
					<div class="box">
						<div class="fieldTitle2">Image</div>
						<div><? echo form_upload('image1','', 'id="image1" class="fileBox"'); ?></div>
						<div class="spacer">&nbsp;</div>
						<? if (!empty($data_record->image1)){ ?>
						<div class="fieldTitle2">&nbsp;</div>
						<div class="float1"><img src="<?=$this->thumb_show_path?><?=$data_record->image1?>" class="thumb" /> <img src="<?=ADMIN_IMG_PATH?>/cross.png" alt="Delete" hspace="2" border="0" onclick="javascript:if(delConfirmation()==true){DeleteFile('<?=$data_record->image1?>', 'image1')}" style="cursor:pointer;" /></div>
						<? } ?>
					</div>
					<div class="spacer">&nbsp;</div>
					<div class="spacer">&nbsp;</div>

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
