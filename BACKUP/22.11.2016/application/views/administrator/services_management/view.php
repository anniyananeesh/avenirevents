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
					<div class="detailTitle">Heading (English) : </div>
					<div class="fieldValue"><?php echo $data_record->heading_en; ?></div>
					<div class="spacer">&nbsp;</div>
                    <div class="detailTitle">Heading (Arabic) : </div>
					<div class="fieldValue arabic"><?php echo $data_record->heading_ar; ?></div>
					<div class="spacerBig">&nbsp;</div>
					
					<div>
						<div class="detailTitle">Description (English) : </div>
						<div class="detailDesc"><?php echo stripslashes($data_record->description_en); ?></div>
					</div>
                    <div class="spacer">&nbsp;</div>
					<div>
						<div class="detailTitle">Description (Arabic) : </div>
						<div class="detailDesc arabic text_align2"><?php echo stripslashes($data_record->description_ar); ?></div>
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
						<div class="spacer">&nbsp;</div>
						<div class="detailTitle" style="width:70px;">Status</div>
						<div class=""><?php echo $status_img; ?> <?php echo $status; ?></div>
						<div class="spacer">&nbsp;</div>
					</div>
					<!-- ********** IMAGES SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Images</div>
					</div>
					<div class="box">
						<? if (!empty($data_record->image1)){ ?>
						<a href="<?=$this->image_show_path?><?=$data_record->image1?>" title="View Big Image"><img src="<?=$this->thumb_show_path?><?=$data_record->image1?>" class="thumb" alt="Image" border="0" /></a>
						<? }else{ echo "No Image"; }  ?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>	