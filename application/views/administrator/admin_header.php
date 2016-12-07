<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=SITE_NAME?> | Administration</title>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" >
<meta name="Author" content="Shams Karamat">
<link href="<?=ADMIN_IMG_PATH?>/favicon.ico" type="image/x-icon" rel="shortcut icon" />
<link href="<?=ADMIN_CSS_PATH?>/layout.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="<?=PLUGINS_PATH?>/jquery.js"></script>
<script type="text/javascript" src="<?=PLUGINS_PATH?>/jquery_validate/jquery.validate.js"></script>

<link rel="stylesheet" href="<?=PLUGINS_PATH?>/timepicker/jquery.timepicker.css" type="text/css" />
<script src="<?=PLUGINS_PATH?>/timepicker/jquery.timepicker.min.js"></script>

<script language="javascript">
	var mouse_is_inside = false;
	$(document).ready(function()
	{
		$('#link_dd_modules').click(function(){
			return false;
		});
		$('#modules_menu').hover(function(){
			 mouse_is_inside=true;
			 $('#menu').slideDown('slow');
		}, function(){
        mouse_is_inside=false;
    	});
		$("body").mouseup(function(){
        if(! mouse_is_inside){ $('#menu').slideUp(); }
      });
	});
</script>

</head>
<body>
<?php
	$CI =& get_instance();
	$admin_user_id   	= $CI->session->userdata('admin_user_id');
	$admin_user_type 	= $CI->session->userdata('admin_user_type');
	if ($CI->session->userdata('admin_logged_in')==TRUE){
			$CI->load->model($CI->config->item('admin_folder')."/model_modules");
			$data_modules 		= $CI->model_modules->get_modules($admin_user_id, $admin_user_type);

	}

	$tabVar1  = "inactive_first";		$tabVar2 = "bg_inactive";			$tabVar3 = "inactive_middle";
	$tabVar4  = "bg_inactive";			$tabVar5 = "inactive_middle";		$tabVar6 = "bg_inactive";
	$tabVar7  = "inactive_middle";	$tabVar8 = "bg_inactive";			$tabVar9 = "inactive_middle";
	$tabVar10 = "bg_inactive";			$tabVar11 = "inactive_right";

	$modKey = $CI->uri->segment(1);
	switch($modKey) {
		case "admin_users_management" : {
			$tabVar3 = "active_middle2";		$tabVar4 = "bg_active";			$tabVar5 = "active_middle";
			break; }
		case "adminhome" :{
			$tabVar1  = "active_first";		$tabVar2 = "bg_active";			$tabVar3 = "active_middle";
			break; }
		case "settings_management" :{
			$tabVar7  = "active_middle2";		$tabVar8 = "bg_active";			$tabVar9 = "active_middle";
			break; }
		case "changepassword" :{
			if ($admin_user_type=="A") {
				$tabVar9  = "active_middle2";		$tabVar10 = "bg_active";		$tabVar11 = "active_last";
			}else{
				$tabVar7  = "active_middle2";		$tabVar10 = "bg_active";		$tabVar11 = "active_last";
			}
			break; }
		default : {
			if ($admin_user_type=="A") {
				$tabVar5 = "active_middle2";		$tabVar6 = "bg_active";			$tabVar7  = "active_middle";
			}else{
				$tabVar3 = "active_middle2";		$tabVar6 = "bg_active";			$tabVar7  = "active_middle";
			}
			break; }
	}

?>
<div class="container">
	<div class="bgTop">
		<div class="top_bar">
			<div class="float1 top_bar_text"><?=SITE_NAME?> :: ADMINISTRATION</div>
			<? if ($this->session->userdata('admin_logged_in')==TRUE){ ?>
			<div id="topLinks" class="float2">
				<div class="float1"><a href="<?=HOST_URL?>" title="Click here to view Website" target="_blank" class="preview">Site Preview</a></div>
				<div class="float1" style="width:10px;">&nbsp;</div>
				<div class="float1"><a href="<?=HOST_URL?>/adminlogout" title="Click here to Logout" class="logout">Logout</a></div>
			</div>
			<? } ?>
		</div>
		<div class="spacer" style="height:20px;">&nbsp;</div>
		<?php if ($CI->session->userdata('admin_logged_in')==TRUE){?>
		<div id="topNavigation">
			<div class="float1 <?=$tabVar1?>">&nbsp;</div>
			<div class="float1 <?=$tabVar2?> text_align3" style="width:80px;"><a href="<?=HOST_URL?>/adminhome" title="Dashboard" class="header_links">Dashboard</a></div>

			<div class="float1 <?=$tabVar3?>">&nbsp;</div>
			<? if ($admin_user_type=="A") { ?>
			<div class="float1 <?=$tabVar4?> text_align3" style="width:80px;"><a href="<?=HOST_URL?>/admin_users_management" title="Admin Users Management" class="header_links">Admin Users</a></div>
			<div class="float1 <?=$tabVar5?>">&nbsp;</div>
			<? } ?>
			<div id="modules_menu" class="float1 <?=$tabVar6?> text_align3" style="width:80px;">
				<a href="" title="Modules" class="header_links" id="link_dd_modules">Modules</a>
				<div id="menu">
					<div class="menu_contents">
						<ul style="padding:0px;">

						<?php foreach ($data_modules as $key=>$value){ ?>
							<?php
								$menu_module_name = $value->module_name;
								$menu_folder_name = $value->folder;
								$menu_icon_path = ADMIN_IMG_PATH."/icon_".$menu_folder_name.".png";
							?>
							<a href="<?=HOST_URL?>/<?=$menu_folder_name?>" title="<?=$menu_module_name?>"><li>
								<div class="module_icon"><img src="<?=$menu_icon_path?>" alt="<?=$menu_module_name?>" /></div>
								<div class="module_name"><?php echo $menu_module_name; ?></div>
							</li></a>
						<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="float1 <?=$tabVar7?>">&nbsp;</div>
			<?php if ($admin_user_type=="A") { ?>
			<div class="float1 <?=$tabVar8?> text_align3" style="width:100px;"><a href="<?=HOST_URL?>/settings_management" title="Website Settings" class="header_links">Website Settings</a></div>
			<div class="float1 <?=$tabVar9?>">&nbsp;</div>
			<?php } ?>
			<div class="float1 <?=$tabVar10?> text_align3" style="width:120px;"><a href="<?=HOST_URL?>/admin_change_password" title="Dashboard" class="header_links">Change Password</a></div>
			<div class="float1 <?=$tabVar11?>">&nbsp;</div>

			<div class="float2 welcome">Welcome : <strong><?php echo $this->session->userdata("admin_full_name");  ?></strong></div>
		</div>
		<?php } ?>
	</div>

	<div class="tabsBottom">
		<div class="text_align2 version"><?=ADMIN_VERSION?></div>
	</div>
