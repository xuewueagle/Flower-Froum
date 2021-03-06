<?php if (!defined('THINK_PATH')) exit();?><html>

	

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>芬芳花艺商城</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
		<link rel="shortcut icon" href="/hyltxt/View/Index/Public/img/icon.jpg">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta content="yes" name="apple-touch-fullscreen">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/light7.css">
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/light7-swiper.css">
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/light7-swipeout.css">
		<link rel="apple-touch-icon" href="../../../assets/img/apple-touch-icon-114x114.png">
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/font_1433748561_0232708.css">
		<link rel="stylesheet" href="/hyltxt/View/Index/Public/css/app.css">
		<style>
			/*header背景色调*/
			
			.bar {
				background-color: rgba(50, 205, 50, 0.8);
			}
			
			.bar-tab .tab-item {
				color: #000000;
			}
			
			.card-action {
				display: inline-block;
				float: right;
			}
			
			.card-action span {
				margin: 0 0.5rem;
				font-size: 1.0rem;
				line-height: 2.0rem;
			}
			
			.user-msg {
				display: inline-block;
			}
			
			.user-msg img {
				width: 2.0rem;
				height: 2.0rem;
			}
			
			.facebook-date span {
				margin: 0;
			}
			
			.card-footer.no-border {
				background: white;
			}
		</style>
	</head>

	<body>
		<div class="page page-home" id="page-picture">
			<header class="bar bar-nav">
				<a class="icon icon-left pull-left back"></a>
				<h1 class="title">图片</h1>
			</header>
			<div class="content" id="imgContainer">

			</div>
		</div>

		<!--底部弹出的actionsheet-->

		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hyltxt/View/Index/Public/js/light7-swipeout.js' charset='utf-8'></script>
		<script src="/hyltxt/View/Index/Public/js/app.js"></script>

		<script src="/hyltxt/View/Index/Public/js/public.js"></script>
		<script src="/hyltxt/View/Index/Public/js/picture.js"></script>
		<script>
			var imgArrArr = [];
			var captionArr = [];

			$.searchToImage = function() {
					if(sessionStorage.getItem("imgID") != null) {
						return $('#' + sessionStorage.getItem("imgID") + '').click();
						sessionStorage.removeItem("imgID");
					}
				}
				/*此处发觉只有增加定时器才能够正常触发这个模拟点击事件*/
			var t = setTimeout($.searchToImage, 500);

			/*加载图片列表方法*/
			$.loadImg = function() {
				$.ajax({
					type: "post",
					url: "<?php echo U('media/loadImg');?>",
					async: true,
					data: {
						/*keyword: keyword*/
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							var tempStr = [];
							data.data.forEach(function(arg, index) {
								tempStr.push('<div id=' + index + ' onclick="$.openImg(this)" class="card facebook-card">');
								tempStr.push('<div class="card-header no-border">');
								tempStr.push('<div class="user-msg">');
								tempStr.push('<div class="facebook-avatar"><img src=' + arg.headimgsrc + '></div>');
								tempStr.push('<div class="facebook-name">' + arg.nickname + '</div>');
								tempStr.push('<div class="facebook-date"><span>' + arg.posttime + '</span></div>');
								tempStr.push('</div>');
								tempStr.push('<div class="card-action">');
								tempStr.push('</div>');
								tempStr.push('</div>');
								tempStr.push('<div id="' + arg.id + '" class="card-content pb-standalone-captions">');
								tempStr.push('<a class="">');
								tempStr.push('<img src=' + arg.img1 + ' width="100%"></div>');
								tempStr.push('</a>');
								tempStr.push('</div>');
								tempStr.push('<div class="card-footer no-border">');
								/*tempStr.push('<a href="#" class="link prompt-ok">Comment<span class="badge">16</span></a>');*/
								tempStr.push('<a onclick="$.collect(' + arg.id + ',this)" class="link">收藏<span class="badge">' + arg.collectionnum + '</span></a>');
								tempStr.push('<a onclick="$.thumbup(' + arg.id + ',this)" class="link">点赞<span class="badge">' + arg.thumbupnum + '</span></a>');
								tempStr.push('</div>');
								/*将取出的视频路径存放在一个字符串数组*/
								var imgArr = [];
								imgArr.push(arg.img1, arg.img2, arg.img3, arg.img4, arg.img5, arg.img6);
								imgArrArr.push(imgArr)
								captionArr.push(arg.title)
							});
							/*console.log(imgArrArr);*/
							$('#imgContainer').empty();
							$('#imgContainer').append(tempStr.join(''));
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
			$.loadImg();

			/*图片显示js插件,动态显示加载的内容视频路径与文字*/
			$.openImg = function(that) {
				sessionStorage.removeItem("imgID");
				var myPhotoBrowserCaptions = $.photoBrowser({
					photos: [{
						url: imgArrArr[that.id][0],
						caption: captionArr[that.id]
					}, {
						url: imgArrArr[that.id][1],
						caption: captionArr[that.id]
					}, {
						url: imgArrArr[that.id][2],
						caption: captionArr[that.id]
					}, ],
					theme: 'dark',
					type: 'standalone'
				});
				myPhotoBrowserCaptions.open()
			}

			$.thumbup = function(mediaID, that) {
				$.ajax({
					type: "post",
					url: "<?php echo U('action/thumbup');?>",
					async: true,
					data: {
						mediaID: mediaID,
						userID: sessionStorage.getItem("userID"),
						thumbupNum:parseInt(that.children[0].innerText) + 1
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							/*修改dom上的点赞数目*/
							that.children[0].innerText = parseInt(that.children[0].innerText) + 1;
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
			$.collect = function(mediaID, that) {
				$.ajax({
					type: "post",
					url: "<?php echo U('action/collect');?>",
					async: true,
					data: {
						mediaID: mediaID,
						userID: sessionStorage.getItem("userID"),
						collectNum:parseInt(that.children[0].innerText) + 1
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							/*修改dom上的点赞数目*/
							that.children[0].innerText = parseInt(that.children[0].innerText) + 1;
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}

			/*评论框修改*/
			$(document).on('click', '.prompt-ok', function() {
				$.prompt('请输入评论', '', function() {
					$.alert('评论成功')
				});
			});
		</script>
	</body>

</html>