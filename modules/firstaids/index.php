<?php


include '..\..\scripts\php\database\crud\Firstaids.class.php';

$client = $_POST['client'] = "mobile_android";
$action = $_POST['action'] = "query";


$firstaids = new Firstaids($action, $client);
$columns = $records = array();
$all_firstaids = $firstaids->fetch_assoc_in_firstaids($columns, $records);

var_dump($all_firstaids);

?>