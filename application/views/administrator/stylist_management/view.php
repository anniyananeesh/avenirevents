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


                	<div class="fieldTitle"><strong>Name : </strong></div>
					<div><?php echo $data_record->name;?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle"><strong>Contact No. : </strong></div>
					<div><?php echo $data_record->contact_no;?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle"><strong>Email Address : </strong></div>
					<div><?php echo $data_record->email;?></div>
					<div class="spacer">&nbsp;</div>



					<?php
						if($languages)
						{
							$langArray = array();
							foreach($languages as $l){ array_push($langArray, $l->name_en);}
						}
					?>

					<div class="fieldTitle"><strong>Language Spoken : </strong></div>
					<div><?php echo ($languages) ? implode(',', $langArray): '';?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle"><strong>Model info : </strong></div>
					<div><?php echo ucfirst($data_record->model_info)?> </div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle"><strong>Model Region:</strong></div>
					<div><?php echo ucfirst($data_record->model_region);?></div>
					<div class="spacer">&nbsp;</div> 

 					<div>
						<div class="fieldTitle"><strong>Description:</strong></div>
					</div>
					<div class="clear"><?php echo $data_record->description;?></div>
                    <div class="spacer">&nbsp;</div>


				</div>

			</div>
			<div class="rigth-colum">
				<div class="col-contents">

					<!-- ********** Options SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Account</div>
					</div>
					<div class="box">
						<div class="spacer">&nbsp;</div>
						<div class="fieldTitle"><strong>Username: </strong></div>
						<div><?php echo $data_record->username;?></div>
						<div class="spacer">&nbsp;</div>
					</div>
					<!-- ********** IMAGES SECTION ********** -->

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

					<!-- ********** Options SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Upload CV</div>
					</div>

					<div class="box">
						<div class="fieldTitle2">.doc,.pdf</div>
						<? if (!empty($data_record->cv_path)){ ?>
						<div class="fieldTitle2">&nbsp;</div>
						<div class="float1">
							<a href="<?php echo MODELS_CV_PATH.$data_record->cv_path;?>" target="_blank">View & Download CV</a>
						</div>
						<? } ?>
						<div class="spacer">&nbsp;</div>
					</div>

					<!-- ********** Options SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Model Gallery Photos (atleast 3 photos required)</div>
					</div>
					<div class="box">

						<?php for($i=0; $i<6; $i++):?>

							<div class="fieldTitle2">Image <?php echo $i+1;?></div>
							<div>

								<?php if ($gallery && isset($gallery[$i])):?>
									<div class="fieldTitle2">&nbsp;</div>
									<div class="float1">
										<img src="<?php echo $this->thumb_show_path?><?php echo $gallery[$i]->image?>" class="thumb" />

									</div>
								<?php else:?>
									-- No Image --
								<?php endif;?>

							</div>
							<div class="spacer">&nbsp;</div>

						<?php endfor;?>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>