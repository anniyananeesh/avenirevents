<?php include("admin_header.php");?>
<?php
	  switch($page) {
			case($page):{
				 $this->load->view( $this->config->item('admin_folder').'/pages', array( 'page' => $page));
				 break;
			}
			default:{
				 include("login.php");
				 break;
			}
	  }
?>
<?php include("admin_footer.php");?>