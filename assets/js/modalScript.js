function detailsmodal(id)
{
	var data = {"id":id};
	jQuery.ajax
	({
		url: "ProductsModal.php",
		method : "post",
		data : data ,
		success: function(data)
		{
			jQuery('body').append(data);
			jQuery('#details-1').modal('toggle');
		},
		error : function()
		{
			alert("HTTP error");
		}
	});
}