$(document).ready(function(){
	$(".congty").change(function(){
		var id = $(".congty").val();
		$.post("data_ajax/datacongty.php", {id: id}, function(data){
			$(".tel").html(data);
		})
	})
	$(".congty").change(function(){
		var id = $(".congty").val();
		$.post("data_ajax/datatel.php", {id: id}, function(data){
			$(".donvi").html(data);
		})
	})
	$(".congty").change(function(){
		var id = $(".congty").val();
		$.post("data_ajax/datanv.php", {id: id}, function(data){
			$(".nv").html(data);
		})
	})
	$(".tbtuvan").click(function(){
		var id = $(this).attr('data-id');
		$.post("data_ajax/datapopup.php", {id: id}, function(data){
			$(".datapopup").html(data);
		})
	})
	$(".profile").click(function(){
		var id = $(this).attr('data-id');
		$.post("data_ajax/dataprofile.php", {id: id}, function(data){
			$(".dataprofile").html(data);
		})
	})
})