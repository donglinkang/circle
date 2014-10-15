<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <section class="my_tabbtn">
      <ul>
        <li><a href="zhidian.php">指友的店</a></li>
        <li class="current"><a href="javascript:void(0)">我的指店</a></li>
      </ul>
    </section>
  </header><!--.headBox end//-->
  
  <ul class="my_finger_cj">
    <li><label>姓名</label><input class="ipt" name="" type="text"></li>
    <li><label>身份证</label><input class="ipt" name="" type="text"></li>
    <li><label>证件上传</label><input class="ipt" name="" type="file"></li>
    <li><label>你的电话</label><input class="ipt" name="" type="text"></li>
    <li>
      <label>请选择</label>
      <section class="open_tabbtn">
        <ul class="Fadetab">
          <li class="current"><a href="javascript:void(0)">我有推荐人</a></li>
          <li><a href="javascript:void(0)">我是员工</a></li>
        </ul>
      </section>
      <div class="Fadecon">
        <ul style="margin-top:15px;">
          <li><label>推荐人</label><a href="zhiquan_yaoq.php" class="ipt" style=" float:left; border-radius:3px; display:block;"></a></li>
        </ul>
        <ul style="margin-top:15px;">
          <li>
            <label>选择品牌</label>
            <select name="">
              <option value="Only">Only</option>
              <option value="Only">Only</option>
              <option value="Only">Only</option>
            </select>
          </li>
          <li>
            <label>选择区域</label>
            <select name="">
              <option value="福建">福建</option>
              <option value="江西">江西</option>
              <option value="广东">广东</option>
            </select>
            <select name="">
              <option value="厦门">厦门</option>
              <option value="泉州">泉州</option>
              <option value="安溪">安溪</option>
            </select>
            <select name="">
              <option value="思明区">思明区</option>
              <option value="湖里区">湖里区</option>
              <option value="海沧区">海沧区</option>
            </select>
          </li>
          <li>
            <label>选择店铺</label>
            <select name="">
              <option value="万达店(SM店)">万达店(SM店)</option>
              <option value="万达店(万达店)">万达店(万达店)</option>
              <option value="万达店(中山路店)">万达店(中山路店)</option>
            </select>
          </li>
        </ul>
      </div>
    </li>
    <li class="buts"><a href="my_zhidian.php">提交申请</a></li>
    <!--<li><label>指辑名称</label><input name="" type="text"></li>
    <li><label>指辑简介</label><textarea name="" cols="" rows=""></textarea></li>-->
  </ul>
  
  
  
  
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->
</body>
</html>