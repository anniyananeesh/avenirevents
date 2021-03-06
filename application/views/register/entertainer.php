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

	$("#model_spl").SumoSelect({
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
		message: '',

    model_region: 'arabic',
    model_marrital_status: 'married',
    model_gender: 'male',
    model_age: 'below_6',
    model_exp: '',
    model_info: 'professional',
    model_spl: [],
		model_spl_other: '',
    language: [],
    city: '',
    country: 'AE',

  };

	var settings = {
	    url: "<?php echo HOST_URL?>/async/entertainer/upldPhotos",
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
	    maxFileCount: 5,
	    allowedTypes: "jpg,png",
	    multiple: true,
	    autoSubmit: false,
	    uploadStr: 'Upload your photos',
	    acceptFiles: 'image/*',
	    maxFileSize:8000*1024,
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
				url: "<?php echo HOST_URL?>/async/entertainer/setPhoto",
				data: setParams,
				headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
			});

			request.success(function (data) {

				uploadObjCV.startUpload();
			});

		}

	}

	var CVsettings = {
	    url: "<?php echo HOST_URL?>/async/entertainer/upldCV",
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
	    maxFileSize:8000*1024,
	    onSuccess:function(files,data,xhr,pd)
		{

		    var userPk = $("#userPk").val(),
		    	setParams = {
		    		id: userPk,
		    		file: data.file
		    	};

		    var request = $http({
				method: "post",
				url: "<?php echo HOST_URL?>/async/entertainer/setCV",
				data: setParams,
				headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
			});

			request.success(function (data) {

					//Send notification to admin panel
					sendAdminNotification(userPk);
					
					$('#signUpFrmHolder').fadeOut(250,function(){
						$("#successFrmHolder").fadeIn(250);
					});

			});

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
  		description: $scope.user.message,
      city: $scope.user.city,
      country: $scope.user.country,
  		language:  $scope.user.language,
      model_region: $scope.user.model_region,
      model_gender: $scope.user.model_gender,
      model_age: $scope.user.model_age,
      model_exp: $scope.user.model_exp,
      model_marrital_status: $scope.user.model_marrital_status,
			model_info: $scope.user.model_info,
      model_spl: $scope.user.model_spl,
			model_spl_other: $scope.user.model_spl_other,
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
				    url: "<?php echo HOST_URL?>/async/entertainer/signup",
				    data: params,
				    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
				});

				request.success(function (data) {

				   if(!data.error)
				   {
					   	$("#userPk").val(data.data.pkey);

 							uploadObj.startUpload();

					   	$('.loader-spinner').hide();

              $scope.user_fullname = data.data.name;

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

//Send notification to admin user
function sendAdminNotification(userID) {

		$.post('<?php echo HOST_URL?>/async/entertainer/send_notification', {'user' : userID}, function(res){

				if(res.code == 200) {
						console.log('Done sending admin notification');
				}

		}, 'json');
}

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

                <div class="col-md-6">

									<h3>Entertainer Details</h3>

                  <div class="form-group">
                      <label class="control-label">Level</label> <br>

                    <label class="radio-inline">
                        <input type="radio"  name="model_info" value="professional" ng-checked="user.model_info == 'professional'" ng-click="user.model_info = 'professional'"> Professional
                      </label>
                      <label class="radio-inline">
                        <input type="radio"  name="model_info" value="non_professional" ng-checked="user.model_info == 'non_professional'" ng-click="user.model_info = 'non_professional'"> Non Professional
                      </label>
                  </div>


                  <div class="form-group">
                                  <label class="control-label">Specialised</label> <br>

                                <select class="form-control" multiple name="model_spl" id="model_spl" ng-model="user.model_spl">
                                <option value="DJ">DJ</option>
                                <option value="Clown">Clown</option>
                                <option value="Magician">Magician</option>
                                <option value="Comedian">Comedian</option>
                                <option value="Musician">Musician</option>
                                <option value="Circus artist">Circus artist</option>
                                <option value="Dancer">Dancer</option>
                                <option value="Caricature artist">Caricature artist</option>
                                <option value="Balloon artist">Balloon artist</option>
                                <option value="Strolling juggler">Strolling juggler</option>
                                <option value="Stilt walker">Stilt walker</option>
                                <option value="Symphony orchestra">Symphony orchestra</option>
                                <option value="Mime acter">Mime acter</option>
                                <option value="Fire eater">Fire eater </option>
                                <option value="Rolling Stone">Rolling Stone</option>
                                <option value="Football / Basketball freestyle">Football / Basketball freestyle</option>
                                <option value="Caroler">Caroler</option>
                                <option value="Living statue">Living statue</option>
                                <option value="Snake charmer">Snake charmer</option>
                                <option value="Mentalist">Mentalist</option>
                                <option value="Acrobats">Acrobats</option>
                                <option value="Singing waiter"> Singing waiter</option>
                                <option value="Painter">Painter</option>
                                <option value="Storyteller">Storyteller</option>
                                <option value="Sword swallower"> Sword swallower</option>
                                  </select>

                              </div>
                               <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Not in the list Please specify" ng-model="user.model_spl_other">
                                </div>


                                    <div class="form-group">
                                      <label class="control-label">Gender</label> <br>

                                      <label class="radio-inline">
                                          <input type="radio"  name="model_gender" value="male" ng-checked="user.model_gender == 'male'" ng-click="user.model_gender = 'male'"> Male
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio"  name="model_gender" value="female" ng-checked="user.model_gender == 'female'" ng-click="user.model_gender = 'female'"> Female
                                        </label>
                                    </div>

                                    <div class="form-group">
                                     <label class="control-label">Marital Status</label> <br>

                                     <label class="radio-inline">
                                         <input type="radio"  name="model_marrital_status" value="married" ng-checked="user.model_marrital_status == 'married'" ng-click="user.model_marrital_status = 'married'"> Married
                                       </label>
                                       <label class="radio-inline">
                                         <input type="radio"  name="model_marrital_status" value="single" ng-checked="user.model_marrital_status == 'single'" ng-click="user.model_marrital_status = 'single'"> Single
                                       </label>
                                   </div>

                                   <div class="clearfix"></div>
                                 <label>Age</label>
                                  <div class="form-group">
                                       <select class="form-control" name="model_age" ng-model="user.model_age">
                                           <option value="below_6">below 6</option>
                                           <option value="6_12">6-12</option>
                                           <option value="12_18">12-18</option>
                                           <option value="18_24">18-24</option>
                                           <option value="24_30">24-30</option>
                                           <option value="30_40">30-40</option>
                                           <option value="above_40">above 40</option>
                                        </select>
                                    </div>

                                    <div class="clearfix"></div>
                                      <Label>Languages</label>
                                    <div class="form-group">
                                    <select name="language" id="language"  multiple class="form-control" ng-model="user.language" ng-class="{ 'has-error' : signupFrm.language.$invalid && !signupFrm.language.$pristine }" required>
                                      <?php foreach($languages AS $lang):?>
                                        <option value="<?php echo $lang->id;?>"><?php echo $lang->name_en;?></option>
                                      <?php endforeach;?>
                                    </select>
                  									</div>

                                    <div class="clearfix"></div>


                    <Label>Experience</label>
                   <div class="form-group">
                      <input type="text" class="form-control" placeholder="Year of experience ( eg:- 2y 6m)" name="model_exp" ng-model="user.model_exp" />
                    </div>

                  <div class="clearfix"></div>


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
  <input type="text" class="form-control" placeholder="Current City" name="city" id="city" ng-class="{ 'has-error' : signupFrm.city.$invalid && !signupFrm.city.$pristine }" required ng-model="user.city">
</div>

                 <div class="form-group">
                  <select class="form-control" name="country" id="country" ng-class="{ 'has-error' : signupFrm.country.$invalid && !signupFrm.country.$pristine }" required ng-model="user.country">
                        <option value="AF">Nationality</option>
                          <option value="AF">Afghanistan</option>
                          <option value="AX">Åland Islands</option>
                          <option value="AL">Albania</option>
                          <option value="DZ">Algeria</option>
                          <option value="AS">American Samoa</option>
                          <option value="AD">Andorra</option>
                          <option value="AO">Angola</option>
                          <option value="AI">Anguilla</option>
                          <option value="AQ">Antarctica</option>
                          <option value="AG">Antigua and Barbuda</option>
                          <option value="AR">Argentina</option>
                          <option value="AM">Armenia</option>
                          <option value="AW">Aruba</option>
                          <option value="AU">Australia</option>
                          <option value="AT">Austria</option>
                          <option value="AZ">Azerbaijan</option>
                          <option value="BS">Bahamas</option>
                          <option value="BH">Bahrain</option>
                          <option value="BD">Bangladesh</option>
                          <option value="BB">Barbados</option>
                          <option value="BY">Belarus</option>
                          <option value="BE">Belgium</option>
                          <option value="BZ">Belize</option>
                          <option value="BJ">Benin</option>
                          <option value="BM">Bermuda</option>
                          <option value="BT">Bhutan</option>
                          <option value="BO">Bolivia, Plurinational State of</option>
                          <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                          <option value="BA">Bosnia and Herzegovina</option>
                          <option value="BW">Botswana</option>
                          <option value="BV">Bouvet Island</option>
                          <option value="BR">Brazil</option>
                          <option value="IO">British Indian Ocean Territory</option>
                          <option value="BN">Brunei Darussalam</option>
                          <option value="BG">Bulgaria</option>
                          <option value="BF">Burkina Faso</option>
                          <option value="BI">Burundi</option>
                          <option value="KH">Cambodia</option>
                          <option value="CM">Cameroon</option>
                          <option value="CA">Canada</option>
                          <option value="CV">Cape Verde</option>
                          <option value="KY">Cayman Islands</option>
                          <option value="CF">Central African Republic</option>
                          <option value="TD">Chad</option>
                          <option value="CL">Chile</option>
                          <option value="CN">China</option>
                          <option value="CX">Christmas Island</option>
                          <option value="CC">Cocos (Keeling) Islands</option>
                          <option value="CO">Colombia</option>
                          <option value="KM">Comoros</option>
                          <option value="CG">Congo</option>
                          <option value="CD">Congo, the Democratic Republic of the</option>
                          <option value="CK">Cook Islands</option>
                          <option value="CR">Costa Rica</option>
                          <option value="CI">Côte dIvoire</option>
                          <option value="HR">Croatia</option>
                          <option value="CU">Cuba</option>
                          <option value="CW">Curaçao</option>
                          <option value="CY">Cyprus</option>
                          <option value="CZ">Czech Republic</option>
                          <option value="DK">Denmark</option>
                          <option value="DJ">Djibouti</option>
                          <option value="DM">Dominica</option>
                          <option value="DO">Dominican Republic</option>
                          <option value="EC">Ecuador</option>
                          <option value="EG">Egypt</option>
                          <option value="SV">El Salvador</option>
                          <option value="GQ">Equatorial Guinea</option>
                          <option value="ER">Eritrea</option>
                          <option value="EE">Estonia</option>
                          <option value="ET">Ethiopia</option>
                          <option value="FK">Falkland Islands (Malvinas)</option>
                          <option value="FO">Faroe Islands</option>
                          <option value="FJ">Fiji</option>
                          <option value="FI">Finland</option>
                          <option value="FR">France</option>
                          <option value="GF">French Guiana</option>
                          <option value="PF">French Polynesia</option>
                          <option value="TF">French Southern Territories</option>
                          <option value="GA">Gabon</option>
                          <option value="GM">Gambia</option>
                          <option value="GE">Georgia</option>
                          <option value="DE">Germany</option>
                          <option value="GH">Ghana</option>
                          <option value="GI">Gibraltar</option>
                          <option value="GR">Greece</option>
                          <option value="GL">Greenland</option>
                          <option value="GD">Grenada</option>
                          <option value="GP">Guadeloupe</option>
                          <option value="GU">Guam</option>
                          <option value="GT">Guatemala</option>
                          <option value="GG">Guernsey</option>
                          <option value="GN">Guinea</option>
                          <option value="GW">Guinea-Bissau</option>
                          <option value="GY">Guyana</option>
                          <option value="HT">Haiti</option>
                          <option value="HM">Heard Island and McDonald Islands</option>
                          <option value="VA">Holy See (Vatican City State)</option>
                          <option value="HN">Honduras</option>
                          <option value="HK">Hong Kong</option>
                          <option value="HU">Hungary</option>
                          <option value="IS">Iceland</option>
                          <option value="IN">India</option>
                          <option value="ID">Indonesia</option>
                          <option value="IR">Iran, Islamic Republic of</option>
                          <option value="IQ">Iraq</option>
                          <option value="IE">Ireland</option>
                          <option value="IM">Isle of Man</option>
                          <option value="IL">Israel</option>
                          <option value="IT">Italy</option>
                          <option value="JM">Jamaica</option>
                          <option value="JP">Japan</option>
                          <option value="JE">Jersey</option>
                          <option value="JO">Jordan</option>
                          <option value="KZ">Kazakhstan</option>
                          <option value="KE">Kenya</option>
                          <option value="KI">Kiribati</option>
                          <option value="KP">Korea, Democratic Peoples Republic of</option>
                          <option value="KR">Korea, Republic of</option>
                          <option value="KW">Kuwait</option>
                          <option value="KG">Kyrgyzstan</option>
                          <option value="LA">Lao Peoples Democratic Republic</option>
                          <option value="LV">Latvia</option>
                          <option value="LB">Lebanon</option>
                          <option value="LS">Lesotho</option>
                          <option value="LR">Liberia</option>
                          <option value="LY">Libya</option>
                          <option value="LI">Liechtenstein</option>
                          <option value="LT">Lithuania</option>
                          <option value="LU">Luxembourg</option>
                          <option value="MO">Macao</option>
                          <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                          <option value="MG">Madagascar</option>
                          <option value="MW">Malawi</option>
                          <option value="MY">Malaysia</option>
                          <option value="MV">Maldives</option>
                          <option value="ML">Mali</option>
                          <option value="MT">Malta</option>
                          <option value="MH">Marshall Islands</option>
                          <option value="MQ">Martinique</option>
                          <option value="MR">Mauritania</option>
                          <option value="MU">Mauritius</option>
                          <option value="YT">Mayotte</option>
                          <option value="MX">Mexico</option>
                          <option value="FM">Micronesia, Federated States of</option>
                          <option value="MD">Moldova, Republic of</option>
                          <option value="MC">Monaco</option>
                          <option value="MN">Mongolia</option>
                          <option value="ME">Montenegro</option>
                          <option value="MS">Montserrat</option>
                          <option value="MA">Morocco</option>
                          <option value="MZ">Mozambique</option>
                          <option value="MM">Myanmar</option>
                          <option value="NA">Namibia</option>
                          <option value="NR">Nauru</option>
                          <option value="NP">Nepal</option>
                          <option value="NL">Netherlands</option>
                          <option value="NC">New Caledonia</option>
                          <option value="NZ">New Zealand</option>
                          <option value="NI">Nicaragua</option>
                          <option value="NE">Niger</option>
                          <option value="NG">Nigeria</option>
                          <option value="NU">Niue</option>
                          <option value="NF">Norfolk Island</option>
                          <option value="MP">Northern Mariana Islands</option>
                          <option value="NO">Norway</option>
                          <option value="OM">Oman</option>
                          <option value="PK">Pakistan</option>
                          <option value="PW">Palau</option>
                          <option value="PS">Palestinian Territory, Occupied</option>
                          <option value="PA">Panama</option>
                          <option value="PG">Papua New Guinea</option>
                          <option value="PY">Paraguay</option>
                          <option value="PE">Peru</option>
                          <option value="PH">Philippines</option>
                          <option value="PN">Pitcairn</option>
                          <option value="PL">Poland</option>
                          <option value="PT">Portugal</option>
                          <option value="PR">Puerto Rico</option>
                          <option value="QA">Qatar</option>
                          <option value="RE">Réunion</option>
                          <option value="RO">Romania</option>
                          <option value="RU">Russian Federation</option>
                          <option value="RW">Rwanda</option>
                          <option value="BL">Saint Barthélemy</option>
                          <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                          <option value="KN">Saint Kitts and Nevis</option>
                          <option value="LC">Saint Lucia</option>
                          <option value="MF">Saint Martin (French part)</option>
                          <option value="PM">Saint Pierre and Miquelon</option>
                          <option value="VC">Saint Vincent and the Grenadines</option>
                          <option value="WS">Samoa</option>
                          <option value="SM">San Marino</option>
                          <option value="ST">Sao Tome and Principe</option>
                          <option value="SA">Saudi Arabia</option>
                          <option value="SN">Senegal</option>
                          <option value="RS">Serbia</option>
                          <option value="SC">Seychelles</option>
                          <option value="SL">Sierra Leone</option>
                          <option value="SG">Singapore</option>
                          <option value="SX">Sint Maarten (Dutch part)</option>
                          <option value="SK">Slovakia</option>
                          <option value="SI">Slovenia</option>
                          <option value="SB">Solomon Islands</option>
                          <option value="SO">Somalia</option>
                          <option value="ZA">South Africa</option>
                          <option value="GS">South Georgia and the South Sandwich Islands</option>
                          <option value="SS">South Sudan</option>
                          <option value="ES">Spain</option>
                          <option value="LK">Sri Lanka</option>
                          <option value="SD">Sudan</option>
                          <option value="SR">Suriname</option>
                          <option value="SJ">Svalbard and Jan Mayen</option>
                          <option value="SZ">Swaziland</option>
                          <option value="SE">Sweden</option>
                          <option value="CH">Switzerland</option>
                          <option value="SY">Syrian Arab Republic</option>
                          <option value="TW">Taiwan, Province of China</option>
                          <option value="TJ">Tajikistan</option>
                          <option value="TZ">Tanzania, United Republic of</option>
                          <option value="TH">Thailand</option>
                          <option value="TL">Timor-Leste</option>
                          <option value="TG">Togo</option>
                          <option value="TK">Tokelau</option>
                          <option value="TO">Tonga</option>
                          <option value="TT">Trinidad and Tobago</option>
                          <option value="TN">Tunisia</option>
                          <option value="TR">Turkey</option>
                          <option value="TM">Turkmenistan</option>
                          <option value="TC">Turks and Caicos Islands</option>
                          <option value="TV">Tuvalu</option>
                          <option value="UG">Uganda</option>
                          <option value="UA">Ukraine</option>
                          <option value="AE">United Arab Emirates</option>
                          <option value="GB">United Kingdom</option>
                          <option value="US">United States</option>
                          <option value="UM">United States Minor Outlying Islands</option>
                          <option value="UY">Uruguay</option>
                          <option value="UZ">Uzbekistan</option>
                          <option value="VU">Vanuatu</option>
                          <option value="VE">Venezuela, Bolivarian Republic of</option>
                          <option value="VN">Viet Nam</option>
                          <option value="VG">Virgin Islands, British</option>
                          <option value="VI">Virgin Islands, U.S.</option>
                          <option value="WF">Wallis and Futuna</option>
                          <option value="EH">Western Sahara</option>
                          <option value="YE">Yemen</option>
                          <option value="ZM">Zambia</option>
                          <option value="ZW">Zimbabwe</option>
                      </select>
</div>

                  <h3><?php echo lang("auto.upload_photos")?></h3>
                  <div class="form-group">

                      <div id="picUploaderBtn" class="btn-footer2 inline-style"><?php echo lang("auto.select_photos")?></div>
                      <div class="clearfix"></div>

                      <div class="upload-container mt-sm" id="upload-container"></div>

									</div>
                                    <h3><?php echo lang("auto.upload_cv")?></h3>
                                   <div class="form-group">

													<div id="cvUploaderBtn" class="btn-footer2 inline-style"><?php echo lang("auto.select_file")?></div>
													<div class="clearfix"></div>
									</div>

									<div class="form-group">
										<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Please leave a message" name="message" id="message" ng-class="{ 'has-error' : signupFrm.message.$invalid && !signupFrm.message.$pristine }" required ng-model="user.message"></textarea>
									</div>
								</div>

                <div class="col-lg-12 text-center submitereq" >
                <button type="button" class="btn-footer3" ng-click="submitForm(signupFrm.$valid)">Submit Request</button type="button">
                <a href="<?php echo HOST_URL?>/<?php echo $lan?>/#service" class="btn-footer4" >Back to Services</a>
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
    <a href="<?php echo HOST_URL."/";?>" class="btn-footer2" style="margin-top: 15px;"><?php echo lang("auto.go_home")?></a>

  </div>

 </section>

 <div class="clearfix"></div>
