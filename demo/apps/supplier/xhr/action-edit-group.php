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

	if($dbc->HasRecord("bs_supplier_groups","name = '".$_POST['name']."' AND id !=".$_POST['id'])){
		echo json_encode(array(
			'success'=>false,
			'msg'=>'Group Name is already exist.'
		));
	}else{
		$data = array(
			'name' => $_POST['name']
		);

		if($dbc->Update("bs_supplier_groups",$data,"id=".$_POST['id'])){
			echo json_encode(array(
				'success'=>true
			));
			$group = $dbc->GetRecord("bs_supplier_groups","*","id=".$_POST['id']);
			$os->save_log(0,$_SESSION['auth']['user_id'],"group-edit",$_POST['id'],array("bs_supplier_groups" => $group));
		}else{
			echo json_encode(array(
				'success'=>false,
				'msg' => "No Change"
			));
		}
	}

	$dbc->Close();
?>
