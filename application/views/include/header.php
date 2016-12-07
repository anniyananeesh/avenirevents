<?php
    $CI =& get_instance();

    $CI->load->model("model_hits");
    $hit_session = $this->session->userdata('hit_sid');
    if (empty($hit_session)) {
            $sess_id = md5(uniqid(rand()));
            $this->session->set_userdata('hit_sid', $sess_id);
            $CI->model_hits->new_visit();
    }else{
            $CI->model_hits->new_hit();
    }

    $CI->load->model('model_settings');
    $data_title = $CI->model_settings->get_details();

    if (!empty($contents->website_title)){ $website_title = $contents->website_title; }
    if (!empty($contents->meta_keywords)){ $meta_keywords = $contents->meta_keywords; }
    if (!empty($contents->meta_description)){ $meta_description = $contents->meta_description; }

    if (empty($website_title)){ $website_title = $data_title->website_title." | "; }
    if (empty($meta_keywords)){ $meta_keywords = $data_title->meta_keywords; }
    if (empty($meta_description)){ $meta_description = $data_title->meta_description; }

    $CI->load->model('model_languages');
    $lan = $CI->model_languages->get_language();
    if ($lan == 'ar'){
            $direction  	= 	"rtl";
            $align1		  	= 	"right";
            $align2		  	= 	"left";
            $navbar_dir		= 	"navbar-left";
    }else{
            $direction  	= 	"ltr";
            $align1		  	= 	"left";
            $align2		  	= 	"right";
            $navbar_dir		= 	"navbar-right";
    }

    $CI->load->model("model_contents");

    $logged = FALSE;
    if ($this->session->userdata('logged'))
    {
        $logged = TRUE;
        $logData = $this->session->userdata('logged');
    }
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="author" content="digitallgateweb.com" />
<title><? echo stripslashes($website_title); ?> <?php echo $page_title; ?></title>
<link rel="stylesheet" href="<?php echo CSS_PATH?>/assets/style.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="<?php echo CSS_PATH?>/assets/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel="stylesheet" href="<?php echo CSS_PATH?>/assets/responsive-tabs.css">
<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
<link rel="stylesheet" href="<?php echo CSS_PATH?>/assets/lightbox.css">
<link rel="stylesheet" href="<?php echo CSS_PATH?>/assets/responsive.css">

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH?>/assets/jquery.flexisel.js"></script>

</head>

<body>

 <a name="head"></a>
<!--HEADER START-->
<div id="header_content">

    <!--TOGGLE-->

    <!-- Single button -->
        <div class="btn-group menu-opener">
          <button type="button" class="btn btn-resposive dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           &nbsp;
          </button>
          <ul class="dropdown-menu res_main">
            <li><a href="<?php echo HOST_URL?>/<?php echo $lan?>/#" class="smoothScroll"><?php echo lang("auto.home")?></a></li>
            <li><a href="<?php echo HOST_URL?>/<?php echo $lan?>/#about" class="smoothScroll"><?php echo lang("auto.about_us")?></a></li>
            <li><a href="<?php echo HOST_URL?>/<?php echo $lan?>/#service" class="smoothScroll"><?php echo lang("auto.our_services")?></a></li>
            <li><a href="<?php echo HOST_URL?>/<?php echo $lan?>/#work" class="smoothScroll"><?php echo lang("auto.event_portfolio")?></a></li>
            <li><a href="<?php echo HOST_URL?>/<?php echo $lan?>/#client" class="smoothScroll"><?php echo lang("auto.our_clients")?></a></li>
            <li><a href="<?php echo HOST_URL?>/<?php echo $lan?>/#contact "class="smoothScroll"><?php echo lang("auto.contact_us")?></a></li>
            <!-- <li> <a href="<?php echo HOST_URL?>/<?php echo $lan?>/login"><?php echo lang("auto.login")?></a></li>
            <li><a href="<?php echo HOST_URL?>/<?php echo $lan?>/register"><?php echo lang("auto.register")?></a></li>-->
            <lI>
             <ul class="res_social">
                <h4><?php echo lang("auto.follow_us_on")?></h4>

                <?php if (!empty($data_title->facebook)):?>
                    <li><a href="<?php echo prep_url($data_title->facebook); ?>" target="_blank"><img src="<?php echo IMG_PATH?>/assets/social1.png"/></a></li>
                <?php endif;?>

                <?php if (!empty($data_title->twitter)):?>
                    <li><a href="<?php echo prep_url($data_title->twitter); ?>" target="_blank"><img src="<?php echo IMG_PATH?>/assets/social2.png"/></a></li>
                <?php endif;?>

                <?php if (!empty($data_title->instagram)):?>
                    <li><a href="<?php echo prep_url($data_title->instagram); ?>" target="_blank"><img src="<?php echo IMG_PATH?>/assets/social3.png"/></a></li>
                <?php endif;?>

                <?php if (!empty($data_title->pinterest)):?>
                    <li><a href="<?php echo prep_url($data_title->pinterest); ?>" target="_blank"><img src="<?php echo IMG_PATH?>/assets/social4.png"/></a></li>
                <?php endif;?>

    		 </ul>
             </lI>

          </ul>
        </div>

        <div class="container">

          <div class="row">
          	<a href="<?php echo HOST_URL?>/<?php echo $lan?>/">
            	<div class="logo pull-left"></div>
            </a>
            <nav class="pull-right">
              <div class="top_nav">

                <ul>
                  <?php if (!empty($data_title->facebook)):?>
                      <li><a href="<?php echo prep_url($data_title->facebook); ?>" target="_blank"><img src="<?php echo IMG_PATH?>/assets/social1.png"/></a></li>
                  <?php endif;?>

                  <?php if (!empty($data_title->twitter)):?>
                      <li><a href="<?php echo prep_url($data_title->twitter); ?>" target="_blank"><img src="<?php echo IMG_PATH?>/assets/social2.png"/></a></li>
                  <?php endif;?>

                  <?php if (!empty($data_title->instagram)):?>
                      <li><a href="<?php echo prep_url($data_title->instagram); ?>" target="_blank"><img src="<?php echo IMG_PATH?>/assets/social3.png"/></a></li>
                  <?php endif;?>

                  <?php if (!empty($data_title->pinterest)):?>
                      <li><a href="<?php echo prep_url($data_title->pinterest); ?>" target="_blank"><img src="<?php echo IMG_PATH?>/assets/social4.png"/></a></li>
                  <?php endif;?>
                </ul>
                <ul>
                  <LI class="register"><a href="<?php echo HOST_URL?>/<?php echo $lan?>/register">register with us</a></LI>
                </ul>

              </div>
              <div class="clearfix"></div>
              <div class="main_nav">
                <ul class="dropdown">
                  <li><a href="<?php echo HOST_URL?>/<?php echo $lan?>/#" class="smoothScroll"><?php echo lang("auto.home")?></a></li>
                  <li><a href="<?php echo HOST_URL?>/<?php echo $lan?>/#about" class="smoothScroll"><?php echo lang("auto.about_us")?></a></li>
                  <li><a href="<?php echo HOST_URL?>/<?php echo $lan?>/#service" class="smoothScroll"><?php echo lang("auto.our_services")?></a></li>
                  <li><a href="<?php echo HOST_URL?>/<?php echo $lan?>/#work" class="smoothScroll"><?php echo lang("auto.event_portfolio")?></a></li>
                  <li><a href="<?php echo HOST_URL?>/<?php echo $lan?>/#client" class="smoothScroll"><?php echo lang("auto.our_clients")?></a></li>
                  <li><a href="<?php echo HOST_URL?>/<?php echo $lan?>/#contact "class="smoothScroll"><?php echo lang("auto.contact_us")?></a></li>
                </ul>
              </div>
              <div class="clearfix"></div>
            </nav>
          </div>
        </div>
        <div class="clearfix"></div>
</div>
<!--HEADER END-->
