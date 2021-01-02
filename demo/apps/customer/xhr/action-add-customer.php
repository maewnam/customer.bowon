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


	if($dbc->HasRecord("bs_bustomer_customers","name = '".$_POST['name']."'")){
		echo json_encode(array(
			'success'=>false,
			'msg'=>'Customer Name is already exist.'
		));
	}else{
		$data = array(
			'#id' => "DEFAULT",
			'name' => $_POST['name'],
			'#created' => 'NOW()',
			'#updated' => 'NOW()'
		);

		if($dbc->Insert("bs_bustomer_customers",$data)){
			$customer_id = $dbc->GetID();
			echo json_encode(array(
				'success'=>true,
				'msg'=> $customer_id
			));

			$customer = $dbc->GetRecord("bs_bustomer_customers","*","id=".$customer_id);
			$os->save_log(0,$_SESSION['auth']['user_id'],"customer-add",$customer_id,array("bs_bustomer_customers" => $customer));
		}else{
			echo json_encode(array(
				'success'=>false,
				'msg' => "Insert Error"
			));
		}
	}

	$dbc->Close();
?>
