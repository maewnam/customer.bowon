<?php
	session_start();
	include_once "../../../config/define.php";
	@ini_set('display_errors',DEBUG_MODE?1:0);
	date_default_timezone_set(DEFAULT_TIMEZONE);

	include_once "../../../include/db.php";
	include_once "../../../include/oceanos.php";
	include_once "../../../include/iface.php";

	$dbc = new dbc;
	$dbc->Connect();

	$os = new oceanos($dbc);
	$customer = $dbc->GetRecord("bs_customers","*","id=".$_POST['id']);

	$modal = new imodal($dbc,$os->auth);

	$modal->setModel("dialog_edit_customer","Edit Customer");
	$modal->initiForm("form_editcustomer");
	$modal->setExtraClass("modal-lg");
	$modal->setButton(array(
		array("close","btn-secondary","Dismiss"),
		array("action","btn-default","Save Change","fn.app.customer.customer.edit()")
	));
	$modal->SetVariable(array(
		array("id",$customer['id'])
	));

	
	$blueprint = array(
		array(
			array(
				"name" => "name",
				"caption" => "ชื่อลุกค้า",
				"flex" => 10,
				"value" => $customer['name']
			)
		),array(
			
			array(
				"type" => "comboboxdb",
				"name" => "gid",
				"caption" => "Group",
				"source" => array(
					"table" => "bs_customer_groups",
					"name" => "name",
					"value" => "id"
				),
				"flex" => 5,
				"value" => $customer['gid']
			)
		),
		array(
			"type" => "tablist",
			"group" => "customer_tablist",
			"items" => array(
				array(
					"type" => "tab",
					"group" => "group_a",
					"name" => "Contact",
					"items" => array(
						array(
							array(
								"name" => "contact",
								"caption" => "ชื่อผู้ติดต่อ",
								"flex" => 10,
								"placeholder" => "Contact",
								"value" => $customer['contact']
							)
						),array(
							array(
								"name" => "phone",
								"caption" => "โทรศัพท์",
								"flex" => 4,
								"placeholder" => "Phone Number",
								"value" => $customer['phone']
							),array(
								"name" => "fax",
								"caption" => "แฟร์ก",
								"flex" => 4,
								"placeholder" => "Fax Number",
								"value" => $customer['fax']
							)
						),array(
							array(
								"name" => "email",
								"caption" => "อีเมลล์",
								"flex" => 10,
								"placeholder" => "E-Mail",
								"value" => $customer['email']
							)
						),array(
							array(
								"name" => "shipping_address",
								"type" => "textarea",
								"caption" => "ที่อยู่จัดส่ง",
								"placeholder" => "Address",
								"value" => $customer['shipping_address']
							)
						),array(
							array(
								"name" => "billing_address",
								"type" => "textarea",
								"caption" => "ที่อยู่ใบกำกับภาษี",
								"placeholder" => "Address",
								"value" => $customer['billing_address']
							)
						),array(
							array(
								"type" => "comboboxdatabank",
								"source" => "db_bank",
								"name" => "default_bank",
								"caption" => "ธนาคาร",
								"default" => array(
									"value" => "none",
									"name" => "ไม่ระบุ"
								),
								"flex" => 6,
								"placeholder" => "Bank Detail",
								"value" => $customer['default_bank']
							),array(
								"type" => "combobox",
								"name" => "default_vat",
								"flex" => 2,
								"value" => "0%",
								"source" => array(
									"0%",
									"7%"
								),
								"caption" => "ภาษีมูลค่าเพิ่ม",
								"value" => $customer['default_vat']
							)
						),array(
							array(
								"type" => "comboboxdatabank",
								"source" => "db_payment",
								"name" => "default_payment",
								"caption" => "การจ่ายเงิน",
								"default" => array(
									"value" => "none",
									"name" => "ไม่ระบุ"
								),
								"flex" => 6,
								"value" => $customer['default_payment']
							)
						)
					)
				),
				array(
					"type" => "tab",
					"group" => "group_b",
					"name" => "รายละเอียด",
					"items" => array(
						
						array(
							array(
								"name" => "info_need",
								"caption" => "Need",
								"type" => "textarea",
								"flex" => 4,
								"placeholder" => "",
								"value" => $customer['info_need']
							),
							array(
								"name" => "info_memo",
								"caption" => "บันทึก",
								"type" => "textarea",
								"flex" => 4,
								"placeholder" => "",
								"value" => $customer['info_memo']
							)
						),
						array(
							array(
								"name" => "info_comment",
								"caption" => "Comment",
								"type" => "textarea",
								"flex" => 4,
								"placeholder" => "",
								"value" => $customer['info_comment']
							),
							array(
								"name" => "info_reference",
								"caption" => "แนะนำจาก",
								"type" => "textarea",
								"flex" => 4,
								"placeholder" => "",
								"value" => $customer['info_reference']
							)
						),
						array(
							array(
								"name" => "info_require",
								"caption" => "REQUIRE ",
								"type" => "textarea",
								"flex" => 4,
								"placeholder" => "",
								"value" => $customer['info_require']
							),
							array(
								"name" => "info_working_hours",
								"caption" => "WORKING HOUR",
								"type" => "textarea",
								"flex" => 4,
								"placeholder" => "",
								"value" => $customer['info_working_hours']
							)
						),
						array(
							array(
								"type" => "comboboxdb",
								"name" => "sales",
								"caption" => "Sale",
								"source" => array(
									"table" => "bs_employees",
									"name" => "fullname",
									"value" => "id"
								),
								"default" => array(
									"value" => "NULL",
									"name" => "Not Selected"
								),
								"value" => $customer['sales']
							)
						),
						array(
							array(
								"name" => "info_purchase",
								"caption" => "Volume Buy ",
								"placeholder" => "",
								"value" => $customer['info_purchase']
							)
						),
						array(
							array(
								"name" => "info_competitor",
								"caption" => "competitor",
								"placeholder" => "",
								"value" => $customer['info_competitor']
							)
						)
					)
				)
			)
		)
	);

	$modal->SetBlueprint($blueprint);
	$modal->EchoInterface();
	$dbc->Close();
?>
