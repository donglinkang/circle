<?php include_once "header.php"; ?>
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

<body>

<div class="wrapper mzd_box" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a id="androidAppJump" href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">指店管理</div>
    <?php //include_once "menu_my.php"; ?>
  </header><!--.headBox end//-->

  
  <div class="my_zhid_head">
    <div class="ssdp"><a href="my_income.php" class="zdjj">我的收益：￥48500</a></div>
    <div class="head_img"><img src="temp/q_z05.jpg"></div>
    <div class="mzh_con">
      <div>
        <strong>涂达敏的指店</strong>
        <div><span class="dengjiBox"><b class="vip3"></b></span><!-- <span>0005号店</span> --><i class="ico-q">企</i><i class="ico-m0">盟</i><!-- <i class="ico-m">盟</i> --></div>
      </div>
      <!--<div><span class="i_dj">等级：</span><div class="stars fl"><i style="width:50%;"></i></div></div>-->
      <!-- <div><a href="shop_map.php"><i class="map"></i>厦门万达店</a><a href="tel:05925256528"><i class="tel"></i>拨打电话</a></div> -->
    </div>
  </div>



  <div class="mzd_memg">
    <dl>
      <dt><a href="my_shop_d.php"><em>我的指辑</em><span>查看所有专辑</span></a></dt>
      <dd><a href="my_shop_new.php"><em>新品上架</em><span></span></a></dd>
      <dd><a href="my_shop_njp.php"><em>热卖精品</em><span></span></a></dd>
      <dd><a href="my_shop_ng.php"><em>内购福利</em><span></span></a></dd>
      <dd><a href="my_shop_lm.php"><em>联盟专辑</em><span></span></a></dd>
    </dl>
    
    <dl>
      <dt><a href="my_shop_dd2.php"><em>指店订单</em><span>查看全部订单</span></a></dt>
      <ul>
        <li><a href="my_shop_dd.php"><i class="icon-money"></i><span>待付款</span></a></li>
        <li><a href="my_shop_dd.php"><i class="icon-gift"></i><span>待发货</span></a></li>
        <li><a href="my_shop_dd.php"><i class="icon-truck"></i><span>待收货</span></a></li>
        <li><a href="my_shop_dd.php"><i class="icon-retweet"></i><span>退款</span></a></li>
      </ul>
    </dl>
  </div>




  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->
</body>
</html>