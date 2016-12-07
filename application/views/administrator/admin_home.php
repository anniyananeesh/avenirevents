<div class="page">
	<div class="dashboard">Dashboard</div>
	<div class="">&nbsp;</div>
	<div class="contents">
		<div class="module_container">
			<ul style="padding:0px;">
			<?php foreach ($modules as $key=>$value){ ?>
				<?php
					$module_name = $value->module_name;
					$folder_name = $value->folder;
					$icon_path = ADMIN_IMG_PATH."/icon_".$folder_name.".png";
					//if ($value->id==4){ 
					//	$CI->load->model($this->config->item('admin_folder')."/model_employers_management");
					//	$data_requests = $CI->model_employers_management->get_new_requests();
					//}
				?>
				<a href="<?=HOST_URL?>/<?=$folder_name?>" title="<?=$module_name?>"><li>					
					<div class="module_icon"><img src="<?=$icon_path?>" alt="<?=$module_name?>" /><? if ($value->id==4 and count($data_requests)>0){ ?><div class="notifications"><? echo count($data_requests); ?></div><? } ?></div>
					<div class="module_name"><?php echo $module_name; ?></div>
				</li></a>
			<?php } ?>
			</ul>
		</div>
	</div>
</div>
