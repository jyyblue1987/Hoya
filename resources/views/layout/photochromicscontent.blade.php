
<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

<script type="text/javascript">
/* $('.carousel').carousel({
	interval: 5000 //changes the speed
})

$(function () {
  $('.js-popover').popover()
  $('.js-tooltip').tooltip()
  $('#tall-toggle').click(function () {
    $('#tall').toggle()
  })
}) */
<!--************************* when window resize, process ******************************-->
<!--*************************** 2016-2-2 coding by ksch*********************************-->
window.addEventListener('resize', function(event) {
	var width_v = document.documentElement.clientWidth;
	var cnt_title;
	cnt_title = document.getElementById("")
	if(width_v < 250){
		
	}else if(width_v < 650){
	
	}
	
});
</script>
	


	<link rel="stylesheet" media="screen" href="css/zoomple.css" type="text/css">
	 <script src="js/zoomple1.js" type="text/javascript"></script>   


	 <script type="text/javascript">
		  var screenratio = 1.5;
	      var selPCflag=0,  
              imgPCURL = "/images/products/photoOutside.png"; 
          var progresflag=0;		
		  var imgw = 0, imgh = 0;	  
		  var transval = 0;
		  $(document).ready(function() { 	
			$('.zoomple').zoomple({ 
				 offset : {x:-150,y:-150},
				 zoomWidth : 300,  
				 zoomHeight : 300,
				 roundedCorners : true,
				 delay:1,
				 pageNum:5
				 
			});
			/* for(var i = 0; i < 2; i++){
				var screenratio1 = 1.5;
				switch(i){
					case 0:
					screenratio1 = 1.5;
					break;
					case 1:
					screenratio1 = 2.5;
					break;
				}
				$.ajax({
					type: "GET",
					url: "/images/products/photoOutside_"+screenratio1+".png",async: true,
					dataType:'HTML', //or HTML, JSON, etc.
					success: function(response){	
						$.ajax({
							type: "GET",
							url: "/images/products/photoPC_"+screenratio1+".png",async: true,
							dataType:'HTML', //or HTML, JSON, etc.
							success: function(response){						
								
							}
						});
					}
				});
			}  */
			
		 }); 
		  
		$(window).resize(function () {
			var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			 var ratio = Math.round(screenwidth * 10.0 / screenheight) / 10;
			 //console.log(ratio);
			  if(ratio < 1.9){
				 screenratio = 1.5;
			 }else{
				 screenratio = 2.5;
			 }
			 //selPCoption();
			//location.reload();
			//location.reload();
			PositionOption();
		});
		 function selPCoption(){
			 switch(selPCflag){
			     case 0: document.getElementById("optionbar_PC").style.transform="translate("+"+"+""+transval+"px,0)";
				         //$('#zoomover').attr("src","/models/timthumb.php?src=/images/products/pc_clear.jpg&w="+imgw+"&h="+imgh);
				         imgPCURL = "/models/timthumb.php?src=/images/products/pc_clear.jpg&w="+imgw+"&h="+imgh;
						 selPCflag=1;
						 break;
				case 1:  document.getElementById("optionbar_PC").style.transform="translate(0px,0)";
				         //$('#zoomover').attr("src","/models/timthumb.php?src=/images/products/pc.jpg&w="+imgw+"&h="+imgh);
				         imgPCURL = "/models/timthumb.php?src=/images/products/pc.jpg&w="+imgw+"&h="+imgh;
						 selPCflag=0;
						 break;
			 }
			 $(".container").css("display", "block");
			 
		 }

		$(document).on("click", "#photochromics", function (e) {
			$win_center = $(window).width() / 2; 
			$pos_x = e.pageX;
			
			if($pos_x > $win_center){
				$('#photochromics_1').modal('show');
			}else{
				$('#photochromics_2').modal('show');
			}
		});
		 $(function(){ 
			 var simulator_img=document.getElementById("simulator_PC");
			 //simulator_img.style.width=window.innerWidht+"px";
			 var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			 var ratio = Math.round(screenwidth * 10.0 / screenheight) / 10;
			 //alert(ratio);
			 if(ratio < 1.9){
				 screenratio = 1.5;
			 }else{
				 screenratio = 2.5;
			 }
			 var imgheight = Math.round(982.0 * screenwidth * 10.0 / 1920.0) / 10;
			 var imgwidth = screenwidth;
			 //simulator_img.style.height="850px";
			 
			 imgw = imgwidth;
			 imgh = imgheight;
			 if(imgh < 500){
				 imgh = 500;
			 }
			 document.getElementById("simulator_PC").src = "/models/timthumb.php?src=/images/products/pc.jpg&w="+imgw+"&h="+imgh;
			 selPCoption();
			 PositionOption();
			 
		});
		function PositionOption(){
			 var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			
			 if(screenwidth > 800){
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * screenwidth * 1.0 / 1920.0);
				 $('#aboutdivid').css("height",hh+"px");
				 $('.singlevision_cnt_1').css("margin-left","3%");
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
				 var hh = Math.round(605 * screenwidth * 1.0 / 1920.0);
				 $('#photochromics').css("height",hh+"px");
				 var hh = Math.round(130 * screenwidth * 1.0 / 1920.0);
				 $('#pc_icon_1').css("height",hh+"px");
				 $('#pc_icon_2').css("height",hh+"px");
				 $('#p1').css("font-family","Helvetica !important");
			 }else{
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * 800 * 1.0 / 1920.0);
				 $('#aboutdivid').css("height",hh+"px");
				 $('.singlevision_cnt_1').css("margin-left","3%");
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
					 $('.singlevision_cnt_1').css("margin-top","10px");
				 }else{
					$('.singlevision_cnt_1').css("margin-top",top1+"px");
				 }
				 var hh = Math.round(605 * 800 * 1.0 / 1920.0);
				 $('#photochromics').css("height",hh+"px");
				 var hh = Math.round(130 * 800 * 1.0 / 1920.0);
				 $('#pc_icon_1').css("height",hh+"px");
				 $('#pc_icon_2').css("height",hh+"px");
				 if(screenwidth < 600){
					 $('.singlevision_cnt_1').css("margin-left","10%");
				 }
			 }
			 hh = Math.round(160 * screenwidth * 1.0 / 1920.0);
			 if(hh < 20)
				 hh = 20;
			 $('.fullproduct_cnt_2').css("margin-top",hh + "px");
			 
			 
			 ff = Math.round(650 * screenwidth * 1.0 / 1500.0);	
			 $('.popup_iconimg').css("top",ff+"px");	
			 ff = Math.round(60 * screenwidth * 1.0 / 1500.0);	
			 $('.popup_iconimg').css("right",ff+"px");	
			 ff = Math.round(180 * screenwidth * 1.0 / 1500.0);	
			 if(ff < 50)ff = 50;
			 $('.popup_iconimg').css("width",ff+"px");
			 $('.popup_iconimg').css("height","auto");
			 ff = Math.round(80 * screenwidth * 1.0 / 1500.0);	
			 $('.contentdial').css("margin-left",ff+"px");	
			 ff = Math.round(286 * screenwidth * 1.0 / 1500.0);	
			 $('.bottomlog').css("width",ff+"px");
			 
			 
			  ff = Math.round(134 * screenwidth * 1.0 / 1920.0);
			 if(ff < 80){
				 ff = 80;
			 }
			 if(ff >130){
				 ff = 130;
			 }
			 $('.optionimg').css("width",ff+"px");
			 $('.optionimg').css("margin-top","5px");
			 var ff1 = Math.round(40 * screenwidth * 1.0 / 1920.0);
			 if(ff1 < 20){
				 ff1 = 20;
			 }
			 if(ff1 > 40)ff1 = 40;
			 transval = ff-18-ff1;
			 $('#optionbar_PC').css("transform","translate("+transval+"px, 0px)");
			 ff = Math.round(16 * screenwidth * 1.0 / 1920.0);
			 if(ff < 12){
				 ff = 12;
			 }
			 if(ff >16)ff = 16;
			 $('.optiontext').css("font-size",ff+"px");
			  ff = Math.round(44 * screenwidth * 1.0 / 1920.0);
			 if(ff < 24){
				 ff = 24;
			 } 
			 if(ff > 44)ff = 44;
			 $('#optionbar_PC').css("width",ff+"px");
			 $('#optionbar_PC').css("margin-top","4px");
			 $('.optionimg').css("height","57px");
			 if(screenwidth < 1400){
				  $('.optionimg').css("height","47px");
			 }
			 if(screenwidth < 800){
				  $('.optionimg').css("height","37px");
			 }
		}
	 </script>   
<div class="container_about" style="width:100%;position:relative;">
	<div id="top_black" class="about_group_left" style=" background-color:#343434; height:90px;">
	</div>
	<div id="top_grey" class="about_group_left" style=" background-image:url(/images/products/fullproduction_img1.png); background-repeat:repeat; height:120px;">
        <div class = "about_cnt_2" style="margin-top:17px">
	        <div class="center">
				<h2 style=" text-align:center; color:#464646">Treatment - PHOTOCHROMICS</h2>
				<p class = "text_disp product_txt_1" style="margin-top:10px">Light will never be more comfortable.</p>
			</div>
        </div>
	</div>
	<div id = "aboutdivid"   class="about_group" style="position:relative;z-index:98;background-image:url(/images/products/photochromics_back1.jpg); background-position:right top; background-size:cover;  height:650px;min-width:100%">
		<div class = "fullproduct_cnt_2">
			<h1 id="h11" style="color:#464646">Photochromics</h1>
			<p id="p1" style="width:40%;text-align:left; color:#464646">Hoya photochromic lenses darken under UV exposure and clear indoors without you having to take your glasses off. For the convenience of a two-in-one, photochromic lenses are suitable for any wearer.<br/><br/>Protecting your vision has never been more convenient.</p>
		</div>
	</div>
</div>	 
    <div class="container container-simulator" style="z-index:50;display:none">
            <a id="lens_img" href="" class="zoomple"  style="min-width:100%;width:100%; height:100%;">
            	<img id="simulator_PC" style="min-width:100%;width:100%; height:100%;"src = "" alt=""/>	
            </a>
            <div id="pop_single_PC" style="width: 590px;">
            	<ul>
                	<li><p class="optiontext" style="margin-left:105px;text-shadow: rgb(0, 0, 0) 1px 1px 3px;">WITHOUT</p></li>
                    <li>
                    	<div class="optionimg" style="cursor:pointer;background-repeat: no-repeat;    background-size: contain;" onclick="selPCoption()" style="">
	                        <img id="optionbar_PC"src="/images/products/optionbar_sel_1.png" alt=""/>
                        </div>
                    </li>
                    <li><p class="optiontext" style="text-shadow: rgb(0, 0, 0) 1px 1px 3px;">WITH</p></li>
                </ul>
            	<ul>
                	<li><p class="optiontext" style="margin-left:0px;text-shadow: rgb(0, 0, 0) 1px 1px 3px;">HOYA photocromics lenses go darker in the sunlight and clear indoors without<br/>you having to take your glasses off.</p></li>
                </ul>
            </div>
    </div>
    
	<div id="photochromics" class="row active" style="position:relative;z-index:201;background-image:url(/images/products/photochromics_back3.jpg); background-position:center top;position:relative; background-size:cover; height:606px;">
	     <div style="float:left;position: absolute;bottom:20px;margin-left:30%;">
		     <img id="pc_icon_1" style="cursor:pointer;" src = "/images/products/p_sensity.svg" alt=""/>
		 </div>
		 <div style="position:absolute;right:0px;bottom:10px;text-align:right;">
	         <img id="pc_icon_2"  style="cursor:pointer;height:80px" src = "images/products/p_transitions.svg" alt=""/>	
		</div>
	</div>
<!--********************************************************************************************************************
***************************************** POP UP window ****************************************************************
**********************************************************************************************************************-->
  <div id="photochromics_1" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" >
		    <img class="popup_modalimg" src="/images/products/photochromics_transitions1.jpg" alt=""/>
			<div class="detailpop-header" style="position:absolute;top:0px;right:0px">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header" style="background-color:#231f20">
				<div id="detail_pop_content"  class="contentdial">
					<ul style="width:80%">
						<li class="p_subject" style="color:white">Transitions® Signature™</li>
                        <li class="p_title1" style="color:white">Hoya Transitions Signature VII lenses are the most balanced every day adaptive lenses. They have the ideal combination of darkness, fast fade back speed and indoor clarity. They provide lens wearers with optimal comfort in all situations and temperatures, and protect against harmful UV rays.<br/>These unique characteristics respond to many different wishes that lens wearers might have with regards to specific life situations. That makes them fit to individual lifestyles.</li>
                        <li class="p_subject" style="color:white">Features</li>
                        <li class="p_title2" style="color:white">Completely clear indoors and at night</li>
                        <li class="p_title2" style="color:white">Fast fade back speed</li>
                        <li class="p_title2" style="color:white">Block 100% of UVA & UVB rays</li>
                        <li class="p_title2" style="color:white">Designed to work with most prescriptions and frames</li>
                        <li class="p_title2" style="color:white">Suitable for any age including children</li>
					</ul>
				</div>
			</div>
			<img class="popup_modalimg" src="/images/products/photochromics_transitions2.jpg" alt=""/>
			<div class="detailpop-body detailpop-header" style="background-color:#231f20">
			   <div id="detail_pop_content" style="text-align:center">
			    <ul>
				    <li class="p_title3" style="color:white;align:center"><font style="font-weight:bold">transitions.com </font><font style="font-style:italic">Transitions </font>and<font style="font-style:italic"> the swirl </font>are registered trademarks and<font style="font-style:italic"> Signature </font>is a trademark of Transitions Optical, Inc. @2015 Transition Optical, Inc.<br><font style="font-weight:bold">Photochromic performance is influenced by temperature, UV exposure and lens material.</font></li>
				</ul>
			   </div>	
			</div>
		</div>
    </div>
  </div>  

  <div id="photochromics_2" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/products/photocromic.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/p_sensity.svg" alt="" />
			<div class="detailpop-header" style="position:absolute;top:0px;right:0px">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">Sensity - Light up every situation</li>
                        <li class="p_title3">Light will never be more comfortable with our new Hoya Sensity lenses. Sensity ensures you see comfortably in all light conditions without having to change your glasses.<br/><br/></li>
                        <li class="p_title3">Stabilight Technology™ is an innovation in the photochromic category. It is Hoya's answer to light, UV and temperature reactivity – and it works. Tested across different climates, regions, altitudes and temperatures. This technology provides a consistent photochromic performance that darken outdoors at the speed of light and fade back quickly to an exceptionally clear lens indoors with total UV protection to your eyes.<br/><br/></li>
						<li class="p_title3">Sensity light reactive lenses are made with Hoya’s Photochromic Precision Technology, a microscopically accurate spin coating process that gives an exceptional performance and extended durability. </li>
						<li class="p_subject">Benefits</li>
                        <li class="p_title3">• Give you comfortable vision in all light conditions</li>
                        <li class="p_title3">• Perform consistently in all climates, seasons and circumstances</li>
                        <li class="p_title3">• Darken swiftly to sunglasses outdoors</li>
						<li class="p_title3">• Fade quickly back to full clarity indoors</li>
						<li class="p_title3">• Provide 100% protection against UV-A and UV-B rays</li>
						<li class="p_title3">• Are available in three stylish colours: bronze brown, silver grey and green</li>
						<li class="logo_link"><img class="bottomlog" src="/images/popup/logo_blue.svg" /></li>
						<li><img class="bottomlog15" style="position: absolute;right:40px;width: 30%;bottom: 30px;"src="/images/popup/photochromic_sensity1.jpg" /></li>
                    </ul>
				</div>
			</div>
		</div>
    </div>
  </div>  