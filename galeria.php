<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<title>Vulcano - Postal de Natal</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta http-equiv="Pragma" content="no-cache">
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<link href="skins/default.css" rel="stylesheet" />

<link href="img/favicon.ico" rel="Shortcut Icon">

<script src="js/jquery.js"></script>
<script src="js/jquery.als-1.7.min.js"></script>
<style type="text/css">
    body {
        
        background: #FFFFFF; 
        min-height: 100%;
        width: 100%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    

	.img_hover {
		padding: 0px;
		position: relative;
		text-decoration:none;
		overflow: hidden;
		float: left;
		cursor: pointer;
	}

	.img_hover:hover .img_img_hover {
		display: block;
	}

	.img_img_hover {
		position: absolute;

		right:20px; 
		bottom:20px;
		width: 25px;
		height: 25px;
		background: url(img/mais_galeria.png);
		display: none;
	}

	.img_hover:hover:before {
		content: "";
		display: block;
		position: absolute;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
		background: rgba(255,0,0, 0.7);
		-moz-transition: background .3s linear;
		-webkit-transition: background .3s linear;
		-o-transition: background .3s linear;
		transition: background .3s linear;
	}

	.img_hover:before {
		background: none;
	}


</style>
</head>
<body>
<div id="wrapper" style="width: 100%;">
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
                <div class="navbar-collapse collapse "  align="center">
                    <ul class="nav navbar-nav" align="center">
                        <li style="height:70px;width:150px;border-left: 1px solid #3F3F3F;border-left-width: thin;" align="center"><a href="index.php" style="color:#FFFFFF;margin-left:0px">H<span style="text-transform:lowercase;">ome</span></a></li>
                        <li style="height:70px;width:150px;border-left: 1px solid #3F3F3F;border-left-width: thin;" align="center"><a href="criarpostal.php" style="color:#FFFFFF;margin-left:0px">C<span style="text-transform:lowercase;">riar Postal</span></a></li>
                        <li class="active" style="height:70px;width:150px;border-bottom: thick solid #3a4d98;border-left: 1px solid #3F3F3F;border-left-width: thin;" align="center"><a href="galeria.php" style="color:#FFFFFF;margin-left:0px">G<span style="text-transform:lowercase;">aleria</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <section style="width: 100%;padding: 0 0 0 0;padding-left:0;padding-right:0;">
        <div style="width: 100%;padding: 0 0 0 0;margin-right: 0;margin-left: 0;padding-left: 0;padding-right: 0;">
            <div class="row" style="margin-bottom: 0px;width:100%;"><p>&nbsp;</p></div>
            <div class="row" style="width: 100%; margin-left:0px;margin-right:0px;margin-bottom: 0px;margin-top:10px">
				<?php
					include('function.php');
					$sql='SELECT * from postal where public = 1;';
					$result=mysql_query($sql) or debug_die("Erro: ".mysql_error().':'.$sql);
					while($row = mysql_fetch_assoc($result))
					{
						echo '<div class="col-md-2 col-sm-3 col-xs-4 img_hover" style="padding: 0px; align:center;" onClick="location.href=\'postal.php?id='.$row['guid'].'\'"><img style="padding: 0px; width:100%; height:100%;" class="img-responsive" src="upload/backup/'.$row['guid'].'/upload_1.png" /><div class="img_img_hover"></div></div>';
					} 
				?>
			
            </div>
            
        </div>

	</section>	
</div>
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
<script src="libs/export_canvas/base64.js" type="text/javascript"></script>
<script src="libs/export_canvas/canvas2image.js" type="text/javascript"></script>
<script src="http://code.createjs.com/easeljs-0.5.0.min.js"></script>
</body>
</html>