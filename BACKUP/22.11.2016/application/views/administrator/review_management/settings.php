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
			<div class="left-colum" style="min-width:450px !important; width:50%; height:200px;">
				<div class="col-contents">				
					<div class="fieldTitle">Thumbnail Width : </div>
					<div><?php echo form_input('thumb_width',$thumb_width, 'id="thumb_width" class="textBoxSmall required"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Thumbnail Height : </div>
					<div><?php echo form_input('thumb_height',$thumb_height, 'id="thumb_height" class="textBoxSmall required"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Image Width : </div>
					<div><?php echo form_input('image_width',$image_width, 'id="image_width" class="textBoxSmall"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Image Height : </div>
					<div><?php echo form_input('image_height',$image_height, 'id="image_height" class="textBoxSmall"'); ?></div>
				</div>
			</div>
			<div class="rigth-colum" style="min-width:450px; width:48%; height:200px;">
				<div class="col-contents">
					<div class="fieldTitle">Thumbnail Cropping : </div>
					<div class=""><input type="radio" name="thumbnail_cropping" value="Y" <? if ($thumbnail_cropping=="Y"){ echo "checked='checked'"; } ?> /><span class="published">Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="thumbnail_cropping" value="N" <? if ($thumbnail_cropping=="N"){ echo "checked='checked'"; } ?>  /><span class="unpublished">No</span></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Image Resize : </div>
					<div class=""><input type="radio" name="image_resize" value="Y" <? if ($image_resize=="Y"){ echo "checked='checked'"; } ?> /><span class="published">Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="image_resize" value="N" <? if ($image_resize=="N"){ echo "checked='checked'"; } ?>  /><span class="unpublished">No</span></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Image Cropping : </div>
					<div class=""><input type="radio" name="image_cropping" value="Y" <? if ($image_cropping=="Y"){ echo "checked='checked'"; } ?> /><span class="published">Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="image_cropping" value="N" <? if ($image_cropping=="N"){ echo "checked='checked'"; } ?>  /><span class="unpublished">No</span></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Watermark : </div>
					<div class=""><input type="radio" name="is_watermark" value="Y" <? if ($is_watermark=="Y"){ echo "checked='checked'"; } ?> /><span class="published">Yes</span>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="is_watermark" value="N" <? if ($is_watermark=="N"){ echo "checked='checked'"; } ?>  /><span class="unpublished">No</span></div>
					
				 </div>
			</div>
			<div class="spacer">&nbsp;</div>
			<div class="box">Note: If <strong>Image Resize</strong> is Yes and <strong>Image height</strong> and <strong>Image width</strong> is empty.<br /> Default values will be taken as <strong>640 x 480</strong> pixels. </div>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>	