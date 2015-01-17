<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
main{
    background: orange;
    margin: auto;
    overflow: hidden;
    /*width: 70%;*/
}
#content{
    padding-left: 300px !important;
}
#left-side, #content, #right-side{
    box-sizing: border-box;
    padding: 20px;
}
#left-side, #right-side{
    background-color: palegreen;
    float: left;
}
#left-side{
    width: 280px;
    /*transform:translateX(-100%);*/
}
/*#right-side{
    transform:translateX(100%);
}*/
</style>
    </head>
    <body>
    	<div id="container">
        	<div id="main">
            	<nav>
                	<div id="nav">Navigation</div>
                </nav>
                <main>
                    <div id="left-side">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</div>
                	<div id="content">
                        <h1>Hello again!</h1>
                        <?php
                        /*echo "MAIN_BLOCK: ".MAIN_BLOCK."<hr>";
                        echo "root: " . $_SERVER['DOCUMENT_ROOT'] . "<hr>";
                        echo "dirname: " . dirname(__FILE__) . "<hr>";
                        echo "dir: " . __DIR__ . "<hr>";
                        var_dump('<pre>',$_SERVER,'</pre>');
                        //echo "root: " . $_SERVER	. "<hr>";
                        var_dump('<pre>',parse_url($_SERVER['REQUEST_URI']),'</pre>');*/
                        ?>
                        <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien.</p>
                        <p>Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nullam accumsan lorem in dui. Cras ultricies mi eu turpis hendrerit fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nam pretium turpis et arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed aliquam ultrices mauris. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Praesent adipiscing. Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero. Cras id dui. Aenean ut eros et nisl sagittis vestibulum. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Sed lectus. Donec mollis hendrerit risus. Phasellus nec sem in justo pellentesque facilisis. Etiam imperdiet imperdiet orci. Nunc nec neque. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Maecenas malesuada. Praesent congue erat at massa. Sed cursus turpis vitae tortor. Donec posuere vulputate arcu. Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac"
                            div#right-side="Right side</p>
                    </div>
                    <!--<div id="right-side">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</div>-->
                </main>
            </div>
            <footer>
            	<div id="footer">Footer</div>
            </footer>
        </div>
    </body>
</html>