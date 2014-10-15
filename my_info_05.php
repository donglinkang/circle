<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">地区</div>
    <a href="my_info.php" class="close">保存</a>
  </header><!--.headBox end//-->
  
  <ul class="user_edit">
    <li class="select">
      <select name="">
        <option value="" selected="">福建省</option>
        <option value="">江西省</option>
      </select>
      <select name="">
        <option value="" selected="">厦门市</option>
        <option value="">龙岩市</option>
      </select>
      <select name="">
        <option value="" selected="">湖里区</option>
        <option value="">思明区</option>
      </select>
	</li>
  </ul>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

</body>
</html>