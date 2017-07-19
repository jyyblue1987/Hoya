	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.kwicks.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/jquery.kwicks.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/slidelayout.css" type="text/css" media="screen">
	<script src="js/mouseslide.js" type="text/javascript"></script>
	<script src="js/galleryinit.js" type="text/javascript"></script>
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
	
<script>
 function selectOver(){
	 //$(".home_s_bt").css("background-image","url(/images/click_bt.png)");
	 document.getElementById("btid").src = "/images/click_bt.png";
 }
 function unselectOut(){
	 //$(".home_s_bt").css("background-image","url(/images/normal_bt.png)");
	 document.getElementById("btid").src = "/images/normal_bt.png";
 }
 
 
		$(function(){ 
			 var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			 
			 screenoption1();
		});
		$(window).resize(function () {
			 var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			screenoption1();
		});
		function screenoption1(){
			 var screenheight = $( window ).height();
			 var screenwidth = $( window ).width();
			var h1 = Math.round(860 * screenwidth * 1.0 / 2220.0);
			var w1 = Math.round(1920 * screenwidth * 1.0 / 2220.0);
			if(h1 < 200){
				h1 = 200;				
			}
			$(".second_container").css("width",w1+"px");
			$(".second_container").css("height",h1+"px");
			var cnttop = Math.round(150 * screenwidth * 1.0 / 2220.0);
			if(cnttop < 15){
				cnttop = 15;
			}
			$(".cnt_31").css("margin-top",cnttop+"px");
			 cnttop = Math.round(50 * screenwidth * 1.0 / 2220.0);
			if(cnttop < 10){
				cnttop = 10;
			}
			$(".cnt_32").css("margin-top",cnttop+"px");
			$(".home_s_bt").css("margin-top",cnttop+"px");
			 cnttop = Math.round(372 * screenwidth * 1.0 / 2220.0);
			if(cnttop < 100){
				cnttop = 100;
			}
			 var btw = cnttop;
			$(".home_s_bt").css("width",cnttop+"px");
			 cnttop = Math.round(100 * screenwidth * 1.0 / 2220.0);
			if(cnttop < 30){
				cnttop = 30;
			}
			 var bth = cnttop;
			$(".home_s_bt").css("height",cnttop+"px");
			 cnttop = Math.round(36 * screenwidth * 1.0 / 2220.0);
			if(cnttop < 13){
				cnttop = 13;
			}
			$(".custom_text").css("font-size",cnttop+"px");
			$(".p11").css("font-size",cnttop+"px");
			
			
			
			
			
			 cnttop = Math.round(70 * screenwidth * 1.0 / 2220.0);
			if(cnttop < 15){
				cnttop = 15;
			}
			$(".font11").css("font-size",cnttop+"px");
			 cnttop = Math.round(200 * screenwidth * 1.0 / (2220.0 * 1.5));
			if(cnttop < 30){
				cnttop = 30;
			}
			$(".custom_text").css("margin-left",cnttop+"px");
			 cnttop = Math.round(25 * screenwidth * 1.0 / (2220.0 * 1.5));
			
			$(".custom_text").css("margin-top",cnttop+"px");
			$(".cnt_32").css("margin-top",cnttop+"px");
			$(".home_s_bt").css("margin-top",cnttop+"px");
			
			
			 cnttop = Math.round(22 * screenwidth * 1.0 / 2220.0);
			if(cnttop < 8){
				cnttop = 8;
			}
			$(".custom_text1").css("font-size",cnttop+"px");
			$(".custom_text1").css("margin-left","20%");
			$(".custom_text1").css("margin-top",(bth-5) / 2 + "px");
			
			$("#container1").css("height",screenwidth+"px");
			$("#lens_carousel").css("height",screenwidth+"px");
			$(".imgbottom2").css("height",screenwidth+"px");
			$(".leftarrow").css("margin-top",screenwidth/2+"px");
			$(".material-text1").css("top",screenwidth/2+"px");
			
			cnttop = Math.round(860 * screenwidth * 1.0 / 1920.0 );
			if(cnttop < 200){
				cnttop = 200;
			}
			$(".home12").css("height",cnttop+"px");
			$(".home_s_bt1").css("margin-left","0px");
		}
 
 
</script>

<!--<div class="container second_container" style="background-image:url(/images/bottom_bg_1.png);  background-size:cover; min-width:100%;">	
    	<div class = "home_cnt_3 cnt_31">
			<p class="p11" style="float:left;">HOYA lenses <font class="font11" style="font-family:Baskerville !important;	font-style: italic;	font-size: 50px;">designed exclusively</font></p>
            <p class="custom_text"> for the way your eyes see the world.</p>
		</div>
		<div class = "home_cnt_3 cnt_32" style="    margin-top: 50px;    margin-left: 7%;">
            <p class="custom_text"> Simulate your situation through the Hoya lenses</p>
		</div>
		<a href="/lens">
		<div class = "home_cnt_3 home_s_bt " style="position:relative;margin-top:0px;margin-top:0px;margin-left: 20%;width:372px;height:100px;margin-left: 20%;    margin-top: 50px;">			
		    <img id="btid" class="home_cnt_3 home_s_bt home_s_bt1" src = "/images/normal_bt.png" style="width:372px;height:100px;    margin-top: 50px;" onmouseover="selectOver()" onmouseout="unselectOut()">
            <p id="pid" class="custom_text custom_text1" style=" position:absolute;margin-left:0px;margin-top:0px;   color: #000;    margin-left: 75px;" onmouseover="selectOver()" onmouseout="unselectOut()">START SIMULATION</p>
			
		</div>
		</a>
</div>-->
<div class = "about_group home12" style="background-image:url(/images/bottom_bg_1.png); background-position:center; background-repeat:repeat; height:auto;background-size:cover;z-index:67">
		<div class = "home_cnt_3 cnt_31">
			<p class="p11" style="float:left;">HOYA lenses <font class="font11" style="font-family:Baskerville !important;	font-style: italic;	font-size: 50px;">designed exclusively</font></p>
            <p class="custom_text"> for the way your eyes see the world.</p>
		</div>
		<div class = "home_cnt_3 cnt_32" style="    margin-top: 50px;    margin-left: 7%;">
            <p class="custom_text"> Simulate your situation through the Hoya lenses</p>
		</div>
		<a href="/lens">
		<div class = "home_cnt_3 home_s_bt " style="    margin-bottom: 10px;position:relative;margin-top:0px;margin-top:0px;margin-left: 20%;width:372px;height:100px;margin-left: 20%;    margin-top: 50px;">			
		    <img id="btid" class="home_cnt_3 home_s_bt home_s_bt1" src = "/images/normal_bt.png" style="width:372px;height:100px;    margin-top: 50px;" onmouseover="selectOver()" onmouseout="unselectOut()">
            <p id="pid" class="custom_text custom_text1" style=" position:absolute;margin-left:0px;margin-top:0px;   color: #000;    margin-left: 75px;" onmouseover="selectOver()" onmouseout="unselectOut()">START SIMULATION</p>
			
		</div>
		</a>
    </div>

<!--<div class="container" style="width:100%;position:relative; z-index:60">
	<div id="bodycontainer">
			<div style="overflow: hidden;" id="gallerycontainer">
					<ul style="height: 0px; width: 3170px;" class="mouseslider">
						<li><img src="images/singlevision.jpg"></li>
						<li><img src="images/progressive.jpg"></li>
						<li><img src="images/occupational.jpg"></li>
						<li><img src="images/AR.jpg"></li>
						<li><img src="images/photocromics.jpg"></li>
						<li><img src="images/lensmaterial.jpg"></li>
						
					</ul>
			</div>
			
		</div>
</div>-->
<div class="container landslide1" style="width:100%;position:relative; z-index:67">
		 <ul class="kwicks kwicks-horizontal" style="    overflow: hidden;">
			<li onclick="window.open('/singlevision','_self');" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom1" src = "/images/img1.jpg" style=""/>
			    <p class="material-text">Single Vision</p></li>
			<li onclick="window.open('/progressive','_self');" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom1" src = "/images/img2.jpg" style=""/>
			    <p class="material-text">Progressive Lens</p></li>
			<li onclick="window.open('/speciality','_self');" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom1" src = "/images/img3.jpg" style=""/>
			    <p class="material-text">Occupational Lens</p></li>
			<li onclick="window.open('/treatment','_self');" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom1" src = "/images/img4.jpg" style=""/>
			    <p class="material-text">Anti-Reflection</p></li>
			<li onclick="window.open('/photochromics','_self');" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom1" src = "/images/img5.jpg" style=""/>
			    <p class="material-text">Photochromics</p></li>
			<li onclick="window.open('/lensmaterial','_self');" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom1" src = "/images/img6.jpg" style=""/>
			    <p class="material-text">Lens Materials</p></li>
	     </ul>
</div>

	<div id="container1" class="landslide2" style="width:100%;position:relative; z-index:65">
        <div id="lens_carousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators" style="position:absolute;bottom:-190px; z-index:65">
                <li data-target="#lens_carousel" data-slide-to="0" class="active"></li>
                <li data-target="#lens_carousel" data-slide-to="1"></li>
                <li data-target="#lens_carousel" data-slide-to="2"></li>
                <li data-target="#lens_carousel" data-slide-to="3"></li>
                <li data-target="#lens_carousel" data-slide-to="4"></li>
                <li data-target="#lens_carousel" data-slide-to="5"></li>
            </ol>
            <!-- Wrapper for Slides -->
            <div class="carousel-inner" style=" clear:both; float:left; z-index:65">
                <div class="item active">
                    <li onclick="window.open('/singlevision','_self');" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom2" src = "/images/img1.jpg" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="material-text1" style="width:100%;position:absolute;text-align:center;font-size:40px">Single Vision</p></li>
                </div>
                <div class="item">
                    <li onclick="window.open('/progressive','_self');" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom2" src = "/images/img2.jpg" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="material-text1" style="width:100%;position:absolute;text-align:center;font-size:40px">Progressive Lens</p></li>
                </div>
                <div class="item">
                    <li onclick="window.open('/speciality','_self');" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom2" src = "/images/img3.jpg" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="material-text1" style="width:100%;position:absolute;text-align:center;font-size:40px">Occupational Lens</p></li>
                </div>
                <div class="item">
                    <li onclick="window.open('/treatment','_self');" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom2" src = "/images/img4.jpg" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="material-text1" style="width:100%;position:absolute;text-align:center;font-size:40px">Anti-Reflection</p></li>
                </div>
                <div class="item">
                    <li onclick="window.open('/photochromics','_self');" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom2" src = "/images/img5.jpg" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="material-text1" style="width:100%;position:absolute;text-align:center;font-size:40px">Photochromics</p></li>
                </div>
                <div class="item">
                    <li onclick="window.open('/lensmaterial','_self');" onmouseover="this.style.cursor='pointer';"><img class = "imgbottom2" src = "/images/img6.jpg" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="material-text1" style="width:100%;position:absolute;text-align:center;font-size:40px">Lens Materials</p></li>
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
<!--***********************************************************************************************************-->
<!--***************************************** popup ***********************************************************-->
<!--***********************************************************************************************************-->
  <div id="homecontent_2" class="detailpop fade" style="overflow-y:auto;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="overflow-y:auto;">
		<div class="detailpop-content" style="background-image:url(/images/products/progressive_popup_3.png)">
			<div class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content">
					<ul >
						<li class="p_subject">HOYALUX iD</li>
                        <li class="p_title1">Hoyalux iD is the world’s first Intefrated Double Surface Design that imposes no limitations on the weareyalux iD integrates the best of both worlds: a wide, distortion-free field of vision at all distances and fast interaction between far and near.</li>
                        <li class="p_subject">Benefits</li>
                        <li class="p_title2">An extremely clear, natural vision in and at all directions</li>
                        <li class="p_title2">Smooth switching from far to near</li>
                        <li class="p_title2">Widest possible field of vision</li>
                        <li class="p_title2">Unsurpassed feeling of comfort, 100% stability when moving (even when using the stairs)</li>
                        <li class="p_subject" style="margin-top:20px">Lens Material Availability</li>
                        <li class="logo_link"><img src="/images/products/logo_mark.png" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
   </div>
    
    <div id="homecontent_3" class="detailpop fade" style="overflow-y:auto;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="overflow-y:auto;">
		<div class="detailpop-content" style="background-image:url(/images/products/progressive_popup_7.png)">
			<div class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content">
					<ul >
						<li class="p_subject">HOYALUX iD LIFESTYLE V+</li>
                        <li class="p_title1">Hoyalux iD Lifestyle V+ is Hoya’s new progressive lens design dedicated to the feedback through customer’s ordering behaviour and data input for order of iD FreeForm Design Series.</li>
                        <li class="p_subject">Benefits</li>
                        <li class="p_title2">Maximum visual acuity and a crisper image perception</li>
                        <li class="p_title2">A noticeably more relaxed vision</li>
                        <li class="p_title2">Remarkable accurate correction.</li>
                        <li class="p_title2">Freedom on frame choice</li>
                        <li class="p_subject" style="margin-top:20px">Lens Material Availability</li>
                        <li class="logo_link"><img src="/images/products/logo_mark.png" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  
<script type='text/javascript'>
			$(function() {
				$('.kwicks').kwicks({
					spacing : 0,
					behavior: 'menu',
					selectOnClick: false
				});
			});
		</script>

