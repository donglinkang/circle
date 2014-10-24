<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="device-width=1.0, user-scalable=0, width=device-width">
<!-- <meta content="yes" name="apple-mobile-web-app-capable"> -->
<!-- <meta content="black" name="apple-mobile-web-app-status-bar-style"> -->
<meta content="telephone=yes" name="format-detection">
<title>Only-指帮商圈</title>
<link rel="stylesheet" type="text/css" href="css/zbgj.resets.css" />
<link rel="stylesheet" type="text/css" href="css/zbgj.common.css" />
<link rel="stylesheet" type="text/css" href="css/zbgj.main.css" />
<link rel="stylesheet" type="text/css" href="css/mighty.css">
<link rel="stylesheet" type="text/css" href="css/swipebox.css">
<script src="js/jquery-1.11.0.js"></script>
<script src="js/swipe.js"></script>
<script src="js/modernizr-2.6.2.min.js"></script>
<script src="js/jquery.table.js"></script>
<script src="js/scrolltext.js"></script>
<link rel="stylesheet" type="text/css" href="css/popup.css" />
<script src="js/popup.min.js"></script>
<script src="js/popup.js"></script>
<script src="js/jquery.swipebox.min.js"></script>
<script src="js/jquery.slides.min.js"></script>
<script src="js/jquery.inputbox.js"></script>
<script src="js/jquery.ganged.js"></script>
<script type="text/javascript">
$(document).ready(function($){
	//淡隐淡现选项卡切换
	$(".Fadetab").tabso({
		cntSelect:".Fadecon",
		tabEvent:"click",
		tabStyle:"fade"
	});//end
});
</script>
<script type="text/javascript">
//首页焦点图
$(function(){
	new Swipe(document.getElementById('banner_box'), {
		speed:800,
		auto:4000,
		callback: function(){
			var lis = $(this.element).next("ol").children();
			lis.removeClass("on").eq(this.index).addClass("on");
		}
	});
});
</script>
</head>