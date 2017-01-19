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
			/*header背景色调*/
			
			.bar {
				background-color: rgba(50, 205, 50, 0.8);
			}
			/*标题样式*/
			
			.title-box {
				height: 2.0rem;
				padding: 0.5rem 0.5rem;
			}
			
			.list-block {
				margin: 0.5rem 0;
			}
			
			.essay-title {
				/*line-height: 2.5rem;*/
				font-size: 1.5rem;
				font-weight: bold;
			}
			/*第一行用户信息样式*/
			
			.item-title-row.first-row {
				width: 100%;
				line-height: 1.5rem;
			}
			
			#page-essay-show .item-inner img {
				display: inline;
				width: 1.5rem;
				height: 1.5rem;
			}
			
			.item-title-row.first-row p {
				display: inline;
				float: left;
				margin: 0;
				margin-left: 0.3rem;
			}
			/*第二行文章信息样式*/
			
			.item-title-row.third-row {
				margin-top: 0.2rem;
				float: left;
			}
			
			.item-title-row.second-row .item-title {
				font-weight: bold;
			}
			
			.item-title-row.third-row p {
				display: inline;
				font-size: 0.5rem;
				margin: 0 0.1rem;
			}
			
			.item-media.target-img {
				margin-right: 1.0rem;
			}
			
			.item-media.target-img img {
				width: 3.5rem;
				height: 3.5rem;
			}
			
			.page-essay .badge {
				color: orangered;
			}
			
			.item-title-row.third-row p {
				font-size: 0.8rem;
			}
			
			.list-block.media-list li {
				border-bottom: 1px solid gray;
			}
			/*清除a标签的默认蓝色字体*/
			
			#page-essay-show a {
				color: inherit;
			}
			
			.item-content {
				padding-right: 0.5rem;
			}
			/*文章主题样式*/
			
			.text-container {
				width: 90%;
				margin: 0 auto;
			}
			
			.img-container {
				text-align: center;
			}
			
			.img-container img {
				width: 80%;
				margin: 0.5rem 0;
			}
			/*底部版权样式*/
			
			.footer-msg {
				border-top: 3px solid gray;
				padding-top: 0.5rem;
				width: 90%;
				margin: 0 auto;
				text-align: center;
			}
			
			.search-input {
				width: 75%;
				float: left;
				display: inline-block;
			}
			
			#search {
				width: 100%;
			}
			
			#send-btn {
				width: 20%;
				float: right;
				display: inline-block;
			}
			/*评论展示部分样式*/
			
			.comment-box .item-content img {
				width: 2.5rem;
			}
			
			.comment-box {
				padding-bottom: 2.0rem;
			}
		</style>
	</head>

	<body>

		<div id="page-essay-show" class="page">
			<header class="bar bar-nav">
				<a class="icon icon-left pull-left back"></a>
				<h1 class="title">花艺文章</h1>
			</header>
			<div class="content">
				<div class="title-box">
					<span class="essay-title"><!--三毛：她的心永远在路上，她的灵魂一直在流浪--></span>
				</div>
				<div class="list-block media-list">
					<ul>
						<li>
							<div class="item-content">
								<div class="item-inner">
									<img id="authorAvatar" src="/hyltxt/View/Index/Public/img/icon.jpg">
									<div class="item-title-row first-row">
										<span id="authorName" class="user-name"><!--赖头头--></span>
									</div>
									<div class="item-title-row third-row">
										<p>发表时间<span id="postTime"><!--19:23--></span></p>
										<p>字数<span><!--1245454--></span></p>
									</div>
								</div>
								<button onclick="$.collect($.getQueryString('essayID'))" class="button-fill button">+ 收藏</button>
							</div>
						</li>
					</ul>
				</div>
				<!--文章主体部分-->
				<div class="content-wrapper">
					<div class="text-container">

					</div>
					<div class="img-container">
						<!--使用js从数据库中读取，动态使用js拼接img标签-->
					</div>
					<div class="footer-msg">
						<span>鲜花论坛文章-作者版权所有-未经批准-不得转载</span>
					</div>
				</div>
				<!--文章被追加的评论部分-->
				<div class="comment-box">
					<div class="list-block media-list">
						<ul>
							<li class="item-content">
								<div class="item-inner">
									<div class="item-title" style="font-weight: bold;">评论在这里</div>
								</div>
							</li>
						</ul>
						<ul id="contentContainer">

						</ul>
					</div>
				</div>
			</div>
			<!--底部的回复条-->
			<div class="bar bar-footer">
				<!--<a class="icon icon-edit pull-left"></a>
				<a class="icon icon-settings pull-right"></a>-->
				<div class="search-input">
					<!--<label class="icon icon-edit" for="search"></label>-->
					<input type="search" id='search' placeholder='输入回复内容' />

				</div>
				<button id="send-btn" class="button button-fill">发送</button>
			</div>
		</div>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swipeout.js' charset='utf-8'></script>
		<script src="/hyltxt/View/Index/Public/js/app.js"></script>
		<script src="/hyltxt/View/Index/Public/js/public.js"></script>
		<script src="/hyltxt/View/Index/Public/js/essay_show.js"></script>
		<script>
			/*截取URL中的参数值*/
			$.getQueryString = function(name) {
				var reg = new RegExp("(^|&|\|)" + name + "=([^&]*)(&|$)");
				var r = window.location.search.substr(1).match(reg);
				if(r != null) {
					return decodeURIComponent(r[2]);
				} else {
					return "";
				}
			};
			/*加载文章详情,渲染页面*/
			$.loadEssayDetail = function(essayID, authorID) {
					$.ajax({
						type: "post",
						url: "<?php echo U('media/loadEssayDeatil');?>",
						async: true,
						data: {
							essayID: essayID,
							authorID,
							authorID
						},
						success: function(d) {
							var data = JSON.parse(d);
							/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
							if(data.code == "0000") {
								/*渲染标题*/
								$(".essay-title").text(data.data[0]["title"])
								$("#postTime").text(data.data[0]["posttime"])
									/*渲染文章内容*/
								$(".text-container").text(data.data[0]["text"])
									/*渲染图片内容*/
								var tempStr = [];
								data.data.forEach(function(arg, index) {
									tempStr.push('<img src=' + arg.img1 + '>')
									tempStr.push('<img src=' + arg.img2 + '>')
									tempStr.push('<img src=' + arg.img3 + '>')
									tempStr.push('<img src=' + arg.img4 + '>')
									tempStr.push('<img src=' + arg.img5 + '>')
									tempStr.push('<img src=' + arg.img6 + '>')
								});
								$('.img-container').empty();
								$('.img-container').append(tempStr.join(''));
								/*此处使用的是比较无赖的技巧,以后有待改进*/
								$('.img-container img').forEach(function(arg, index) {
									if(arg.src.length < 200) {
										arg.remove()
									}
								});
							} else {
								$.toast("通讯异常");
							}
						}
					});
				}
			/*加载作者信息的ajax*/
			$.loadAuthorMSG = function(authorID) {
					$.ajax({
						type: "post",
						url: "<?php echo U('user/loadAuthorMSG');?>",
						async: true,
						data: {
							authorID,
							authorID
						},
						success: function(d) {
							var data = JSON.parse(d);
							/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
							if(data.code == "0000") {
								$("#authorAvatar")[0].src = data.data[0]["headimgsrc"];
								$("#authorName").text(data.data[0]["nickname"]);
							} else {
								$.toast("通讯异常");
							}
						}
					});
				}
				/*加载评论信息的ajax*/
			$.loadCommentInfo = function(essayID) {
					$.ajax({
						type: "post",
						url: "<?php echo U('action/loadCommentInfo');?>",
						async: true,
						data: {
							essayID: essayID
						},
						success: function(d) {
							var data = JSON.parse(d);
							/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
							if(data.code == "0000") {
								var tempStr = [];
								data.data.forEach(function(arg, index) {
									tempStr.push('<li>')
									tempStr.push('<a href="#" class="item-link item-content">')
									tempStr.push('<div class="item-media"><img src=' + arg.headimgsrc + ' width="80"></div>')
									tempStr.push('<div class="item-inner">')
									tempStr.push('<div class="item-title-row">')
									tempStr.push('<div class="item-title">' + arg.nickname + '</div>')
									tempStr.push('<div class="item-after">' + arg.actiontime.substring(5, 16) + '</div>')
									tempStr.push('</div>')
									tempStr.push('<div class="item-text">' + arg.content + '</div>')
									tempStr.push('</div>')
									tempStr.push('</a>')
									tempStr.push('</li>')
								});
								$('#contentContainer').append(tempStr.join(''));
							} else {
								$.toast("通讯异常");
							}
						}
					});
				}
			/*添加新评论*/
			$.pushComment = function(essayID, username, content) {
				$.ajax({
					type: "post",
					url: "<?php echo U('action/pushComment');?>",
					async: true,
					data: {
						essayID: essayID,
						username: username,
						content: content
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							var tempStr = [];
							tempStr.push('<li>')
							tempStr.push('<a href="#" class="item-link item-content">')
							tempStr.push('<div class="item-media"><img src=' + data.data[0].headimgsrc + ' width="80"></div>')
							tempStr.push('<div class="item-inner">')
							tempStr.push('<div class="item-title-row">')
							tempStr.push('<div class="item-title">' + data.data[0].nickname + '</div>')
							tempStr.push('<div class="item-after">刚刚</div>')
							tempStr.push('</div>')
							tempStr.push('<div class="item-text">' + content + '</div>')
							tempStr.push('</div>')
							tempStr.push('</a>')
							tempStr.push('</li>')
							$('#contentContainer').prepend(tempStr.join(''));
							$("#search").val("")
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
			$.loadEssayDetail($.getQueryString("essayID"));
			$.loadAuthorMSG($.getQueryString("authorID"));
			$.loadCommentInfo($.getQueryString("essayID"));
			$.collect = function(mediaID) {
				$.ajax({
					type: "post",
					url: "<?php echo U('action/collect');?>",
					async: true,
					data: {
						mediaID: mediaID,
						userID: sessionStorage.getItem("userID")/*,
						collectNum:parseInt(that.children[0].innerText) + 1*/
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							$.toast("收藏文章成功！！")
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
			$("#send-btn").on("click", function() {
				$.pushComment($.getQueryString("essayID"), sessionStorage.getItem("username"), $("#search").val())
			})
		</script>
	</body>

</html>