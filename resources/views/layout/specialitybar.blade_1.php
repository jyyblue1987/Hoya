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
	 function popup_content(sel_v){
		switch(sel_v){
			case 1: $('#speciality_1').modal('show'); break;	
			case 2: $('#speciality_2').modal('show'); break;	
			case 3: $('#speciality_3').modal('show'); break;	
		}
	 }
	 
		$(window).resize(function () {
			positionOption();
		});
		 $(function(){ 		 
			 
			 //simulator_img.src = "/images/simulators/farB_nearC_"+screenratio+".png";
			 //lens_img.href = "/images/simulators/farC_nearC_"+screenratio+".png";
			 //backimgwidth=simulator_img.width;/images/simulators/farC_nearC_1.5.png
			 positionOption();
		});
		function positionOption(){
			var screenwidth = window.innerWidth;
			 if(screenwidth > 800){
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * screenwidth * 1.0 / 1920.0);
				 $('.aboutdivid').css("height",hh+"px");
				 $('.speciality_cnt_1').css("margin-left","50%");
				 $('.speciality_cnt_2').css("margin-left","3%");
				 $('.speciality_cnt_3').css("margin-left","50%");
				 var ff = Math.round(50 * screenwidth * 1.0 / 1920.0);
				 if(ff < 20){
					$('.h11').css("font-size","20px");
				 }else{
					$('.h11').css("font-size",ff+"px");
				 }
				 var pp = Math.round(20 * screenwidth * 1.0 / 1920.0);
				 if(pp < 12){
					$('.p1').css("font-size","12px");
				 }else{
					$('.p1').css("font-size",pp+"px");
				 }
				 
				 var top1 = Math.round(300 * (screenwidth * 1.0 / 1920.0)  );
				 if(top1 < 20){
					 $('.speciality_cnt_1').css("margin-top","20px");
				 }else{
					$('.speciality_cnt_1').css("margin-top",top1+"px");
				 }
				 var top1 = Math.round(300 * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 20){
					 $('.speciality_cnt_2').css("margin-top","20px");
				 }else{
					$('.speciality_cnt_2').css("margin-top",top1+"px");
				 }
				 var top1 = Math.round(260 * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.speciality_cnt_3').css("margin-top","10px");
				 }else{
					$('.speciality_cnt_3').css("margin-top",top1+"px");
				 }
				 $('.p1').css("font-family","Helvetica !important");
			 }else{
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * 800 * 1.0 / 1920.0);
				 $('.aboutdivid').css("height",hh+"px");
				 $('.speciality_cnt_1').css("margin-left","50%");
				 $('.speciality_cnt_2').css("margin-left","3%");
				 $('.speciality_cnt_3').css("margin-left","50%");
				 var ff = Math.round(50 * 600 * 1.0 / 1920.0);
				 if(ff < 20){
					$('.h11').css("font-size","20px");
				 }else{
					$('.h11').css("font-size",ff+"px");
				 }
				 var pp = Math.round(20 * 600 * 1.0 / 1920.0);
				 if(pp < 12){
					$('.p1').css("font-size","12px");
				 }else{
					$('.p1').css("font-size",pp+"px");
				 }
				 
				 var top1 = Math.round(300 * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 20){
					 $('.speciality_cnt_1').css("margin-top","20px");
				 }else{
					$('.speciality_cnt_1').css("margin-top",top1+"px");
				 }
				 var top1 = Math.round(300 * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 20){
					 $('.speciality_cnt_2').css("margin-top","20px");
				 }else{
					$('.speciality_cnt_2').css("margin-top",top1+"px");
				 }
				 var top1 = Math.round(260 * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.speciality_cnt_3').css("margin-top","10px");
				 }else{
					$('.speciality_cnt_3').css("margin-top",top1+"px");
				 }
				 if(screenwidth < 600){
					 $('.speciality_cnt_1').css("margin-left","10%");
				 }
			 }
			 ff = Math.round(72 * screenwidth * 1.0 / 1920.0);
				 if(ff < 20){
					$('.svg2').css("height","20px");
				 }else{
					$('.svg2').css("height",ff+"px");
				 }
				 $('.svg21').css("width","33%");
				 $('#sp_iconpart').css("width","100%");
			var ff1 = Math.round(30 * screenwidth * 1.0 / 2220.0);
			if(ff1 < 25){
					 ff1 = 25;
			}
			$('.top_titlestr').css("font-size",ff1+"px");
			var ff2 = Math.round(25 * screenwidth * 1.0 / 2220.0);
			if(ff2 < 15){
					 ff1 = 15;
			}
			$('.product_txt_1').css("font-size",ff1+"px");
			 ff = Math.round(650 * screenwidth * 1.0 / 1500.0);	
			 $('.popup_iconimg').css("top",ff+"px");	
			 ff = Math.round(60 * screenwidth * 1.0 / 1500.0);	
			 $('.popup_iconimg').css("right",ff+"px");	
			 ff = Math.round(126 * screenwidth * 1.0 / 1500.0);	
			 if(ff < 50)ff = 50;
			 $('.popup_iconimg').css("width",ff+"px");
			 $('.popup_iconimg').css("height","auto");
			 ff = Math.round(80 * screenwidth * 1.0 / 1500.0);	
			 $('.contentdial').css("margin-left",ff+"px");	
			 ff = Math.round(286 * screenwidth * 1.0 / 1500.0);	
			 $('.bottomlog').css("width",ff+"px");	
		}
</script>


<div class="container_about" style="width:100%;position:relative;">
	<div id="top_black" class="about_group_left" style=" background-color:#343434; height:90px;">
	</div>
	<div id="top_grey" class="about_group_left" style=" background-image:url(/images/products/fullproduction_img1.png); background-repeat:repeat; height:120px;">
        <div class = "about_cnt_2" style="margin-top:17px">
	        <div class="center">
				<p class="top_titlestr">Lens Design - Specialty Lens</p>
				<p class = "text_disp product_txt_1" style="margin-top:10px">Lens Specialty designed for specific function / vision correction issues.</p>
			</div>
        </div>
	</div>
	<div class="aboutdivid" style=" background-image:url(/images/products/speciality_back1.png); background-position:left top; background-size:cover; height:700px;min-width:100%">
		<div class = "speciality_cnt_1">
			<h1  class="h11" style="color:#ffffff">Occupational Lens Solution from Hoya</h1>
			<p class="p1" style="width:95%; color:#ffffff">Standard reading glasses have been the choice for many presbyopes for near vision tasks and computer use. However, reading glasses only offer a limited depth of vision up to 40cm in front of you and anything further will be blurred.<br><br>Hoya also understands that progressive lenses are an ideal solution for most presbyopes. However, for a number of patients whose visual tasks are predominantly based around near or intermediate work, standard progressives may not be the perfect answer.<br><br>With this ever increasing need in mind, Hoya has produced a full range of indoor lenses to fulfill these requirements.</p>
		</div>
	</div>
	<div class="aboutdivid" style=" background-image:url(/images/products/speciality_back2.jpg); background-position:right top; background-size:cover; height:700px;min-width:100%">
		<div class = "speciality_cnt_2">
			<h1  class="h11" style="color:#464646">Addpower</h1>
			<p class="p1" style=" width:50%;display:block; color:#464646">Long hours of digital media usage or intense reading can tire and strain the eyes with single vision reading glass or even with progressive lens. Addpower is a flexible lens for intensive digital media users and readers. It offers a greater depth of vision up to 80cm.</p>
		</div>
	</div>
	<div class="aboutdivid" style=" background-image:url(/images/products/speciality_back3.jpg); background-position:left top; background-size:cover; height:700px;min-width:100%">
		<div class = "speciality_cnt_3">
			<h1 class="h11" style="color:#464646">TACT & ID Workstyle</h1>
			<p class="p1" style=" width:90%;display:block; color:#464646">The ergonomic office lens for presbyopes who wish to combine a wide and comfortable view of their intermediate work zone with flexibility in depth of vision. These are flexible office lens with very comfortable reading area.<br/><br/>You will have extended focus up to 400cm with clear vision not only for reading but as well as looking around indoors. These lenses are especially well suited for the office environment.</p>
		</div>
	</div>
	<div class="about_group" style="background-image:url(/images/products/speciality_back4.png); background-position:left top; background-size:cover; height:428px;">
        <div class = "specciality_cnt_4" style="margin-top:50px">
	        <div class="center">
				<p class="bottom_titlestr">HOYA Specialty Lens Range</p>
			</div>
        </div>
        <div class="specciality_cnt_4">
			<div align="center" id="sp_iconpart">
				<ul style="width:95%;text-align:center">
					<li class="svg21"><img class="svg2" src="/images/products/selicon_34.svg" style="height:72px;" onclick="popup_content(1)" alt="" /></li>
					<li class="svg21"><img class="svg2" src="/images/products/selicon_35.svg" style="height:72px;" onclick="popup_content(2)" alt="" /></li>
					<li class="svg21"><img class="svg2" src="/images/products/h_workstyle.svg" style="height:72px;" onclick="popup_content(3)" alt="" /></li>
				</ul>
            </div>
		</div>
	</div>
</div>


<!--********************************************************************************************************************
***************************************** POP UP window ****************************************************************
**********************************************************************************************************************-->
  <div id="speciality_1" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/occupational_addpower.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/selicon_34.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">ADDPOWER</li>
                        <li class="p_title1">A single vision concept, AddPower offers exceptional field of near viewing range as compared to the conventional reading glasses. The enchanced near range of AddPower reduces unnecessary vertical and horizontal head movements providing the wearers a more natural, relaxed and comfortable posture in their near and closed-up tasks such as reading and working with the computer.</li>
                        <li class="p_subject">Features</li>
                        <li class="p_title2">Designed specifically for computer use offering advanced visual performance</li>
                        <li class="p_title2">Offers the best overall visual experience with less distortion</li>
                        <li class="p_title2">A greater depth of vision than standard reading glass</li>
                        <li class="p_title2">Perfect for any near vision task</li>
						<li class="p_title2">Reduces eyestrain for prolong reading</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo_blue.svg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  

  <div id="speciality_2" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/occupational_tack.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/selicon_35.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">TACT</li>
                        <li class="p_title1">The ergonomic office lens for presbyopes who wish to combine a wide and comfortable view of their intermediate work zone with flexibility in depth of vision. TACT provides excellent vision for reading and meeting or housework.</li>
                        <li class="p_subject">Benefits</li>
                        <li class="p_title2">Ideal for work space up to 400cm.</li>
                        <li class="p_title2">Relaxed reading experience with variable depth of vision.</li>
                        <li class="p_title2">Flexible office lens with comfortable reading.</li>
                        <li class="p_title2">Wide intermediate zone without extra head movements.</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo_blue.svg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  

  <div id="speciality_3" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/occupational_workstyle.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/h_workstyle.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">HOYALUX iD WORKSTYLE</li>
                        <li class="p_title1">Hoyalux iD Workstyle takes up a special place in the indoor range as it is based on the unrivalled iD FreeForm Design Technology. A wide and clear visual field, especially at intermediary distances. Hoyalux iD Workstyle offers the best possible correction for near and intermediate distances up to 400cm, for instance when working at a desk or computer, especially office workers and professionals.<br><br>Hoyalux iD Workstyle is available in two personalized indoor settings: 200 and 400 that indicates the distances supported by each lens with regards to depth and width perception.</li>
                        <li class="p_subject">Benefits</li>
                        <li class="p_title2">Perfect solution up to about 400cm depth of vision at your work space.</li>
                        <li class="p_title2">Provide maximum freedom when focusing on near and intermediate distances.</li>
						<li class="p_title2">It will offer relaxed vision, a clear indoor view and enhance productivity.</li>
						<li class="p_title2">Able to switch effortlessly between your computer screen and keyboard while still enjoying a perfect overview on your desk all day long.</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo_blue.svg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  