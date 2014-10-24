<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a id="androidAppJump" href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title" style="line-height:20px; padding-top:3px;">添加银行卡<span style="display:block; font-size:12px;">设置支付密码</span></div>
  </header><!--.headBox end//-->
  
  <div class="cst_pay_tj">
    <p>请输入支付密码，以添加新的银行卡。</p>
    <ul>
      <li><label>新密码</label><input type="text" value=""></li>
      <li><label>确认新密码</label><input name="" type="text"></li>
    </ul>
    <a href="my_pyhk_tj2.php" class="buts">确定，下一步</a>
  </div>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

</body>
</html>