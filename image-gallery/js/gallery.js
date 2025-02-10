$(document).ready(function(){	

	$(".gallery").on('click', '.delete', function(){
		var id = $(this).attr("id");		
		var action = "deleteImage";
		if(confirm("Are you sure you want to delete this image?")) {
			$.ajax({
				url:"gallery_action.php",
				method:"POST",
				data:{id:id, action:action},
				success:function(response) {
					console.log("dgdsgdsgs");
					$("#gallery_image_"+id).remove();
				}
			});
		} else {
			return false;
		}
	});
	
});