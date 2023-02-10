$("#student_form").on("submit",function(e){
	e.preventDefault();
	// var _token=$("input[name=_token]").val();
	// var name=$("input[name=name]").val();
	// var email=$("input[name=email]").val();
	// var password=$("input[name=password]").val();
	$.ajax({
		url : $(this).attr('action'),
		type: $(this).attr('method'),
		data: new FormData(this),
		processData:false,
		// dataType:'json',
		contentType:false,
		beforeSend:function()
		{
			$(document).find('.error').text('');
		},
		success:function(data)
		{
			console.log(data.status);
			if(data.status=='0'){
				$.each(data.error,function(key,value){
					$("."+key+"_err").text(value[0]);
				});

			}else{
				alert(data.message);
			}


		}
	});
});