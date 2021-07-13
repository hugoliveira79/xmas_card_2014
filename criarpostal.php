<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<title>Vulcano - Postal de Natal</title>
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
    background-image: url("img/screens/cria_postal.png");
    height: 100%;
    min-width: 100%;
    text-align: center;
    overflow:hidden;
}
/*body {
    
    background: url(img/screens/cria_postal.png) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}*/
::-webkit-input-placeholder { /* WebKit browsers */
    color:    #FFFFFF !important;
    font-family: frutigerltstd-light-webfont !important;
    font-size:12pt !important;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:    #FFFFFF !important;
    opacity:  1 !important;
    font-family: frutigerltstd-light-webfont !important;
    font-size:12pt !important;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:    #FFFFFF !important;
    opacity:  1 !important;
    font-family: frutigerltstd-light-webfont !important;
    font-size:12pt !important;
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
    color:    #FFFFFF !important;
	font-family: frutigerltstd-light-webfont !important;
    font-size:12pt !important;
}

.btn-file {
position: relative;
overflow: hidden;
font-family: frutigerltstd-light-webfont;
font-size: 12pt;
}
.btn-file input[type=file] {
position: absolute;
top: 0;
right: 0;
min-width: 100%;
min-height: 100%;
font-size: 100px;
text-align: right;
filter: alpha(opacity=0);
opacity: 0;
outline: none;
background: white;
cursor: inherit;
display: block;
}

/* individual: webkit */
#field2::-webkit-input-placeholder { color:#00f; }
#field3::-webkit-input-placeholder { color:#090; background:lightgreen; text-transform:uppercase; }
#field4::-webkit-input-placeholder { font-style:italic; text-decoration:overline; letter-spacing:3px; color:#999; }

/* individual: mozilla */
#field2::-moz-placeholder { color:#00f; }
#field3::-moz-placeholder { color:#090; background:lightgreen; text-transform:uppercase; }
#field4::-moz-placeholder { font-style:italic; text-decoration:overline; letter-spacing:3px; color:#999; }


</style>
</head>
<body id="body">

<div id="wrapper" height="100%">
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
                <div class="row" style="margin-bottom: 0px;" >
                    <div id="texto" class="col-xs-12 col-md-6  col-md-offset-1" style="text-align:left;">
                        <span style="color:#FFFFFF;font-family: frutigerltstd-light-webfont; font-size:45pt">Vamos</span>
                    </div>                              
                </div>     
                <div class="row clearfix" style="margin-top: 0px;line-height: 0.5">
                    <div id="texto" class="col-xs-12 col-md-6  col-md-offset-1" style="text-align:left;max-height:70px;">
                        <span style="color:#FFFFFF;font-family: frutigerltstd-light-webfont; font-size:45pt">começar!</span>
                    </div>                              
                </div>                          
                <div class="row clearfix"  id="vc" >                                 
                    <div id="texto" class="col-xs-12 col-sm-7 col-md-6 col-md-offset-1" style="text-align:left;">                        
                        
                        <span style="color:#FFFFFF;font-family: frutigerltstd-light-webfont;font-size:12pt;">
                            Comece por partilhar o seu nome,depois uma foto sua
                        </span></br>
                        <span style="color:#FFFFFF;font-family: frutigerltstd-light-webfont;font-size:12pt;">
                            para poder personalizar com um maior ou menos grau
                        </span></br>
                        <span style="color:#FFFFFF;font-family: frutigerltstd-light-webfont;font-size:12pt;">
                            de espírito de Natal e por fim, escreva a sua mensagem
                        </span></br>
                        <span style="color:#FFFFFF;font-family: frutigerltstd-light-webfont;font-size:12pt;">
                            de boas festas.
                        </span>

                    </div>
                <!-- </div> -->
                

            <!-- <div class="row" >       -->

                 
                <div class="col-xs-12 col-sm-5 col-md-4 " style="text-align:left;">                              
                <form role="form_criaPostal">
                    <div class="alert alert-danger alert-error" style="display:none;max-width: 400px;">
                        <a class="close" onclick="$('.alert').hide()"; aria-hidden="true">&times;</a>
                        <strong>Erro!</strong>
                        <span id="text_error" style="font-family: frutigerltstd-light-webfont;font-size:12pt;" >A problem has been occurred while submitting your data.</span>
                    </div>
                    <div class="" id="sizeContainer">
                            <div class="form-group">
                                <input  id="text" type="text" class="form-control" placeholder="Nome" style="font-family: frutigerltstd-light-webfont;font-size:12pt;margin-bottom: 5px;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important;background-color:transparent;color:#FFFFFF;max-width:400px;border-width: 2px !important;border-color: #ffffff; height:65px">

                                <div class="input-group btn btn-default btn-file form-control" style="font-family: frutigerltstd-light-webfont;font-size:12pt;margin-bottom: 5px;background-color:transparent;color:#FFFFFF;text-align:left; vertical-align: middle;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important;max-width:400px;border-width: 2px !important;border-color: #ffffff;height:65px">
                                   <span style="line-height:3">U<span style="text-transform:lowercase;">pload de foto</span></span> 
                                    <input type="file" accept="image/*" id="take-picture">
                                    <span class="input-group-addon" aria-hidden="true" style="float-right:0; border: none; line-height: 0; color: white; background:none; padding-right: 0">
                                        <img src="img/icons/seta_upload.png">
                                    </span>
                                </div>                               

                                <textarea id="mensagem" type="text" class="form-control" rows="3"  style="font-family: frutigerltstd-light-webfont;font-size:12pt;margin-bottom: 5px;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important;background-color:transparent;color:#FFFFFF;max-width:400px;border-width: 2px !important;border-color: #ffffff;height:130px;" max-lenght='160' placeholder="Mensagem"></textarea>


                                <div type="button" class="input-group btn btn-default btn-file form-control" style="background-color: #ffffff; font-family: frutigerltstd-light-webfont;font-size:12pt;margin-bottom: 5px;text-align:left; vertical-align: middle;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important;max-width:400px;border-width: 2px !important;border-color: #ffffff;color:#FF0000;height:65px; width:50%" onClick="exportAndSaveCanvas()">
                                   <span style="line-height:3">S<span style="text-transform:lowercase;">eguinte</span></span> 
                                    <span class="input-group-addon" aria-hidden="true" style="padding: 0px 0px; ;color:#FF0000;background:none;border: none; line-height: 0;">
                                        <img src="img/icons/seta_seguinte.png">
                                    </span>
                                </div>  
<!--                                 <button type="button"  id="seguePostal" class="btn btn-default" aria-label="Left Align" style="font-family: frutigerltstd-light-webfont;font-size:12pt; height:45px;margin-bottom: 5px;text-align: left;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important; width:50%;border-width: 2px !important;border-color: #ffffff;color:#FF0000" onClick="exportAndSaveCanvas()">
                                     S<span style="text-transform:lowercase;">eguinte</span> 
                                    <span class="glyphicon glyphicon-play-circle" aria-hidden="true" style="color:#FF0000;padding-left: 45%;"></span> -->
                                    <!-- <img src="img/numbers/1.png" width="25px" style="float-right:0; border: none; line-height: 0; color: white; background:none; padding-right: 0"> 
                                </button>
                          -->
                                
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>         
	   </div>		
       <div style="display:none; float:left; ">
            <canvas id="pictureCanvas" width="300" height="300" ></canvas>
       </div>
	</section>	
</div>

<script src="fabric.js"></script>

<script type="text/javascript"> 

(function() {

	var canvas = this.__canvas = new fabric.Canvas('pictureCanvas');

    var takePicture = document.getElementById('take-picture');
    takePicture.onchange = function (e) {

        var ctx = canvas.getContext('2d');
        
        var reader = new FileReader();
        reader.onload = function(event){
            var img = new Image();
            img.onload = function(){
            	canvas.setWidth(img.width);
            	canvas.setHeight(img.height);
                drawImageScaled(img, ctx);
            }
            img.src = event.target.result;
            
//            var elem = new fabric.Image(img, { left: 0, top: 0, opacity: 1 });
//    	    canvas.add(elem);
//	        canvas.setActiveObject(elem);
        }
        reader.readAsDataURL(e.target.files[0], canvas);        
        
    };
})();   

</script>
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