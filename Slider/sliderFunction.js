
<html>
<head>
	<title>slider</title>
	<script language = "javascript" type = "text/javascript" src = "jquery-1.11.3.js"></script>
	<script language = "javascript" type = "text/javascript" src = "sliderFunction.js"></script>
	<link rel="stylesheet" href = "sliderStyle.css">
</head>
<body>
<center>
<div class = "slBack">
	<div class="viewport">
		<ul class="slidewrapper" data-current="0">
			<?php 
				include "setPhotos.php";
			?>
		</ul>
	</div>
</div>

$('.viewport').width(parseInt($('.slBack').css('width')) - 40);
$('.slide').width(parseInt($('.slBack').css('width')) - 40);
$('.otherSlide').width(parseInt($('.slBack').css('width')) - 40);

$('.viewport').height(parseInt($('.slBack').css('height')) - 20);
$('.slide').height(parseInt($('.slBack').css('height')) - 20);
$('.otherSlide').height(parseInt($('.slBack').css('height')) - 20);
	
var slideWidth = parseInt($('.slidewrapper').css('width')) - 15;
//prompt(slideWidth);
var sliderTimer;
var n = -1;

$(function()
{
	$('.slidewrapper').width($('.slidewrapper').children().size()*(slideWidth + 15));
	
	sliderTimer = setInterval(nextSlide, 3000);
	
	$('.viewport').hover(function()
	{
		clearInterval(sliderTimer);
	},function()
	{
		sliderTimer = setInterval(nextSlide, 3000);
	});
});

function nextSlide()
{
	var currentSlide=parseInt($('.slidewrapper').data('current'));
	if(currentSlide >= $('.slidewrapper').children().size() - 1 || currentSlide == 0)
	{
		n = -n;
	}
	currentSlide = currentSlide + n;
	$('.slidewrapper').animate({left: -currentSlide*(slideWidth + 15)},500).data('current',currentSlide);
}