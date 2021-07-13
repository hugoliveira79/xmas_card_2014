var localMediaStream = null;
//var video = document.querySelector('video');
var canvas = document.getElementById("pictureCanvas");


function upload() {
    var base64 = document.querySelector('img').src;
    PageMethods.Upload(base64,
        function () { /* TODO: do something for success */ },
        function (e) { console.log(e); }
    );
}
function takePhoto() {
    if (localMediaStream) {
        var ctx = canvas.getContext('2d');
        drawImageScaledVideo(video, ctx);
        //ctx.drawImage(video, 0, 0, 320, 240); // original draw image
        //ctx.drawImage(video, 0, 0, 640, 480, 0, 0, 320, 240); // entire image

        //instead of
        //ctx.drawImage(video, 90, 40, 140, 190, 0, 0, 140, 190);

        // we double the source coordinates
        //ctx.drawImage(video, 180, 80, 280, 380, 0, 0, 140, 190);
        //ctx.drawImage(video, 85, 10, 450, 460, 0, 0, 450, 460);
//                document.querySelector('img').src = canvas.toDataURL('image/jpeg');
    }
}
navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
window.URL = window.URL || window.webkitURL;
function startCapture() {
    navigator.getUserMedia({ video: true }, function (stream) {
        video.src = window.URL.createObjectURL(stream);
        localMediaStream = stream;
    }, function (e) {
        console.log(e);
    });
}
function stopCapture() {video.pause();localMediaStream.stop();}

function exportAndSaveCanvas()  {
  $(".alert").hide();
	//stopCapture();    
    // Get the canvas screenshot as PNG
    var screenshot = Canvas2Image.saveAsJPEG(canvas, true);
    // This is a little trick to get the SRC attribute from the generated <img> screenshot
    canvas.parentNode.appendChild(screenshot);
    screenshot.id = "canvasimage";      
    data = $('#canvasimage').attr('src');
    canvas.parentNode.removeChild(screenshot);
    // Send the screenshot to PHP to save it on the server
	  var auxMensagem = {
			nome : $("#text").val(),
			mensagem: $("#mensagem").val(),
      base64data : data
    };

    var fotoPath = $('#take-picture').val();
  	if(auxMensagem.nome == "")
  	{
  		$('#seguePostal').removeClass("disabled");      
      $(".alert").find('#text_error').text("Deve inserir um nome");
      $(".alert").show();
  		return;
  	}
    else if(auxMensagem.mensagem == "")
    {
      $('#seguePostal').removeClass("disabled");      
      $(".alert").find('#text_error').text("Deve inserir uma mensagem");
      $(".alert").show();
      return;
    }
    else if (fotoPath == null || fotoPath == "" )
    {
      $('#seguePostal').removeClass("disabled");      
      $(".alert").find('#text_error').text("Deve inserir uma foto");
      $(".alert").show();
      return;
    }


  	//alert(auxMensagem.base64data);
  	if(auxMensagem.base64data == null || auxMensagem.base64data == "")
  	{
  		alert("Selecione uma imagem!");
  		return;
  	}
    $('#seguePostal').addClass("disabled");
    $.ajax({ 
        type: "POST", 
        url: 'upload/export.php?op=1',
        dataType: 'text',
        data: auxMensagem,
        timeout: 30000,
        error: function(){
            $('#seguePostal').addClass("disabled");
            return true;
        },
        success: function(data){
          if(data == 0){
              $('#seguePostal').removeClass("disabled");                
              $(".alert").find('#text_error').text("Erro a inserir postal");
              $(".alert").show();
          }
          else if(data == 1){          
              // nome
              $('#seguePostal').removeClass("disabled");
              $(".alert").find('#text_error').text("Nome inválido");
              $(".alert").show();
          }
          else if(data == 2){
              // mensagem
              $('#seguePostal').removeClass("disabled");
              $(".alert").find('#text_error').text("Mensagem inválida");
              $(".alert").show();
          }

          else if(data == 21){
                $('#seguePostal').removeClass("disabled");
                $(".alert").find('#text_error').text("Erro a inserir postal");
                $(".alert").show();
          }
          else if(data == 22){
                $(".alert").find('#text_error').text("Erro a inserir postal");
                $('#seguePostal').removeClass("disabled");
                $(".alert").show();
          }
          else{
                $('#seguePostal').removeClass("disabled");
                location.href='criarpostal1.php?id='+data;

          }          
	        
        }
    });
}
function drawImageScaled(img, ctx) {
   var canvas = ctx.canvas ;
   var hRatio = canvas.width  / img.width    ;
   var vRatio =  canvas.height / img.height  ;
   var ratio  = Math.min ( hRatio, vRatio );
   var centerShift_x = ( canvas.width - img.width*ratio ) / 2;
   var centerShift_y = ( canvas.height - img.height*ratio ) / 2;  
   ctx.clearRect(0,0,canvas.width, canvas.height);
   ctx.drawImage(img, 0,0, img.width, img.height, centerShift_x,centerShift_y,img.width*ratio, img.height*ratio);  
}

function drawImageScaled2(img, ctx) {
   var canvas = ctx.canvas ;
   var hRatio = canvas.width  / img.width    ;
   var vRatio =  canvas.height / img.height  ;
   var ratio  = Math.max ( hRatio, vRatio );
   var centerShift_x = ( canvas.width - img.width*ratio ) / 2;
   var centerShift_y = ( canvas.height - img.height*ratio ) / 2;  
   ctx.clearRect(0,0,canvas.width, canvas.height);
   ctx.drawImage(img, 0,0, img.width, img.height, centerShift_x,centerShift_y,img.width*ratio, img.height*ratio);  
}

function drawImageScaledVideo(img, ctx) {
   var canvas = ctx.canvas ;
   var hRatio = canvas.width  / img.videoWidth    ;
   var vRatio =  canvas.height / img.videoHeight  ;
   var ratio  = Math.min ( hRatio, vRatio );
   var centerShift_x = ( canvas.width - img.videoWidth*ratio ) / 2;
   var centerShift_y = ( canvas.height - img.videoHeight*ratio ) / 2;  
   ctx.clearRect(0,0,canvas.width, canvas.height);
   ctx.drawImage(img, 0,0, img.videoWidth, img.videoHeight,
                      centerShift_x,centerShift_y,img.videoWidth*ratio, img.videoHeight*ratio);  
}

        