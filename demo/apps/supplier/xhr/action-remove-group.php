<?php
	session_start();
	include_once "../../../config/define.php";
	include_once "../../../include/db.php";
	include_once "../../../include/oceanos.php";

	@ini_set('display_errors',DEBUG_MODE?1:0);
	date_default_timezone_set(DEFAULT_TIMEZONE);

	$dbc = new dbc;
	$dbc->Connect();
	$os = new oceanos($dbc);

	foreach($_POST['items'] as $item){
		$group = $dbc->GetRecord("bs_supplier_groups","*","id=".$item);
		$dbc->Delete("bs_supplier_groups","id=".$item);
		$os->save_log(0,$_SESSION['auth']['user_id'],"group-delete",$id,array("bs_supplier_groups" => $group));
	}

	$dbc->Close();
?>
