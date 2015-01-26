<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html, body{
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
<?php ob_start();?>
                        <p><a title="Парикмахерский зал" href="#">Парикмахерский зал</a><a title="Уход за руками и ногами" href="#">Уход за руками и ногами</a><a title="Уход за лицом" href="#">Уход за лицом</a><a title="Уход за телом" href="#">Уход за телом</a><a title="Лазерная эпиляция" href="#">Лазерная эпиляция</a><a title="Инъекционная косметология" href="#">Инъекционная косметология</a><a title="Аппаратная косметология" href="#">Аппаратная косметология</a></p>
<?php   $main_menu=ob_get_contents();
        ob_end_clean();
        $main_menu=preg_replace('/">/i','"><div><div>', $main_menu);
        //$main_menu=preg_replace('/<\/a>/i','<div><div></a>', $main_menu);
        //$main_menu=str_replace('">','"><div><div>', $main_menu);
        $main_menu=str_replace('</a>','</div></div></a>', $main_menu);
        echo $main_menu;
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