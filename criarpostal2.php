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

#demo1 {
    margin: 15px auto;
}

#demo1 .als-item {
    margin: 5px 5px;
    padding: 4px 0px;
    min-height: 80px;
    min-width: 80px;
    vertical-align: middle;
}

#demo1 .als-item img {
    display: block;
    margin: 0 auto;
    vertical-align: middle;
}

#demo1 .als-prev, #demo1 .als-next {
    top: 15px;
}

#demo1 .als-prev {
    left: 0px;
}

#demo1 .als-next {
    right: 0px;
}


#demo2 {
    margin: 15px auto;
}

#demo2 .als-item {
    margin: 5px 5px;
    padding: 4px 0px;
    min-height: 80px;
    min-width: 80px;
    text-align: center;
}

#demo2 .als-item img {
    display: block;
    margin: 0 auto;
    vertical-align: middle;
}

#demo2 .als-prev, #demo2 .als-next {
    top: 15px;
}

#demo2 .als-prev {
    left: 0px;
}

#demo2 .als-next {
    right: 0px;
}

#demo3 {
    margin: 15px auto;
}

#demo3 .als-item {
    margin: 5px 5px;
    padding: 4px 0px;
    min-height: 80px;
    min-width: 80px;
    text-align: center;
}

#demo3 .als-item img {
    display: block;
    margin: 0 auto;
    vertical-align: middle;
}

#demo3 .als-prev, #demo3 .als-next {
    top: 15px;
}

#demo3 .als-prev {
    left: 0px;
}

#demo3 .als-next {
    right: 0px;
}
/**************/

/*
new Darkroom('#target', {
  minWidth: 100,
  minHeight: 100,
  maxWidth: 500,
  maxHeight: 500,

  // Plugins options
  plugins: {
    crop: {
      minHeight: 50,
      minWidth: 50,
      ratio: 1
    },
    save: false // disable plugin
  },
})*/;


/*#bt-exportAndSaveCanvas:hover{
     background: #e20011;
}*/



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
        var screenshot = Canvas2Image.saveAsPNG(canvas, true);
        // This is a little trick to get the SRC attribute from the generated <img> screenshot
        canvas.parentNode.appendChild(screenshot);
        screenshot.id = "canvasimage";      
        data = $('#canvasimage').attr('src');
        canvas.parentNode.removeChild(screenshot);
        // Send the screenshot to PHP to save it on the server        
		<?php
			//echo "runImageScroller('".$_GET['id']."');";
			echo "var url = 'upload/export.php?op=2&id=".$_GET['id']."';";
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
                location.href='criarpostal3.php?id='+data;
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
<body onload="init();showElementsOf('cara');">

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

            <div class="col-xs-12 col-sm-12 col-md-3 col-md-offset-1" align="center" style="position:relative; style="margin-top: 25px"">
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
                          <span style="font-family: frutigerltstd-light-webfont;font-size:12pt;color:#e20011;">Escolha o elemento decorativo.</span>
                      </div>    
                    </div>

                    <div class="row" style="margin-bottom: 10px;">
                      <div class="col-md-2 col-sm-2">
                          <img src="img/numbers/2.png">
                      </div>    
                      <div class="col-md-10 col-sm-10">
                          <span style="font-family: frutigerltstd-light-webfont;font-size:12pt;color:#e20011;">Clique no icone para adicionar à foto e edite a seu gosto</span>
                      </div>    
                    </div>                    
                    <div class="row">
                      <div class="col-md-2 col-sm-2">
                          <img src="img/numbers/3.png">
                      </div>    
                      <div class="col-md-10 col-sm-10">
                          <span style="font-family: frutigerltstd-light-webfont;font-size:12pt;color:#e20011;padding-top:5px;">Clique <span style="font-size:14pt;"><strong>seguinte</strong></span> para avançar para o próximo passo.</span>
                      </div>    
                    </div>
                    
                     <button type="button" class="btn btn-default" id="cara" style="width:100%;text-align:left;border-color:#e20011;color:#e20011;border-width: 2px !important;border-color: #e20011;color:#FF0000;height:65px;" onClick="showElementsOf('cara');">
                          <span style="font-family: frutigerltstd-light-webfont;font-size:12pt;">C<span style="text-transform:lowercase;">ara</span></span>
                      </button></br>
                      <button type="button" class="btn btn-default" id="vestuario" style="width:100%;text-align:left;border-color:#e20011;color:#e20011;margin-top:5px;border-width: 2px !important;border-color: #e20011;color:#FF0000;height:65px;" onClick="showElementsOf('vestuario');">
                          <span style="font-family: frutigerltstd-light-webfont;font-size:12pt;">V<span style="text-transform:lowercase;">estuário</span></span>
                      </button></br>
                      <button type="button" class="btn btn-default" id="decoracao" style="width:100%;text-align:left;border-color:#e20011;color:#e20011;margin-top:5px;border-width: 2px !important;border-color: #e20011;color:#FF0000;height:65px;" onClick="showElementsOf('decoracao');">
                          <span style="font-family: frutigerltstd-light-webfont;font-size:12pt;">D<span style="text-transform:lowercase;">ecoração</span></span>                          
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

        
            <!-- <div class="row">                          
                Clique sobre o elemento que deseja adicionar:<br/>
                <input type="button" value="Remover o elemento seleccionado" id="bt-clearBtn2" >
                <input type="button" value="Remover todos os elementos" id="bt-clearBtn" >
            </div> -->
        </br></br></br></br></br></br></br></br>
	   </div>		
 
	</section>	
    <div id="footer" style="height:90px">
            <div class="row"> 
                <div class="col-xs-12 col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3" style="color:white" >    
                    <div class="als-container" id="demo1">
                    <span class="als-prev"><img src="img/arrows/thin_left_arrow_333.png" alt="prev" title="previous" ></span>
                      <div class="als-viewport">
                        <ul class="als-wrapper" style="vertical-align: middle;">
                          <li class="als-item"><img src="img/cara/Barba-1.png" width="50"  id="bt-image1"></li>
                          <li class="als-item"><img src="img/cara/Barba-2.png" width="50" id="bt-image2"></li>
                          <li class="als-item"><img src="img/cara/Barba-Azul.png" width="50" id="bt-image3" ></li>
                          <li class="als-item"><img src="img/cara/Barba-e-Sobrancelhas.png" width="50" id="bt-image4" ></li>
                          <li class="als-item"><img src="img/cara/Bigode-Branco.png" width="50" id="bt-image5"></li>
                          <li class="als-item"><img src="img/cara/Bigode-e-Nariz.png" width="50" id="bt-image6"></li>
                          <li class="als-item"><img src="img/cara/Nariz-Boneco-Neve.png" width="50" id="bt-image7"></li>
                          <li class="als-item"><img src="img/cara/Nariz-Rena.png" width="50" id="bt-image8" ></li>
                          <li class="als-item"><img src="img/cara/Olhos.png" width="50" id="bt-image9"></li>              
                          <li class="als-item"><img src="img/cara/Orelhas-Elfo.png" width="50" id="bt-image10" /></li>
                          <li class="als-item"><img src="img/cara/rena.png" width="50" id="bt-image11" /></li>              
                          <li class="als-item"><img src="img/cara/Rosas-Cara.png" width="50" id="bt-image12" /></li>
                          <li class="als-item"><img src="img/cara/Sobrancelhas.png" width="50" id="bt-image13" /></li>
                          <li class="als-item"><img src="img/cara/Urso-2.png" width="50" id="bt-image14" /></li>              
                          <li class="als-item"><img src="img/cara/Urso.png" width="50" id="bt-image15" /></li>              
                        </ul>       
                      </div>
                      <span class="als-next"><img src="img/arrows/thin_right_arrow_333.png" alt="next" title="next" ></span>
                    </div>

                    <div class="als-container" id="demo2">
                      <span class="als-prev"><img src="img/arrows/thin_left_arrow_333.png" alt="prev" title="previous" ></span>
                      <div class="als-viewport">
                        <ul class="als-wrapper" id="decor">
                          <li class="als-item"><img src="img/decor/Arvore.png" width="35" id="bt-image16" /></li>
                          <li class="als-item"><img src="img/decor/Bandeirinhas.png" width="50" id="bt-image17" /></li>
                          <li class="als-item"><img src="img/decor/Bengalas.png" width="50" id="bt-image18" /></li>
                          <li class="als-item"><img src="img/decor/Biscoito.png" width="50" id="bt-image19" /></li>
                          <li class="als-item"><img src="img/decor/Bola-Natal.png" width="50" id="bt-image20" /></li>
                          <li class="als-item"><img src="img/decor/Bolas-Natal.png" width="50" id="bt-image21" /></li>
                          <li class="als-item"><img src="img/decor/Cena.png" width="50" id="bt-image22" /></li>
                          <li class="als-item"><img src="img/decor/Coroa-Natal.png" width="50" id="bt-image23" /></li>
                          <li class="als-item"><img src="img/decor/Estrela-Natal.png" width="50" id="bt-image24" /></li>
                          <li class="als-item"><img src="img/decor/Estrelas.png" width="50" id="bt-image25" /></li>
                          <li class="als-item"><img src="img/decor/Floco-Neve-1.png" width="50" id="bt-image26" /></li>
                          <li class="als-item"><img src="img/decor/Floco-Neve-2.png" width="50" id="bt-image27" /></li>
                          <li class="als-item"><img src="img/decor/Meia.png" width="45" id="bt-image28" /></li>
                          <li class="als-item"><img src="img/decor/Pai-Natal-Treno.png" width="50" id="bt-image29" /></li>
                          <li class="als-item"><img src="img/decor/Sino.png" width="50"  id="bt-image30" /></li>
                          <li class="als-item"><img src="img/decor/Sinos.png" width="50" id="bt-image31" /></li>
                          <li class="als-item"><img src="img/decor/Vela.png" width="50" id="bt-image32" /></li>
                        </ul>
                      </div>
                      <span class="als-next"><img src="img/arrows/thin_right_arrow_333.png" alt="next" title="next"></span>
                    </div>




                    <div class="als-container" id="demo3">
                      <span class="als-prev"><img src="img/arrows/thin_left_arrow_333.png" alt="prev" title="previous"></span>

                      <div class="als-viewport">
                        <ul class="als-wrapper" id="vestuario">
                          <li class="als-item"><img src="img/vestuario/Cachecol-1.png" width="50"  id="bt-image33" /></li>
                          <li class="als-item"><img src="img/vestuario/Cachecol-2.png" width="50" id="bt-image34" /></li>
                          <li class="als-item"><img src="img/vestuario/Camisola-1.png" width="50" id="bt-image35" /></li>
                          <li class="als-item"><img src="img/vestuario/Camisola-2.png" width="50"  id="bt-image36" /></li>
                          <li class="als-item"><img src="img/vestuario/Chapeu-1.png" width="50"  id="bt-image37" /></li>
                          <li class="als-item"><img src="img/vestuario/Chapeu-2.png" width="50"  id="bt-image38" /></li>
                          <li class="als-item"><img src="img/vestuario/Chapeu-Boneco-Neve.png" height="50" id="bt-image39" /></li>
                          <li class="als-item"><img src="img/vestuario/Chapeu-Coracao.png" width="50"  id="bt-image40" /></li>
                          <li class="als-item"><img src="img/vestuario/Chapeu-Elfo.png" width="50" id="bt-image41" /></li>
                          <li class="als-item"><img src="img/vestuario/Chapeu-Rena-2.png" width="50" id="bt-image42" /></li>
                          <li class="als-item"><img src="img/vestuario/Chapeu-Rena.png" width="50" id="bt-image43" /></li>
                          <li class="als-item"><img src="img/vestuario/Gorro.png" width="50" id="bt-image44" /></li>
                          <li class="als-item"><img src="img/vestuario/Laco.png" width="50" id="bt-image45" /></li>
                          <li class="als-item"><img src="img/vestuario/Luva-Dir.png" width="50" id="bt-image46" /></li>
                          <li class="als-item"><img src="img/vestuario/Luva-Esq.png" width="50" id="bt-image47" /></li>
                          <li class="als-item"><img src="img/vestuario/Luvas-2.png" width="50" id="bt-image48" /></li>
                        </ul>
                       </div>
                       <span class="als-next"><img src="img/arrows/thin_right_arrow_333.png" alt="next" title="next"></span>
                    </div>
                        
                    <div class="elements" hidden>
                        <!-- CARA -->
                      <img src="img/cara/Barba-1.png" id="my-image1">
                      <img src="img/cara/Barba-2.png" id="my-image2">
                      <img src="img/cara/Barba-Azul.png" id="my-image3">
                      <img src="img/cara/Barba-e-Sobrancelhas.png" id="my-image4">
                      <img src="img/cara/Bigode-Branco.png" id="my-image5">
                      <img src="img/cara/Bigode-e-Nariz.png" id="my-image6">
                      <img src="img/cara/Nariz-Boneco-Neve.png" id="my-image7">
                      <img src="img/cara/Nariz-Rena.png" id="my-image8">
                      <img src="img/cara/Olhos.png" id="my-image9">
                      <img src="img/cara/Orelhas-Elfo.png" id="my-image10">
                      <img src="img/cara/rena.png" id="my-image11">
                      <img src="img/cara/Rosas-Cara.png" id="my-image12">
                      <img src="img/cara/Sobrancelhas.png" id="my-image13">
                      <img src="img/cara/Urso-2.png" id="my-image14">
                      <img src="img/cara/Urso.png" id="my-image15">

                      <!-- DECOR -->
                      <img src="img/decor/Arvore.png" id="my-image16">
                      <img src="img/decor/Bandeirinhas.png" id="my-image17">
                      <img src="img/decor/Bengalas.png" id="my-image18">
                      <img src="img/decor/Biscoito.png" id="my-image19">
                      <img src="img/decor/Bola-Natal.png" id="my-image20">
                      <img src="img/decor/Bolas-Natal.png" id="my-image21">
                      <img src="img/decor/Cena.png" id="my-image22">
                      <img src="img/decor/Coroa-Natal.png" id="my-image23">
                      <img src="img/decor/Estrela-Natal.png" id="my-image24">
                      <img src="img/decor/Estrelas.png" id="my-image25">
                      <img src="img/decor/Floco-Neve-1.png" id="my-image26">
                      <img src="img/decor/Floco-Neve-2.png" id="my-image27">
                      <img src="img/decor/Meia.png" id="my-image28">
                      <img src="img/decor/Pai-Natal-Treno.png" id="my-image29">
                      <img src="img/decor/Sino.png" id="my-image30">
                      <img src="img/decor/Sinos.png" id="my-image31">
                      <img src="img/decor/Vela.png" id="my-image32">

                        <!-- VESTUARIO -->
                      <img src="img/vestuario/Cachecol-1.png" id="my-image33" />
                      <img src="img/vestuario/Cachecol-2.png" id="my-image34" />
                      <img src="img/vestuario/Camisola-1.png" id="my-image35" />
                      <img src="img/vestuario/Camisola-2.png" id="my-image36" />
                      <img src="img/vestuario/Chapeu-1.png" id="my-image37" />
                      <img src="img/vestuario/Chapeu-2.png" id="my-image38" />
                      <img src="img/vestuario/Chapeu-Boneco-Neve.png" id="my-image39" />
                      <img src="img/vestuario/Chapeu-Coracao.png" id="my-image40" />
                      <img src="img/vestuario/Chapeu-Elfo.png" id="my-image41" />
                      <img src="img/vestuario/Chapeu-Rena-2.png" id="my-image42" />
                      <img src="img/vestuario/Chapeu-Rena.png" id="my-image43" />
                      <img src="img/vestuario/Gorro.png" id="my-image44" />
                      <img src="img/vestuario/Laco.png" id="my-image45" />
                      <img src="img/vestuario/Luva-Dir.png" id="my-image46" />
                      <img src="img/vestuario/Luva-Esq.png" id="my-image47" />
                      <img src="img/vestuario/Luvas-2.png" id="my-image48" />
                      
                    </div>
                </div>                
            </div>
        </div>
    </div> <!-- END FOOTEr-->
</div>


<script src="fabric.js"></script>
    <script style="text/javascript">

    
 if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) 
 {

    // document.getElementsByClassName('als-prev')[0].style.left='10px';       
    // document.getElementsByClassName('als-next')[0].style.right='10px';  

    // document.getElementsByClassName('als-prev')[1].style.left='10px';       
    // document.getElementsByClassName('als-next')[1].style.right='10px';  

    // document.getElementsByClassName('als-prev')[2].style.left='10px';           
    // document.getElementsByClassName('als-next')[2].style.right='10px';  

    // document.getElementById('info_criaPostal').className='col-xs-12';


       $("#demo1").als({
            visible_items: 2,
            scrolling_items: 1,
            orientation: "horizontal",
            circular: "no",
            autoscroll: "no"
        });
        $("#demo2").als({
            visible_items: 2,
            scrolling_items: 1,
            orientation: "horizontal",
            circular: "no",
            autoscroll: "no"
        });
        $("#demo3").als({
            visible_items: 2,
            scrolling_items: 1,
            orientation: "horizontal",
            circular: "no",
            autoscroll: "no"
        });

    }
    else if(/iPad/i.test(navigator.userAgent))
    {
        $("#demo1").als({
            visible_items: 3,
            scrolling_items: 2,
            orientation: "horizontal",
            circular: "no",
            autoscroll: "no"
        });
        $("#demo2").als({
            visible_items: 3,
            scrolling_items: 2,
            orientation: "horizontal",
            circular: "no",
            autoscroll: "no"
        });
        $("#demo3").als({
            visible_items: 3,
            scrolling_items: 2,
            orientation: "horizontal",
            circular: "no",
            autoscroll: "no"
        });
    }
    else
    {
      $("#demo1").als({
            visible_items: 5,
            scrolling_items: 4,
            orientation: "horizontal",
            circular: "no",
            autoscroll: "no"
        });  
      $("#demo2").als({
            visible_items: 5,
            scrolling_items: 4,
            orientation: "horizontal",
            circular: "no",
            autoscroll: "no"
        });  
      $("#demo3").als({
            visible_items: 5,
            scrolling_items: 4,
            orientation: "horizontal",
            circular: "no",
            autoscroll: "no"
        });  
    }

 
function showElementsOf(x)
{
  if (x=='cara'){
    // demo1
    setButtonSelected(true,'cara');
    setButtonSelected(false,'vestuario');
    setButtonSelected(false,'decoracao');

    document.getElementById('demo1').hidden=false;
    document.getElementById('demo2').hidden=true;
    document.getElementById('demo3').hidden=true;
  

  }
  else if (x=='vestuario'){
    // demo3
    setButtonSelected(false,'cara');
    setButtonSelected(true,'vestuario');
    setButtonSelected(false,'decoracao');

    document.getElementById('demo1').hidden=true;
    document.getElementById('demo2').hidden=true;
    document.getElementById('demo3').hidden=false;

  }
  else if (x=='decoracao'){
    // demo2
    setButtonSelected(false,'cara');
    setButtonSelected(false,'vestuario');
    setButtonSelected(true,'decoracao');

    document.getElementById('demo1').hidden=true;
    document.getElementById('demo2').hidden=false;
    document.getElementById('demo3').hidden=true;
  }
  else {
    // should not be here
    // console.log('bode');
  }

}
 
 function setButtonSelected(isSelected, id)
 {
    if(isSelected)
    {
        document.getElementById(id).style.background='#e20011'
        document.getElementById(id).style.color='white'
    }
    else
    {
        document.getElementById(id).style.background='white'
        document.getElementById(id).style.color='#e20011'
    }
 }   
        
    </script> 



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
<?php
//echo "<input type='hidden' id='postal-guid' value=".$_GET['id']." >"
//echo "<img src='upload/backup/".$_GET['id']."/upload.png' alt='DomoKun' id='canvas' height='300px' width='300px'>";
?>
<script>
<?php
	echo "runImageScroller('".$_GET['id']."');";
?>
</script>
<!-- Pictures  desktop-->
<script src="libs/export_canvas/base64.js" type="text/javascript"></script>
<script src="libs/export_canvas/canvas2image.js" type="text/javascript"></script>
<script src="http://code.createjs.com/easeljs-0.5.0.min.js"></script>

<!-- <script src="http://code.jquery.com/jquery-1.8.2.js"></script> -->




</body>
</html>