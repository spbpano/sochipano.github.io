<!DOCTYPE html>
<html>
<head>
    <title>Отель Романовский</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <style>
        @-ms-viewport { width:device-width; }
        @media only screen and (min-device-width:800px) { html { overflow:hidden; } }
        html { height:100%; }
        body { height:100%; overflow:hidden; margin:0; padding:0; font-family: Helvetica, sans-serif; font-size:16px; color:#AAAAAA; background-color:#FFFFFF; }
        #pano{width:45em;height:30em;margin-left: auto; margin-right: auto;}
        #menu {
    text-align: right;
    margin-top: 1.8em;
    }
    #menu > ul{
        float: right;
    }
    #business_block{
        margin-right:auto; 
        margin-left:auto;
        width:40em;
    }
    .business_type li{
        display: inline;
        float: left;
        list-style: none;
        margin-left: 1.41em;
    }
    .business_type li:first-child{
        margin-left: 0;
    }
    .business_type li > a{
        text-decoration: none;
        color: rgb(95,162,113);
    }
    .business_type li > a:hover{
        color: rgb(31,105,50);
    }
    #wrapper {
        padding-top: 2em;
    }
    .active{
        text-decoration: underline;
    }
    #logo{
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 2em;
        width: 5em;
    }
    </style>
</head>
<body>
<div id="wrapper">
    <img id="logo" src="logo.jpg">
<script src="tour.js"></script>

<div id="pano">
        <noscript><table style="width:100%;height:100%;"><tr style="vertical-align:middle;"><td><div style="text-align:center;">ERROR:<br/><br/>Javascript not activated<br/><br/></div></td></tr></table></noscript>
        <script>
            embedpano({
                swf : "tour.swf",        // path to flash viewer (use null if no flash fallback will be requiered)
                id : "krpanoSWFObject", 
                xml : "109.xml", 
                target : "pano", 
                consolelog : true,                  // trace krpano messages also to the browser console
                passQueryParameters : true,         // pass query parameters of the url to krpano
            });
        </script>
</div>
    <div id="business_block">
        <ul class="business_type">
            <li><a id="a_104" class="active" href="#" onclick="">104</a></li>
            <li><a id="a_108" href="#" onclick="demo_load('108.txt')">108</a></li>
            <li><a id="a_109" href="#" onclick="demo_load('109.txt')">109</a></li>
            <li><a id="a_304" href="#" onclick="demo_load('304.txt')">304</a></li>
            <li><a id="a_309" href="#" onclick="demo_load('309.txt')">309</a></li>
            <li><a id="a_310" href="#" onclick="demo_load('310.txt')">310</a></li>
            <li><a id="a_311" href="#" onclick="demo_load('311.txt')">311</a></li>
            <li><a id="a_401" href="#" onclick="demo_load('401.txt')">401</a></li>
            <li><a id="a_405" href="#" onclick="demo_load('405.txt')">405</a></li>
            <li><a id="a_406" href="#" onclick="demo_load('406.txt')">406</a></li>
            <li><a id="a_408" href="#" onclick="demo_load('408.txt')">408</a></li>
            <li><a id="a_003" href="#" onclick="demo_load('003.txt')">003</a></li>
        </ul>
    </div>

    <script>
        function demo_load(xml_name)
        {   
            $("#pano").fadeOut(17);
            $("#pano").load(xml_name);
            $("#pano").fadeIn( "slow" );

        };
    </script>


</div> <!--wrapper-->
</body>
</html>
