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
	
	$panel->setApp("database","Database");
	$panel->setView(isset($_GET['view'])?$_GET['view']:'country');
	
	$panel->setMeta(array(
		array('country'		,"Country",		'fa fa-lg fa-globe'),
		array('city'		,"City",		'fa fa-lg fa-building'),
		array('district'	,"District",	'fa fa-lg fa-train'),
		array('subdistrict'	,"Subdistrict",	'fa fa-lg fa-road')
	));
	
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
	var plugins = [
			'apps/database/include/interface.js',
			'plugins/datatables/dataTables.bootstrap4.min.css',
			'plugins/datatables/responsive.bootstrap4.min.css',
			'plugins/datatables/jquery.dataTables.bootstrap4.responsive.min.js',
			'plugins/select2/css/select2.min.css',
			'plugins/select2/js/select2.min.js',
			'plugins/moment/moment.min.js',
			'iface/startup.php'
	];
	
	App.loadPlugins(plugins, null).then(() => {
		App.checkAll()
		<?php
		switch($panel->getView()){
			case "country":
				include "control/controller.country.view.js";
				if($os->allow("database","add"))include "control/controller.country.add.js";
				if($os->allow("database","edit"))include "control/controller.country.edit.js";
				if($os->allow("database","remove"))include "control/controller.country.remove.js";
				break;
			case "city":
				include "control/controller.city.view.js";
				if($os->allow("database","add"))include "control/controller.city.add.js";
				if($os->allow("database","edit"))include "control/controller.city.edit.js";
				if($os->allow("database","remove"))include "control/controller.city.remove.js";
				break;
			case "district":
				include "control/controller.district.view.js";
				if($os->allow("database","add"))include "control/controller.district.add.js";
				if($os->allow("database","edit"))include "control/controller.district.edit.js";
				if($os->allow("database","remove"))include "control/controller.district.remove.js";
				break;
			case "subdistrict":
				include "control/controller.subdistrict.view.js";
				if($os->allow("database","add"))include "control/controller.subdistrict.add.js";
				if($os->allow("database","edit"))include "control/controller.subdistrict.edit.js";
				if($os->allow("database","remove"))include "control/controller.subdistrict.remove.js";
				break;
		}
		?>
	}).then(() => App.stopLoading())
</script>
