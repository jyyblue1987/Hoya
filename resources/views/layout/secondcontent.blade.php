
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/slidelayout.css" type="text/css" media="screen">
    <!-- Custom CSS -->
    <link href="/css/customer.css" rel="stylesheet">
<script>
 function selectOver(){
	 $(".home_s_bt").css("background-image","url(/images/click_bt.png)");
 }
 function unselectOut(){
	 $(".home_s_bt").css("background-image","url(/images/normal_bt.png)");
 }
</script>
<div  id="second_content" class="container secondcontainer" style="background-image:url(/images/bottom_bg_1.png);  background-position:right top; background-size:cover; min-width:100%; height:100%;">	
    	<div class = "home_cnt_3">
			<p style="float:left;">HOYA lenses <font style="font-family:Baskerville !important;	font-style: italic;	font-size: 50px;">designed exclusively</font></p>
            <p class="custom_text"> for the way your eyes see the world.</p>
		</div>
		<div class = "home_cnt_3" style="    margin-top: 50px;    margin-left: 7%;">
            <p class="custom_text"> Simulate your situation through the Hoya lenses</p>
			<p class="custom_text" style="margin-top: 0px;"></p>
		</div>
		<a href="/lens">
		<div class = "home_cnt_3 home_s_bt" style="background-image:url(/images/normal_bt.png);width:372px;height:100px;margin-left: 20%;    margin-top: 50px;" onmouseover="selectOver()" onmouseout="unselectOut()">			
		    
            <p class="custom_text" style="    color: #000;    margin-left: 75px;    margin-top: 31px;">START SIMULATION</p>
			
		</div>
		</a>
</div>

<script type="text/javascript">
    var scrollflag2 = 0;
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
	var lasttransflg2 = 0;
	$(function(){
			Init2 ();
	}); 
	function MouseScroll2 (event) {
		if(!lasttransflg && !scrollflag2){
            var rolled = 0;
            if ('wheelDelta' in event) {
                rolled = event.wheelDelta;
            }
            else {  // Firefox
                    // The measurement units of the detail and wheelDelta properties are different.
                rolled = -40 * event.detail;
            }
            if(rolled < -115){
				lasttransflg = 1;
						//$("#second_content").css("height","0px");
						//$("#second_content").css("transition","1s");
						
						 
							//var fsliderheight = screensize * 2/3;
							//$(".flexslider").css("height",fsliderheight+"px");
							//$(".container").css("z-index","0px");
							$.ajax({
								type: "GET",
								url: "/third_content",async: false,
								dataType:'HTML', //or HTML, JSON, etc.
								success: function(response){
									//$("#second_content").animate({height: '0px', opacity: '1'}, "slow", function(){
										//$('#second_content').remove();
									//});
										$("script[src='/js/jquery.js']").remove();
										$("script[src='/js/bootstrap.min.js']").remove();
									$('body').append(response);
									$("#third_content").animate({height: screensize+'px', opacity: '1'}, "slow", function(){
										lasttransflg = 0;scrollflag2 = 1;
										//alert("bbb");
										loadGallery();
										
										//alert("aaa");
										//$('head').append('<link rel="stylesheet" type="text/css" href="css/kwicks-slider.css">');
										
										//$.getScript("js/jquery.flexslider-min.js", function() {
											
										//});
									});
									
								}
							});
			}else if(rolled > 1115){
					lasttransflg = 1;
						$("#second_content").css("height", window.innerHeight+"px");
						$("#second_content").css("transition","1s");
						
						 
							var fsliderheight = screensize * 2/3;
							//$(".flexslider").css("height",fsliderheight+"px");
							//$(".container").css("z-index","0px");
							$.ajax({
								type: "GET",
								url: "/first_content",async: false,
								dataType:'HTML', //or HTML, JSON, etc.
								success: function(response){
									//$("#second_content").animate({height: '0px', opacity: '1'}, "slow", function(){
										//$('#second_content').remove();
									//});
									$('body').append(response);
									$("#myCarousel").animate({height: screensize+'px', opacity: '1'}, "slow", function(){
										lasttransflg = 0;
									});
									$(".carousel_back").css("height",screensize+"px");
									$(".headbar").css("position","fixed");
									$(".headbar").css("left","10%");
									$(".carousel").css("display","block");
									$(".carousel").css("position","static");
									$('.carousel-circle').css("bottom", "10%");
									
								}
							});
				
			}
		}
			
    }
		$( "#second_content" ).scroll(function() {
		});
        function Init2 () {
                // for mouse scrolling in Firefox
            var elem= document.getElementById ("second_content");
				
            if (elem.addEventListener) {    // all browsers except IE before version 9
                    // Internet Explorer, Opera, Google Chrome and Safari
                elem.addEventListener ("mousewheel", MouseScroll2, false);
                    // Firefox
                elem.addEventListener ("DOMMouseScroll", MouseScroll2, false);
            }
            else {
                if (elem.attachEvent) { // IE before version 9
                    elem.attachEvent ("onmousewheel", MouseScroll2);
                }
            }
        }
</script>