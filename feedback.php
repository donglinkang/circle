<?php include_once "header.php"; ?>

<body>
<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">反馈</div>
  </header><!--.headBox end//-->
  
  <div class="sdh_fabu">
    <div class="leixing"><label>类型</label><select>
      <option value="平台">平台</option>
      <option value="商家">商家</option>
    </select></div>
    <div class="biaoti"><label>标题</label><input type="text" placeholder="给建议取个标题吧！"></div>
    <div class="neir_cont"><label>内容</label><textarea cols="" rows="" placeholder="有事没事，说两句！"></textarea></div>
    <a href="javascript:(0);" class="butss" style="width:100%;">提交</a>
  </div>
  
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->


</body>
</html>