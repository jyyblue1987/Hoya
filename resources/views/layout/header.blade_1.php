<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/images/ico/favicon.ico">
	
    <title>Hoya</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/slidelayout.css" type="text/css" media="screen">
    <!-- Custom CSS -->
    <link href="/css/customer.css" rel="stylesheet">
    
<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.js"></script>
    <!-- Bootstrap Core CSS -->

</head>

<?php
  $lid = 0;
  if(isset($_GET["lid"]) && $_GET["lid"] != ""){
	  $lid = $_GET["lid"];
  }

?>
<!--********************* if window scroll value is more then 1083 ***************************-->
<!--********************** menu bar visible set false, if not true ***************************-->
<!--****************************** coding by ksch (2016-2-2)**********************************-->
<script type="text/javascript">
	var menuflag = 0;
	var lidhead = <?php echo $lid;?>;
	var hheight = 0, hwidth = 0;
	window.addEventListener("scroll", function(event) {
    	var top = this.scrollY,
        	left =this.scrollX;
		if(top > 303)
		{
			document.getElementById("id_naverbar").style.visibility = 'hidden';
		}else{
			document.getElementById("id_naverbar").style.visibility='visible';
		}
	}, false);
	$(function(){ 
		 hheight = window.innerHeight;
		 hwidth = window.innerWidth;
		 
	});
	$(window).resize(function () {
		 hheight = window.innerHeight;
		 hwidth = window.innerWidth;
	});
	function popup_winShow(){
		if(hwidth > 800){
			if(menuflag == 1){
				$('#myModal').modal('hidden');
			}
				$('#myModal').modal('show');
				$('#product_menu_a').css( "border-bottom-width", "3px");
				$('#product_menu_a').css( "border-bottom-color", "White");
				$('#product_menu_a').css( "border-bottom-style", "solid");	
				$(".modal-dialog").on( {
				   'mouseleave':function() { $('#myModal').modal('hide'); $('body').css( "padding-right", "0px");menuflag = 0;}
				});
				menuflag = 1;
		}
	}
	function popup_winHide(){
		menuflag = 0;
		$('#myModal').modal('hide');$('body').css( "padding-right", "0px");
		$('#product_menu_a').css( "border-bottom-width", "0px");
	}
		 $(function(){
		   $('.menumodal').on('shown.bs.modal', function () {
				  
		   });
		});
		
		$(function(){
		   $('.menumodal').on('hide.bs.modal', function () {
			   $('#product_menu_a').css( "border-bottom-width", "");
			   $('#product_menu_a').css( "border-bottom-color", "transparent");
			   $('#product_menu_a').css( "border-bottom-style", "");		  
		   });
		});
	
	function show_material_popup(url, mat_v){
		if(lidhead == 0){
			var new_window = window.open(url+"?lid="+mat_v, "_self") ;
		}else{
			if(mat_v == 1){
				$('#myModal').modal('hide');
				$('#myModal1_5').modal('show');
			}else if(mat_v == 2){
				$('#myModal').modal('hide');
				$('#myModal1_53').modal('show');
			}else if(mat_v == 3){
				$('#myModal').modal('hide');
				$('#myModal1_60').modal('show');
			}else if(mat_v == 4){
				$('#myModal').modal('hide');
				$('#myModal1_67').modal('show');
			}else if(mat_v == 5){
				$('#myModal').modal('hide');
				$('#myModal1_70').modal('show');
			}else if(mat_v == 6){
				$('#myModal').modal('hide');
				$('#myModal1_74').modal('show');
			}else{
				$('#myModal').modal('hide');
				$('#myModal1_5').modal('show');
			}
		}
	}
</script>
<!--*******************************************************************************************-->
<body>
<!--***************** product popup menu dialog ***********************************************-->
<!--****************** coding by ksch(2016_2_5) ***********************************************-->
 <div id="myModal" class="modal fade menumodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index;101">
    <div class="modal-dialog">
      <div class=" modal-header modal-content">
		<div class="container_about" >
			<div class="div_center">
<!--******************************************************************************************************-->				
				<div class="footer_block">
					<ul style="    height: 55px;">
						<li><img src="/images/products/rens_1.png" style="clear:both"/></li>
					</ul>
					<ul style="    margin-top: 25px;">
						<li style="font-weight:bold;"><a href="/fullproduct" aria-hidden="true">FULL<br/>PRODUCT<br/>RANGE</a></li>
					</ul>
				</div>
				<div class="footer_linespacing">
					<img src="/images/products/sepearate_line.png"/>
				</div>
<!--******************************************************************************************************-->				
				<div class="footer_block">
					<ul style="    height: 55px;">
						<li><img src="/images/products/rens_2.png" style="clear:both"/></li>
					</ul>
					<ul style="   margin-top: 25px;">
						<li style="font-weight:bold; cursor:default">LENS DESIGN</li>
						<li><a href="/singlevision" aria-hidden="true">Single Vision</a></li>
						<li><a href="/progressive" aria-hidden="true">Progressive Lens</a></li>
						<li><a href="/speciality" aria-hidden="true">Occupational Lens</a></li>
					</ul>
				</div>
				<div class="footer_linespacing">
					<img src="/images/products/sepearate_line.png"/>
				</div>
<!--******************************************************************************************************-->				
				<div class="footer_block">
					<ul style="    height: 55px;">
						<li><img src="/images/products/rens_3.png" style="clear:both"/></li>
					</ul>
					<ul style="    margin-top: 25px;">
						<li style="font-weight:bold; cursor:default">TREATMENT AR</li>
						<li><a href="/treatment" aria-hidden="true">Anti Reflection</a></li>
                        <li><a href="/photochromics" aria-hidden="true">Photochromics</a></li>
					</ul>
				</div>
				<div class="footer_linespacing">
					<img src="/images/products/sepearate_line.png"/>
				</div>
<!--******************************************************************************************************-->				
				<div class="footer_block">
					<ul style="    height: 55px;">
						<li><img src="/images/products/rens_4.png" style="clear:both"/></li>
					</ul>
					<ul style="    margin-top: 25px;">
						<li style="font-weight:bold; cursor:default"><a href="/lensmaterial" aria-hidden="true">LENS MATERIALS</a></li>
						<li>
							<a href="#" style="margin-right: 10px;left:0px" onclick="show_material_popup('/lensmaterial', 1)">&nbsp1.50&nbsp&nbsp</a>
							<a  href="#" onclick="show_material_popup('/lensmaterial', 4)">&nbsp1.67&nbsp</a>
						</li>
						<li>
							<a href="#" style="margin-right: 10px;left:0px" onclick="show_material_popup('/lensmaterial', 2)">&nbsp1.53&nbsp</a>
							<a  href="#" onclick="show_material_popup('/lensmaterial', 5)">&nbsp&nbsp1.70&nbsp</a>
						</li>
						<li>
							<a  href="#" style="margin-right: 10px;left:0px" onclick="show_material_popup('/lensmaterial', 3)">&nbsp1.60&nbsp&nbsp</a>
							<a  href="#" onclick="show_material_popup('/lensmaterial', 6)">&nbsp1.74&nbsp</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>  
	
  
    <!-- Navigation -->
    <nav id="id_naverbar" class="navbar navbar-inverse nava-fixed-top" role="navigation" style="z-index:101">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="/"><img src="/images/logo/logo_white.svg" style="height:70px;" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse webnavbar">
                <ul class="nav navbar-nav navbar-right webnavbar" style="text-align:center">
					<li><a href="/aboutus" onmouseover="popup_winHide()">ABOUT US</a></li>
					<li id="product_menu"  onmouseover="popup_winShow()"><a href="#" id="product_menu_a">PRODUCTS</a></li>
                    <li><a href="/lens" onmouseover="popup_winHide()">LENS SELECTOR</a></li>
					<li><a href="/career" onmouseover="popup_winHide()">CAREER</a></li>
					<li><a href="/contactus" onmouseover="popup_winHide()">CONTACT US</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right mobilenavbar" style="text-align:left; background-color:#000;width:70%; margin-left:30%;margin-top:0px;    opacity: 0.8;">
					<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:10%;"><a href="/aboutus">ABOUT US</a></li>
					<li id="product_menu" style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:10%;"><a href="#" id="product_menu_a">PRODUCTS</a></li>
						<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;font-weight:bold;padding-left:20%;"><a href="/fullproduct" aria-hidden="true">FULL PRODUCT RANGE</a></li>
						<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;font-weight:bold; cursor:default;padding-left:20%;padding-top:10px;padding-bottom:10px;">LENS DESIGN</li>
						<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:24%;"><a href="/singlevision" aria-hidden="true">Single Vision</a></li>
						<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:24%;"><a href="/progressive" aria-hidden="true">Progressive Lens</a></li>
						<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:24%;"><a href="/speciality" aria-hidden="true">Occupational Lens</a></li>
						<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;font-weight:bold;padding-left:20%; cursor:default;padding-top:10px;padding-bottom:10px;">TREATMENT AR</li>
						<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:24%;"><a href="/treatment" aria-hidden="true">Anti Reflection</a></li>
                        <li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:24%;"><a href="/photochromics" aria-hidden="true">Photochromics</a></li>
						<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:20%;font-weight:bold; cursor:default"><a href="/lensmaterial" aria-hidden="true">LENS MATERIALS</a></li>
						<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:24%;">
							<a href="#" style="margin-right: 10px;left:0px;float:left" onclick="show_material_popup('/lensmaterial', 1)">&nbsp1.50&nbsp;&nbsp;</a>
							<a  href="#" onclick="show_material_popup('/lensmaterial', 4)">&nbsp;1.67&nbsp;</a>
						</li>
						<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:24%;">
							<a href="#" style="margin-right: 10px;left:0px;float:left" onclick="show_material_popup('/lensmaterial', 2)">&nbsp;1.53&nbsp;</a>
							<a  href="#" onclick="show_material_popup('/lensmaterial', 5)">&nbsp;&nbsp;1.70&nbsp;</a>
						</li>
						<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:24%;">
							<a  href="#" style="margin-right: 10px;left:0px;float:left" onclick="show_material_popup('/lensmaterial', 3)">&nbsp;1.60&nbsp;&nbsp;</a>
							<a  href="#" onclick="show_material_popup('/lensmaterial', 6)">&nbsp;1.74&nbsp;</a>
						</li>
                    <li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:10%;"><a href="/lens">LENS SELECTOR</a></li>
					<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:10%;"><a href="/career">CAREER</a></li>
					<li style="border-bottom-color:#fff;border-bottom-style: groove;border-bottom-width: 1px;padding-left:10%;"><a href="/contactus">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>    
</body>
</html>


