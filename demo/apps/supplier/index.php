<?php
	session_start();
	@ini_set('display_errors',1);
	include "../../config/define.php";
	include "../../include/db.php";
	include "../../include/oceanos.php";
	include "../../include/iface.php";

	$dbc = new dbc;
	$dbc->Connect();
	$os = new oceanos($dbc);
	$panel = new ipanel($dbc,$os->auth);

	$panel->setApp("supplier","Supplier");
	$panel->setView(isset($_GET['view'])?$_GET['view']:'user');

	$panel->setMeta(array(
		array("group","Group","far fa-user"),
		array("supplier","Supplier","far fa-user"),
	));
?>
<script src="apps/supplier/include/interface.js"></script>
<?php
	$panel->PageBreadcrumb();
?>
<div class="row">
	<div class="col-xl-12">
	<?php
		$panel->EchoInterface();
	?>
	</div>
</div>
<script>
	loadScript("js/datagrid/datatables/datatables.bundle.js", function(){
	loadScript("js/datagrid/datatables/datatables.export.js", function(){
	loadScript("js/dependency/moment/moment.js",function(){
	<?php
		switch($panel->getView()){
			case "group":
				include "control/controller.group.view.js";
				if($os->allow("supplier","remove"))include "control/controller.group.remove.js";
				if($os->allow("supplier","add"))include "control/controller.group.add.js";
				if($os->allow("supplier","edit"))include "control/controller.group.edit.js";
				break;
			case "supplier":
				include "control/controller.supplier.view.js";
				if($os->allow("supplier","remove"))include "control/controller.supplier.remove.js";
				if($os->allow("supplier","add"))include "control/controller.supplier.add.js";
				if($os->allow("supplier","edit"))include "control/controller.supplier.edit.js";
				break;
}
	?>
	});});});
</script>
