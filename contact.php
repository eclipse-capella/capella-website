<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="images/favicon.ico">
        <title>Capella (Engineering) - Contact</title>
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
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
		<script src="angular/capella.js"></script>
	
        <!-- modernizr js -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>  
        <!-- bootstrap js -->
		 <script src="js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="js/main.js"></script>
    </head>
    <body ng-app="capella" ng-controller="main" class="cloak">
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
     }
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
<p class="intro_txt">Need to contact Capella team? Please fill-in this form, we will get back to you shortly.</p><br />
<div class="col-md-12"><form id="WebToLeadForm" class="contact_form" action="https://crmleadcapture.obeo.fr/index.php?entryPoint=WebToLeadCapture&key=NoncinIm2" method="POST" name="WebToLeadForm">
<div class="col-md-6 form-group"><input id="last_name" name="last_name" type="text" placeholder="Last Name *" /></div>
<div class="col-md-6 form-group"><input id="first_name" name="first_name" type="text" placeholder="First Name *" /></div>
<div class="col-md-6 form-group"><input id="email1" name="email1" type="text" placeholder="Email *" onchange="validateEmailAdd();" /></div>
<div class="col-md-6 form-group"><input id="account_name" name="account_name" required="" type="text" placeholder="Organization *" /></div>
<div class="col-md-6 form-group"><input id="primary_address_city" name="primary_address_city" type="text" placeholder="City/State *" /></div>
<div class="col-md-6 form-group"><select id="primary_address_country" name="primary_address_country">
<option selected="selected" value="France">France</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Afrique Centrale">Afrique Centrale</option>
<option value="Afrique du sud">Afrique du Sud</option>
<option value="Albanie">Albanie</option>
<option value="Algerie">Algerie</option>
<option value="Allemagne">Allemagne</option>
<option value="Andorre">Andorre</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Arabie Saoudite">Arabie Saoudite</option>
<option value="Argentine">Argentine</option>
<option value="Armenie">Armenie</option>
<option value="Australie">Australie</option>
<option value="Autriche">Autriche</option>
<option value="Azerbaidjan">Azerbaidjan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbade">Barbade</option>
<option value="Bahrein">Bahrein</option>
<option value="Belgique">Belgique</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermudes">Bermudes</option>
<option value="Bielorussie">Bielorussie</option>
<option value="Bolivie">Bolivie</option>
<option value="Botswana">Botswana</option>
<option value="Bhoutan">Bhoutan</option>
<option value="Boznie Herzegovine">Boznie Herzegovine</option>
<option value="Bresil">Bresil</option>
<option value="Brunei">Brunei</option>
<option value="Bulgarie">Bulgarie</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Caiman">Caiman</option>
<option value="Cambodge">Cambodge</option>
<option value="Cameroun">Cameroun</option>
<option value="Canada">Canada</option>
<option value="Canaries">Canaries</option>
<option value="Cap vert">Cap Vert</option>
<option value="Chili">Chili</option>
<option value="Chine">Chine</option>
<option value="Chypre">Chypre</option>
<option value="Colombie">Colombie</option>
<option value="Comores">Colombie</option>
<option value="Congo">Congo</option>
<option value="Congo democratique">Congo democratique</option>
<option value="Cook">Cook</option>
<option value="Coree du Nord">Coree du Nord</option>
<option value="Coree du Sud">Coree du Sud</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote d'Ivoire">Côte d'Ivoire</option>
<option value="Croatie">Croatie</option>
<option value="Cuba">Cuba</option>
<option value="Danemark">Danemark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominique">Dominique</option>
<option value="Egypte">Egypte</option>
<option value="Emirats Arabes Unis">Emirats Arabes Unis</option>
<option value="Equateur">Equateur</option>
<option value="Erythree">Erythree</option>
<option value="Espagne">Espagne</option>
<option value="Estonie">Estonie</option>
<option value="Etats Unis">Etats Unis</option>
<option value="Ethiopie">Ethiopie</option>
<option value="Falkland">Falkland</option>
<option value="Feroe">Feroe</option>
<option value="Fidji">Fidji</option>
<option value="Finlande">Finlande</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambie">Gambie</option>
<option value="Georgie">Georgie</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Grece">Grece</option>
<option value="Grenade">Grenade</option>
<option value="Groenland">Groenland</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guernesey">Guernesey</option>
<option value="Guinee">Guinee</option>
<option value="Guinee Bissau">Guinee Bissau</option>
<option value="Guinee equatoriale">Guinee Equatoriale</option>
<option value="Guyana">Guyana</option>
<option value="Guyane Francaise ">Guyane Francaise</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hongrie">Hongrie</option>
<option value="Inde">Inde</option>
<option value="Indonesie">Indonesie</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Irlande">Irlande</option>
<option value="Islande">Islande</option>
<option value="Israel">Israel</option>
<option value="Italie">italie</option>
<option value="Jamaique">Jamaique</option>
<option value="Jan Mayen">Jan Mayen</option>
<option value="Japon">Japon</option>
<option value="Jersey">Jersey</option>
<option value="Jordanie">Jordanie</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kirghizstan">Kirghizistan</option>
<option value="Kiribati">Kiribati</option>
<option value="Koweit">Koweit</option>
<option value="Laos">Laos</option>
<option value="Lesotho">Lesotho</option>
<option value="Lettonie">Lettonie</option>
<option value="Liban">Liban</option>
<option value="Liberia">Liberia</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lituanie">Lituanie</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Lybie">Lybie</option>
<option value="Macao">Macao</option>
<option value="Macedoine">Macedoine</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaisie">Malaisie</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malte">Malte</option>
<option value="Man">Man</option>
<option value="Mariannes du Nord">Mariannes du Nord</option>
<option value="Maroc">Maroc</option>
<option value="Marshall">Marshall</option>
<option value="Martinique">Martinique</option>
<option value="Maurice">Maurice</option>
<option value="Mauritanie">Mauritanie</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexique">Mexique</option>
<option value="Micronesie">Micronesie</option>
<option value="Midway">Midway</option>
<option value="Moldavie">Moldavie</option>
<option value="Monaco">Monaco</option>
<option value="Mongolie">Mongolie</option>
<option value="Montserrat">Montserrat</option>
<option value="Mozambique">Mozambique</option>
<option value="Namibie">Namibie</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk">Norfolk</option>
<option value="Norvege">Norvege</option>
<option value="Nouvelle Caledonie">Nouvelle Caledonie</option>
<option value="Nouvelle Zelande">Nouvelle Zelande</option>
<option value="Oman">Oman</option>
<option value="Ouganda">Ouganda</option>
<option value="Ouzbekistan">Ouzbekistan</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papouasie Nouvelle Guinee">Papouasie Nouvelle Guinee</option>
<option value="Paraguay">Paraguay</option>
<option value="Pays Bas">Pays Bas</option>
<option value="Perou">Perou</option>
<option value="Philippines">Philippines</option>
<option value="Pologne">Pologne</option>
<option value="Polynesie">Polynesie</option>
<option value="Porto Rico">Porto Rico</option>
<option value="Portugal">Portugal</option>
<option value="Qatar">Qatar</option>
<option value="Republique Dominicaine">Republique Dominicaine</option>
<option value="Republique Tcheque">Republique Tcheque</option>
<option value="Reunion">Reunion</option>
<option value="Roumanie">Roumanie</option>
<option value="Royaume Uni">Royaume Uni</option>
<option value="Russie">Russie</option>
<option value="Rwanda">Rwanda</option>
<option value="Sahara Occidental">Sahara Occidental</option>
<option value="Sainte Lucie">Sainte Lucie</option>
<option value="Saint Marin">Saint Marin</option>
<option value="Salomon">Salomon</option>
<option value="Salvador">Salvador</option>
<option value="Samoa Occidentales">Samoa Occidentales</option>
<option value="Samoa Americaine">Samoa Americaine</option>
<option value="Sao Tome et Principe">Sao Tome et Principe</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapour">Singapour</option>
<option value="Slovaquie">Slovaquie</option>
<option value="Slovenie">Slovenie</option>
<option value="Somalie">Somalie</option>
<option value="Soudan">Soudan</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Suede">Suede</option>
<option value="Suisse">Suisse</option>
<option value="Surinam">Surinam</option>
<option value="Swaziland">Swaziland</option>
<option value="Syrie">Syrie</option>
<option value="Tadjikistan">Tadjikistan</option>
<option value="Taiwan">Taiwan</option>
<option value="Tonga">Tonga</option>
<option value="Tanzanie">Tanzanie</option>
<option value="Tchad">Tchad</option>
<option value="Thailande">Thailande</option>
<option value="Tibet">Tibet</option>
<option value="Timor Oriental">Timor Oriental</option>
<option value="Togo">Togo</option>
<option value="Trinite et Tobago">Trinite et Tobago</option>
<option value="Tristan da cunha">Tristan de cuncha</option>
<option value="Tunisie">Tunisie</option>
<option value="Turkmenistan">Turmenistan</option>
<option value="Turquie">Turquie</option>
<option value="Ukraine">Ukraine</option>
<option value="Uruguay">Uruguay</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican">Vatican</option>
<option value="Venezuela">Venezuela</option>
<option value="Vierges Americaines">Vierges Americaines</option>
<option value="Vierges Britanniques">Vierges Britanniques</option>
<option value="Vietnam">Vietnam</option>
<option value="Wake">Wake</option>
<option value="Wallis et Futuma">Wallis et Futuma</option>
<option value="Yemen">Yemen</option>
<option value="Yougoslavie">Yougoslavie</option>
<option value="Zambie">Zambie</option>
<option value="Zimbabwe">Zimbabwe</option>
</select></div>
<div class="col-md-6"><input id="phone_work" name="phone_work" type="text" placeholder="Phone *" /></div>
<div class="col-md-12"><br /><textarea id="description" name="description" placeholder="Your message"></textarea></div>

<div class="col-md-12">
	<br />
	<h4>How would you evaluate your knowledge of Model-Based Systems Engineering (MBSE)?<span class="required">*</span></h4>
	<input type="hidden" id="checkboxes" />
		<p><input id="never" type="checkbox" name="never" value="never" /> I've never heard of it</p>                     
		<p><input id="little" type="checkbox" name="little" value="little" />  I've heard a little about that methodology</p>
		<p><input id="notFollowing" type="checkbox" name="notFollowing" value="notFollowing" /> I'm convinced by MBSE but not following it</p>                     
		<p><input id="useMBSE" type="checkbox" name="useMBSE" value="useMBSE" />I'm convinced by MBSE and use an MBSE tool for my projects (not Capella)</p>
		<p><input id="useCapella" type="checkbox" name="useCapella" value="useCapella" /> I'm convinced by MBSE and use Capella for my projects</p><br />               
		<p class="txt_lightest_grey"><input id="keepInfo" type="checkbox" name="keepInfo" value="keepInfo" checked />Keep-me informed about Capella’s ecosystem news and events</p>
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
<input id="req_id" name="req_id" type="hidden" value="last_name;first_name;email1;account_name;primary_address_city;phone_work;primary_address_country;" />
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
        var never = document.getElementById('never');
        var little = document.getElementById('little');
        var notFollowing = document.getElementById('notFollowing');
        var useMBSE = document.getElementById('useMBSE');
        var useCapella = document.getElementById('useCapella');
        var keepInfo = document.getElementById('keepInfo');        
        
        for(var i=0;i<nbr_fields;i++){
          if(document.getElementById(req_fields[i]).value.length <=0 || document.getElementById(req_fields[i]).value==0){
           req = false;
           break;
          }
        }
 if(req){
           if(validateEmailAdd()){
        	   description.value+="\n \n \n \n How would you evaluate your knowledge of Model-Based Systems Engineering (MBSE)?  \n - I've never heard of it: " + never.checked + 
        	   ", \n - I've heard a little about that methodology: " + little.checked+ 
        	   ", \n - I'm convinced by MBSE but not following it: " + notFollowing.checked+ 
        	   ", \n - I'm convinced by MBSE and use an MBSE tool for my projects (not Capella): " + useMBSE.checked+ 
        	   ", \n - I'm convinced by MBSE and use Capella for my projects: " + useCapella.checked+ 
        	   ", \n - Keep-me informed about Capella’s ecosystem news and events: " + keepInfo.checked;
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
        return false
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