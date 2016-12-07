<script type="text/javascript" language="javascript">
		$("document").ready(function(){
			$("#frmRegister").validate({
				rules: {
					newpassword: {
						required: true,
						minlength: 5
					},
					confirmpassword: {
						required: true,
						minlength: 5,
						equalTo: "#newpassword"
					}
				},				
				messages: {
					confirmpassword: {
						minlength: jQuery.format("Enter at least {0} characters"),
						equalTo: "Password mismatch!"
					}
				}
				
			});
		});
</script>
<div class="page">
	<?php echo form_open_multipart('','name="frmRegister" id="frmRegister"'); ?>
	<div id="module">
		<div class="icon"><img src="<?=ADMIN_IMG_PATH?>/icon_edit.png" alt="Change Password" /></div>
		<div><a href="<?=HOST_URL?>/changepassword" class="module_nameBig">Change Password</a></div>
		<div class="buttons">
			<ul class="actions">
				<li>
					<input type="submit" name="btnsubmit" id="btnsubmit" value="Save" class="btn_save_close" style="width:50px;" >
				</li>
				<a href="<?=HOST_URL?>/adminhome">
				<li>
					<div class="icon_back">&nbsp;</div>
					<div class="action_text">Back</div>
				</li>
				</a>
			</ul>
		</div>
	</div>
	<div>&nbsp;</div>
	<? if (isset($MSG)){ ?>
	<div id="MSG" class="<? if (isset($Error) && $Error=="Y"){ echo "alert"; }else{ echo "success"; }  ?>"><?php echo $MSG; ?></div>
	<? } ?>
	<div class="contents">
		<div id="panel_title">Change Password</div>
		<div id="panel">
			<div class="left-colum" style="min-width:470px !important; width:100%">
				<div class="col-contents">
					<div class="fieldTitle">Username : </div>
					<div class="float1"><?php echo form_input('username',$info->username, 'id="username" class="textBox" readonly="readonly"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">Old Password : </div>
					<div class="float1"><?php echo form_password('oldpassword',"" , 'id="oldpassword" class="textBox required"'); ?></div>
					<div class="spacer">&nbsp;</div>
					<div class="fieldTitle">New Password : </div>
					<div class="float1"><?php echo form_password('newpassword',"", 'id="newpassword" class="textBox"'); ?></div>
					<div class="spacer" >&nbsp;</div>
					<div class="fieldTitle">Confirm New Password : </div>
					<div class="float1"><?php echo form_password('confirmpassword', "" , 'id="confirmpassword" class="textBox"'); ?></div>
					<div class="spacer">&nbsp;</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?> </div>
