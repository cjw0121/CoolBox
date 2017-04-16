"use strict";

var Layout = function(logInForm, registerForm, changeBtn) {
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
		
		optionDraw: function(btn, elems) {
			btn.click(function() {
				elems.slideToggle();
			})
		},
		
		ajaxPost: function(action, data, successFunc) {
			$.ajax({
				url: action,
				type: 'POST',
				data: data,
				success: successFunc
			});
		},
		
		backHome: function(second, href, msg, addClass) {
			setInterval((function(msgHandle) {
				return function() {
					msgHandle.prompt(msg + ', ' + (second--) + '秒后返回主页', addClass);
					if (second === 0) {
						location.href = href;
					}
				}
			})(this.msgHandle), 1000);			
		}

	}
};

var Cookie = {
		setCookie: function(key, value, dayToLive) {	
			var exp = new Date();
			exp.setDate(exp.getDate() + dayToLive);
			document.cookie = key + '=' + encodeURIComponent(value) + ( (dayToLive === null) ? '' : '; expires=' +exp.toGMTString() );
		},
		getCookie: 	function(key) {
			var arr = (decodeURIComponent(document.cookie)).split('; '),
				eachCookie;
			for (var i = 0; i < arr.length; i++) {
				eachCookie = arr[i].split('=');
				if (eachCookie[0] === key && eachCookie[1] != '') {
					return eachCookie[1];
				}
			}
		},
		deleteCookie: function(key) {
			var exp = new Date();
			exp.setTime(exp.getTime() - 1);
			this.setCookie(key, '', exp);
		}
}

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
		$navOption = $('#nav-option'),
		layout = new Layout(logInObj.form, registerObj.form, $('.change-btn')); //创建表单控件布局实例对象
			
	layout.setForm(["切换注册", "切换登录"]); //使用表单切换功能
	
	logInObj.sbtBtn.click(function() { //登录信息提交按钮响应事件
		if (!layout.judgeEmpty([logInObj.name, logInObj.psw], '填写信息不能为空！', 'warn-text')) {
			return false;
		} else {
			
			//数据包装
			var sendData = {};
			sendData['action'] = 'logIn';
			sendData[logInObj.name.attr('name')] = logInObj.name.val();
			sendData[logInObj.psw.attr('name')] = logInObj.psw.val();
			
			//Ajax发送
			layout.ajaxPost(logInObj.form.attr('action'), sendData, function(data, status) {
				data = JSON.parse(data);
				if (data.result == 'success') {
					//Cookie存储
					Cookie.setCookie('user', data.user, 31);
					Cookie.setCookie('id', data.id, 31);
					Cookie.setCookie('pic', data.pic, 31);
					Cookie.setCookie('login', 'true', 31);

					//跳转页面
					layout.backHome(5, $('#nav-option li a:first').attr('href'), '登录成功', 'success-text');					
				} else {
					layout.msgHandle.prompt('登录失败', 'warn-text');
				}
			});
		}
	});
	
	registerObj.sbtBtn.click(function() {
		if (!layout.judgeEmpty([registerObj.name, registerObj.psw, registerObj.email], '填写信息不能为空！', 'warn-text')) {
			return false;
		} else {
			
			//数据包装
			var sendData = {};
			sendData['action'] = 'register';
			sendData[registerObj.name.attr('name')] = registerObj.name.val();
			sendData[registerObj.psw.attr('name')] = registerObj.psw.val();
			sendData[registerObj.email.attr('name')] = registerObj.email.val();
			
			//Ajax发送
			layout.ajaxPost(registerObj.form.attr('action'), sendData, function(data, status) {
				console.log(data);
				if (data == 1) {
					layout.backHome(5, $('#nav-option li a:first').attr('href'), '注册成功', 'success-text');
				} else {
					layout.msgHandle.prompt('注册失败', 'warn-text');
				}
			});
		}
	});
	
	layout.optionDraw($('#nav-list-btn'), $navOption); //导航切换显示
	
	//主体内容列表点击事件绑定
	for(var i = 0, $b = $('.project-item-btn'), $o = $('.project-main'); i < $b.length; i++) {
		layout.optionDraw($b.eq(i), $o.eq(i));
	}
	
	if (!!Cookie.getCookie('login')) {
		var $originElems = $navOption.html(),
			user = Cookie.getCookie('user'),
			id = Cookie.getCookie('id'),
			pic = Cookie.getCookie('pic');
		
		$navOption.html('<li id="major-option"><span id="user-name">' + user + '</span><figure><img src="' + pic + '" /></figure><ul><li><a href="./index.php">主页</a></li><li><a href="./center.php?userid=' + id + '">个人空间</a></li><li><a href="./about.php">关于</a></li><li id="logout-btn">注销</li></ul></li>');
		layout.optionDraw($('#major-option figure'), $('#major-option ul')); //用户选项切换显示
	}
	
});