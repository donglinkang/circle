<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
 <header class="headBox">
    <a id="androidAppJump" href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">我的指币</div>
  </header><!--.headBox end//-->
  
  <div class="my_bbx_box">
    <ul class="jifen">
      <li><span><b>200</b>今日指币</span></li>
      <li><span><b>1800</b>当前指币</span></li>
      <li><span><b>1.8万</b>总指币</span></li>
      <li><span><b>250</b>排行</span></li>
    </ul>
    <!--.jifen end//-->
    <ul class="bbx_zhibi">
      <li><a href="my_bbx_cz.php"><i></i><span>充值</span></a></li>
      <li><a href="my_bbx_tixian.php"><i></i><span>提现</span></a></li>
      <li><a href="target_prod2.php"><i></i><span>换购</span></a></li>
    </ul>
    <div class="bbx_buts">
      <span><a href="my_bbx_zbph.php">查看排行</a></span><span><a href="my_bbx_zb_big.php">查看明细</a></span><span><a href="renwu.php">赚指币</a></span>
    </div>
    <!--.bbx_buts end//-->
  </div>
  <!--.my_bbx_box end//-->
  
  <div class="bbx_zhao"><a href="my_pyhk.php"><span>我的银行卡</span><span>2张</span></a></div>
  
  <div class="bbx_zhao"><a href="my_pay.php"><span>我的支付宝</span></a></div>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->
</body>
</html>