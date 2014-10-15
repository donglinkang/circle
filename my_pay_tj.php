<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">添加支付宝</div>
  </header><!--.headBox end//-->
  
  <div class="cst-payAdd">
    <h3>请填写支付宝，用于<b>支付</b>与<b>收取</b>资金</h3>
    <ul>
      <li class="zhanghao">支付宝账号：<input type="text" class="input1" placeholder=""></li>
      <li class="mima">请再次输入：<input type="text" class="input1" placeholder=""></li>
      <li class="i"><i></i><p class="p1">请确保你输入的支付宝账号是你自己的，否则因此造成的不必要的后果，本平台拥有最终解释权！</p></li>
      <li><input type="submit" class="btn" value="添加" onClick="location.href='my_pay.php'"></li>
    </ul>
  </div>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

</body>
</html>