
<div class = "back">
	<img id = "sliderB" src = "background/sliderBack2.jpg" style = "position: absolute;">
	<?php
		include "setPhotos.php";
	?>
</div>

<script type = "text/javascript">
	var maxW = 300;
	var maxH = 200;
	var num = $('.slidewrapper').children().size();
	var op = 1 / num;
	var w = maxW / num;
	var h = maxH / num;
	var index = num-1;
	var sliderTimer;
	
	var nw;
		var nh;
		var nl;
		var nt;
		var no;
		var nz;
	$('.slide').hover(function zoom()
	{
		nw = $(this).width();
		nh = $(this).height();
		nl = $(this).css("left");
		nt = $(this).css("top");
		no = $(this).css("opacity");
		nz = $(this).css("zIndex");
		
		
		var zin = num*2;
		
		$(this).animate({width: 900, height: 600, left: 300, top: 30, opacity: 1, zIndex: zin}, 500);
	}, function unZoom()
	{
		$(this).animate({width: nw, height: nh, left: nl , top: nt, opacity: no, zIndex: nz},500);
	});
	
	animate();
</script>



