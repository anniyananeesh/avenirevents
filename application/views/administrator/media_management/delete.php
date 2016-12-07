<div class="page">
	<?php echo form_open(HOST_URL."/".$folder_name."/delete", 'name="frmListing" id="frmListing"'); ?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig"><?php echo $module_name; ?> : Delete Record</a></div>
		<div class="buttons">
			<ul class="actions">
				<li><input type="submit" name="btnsubmit" id="btnsubmit" value="Delete" class="btn_delete" ></li>
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
		<div id="list">
			<div class="list_header">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="30" align="center" valign="middle"><input name="AC" type="checkbox" onclick="CheckAll();" checked="checked" /></td>
						<td width="10" align="center" valign="middle">&nbsp;</td>
						<td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="50%" align="left" valign="middle">Gallery Title (English)</td>
                            <td width="30%" align="left" valign="middle">Gallery Title (Arabic)</td>
                            <td align="left" valign="middle">Images</td>
						</tr>
						</table></td>
						<td width="110" align="center" valign="middle">Date</td>
						<td width="70" align="center" valign="middle">Status</td>
						<td width="50" align="center" valign="middle">ID</td>
					</tr>
				</table>
			</div>
			<div class="list">
				<?php $CI = & get_instance(); $CI->load->model($this->config->item('admin_folder')."/model_category_management");
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
						<td width="30" height="34" align="center" valign="middle"><input name="EditBox[]" type="checkbox" onclick="UnCheckAll();" value="<?php echo $value->id; ?>" checked="checked" /></td>
						<td width="10" align="left" valign="middle">&nbsp;</td>
						<td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td width="50%" align="left" valign="middle"><? echo $value->gallery_title_en; ?></td>
                                <td width="30%" align="left" valign="middle" class="arabic"><? 	
										echo $value->gallery_title_ar;
										
										$CI->load->model($this->config->item("admin_folder")."/model_gallery_images_management");
										$total_images = $CI->model_gallery_images_management->countTotal(array('parent_id'=>$value->id));
								?></td>
                                <td align="left" valign="middle"><strong><?=$total_images?></strong></td>
							</tr>
						</table></td>
						<td width="110" align="center" valign="middle"><?php echo dateFormat($value->added_date); ?></td>
						<td width="70" align="center" valign="middle"><?php echo $status_img; ?></td>
						<td width="50" align="center" valign="middle"><?php echo $value->id; ?></td>
					</tr>
				</table>
				</div>
				<? } ?>
			</div>
			<div class="list_footer">&nbsp;</div>
			<div class="spacer">&nbsp;</div>
			<div class=""><?=$links?></div>
		</div>
	</div>
	<? echo form_hidden('is_order', ''); ?>
	<? echo form_close(); ?>
</div>	
<script src="<?=JS_PATH?>/admin_validation.js"></script>