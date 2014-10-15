jQuery(document).ready(function() {

    new jBox('Modal', {
        attach: jQuery('#zbsqzd'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">您的申请已提交，请等待审核！</div>'
    });
    	
    new jBox('Modal', {
        attach: jQuery('#popupM1'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">成功加入指店</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('.popupM2'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">收藏成功</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('#popupM3'),
        height: 150,
        title: '提示',
        content: '<div style="line-height:24px; font-size:14px; width:180px;">打开您的微信，搜索“Only”公众号，关注即可获得奖励！</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('#popupM4'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">签到成功，积分+20</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('#popupM5'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">敬请关注！</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('.xuanze_curr'),
        height: 140,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">目标选择成功！<br/><a href="my_mubiao.php" style=" height:30px; line-height:30px; text-align:center; border-radius:3px; font-size:12px; color:#fff; background:#f86b03; display:block; margin-top:10px;">确定</a></div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('.guanzhuM'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">关注成功！</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('.zanM'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">赞+1</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('#bianji1'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">你没有编辑的权限！</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('#bianji2'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">事件已取消，不可编辑！</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('#qingchuM'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">清除成功</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('#banbenM'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">已是最新版本！</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('#jiaruM'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">加入成功，等待审核！</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('#xianxiaM'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">线下活动，无会议室可进！</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('#xianxiaM1'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">事件已取消，无会议室可进！</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('.gongyiOK'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">你已参加过，不可重复参加！</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('.gongyiNO'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">活动未开始，敬请关注！</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('.gongyiMore'),
        height: 100,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">更多活动，敬请关注！</div>'
    });
	
	new jBox('Modal', {
        attach: jQuery('.deleteM'),
        height: 140,
        title: '提示',
        content: '<div style="line-height:30px; font-size:14px;">确定删除！<br/><a href="my_share.php" style=" height:30px; line-height:30px; text-align:center; border-radius:3px; font-size:12px; color:#fff; background:#f86b03; display:inline-block; margin:10px 10px 0 0; padding:0 20px;">确定</a><a href="my_share.php" style=" height:30px; line-height:30px; text-align:center; border-radius:3px; font-size:12px; color:#fff; background:#f86b03; display:inline-block; margin-top:10px; padding:0 20px;">取消</a></div>'
    });


    $("#androidAppJump").click(function() {
            window.appJS.goBack();
    });

	
});