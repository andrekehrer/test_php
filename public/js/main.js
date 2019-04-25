$("document").ready(function(){

	$("#search").click(function(){

	  	var title = $('#title').val();
		var postForm = {'film': title};

		$.ajax({
	        type: "POST",
	        url: "/test2/public/home/ajaxCall",
	        data: postForm,
	        complete: function(response) {
	        	var response = JSON.parse(response.responseText);
	        	if (response['Response'] == 'False') {
				$("#alerta").css('display', 'block');
				$("#alerta").html(response['Error']);
	        	}else{
	        		$("#userTable tbody").empty();
	        		$("#alerta").css('display', 'none');
	        		console.log(response['Search'].length);
	        		var len = response['Search'].length;
		            for(var i=0; i<len; i++){
		                var Title = response['Search'][i].Title;
		                var Type = response['Search'][i].Type;
		                var Year = response['Search'][i].Year;
		                var Poster = response['Search'][i].Poster;
		                if (Poster != 'N/A') {
		                	var Poster = "<img src='" + Poster + "' width='80'>";
		                }
		                var tr_str = "<tr>" +
		                    "<td>" + Title + "</td>" +
		                    "<td>" + Year + "</td>" +
		                    "<td>" + Type + "</td>" +
		                    "<td>" + Poster + "</td>" +
		                    "</tr>";
		                $("#userTable tbody").append(tr_str);
		            }
	        	}
	        }
	    });

	});
});