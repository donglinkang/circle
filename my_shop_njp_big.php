<?php include_once "header.php"; ?>

<body>
<div class="wrapper">
 
  <header class="headBox">
    <a href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">商品详情</div>
    <a href="javascript:open_ov_cdd()" class="fenxiang">分享</a>
    <?php //include_once "menu.php"; ?>
  </header><!--.headBox end//-->
  
  <div class="shop_details">


  
    <div class="mainPic">
      <div class="proinfo-slides pro-slides">
      <a class="example1" title="产品图片" href="###"><p><img alt="example1" src="temp/tn_n_big_07.jpg" /></p></a>
      <a class="example1" title="产品图片" href="###"><p><img alt="example1" src="temp/tn_n_big_08.jpg" /></p></a>
      <a class="example1" title="产品图片" href="###"><p><img alt="example1" src="temp/tn_n_big_09.jpg" /></p></a>
      </div>
      <script>
      $('.pro-slides').slidesjs({
        //width: 100%,
        //height: 210,
        navigation: false,
        start: 1,
        play: {
          auto: false
        }
      });
      </script>
      <div class="icon_con">
        <a href="javascript:(0);" class="popupM2" title="收藏"><i class="favo_icon"></i></a>
        <a href="javascript:(0);" id="popupM1" title="加入购物车"><i class="joinZd_icon"></i></a>
      </div>
    </div>
    <div class="pro_info">
      <p class="title">ONLY秋新品猪皮拼接兔毛毛领腰带皮衣女T|113328010</p>
      <p><span class="price font14">￥2400.00</span><span class="price_old">￥5000.00</span></p>
      <!--<p class="pdt10"><span class="price">联盟价：￥5000.00</span></p>-->
    </div>
    
    <div class="buy_con">
      <p class="number"><span>数量：</span><span>-</span><input type="text" value="1"><span>+</span></p>
      <p class="buy"><span><a href="shopCart.php">立即购买</a></span><span><a href="shop_map.php">预约到店体验</a></span></p>
    </div>
    
    <section class="tabbtn">
      <ul class="Fadetab">
        <li class="current"><a href="javascript:void(0)">产品介绍</a></li>
        <li><a href="javascript:void(0)">产品参数</a></li>
        <li><a href="javascript:void(0)">评论(50)</a></li>
      </ul>
    </section>
    
    <div class="Fadecon">
    

      <div class="shop_description">
        <p>【2014秋装商场新品】精致的系带设计符合高贵典雅的气质拼接兔毛的大翻领可以拆卸，方便各种场合的搭配与塑造各种形象</p>
      </div>
      <!--.shop_description end//-->
      
      
      <div class="shop_description">
        <p>【品牌】 ONLY</p>
        <p>【货号】 114310017</p>
        <p>【袖长】 长袖</p>
        <p>【衣门襟】 拉链</p>
        <p>【皮质】 羊皮</p>
        <p>【适用年龄】 18-24周岁</p>
        <p>【年份/季节】 2014年秋季</p>
        <p>【颜色分类】 010黑色</p>
        <p>【尺码】  155/76A/XS 160/80A/S 165/84A/M 170/88A/L 175/92A/XL</p>
      </div>
      <!--.shop_description end//-->
    
    
    
      <div class="mesg_con">
        <dl class="mesg">
          <dd>
            <div class="show">
              <div class="pic"><img src="temp/jlb_user.jpg"></div>
              <div class="info">
                <h3>九哲<i>00:23</i></h3>
                <p>不错不错，帅气~~~！</p>
              </div>
            </div>
            <!-- //.show -->
            <div class="show">
              <div class="pic"><img src="temp/jlb_user.jpg"></div>
              <div class="info">
                <h3>九哲<i>00:23</i></h3>
                <p>不错不错，帅气~~~！</p>
              </div>
            </div>
            <!-- //.show -->
            <div class="show">
              <div class="pic"><img src="temp/jlb_user.jpg"></div>
              <div class="info">
                <h3>九哲<i>00:23</i></h3>
                <p>不错不错，帅气~~~！</p>
              </div>
            </div>
            <!-- //.show -->
            <div class="show">
              <div class="pic"><img src="temp/jlb_user.jpg"></div>
              <div class="info">
                <h3>九哲<i>00:23</i></h3>
                <p>不错不错，帅气~~~！</p>
              </div>
            </div>
            <!-- //.show -->
            <div class="show">
              <div class="pic"><img src="temp/jlb_user.jpg"></div>
              <div class="info">
                <h3>九哲<i>00:23</i></h3>
                <p>不错不错，帅气~~~！</p>
              </div>
            </div>
            <!-- //.show -->
          </dd>
        </dl>
        <!--<div class="comment"><a href="comment.php">我来评评</a></div>-->
      </div>
      <!--.mesg_con end//-->
      
      
    </div>
    <!--.Fadecon end//-->
  
  </div>
  <!--.shop_details end//-->
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

<div class="bottomcut">
  <footer>
    <ul>
      <li><a href="index.php"><i class="i1"></i><span>指帮</span></a></li>
      <li><a href="zhiyou.php"><i class="i4"></i><span>指友</span></a></li>
      <li class="curr"><a href="zhidian.php"><i class="i3"></i><span>指店</span></a></li>
      <li><a href="my.php"><i class="i5"></i><span>我</span></a></li>
    </ul>
  </footer>
</div>

<?php include_once "share.php"; ?>
</body>
</html>