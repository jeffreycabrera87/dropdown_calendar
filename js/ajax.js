$(document).ready(function(){
	$("#years").on("change", function(){
		var year = $(this).val();
		var month = $("#months").val();
		$.ajax({
			url: "day_year.php",
			data: {year: year, month: month},
			dataType: "JSON",
			method: "GET",

			success:function(r){
				var str = "";
				for(i = 1; i <= r.day; i++){
					str += "<option value='" + i + "'>" + i + "</option>";
				}
				$("#days").html(str);
			}
		});
	});

	$("#months").on("change", function(){
		var year = $("#years").val();
		var month = $(this).val();
		$.ajax({
			url: "day_year.php",
			data: {year: year, month: month},
			dataType: "JSON",
			method: "GET",

			success:function(r){
				var str = "";
				for(i = 1; i <= r.day; i++){
					str += "<option value='" + i + "'>" + i +"</option>";
				}
				$("#days").html(str);
			}
		});
	});
});