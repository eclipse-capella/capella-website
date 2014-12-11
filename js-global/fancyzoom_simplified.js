// This is my simplified version of fancyZoom jQuery plugin --Hervé
// based on http://static.railstips.org/orderedlist/demos/fancy-zoom-jquery/
// thank you Steve Smith (and Cabel Sasser for the original version)
jQuery.fn.fancyZoom = function(options) {
  
	var options = options || {};
	var zooming = false;

	if ($('#zoom').length == 0) {
		var html = '<div id="zoom" style="display:none;"></div>';
		
		$('body').append(html);

		$('html').click(function(e) { if ($(e.target).parents('#zoom:visible').length == 0) hide(); });
		$(document).keyup(function(event) {
			if (event.keyCode == 27 && $('#zoom:visible').length > 0) hide();
		});
	}

	var zoom = $('#zoom');

	this.each(function(i) {
		$($(this).attr('href')).hide();
		$(this).click(show);
	});
 
	return this;
  
	function show(e) {
		if (zooming) return false;
		zooming         = true;

		var content_div = $($(this).attr('href'));
		var zoom_width  = options.width;
		var zoom_height = options.height;
			
		var width       = window.innerWidth || (window.document.documentElement.clientWidth || window.document.body.clientWidth);
		var height      = window.innerHeight || (window.document.documentElement.clientHeight || window.document.body.clientHeight);
		var x           = window.pageXOffset || (window.document.documentElement.scrollLeft || window.document.body.scrollLeft);
		var y           = window.pageYOffset || (window.document.documentElement.scrollTop || window.document.body.scrollTop);
		var window_size = {'width':width, 'height':height, 'x':x, 'y':y}
		
		var width              = (zoom_width || content_div.width()) + 60;
		var height             = (zoom_height || content_div.height()) + 60;
		var d                  = window_size;
		
		// ensure that newTop is at least 0 so it doesn't hide close button
		var newTop             = Math.max((d.height/2) - (height/2) + y, 0);
		var newLeft            = (d.width/2) - (width/2);
		var curTop             = e.pageY;
		var curLeft            = e.pageX;
		
		zoom.attr('curTop', curTop);
		zoom.attr('curLeft', curLeft);
		zoom.attr('scaleImg', options.scaleImg ? 'true' : 'false');
			
		$('#zoom').hide().css({
					position : 'absolute',
					top      : curTop + 'px',
					left     : curLeft + 'px',
					width    : '1px',
					height   : '1px'
				});
	    
		zoom.hide();

		if (options.closeOnClick) {
			$('#zoom').click(hide);
		}
	    
		if (options.scaleImg) {
			zoom.html(content_div.html());
			$('#zoom img').css('width', '100%');
		} else {
			zoom.html('');
		}
	    $('#zoom').css("z-index", 10);
		
		$('#zoom').animate({
					top     : newTop + 'px',
					left    : newLeft + 'px',
					opacity : "show",
					width   : width,
					height  : height
		}, 600, null, function() {
						if (options.scaleImg != true) {
							zoom.html(content_div.html());
						}
						zoom.show();
						zooming = false;
				});

		return false;
	}
	  
	function hide() {
		if (zooming) return false;
		zooming = true;
		$('#zoom').unbind('click');
		if (zoom.attr('scaleImg') != 'true') {
			zoom.html('');
		}

		$('#zoom').animate({
			top     : zoom.attr('curTop') + 'px',
			left    : zoom.attr('curLeft') + 'px',
			opacity : "hide",
			width   : '1px',
			height  : '1px'
			}, 500, null, function() {
				if (zoom.attr('scaleImg') == 'true') {
					zoom.html('');
				}
				zooming = false;
			});
		return false;
	}
}
