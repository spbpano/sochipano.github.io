
<!DOCTYPE html>
<html>
<head>
	<title>ЭкоГородЭкспо 2015 панорама 360&deg; &plus; Алёша Забелин &there4; фотохудожник экологист</title>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" />
	<meta name="description" content="Алёша Забелин художественная фотография | Aleksey Zabelin photography artist">
	<meta name="keywords" content="семейный фотограф goVeg goVegan VegPhotographer EcoPhotographer">
	<meta name="author" content="Aleksey Zabelin">
	<link href='http://fonts.googleapis.com/css?family=Oranienbaum&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
	
	<meta property="og:title" content="ЭкоГородЭкспо панорама 360&deg; GreenPano.ru"/>
	<meta property="og:description" content="виртуальная экскурсия по ЭкоГородЭкспо, фотохудожник Алёша Забелин &there4; GreenPano.ru экологичные панорамы 360&deg; ecogorod-expo.ru"/>
	<meta property="og:image" content="http://alekseyzabelin.ru/360/ecogorod-expo15/og/am.jpg"/>
	<meta property="og:image" content="http://alekseyzabelin.ru/360/ecogorod-expo15/og/ap.jpg"/>
	<meta property="og:image" content="http://alekseyzabelin.ru/360/ecogorod-expo15/og/et.jpg"/>
	<meta property="og:image" content="http://alekseyzabelin.ru/360/ecogorod-expo15/og/rs.jpg"/>
	<meta property="og:image" content="http://alekseyzabelin.ru/360/ecogorod-expo15/og/zk.jpg"/>
	<meta property="og:image" content="http://alekseyzabelin.ru/360/ecogorod-expo15/og/zp.jpg"/>
	<meta property="og:url" content="http://alekseyzabelin.ru/360/ecogorod-expo15/index.php"/>
	
	<style>
		html {  }
		body {
			padding:1.41em;
			font-family: 'Verdana', serif;
			font-size: 1em;
			color: #d9d9d9;
			background-color: #eeeeee;
		 	text-align: center;
		 }
		#wrapper {
			width: 960px;
			margin-left: auto;
			margin-right: auto;
		 }
		#photo{
			width:960px;
			height:640px;
			margin-top:1.41em;
			margin-left:auto;
			margin-right:auto;
			margin-bottom:1.41em;
			box-shadow: 0 0 4px rgb(128,128,128);
			/*background-image: url(/img/az.jpg);*/
		}

		#logo {
			text-decoration: none;
		}

		h5{
			text-align: left;
		}
		#who a{
			color: rgb(75,145,00);
			text-align: left; 
			line-height: 0.07em;
			text-decoration: none;
		}
		#social{
			float: right;
			margin-top: -3.7em;
		}
		a span, span{
			color: rgb(77,86,69);
			/*#808080;*/
			text-decoration: none;
		}
		p{
			color: rgb(0,102,51);
			/*#004524;*/
		}
		#mail-link{
			text-decoration: none;
			color:#808080;
			text-shadow: 1px 1px 1px #FFFFFF;
		}
	</style>
</head>
<body>
<div id="wrapper">
<div id="who">
	<a href="http://alekseyzabelin.ru/">
		<h3>Алёша Забелин</h3>
		<h6><span>фотохудожник экологист</span></h6>
	</a>
</div>
<div id="social">
	<a href="https://fb.com/aleshazabelin"><img width="25px" src="/img/fb.png"></a>
	<a href="https://vk.com/alekseyzabelin"><img src="/img/vk.png"></a>
	<a href="https://www.google.com/maps/views/profile/116716188383345261702"><img src="/img/photo_sphere_27.png"></a>
</div>
<div id="photo">
<script src="tour.js"></script>

<script>
//function scene_load(sl) {
//		var fov = Number( krpano().get("view.fov") );
//			fov += 10.0;
//			krpano().set("view.fov", fov);
//		alert("loadscene("+sl+", null, MERGE, BLEND(1));");
//		krpano.call("loadscene("+sl+", null, MERGE, BLEND(1));");
//}
</script>

<div id="pano" style="width:100%; height:100%; margin-top:4em; margin-right: auto; margin-left: auto;">
	<noscript><table style="width:100%;height:100%;"><tr style="valign:middle;"><td><div style="text-align:center;">ERROR:<br/><br/>Javascript not activated<br/><br/></div></td></tr></table></noscript>
<script>
 //var viewer = createPanoViewer({swf:"tour.swf", xml:"tour.xml", id:"pano_js", target:"pano", html5:"auto", passQueryParameters:true, bgcolor:"#FFFFFF"});
 // var krpano = document.getElementById("pano_js");
//  viewer.embed("pano");
</script>
	<script>
		var viewer = createPanoViewer({swf:"tour.swf", xml:"tour.xml", id:"pano_js", target:"pano", html5:"auto", initvars:{design:"flat_light"}, passQueryParameters:true, bgcolor:"#FFFFFF"});
		var url = String(window.location);
		var url_id = url.split("?",2);
		var scene_name =url_id[1];
		viewer.addVariable("startscene", scene_name);
	 	var krpano = document.getElementById("pano_js");
		viewer.embed("pano");
	</script>
</div>
</div>
		<p>можно позвонить:
		<br/><span><tel>+7 [906] 229-69-29</span>
		</p><br/>
		<p>или написать:<br/>
		<a id="mail-link" href="mailto:zabelinao@ya.ru?Subject=художественные фотографии"><span>zabelinao@ya.ru</span></a>
		</p>
</div>
<footer>
	<p>сюда тоже можно:</p>
	<a href="https://vk.com/alekseyzabelin"><img src="/img/v.png"></a>
</footer>
</body>
	<?php include_once("/analytics.php") ?>
</html>