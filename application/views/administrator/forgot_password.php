<script type="text/javascript" language="javascript">
		$("document").ready(function(){
			$("#frmRegister").validate({				
				invalidHandler: function(e, validator) {					
					var errors = validator.numberOfInvalids();
					if (errors) {
							var message = errors == 1
								? 'Please fill required fields'
								: 'Invalid Email';
							$("div.error span").html(message);
							$("div.error").show();
						} else {
							$("div.error").html("&nbsp;");
						}
				},
				errorLabelContainer: $("div.error")
			});
		});
</script>
<div class="page login_page">
	<div class="login_box">
		<div class="login_title color1">Forgot <span class="color2">Password</span></div>
		<div class="spacer">&nbsp;</div>
		<div class="login_form_container">
			<div class="login_form">
			<? echo form_open('','name="frmRegister" id="frmRegister"'); ?>
				<div class="login_form_title">Email</div>
				<div class="spacer5">&nbsp;</div>
				<div><?php echo form_input('email','','class="LoginBoxTextBox LoginIcon required email"'); ?></div>
				<div class="spacer">&nbsp;</div>
				<div><? echo form_submit('submit','Send', 'class="btnLogin"'); ?></div>
			<? echo form_close(); ?>
			</div>
			<div class="lockarea">
				<div style="height:65px;"><div class="error"><span><?php echo $MSG; ?></span></div></div>
				<div class="spacer">&nbsp;</div>
				<div class="lock">&nbsp;</div>
			</div>
		</div>
		<div class="spacer">&nbsp;</div>
		<div class="float1" style="width:20px;">&nbsp;</div>
		<div><?php echo anchor(base_url(),'Preview Site', 'title="Preview Site"'); ?> &nbsp;|&nbsp; <?php echo anchor('/adminlogin','Login Here', 'title="Login Here"'); ?></div>
	</div>
</div>