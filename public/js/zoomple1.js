/*
	This plugin is developed by Yordan Stoev
	Page: http://yordanstoev.com/blog/zoomple-simple-jquery-plugin-for-image-zoom/
	version : 2.0
*/
var winwidth = 0;
//var pageflag = 1;
(function($){
	
	var ZoompleOverlay = (function(){
		var instance;
		function init(){
			var $overlay, 
				$el, 
				visible, 
				timeoutId, 
				$eylet,
				$img,
				eyletSize = {};
			function showOverlay($el){
				$overlay.trigger('showoverlay.zoomple');
				$overlay.css({	left: $el.offset().left, 
									top: $el.offset().top, 
									width: $el.width(), 
									height: $el.height(),
									display : "block"});
				visible = true;
				$img = $el;
			}
			function moveOverlay(){
				if(visible){
					$overlay.css({	left: $img.offset().left, 
									top: $img.offset().top, 
									width: $img.width(), 
									height: $img.height()});
				}
			}
			function delayedHideOverlay(){
				timeoutId = setTimeout(hideOverlay, 100);
			}
			function hideOverlay(){
				$overlay.trigger('hideoverlay.zoomple');
				visible = false;
				$overlay.css({'left': 'auto', 'top': 'auto', 'width': 'auto', 'height': 'auto',display : "none"});
			}
			function cancelTimeout(){
				if(timeoutId){
					clearTimeout(timeoutId);
					timeoutId = null;
				}
			}
			function getEl(){
				return $overlay;
			}
			function getEylet(){
				return $eylet;
			}
			function setEyletSize(width, height){
				$eylet.css({width : width, height : height});
				eyletSize.width = width;
				eyletSize.height = height;
			}
			function getEyletSize(){
				return eyletSize;
			}
			function moveEylet(css){
				return $eylet.css(css);
			}
			
			
			$overlay = $("<div id=\"zoomple_image_overlay\"><div class=\"eyelet\"></div></div>").appendTo("body");
			$eylet = $overlay.find(".eyelet");
			$overlay.on("mouseleave", hideOverlay);
			$overlay.on("mouseenter", cancelTimeout);
			
			
			return {
				showOverlay : showOverlay,
				hideOverlay : hideOverlay,
				delayedHideOverlay : delayedHideOverlay,
				getEl : getEl,
				setEyletSize : setEyletSize,
				getEyletSize : getEyletSize,
				getEylet : getEylet,
				moveEylet : moveEylet,
				//clearEylet : clearEylet
			}
		}
		return{
			getInstance : function(){
				if(!instance) instance = init();
				return instance;
			}
		}
	})();
	
	var Zoomple = function(element, options){
		this.$element = $(element),
		this.options = $.extend({}, Zoomple.DEFAULTS, options),
		this.timer = null,
		this.pageX = null,
		this.pageY = null,
		this.$cursor = null,
		this.$holder = null,
		this.overlay = null,
		this.$overlay = null,
		this.stopLoading = false;
		this.init();
	}
	
	Zoomple.DEFAULTS = { 
		attachWindowToMouse : true, 
		blankURL : 'images/blank.gif',
		bgColor : 'transparent',//'#fff',
		delay : 1,
		loaderURL : 'images/loader.gif',
		offset : {x : 5,y : 5},
		roundedCorners : true, 
		source : 'href',
		showCursor : false, 
		showOverlay : false, 
		windowPosition : {x : 'right', y : 'top'},
		zoomWidth : 300,
		zoomHeight : 300,
		overlayWidth: 100,
		overlayHeight:100,
		pageNum:1  ///1:home, 2:single vision...
		
	}
	Zoomple.prototype.init = function(){
		if(this.options.showOverlay){
			this.options.attachWindowToMouse = false;
			this.options.showCursor = false;
		}
		 		
		if(!($('#zoomple_previewholder').length)) {
			$('body').append('<div id="zoomple_previewholder" style="width:'+this.options.zoomWidth+'px;height:'+this.options.zoomHeight+'px;"><div class="overlay"></div><div class="cursor"></div><div class="image_wrap"><img id="image_si_back" src="" alt="" /><img id="image_ipad" src="" alt="" /><img id="image_blue" src="" alt="" /></div> <div class="caption-wrap"></div> </div>');
		    
		}
		this.$holder = $("#zoomple_previewholder");
		this.overlay = ZoompleOverlay.getInstance();
		this.$overlay = this.overlay.getEl();
		this.$cursor = this.$holder.find(".cursor");
		this.$element.find('img').on('mouseenter.zoomple',$.proxy(this.showZoom,this,this.$element.find('img')));
		//this.$element.find('img').on('click.zoomple',$.proxy(this.showZoom,this,this.$element.find('img')));
		this.$element.find('img').on('mouseleave.zoomple',$.proxy(this.hideOverlay,this));
		
	}
	Zoomple.prototype.showZoom = function($img,e ){
		//$('.image_wrap').css( 'display' , ''); 
		$('.overlay').css( 'display' , ''); 
		e.preventDefault();
		e.stopPropagation();
		this.pageX = e.pageX;
		this.pageY = e.pageY;
		this.$overlay.on('hideoverlay.zoomple',$.proxy(this.hideZoom,this));
		this.$overlay.on('mousemove.zoomple',$.proxy(this.moveZoom,this,this.$element.find('img')));
		this.overlay.showOverlay(this.$element.find('img')); 
		var options = this.options;
		var e = $.Event('zoomshow.zoomple',{zoomple : this});
		this.$element.trigger(e);
		if (e.isDefaultPrevented()) return;
		/////////////
		this.setOverlay();
		this.setCursor();
		
		this.setRounded();
		this.setImageOverlay();
		this.delaier($img.parent().attr(options.source),$img.attr('alt'));
	}
	
	Zoomple.prototype.hideZoom = function(e){
		
		if(e && e.stopPropagation) e.stopPropagation();
		if(e && e.preventDefault) e.preventDefault();
		
		clearTimeout(this.timer);
		this.$overlay.off('hideoverlay.zoomple');
		this.$overlay.off('mousemove.zoomple');
    
		this.stopLoading = false; 	
		this.$holder.removeClass("zp-visible");	
		var e = $.Event('zoomhide.zoomple',{zoomple : this});
		this.$element.trigger(e);
		this.hideImageOverlay();
		//this.clearEylet();
		this.clearCaption();
		$('#zoomple_previewholder').css("display","none");
		$('#zoomple_image_overlay').css("display","none");
		
	}
	Zoomple.prototype.hideZoom1 = function(e){
		
		$('#zoomple_previewholder').css("display","none");
		$('#zoomple_image_overlay').css("display","none");
		
	}
	Zoomple.prototype.moveZoom = function($target,e){
		/////=====first lens show state===////
		
		$('#zoomple_previewholder').css("display","block");
		$('#zoomple_image_overlay').css("display","block");
		//$('.image_wrap').css( 'display' , ''); 
		//$('.overlay').css( 'display' , ''); 
		e.preventDefault();
		e.stopPropagation();
		
		this.pageX = e.pageX;
		this.pageY = e.pageY;
		////===
		//this.setOverlay();
		//this.setImageOverlay();
		this.positionZoom($target,e);
		switch(this.options.pageNum){
		    case 1://====home===
		           var optiondiv= document.getElementById('simulator-option').getBoundingClientRect();
				   if(!e) var e = window.event;
		           var x = e.clientX ;
		           //var y = e.clientY + document.body.scrollTop;
		           
		           //if(optflag==1)
			          //===firefox can not event.clientX(only chrome)======
		              //////////if(event.clientX < option_img.width+optionbtn_img.width-1)
		              //if(x < option_img.width+optionbtn_img.width-1)
			              //this.hideZoom();
		           //if(optflag==0)
		               /////////if(event.clientX < optionbtn_img.width-1)
		               //if(x < optionbtn_img.width-1)
			              //this.hideZoom();
					  
				   if(x < optiondiv.right-1)
			              this.hideZoom(); 	  
			 break;
		
		     case 2://====product single page===
		           var divOffset = document.getElementById('pop_single_reg').getBoundingClientRect();
		           var divId = document.getElementById('pop_single_reg');
			       var divId_width = parseInt(divId.style.width);
			       if(!e) var e = window.event;
		           var x = e.clientX ;
		           var y = e.clientY ;
			       if(x > divOffset.left && x<(divOffset.left+divId_width)&&y>divOffset.top && y<(divOffset.top+100))
                      this.hideZoom();
			break;
			case 3://====product AR page===
		           var divOffset = document.getElementById('pop_single_AR').getBoundingClientRect();
		           var divId = document.getElementById('pop_single_AR');
			       var divId_width = parseInt(divId.style.width);
			       if(!e) var e = window.event;
		           var x = e.clientX ;
		           var y = e.clientY ;
			       if(x > divOffset.left && x<(divOffset.left+divId_width)&&y>divOffset.top && y<(divOffset.top+100))
                      this.hideZoom();
			break;
		  	case 5://====product pc page===
		           var divOffset = document.getElementById('pop_single_PC').getBoundingClientRect();
		           var divId = document.getElementById('pop_single_PC');
			       var divId_width = parseInt(divId.style.width);
			       if(!e) var e = window.event;
		           var x = e.clientX ;
		           var y = e.clientY ;
			       if(x > divOffset.left && x<(divOffset.left+divId_width)&&y>divOffset.top && y<(divOffset.top+100))
                      this.hideZoom();
			break;
		}
	}
	Zoomple.prototype.hideOverlay = function( e){
		this.overlay.delayedHideOverlay();
	}
	Zoomple.prototype.positionZoom = function($target,e){
		var f=0;
	    var options = this.options,
			x = ((e.pageX - $target.offset().left) / $target.width() )*100,
			y =  ((e.pageY - $target.offset().top) / $target.height())*100;
		
		if(this.options.attachWindowToMouse){
			thumbPosition = { left : ( e.pageX ), 
								top : ( e.pageY ), 
								right : Math.round($(window).width() - ( e.pageX - options.offset.x)), 
								bottom : Math.round($(window).height() - ( e.pageY - options.offset.y))}; 
			if(($(window).height() +  $(window).scrollTop() - options.zoomHeight - options.offset.y) > thumbPosition.top){
				this.$holder.css({'top' :  Math.round(thumbPosition.top + options.offset.y) + "px"}); 
			}else{
				this.$holder.css({'top' :  Math.round(thumbPosition.top - options.zoomHeight - options.offset.y) + "px"}); 
			}
			if(($(window).width() +  $(window).scrollLeft() - options.zoomWidth - options.offset.x) > thumbPosition.left){
				this.$holder.css({ 'left' : Math.round(thumbPosition.left + options.offset.x) + "px"}); 
			}else{
				//this.$holder.css({ 'left' : Math.round(thumbPosition.left - options.zoomWidth - options.offset.x) });
				this.$holder.css({ 'left' : $(window).width() +  $(window).scrollLeft() - options.zoomWidth});
				f=1;
			}
		}else{			 			
			var leftPos = Math.round($target.offset().left - options.offset.x - options.zoomWidth);
			var rightPos = Math.round($target.offset().left + $target.width() + options.offset.x); 
			var topPos =  Math.round($target.offset().top - options.offset.y); 
			var bottomPos =  Math.round($target.offset().top + $target.height() - options.zoomHeight + options.offset.y);  
			if(options.windowPosition.y == 'top') this.$holder.css({'top' :  topPos + "px"});  	
			if(options.windowPosition.x == 'left') this.$holder.css({'left' :  leftPos + "px"});  	
			if(options.windowPosition.y == 'bottom') this.$holder.css({'top' :  bottomPos + "px"});  	
			if(options.windowPosition.x == 'right') this.$holder.css({'left' :  rightPos + "px"});  			 
		}
		var $img = this.$holder.find("img"),
			left = -($img.width() - options.zoomWidth)*x/100,
			top = -($img.height() - options.zoomHeight)*y/100;
			
		if(options.showCursor || options.roundedCorners){
			left 	+= (options.zoomWidth)*(50-x)/100;
			top 	+= (options.zoomHeight)*(50-y)/100;
		}
		this.$cursor.css({"left" :  50 +"% ","top": 50 +"%"});  
		
		
		if(this.options.showOverlay){
			var eyletPos = this.moveEylet(Math.round(e.pageX - $target.offset().left) ,  Math.round(e.pageY - $target.offset().top)),
				width = $img.width(),
				height = $img.height();
			
			this.moveImageOverlay(-Math.round(width*eyletPos.x),-Math.round(height*eyletPos.y) , $img );
		}else///////  when overleft mouse
			if(f==0) {
				//console.log(left+":"+top);
				//alert(left+":"+top);
			    //$('#image_si_back').css({"left" : left +"px ","top":  top+"px"});//attr("left",left +"px").attr("top",top+"px");$('#image_ipad').attr("left",left +"px").attr("top",top+"px");}  
				//$('#image_ipad').css({"left" : left +"px ","top":  top+"px"});
				$img.css({"left" : left +"px ","top":  top+"px"});

			}   
			else $img.css({"left" :"-"+($(window).width() +  $(window).scrollLeft() - options.zoomWidth) +"px ","top":  top+"px"});  
			
	}
	Zoomple.prototype.delaier = function(imgRefUrl, imgDescription)
	{	
		this.stopLoading = true; 
		switch(this.options.pageNum){
		     case 1:this.timer = setTimeout($.proxy(this.delaiedZoom,this,imgURL,imgDescription), this.options.delay); break;
		     case 2:this.timer = setTimeout($.proxy(this.delaiedZoom,this,imgRefUrl,imgDescription), this.options.delay); break;
		     case 3:this.timer = setTimeout($.proxy(this.delaiedZoom,this,imgRefUrl,imgDescription), this.options.delay); break;
			 //case 4:this.timer = setTimeout($.proxy(this.delaiedZoom,this,imgBifocalURL,imgDescription), this.options.delay); break;
			 case 5:this.timer = setTimeout($.proxy(this.delaiedZoom,this,imgPCURL,imgDescription), this.options.delay); break;
		}
	}
	Zoomple.prototype.delaiedZoom = function(imgRefUrl,imgDescription){
			
		var self = this;
		self.$holder.css({"width" : self.options.zoomWidth + "px","height" : self.options.zoomHeight + "px"});		
		self.$holder.find(".image_wrap").css({"background" : " url(" + self.options.loaderURL +") 50% 50% no-repeat"});				
		var objImagePreloader = new Image(),
			src = imgRefUrl+"?" + new Date().getTime();
		objImagePreloader.src = src;
			
		if(self.stopLoading){ 
			//self.$holder.addClass("zp-visible");
			///===========ipad image extra 
			if(self.options.pageNum==1){
				$('#image_si_back').attr("src",src);
			    $('#image_ipad').attr("src",imgURLiPad);
				if(optVal.selBC==0)
                   $('#image_blue').css({"background":"blue","opacity":"0.04"});	
                else			   
		            $('#image_blue').css({"background":"blue","opacity":"0.0"});
			}
			if(self.options.pageNum==2){
				$('#image_si_back').attr("src",src);
			    $('#image_ipad').attr("src","");
			}
			if(self.options.pageNum==3){
				$('#image_si_back').attr("src",src);
			    $('#image_ipad').attr("src","");
				if(selARflag==0)
                   $('#image_blue').css({"background":"blue","opacity":"0.04"});	
                else			   
		            $('#image_blue').css({"background":"blue","opacity":"0.0"});
			}
			if(self.options.pageNum==5){
				$('#image_si_back').attr("src",src);
			    $('#image_ipad').attr("src","");
			}
			
			//self.$holder.css({"background-image" : " url("+self.options.loaderURL+")"});					
			if($.trim(imgDescription).length) self.$holder.find(".caption-wrap").html('<div class="caption">'+imgDescription+'</div>');
		}
		
		$(objImagePreloader).load(function() {	
			if(self.stopLoading){	
				self.$holder.addClass("zp-visible");
				self.$holder.find(".image_wrap").css({ "background" : self.options.bgColor});		
				//=======lens image equal original image
				self.$holder.find("img").attr({"width" : self.options.overlayWidth + "px","height" : self.options.overlayHeight + "px"});
				//$('#image_si_back').attr("width",self.options.overlayWidth + "px").attr("height",self.options.overlayHeight + "px");
			    //$('#image_ipad').attr("width",self.options.overlayWidth + "px").attr("height",self.options.overlayHeight + "px");
				
				//self.$holder.find("img").css({"width" : self.options.overlayWidth + "px","height" : self.options.overlayHeight + "px"});//.attr({"id": "zoomover","src":src, "width" : this.width, "height" : this.height});
				self.$holder.css({"background-image" : " none"});			
				if($.trim(imgDescription).length) self.$holder.find(".caption-wrap").html('<div class="caption">'+imgDescription+'</div>'); 
				var e = { pageX : self.pageX, pageY : self.pageY};
				if(self.options.showOverlay) self.setupEylet();
				self.positionZoom(self.$element.find('img'),e);
			}
		}); 
	}
	Zoomple.prototype.setCursor = function(){
		if(this.options.showCursor){
			this.$cursor.css("display","block");
		}else{
			this.$cursor.css("display","none");
		}
	}
	Zoomple.prototype.setRounded = function(){
		if(this.options.roundedCorners){
			this.$holder.addClass("rounded");
		}else{
			this.$holder.removeClass("rounded");
		}
	}
	Zoomple.prototype.setOverlay = function(){
		if(this.options.showOverlay){
			this.$overlay.addClass("preview");
		}else{
			this.$overlay.removeClass("preview");
		}
	}
	Zoomple.prototype.moveEylet = function(mouseX, mouseY){
		var eylet = this.overlay.getEylet(),
			size = this.overlay.getEyletSize(),
			left = Math.round(mouseX - size.width/2),
			top = Math.round(mouseY - size.height/2),
			img = this.$element.find('img');
		
		if(left <= 0){
			left = 0;
		}
		if(left >= img.width() - size.width){
			left = img.width() - size.width;
		} 
		if(top <= 0){
			top = 0;
		}
		if(top >= img.height() - size.height){
			top = img.height() - size.height;
		} 
		this.overlay.moveEylet({top : top, left : left});
		eylet.css({backgroundPosition : -left+"px "+ -top+"px"});
		return {x : left/img.width(), y : top/img.height()}
	}
	Zoomple.prototype.setImageOverlay = function(){
		var $overlay = $("#zoomple_image_overlay"),
		$img = this.$element.is("img") ? this.$element : this.$element.find("img");
		//=======original image width, height
		this.options.overlayWidth=$img.width();
		this.options.overlayHeight=$img.height();
			
	}
	
	Zoomple.prototype.hideImageOverlay = function(){
		$("#zoomple_image_overlay").css({'left': 'auto', 'top': 'auto', 'width': 'auto', 'height': 'auto'});
	}
	Zoomple.prototype.moveImageOverlay = function(left, top, $img){
		var size = {width : this.options.zoomWidth, height : this.options.zoomHeight};
		
		if(left >= 0){
			left = 0;
		}
		if(left <= size.width - $img.width()){
			left = size.width - $img.width();
		} 
		if(top >= 0){
			top = 0;
		}
		if(top <= size.height - $img.height()){
			top = size.height - $img.height();
		} 
		$img.css({left : left+"px ", top : top+"px"});
	}
	Zoomple.prototype.clearCaption = function(){
		this.$holder.find(".caption").remove(); 
	}
			
		   
	$.fn.zoomple = function (options) {
        return this.each(function () {
            if (!$.data(this, 'zoomple')) {
                $.data(this, 'zoomple', 
                new Zoomple( this, options ));
            }
        });
    }
})(jQuery);