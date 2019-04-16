<!DOCTYPE html>
<html>
<head>
	<?php
		include 'head.php';
	?>
</head>
<body>
	<!--<img src="logo.png">-->
<div id="pano">
	<noscript><table style="width:720px;height:480px"><tr style="valign:middle;"><td><div style="text-align:center;">ОЙ!:<br/><br/>включите, пожалуйста Javascript<br/><br/></div></td></tr></table></noscript>
	<script>
		embedpano({swf:"tour.swf", xml:"tour.xml", target:"pano", html5:"auto", passQueryParameters:true, bgcolor:"#FEFEFE"});
	</script>
<?php
	//<script>
	//	var viewer = createPanoViewer({swf:"[SWF]", xml:"[XML]", id:"pano_js", target:"pano", html5:"[HTML5]", passQueryParameters:true, bgcolor:"#FFFFFF"});
	//	var url = String(window.location);
	//	var url_id = url.split("?",2);
	//	var scene_name =url_id[1];
	//	viewer.addVariable("startscene", scene_name);
	//	viewer.embed("pano");
	//</script>
ECHO <<<EMB
	<!-- index -->
EMB;
?>
</div><!-- END pano-->

</html>