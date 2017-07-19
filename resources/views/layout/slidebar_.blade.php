<!-- Full Page Image Background Carousel Header -->

    <!-- Bootstrap Core CSS -->

<div id="myCarousel" class="carousel slide" style="min-width:800px;">
    <link href="/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/slidelayout.css" type="text/css" media="screen">
    <!-- Custom CSS -->
    <link href="/css/customer.css" rel="stylesheet">
	@include('layout.header')
	<ol class="carousel-circle">
    	<div align="center">
        	<ul>
	        	<li id="title_1">HOYA PRODUCES THE MOST</li>
    	        <li id="title_2">DURABLE AND RELIABLE</li>
        	    <li id="title_3">LENS COATING ON EARTH.</li>
            </ul>
        </div>
    </ol>

	<!-- Indicators -->
	<ol class="carousel-indicators">
		<?php
			$i = 0;
			 foreach( $slideitems as $slideitem )	
			{ 
				if($i == 0){
					echo("<li data-target='#myCarousel' data-slide-to='0' class='active' style='margin-left:10px;'></li>");
				}else{
					echo("<li data-target='#myCarousel' data-slide-to='".(string)$i."' style='margin-left:10px;'></li>");
				}
			$i++;
			}  
		?>
	</ol>
	<!-- Wrapper for Slides -->
	<div class="carousel-inner">
	<?php
		$i = 0;
		foreach( $slideitems as $slideitem )	
		{ 
			if($i == 0){
				echo("<div class='item active carousel_back' style='background-image:url(/uploads/". $slideitem['thumbpath'] .");'>");
			}else{
				echo("<div class='item carousel_back' style='background-image:url(/uploads/". $slideitem['thumbpath'] .");'>");
			}
//		echo("<img id='carosel_imges' src='/uploads/" . $slideitem['thumbpath'] . "' style='width: 100%; height:100%;' alt='" . $slideitem['title'] . "'>");
		echo("</div>");
		$i++;
		} 
	?>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev" style="z-index:100">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next" style="z-index:100">
		<span class="icon-next"></span>
	</a>
</div>


<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.js"></script>

<script src="/js/jQuery_mousewheel_plugin.js"></script>

<script type="text/javascript">
    var scrollflag1 = 0;
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
	$(function(){
			
			$(".carousel_back").css("height",screensize+"px");
			$(".headbar").css("position","fixed");
			$(".headbar").css("top","0px");
			$(".headbar").css("left","10%");
			$(".carousel").css("display","block");
			$(".carousel").css("position","static");
			$('.carousel-circle').css("bottom", "10%");
			Init1 ();
	}); 
	function MouseScroll (event) {
		if(!lasttransflg && !scrollflag1){
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
						
							$.ajax({
								type: "GET",
								url: "/second_content",async: false,
								dataType:'HTML', //or HTML, JSON, etc.
								success: function(response){
									//$("#myCarousel").animate({height: '0px', opacity: '1'}, "slow", function(){
										//$('#myCarousel').remove();
									//});
									$("script[src='/js/jQuery_mousewheel_plugin.js']").remove();
									$('body').append(response);
									//$("#second_content").animate({height: screensize+'px', opacity: '1'}, "slow", function(){
										lasttransflg = 0;scrollflag1 = 1;
									//});
									$(".secondcontainer").css("height",dheight+"px");
									
									//echo what the server sent back...
								}
							});
			}
		}
    }
	function MouseScroll1() {
		if(!lasttransflg && !scrollflag1){
			lasttransflg = 1;
            var rolled = 0;
						 //$("#myCarousel").css("height","0px");
						//$("#myCarousel").css("transition","3s");
						var newheight = $('div:first',$("#myCarousel")).height();
						 $("#myCarousel").animate({height: '0px', opacity: '1'}, "slow");
						
							$.ajax({
								type: "GET",
								url: "/second_content",async: false,
								dataType:'HTML', //or HTML, JSON, etc.
								success: function(response){
									//$("#myCarousel").animate({height: '0px', opacity: '1'}, "slow", function(){
										//$('#myCarousel').remove();
									//});
									$('body').append(response);
									$(".secondcontainer").css("height",screensize+"px");
									$("#second_content").animate({height: screensize+'px', opacity: '1'}, "slow", function(){
										lasttransflg = 0;scrollflag1 = 1;
									});
									//echo what the server sent back...
								}
							});
		}
    }
        function Init1 () {
                // for mouse scrolling in Firefox
            var elem = document.getElementById ("myCarousel");
				
            if (elem.addEventListener) {    // all browsers except IE before version 9
                    // Internet Explorer, Opera, Google Chrome and Safari
                elem.addEventListener ("mousewheel", MouseScroll, false);
                    // Firefox
                elem.addEventListener ("DOMMouseScroll", MouseScroll, false);
            }
            else {
                if (elem.attachEvent) { // IE before version 9
                    elem.attachEvent ("onmousewheel", MouseScroll);
                }
            }
			elem.addEventListener("scroll", function(event) {
				var top = this.scrollY,
					left =this.scrollX;
					console.log(top);
				if(top > 5)
				{
					MouseScroll1();
				}
			}, false);
        }
		
</script>