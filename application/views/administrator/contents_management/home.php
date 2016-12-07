<div class="page">
	<?php echo form_open(HOST_URL."/".$folder_name, 'name="frmListing" id="frmListing"'); ?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig"><?php echo $module_name; ?></a></div>
		<div class="buttons">
			<ul class="actions">
				<a href="<?=HOST_URL?>/<?=$folder_name?>/settings"><li>
					<div class="icon_settings">&nbsp;</div>
					<div class="action_text">Settings</div>
				</li></a>
			</ul>
		</div>
	</div>
	<div>&nbsp;</div>
	<? if (isset($MSG)){ ?>
	<div id="MSG" class="<? if (isset($Error) && $Error=="Y"){ echo "alert"; }else{ echo "success"; }  ?>"><?php echo $MSG; ?></div>
	<? } ?>
	<div class="contents">
		<div class="float1 color2">Please select the page to manage</div>
		<div class="spacer">&nbsp;</div>
		<div id="list">
			<div class="list_header">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="30" align="center" valign="middle">&nbsp;</td>
						<td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td align="left" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/index/sort/heading/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">Page Name </a> <img src="<?=ADMIN_IMG_PATH?>/<?php echo ((isset($sort_heading))?$sort_heading:"sort_empty.png"); ?>" align="absmiddle" class="sort_image"/></td>
								</tr>
						</table></td>
						<td width="100" align="center" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/index/sort/added_date/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">Date</a> <img src="<?=ADMIN_IMG_PATH?>/<?php echo ((isset($sort_added_date))?$sort_added_date:"sort_empty.png"); ?>" align="absmiddle" class="sort_image"/></td>
						<? if (isset($is_featured)){ ?>
						<? } ?>
						<td width="70" align="center" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/index/sort/is_active/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">Status</a> <img src="<?=ADMIN_IMG_PATH?>/<?php echo ((isset($sort_is_active))?$sort_is_active:"sort_empty.png"); ?>" align="absmiddle" class="sort_image"/></td>
						<td width="50" align="center" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/index/sort/id/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">ID</a> <img src="<?=ADMIN_IMG_PATH?>/<?php echo ((isset($sort_id))?$sort_id:"sort_empty.png"); ?>" align="absmiddle" class="sort_image"/></td>
					</tr>
				</table>
			</div>
			<div class="list">
				<?php
					foreach($data_list as $key=>$value){

						if (!isset($is_featured)){ $is_featured= "";}
						$image1_name  = $value->image1;
						$is_active    = $value->is_active;
						$is_featured  = $value->is_featured;
						$featured_img = (($is_featured=="Y")? '<img src="'.ADMIN_IMG_PATH.'/featured.png" alt="Featured">' : '');
						$status_img   = (($is_active=="Y")?   '<img src="'.ADMIN_IMG_PATH.'/publish.png" alt="Publish">' :
																		  '<img src="'.ADMIN_IMG_PATH.'/unpublish.png" alt="Unpublish">');

						$image_path   = (!empty($image1_name) ? $this->thumb_show_path.'/'.$image1_name : ADMIN_IMG_PATH."/no_admin_image.png");
						$bgClass = (($bgClass=="bgcolor1") ? "bgcolor2" : "bgcolor1");

				?>
				<div class="listitem selected <?=$bgClass?>">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="30" height="34" align="left" valign="middle">&nbsp;&nbsp;<? echo $key+1; ?></td>
						<td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td align="left" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/pages/<? echo $value->id; ?>/<? echo url_title($value->heading_en, '_', TRUE); ?>" title="Click to manage" class="listLink"><? echo $value->heading_en; ?></a></td>
                                                    </tr>
						</table></td>
						<td width="100" align="center" valign="middle"><?php echo dateFormat($value->added_date); ?></td>
						<? if (isset($is_featured)){ ?>
						<? } ?>
						<td width="70" align="center" valign="middle"><?php echo $status_img; ?></td>
						<td width="50" align="center" valign="middle"><?php echo $value->id; ?></td>
					</tr>
				</table>
				</div>
				<? } ?>
			</div>
			<div class="list_footer text_align2">Version : <?php echo $this->module_version; ?></div>
			<div class="spacer">&nbsp;</div>
			<div class="">
				<div class="float1 color2"><? echo $display_records; ?> &nbsp;<?=$links?></div>
				<div class="float2">&nbsp;</div>
			</div>
		</div>
	</div>
	<? echo form_close(); ?>
</div>
<script src="<?=JS_PATH?>/admin_validation.js"></script>
<script language="javascript">
	$('#btndelete').click(function(){
		var CheckedBoxes = $('input[name="EditBox[]"]:checked').length;
		if (CheckedBoxes==0){
			alert('Please select atleast one record!');
			return false;
		}else{
			DeleteRecord();
		}
	});

	function DeleteRecord(){
		document.frmListing.action="<?=HOST_URL?>/<?=$folder_name?>/delete";
		document.frmListing.submit();
	}

</script>
