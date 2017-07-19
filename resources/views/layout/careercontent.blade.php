
<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js"></script>
    
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/career/careerCustom.css" type="text/css" media="screen">
<script type="text/javascript">
     var setf=[1,0,0,0,0,0];
     function setfontcolor(n){
		 switch(n){
			 case 1:initfontcolor;$('#left_font1').css("color","#fff");$('#left_font2').css("color","#fff"); break;
			 case 2:initfontcolor;$('#left_font3').css("color","#fff");$('#left_font4').css("color","#fff");break;
			 case 3:initfontcolor;$('#left_font5').css("color","#fff");$('#left_font6').css("color","#fff");break;
			 case 4:initfontcolor;$('#left_font7').css("color","#fff");$('#left_font8').css("color","#fff");break;
			 case 5:initfontcolor;$('#left_font9').css("color","#fff");$('#left_font10').css("color","#fff");break;
			 case 6:initfontcolor;$('#left_font11').css("color","#fff");$('#left_font12').css("color","#fff");break;
		}
	 }
	 function clearfontcolor(){
		 if(setf[0]==0){$('#left_font1').css("color","#808080");$('#left_font2').css("color","#808080");}
		 if(setf[1]==0){$('#left_font3').css("color","#808080");$('#left_font4').css("color","#808080");}
		 if(setf[2]==0){$('#left_font5').css("color","#808080");$('#left_font6').css("color","#808080");}
		 if(setf[3]==0){$('#left_font7').css("color","#808080");$('#left_font8').css("color","#808080");}
		 if(setf[4]==0){$('#left_font9').css("color","#808080");$('#left_font10').css("color","#808080");}
		 if(setf[5]==0){$('#left_font11').css("color","#808080");$('#left_font12').css("color","#808080");}
		
	 }
	 function initfontcolor(){
		 $('#left_font1').css("color","#808080");$('#left_font2').css("color","#808080");
		 $('#left_font3').css("color","#808080");$('#left_font4').css("color","#808080");
		 $('#left_font5').css("color","#808080");$('#left_font6').css("color","#808080");
		 $('#left_font7').css("color","#808080");$('#left_font8').css("color","#808080");
		 $('#left_font9').css("color","#808080");$('#left_font10').css("color","#808080");
		 $('#left_font11').css("color","#808080");$('#left_font12').css("color","#808080");
	 }
	 function hidecontentdivs(){
		 $('.content_sub1').css("display","none");
		 $('.content_sub2').css("display","none");
		 $('.content_sub3').css("display","none");
		 $('.content_sub4').css("display","none");
		 $('.content_sub5').css("display","none");
		 $('.content_sub6').css("display","none");
		 
		 
	 }
	 function showcontent(n){
		 switch(n){
			 case 1:setf[0]=1;setf[1]=0;setf[2]=0;setf[3]=0;setf[4]=0;setf[5]=0;clearfontcolor();
			        hidecontentdivs();$('.content_sub1').css("display","block");
					break;
			 case 2:setf[1]=1;setf[0]=0;setf[2]=0;setf[3]=0;setf[4]=0;setf[5]=0;clearfontcolor();
			        hidecontentdivs();$('.content_sub2').css("display","block");
					break;
			 case 3:setf[2]=1;setf[1]=0;setf[0]=0;setf[3]=0;setf[4]=0;setf[5]=0;clearfontcolor();
			        hidecontentdivs();$('.content_sub3').css("display","block");
					break;
			 case 4:setf[3]=1;setf[1]=0;setf[2]=0;setf[0]=0;setf[4]=0;setf[5]=0;clearfontcolor();
			        hidecontentdivs();$('.content_sub4').css("display","block");
					break;
			 case 5:setf[4]=1;setf[1]=0;setf[2]=0;setf[3]=0;setf[0]=0;setf[5]=0;clearfontcolor();
			        hidecontentdivs();$('.content_sub5').css("display","block");
					break;
			 case 6:setf[5]=1;setf[1]=0;setf[2]=0;setf[3]=0;setf[4]=0;setf[0]=0;clearfontcolor();
			        hidecontentdivs();$('.content_sub6').css("display","block");
					break;
		}
	 }
	 function setdivposition(){
		//subtitle_div:509, career_content_div:1920-509 => 400,110; 1000,150
	    var screenW = window.innerWidth;
		var tl=100, tw=400, cl=150, cw=1000,
		    tl_real, tw_real, cl_real, cw_real; 
		if(screenW > 1050)
		{
			$('.caontainer_career').css("background-image","url(/images/career/career_3.jpg");
			$('#career-content').css("display","block");
		    $('.subtitle_div').css("margin-top","40px");
		    $('.career_content_div').css("margin-top","40px");
		    tl_real = Math.round(tl * screenW * 1.0 / 1920.0);
			tw_real = Math.round(tw * screenW * 1.0 / 1920.0);
			cl_real = Math.round(cl * screenW * 1.0 / 1920.0+70);
			cw_real = Math.round(cw * screenW * 1.0 / 1920.0);
			$('.subtitle_div').css("margin-left",tl_real+"px").css("width",tw_real+"px");
		    $('.career_content_div').css("margin-left",cl_real+"px").css("width",cw_real+"px");
			
		}else{
			if(screenW > 900)
			{
				$('.caontainer_career').css("background-image","url(/images/career/career_3.jpg");
				$('#career-content').css("display","block");	
				$('.subtitle_div').css("margin-top","40px");
		        $('.career_content_div').css("margin-top","40px");
		        tl_real = Math.round(tl * screenW * 1.0 / 1920.0+30);
			    tw_real = Math.round(tw * screenW * 1.0 / 1920.0+50);
			    cl_real = Math.round(cl * screenW * 1.0 / 1920.0+30);
			    cw_real = Math.round(cw * screenW * 1.0 / 1920.0);
			    $('.subtitle_div').css("margin-left",tl_real+"px").css("width",tw_real+"px");
		        $('.career_content_div').css("margin-left",cl_real+"px").css("width",cw_real+"px");
			}else{
				if(screenW < 900){
					$('.caontainer_career').css("background-image","url(/images/career/career_3_1.jpg");
                    $('#career-content').css("display","none");
					tl_real = Math.round((screenW-300)/2);
                    $('.subtitle_div').css("margin-left",tl_real+"px").css("width","300px");				
				}
			}
			
		} 
	 }
	 $(function(){ 
	    setdivposition();
	    setfontcolor(1);
		showcontent(1);
	 });
	 $(window).resize(function () {
		 setdivposition();
	 });
	 
	 
</script>		 
<style>
font{
	color:#fff;
}
</style>
<div class="container" style="background: url('/images/career/careerbg_1.jpg'); height:700px;background-position:center;background-repeat:no-repeat;min-width:100%;background-size:cover;">
	<h2  class="txt_hidden" id="hidden_font" style=" font-size:40px;padding-top:50%;">JOB LISTING</h2>
	<h2  class="txt_hidden job_font" style="text-align:center; font-size:30px;padding-top:2%;color:#FFFFFF;">We're always looking for bright and talented people to join the family</h2>
</div>
<div class="row" style="width:100%;background-image: url(/images/career/career_2.png); background-repeat:no-repeat;background-size:cover;background-position:center;">
	<h2  id="right_hidden" class="job_font" style="text-align:center; font-size:25px;padding-top:2%;">JOB LISTING</h2>
	<h2  id="right_hidden" class="job_font" style="text-align:center; font-size:20px;">We're always looking for bright and talented people to join the family</h2>	
</div>


<div class="container caontainer_career" style="width:100%;height:800px;">

	<div id="career-subtitle"   style="float:left;">
	  <div class="subtitle_div">
		<?php
			//$i = 1;
			//foreach( $users as $value )	
			$value=$users[0];
			{ ?>				
				<div style="margin-top:20px;cursor:pointer" onmouseenter="setfontcolor(1)" onmouseleave="clearfontcolor()" onClick="showcontent(1)">
					<p  id="left_font1"    style="font-size:25px;">{{$value['title']}}</p>
					<p  id="left_font2"    style="font-size:20px;">Data scientist</p>
				</div>
		<?php 
			//$i++;
			} 
		?>
		
		<?php
			//$i = 1;
			//foreach( $users as $value )	                                 //Commercial and Executive  
            $value=$users[1];			
			{ ?>
                <div style="padding-top:15px;cursor:pointer" onmouseenter="setfontcolor(2)" onmouseleave="clearfontcolor()" onClick="showcontent(2)">	
			        <p  id="left_font3"   style="font-size:25px;">{{$value['title']}}</p>
			        <p  id="left_font4"   style="font-size:20px; ">Community Manager<br>Graduate Recruiter Spacialist<br>Talent Acquisition Manager</p>
		        </div>			
		<?php 
			//$i++;
			} 
		?>
		
		<?php
			//$i = 1;
			//foreach( $users as $value )	                                 //Design and Development
            $value=$users[2];			
			{ ?>
                <div style="padding-top:15px;cursor:pointer" onmouseenter="setfontcolor(3)" onmouseleave="clearfontcolor()" onClick="showcontent(3)">
			        <p  id="left_font5"   style="font-size:25px;">{{$value['title']}}</p>
			        <p  id="left_font6"  style="font-size:20px; ">Junior Content Development</p>
		        </div>			
		<?php 
			//$i++;
			} 
		?>
		
		<?php
			//$i = 1;
			//foreach( $users as $value )	                                 //Technologies 
            $value=$users[3];			
			{ ?>
                <div style="padding-top:15px;cursor:pointer" onmouseenter="setfontcolor(4)" onmouseleave="clearfontcolor()" onClick="showcontent(4)">
			        <p  id="left_font7"  style="font-size:25px;">{{$value['title']}}</p>
			        <p  id="left_font8"  style="font-size:20px; ">Game Engine Developer<br>Operation Engineer<br>Lead Systems Developer</p>
		        </div>			
		<?php 
			//$i++;
			} 
		?>
		
		<?php
			//$i = 1;
			//foreach( $users as $value )	                                 //Office and Facilities  
            $value=$users[4]; 			
			{ ?>
                <div style="padding-top:15px;cursor:pointer" onmouseenter="setfontcolor(5)" onmouseleave="clearfontcolor()" onClick="showcontent(5)">
			       <p  id="left_font9"  style="font-size:25px;">{{$value['title']}}</p>
			       <p  id="left_font10"  style="font-size:20px; ">Branch Manager</p>
		        </div>			
		<?php 
			//$i++;
			} 
		?>
		
		<?php
			//$i = 1;
			//foreach( $users as $value )	                                 //Art   
            $value=$users[5];			
			{ ?>
                <div style="padding-top:15px;margin-bottom:20px;cursor:pointer" onmouseenter="setfontcolor(6)" onmouseleave="clearfontcolor()" onClick="showcontent(6)">
			       <p  id="left_font11"   style="font-size:25px;">{{$value['title']}}</p>
			       <p  id="left_font12"  style="font-size:20px; ">Graphic Designer</p>
		        </div>			
		<?php 
			//$i++;
			} 
		?>
		
	   </div>
	</div>
	<div id="career-content" >
	    <div class="content_sub1" style="display:none">
		    <?php
			   //$i = 1;
			   //foreach( $users as $value )
               $value=$users[0];			   
			   { ?>
					<div class="career_content_div">{!!$value['descript']!!}</div>
		    <?php 
			    //$i++;
				} 
		    ?>
		</div>
		<div class="content_sub2" style="display:none">
		    <?php
			   //$i = 1;
			   //foreach( $users as $value )	
			   $value=$users[1];
			   { ?>
					<div class="career_content_div">{!!$value['descript']!!}</div>
		    <?php 
			    //$i++;
				} 
		    ?>
		</div>
		<div class="content_sub3" style="display:none">
		    <?php
			   //$i = 1;
			   //foreach( $users as $value )	
			   $value=$users[2];
			   { ?>
					<div class="career_content_div">{!!$value['descript']!!}</div>
		    <?php 
			    //$i++;
				} 
		    ?>
		</div>
		<div class="content_sub4" style="display:none">
		    <?php
			   //$i = 1;
			   //foreach( $users as $value )	
			   $value=$users[3];
			   { ?>
					<div class="career_content_div">{!!$value['descript']!!}</div>
		    <?php 
			    //$i++;
				} 
		    ?>
		</div>
		<div class="content_sub5" style="display:none">
		    <?php
			   //$i = 1;
			   //foreach( $users as $value )	
			   $value=$users[4];
			   { ?>
					<div class="career_content_div">{!!$value['descript']!!}</div>
		    <?php 
			    //$i++;
				} 
		    ?>
		</div>
		<div class="content_sub6" style="display:none">
		    <?php
			   //$i = 1;
			   //foreach( $users as $value )	
			   $value=$users[5];
			   { ?>
					<div class="career_content_div">{!!$value['descript']!!}</div>
		    <?php 
			    //$i++;
				} 
		    ?>
		</div>
	  	 		
	</div>
	
</div>




