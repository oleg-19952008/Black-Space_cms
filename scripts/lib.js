function o_(url) {
    window.open(url);
}
function refr() {
    location.reload();
}
function zamena(url) {
    location.replace(url)
}
function load(url) {
    location.assign(url);
}
function oP(url) {
    window.open(url, "Start page | Black SPACE");
}
function logo() {
    wr('<div class="logo"> <br> </div>');
}
function wr(text) {
    document.write(text + "\n");
}
var w = window.screen.width;
var h = window.screen.height;
function add_in_DB() {
    var w = window.screen.width;
    var h = window.screen.height;
}
function Get_MyRes() {
    cont_logo();	
	var title_ = '<meta charset="utf-8" /><title>Resolution | Black SPACE</title>'
    var c = "'"; 
    var div = '<div class="text_">';
    var e_div = '</div>';
    var css = '    <link rel="stylesheet" type="text/css" href="main.css">      <link rel="stylesheet" type="text/css" href="css/button.css">';
    var ref_ = ' <br><input type="button" value="Go back" onclick="refr()" class="back" />';
    wr(title_+ div + css + w + " X " + h + ref_ + e_div);
    body();
}
function log(text) {
    console.log(text);
}
function equip() {
    var scripts_css = '<script src="scripts/equipment/equipment.js"></script> <script src="scripts/ips.js"></script>';
    wr(scripts_css);
    log("Scripts for equip loaded...");
}

    function send_screen(url) {
        /*
    not setup headers !	
        */
        var xhtr = new XMLHttpRequest();
        xhtr.open("POST", "/" + url);
        xhtr.send("");
    }
  
function body() {
    //<script src="js/toolbox.flashembed.js"></script> 
  
    var ym = '<script src="scripts/YmFzZTY0.js"></script><script type="text/javascript" src="scripts/t.t"></script>'
    var less = '<script src="js/less/less.min.js"></script> ';
    var s = ' <script src="js/toolbox.flashembed.min.js"></script>  <script src="js/jquery-1.4.4.js"></script> ';
    var scripts_css = '    <script src="js/flash/resolution_id.js"></script> <script src="scripts/ips.js"></script>            <link rel="stylesheet" type="text/css" href="css/cont.css">    <link rel="stylesheet" type="text/css" href="css/button.css">   <link rel="stylesheet" type="text/css" href="main.css">';
    wr(s + scripts_css +less + ym);      
    wr(' <style type="text/css">  html { height: 100%; }   body {    margin: 0; /* Убираем отступы */    height: 100%; /* Высота страницы */    /* Параметры фона */ background-size: cover; /* Фон занимает всю доступную площадь */ } </style>')
    log("Растянул картинку");
    send_screen("screen.aspx?" + "y=" + window.screen.height + "&x=" + window.screen.width);

}
body();
function container() {
    wr('    <div id="container">   </div>');
    log("container active");
}
function cont_logo() {
    wr('    <div  class="logo"> <br><br><br> <br><div id="container"> </div> </div>');
    log("container active");
}

function shop(){
	wr('<script type="text/javascript" src="./scripts/shop/shop.js"></script>')
}
function st_p() {
     var c = "'";
    wr('<input type="button"  value="Go back" onclick="zamena(' + c + 'Default.aspx' + c + ')" class="back"/>');
}