<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a id="androidAppJump" href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">用户中心</div>
  </header><!--.headBox end//-->
  
  <ul class="zmessage">
    <li>
      <a href="renwu.php">
        <img src="images/renwu.jpg" class="ui-li-thumb">
        <h2 class="ui-li-heading">我的任务</h2>
      </a>
    </li>
    <li>
      <a href="my_mubiao.php">
        <img src="images/mubiao.jpg" class="ui-li-thumb">
        <h2 class="ui-li-heading">我的目标</h2>
      </a>
    </li>
    <li>
      <a href="my_zbi.php">
        <img src="images/zhibi.jpg" class="ui-li-thumb">
        <h2 class="ui-li-heading">我的指币</h2>
      </a>
    </li>
    <li>
      <a href="my_huangou.php">
        <img src="images/hg.jpg" class="ui-li-thumb">
        <h2 class="ui-li-heading">我的换购</h2>
      </a>
    </li>
  </ul>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

</body>
</html>