<?php
require_once('../../kernel/globalConfig.php');
$Account	= Accounts::getInstance();
$Inventory	= Inventory::getInstance();
if($Account->isLoggedIn())
{
	$json										= new stdClass();
	$json->isError								= 0;
	$json->data									= new stdClass();
	$json->data->ret							= array();
	$json->data->money							= new stdClass();
	$json->data->money->uridium					= (string) number_format($Account->uridium);
	$json->data->money->credits					= (string) number_format($Account->credits);
	
	/*if(isset($_SESSION["lastInventoryExecutionTime"])) {
		$lastInventoryExecutionTime = $_SESSION["lastInventoryExecutionTime"];
		$timeElapsed				= microtime(true) - $lastInventoryExecutionTime;
		if(round($timeElapsed) < 1) {
			$json->isError			= 1;
			$json->error			= new stdClass();
			$json->error->message	= "You are going very fast.";
			echo(base64_encode(json_encode($json)));
			die();
			echo 1;
		}
	}*/
	
	if(isset($_POST['action'], $_POST['params']))
	{
		$params = json_decode(base64_decode($_POST['params']));
		switch($_POST['action'])
		{
			case 'init':
				$json->data->ret				= $Inventory->generateEquipmentJson();
				$json->data->map				= new stdClass();
				$json->data->map->types			= Inventory::$types;
				$json->data->map->lootIds		= $Inventory->getItemsMap();
				break;
			case 'move':
				$from = $params->from->target;
				$to = $params->to->target;
				if($from == "inventory" && $to == "ship") {
					$hangarID				= $params->params->hi;
					$items					= $params->from->items;
					$configID				= $params->from->configId;
					$slotset				= $params->to->slotset;
					$json->data->ret		= $Inventory->moveItemsInventoryToShip($items, $hangarID, $configID, $slotset);
				} else if($from == "inventory" && $to == "drone"){
					$items					= $params->from->items;
					$hangarID				= $params->params->hi;
					$configID				= $params->from->configId;
					$slotset				= $params->to->slotset;
					$droneID				= $params->to->droneId;
					$json->data->ret		= $Inventory->moveItemsInventoryToDrones(array($droneID => $items), $hangarID, $configID, $slotset);
				} else if($from == "ship" && $to == "inventory") {
					$hangarID				= $params->params->hi;
					$items					= $params->from->items;
					$configID				= $params->from->configId;
					$slotset				= $params->from->slotset;
					$json->data->ret		= $Inventory->moveItemsShipToInventory($items, $hangarID, $configID, $slotset);
				} else if($from == "drone" && $to == "inventory") {
					$items					= $params->from->items;
					$hangarID				= $params->params->hi;
					$droneID				= $params->from->droneId;
					$slotset				= $params->from->slotset;
					$configID				= $params->from->configId;
					$json->data->ret		= $Inventory->moveItemsDronesToInventory($droneID, $items, $hangarID, $configID, $slotset);
				}
				break;
			case 'droneEquip':
				$droneItems				= $params->from->droneItems;
				$hangarID				= $params->params->hi;
				$configID				= $params->from->configId;
				$slotset				= $params->to->slotset;
				$json->data->ret		= $Inventory->moveItemsInventoryToDrones($droneItems, $hangarID, $configID, $slotset);
				break;
			case 'changeShipModel':
				$lootID				= $params->lootId;
				$json->data->ret	= $Inventory->changeShipModel($lootID);
				break;
			case 'getHangar':
				$hangarID						= $params->params->hi;
				$json->data->ret				= $Inventory->generateEquipmentJson($hangarID);
				$json->data->map				= new stdClass();
				$json->data->map->types			= Inventory::$types;
				$json->data->map->lootIds		= $Inventory->getItemsMap();
				break;
			default:
				$json->isError				= 1;
				$json->error				= new stdClass();
				$json->error->message		= "This Feature isn't implemented yet.";
				break;
		}
	}
	echo(base64_encode(json_encode($json)));
	//$_SESSION["lastInventoryExecutionTime"]		= microtime(true);
}
?>