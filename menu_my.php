<button class="cn-button" id="cn-button"><img src="images/menu.png"></button>
<div id="cn-wrapper">
  <ul class="main_menu">
    <i class="sanjiao"></i>
    <li><a href="###"><i class="search"></i><span>首页</span></a></li>
    <li><a href="my_message.php"><i class="message"></i><span>消息<b>3</b></span></a></li>
    <li><a href="shopCart.php"><i class="shopCart"></i><span>购物车<b>1</b></span></a></li>
    <li><a href="javascript:open_ov_cdd()"><i class="feedback"></i><span>分享</span></a></li>
    <li><a href="tel:1395000000"><i class="contact"></i><span>联系卖家</span></a></li>
  </ul>
</div>
<!--主菜单弹出透明背景-->
<div id="cn-overlay" class="cn-overlay"></div>
<script src="js/polyfills.js"></script>
<script type="text/javascript">
//主菜单
(function(){

	var button = document.getElementById('cn-button'),
    wrapper = document.getElementById('cn-wrapper'),
    overlay = document.getElementById('cn-overlay');

	//单击该按钮时，打开和关闭菜单
	var open = false;
	button.addEventListener('click', handler, false);
	wrapper.addEventListener('click', cnhandle, false);

	function cnhandle(e){
		e.stopPropagation();
	}

	function handler(e){
		if (!e) var e = window.event;
	 	e.stopPropagation();//它不会触发点击事件的文件

	  	if(!open){
	    	openNav();
	  	}
	 	else{
	    	closeNav();
	  	}
	}
	function openNav(){
		open = true;
	    button.innerHTML = "<img src='images/menu_close.png'>";
	    classie.add(overlay, 'on-overlay');
	    classie.add(wrapper, 'opened-nav');
	}
	function closeNav(){
		open = false;
		button.innerHTML = "<img src='images/menu.png'>";
		classie.remove(overlay, 'on-overlay');
		classie.remove(wrapper, 'opened-nav');
	}
	document.addEventListener('click', closeNav);

})();
</script>