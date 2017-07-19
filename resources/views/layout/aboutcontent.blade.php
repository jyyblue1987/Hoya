
	<script type="text/javascript" src="js/jssor.slider.min.js"></script>


	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/lightbox.min.css" type="text/css" media="screen">
    
	<style>
    div.img img {
        width: 100%;
        height: auto;
    }
    
    .responsive {
        float: left;
        width: 24.99999%;
    }
    
    @media (min-width: 600px) and (max-width: 1200px){
        .responsive {
            float: left;
            width: 49.99999%;
        }
    }
    
    @media (max-width: 599px){
        .responsive {
            float: left;
            width: 100%;
        }
    }
    </style>

    <div class="container_about" style="width:100%;position:relative;">
		<script>
		var yearflag=0;
		var jssor_1_slider;
		var numflag = 0;
		var refreshflag;
        jssor_1_slider_init = function(realcols) {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $AutoPlaySteps: 1,
              $SlideDuration: 560,
              $SlideWidth: 640, 
              $SlideSpacing: 0,
              $Cols: realcols,
			  $PauseOnHover: 1,
			  $StartIndex: 0,
			  $Loop: 0,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 1
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };
            
            jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 4000);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
//			jssor_1_slider.$Loop(2);
		
		 var fnum=1;
		 function initmileston(){
			 document.getElementById("text-1941").style.visibility = "hidden";
			 document.getElementById("img-1941").style.visibility="hidden";
             document.getElementById("text-1963").style.visibility = "hidden";
			 document.getElementById("img-1963").style.visibility="hidden";
             document.getElementById("text-1993").style.visibility = "hidden";
			 document.getElementById("img-1993").style.visibility="hidden";
             document.getElementById("text-1996").style.visibility = "hidden";
			 document.getElementById("img-1996").style.visibility="hidden";
             document.getElementById("text-1997").style.visibility = "hidden";
			 document.getElementById("img-1997").style.visibility="hidden";
             document.getElementById("text-2001-1").style.visibility = "hidden";
			 document.getElementById("img-2001-1").style.visibility="hidden";
             document.getElementById("text-2001-2").style.visibility = "hidden";
			 document.getElementById("img-2001-2").style.visibility="hidden";
             document.getElementById("text-2010-1").style.visibility = "hidden";
			 document.getElementById("img-2010-1").style.visibility="hidden";
             document.getElementById("text-2010-2").style.visibility = "hidden";
			 document.getElementById("img-2010-2").style.visibility="hidden";
             document.getElementById("text-2011").style.visibility = "hidden";
			 document.getElementById("img-2011").style.visibility="hidden";
             document.getElementById("text-2012").style.visibility = "hidden";
			 document.getElementById("img-2012").style.visibility="hidden";
             document.getElementById("text-2014").style.visibility = "hidden";
			 document.getElementById("img-2014").style.visibility="hidden";
             document.getElementById("text-2016").style.visibility = "hidden";
			 document.getElementById("img-2016").style.visibility="hidden";
  	    }
		function showmileston(){
			initmileston();
			switch(fnum+1){
				 case 1:document.getElementById("text-1941").style.visibility = "visible";document.getElementById("img-1941").style.visibility="visible";break;
				 case 2:document.getElementById("text-1963").style.visibility = "visible";document.getElementById("img-1963").style.visibility="visible";break;
                 case 3:document.getElementById("text-1993").style.visibility = "visible";document.getElementById("img-1993").style.visibility="visible";break;
                 case 4:document.getElementById("text-1996").style.visibility = "visible";document.getElementById("img-1996").style.visibility="visible";break;				 
				 case 5:document.getElementById("text-1997").style.visibility = "visible";document.getElementById("img-1997").style.visibility="visible";break;
				 case 6:document.getElementById("text-2001-1").style.visibility = "visible";document.getElementById("img-2001-1").style.visibility="visible";break;
				 case 7:document.getElementById("text-2001-2").style.visibility = "visible";document.getElementById("img-2001-2").style.visibility="visible";break;
				 case 8:document.getElementById("text-2010-1").style.visibility = "visible";document.getElementById("img-2010-1").style.visibility="visible";break;
				 case 9:document.getElementById("text-2010-2").style.visibility = "visible";document.getElementById("img-2010-2").style.visibility="visible";break;
				 case 10:document.getElementById("text-2011").style.visibility = "visible";document.getElementById("img-2011").style.visibility="visible";break;
				 case 11:document.getElementById("text-2012").style.visibility = "visible";document.getElementById("img-2012").style.visibility="visible";break;
				 case 12:document.getElementById("text-2014").style.visibility = "visible";document.getElementById("img-2014").style.visibility="visible";break;
				 case 13:document.getElementById("text-2016").style.visibility = "visible";document.getElementById("img-2016").style.visibility="visible";break;
			}
			switch(yearflag){
				 case 1:document.getElementById("text-1941").style.visibility = "visible";document.getElementById("img-1941").style.visibility="visible";break;
				 case 2:document.getElementById("text-1963").style.visibility = "visible";document.getElementById("img-1963").style.visibility="visible";break;
                 case 3:document.getElementById("text-1993").style.visibility = "visible";document.getElementById("img-1993").style.visibility="visible";break;
                 case 4:document.getElementById("text-1996").style.visibility = "visible";document.getElementById("img-1996").style.visibility="visible";break;				 
				 case 5:document.getElementById("text-1997").style.visibility = "visible";document.getElementById("img-1997").style.visibility="visible";break;
				 case 6:document.getElementById("text-2001-1").style.visibility = "visible";document.getElementById("img-2001-1").style.visibility="visible";break;
				 case 7:document.getElementById("text-2001-2").style.visibility = "visible";document.getElementById("img-2001-2").style.visibility="visible";break;
				 case 8:document.getElementById("text-2010-1").style.visibility = "visible";document.getElementById("img-2010-1").style.visibility="visible";break;
				 case 9:document.getElementById("text-2010-2").style.visibility = "visible";document.getElementById("img-2010-2").style.visibility="visible";break;
				 case 10:document.getElementById("text-2011").style.visibility = "visible";document.getElementById("img-2011").style.visibility="visible";break;
				 case 11:document.getElementById("text-2012").style.visibility = "visible";document.getElementById("img-2012").style.visibility="visible";break;
				 case 12:document.getElementById("text-2014").style.visibility = "visible";document.getElementById("img-2014").style.visibility="visible";break;
				 case 13:document.getElementById("text-2016").style.visibility = "visible";document.getElementById("img-2016").style.visibility="visible";break;
			 } 
			 /* if(jssor_1_slider.$CurrentIndex() == 12){
				 //sleep(250);
				 //alert(jssor_1_slider.$CurrentIndex());
				 if(numflag == 6){
					 jssor_1_slider.$GoTo(0);		 
				 }
				 numflag = numflag + 1;
			 }	 */		 
		}
			
		$(function(){
			 initmileston();
			 setInterval(showmileston, 250);
			 //jssor_1_slider.$Loop(1);
			 
			 jssor_1_slider.$On($JssorSlider$.$EVT_STATE_CHANGE, function(slideIndex, progress, progressBegin, idleBegin, idleEnd, progressEnd)
			{
				if(slideIndex == 12 && progress == progressEnd)
				{
					//do something when last slide plays over
					jssor_1_slider.$PlayTo(0, 560);
					
				}
			});
		 });
		function showyear(num){
			yearflag=num;
		}
        function hideyear(){
			yearflag=0;
		}  	
		function setCurrentYear(num){
			
			jssor_1_slider.$GoTo(num);
			/* if(num == 12){
				setInterval(refreshSlider, 250);
			} */
			//slider1.GoTo(num);
		}

		function refreshSlider() {
			jssor_1_slider.$GoTo(0);
			//clearTimeout(numflag);
		}
    </script>

    <style>
        .jssorb03 {
            position: absolute;
        }
        .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            text-align: center;
            line-height: 21px;
            color: white;
            font-size: 12px;
            background: url('images/about/b03.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

        .jssora03l, .jssora03r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 155px;
            height: 155px;
            cursor: pointer;
            background: url('images/about/a03.png') no-repeat;
            overflow: hidden;
        }
        .jssora03l { background-position: -3px -33px; }
        .jssora03r { background-position: -63px -33px; }
        .jssora03l:hover { background-position: -123px -33px; }
        .jssora03r:hover { background-position: -183px -33px; }
        .jssora03l.jssora03ldn { background-position: -243px -33px; }
        .jssora03r.jssora03rdn { background-position: -303px -33px; }
		
		.jssor-year{position:absolute;top:110px;left:42%;color:#fff;font-size:42px;}
		.jssor-year-end{position:absolute;top:210px;left:35%;color:#fff;font-size:42px;}
		.jssor-content{position:absolute;text-align:center;top:400px;left:15%;width:70%;color:#fff;font-size:20px;}
		.jssor-content1{position:absolute;text-align:center;top:350px;left:15%;width:70%;color:#fff;font-size:20px;}
		.jssor-content-end{position:absolute;text-align:center;top:300px;left:16%;width:70%;color:#fff;font-size:75px;font-family:Baskerville!important;}
  	    .jssor-indicator{position:absolute;bottom:30px;}
		.jssor-imgoption{margin-left:-29px}
		#jssor_1 h2{color:#fff;margin-left:-10px;margin-bottom:5px;font-size:20px}
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1920px; height: 750px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1920px; height: 750px; overflow: hidden;">
            <div style="display: none;" >
                <img data-u="image" src="images/about/front.png"/>
				<li><p class="jssor-year"></p></li>
				<li><p class="jssor-content jssor-content1" style="font-family: Baskerville !important;  font-style: italic;font-size:40px">How Hoya started</p></li>
            </div>
			<div style="display: none;" >
                <img data-u="image" src="images/about/1941.png" />
				<li><p class="jssor-year">1941</p></li>
				<li><p class="jssor-content">The brothers Shoichi and Shigeru Yamanaka</br>established an optical glass production plant in the</br>city of HOYA, Tokyo, and production of optical<br>glass began.</p></li>
            </div>
            <div style="display: none;" >
                <img data-u="image" src="images/about/1963.png" />
				<li><p class="jssor-year">1963</p></li>
				<li><p class="jssor-content">HOYA is a globally renowned for its stable, high</br>performance anti-reflection coatings.</br></br>In 1963, Hoya was succesfully apply an</br>anti-reflection coating on mineral. Later application</br>on plastic lenses was equally successful. Hoya's</br>scratch resistant coating Super Hi-Vision and</br>Hi-Vision LongLife both earned the iF Material</br>Award, and the first also for the TOP Opta Award.</p></li>
            </div>
            <div style="display: none;">
                <img data-u="image" src="images/about/1993.png" />
				<li><p class="jssor-year">1993</p></li>
				<li><p class="jssor-content">First Stock Office at Wisma Nusantara</p></li>
            </div>
            <div style="display: none;" >
                <img data-u="image" src="images/about/1996.png" />
				<li><p class="jssor-year">1996</p></li>
				<li><p class="jssor-content">Factory at Kepong</p></li>
            </div>
            <div style="display: none;" >
                <img data-u="image" src="images/about/1997.png" />
				<li><p class="jssor-year">1997</p></li>
				<li><p class="jssor-content">Introduce GT1000 and Hoyalog</p></li>
            </div>
            <div style="display: none;" >
                <img data-u="image" src="images/about/2001-1.png" />
				<li><p class="jssor-year">2001</p></li>
				<li><p class="jssor-content">in 2001 Hoya developed iD FreeForm Design</br>Technology for progressive lenes, creating a</br>completely new lens defination.</br></br>This technology was awarded with:</br>-Good Design Award (2004,2007)</br>-Silmo d'Or(2004)</p></li>
            </div>
            <div style="display: none;" >
                <img data-u="image" src="images/about/2001-2.png" />
				<li><p class="jssor-year">2001</p></li>
				<li><p class="jssor-content">Nulux EP was the first single vision lens to use</br>calculations based on visual acuity and eyeball</br>rotation.</p></li>
            </div>
            <div style="display: none;" >
                <img data-u="image" src="images/about/2010-1.png" />
				<li><p class="jssor-year">2010</p></li>
				<li><p class="jssor-content" style="width:80%;left:10%">Hoya won the prestigious Optical Product of the Year</br>Award with Hoyalux iD MyStyle:An excellent</br>example of taking personalisation to a new level.</p></li>
            </div>
            <div style="display: none;" >
                <img data-u="image" src="images/about/2010-2.png" />
				<li><p class="jssor-year">2010</p></li>
				<li><p class="jssor-content">Introduce FreeForm production line in Hoya Lens</br>Manufacturing Malaysia.</p></li>
            </div>
            <div style="display: none;" >
                <img data-u="image" src="images/about/2011.png" />
				<li><p class="jssor-year">2011</p></li>
				<li><p class="jssor-content" style="width:80%;left:10%">Hoya's ultra-thin lens material Eyvia 1.74, which won</br>the iF Material Award 2011.</p></li>
            </div>
            <div style="display: none;" >
                <img data-u="image" src="images/about/2012.png" />
				<li><p class="jssor-year">2012</p></li>
				<li><p class="jssor-content" style="width:80%;left:10%">Hoya Malaysia set up Hoya Academy. The 2nd Hoya</br>Academy in Asia Pacific after Shanghai.</p></li>
            </div> 
            <div style="display: none;" >
                <img data-u="image" src="images/about/2014.png" />
				<li><p class="jssor-year">2014</p></li>
				<li><p class="jssor-content">iD MyStyle V+ won the England Optician Lens</br>Product of the Year Award. A remarkable</br>achievement of Hoya patented technology of</br>premium individualised progrssive lenses.</p></li>
			</div>
            <div style="display: none;" >
                <img data-u="image" src="images/about/2016.png" />
				<li><p class="jssor-year">2016</p></li>
				<li><p class="jssor-content">Hoya Malaysia 20th Anniversary</p></li>
            </div>
			<div style="display: none;" >
                <img data-u="image" src="images/about/more.png" />
				<li><p class="jssor-year-end">Stay tuned...</p></li>
				<li><p class="jssor-content-end">More to Come</p></li>
			</div>
            
        </div>
        <div >
		      <div><p align="center" style=" position:absolute;top:25px;color:#fff;margin-top: 20px;     margin-left: -20px;font-size: 40px;width: 100%;">OUR MILESTONES</p></div>
			  <div style="position:absolute;bottom:32px;left:490px"> 
		          <img src="images/about/linebar.png"/>
			  </div>
		      <div class="jssor-indicator" style="left:480px"> 
		          <h2 id="text-1941">1941</h6>  
			      <img id="img-1941" src="images/about/round.png"/> 
				  <img class="jssor-imgoption" style="cursor:pointer;" src="images/about/point.png" onclick="setCurrentYear(0)" onmouseenter="showyear(1)" onmouseleave="hideyear()"/>
			  </div> 
			  <div class="jssor-indicator" style="left:560px"> 
		          <h2 id="text-1963">1963</h6>  
			      <img id="img-1963" src="images/about/round.png"/>
				  <img class="jssor-imgoption" style="cursor:pointer" src="images/about/point.png" onclick="setCurrentYear(1)" onmouseenter="showyear(2)" onmouseleave="hideyear()"/>
			  </div> 
			  <div class="jssor-indicator" style="left:640px"> 
		          <h2 id="text-1993">1993</h6>  
			      <img id="img-1993" src="images/about/round.png"/>
				  <img class="jssor-imgoption" style="cursor:pointer" src="images/about/point.png" onclick="setCurrentYear(2)" onmouseenter="showyear(3)" onmouseleave="hideyear()"/>
			  </div> 
			  <div class="jssor-indicator" style="left:720px"> 
		          <h2 id="text-1996">1996</h6>  
			      <img id="img-1996" src="images/about/round.png"/>
				  <img class="jssor-imgoption" style="cursor:pointer" src="images/about/point.png" onclick="setCurrentYear(3)" onmouseenter="showyear(4)" onmouseleave="hideyear()"/>
			  </div> 
			  <div class="jssor-indicator" style="left:800px"> 
		          <h2 id="text-1997">1997</h6>  
			      <img id="img-1997" src="images/about/round.png"/>
				  <img class="jssor-imgoption" style="cursor:pointer" src="images/about/point.png" onclick="setCurrentYear(4)" onmouseenter="showyear(5)" onmouseleave="hideyear()"/>
			  </div> 
			  <div class="jssor-indicator" style="left:880px"> 
		          <h2 id="text-2001-1">2001</h6>  
			      <img id="img-2001-1" src="images/about/round.png"/>
				  <img class="jssor-imgoption" style="cursor:pointer" src="images/about/point.png" onclick="setCurrentYear(5)" onmouseenter="showyear(6)" onmouseleave="hideyear()"/>
			  </div> 
			  <div class="jssor-indicator" style="left:960px"> 
		          <h2 id="text-2001-2">2001</h6>  
			      <img id="img-2001-2" src="images/about/round.png"/>
				  <img class="jssor-imgoption" style="cursor:pointer" src="images/about/point.png" onclick="setCurrentYear(6)" onmouseenter="showyear(7)" onmouseleave="hideyear()"/>
			  </div> 
			  <div class="jssor-indicator" style="left:1040px"> 
		          <h2 id="text-2010-1">2010</h6>  
			      <img id="img-2010-1" src="images/about/round.png"/>
				  <img class="jssor-imgoption" style="cursor:pointer" src="images/about/point.png" onclick="setCurrentYear(7)" onmouseenter="showyear(8)" onmouseleave="hideyear()"/>
			  </div> 
			  <div class="jssor-indicator" style="left:1120px"> 
		          <h2 id="text-2010-2">2010</h6>  
			      <img id="img-2010-2" src="images/about/round.png"/>
				  <img class="jssor-imgoption" style="cursor:pointer" src="images/about/point.png" onclick="setCurrentYear(8)" onmouseenter="showyear(9)" onmouseleave="hideyear()"/>
			  </div> 
			  <div class="jssor-indicator" style="left:1200px"> 
		          <h2 id="text-2011">2011</h6>  
			      <img id="img-2011" src="images/about/round.png"/>
				  <img class="jssor-imgoption" style="cursor:pointer" src="images/about/point.png" onclick="setCurrentYear(9)" onmouseenter="showyear(10)" onmouseleave="hideyear()"/>
			  </div> 
			  <div class="jssor-indicator" style="left:1280px"> 
		          <h2 id="text-2012">2012</h6>  
			      <img id="img-2012" src="images/about/round.png"/>
				  <img class="jssor-imgoption" style="cursor:pointer" src="images/about/point.png" onclick="setCurrentYear(10)" onmouseenter="showyear(11)" onmouseleave="hideyear()"/>
			  </div> 
			  <div class="jssor-indicator" style="left:1360px"> 
		          <h2 id="text-2014">2014</h6>  
			      <img id="img-2014" src="images/about/round.png"/>
				  <img class="jssor-imgoption" style="cursor:pointer" src="images/about/point.png" onclick="setCurrentYear(11)" onmouseenter="showyear(12)" onmouseleave="hideyear()"/>
			  </div> 
			  <div class="jssor-indicator" style="left:1440px"> 
		          <h2 id="text-2016">2016</h6>  
			      <img id="img-2016" src="images/about/round.png"/>
				  <img class="jssor-imgoption" style="cursor:pointer" src="images/about/point.png" onclick="setCurrentYear(12)" onmouseenter="showyear(13)" onmouseleave="hideyear()"/>
			  </div> 
		  </div>
        <!-- Arrow Navigator -->
		<a class="left carousel-control" data-u="arrowleft" style="z-index:100;width: 80px;">
		<span class="icon-prev"></span>
		</a>
		<a class="right carousel-control" data-u="arrowright" style="z-index:100;width: 80px;">
		<span class="icon-next"></span>
		</a>
		<!--<span data-u="arrowleft" class="left carousel-control icon_prev" style="top:0px;left:8px;width:55px;height:55px;z-index:100" data-autocenter="2"></span>-->
        <!--<span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>-->
        
    </div>
	
    <script>
        jssor_1_slider_init(3);
		/* $(function(){ 
		 fjssor();
		 
		});
		$(window).resize(function () {
			 fjssor();
		});
		function fjssor(){
			var hheight1 = window.innerHeight;
			var hwidth1 = window.innerWidth;
			alert("asdasdasd");
			if(hwidth1 < 800){
				jssor_1_slider_init(2);
			}else{
				jssor_1_slider_init(3);
			}
		} */
    </script>
	<div class="bottom40">
	<div id="container1" style="width:100%;position:absolute;top:0px">
        <div id="lens_carousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators" style="position:absolute;bottom:-10px;">
                <li class="indi1" data-target="#lens_carousel" data-slide-to="0" class="active"></li>
                <li class="indi1" data-target="#lens_carousel" data-slide-to="1"></li>
                <li class="indi1" data-target="#lens_carousel" data-slide-to="2"></li>
                <li class="indi1" data-target="#lens_carousel" data-slide-to="3"></li>
                <li class="indi1" data-target="#lens_carousel" data-slide-to="4"></li>
                <li class="indi1" data-target="#lens_carousel" data-slide-to="5"></li>
                <li class="indi1" data-target="#lens_carousel" data-slide-to="6"></li>
                <li class="indi1" data-target="#lens_carousel" data-slide-to="7"></li>
                <li class="indi1" data-target="#lens_carousel" data-slide-to="8"></li>
                <li class="indi1" data-target="#lens_carousel" data-slide-to="9"></li>
                <li class="indi1" data-target="#lens_carousel" data-slide-to="10"></li>
                <li class="indi1" data-target="#lens_carousel" data-slide-to="1"></li>
                <li class="indi1" data-target="#lens_carousel" data-slide-to="12"></li>
            </ol>
            <!-- Wrapper for Slides -->
            <div class="carousel-inner" style=" clear:both; float:left;">
                <div class="item active">
                    <li><img class = "imgbottom2" src = "images/about/1941.png" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="jssor-year">1941</p>
					<p class="jssor-content">The brothers Shoichi and Shigeru Yamanaka</br>established an optical glass production plant in the</br>city of HOYA, Tokyo, and production of optical<br>glass began.</p></li>
                </div>
                <div class="item">
                    <li><img class = "imgbottom2" src = "images/about/1963.png" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="jssor-year">1963</p>
					<p class="jssor-content">HOYA is a globally renowned for its stable, high</br>performance anti-reflection coatings.</br></br>In 1963, Hoya was succesfully apply an</br>anti-reflection coating on mineral. Later application</br>on plastic lenses was equally successful. Hoya's</br>scratch resistant coating Super Hi-Vision and</br>Hi-Vision LongLife both earned the iF Material</br>Award, and the first also for the TOP Opta Award.</p></li>
                </div>
                <div class="item">
                    <li><img class = "imgbottom2" src = "images/about/1993.png" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="jssor-year">1993</p>
					<p class="jssor-content">First Stock Office at Wisma Nusantara</p></li>
                </div>
                <div class="item">
                    <li><img class = "imgbottom2" src = "images/about/1996.png" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="jssor-year">1996</p>
					<p class="jssor-content">Factory at Kepong</p></li>
                </div>
                <div class="item">
                    <li><img class = "imgbottom2" src = "images/about/1997.png" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="jssor-year">1997</p>
					<p class="jssor-content">Introduce GT1000 and Hoyalog</p></li>
                </div>
                <div class="item">
                    <li><img class = "imgbottom2" src = "images/about/2001-1.png" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="jssor-year">2001</p>
					<p class="jssor-content">in 2001 Hoya developed iD FreeForm Design</br>Technology for progressive lenes, creating a</br>completely new lens defination.</br></br>This technology was awarded with:</br>-Good Design Award (2004,2007)</br>-Silmo d'Or(2004)</p></li>
                </div>
                <div class="item">
                    <li><img class = "imgbottom2" src = "images/about/2001-2.png" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="jssor-year">2001</p>
					<p class="jssor-content">Nulux EP was the first single vision lens to use</br>calculations based on visual acuity and eyeball</br>rotation.</p></li>
                </div>
                <div class="item">
                    <li><img class = "imgbottom2" src = "images/about/2010-1.png" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="jssor-year">2010</p>
					<p class="jssor-content" style="width:80%;left:10%">Hoya won the prestigious Optical Product of the Year</br>Award with Hoyalux iD MyStyle:An excellent</br>example of taking personalisation to a new level.</p></li>
                </div>
                <div class="item">
                    <li><img class = "imgbottom2" src = "images/about/2010-2.png" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="jssor-year">2010</p>
					<p class="jssor-content">Introduce FreeForm production line in Hoya Lens</br>Manufacturing Malaysia.</p></li>
                </div>
                <div class="item">
                    <li><img class = "imgbottom2" src = "images/about/2011.png" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="jssor-year">2011</p>
					<p class="jssor-content" style="width:80%;left:10%">Hoya's ultra-thin lens material Eyvia 1.74, which won</br>the iF Material Award 2011.</p></li>
                </div>
                <div class="item">
                    <li><img class = "imgbottom2" src = "images/about/2012.png" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="jssor-year">2012</p>
					<p class="jssor-content" style="width:80%;left:10%">Hoya Malaysia set up Hoya Academy. The 2nd Hoya</br>Academy in Asia Pacific after Shanghai.</p></li>
                </div>
                <div class="item">
                    <li><img class = "imgbottom2" src = "images/about/2014.png" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="jssor-year">2014</p>
					<p class="jssor-content">iD MyStyle V+ won the England Optician Lens</br>Product of the Year Award. A remarkable</br>achievement of Hoya patented technology of</br>premium individualised progrssive lenses.</p></li>
                </div>
                <div class="item">
                    <li><img class = "imgbottom2" src = "images/about/2016.png" style="margin-top: -22px;width:100%;height:auto;"/>
					<p class="jssor-year">2016</p>
					<p class="jssor-content">Hoya Malaysia 20th Anniversary</p></li>
                </div>	
				
            </div>
			<!-- Controls -->
			<a class="left carousel-control leftarrow" href="#lens_carousel" data-slide="prev" style="z-index:100;height:100px;">
				<span class="icon-prev"></span>
			</a>
			<a class="right carousel-control leftarrow" href="#lens_carousel" data-slide="next" style="z-index:100;height:100px;">
				<span class="icon-next"></span>
			</a>
        </div>
    </div>
	</div>
	<!--<div class="container_about" style="width:100%;position:relative;">
		<div class="flexslider">
			<ul class="slides">
				<li><img src = "/images/about/slide_item1.png" style=""/></li>
				<li><img src = "/images/about/slide_item2.png" style=""/></li>
				<li><img src = "/images/about/slide_item3.png" style=""/></li>
				<li><img src = "/images/about/slide_item1.png" style=""/></li>
				<li><img src = "/images/about/slide_item2.png" style=""/></li>
				<li><img src = "/images/about/slide_item3.png" style=""/></li>
				<span id="responsiveFlag"></span>
			</ul>
		</div>
    </div>-->
    
	<div class = "row active bottom30" style="background-image:url(/images/about/about_back5.png);  background-position:center top; background-size:cover; height:668px;">
		<div class = "about_cnt_2">
        	<div align="center">
                <h2 class="text_disp_2" style="font-family:'Aaux ProLight'; font-size:30px; text-align:center; margin-top:80px; color:white">ENVIRONMENTAL POLICY</h2>
                <p class = "text_disp_1">Since 1996, Hoya has been working in accordance with the Environmental Management System ISO 14001 certification for all Hoya Labs ensures that Hoya Vision Care minimises the impact of its activities on people and the environment.</p> 
             </div>
        </div>
    </div>
    <div class = "about_group" style="background-image:url(/images/about/about_back6.png); background-repeat:repeat-x; height:142px;">
        <div class = "about_cnt_2">
            <div class="center">
                <h2 style="text-align:center; margin-top:20px;">OUR FACILITIES</h2>
             </div>
        </div>
    </div>

    <div class="about_group">
        <div class="responsive">
          <div class="img">
          	<a href="/images/about/about_tiem1.png" data-lightbox="about_tiem1">
            	<img src="/images/about/about_tiem1.png" alt=""/>
            </a>
          </div>
        </div>
        
        <div class="responsive">
          <div class="img">
          	<a href="/images/about/about_tiem2.png" data-lightbox="about_tiem2">
            	<img src="/images/about/about_tiem2.png" alt=""/>
            </a>
          </div>
        </div>
        
        <div class="responsive">
          <div class="img">
          	<a href="/images/about/about_tiem3.png" data-lightbox="about_tiem3">
            	<img src="/images/about/about_tiem3.png" alt=""/>
            </a>
          </div>
        </div>
        
        <div class="responsive">
          <div class="img">
          	<a href="/images/about/about_tiem4.png" data-lightbox="about_tiem4">
            	<img src="/images/about/about_tiem4.png" alt=""/>
            </a>
          </div>
        </div>
        <div class="responsive">
          <div class="img">
          	<a href="/images/about/about_tiem5.png" data-lightbox="about_tiem5">
            	<img src="/images/about/about_tiem5.png" alt=""/>
            </a>
          </div>
        </div>
        
        <div class="responsive">
          <div class="img">
          	<a href="/images/about/about_tiem6.png" data-lightbox="about_tiem6">
            	<img src="/images/about/about_tiem6.png" alt=""/>
            </a>
          </div>
        </div>
        
        <div class="responsive">
          <div class="img">
          	<a href="/images/about/about_tiem7.png" data-lightbox="about_tiem7">
            	<img src="/images/about/about_tiem7.png" alt=""/>
            </a>
          </div>
        </div>
        
        <div class="responsive">
          <div class="img">
          	<a href="/images/about/about_tiem8.png" data-lightbox="about_tiem8">
            	<img src="/images/about/about_tiem8.png" alt=""/>
            </a>
          </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
<!--******************************* Don't move this code *******************************************************-->
    <script type="text/javascript" src="js/lightbox-plus-jquery.js"></script>