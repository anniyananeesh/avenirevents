<script src="<?=PLUGINS_PATH?>/colorbox/jquery.colorbox-min.js"></script>
<link rel="stylesheet" href="<?=PLUGINS_PATH?>/colorbox/colorbox.css" />
<script>
	$(document).ready(function(){
		$(".colorbox1").colorbox();
		$(".colorbox").colorbox({rel:'colorbox', slideshow:false});
		//$(".youtube").colorbox({iframe:true, innerWidth:480, innerHeight:360});
	});
</script>
<div class="page">
	<?php
		if ($data_record->is_active=="Y"){ 
			$status_img = '<img src="'.ADMIN_IMG_PATH.'/publish.png" width="16" height="16">';
			$status = '<span class="published">Published</span>';
		}else{
			$status_img = '<img src="'.ADMIN_IMG_PATH.'/unpublish.png" width="16" height="16">';
			$status = '<span class="unpublished">Unpublished</span>';
		}
		
	?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig"><?php echo $module_name; ?> : Details</a></div>
		<div class="buttons">
			<ul class="actions">				
				<a href="<?=HOST_URL?>/<?=$folder_name?>"><li>
					<div class="icon_back">&nbsp;</div>
					<div class="action_text">Back</div>
				</li></a>
			</ul>
		</div>
	</div>
	<div>&nbsp;</div>
	<div class="contents">
		<div id="panel_title">Record Details</div>
		<div id="panel">
			<div class="left-colum">
				<div class="col-contents">									
                    <div class="detailTitle">Gallery Title (English): </div>
					<div class="fieldValue"><?php echo $data_record->gallery_title_en; ?></div>
					<div class="spacer">&nbsp;</div>
                    <div class="detailTitle">Gallery Title (Arabic): </div>
					<div class="fieldValue"><?php echo $data_record->gallery_title_ar; ?></div>
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
						<div class="spacer">&nbsp;</div>
						<div class="detailTitle" style="width:80px;">Status</div>
						<div class=""><?php echo $status_img; ?> <?php echo $status; ?></div>
						<div class="spacer">&nbsp;</div>                       
					</div>
					
                    
                    
				</div>
			</div>
		</div>
	</div>
</div>	