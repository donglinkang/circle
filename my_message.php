<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a id="androidAppJump" href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">消息</div>
  </header><!--.headBox end//-->
  
  <ul class="zmessage">
    <li>
      <a href="my_message_zhibang.php">
        <img src="images/comment.jpg" class="ui-li-thumb">
        <h2 class="ui-li-heading">指帮</h2>
      </a>
      </li><li>
      <a href="my_message_zhidian.php">
        <img src="images/like.jpg" class="ui-li-thumb">
        <h2 class="ui-li-heading">指店</h2>
      </a>
      </li><li>
      <a href="my_message_xitong.php">
        <img src="images/msg.jpg" class="ui-li-thumb">
        <h2 class="ui-li-heading">系统消息</h2>
      </a>
    </li>
  </ul>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

</body>
</html>