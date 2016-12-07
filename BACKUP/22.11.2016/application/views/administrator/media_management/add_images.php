<link href="<?=CLASSES_HOST_PATH?>/dropzone/css/dropzone.css" type="text/css" rel="stylesheet" />
<script src="<?=CLASSES_HOST_PATH?>/dropzone/dropzone.js"></script>
<!-- ACCEPTED FILE TYPES FOR DROPZONE CAN BE MANAGED FROM dropzone.js -->

<div class="page">	
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig"><?php echo $module_name; ?> : Add Images</a></div>
		<div class="buttons">
			<ul class="actions">				
				<a href="<?=HOST_URL?>/<?=$folder_name?>/manage_images/<?=$parent_id?>"><li>
					<div class="icon_back">&nbsp;</div>
					<div class="action_text">Manage</div>
				</li></a>
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
			<div class="left-colum" style="width:100%">
				<div class="col-contents">									
					<form action="<?=HOST_URL?>/<?=$folder_name?>/add_images/<?=$parent_id?>" class="dropzone"  >
                    
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
					</form>
				</div>
			</div>
			
		</div>
	</div>	
</div>	