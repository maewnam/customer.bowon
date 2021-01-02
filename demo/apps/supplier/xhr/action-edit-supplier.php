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

	if($dbc->HasRecord("suppliers","name = '".$_POST['name']."'")){
		echo json_encode(array(
			'success'=>false,
			'msg'=>'Supplier Name is already exist.'
		));
	}else{
		$data = array(
			'name' => $_POST['txtName'],
			'#updated' => 'NOW()',
		);

		if($dbc->Update("suppliers",$data,"id=".$_POST['txtID'])){
			echo json_encode(array(
				'success'=>true
			));
			$supplier = $dbc->GetRecord("suppliers","*","id=".$_POST['txtID']);
			$os->save_log(0,$_SESSION['auth']['user_id'],"supplier-edit",$_POST['txtID'],array("suppliers" => $supplier));
		}else{
			echo json_encode(array(
				'success'=>false,
				'msg' => "No Change"
			));
		}
	}

	$dbc->Close();
?>
