<link href="<?=PLUGINS_PATH?>/jquery_ui/css/admin/jquery-ui-1.9.2.custom.min.css" rel="stylesheet">
<script src="<?=PLUGINS_PATH?>/jquery_ui/js/jquery-ui-1.9.2.custom.min.js"></script>
<script>
	$(function() {
		var availableTags = [
			<?php
				foreach ($data_search as $key=>$value){
					echo '"'.$value[$this->search_field].'"';
					if ($key!=count($data_search)-1){ echo ","; }
				}
			?>
		];
		$( "#searchBox" ).autocomplete({
			source: availableTags
		});
	});
</script>
<script src="<?=PLUGINS_PATH?>/colorbox/jquery.colorbox-min.js"></script>
<link rel="stylesheet" href="<?=PLUGINS_PATH?>/colorbox/colorbox.css" />
<script>
	$(document).ready(function(){
		$(".colorbox").colorbox();
		//$(".colorbox").colorbox({rel:'colorbox', slideshow:true});
		//$(".youtube").colorbox({iframe:true, innerWidth:480, innerHeight:360});
	});
</script>
<div class="page">
	<?php echo form_open(HOST_URL."/".$folder_name, 'name="frmListing" id="frmListing"'); ?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig"><?php echo $module_name; ?></a></div>
		<div class="buttons">
			<ul class="actions">
				<a href="<?=HOST_URL?>/<?=$folder_name?>/add"><li>
					<div class="icon_new">&nbsp;</div>
					<div class="action_text">New</div>
				</li></a>
				<li class="line lineHover">&nbsp;</li>
				<li><input type="submit" name="btnsubmit" id="btnpublish" value="Publish" class="btn_publish" ></li>
				<li><input type="submit" name="btnsubmit" id="btnunpublish" value="Unpublish" class="btn_unpublish" ></li>
				<li class="line">&nbsp;</li>
				<li><input type="submit" name="btndelete" id="btndelete" value="Delete" class="btn_delete" ></li>
				<li class="line">&nbsp;</li>
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
		<div id="search_box">
			<div class="float1 simpleBold">Search: &nbsp;&nbsp;</div>
			<div class="float1">
			<? echo form_input('searchBox', $searchBox, 'id="searchBox" class="searchBox"'); ?>
			</div>
			<div class="float1">&nbsp;<? echo form_submit('btnsearch', 'Search'); ?></div>
			<div class="float1 simpleBold">&nbsp;&nbsp;&nbsp;&nbsp; Filter By: &nbsp;&nbsp;</div>
			<div class="float1">
			<select name="filter_by" id="filter_by" onchange="submitFormOnly()" class="listFilter">
				<option value="All">Show All</option>
				<option value="published" <? if ($filter_by=="published"){ echo "selected='selected'"; } ?>>Published</option>
			 	<option value="unpublished" <? if ($filter_by=="unpublished"){ echo "selected='selected'"; } ?>>Unpublished</option>
		  	</select>
		  	</div>
			<div class="float1 simpleBold">&nbsp;&nbsp;&nbsp;&nbsp; Display: &nbsp;&nbsp;</div>
			<div class="float1">
			<select name="paging" id="paging" onchange="submitFormOnly();" class="listFilter" style="width:60px;">
				<option value="5" <? if ($paging==5){ echo "selected='selected'"; }?>>5</option>
				<option value="10" <? if ($paging==10){ echo "selected='selected'"; }?>>10</option>
				<option value="20" <? if ($paging==20){ echo "selected='selected'"; }?>>20</option>
				<option value="30" <? if ($paging==30){ echo "selected='selected'"; }?>>30</option>
				<option value="40" <? if ($paging==40){ echo "selected='selected'"; }?>>40</option>
				<option value="50" <? if ($paging==50){ echo "selected='selected'"; }?>>50</option>
				<option value="100" <? if ($paging==100){ echo "selected='selected'"; }?>>100</option>
				<option value="250" <? if ($paging==250){ echo "selected='selected'"; }?>>250</option>
				<option value="500" <? if ($paging==500){ echo "selected='selected'"; }?>>500</option>
			</select>
		  	</div>
		</div>
		<div class="">&nbsp;</div>
		<div id="list">
			<div class="list_header">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="30" align="center" valign="middle"><input name="AC" type="checkbox" onclick="CheckAll();" /></td>
						<td width="70" align="center" valign="middle">&nbsp;</td>
						<td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="25%" align="left" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/index/sort/gallery_title_en/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">Gallery Title (English) </a> <img src="<?=ADMIN_IMG_PATH?>/<?php echo ((isset($sort_gallery_title_en))?$sort_gallery_title_en:"sort_empty.png"); ?>" align="absmiddle" class="sort_image"/></td>
                            <td width="25%" align="left" valign="middle" class="listHeading">Video Management</td>
                            <!-- <td align="left" valign="middle" class="listHeading">Image Management</td>-->
						</tr>
						</table></td>
						<td width="100" align="center" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/index/sort/orderby/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">Order</a> <img src="<?=ADMIN_IMG_PATH?>/filesave.png" align="absmiddle" border="0" onclick="submitOrderOnly();" style="cursor:pointer;" title="Save Order" /></td>
						<td width="100" align="center" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/index/sort/added_date/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">Date</a> <img src="<?=ADMIN_IMG_PATH?>/<?php echo ((isset($sort_added_date))?$sort_added_date:"sort_empty.png"); ?>" align="absmiddle" class="sort_image"/></td>

						<td width="70" align="center" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/index/sort/is_active/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">Status</a> <img src="<?=ADMIN_IMG_PATH?>/<?php echo ((isset($sort_is_active))?$sort_is_active:"sort_empty.png"); ?>" align="absmiddle" class="sort_image"/></td>
						<td width="50" align="center" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/index/sort/id/by/<?=$sortby?><?=$urlparams?>/offset/<?=$offset?>" class="listHeading">ID</a> <img src="<?=ADMIN_IMG_PATH?>/<?php echo ((isset($sort_id))?$sort_id:"sort_empty.png"); ?>" align="absmiddle" class="sort_image"/></td>
					</tr>
				</table>
			</div>
			<div class="list">
				<?php
                                    $CI = & get_instance();
                                    $CI->load->model($this->config->item('admin_folder')."/model_category_management");
                                ?>
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
						<td width="30" height="34" align="center" valign="middle">
                                                    <?php if($value->is_delete == 1):?>
                                                    <input name="EditBox[]" type="checkbox" onclick="UnCheckAll();" value="<?php echo $value->id; ?>" />
                                                    <?php endif;?>
                                                </td>
						<td width="70" align="left" valign="middle">
                                                    <?php if($value->is_delete == 1):?>
                                                    &nbsp;&nbsp;
                                                    <a href="<?=HOST_URL?>/<?=$folder_name?>/edit/<?php echo $value->id; ?>">
                                                        <img src="<?=ADMIN_IMG_PATH?>/edit.png" alt="Edit" border="0" />
                                                    </a>

                                                    <a href="<?=HOST_URL?>/<?=$folder_name?>/delete/<?php echo $value->id; ?>">
                                                        <img src="<?=ADMIN_IMG_PATH?>/delete.png" alt="Delete" border="0" />
                                                    </a>
                                                    <?php endif;?>
                                                </td>
						<td align="left" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td width="25%" align="left" valign="middle"><a href="<?=HOST_URL?>/<?=$folder_name?>/view/<? echo $value->id; ?>" title="Click to view details" class="listLink"><? echo $value->gallery_title_en; ?></a> <?
		echo $value->gallery_title_ar;

		$CI->load->model($this->config->item("admin_folder")."/model_gallery_images_management");
		$total_images = $CI->model_gallery_images_management->countTotal(array('parent_id'=>$value->id));

		$CI->load->model($this->config->item("admin_folder")."/model_gallery_videos_management");
		$total_videos = $CI->model_gallery_videos_management->countTotal(array('parent_id'=>$value->id));
?></td>
                                 <td width="25%" align="left" valign="middle">Videos &nbsp;&nbsp;&nbsp;<strong><?=$total_videos?></strong>&nbsp;&nbsp;&nbsp; <a href="<?=HOST_URL?>/<?=$folder_name?>/add_video/<?=$value->id?>/" title="Add Video">Add</a> &nbsp;|&nbsp; <a href="<?=HOST_URL?>/<?=$folder_name?>/manage_videos/<?=$value->id?>/" title="Manage Videos">Manage</a></td>
                                <!-- <td align="left" valign="middle">Images &nbsp;&nbsp;&nbsp;<strong><?=$total_images?></strong>&nbsp;&nbsp;&nbsp; <a href="<?=HOST_URL?>/<?=$folder_name?>/add_images/<?=$value->id?>/" title="Add Image">Add</a> &nbsp;|&nbsp; <a href="<?=HOST_URL?>/<?=$folder_name?>/manage_images/<?=$value->id?>/" title="Manage Images">Manage</a></td>-->
							</tr>
						</table></td>
						<td width="100" align="center" valign="middle"><input type="text" name="orderby[]" id="orderby[]" style="width:30px;text-align:center" class="index_list" value="<?php echo $value->orderby; ?>" tabindex="<?php echo $key; ?>" /><input type="hidden" name="idarray[]" id="idarray[]" value="<?php echo $value->id; ?>" /></td>
						<td width="100" align="center" valign="middle"><?php echo dateFormat($value->added_date); ?></td>
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

	/*$('.listitem').click(function(){

		var chk = $(this).find('input[type=checkbox]');
		if(chk.is(':checked') == false){
		 chk.attr('checked', true);}
		else{
		 chk.attr('checked', false);
		}
   });*/

	function DeleteRecord(){
		document.frmListing.action="<?=HOST_URL?>/<?=$folder_name?>/delete";
		document.frmListing.submit();
	}

</script>
