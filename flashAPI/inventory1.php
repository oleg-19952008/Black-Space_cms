<?php
require_once('../../dorps/globConfig.php');

$MySQLi = new mysqli(mysql_host, username, password, database);

require_once root.'class/user/Class.Users.php';
$Users = new Users();
require_once root.'class/user/Class.Ammunition.php';
$Ammo = new Ammunition();
require_once root.'sockets/Class.Emulator.Updater.php';
$EmulatorUpdater = new EmulatorUpdater();

$Users->checkSession();
$Ammo->setAmmo();

$action = $_POST["action"];

$uridium = $Users->DataRow['uridium'];
$credits = $Users->DataRow['credits'];
$json = array('isError' => 0, 'data' => array());
$json['data']['ret'] = array();
$json['data']['money']['uridium'] = number_format($uridium, 0, ".", ".");
$json['data']['money']['credits'] = number_format($credits, 0, ".", ".");
	
if ($action == "init") {
	echo(base64_encode(json_encode($Users->Equipment->equipment)));
} else if ($action == "move") 
{
	$post = $_POST["params"];
	$params = base64_decode($post);
	$result = json_decode($params);

	$from = $result->from->target;
	$to = $result->to->target;
	if($from == "ship" && $to == "inventory")
	{
		$Users->Equipment->moveShipToInventory($result);
	}
	else if($from == "inventory" && $to == "ship")
	{
		$Users->Equipment->moveInventoryToShip($result);
	}
	else if($from == "inventory" && $to == "drone")
	{
		$Users->Equipment->moveInventoryToDrone($result);
	}
	else if($from == "drone" && $to == "inventory")
	{
		$Users->Equipment->moveDroneToInventory($result);
	}
	$EmulatorUpdater->startConnection(ip, port);
	if($EmulatorUpdater->socket)
	{
		if($EmulatorUpdater->sendUpdateEquipment($Users->DataRow['userID'], json_encode($Users->Equipment->equipment)) == "true") 
		{
			$Users->Equipment->saveequipment();
			echo base64_encode(json_encode($json));
		} else {
			echo base64_encode('{"isError":1,"data":{"ret":0,"money":{"uridium":"650","credits":"4.735.316"}},"error":{"message":"N\u00e3o \u00e9 poss\u00edvel colocar o equipamento! Vai primeiro at\u00e9 \u00e0 tua esta\u00e7\u00e3o espacial."}}');
		}
		$EmulatorUpdater->closeConnection();
	}
	else
	{
		$Users->Equipment->saveequipment();
		echo base64_encode(json_encode($json));
	}
}
else if ($action == "droneEquip")
{
	$post = $_POST["params"];
	$params = base64_decode($post);
	$result = json_decode($params);
	$Users->Equipment->droneEquip($result);
	
	$EmulatorUpdater->startConnection(ip, port);
	if($EmulatorUpdater->socket)
	{
		if($EmulatorUpdater->sendUpdateEquipment($Users->DataRow['userID'], base64_encode(json_encode($Users->Equipment->equipment))) == "true")
		{
			$Users->Equipment->saveequipment();
			echo base64_encode(json_encode($json));
		}
		else
		{
			echo base64_encode('{"isError":1,"data":{"ret":0,"money":{"uridium":"650","credits":"4.735.316"}},"error":{"message":"N\u00e3o \u00e9 poss\u00edvel colocar o equipamento! Vai primeiro at\u00e9 \u00e0 tua esta\u00e7\u00e3o espacial."}}');
		}
		$EmulatorUpdater->closeConnection();
	}
	else
	{
		$Users->Equipment->saveequipment();
		echo base64_encode(json_encode($json));
	}
}
else if ($action == "clearConfig")
{
	$post = $_POST["params"];
	$params = base64_decode($post);
	$result = json_decode($params);

	$Users->Equipment->clearConfig($result->configID);
	$Users->Equipment->saveequipment();
	$json = array('isError' => 0, 'data' => array());
	$json['data']['ret'] = true;
	$json['data']['money']['uridium'] = number_format($uridium, 0, ".", ".");
	$json['data']['money']['credits'] = number_format($credits, 0, ".", ".");
	echo base64_encode(json_encode($json));
}
else if ($action == "changeShipModel")
{
	$post = $_POST["params"];
	$params = base64_decode($post);
	$result = json_decode($params);
	
	$Users->Equipment->changeShipModel($result->lootId);
	$Users->Equipment->saveequipment();
	$json = array('isError' => 0, 'data' => array());
	//$json['data']['deletedItems'] = array();
	$json['data']['ret'] = 1;
	$json['data']['money']['uridium'] = number_format($uridium, 0, ".", ".");
	$json['data']['money']['credits'] = number_format($credits, 0, ".", ".");
	echo base64_encode(json_encode($json));
}
else if ($action == "sell")
{
	$post = $_POST["params"];
	$params = base64_decode($post);
	$result = json_decode($params);
	$itemId = $result->itemId;
	$quantity = $result->quantity;
	
	$Users->Equipment->sellItemId($itemId, $quantity);
	$Users->Equipment->saveequipment();
	$json = array('isError' => 0, 'data' => array());
	$json['data']['ret'] = 1;
	$json['data']['money']['uridium'] = $uridium;
	$json['data']['money']['credits'] = $credits;
	$json['data']['update']['deleted'] = array();
	$json['data']['update']['deleted'][0] = $itemId;
	echo base64_encode(json_encode($json));
}
?>