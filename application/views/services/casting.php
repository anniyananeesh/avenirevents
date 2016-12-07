<div class="clearfix"></div>
<!--BODY CONTENT END-->

<section id="Register">

  <div class="container">

      <div class="col-lg-12 text-center">
        <h1 ><?php echo lang('auto.casting')?></h1>
        <p class="intro"><?php echo lang('auto.service_subtitle')?></p>
      </div>

      <form action="<?php echo HOST_URL?>/<?php echo $lan?>/services/send_service_query" method="post" name="postServiceQryFrm" id="postServiceQryFrm">
  					<div class="row">
  						<div class="col-md-12">
  							<div class="row">

                 <div class="col-md-6 pull-left">
  									<h3><?php echo $data_page->{heading_.$lan}?></h3>
                    <?php echo $data_page->{description_.$lan}?>

  								</div>

                  <?php $this->load->view('services/form', array('service' => 'casting'));?>

  							</div>
  						</div>
  					</div>
  				</form>

    </div>

 </section>

 <div class="clearfix"></div>
