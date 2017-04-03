"use strict";

var main = (function() {
	var $logInForm = $('#login-form'),
		  $registerForm = $('#register-form'),
		  $changeBtn = $('.change-btn'),
		  displayForm = function(e1, e2) {
			e1.show();				
			e2.hide();				
		  };
		  
	return {
		
		_setForm: function() {
			$logInForm.show();
			$changeBtn.click(function() {
				if ($(this).val() === '注册')
					displayForm($registerForm, $logInForm);
				else
					displayForm($logInForm, $registerForm);
			});
		}
		
	}
})();


$(function() {	
	main._setForm();
});