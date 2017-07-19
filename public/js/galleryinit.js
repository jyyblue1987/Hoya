$(window).load(function() {
    //Mouse Slide
	$("#gallerycontainer").mouseslide({
		height:'185px', //Element height
		widthExpand:true, //Auto Expand Width
		//=====if true then row:2
		mirror:false, //Create Mirror
		mirrorOpacity:.3 //30% Mirror Opacity
	});
	//Lightbox init (to zoom images and see description)
	//$('#gallerycontainer a').lightBox();
});