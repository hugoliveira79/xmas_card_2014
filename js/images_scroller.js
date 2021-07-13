function runImageScroller(url)
{
        var canvas = this.__canvas = new fabric.Canvas('canvas');
        //var ctx = canvas.getContext("2d");
        img = new Image();
        img.src = "upload/backup/" + url + "/upload_0.png";   
        canvas.setBackgroundImage("upload/backup/" + url + "/upload_0.png", canvas.renderAll.bind(canvas), {
          width: canvas.width,
          height: canvas.height,
          
        });

        var animateBtn1 = document.getElementById('bt-image1');
        animateBtn1.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image1'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);
            canvas.add(elem);
            canvas.setActiveObject(elem);
            
        };

        var animateBtn2 = document.getElementById('bt-image2');
        animateBtn2.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image2'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);
            canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn3 = document.getElementById('bt-image3');
        animateBtn3.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image3'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn4 = document.getElementById('bt-image4');
        animateBtn4.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image4'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn5 = document.getElementById('bt-image5');
        animateBtn5.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image5'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn6 = document.getElementById('bt-image6');
        animateBtn6.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image6'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn7 = document.getElementById('bt-image7');
        animateBtn7.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image7'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn8 = document.getElementById('bt-image8');
        animateBtn8.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image8'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn9 = document.getElementById('bt-image9');
        animateBtn9.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image9'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn10 = document.getElementById('bt-image10');
        animateBtn10.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image10'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn11 = document.getElementById('bt-image11');
        animateBtn11.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image11'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };


        var animateBtn12 = document.getElementById('bt-image12');
        animateBtn12.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image12'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };


        var animateBtn13 = document.getElementById('bt-image13');
        animateBtn13.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image13'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn14 = document.getElementById('bt-image14');
        animateBtn14.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image14'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn15 = document.getElementById('bt-image15');
        animateBtn15.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image15'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
    
    
        var animateBtn16 = document.getElementById('bt-image16');
        animateBtn16.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image16'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn17 = document.getElementById('bt-image17');
        animateBtn17.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image17'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn18 = document.getElementById('bt-image18');
        animateBtn18.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image18'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn19 = document.getElementById('bt-image19');
        animateBtn19.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image19'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn20 = document.getElementById('bt-image20');
        animateBtn20.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image20'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn21 = document.getElementById('bt-image21');
        animateBtn21.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image21'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn22 = document.getElementById('bt-image22');
        animateBtn22.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image22'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn23 = document.getElementById('bt-image23');
        animateBtn23.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image23'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn24 = document.getElementById('bt-image24');
        animateBtn24.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image24'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn25 = document.getElementById('bt-image25');
        animateBtn25.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image25'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        
        var animateBtn26 = document.getElementById('bt-image26');
        animateBtn26.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image26'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn27 = document.getElementById('bt-image27');
        animateBtn27.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image27'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn28 = document.getElementById('bt-image28');
        animateBtn28.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image28'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };


        var animateBtn29 = document.getElementById('bt-image29');
        animateBtn29.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image29'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn30 = document.getElementById('bt-image30');
        animateBtn30.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image30'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn31 = document.getElementById('bt-image31');
        animateBtn31.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image31'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn32 = document.getElementById('bt-image32');
        animateBtn32.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image32'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

        var animateBtn33 = document.getElementById('bt-image33');
        animateBtn33.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image33'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn34 = document.getElementById('bt-image34');
        animateBtn34.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image34'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn35 = document.getElementById('bt-image35');
        animateBtn35.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image35'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn36 = document.getElementById('bt-image36');
        animateBtn36.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image36'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn37 = document.getElementById('bt-image37');
        animateBtn37.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image37'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn38 = document.getElementById('bt-image38');
        animateBtn38.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image38'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn39 = document.getElementById('bt-image39');
        animateBtn39.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image39'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn40 = document.getElementById('bt-image40');
        animateBtn40.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image40'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn41 = document.getElementById('bt-image41');
        animateBtn41.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image41'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn42 = document.getElementById('bt-image42');
        animateBtn42.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image42'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn43 = document.getElementById('bt-image43');
        animateBtn43.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image43'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn44 = document.getElementById('bt-image44');
        animateBtn44.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image44'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn45 = document.getElementById('bt-image45');
        animateBtn45.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image45'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn46 = document.getElementById('bt-image46');
        animateBtn46.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image46'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn47 = document.getElementById('bt-image47');
        animateBtn47.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image47'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };
        var animateBtn48 = document.getElementById('bt-image48'); 
        animateBtn48.onclick = function() {
            var elem = new fabric.Image(document.getElementById('my-image48'), { left: 30, top: 30, opacity: 1 });
            elem.scale(0.25);canvas.add(elem);
            canvas.setActiveObject(elem);
        };

		var exportAndSaveCanvas = document.getElementById('bt-exportAndSaveCanvas');
	  	exportAndSaveCanvas.onmouseup = function() {
        	 canvas.deactivateAll().renderAll();
	  	};
	  	
//        var clearBtn = document.getElementById('bt-clearBtn');
//        clearBtn.onclick = function() {
//            if(confirm('Todos os elementos ser\u00e3o removidos. Deseja continuar?'))
//            {
//                canvas.clear();
//            }
//        };

//        var clearBtn2 = document.getElementById('bt-clearBtn2');
//        clearBtn2.onclick = function() {
//            var elem = canvas.getActiveObject();
//            canvas.remove(elem);
//        };

//        var exportAndView = document.getElementById('bt-exportAndView');
//        exportAndView.onfocus = function() {
//             canvas.deactivateAll().renderAll();
//        };

};   

function runImageResizer(url)
{
	var canvasScale = 1;
	var SCALE_FACTOR = 1.2;
	
	var canvas = this.__canvas = new fabric.Canvas('canvas');
    //var ctx = canvas.getContext("2d");
    img = new Image();
    
    img.onload = function(){

   		var hRatio = canvas.width  / img.width;
   		var vRatio =  canvas.height / img.height;
	   	var ratio  = Math.max ( hRatio, vRatio );
		var centerShift_x = ( canvas.width - img.width*ratio ) / 2;
		var centerShift_y = ( canvas.height - img.height*ratio ) / 2;

		var elem = new fabric.Image(img, { left: centerShift_x, top: centerShift_y, width: img.width*ratio, height: img.height*ratio, opacity: 1 });
		elem['hasRotatingPoint'] = false;
				
		canvas.add(elem);
		canvas.setActiveObject(elem);
    }
    
    img.src = "upload/backup/" + url + "/upload.png";   

    var rodarBtn = document.getElementById('bt-rodar');
    rodarBtn.onclick = function() {
		rotateObject(90);
    };

	function rotateObject(angleOffset) {
	    var obj = canvas.getActiveObject(),
	        resetOrigin = false;
	
	    if (!obj) return;
	
	    var angle = obj.getAngle() + angleOffset;
	
	    if ((obj.originX !== 'center' || obj.originY !== 'center') && obj.centeredRotation) {
	        obj.setOriginToCenter && obj.setOriginToCenter();
	        resetOrigin = true;
	    }
	
	    angle = angle > 360 ? 90 : angle < 0 ? 270 : angle;
	
	    obj.setAngle(angle).setCoords();
	
	    if (resetOrigin) {
	        obj.setCenterToOrigin && obj.setCenterToOrigin();
	    }
	
	    canvas.renderAll();
	}

    var aumentarBtn = document.getElementById('bt-aumentar');
    aumentarBtn.onclick = function() {
	    zoomIn();
    };

    var diminuirBtn = document.getElementById('bt-diminuir');
    diminuirBtn.onclick = function() {
	    zoomOut();
    };

	// Zoom Out
	function zoomOut() {
		var obj = canvas.getActiveObject();
	
	    canvasScale = canvasScale / SCALE_FACTOR;
	    
	    obj.setHeight(obj.getHeight() * (1 / SCALE_FACTOR));
	    obj.setWidth(obj.getWidth() * (1 / SCALE_FACTOR));
	    
	    canvas.renderAll();        
	}

	// Zoom In
	function zoomIn() {
		var obj = canvas.getActiveObject();
	    
	    canvasScale = canvasScale * SCALE_FACTOR;
	    
	    obj.setHeight(obj.getHeight() * (1 * SCALE_FACTOR));
	    obj.setWidth(obj.getWidth() * (1 * SCALE_FACTOR));
	    	        
	    canvas.renderAll();
	}


	var exportAndSaveCanvas = document.getElementById('bt-exportAndSaveCanvas');
  	exportAndSaveCanvas.onmouseup = function() {
    	 canvas.deactivateAll().renderAll();

  	};

};   