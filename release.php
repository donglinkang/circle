<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">发布问题</div>
    <a href="javascript:history.go(-1);" class="close">确定</a>
  </header><!--.headBox end//-->
    
  <div class="comment_con">
    <ul class="user_edit overflow">
      <li class="fl" style="padding:32px 0 0 5px;">选择类型：</li>
      <li class="select fl">
        <select name="">
          <option value="" selected="">提问</option>
          <option value="">资源</option>
          <option value="">闲聊</option>
        </select>
	  </li>
    </ul>
    <div class="cont"><textarea name="" cols="" rows="" placeholder="来了就说两句吧..."></textarea></div>
    <div class="upImg">
      <ul>
        <li><a href="###" class="close"><i></i></a><img src="temp/jlb_pr4.jpg"></li>
        <li><a href="###" class="close"><i></i></a><img src="temp/jlb_pr5.jpg"></li>
        <li><a href="###" class="close"><i></i></a><img src="temp/jlb_pr6.jpg"></li>
        <li class="jiaImg"><a href="#"><i>+</i></a></li>
      </ul>
    </div>
  </div>
  <!--.julebu_fabu end//-->
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

</body>
</html>