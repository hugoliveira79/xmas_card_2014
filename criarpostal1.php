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

/* Set the fixed height of the footer here */
#footer {
    background:#E0E0E0;
    position:fixed;
    left: 0;
    bottom:0px;
    margin-bottom:0px;
    width: 100%;
    height:150px;

}

<!-- EXPORT TO PHP STUFF-->
    #canvas{
        border:1px solid #CCCCCC;
        width: 1000px;
        height: 800px;
    } 

    .elements{
        display: none;
    }


/**************/
/*************************************
 * generic styling for ALS elements
 ************************************/

.als-container {
    position: relative;
    width: 100%;
    margin: 0px auto;
    z-index: 0;
}

.als-viewport {
    position: relative;
    overflow: hidden;
    margin: 0px auto;
}

.als-wrapper {
    position: relative;
    list-style: none;
}

.als-item {
    position: relative;
    display: block;
    text-align: center;
    cursor: pointer;
    float: left;
    vertical-align: :middle;
}

.als-prev, .als-next {
    position: absolute;
    cursor: pointer;
    clear: both;
}
/*************************************
 * specific styling for #demo1
 ************************************/


.als-viewport ul li{

  display: table-cell;
  vertical-align: middle;
}

.als-viewport ul li img {
            display:table-cell;
            vertical-align: middle;
}


.outsideWrapper {
      width:300px;
      height:300px;
      /*margin:20px 60px;*/
      /*border:1px solid blue;*/
  }
  .insideWrapper {
      width:300px;
      height:300px;
      position:relative;
  }
  .coveredImage {
      width:115%;
      height:107%;
      position:absolute;
      top:0px;
      left:-23px;
  }
  .coveringCanvas {
      width:100%;
      height:100%;
      position:absolute;
      top:0px;
      left:0px;
  }

</style>

<!--  EXPORT TO PHP STUFF-->

<script type="text/javascript">
    
    var canvas;
    var stage;

    /**
     * Init 
     */
    function init() {
        
        canvas = document.getElementById("canvas");
        stage = new createjs.Stage(canvas);

        // Enable touch support
        if (createjs.Touch.isSupported()) { createjs.Touch.enable(stage); }
        
    }

    /**
     * Enable drag'n'drop on DisplayObjects
     */
    enableDrag = function (item) {

        // OnPress event handler
        item.onPress = function(evt) {

            var offset = {  x:item.x-evt.stageX, 
                            y:item.y-evt.stageY};

            // Bring to front
            stage.addChild(item);

            // Mouse Move event handler
            evt.onMouseMove = function(ev) {
                
                item.x = ev.stageX+offset.x;
                item.y = ev.stageY+offset.y;
                stage.update();
            }
        }
    }

    /**
     * Export and save the canvas as PNG 
     */
    function exportAndSaveCanvas()  {
        // Get the canvas screenshot as PNG
        var screenshot = Canvas2Image.saveAsJPEG(canvas, true);
        // This is a little trick to get the SRC attribute from the generated <img> screenshot
        canvas.parentNode.appendChild(screenshot);
        screenshot.id = "canvasimage";      
        data = $('#canvasimage').attr('src');
        canvas.parentNode.removeChild(screenshot);
        // Send the screenshot to PHP to save it on the server        
		<?php
			//echo "runImageScroller('".$_GET['id']."');";
			echo "var url = 'upload/export.php?op=4&id=".$_GET['id']."';";
		?>
		
        $.ajax({ 
            type: "POST", 
            url: url,
            dataType: 'text',
            data: {
                base64data : data
            },
            timeout: 30000,
            error: function(){
                return true;
            },
            success: function(data){ 
                location.href='criarpostal2.php?id='+data;
            }
        });
    }

    /**
     * Export and display the canvas as PNG in a new wind   ow
     */
    function exportAndView()  {
        var screenshot = Canvas2Image.saveAsPNG(canvas, true);
        var win = window.open();
        $(win.document.body).html(screenshot);
    }


</script>
</script>
</head>
<body onload="init();">

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
	
	        <div class="row clearfix">             
	            <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-1" align="center" style="position:relative;margin-top: 25px">
                <div class="outsideWrapper">
                  <div class="insideWrapper">
                      <img src="img/sombraFoto.png" class="coveredImage">
                      <canvas id="canvas" height="300px" width="300px" ></canvas>
                      <!-- <canvas id="canvas" class="coveringCanvas"></canvas> -->
                  </div>
                </div>
              </div>
		        
	           <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2" style="margin-top: 25px">
                <div class="row" style="margin-bottom: 10px;">
                      <div class="col-md-2 col-sm-2">
                          <img src="img/numbers/1.png" >
                      </div>    
                      <div class="col-md-10 col-sm-10" style="margin-top:6px">
                          <span style="font-family: frutigerltstd-light-webfont;font-size:12pt;color:#e20011;">Ajuste a foto a seu gosto</span>
                      </div>    
                    </div>

                    <div class="row" style="margin-bottom: 10px;">
                      <div class="col-md-2 col-sm-2">
                          <img src="img/numbers/2.png">
                      </div>    
                      <div class="col-md-10 col-sm-10">
                          <span style="font-family: frutigerltstd-light-webfont;font-size:12pt;color:#e20011;">Clique <span style="font-size:14pt;"><strong>seguinte</strong></span> para avançar para o próximo passo</span>
                      </div>    
                    </div>
	                    
	                    </br>
	
	                    <button type="button" class="btn btn-default" id="bt-rodar" style="margin-bottom: 5px;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important;width:100%;border-width: 2px !important; height:65px;width:100%;text-align:left;border: solid #e20011;color:#e20011" >
	                    	<span style="font-family: frutigerltstd-light-webfont;font-size:12pt;">R<span style="text-transform:lowercase;">odar</span></span>
	                   	</button></br>
	                    <button type="button" class="btn btn-default" id="bt-aumentar" style="margin-bottom: 5px;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important;width:100%;border-width: 2px !important; height:65px;width:100%;text-align:left;border: solid #e20011;color:#e20011" >
	                    	<span style="font-family: frutigerltstd-light-webfont;font-size:12pt;">A<span style="text-transform:lowercase;">umentar</span></span>
	                    </button></br>
	                    <button type="button" class="btn btn-default" id="bt-diminuir" style="margin-bottom: 5px;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important;width:100%;border-width: 2px !important; height:65px;width:100%;text-align:left;border: solid #e20011;color:#e20011" >	                    	
                        <span style="font-family: frutigerltstd-light-webfont;font-size:12pt;">D<span style="text-transform:lowercase;">iminuir</span></span>
	                    </button>
	                    </br></br></br>
                      <div type="button" class="input-group btn btn-default btn-file form-control" id="bt-exportAndSaveCanvas" style="background-color: #ffffff; font-family: frutigerltstd-light-webfont;font-size:12pt;margin-bottom: 5px;text-align:left; vertical-align: middle;-webkit-border-radius: 3px !important;-moz-border-radius: 3px !important;border-radius: 3px !important;width:100%;border-width: 2px !important;border-color: #e20011;color:#FF0000;height:65px;" onmouseover="this.color='#ffffff'" onmouseout="this.color='#e20011'" onclick="exportAndSaveCanvas()">
                         <span style="line-height:3">S<span style="text-transform:lowercase;">eguinte</span></span> 
                          <span class="input-group-addon" aria-hidden="true" style="padding: 0px 0px; ;color:#FF0000;background:none;border: none; line-height: 0;">
                              <img src="img/icons/seta_seguinte.png">
                          </span>
                      </div> 
	            </div>	            
	        </div>	        	        
	   </div>		
	</section>	
</div>

<script src="fabric.js"></script>


<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

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

<script src="js/images_scroller.js"></script>

<script>
<?php
	echo "runImageResizer('".$_GET['id']."');";
?>
</script>
<!-- Pictures  desktop-->
<script src="libs/export_canvas/base64.js" type="text/javascript"></script>
<script src="libs/export_canvas/canvas2image.js" type="text/javascript"></script>
<script src="http://code.createjs.com/easeljs-0.5.0.min.js"></script>

<!-- <script src="http://code.jquery.com/jquery-1.8.2.js"></script> -->




</body>
</html>