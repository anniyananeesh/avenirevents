<!--SLIDER STRAT-->
<div id="slider">

<div class="slider">

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

			<!-- Indicators -->
			<ol class="carousel-indicators">
				  <?php foreach ($data_banners as $bkey=>$bvalue):?>
			  		 <li data-target="#carousel-example-generic" data-slide-to="<?php echo $bkey;?>" class="<?php echo ($bkey == 0) ? 'active' : '';?>"></li>
					<?php endforeach;?>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">

				  <?php
						foreach ($data_banners as $bkey=>$bvalue):

									$banner_name = $bvalue->image1;
									$banner_path = BANNERS_IMAGE_PATH."/".$banner_name;
					?>
			    <div class="item <?php echo ($bkey == 0) ? 'active' : '';?>">
			    	<img src="<?php echo $banner_path?>" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text ">
                        <div class="col-md-12 text-center">
                            <h2>
                            	<span><?php echo $bvalue->{title_.$lan};?></span>
                            </h2>
                        </div>
                    </div><!-- /header-text -->
			    </div>

				<?php endforeach;?>
			</div>
			<!-- Controls -->

		</div><!-- /carousel -->
<div class="clearfix"></div>
</div>
<div class="clearfix"></div>
 </div>
<!--SLIDER END-->
<div class="clearfix"></div>
<!--BODY CONTENT END-->

<section id="about">
 <a  name="about"></a>
<div class="container text-center">
    <div class="col-lg-12">
      <h1><?php echo $about_us[0]->{heading_.$lan}?></h1>
    </div>
    <div class="col-lg-12">
      <div class="intro"><?php echo $about_us[0]->{description_.$lan}?></div>
    </div>

		<?php for ($i = 1; $i < count($about_us) ; $i++):?>

			<?php if($i % 3 == 0):?>
	    <div class="row">
			<?php endif;?>

				<?php
						$about_image = $about_us[$i]->image1;
						if (!empty($about_image)){ $about_image_path = CONTENTS_IMAGE_PATH.$about_image;}

				?>
	      <div class="col-lg-4 col-sm-4 " > <img src="<?php echo $about_image_path?>">
	        <h2 ><?php echo $about_us[$i]->{heading_.$lan}?></h2>
	        <p ><?php echo stripslashes(strip_tags($about_us[$i]->{description_.$lan}))?></p>
	      </div>

			<?php if($i % 3 == 0):?>
	    </div>
			<?php endif;?>

	  <?php endfor;?>

  </div>
  </section>

  <div class="clearfix"></div>
 <section id="service">

 <div class="service">

    <div class="sevicehead">
      <h1><?php echo lang("auto.our_services")?></h1>
      <p><?php echo lang("auto.we_combine_experience")?></p>
    </div>

    <div class="clearfix"></div>

      <div class="left_colmn ">
          <div class="img-container model">
            <div class="img-back"><img src="<?php echo IMG_PATH?>/assets/model.jpg" class="img-responsive" /></div>
            <h2 class="homeImageLink"> <span><?php echo lang("auto.models")?></span> </h2>
          </div>
      </div>

      <div class="md_colmn">
        <div class="img-container medium">
          <div class="img-back"><img src="<?php echo IMG_PATH?>/assets/photographer.jpg"  /></div>
          <h2 class="homeImageLink"> <span><?php echo lang("auto.photographers")?></span> </h2>
        </div>
        <div class="img-container small">
          <div class="img-back"><img src="<?php echo IMG_PATH?>/assets/stylist.jpg" class="img-responsive" /></div>
          <h2 class="homeImageLink"> <span><?php echo lang("auto.stylist")?></span> </h2>
        </div>
        <div class="img-container small">
          <div class="img-back"><img src="<?php echo IMG_PATH?>/assets/cast.jpg" class="img-responsive" /></div>
          <h2 class="homeImageLink"> <span><?php echo lang("auto.cast")?></span> </h2>
        </div>
        <div class="img-container medium">
          <div class="img-back"><img src="<?php echo IMG_PATH?>/assets/entertainer.jpg" class="img-responsive" /></div>
          <h2 class="homeImageLink"> <span><?php echo lang("auto.entertainers")?></span> </h2>
        </div>
        <div class="clearfix"></div>
        <div class=" col-lg-12 service_sub_head text-center">
          <h1><?php echo lang("auto.event_support")?></h1>
        </div>
        <div class="img-container small_bottom">
          <div class="img-back_reverse"><img src="<?php echo IMG_PATH?>/assets/conferance.jpg" class="img-responsive" /></div>
          <h2 class="homeImageLink"> <span><?php echo lang("auto.conference_seminars")?></span> </h2>
        </div>
        <div class="img-container small_bottom">
          <div class="img-back_reverse"><img src="<?php echo IMG_PATH?>/assets/auction.jpg" class="img-responsive" /></div>
          <h2 class="homeImageLink"> <span><?php echo lang("auto.auction_organizing")?></span> </h2>
        </div>
        <div class="img-container small_bottom">
          <div class="img-back_reverse"><img src="<?php echo IMG_PATH?>/assets/party.jpg" class="img-responsive" /></div>
          <h2 class="homeImageLink"> <span><?php echo lang("auto.parties")?> </span> </h2>
        </div>
        <div class="clearfix"></div>
      </div>

     <div class="right_colmn">
        <div class=" service_sub_head_vertical text-center">
          <h1><?php echo lang("auto.promotions")?></h1>
        </div>

        <div class="right_colmn-img">
              <div class="img-container model2">
                <div class="img-back_reverse"><img src="<?php echo IMG_PATH?>/assets/hostess.jpg" class="img-responsive" /></div>
                <h2 class="homeImageLink"> <span><?php echo lang("auto.hostess")?> </span> </h2>
              </div>

              <div class="img-container model2">
                <div class="img-back_reverse"><img src="<?php echo IMG_PATH?>/assets/promoters.jpg" class="img-responsive" /></div>
                <h2 class="homeImageLink"> <span><?php echo lang("auto.promoters")?> </span> </h2>
              </div>

              <div class="img-container model2">
                <div class="img-back_reverse"><img src="<?php echo IMG_PATH?>/assets/exhibition.jpg" class="img-responsive" /></div>
                <h2 class="homeImageLink"> <span><?php echo lang("auto.exhibitions")?> </span> </h2>
              </div>
              <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>

 <div class="clearfix"></div>

 </div>
</section>

<section id="portfolio">
<a name="work"></a>
  	<div class="container">
      <div class="row ">
        <div class="col-lg-12">
          <h1><?php echo lang("auto.event_portfolio")?></h1>
          <p><?php echo lang("auto.we_proud_display_recent_works")?></p>
        </div>

      </div>

       <div class="responsive-tabs">
			<h2><?php echo lang("auto.photos")?></h2>
			<div>

				<?php if(isset($instagram_photos)):?>

					<?php foreach ($instagram_photos AS $p):?>
				<div class="col-lg-3 col-sm-6 gal">
                	 <div class="image-row">
                            <div class="image-set">
                                    <a class="example-image-link" href="<?php echo $p->images->standard_resolution->url?>" data-lightbox="example-set" data-title="Project 1"><img class="gallery-image" src="<?php echo $p->images->low_resolution->url?>" width="100%" alt="" /></a>
                           </div>
                    </div>
                </div>

								<?php endforeach;?>

			  <?php endif;?>

			</div>

			<h2><?php echo lang("auto.videos")?></h2>
             <div>

									<?php foreach($data_videos as $ikey=>$ivalue):
										   $video_url = $ivalue->video_url;
									?>

									<div class="col-lg-3 col-sm-6 gal_vdo">
											<iframe src="<?php echo $ivalue->video_url;?>"   frameborder="0"  allowFullScreen=""></iframe>
									</div>

								 <?php endforeach;?>

       		 </div>

		</div>

           <p><?php echo lang("auto.find_out_more_from_our")?></p>

           <ul class="portfolio">
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

          </div>

</section>


<section id="client">
<a name="client"></a>
        <div class="clients_slider">
            <h1><?php echo lang("auto.some_of_top_brands")?> </h1>

            <div class="container">
            <div class="row" dir="ltr">
                <ul id="flexiselDemo3" dir="ltr">

										<?php foreach ($data_clients as $bkey=>$bvalue):?>
												<?php
													$image = $bvalue->image1;
													if (!empty($image)){ $image_path = CLIENT_IMAGE_PATH.$image;}

											  ?>
                    		<li><img  src="<?php echo $image_path?>" /></li>
										<?php endforeach;?>
                </ul>
            </div>
        	</div>

        </div>

        <div class="clearfix"></div>

        <div class="testimonial">

        	<h1><?php echo lang("auto.clients_review")?></h1>
            <p><?php echo lang("auto.our_strength_our_clients")?></p>


            <div id="carousel-example-generic" class="container text-center carousel slide" data-ride="carousel">


						<div class="carousel-inner" role="listbox">

							<?php foreach ($data_reviews as $bkey=>$bvalue):?>
									<?php
										$image = $bvalue->image1;
										if (!empty($image)){ $image_path = REVIEWS_IMAGE_PATH.$image;}

									?>

									<div class="item <?php echo ($bkey == 0) ? 'active' : '';?>">
										<div class="col-lg-12">
		                 <img src="<?php echo $image_path?>" alt="">
		                  <p class="testcontent"><span>"</span> <?php echo strip_tags(stripslashes($bvalue->{description_.$lan}));?><span>"</span></p>
											<h2><?php echo $bvalue->{heading_.$lan};?></h2>
											<h3><?php echo $bvalue->{designation_.$lan};?></h3>
										</div>

									</div>

							<?php endforeach;?>

						</div>

                   </div>


        <div class="clearfix"></div>
        </div>
</section>


	<div class="map">
    	<iframe src="<?php echo $data_title->gmap_iframe?>" width="100%" height="450px"  frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>


 <div class="clearfix"></div>
