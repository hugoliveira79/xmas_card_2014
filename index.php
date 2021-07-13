<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<title>Vulcano  - Postal de Natal</title>

<meta property="og:url"             content="<?php require 'config.php';echo $URL; ?>" /> 
<meta property="og:title"           content="Partilhe o Grau do seu espírito de Natal" /> 
<meta property="og:description"     content="Venha descobrir com a Vulcano qual é o Grau do seu espírito de Natal e crie um divertido postal de para partilhar com quem quiser." /> 
<meta property="og:image"           content="<?php echo $URL_IMAGE_DEFAULT; ?>" /> 
<meta property="og:image:type"      content="image/png">
<meta property="og:image:width"     content="800"> 
<meta property="og:image:height"    content="600"> 

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
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
    background-image: url("img/screens/home.png");
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
<body onorientationchange="testOrientation();">
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
            <div class="row" style="margin-top:25px"></div>            
            
            <div class="row">
                <div align="center">   
                    <img src="img/titulo_GEN.png">
                    <div class="col-xs-12">
                    </br>
                    <span style="color:white;font-family: frutigerltstd-light-webfont;font-size:12pt; ">O espírito de Natal manifesta-se de diferentes formas em cada pessoa,</span></br>
                        <span style="color:white;font-family: frutigerltstd-light-webfont;font-size:12pt;">mas nesta época, se há coisas que temos em comum,</span></br>
                        <span style="color:white;font-family: frutigerltstd-light-webfont;font-size:12pt;">é a vontade de partilhar os desejos de boas festas com quem é mais importante.</span></br></br>
                        <span style="color:white;font-family: frutigerltstd-light-webfont;font-size:13pt;"><strong>Descubra aqui qual é o grau dos seu esírito de Natal</br>
                            e partilhe-o com quem mais gosta</strong></span></br>
                    </div>
                    </br>
                    <button type="button" class="btn btn-default" aria-label="Left Align" onClick="location.href='criarpostal.php'" style="height:65px;width:250px; background-color: transparent;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px;border-width: 2px !important;margin-top:20px">
                        <span style="color:#ffffff;font-family: frutigerltstd-light-webfont;font-size:12pt;" id="button_text">C<span style="text-transform:lowercase;">omeçar</span></span>                                
                    </button>
                </div>
            </div>
    
            
            
        </div>
        <!-- <video id="myVideo" preload data-origin-x="20" data-origin-y="40" controls>
            <source src="video/video.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            <source src="video/video.ogg" type='video/ogg; codecs="theora, vorbis"'>
        </video> -->
  
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