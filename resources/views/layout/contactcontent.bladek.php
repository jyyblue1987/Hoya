	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/submitimg.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/customer.css" type="text/css" media="screen">

<div class="container" id="bg_img" style="background-image: url(../images/contactus/105101.png);height:586px; ">
	<h1 class="font_1" id="htxt_center" >Contact Us</h1>
	<address class="txt_center" >				
				<h2 class="txt_bold"> <b>Address</b></h2>
					<h2 class="txt_thin">Malaysia Hoya Lens Sdn. Bhd. <br>
						NO.6, Jalan7/32A, Off 6 1/2Miles,<br>
						Jalan Kepong,<br>
						52000 Kuala Lumpur,<br>
						Malaysia
					</h2> 
				<h2 class="txt_bold"><b>Phone</b></h2>
					<h2 class="txt_thin">+60 3-6258 8977</h2>
				<h2 class="txt_bold"><b>Email</b></h2>
					<h2 class="txt_thin"><a href="mailto:contact@hoya.com.my">contact@hoya.com.my</a></h2>
			</address>
</div>

<div class="container" id="bg_img" style="background-image: url(../images/contactus/bg2.png); ">
	<div class="col-md-4 map-content"   style="margin-left:7%;margin-top:3%;">
		<address id="disnone">				
			<p style="font-size:20px;"> <b>Address</b></p>
				<p style="font-size:20px;">Malaysia Hoya Lens Sdn.Bhd <br>
						NO.6, Jalan7/32A, Off 6 1/2Miles,<br>
						Jalan Kepong,<br>
						52000 Kuala Lumpur,<br>
						Malaysia
				</p> 
				<p style="font-size:20px;"><b>Phone</b></h5>
					<p style="font-size:20px;">+60 3-6258 8977</p>
				<p style="font-size:20px;"><b>Email</b></h5>
					<p style="font-size:20px;">support@hoya.com</p>
		</address>
	</div>
	<form class="contact-form" action= "/contact_message" name="myForm" method="post" id = "send_message_form">
		<div class="col-md-6 "  style="margin-right:3%;margin-left:3%;margin-top:3%;">
			<div class="row map-content" >
				<h2  id="font_change" style="font-size:25px;">&nbsp;&nbsp;&nbsp;&nbsp;Talk To Us</h2 >
				<div class="col-md-7 map-content">						
					<input type="text" name="name"   class="mainbox" id="mainbox_change" placeholder = 'Name'>
				</div>
				<div class="col-md-5 map-content" >
					<input type="text"  name="contact" class="mainbox" id="mainbox_change" placeholder = 'Contact' >
				</div>
			</div>
			<div class="row" >
				<div class="col-md-12 map-content" style="padding-top:20px;" >						
					<textarea name="userMsg" class="mainbox" id="mainbox_change"  rows="8" placeholder = 'Message'></textarea>
				</div>
			</div>
			<div class="form-group center">
				<input type="image" src="../images/contactus/mailsendhover.png" alt="Submit button" style="float:right;">
			</div>                      
		</div>
	</form> 
</div>
<div class="container" id="disnone" style="width:100%;position:relative;height:456px;">
	<div class="gmap"> 
	    <iframe
		  
		   frameborder="0" style="border:0;width:100%; height:456px;"
		  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD7xXdoWIKwiKgIEy0RFv4tkqdtH9tnmmI&q=KL Sentral" allowfullscreen>
		</iframe>
		
	</div>
</div>
			

<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

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
			


