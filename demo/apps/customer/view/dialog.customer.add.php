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
								"caption" => "หมายเลขโทรศัพท์",
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
								"name" => "info_c",
								"caption" => "ติดต่อมาจาก",
								"placeholder" => ""
							)
						),
						array(
							array(
								"name" => "",
								"caption" => "SALE Rep",
								"placeholder" => ""
							)
						),
						array(
							array(
								"name" => "",
								"caption" => "Volume Buy ",
								"placeholder" => ""
							)
						),
						array(
							array(
								"name" => "",
								"caption" => "competitor",
								"placeholder" => ""
							)
						)
					)
				),
				array(
					"type" => "tab",
					"group" => "group_c",
					"name" => "Files",
					"items" => array(
						array(
							array(
								"name" => "",
								"caption" => "ภพ.20",
								"type" => "file"
							)
						),array(
							array(
								"name" => "",
								"caption" => "หนังสือรับรอง หน้า 1",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "หนังสือรับรอง หน้า 2",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "หนังสือรับรอง หน้า 3",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "ภพ.01.5 (vat 0)",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "ภพ.01.5 หน้า 2",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "แผนที่",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "ภพ.09 (เปลี่ยนชื่อ) น.1",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "ภพ.09 หน้า 2",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "ภพ.09 หน้า 3",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "สมาคม หน้า 1",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "สมาคม หน้า 2",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "สมาคม หน้า 3",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "หนังสือรับยกเว้น หน้า 1",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "หนังสือรับยกเว้น หน้า 2",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "เขตการค้าเสรี หน้า 1",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "เขตการค้าเสรี หน้า 2",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "เขตการค้าเสรี หน้า 3",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "อื่นๆ 1",
								"type" => "file",
							)
						),array(
							array(
								"name" => "",
								"caption" => "อื่นๆ 2",
								"type" => "file",
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
