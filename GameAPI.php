<?php
if(isset($_GET['action']) && !empty($_GET['action'])){
if($_GET['action']=="portal.redirectToBoard"){
header('Location: http://elitepvpers.com/forum/darkorbit');
exit;
}else{
exit;
}


}
?>
