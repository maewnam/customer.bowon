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

	$modal = new imodal($dbc,$os->auth);
	$modal->setModel("dialog_add_customer","Add Customer");
	$modal->initiForm("form_addcustomer");
	$modal->setExtraClass("modal-lg");
	$modal->setButton(array(
		array("close","btn-secondary","Dismiss"),
		array("action","btn-primary","Save Change","fn.app.customer.customer.add()")
	));

	$blueprint = array(
		array(
			array(
				"name" => "name",
				"caption" => "ชื่อลุกค้า",
				"flex" => 10
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
				"flex" => 5
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
								"placeholder" => "Contact"
							)
						),array(
							array(
								"name" => "phone",
								"caption" => "โทรศัพท์",
								"flex" => 4,
								"placeholder" => "Phone Number"
							),array(
								"name" => "fax",
								"caption" => "แฟร์ก",
								"flex" => 4,
								"placeholder" => "Fax Number"
							)
						),array(
							array(
								"name" => "email",
								"caption" => "อีเมลล์",
								"flex" => 10,
								"placeholder" => "E-Mail"
							)
						),array(
							array(
								"name" => "shipping_address",
								"type" => "textarea",
								"caption" => "ที่อยู่จัดส่ง",
								"placeholder" => "Address"
							)
						),array(
							array(
								"name" => "billing_address",
								"type" => "textarea",
								"caption" => "ที่อยู่ใบกำกับภาษี",
								"placeholder" => "Address"
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
								"placeholder" => "Bank Detail"
							),array(
								"type" => "combobox",
								"name" => "default_vat",
								"flex" => 2,
								"value" => "0%",
								"source" => array(
									"0%",
									"7%"
								),
								"caption" => "ภาษีมูลค่าเพิ่ม"
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
								"flex" => 6
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
								"placeholder" => ""
							),
							array(
								"name" => "info_memo",
								"caption" => "บันทึก",
								"type" => "textarea",
								"flex" => 4,
								"placeholder" => ""
							)
						),
						array(
							array(
								"name" => "info_comment",
								"caption" => "Comment",
								"type" => "textarea",
								"flex" => 4,
								"placeholder" => ""
							),
							array(
								"name" => "info_reference",
								"caption" => "แนะนำจาก",
								"type" => "textarea",
								"flex" => 4,
								"placeholder" => ""
							)
						),
						array(
							array(
								"name" => "info_require",
								"caption" => "REQUIRE ",
								"type" => "textarea",
								"flex" => 4,
								"placeholder" => ""
							),
							array(
								"name" => "info_working_hours",
								"caption" => "WORKING HOUR",
								"type" => "textarea",
								"flex" => 4,
								"placeholder" => ""
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
								)
							)
						),
						array(
							array(
								"name" => "info_purchase",
								"caption" => "Volume Buy ",
								"placeholder" => ""
							)
						),
						array(
							array(
								"name" => "info_competitor",
								"caption" => "competitor",
								"placeholder" => ""
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
