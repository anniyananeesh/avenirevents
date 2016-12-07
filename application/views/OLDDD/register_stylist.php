<link href="<?php echo PLUGINS_PATH?>/upload/uploadfile.css" type="text/css" rel="stylesheet" />
<script src="<?php echo PLUGINS_PATH?>/upload/jquery.uploadfile.min.js"></script>

<link rel="stylesheet" href="<?php echo PLUGINS_PATH?>/sumoselect/sumoselect.css" type="text/css" />
<script src="<?php echo PLUGINS_PATH?>/sumoselect/jquery.sumoselect.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.5/angular.min.js"></script>

<script>

$(function(){

	$("#language").SumoSelect({
    	placeholder: 'Choose',
     	csvDispCount: 3
	});

});

function doRemoveThumb()
{
	var parent = $(this).parent();
		parent.fadeOut(250,function(){
			parent.remove();

			if($('#upload-container').children().length == 0)
			{
				$('#upload-container').fadeOut(250);
			}
		});


}

var myApp = angular.module('myApp',[]);

myApp.controller('SignupCtrl',function($scope, $http, $window) {

	$scope.user_fullname = '';

	$scope.user = {

		name : '',
		email: '',
		phone: '',
		email: '',
		password: '',
		confirm_password: '',
		message: '',
		promotes: 'cars',
    model_region: 'arabic',
    model_info: 'hair_stylist'

  };

	var settings = {
	    url: "<?php echo HOST_URL?>/async/upldStylistPhotos",
	    dragDrop:false,
	    fileName: "myfile",
	    returnType:"json",
	    showDelete:true,
	    showQueueDiv: "upload-container",
	    showPreview: true,
	    previewHeight: 260,
	    previewWidth: 220,
	    showProgress: false,
	    showFileSize: false,
	    showFileCounter: false,
	    showDelete: true,
	    showError: false,
	    maxFileCount: 6,
	    allowedTypes: "jpg,png",
	    multiple: true,
	    autoSubmit: false,
	    uploadStr: 'Upload your photos',
	    acceptFiles: 'image/*',
	    maxFileSize:1000*1024,
	    onSelect:function(files)
		{
		    $("#upload-container").fadeIn(350);
		},
		afterUploadAll:function(obj)
		{
		    console.log(obj);
		},
	    customProgressBar: function(obj,s)
        {
            this.statusbar = $("#upload-container");
            this.container = $("<div class='img-thumb'></div>").appendTo(this.statusbar);

            this.preview = $("<img class='ajax-file-upload-preview' />").width(s.previewWidth).height(s.previewHeight).appendTo(this.container).hide();
            this.filename = $("<div class='ajax-file-upload-filename' style='display:none;'></div>").appendTo(this.container);
            this.progressDiv = $("<div class='ajax-file-upload-progress' style='display:none;'>").appendTo(this.container).hide();
            this.progressbar = $("<div class='ajax-file-upload-bar' style='display:none;'></div>").appendTo(this.progressDiv);
            this.abort = $("<div style='display:none;'>" + s.abortStr + "</div>").appendTo(this.container).hide();
            this.cancel = $("<div style='display:none;'>" + s.cancelStr + "</div>").appendTo(this.container).hide();
            this.done = $("<div style='display:none;'>" + s.doneStr + "</div>").appendTo(this.container).hide();
            this.download = $("<div style='display:none;'>" + s.downloadStr + "</div>").appendTo(this.container).hide();
            this.del = $("<span class='del-thumb'><i class='ion-close-circled'></i></span>").appendTo(this.container);

        },
        onSuccess:function(files,data,xhr,pd)
		    {

				    var userPk = $("#userPk").val(),
				    		setParams = {
						    		id: userPk,
						    		file: data.file
					    	};

				    var request = $http({
								method: "post",
								url: "<?php echo HOST_URL?>/async/setStylistPhoto",
								data: setParams,
								headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
						});

						request.success(function (data) {});

			  }

	}

	var CVsettings = {
	    url: "<?php echo HOST_URL?>/async/upldStylistCV",
	    dragDrop:false,
	    fileName: "cvFile",
	    returnType:"json",
	    showDelete:true,
	    showPreview: true,
	    previewHeight: 260,
	    previewWidth: 220,
	    showProgress: false,
	    showFileSize: false,
	    showFileCounter: false,
	    showDelete: true,
	    showError: false,
	    maxFileCount: 6,
	    allowedTypes: "doc,docx",
	    multiple: false,
	    autoSubmit: false,
	    uploadStr: 'Upload CV',
	    maxFileSize:1000*1024,
	    onSuccess:function(files,data,xhr,pd)
		{

		    var userPk = $("#userPk").val(),
		    	setParams = {
		    		id: userPk,
		    		file: data.file
		    	};

		    var request = $http({
				method: "post",
				url: "<?php echo HOST_URL?>/async/setStylistCV",
				data: setParams,
				headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
			});

			request.success(function (data) {});

		}

	}

	var uploadObj = $("#picUploaderBtn").uploadFile(settings);
	var uploadObjCV = $("#cvUploaderBtn").uploadFile(CVsettings);
  $scope.user_fullname = '';

	$(document).on('click','.del-thumb',doRemoveThumb);

	$scope.submitForm = function(valid)
	{
		var params = {

      name : $scope.user.name,
  		email: $scope.user.email,
  		phone: $scope.user.phone,
  		pwd: $scope.user.password,
  		cpwd: $scope.user.confirm_password,
  		description: $scope.user.message,
  		language:  $scope.user.language,
      model_region: $scope.user.model_region,
      model_info: $scope.user.model_info,
      <?php echo $this->security->get_csrf_token_name(); ?>: '<?php echo $this->security->get_csrf_hash(); ?>',

		};

 		//Check if any of the required field is missing from the request
 		if(valid)
 		{

 			$('.loader-spinner').show();

 			if($('#upload-container').children().length == 0)
 			{

 				$('.loader-spinner').hide();
 				$window.alert("Please upload your photos");
 				return false;

 			}else{

 				var request = $http({
				    method: "post",
				    url: "<?php echo HOST_URL?>/async/stylist_signup",
				    data: params,
				    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
				});

				request.success(function (data) {

				   if(!data.error)
				   {
					   	$("#userPk").val(data.data.pkey);

					   	uploadObj.startUpload();
					   	uploadObjCV.startUpload();

					   	$('.loader-spinner').hide();

              $scope.user_fullname = data.data.name;

					    $('#signUpFrmHolder').fadeOut(250,function(){
					   		$("#successFrmHolder").fadeIn(250);
					   	});

				   }else{

				   		$('.loader-spinner').hide();
				   		$window.alert(data.message);

				   }

				});

				return true;
 			}


 		}else{

 			//remove this normal alert and put a info div instead.
 			$window.alert("Fill required fields");
 			return false;
 		}

	};

});

</script>

<div class="clearfix"></div>
<!--BODY CONTENT END-->

<section id="Register" ng-app="myApp">

<div class="container" ng-controller="SignupCtrl" id="signUpFrmHolder">

		<div class="col-lg-12 text-center">
			<h1 ><?php echo ucfirst(lang("auto.register_with_us"))?>.</h1>
			<p class="intro"><?php echo lang("auto.register_subhead")?></p>
		</div>

    <?php echo form_open("", 'name="signupFrm" id="signupFrm" class="mt-lg"'); ?>

      <input type="hidden" id="userPk" name="userPk" value=""/>

      <div class="loader-spinner">
        <div class="sk-fading-circle">
          <div class="sk-circle1 sk-circle"></div>
          <div class="sk-circle2 sk-circle"></div>
          <div class="sk-circle3 sk-circle"></div>
          <div class="sk-circle4 sk-circle"></div>
          <div class="sk-circle5 sk-circle"></div>
          <div class="sk-circle6 sk-circle"></div>
          <div class="sk-circle7 sk-circle"></div>
          <div class="sk-circle8 sk-circle"></div>
          <div class="sk-circle9 sk-circle"></div>
          <div class="sk-circle10 sk-circle"></div>
          <div class="sk-circle11 sk-circle"></div>
          <div class="sk-circle12 sk-circle"></div>
        </div>
      </div>

					<div class="row">

						<div class="col-md-12">

							<div class="row">

                <div class="col-md-6 <?php echo ($lan == 'ar') ? 'pull-right' : 'pull-left';?>">

									<h3><?php echo lang("auto.model_info")?></h3>

                                    <div class="form-group">
                                        <label class="control-label"><?php echo lang("auto.i_am")?></label> &nbsp;&nbsp;

                                          <label class="radio-inline">
                                            <input type="radio"  name="model_info" value="hair_stylist" ng-checked="user.model_info == 'hair_stylist'" ng-click="user.model_info = 'hair_stylist'"> <?php echo lang("auto.hair_stylist")?>
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio"  name="model_info" value="makeup_artist" ng-checked="user.model_info == 'makeup_artist'" ng-click="user.model_info = 'makeup_artist'"> <?php echo lang("auto.makeup_artist")?>
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio"  name="model_info" value="hair_makeup" ng-checked="user.model_info == 'hair_makeup'" ng-click="user.model_info = 'hair_makeup'"> <?php echo lang("auto.hari_n_makeup")?>
                                          </label>
                                           <label class="radio-inline">
                                            <input type="radio"  name="model_info" value="prop_stylist" ng-checked="user.model_info == 'prop_stylist'" ng-click="user.model_info = 'prop_stylist'"> <?php echo lang("auto.prop_stylist")?>
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio"  name="model_info" value="wardrobe" ng-checked="user.model_info == 'wardrobe'" ng-click="user.model_info = 'wardrobe'"> <?php echo lang("auto.wardrobe")?>
                                          </label>
                                          <label class="radio-inline">
                                            <input type="radio"  name="model_info" value="other" ng-checked="user.model_info == 'other'" ng-click="user.model_info = 'other'"> <?php echo lang("auto.other")?>
                                          </label>

                                    </div>

                                    <div class="form-group">
																			<label class="control-label"><?php echo lang("auto.region")?></label> &nbsp;&nbsp;

																			<label class="radio-inline">
																					<input type="radio"  name="model_region" value="arabic" ng-checked="user.model_region == 'arabic'" ng-click="user.model_region = 'arabic'"> <?php echo lang("auto.arabic")?>
																				</label>
																				<label class="radio-inline">
																					<input type="radio"  name="model_region" value="meditaranian" ng-checked="user.model_region == 'meditaranian'" ng-click="user.model_region = 'meditaranian'"> <?php echo lang("auto.meditaranian")?>
																				</label>
																				<label class="radio-inline">
																					<input type="radio"  name="model_region" value="oriental" ng-checked="user.model_region == 'oriental'" ng-click="user.model_region = 'oriental'"> <?php echo lang("auto.oriental")?>
																				</label>
																				<label class="radio-inline">
																					<input type="radio"  name="model_region" value="indian" ng-checked="user.model_region == 'indian'" ng-click="user.model_region = 'indian'"> <?php echo lang("auto.indian")?>
																				</label>
																				<label class="radio-inline">
																					<input type="radio"  name="model_region" value="europian" ng-checked="user.model_region == 'europian'" ng-click="user.model_region = 'europian'"> <?php echo lang("auto.european")?>
																				</label>

                                    </div>

                                <div class="clearfix"></div>
																<h3><?php echo lang("auto.languages")?></h3>
                                   <div class="form-group">

                    <select name="language" id="language"  multiple style="width: 300px;"  class="form-control" ng-model="user.language" ng-class="{ 'has-error' : signupFrm.language.$invalid && !signupFrm.language.$pristine }" required>
      								<?php foreach($languages AS $lang):?>
      									<option value="<?php echo $lang->id;?>"><?php echo $lang->name_en;?></option>
      								<?php endforeach;?>
      							</select>

									</div>
									<h3><?php echo lang("auto.upload_photos")?></h3>
                  <div class="form-group">

                      <div id="picUploaderBtn"><?php echo lang("auto.select_photos")?></div>
                      <div class="clearfix"></div>

                      <div class="upload-container mt-sm" id="upload-container"></div>

									</div>
                                    <h3><?php echo lang("auto.upload_cv")?></h3>
                                   <div class="form-group">

													<div id="cvUploaderBtn"><?php echo lang("auto.select_file")?></div>
													<div class="clearfix"></div>
									</div>
								</div>

								<div class="col-md-6">
                                	<h3><?php echo lang("auto.personal_info")?></h3>
                                	<div class="form-group">
										<input type="text" class="form-control" placeholder="<?php echo lang("auto.name")?>" name="name" id="name" ng-class="{ 'has-error' : signupFrm.name.$invalid && !signupFrm.name.$pristine }" required ng-model="user.name">
									</div>

									<div class="form-group">
										<input type="email" class="form-control" placeholder="<?php echo lang("auto.email")?>" name="email" id="email" ng-class="{ 'has-error' : signupFrm.email.$invalid && !signupFrm.email.$pristine }" required ng-model="user.email">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="<?php echo lang("auto.phone")?>" name="phone" id="phone" ng-class="{ 'has-error' : signupFrm.phone.$invalid && !signupFrm.phone.$pristine }" required ng-model="user.phone">
									</div>

                                    <div class="form-group">
										<input type="text" class="form-control" placeholder="<?php echo lang("auto.password")?>" name="password" id="password" ng-class="{ 'has-error' : signupFrm.password.$invalid && !signupFrm.password.$pristine }" required ng-model="user.password">
									</div>
                                     <div class="form-group">
										<input type="text" class="form-control" placeholder="<?php echo lang("auto.confirm_password")?>" name="confirm_password" id="confirm_password" ng-class="{ 'has-error' : signupFrm.confirm_password.$invalid && !signupFrm.confirm_password.$pristine }" required ng-model="user.confirm_password">
									</div>

									<div class="form-group">
										<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="<?php echo lang("auto.message")?>" name="message" id="message" ng-class="{ 'has-error' : signupFrm.message.$invalid && !signupFrm.message.$pristine }" required ng-model="user.message"></textarea>
									</div>
									<div class="form-group">
										<input type="button" class="btn btn-primary btn-md" ng-click="submitForm(signupFrm.$valid)" value="<?php echo lang("auto.send_request")?>">
									</div>
								</div>

							</div>

						</div>

					</div>

				<?php echo form_close();?>

  </div>

	<div class="border-content-signup" id="successFrmHolder">

    <p class="bigTitle"><?php echo lang("auto.registration_completed_successfully")?></p>
    <div class="clearfix"></div>
    <div class="smallDescription"><?php echo lang("auto.send_email_success")?></div>
    <div class="clearfix"></div>
    <a href="<?php echo HOST_URL."/";?>" class="btn btn-default btn-primary btn-lg"><?php echo lang("auto.go_home")?></a>

  </div>

 </section>

 <div class="clearfix"></div>
