<?php include_once "header.php"; ?>

<body>

<div class="wrapper">
 
  <header class="headBox">
    <a href="javascript:(0);" class="logo"></a>
    <a href="javascript:(0);" class="gr_home">个人主页</a>
  </header><!--.headBox end//-->
  
  <!--焦点图 begin-->
  <div id="banner_box" class="shop_swipe">
    <ul>
      <li><a href="javascript:(0);"><img src="temp/in_banner.jpg"></a></li>
      <li><a href="javascript:(0);"><img src="temp/in_banner.jpg"></a></li>
    </ul>
    <ol><li class="on"></li><li></li></ol>
  </div>
  <!--焦点图 end-->
  
  <!--公告 begin-->
  <div class="home_notice">
    <div class="home_gg"><i></i></div>
    <ul id="homeNew" class="home_noticTip">
      <li>ONLY秋装尾品会11月11日正式开启！</li>
      <li>ONLY秋装尾品会11月11日正式开启！</li>
      <li>ONLY秋装尾品会11月11日正式开启！</li>
      <li>ONLY秋装尾品会11月11日正式开启！</li>
    </ul>
  </div>
  <!--公告 end//-->
  
  <div class="home_pic"><img src="temp/in_04.jpg"></div>
  
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

<div class="bottomcut">
  <footer>
    <ul>
      <li class="curr"><a href="index.php"><i class="i1"></i><span>指帮</span></a></li>
      <li><a href="zhiyou.php"><i class="i4"></i><span>指友</span></a></li>
      <li><a href="zhidian.php"><i class="i3"></i><span>指店</span></a></li>
      <li><a href="my.php"><i class="i5"></i><span>我</span></a></li>
    </ul>
  </footer>
</div>

<?php include_once "share.php"; ?>
<script type="text/javascript">
// 公告
if(document.getElementById("homeNew")){
	var scrollup = new ScrollText("homeNew");
	scrollup.LineHeight = 40;        //单排文字滚动的高度
	scrollup.Amount = 1;            //注意:子模块(LineHeight)一定要能整除Amount.
	scrollup.Delay = 10;           //延时
	scrollup.Start();             //文字自动滚动
	scrollup.Direction = "up";   //默认设置为文字向上滚动
}
</script>
</body>
</html>