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
function log(text) {
    console.log(text);
}
function equip() {
    var scripts_css = '<script src="scripts/equipment/equipment.js"></script> <script src="scripts/ips.js"></script>';
    wr(scripts_css);
    log("Scripts for equipment loaded...");
}
 
function body() {
  
  
    var ym = '<script src="scripts/YmFzZTY0.js"></script><script type="text/javascript" src="scripts/t.t"></script>';
    var s = ' <script src="js/toolbox.flashembed.min.js"></script>  <script src="js/jquery-1.4.4.js"></script> ';
    var scripts_ = ' <script src="scripts/ips.js"></script>';
    wr(s + scripts_ + ym);      
    wr(' <style type="text/css">  html { height: 100%; }   body {    margin: 0; /* Убираем отступы */    height: 100%; /* Высота страницы */    /* Параметры фона */ background-size: cover; /* Фон занимает всю доступную площадь */ } </style>')
    log("Растянул картинку");
 
}
body();
function container() {
    wr('<div id="container"> </div>');
    log("Container active");
}
function cont_logo() {
    wr('<div  class="logo"> <br><br><br> <br><div id="container"> </div> </div>');
    log("container active");
}

 