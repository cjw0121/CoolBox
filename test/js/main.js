"use strict";

var LayoutObj = function(logInForm, registerForm, changeBtn) {
	var __lf = logInForm,
			__rf = registerForm,
			__cb = changeBtn,
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

		msgHandle: {
			e: null, //警告字段

			changePromptClass: function(e, c) {
				e.attr('class', '');
				e.addClass('prompt');
				e.addClass(c);
			},
			
			prompt: function(t, c) {
				var $t = $('<p></p>'),
						$f = this.e.parents('.form');
				
				this.changePromptClass($t, c);
				$t.html(t);
				if ($f.children('.prompt').length > 0) {
					$('.prompt').remove();
				}
				$f.append($t);
			}, //提示信息函数
			
			warn: function() {
				this.e.css({ 'border': '2px solid red' });
				this.e.focus();
			}, //字段警告
			
			init: function() {
				this.e.css({ 'border': '1px solid #aaa' });
			} //初始化状态函数
		},
		
		judgeEmpty: function(elems, txt, addClass) {
			var ifSubmit = true;
			for(var i = 0; i < elems.length; i++) {
				this.msgHandle.e = elems[i];
				if (elems[i].val() === '') {
					this.msgHandle.warn();
					this.msgHandle.prompt(txt, addClass);
					ifSubmit = false;
				} else {
					this.msgHandle.init();
				}
			}
			
			return ifSubmit;
		},
		
		optionDraw: function(b, e) {
			b.click(function() {
				e.slideToggle();
			})
		},
		
		ajaxPost: function(action, data, successFunc) {
			$.ajax({
				url: action,
				type: 'POST',
				data: data,
				success: successFunc
			});
		}
	}
};


$(function() {
	var logInObj = { //登录表单元素集合
				form: $('#login-form'),
				sbtBtn: $('#login-btn'),
				name: $('#login-name'),
				psw: $('#login-psw')
			},
			registerObj = { //注册表单元素集合
				form: $('#register-form'),
				sbtBtn: $('#register-btn'),
				name: $('#register-name'),
				psw: $('#register-psw'),
				email: $('#register-email')
			},
			layoutObj = new LayoutObj(logInObj.form, registerObj.form, $('.change-btn')); //创建表单控件布局实例对象

			
	layoutObj.setForm(["切换注册", "切换登录"]); //使用表单切换功能
	
	logInObj.sbtBtn.click(function() { //登录信息提交按钮响应事件
		if (!layoutObj.judgeEmpty([logInObj.name, logInObj.psw], '填写信息不能为空！', 'warn-text')) {
			return false;
		} else {
			
			//数据包装
			var sendData = {};
			sendData['action'] = 'logIn';
			sendData[logInObj.name.attr('name')] = logInObj.name.val();
			sendData[logInObj.psw.attr('name')] = logInObj.psw.val();
			
			layoutObj.ajaxPost(logInObj.form.attr('action'), sendData, function(data, status) {
				if (data == 1) {
					layoutObj.msgHandle.prompt('登录成功', 'success-text');
				} else {
					layoutObj.msgHandle.prompt('登录失败', 'warn-text');
				}
			});
		}
	});
	
	registerObj.sbtBtn.click(function() {
		if (!layoutObj.judgeEmpty([registerObj.name, registerObj.psw, registerObj.email], '填写信息不能为空！', 'warn-text')) {
			return false;
		} else {
			
			//数据包装
			var sendData = {};
			sendData['action'] = 'register';
			sendData[registerObj.name.attr('name')] = registerObj.name.val();
			sendData[registerObj.psw.attr('name')] = registerObj.psw.val();
			sendData[registerObj.email.attr('name')] = registerObj.email.val();
			
			layoutObj.ajaxPost(registerObj.form.attr('action'), sendData, function(data, status) {
				console.log(data);
				if (data == 1) {
					layoutObj.msgHandle.prompt('注册成功', 'success-text');
				} else {
					layoutObj.msgHandle.prompt('注册失败', 'warn-text');
				}
			});
		}
	});
	
	layoutObj.optionDraw($('#nav-list-btn'), $('#nav-option')); //导航切换显示
	
	for(var i = 0, $b = $('.project-item-btn'), $o = $('.project-main'); i < $b.length; i++) {
		layoutObj.optionDraw($b.eq(i), $o.eq(i));		
	}
	
});