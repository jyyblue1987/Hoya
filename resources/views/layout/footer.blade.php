<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1141246539228082',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   $(function(){ 
		 hheight = $( window ).height();
		 hwidth = $( window ).width();
		 footervalue();
	});
	$(window).resize(function () {
		 hheight = $( window ).height();
		 hwidth = $( window ).width();
		 footervalue();
	});
	function footervalue(){
	   if(hwidth < 800){
		   $(".footer1").css("width", "45%");
		   $(".footer2").css("width", "45%");
		   $(".footer3").css("width", "45%");
		   $(".footer4").css("width", "70%");
		   $(".footer1").css("float", "left");
		   $(".footer2").css("float", "left");
		   $(".footer3").css("float", "left");
		   $(".footer4").css("float", "left");
		   
	   }else{
		   var di = hwidth/4-25;
		   $(".footer1").css("width", di+"px");
		   $(".footer2").css("width", di+"px");
		   $(".footer3").css("width", di+"px");
		   $(".footer4").css("width", di+"px");
		   $(".footer1").css("float", "left");
		   $(".footer2").css("float", "left");
		   $(".footer3").css("float", "left");
		   $(".footer4").css("float", "left"); 
		   $(".footer1").css("padding-left", "0px");
		   $(".footer1").css("padding-right", "0px");  
		   $(".footer2").css("padding-left", "0px");
		   $(".footer2").css("padding-right", "0px"); 
		   $(".footer3").css("padding-left", "0px");
		   $(".footer3").css("padding-right", "0px"); 
		   $(".footer4").css("padding-left", "0px");
		   $(".footer4").css("padding-right", "0px"); 
		   
	   }
	   if(hwidth < 800){
		   var space = Math.round(20 * hwidth * 1.0 / 800.0);
			 if(space < 12){
				 space = 12;
			 }
			$(".footer_item_title").css("font-size", space+"px");
			var space = Math.round(17 * hwidth * 1.0 / 800.0);
			 if(space < 10){
				 space = 10;
			 }
			 $(".footer_item_cnt").css("font-size", space+"px");
		   $(".footer20").css("display", "block");
		   $(".footer21").css("display", "none");
		   $(".fbcontact").css("display", "block");
		   $(".footer4").css("display", "none");
	   }else{
		   $(".footer20").css("display", "none");
		   $(".fbcontact").css("display", "none");
		   $(".footer21").css("display", "block");
		   $(".footer4").css("display", "block");
	   }
	   if(hwidth < 500){
		   $(".left11").css("padding-left", "0px");
		   $(".left11").css("padding-right", "0px");
		   $(".center11").css("padding-left", "0px");
		   $(".center11").css("padding-right", "0px");
		   $(".center11").css("margin-left", "15px");
	   }
	}
</script>
<link rel="stylesheet" href="css/contactfooter.css" type="text/css" media="screen">
<footer id="footer">
	<div class="container_about" id="div_none">
		<div class="row" style="margin:0 auto; width:90%">
			<div align="left" class="left11 col-lg-4 footer1" style="width:45%;float:left">
				<h4 class="footer_item_title">
					<a href="/contactus">CONTACT US</a></h4>
				<p class="footer_item_cnt">
					Malaysian Hoya Lens Sdn. Bhd<br/>
					No. 6, Jalan 7/32A,<br />
                    Off 6 1/2 Miles, Jalan Kepong,<br />
					52000 Kuala Lumpur, Malaysia.
					<br/>
					<br/>
                    Tel : +60 3-6258 8977
					<br/>
					<br/>
					<a href="mailto:contact@hoya.com.my" style="color:#0055aa">contact@hoya.com.my</a>
				</p>
                <p></p>
				<span class="fbcontact">
					<a href="https://www.facebook.com/hoyamalaysia/"><img style="float:left; " src="/images/facebook_icon.png" alt="" /></a>
                </span>
				<span class="fbcontact">
					<img style="float:left;padding-left:5%;" src="/images/youtube_icon.png" alt="" />
                </span>
				<span class="fbcontact">
					<img style="float:left;padding-left:5%;" src="/images/twitter_icon.png" alt="" />
                </span>
			</div><!-- /col-lg-4 -->

			<div align="center" class="center11 col-lg-4 footer2" style="width:45%;    float:left;text-align: left; margin-left:35px;">
				<h4 class="footer_item_title">
					<a href="/aboutus">ABOUT US<a>
                </h4>
				<h4 class="footer_item_title">
					PRODUCTS
                </h4>
				<p  class="footer_item_cnt" style="margin-left: 20px;">
					<a href="/fullproduct">• Full Product Range</a><br/>
                    <a href="/singlevision">• Single Vision</a><br/>
					<a href="/progressive">• Progressive Lens</a><br/>
					<a href="/speciality">• Speciality Lens</a><br/>
					<a href="/treatment">• Anti-Reflection</a><br/>
					<a href="/photochromics">• Photochromic</a><br/>
					<a href="/lensmaterial">• Lens Materials</a>
				</p>
				<h4 class="footer_item_title footer20">
					<a href="/lens">LENS SELECTOR</a>
                </h4>
				<h4 class="footer_item_title footer20">
					<a href="/career">CAREER</a>
                </h4>
			</div>
			
			<div align="center" class="center11 footer21 col-lg-4 footer3" style="width:45%;text-align:left;float:left">
				<h4 class="footer_item_title">
					<a href="/lens">LENS SELECTOR</a>
                </h4>
				<h4 class="footer_item_title">
					<a href="/career">CAREER</a>
                </h4>
			</div>
		<div align="right" class="right11 col-lg-4 footer4" style="width:70%;float:left;position:absolute; right:5%">
			<!--<a href="https://www.facebook.com/hoyamalaysia/">
					<img src="/images/products/bottom_submenu.png" alt=""  style="width: 90%;"/>
					</a>-->
			<script>
			window.fbAsyncInit = function() {
				FB.init({
				  appId      : 'myhoya',
				  xfbml      : true,
				  version    : 'v2.5'
				});
			  };
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1141246539228082";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-page" data-href="https://www.facebook.com/hoyamalaysia/" data-tabs="timeline" data-width="350" data-height="210" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/hoyamalaysia/"><a href="https://www.facebook.com/hoyamalaysia/">Hoya Malaysia</a></blockquote></div></div>
					<!--<div
			  class="fb-like"
			  data-share="true"
			  data-width="200"
			  data-height="200"
			  data-show-faces="true">
			</div>-->
        </div>
		</div>
	</div>
		<div class="row" style="width:100%; text-align:center;margin-top:35px">
			<p>Copyright @2015 Malaysian Hoya Lens Sdn. Bhd. All rights reserved.</p>		
		</div>
</footer>