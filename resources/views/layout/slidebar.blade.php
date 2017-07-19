<!-- Full Page Image Background Carousel Header -->


<script>
		 /* window.onload = function() {
			 //simulator_img.src = "/images/simulators/farB_nearC_"+screenratio+".png";
			 //lens_img.href = "/images/simulators/farC_nearC_"+screenratio+".png";
			 //backimgwidth=simulator_img.width;/images/simulators/farC_nearC_1.5.png
			 var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			 screenoption();
		} */
		$(function(){ 
			 var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			 
			 screenoption();
		});
		$(window).resize(function () {
			 var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			screenoption();
		});
		function screenoption(){
				
			 var screenheight = $( window ).height();
			 var screenwidth = $( window ).width();
				 var aboutdivid=document.getElementById("circleimg");
				 $('#circleimg').css("bottom","0px");
				 var h1 = Math.round(738 * screenwidth * 1.0 / 2220.0);
				 var w1 = Math.round(675 * screenwidth * 1.0 / 2220.0);
				 var hh1 = Math.round(63 * screenwidth * 1.0 / 2220.0);
				 
				 var ff = Math.round(40 * screenwidth * 1.0 / 2220.0);
				 var space = Math.round(70 * screenwidth * 1.0 / 2220.0);
				 if(space < 30){
					 space = 30;
				 }
				 if(ff < 17){
					 ff = 17;
				 }
				 $('#title_1').css("font-size",ff+"px");
				 $('#title_2').css("font-size",ff+"px");
				 $('#title_3').css("font-size",ff+"px");
				 $('#title_1').css("line-height",space+"px");
				 $('#title_2').css("line-height",space+"px");
				 $('#title_3').css("line-height",space+"px");
				 var th = space * 2 + ff * 3;
				 var xx = h1/2;
				 var xx1 = hh1/2;
				 if(h1 < 350){
					 h1 = 350;
					 xx = Math.round(675 * 350 * 1.0 / 738.0) / 2;
					 xx1 = Math.round(63 * 350 * 1.0 / 738.0) / 2;
					 w1 = Math.round(675 * h1 * 1.0 / 738.0);
				 }
				 
				$('#circleimg1').css("height",h1+"px");
				$('#circleimg1').css("width",w1+"px");
				$('#circleimg').css("top",screenheight/2-xx-xx1 +"px");
				$('#titleid').css("top",h1/2-th/2+hh1 +"px");
				 
				 var imgbottom = Math.round(786 * screenwidth * 1.0 / 2220.0);
				 if(imgbottom < 350){
					 imgbottom = 350;
				 }
				$('.imgbottom1').css("height",imgbottom+"px");
				$('.kwicks').css("height",imgbottom+"px");
				$('.material-text').css("top",imgbottom/2-5+"px");
				var imgbottomfont = Math.round(42 * screenwidth * 1.0 / 2220.0);
				 if(imgbottomfont < 17){
					 imgbottomfont = 17;
				 }
				 $('.material-text').css("font-size",imgbottomfont+"px");
				 
				 
				 var hh = Math.round(800 * screenwidth * 1.0 / 1920.0);
				 $('#aboutdivid').css("height",hh+"px");
				 $('.singlevision_cnt_1').css("margin-left","50%");
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
					 $('.singlevision_cnt_1').css("margin-top","10px");
				 }else{
					$('.singlevision_cnt_1').css("margin-top",top1+"px");
				 }
				 $('#p1').css("font-family","Helvetica !important");
			 
		}
		var homescreen = 1;
</script>
	<div id="circleimg" class="carousel-circle">
    	<div id="circleimg1" align="center">
        	<ul id="titleid">
	        	<li id="title_1">HOYA PRODUCES THE MOST</li>
    	        <li id="title_2">DURABLE AND RELIABLE</li>
        	    <li id="title_3">LENS COATING ON EARTH.</li>
            </ul>
        </div>
    </div>
<div id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php
			$i = 0;
			 foreach( $slideitems as $slideitem )	
			{ 
				if($i == 0){
					echo("<li data-target='#myCarousel' data-slide-to='0' class='active' style='margin-left:10px;'></li>");
				}else{
					echo("<li data-target='#myCarousel' data-slide-to='".(string)$i."' style='margin-left:10px;'></li>");
				}
			$i++;
			}  
		?>
	</ol>
	<!-- Wrapper for Slides -->
	<div class="carousel-inner">
	<?php
		$i = 0;
		foreach( $slideitems as $slideitem )	
		{ 
			if($i == 0){
				echo("<div class='item active carousel_back' style='background-image:url(/uploads/". $slideitem['thumbpath'] .");'>");//
			}else{
				echo("<div class='item carousel_back' style='background-image:url(/uploads/". $slideitem['thumbpath'] .");'>");
			}
//		echo("<img id='carosel_imges' src='/uploads/" . $slideitem['thumbpath'] . "' style='width: 100%; height:100%;' alt='" . $slideitem['title'] . "'>");
		
		echo("</div>");
		$i++;
		} 
	?>
	
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev" style="z-index:100">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next" style="z-index:100">
		<span class="icon-next"></span>
	</a>
</div>



<script type="text/javascript">
    var scrollflag1 = 0,
	    lasttransflg=0;
	var dheight = $( window ).height();
	var screensize = $( window ).width();
	/* $(function () {
		$('.js-popover').popover()
		$('.js-tooltip').tooltip()
		$('#tall-toggle').click(function () {
		$('#tall').toggle()
	  })
	}) */
	var xTop = 0;
	var transflg = 0;
	$(function(){
			 var screenheight = $( window ).height();
			 var screenwidth = $( window ).width();
			$(".carousel_back").css("height",screenheight+"px");
			$(".headbar").css("position","fixed");
			$(".headbar").css("top","0px");
			$(".headbar").css("left","10%");
			$(".carousel").css("display","block");
			$(".carousel").css("position","static");
			$('.carousel-circle').css("bottom", "10%");
			//Init1 ();
	}); 
	
		
</script>