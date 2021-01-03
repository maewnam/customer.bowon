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


	if($dbc->HasRecord("bs_customers","name = '".$_POST['name']."'")){
		echo json_encode(array(
			'success'=>false,
			'msg'=>'Customer Name is already exist.'
		));
	}else{
		$data = array(
			'#id' => "DEFAULT",
			'name' => addslashes($_POST['name']),
			'shipping_address' => addslashes($_POST['shipping_address']),
			'billing_address' => addslashes($_POST['billing_address']),
			'gid' => $_POST['gid'],
			'contact' => $_POST['contact'],
			'email' => $_POST['email'],
			'fax' => $_POST['fax'],
			'phone' => $_POST['phone'],
			'#sales' => $_POST['sales'],
			'info_need' => addslashes($_POST['info_need']),
			'info_require' => addslashes($_POST['info_require']),
			'info_memo' => addslashes($_POST['info_memo']),
			'info_working_hours' => addslashes($_POST['info_working_hours']),
			'info_comment' => addslashes($_POST['info_comment']),
			'info_reference' => addslashes($_POST['info_reference']),
			'info_competitor' => addslashes($_POST['info_competitor']),
			'info_purchase' => addslashes($_POST['info_purchase']),
			'default_payment' => $_POST['default_payment'],
			'default_bank' => $_POST['default_bank'],
			'default_vat' => $_POST['default_vat'],
			'imgs' => '[]',
			'#created' => 'NOW()',
			'#updated' => 'NOW()'
		);

		if($dbc->Insert("bs_customers",$data)){
			$customer_id = $dbc->GetID();
			echo json_encode(array(
				'success'=>true,
				'msg'=> $customer_id
			));

			$customer = $dbc->GetRecord("bs_customers","*","id=".$customer_id);
			$os->save_log(0,$_SESSION['auth']['user_id'],"customer-add",$customer_id,array("bs_customers" => $customer));
		}else{
			echo json_encode(array(
				'success'=>false,
				'msg' => "Insert Error"
			));
		}
	}

	$dbc->Close();
?>
