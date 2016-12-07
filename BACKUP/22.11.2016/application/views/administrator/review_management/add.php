<script type="text/javascript" language="javascript">
		$("document").ready(function(){
			$("#frmRegister").validate();
		});
</script>
<? include(ADMIN_VIEW_PATH."/editors.php"); ?>
<div class="page">
	<?php echo form_open_multipart(HOST_URL."/".$folder_name."/add",'name="frmRegister" id="frmRegister"'); ?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_<?php echo $folder_name; ?>.png" alt="<?=$module_name?>" /></div>
		<div><a href="<?=HOST_URL?>/<?=$folder_name?>" class="module_nameBig"><?php echo $module_name; ?> : Add Record</a></div>
		<div class="buttons">
			<ul class="actions">
				<li><input type="submit" name="submit" id="submit" value="Save & Close" class="btn_save_close" ></li>
				<li><input type="submit" name="submit" id="submit" value="Save & New" class="btn_save_new" ></li>
				<li class="line lineHover">&nbsp;</li>
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
		<div id="panel_title">Add Details</div>
		<div id="panel">
			<div class="left-colum">
				<div class="col-contents">
					<div class="fieldTitle">Name (English) : </div>
					<div><?php echo form_input('heading_en',$heading_en, 'id="heading_en" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>
                    <div class="fieldTitle">Name (Arabic) : </div>
					<div><?php echo form_input('heading_ar',$heading_ar, 'id="heading_ar" class="textBox arabic text_align2 required"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Name (French) : </div>
<div><?php echo form_input('heading_fr',$heading_fr, 'id="heading_fr" class="textBox required"'); ?></div>
<div class="spacer">&nbsp;</div>


					<div class="fieldTitle">Designation (English) : </div>
					<div><?php echo form_input('desig_en',$desig_en, 'id="desig_en" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>
										<div class="fieldTitle">Designation (Arabic) : </div>
					<div><?php echo form_input('desig_ar',$desig_ar, 'id="desig_ar" class="textBox arabic text_align2 required"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div class="fieldTitle">Designation (French) : </div>
					<div><?php echo form_input('desig_fr',$desig_fr, 'id="desig_fr" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>

					<div>
						<div class="fieldTitle">Description (English) : </div>
					</div>
					<div class="clear"><?php echo form_textarea('description_en', $description_en, 'id="description_en" class="editor"'); ?></div>
                    <div class="spacer">&nbsp;</div>

					<div>
						<div class="fieldTitle">Description (Arabic) : </div>
					</div>
					<div class="clear"><?php echo form_textarea('description_ar', $description_ar, 'id="description_ar" class="editor arabic"'); ?></div>

					<div>
						<div class="fieldTitle">Description (French) : </div>
					</div>
					<div class="clear"><?php echo form_textarea('description_fr', $description_fr, 'id="description_fr" class="editor"'); ?></div>

				</div>
			</div>
			<div class="rigth-colum">
				<div class="col-contents">
					<!-- ********** Options SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Options</div>
					</div>
					<div class="box">
						<div class="fieldTitle2">Status</div>
						<div class=""><? echo form_radio('is_active', 'Y', TRUE); ?> Publish  <? echo form_radio('is_active', 'N', FALSE); ?> Unpublish</div>
						<div class="spacer">&nbsp;</div>
					</div>
					<!-- ********** IMAGES SECTION ********** -->
					<div id="options-header">
						<div class="options_title">Images (150px X 150px)</div>
						<div class="box_gray_notice">Jpeg, Gif & PNG only</div>
					</div>
					<div class="box">
						<div class="fieldTitle2">Image</div>
						<div><? echo form_upload('image1','', 'id="image1" class="fileBox"'); ?></div>
						<div class="spacer">&nbsp;</div>
					</div>
					<div class="spacer">&nbsp;</div>
					<div class="spacer">&nbsp;</div>

				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>
