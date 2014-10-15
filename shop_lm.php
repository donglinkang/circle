<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">

  <header class="headBox">
    <a id="androidAppJump" href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">商&nbsp;&nbsp;圈</div>
  </header><!--.headBox end//-->
  
  <!-- <ul class="shop_sx">
    <li>综合<span></span></li><li>销量<span></span></li><li>价格<span></span></li><li><b>筛选</b></li>
  </ul> -->
  
  <div class="shop_lmsj_list">
    <ul>
      <li class="boxdown"><a href="javascript:(0);">联盟<br/>商家<i></i></a></li>
      <li><a href="javascript:(0);"><span><img src="temp/t_19.jpg"></span><span>BeLLE百丽</span></a></li>
      <li><a href="javascript:(0);"><span><img src="temp/t_20.jpg"></span><span>香奈儿</span></a></li>
      <li><a href="javascript:(0);"><span><img src="temp/t_21.jpg"></span><span>雅诗兰黛</span></a></li>
      <li><a href="javascript:(0);"><span style="font-size:40px; color:#ccc; line-height:50px;">+</span><span>敬请期待...</span></a></li>
    </ul>
  </div>

  
  <div class="open_zhid">
    <!-- <p>您的指币为<b>25468</b></p>
    <p>您的指友数为<b>25</b></p> -->
    <h1 class="ok">您已满足商圈指店升级条件！</h1>
    <a href="javascript:(0);" id="zbsqzd" class="okBut">马上提交升级申请</a>
  </div>


  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

<script type="text/javascript">
//联盟商城-商家logo显示隐藏更多
$(document).ready(function(){
	var a =$(".shop_lmsj_list ul li:gt(3)");
	    a.hide();
	$(".boxdown").click(function(){
		if(a.is(':visible')){
			 a.slideUp('fast');
			 $(this).removeClass('up');
		}else{
			a.slideDown('fast').show();	
			$(this).addClass('up');
		}			
	});
});

//联盟商城-商家品牌介绍显示隐藏更多
$(document).ready(function(){
	var b =$(".shop_lmsj_curr p:gt(0)");
	    b.hide();
	$(".lmsjCurrDown").click(function(){
		if(b.is(':visible')){
			 b.slideUp('fast');
			 $(this).removeClass('up');
		}else{
			b.slideDown('fast').show();	
			$(this).addClass('up');
		}			
	});
});
</script>
</body>
</html>