<?php include_once "header.php"; ?>
<body>

<div class="wrapper">
 
  <header class="headBox">
    <a href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">确定下单</div>
  </header><!--.headBox end//-->
  
  <div class="my-pzTitle"><h3><span>|</span>收货人信息</h3></div>
  
  <div class="cst-orderInfo">
    <ul>
      <li>收货人：张三 13859986561</li>
      <li>详细地址：福建省 厦门市 湖里区 观音山国际运营中心7好楼1603</li>
      <li>备注：记得发赠品哦！</li>
    </ul>
  </div>
  
  <div class="my-pzTitle"><h3><span>|</span>选择支付方式</h3></div>
  
  <div class="cst-payment">
    <ul>
      <li><label><input type="radio" name=""><img src="temp/t_14.jpg"></label><p>支付宝支付 <br><span>仅支持支付宝</span></p></li>
    </ul>
  </div>
  
  <div style=" border-bottom:10px solid #fff;">
    <div class="my-pzTitle"><a href="shopOrdar4.php"><h3><span>|</span>选择配送方式</h3></a></div>
  </div>
  <div class="tihuo_ziti">
    <p>配送方式：到店自提</p>
    <p>营业时间：9:00~22:00</p>
    <p>门店地址：厦门市湖里区仙岳路4666号万达广场万达百货(湖里店)1层</p>
    <p class="buts"><a href="gps.php">导航到店</a></p>
  </div>
  
  <div class="my-pzTitle"><h3><span>|</span>选购的商品</h3></div>
  
  <div class="cst-choose">
    <div class="chooseShop">
      <img src="temp/jlb_pr5.jpg">
      <ul>
        <li class="title">ONLY秋装新品修身短款金属拉链西服外套上衣女T|113333006</li>
        <li>单价：<span class="sp2">￥249.50</span></li>
        <li><span>数量：1</span></li>
        <li class="fr">小计：<span class="sp2">￥249.50</span></li>
      </ul>
    </div>
    <div class="totalShop">
      <p><span class="sp1">1</span> 件商品，合计：<span class="sp1">￥249.50</span></p>
      <p>应付总额：<span class="sp2">￥249.50</span></p>
    </div>
  </div>
  
  <div class="cst-settle2">
    <label>应付总额：<span class="sp1">￥249.50</span></label><a href="shopOrdar02.php"><span class="sp2">提交订单</span></a>
  </div>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

</body>
</html>