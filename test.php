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