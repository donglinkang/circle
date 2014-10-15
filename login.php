<?php include_once "header.php"; ?>

<body>
<div class="wrapper" style="padding-bottom:1px;">
  
  <header class="headBox">
    <a href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">登&nbsp;&nbsp;陆</div>
  </header><!--.headBox end//-->
  
  <!--<div class="t-nav-bc2"><a href="forgot.password.php" class="sendf-btn">忘记密码？</a></div>-->
  
  <form class="form">
    <ul class="ps-rlt">
      <li><input value="" class="ipt" name="user_name" id="user_name" type="text" placeholder="登录名/手机号/邮箱" autocomplete="off"></li>
      <li><input id="pwd" class="ipt" value="" name="password" type="password" placeholder="密码"></li>
    </ul>
    <ul class="btn-outer">
      <li><a href="my.php">登&nbsp;&nbsp;录</a></li>
      <li><a href="reg.php">免费注册</a></li>
    </ul>
  </form>
  
  <?php include_once "copyright.php"; ?>
  
</div><!--.wrapper end//-->
</body>
</html>