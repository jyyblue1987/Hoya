<!-- jQuery -->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script type="text/javascript">
	/* $('.carousel').carousel({
		interval: 5000 //changes the speed
	});

	$(function () {
		$('.js-popover').popover()
		$('.js-tooltip').tooltip()
		$('#tall-toggle').click(function () {
			$('#tall').toggle()
		})
	}); */

	 function popup_content(sel_v){
			switch(sel_v){
				case 1: $('#singlevision_1').modal('show'); break;	
				case 2: $('#singlevision_2').modal('show'); break;	
				case 3: $('#singlevision_3').modal('show'); break;	
				case 4: $('#singlevision_4').modal('show'); break;	
				case 5: $('#singlevision_5').modal('show'); break;	
				case 6: $('#progressive_7').modal('show');	break;	
				case 7: $('#progressive_5').modal('show'); break;	
				case 8: $('#progressive_1').modal('show'); break;	
				case 9: $('#progressive_8').modal('show'); break;	
				case 10: $('#progressive_6').modal('show'); break;
				case 11: $('#progressive_2').modal('show'); break;	
				case 12: $('#progressive_3').modal('show'); break;	
				case 13: $('#progressive_4').modal('show'); break;	
				case 14: $('#speciality_1').modal('show'); break;	
				case 15: $('#speciality_2').modal('show'); break;	
				case 16: $('#speciality_3').modal('show'); break;	
				case 19: $('#photochromics_2').modal('show'); break;	
				case 20: $('#photochromics_1').modal('show'); break;
			}
	 }
	 $(window).resize(function () {
		 positionSolute();
	 });
	 $(function(){ 
			 
			 //simulator_img.src = "/images/simulators/farB_nearC_"+screenratio+".png";
			 //lens_img.href = "/images/simulators/farC_nearC_"+screenratio+".png";
			 //backimgwidth=simulator_img.width;/images/simulators/farC_nearC_1.5.png
			 positionSolute();
		});
	function positionSolute(){
			 var screenwidth = window.innerWidth;
			 
			 if(screenwidth > 800){
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * screenwidth * 1.0 / 1920.0);
				 $('.aboutdivid').css("height",hh+"px");
				 $('.fullproduct_cnt_1').css("margin-left","50%");
				 $('.fullproduct_cnt_2').css("margin-left","3%");
				 $('.fullproduct_cnt_3').css("margin-left","50%");
				 $('.fullproduct_cnt_4').css("margin-left","10%");
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
				 var svg = Math.round(72 * screenwidth * 1.0 / 1920.0);
				 if(svg < 17){
					$('.svg1').css("height","17px");
				 }else{
					$('.svg1').css("height",svg+"px");
				 }
				 
				 var top1 = Math.round(150 * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.fullproduct_cnt_1').css("margin-top","10px");
				 }else{					
					 if(top1 > 150){
						 $('.fullproduct_cnt_1').css("margin-top","150px");
					 }else{
						$('.fullproduct_cnt_1').css("margin-top",top1+"px");
					 }
				 }
				 var top11 = Math.round(150 * (screenwidth * 1.0 / 1920.0) );
				 if(top11 < 10){
					 $('.fullproduct_cnt_2').css("margin-top","10px");
				 }else{
					 if(top11 > 150){
						 $('.fullproduct_cnt_2').css("margin-top","150px");
					 }else{
						$('.fullproduct_cnt_2').css("margin-top",top11+"px");
					 }
				 }
				 var top1 = Math.round(150 * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.fullproduct_cnt_3').css("margin-top","10px");
				 }else{
					 if(top1 > 150){
						 $('.fullproduct_cnt_3').css("margin-top","150px");
					 }else{
						$('.fullproduct_cnt_3').css("margin-top",top1+"px");
					 }
				 }
				 var top1 = Math.round(150 * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.fullproduct_cnt_4').css("margin-top","10px");
				 }else{
					 if(top1 > 150){
						 $('.fullproduct_cnt_4').css("margin-top","150px");
					 }else{
						$('.fullproduct_cnt_4').css("margin-top",top1+"px");
					 }
				 }
				 
				 var top2 = Math.round(110 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top2 < 10){
					 $('#fp_iconpart_1').css("margin-top","10px");
				 }else{
					$('#fp_iconpart_1').css("margin-top",top2+"px");
				 }
				 var top2 = Math.round(130 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top2 < 10){
					 $('#fp_iconpart_2').css("margin-top","10px");
				 }else{
					$('#fp_iconpart_2').css("margin-top",top2+"px");
				 }
				 var top2 = Math.round(100 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top2 < 10){
					 $('#fp_iconpart_3').css("margin-top","10px");
				 }else{
					$('#fp_iconpart_3').css("margin-top",top2+"px");
				 }
				 var top2 = Math.round(140 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top2 < 10){
					 $('#fp_iconpart_4').css("margin-top","10px");
				 }else{
					$('#fp_iconpart_4').css("margin-top",top2+"px");
				 }
				 var leftright = Math.round(35 * screenwidth / 1920.0 );
				 if(leftright < 10){
					 $('.icon_li').css("margin-left","10px");
					 $('.icon_li').css("margin-right","10px");
				 }else{
					 $('.icon_li').css("margin-left",leftright+"px");
					 $('.icon_li').css("margin-right",leftright+"px");
					 
				 }
				 $('.p1').css("font-family","Helvetica !important");
			 }else{
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * 800 * 1.0 / 1920.0);
				 $('.aboutdivid').css("height",hh+"px");
				 $('.fullproduct_cnt_1').css("margin-left","50%");
				 $('.fullproduct_cnt_2').css("margin-left","3%");
				 $('.fullproduct_cnt_3').css("margin-left","50%");
				 $('.fullproduct_cnt_4').css("margin-left","10%");
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
				 var svg = Math.round(72 * 600 * 1.0 / 1920.0);
				 if(svg < 17){
					$('.svg1').css("height","17px");
				 }else{
					$('.svg1').css("height",svg+"px");
				 }
				 
				 var top1 = Math.round(150 * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.fullproduct_cnt_1').css("margin-top","10px");
				 }else{					
					 if(top1 > 150){
						 $('.fullproduct_cnt_1').css("margin-top","150px");
					 }else{
						$('.fullproduct_cnt_1').css("margin-top",top1+"px");
					 }
				 }
				 var top11 = Math.round(150 * (screenwidth * 1.0 / 1920.0) );
				 if(top11 < 10){
					 $('.fullproduct_cnt_2').css("margin-top","10px");
				 }else{
					 if(top11 > 150){
						 $('.fullproduct_cnt_2').css("margin-top","150px");
					 }else{
						$('.fullproduct_cnt_2').css("margin-top",top11+"px");
					 }
				 }
				 var top1 = Math.round(150 * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.fullproduct_cnt_3').css("margin-top","10px");
				 }else{
					 if(top1 > 150){
						 $('.fullproduct_cnt_3').css("margin-top","150px");
					 }else{
						$('.fullproduct_cnt_3').css("margin-top",top1+"px");
					 }
				 }
				 var top1 = Math.round(150 * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.fullproduct_cnt_4').css("margin-top","10px");
				 }else{
					 if(top1 > 150){
						 $('.fullproduct_cnt_4').css("margin-top","150px");
					 }else{
						$('.fullproduct_cnt_4').css("margin-top",top1+"px");
					 }
				 }
				 if(screenwidth < 600){
					 $('.fullproduct_cnt_1').css("margin-left","20%");
				 }
				 if(screenwidth < 600){
					 $('.fullproduct_cnt_2').css("margin-left","3%");
				 }
				 if(screenwidth < 600){
					 $('.fullproduct_cnt_3').css("margin-left","20%");
				 }
				 if(screenwidth < 600){
					 $('.fullproduct_cnt_4').css("margin-left","3%");
				 }
				 var top2 = Math.round(110 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top2 < 10){
					 $('#fp_iconpart_1').css("margin-top","10px");
				 }else{
					$('#fp_iconpart_1').css("margin-top",top2+"px");
				 }
				 var top2 = Math.round(130 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top2 < 10){
					 $('#fp_iconpart_2').css("margin-top","10px");
				 }else{
					$('#fp_iconpart_2').css("margin-top",top2+"px");
				 }
				 var top2 = Math.round(100 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top2 < 10){
					 $('#fp_iconpart_3').css("margin-top","10px");
				 }else{
					$('#fp_iconpart_3').css("margin-top",top2+"px");
				 }
				 var top2 = Math.round(140 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top2 < 10){
					 $('#fp_iconpart_4').css("margin-top","10px");
				 }else{
					$('#fp_iconpart_4').css("margin-top",top2+"px");
				 }
				 var leftright = Math.round(35 * (screenwidth * 1.0 / 1920.0) );
				 if(leftright < 10){
					 $('.icon_li').css("margin-left","10px");
					 $('.icon_li').css("margin-right","10px");
				 }else{
					 $('.icon_li').css("margin-left",leftright+"px");
					 $('.icon_li').css("margin-right",leftright+"px");
				 }
				 if(screenwidth < 500){
					 $('#fp_iconpart_1').css("margin-left","20%");
					 $('#fp_iconpart_1').css("width","80%");
					 $('.p1').css("width","80%");
				 }
				 if(screenwidth < 600){
					 $('.p1').css("width","80%");
				 }
				 
				 if(screenwidth < 600){
					 $('.detailpop-dialog').css("width","90%");
				 }else{
					 $('.detailpop-dialog').css("width","80%");
				 }
					 $('.detailpop-dialog').css("height","auto");
			 }
			 
			 
			 
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
			 ff = Math.round(200 *  1500.0/ (screenwidth * 1.0));	
			 if(ff > 200) ff=200;
			 $('.bottomlog12').css("top",ff+"px");	
			 ff = Math.round(670 * screenwidth * 1.0 / 1500.0);
			 if(ff > 670) ff=670;	
			 if(ff < 480){
				 ff = Math.round(400 * 1500.0/ (screenwidth * 1.0));
			 }
			 $('.bottomlog13').css("top",ff+"px");		
			 ff = Math.round(70 * screenwidth * 1.0 / 1500.0);	
			 $('.bottomlog12').css("right",ff+"px");		
			 $('.bottomlog13').css("right",ff+"px");		
			 ff = Math.round(250 * screenwidth * 1.0 / 1500.0);
			 if(ff > 250)ff=250;
			 $('.bottomlog12').css("width",ff+"px");	
			 ff = Math.round(400 * screenwidth * 1.0 / 1500.0);	
			 if(ff > 400) ff=400;
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
        <div class = "about_cnt_2" style="margin-top:37px">
	        <div class="center">
				<h2 style=" text-align:center; color:#464646">FULL PRODUCT RANGE</h2>
				
			</div>
        </div>
	</div>
	<div id = "" class="aboutdivid" style=" background-image:url(../uploads/{{$users[0]['thumbpath']}}); background-position:left top; background-size:cover; height:827px;min-width:100%">
		<div class = "fullproduct_cnt_1">
			<h1  class="h11" style="color:#ffffff">{{$users[0]['title']}}</h1>
			<p class = "p1" >{{$users[0]['description']}}</p>
		    
		</div>
		<div id="fp_iconpart_1" style="width:50%;margin-left:50%">
			<ul>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/selicon_28.svg" onclick="popup_content(1)" alt="" /></li>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/selicon_27.svg" onclick="popup_content(2)" alt="" /></li>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/selicon_26.svg" onclick="popup_content(3)" alt="" /></li>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/h_nuluxidentityV+.svg" onclick="popup_content(4)" alt="" /></li>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/selicon_30.svg" onclick="popup_content(5)" alt="" /></li>
			</ul>
		</div>
	</div>
	<div id = "" class="aboutdivid" style=" background-image:url(../uploads/{{$users[1]['thumbpath']}}); background-position:right top; background-size:cover; height:828px;min-width:100%">
		<div class = "fullproduct_cnt_2">
			<h1 class="h11" style="color:#ffffff">{{$users[1]['title']}}</h1>
			<p class="p1" style="width:52%">{{$users[1]['description']}}</p>
		</div>
		<div id="fp_iconpart_2" style="margin-left:3%">
			<ul>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/h_summitdynamic.svg" style="height:60px;" onclick="popup_content(6)" alt="" /></li>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/h_summit_pro.svg" style="height:60px;" onclick="popup_content(7)" alt="" /></li>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/h_summitPT.svg" style="height:60px;" onclick="popup_content(8)" alt="" /></li>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/h_lux_fd.svg" style="height:60px;" onclick="popup_content(9)" alt="" /></li>
			</ul>
			<ul>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/selicon_19.svg" style="height:60px;" onclick="popup_content(10)" alt="" /></li>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/h_lux_id.svg" style="height:60px;" onclick="popup_content(11)" alt="" /></li>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/h_lux_trinity.svg" style="height:60px;" onclick="popup_content(12)" alt="" /></li>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/h_mystyleid.svg" style="height:60px;" onclick="popup_content(13)" alt="" /></li>
			</ul>
			
		</div>
	</div>
	<div id = "" class="aboutdivid" style=" background-image:url(../uploads/{{$users[2]['thumbpath']}}); background-position:left top; background-size:cover; height:824px;min-width:100%">
 		<div class = "fullproduct_cnt_3">
			<h1 class="h11" style="color:#ffffff">{{$users[2]['title']}}</h1>
			<p class="p1" >{{$users[2]['description']}}</p>
		</div>
		<div id="fp_iconpart_3" style="width:50%;margin-left:50%">
			<ul>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/h_sensity.svg"  onclick="popup_content(19)" alt="" /></li>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" src="/images/products/h_transition.svg"  onclick="popup_content(20)" alt="" /></li>
<!--			<li><a href=""><img src="/images/products/selicon-17.png" alt="" /></a></li>
				<li><a href=""><img src="/images/products/selicon-18.png" alt="" /></a></li>-->
			</ul>
		</div>
	</div>
	<div id = "" class="aboutdivid" style=" background-image:url(../uploads/{{$users[3]['thumbpath']}}); background-position:right top; background-size:cover; height:832px;min-width:100%">
		<div class = "fullproduct_cnt_2" style="width: 70%;">
			<h1 class="h11" style="color:#ffffff">{{$users[3]['title']}}</h1>
			<p class="p1" >{{$users[3]['description']}}</p>
		</div>
		<div id="fp_iconpart_4" style="width:50%;margin-left:10% ;   padding-top: 50px;">
			<ul>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" class="svg1" src="/images/products/selicon_34.svg" style="height:72px;" onclick="popup_content(14)" alt="" /></li>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" class="svg1" src="/images/products/selicon_35.svg" style="height:72px;" onclick="popup_content(15)" alt="" /></li>
				<li class="icon_li" style="margin-bottom:5px;"><img class="svg1" class="svg1" src="/images/products/h_workstyle.svg" style="height:72px;" onclick="popup_content(16)" alt="" /></li>
			</ul>
		</div>
	</div>
</div>

