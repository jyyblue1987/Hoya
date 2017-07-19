
<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
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
			 var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
				 var h1 = Math.round(40 * screenwidth * 1.0 / 2220.0);
				 
				 var ff1 = Math.round(65 * screenwidth * 1.0 / 2220.0);
				 var ff2 = Math.round(30 * screenwidth * 1.0 / 2220.0);
				 var space = Math.round(70 * screenwidth * 1.0 / 2220.0);
				 if(ff2 < 12){
					 ff2 = 12;
				 }
				 if(ff1 < 20){
					 ff1 = 20;
				 }
				 $('.middle_titlestr').css("margin-top",h1+"px");
				 $('.middle_titlestr').css("font-size",ff1+"px");
				 $('.top_titlestr').css("font-size",ff2+"px");
				 space = Math.round(80 * screenwidth * 1.0 / 2220.0);
				 if(space < 15){
					 space = 15;
				 }
				 $('.top_titlestr').css("margin-left",space+"px");
				 space = Math.round(140 * screenwidth * 1.0 / 2220.0);
				 if(space < 30){
					 space = 30;
				 }
				 $('.middle_titlestr').css("margin-left",space+"px");
				 space = Math.round(80 * screenwidth * 1.0 / 2220.0);
				 if(space < 20){
					 space = 20;
				 }
				 if(space > 80)space = 80;
				 $('.title11').css("font-size",space+"px");
				 space = Math.round(35 * screenwidth * 1.0 / 2220.0);
				 if(space < 9){
					 space = 9;
				 }
				 if(space > 25)space = 25;
				 $('.text_disp').css("font-size",space+"px");
				 if(space < 11){
					 space = 11;
				 }
				 space = space+3;
				 $('.text_disp').css("line-height",space+"px");
				 space = Math.round(602 * screenwidth * 1.0 / 1920.0);
				 if(space < 300){
					 space = 300;
				 }
				 $('.bottom12').css("height",space+"px");
				 space = Math.round(727 * screenwidth * 1.0 / 996.0);
				 if(space < 200){
					 space = 200;
				 }
				 var space1 = Math.round(40 * screenwidth * 1.0 / 2200.0);
				 if(space1 < 7){
					 space1 = 7;
				 }
				 $('.bottom13').css("height",space+"px");
				// $('.text_disp').css("margin-top",space/5+space1+"px");
				 if(screenwidth < 800){
					 space1 = Math.round(704 * screenwidth * 1.0 / 800.0);
					 if(space1 < 300){
						 space1 = 300;
					 }
					 $('.about_group_left').css("height",space1+"px");
					 space1 = Math.round(80 * screenwidth * 1.0 / 800.0);
					 if(space1 < 10){
						 space1 = 10;
					 }
					 $('.about_cnt_1').css("left",space1+"px");
					 $('.about_cnt_1').css("bottom",space1+"px");
					 space1 = Math.round(50 * screenwidth * 1.0 / 800.0);
					 if(space1 < 15){
						 space1 = 15;
					 }
					 $('.title20').css("font-size",space1+"px");
					 space1 = Math.round(17 * screenwidth * 1.0 / 800.0);
					 if(space1 < 10){
						 space1 = 10;
					 }
					 $('.title21').css("font-size",space1+"px");
					
					$('#jssor_1').css("display","none");
					$('.bottom40').css("display","block");
					space1 = Math.round(110 * screenwidth * 1.0 / 800.0);
					 if(space1 < 10){
						 space1 = 10;
					 }
					 space1 = space1-110;
					 $('.jssor-year').css("margin-top",space1+"px");
					 space1 = Math.round(42 * screenwidth * 1.0 / 800.0);
					 if(space1 < 15){
						 space1 = 15;
					 }
					 $('.jssor-year').css("font-size",space1+"px");
					 space1 = Math.round(22 * screenwidth * 1.0 / 800.0);
					 if(space1 < 10){
						 space1 = 10;
					 }
					 $('.jssor-content').css("font-size",space1+"px");
					 space1 = Math.round(450 * screenwidth * 1.0 / 800.0);
					 if(space1 < 200){
						 space1 = 200;
					 }
					 $('.jssor-content').css("top",space1+"px");
					 space1 = Math.round(16 * screenwidth * 1.0 / 800.0);
					 if(space1 < 10){
						 space1 = 10;
					 }
					 $('.indi1').css("width",space1+"px");
					 $('.indi1').css("height",space1+"px");
					 space1 = Math.round(170 * screenwidth * 2.0 / (800.0 * 3.0));
					 if(space1 < 50){
						 space1 = 50;
					 }
					 $('.bottom50').css("width",space1+"px");
					 space1 = Math.round(18 * screenwidth * 1.0 / 800.0);
					 if(space1 < 12){
						 space1 = 12;
					 }
					 $('.bottom501').css("font-size",space1+"px");
					 space1 = Math.round(17 * screenwidth * 1.0 / 800.0);
					 if(space1 < 10){
						 space1 = 10;
					 }
					 $('.bottom502').css("font-size",space1+"px");  
					 $('.bottom503').css("margin","0px 20px 10px 20px"); 
					 space1 = Math.round(20 * screenwidth * 1.0 / 800.0);
					 if(space1 < 12){
						 space1 = 12;
					 }
					 $('.text_disp_1').css("font-size",space1+"px");
					 space1 = Math.round(30 * screenwidth * 1.0 / 800.0);
					 if(space1 < 15){
						 space1 = 15;
					 }
					 $('.text_disp_2').css("font-size",space1+"px");
				 }else{
					 $('#jssor_1').css("display","block");
					$('.bottom40').css("display","none");
				 }
				 
			$("#container1").css("height",screenwidth+"px");
			$(".bottom40").css("height",screenwidth+"px");
			$(".leftarrow").css("margin-top",screenwidth/2+"px");
			$("#lens_carousel").css("height",screenwidth+"px");
			if(screenwidth < 996){
				$(".backimg22").css("width",screenwidth+"px");		
				var tt = 350 - (996-screenwidth) / 2;
				$(".text_disp").css("margin-top",tt+"px");		
			}else if(screenwidth < 1200){
				$(".backimg22").css("width","996px");	
			}else if(screenwidth < 1500){
				$(".backimg22").css("width","1200px");	
			}else{
				$(".backimg22").css("width","1400px");	
			}
			if(screenwidth > 996){
				var tt = (screenwidth - 996) / 2;
				if(tt > 50)tt = 50;
				$(".text_disp").css("padding-left",tt+"px");
				$(".text_disp").css("padding-right",tt+"px");
			}
			if(screenwidth > 1550){
				var tt = 370;
				$(".text_disp").css("margin-top",tt+"px");	
			}
		}
</script>
<div class="container_about" style="width:100%;position:relative;">
	<div id = "about_top_div" class="about_group_left" style=" background-image:url(/images/about/about_back1.jpg); background-position:center top; background-size:cover;">
		<div class = "about_cnt_1">
			<h1 class = "title20" style="color:#FFFFFF">Founded in 1941,</h1>
			<p class = "title21" style="max-width:500px;width:80%; color:#FFFFFF">Hoya Corporation is a global technology company headquartered in Tokyo, Japan. Hoya employs nearly 35,000 employees in more than 100 subsidiaries across the globe.</p>
		</div>
	</div>
	<script>

			 var simulator_img=document.getElementById("about_top_div");
			 simulator_img.style.height=window.innerHeight+"px";
			 //$("#"about_top_div"").css("height", window.innerHeight+"px");
</script>

	<div class = "about_group" style="background-image:url(/images/about/about_back2.png); background-position:center; background-repeat:repeat; height:auto;">
		<div class = "about_cnt_21" style="    text-align: center;max-height:800px;">
			<h2 class = "title11" style="text-align:center; margin-top:20px;font-weight:bold;">WHAT WE DO</h2>
            <img class = "backimg22" src = "/images/about/about_back2_1.png" style="clear:both;  background-position: center;    background-repeat: no-repeat;" align="center">  
			<p class = "text_disp" style="color:#464646;font-family: Helvetica !important;text-align:center;width:100%;position:absolute;top:130px; text-align:center;">Hoya is the leading supplier of innovative and<br />
						 indispensable high-tech optical products and solutions. <br />Today you can find Hoya products almost anywhere; ranging from spectacle<br />
						 lenses to endoscope and medical accessories.<br /><br />
						  Despite the diversity in its products, the passion for optical lenses remain as the<br />
						  driving force behind Hoya's activities. This passion resides within Hoya Vision Care<br/>
						  today. Hoya Lenses appeal to you for their state of the art lens material, progressive<br/>
						  design, anti-reflection coating and photochromic properties. All Hoya lenses are made<br/>
						  to ensure the most natural and comfortable vision. This is guaranteed by Hoya's strict<br/>
						  quality control systems.</p>
			<!--<div class="about_group bottom131" style="clear:both; background-image:url(/images/about/about_back2_1.png);      background-position: center;max-height: 826px;width:100%;    background-repeat: no-repeat;">
				<div class = "about_cnt_4" style="margin-left:0px;background-position:center;margin-top:20px;    width: 100%;">
					<p class = "text_disp" style="color:#464646;font-family: Helvetica !important;margin-left:15%;width:70%">Hoya is the leading supplier of innovative and<br />
						 indispensable high-tech optical products and solutions. <br />Today you can find Hoya products almost anywhere; ranging from spectacle<br />
						 lenses to endoscope and medical accessories.<br /><br />
						  Despite the diversity in its products, the passion for optical lenses remain as the<br />
						  driving force behind Hoya's activities. This passion resides within Hoya Vision Care<br/>
						  today. Hoya Lenses appeal to you for their state of the art lens material, progressive<br/>
						  design, anti-reflection coating and photochromic properties. All Hoya lenses are made<br/>
						  to ensure the most natural and comfortable vision. This is guaranteed by Hoya's strict<br/>
						  quality control systems.</p> 
				</div>
			</div>-->
                
        </div>
    </div>
	<div class = "about_group" style="background-image:url(/images/about/about_back3.jpg); background-position:center top; background-size:cover; ">
		<div><p align="center" style=" color:#fff;margin-top: 20px;font-size: 40px;">OUR MISSIONS</p></div>
		<div id="about_item" align="center">
			<ul>
				<li class="bottom503" style="float:left;">
					<img class="bottom50" src="/images/about/mark_1.png">
					<span>
						<h4 class="bottom501" align="left">MANAGEMENT PRINCIPLES</h4>
						<p class="bottom502" align="left">To realise the Hoya Vision, we have established a set of management principles that guide our every decision and action. We translate these principles into action that contributes to economic prosperity, social progress and cultural advancement, and stribe to earn the trust of all those who have a stake in our success.</p>
					</span>
				</li>
				<li class="bottom503" style="float:left;">
					<img class="bottom50" src="/images/about/mark_3.png">
					<span>
						<h4 class="bottom501" align="left">COMMITMENT TO SHAREHOLDERS</h4>
						<p class="bottom502" align="left">Hoya's strives to increase corporate value by improving business results and maintaining growth. Our goal is to pay fair spanidends and give shareholders a return on investment that meets their expectations. We willingly and impartially disclose corporate information.</p>
					</span>
				</li>
			</ul>
			<ul>
				<li class="bottom503" style="float:left;">
					<img class="bottom50" src="/images/about/mark_2.png">
					<span>
						<h4 class="bottom501" align="left">COMMITMENT TO SOCIETY</h4>
						<p class="bottom502" align="left">Hoya always strives to be a responsible corporate citizen. We work hard to ensure that our corporate activities are carried out with respect for the environment. We are absolutely committed to legal compliance and ethical practices.</p>
					</span>
				</li>
				<li class="bottom503" style="float:left;">
					<img class="bottom50" src="/images/about/mark_5.png">
					<span>
						<h4 class="bottom501" align="left">COMMITMENT TO EMPLOYEES</h4>
						<p class="bottom502" align="left">Hoya respects the personality and individuality of each employee. We offer employees opportunities to maximise their initiative and creativity in a safe and fulfilling work environment. We do our best to ensure a good living for our employees.</p>
					</span>
				</li>
			</ul>
			<ul>
				<li class="bottom503" style="float:left;">
					<img class="bottom50" src="/images/about/mark_4.png">
					<span>
						<h4 class="bottom501" align="left">COMMITMENT TO CUSTOMERS</h4>
						<p class="bottom502" align="left">Hoya's goal is to provide safe, high-quality products and services that offer true value. We make every effort to increase customer satisfaction by continuously improving the quality of our operations.</p>
					</span>
				</li>
				<li class="bottom503" style="float:left; ">
					<img class="bottom50" src="/images/about/mark_6.png">
					<span>
						<h4 class="bottom501" align="left">DEDICATION TO INNOVATIVE MANAGEMENT</h4>
						<p class="bottom502" align="left">Hoya constantly strives to create new value through innovation and creative techonology. We make the most of the advances of the information age with our worldwide management network. We take a global perspective while respecting local culture and customs.</p>
					</span>
				</li>
			</ul>
		</div>
    </div>
	<div class="about_group bottom12" style="clear:both; background-image:url(/images/about/about_back4.jpg); background-position:right top; background-size:cover; height:auto;">
    	<div class = "about_cnt_4" style="margin-left:0px">
			<h4 class="top_titlestr" style="text-align:left;margin-left:80px">No two people see the world the same way.</h4>
			<h1 class="middle_titlestr" style="color:#464646;text-align:left;margin-left:140px">We invent accordingly.</h1>
		</div>
	</div>
</div>



<script type="text/javascript">
$('.carousel').carousel({
	interval: 5000 //changes the speed
})

$(function () {
  $('.js-popover').popover()
  $('.js-tooltip').tooltip()
  $('#tall-toggle').click(function () {
    $('#tall').toggle()
  })
})
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
