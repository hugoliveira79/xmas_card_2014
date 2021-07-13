<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<title>Vulcano  - Postal de Natal</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta http-equiv="Pragma" content="no-cache">

<meta http-equiv="refresh" content="5; URL=<?php require 'config.php';echo $URL; ?>">

<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<link href="img/favicon.ico" rel="Shortcut Icon">

<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<style type="text/css">
@font-face{ 
    font-family: 'frutigerltstd-light-webfont';
    src: url('font/frutigerltstd-light-webfont.eot');
    src: url('font/frutigerltstd-light-webfont.eot?#iefix') format('embedded-opentype'),
         url('font/frutigerltstd-light-webfont.woff') format('woff'),
         url('font/frutigerltstd-light-webfont.ttf') format('truetype'),
         url('font/frutigerltstd-light-webfont.svg') format('svg');
}
</style>

<style type="text/css">

html
{
    height: 100%;
    width: 100%;
}
body {
    background-attachment: fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-image: #ffffff;
    height: 100%;
    min-width: 100%;
}


/*body {
    background: url(img/screens/home.png) no-repeat center center fixed; 
    height: 100%;
    min-width: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}*/

#block_land{position:absolute; top:0; left:0;vertical-align: text-top; background:white; width:100%; height:100%; display:none;}

</style>   

</head>
<body>
<!-- <div id="bg" align="center"><img class="img-responsive" src="img/screens/cria_postal.png" style="min-width:100%;height:100%;" alt=""></div> -->
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-fixed-top" style="background:#e20011;">
            <div class="container" style="width:100%;padding: 0 0px 0 20px;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="color:#FFFFFF;"><img src="img/logo-white.png" height="40px"></a>
                </div>
                <div class="navbar-collapse collapse " align="center">
                    <ul class="nav navbar-nav" align="center">
                        <li class="active" style="height:70px;width:150px;border-bottom: thick solid #3a4d98;border-left: 1px solid #3F3F3F;border-left-width: thin;" align="center"><a href="index.php" style="color:#FFFFFF;margin-left:0px">H<span style="text-transform:lowercase;">ome</span></a></li>
                        <li style="height:70px;width:150px;border-left: 1px solid #3F3F3F;border-left-width: thin;" align="center"><a href="criarpostal.php" style="color:#FFFFFF;margin-left:0px">C<span style="text-transform:lowercase;">riar Postal</span></a></li>
                        <li style="height:70px;width:150px;border-left: 1px solid #3F3F3F;border-left-width: thin;" align="center"><a href="galeria.php" style="color:#FFFFFF;margin-left:0px">G<span style="text-transform:lowercase;">aleria</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	
	<!-- end header -->
	<!-- Slider -->

    <section>        
        <div class="container" >        	
            <div class="row" style="margin-top:0px">
            	<div class="col-xs-6 col-sm-2 col-md-2 col-xs-offset-3 col-sm-offset-7 col-md-offset-6">
            		<img src="img/setas_obrigado.png">
            	</div>
            	
            </div> 
            <div class="row">
                <div align="center">                       
                    <div class="col-xs-12" id="Sucesso" style="">
                    <span style="color:#e20011;font-family: frutigerltstd-light-webfont; font-size:45pt; ">Postal enviado</span></br>                  
                    <span style="color:#e20011;font-family: frutigerltstd-light-webfont; font-size:45pt; ">Obrigado pela sua participação</span></br>                  
                	</div>
                	<div class="col-xs-12" id="inSucesso" style="display:none;">
                    <span style="color:#e20011;font-family: frutigerltstd-light-webfont; font-size:45pt; ">Não foi possivel enviar o Postal</span></br>                  
                    <span style="color:#e20011;font-family: frutigerltstd-light-webfont; font-size:45pt; ">Por favor, tente mais tarde.</span></br>                  
                	</div>
                </div>
            </div> 

        </div> 

	</section>
</div>


<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<!-- Pictures  desktop-->
<script src="libs/export_canvas/base64.js" type="text/javascript"></script>
<script src="libs/export_canvas/canvas2image.js" type="text/javascript"></script>
<script src="http://code.createjs.com/easeljs-0.5.0.min.js"></script> 
<script src="js/pictureHandler.js"></script>
</body>
</html>

 <?php 
	 //SMTP needs accurate times, and the PHP time zone MUST be set
	//This should be done in your php.ini, but this is how to do it if you don't have access to that
	date_default_timezone_set('Etc/UTC');
	
	require 'PHPMailer/PHPMailerAutoload.php';
	 $mail1 = $_POST["email1"];
	 $mail2 = $_POST["email2"];
	 $mail3 = $_POST["email3"];
	 $mail4 = $_POST["email4"];
	 $mail5 = $_POST["email5"];
 
	$mail = new PHPMailer;
	
	// Set mailer to use SMTP
	$mail->isSMTP();
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 0;
	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';

	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';
	

	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'site.natal.vulcano@gmail.com';                 // SMTP username
	$mail->Password = 'vulcano_site';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;


	$mail->From = 'site.natal.vulcano@gmail.com';
	$mail->FromName = 'Postal de Natal Vulcano';
	if($mail1 != null || $mail1 != "")
		$mail->addAddress($mail1);
	if($mail2 != null || $mail2 != "")
		$mail->addAddress($mail2);
	if($mail3 != null || $mail3 != "")
		$mail->addAddress($mail3);
	if($mail4 != null || $mail4 != "")
		$mail->addAddress($mail4);
	if($mail5!= null || $mail5 != "")
		$mail->addAddress($mail5);
		
	$mail->CharSet = 'UTF-8';
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$postal = $_POST["postal"];
	
	$mail->Subject = 'Postal de natal Vulcano';
	$mail->Body    = 'Acabei de fazer o um postal de Natal personalizado com a Vulcano. <br/><br/>Vem <a href ="http://postal-natal-vulcano.ipn.pt/postal.php?id='.$postal.'">aqui</a> para o veres, aproveita para também fazeres um e descobre qual é o grau do teu espírito de natal.';
	$mail->AltBody = 'Acabei de fazer o um postal de Natal personalizado com a Vulcano. Vem aqui para o veres, aproveita para também fazeres um e descobre qual é o grau do teu espírito de natal';

	//send the message, check for errors
	if (!$mail->send()) {
		//echo "Mailer Error: " . $mail->ErrorInfo;
		//echo "<script style='text/javascript' >document.getElementById('Sucesso').style.display='block';</script>"
	} else {
		//echo "Message sent!";
		//echo "<script style='text/javascript'>document.getElementById('inSucesso').style.display='block';</script>"
	}
 ?>

