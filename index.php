<html>
<head>
	<link rel = "stylesheet" href = "style.css">
	<?php include "Slider/sliderHeaders.php";?>
</head>
<body>

<div class = "menu"> menu
	<div id ="slogan">
		<img src = "menuPhoto/slogan.png">
	</div>
	
	<div id = "search">
		<img src = "menuPhoto/search.jpg" style = "position: absolute;">
		<img id = "searchBot" src = "menuPhoto/searchB.jpg">
		<form id= "searchForm" method = "post">
			<input id = "searchInput" type = "text"/>
			<input id = "searchB" type = "submit" />
		</form>
	</div>
	
	<div id = "contacts">
		<a href = "#"><img src = "menuPhoto/contacts.jpg"></a>
		<img src = "menuPhoto/p1.jpg" class = "mid">
	</div>
	
	<div id = "aboutUs">
		<a href = "#"><img src = "menuPhoto/aboutUs.jpg"></a>
		<img src = "menuPhoto/p1.jpg" class = "mid">
	</div>
	<div id = "news">
		<a href = "#"><img src = "menuPhoto/news.jpg"></a>
		<img src = "menuPhoto/p1.jpg" class = "mid">
	</div>
	
</div>

<div class = "center">
	<div id = "slider">
		<?php
			include "Slider/slider.php";
		?>
	</div>
</div>
<div id = "menu2">
	<div class = "menu2P">
		<a href = "#"><img class = "menu2Ph" src = "menu2Photo/main.jpg"></a>
	</div>
	<div class = "menu2P">
		<a href = "#"><img class = "menu2Ph" src = "menu2Photo/classic.jpg"></a>
	</div>
	<div class = "menu2P">
		<a href = "#"><img class = "menu2Ph" src = "menu2Photo/sport.jpg"></a>
	</div>
	<div class = "menu2P">
		<a href = "#"><img class = "menu2Ph" src = "menu2Photo/ethno.jpg"></a>
	</div>
	<div class = "menu2P" >
		<a href = "#"><img class = "menu2Ph"src = "menu2Photo/urban.jpg"></a>
	</div>
</div>
<div class = "left">
left
</div>


<div class = "right">right
</div>
	<script type = "text/javascript">
		var docWidth= $(window).width();
		$('.menu').width(docWidth);
		$('.center').width(docWidth);
		$('.back').width(docWidth);
		$("#sliderB").width(docWidth);
		$(".menu2Ph").width((docWidth - 1) / 5);
	</script>
</body>
</html>