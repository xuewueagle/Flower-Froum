<?php if (!defined('THINK_PATH')) exit();?><html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>花艺论坛</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
		<link rel="shortcut icon" href="/hyltxt/View/Index/Public/css/icon">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta content="yes" name="apple-touch-fullscreen">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/light7.css">
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/light7-swiper.css">
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/light7-swipeout.css">
		<link rel="apple-touch-icon" href="/hyltxt/View/Index/Public/img/apple-touch-icon-114x114.png">

		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/font_1433748561_0232708.css">
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/app.css">
		<style>
			/*设置背景图片*/
			.content {
				background-image: url(/hyltxt/View/Index/Public/img/bg-img.jpg);
			}
			/*输入框背景透明化*/
			.list-block ul {
				background-color: rgba(0, 0, 0, 0);
			}
			#page-login {
				color: #000000;
			}			
			.page-login h3 {
				font-weight: 2.0rem;
				margin: 0 0 1.0rem 0;
			}
			
			.item-content.user-head-box {
				text-align: center;
				margin-top: 2.5rem;
			}
			
			.item-content.user-head-box .item-media {
				width: 4.0rem;
				margin: 0 auto;
			}
			
			#input-box {
				border-radius: 0.5rem;
				border: 1px solid gray;
				background-color: rgba(255, 255, 255, 0.6);
			}
			/*header背景色调*/
			
			.bar {
				background-color: rgba(50, 205, 50, 0.8);
			}
			/*操作按钮的位置*/
			
			.content-block {
				margin: 4.75rem 0;
			}
			
			.content.register-content {
				background-image: url(/hyltxt/View/Index/Public/img/bg-register.jpg);
			}
			#login_avatar{
				border-radius: 2.0rem;
			}
		</style>
	</head>

	<body>

		<div class="page">
			<header class="bar bar-nav">
				<h1 class="title">花艺论坛</h1>
			</header>
			<div class="content">
				<div class="page-login" id="page-login">
					<div class="list-block inset text-center">
						<ul>
							<li>
								<div href="#" class="item-content user-head-box">
									<div class="item-media">
										<img id="login_avatar" src="/hyltxt/View/Index/Public/img/icon.jpg" width="80">
									</div>
								</div>
								<h3 id="login_nickname"></h3>
							</li>
						</ul>
						<ul id="input-box">
							<!-- Text inputs -->
							<li>
								<div class="item-content">
									<div class="item-media"><i class="icon icon-me"></i></div>
									<div class="item-inner">
										<div class="item-input">
											<input id="log_username" type="text" placeholder="请输入用户名">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item-content">
									<div class="item-media"><i class="icon icon-edit"></i></div>
									<div class="item-inner">
										<div class="item-input">
											<input id="log_psd" type="password" placeholder="请输入密码">
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="content-block">
						<div class="row">
							<div class="col-50">
								<a id="login_btn" class="button button-big button-fill button-success">登录</a>
								<!--<a href='<?php echo U("index/main");?>' class="button button-big button-fill button-success">test</a>-->
							</div>
							<div class="col-50">
								<a href="#" data-popup=".popup-register" class="open-popup button button-big button-fill button-primary">注册</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="popup popup-register">
			<header class="bar bar-nav">
				<a data-no-cache="true" class="button button-link button-nav pull-right close-popup">
					暂不注册
				</a>
				<h1 class="title">注册花艺论坛</h1>
			</header>
			<div class="content register-content">
				<div class="content-inner">
					<div class="content-block">
						<div class="list-block inset text-center">
							<ul id="input-box">
								<!-- Text inputs -->
								<li>
									<div class="item-content">
										<div class="item-media"><i class="icon icon-me"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<input id="reg_username" type="text" placeholder="请输入用户名">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="item-content">
										<div class="item-media"><i class="icon icon-edit"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<input id="reg_psd1" type="password" placeholder="请输入密码">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="item-content">
										<div class="item-media"><i class="icon icon-edit"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<input id="reg_psd2" type="password" placeholder="请输重复密码">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="item-content">
										<div class="item-media"><i class="icon icon-me"></i></div>
										<div class="item-inner">
											<div class="item-input">
												<input id="reg_phone" type="text" placeholder="手机号">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row">
										<div class="col-100">
											<a id="reg_btn" class="button button-big button-fill button-primary">提交注册</a>
										</div>
									</div>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swipeout.js' charset='utf-8'></script>
		<script src="/hyltxt/View/Index/Public/js/app.js"></script>
		<script src="/hyltxt/View/Index/Public/js/public.js"></script>
		<script src="/hyltxt/View/Index/Public/js/index.js"></script>
		<script>
			$.register = function(reg_username, reg_psd1, reg_tel) {
				$.ajax({
					type: "post",
					url: "<?php echo U('user/register');?>",
					async: true,
					data: {
						reg_username: reg_username,
						reg_psd1: reg_psd1,
						reg_tel: reg_tel
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							if(data.data["reg-status"] == "succ") {
								$.toast("注册成功");
							} else {
								$.toast("用户名已存在");
							}
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
			$.login = function(log_username, log_psd) {
				$.ajax({
					type: "post",
					url: "<?php echo U('user/login');?>",
					async: true,
					data: {
						log_username: log_username,
						log_psd: log_psd
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							if(data.data["login-status"] == "succ") {
								sessionStorage.setItem("username", log_username);
								sessionStorage.setItem("userID", data.data["userID"]);
								$.toast("登陆成功");
								/*跳转到主界面*/
								window.location.href = "http://localhost/hyltxt/index.php/index/main.html"
							} else if(data.data["login-status"] == "not-match") {
								$.toast("用户名与密码不匹配");
							} else {
								$.toast("用户名不存在");
							}
						} else {
							$.alert("通讯异常");
						}
					}
				});
			}
			$.showAvatar = function(log_username) {
				$.ajax({
					type: "post",
					url: "<?php echo U('user/showAvatar');?>",
					async: true,
					data: {
						log_username: log_username
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							if(data.data["show-status"] != "not-exist") {
								/*console.log(data.data[0]["headimgsrc"]);*/
								$("#login_avatar")[0].src = data.data[0]["headimgsrc"];
								$("#login_nickname").text(data.data[0]["nickname"]);
							}

						} else {
							$.alert("通讯异常");
						}
					}
				});
			}

			/*为注册按钮绑定点击事件,调用注册方法,调用ajax*/
			$("#reg_btn").on("click", function() {
				if($("#reg_username").val().length > 16 || $("#reg_username").val().length < 8) {
					$.toast("账号的长度必须在8~16位之间");
					return;
				}
				if($("#reg_psd1").val() != $("#reg_psd2").val()) {
					$.toast("两次输入的密码不同");
					return;
				}
				var re = /^[a-zA-z]\w{3,15}$/;
				if(re.test($("#reg_phone").val())) {
					$.toast("请输入正确的手机号码！");
					return;
				}
				$.register($("#reg_username").val(), $("#reg_psd1").val(), $("#reg_phone").val());
			})

			/*为登录按钮绑定点击事件,调用注册方法,调用ajax*/
			$("#login_btn").on("click", function() {
				if($("#log_username").val().length == 0 || $("#log_psd").val() == 0) {
					$.toast("账号和密码都不能为空");
					return;
				}
				$.login($("#log_username").val(), $("#log_psd").val());
			})
			$("#log_username").on("input", function() {
				$.showAvatar($("#log_username").val());
			})
		</script>
	</body>

</html>