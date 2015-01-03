<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link   media="screen, projection" rel="stylesheet" type="text/css" href="/.css">-->
        <script src="/.js"></script>
<!-- move styles to a separated file -->
<!-- css->SASS converter: http://css2sass.heroku.com/ -->
<!--
PHPStorm settings:
==compass support
====compass executable file:
C:\Ruby200-x64\lib\ruby\gems\2.0.0\gems\compass-0.12.2\bin\compass
====config path:
C:/PHPDevServer/data/localweb/projects/[project_name]/config.rb
==file watchers
====compass scss:
Programm: C:\Ruby200-x64\bin\compass.bat
====SCSS:
Programm: C:\Ruby200-x64\bin\scss.bat -->
<style>
/*html, body{
	height:100%;
	margin:0;
	padding:0;
}
body *{
    box-sizing: border-box;
    font-family: Arial, Helvetica, Sans-serif;
}
#nav, main, #footer{
	margin:auto !important;
	max-width:90%;
	min-width:640px;
}
#container {
	box-sizing:border-box;
    height: 100%;
}
.offsetVertical10,
section{
	padding-top:10px;
	padding-bottom:10px;
}
nav{
	margin:auto -10px;
	padding:10px;
}
footer{
	background-color:#efefef;
}
#footer{
	height:60px;
	line-height:60px;
	padding:0 10px;
}
#main{
	min-height:100%;
	margin-bottom:-60px;
	padding:0 10px 60px;
}
nav{
	background-color: #eaebec;
}*/
@font-face {
    font-family: 'MyriadProCond';
    src: url('static/fonts/MyriadProCond.eot');
    src: url('static/fonts/MyriadProCond.eot') format('embedded-opentype'),
    url('static/fonts/MyriadProCond.woff2') format('woff2'),
    url('static/fonts/MyriadProCond.woff') format('woff'),
    url('static/fonts/MyriadProCond.ttf') format('truetype'),
    url('static/fonts/MyriadProCond.svg#MyriadProCond') format('svg');
}
@font-face {
    font-family: 'MyriadProIt';
    src: url('static/fonts/MyriadProIt.eot');
    src: url('static/fonts/MyriadProIt.eot') format('embedded-opentype'),
    url('static/fonts/MyriadProIt.woff2') format('woff2'),
    url('static/fonts/MyriadProIt.woff') format('woff'),
    url('static/fonts/MyriadProIt.ttf') format('truetype'),
    url('static/fonts/MyriadProIt.svg#MyriadProIt') format('svg');
}
@font-face {
    font-family: 'MyriadProBold';
    src: url('static/fonts/MyriadProBold.eot');
    src: url('static/fonts/MyriadProBold.eot') format('embedded-opentype'),
    url('static/fonts/MyriadProBold.woff2') format('woff2'),
    url('static/fonts/MyriadProBold.woff') format('woff'),
    url('static/fonts/MyriadProBold.ttf') format('truetype'),
    url('static/fonts/MyriadProBold.svg#MyriadProBold') format('svg');
}
@font-face {
    font-family: 'MyriadProRegular';
    src: url('static/fonts/MyriadProRegular.eot');
    src: url('static/fonts/MyriadProRegular.eot') format('embedded-opentype'),
    url('static/fonts/MyriadProRegular.woff2') format('woff2'),
    url('static/fonts/MyriadProRegular.woff') format('woff'),
    url('static/fonts/MyriadProRegular.ttf') format('truetype'),
    url('static/fonts/MyriadProRegular.svg#MyriadProRegular') format('svg');
}
    h1{
        font-family: MyriadProRegular;
    }
</style>
    </head>
    <body>
    	<div id="container">
        	<div id="main">
            	<nav>
                	<div id="nav">Navigation</div>
                </nav>
                <main>
                	<section>
                        <h1>Hello again!</h1>
                        <?php
                        echo "MAIN_BLOCK: ".MAIN_BLOCK."<hr>";
                        echo "root: " . $_SERVER['DOCUMENT_ROOT'] . "<hr>";
                        echo "dirname: " . dirname(__FILE__) . "<hr>";
                        echo "dir: " . __DIR__ . "<hr>";
                        var_dump('<pre>',$_SERVER,'</pre>');
                        //echo "root: " . $_SERVER	. "<hr>";
                        var_dump('<pre>',parse_url($_SERVER['REQUEST_URI']),'</pre>');
                        ?>
                    </section>
                </main>
            </div>
            <footer>
            	<div id="footer">Footer</div>
            </footer>
        </div>
    </body>
</html>