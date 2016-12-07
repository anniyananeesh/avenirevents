<div class="col-md-6">

    <?php if($this->session->flashdata('success_message')):?>

              <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success_message');?>
          </div>

          <?php endif;?>

          <?php if($this->session->flashdata('error_message')):?>

              <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('error_message');?>
          </div>

          <?php endif;?>

    <div class="clearfix"></div>
    <h3>Contact Info</h3>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Name" id="name" name="name" required/>
      <input type="hidden" name="service_type" value="<?php echo (!empty($service)) ? $service : '' ?>"/>
    </div>

    <div class="form-group">
      <input type="email" class="form-control" placeholder="Email" id="email" name="email" required/>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone" required/>
    </div>

    <div class="form-group">
      <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Enter what you are looking for"></textarea>
    </div>

    <div class="form-group">
      <input type="submit" class="btn-footer3" value="Submit Request">
    </div>

</div>
