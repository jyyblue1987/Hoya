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
	      var selARflag=0,  
              imgARURL ; 
          var progresflag=0;		
		  var screenratio = 1.5;	

		  var imgw = 0, imgh = 0;		  
		  $(document).ready(function() { 	
			$('.zoomple').zoomple({ 
				 offset : {x:-150,y:-150},
				 zoomWidth : 300,  
				 zoomHeight : 300,
				 roundedCorners : true,
				 delay:1,
				 pageNum:3
				 
			});
			/* for(var i = 0; i < 3; i++){
				var screenratio1 = 1.5;
				switch(i){
					case 0:
					screenratio1 = 1.5;
					break;
					case 1:
					screenratio1 = 2.5;
					break;
					case 2:
					screenratio1 = 3.5;
					break;
				}
				$.ajax({
					type: "GET",
					url: "/images/products/treatmentBC_"+screenratio1+".png",async: true,
					dataType:'HTML', //or HTML, JSON, etc.
					success: function(response){	
						$.ajax({
							type: "GET",
							url: "/images/products/treatment_"+screenratio1+".png",async: true,
							dataType:'HTML', //or HTML, JSON, etc.
							success: function(response){								
								
							}
						});
					}
				});
			}  */
			
		 }); 
		 function selARoption(){
			 switch(selARflag){
			     case 0: document.getElementById("optionbar_AR").style.transform="translate("+"+"+"77px,0)";
				         document.getElementById("simulator-ARbackimg").style.visibility="visible";
				         selARflag=1;
						 break;
				case 1:  document.getElementById("optionbar_AR").style.transform="translate(0px,0)";
				         document.getElementById("simulator-ARbackimg").style.visibility="hidden";
				         selARflag=0;
						 break;
			 }
			 $(".container").css("display", "block");
			 
		 }
		
		$(window).resize(function () {
			var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			 var ratio = Math.round(screenwidth * 10.0 / screenheight) / 10;
			 //console.log(ratio);
			 if(ratio < 1.4){
				 screenratio = 1.5;
			 }else if(ratio < 1.9){
				 screenratio = 2.5;
			 }else{
				 screenratio = 3.5;
			 }
			// selARoption();
			//location.reload();
			positionOption();
		});
		$(document).on("click", "#treatment_part", function (e) {
			$win_center = $(window).width() / 2; 
			$pos_x = e.pageX;
			
			if($pos_x > $win_center){
				$('#treatment_1').modal('show');
			}else{
				$('#treatment_2').modal('show');
			}
		});
		 $(function(){ 
			 var simulator_img=document.getElementById("simulator_AR");
			 //simulator_img.style.width=window.innerWidht+"px";
			 var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			 var ratio = Math.round(screenwidth * 10.0 / screenheight) / 10;
			 //alert(ratio);
			 if(ratio < 1.4){
				 screenratio = 1.5;
			 }else if(ratio < 2.2){
				 screenratio = 2.5;
			 }else{
				 screenratio = 3.5;
			 }
			 var imgheight = Math.round(3744.0 * screenwidth * 10.0 / 5616.0) / 10;
			 var imgwidth = screenwidth;
			 //simulator_img.style.height="850px";
			 
			 imgw = imgwidth;
			 imgh = imgheight;
			 if(imgh < 500){
				 imgh = 500;
			 }
			 			 
			 document.getElementById("simulator_AR").src = "/models/timthumb.php?src=/images/products/AR.jpg&w="+imgw+"&h="+imgh;
			 //imgARURL = "/models/timthumb.php?src=/images/products/AR.jpg&w="+imgw+"&h="+imgh;
			 var lens_img=document.getElementById("lens_img");
			 lens_img.href = "/models/timthumb.php?src=/images/products/AR.jpg&w="+imgw+"&h="+imgh;
			 
			 selARoption();
			 positionOption();
		});
		function positionOption(){
			
			 var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			 if(screenwidth > 800){
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * screenwidth * 1.0 / 1920.0);
				 $('#aboutdivid').css("height",hh+"px");
				 $('.singlevision_cnt_1').css("margin-left","60%");
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
				 $('#treatment_part').css("height",hh+"px");
				 var hh = Math.round(130 * screenwidth * 1.0 / 1920.0);
				 $('#ar_icon_1').css("height",hh+"px");
				 $('#ar_icon_2').css("height",hh+"px");
				 $('#p1').css("font-family","Helvetica !important");
			 }else{
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * 800 * 1.0 / 1920.0);
				 $('#aboutdivid').css("height",hh+"px");
				 $('.singlevision_cnt_1').css("margin-left","60%");
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
				 if(screenwidth < 600){
					 $('.singlevision_cnt_1').css("margin-left","10%");
				 }
				 var hh = Math.round(605 * screenwidth * 1.0 / 1920.0);
				 if(hh < 200)
					 hh = 200;
				 $('#treatment_part').css("height",hh+"px");
				 var hh = Math.round(130 * 800 * 1.0 / 1920.0);
				 $('#ar_icon_1').css("height",hh+"px");
				 $('#ar_icon_2').css("height",hh+"px");
			 }
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
			 
			 ff = Math.round(230 *  1500.0/ (screenwidth * 1.0));	
			 if(ff > 230) ff=230;
			 //$('.bottomlog12').css("top",ff+"px");	
			 ff = Math.round(450 * screenwidth * 1.0 / 1500.0);
			 if(ff > 550) ff=550;	
			 if(ff < 380){
				 ff = Math.round(380 + 1500.0/ (screenwidth * 1.0));
			 }
			 //$('.bottomlog13').css("top",ff+"px");		
			 ff = Math.round(40 * screenwidth * 1.0 / 1500.0);	
			 //$('.bottomlog12').css("right",ff+"px");		
			 //$('.bottomlog13').css("right",ff+"px");		
			 ff = Math.round(200 * screenwidth * 1.0 / 1500.0);
			 if(ff > 200)ff=200;
			 $('.bottomlog12').css("width",ff+"px");	
			 ff = Math.round(270 * screenwidth * 1.0 / 1500.0);	
			 if(ff > 270) ff=270;
			 $('.bottomlog13').css("width",ff+"px");
			 if(screenwidth < 1000){
				 $('.bottomlog13').css("display","none");
				 $('.bottomlog12').css("display","none");
			 }else{
				 $('.bottomlog13').css("display","block");
				 $('.bottomlog12').css("display","block");
			 }
		}
	 </script>   
<div class="container_about" style="width:100%;position:relative;">
	<div id="top_black" class="about_group_left" style=" background-color:#343434; height:90px;">
	</div>
	<div id="top_grey" class="about_group_left" style=" background-image:url(/images/products/fullproduction_img1.png); background-repeat:repeat; height:120px;">
        <div class = "about_cnt_2" style="margin-top:17px">
	        <div class="center">
				<h2 style=" text-align:center; color:#464646">Treatment - Anti-Reflection</h2>
				<p class = "text_disp product_txt_1" style="margin-top:10px">Hoya is renowned for the in house development and advanced application of the highest quality Anti-Reflection coatings. </p>
			</div>
        </div>
	</div>
	<div id = "aboutdivid"  class="" style="position:relative;z-index:98;background-image:url(/images/products/products_back1.png); background-position:left top; background-size:cover; height:650px;min-width:100%">
		<div class = "singlevision_cnt_1">
			<h1 id="h11" style="color:#464646">Anti-reflection Coating</h1>
			<p  id="p1" style="width:90%; color:#464646">Hoya's Anti-Reflection (AR) coatings are applied to lenses to eliminate surface reflections, therefore enhancing the appearance of the lenses. Optimum performance of lenses only occurs when the coatings are perfectly integrated with the lens material itself.<br><br>Hoya has established itself as a market leader in innovating AR coatings. All of our AR coatings are known for their high quality and durability.</p>
		</div>
	</div>
</div>
    <div class="container container-simulator" style="z-index:50;display:none">
            <a id = "lens_img" href="" class="zoomple"  style="min-width:100%;width:100%; height:100%;">
            	<img id="simulator_AR"  style="min-width:100%; width:100%; height:100%;" src = "" alt=""/>	
            	<img id="simulator_AR1"  style="min-width:100%; width:100%;   position: absolute;    bottom: 0px;    left: 0px;" src = "/images/products/AR1.png" alt=""/>
				<img id="simulator-ARbackimg" src = "" style="min-width:100%;width:100%;height:100%;position:absolute;top:0px;left:0px;background: blue; opacity: 0.03;"/>
            </a>
            <div id="pop_single_AR" style="width: 550px;">
            	<ul>
                	<li><p style="margin-left:-5px">WITHOUT BLUE CONTROL</p></li>
                    <li style="margin-left: 5px;">
                    	<div onclick="selARoption()">
	                        <img id="optionbar_AR"src="/images/products/optionbar_sel_1.png" alt=""/>
                        </div>
                    </li>
                    <li style="margin-left: 5px;"><p>WITH BLUE CONTROL</p></li>
                </ul>
            	<ul>
                	<li><p style="margin-left:0px">AR treatment reduce eyestrain and fatigue caused by blue light waves.<br/>(which you're string at right now)</p></li>
                </ul>
            </div>
    </div>

	<div id="treatment_part" class="row active" style="position:relative;z-index:201;background-image:url(/images/products/products_back3.png); background-position:center top; background-size:cover; height:604px;">
	   <div style="float:left;"><img id="ar_icon_1"  style="" src = "images/products/h_longlife.svg" alt=""/>	</div>
	   <div style="    right: 0px;  text-align: right;   position: absolute;"><img id="ar_icon_2"  style="" src = "images/products/h_bluecontrol.svg" alt=""/>	</div>
	</div>
<!--********************************************************************************************************************
***************************************** POP UP window ****************************************************************
**********************************************************************************************************************-->
  <div id="treatment_1" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/AR_BC.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/h_bluecontrol.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject_blue">For that extra bit of comfort in the digital world</li>
                        <li class="p_title3">LCD and LED computer and television screens, smartphones, tablets and GPS devices all emit blue light, also known as high energy visible light. Although blue light in itself is a natural phenomenon – it is present in daylight and helps us to stay awake – over-exposure can have an adverse effect and cause eye strain, eye fatigue and even sleeplessness.</li>
                        <li class="p_subject_blue">Benefits</li>
                        <li class="p_title2">Neutralises blue light, preventing from eye strain and fatigue.</li>
                        <li class="p_title2">Reduces glare for a more comfortable and relaxed vision.</li>
                        <li class="p_title2"> Better contrast perception offering a more natural colour experience.</li>
                        <li class="p_title2">Plus all the benefits of Hoya’s AR coatings.</li>
						<li class="logo_link"><img class="bottomlog" src="/images/popup/logo_blue.svg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  

  <div id="treatment_2" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/AR_longlife.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/h_longlife.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#fff">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject_blue">HVLL - The hardest AR coating available</li>
                        <li class="p_title3">The quality and durability of spectacle lenses are very much affected by the quality of the coating. Hi-Vision LongLife is an innovative and exceptionally durable anti-reflection coating which confirms Hoya’s leading position in this segment. Hi-Vision LongLife is the hardest anti-reflection coating available on the market today. A unique total composition with a strong adhesion between the various layers ensures years of excel</li>
                        <li class="p_subject_blue">Benefits</li>
                        <li style="width:62%" class="p_title2">Relaxed vision thanks to excellent anti-reflection</li>
                        <li style="width:62%" class="p_title2">Easy to clean due to water, grease, dirt and dust repellent layer</li>
                        <li style="width:62%" class="p_title2">Extremely durable and reliable</li>
                        <li style="width:62%" class="p_title3">*Anti-reflection, scratch resistance, water repellent, dirt repellent, anti-static</li>
						<li style="list-style-type:none"><img class="bottomlog12" style="position: absolute;right:20px;width:170px;bottom:190px;"src="/images/popup/AR_object.jpg" /></li>
						<li style="list-style-type:none"><img class="bottomlog13" style="position: absolute;right:20px;bottom:30px;width:220px;"src="/images/popup/AR_logo.jpg" /></li>
					    <li class="p_title3" style="width:62%;color:#b8944b;margin-top:60px">Hi-Vision(HVLL) coating is given 2 years warranty against all manufaturing defects.</li>
						<li class="logo_link" style="margin-top:20px"><img class="bottomlog" src="/images/popup/logo_blue.svg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  