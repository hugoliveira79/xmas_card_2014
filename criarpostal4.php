<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<title>Vulcano - Postal de Natal</title>
<meta property="og:url"             content="<?php require 'config.php';echo $URL_SITE_POSTAL; ?><?php echo $_GET['id'] ?>" /> 
<meta property="og:title"           content="Descobre o Grau do meu espírito de Natal" /> 
<meta property="og:description"     content="Acabei de fazer o um postal de Natal personalizado com a Vulcano. Vem aqui para o veres, aproveita para também fazeres um e descobre qual é o grau do teu espírito de Natal!" /> 
<meta property="og:image"           content="<?php echo $URL_SITE_POSTAL_IMAGE; ?><?php echo $_GET['id'] ?>/upload_1.png" /> 
<meta property="og:image:width"     content="500"/> 
<meta property="og:image:height"    content="500"/>


<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- css -->
<meta http-equiv="Pragma" content="no-cache">

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
<script src="js/controller.js"></script>
<script type="text/javascript">
  var concluido = <?php include('function.php'); echo getIsConcluido($_GET['id']); ?>;
  var gotIT = <?php echo getID($_GET['id']); ?>;

  if(gotIT==0)  // guid invalido
  {
    <?php echo "checkIt( '".$_GET['id']."',concluido,0);"; ?>
  }
  else  // caso ele exista, check it
  {
    <?php echo "checkIt( '".$_GET['id']."',concluido,1);"; ?>
  }
</script>
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

<script src="js/jquery.js"></script>
<script src="js/jquery.als-1.7.min.js"></script>
<style type="text/css">
body {
    
    background: white center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}


#progress {
    width: 10px;
    min-height: 200px;
    background: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border: solid;
    border-color: #FE0404;
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}


<!-- EXPORT TO PHP STUFF-->
    #canvas{
        border:1px solid #CCCCCC;
    } 

    .elements{
        display: none;
    }


#foto1 {
    position: absolute;
    top: 50px;
    left: 80px;
}

#image img{
    height:400px;
    width:600px;
}

::-webkit-input-placeholder { /* WebKit browsers */
    color:    #e20011 !important;
font-family: verdana;
font-size: 10pt;
    
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #e20011 !important;
   opacity:  1 !important;
    font-family: verdana !important;
    font-size: 10pt !important;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #e20011 !important;
   opacity:  1 !important;
    font-family: verdana !important;
    font-size: 10pt !important;
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
   color:    #e20011 !important;
    font-family: verdana !important;
    font-size: 10pt !important;
}
 input { border: 1px solid #e20011 !important; }

</style>

</head>
<body>
    <!-- FACEBOOK API --> 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- TWITTER API --> 
<script type="text/javascript">
window.twttr=(function(d,s,id){var t,js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)){return}js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);return window.twttr||(t={_e:[],ready:function(f){t._e.push(f)}})}(document,"script","twitter-wjs"));
</script>

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
                        <li  style="height:70px;width:150px;border-left: 1px solid #3F3F3F;border-left-width: thin;" align="center"><a href="index.php" style="color:#FFFFFF;margin-left:0px">H<span style="text-transform:lowercase;">ome</span></a></li>
                        <li class="active" style="height:70px;width:150px;border-bottom: thick solid #3a4d98;border-left: 1px solid #3F3F3F;border-left-width: thin;" align="center"><a href="criarpostal.php" style="color:#FFFFFF;margin-left:0px">C<span style="text-transform:lowercase;">riar Postal</span></a></li>
                        <li style="height:70px;width:150px;border-left: 1px solid #3F3F3F;border-left-width: thin;" align="center"><a href="galeria.php" style="color:#FFFFFF;margin-left:0px">G<span style="text-transform:lowercase;">aleria</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
	
	<!-- end header -->
	<!-- Slider -->
    <section class="container">
        <div class="container">
        <div class="row"><p>&nbsp;</p></div>
            <div class="row" >             
                <div id='texto' align="center">
                    <span style="color:#FE0404; font-size: 20pt">Defina o <strong>Grau do seu espírito de Natal</strong></span>
                </div>            
            </div>    
            <div class="row clearfix" align="center">
                
                <div class="col-md-12" style="position: relative;">  
                    <div class=" img-overlay" style="position:relative; max-width: 600px;">
                        <?php
                            echo '<img id="foto_img" class="img-responsive" src="upload/backup/'.$_GET['id'].'/upload_1.png" style="position:absolute; top: 0; left:  12%;overflow%; max-width:40%;  margin-top: 10%;">';
                        ?>
                        <img id="img1" class="img-responsive" src="img/postais/postal1.png" style="width:100%">
                        <img id="elemento5" class="img-responsive" src="img/postais/elementos/bolas.png" style="width:100%;position:absolute; top: 0; left:  0% ;z-index:999;display:none;">
                        <img id="elemento2" class="img-responsive" src="img/postais/elementos/bonecos.png" style="width:100%;position:absolute; top: 0; left:  0%;z-index:999;display:none;">
                        <img id="elemento3" class="img-responsive" src="img/postais/elementos/sinos.png" style="width:100%;position:absolute; top: 0; left:  0%;z-index:999;display:none;">
                        <img id="elemento4" class="img-responsive" src="img/postais/elementos/neve.png" style="width:100%;position:absolute; top: 0; left:  0%;z-index:999;display:none;">
                        <img id="elemento1" class="img-responsive" src="img/postais/elementos/moldura.png" style="width:100%;position:absolute; top: 0; left:  0%;z-index:999;display:none;">
						
						<div style="overflow-y:auto; word-wrap:break-word;position:absolute; top: 0; right: 10%; width:30%; margin-top: 14%; height:60%" align="left" >
							<span style="font-family: frutigerltstd-light-webfont;font-size:12pt; color: #003871;">
								<strong>
									<?php
										echo getPostalDetails($_GET['id']);
									?>
								</strong>
							</span>
                        </div>
                    </div>  
                </div>                
            </div>
             <div class="row" id="partilha">
                <div class="col-md-3 col-md-3 col-md-offset-3" style="position: relative;">  
                    <span style="color:#e20011;">Partilhe</span>
                    <span onClick="hideElement('email_form',false)" ><img src="img/share/mail.png"></span>
                    <!-- <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="icon">
                    </div> -->
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $URL_SITE_POSTAL; ?><?php echo $_GET['id'] ?>" target="_blank">
                        <img src="img/share/facebook.png">
                    </a>
                    <a href="https://twitter.com/share?url=<?php echo $URL_SITE_POSTAL; ?><?php echo $_GET['id'] ?>&text=Postal de Natal Vulcano " target="_blank" >
                        <img src="img/share/twitter.png">               
                    </a>

                </div>
                <div class=" col-md-3 col-md-3" style="position: relative;">  
                    <form role="form_mail" id="email_form" style="display:none" action="criarpostal5.php" method="post" >
                        <input name="postal" type="hidden" value="<?php echo $_GET['id'] ?>" >
                        <div class="alert alert-danger alert-error" style="display:none;">
                            <a class="close" onclick="$('.alert').hide()"; aria-hidden="true">&times;</a>
                            <strong>Erro!</strong>
                            <span id="text_error">A problem has been occurred while submitting your data.</span>
                        </div>
                        <div class="" id="sizeContainer">
                            <div class="form-group">
                                <input  id="mail1" type="email" name="email1" class="form-control" placeholder="Destinatário 1" style="max-width:400px;margin-top:5px;-webkit-border-radius: 2px !important;-moz-border-radius: 2px !important;border-radius: 2px !important;background-color:transparent !important;color:#e20011 !important;height:65px !important;border-width: 2px !important;" required>
                                <input  id="mail2" type="email" name="email2" class="form-control" placeholder="Destinatário 2" style="max-width:400px;margin-top:5px;-webkit-border-radius: 2px !important;-moz-border-radius: 2px !important;border-radius: 2px !important;background-color:transparent !important;color:#e20011 !important;height:65px !important;border-width: 2px !important;">
                                <input  id="mail3" type="email" name="email3" class="form-control" placeholder="Destinatário 3" style="max-width:400px;margin-top:5px;-webkit-border-radius: 2px !important;-moz-border-radius: 2px !important;border-radius: 2px !important;background-color:transparent !important;color:#e20011 !important;height:65px !important;border-width: 2px !important;">
                                <input  id="mail4" type="email" name="email4" class="form-control" placeholder="Destinatário 4" style="max-width:400px;margin-top:5px;-webkit-border-radius: 2px !important;-moz-border-radius: 2px !important;border-radius: 2px !important;background-color:transparent !important;color:#e20011 !important;height:65px !important;border-width: 2px !important;">                            
                                <input  id="mail5" type="email" name="email5" class="form-control" placeholder="Destinatário 5" style="max-width:400px;margin-top:5px;-webkit-border-radius: 2px !important;-moz-border-radius: 2px !important;border-radius: 2px !important;background-color:transparent !important;color:#e20011 !important;height:65px !important;border-width: 2px !important;">
                                <br/>
                                <button type="submit" id="enviar_btn" class="input-group btn btn-default btn-file form-control" style="background-color: #ffffff; font-family: frutigerltstd-light-webfont;font-size:12pt;margin-bottom: 5px;text-align:left; vertical-align: middle;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important;max-width:400px;border-width: 2px !important;border-style: solid;border-color: #e20011;color:#e20011;height:65px; width:50%" onmouseout="setButtonSelected(false,'enviar_btn');">
                                    <span style="line-height:3">E<span style="text-transform:lowercase;">nviar</span></span>                                     
                                    <img src="img/icons/seta_seguinte.png" width="20px">                          
                                </button>
                                <!-- <div type="button" class="input-group btn btn-default btn-file form-control" style="background-color: #ffffff; font-family: frutigerltstd-light-webfont;font-size:12pt;margin-bottom: 5px;text-align:left; vertical-align: middle;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important;max-width:400px;border-width: 2px !important;border-style: solid;border-color: #e20011;color:#e20011;height:65px; width:50%" onClick="exportAndSaveCanvas()">
                                   <span style="line-height:3">E<span style="text-transform:lowercase;">nviar</span></span> 
                                    <span class="input-group-addon" aria-hidden="true" style="padding: 0px 0px; ;color:#FF0000;background:none;border: none; line-height: 0;">
                                        <img src="img/icons/seta_seguinte.png">
                                    </span>
                                </div>
 -->
                            </div>
                        </div>
                    </form>
                </div>           
	       </div>		      
	</section>	
</div>




<script src="fabric.js"></script>
<script style="text/javascript">
    function setpostal(id)
    {
    
        if(id==2)
        {
            document.getElementById('elemento1').style.display="block";
            document.getElementById('elemento2').style.display="none";
            document.getElementById('elemento3').style.display="none";
            document.getElementById('elemento4').style.display="none";
            document.getElementById('elemento5').style.display="none";                    
        }
        else if(id==3)
        {
            document.getElementById('elemento1').style.display="block";
            document.getElementById('elemento2').style.display="block";
            document.getElementById('elemento3').style.display="none";
            document.getElementById('elemento4').style.display="none";
            document.getElementById('elemento5').style.display="none";                    
        }    
        else if(id==4)
        {
            document.getElementById('elemento1').style.display="block";
            document.getElementById('elemento2').style.display="block";
            document.getElementById('elemento3').style.display="block";
            document.getElementById('elemento4').style.display="block";
            document.getElementById('elemento5').style.display="none";                    
        }    
        else if(id==5)
        {
            document.getElementById('elemento1').style.display="block";
            document.getElementById('elemento2').style.display="block";
            document.getElementById('elemento3').style.display="block";
            document.getElementById('elemento4').style.display="block";
            document.getElementById('elemento5').style.display="block";                                        
        }
    }
	setpostal( <?php echo getPostal($_GET['id']); ?>);

    function setButtonSelected(isSelected, id)
     {
        if(isSelected)
        {
            document.getElementById(id).style.background='#e20011';
            document.getElementById(id).style.color='white';
            document.getElementById('seguinte').style.color='#ffffff';
            
        }
        else
        {
            document.getElementById(id).style.background='white';
            document.getElementById(id).style.color='#e20011';            
            document.getElementById('seguinte').style.color='#e20011';
        }
     }  

     function hideElement(id, hide)
     {
        if(hide)
            document.getElementById(id).style.display='none';
        else 
            document.getElementById(id).style.display='block';
     }


</script> 
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
<!-- <script src="http://code.jquery.com/jquery-1.8.2.js"></script> -->

</body>
</html>