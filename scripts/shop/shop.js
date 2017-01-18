var base_imgs = "./do_img/global/header/ships/";
var c = "'";
wr('<div class="shop">');
for (var count_img = 1; count_img < 10; count_img++) {
    wr('<img class="button style2" value="BUY" src="./do_img/global/header/ships/model' + count_img + '.png"  onclick="o_(' + c + './scripts/shop/BUY_SHIP.aspx&=' + count_img + c + ')" style="height: 50px; width: 70px"> ');
}
for (var count_img = 16; count_img < 19; count_img++) {
    wr('<img class="button style2" value="BUY" src="./do_img/global/header/ships/model' + count_img + '.png"  onclick="o_(' + c + './scripts/shop/BUY_SHIP.aspx&=' + count_img + c + ')" style="height: 50px; width: 70px"> ');
}
for (var count_img = 50; count_img < 51; count_img++) {
    wr('<img class="button style2" value="BUY" src="./do_img/global/header/ships/model' + count_img + '.png"  onclick="o_(' + c + './scripts/shop/BUY_SHIP.aspx&=' + count_img + c + ')" style="height: 50px; width: 70px"> ');
}
for (var count_img = 52; count_img < 68; count_img++) {
    wr('<img class="button style2" value="BUY" src="./do_img/global/header/ships/model' + count_img + '.png"  onclick="o_(' + c + './scripts/shop/BUY_SHIP.aspx&=' + count_img + c + ')" style="height: 50px; width: 70px"> ');
}
for (var count_img = 86; count_img < 88; count_img++) {
    wr('<img class="button style2" value="BUY" src="./do_img/global/header/ships/model' + count_img + '.png"  onclick="o_(' + c + './scripts/shop/BUY_SHIP.aspx&=' + count_img + c + ')" style="height: 50px; width: 70px"> ');
}
wr('</div>');