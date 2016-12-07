<div class="page">
	<?php echo form_open(HOST_URL."/".$folder_name."/delete/-/".$parent_id."/".$parent_name, 'name="frmListing" id="frmListing"'); ?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig"><?php echo $module_name; ?> : Delete Record</a></div>
		<div class="buttons">
			<ul class="actions">
				<li><input type="submit" name="btnsubmit" id="btnsubmit" value="Delete" class="btn_delete" ></li>
				<a href="<?=HOST_URL?>/<?=$folder_name?>/pages/<?=$parent_id?>/<?=$parent_name?>"><li>
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
							<td align="left" valign="middle">Page Name (English)</td>
                            <td align="left" valign="middle">Page Name (Arabic)</td>
						</tr>
						</table></td>
						<td width="60" align="center" valign="middle">Image</td>
						<td width="110" align="center" valign="middle">Date</td>
						<? if (isset($is_featured)){ ?>
						<td width="90" align="center" valign="middle">Featured</td>
						<? } ?>
						<td width="70" align="center" valign="middle">Status</td>
						<td width="50" align="center" valign="middle">ID</td>
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
						<td width="30" height="34" align="center" valign="middle"><input name="EditBox[]" type="checkbox" onclick="UnCheckAll();" value="<?php echo $value->id; ?>" checked="checked" /></td>
						<td width="10" align="left" valign="middle">&nbsp;</td>
						<td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td width="50%" align="left" valign="middle"><? echo $value->heading_en; ?></td>
                                <td align="left" valign="middle"><? echo $value->heading_ar; ?></td>
							</tr>
						</table></td>
						<td width="60" align="center" valign="middle"><img src="<?=$image_path?>" width="35" class="thumb" border="0" /></td>
						<td width="110" align="center" valign="middle"><?php echo dateFormat($value->added_date); ?></td>
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
			<div class="list_footer">&nbsp;</div>
			<div class="spacer">&nbsp;</div>
			<div class=""><?=$links?></div>
		</div>
	</div>
	<? echo form_hidden('is_order', ''); ?>
	<? echo form_close(); ?>
</div>	
<script src="<?=JS_PATH?>/admin_validation.js"></script>