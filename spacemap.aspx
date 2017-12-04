<%@ Page Title="Home Page" Language="C#"  AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %><html lang="ru" xmlns="http://www.w3.org/1999/xhtml">   <%        %>
<head>
    <script src="./scripts/lib.js"></script><%--<script src="js/flash/client.js"></script>--%> 
    <meta charset="utf-8" />
    <title>Space | Black SPACE</title>
</head>
<body>
    <script type="text/javascript">container();
main();
wr('  <link rel="stylesheet" type="text/css" href="css/cont.css">');
function main() {
var old_client = false;
if(old_client == false)
{// flashembed("container", {"src": "spacemap/main.swf","version": [11,0],"expressInstall": "swf_global/expressInstall.swf","width": <?php echo $width; ?>,"height": <?php echo $height; ?>,"wmode": "direct","bgcolor": "#000000","id": "main"}, {"lang": "en","userID": <?php echo $Users->DataRow['playerID']; ?>,"factionID": "<?php echo ($Users->DataRow['factionId'] === '1') ? 'MMO' : (($Users->DataRow['factionId'] === '2') ? 'EIC' : 'VRU'); ?>","sessionID": "<?php echo $sessionId; ?>","basePath": "spacemap","pid": 563,"resolutionID": <?php echo $res; ?>,"boardLink": "<?php echo HOST; ?>","helpLink": "<?php echo HOST; ?>","loadingClaim": "LOADING...","chatHost": "<?php echo HOST; ?>","cdn": "","useHash": 1,"host": "<?php echo HOST; ?>","gameXmlHash": "060b9c86992a12a6d343395f64852876","resourcesXmlHash": "4f5d6e23ebb06278f110ba358dde28ec","profileXmlHash": "18287bc38698431e80f7cca05e6df2ca","autoStartEnabled": 1,"mapID": 1,"supportedResolutions": "Array","logConfig": "0,300,4,5","instantLogEnabled": 1,"doubleClickAttackEnabled": 1,"allowChat": 1});
	
    jQuery(document).ready(function() {
        flashembed("container", {
            "src": "spacemap/main.1.0.2 mod screen_with stars.swf",
            "width": "100%",
            "height": "100%",
            "wmode": "direct",
            "bgcolor": "#000000",
            "id": "main",
           // "allowfullscreen": "true",
           // "allowFullScreenInteractive": "true"
        },
        {
            "lang": "en",
            "userID": "20001",
            "factionID": "1",
            "sessionID": "153195889970247220",
            "basePath": "spacemap",    // "basePath": "spacemap",
            "pid": 563,
            "resolutionID": "0",
            "boardLink": "%2FGameAPI.php%3Faction%3Dportal.redirectToBoard",
            "helpLink": "http%3A%2F%2Fen.bigpoint.com%2Fdarkorbit%2Fboard%2Fcategories%2Fajuda.640%2F",
            "loadingClaim": "Загрузка Black SPACE...",
            "chatHost": "127.0.0.1",
          "cdn": "",
 
            "useHash": "0",
            "host": "127.0.0.1",
            //для 6.3.1 не нужно ее    "browser": "Chrome",
         //   "fullscreen": "1",
            //для 6.3.1 не нужно ее      "errortracking": "0",
            "gameXmlHash": "8308af173e550899b2c22cc7a7334f00",
            "resourcesXmlHash": "2bb6860545fe461c6607203218288a00",
            "profileXmlHash": "e6c5f6627f9a7b9bb7bf5471e08a1500",
            "loadingscreenHash": "ddc84a3e9bd358b9af65859114631900",
            //    "gameclientHash": "1225d83c27264d3e341ce677d4d57200",
            "gameclientPath": "spacemap",
          //  "loadingscreenAssetsXmlHash": "1c540d399333ca7cc1755735a6082100",
            //"showAdvertisingHint": "",
            // "gameclientAllowedInitDelay": "10",
            //для 6.3.1 не нужно ее  		"eventStreamContext": "eyJwaWQiOjM5MCwidWlkIjoxNjAwNTI5NjUsInRpZCI6IjMyYjY5Y2FhYzg3MWU1MmVhNTg4ZmIyZjA4NjY0ZmIzIiwiaWlkIjoiN2VjYzhjYjQxZTg5M2EwMTE1YzQ5NzhhNTM5OWY5ODMiLCJzaWQiOiI3YjA2MmIxNTQ2OGE1ZWNlMmU2NTAzMzI5ODNkNDYwOCIsImN0aW1lIjoxNDAzNTM0NDQ5NjE3fQ",
            //для 6.3.1 не нужно ее   "useDeviceFonts": "0",  
            "autoStartEnabled": "1",
            "mapID": "1", 
			"supportedResolutions": "Array",
               "logConfig": "0,300,4,5",
                    //    "instantLogEnabled": 1,
                      //  "hpNumbersOnMapEnabled": 1,
						"allowChat": "1"
        });
    })
}else{
	jQuery(document).ready(function()
	{
    flashembed("container", {
        "src": "swf_global/spacemap.swf",
      //  "version": [10, 0],
       // "expressInstall": "<?php echo(web); ?>swf_global/expressInstall.swf",
 "width": "100%",
 "height": "100%",
        "wmode": "window",
        "id": "DFlash"
    },{
        "lang": "en",
        "userID": "22",
        "factionID": "3",
        "g_userName": "SeVeN",
        "mainMovie": "",        //LEAVE IT EMPTY
        "cdn": "http://127.0.0.1/",        //CDN FOR REDIRECT
        "allowedScriptAccess": "always",
        "allowNetworking": "true",
        "sid": "MY_SID",
        "mapID": "1"});
    })
    }
		   /* "loadingClaim": "Загрузка Black SPACE...",
                        "chatHost": ip_host,
                        "cdn": "",
                        "useHash": 1,
                        "host": ip_host,
                        "gameXmlHash": "060b9c86992a12a6d343395f64852876",
                        "resourcesXmlHash": "4f5d6e23ebb06278f110ba358dde28ec",
                        "profileXmlHash": "18287bc38698431e80f7cca05e6df2ca",
                        "autoStartEnabled": 1,
                        "mapID": 1,
                        "supportedResolutions": "Array",
                        "logConfig": "0,300,4,5",
                        "instantLogEnabled": 1,
                        "hpNumbersOnMapEnabled": 1,
*/
}

</script>
</body>
</html>