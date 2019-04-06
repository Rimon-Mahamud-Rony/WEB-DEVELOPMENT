<!DOCTYPE html>
<html>
	<head>
	<!-- Tutorial By- ABDUL KADER- IT-BARI.com -->
		<meta charset="UTF-8"/>
		<title>Slider | IT-BARI.com</title>
	
    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />		
		
		
		
		
		<link rel="stylesheet" href="css/slider.css">		
		<link rel="stylesheet" href="font/font.css"/>
		
	</head>
	<body>
	
        <div class="slider-wrapper theme-dark">
            <div id="slider" class="nivoSlider">
                <img src="img/toystory.jpg" data-thumb="img/toystory.jpg" alt="" />
				
                <a href="http://dev7studios.com"><img src="img/up.jpg" data-thumb="img/up.jpg" alt="" title="This is an example of a caption" /></a>
				
                <img src="img/walle.jpg" data-thumb="img/walle.jpg" alt="" data-transition="slideInLeft" title="this is my caption"/>
				
                <img src="img/nemo.jpg" data-thumb="img/nemo.jpg" alt="" title="#htmlcaption" />
				
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                This is sweet caption
            </div>
        </div>	
		
		
		
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    
	<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>		
	</body>
</html>