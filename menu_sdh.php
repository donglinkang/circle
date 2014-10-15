<div id="cn-wrapper">
  <ul class="sdh_menu">
    <i class="sanjiao"></i>
    <li><a href="###"><span>首页</span></a></li>
    <li><a href="###"><span>提问</span></a></li>
    <li><a href="###"><span>资源</span></a></li>
    <li><a href="###"><span>闲聊</span></a></li>
  </ul>
</div>
<!--主菜单弹出透明背景-->
<div id="cn-overlay" class="cn-overlay"></div>
<script src="js/polyfills.js"></script>
<script type="text/javascript">
//主菜单
(function(){

	var button = document.getElementById('cm-btnd'),
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
	    button.innerHTML = "指帮<img src='images/menu_jt_u.png'>";
	    classie.add(overlay, 'on-overlay');
	    classie.add(wrapper, 'opened-nav');
	}
	function closeNav(){
		open = false;
		button.innerHTML = "指帮<img src='images/menu_jt_d.png'>";
		classie.remove(overlay, 'on-overlay');
		classie.remove(wrapper, 'opened-nav');
	}
	document.addEventListener('click', closeNav);

})();
</script>