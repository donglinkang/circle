<?php include_once "header.php"; ?>

<body>
<div class="wrapper" style="padding-bottom:1px;">
  
  <header class="headBox">
    <a href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">注&nbsp;&nbsp;册</div>
  </header><!--.headBox end//-->
  
  <form class="form">
    <ul class="ps-rlt">
      <li class="font14">请输入手机号码<span class="xinghao">*</span></li>
      <li style="height:42px;">
        <input value="" class="ipt ipt2" name="mobile" id="mobile" type="text" placeholder="输入13/14/15/18开头的手机号" autocomplete="off">
        <input type="button" class="yzm" value="获取验证码">
      </li>
      <li class="font14">填写获取验证码<span class="xinghao">*</span></li>
      <li><input id="captcha" class="ipt" value="" name="captcha" type="text"></li>
    </ul>
    <ul class="btn-outer">
      <li><a href="reg_ok.php" style="width:100%;">立即注册</a></li>
    </ul>
  </form>
  
  <?php include_once "copyright.php"; ?>
  
</div><!--.wrapper end//-->
</body>
</html>