"use strict";

var LayoutObj = function(logInForm, registerForm, changeBtn, navBtn, navOption) {
	var __lf = logInForm,
		  __rf = registerForm,
		  __cb = changeBtn,
		  __nb = navBtn,
		  __no = navOption,
		  __displayForm = function(e1, e2) {
			e1.show();
			e2.hide();
		  };
		  
	return {
		
		setForm: function(condition) {
			__lf.show();
			__cb.click(function() {
				if ($(this).val() === condition[0])
					__displayForm(__rf, __lf);
				else if ($(this).val() === condition[1])
					__displayForm(__lf, __rf);
			});
		},

		judgeEmpty: function(elems, warningHandle, warnTxt) {
			var ifSubmit = true;
			for(var i = 0; i < elems.length; i++) {
				warningHandle.e = elems[i];
				if (elems[i].val() === '') {
					warningHandle.warn(warnTxt);
					ifSubmit = false;
				} else {
					warningHandle.init();
				}
			}
			return ifSubmit;
		},
		
		navDraw: function() {
			__nb.click(function() {
				__no.slideToggle();
			})
		}
	}
};


$(function() {	
	var $logInForm = $('#login-form'),
		   $registerForm = $('#register-form'),
		   layoutObj = new LayoutObj($logInForm, $registerForm, $('.change-btn'), $('#nav-list-btn'), $('#nav-option')),
		   warningHandle = {
				e: null,
				warn: function(t) {
					var $warnTxt = $('<p class="warn-text"></p>'),
						   $f = this.e.parents('form');
					this.e.css({ 'border': '2px solid red' });
					this.e.focus();
					$warnTxt.html(t);
					if ($f.children('.warn-text').length < 1)
						$f.append($warnTxt);
				},
				init: function() {
					this.e.css({ 'border': '1px solid #aaa' });
				}
		   };
	
	layoutObj.setForm(["注册", "登录"]);
	
	$logInForm.submit(function() {
		if (!layoutObj.judgeEmpty([$('#login-id'), $('#login-psw')], warningHandle, '填写信息不能为空！'))
			return false;
	});
	
	$registerForm.submit(function() {
		if (!layoutObj.judgeEmpty([$('#register-id'), $('#register-psw'), $('#register-email')], warningHandle, '填写信息不能为空！'))
			return false;
	});
	
	layoutObj.navDraw();
	
});