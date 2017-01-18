<?php
require_once('../../dorps/globConfig.php');

$SocksWork = new SocksWork(ip, port, true);

if($Users->userIsSet())
{
	if(isset($_POST['action']))
	{
		switch($_POST['action'])
		{
			case 'init':
				require packets.'/equipment/Packet.EquipmentInitialization.php';
				
				$EquipmentInitialization = new EquipmentInitialization($Users->get("userID"));
				$SocksWork->send($EquipmentInitialization);
				$json = $EquipmentInitialization->json;
				
				if($json != null) {
					echo($json);
				} else {
					die("Something went wrong");
				}
				break;
			case 'move':
				if(isset($_POST['params']))
				{
					$params = json_decode(base64_decode($_POST['params']));
					require packets.'/equipment/Packet.MoveItems.php';
					
					$from = $params->from->target;
					$to = $params->to->target;
					if($from == "inventory" && $to == "ship")
					{
						$items = $params->from->items;
						$slotset = $params->to->slotset;
						$configId = $params->from->configId;
					} else if($from == "ship" && $to == "inventory") {
						$items = $params->from->items;
						$slotset = $params->from->slotset;
						$configId = $params->from->configId;
					}
					
					$MoveItems = new MoveItems($Users->get("userID"), $from, $to, $items, $slotset, $configId);
					$SocksWork->send($MoveItems);
					
					$data = new stdClass();
					$data->isError = 0;
					$data->data = new stdClass();
					$data->data->ret = array();
					$data->data->money = new stdClass();
					$data->data->money->uridium = "";
					$data->data->money->credits = "";
					if(count($MoveItems->exceededItems) > 0)
					{
						foreach($MoveItems->exceededItems as $item) {
							array_push($data->data->ret, $item);
						}
					}
					echo base64_encode(json_encode($data));
				}
				
				//{"from":{"items":["2"],"target":"inventory","configId":1},"action":"move","to":{"slotset":"lasers","target":"ship","configId":1},"params":null}
				break;
		}
	}
}

 /* 
} elseif (isset($_POST['action']) && $_POST['action'] == "move") {
	$Inventory->getMainInfo();
	$param = base64_decode(urldecode($_POST['params']));
	$Inventory->submitParams($param);
	echo $Inventory->editJson($_SESSION['json']);
} elseif (isset($_POST['action']) && $_POST['action'] == "droneEquip") {
	$Inventory->getMainInfo();
	$Inventory->droneEquip(TRUE);
	$param = base64_decode(urldecode($_POST['params']));
	$Inventory->submitParams($param);
	echo $Inventory->editJson($_SESSION['json']);
} elseif (isset($_POST['action']) && $_POST['action'] == "changeShipModel") {
	$Inventory->getMainInfo();
	$param = base64_decode(urldecode($_POST['params']));
	$Inventory->submitParams($param);
	echo $Inventory->changeShipModel();
} elseif (isset($_POST['action']) && $_POST['action'] == "clearConfig") {
	$Inventory->getMainInfo();
	$param = base64_decode(urldecode($_POST['params']));
	$Inventory->submitParams($param);
	echo $Inventory->wipeConfigs();
} elseif (isset($_POST['action']) && $_POST['action'] == "sell") {
	$Inventory->getMainInfo();
	$param = base64_decode(urldecode($_POST['params']));
	$Inventory->submitParams($param);
	echo $Inventory->sell();
} elseif (isset($_POST['action']) && $_POST['action'] == "sellShip") {
	$Inventory->getMainInfo();
         $param = base64_decode(urldecode($_POST['params']));
         //$Inventory->submitParams($param);
		 //echo $Inventory->sellShip();
	echo $Inventory->errorTrans("Error!");
} elseif (isset($_POST['action']) && $_POST['action'] == "sellDrone") {
	$Inventory->getMainInfo();
	$param = base64_decode(urldecode($_POST['params']));
	$Inventory->submitParams($param);
	echo $Inventory->sellDrone();
} elseif (isset($_POST['action']) && $_POST['action'] == "unlockSlot") {
	$Inventory->getMainInfo();
//          $param = base64_decode(urldecode($_POST['params']));
//          $Inventory->submitParams($param);
	echo $Inventory->errorTrans("Buying P.E.T.10 slots is NOT Available yet!");
} elseif (isset($_POST['action']) && $_POST['action'] == "renamePet") {
	$Inventory->getMainInfo();
	$param = base64_decode(urldecode($_POST['params']));
	$Inventory->submitParams($param);
	echo $Inventory->renamePet();
} else {
	$Inventory->getMainInfo();
	 echo $Inventory->errorTrans("Doesn't work yet!");
}*/
?>