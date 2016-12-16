
<!-- FOOTER SECTION-->
<section id="footer">
	<a name="contact"></a>
    <div class="footertop">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-4 col-sm-6">
                	<h1><?php echo lang("auto.visit_us")?></h1>
                    <ul>
                    	<li><?php echo nl2br($data_title->{cn_address_.$lan});?></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-6">
                	<h1><?php echo lang("auto.contact_us")?></h1>

                    <ul class="connect">
                    	<li><img src="<?php echo IMG_PATH?>/assets/phone.png" ><?php echo $data_title->cn_phone?></li>
                        <li><img src="<?php echo IMG_PATH?>/assets/fax.png"> <?php echo $data_title->cn_fax?></li>
                        <li><img src="<?php echo IMG_PATH?>/assets/mail.png"> <?php echo $data_title->sup_email?></li>
                        <li><img src="<?php echo IMG_PATH?>/assets/skype.png"> <?php echo $data_title->skype?></li>
                    </ul>

                </div>
                <div class="col-lg-4">
                	<h1><?php echo lang("auto.request_callback")?></h1>
                    <form action="post" name="get-quote" id="get-quote">
                      <div class="form-group">
                        <input type="Name" class="footer_form-control" id="name" name="name" placeholder="<?php echo lang("auto.name")?>">
                      </div>
                      <div class="form-group">
                        <input type="phone" class="footer_form-control" id="phone" name="phone" placeholder="<?php echo lang("auto.phone")?>">
                      </div>
					  					<div class="form-group">
                        <input type="Name" class="footer_form-control" id="regards" name="regards" placeholder="<?php echo lang("auto.regards")?>">
                      </div>
                      <button type="button" class="btn-footer" id="send-quote"><?php echo lang("auto.send_request")?></button>
                    </form>

										<script type="text/javascript">

											  $(function(){

														$(document).on('click', '#send-quote', function(){

																var formData = $("#get-quote").serialize();

																$.get('<?php echo HOST_URL?>/<?php echo $lan?>/async/quote?' + formData, function(res){

																		if(res.code == 200)
																		{
																				alert("Your quote has been send");
																		}else{
																			  alert(res.message);
																		}

																}, 'json');

														});

												});

										</script>

                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-6 col-sm-6">
                	<p><?php echo lang("auto.copyright_text")?></p>
                </div>
                <div class="col-lg-6 col-sm-6 dg">
                	<p><?php echo lang("auto.designed_developed")?> : <a target="_blank" href="http://www.digitalgateweb.com/">DIGITALGATE</a></p>
                </div>
            </div>
        </div>
    </div>

</section>

  <!--BODY CONTENT END-->
  <div class="clearfix"></div>
</div>
<script type="text/javascript">
$(window).load(function() {
    $("#flexiselDemo3").flexisel({
        visibleItems: 4,
        itemsToScroll: 1,
        autoPlay: {
            enable: true,
            interval: 5000,
            pauseOnHover: true
        }
    });

    $("#flexiselDemo4").flexisel({
        infinite: false
    });

});
</script>


<!--		<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
-->		<script src="<?php echo JS_PATH?>/assets/responsiveTabs.js"></script>
		<script>
		$(document).ready(function() {
			RESPONSIVEUI.responsiveTabs();
		})
		</script>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins)  -->

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="<?php echo JS_PATH?>/assets/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH?>/assets/lightbox.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH?>/assets/smoothscroll.js"></script>
</body>
</html>
