<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="images/favicon.ico">
        <title>Capella - Contact</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <script src="https://use.fontawesome.com/b51f77a16a.js"></script>
        
        <!-- Template Javascript Files
        ================================================== -->
		<!-- Angular -->
		<base href="/capella/">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
		<script src="angular/capella.js"></script>
	
        <!-- modernizr js -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>  
        <!-- bootstrap js -->
		 <script src="js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="js/main.js"></script>
    </head>
    <body ng-app="capella" data-deferred-cloak>
       	<!--
        ==================================================
        Header Section
        ================================================== -->
    	<ng-include src="'angular/blocks/header.html'"></ng-include>
        <!--
        ==================================================
        Intro Section
        ================================================== -->
        <section class="hero-area contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">
                            <section class="cd-intro">
                                <h1 class="wow fadeInUp animated" data-wow-delay=".4s" >
                                	Contact
                                </h1>
                            </section> <!-- cd-intro -->
                            <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
								The Capella experts will be pleased<br>to give you more details about how useful Capella can be for your projects
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/#intro_banner-->


        <!-- 
        ================================================== 
            Contact Section Start
        ================================================== -->
        
        <section id="contact-section" class="left">
            <div class="container">
                <div class="row">
                      
	<?php
    	if($_GET["campaign_id"] == "9d696d6e-9214-7c34-b502-5915dd4cd4cc") {   
   		header('Location: ?thanksforinquiring');
     
      ?>
<div class="col-md-12">
<h3>Thank you for your inquiry!</h3>
<p>A Capella team member will be in touch with you shortly.</p>
<br />
</div>
<?php }
    elseif($_SERVER['REQUEST_URI'] == "/capella/contact.php?thanksforinquiring") {   
    ?>
<div class="col-md-12">
<h3>Thank you for your inquiry!</h3>
<p>A Capella team member will be in touch with you shortly.</p>
<br />
</div>
   <?php }
else {?>
<div class="crm_form contact-form" id="contact-form">
<h4 class="intro_txt">Need to contact Capella team? Please fill-in this form, we will get back to you shortly.</h4><br />
<div class="col-md-12">
<form id="WebToLeadForm" class="contact_form" action="https://crmleadcapture.obeo.fr/index.php?entryPoint=WebToLeadCapture&key=NoncinIm2" method="POST" name="WebToLeadForm">
<div class="col-md-6 form-group"><input id="last_name" name="last_name" type="text" placeholder="Last Name *" /></div>
<div class="col-md-6 form-group"><input id="first_name" name="first_name" type="text" placeholder="First Name *" /></div>
<div class="col-md-6 form-group"><input id="email1" name="email1" type="text" placeholder="Email *" onchange="validateEmailAdd();" /></div>
<div class="col-md-6 form-group"><input id="account_name" name="account_name" required="" type="text" placeholder="Organization *" /></div>
<div class="col-md-6 form-group"><input id="primary_address_city" name="primary_address_city" type="text" placeholder="City/State *" /></div>
<div class="col-md-6 form-group"><select id="primary_address_country" name="primary_address_country">
<option selected="selected" value="France">France</option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select></div>
<div class="col-md-6"><input id="phone_work" name="phone_work" type="text" placeholder="Phone *" /></div>
<div class="col-md-12"><br /><textarea id="description" name="description" placeholder="Your message *"></textarea></div>

<div class="col-md-12">
	<br />
	<h4>How would you evaluate your knowledge of Model-Based Systems Engineering (MBSE)?</h4>
		<input id="little" type="radio" name="mbse" value="I've heard a little about that methodology" />  I've heard a little about that methodology<br>
		<input id="notFollowing" type="radio" name="mbse" value="I'm convinced by MBSE but not following it" /> I'm convinced by MBSE but not following it<br>                     
		<input id="useMBSE" type="radio" name="mbse" value="I'm convinced by MBSE and use an MBSE tool for my projects (not Capella)" /> I'm convinced by MBSE and use an MBSE tool for my projects (not Capella)<br>
		<input id="useCapella" type="radio" name="mbse" value="I'm convinced by MBSE and use Capella for my projects" /> I'm convinced by MBSE and use Capella for my projects<br>
		<br>               
	<h4>I would like to be contacted about:</h4>
		<input id="training" type="checkbox" name="training" value="training" />  Training & Coaching<br>
		<input id="integration" type="checkbox" name="integration" value="integration" /> Integration & Customization<br>                     
		<input id="support" type="checkbox" name="support" value="support" /> Support & Maintenance<br>
		<input id="t4c" type="checkbox" name="t4c" value="t4c" /> Add-on Team for Capella<br>
		<input id="other" type="checkbox" name="other" value="otherNeed" /> Other <input type="text" id="description2" name="description2" ></textarea>
		<p> </p>
		<p class="txt_lightest_grey"><input id="keepInfo" type="checkbox" name="keepInfo" value="keepInfo" />Keep-me informed about Capella’s ecosystem news and events</p>
		<br>	
	</div>

<select id="offres_c" name="offres_c[]" style="visibility:hidden;"><option label="Capella" value="SystemsEngineering" selected="selected">Capella</option>
</select>
<select id="langue_c" name="langue_c" tabindex="1" style="visibility:hidden;" > <option value="EN" selected="selected">EN</option></select>
<p> </p>
<div class="clr"> </div>
<input onclick="submit_form();" class="btn btn-default validate submit" name="Submit" type="button" value="Submit" />
<input id="campaign_id" type="hidden" name="campaign_id" value="9d696d6e-9214-7c34-b502-5915dd4cd4cc" />
<input id="assigned_user_id" type="hidden" name="assigned_user_id" value="e948e44a-e532-c54a-71a7-56029fa97dc3" />
<input id="redirect_url" name="redirect_url" type="hidden" value="https://www.polarsys.org/capella/contact.php" />
<input id="req_id" name="req_id" type="hidden" value="last_name;first_name;email1;account_name;primary_address_city;phone_work;primary_address_country;description;" />
</form></div>
</div> 
<?php }?>
<!-- Fin class="crm_form"-->

<script type="text/javascript">// <![CDATA[
function submit_form(){
 	if(typeof(validateCaptchaAndSubmit)!='undefined'){
 	validateCaptchaAndSubmit();
 	}else{
 	check_webtolead_fields();
 	}
 }
function check_webtolead_fields(){
     if(document.getElementById('bool_id') != null){
        var reqs=document.getElementById('bool_id').value;
        bools = reqs.substring(0,reqs.lastIndexOf(';'));
        var bool_fields = new Array();
        var bool_fields = bools.split(';');
        nbr_fields = bool_fields.length;
        for(var i=0;i<nbr_fields;i++){
          if(document.getElementById(bool_fields[i]).value == 'on'){
             document.getElementById(bool_fields[i]).value = 1;
          }
          else{
             document.getElementById(bool_fields[i]).value = 0;
          }
        }
      }
    if(document.getElementById('req_id') != null){
        var reqs=document.getElementById('req_id').value;
        reqs = reqs.substring(0,reqs.lastIndexOf(';'));
        var req_fields = new Array();
        var req_fields = reqs.split(';');
        nbr_fields = req_fields.length;
        var req = true;

        var description = document.getElementById('description');
        
        var little = document.getElementById('little');
        var notFollowing = document.getElementById('notFollowing');
        var useMBSE = document.getElementById('useMBSE');
        var useCapella = document.getElementById('useCapella');
        var keepInfo = document.getElementById('keepInfo'); 

        var description2 = document.getElementById('description2');
        var training = document.getElementById('training');
        var integration = document.getElementById('integration');
        var support = document.getElementById('support');
        var t4c = document.getElementById('t4c');
        var other = document.getElementById('other');    

        var service_arr = new Array("training", "integration", "support", "t4c", "other", "description2");
        var mbseKnowledge_arr = new Array("little", "notFollowing", "useMBSE", "useCapella");
		
        
        for(var i=0;i<nbr_fields;i++){
          if(document.getElementById(req_fields[i]).value.length <=0 || document.getElementById(req_fields[i]).value==0){
           req = false;
           break;
          }
        }
 if(req){
           if(validateEmailAdd()){
              	for(var j=0; j<4; j++){
                   var knowledge = mbseKnowledge_arr[j];
                   if(document.getElementById(mbseKnowledge_arr[j]).value.length >=0 && document.getElementById(mbseKnowledge_arr[j]).checked)
                       {
                         description.value+="\n \n - My knowledge of MBSE: " + document.getElementById(mbseKnowledge_arr[j]).value;
						}
         		}   
               
               for(var k=0; k<5; k++){
                   if(document.getElementById(service_arr[k]).value.length >=0 && document.getElementById(service_arr[k]).checked)
                       {
                         description2.value+="\n - " + document.getElementById(service_arr[k]).value + "\n \n";
						}
         		}   
               
        	   description.value+="\n \n - I would like to be contacted about: " +  description2.value +
        	   					"\n \n - Keep-me informed: " + keepInfo.checked;
               
				document.WebToLeadForm.submit();
                return true;
                     }
                     else {
                        return false;
                     }
        }
        else{
          alert('Please fill in all fields!');
          return false;
         }
        return false;
   }
   else{
    document.WebToLeadForm.submit();
   }
}
function validateEmailAdd(){
               var req = true;
      	var regexp =   /^\w+([‘\.\-\+]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/;

               if(document.getElementById('email1').value.length >0) {
                 if(document.getElementById('email1').value.match(regexp)== null){
                   alert('Not a valid email address.');
                   return false;
                 }
             }
             else {req=false;}
             return req;
         }

// ]]></script>
                </div>
            </div>
        </section>
       
        <!--
        ==================================================
        Footer Section
        ================================================== -->
        <ng-include src="'angular/blocks/footer.html'"></ng-include>
        <script async src="js/googleAnalytics.js" ></script>
    </body>
</html>