<%@ Page Language="C#" AutoEventWireup="true" CodeFile="loading_____.aspx.cs" Inherits="loading___" %>
<%--<?php
if ($_POST["action"] == "setClientBrowserConfig")
{
echo '{"isError":0,"data":{"ret":"{\"result\": \"success\"}"}}';
}
else if ($_POST["action"] == "getResourceAsRaw")
{
echo '{"isError":0,"data":{"ret":"<?xml version=\"1.0\" encoding=\"UTF-8\"?><language key=\"dev\"> <category name=\"\">  <item name=\"btn_label_start\"><![CDATA[START]]><\/item>  <item name=\"btn_label_loading\"><![CDATA[LOADING]]><\/item>  <item name=\"btn_label_loadstarsystem\"><![CDATA[CARREGANDO SISTEMA ESTRELAR]]><\/item>  <item name=\"hint_title_quests\"><![CDATA[MISS\u00d5ES]]><\/item>  <item name=\"hint_title_quests_long\"><![CDATA[Miss\u00f5es]]><\/item>  <item name=\"hint_subtitle_quests\"><![CDATA[Est\u00e1s \u00e0 procura de aventuras?]]><\/item>  <item name=\"hint_description_quests\"><![CDATA[Ent\u00e3o d\u00e1 uma vista de olhos na <strong>p\u00e1gina de miss\u00f5es<\/strong>! Clica no <strong>bot\u00e3o de miss\u00f5es<\/strong> no menu principal para aceitar miss\u00f5es e superar desafios.]]><\/item>  <item name=\"hint_title_group\"><![CDATA[GROUP]]><\/item>  <item name=\"hint_title_group_long\"><![CDATA[GROUP]]><\/item>  <item name=\"hint_subtitle_group\"><![CDATA[Don\'t want to battle alone?]]><\/item>  <item name=\"hint_description_group\"><![CDATA[Click the <strong>symbol containing three figures<\/strong> on the <strong>Space Map<\/strong>. There you can invite other players to join your group or see if someone else has invited you to join their group.]]><\/item>  <item name=\"hint_title_equipping\"><![CDATA[EQUIPMENT]]><\/item>  <item name=\"hint_title_equipping_long\"><![CDATA[EQUIPMENT]]><\/item>  <item name=\"hint_subtitle_equipping\"><![CDATA[Need new weapons?]]><\/item>  <item name=\"hint_description_equipping\"><![CDATA[In the Main Menu under <strong>Hangar<\/strong>, you\'ll find weapons, ammo, boosters, drones and much more!<br>Arm your ship to the hilt and be ready for any and all battles!]]><\/item>  <item name=\"hint_title_configurations\"><![CDATA[CONFIGURATIONS]]><\/item>  <item name=\"hint_title_configurations_long\"><![CDATA[CONFIGURATIONS]]><\/item>  <item name=\"hint_subtitle_configurations\"><![CDATA[Using different tactics ...?]]><\/item>  <item name=\"hint_description_configurations\"><![CDATA[... and you don\'t want to have to keep modifying your ship? Then use <strong>2 different configurations<\/strong> in your ship.<br>Equip both configurations with items in the Hangar. To change items press <strong>C<\/strong>!]]><\/item>  <item name=\"hint_title_premium\"><![CDATA[PREMIUM BENEFITS]]><\/item>  <item name=\"hint_title_premium_long\"><![CDATA[PREMIUM BENEFITS]]><\/item>  <item name=\"hint_subtitle_premium\"><![CDATA[Everyone takes advantage of benefits but you?]]><\/item>  <item name=\"hint_description_premium\"><![CDATA[Well then, what are you waiting for? <strong>Free ship repairs<\/strong> and so much more are waiting for you in our <strong>Premium Packs<\/strong>.]]><\/item>  <item name=\"hint_title_honor\"><![CDATA[HONOR]]><\/item>  <item name=\"hint_title_honor_long\"><![CDATA[HONOR]]><\/item>  <item name=\"hint_subtitle_honor\"><![CDATA[Honor to whom honor is due!]]><\/item>  <item name=\"hint_description_honor\"><![CDATA[The more honor you win in Orbit, the quicker you advance <strong>in rank<\/strong> in your company.<br>Complete missions and destroy as many enemies as possible and <strong>fame and honor<\/strong> are sure to be yours!]]><\/item>  <item name=\"hint_title_uridium\"><![CDATA[URIDIUM]]><\/item>  <item name=\"hint_title_uridium_long\"><![CDATA[URIDIUM]]><\/item>  <item name=\"hint_subtitle_uridium\"><![CDATA[Uridium is the most valuable ore in Orbit!]]><\/item>  <item name=\"hint_description_uridium\"><![CDATA[Aliens often carry it on them, so destroy them to get your hands on some! It can also be found in bonus boxes.<br>No luck finding any uridium? Then just buy some under <strong>Uridium<\/strong> in the <strong>Main Menu<\/strong>]]><\/item>  <item name=\"hint_title_titanic\"><![CDATA[Invas\u00e3o dos icebergs]]><\/item>  <item name=\"hint_title_titanic_long\"><![CDATA[100 anos o mito do Titanic]]><\/item>  <item name=\"hint_subtitle_titanic\"><![CDATA[Aten\u00e7\u00e3o: icebergs no DarkOrbit!]]><\/item>  <item name=\"hint_description_titanic\"><![CDATA[H\u00e1 100 anos que o Titanic, o maior transatl\u00e2ntico de luxo, colidiu com um iceberg e naufragou. Para relembrar este tr\u00e1gico acidente, do dia <strong> 14 ao 17 de Abril<\/strong> vamos ter um evento do Naufr\u00e1gio do Titanic.]]><\/item>  <item name=\"hint_title_fullscreen\"><![CDATA[FULLSCREEN]]><\/item>  <item name=\"hint_title_fullscreen_long\"><![CDATA[FULLSCREEN]]><\/item>  <item name=\"hint_subtitle_fullscreen\"><![CDATA[Fullscreen mode! Now in DarkOrbit.]]><\/item>  <item name=\"hint_description_fullscreen\"><![CDATA[Try out DarkOrbit, now in <strong>fullscreen mode<\/strong>.<br>Just click the fullscreen button now!]]><\/item>  <item name=\"hint_title_fullscreenfpupdate\"><![CDATA[FULLSCREEN]]><\/item>  <item name=\"hint_title_fullscreenfpupdate_long\"><![CDATA[FULLSCREEN]]><\/item>  <item name=\"hint_subtitle_fullscreenfpupdate\"><![CDATA[Queres ter mais DarkOrbit?]]><\/item>  <item name=\"hint_description_fullscreenfpupdate\"><![CDATA[<link>Actualiza o teu Flash Player<\/link> e <br>usa o <strong>modo de ecr\u00e3 inteiro<\/strong>!]]><\/item>  <item name=\"hint_title_configure_ui\"><![CDATA[UI Configuration]]><\/item>  <item name=\"hint_title_configure_ui_long\"><![CDATA[UI Configuration]]><\/item>  <item name=\"hint_subtitle_configure_ui\"><![CDATA[Configure the new UI in your own area.]]><\/item>  <item name=\"hint_description_configure_ui\"><![CDATA[You can find the <strong>Config mode<\/strong> for these options under <strong>Interface<\/strong> in the <strong>Settings<\/strong> menu.]]><\/item> <\/category><\/language>"}}';
}
else if ($_POST["action"] == "setClientBrowserConfig")
{
echo '{
    "isError": 0,
    "data": {
        "ret": "{\"result\": \"success\"}"
    }
}';
}
else if ($_POST["action"] == "getAllHints")
{
echo '{"isError":0,"data":{"ret":{"hints":[{"id":2,"ord":8,"key":"group","links":[],"visuals":[{"type":"img","src":"do_img\/global\/loadingscreen\/loadingscreen_group.png?_cv=0d44c982b57e9e2726a64373abb38a00"}]},{"id":3,"ord":7,"key":"equipping","links":[],"visuals":[{"type":"img","src":"do_img\/global\/loadingscreen\/loadingscreen_equipping.png?_cv=b972ead2bab18376b134e0fe63f9b600"}]},{"id":4,"ord":6,"key":"configurations","links":[],"visuals":[{"type":"img","src":"do_img\/global\/loadingscreen\/loadingscreen_configurations.png?_cv=ceeb37e490a4e3ee4b0ada7123766800"}]},{"id":5,"ord":5,"key":"premium","links":[],"visuals":[{"type":"img","src":"do_img\/global\/loadingscreen\/loadingscreen_premium.png?_cv=c187c04777b8edb45cc12fd0bebd5900"}]},{"id":6,"ord":4,"key":"honor","links":[],"visuals":[{"type":"img","src":"do_img\/global\/loadingscreen\/loadingscreen_honor.png?_cv=d8d41db32f184de6465e48a221a81100"}]},{"id":7,"ord":3,"key":"uridium","links":[],"visuals":[{"type":"img","src":"do_img\/global\/loadingscreen\/loadingscreen_uridium.png?_cv=f9bec0f02abd60b6ac44e6247309ac00"}]},{"id":8,"ord":2,"key":"fullscreen","links":[],"visuals":[{"type":"img","src":"do_img\/global\/loadingscreen\/loadingscreen_fullscreen.jpg?_cv=791e27ad5265d1d669ac8cc56bf5b600"}]},{"id":10,"ord":2,"key":"configure_ui","links":[],"visuals":[{"type":"img","src":"do_img\/global\/loadingscreen\/loadingscreen_config_mode.jpg?_cv=1d9e26a69b666dcc8f9f8a59faebf900"}]}]}}}';
}
else if ($_POST["action"] == "showAdvertisement")
{
echo '{"isError":0,"data":{"ret":{"img":"","url":"","active":"off"}}}';
}
else
{
echo '{
    "isError": 0,
    "data": {
        "ret": "{\"result\": \"success\"}"
    }
}';
}

?>--%>