<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a id="androidAppJump" href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">填写银行卡信息</div>
  </header><!--.headBox end//-->
  
  <div class="cst_pay_tj">
    <ul>
      <p>请选择银行卡类型</p>
      <li><label>卡类型</label><span>招商银行&nbsp;信用卡</span></li>
      <p>请填写银行卡信息</p>
      <li><label>有效期</label><span>月份/年份</span></li>
      <p>请填写银行预留信息</p>
      <li><label>手机号</label><input type="text" placeholder="请输入银行预留手机号"></li>
      <li><input style="width:auto; position:relative; top:-10px; right:5px; margin-left:5px;" name="" type="checkbox" value="" checked="CHECKED">同意《用户协议》</li>
    </ul>
    <a href="###" class="buts">下一步</a>
  </div>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

</body>
</html>