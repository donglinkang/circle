<?php include_once "header.php"; ?>

<body>
<div class="wrapper" style="padding-bottom:1px;">
 
  <header class="headBox">
    <a id="androidAppJump" href="javascript:history.go(-1);" class="black"><i></i>返回</a>
    <div class="title">我的任务</div>
  </header><!--.headBox end//-->
  
  <div>
    <div class="bbx_mubiao2">
      <div class="mb_title"><a href="my_mubiao.php"><span>我的目标</span><span>查看所有目标</span></a></div>
      <div class="mubiao_left fr">
        <p>换购目标需要<b>2000.00</b>指币</p>
        <p>现有指币<b>1200.00</b>指币</p>
        <p>离目标还差<b>800.00</b>指币</p>
        <div class="jdt"><span style="width:50%;"></span><span></span></div>
        <p>去<a href="target_prod2.php">换购商城</a>逛逛？</p>
      </div>
      <div class="mubiao_right fl">
        <a href="target_prod.php"><img src="temp/jlb_pr4.jpg"></a>
      </div>
    </div>
  
    <!--<div class="renwu">
      <div class="tip">友情提示：完成任务后所产生的指币可直接到<br/><strong>“官方商城”</strong>进行商品兑换。</div>
      <ul class="renwu_con">
        <li></li>
        <li class="absolute1"><a href="javascript:(0);" id="popupM3"><i class="rw_01"><span><b>2000</b>指币</span></i><p>首次关注公众号</p></a></li>
        <li class="absolute7"><a href="javascript:(0);"><i class="rw_02"><span><b>200</b>指币</span></i><p>完善个人资料</p></a></li>
        <li class="absolute3"><a href="javascript:(0);" id="popupM4"><i class="rw_03"><span><b>20</b>指币</span></i><p>每日签到</p></a></li>
        <li class="absolute4"><a href="fx_list.php"><i class="rw_04"><span><b>20</b>指币</span></i><p>分享</p></a></li>
        <li class="absolute5"><a href="zhiquan_yaoq2.php"><i class="rw_05"><span><b>20</b>指币</span></i><p>邀请好友</p></a></li>
        <li class="absolute6"><a href="test_tf.php"><i class="rw_06"><span><b>20</b>指币</span></i><p>参与活动</p></a></li>
        <li class="absolute8"><a href="javascript:(0);" id="popupM5"><i class="rw_07"></i><p>即将上线</p></a></li>
        <li class="absolute2"><a href="shake.php"><i class="rw_08"><span><b>200</b>指币</span></i><p>参加活动</p></a></a></li>
      </ul>
    </div>-->
  </div>
    
  <div class="zbrw_box">
    <div class="rw_list">
      <dl>
        <dt><div>新手任务</div><div>完成次数</div><div>指币奖励</div><div>任务状态</div></dt>
        <dd><div>安装应用</div><div></div><div>50指币</div><div><a class="rw_e">已完成</a></div></dd>
        <dd><div>邀请好友</div><div><i>5</i>/10人</div><div>100指币</div><div><a class="rw_d">进行中</a></div></dd>
        <dd><div>参与回复</div><div><i>1</i>/3条</div><div>30指币</div><div><a class="rw_s RwZbhf">接受任务</a></div></dd>
        <dd><div>成交订单</div><div><i>0</i>/1笔</div><div>200指币</div><div><a class="rw_e">已完成</a></div></dd>

        <dt><div>每日任务</div><div>完成次数</div><div>指币奖励</div><div>任务状态</div></dt>
        <dd><div>签到</div><div><i>0</i>/1次</div><div>20指币</div><div><a class="rw_s" id="popupM4">我要签到</a></div></dd>
        <dd><div>发布指帮</div><div><i>0</i>/3条</div><div>50指币</div><div><a class="rw_s RwFbzb">接受任务</a></div></dd>
        <dd><div>指帮回复</div><div><i>0</i>/3条</div><div>30指币</div><div><a class="rw_s RwZbhf">接受任务</a></div></dd>
        <dd><div>成交订单</div><div><i>0</i>/1笔</div><div>80指币</div><div><a class="rw_s RwCgdd">接受任务</a></div></dd>
        
      </dl>
    </div>

    <div class="rw_yd">
      <div class="tit">做任务有什么用？</div>
      <a href="target_prod2.php">
      <ul>
        <li><i class="rw_ic1"></i><span>做任务</span></li>
        <li><i class="rw_ic2"></i><span>赚指币</span></li>
        <li><i class="rw_ic3"></i><span>换商品</span></li>
      </ul>
      </a>
    </div>


  </div>
  
  <?php include_once "copyright.php"; ?>
  
</div>
<!--.wrapper end//-->
</body>
</html>