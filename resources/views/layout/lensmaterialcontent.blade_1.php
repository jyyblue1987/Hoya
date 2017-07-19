<?php
  $lid = 0;
  if(isset($_GET["lid"]) && $_GET["lid"] != ""){
	  $lid = $_GET["lid"];
  }

?>

<script type="text/javascript">
    var lid = <?php echo $lid;?>;
	$(function () {
		$('.js-popover').popover()
		$('.js-tooltip').tooltip()
		$('#tall-toggle').click(function () {
		$('#tall').toggle()
	  })
	}); 
	 $(document).ready(function(){
		//new_window = window.open(url, "_self") ;
		if(lid == 1){
			$('#myModal').modal('hide');
			$('#myModal1_5').modal('show');
		}else if(lid == 2){
			$('#myModal').modal('hide');
			$('#myModal1_53').modal('show');
		}else if(lid == 3){
			$('#myModal').modal('hide');
			$('#myModal1_60').modal('show');
		}else if(lid == 4){
			$('#myModal').modal('hide');
			$('#myModal1_67').modal('show');
		}else if(lid == 5){
			$('#myModal').modal('hide');
			$('#myModal1_70').modal('show');
		}else if(lid == 6){
			$('#myModal').modal('hide');
			$('#myModal1_74').modal('show');
		}
	}); 

</script>
	<script type="text/javascript" src="js/jssor.slider.min.js"></script>


	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/lightbox.min.css" type="text/css" media="screen">

	<script>
		var yearflag=0;
		var jssor_1_slider;
		var numflag = 0;
		var refreshflag;
		var jssor_1_slider;
        jssor_1_slider_init = function() {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $AutoPlaySteps: 1,
              $SlideDuration: 560,
              $SlideWidth: 640, 
              $SlideSpacing: 0,
              $Cols: 3,
			  $PauseOnHover: 1,
			  $StartIndex: 0,
			  $Loop: 1,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 1
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };
            
            jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 4000);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
		$(function(){
			 
			/*  jssor_1_slider.$On($JssorSlider$.$EVT_STATE_CHANGE, function(slideIndex, progress, progressBegin, idleBegin, idleEnd, progressEnd)
			{
				if(slideIndex == 5 && progress == progressEnd)
				{
					//do something when last slide plays over
					jssor_1_slider.$PlayTo(0, 560);
					
				}
			}); */
			var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			 screenoption();
			 if(screenwidth > 800){
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * screenwidth * 1.0 / 1920.0);
				 $('#aboutdivid').css("height",hh+"px");
				 $('.lensmaterial_cnt_2').css("margin-left","50%");
				 var h2 = screenheight-85;
				 $('#aboutdivtop').css("height",h2+"px");
				 var ff = Math.round(50 * screenwidth * 1.0 / 1920.0);
				 if(ff < 20){
					$('#h11').css("font-size","20px");
				 }else{
					$('#h11').css("font-size",ff+"px");
				 }
				 var pp = Math.round(20 * screenwidth * 1.0 / 1920.0);
				 if(pp < 12){
					$('#p1').css("font-size","12px");
				 }else{
					$('#p1').css("font-size",pp+"px");
				 }
				 
				 var top1 = Math.round(250 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.lensmaterial_cnt_2').css("margin-top","10px");
				 }else{
					$('.lensmaterial_cnt_2').css("margin-top",top1+"px");
				 }
				 $('#p1').css("font-family","Helvetica !important");
			 }else{
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * 800 * 1.0 / 1920.0);
				 $('#aboutdivid').css("height",hh+"px");
				 $('.lensmaterial_cnt_2').css("margin-left","50%");
				 var h2 = screenheight-85;
				 $('#aboutdivtop').css("height",h2+"px");
				 var ff = Math.round(50 * 600 * 1.0 / 1920.0);
				 if(ff < 20){
					$('#h11').css("font-size","20px");
				 }else{
					$('#h11').css("font-size",ff+"px");
				 }
				 var pp = Math.round(20 * 600 * 1.0 / 1920.0);
				 if(pp < 12){
					$('#p1').css("font-size","12px");
				 }else{
					$('#p1').css("font-size",pp+"px");
				 }
				 
				 var top1 = Math.round(250 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.lensmaterial_cnt_2').css("margin-top","10px");
				 }else{
					$('.lensmaterial_cnt_2').css("margin-top",top1+"px");
				 }
				 if(screenwidth < 600){
					 $('.lensmaterial_cnt_2').css("margin-left","10%");
				 }
			 }
		 });	
		function setNextYear(){
			var current = jssor_1_slider.$CurrentIndex();
			var num = current + 1;
			if(current == 5){
				num = 0;
			}
			//jssor_1_slider.$GoTo(num);
		}
		function setPrevYear(){
			var current = jssor_1_slider.$CurrentIndex();
			var num = current - 1;
			if(current == 0){
				num = 5;
			}
			//jssor_1_slider.$GoTo(num);
		}
		$(window).resize(function () {
		
			var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			 screenoption();
			 if(screenwidth > 800){
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * screenwidth * 1.0 / 1920.0);
				 $('#aboutdivid').css("height",hh+"px");
				 
				 var h2 = screenheight-85;
				 $('#aboutdivtop').css("height",h2+"px");
				 $('.lensmaterial_cnt_2').css("margin-left","50%");
				 var ff = Math.round(50 * screenwidth * 1.0 / 1920.0);
				 if(ff < 20){
					$('#h11').css("font-size","20px");
				 }else{
					$('#h11').css("font-size",ff+"px");
				 }
				 var pp = Math.round(20 * screenwidth * 1.0 / 1920.0);
				 if(pp < 12){
					$('#p1').css("font-size","12px");
				 }else{
					$('#p1').css("font-size",pp+"px");
				 }
				 
				 var top1 = Math.round(250 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.lensmaterial_cnt_2').css("margin-top","10px");
				 }else{
					$('.lensmaterial_cnt_2').css("margin-top",top1+"px");
				 }
				 $('#p1').css("font-family","Helvetica !important");
			 }else{
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * 800 * 1.0 / 1920.0);
				 $('#aboutdivid').css("height",hh+"px");
				 var h2 = screenheight-85;
				 $('#aboutdivtop').css("height",h2+"px");
				 $('.lensmaterial_cnt_2').css("margin-left","50%");
				 var ff = Math.round(50 * 600 * 1.0 / 1920.0);
				 if(ff < 20){
					$('#h11').css("font-size","20px");
				 }else{
					$('#h11').css("font-size",ff+"px");
				 }
				 var pp = Math.round(20 * 600 * 1.0 / 1920.0);
				 if(pp < 12){
					$('#p1').css("font-size","12px");
				 }else{
					$('#p1').css("font-size",pp+"px");
				 }
				 
				 var top1 = Math.round(250 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.lensmaterial_cnt_2').css("margin-top","10px");
				 }else{
					$('.lensmaterial_cnt_2').css("margin-top",top1+"px");
				 }
				 if(screenwidth < 600){
					 $('.lensmaterial_cnt_2').css("margin-left","10%");
				 }
			 }
		});
		function screenoption(){
			var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			var imgbottom = Math.round(786 * screenwidth * 1.0 / 2220.0);
			 if(imgbottom < 200){
				 imgbottom = 200;
			 }
			$('.imgbottom1').css("height",imgbottom+"px");
				$('.kwicks').css("height",imgbottom+"px");
			var imgbottom = Math.round(132 * screenwidth * 1.0 / 2220.0);
			 if(imgbottom < 50){
				 imgbottom = 50;
			 }
			 $('.material-text').css("width",imgbottom+"px");
			 if(screenwidth < 350){
				 screenwidth = 350;
			 }
			$("#container1").css("height",screenwidth+"px");
			$("#container1").css("width",screenwidth+"px");
			$("#lens_carousel").css("height",screenwidth+"px");
			$(".imgbottom2").css("height",screenwidth+"px");
			$(".imgbottom2").css("width",screenwidth+"px");
			$(".liitem").css("height",screenwidth+"px");
			$(".leftarrow").css("margin-top",screenwidth/2-10+"px");
		}

	</script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.kwicks.js"></script>
	<link rel='stylesheet' type='text/css' href='css/jquery.kwicks.css' />
		<style type='text/css'>
			.kwicks {
				height: 770px;
				width:100%;
			}
			.kwicks > li > p { position: absolute;
				top: 350px;
				left: 25%;
				color: #fff;
				font-size: 42px;
			}   
			.kwicks > li {
				opacity: 0.8;
				filter: alpha(opacity=80);
				
			}
			.kwicks > li:hover {
				opacity: 1;
				filter: alpha(opacity=100);
				
			}

		</style>
<div class="container_about" style="width:100%;position:relative;">
	<div id="top_black" class="about_group_left" style=" background-color:#343434; height:90px;">
	</div>
	<div  id = "aboutdivtop" class="" style=" background-image:url(/images/products/lensmaterial_back1.jpg); background-position:center center; background-size:cover; height:912px;">
        <div class = "lensmaterial_cnt_1">
	        <div class="center">
				<h2 style=" text-align:center; color:#ffffff">Lens Materials</h2>
				<p class = "text_disp product_txt_1" style="margin-top:10px; color:#ffffff">Hoya lens materials are aesthetically attractive, comfortable to wear and are manufactured<br/>using the most advanced production methods. </p>
			</div>
        </div>
	</div>
	<div  id = "aboutdivid" class="" style=" background-image:url(/images/products/lensmaterial_back2.png); background-position:left top; background-size:cover; height:700px;min-width:100%">
		<div class = "lensmaterial_cnt_2">
			<h1 id="h11" style="color:#ffffff">Lens Materials</h1>
			<p  id="p1" style="width:90%; color:#ffffff">As spectacle wearers have become increasingly more discerning, the need for traditional, glass ophthalmic lenses has declined. Consumers now expect thinner, lighter and more comfortable lenses, with the highest optical clarity and strength.<br/><br/>Hoya has  a full range of  high index plastic lens materials that offer individual.</p>
		</div>
	</div>
</div>

<div class="container materialcontent1" style="width:100%;position:relative; z-index:61">
		 <ul class="kwicks kwicks-horizontal" style="    overflow: hidden;">
			<li onclick="show_material_popup('/lensmaterial', 1)" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom1" src = "images/material_1.jpg" style=""/>
			    <img class="material-text" style="position:absolute;top:40px;    left: 42%;" src="images/products/selicon-22.png"/></li>
			<li onclick="show_material_popup('/lensmaterial', 2)" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom1" src = "images/material_2.jpg" style=""/>
			    <img class="material-text" style="position:absolute;top:40px;    left: 42%;" src="images/products/selicon-23.png"/></li>
			<li onclick="show_material_popup('/lensmaterial', 3)" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom1" src = "images/material_3.jpg" style=""/>
			    <img class="material-text" style="position:absolute;top:40px;    left: 42%;" src="images/products/selicon-24.png"/></li>
			<li onclick="show_material_popup('/lensmaterial', 4)" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom1" src = "images/material_4.jpg" style=""/>
			    <img class="material-text" style="position:absolute;top:40px;    left: 42%;" src="images/products/selicon-25.png"/></li>
			<li onclick="show_material_popup('/lensmaterial', 5)" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom1" src = "images/material_5.jpg" style=""/>
			    <img class="material-text" style="position:absolute;top:40px;    left: 42%;" src="images/products/selicon-26.png"/></li>
			<li onclick="show_material_popup('/lensmaterial', 6)" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom1" src = "images/material_6.jpg" style=""/>
			    <img class="material-text" style="position:absolute;top:40px;    left: 42%;" src="images/products/selicon-27.png"/></li>
	     </ul>
</div>

	<div id="container1 materialcontent2" class="landslide2" style="position:relative; z-index:61;margin-top:-27px;margin-bottom:-10px;">
        <div id="lens_carousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators" style="position:absolute;bottom:10px;">
                <li data-target="#lens_carousel" data-slide-to="0" class="active"></li>
                <li data-target="#lens_carousel" data-slide-to="1"></li>
                <li data-target="#lens_carousel" data-slide-to="2"></li>
                <li data-target="#lens_carousel" data-slide-to="3"></li>
                <li data-target="#lens_carousel" data-slide-to="4"></li>
                <li data-target="#lens_carousel" data-slide-to="5"></li>
            </ol>
            <!-- Wrapper for Slides -->
            <div class="carousel-inner" style=" clear:both; float:left;">
                <div class="item active">
                   <li class="liitem" style="" onclick="show_material_popup('/lensmaterial', 1)" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom2" src = "images/material_1.jpg" style="float:left;"/>
					<img class="material-text" style="position:absolute;top:60px;float:left;    left: 47%;" src="images/products/selicon-22.png"/></li>
                </div>
                <div class="item">
                    <li class="liitem" onclick="show_material_popup('/lensmaterial', 2)" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom2" src = "images/material_2.jpg" style="float:left"/>
					<img class="material-text" style="position:absolute;top:60px;float:left;    left: 47%;" src="images/products/selicon-23.png"/></li>
                </div>
                <div class="item">
                    <li class="liitem" onclick="show_material_popup('/lensmaterial', 3)" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom2" src = "images/material_3.jpg" style="float:left"/>
					<img class="material-text" style="position:absolute;top:60px;float:left ;   left: 47%;" src="images/products/selicon-24.png"/></li>
                </div>
                <div class="item">
                    <li class="liitem" onclick="show_material_popup('/lensmaterial', 4)" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom2" src = "images/material_4.jpg" style="float:left"/>
					<img class="material-text" style="position:absolute;top:60px;float:left ;   left: 47%;" src="images/products/selicon-25.png"/></li>
                </div>
                <div class="item">
                    <li class="liitem" onclick="show_material_popup('/lensmaterial', 5)" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom2" src = "images/material_5.jpg" style="float:left"/>
					<img class="material-text" style="position:absolute;top:60px;float:left ;   left: 47%;" src="images/products/selicon-26.png"/></li>
                </div>
                <div class="item">
                    <li class="liitem" onclick="show_material_popup('/lensmaterial', 6)" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom2" src = "images/material_6.jpg" style="float:left"/>
					<img class="material-text" style="position:absolute;top:60px;float:left ;   left: 47%;" src="images/products/selicon-27.png"/></li>
                </div>
            </div>
			<!-- Controls -->
			<a class="left carousel-control leftarrow" href="#lens_carousel" data-slide="prev" style="z-index:100;height:100px;">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control leftarrow" href="#lens_carousel" data-slide="next" style="z-index:100;height:100px;">
				<span class="icon-next"></span>
			</a>
        </div>
    </div>



			<!--<div class="container_about" style="width:100%;position:relative;"> 

				<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1920px; height: 750px; overflow: hidden; visibility: hidden;">
					
					
					<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1920px; height: 750px; overflow: hidden;">
						<div style="display: none;" >
							<img data-u="image" src="images/material_1.png" />
						</div>
						<div style="display: none;" >
							<img data-u="image" src="images/material_2.png" />
						</div>
						<div style="display: none;" >
							<img data-u="image" src="images/material_3.png" />
						</div>
						<div style="display: none;">
							<img data-u="image" src="images/material_4.png" />
						</div>
						<div style="display: none;" >
							<img data-u="image" src="images/material_5.png" />
						</div>
						<div style="display: none;" >
							<img data-u="image" src="images/material_6.png" />
						</div>						
					</div>
				</div>
				<a class="left carousel-control" data-u="arrowleft" style="z-index:100;width: 80px;" href="javascript:setPrevYear();">
				<span class="icon-prev"></span>
				</a>
				<a class="right carousel-control" data-u="arrowright" style="z-index:100;width: 80px;" href="javascript:setNextYear();">
				<span class="icon-next"></span>
				</a>
            </div>-->
	<script>
        //jssor_1_slider_init();
		
			$(function() {
				var screenwidth = window.innerWidth;
				var imgbottom = Math.round(786 * screenwidth * 1.0 / 2220.0);
				 if(imgbottom < 200){
					 imgbottom = 200;
				 }
				$('.kwicks').kwicks({
					maxSize : imgbottom,
					spacing : 0,
					behavior: 'menu',
					selectOnClick: false
				});
			});
    </script>
<!--
	<div class="container_about" style="width:100%;position:relative;">
		<div class="flexslider">
			  <ul class="slides">
				<li id="slides_1"><img src = "/images/products/slidelens-1.png" style=""/></li>
				<li id="slides_2"><img src = "/images/products/slidelens-2.png" style=""/></li>
				<li id="slides_3"><img src = "/images/products/slidelens-3.png" style=""/></li>
				<li id="slides_4"><img src = "/images/products/slidelens-4.png" style=""/></li>
				<li id="slides_5"><img src = "/images/products/slidelens-5.png" style=""/></li>
				<li id="slides_6"><img src = "/images/products/slidelens-6.png" style=""/></li>
				<span id="responsiveFlag"></span>
		  </ul>
		</div>
    </div>-->

<!--********************* Lens 1.5set dialog ***********************************************-->
<div id="myModal1_5" class="modaltop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modaltop-dialog" style="width:1000px">
		<div style="height:auto;margin-left:auto;margin-right:auto"class="modaltop-content">
			<div class="modaltop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div style="border-bottom:0px;    margin-top: 40px;"class="modaltop-body modal-header">
				<div id="popup_lensproperty">
					<ul style="margin-left:350px;">
						<li class="p_contentM">PLASTIC 1.50</li>
						<li><img src="/images/products/selicon-22.png"></li>
					</ul>
					<div style="float:left; margin-top:50px">
						<div style="float:left"><img src="/images/products/rens_model.png"></div>
						<div style="margin-left:350px">
						   <li class="p_contentS1">The most commonly used lens material is economical and durable as well as offering the best Abbe value of all the lens indices. Although the optical corrective properties of the 1.50 is superior to other indices, the lens thickness for high plus or minus prescriptions can be a limitation.</li>
						   <li class="p_contentM">Benefits:</li>
						   <li class="P_contentS2">Highest Abbe value with least chromatic dispersion</li>
						   <li class="P_contentS2">Great optical properties</li>
						   <li class="P_contentS2">Durable for full frames</li>
						   <li class="P_contentS2">Full UV Protection</li>
						</div>   
					</div>
				</div>
			</div>
		</div>
    </div>
  </div>  
<!--*****************************************************************-->
  <div id="myModal1_53" class="modaltop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modaltop-dialog" style="width:1000px">
		<div style="height:auto;margin-left:auto;margin-right:auto"class="modaltop-content">
			<div class="modaltop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div style="border-bottom:0px;    margin-top: 40px;"class="modaltop-body modal-header">
				<div id="popup_lensproperty">
					<ul style="margin-left:350px;">
						<li class="p_contentM">PHOENIX 1.53</li>
						<li><img src="/images/products/selicon-23.png"></li>
					</ul>
					<div style="float:left; margin-top:50px">
						<div style="float:left"><img src="/images/products/rens_model.png"></div>
						<div style="margin-left:350px">
						   <li class="p_contentB" style="">Tough, light, clear - The new everday lens material for active wearers</br></li>
						   <li class="p_contentS1" style="">PHOENIX is a new optical material (Trivex-based) that provides mechanical strength and robustness without compromise to optical quality. PHOENIX 1.53 is the ideal lens material for people with an active lifestyle, in particularly children. Ideal for the most common prescriptions, moderate to medium myopes and hyperopes. It's mechanical properties make it particularly good for rimless drill mounts and semi-rimless frames. Phoenix is one of only two materials that are recommended for use in children by the American Optometric Association. </li>
						   <li class="p_contentM">Benefits:</li>
						   <li class="P_contentS2">Tough and Durable with high-impact resistance and superior tensile strength</li>
						   <li class="P_contentS2">Lightest material available providing unparalleled comfort</li>
						   <li class="P_contentS2">Superior optics with high Abbe Value</li>
						   <li class="P_contentS2">Outstanding chemical resistant</li>
						   <li class="P_contentS2">Full  UV protection</li></div>   
					</div>
				</div>
			</div>
		</div>
    </div>
  </div>  
<!--********************* Lens 1.60set dialog ***********************************************-->
 <div id="myModal1_60" class="modaltop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modaltop-dialog" style="width:1000px">
		<div style="height:auto;margin-left:auto;margin-right:auto"class="modaltop-content">
			<div class="modaltop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div style="border-bottom:0px;    margin-top: 40px;"class="modaltop-body modal-header">
				<div id="popup_lensproperty">
					<ul style="margin-left:350px;">
						<li class="p_contentM">EYAS 1.60</li>
						<li><img src="/images/products/selicon-24.png"></li>
					</ul>
					<div style="float:left; margin-top:50px">
						<div style="float:left"><img src="/images/products/rens_model.png"></div>
						<div style="margin-left:350px">
						   <li class="p_contentB">A proven hi-index material around the world</li>
						   <li class="p_contentS1">EYAS 1.60 is the most popular choice with remarkable overall performance. 1.60 EYAS is a globally proven lens material providing remarkable overall excellence in aesthetics, optics and strength. EYAS 1.60 is especially suitable for those who value optical performance and strength with a moderate to high prescription. The material is especially suitable for wearers who value aesthetics and optical clarity, who require thin and light lenses, and for those who see premium quality as being especially important.</li>
						   <li class="p_contentM">Benefits:</li>
						   <li class="P_contentS2">High tensile strength</li>
						   <li class="P_contentS2">Strong and elastic material making it suitable for all frame types</li>
						   <li class="P_contentS2">High Abbe value with less chromatic dispersion offering great optical clarity</li>
						   <li class="P_contentS2">Highest temperature tolerance</li>
						   <li class="P_contentS2">Full UV Protection</li>
						</div>   
					</div>
				</div>
			</div>
		</div>
    </div>
  </div>  
  
<!--********************* Lens 1.67set dialog ***********************************************-->
  <div id="myModal1_67" class="modaltop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modaltop-dialog" style="width:1000px">
		<div style="height:auto;margin-left:auto;margin-right:auto"class="modaltop-content">
			<div class="modaltop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div style="border-bottom:0px;    margin-top: 40px;"class="modaltop-body modal-header">
				<div id="popup_lensproperty">
					<ul style="margin-left:350px;">
						<li class="p_contentM">EYNOA 1.67</li>
						<li><img src="/images/products/selicon-25.png"></li>
					</ul>
					<div style="float:left; margin-top:50px">
						<div style="float:left"><img src="/images/products/rens_model.png"></div>
						<div style="margin-left:350px">
						   <li class="p_contentB">The ideal combination of aesthetics and strength</li>
						   <li class="p_contentS1">By using the highest quality monomer and unequalled material processing expertise, Hoya has created a 1.67 lens with superior performance characteristics that effortlessly meets the need for lenses that are durable and more reliable than other 1.67 alternatives. EYNOA 1.67 is suitable for those who require a durable, light and thin lens</li>
						   <li class="p_contentM">Benefits:</li>
						   <li class="P_contentS2">Durable material with highest tensile strength<br/>Strong and elastic material making it suitable for all frame types, especially rimless frames</li>
						   <li class="P_contentS2">High temperature tolerance</li>
						   <li class="P_contentS2">High lens index, suitable for wearer with a medium to high prescription who requires a light and thin lens</li>
						   <li class="P_contentS2">Full UV Protection</li>
						</div>   
					</div>
				</div>
			</div>
		</div>
    </div>
  </div>  
<!--********************* Lens 1.70set dialog ***********************************************-->
  <div id="myModal1_70" class="modaltop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modaltop-dialog" style="width:1000px">
		<div style="height:auto;margin-left:auto;margin-right:auto"class="modaltop-content">
			<div class="modaltop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div style="border-bottom:0px;    margin-top: 40px;"class="modaltop-body modal-header">
				<div id="popup_lensproperty">
					<ul style="margin-left:350px;">
						<li class="p_contentM">EYRY 1.70</li>
						<li><img src="/images/products/selicon-26.png"></li>
					</ul>
					<div style="float:left; margin-top:50px">
						<div style="float:left"><img src="/images/products/rens_model.png"></div>
						<div style="margin-left:350px">
						   <li class="p_contentB">The consummate solution that combines elegance and optical excellence</li>
						   <li class="p_contentS1">1.70 Eyry is Hoya's premium ultra hi-index material. Eyry 1.70 is particularly suitable for patients with higher prescriptions who are looking for the very best lens available, both optically and aesthetically. Ideal for moderate to high myopes and hyperopes.</li>
						   <li class="p_contentM">Benefits:</li>
						   <li class="P_contentS2">Ultra high lens index making it light and thin </li>
						   <li class="P_contentS2">Balanced Abbe value with less chromatic dispersion</li>
						   <li class="P_contentS2">Suitable for wearer with a high prescription</li>
						   <li class="P_contentS2">Full UV Protection</li>
						</div>   
					</div>
				</div>
			</div>
		</div>
    </div>
  </div>  
<!--********************* Lens 1.74set dialog ***********************************************-->
	<div id="myModal1_74" class="modaltop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modaltop-dialog" style="width:1000px">
		<div style="height:auto;margin-left:auto;margin-right:auto"class="modaltop-content">
			<div class="modaltop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div style="border-bottom:0px;    margin-top: 40px;"class="modaltop-body modal-header">
				<div id="popup_lensproperty">
					<ul style="margin-left:350px;">
						<li class="p_contentM">EYVIA 1.74</li>
						<li><img src="/images/products/selicon-27.png"></li>
					</ul>
					<div style="float:left; margin-top:50px">
						<div style="float:left"><img src="/images/products/rens_model.png"></div>
						<div style="margin-left:350px">
						   <li class="p_contentB">It’s all about perfection </li>
						   <li class="p_contentS1">Hoya, always in search for perfection in terms of the ideal lens, now introduces the superlative in thin and clear: Eyvia 1.74. This ultra thin material is Hoya’s latest achievement in the high index range and emphasizes Hoya’s high standards of quality. With Eyvia 1.74 you can offer your most demanding customers a wide choice in super thin, elegant and durable lenses.</li>
						   <li class="p_contentM">Benefits:</li>
						   <li class="P_contentS2">Extremely high lens index making it ultra light and thin</li>
						   <li class="P_contentS2">A superior material with balanced tensile strength and temperature tolerance</li>
						   <li class="P_contentS2">Ideal solution to wearer with high prescriptions</li>
						   <li class="P_contentS2">Full UV Protection</li>
						   
						</div>   
					</div>
				</div>
			</div>
		</div>
    </div>
	</div>  
