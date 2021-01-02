$("#tblSupplier").data( "selected", [] );
$("#tblSupplier").DataTable({
	responsive: true,
	dom: fn.ui.datatable.dom.default,
	buttons: [{
		text: "Add",
		className: "btn-primary btn-sm",
		action : function(){
			fn.app.supplier.supplier.dialog_add()
		}
	},{
		text: "Remove",
		className: "btn-danger btn-sm",
		action : function(){
			fn.app.supplier.supplier.dialog_remove()
		}
	}],
	"bStateSave": true,
	"autoWidth" : true,
	"processing": true,
	"serverSide": true,
	"ajax": "apps/supplier/store/store-supplier.php",	
	"aoColumns": [
		{"bSortable":false		,"data":"id"		,"sClass":"hidden-xs text-center",	"sWidth": "20px"  },
		{"bSort":true			,"data":"name"	},
		{"bSortable":false		,"data":"id"		,"sClass":"text-center" , "sWidth": "80px"  }
	],"order": [[ 1, "desc" ]],
	"createdRow": function ( row, data, index ) {
		var selected = false,checked = "",s = '';
		if ( $.inArray(data.DT_RowId, $("#tblSupplier").data( "selected")) !== -1 ) {
			$(row).addClass("selected");
			selected = true;
		}
		$("td", row).eq(0).html(fn.ui.checkbox("chk_supplier",data[0],selected));
		s = '';
		s += fn.ui.button("btn btn-xs btn-default","fal fa-pencil","fn.app.supplier.supplier.dialog_edit("+data[0]+")");
		$("td", row).eq(2).html(s);
	}
});
fn.ui.datatable.selectable("#tblSupplier","chk_supplier");
