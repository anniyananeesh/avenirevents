<script src="<?=PLUGINS_PATH?>/colorbox/jquery.colorbox-min.js"></script>
<link rel="stylesheet" href="<?=PLUGINS_PATH?>/colorbox/colorbox.css" />
<script>
	$(document).ready(function(){
		//$(".colorbox").colorbox();
		$(".colorbox").colorbox({rel:'colorbox', slideshow:true});
		//$(".youtube").colorbox({iframe:true, innerWidth:480, innerHeight:360});
	});
</script>
<div class="page">
	<?php echo form_open(HOST_URL."/".$folder_name."/manage_images/".$parent_id, 'name="frmListing" id="frmListing"'); ?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig"><?php echo $module_name; ?> : Images</a></div>
		<div class="buttons">
			<ul class="actions">
				<a href="<?=HOST_URL?>/<?=$folder_name?>/add_images/<?=$parent_id?>"><li>
					<div class="icon_new">&nbsp;</div>
					<div class="action_text">New</div>
				</li></a>				
				<li class="line lineHover">&nbsp;</li>
				<li><input type="submit" name="btnsubmit" id="btnpublish" value="Publish" class="btn_publish" ></li>
				<li><input type="submit" name="btnsubmit" id="btnunpublish" value="Unpublish" class="btn_unpublish" ></li>
				<li class="line">&nbsp;</li>
				<li><input type="submit" name="btndelete" id="btndelete" value="Delete" class="btn_delete" ></li>
				<li class="line">&nbsp;</li>
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
		<div id="list">
			<div class="list_header">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="30" align="center" valign="middle"><input name="AC" type="checkbox" onclick="CheckAll();" /></td>
						<td width="50" align="center" valign="middle">&nbsp;</td>
						<td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td align="left" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/manage_images/<?=$parent_id?>/sort/title/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">Image Name </a> <img src="<?=ADMIN_IMG_PATH?>/<?php echo ((isset($sort_title))?$sort_title:"sort_empty.png"); ?>" align="absmiddle" class="sort_image"/></td>
						</tr>
						</table></td>
                                                <td width="450" align="center" valign="middle">Link</td>
						<td width="120" align="center" valign="middle">Image</td>
						<td width="100" align="center" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/manage_images/<?=$parent_id?>/sort/orderby/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">Order</a> <img src="<?=ADMIN_IMG_PATH?>/filesave.png" align="absmiddle" border="0" onclick="submitOrderOnly();" style="cursor:pointer;" title="Save Order" /></td>
						<td width="100" align="center" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/manage_images/<?=$parent_id?>/sort/added_date/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">Date</a> <img src="<?=ADMIN_IMG_PATH?>/<?php echo ((isset($sort_added_date))?$sort_added_date:"sort_empty.png"); ?>" align="absmiddle" class="sort_image"/></td>
						<? if (isset($is_featured)){ ?>
						<td width="90" align="center" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/manage_images/<?=$parent_id?>/sort/is_featured/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">Featured</a> <img src="<?=ADMIN_IMG_PATH?>/<?php echo ((isset($sort_is_featured))?$sort_is_featured:"sort_empty.png"); ?>" align="absmiddle" class="sort_image"/></td>
						<? } ?>
						<td width="70" align="center" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/manage_images/<?=$parent_id?>/sort/is_active/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">Status</a> <img src="<?=ADMIN_IMG_PATH?>/<?php echo ((isset($sort_is_active))?$sort_is_active:"sort_empty.png"); ?>" align="absmiddle" class="sort_image"/></td>
                                                
						<td width="50" align="center" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/manage_images/<?=$parent_id?>/sort/id/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">ID</a> <img src="<?=ADMIN_IMG_PATH?>/<?php echo ((isset($sort_id))?$sort_id:"sort_empty.png"); ?>" align="absmiddle" class="sort_image"/></td>
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
						
						$thumb_path   = (!empty($image1_name) ? $this->thumb_show_path.'/'.$image1_name : ADMIN_IMG_PATH."/no_admin_image.png");	
						if (!empty($image1_name)) { $bigImage_path = $this->image_show_path.$image1_name; }
						$bgClass = (($bgClass=="bgcolor1") ? "bgcolor2" : "bgcolor1");
						
				?>
				<div class="listitem selected <?=$bgClass?>">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="30" height="34" align="center" valign="middle"><input name="EditBox[]" type="checkbox" onclick="UnCheckAll();" value="<?php echo $value->id; ?>" /></td>
						<td width="50" align="left" valign="middle">&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?=HOST_URL?>/<?=$folder_name?>/delete_images/<?=$parent_id?>/<?php echo $value->id; ?>"><img src="<?=ADMIN_IMG_PATH?>/delete.png" alt="Delete" border="0" /></a></td>
                                                
						<td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td align="left" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/view/<? echo $value->id; ?>" title="Click to view details" class="listLink"><? echo $value->title; ?></a></td>
							</tr>
						</table></td>
                                                <td width="450" align="center" valign="middle">
                                                    <?php echo $bigImage_path?>
                                                </td>
						<td width="120" align="center" valign="middle"><a href="<?=$bigImage_path?>" class="colorbox"><img src="<?=$thumb_path?>" width="80" class="thumb" border="0" /></a></td>
						<td width="100" align="center" valign="middle"><input type="text" name="orderby[]" id="orderby[]" style="width:30px;text-align:center" class="index_list" value="<?php echo $value->orderby; ?>" tabindex="<?php echo $key; ?>" /><input type="hidden" name="idarray[]" id="idarray[]" value="<?php echo $value->id; ?>" /></td>
						<td width="100" align="center" valign="middle"><?php echo dateFormat($value->added_date); ?></td>
						<? if (isset($is_featured)){ ?>
						<td width="90" align="center" valign="middle"><?php echo $featured_img; ?></td>
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
	<?php echo form_hidden('parent_id', $parent_id); ?>
	<? echo form_hidden('is_order', ''); ?>
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
		document.frmListing.action="<?=HOST_URL?>/<?=$folder_name?>/delete_images/<?=$parent_id?>";
		document.frmListing.submit();
	}
	
</script>