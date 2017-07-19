<link rel="stylesheet" href="css/contactfooter.css" type="text/css" media="screen">
<script>
$(function(){ 
		 hheight = window.innerHeight;
		 hwidth = window.innerWidth;
		 footervalue();
	});
	$(window).resize(function () {
		 hheight = window.innerHeight;
		 hwidth = window.innerWidth;
		 footervalue();
	});
	function footervalue(){
	   if(hwidth < 768){
		   $(".footer1").css("width", "45%");
		   $(".footer2").css("width", "45%");
		   $(".footer3").css("width", "45%");
		   $(".footer1").css("float", "left");
		   $(".footer2").css("float", "left");
		   $(".footer3").css("float", "left");
		   $(".copyright").css("margin-top", "120px");
		   $(".footer1").css("margin-left", "10px");
		   $(".footer2").css("padding-left", "1%");
		   $(".footer3").css("margin-left", "10px");
		   
	   }else{
		   $(".footer1").css("width", "33%");
		   $(".footer2").css("width", "33%");
		   $(".footer3").css("width", "30%");
		   $(".footer1").css("float", "left");
		   $(".footer2").css("float", "left");
		   $(".footer3").css("float", "left");
		   $(".copyright").css("margin-top", "0px");
		   
	   }
	   if(hwidth < 800){
		   var space = Math.round(20 * hwidth * 1.0 / 800.0);
			 if(space < 12){
				 space = 12;
			 }
			$(".footer_item_title").css("font-size", space+"px");
			space = Math.round(17 * hwidth * 1.0 / 800.0);
			 if(space < 10){
				 space = 10;
			 }
			 $(".footer_item_cnt").css("font-size", space+"px");
			 space = Math.round(50 * hwidth * 1.0 / 800.0);
			 if(space < 10){
				 space = 10;
			 }
			 $(".center11").css("left", space+"px");
			 
			 $(".footer_item_cnt").css("text-align", "left");
			 $(".footer_item_cnt").css("margin-left", "15px");
			 $(".footer1").css("margin-left", "0px");
		   $(".container122").css("display", "block");
		   $(".footer133").css("display", "block");
		   $(".container111").css("display", "none");
	   }else{
		   $(".footer133").css("display", "none");
		   $(".container122").css("display", "none");
		   $(".container111").css("display", "block");
	   }
	   if(hwidth < 500){
		   $(".left11").css("padding-left", "0px");
		   $(".left11").css("padding-right", "0px");
		   $(".center11").css("padding-left", "0px");
		   $(".center11").css("padding-right", "0px");
		   $(".center11").css("margin-left", "15px");
	   }
	   
	   var space = Math.round(50 * hwidth * 1.0 / 2200.0);
		 
		 $(".footer1").css("margin-left", space+"px");
			 
	}
</script>
<footer id="footer">
	<div class="container111" id="div_none" style="width:90%;margin-left: 10%;">
		<div class="row" >
			<div class="col-lg-4 footer1" style="width:33%;margin-left: 50px;text-align:left;">
				<h4>CONTACT US</h4>
				<p>
					+60 3-6258 8977<br/>
					<a href="mailto:contact@hoya.com.my" style="color:#0055aa">contact@hoya.com.my</a><br/>
					<br/>
					<br/>
					<p class="copyright">Copyright @2015 Malaysian Hoya Lens Sdn. Bhd. All rights reserved.</p>
				</p>
			</div><!-- /col-lg-4 -->

			<div class="col-lg-4 footer2" style="padding-left:5%;width:33%;float:left;text-align:left;">
				<h4>VISIT US</h4>
				<p>Malaysian Hoya Lens Sdn. Bhd<br/>
					No.6, Jalan 7/32A, Off 6 1/2 Miles,<br/>
					Jalan Kepong,<br/>
					52000 Kuala Lumpur,<br/>
					Malaysia<br/>
				</p>
			</div><!-- /col-lg-4 -->
			
			<div class="col-lg-4 footer3" style="width:30%;float:left;left:50px;text-align:left;">
				<h4>MENU</h4>
				<p style="font-size:">
					<a href="/aboutus">About Us</a><br/>
					<a href="/fullproduct">Products</a><br/>
					<a href="/lens">Lens Selector</a><br/>
					<a href="/career">Career</a><br/>
					<a href="/contactus">Contact Us</a>
				</p>
				<span>
					<a href="https://www.facebook.com/hoyamalaysia/"><img style="float:left; " src="/images/facebook_icon.png" alt="" /></a>
                </span>
				<span>
					<img style="float:left;padding-left:5%;" src="/images/youtube_icon.png" alt="" />
                </span>
				<span>
					<img style="float:left;padding-left:5%;" src="/images/twitter_icon.png" alt="" />
                </span>
			</div><!-- /col-lg-4 -->
			
		
		</div>
	</div>
	
	<div class="container122" id="div_none" style="width:90%;margin-left: 10%;">
		<div class="row" >
			<div class="col-lg-4 footer1 left11" style="width:33%;margin-left: 50px;text-align:left;">
				<h4 class="footer_item_title">CONTACT US</h4>
				<p class="footer_item_cnt">
					+60 3-6258 8977<br/>
					<a href="mailto:contact@hoya.com.my" style="color:#0055aa">contact@hoya.com.my</a><br/>
					<br/>
				</p>
				<h4 class="footer_item_title">VISIT US</h4>
				<p class="footer_item_cnt">Malaysian Hoya Lens Sdn. Bhd<br/>
					No.6, Jalan 7/32A, Off 6 1/2 Miles,<br/>
					Jalan Kepong,<br/>
					52000 Kuala Lumpur,<br/>
					Malaysia<br/>
				</p>
			</div><!-- /col-lg-4 -->

			
			<div class="col-lg-4 footer3 center11" style="width:30%;float:left;left:50px;text-align:left;">
				<h4 class="footer_item_title">MENU</h4>
				<p class="footer_item_cnt" style="font-size:">
					<a href="/aboutus">About Us</a><br/>
					<a href="/fullproduct">Products</a><br/>
					<a href="/lens">Lens Selector</a><br/>
					<a href="/career">Career</a><br/>
					<a href="/contactus">Contact Us</a>
				</p>
				<span>
					<a href="https://www.facebook.com/hoyamalaysia/"><img style="float:left; " src="/images/facebook_icon.png" alt="" /></a>
                </span>
				<span>
					<img style="float:left;padding-left:5%;" src="/images/youtube_icon.png" alt="" />
                </span>
				<span>
					<img style="float:left;padding-left:5%;" src="/images/twitter_icon.png" alt="" />
                </span>
			</div><!-- /col-lg-4 -->
			
		
		</div>
	</div>
		<div class="row footer133" style="width:100%; text-align:center;margin-top:35px">
			<p>Copyright @2015 Malaysian Hoya Lens Sdn. Bhd. All rights reserved.</p>		
		</div>
</footer>
<script>

	
</script>


