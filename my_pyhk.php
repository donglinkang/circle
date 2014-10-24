<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a id="androidAppJump" href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">我的银行卡</div>
  </header><!--.headBox end//-->
  
  <div class="cst_pay">
    <ul>
      <span class="tit">信用卡</span>
      <li>
        <a href="javascript:(0);">
          <span><img src="temp/pay_01.jpg"></span>
          <span>建设银行<b>尾号8888 孙丽雯</b></span>
        </a>
      </li>
    </ul>
    <ul>
      <span class="tit">储蓄卡</span>
      <li>
        <a href="javascript:(0);">
          <span><img src="temp/pay_02.jpg"></span>
          <span>民生银行<b>尾号8886 孙丽雯</b></span>
        </a>
      </li>
    </ul>
    <a class="add" href="my_pyhk_tj.php" title="">添加银行卡</a>
  </div>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

</body>
</html>