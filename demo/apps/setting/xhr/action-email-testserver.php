<?php
	session_start();
	include_once "../../../config/define.php";
	include_once "../../../include/db.php";
	include_once "../../../include/oceanos.php";
	
	//@ini_set('display_errors',DEBUG_MODE?1:0);
	@ini_set('display_errors',0);
	date_default_timezone_set(DEFAULT_TIMEZONE);
	
	$dbc = new dbc;
	$dbc->Connect();
	$os = new oceanos($dbc);
	
	$user = $dbc->GetRecord("users","*","id=".$_SESSION['auth']['user_id']);
	$setting = json_decode($user['setting'],true);
	$setting['email_test'] = false;
	
	if($_REQUEST['txtEmail']==""){
		echo json_encode(array(
			'success'=>false,
			'msg' => "Please input your email!"
		));
	}else if($_REQUEST['txtIncoming']==""){
		echo json_encode(array(
			'success'=>false,
			'msg' => "Please input your incomming server!"
		));
	}else if($_REQUEST['txtUsername']==""){
		echo json_encode(array(
			'success'=>false,
			'msg' => "Please input your username!"
		));
	}else if($_REQUEST['txtPassword']==""){
		echo json_encode(array(
			'success'=>false,
			'msg' => "Please input your password!"
		));
	}else{
		$imap_connection = "{".$_REQUEST['txtIncoming'].":".$_REQUEST['txtIncomingPort']."/imap";
		switch($_REQUEST['cbbSecurity']){
			case "none":
				$imap_connection .= "/novalidate-cert";
				break;
			case "ssl":
				$imap_connection .= "/ssl";
				break;
			
		}
		$imap_connection .= "}INBOX";
		try {
			
			if ($mbox = imap_open($imap_connection, $_REQUEST['txtUsername'], $_REQUEST['txtPassword'])){
				echo json_encode(array(
					'success'=>true,
					'msg' => "Your system is complete"
				));
				imap_close($mbox);
				$setting['email_test'] = true;
			}else{
				echo json_encode(array(
					'success'=>false,
					'msg' => imap_errors()
				));
				
			}
		} catch (Exception $e) {
			echo json_encode(array(
				'success'=>false,
				'msg' => $e->getMessage()
			));
		}

	}
	
	
	$data = array(
		"setting" => json_encode($setting),
		"#updated" => "NOW()"
	);
	$dbc->Update("users",$data,"id=".$_SESSION['auth']['user_id']);

	$dbc->Close();
?>