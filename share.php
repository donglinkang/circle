<!--我要分享 begin-->
<div id="op_ov_bg"></div>
<div id="op_ov_cd">
  <div class="cont">
    <h2>告诉好友你的发现</h2>
    <div class="c_info">
      <ul>
        <li><a href="javascript:(0);"><span class="icon_sinawb"></span><em>新浪微博</em></a></li>
        <li><a href="javascript:(0);"><span class="icon_qqwb"></span><em>腾讯微博</em></a></li>
        <li><a href="javascript:(0);"><span class="icon_qq"></span><em>QQ好友</em></a></li>
        <li><a href="javascript:(0);"><span class="icon_qzone"></span><em>QQ空间</em></a></li>
        <li><a href="javascript:(0);"><span class="icon_weixin"></span><em>微信</em></a></li>
      </ul>
    </div>
    <p>取消</p>
  </div>
</div>
<!--我要分享 end-->
<script type="text/javascript">
//我要分享
$(document).ready(function(){
  bindListener2();
});
function open_ov_cdd(){
  $("html").addClass("find_openhtml");
  $("body").addClass("find_openhtml");
  $("#op_ov_bg").css("display","block").animate({"opacity":"0.5"},300);
  $("#op_ov_cd").css("display","block").animate({"bottom":"0"},400);
  bindListener2();
};
function bindListener2(){ 
  $("#op_ov_cd p").unbind().click(function(){
	$("html").removeClass("find_openhtml");
	$("body").removeClass("find_openhtml");
	$("#op_ov_bg").animate({"opacity":"0"},400, function(){
	  $(this).css("display","none");
	});
	$("#op_ov_cd").animate({"bottom":"-400px"},300, function(){
	  $(this).css("display","none");
	});
  });
};
</script>