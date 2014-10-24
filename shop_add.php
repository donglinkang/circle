<?php include_once "header.php"; ?>
<script type="text/javascript">
$(function(){
	var data = ['010000:福建省','020000:上海市','030000:浙江省','040000:安徽省','050000:广东省','010100:厦门市','020100:上海市','030100:杭州市','040100:合肥市','050100:珠海市','010101:湖里区','010102:思明区','020101:闸北区','020201:吴中区','020202:工业园区','030101:上城区','040101:庐阳区'];
	$('#test1').ganged({'data': data, 'width': 70, 'height': 30});
})
</script>

<body>
<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">门店地址</div>
  </header><!--.headBox end//-->
  
  
  
  <div id="test1" style="margin:10px 10px 0;">
	<input type="hidden" class="province" value="010000"/>
	<input type="hidden" class="city" value="010100"/>
	<input type="hidden" class="area" value="010101"/>
	<div name="province" type="selectbox" style="z-index:2;"><div class="opts"></div></div>
	<div name="city" type="selectbox" style="z-index:2;"><div class="opts"></div></div>
	<div name="area" type="selectbox" style="z-index:2;"><div class="opts"></div></div>
    <a href="javascript:(0);" style="width:70px; height:30px; line-height:30px; border-radius:3px; border:1px solid #ddd; display:inline-block; background:#fff; text-align:center;">确定</a>
  </div>
  <div class="fc"></div>
    
  <ul class="shop_add">
    <li>
      <h3><a href="shop_map.php">Only（湖里万达）</a></h3>
      <p class="add"><span>厦门市湖里区仙岳路4666号万达广场万达百货</span><span>1.5km</span></p>
      <p class="buts"><span><a href="gps.php"><i></i>导航到店</a></span><span><a href="tel:05925256528"><i></i>拨打电话</a></span></p>
    </li>
    <li>
      <h3><a href="shop_map.php">Only（厦门思明店）</a></h3>
      <p class="add"><span>厦门市思明区禾祥西路691号</span><span>1.5km</span></p>
      <p class="buts"><span><a href="gps.php"><i></i>导航到店</a></span><span><a href="tel:05925886680"><i></i>拨打电话</a></span></p>
    </li>
    <li>
      <h3><a href="shop_map.php">Only（厦门思明店）</a></h3>
      <p class="add"><span>嘉禾路321号汇腾大厦3层</span><span>1.5km</span></p>
      <p class="buts"><span><a href="gps.php"><i></i>导航到店</a></span><span><a href="tel:05925200218"><i></i>拨打电话</a></span></p>
    </li>
    <li>
      <h3><a href="shop_map.php">Only（厦门思明店）</a></h3>
      <p class="add"><span>莲前东路288号瑞景商业广场(莲前东路)1层</span><span>1.5km</span></p>
      <p class="buts"><span><a href="gps.php"><i></i>导航到店</a></span><span><a href="tel:05925913508"><i></i>拨打电话</a></span></p>
    </li>
    <li>
      <h3><a href="shop_map.php">Only（厦门思明店）</a></h3>
      <p class="add"><span>中山路193-215号来雅百货(思明店)2层</span><span>1.5km</span></p>
      <p class="buts"><span><a href="gps.php"><i></i>导航到店</a></span><span><a href="tel:05922051098"><i></i>拨打电话</a></span></p>
    </li>
  </ul>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

</body>
</html>