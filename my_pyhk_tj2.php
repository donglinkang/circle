<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a id="androidAppJump" href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">添加银行卡</div>
  </header><!--.headBox end//-->
  
  <div class="cst_pay_tj">
    <p>请绑定持卡人本人的银行卡</p>
    <ul>
      <li><label>持卡人</label><input class="ipt1" type="text" disabled value="周全明"></li>
      <li><label>卡号</label><input name="" type="text"></li>
    </ul>
    <a href="my_pyhk_tj3.php" class="buts">下一步</a>
  </div>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

</body>
</html>