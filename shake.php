<?php include_once "header.php"; ?>

<body>

<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a id="androidAppJump" href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">摇一摇</div>
  </header><!--.headBox end//-->
  
  <div class="shake_game">
    <div class="tit"><i></i><p>再不摇一摇 宝贝就全没啦！</p></div>
    <div class="info " id="info_animation"> 
      <p class="title">恭喜您获得：</p>
      <div class="prize">
        <div class="zodiac"><img src="images/shake1_b.png"></div>
        <div class="prize_info">
          <p><b>小马</b>3000积分</p>
          <p>VIP卡1张</p>
          <p>您的幸运指数为8您今天的心情一定会大好</p>
        </div>
        <div class="fc"></div>
        <!--<a href="reg.php" class="buts">加入百宝箱</a>-->
        <a href="" class="text">我要再玩一次</a> <!-- javascript:again(); -->
      </div>
    </div>
    <div class="gaizi " id="gaizi_animation"></div>
    <div class="guang " id="guang_animation"></div>
    <div class="heshen"></div>
    <div class="bottom_info">
      <a href="javascript:open_ov_cdd()" class="fx">分享</a>
      <a href="javascript:(0);" onClick="yao()" style="position:absolute; width:50px; height:50px; top:-150px; right:0; background:rgba(0,0,0,0);"></a>
      <div><span>您还可以摇<b>2</b>次</span><span>分享即送<b>10</b>次</span></div>
    </div>
  </div>
  
  <section class="shake_tabbtn">
    <div>
      <ul class="Fadetab">
        <li class="current"><a href="javascript:void(0)">获奖排行</a></li>
        <li><a href="javascript:void(0)">游戏规则</a></li>
      </ul>
    </div>
  </section>
  
  <section class="Fadecon">
    <div class="shake_winning">
    
      <!--中奖动态排行前十 begin-->
      <div class="shake_notice">
        <ul id="winningNew" class="shake_noticTip">
          <li>恭喜指友<span>天天开心</span>摇出<img src="images/shake1.png">获得<b>3000</b>积分</li>
          <li>恭喜指友<span>小小</span>摇出<img src="images/shake1.png">获得<b>1000</b>积分</li>
          <li>恭喜指友<span>大大</span>摇出<img src="images/shake1.png">获得<b>2100</b>积分</li>
          <li>恭喜指友<span>不开心</span>摇出<img src="images/shake1.png">获得<b>1400</b>积分</li>
        </ul>
      </div>
      <!--中奖动态排行前十 end//-->
      
      <div class="title">积分排行榜</div>
      <ul class="ph_head">
        <li>指友名称</li>
        <li>积分</li>
        <li>次数</li>
      </ul>
      <ul class="ph_cont">
        <li><span><i>1</i>天天开心</span><span>56423</span><span>489</span></li>
        <li><span><i>2</i>天天开心</span><span>56423</span><span>489</span></li>
        <li><span><i>3</i>天天开心</span><span>56423</span><span>489</span></li>
        <li><span><i>4</i>天天开心</span><span>56423</span><span>489</span></li>
        <li><span><i>5</i>天天开心</span><span>56423</span><span>489</span></li>
        <li><span><i>6</i>天天开心</span><span>56423</span><span>489</span></li>
        <li><span><i>7</i>天天开心</span><span>56423</span><span>489</span></li>
        <li><span><i>8</i>天天开心</span><span>56423</span><span>489</span></li>
        <li><span><i>9</i>天天开心</span><span>56423</span><span>489</span></li>
        <li><span><i>10</i>天天开心</span><span>56423</span><span>489</span></li>
      </ul>
    </div>
    <!--获奖排行 end//-->
    
    <div class="shake_game_gz">
      <p>1、	每个用户每天第一次登陆可免费抽奖3次</p>
      <p>2、	每个用户每天第一次分享活动可获得3次抽奖机会</p>
      <p>3、	每次抽奖需消耗用户50个积分,抽奖次数不限！</p>
      <p>4、	虚拟奖品：积分直接收录在积分记录和积分余额，优惠卡券收录在百宝箱，每天登陆提醒百宝箱还有优惠卡券未使用；</p>
      <p>5、实物奖品由客服联系中奖者，并在月底统一寄出，如中奖者原因导致联系未成功，30天后自动实物取消中奖资格.</p>
      <p>6、在法律允许范围内，本活动的最终解释权归本商户所有。</p>
    </div>
    <!--游戏规则 end//-->
  </section>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->

<script type="text/javascript">
var has_yao = false;
var yaonumber = 0;
function yao(){
	var myVideo=document.getElementById("sound");	 
	$('#info_animation').addClass('info_animation');	
	$('#gaizi_animation').addClass('gaizi_animation');	
	$('#guang_animation').addClass('guang_animation');	
	myVideo.play();
}

function again(){
	$('#info_animation').removeClass('info_animation');	
	$('#gaizi_animation').removeClass('gaizi_animation');	
	$('#guang_animation').removeClass('guang_animation');	
	has_yao = false;
	yaonumber++;
}

if(window.DeviceMotionEvent) {
	var speed = 15;
	var x = y = z = lastX = lastY = lastZ = 0;
	window.addEventListener('devicemotion', function(){
	var acceleration =event.accelerationIncludingGravity;
	
	var myVideo=document.getElementById("sound");	  
	x = acceleration.x;
	y = acceleration.y;
	z = acceleration.z;
	var nowspeed = Math.abs(x+y+z-lastX-lastY-lastZ)
	if( nowspeed > speed && has_yao == false) { //yaonumber < 2 && 
		$('#info_animation').addClass('info_animation');	
		$('#gaizi_animation').addClass('gaizi_animation');	
		$('#guang_animation').addClass('guang_animation');	
		//document.body.style.backgroundColor = color[Math.round(Math.random()*10)%6];
		myVideo.play();
		has_yao = true;
	}
	lastX = x;    
	lastY = y; 
	lastZ = z;

	}, false);
}
</script>
<audio id="sound">
  <source src="images/glass.wav" type="audio/wav">
  <source src="images/1.mp3" type="audio/mpeg">
</audio>
<script type="text/javascript">
// 中奖动态
if(document.getElementById("winningNew")){
	var scrollup = new ScrollText("winningNew");
	scrollup.LineHeight = 50;        //单排文字滚动的高度
	scrollup.Amount = 1;            //注意:子模块(LineHeight)一定要能整除Amount.
	scrollup.Delay = 10;           //延时
	scrollup.Start();             //文字自动滚动
	scrollup.Direction = "up";   //默认设置为文字向上滚动
}
</script>

<?php include_once "share.php"; ?>
</body>
</html>