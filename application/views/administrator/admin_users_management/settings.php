<script type="text/javascript" language="javascript">
		$("document").ready(function(){
			$("#frmRegister").validate();
		});
</script>
<div class="page">
	<?php echo form_open(HOST_URL."/".$folder_name."/settings",'name="frmRegister" id="frmRegister"'); ?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig"><?php echo $module_name; ?> : Settings</a></div>
		<div class="buttons">
			<ul class="actions">				
				<li><input type="submit" name="btnsubmit" id="btnsubmit" value="Save & Close" class="btn_save_close" ></li>			
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
		<div id="panel_title">Settings</div>
		<div id="panel">
			<div class="left-colum">
				<div class="col-contents">				
					<div class="fieldTitle">Thumbnail Width : </div>
					<div><?php echo form_input('thumb_width',$thumb_width, 'id="thumb_width" class="textBox required"'); ?> px</div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Thumbnail Height : </div>
					<div><?php echo form_input('thumb_height',$thumb_height, 'id="thumb_height" class="textBox required"'); ?> px</div>
					<div class="spacer">&nbsp;</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>	