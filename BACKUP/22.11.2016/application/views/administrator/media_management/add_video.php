<script type="text/javascript" language="javascript">
		$("document").ready(function(){
			$("#frmRegister").validate();
		});
</script>
<div class="page">
	<?php echo form_open_multipart(HOST_URL."/".$folder_name."/add_video/".$parent_id,'name="frmRegister" id="frmRegister"'); ?>
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
                    <div class="fieldTitle">Video URL : </div>
					<div><textarea name="video_url" id="video_url" class="textArea required"></textarea></div>
					<div class="spacerBig">&nbsp;</div>
                    <div class="spacerBig">&nbsp;</div>
                    <div class="fieldTitle">Example</div>
                    <div><img src="<?=IMG_PATH?>/video_url_sample.jpg" /></div>
				</div>
			</div>
			<div class="rigth-colum">
				<div class="col-contents">
					<!-- ********** Options SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Options</div>
					</div>
					<div class="box">
						<div class="fieldTitle2">Status :</div>
						<div class=""><? echo form_radio('is_active', 'Y', TRUE); ?> Publish  <? echo form_radio('is_active', 'N', FALSE); ?> Unpublish</div>
						<div class="spacer">&nbsp;</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>	