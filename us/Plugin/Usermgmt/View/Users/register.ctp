<script src='https://www.google.com/recaptcha/api.js'></script>

<section id="registro">
	<div id="registro_content">
		<h1>Sign up! <br>to see investments</h1>
		<p>Before we show our investment portfolio, we need some information about you. We respect your privacy and will not share your information with third parties without your consent.</p>

		<?php echo $this->Form->create('User', array('url' => array('action' => 'register'))); ?>
	    <div class="form">
	      <div class="form-group mrs" style="padding-left:0;">
	      	<label>Title:</label>
	        <?php echo $this->Form->input("title" ,array('type'=> 'select', 'label' => false,'div'=>false, 'class' => 'form-control', 'options'=>array('0'=>'Select','Mr'=>'Mr.','Mrs'=>'Mrs.')))?>
	      </div>
	      <div class="form-group name" style="padding-right:0;">
	      	<label>Name:</label>
	        <?php echo $this->Form->input("first_name" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control'))?>
	      </div>
	      <div class="form-group">
	      	<label>Last name:</label>
	        <?php echo $this->Form->input("last_name" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control'))?>
	      </div>
	      <div class="form-group">
	      	<label>Email:</label>
	        <?php echo $this->Form->input("email" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control'))?>
	      </div>
	      <div class="form-group">
	      	<label>Password:</label>
	        <?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'div'=>false,'class'=>"form-control"))?>
	      </div>
	      <div class="form-group">
	      	<label>Confirm your password:</label>
	        <?php echo $this->Form->input("cpassword" ,array("type"=>"password",'label' => false,'div'=>false,'class'=>"form-control"))?>
	      </div>
	      <div class="form-group">
	      	<label>Security question 1:</label>
	        <?php echo $this->Form->input("question1" ,array('type'=> 'select', 'label' => false,'div'=>false, 'class' => 'form-control', 'options'=>array('0'=>'--Select a question from the list--','What is the name of your first pet?'=>'What is the name of your first pet?','What is the birthplace of your mother?'=>'What is the birthplace of your mother?', 'Which is your favorite song?'=>'Which is your favorite song?', 'What is the name of your best childhood friend?'=>'What is the name of your best childhood friend?')))?>
	      </div>
	      <div class="form-group">
	      	<label>Answer:</label>
	        <?php echo $this->Form->input("answer1" ,array("type"=>"password",'label' => false,'div'=>false,'class'=>"form-control"))?>
	      </div>
	      <div class="form-group">
	      	<label>Security question 2:</label>
	        <?php echo $this->Form->input("question2" ,array('type'=> 'select', 'label' => false,'div'=>false, 'class' => 'form-control', 'options'=>array('0'=>'--Select a question from the list--','What is the profession of your father?'=>'What is the profession of your father?','What is the middle name of your mother?'=>'What is the middle name of your mother?', 'What is the name of your godfather of marriage?'=>'What is the name of your godfather of marriage?', 'Who is your favorite historical figure?'=>'Who is your favorite historical figure?')))?>
	      </div>
	      <div class="form-group">
	      	<label>Answer:</label>
	        <?php echo $this->Form->input("answer2" ,array("type"=>"password",'label' => false,'div'=>false,'class'=>"form-control"))?>
	      </div>
	      <div class="form-group">
	      	<label>Phone:</label>
	        <?php echo $this->Form->input("phone" ,array("type"=>"text",'label' => false,'div'=>false,'class'=>"form-control"))?>
	      </div>
	      <div class="form-group">
	      	<label>Country of residence:</label>
	        <?php echo $this->Form->input("country" ,array('type'=> 'select', 'label' => false,'div'=>false, 'class' => 'form-control', 'options'=>array('0'=>'Select','AF'=>'Afganistán','AL'=>'Albania','DE'=>'Alemania','AD'=>'Andorra','AO'=>'Angola','AI'=>'Anguilla','AQ'=>'Antártida','AG'=>'Antigua y Barbuda','AN'=>'Antillas Holandesas','SA'=>'Arabia Saudí','DZ'=>'Argelia','AR'=>'Argentina','AM'=>'Armenia','AW'=>'Aruba','AU'=>'Australia','AT'=>'Austria','AZ'=>'Azerbaiyán','BS'=>'Bahamas','BH'=>'Bahrein','BD'=>'Bangladesh','BB'=>'Barbados','BE'=>'Bélgica','BZ'=>'Belice','BJ'=>'Benin','BM'=>'Bermudas','BY'=>'Bielorrusia','MM'=>'Birmania','BO'=>'Bolivia','BA'=>'Bosnia y Herzegovina','BW'=>'Botswana','BR'=>'Brasil','BN'=>'Brunei','BG'=>'Bulgaria','BF'=>'Burkina Faso','BI'=>'Burundi','BT'=>'Bután','CV'=>'Cabo Verde','KH'=>'Camboya','CM'=>'Camerún','CA'=>'Canadá','TD'=>'Chad','CL'=>'Chile','CN'=>'China','CY'=>'Chipre','VA'=>'Ciudad del Vaticano (Santa Sede)','CO'=>'Colombia','KM'=>'Comores','CG'=>'Congo','CD'=>'Congo, República Democrática del','KR'=>'Corea','KP'=>'Corea del Norte','CI'=>'Costa de Marfíl','CR'=>'Costa Rica','HR'=>'Croacia (Hrvatska)','CU'=>'Cuba','DK'=>'Dinamarca','DJ'=>'Djibouti','DM'=>'Dominica','EC'=>'Ecuador','EG'=>'Egipto','SV'=>'El Salvador','AE'=>'Emiratos Árabes Unidos','ER'=>'Eritrea','SI'=>'Eslovenia','ES'=>'España','US'=>'Estados Unidos','EE'=>'Estonia','ET'=>'Etiopía','FJ'=>'Fiji','PH'=>'Filipinas','FI'=>'Finlandia','FR'=>'Francia','GA'=>'Gabón','GM'=>'Gambia','GE'=>'Georgia','GH'=>'Ghana','GI'=>'Gibraltar','GD'=>'Granada','GR'=>'Grecia','GL'=>'Groenlandia','GP'=>'Guadalupe','GU'=>'Guam','GT'=>'Guatemala','GY'=>'Guayana','GF'=>'Guayana Francesa','GN'=>'Guinea','GQ'=>'Guinea Ecuatorial','GW'=>'Guinea-Bissau','HT'=>'Haití','HN'=>'Honduras','HU'=>'Hungría','IN'=>'India','ID'=>'Indonesia','IQ'=>'Irak','IR'=>'Irán','IE'=>'Irlanda','BV'=>'Isla Bouvet','CX'=>'Isla de Christmas','IS'=>'Islandia','KY'=>'Islas Caimán','CK'=>'Islas Cook','CC'=>'Islas de Cocos o Keeling','FO'=>'Islas Faroe','HM'=>'Islas Heard y McDonald','FK'=>'Islas Malvinas','MP'=>'Islas Marianas del Norte','MH'=>'Islas Marshall','UM'=>'Islas menores de Estados Unidos','PW'=>'Islas Palau','SB'=>'Islas Salomón','SJ'=>'Islas Svalbard y Jan Mayen','TK'=>'Islas Tokelau','TC'=>'Islas Turks y Caicos','VI'=>'Islas Vírgenes (EEUU)','VG'=>'Islas Vírgenes (Reino Unido)','WF'=>'Islas Wallis y Futuna','IL'=>'Israel','IT'=>'Italia','JM'=>'Jamaica','JP'=>'Japón','JO'=>'Jordania','KZ'=>'Kazajistán','KE'=>'Kenia','KG'=>'Kirguizistán','KI'=>'Kiribati','KW'=>'Kuwait','LA'=>'Laos','LS'=>'Lesotho','LV'=>'Letonia','LB'=>'Líbano','LR'=>'Liberia','LY'=>'Libia','LI'=>'Liechtenstein','LT'=>'Lituania','LU'=>'Luxemburgo','MK'=>'Macedonia, Ex-República Yugoslava de','MG'=>'Madagascar','MY'=>'Malasia','MW'=>'Malawi','MV'=>'Maldivas','ML'=>'Malí','MT'=>'Malta','MA'=>'Marruecos','MQ'=>'Martinica','MU'=>'Mauricio','MR'=>'Mauritania','YT'=>'Mayotte','MX'=>'México','FM'=>'Micronesia','MD'=>'Moldavia','MC'=>'Mónaco','MN'=>'Mongolia','MS'=>'Montserrat','MZ'=>'Mozambique','NA'=>'Namibia','NR'=>'Nauru','NP'=>'Nepal','NI'=>'Nicaragua','NE'=>'Níger','NG'=>'Nigeria','NU'=>'Niue','NF'=>'Norfolk','NO'=>'Noruega','NC'=>'Nueva Caledonia','NZ'=>'Nueva Zelanda','OM'=>'Omán','NL'=>'Países Bajos','PA'=>'Panamá','PG'=>'Papúa Nueva Guinea','PK'=>'Paquistán','PY'=>'Paraguay','PE'=>'Perú','PN'=>'Pitcairn','PF'=>'Polinesia Francesa','PL'=>'Polonia','PT'=>'Portugal','PR'=>'Puerto Rico','QA'=>'Qatar','UK'=>'Reino Unido','CF'=>'República Centroafricana','CZ'=>'República Checa','ZA'=>'República de Sudáfrica','DO'=>'República Dominicana','SK'=>'República Eslovaca','RE'=>'Reunión','RW'=>'Ruanda','RO'=>'Rumania','RU'=>'Rusia','EH'=>'Sahara Occidental','KN'=>'Saint Kitts y Nevis','WS'=>'Samoa','AS'=>'Samoa Americana','SM'=>'San Marino','VC'=>'San Vicente y Granadinas','SH'=>'Santa Helena','LC'=>'Santa Lucía','ST'=>'Santo Tomé y Príncipe','SN'=>'Senegal','SC'=>'Seychelles','SL'=>'Sierra Leona','SG'=>'Singapur','SY'=>'Siria','SO'=>'Somalia','LK'=>'Sri Lanka','PM'=>'St Pierre y Miquelon','SZ'=>'Suazilandia','SD'=>'Sudán','SE'=>'Suecia','CH'=>'Suiza','SR'=>'Surinam','TH'=>'Tailandia','TW'=>'Taiwán','TZ'=>'Tanzania','TJ'=>'Tayikistán','TF'=>'Territorios franceses del Sur','TP'=>'Timor Oriental','TG'=>'Togo','TO'=>'Tonga','TT'=>'Trinidad y Tobago','TN'=>'Túnez','TM'=>'Turkmenistán','TR'=>'Turquía','TV'=>'Tuvalu','UA'=>'Ucrania','UG'=>'Uganda','UY'=>'Uruguay','UZ'=>'Uzbekistán','VU'=>'Vanuatu','VE'=>'Venezuela','VN'=>'Vietnam','YE'=>'Yemen','YU'=>'Yugoslavia','ZM'=>'Zambia','ZW'=>'Zimbabue')));?>
	      </div>
	      <div class="form-group">
	      	<label>How did you hear about Bricks?</label>
	        <?php echo $this->Form->input("font" ,array('type'=> 'select', 'label' => false,'div'=>false, 'class' => 'form-control', 'options'=>array('0'=>'Select','Social networks'=>'Social networks', 'Email'=>'Email', 'Website'=>'Website', 'One friend told me'=>'One friend told me', 'Others'=>'Others')))?>
	      </div>
	      <div class="form-group" style="float:left;">Website
	      	<div class="checks">
		        <label><?php echo $this->Form->checkbox("terms", array('class'=>'checkbox'))?>
		      	I agree with Terms of Use and Privacy Policy.</label>
		        <label><?php echo $this->Form->checkbox("declare", array('class'=>'checkbox'))?>
		      	I declare that I intend to invest funds that are the proceeds of legal trade, which are not the product of drug trafficking, terrorist activities, corruption or any unlawful act.</label>
		     	</div>
	      </div>
	      <div class="form-group" style="float:left;width:100%;">
	      	<div class="g-recaptcha" data-sitekey="6Ld2TxoTAAAAACsMP3isGYRlNMgKz3FuETgrzhPa"></div>
	      </div>
	    </div>    
	    <div class="btn_login">
	      <button type="Submit" class="bricks_btn register_btn">
	        Yes, I'm interested in knowing all investments
	      </button>
	    </div>
	  <?php echo $this->Form->end();?> 
	</div>
</section>