

	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/slidelayout.css" type="text/css" media="screen">
	<script src="js/mouseslide.js" type="text/javascript"></script>
	<script src="js/galleryinit.js" type="text/javascript"></script>
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
<script>
   function selectedItem(num){
		$('.material-text').css("width","100%");
		$('.material-text').css("text-align","center");
		$('.material-text').css("left","0");
	   switch(num){
		   case 1:
				$('#imgbottom1').attr("src","/images/img1.jpg");
				break;
		   case 2:
				$('#imgbottom2').attr("src","/images/img2.jpg");
				break;
		   case 3:
				$('#imgbottom3').attr("src","/images/img3.jpg");
				break;
		   case 4:
				$('#imgbottom4').attr("src","/images/img4.jpg");
				break;
		   case 5:
				$('#imgbottom5').attr("src","/images/img5.jpg");
				break;
		   case 6:
				$('#imgbottom6').attr("src","/images/img6.jpg");
				break;
	   }
   }
   function unselectedItem(num){
		$('.material-text').css("width","100%");
		$('.material-text').css("text-align","left");
		$('.material-text').css("left","25%");
	   switch(num){
		   case 1:
				$('#imgbottom1').attr("src","/images/img1_1.jpg");
				break;
		   case 2:
				$('#imgbottom2').attr("src","/images/img2_1.jpg");
				break;
		   case 3:
				$('#imgbottom3').attr("src","/images/img3_1.jpg");
				break;
		   case 4:
				$('#imgbottom4').attr("src","/images/img4_1.jpg");
				break;
		   case 5:
				$('#imgbottom5').attr("src","/images/img5_1.jpg");
				break;
		   case 6:
				$('#imgbottom6').attr("src","/images/img6_1.jpg");
				break;
	   }
   }
</script>
<div id="third_content" class="container" style="width:100%;position:relative; z-index:61">
    <!-- Bootstrap Core CSS -->

<!-- Bootstrap Core JavaScript -->
	
	<div class="flexslider">
		 <ul class="slides">
			<li><img id = "imgbottom1" src = "/images/img1_1.jpg" style="" onmouseover="selectedItem(1);" onmouseout="unselectedItem(1);"/>
			    <p class="material-text" onmouseover="selectedItem(1);" onmouseout="unselectedItem(1);">Single Vision</p></li>
			<li><img id = "imgbottom2" src = "/images/img2_1.jpg" style="" onmouseover="selectedItem(2);" onmouseout="unselectedItem(2);"/>
			    <p class="material-text" onmouseover="selectedItem(2);" onmouseout="unselectedItem(2);">Progressive Lens</p></li>
			<li><img id = "imgbottom3" src = "/images/img3_1.jpg" style="" onmouseover="selectedItem(3);" onmouseout="unselectedItem(3);"/>
			    <p class="material-text" onmouseover="selectedItem(3);" onmouseout="unselectedItem(3);">Occupational Lens</p></li>
			<li><img id = "imgbottom4" src = "/images/img4_1.jpg" style="" onmouseover="selectedItem(4);" onmouseout="unselectedItem(4);"/>
			    <p class="material-text" onmouseover="selectedItem(4);" onmouseout="unselectedItem(4);">Anti-Reflection</p></li>
			<li><img id = "imgbottom5" src = "/images/img5_1.jpg" style="" onmouseover="selectedItem(5);" onmouseout="unselectedItem(5);"/>
			    <p class="material-text" onmouseover="selectedItem(5);" onmouseout="unselectedItem(5);">Photochromics</p></li>
			<li><img id = "imgbottom6" src = "/images/img6_1.jpg" style="" onmouseover="selectedItem(6);" onmouseout="unselectedItem(6);"/>
			    <p class="material-text" onmouseover="selectedItem(6);" onmouseout="unselectedItem(6);">Lens Materials</p></li>
			<span id="responsiveFlag"></span>
	     </ul>
	</div>

<script type="text/javascript">
    var scrollflag = 0;
	var dheight = window.innerHeight;
	var screensize = window.innerHeight - 10;
	/* $(function () {
		$('.js-popover').popover()
		$('.js-tooltip').tooltip()
		$('#tall-toggle').click(function () {
		$('#tall').toggle()
	  })
	}) */
	var xTop = 0;
	var transflg = 0;
	var lasttransflg3 = 0;
	$(function(){
			//Init3 ();
	}); 
	function MouseScroll3 (event) {
		if(!lasttransflg){
            var rolled = 0;
            if ('wheelDelta' in event) {
                rolled = event.wheelDelta;
            }
            else {  // Firefox
                    // The measurement units of the detail and wheelDelta properties are different.
                rolled = -40 * event.detail;
            }
            if(rolled < -115){
			}else if(rolled > 1115){
					lasttransflg = 1;
						
						$("#third_content").css("height", window.innerHeight+"px");
						$("#third_content").css("transition","1s");
						
						 
							var fsliderheight = screensize * 2/3;
							//$(".flexslider").css("height",fsliderheight+"px");
							//$(".container").css("z-index","0px");
							$.ajax({
								type: "GET",
								url: "/second_content",async: false,
								dataType:'text', //or HTML, JSON, etc.
								success: function(response){
									//$("#third_content").animate({height: '0px', opacity: '1'}, "slow", function(){
										$('#third_content').remove();
									//});
									$('body').append(response);
									$("#second_content").animate({height: screensize+'px', opacity: '1'}, "slow", function(){
										lasttransflg = 0;
									});
									$(".secondcontainer").css("height",screensize+"px");
									
								}
							});
			}
		}
			
    }
	function MouseScroll31 () {
		if(!lasttransflg){
			lasttransflg = 1;
						
						$("#third_content").css("height", window.innerHeight+"px");
						$("#third_content").css("transition","1s");
						
						 
							var fsliderheight = screensize * 2/3;
							//$(".flexslider").css("height",fsliderheight+"px");
							//$(".container").css("z-index","0px");
							$.ajax({
								type: "GET",
								url: "/second_content",async: false,
								dataType:'text', //or HTML, JSON, etc.
								success: function(response){
									//$("#third_content").animate({height: '0px', opacity: '1'}, "slow", function(){
										$('#third_content').remove();
									//});
									$('body').append(response);
									$("#second_content").animate({height: screensize+'px', opacity: '1'}, "slow", function(){
										lasttransflg = 0;
									});
									$(".secondcontainer").css("height",screensize+"px");
								
									
								}
							});
		}
			
    }
        function Init31 () {
                // for mouse scrolling in Firefox
            var elem = document.getElementById ("third_content");
				
            if (elem.addEventListener) {    // all browsers except IE before version 9
                    // Internet Explorer, Opera, Google Chrome and Safari
                elem.addEventListener ("mousewheel", MouseScroll3, false);
                    // Firefox
                elem.addEventListener ("DOMMouseScroll", MouseScroll3, false);
            }
            else {
                if (elem.attachEvent) { // IE before version 9
                    elem.attachEvent ("onmousewheel", MouseScroll3);
                }
            }
			var elem1 = document.getElementById ("footer");
				
            if (elem1.addEventListener) {    // all browsers except IE before version 9
                    // Internet Explorer, Opera, Google Chrome and Safari
                elem1.addEventListener ("mousewheel", MouseScroll3, false);
                    // Firefox
                elem1.addEventListener ("DOMMouseScroll", MouseScroll3, false);
            }
            else {
                if (elem1.attachEvent) { // IE before version 9
                    elem1.attachEvent ("onmousewheel", MouseScroll3);
                }
            }
			elem.addEventListener("scroll", function(event) {
				var top = this.scrollY,
					left =this.scrollX;
					console.log(top);
				if(top < 5)
				{
					MouseScroll31();
				}
			}, false);
			elem1.addEventListener("scroll", function(event) {
				var top = this.scrollY,
					left =this.scrollX;
					console.log(top);
				if(top < 5)
				{
					MouseScroll31();
				}
			}, false);
        }
</script>
@include('layout.footer')
</div>

