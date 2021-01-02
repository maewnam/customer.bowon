	fn.app.supplier.group.dialog_add = function() {
		$.ajax({
			url: "apps/supplier/view/dialog.group.add.php",
			type: "POST",
			dataType: "html",
			success: function(html){
				$("body").append(html);
				fn.ui.modal.setup({dialog_id : "#dialog_add_group"});
			}
		});
	};

	fn.app.supplier.group.add = function(){
		$.post("apps/supplier/xhr/action-add-group.php",$("form[name=form_addgroup]").serialize(),function(response){
			if(response.success){
				$("#tblGroup").DataTable().draw();
				$("#dialog_add_group").modal("hide");
			}else{
				fn.notify.warnbox(response.msg,"Oops...");
			}
		},"json");
		return false;
	};
