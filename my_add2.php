<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">添加新地址</div>
    <a href="javascript:history.go(-1);" class="close">保存</a>
  </header><!--.headBox end//-->
  
  <div class="cst-addressAdd">
    <ul>
      <li><label>发货人</label><input type="text" class="input1"></li>
      <li><label>手机号码</label><input type="text" class="input1"></li>
      <li><label>邮政编码</label><input type="text" class="input1"></li>
      <li><label>所在地址</label><select name=""><option>福建省</option></select><select name=""><option>厦门市</option></select><select name=""><option>思明区</option></select></li>
      <li class="input2"><label>详细地址</label><input type="text" class="input1"></li>
    </ul>
  </div>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

</body>
</html>