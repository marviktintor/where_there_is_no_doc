<?php
include '..\..\scripts\php\database\crud\Firstaids.class.php';

$client = $_POST ['client'] = "mobile_android";
$action = $_POST ['action'] = "query";

$firstaids = new Firstaids ( $action, $client );
$columns = $records = array ();
$all_firstaids = $firstaids->fetch_assoc_in_firstaids ( $columns, $records );

printAllFirstAids ($client, $all_firstaids );

function printAllFirstAids($client,$all_firstaids) {
	
	if($client == POST_CLIENT_MOBILE_ANDROID){
		for($i=0;$i< count($all_firstaids);$i++ ) {
			printFirstAidJson ( $all_firstaids[$i] );
			if($i< (count($all_firstaids) - 1 )){
				echo ",";
			}
		}
		
	}
	if($client == POST_CLIENT_DESKTOP){
		foreach ( $all_firstaids as $firstaid ) {
			printFirstAid ( $firstaid );
		}
	}
	
}

function printFirstAidJson($all_firstaids){
	echo json_encode(array_map("utf8_encode",$all_firstaids));
}
function printFirstAid($firstaid) {
	echo '<div style="padding:10px;margin:10px;border:2px solid black;"><h3>' . $firstaid ["ailment"] . '</h3>';
	
	$ailment = $firstaid ['ailment'];
	if ($ailment != null) {
		//printData ( 'ailment', $ailment );
	}
	$ailment_information = $firstaid ['ailment_information'];
	if ($ailment_information != null) {
		printData ( 'ailment_information', $ailment_information );
	}
	$ailment_causes = $firstaid ['ailment_causes'];
	if ($ailment_causes != null) {
		printData ( 'ailment_causes', $ailment_causes );
	}
	$ailement_prevention = $firstaid ['ailement_prevention'];
	if ($ailement_prevention != null) {
		printData ( 'ailement_prevention', $ailement_prevention );
	}
	
	$ailment_signs = $firstaid ['ailment_signs'];
	if ($ailment_signs != null) {
		printData ( 'ailment_signs', $ailment_signs );
	}
	
	$ailment_symptoms = $firstaid ['ailment_symptoms'];
	if ($ailment_symptoms != null) {
		printData ( 'ailment_symptoms', $ailment_symptoms );
	}
	
	$ailment_cautions = $firstaid ['ailment_cautions'];
	if ($ailment_cautions != null) {
		printData ( 'ailment_cautions', $ailment_cautions );
	}
	
	$ailment_medication = $firstaid ['ailment_medication'];
	if ($ailment_medication != null) {
		printData ( 'ailment_medication', $ailment_medication );
	}
	
	$ailment_treatmeant = $firstaid ['ailment_treatmeant'];
	if ($ailment_treatmeant != null) {
		printData ( 'ailment_treatmeant', $ailment_treatmeant );
	}
	
	$ailment_treatmeant_precautions = $firstaid ['ailment_treatmeant_precautions'];
	if ($ailment_treatmeant_precautions != null) {
		printData ( 'ailment_treatmeant_precautions', $ailment_treatmeant_precautions );
	}
	
	$ailment_treatment_position = $firstaid ['ailment_treatment_position'];
	if ($ailment_treatment_position != null) {
		printData ( 'ailment_treatment_position', $ailment_treatment_position );
	}
	
	$ailment_short_notes = $firstaid ['ailment_short_notes'];
	if ($ailment_short_notes != null) {
		printData ( 'ailment_short_notes', $ailment_short_notes );
	}
	
	echo '</div>';
}
function printData($title, $message) {
	echo '<div style="width:400px;"><h4>' . $title . '</h4><hr /><p>' . $message . '</p></div>';
}
?>