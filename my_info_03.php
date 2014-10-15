<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">修改手机号</div>
    <a href="my_info.php" class="close">保存</a>
  </header><!--.headBox end//-->
  
  <ul class="user_edit">
    <li><input class="ipt1" type="text" placeholder="输入新手机号"><a href="###" class="buts">获取验证码</a></li>
    <li><input class="ipt1" type="text" placeholder="输入验证码"></li>
    <li><input class="ipt1" type="text" placeholder="输入账号密码"></li>
  </ul>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

</body>
</html>