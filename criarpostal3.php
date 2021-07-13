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
<link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<script src="js/jquery.js"></script>
<script src="js/jquery.als-1.7.min.js"></script>

<script src="js/controller.js"></script>
<script type="text/javascript">
  var concluido = <?php include('function.php'); echo getIsConcluido($_GET['id']); ?>;
  var gotIT = <?php echo getID($_GET['id']); ?>;

  if(gotIT==0)  // guid invalido
  {
    <?php echo "checkIt( '".$_GET['id']."',concluido,1);"; ?>
  }
  else  // caso ele exista, check it
  {
    <?php echo "checkIt( '".$_GET['id']."',concluido,0);"; ?>
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

input[type="checkbox"] {
    -webkit-appearance: radio; 
    -moz-appearance: radio;    
    -ms-appearance: radio;     

    border-radius: 100px;
    /*background: #e20011;
    box-shadow: inset 1px 0px 1px 0px #e20011, 1px 0px 0px 0px #e20011;
*/
    -ms-transform: scale(2); /* IE */
    -moz-transform: scale(2); /* FF */
    -webkit-transform: scale(2); /* Safari and Chrome */
    -o-transform: scale(2); /* Opera */
}

input[type=checkbox]:checked {
    /*box-shadow: inset 20px 0px 0px 0px #e20011, 1px 0px 0px 0px #e20011;       */
}

</style>
</head>
<body>

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
                <div class="navbar-collapse collapse" align="center">
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
                    <span style="color:#FE0404; font-size: 20pt">Defina o <strong>Grau do seu espírito de Natal</strong></span></br>
                    <span style="color:#000000; font-size: 10pt"><img src="img/icons/seta_seguinte.png" width="20px">&nbsp;&nbsp;Use o cursor para aumentar ou diminuir o Grau do espírito de Natal que quer demonstrar no seu postal.</span>
                </div>            
            </div>    

            <div class="row clearfix" align="center">
                
                <div class=" col-sm-10  col-md-7 col-md-offset-2" style="position: relative;">  
                    <div class=" img-overlay" style="position:relative; max-width: 600px;">
                        <img id="img1" class="img-responsive" src="img/postais/postal1.png" style="width:100%">
                        <img id="elemento5" class="img-responsive" src="img/postais/elementos/bolas.png" style="width:100%;position:absolute; top: 0; left:  0% ;z-index:999;display:none;">
                        <img id="elemento2" class="img-responsive" src="img/postais/elementos/bonecos.png" style="width:100%;position:absolute; top: 0; left:  0%;z-index:999;display:none;">
                        <img id="elemento3" class="img-responsive" src="img/postais/elementos/sinos.png" style="width:100%;position:absolute; top: 0; left:  0%;z-index:999;display:none;">
                        <img id="elemento4" class="img-responsive" src="img/postais/elementos/neve.png" style="width:100%;position:absolute; top: 0; left:  0%;z-index:999;display:none;">
                        <img id="elemento1" class="img-responsive" src="img/postais/elementos/moldura.png" style="width:100%;position:absolute; top: 0; left:  0%;z-index:998;display:none;">
                        <!--<img id="foto_img" class="img-responsive" src="upload/image.png" style="position:absolute; top: 0; left:  12%;overflow%; max-width:40%;  margin-top: 10s%;">   -->
						<?php
							echo '<img id="foto_img" class="img-responsive" src="upload/backup/'.$_GET['id'].'/upload_1.png" style="position:absolute; top: 0; left:  12%;overflow%; max-width:40%;  margin-top: 10%;">';
						?>
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
                <!-- barra -->
                <div class="col-md-1 col-sm-2" id="desktop_scrollbar" style="height:400px" align="left"></br>
                    <span  style="background-color:transparent;border-style:none;text-decoration: none;-moz-text-decoration-color: none;text-decoration-color: none;" id="desktop">
                        <div align="center">
                            <img onClick="aumentarBarra('true');" src="img/icons/mais.png" width="40px">
                            <div class="progress" id="progress" style="border: 3px solid #e20011;border-radius: 100px;margin-bottom:10px;margin-top:10px;">
                                <div class="progress-bar progress-bar-danger progress-bar-striped" id='scroll_1' role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 0%;width:100%;barckground-color:#FE0404"></div>
                            </div>
                            <img onClick="diminuirBarra('true');" src="img/icons/menos.png" width="40px">
                        </div>
                    </span>                
                </div>
                <!-- end barra -->
            </div> 
            <div class="row clearfix" id="desktop_scrollbar" align="center">
                <div class="col-sm-4 col-md-3 col-md-offset-2 col-sm-offset-1">   
                    <button type="submit" id="enviar_btn" class="input-group btn btn-default btn-file form-control" style="background-color: #ffffff; font-family: frutigerltstd-light-webfont;font-size:12pt;margin-bottom: 5px;text-align:left; vertical-align: middle;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important;max-width:400px;border-width: 2px !important;border-style: solid;border-color: #e20011;color:#e20011;height:65px; width:120px"  onClick="location.href=returnURL();">
                            <span style="line-height:3">F<span style="text-transform:lowercase;">inalizar</span></span>                                     
                            <img src="img/icons/seta_seguinte.png" width="20px">                          
                        </button> 
                </div>
                <div class="col-md-3 col-sm-5">   
                    <div class="checkbox" style="width:230px;">
                        <span style="color:#e20011;"><input type="checkbox" id="public" name="optradio" >Autorizo que o postal seja público</span>
                    </div>
                </div>
            </div>           
            <div class="row" align="center" id="mobile_scrollbar" style="position:relative;" >
                <div class="col-md-12">           
                    <table style=" width: 250px;">
                        <tr>
                            <td>
                                <img onClick="diminuirBarra('false');" src="img/icons/menos.png" width="40px">
                            </td>
                            <td style="padding-top: 15px;">
                                <div class="progress" style="width: 200px; height:10px;border: 2px solid #e20011;border-radius: 100px;">
                                <div class="progress-bar progress-bar-danger progress-bar-striped" id='scroll_2' role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="height: 100%;width:0%;barckground-color:#FE0404"></div></div>
                            </td>
                            <td>
                                <img onClick="aumentarBarra('false');" src="img/icons/mais.png" width="40px">
                            </td>
                        </tr>
                    </table>                     
                    <div class="checkbox" style="width:230px;">
                      <label style="color:#e20011;"><input type="checkbox" id="public" name="optradio" >Autorizo que o postal seja público</label>
                    </div>
                </div>                            
            </div>
            <div class="row" align='center' id="mobile_scrollbar" >
                <div class="col-md-12">   
                    <button type="submit" id="enviar_btn" class="input-group btn btn-default btn-file form-control" style="background-color: #ffffff; font-family: frutigerltstd-light-webfont;font-size:12pt;margin-bottom: 5px;text-align:left; vertical-align: middle;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important;max-width:400px;border-width: 2px !important;border-style: solid;border-color: #e20011;color:#e20011;height:65px; width:120px"  onClick="location.href=returnURL();">
                        <span style="line-height:3">F<span style="text-transform:lowercase;">inalizar</span></span>                                     
                        <img src="img/icons/seta_seguinte.png" width="20px">                          
                    </button> 
                    <!-- <div type="button" class="input-group btn btn-default btn-file form-control" style="background-color: #ffffff; font-family: frutigerltstd-light-webfont;font-size:12pt;margin-bottom: 5px;text-align:left; vertical-align: middle;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important;width:100%;border-width: 2px !important;border-color: #e20011;color:#FF0000;height:65px;" onmouseover="this.color='#ffffff'" onmouseout="this.color='#e20011'">
                         <span style="line-height:3">S<span style="text-transform:lowercase;">eguinte</span></span> 
                          <span class="input-group-addon" aria-hidden="true" style="padding: 0px 0px; ;color:#FF0000;background:none;border: none; line-height: 0;">
                                <img src="img/icons/seta_seguinte.png">
                            </span>
                    </div> -->
                    
                </div>
            </div>            
	   </div>		      
	</section>	
</div>
<script src="fabric.js"></script>
<script style="text/javascript">
    $('.progress-bar').css({
        'background-image': 'none',
        'background-color': '#e20011'
    });

    var id=1;
    function aumentarBarra(isVertical){
        var value=0;
        var new_value = 0;
        if(isVertical=='true')
        {
            value=parseInt(document.getElementById('scroll_1').style.height) ;
            document.getElementById('scroll_1').style.height = (value<100)?value+25+'%' : value+'%';
            new_value = parseInt(document.getElementById('scroll_1').style.height) ;
        }
        else{
            value=parseInt(document.getElementById('scroll_2').style.width) ;
            document.getElementById('scroll_2').style.width = (value<100)?value+25+'%' : value+'%';
            new_value = parseInt(document.getElementById('scroll_2').style.width) ;
        }
        if(new_value!=value){
            switch(new_value) {                
                case 25:
                    id=2; 
                    document.getElementById('elemento1').style.display="block";
                    document.getElementById('elemento2').style.display="none";
                    document.getElementById('elemento3').style.display="none";
                    document.getElementById('elemento4').style.display="none";
                    document.getElementById('elemento5').style.display="none";                    
                    break;
                case 50:
                    id=3;
                    document.getElementById('elemento1').style.display="block";
                    document.getElementById('elemento2').style.display="block";
                    document.getElementById('elemento3').style.display="none";
                    document.getElementById('elemento4').style.display="none";
                    document.getElementById('elemento5').style.display="none";                    
                    break;
                case 75:
                    id=4;
                    document.getElementById('elemento1').style.display="block";
                    document.getElementById('elemento2').style.display="block";
                    document.getElementById('elemento3').style.display="block";
                    document.getElementById('elemento4').style.display="block";
                    document.getElementById('elemento5').style.display="none";                    
                    break;
                case 100:
                    id=5;
                    document.getElementById('elemento1').style.display="block";
                    document.getElementById('elemento2').style.display="block";
                    document.getElementById('elemento3').style.display="block";
                    document.getElementById('elemento4').style.display="block";
                    document.getElementById('elemento5').style.display="block";                    
                    break;
                default:
                    break;
            }
        }         
    }

    function diminuirBarra(isVertical){
        
        var value=0;
        var new_value = 0;
        if(isVertical=='true')
        {
            value=parseInt(document.getElementById('scroll_1').style.height) ;
            document.getElementById('scroll_1').style.height = (value>0)?value-25+'%' : value+'%';
            new_value = parseInt(document.getElementById('scroll_1').style.height) ;
        }
        else{
            value=parseInt(document.getElementById('scroll_2').style.width) ;
            document.getElementById('scroll_2').style.width = (value>0)?value-25+'%' : value+'%';
            new_value = parseInt(document.getElementById('scroll_2').style.width) ;
        }

        if(new_value!=value){
            switch(new_value) {                
                case 75:
                    id=4;
                    document.getElementById('elemento1').style.display="block";
                    document.getElementById('elemento2').style.display="block";
                    document.getElementById('elemento3').style.display="block";
                    document.getElementById('elemento4').style.display="block";
                    document.getElementById('elemento5').style.display="none"; 
                    break;
                case 50:
                    id=3;
                    document.getElementById('elemento1').style.display="block";
                    document.getElementById('elemento2').style.display="block";
                    document.getElementById('elemento3').style.display="none";
                    document.getElementById('elemento4').style.display="none";
                    document.getElementById('elemento5').style.display="none";             
                    break;
                case 25:
                    id=2; 
                    document.getElementById('elemento1').style.display="block";
                    document.getElementById('elemento2').style.display="none";
                    document.getElementById('elemento3').style.display="none";
                    document.getElementById('elemento4').style.display="none";
                    document.getElementById('elemento5').style.display="none";
                    break;
                case 0:
                    id=1; 
                    document.getElementById('elemento1').style.display="none";
                    document.getElementById('elemento2').style.display="none";
                    document.getElementById('elemento3').style.display="none";
                    document.getElementById('elemento4').style.display="none";
                    document.getElementById('elemento5').style.display="none";
                    break;
                default:
                    break;
            }
        }         
    }
    function returnURL()
    {
		var public = $("#public").is(':checked');
		<?php
			echo 'var url = "./upload/export.php?op=3&postal=" + id + "&id='.$_GET['id'].'&public=" + public;';
			echo "return url;"
		?>
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
</body>
</html>