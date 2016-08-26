$(document).ready(function(){
	jQuery.validator.setDefaults({
		errorPlacement : function(error, element) {
			element.removeClass('has-success').addClass('has-error');
		}
	});
	
	base_path = $('#base_path').val();
	
	$("#register").validate({
		submitHandler : function(form) {
			form.submit();
		},
		onfocusout: function (element) {
	        $(element).valid();
	    },
		rules : {
			name : {
				required : true
			},
			email : {
				required : true,
				email: true,
				remote: {
					url: base_path+"users/check_email",
					type: "post",
					data: {
						email: function() {
							return $( "#email" ).val();
						}
					}
				}
			},
			password : {
				required : true
			},
			confirm_password : {
				required : true,
				equalTo: "#password"
			}
		},
		messages : {
			name : {
				required : "Por favor insira seu nome"
			},
			email : {
				required : "Por favor insira seu email",
				remote : "Email já existe"
			},
			password : {
				required : "Por favor insira sua senha"
			},
			confirm_password : {
				required : "Por favor, confirme sua senha",
				equalTo: "Senhas não correspondem"
			}
		},
		errorPlacement : function(error, element) {
			$(element).closest('div').find('.help-block').html(error.html());
		},
		highlight : function(element) {
			$(element).closest('div').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function(element, errorClass, validClass) {
			 $(element).closest('div').removeClass('has-error').addClass('has-success');
			 $(element).closest('div').find('.help-block').html('');
		}
	});
	
	
});