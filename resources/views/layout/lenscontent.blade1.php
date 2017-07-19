
	<link rel="stylesheet" media="screen" href="css/zoomple.css" type="text/css">
	<script src="js/zoomple1.js" type="text/javascript"></script> 
    
	<script type="text/javascript"> 
		 var optflag=1,
		     progresflag=0,
			 backimgwidth=0;
		 var screenratio = 1.5;
			 
	     var imgURL, imgURLiPad;		 
		 
		 var imgw = 0, imgh = 0;	
		 var ipadw = 0, ipadh = 0;
		 var sugselect = 0;	
		 var optionflag1 = 0, optionflag2=0, optionflag3 = 0, openflag4 = 0;
		 var simulatorscreen = 0;
         var optVal={
				 vCond:1,
				 age40below:true,
				 sel40plus:0,
				 selIndoor:true,
				 selBC:0,
				 selPC:0
				 
		 };		 
		 function setOptionState(){
			if(optVal.selIndoor==true ){
				if(optVal.selBC==0) 
					document.getElementById("simulator-backimg1").style.visibility="hidden";
				else  
					document.getElementById("simulator-backimg1").style.visibility="visible";
				if(optVal.age40below==true){
					switch(optVal.vCond){
					    case 1:$("#simulator-backimg").css("-webkit-filter","blur(5px)").css("filter","blur(5px)");$("#ipad-backimg").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");break;//document.getElementById("simulator-backimg").src = "/models/timthumblens.php?src=/images/simulators/farB_nearC.jpg&w="+imgw+"&h="+imgh;break;
						case 2:$("#simulator-backimg").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");$("#ipad-backimg").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");break;//document.getElementById("simulator-backimg").src = "/models/timthumblens.php?src=/images/simulators/farC_nearC.jpg&w="+imgw+"&h="+imgh;break;
						case 3:$("#simulator-backimg").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)").css("filter","blur(2.5px)");break;//document.getElementById("simulator-backimg").src = "/models/timthumblens.php?src=/images/simulators/farC_nearB.jpg&w="+imgw+"&h="+imgh;break;
					}
					$("#image_si_back").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");$("#image_ipad").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");
				}
				else{
					if(optVal.sel40plus==1){
						switch(optVal.vCond){
						    case 1:$("#simulator-backimg").css("-webkit-filter","blur(5px)").css("filter","blur(5px)");$("#ipad-backimg").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");break;//document.getElementById("simulator-backimg").src = "/models/timthumblens.php?src=/images/simulators/farB_nearC.jpg&w="+imgw+"&h="+imgh;break;
						    case 2:$("#simulator-backimg").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)").css("filter","blur(2.5px)");break;//document.getElementById("simulator-backimg").src = "/models/timthumblens.php?src=/images/simulators/farC_nearC.jpg&w="+imgw+"&h="+imgh;break;
						    case 3:$("#simulator-backimg").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)").css("filter","blur(2.5px)");break;//document.getElementById("simulator-backimg").src = "/models/timthumblens.php?src=/images/simulators/farC_nearB.jpg&w="+imgw+"&h="+imgh;break;
						}
						$("#image_si_back").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");$("#image_ipad").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");
					}
					else{
						switch(optVal.vCond){
						    case 1: $("#simulator-backimg").css("-webkit-filter","blur(5px)").css("filter","blur(5px)");$("#ipad-backimg").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");
								    $("#image_si_back").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");$("#image_ipad").css("-webkit-filter","blur(2.5px)").css("filter","blur(2.5px)");
								    break;
						    case 2: $("#simulator-backimg").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)").css("filter","blur(2.5px)");
								    $("#image_si_back").css("-webkit-filter","blur(5px)").css("filter","blur(5px)");$("#image_ipad").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");
								    break;
						    case 3: $("#simulator-backimg").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)").css("filter","blur(2.5px)");
								    $("#image_si_back").css("-webkit-filter","blur(5px)").css("filter","blur(5px)");$("#image_ipad").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");
							        break;
				        }
					}
					
			    }
			}
			else{//==outdoor optVal.selIndoor=false   
			    if(optVal.selBC==0) 
					document.getElementById("simulator-backimg1").style.visibility="hidden";
				else  
					document.getElementById("simulator-backimg1").style.visibility="visible";
				if(optVal.age40below==true){
					switch(optVal.vCond){
					    case 1:if(optVal.selPC==0){   
						           $("#simulator-backimg").css("-webkit-filter","blur(5px)brightness(100%)").css("filter","blur(5px)brightness(100%)");$("#ipad-backimg").css("-webkit-filter","blur(0px)brightness(100%)").css("filter","blur(0px)brightness(100%)");
							   }else{
								   $("#simulator-backimg").css("-webkit-filter","blur(5px)brightness(110%)").css("filter","blur(5px)brightness(110%)");$("#ipad-backimg").css("-webkit-filter","blur(0px)brightness(110%)").css("filter","blur(0px)brightness(110%)");
							   }
                               break;  							   
						case 2:if(optVal.selPC==0){
     						       $("#simulator-backimg").css("-webkit-filter","blur(0px)brightness(100%)").css("filter","blur(0px)brightness(100%)");$("#ipad-backimg").css("-webkit-filter","blur(0px)brightness(100%)").css("filter","blur(0px)brightness(100%)");
						       }else{
								   $("#simulator-backimg").css("-webkit-filter","blur(0px)brightness(110%)").css("filter","blur(0px)brightness(110%)");$("#ipad-backimg").css("-webkit-filter","blur(0px)brightness(110%)").css("filter","blur(0px)brightness(110%)");
							   }
							   break;
						case 3:if(optVal.selPC==0){ 
						           $("#simulator-backimg").css("-webkit-filter","blur(0px)brightness(100%)").css("filter","blur(0px)brightness(100%)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)brightness(100%)").css("filter","blur(2.5px)brightness(100%)");
						       }else{
								   $("#simulator-backimg").css("-webkit-filter","blur(0px)brightness(110%)").css("filter","blur(0px)brightness(110%)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)brightness(110%)").css("filter","blur(2.5px)brightness(110%)");
							   }
                               break;								   
					}
					$("#image_si_back").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");$("#image_ipad").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");
					
				}
				else{
					if(optVal.sel40plus==1){
						switch(optVal.vCond){
						    case 1:if(optVal.selPC==0){ 
							           $("#simulator-backimg").css("-webkit-filter","blur(5px)brightness(100%)").css("filter","blur(5px)brightness(100%)");$("#ipad-backimg").css("-webkit-filter","blur(0px)brightness(100%)").css("filter","blur(0px)brightness(100%)");
							       }else{
									   $("#simulator-backimg").css("-webkit-filter","blur(5px)brightness(110%)").css("filter","blur(5px)brightness(110%)");$("#ipad-backimg").css("-webkit-filter","blur(0px)brightness(110%)").css("filter","blur(0px)brightness(110%)");
								   } 	
								   break;
						    case 2:if(optVal.selPC==0){
							           $("#simulator-backimg").css("-webkit-filter","blur(0px)brightness(100%)").css("filter","blur(0px)brightness(100%)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)brightness(100%)").css("filter","blur(2.5px)brightness(100%)");
							       }else{
									   $("#simulator-backimg").css("-webkit-filter","blur(0px)brightness(110%)").css("filter","blur(0px)brightness(110%)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)brightness(110%)").css("filter","blur(2.5px)brightness(110%)");
									}
							       break;
						    case 3:if(optVal.selPC==0){
								       $("#simulator-backimg").css("-webkit-filter","blur(0px)brightness(100%)").css("filter","blur(0px)brightness(100%)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)brightness(100%)").css("filter","blur(2.5px)brightness(100%)");
							       }else{	   
								       $("#simulator-backimg").css("-webkit-filter","blur(0px)brightness(110%)").css("filter","blur(0px)brightness(110%)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)brightness(110%)").css("filter","blur(2.5px)brightness(110%)");
								   }
								   break;
						}
						$("#image_si_back").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");$("#image_ipad").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");}
					else{
						switch(optVal.vCond){
						    case 1:if(optVal.selPC==0){ 
							           $("#simulator-backimg").css("-webkit-filter","blur(5px)brightness(100%)").css("filter","blur(5px)brightness(100%)");$("#ipad-backimg").css("-webkit-filter","blur(0px)brightness(100%)").css("filter","blur(0px)brightness(100%)");
							       }else{
									   $("#simulator-backimg").css("-webkit-filter","blur(5px)brightness(110%)").css("filter","blur(5px)brightness(110%)");$("#ipad-backimg").css("-webkit-filter","blur(0px)brightness(110%)").css("filter","blur(0px)brightness(110%)");
							       }
								    $("#image_si_back").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");$("#image_ipad").css("-webkit-filter","blur(2.5px)").css("filter","blur(2.5px)");
								    break;
						    case 2:if(optVal.selPC==0){
							            $("#simulator-backimg").css("-webkit-filter","blur(0px)brightness(100%)").css("filter","blur(0px)brightness(100%)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)brightness(100%)").css("filter","blur(2.5px)brightness(100%)");
									}else{
										$("#simulator-backimg").css("-webkit-filter","blur(0px)brightness(110%)").css("filter","blur(0px)brightness(110%)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)brightness(110%)").css("filter","blur(2.5px)brightness(110%)");
									}
								    $("#image_si_back").css("-webkit-filter","blur(5px)").css("filter","blur(5px)");$("#image_ipad").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");
									break;
						    case 3:if(optVal.selPC==0){
							            $("#simulator-backimg").css("-webkit-filter","blur(0px)brightness(100%)").css("filter","blur(0px)brightness(100%)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)brightness(100%)").css("filter","blur(2.5px)brightness(100%)");
								   }else{
									    $("#simulator-backimg").css("-webkit-filter","blur(0px)brightness(110%)").css("filter","blur(0px)brightness(110%)");$("#ipad-backimg").css("-webkit-filter","blur(2.5px)brightness(110%)").css("filter","blur(2.5px)brightness(110%)");
								   } 
								    $("#image_si_back").css("-webkit-filter","blur(5px)").css("filter","blur(5px)");$("#image_ipad").css("-webkit-filter","blur(0px)").css("filter","blur(0px)");
									break;
				        }
					}
					
			    }
			}
			$(".container").css("display", "block");
		}
		 
		 $(function(){ 
			 initoption();
			 document.getElementById("check-BC").style.visibility="hidden";
			 document.getElementById("check-PCenable").style.visibility="hidden";
			 document.getElementById("check-PC").style.visibility="hidden";
			  
			 	 
			 var screenheight = window.innerHeight-90;
			 if(sugselect != 1)
				$(".container").css("height",screenheight+"px");
			 var screenwidth = window.innerWidth;
			 var ratio = Math.round(screenwidth * 10.0 / screenheight) / 10;
			 if(ratio <1.1){
				 screenratio = 1;
			 }else if(ratio < 1.7){
				 screenratio = 1.5;
			 }else if(ratio < 2.14){
				 screenratio = 1.9;
			 }else{
				 screenratio = 2;
			 }
			 suggestset();
			 //simulator_img.style.height=window.innerHeight-90+"px";
			 //var lens_img=document.getElementById("lens_img");
			 //lens_img.style.height=window.innerHeight-90+"px";
			 //setOption(1);
			 
			 //var imgheight = Math.round(1167.0 * screenwidth * 10.0 / 1920.0) / 10;
			 var imgwidth = screenwidth;
			 imgw = imgwidth;
			 imgh = window.innerHeight-85;
			 setOption(1);
			 PositionOption();
			 
			 ipadw =imgw; //Math.round(1500 * imgw * 1.0 / 3000.0);
			 ipadh =imgh; //Math.round(809 * imgh * 1.0 / 1875.0);
			 //ipadleft = Math.round(1200 * imgw * 1.0 / 3000.0);
			 //ipadtop = Math.round(1066 * imgh * 1.0 / 1875.0);
			 
			 document.getElementById("simulator-backimg").src = "/models/timthumblens.php?src=/images/simulators/si_back.jpg&w="+imgw+"&h="+imgh;
			 document.getElementById("ipad-backimg").src = "/models/timthumblens.php?src=/images/simulators/ipad.png&w="+ipadw+"&h="+ipadh;
			 imgURL = "/models/timthumblens.php?src=/images/simulators/si_back.jpg&w="+imgw+"&h="+imgh;
			 imgURLiPad = "/models/timthumblens.php?src=/images/simulators/ipad.png&w="+imgw+"&h="+imgh;
			 
			 
			 //$("#ipad-backimg").css("left",ipadleft+"px");
			 //$("#ipad-backimg").css("top",ipadtop+"px");
			 
		});
		
		 function initoption(){
			 $('#option-myopiaimg').attr("src","/images/simulators/checkback1.png");
			 $('#option-eyesightimg').attr("src","/images/simulators/checkback1.png");
			 $('#option-hyperopiaimg').attr("src","/images/simulators/checkback1.png");
		 }
		 function setOption(opt_n){
			initoption();
			switch(opt_n){
				case 1: $('#option-myopiaimg').attr("src","/images/simulators/option.png");
				        optVal.vCond=1;
						setOptionState();
					   
				break;
				case 2: $('#option-eyesightimg').attr("src","/images/simulators/option.png");
                        optVal.vCond=2;
						setOptionState();
				break;
				case 3: $('#option-hyperopiaimg').attr("src","/images/simulators/option.png");
				        optVal.vCond=3;
						setOptionState();
				break;
			}
		 }
		 var setageflag=0;
		 function setAge(){
			 if(setageflag==0){
				 document.getElementById("option-ageslide").style.transform="translate(36px,0)";
				 $('#check-progressive').attr("src","/images/simulators/check_enable.png");
				 setageflag=1;
				 optVal.age40below=false;
				 optVal.sel40plus=0;
			     setOptionState();
			 }
			 else {
				 document.getElementById("option-ageslide").style.transform="translate(0px,0)";
				 $('#check-progressive').attr("src","/images/simulators/check_back.png");
				 $('#check-single').attr("src","/images/simulators/check1.png");
				 setageflag=0;
				 optVal.age40below=true;
			     setOptionState();
			 } 
			 suggestset();
		 }
		 function setchecklens(n){
			if(setageflag==1)
			 if(n==1){
				 $('#check-progressive').attr("src","/images/simulators/check1.png");
				 $('#check-single').attr("src","/images/simulators/check_enable.png");
				 optVal.sel40plus=1;
			     setOptionState();	
			 }
			 else {
  			     $('#check-progressive').attr("src","/images/simulators/check_enable.png");
				 $('#check-single').attr("src","/images/simulators/check1.png");
				 optVal.sel40plus=0;
			     setOptionState();	
			 }
			 suggestset();
		 }
		 var setlifeflag=0;
		 function setlifestyle(){
			 if(setlifeflag==0){
				 document.getElementById("option-lifeslide").style.transform="translate(36px,0)";
				 document.getElementById("check-PCenable").style.visibility="visible";
				 setlifeflag=1;
				 optVal.selIndoor=false;
			     setOptionState();	
			 }
			 else {
				 document.getElementById("option-lifeslide").style.transform="translate(0px,0)";
				 document.getElementById("check-PCenable").style.visibility="hidden";
				 document.getElementById("check-PC").style.visibility="hidden";
				 setlifeflag=0;
				 optVal.selPC=0;
				 optVal.selIndoor=true;
			     setOptionState();	
			 }
			 suggestset();
		 }
		 function setcheckBC(n){
			 if(n==1){
				 document.getElementById("check-BC").style.visibility="visible";
				 optVal.selBC=1;
			     setOptionState();	
			 }
			 else  {
				 document.getElementById("check-BC").style.visibility="hidden";
				 optVal.selBC=0;
			     setOptionState();	
			 }
			 suggestset();
		 }
		 function setcheckPC(n){
			 if(n==1){
				 document.getElementById("check-PC").style.visibility="visible";
				 optVal.selPC=1;
			     setOptionState();	
			}
			 else{
				 document.getElementById("check-PC").style.visibility="hidden";
				 optVal.selPC=0;
			     setOptionState();	
				 	 
			 }
			 suggestset();
		 }
		 
		 function suggestedshow(n){
			 if(n==1) {
				 document.getElementById("suggested-lens").style.display="block";$("#simulator-option").css("display","none");$("#lens_img").css("display","none");
				 var screenwidth = window.innerWidth;
				 var screenheight = window.innerHeight;
				 var hh = Math.round(1167 * screenwidth * 1.0 / 1920.0);
				 if(hh < 400){
					 hh = 400;
				 }
				 $('.container').css("height",hh+"px");
				 simulatorscreen = screenheight-90;
				 sugselect = 1;
			 }
			if(n==0) {
				sugselect = 0;document.getElementById("suggested-lens").style.display="none";  $("#simulator-option").css("display","block");$("#lens_img").css("display","block");
				$('.container').css("height",simulatorscreen+"px");
			}
			suggestset();
		 }
		 function backimgflashing(n)
		 {
			 /* if(n==0){
				 $('#option-panelimg').css("-webkit-filter","blur(200px)");
			 }
			 if(n==1){
				 $('#option-panelimg').css("-webkit-filter","blur(20px)");
			 } */
		 }
		 
 </script>   
 
<script type="text/javascript">
        $(document).ready(function() { 	
			$('.zoomple').zoomple({ 
				 offset : {x:-150,y:-150},
				 zoomWidth : 300,  
				 zoomHeight : 300,
				 roundedCorners : true, 
				 delay :1,
				 pageNum:1
							 
			});	
			
		 }); 

	 function popup_content(sel_v){
		switch(sel_v){
			case 1: break;	
			case 2:$('#homecontent_2').modal('show');$('#homecontent_2').css("overflow-y","auto");$('#detailpop-dialog').css("overflow-y","auto"); break;	
			case 3:$('#homecontent_3').modal('show');$('#homecontent_3').css("overflow-y","auto");$('#detailpop-dialog').css("overflow-y","auto"); break;	
		}
	 }
	
</script>

<style>
</style>
<div class="container container-simulator" style="position:relative;z-index:150;"><!--display:none-->
	    <a id="lens_img" href="" class="zoomple">
		   <div>
		        <img id="simulator-backimg" src = "" style="min-width:100%;width:100%;height:auto;position:absolute;top:0px;left:0px;"/>	
		        <img id="ipad-backimg" src = "" style="min-width:100%;width:100%;height:auto;position:absolute;top:0px;left:0px"/>	
				<img id="simulator-backimg1" src = "" style="min-width:100%;width:100%;height:100%;position:absolute;top:0px;left:0px;background: blue; opacity: 0.03;"/>
		   </div>
	    </a>
	
		<div id="simulator-option">
	      <div id = "innersimulator" style="float:left;width:100%;height:auto;" onmouseover="backimgflashing(1)" onmouseleave="backimgflashing(0)"> 
		    <img id="option-panelimg" src = "/images/simulators/simulator.png"  alt="" />	
		   
           <div class="optionbar-bind">			
			 <div class="option-title" style="text=align:center;">
			      <h2 class="option_title11"> SIMULATOR </h2>
			 </div>
			 <div class="option-vision">
				<div>
				  <ul><h3 class="option_title12"> VISION CONDITION </h3></ul>
				  <ul><div class="option-myopia" style="clear:both;">
				      <div class="option-backimg">
					      <img id="option-myopiaimg" src = "/images/simulators/option.png"  alt="" onClick="setOption(1)"/> 
					  </div>
					  <div class="myopia-text" style="margin-left:25px;">
					     <h4 class="option_title13" style="margin-bottom:0px;">Short-sighted(Myopia)</h4>
					  </div>
				    </div></ul>
				  
				  <ul><div class="option-eyesighthyperopia" style="clear:both;padding-top:10px;" >
				      <div class="option-backimg">
					      <img id="option-eyesightimg" src = "/images/simulators/checkback1.png"  alt=""   onClick="setOption(2)"/> 
					  </div>
					  <div class="eyesight-text" style="margin-left:25px;">
					     <h4 class="option_title13" style="margin-bottom:0px;">Perfect Eyesight</h4>
					  </div>
				    </div></ul>
				  <ul><div class="option-hyperopia" style="clear:both;padding-top:10px;">
				      <div class="option-backimg">
					      <img id="option-hyperopiaimg" src = "/images/simulators/checkback1.png"  alt="" onClick="setOption(3)"/> 
					  </div>
					  <div class="hyperopia-text" style="margin-left:25px;">
					     <h4 class="option_title13" style="margin-bottom:0px;">Far-sighted (Hyperopia)</h4>
					  </div>
				    </div></ul>	
				</div>
			 </div>
			 <div class="option-age">
			      <ul><h3 class="option_title12"> AGE </h3></ul>
				  <ul><div class="option-40age" style="clear:both;">
					     <div style="float:left"><h4 class="option_title13"> <40 </h4></div>
						 <div style="float:left; position:relative;margin-left:30px;">
						    <img class="optionback1" src = "/images/simulators/leftoption1.png"  alt="" onclick="setAge()"/> 
						    <img class="optionback2" id="option-ageslide" src = "/images/simulators/leftoption2.png"  alt="" /> 
						 </div>
						 <div style="float:left; margin-left:30px;"><h4 class="option_title13"> >40</h4></div>
					 </div>
				  </ul>
				  <ul><div class="option-single" style="clear:both;padding-top:10px;">
					     <div class="option-backimg">
						    <img id="check-single" style=""src = "/images/simulators/check1.png"  alt="" onclick="setchecklens(0)"/>                             							
						 </div >
						 <div style="float:left;margin-left:5px;"><h4 style="margin-bottom:0px;" class="option_title13">Default Single Vision Lens</h4></div>  
					 </div>
				  </ul>
				  <ul><div class="option-progress" style="clear:both;padding-top:10px;">
					     <div class="option-backimg">
						    <img id="check-progressive" style=""src = "/images/simulators/check_back.png"  alt="" onclick="setchecklens(1)"/>                             							
						 </div >
						 <div style="float:left;margin-left:5px;"><h4 style="margin-bottom:0px;" class="option_title13">With Progressive Lens(40+)</h4></div>  
					 </div>
				  </ul>
			 </div>
			 <div class="option-lifestyle">
			      <ul><h3 class="option_title12"> LIFESTYLE </h3></ul>
				  <ul><div class="option-inout">
				        <div style="float:left"><h4 class="option_title13"> Indoor</h4></div>
						 <div style="float:left; position:relative;margin-left:15px;">
						    <img  class="optionback1" src = "/images/simulators/leftoption1.png"  alt="" onclick="setlifestyle()"/> 
						    <img class="optionback2" id="option-lifeslide" src = "/images/simulators/leftoption2.png"  alt=""/> 
						 </div>
						 <div style="float:left;margin-left:15px;"><h4 class="option_title13"> Outdoor</h4></div> 
					  </div>
				  </ul>
			 </div>
			 
			 <div class="option-treat">
			      <ul><h3 class="option_title12"> TREATMENTS </h3></ul>
				  <ul><div class="option-BC" style="clear:both;margin-top:10px;">
				        <div style="float:left; position:relative;">
						    <img src = "/images/simulators/check_enable.png"  alt="" onclick="setcheckBC(1)"/> 
						    <img id="check-BC" style="position:absolute; top:1px;left:1px;"src = "/images/simulators/check.png"  alt="" onclick="setcheckBC(0)"/> 
						 </div>
						 <div style="float:left;margin-left:5px;"><h4 class="option_title13">WITH BLUECONTROL</h4></div>  
					   
					 </div>
				  </ul>
				  <ul><div class="option-PC">
				      <div class="option-progress" style="clear:both;padding-top:10px;">
					     <div style="float:left; position:relative;">
						    <img src = "/images/simulators/check_back.png"  alt="" />
                            <img id="check-PCenable" style="position:absolute; top:2px;left:0px;"src = "/images/simulators/check_enable.png"  alt="" onclick="setcheckPC(1)"/>                             							
						    <img id="check-PC" style="position:absolute; top:1px;left:1px;"src = "/images/simulators/check.png"  alt="" onclick="setcheckPC(0)"/> 
						  </div>
						 <div style="float:left;margin-left:5px;"><h4 class="option_title13">WITH PHOTOCHROMICS</h4></div>  
					   </div>
					  </div>
				  </ul>
			 </div>
			 
			 <div class="option-simulate-btn">
			    <ul><div id="suggested-btn" style="float:left; position:relative; margin-top:30px;margin-bottom:30px;left:-20px; cursor:pointer">
				     <img class="suggestimg" src = "/images/simulators/textround.png"  alt="" /> 
					 <h4  style="position:absolute;top:0px;padding-left:25px;padding-top:6px;" onclick="suggestedshow(1)" class="option_title13">VIEW SUGGESTED LENS</h4>
				    </div>
				 </ul>
			 </div>
			 
		   </div>	
          </div>
		</div>		   
		  <!--<div id="option-side">
		     <img id="option-sideimg" src = "/images/simulators/btn.png"  alt="" />
			 <img id="option-showHover" src = "/images/simulators/showbtn_hover.png"  alt="" onclick="slideHideShow(1)"/>			 
             <img id="option-hideHover" src = "/images/simulators/hidebtn_hover.png" alt="" onclick="slideHideShow(0)" />			  			 			 
		  </div>-->
		                                   
		<div id="suggested-lens" style="position:relative">
			
			<div id ="aboutdivid" style="background-image:url(/images/simulators/suggested.png);top:0px;left:0px;min-width: 100%;background-size: cover;background-position: 0% 0%;">
				
		    <div class="suggested-content" style="width:100%;float:right;position:absolute;left:0px;top:0px;">
			    <div class="detailpop-header" style="    margin-right: 40px;    margin-top: 20px;">
						<button id="bt12" type="button" style="color:#999" class="close" data-dismiss="modal" aria-hidden="true" onclick="suggestedshow(0)">&times;</button>
				</div>
				<div style="width:100%;margin-left:55%">
				    <h2 class="suggested_text1">SUGGESTED LENS</h2>
				</div>
				<div id="fp_iconpart_1" style="width:45%;margin-left:55%;margin-top:100px;display:none">
			        <ul>
				        <li class="icon_li" style="margin-bottom:5px;"><img class="selicon1" src="/images/products/selicon_28.svg"onclick="popup_content(1)" alt="" /></li>
				        <li class="icon_li" style="margin-bottom:5px;"><img class="selicon1" src="/images/products/selicon_27.svg"onclick="popup_content(2)" alt="" /></li>
				        <li class="icon_li" style="margin-bottom:5px;"><img  class="selicon1" src="/images/products/selicon_26.svg"onclick="popup_content(3)" alt="" /></li>
						<li class="icon_li" style="margin-bottom:5px;"><img class="selicon" src="/images/products/selicon-4.png" onclick="popup_content(4)" alt="" /></li>
				        
			        </ul>
					<ul>
					    <li class="icon_li" style="margin-bottom:5px;"><img class="selicon1" src="/images/products/selicon_30.svg"onclick="popup_content(5)" alt="" /></li>
				        <li class="icon_li" style="margin-bottom:5px;"><img class="selicon1" src="/images/products/selicon_34.svg" onclick="popup_content(14)" alt="" /></li>
						<li class="icon_li" style="margin-bottom:5px;"><img class="selicon" style="cursor:pointer" src="/images/products/hi_vision.png" onclick="popup_content(17)" alt=""></li>
					</ul>
		        </div>
				<!--<div style="width:100%;margin-left:55%">
					
				    <div class="suggested_text2">
					    <img class="selicon" style="cursor:pointer" src="/images/products/hi_vision.png" alt="">
					</div>
                    <div style="width:100%;margin-top:50px">
					    <img class="selicon1" style="cursor:pointer" src="/images/products/selicon-12.png" onclick="popup_content(2)" alt="">
						<img class=" suggested-img selicon" style="cursor:pointer" src="/images/products/selicon-15.png" onclick="popup_content(3)" alt="">
					</div>					
				</div>-->
				
		        <div id="fp_iconpart_2" style="width:45%;margin-left:55%;margin-top:100px;display:block">
			        <ul>
				       <li class="icon_li" style="margin-bottom:5px;padding-right: 35px;"><img class="selicon1" src="/images/products/selicon_1.svg" onclick="popup_content(6)" alt="" /></li>
					   <li class="icon_li" style="margin-bottom:5px;padding-right: 35px;"><img class="selicon1" src="/images/products/selicon_41.svg" onclick="popup_content(7)" alt="" /></li>
					   <li class="icon_li" style="margin-bottom:5px;padding-right: 35px;"><img class="selicon1" src="/images/products/selicon_44.svg" onclick="popup_content(8)" alt="" /></li>
					   <li class="icon_li" style="margin-bottom:5px;"><img class="selicon1" src="/images/products/selicon_11.svg" onclick="popup_content(11)" alt="" /></li>
					</ul>
			        <ul>
					   <li class="icon_li" style="margin-bottom:5px;padding-right: 35px;"><img  class="selicon" src="/images/products/selicon-16.png" onclick="popup_content(13)" alt="" /></li> 
				       <li class="icon_li" style="margin-bottom:5px;padding-right: 35px;"><img class="selicon" style="cursor:pointer" src="/images/products/hi_vision.png" onclick="popup_content(17)" alt=""></li>
					   <li class="icon_li" style="margin-bottom:5px;padding-right: 35px;"><img class="selicon1" src="/images/products/selicon_10.svg" onclick="popup_content(12)" alt="" /></li>
					   <li class="icon_li" style="margin-bottom:5px;"><img class="selicon1" src="/images/products/selicon_19.svg" onclick="popup_content(10)" alt="" /></li>
					</ul>
			        <ul>
					    <li class="icon_li" style="margin-bottom:5px;padding-right: 35px;"><img class="selicon1" src="/images/products/selicon_51.svg"  onclick="popup_content(9)" alt="" /></li>
				        <li class="icon_li" style="margin-bottom:5px;padding-right: 35px;"><img class="selicon1" src="/images/products/selicon_13.svg" onclick="popup_content(16)" alt="" /></li>
				        <li class="icon_li" style="margin-bottom:5px;"><img class="selicon1" src="/images/products/selicon_35.svg" onclick="popup_content(15)" alt="" /></li>
				    </ul>
		        </div>
				<div id="fp_iconpart_3" style="width:50%;margin-left:50%">
			        <ul>
					   <li class="icon_li1 option31" style="margin-bottom:5px;margin-top: 0px;padding-right: 5px;"><img class="selicon" src="/images/products/ar_icon_2.png" alt=""  onclick="popup_content(18)"/></li>
				       <li class="icon_li1 option32" style="margin-bottom:5px;margin-top: 0px;padding-right: 5px;"><img class="selicon" src="/images/products/selicon-17.png" onclick="popup_content(19)" alt="" /></li>
				       <li class="icon_li1 option32" style="margin-bottom:5px;margin-top: 0px;"><img class="selicon" src="/images/products/selicon-18.png" onclick="popup_content(20)" alt="" /></li>
                    </ul>
		        </div>
				
				<div class="suggested_text3" style="width:43%;margin-left:55%">
				    <h3>Disclaimer:<br/>The above suggested lenses are results based on a basic simulation. For more accurate result, please visit our authorised ECP and seek for professional advice.</h3>
				</div>
            </div>		
            </div>			
		</div>
		
</div>
<div id="treatment_2" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/AR_longlife.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/ar_icon_1.png" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:#fff">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject_blue">HVLL - The hardest AR coating available</li>
                        <li class="p_title3">The quality and durability of spectacle lenses are very much affected by the quality of the coating. Hi-Vision LongLife is an innovative and exceptionally durable anti-reflection coating which confirms Hoya’s leading position in this segment. Hi-Vision LongLife is the hardest anti-reflection coating available on the market today. A unique total composition with a strong adhesion between the various layers ensures years of excel</li>
                        <li class="p_subject_blue">Benefits</li>
                        <li style="width:62%" class="p_title2">Relaxed vision thanks to excellent anti-reflection</li>
                        <li style="width:62%" class="p_title2">Easy to clean due to water, grease, dirt and dust repellent layer</li>
                        <li style="width:62%" class="p_title2">Extremely durable and reliable</li>
                        <li style="width:62%" class="p_title3">*Anti-reflection, scratch resistance, water repellent, dirt repellent, anti-static</li>
						<li style="list-style-type:none"><img class="bottomlog14" style="position: absolute;right:40px;width:200px;top:190px;"src="/images/popup/AR_object.jpg" /></li>
						<li style="list-style-type:none"><img class="bottomlog15" style="position: absolute;right:20px;top:400px;width:270px;"src="/images/popup/AR_logo.jpg" /></li>
					    <li class="p_title3" style="width:62%;color:#b8944b;margin-top:60px">Hi-Vision(HVLL) coating is given 2 years warranty against all manufaturing defects.</li>
						<li class="logo_link" style="margin-top:20px"><img class="bottomlog" src="/images/popup/logo.jpg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div> 
<div id="treatment_1" class="detailpop fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="width:63%;height:auto">
		<div class="detailpop-content" style="background-color:white">
		    <img class="popup_modalimg" src="/images/popup/AR_BC.jpg" alt=""/>
			<img class="popup_iconimg" src="/images/products/ar_icon_2.png" alt="" />
			<div style="position:absolute;top:0px;right:0px"class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content" class="contentdial">
					<ul style="width:80%">
						<li class="p_subject_blue">For that extra bit of comfort in the digital world</li>
                        <li class="p_title3">LCD and LED computer and television screens, smartphones, tablets and GPS devices all emit blue light, also known as high energy visible light. Although blue light in itself is a natural phenomenon – it is present in daylight and helps us to stay awake – over-exposure can have an adverse effect and cause eye strain, eye fatigue and even sleeplessness.</li>
                        <li class="p_subject_blue">Benefits</li>
                        <li class="p_title2">Neutralises blue light, preventing from eye strain and fatigue.</li>
                        <li class="p_title2">Reduces glare for a more comfortable and relaxed vision.</li>
                        <li class="p_title2"> Better contrast perception offering a more natural colour experience.</li>
                        <li class="p_title2">Plus all the benefits of Hoya’s AR coatings.</li>
						<li class="logo_link"><img class="bottomlog" src="/images/popup/logo.jpg" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>    
<script>

	 function popup_content(sel_v){
			switch(sel_v){
				case 1: $('#singlevision_1').modal('show'); break;	
				case 2: $('#singlevision_2').modal('show'); break;	
				case 3: $('#singlevision_3').modal('show'); break;	
				case 4: $('#singlevision_4').modal('show'); break;	
				case 5: $('#singlevision_5').modal('show'); break;	
				case 6: $('#progressive_7').modal('show');	break;	
				case 7: $('#progressive_5').modal('show'); break;	
				case 8: $('#progressive_1').modal('show'); break;	
				case 9: $('#progressive_8').modal('show'); break;	
				case 10: $('#progressive_6').modal('show'); break;
				case 11: $('#progressive_2').modal('show'); break;	
				case 12: $('#progressive_3').modal('show'); break;	
				case 13: $('#progressive_4').modal('show'); break;	
				case 14: $('#speciality_1').modal('show'); break;	
				case 15: $('#speciality_2').modal('show'); break;	
				case 16: $('#speciality_3').modal('show'); break;
				case 17: $('#treatment_2').modal('show'); break;
				case 18: $('#treatment_1').modal('show'); break;
				case 19: $('#photochromics_2').modal('show'); break;	
				case 20: $('#photochromics_1').modal('show'); break;
			}
	 }
		function suggestset(){			
			$("#fp_iconpart_1").css("display","none");
			$("#fp_iconpart_2").css("display","none");
			$("#fp_iconpart_3").css("display","none");
			if(optVal.age40below){
				$("#fp_iconpart_1").css("display","block");
				$("#fp_iconpart_2").css("display","none");
			}else{
				$("#fp_iconpart_1").css("display","none");
			}
			if(optVal.age40below == false && optVal.sel40plus == 1){
				$("#fp_iconpart_2").css("display","block");
			}else if(optVal.sel40plus == 0 || optVal.age40below == false){
				$("#fp_iconpart_2").css("display","none");
			}
			if(optVal.selBC == 1 && optVal.selPC == 1){
				$("#fp_iconpart_3").css("display","block");
				$(".option31").css("display","block");
				$(".option32").css("display","block");
			}else if(optVal.selBC == 1){
				$("#fp_iconpart_3").css("display","block");
				$(".option31").css("display","block");
				$(".option32").css("display","none");
			}else if(optVal.selPC == 1){
				$("#fp_iconpart_3").css("display","block");
				$(".option31").css("display","none");
				$(".option32").css("display","block");
			}else{
				$("#fp_iconpart_3").css("display","none");
			}
		}
		function PositionOption(){
			 var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			 
				 var aboutdivid=document.getElementById("aboutdivid");
				 var hh = Math.round(1167 * screenwidth * 1.0 / 1920.0);
				 if(hh < 400){
					 hh = 400;
				 }
				 $('#aboutdivid').css("height",hh+"px");
				 $('.container').css("height",hh+"px");
				 $('#suggested-lens').css("height",hh+"px");
				 hh = Math.round(150 * (screenwidth * 1.0 / 1920.0));
				 
				 if(hh < 20){
					 hh = 20;
				 }
				 hh = hh-100;
				 if(hh < -48)hh = -48;
				 $('.suggested_text1').css("margin-top",hh+"px");
				  hh = Math.round(40 * screenwidth * 1.0 / 1920.0);
				 if(hh < 17){
					 hh = 17;
				 }
				 $('.suggested_text1').css("font-size",hh+"px");
				  hh = Math.round(22 * screenwidth * 1.0 / 1920.0);
				 if(hh < 14){
					 hh = 14;
				 }
				 $('.suggested_text3').css("font-size",hh+"px");
				 hh = Math.round(240 * screenwidth * 1.0 / (1920.0) );
				 if(hh < 40){
					 hh = 40;
				 }
				 $('.suggested_text2').css("margin-top",hh+"px");
				 hh = Math.round(270 * (screenwidth * 1.0 / 1920.0));
				 if(hh < 40){
					 hh = 40;
				 }
				 $('.suggested_text3').css("margin-top",hh+"px");
				 
				 hh = Math.round(157 * screenwidth * 1.0 / 1920.0);
				 if(hh < 40){
					 hh = 40;
				 }
				 $('.selicon').css("width",hh+"px");
				 $('.selicon1').css("width",hh-20+"px");
				 
				 hh = Math.round(1167 * screenwidth * 1.0 / 1920.0);
				 if(hh < 150){
					 hh = 150;
				 }
				 hh = Math.round(320 * screenwidth * 1.0 / 1167.0);
				 if(hh < 200){
					 hh = 200;
				 }
				 if(hh > 320)
					 hh = 320;
				 if(sugselect != 1){
					 $('#option-panelimg').css("width",hh+"px");
					 $('.container-simulator').css("height",imgh-10+"px");
					 $('.simulator-option').css("height",imgh-10+"px");
				 }
				 hh = Math.round(32 * screenwidth * 1.0 / 2200.0);
				 if(hh < 15){
					 hh = 15;
				 }
				 $('.option_title11').css("font-size",hh+"px");
				 hh = Math.round(23 * screenwidth * 1.0 / 2200.0);
				 if(hh < 12){
					 hh = 12;
				 }
				 $('.option_title12').css("font-size",hh+"px");
				 hh = Math.round(17 * screenwidth * 1.0 / 2200.0);
				 if(hh < 10){
					 hh = 10;
				 }
				 $('.option_title13').css("font-size",hh+"px");
				 if(screenwidth < 600){
					 
					 $('.optionbar-bind').css("left","3%");
					 
					 $('.option_title13').css("padding-top","0px");
					 $('.option_title13').css("padding-left","12px");
				 }
				 if(screenwidth < 600){
					 $('.optionback1').css("height","20px");
					 $('.optionback2').css("height","20px");
					 $('.optionback2').css("margin-top","2px");
					 $('#suggested-btn').css("left","0px");
					 hh = Math.round(200 * screenwidth * 1.0 / 600.0);
					 $('.suggestimg').css("width",hh-10+"px");
					 
				 }else{
					 $('.optionback1').css("height","30px");
					 $('.optionback2').css("height","30px");
					 $('.optionback2').css("margin-top","0px");
					 //hh = Math.round(200 * screenwidth * 1.0 / 600.0);
					 //$('.suggestimg').css("width",hh-10+"px");
				 }
				 if(screenwidth < 800){
					 //$('#option-panelimg').css("-webkit-filter","blur(20px)");
				 }
				 hh = Math.round(80 * screenwidth * 1.0 / 1400.0);
				 
				 $('#fp_iconpart_1').css("margin-top",hh+"px");
				 $('#fp_iconpart_2').css("margin-top",hh+"px");
				 //$('.fp_iconpart_3').css("margin-top",hh+"px");
				 
				 hh = Math.round(70 * screenwidth * 1.0 / 1400.0);
				 if(hh < 30) hh = 30;
				 $('#bt12').css("font-size",hh+"px");
				 hh = Math.round(40 * screenwidth * 1.0 / 1400.0);
				 
				 $('.detailpop-header').css("margin-right",hh+"px");
				 hh = Math.round(35 * screenwidth * 1.0 / 1400.0);
				 if(hh < 10) hh = 10;
				 $('.icon_li').css("padding-right",hh+"px");
				 
				 
				 
				 
				 
				 
				 
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
				 
				 
				 ff = Math.round(230 *  1500.0/ (screenwidth * 1.0));	
				 if(ff > 230) ff=230;
				 $('.bottomlog14').css("top",ff+"px");	
				 ff = Math.round(450 * screenwidth * 1.0 / 1500.0);
				 if(ff > 550) ff=550;	
				 if(ff < 380){
					 ff = Math.round(380 + 1500.0/ (screenwidth * 1.0));
				 }
				 $('.bottomlog15').css("top",ff+"px");		
				 ff = Math.round(40 * screenwidth * 1.0 / 1500.0);	
				 $('.bottomlog14').css("right",ff+"px");		
				 $('.bottomlog15').css("right",ff+"px");		
				 ff = Math.round(200 * screenwidth * 1.0 / 1500.0);
				 if(ff > 200)ff=200;
				 $('.bottomlog14').css("width",ff+"px");	
				 ff = Math.round(270 * screenwidth * 1.0 / 1500.0);	
				 if(ff > 270) ff=270;
				 $('.bottomlog15').css("width",ff+"px");
				 if(screenwidth < 1000){
					 $('.bottomlog15').css("display","none");
					 $('.bottomlog14').css("display","none");
				 }else{
					 $('.bottomlog15').css("display","block");
					 $('.bottomlog14').css("display","block");
				 }
				 
		}
		$(window).resize(function () {
			 var screenheight = window.innerHeight;
			 var screenwidth = window.innerWidth;
			PositionOption();
				 hh = Math.round(imgh * screenwidth * 1.0 / (imgw * 1.0));
			if(sugselect != 1){
				 $('#option-panelimg').css("height",hh+"px");
				 $('.container-simulator').css("height",hh-10+"px");
				 $('.simulator-option').css("height",hh-10+"px");
			}
		});
		</script>
<!--<div class="container" style="width:100%;position:relative; z-index:60">
	<div id="bodycontainer">
			<div style="overflow: hidden;" id="gallerycontainer">
					<ul style="height: 0px; width: 3170px;" class="mouseslider">
						<li><img src="images/singlevision.jpg"></li>
						<li><img src="images/progressive.jpg"></li>
						<li><img src="images/occupational.jpg"></li>
						<li><img src="images/AR.jpg"></li>
						<li><img src="images/photocromics.jpg"></li>
						<li><img src="images/lensmaterial.jpg"></li>
						
					</ul>
			</div>
			
		</div>
</div>-->

<!--***********************************************************************************************************-->
<!--***************************************** popup ***********************************************************-->
<!--***********************************************************************************************************-->
  <div id="homecontent_2" class="detailpop fade" style="overflow-y:auto;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="overflow-y:auto;">
		<div class="detailpop-content" style="background-image:url(/images/products/progressive_popup_3.png)">
			<div class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content">
					<ul >
						<li class="p_subject">HOYALUX iD</li>
                        <li class="p_title1">Hoyalux iD is the world’s first Intefrated Double Surface Design that imposes no limitations on the weareyalux iD integrates the best of both worlds: a wide, distortion-free field of vision at all distances and fast interaction between far and near.</li>
                        <li class="p_subject">Benefits</li>
                        <li class="p_title2">An extremely clear, natural vision in and at all directions</li>
                        <li class="p_title2">Smooth switching from far to near</li>
                        <li class="p_title2">Widest possible field of vision</li>
                        <li class="p_title2">Unsurpassed feeling of comfort, 100% stability when moving (even when using the stairs)</li>
                        <li class="p_subject" style="margin-top:20px">Lens Material Availability</li>
                        <li class="logo_link"><img src="/images/products/logo_mark.png" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
   </div>
    
    <div id="homecontent_3" class="detailpop fade" style="overflow-y:auto;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="detailpop-dialog" style="overflow-y:auto;">
		<div class="detailpop-content" style="background-image:url(/images/products/progressive_popup_7.png)">
			<div class="detailpop-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="detailpop-body detailpop-header">
				<div id="detail_pop_content">
					<ul >
						<li class="p_subject">HOYALUX iD LIFESTYLE V+</li>
                        <li class="p_title1">Hoyalux iD Lifestyle V+ is Hoya’s new progressive lens design dedicated to the feedback through customer’s ordering behaviour and data input for order of iD FreeForm Design Series.</li>
                        <li class="p_subject">Benefits</li>
                        <li class="p_title2">Maximum visual acuity and a crisper image perception</li>
                        <li class="p_title2">A noticeably more relaxed vision</li>
                        <li class="p_title2">Remarkable accurate correction.</li>
                        <li class="p_title2">Freedom on frame choice</li>
                        <li class="p_subject" style="margin-top:20px">Lens Material Availability</li>
                        <li class="logo_link"><img src="/images/products/logo_mark.png" /></li>
					</ul>
				</div>
			</div>
		</div>
    </div>
  </div>  
	@include('layout.footer')

