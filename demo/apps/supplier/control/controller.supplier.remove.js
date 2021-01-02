	fn.app.supplier.supplier.dialog_remove = function() {
		var item_selected = $("#tblSupplier").data("selected");
		$.ajax({
			url: "apps/supplier/view/dialog.supplier.remove.php",
			data: {item:item_selected},
			type: "POST",
			dataType: "html",
			success: function(html){
				$("body").append(html);
				$("#dialog_remove_supplier").on("hidden.bs.modal",function(){
					$(this).remove();
				});
				$("#dialog_remove_supplier").modal("show");
				$("#dialog_remove_supplier .btnConfirm").click(function(){
					fn.app.supplier.supplier.remove();
				});
			}
		});
	};

	fn.app.supplier.supplier.remove = function(){
		var item_selected = $("#tblSupplier").data("selected");
		$.post("apps/supplier/xhr/action-remove-supplier.php",{items:item_selected},function(response){
			$("#tblSupplier").data("selected",[]);
			$("#tblSupplier").DataTable().draw();
			$("#dialog_remove_supplier").modal("hide");
		});
	};
