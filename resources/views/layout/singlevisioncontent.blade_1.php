<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>

	
	<link rel="stylesheet" media="screen" href="css/zoomple.css" type="text/css">
	<script src="js/zoomple1.js" type="text/javascript"></script>   


	 <script type="text/javascript">
	      var selflag=0;   
          var progresflag=0;
		  var screenratio = 1.5;
		  var imgw = 0, imgh = 0;
		  $(document).ready(function() {
			$('.zoomple').zoomple({ 
				 offset : {x:-150,y:-150},
				 zoomWidth : 300,  
				 zoomHeight : 300,
				 roundedCorners : true,
				 delay :1,
				 pageNum:2
			});
			 /* for(var i = 0; i < 3; i++){
				var screenratio1 = 1.5;
				switch(i){
					case 0:
					screenratio1 = 1.5;
					break;
					case 1:
					screenratio1 = 2.5;
					break;
					case 2:
					screenratio1 = 3.5;
					break;
				}
				$.ajax({
					type: "GET",
					url: "/images/products/single_back2_2_"+screenratio1+".jpg",async: true,
					dataType:'HTML', //or HTML, JSON, etc.
					success: function(response){	
						$.ajax({
							type: "GET",
							url: "/images/products/single_back2_1_"+screenratio1+".jpg",async: true,
							dataType:'HTML', //or HTML, JSON, etc.
							success: function(response){								
													
								$.ajax({
									type: "GET",
									url: "/images/products/single_back2_"+screenratio1+".jpg",async: true,
									dataType:'HTML', //or HTML, JSON, etc.
									success: function(response){
									}
								});
							}
						});
					}
				});
			}  */
			
		 });
        
		 function seloption(){
			 switch(selflag){
			     case 0: document.getElementById("optionbar_sel_1").style.transform="translate("+"+"+"77px,0)";
				         $("#simulator_back_2").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");
						 $("#single_ipad").css("-webkit-filter","blur(2.5px)").css("filter","blur(2.5px)");
						 selflag=1;
						 break;
				case 1:  document.getElementById("optionbar_sel_1").style.transform="translate(0px,0)";
				         $("#simulator_back_2").css("-webkit-filter","blur(3.5px)").css("filter","blur(3.5px)");
						 $("#single_ipad").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");
						 
						 selflag=0;
						 break;
			 }
			 $(".container").css("display", "block");
			 
		 }
		 
		$(window).resize(function () {
			var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			 var ratio = Math.round(screenwidth * 10.0 / screenheight) / 10;
			 //console.log(ratio);
			 if(ratio < 1.4){
				 screenratio = 1.5;
			 }else if(ratio < 1.9){
				 screenratio = 2.5;
			 }else{
				 screenratio = 3.5;
			 }
			 //var imgheight = Math.round(3738.0 * screenwidth * 10.0 / 5717.0) / 10;
			 //seloption(screenwidth, imgheight);
			 //seloption();
			 screenset();
		});
		 
		 function popup_content(sel_v){
				switch(sel_v){
					case 1: $('#singlevision_1').modal('show'); break;	
					case 2: $('#singlevision_2').modal('show'); break;	
					case 3: $('#singlevision_3').modal('show'); break;	
					case 4: $('#singlevision_4').modal('show'); break;	
					case 5: $('#singlevision_5').modal('show'); break;	
				}
		 }
		 $(function(){ 
			 
			 var simulator_img=document.getElementById("simulator_back_2");
			 //simulator_img.style.width=window.innerWidht+"px";
			 var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			 var ratio = Math.round(screenwidth * 10.0 / screenheight) / 10;
			 //alert(ratio);
			 if(ratio < 1.4){
				 screenratio = 1.5;
			 }else if(ratio < 2.2){
				 screenratio = 2.5;
			 }else{
				 screenratio = 3.5;
			 }
			 var imgheight = Math.round(3738.0 * screenwidth * 10.0 / 5717.0) / 10;
			 var imgwidth = screenwidth;
			 //simulator_img.style.height="850px";
			 
			 var lens_img=document.getElementById("lens_img");
			 //lens_img.style.height="850px";
			 imgw = imgwidth;
			 imgh = imgheight;
			 
			 document.getElementById("simulator_back_2").src = "/models/timthumb.php?src=/images/products/single_simulator.jpg&w="+imgw+"&h="+imgh;
			 document.getElementById("single_ipad").src = "/models/timthumb.php?src=/images/products/single_front.png&w="+imgw+"&h="+imgh;
			 lens_img.href = "/models/timthumb.php?src=/images/products/single_lens.jpg&w="+imgw+"&h="+imgh;
			 seloption();
			 screenset();
			 
			 //simulator_img.src = "/images/simulators/farB_nearC_"+screenratio+".png";
			 //lens_img.href = "/images/simulators/farC_nearC_"+screenratio+".png";
			 //backimgwidth=simulator_img.width;/images/simulators/farC_nearC_1.5.png
		});
		function screenset(){
			var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			if(screenwidth > 800){
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * screenwidth * 1.0 / 1920.0);
				 $('#aboutdivid').css("height",hh+"px");
				 $('.singlevision_cnt_1').css("margin-left","50%");
				 var ff = Math.round(50 * screenwidth * 1.0 / 1920.0);
				 if(ff < 20){
					$('#h11').css("font-size","20px");
				 }else{
					$('#h11').css("font-size",ff+"px");
				 }
				 var pp = Math.round(20 * screenwidth * 1.0 / 1920.0);
				 if(pp < 12){
					$('#p1').css("font-size","12px");
				 }else{
					$('#p1').css("font-size",pp+"px");
				 }
				 
				 var top1 = Math.round(250 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.singlevision_cnt_1').css("margin-top","10px");
				 }else{
					$('.singlevision_cnt_1').css("margin-top",top1+"px");
				 }
				 ff = Math.round(102 * screenwidth * 1.0 / 1920.0);
				 if(ff < 20){
					$('.svg2').css("height","20px");
				 }else{
					$('.svg2').css("height",ff+"px");
				 }
				 $('#p1').css("font-family","Helvetica !important");
			 }else{
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * 800 * 1.0 / 1920.0);
				 $('#aboutdivid').css("height",hh+"px");
				 $('.singlevision_cnt_1').css("margin-left","50%");
				 var ff = Math.round(50 * 600 * 1.0 / 1920.0);
				 if(ff < 20){
					$('#h11').css("font-size","20px");
				 }else{
					$('#h11').css("font-size",ff+"px");
				 }
				 var pp = Math.round(20 * 600 * 1.0 / 1920.0);
				 if(pp < 12){
					$('#p1').css("font-size","12px");
				 }else{
					$('#p1').css("font-size",pp+"px");
				 }
				 
				 var top1 = Math.round(250 * (screenwidth * 1.0 / 1920.0) * (screenwidth * 1.0 / 1920.0) );
				 if(top1 < 10){
					 $('.singlevision_cnt_1').css("margin-top","10px");
				 }else{
					$('.singlevision_cnt_1').css("margin-top",top1+"px");
				 }
				 if(screenwidth < 600){
					 $('.singlevision_cnt_1').css("margin-left","10%");
				 }
				 ff = Math.round(72 * screenwidth * 1.0 / 1920.0);
				 if(ff < 20){
					$('.svg2').css("height","20px");
				 }else{
					$('.svg2').css("height",ff+"px");
				 }
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
			 
		}
	 </script>      
<div class="container_about" style="width:100%;position:relative">
    <div id="top_black" class="about_group_left" style=" background-color:#343434; height:90px;">
	</div>
	<div id="top_grey" class="about_group_left" style=" background-image:url(/images/products/fullproduction_img1.png); background-repeat:repeat; height:120px;">
        <div class = "about_cnt_2" style="margin-top:17px">
	        <div class="center">
				<p class="top_titlestr">Lens Design - Single Vision</p>
				<p class = "text_disp product_txt_1" style="margin-top:10px">Prescription eyeglass lens that correct for one distance.</p>
			</div>
        </div>
	</div>
	<div id = "aboutdivid" class="" style="position:relative;z-index:98;background-image:url(/images/products/single_back1.jpg); background-position:left top; background-size:cover; height:800px;min-width:100%">
		<div class = "singlevision_cnt_1">
			<h1 id="h11"style="color:#ffffff">Single Vision Solutions from Hoya</h1>
			<p id="p1" style="max-width:700px; color:#ffffff; overflow:hidden;">Countless innovations have allowed the Single Vision design to be perfected. Hoya has a wide selection of innovative single vision lens designs. We apply all our optical expertise to create the world’s most advanced eyeglass lens designs, materials and treatments, because we believe every pair of eyes deserves the best vision correction possible.</p>
		</div>
	</div>
</div>
    <div class="container container-simulator" style="z-index:50; min-width:400px;display:none">
            <a id="lens_img" href="" class="zoomple">
            	<img id="simulator_back_2" src = "" alt="" style="min-width:100%;width:100%; height:100%;"/>	
				<img id="single_ipad" src = "" style="min-width:100%;width:100%;height:auto;position:absolute;top:0px;left:0px"/>
            </a>
            <div id="pop_single_reg" style="width: 550px;">
            	<ul>
                	<li><p>MYOPIA<br/>(SHORT-SIGHTNESS)</p></li>
                    <li>
                    	<div onclick="seloption()">
	                        <img id="optionbar_sel_1"src="/images/products/optionbar_sel_1.png" alt=""/>
                        </div>
                    </li>
                    <li><p>HYPEROPIA<br/>(FAR-SIGHTNESS)</p></li>
                </ul>
            	<ul>
                	<li><p style="margin-left:60px">How HOYA Single Vision lenses improve your vision.</p></li>
                </ul>
            </div>
    </div>
	
	
	<div class="row active" style="background-image:url(/images/products/single_back3.png);  background-position:left top; background-size:cover; min-width:400px; height:438px;position:relative;z-index:201">
        <div class = "about_cnt_2" style="margin-top:70px">
	        <div class="center">
				<p class="bottom_titlestr">HOYA Single Vision Range</p>
			</div>
        </div>
		<div id="sv_iconpart">
			<ul>
				<li><img class="svg2" src="/images/products/selicon_28.svg" style="height:72px;" onclick="popup_content(1)" alt="" /></li>
				<li><img class="svg2" src="/images/products/selicon_27.svg" style="height:72px;" onclick="popup_content(2)" alt="" /></li>
				<li><img class="svg2" src="/images/products/selicon_26.svg" style="height:72px;" onclick="popup_content(3)" alt="" /></li>
				<li><img class="svg2" src="/images/products/h_nuluxidentityV+.svg" style="height:72px;" onclick="popup_content(4)" alt="" /></li>
				<li><img class="svg2" src="/images/products/selicon_30.svg" style="height:72px;" onclick="popup_content(5)" alt="" /></li>
			</ul>
		</div>
	</div>


<!--********************************************************************************************************************
***************************************** POP UP window ****************************************************************
**********************************************************************************************************************-->
  <div id="singlevision_1" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/single_hilux.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/selicon_28.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">HILUX</li>
                        <li class="p_title1">Hoya’s standard spherical single vision design. Excellent choice for low prescriptions.</li>
                        <li class="p_subject">Features</li>
                        <li class="p_title2">Standard solution for low prescriptions</li>
                        <li class="p_title2">Good price point</li>
                        <li class="p_title2">Offers good vision at centre of the lens, but towards periphery the aberrations will increase gradually</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo_blue.svg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  
  <div id="singlevision_2" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
        <div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/single_nullux.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/selicon_27.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="detailpop-body detailpop-header">
                <div id="detail_pop_content" class="contentdial">
                    <ul style="width:80%">
                        <li class="p_subject">NULUX</li>
                        <li class="p_title1">Hoya's aspheric single vision design with flatter, thinner looks and a wider visual field.</li>
                        <li class="p_subject">Features</li>
                        <li class="p_title2">Standard solution for low to moderate prescriptions</li>
                        <li class="p_title2">Great vision in all directions of sight</li>
                        <li class="p_title2">Aesthetically attractive lenses with minimal magnification or minification effect</li>
						<li class="p_title2">Flatter, lighter and thinner</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo_blue.svg" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>  
    <div id="singlevision_3" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/single_nulluxEP.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/selicon_26.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial" style="width:80%">
					<ul style="width:100%">
						<li class="p_subject">NULUX EP</li>
                        <li class="p_title1" style="width:100%">These lenses are carefully designed utilising cutting edge technology to be significantly thinner, flatter and lighter than regular lenses, providing you with wider, clearer vision and all day comfort.</li>
                        <li class="p_subject">Benefits</li>
                        <li class="p_title2">Wide visual fields throughout the power range, even with moderate astigmatism</li>
                        <li class="p_title2">Widest aberration-free field of view</li>
                        <li class="p_title2">Aesthetically attractive lenses with minimal magnification or minification effect</li>
						<li class="p_title2">Flatter, lighter and thinner</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo_blue.svg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  
  <div id="singlevision_4" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/single_identityV+.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/h_nuluxidentityV+.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">NULUX IDENTITY V+</li>
                        <li class="p_title1">HOYA Nulux Identity V+ lens is an exclusive lens tailored to people's personal wearing conditions. It is highly suitable to those who valued the highest quality product and sharp vision in all directions.</li>
                        <li class="p_subject">Features</li>
                        <li class="p_title2">Tailor made single vision lenses based on personal wearing conditions</li>
						<li class="p_title2">Sharp and unrestricted vision in all sight directions</li>
                        <li class="p_title2">A natural, clear visual field at all times</li>
                        <li class="p_title2">Aesthetic appearance</li>
                        <li class="p_title2">Ideal for a modern, dynamic lifestyle</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo_blue.svg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  
  
  <div id="singlevision_5" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/single_remark.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/selicon_30.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">TRUEFORM REMARK</li>
                        <li class="p_title1">Provides support above and beyond a traditional single vision lens. It is suitable for people who lead a busy and lifestyle. Provides an additional functional support at the inferior part of the lens for activities such as reading and using digital devices.</li>
                        <li class="p_subject">Benefits</li>
                        <li class="p_title2">Extra support allowing the wearer to perform better for longer</li>
                        <li class="p_title2">Relaxed and focused vision in all directions and at all distances</li>
                        <li class="p_title2">Effortless focusing and refocusing</li>
                        <li class="p_title2">A lens perfectly adapted to any lifestyle</li>
                        <li class="p_title2">Smoother future transition from single vision to multifocal lenses for younger presbyopes</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo_blue.svg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  