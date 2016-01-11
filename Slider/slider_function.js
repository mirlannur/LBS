
		
$(function()
{
	sliderTimer = setInterval(nextSlide, 4000);
	$('.back').hover(	function(){clearInterval(sliderTimer)}, 
						function(){sliderTimer = setInterval(nextSlide, 4000)});
});
function nextSlide()
{
	animate();
	++index;
	if(index >= num) index = 0;
	
}

function animate()
{
	for(var i = 0; i < num; ++i)
	{
		var pri = getPriority(index, i, num);
		var tw = maxW - w * pri;
		var th = maxH - h * pri;
		var to = 1 - op * pri;
		var z = (num / 2 - pri)*2;
		var p2;
		if(pri <= num/4) p2 = pri;
		else p2 = num/2-pri;
		
		var t = parseInt($('.back').width()) / 2 / (num / 3.5);   
		var tleft = parseInt($('.back').width()) / 2 - tw / 2 + checkR(index, i, num) * t * p2;
		var ttop = parseInt($('.back').height()) / 2 - 120 + h * pri / 2;
		$('.slidewrapper').children().eq(i).animate({width: tw, height: th, top:ttop,left:tleft,zIndex:z,opacity:to},500);
	}
}

		
function getPriority(a, b, num)
{
	if(a > b)
	{
		if((a - b) <= num / 2) return a - b;
		else  return num + b - a;
	}
	else 
	{ 
		if((b - a) <= num / 2) return b - a;
		else return num + a - b;
	}
}

function checkR(a, b, num)
{
	if(a > b)
	{
		if((a - b) <= num / 2) return -1;
		else return 1;
	}
	else 
	{
		if((b - a) <= num / 2) return 1;
		else return -1;
	}
}
