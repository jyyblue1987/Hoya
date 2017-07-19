<!-- Full Page Image Background Carousel Header -->
<div id="myCarousel" class="carousel slide" style="min-width:800px;">
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
<script src="/js/bootstrap.min.js"></script>

<script type="text/javascript">
    var scrollflag = 0;
	$(function () {
		$('.js-popover').popover()
		$('.js-tooltip').tooltip()
		$('#tall-toggle').click(function () {
		$('#tall').toggle()
	  })
	})
	
	$(function(){
		$(window).scroll(function(){
			var scrollTop = $(window).scrollTop();
			var mytop = scrollTop + 80 + "px";
			if(scrollTop > 400){
				if(scrollflag == 0){
					$("span.icon-prev").css("top", mytop);
					$("span.icon-next").css("top", mytop);
				}
			}else{
				$("span.icon-prev").css("top", "50%");
				$("span.icon-next").css("top", "50%");
			}
			if(scrollTop > 890){
				$("span.icon-prev").css('visibility', 'hidden');
				$("span.icon-next").css('visibility', 'hidden');
			}else{
				$("span.icon-prev").css('visibility', 'visible');
				$("span.icon-next").css('visibility', 'visible');
			}
		});
	});
</script>
