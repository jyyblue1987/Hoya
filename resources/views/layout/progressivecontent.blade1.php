	 <!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" media="screen" href="css/zoomple.css" type="text/css">
	 <script src="js/zoomple1.js" type="text/javascript"></script>   


  <script type="text/javascript">
    var selProgresflag=0;
	var progresflag=1;
	var imgw = 0, imgh= 0;
    function selProgresOption(){
			 switch(selProgresflag){
			     case 0: document.getElementById("optionbar_progres").style.transform="translate("+"+"+"77px,0)";
				         document.getElementById("container-progress").style.backgroundImage = "url(/images/products/progressive.png)";
				         selProgresflag=1;
						 break;
				case 1:  document.getElementById("optionbar_progres").style.transform="translate(0px,0)";
				         document.getElementById("container-progress").style.backgroundImage = "url(/images/products/bifocal.png)";
				         selProgresflag=0;
						 break;
			 }
			 
		 }
		
	 function popup_content(sel_v){			
		switch(sel_v){
			case 1: $('#progressive_1').modal('show'); break;	
			case 2: $('#progressive_2').modal('show'); break;	
			case 3: $('#progressive_3').modal('show'); break;
            case 4: $('#progressive_4').modal('show'); break;			
			case 5: $('#progressive_5').modal('show'); break;	
			case 6: $('#progressive_6').modal('show'); break;	
			case 7: $('#progressive_7').modal('show'); break;	
			case 8: $('#progressive_8').modal('show'); break;	
			
		}
	 }
		$(window).resize(function () {
			screenset();
		});
		 $(function(){ 
			 //simulator_img.src = "/images/simulators/farB_nearC_"+screenratio+".png";
			 //lens_img.href = "/images/simulators/farC_nearC_"+screenratio+".png";
			 //backimgwidth=simulator_img.width;/images/simulators/farC_nearC_1.5.png
			 var screenwidth = window.innerWidth;
			 var imgheight = Math.round(1005.0 * screenwidth * 10.0 / 1920.0) / 10;
			 var imgwidth = screenwidth;
			 imgw = imgwidth;
			 imgh = imgheight;
			 if(imgh < 400){
				 imgh = 400;
			 }
			 selProgresflag = 1;
			 selProgresOption();
			 screenset();
		});
		function screenset(){
			 var screenwidth = window.innerWidth;
			 if(screenwidth > 800){
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * screenwidth * 1.0 / 1920.0);
				 $('#aboutdivid').css("height",hh+"px");
				 $('.progress_cnt_1').css("margin-left","50%");
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
					 $('.progress_cnt_1').css("margin-top","10px");
				 }else{
					$('.progress_cnt_1').css("margin-top",top1+"px");
				 }
				 $('#p1').css("font-family","Helvetica !important");
			 }else{
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(800 * 800 * 1.0 / 1920.0);
				 $('#aboutdivid').css("height",hh+"px");
				 $('.progress_cnt_1').css("margin-left","50%");
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
					 $('.progress_cnt_1').css("margin-top","10px");
				 }else{
					$('.progress_cnt_1').css("margin-top",top1+"px");
				 }
				 if(screenwidth < 600){
					 $('.progress_cnt_1').css("margin-left","10%");
				 }
			 }
			 
				 ff = Math.round(72 * screenwidth * 1.0 / 1920.0);
				 if(ff < 20){
					$('.svg2').css("height","20px");
				 }else{
					$('.svg2').css("height",ff+"px");
				 }
					$('.titlesvg1').css("width",screenwidth+"px");
				 
					$('.titlesvg').css("width","24%");
					
				ff = Math.round(1005 * screenwidth * 1.0 / 1920.0);
				 if(ff < 500){
					ff = 500;
				 }
				 
				 $('#container-progress').css("height",ff+"px");
				 $('#pg_textpart').css("width","95%");
				 $('#pg_iconpart').css("width","95%");
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
</script>  

<div class="container_about" style="width:100%;position:relative;">
	<div id="top_black" class="about_group_left" style=" background-color:#343434; height:90px;">
	</div>
	<div id="top_grey" class="about_group_left" style=" background-image:url(/images/products/fullproduction_img1.png); background-repeat:repeat; height:120px;">
        <div class = "about_cnt_2" style="margin-top:37px">
	        <div class="center">
				<p class="top_titlestr">Lens Design - Progressive Lens</p>
				<p class = "text_disp product_txt_1" style="margin-top:10px">Multifocal lenses that provide clear and comfortable distance viewing transitions.</p>
			</div>
        </div>
	</div>
	<div id = "aboutdivid" class="" style=" background-image:url(/images/products/progressive_back1.jpg); background-position:left top; background-size:cover; height:800px;min-width:100%">
		<div class = "progress_cnt_1">
			<h1 id="h11" style="color:#ffffff">Superior progressive designs offering exceptional comfort</h1>
			<p id="p1" >A great deal of our research and development concentrates on all direction and focus stability. It allows natural vision to be organically simulated. Hoyalux iD progressive lens promotes mobility and eye reaction behaviour. As a result, correction in every distance and in every direction is in balance. Areas partially overlapped each other cause discomfort from sudden transition is eliminated.</p>
           
		</div>
	</div>
</div>	 
    <div id="container-progress" style="min-width:100%">
            <div id="pop_progress_reg" style="width:70%;">
            	<ul>
                	<li><p>BIFOCAL</p></li>
                    <li>
                    	<li>
                    	<div onclick="selProgresOption()">
	                        <img id="optionbar_progres"src="/images/products/optionbar_sel_1.png" alt=""/>
                        </div>
                    </li>
                    </li>
                    <li><p>PROGRESSIVE</p></li>
                </ul>
            	<ul>
                	<li><p style="margin-left:-105px; max-width:730px;">Unlike bifocals, Progressive Lenses feature an intermediate or ‘transition region’<br/>that allows your eyes to focus between near and far distances.</p></li>
                </ul>
            </div>
    </div>
	
    <!--<div class="container container-simulator" style="z-index:50; min-width:400px;display:block; max-height:800px;">
	
            	<img id="simulator_back_2" src = "" alt="" style="min-width:100%;width:100%; min-width:800px;height:100%;"/>	
            <div id="pop_single_reg" style="width: 550px;">
            	<ul>
                	<li><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BIFOCAL</p></li>
                    <li>
                    	<div onclick="selProgresOption()">
	                        <img id="optionbar_progres"src="/images/products/optionbar_sel_1.png" alt=""/>
                        </div>
                    </li>
                    <li><p>PROGRESSIVE</p></li>
                </ul>
            	<ul>
                	<li><p style="margin-left:60px">Unlike bifocals, Progressive Lenses feature an intermediate or ‘transition region’<br/>that allows your eyes to focus between near and far distances.</p></li>
                </ul>
            </div>
    </div>-->

	<div class="row active" style=" background-image:url(/images/products/progressive_back3.png); background-position:center top; background-size:cover;">
        <div class = "about_cnt_2" style="margin-top:30px">
	        <div class="center">
				<p class="bottom_titlestr">HOYA Single Vision Range</p>
				<ul style=" width:100%;  margin-top:-5px;" align="center">
                	<li><img src="/images/products/virtical_line.png" width="100%"></li>
                </ul>
			</div>
        </div>
        <div class="about_cnt_2">
            <div id="pg_textpart" style="margin-left:0px;">
                <ul class="titlesvg1" style="    margin-bottom: 30px;    width: 100%;">
                    <li class="titlesvg"><a href="" class="boottom_item">STANDARD</a></li>
                    <li class="titlesvg"><a href="" class="boottom_item">ADVANCED</a></li>
                    <li class="titlesvg"><a href="" class="boottom_item">PREMIUM</a></li>
                    <li class="titlesvg"><a href="" class="boottom_item">PERSONALISED</a></li>
                </ul>
                
            </div>
            <!--<div id="pg_iconpart" style="margin-left:0px;">
                <ul class="titlesvg1" style="    width: 100%;">
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_49.svg" style="height:60px;" onclick="popup_content(1)" alt=""></li>
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_44.svg" style="height:60px;" onclick="popup_content(2)" alt="" ></li>
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_11.svg" style="height:60px;" onclick="popup_content(3)" alt=""></li>
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_10.svg" style="height:60px;" onclick="popup_content(4)" alt=""></li>
                </ul>
                <ul class="titlesvg1" style="    width: 80%;">
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_50.svg" style="height:60px;" onclick="popup_content(5)" alt="" ></li>
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_41.svg" style="height:60px;" onclick="popup_content(6)" alt=""></li>
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_19.svg" style="height:60px;" onclick="popup_content(7)" alt=""></li>
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon-16.png" style="height:60px;" onclick="popup_content(8)" alt=""></li>
                </ul>
                <ul  class="titlesvg1" style="    width: 80%;">
                    <li  class="titlesvg" style="visibility:hidden; height:60px;"><img src="/images/products/selicon-6.png" alt=""></li>
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_42.svg" style="height:60px;" onclick="popup_content(9)" alt=""></li>
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_51.svg" style="height:60px;" onclick="popup_content(10)" alt=""></li>
                    <li  class="titlesvg" style="visibility:hidden; height:60px;"><img src="/images/products/selicon-6.png" alt=""></li>
                </ul>
                <ul class="titlesvg1" style="    width: 80%;">
                    <li class="titlesvg" style="visibility:hidden"><a href=""><img src="/images/products/selicon-6.png" alt=""></a></li>
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_1.svg" style="height:60px;" onclick="popup_content(11)" alt=""></li>
                    <li class="titlesvg" style="visibility:hidden"><a href=""><img src="/images/products/selicon-6.png" alt=""></a></li>
                    <li class="titlesvg" style="visibility:hidden"><a href=""><img src="/images/products/selicon-6.png" alt=""></a></li>
                </ul>
            </div>-->
			
            <div id="pg_iconpart" style="margin-left:0px;">
                <ul class="titlesvg1" style="    width: 100%;">
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_44.svg" style="height:60px;" onclick="popup_content(1)" alt="" ></li>
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_11.svg" style="height:60px;" onclick="popup_content(2)" alt=""></li>
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_10.svg" style="height:60px;" onclick="popup_content(3)" alt=""></li>
					<li class="titlesvg"><img class="svg2" src="/images/products/selicon-16.png" style="height:60px;" onclick="popup_content(4)" alt=""></li>
                </ul>
                <ul class="titlesvg1" style="    width: 80%;">
                    <li class="titlesvg"><img class="svg2" src="/images/popup/summit_procd.png" style="height:60px;" onclick="popup_content(5)" alt=""></li>
                    <li class="titlesvg"><img class="svg2" src="/images/products/selicon_19.svg" style="height:60px;" onclick="popup_content(6)" alt=""></li>
                </ul>
                <ul class="titlesvg1" style="    width: 80%;">
				    <li class="titlesvg"><img class="svg2" src="/images/popup/summit_dynamic.png" style="height:60px;" onclick="popup_content(7)" alt=""></li>
					<li class="titlesvg"><img class="svg2" src="/images/products/selicon_51.svg" style="height:60px;" onclick="popup_content(8)" alt=""></li>
                </ul>
            </div>
        </div>
	</div>




<!--********************************************************************************************************************
***************************************** POP UP window ****************************************************************
**********************************************************************************************************************-->
 <div id="progressive_1" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;   height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/progressive_premiumTF.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/selicon_44.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">HOYALUX SUMMIT PREMIUM TRUEFORM</li>
                        <li class="p_title1">Another premium lens design enhanced by Trueform technology, Hoyalx Summit Premium TrueForm has made positive impact to wearers with optimized visual performance for each individual prescription.</li>
                        <li class="p_subject">Key Technologies</li>
                        <li class="p_title2">Deeper base curve to reduce image swing and widen field of view.</li>
						<li class="p_title2">Aperture inset design that takes pupil diameter into consideration to ensure a better binocular performance at near.</li>
						<li class="p_title2">Different base design for myopia & hyperopia.</li>
                        <li class="p_subject">Benefits</li>
                        <li class="p_title2">Remarkable precision</li>
                        <li class="p_title2">Exceptional vision clarity and sharpness</li>
                        <li class="p_title2">Wider field of view at near</li>
                        <li class="p_title2">Better binocular vision performance</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo.jpg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  


  <div id="progressive_2" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/progressive_id.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/selicon_11.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">HOYALUX iD</li>
                        <li class="p_title1">Hoyalux iD is the world’s first Intefrated Double Surface Design that imposes no limitations on the weareyalux iD integrates the best of both worlds: a wide, distortion-free field of vision at all distances and fast interaction between far and near.</li>
                        <li class="p_subject">Benefits</li>
                        <li class="p_title2">An extremely clear, natural vision in and at all directions</li>
                        <li class="p_title2">Smooth switching from far to near</li>
                        <li class="p_title2">Widest possible field of vision</li>
                        <li class="p_title2">Unsurpassed feeling of comfort, 100% stability when moving (even when using the stairs)</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo.jpg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  

  <div id="progressive_3" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/progressive_trinity.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/selicon_10.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">HOYALUX TRINITY</li>
                        <li class="p_title1">Hoyalux Trinity, which is fundamental by Hoya’s unique iD FreeForm Design TechnologyTM, is a completely personalised lens that available in 3 design variations (Mild-type / Balanced-type / Sharp-type) to meet wearer’s prescription and lifestyle demands. With offering a natural wearing experience to wearers, it is ideal for those who are seeking for a superior vision.</li>
                        <li class="p_subject">Key Technologies</li>
                        <li class="p_title2">The world first “REAL” benefits of Integrated Double Surface Design PAL</li>
						<li class="p_title2">Ergonomic Inset Customisation based on near prescription, pupillary distance and near working distance</li>
						<li class="p_title2">Corridor length options for different visual needs (11mm and 14mm)</li>
						<li class="p_title2">Addition Power Definition for optimised reading experience (Front / Back / As Worn)</li>
						<li class="p_title2">3 different types for professional selection on M-type (comfort priority), B-type (balance feeling) or S-typefunctional priority) to meet their needs.</li>
						<li class="p_title2">Trinity Selector giving the most satisfying personalised lenses.</li>
						<li class="p_subject">Benefits</li>
                        <li class="p_title2">High level of personalisation and lens consultation</li>
						<li class="p_title2">Clear and natural vision in all directions in accordance to lifestyle</li>
						<li class="p_title2">Effortless switching between far and near</li>
						<li class="p_title2">Stable visual experience in all situations</li>
                        <li class="p_title2">Secure feeling when moving around</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo.jpg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  
  <div id="progressive_4" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/progressive_mystyleV+.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/selicon-16.png" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">HOYALUX iD MYSTYLE V+</li>
                        <li class="p_title1">Hoyalux iD MyStyle V+ utilize Hoya iDentifier to tailor every detailed prescription, lifestyle, wearing position and previous lens history. Binocular Harmonization Technology regulates your right and left prescription to achieve crystal clear sight, stable vision and excellent comfort in all circumstances.</li>
                        <li class="p_subject">Key Technologies</li>
						<li class="p_title2" style="width:62%">Binocular Harmonization Technology that considers the right and left prescription as individual components when calculating the required binocular lens design.</li>
						<li class="p_title2" style="width:62%">Binocular Eye Model, a patented binocular performance measurement which verifies the visual performance of real life circumstances before it goes into production.</li>
						<li class="p_title2" style="width:62%">Hoya iDentifier providing the most advanced way of tailoring based on lifestyle requirement, wearing positions, prescription and lens history.</li>
						<li class="p_title2" style="width:62%">TrueView-i and TrueViewlite, Hoya’s latest dispensing tools that capture precise measurements for individualised lenses.</li>
						<li class="p_subject">Benefits</li>
                        <li class="p_title2">100% individualised lens with a “state of the art” software and technology</li>
                        <li class="p_title2">Perfect and effortless focusing at all distances</li>
                        <li class="p_title2">Constant stability in every condition.</li>
                        <li class="p_title2">Excellent depth of vision.</li>
						<li class="p_title2">Natural and crystal clear vision.</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo.jpg" /></li>
						<li><img class="bottomlog12" style="position: absolute;right:70px;width: 250px;top: 200px;"src="/images/popup/progressive_msv_machine.jpg" /></li>
						<li><img class="bottomlog13" style="position: absolute;right:70px;top: 670px;width: 400px;"src="/images/popup/progressive_msv_icon.jpg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  
  <div id="progressive_5" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/progressive_procd.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/popup/summit_procd.png" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">HOYALUX SUMMIT PRO/CD TRUEFORM</li>
                        <li class="p_title1">Powered by Hoya TrueForm Technology: New “Back Surface Aberration Correction Technology”. Hoyalux Summit Pro/CD TrueForm takes progressive lens design to new heights with each individual prescription is uniquely calculated to offer enhanced visual performance.</li>
                        <li class="p_subject">Key Technologies</li>
						<li class="p_title2">FreeForm Technology on proprietary design.</li>
						<li class="p_title2">Back Surface Aberration Correction Technology that optimizes each individual prescription.</li>
						<li class="p_title2">Aspheric optimization that balances optical abberations for every prescription.</li>
						<li class="p_subject">Benefits</li>
                        <li class="p_title2">Wider overall field of vision with proven design.</li>
                        <li class="p_title2">Comfortable vision at all directions.</li>
                        <li class="p_title2">Easy vision switching from far to near.</li>
                        <li class="p_title2">Freedom on frame choice.</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo.jpg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  

  <div id="progressive_6" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/progressive_idlifestyleV+.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/selicon_19.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">HOYALUX iD LIFESTYLE V+</li>
                        <li class="p_title1">Hoyalux iD Lifestyle V+ is Hoya’s latest progressive lens design derived from customer’s feedback, ordering behaviour and extensive analysis of data from MyStyle iDentifier. Together with a new freeform aspherisation process and design calculation technology Hoyalux iD LifeStyle V+ clearly is the result of people-based innovation. This led to two design variations that will help you meet the individual vision requirement to an even greater extent.</li>
                        <li class="p_subject">Key Technologies</li>
						<li class="p_title2">New progressive power distribution & aspherisation process maximizes the field of clear vision by decreasing blur and stabilizing vision by reducing the sway effect.</li>
                        <li class="p_title2">Integration of Reference Power gives the best possible and most accurate correction.</li>
                        <li class="p_title2">2 People based designs to fit the needs of an even wider audience.</li>
						<li class="p_title1">Intermediate Vision</li>
						<li class="p_title1">Near Vision</li>
						<li class="logo_link" style="margin-top:20px"><img style="width:300px"src="/images/popup/progressive_icon.jpg" /></li>
						<li class="logo_link" style="margin-top:20px"><img style="width:250px;margin-left:30px"src="/images/popup/progressive_text.jpg" /></li>
						<li class="p_subject">Benefits</li>
						<li class="p_title2">Maximum visual acuity and a crisper image perception.</li>
                        <li class="p_title2">A noticeably more relaxed vision.</li>
                        <li class="p_title2">Stable vision at all times and especially when using modern everyday equipment such as tablets and smartphones.</li>
                        <li class="p_title2">Remarkable accurate correction catered for different lifestyles.</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo.jpg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  
  <div id="progressive_7" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/progressive_dynamic.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/popup/summit_dynamic.png" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">SUMMIT DYNAMIC</li>
                        <li class="p_title1">Summit Dynamic are Hoya’s FIRST full back-surfaced FreeForm progressive design. Leveraging Hoya’s best-in-class technology and quality, Hoyalux Summit Dynamic offers you superior visual experience.<br><br>Traditional conventional progressive lenses are optimised for only one prescription per base curve. Hoya Backside Surfacing FreeForm Technology applies both aspheric and atoric curves to the backside of lens, optimising all prescriptions within each base curve. By placing the progressive surface on the back of the lens, Summit Dynamic provides wider fields of view and more stable vision to the wearers.</li>
                        <li class="p_subject">Key Technologies</li>
						<li class="p_title2">Hoya’s FIRST full back-surfaced FreeForm progressive design.</li>
						<li class="p_title2">Corrects unwanted astigmatism in various directions of gaze.</li>
						<li class="p_title2">The only backside PAL to be designed using Listing’s Law which considers the eye in all directions of gaze.</li>
						<li class="p_subject">Benefits</li>
						<li class="p_title2">Easy and natural adaptation</li>
						<li class="p_title2">Wider viewing area for all wearers</li>
                        <li class="p_title2">Sharper, clearer usable areas</li>
                        <li class="p_title2">Less distortion</li>
                        <li class="p_title2">Better performance at all distances</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo.jpg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  
  <div id="progressive_8" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/progressive_fd.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/selicon_51.svg" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject">HOYALUX FD</li>
                        <li class="p_title1">Hoyalux iD is the world’s first Integrated Double Surface Design that imposes no limitations on the wearer. Hoyalux iD integrates the best of both worlds: a wide, distortion-free field of vision at all distances and fast interaction between far and near.</li>
                        <li class="p_subject">Benefits</li>
                        <li class="p_title2">An extremely clear, natural vision in and at all directions</li>
                        <li class="p_title2">Smooth switching from far to near</li>
                        <li class="p_title2">Widest possible field of vision</li>
                        <li class="p_title2">Unsurpassed feeling of comfort, 100% stability when moving (even when using the stairs)</li>
                        <li class="logo_link"><img class="bottomlog" src="/images/popup/logo.jpg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  