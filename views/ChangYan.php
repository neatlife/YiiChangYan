<div id="SOHUCS" <?php if ($this->sid): ?><?php echo CHtml::encode($this->sid); ?><?php endif; ?>></div>
<?php if ($this->isMobile): ?>
	<!--手机版-->
	<script>
	(function(){
		var expire_time = parseInt((new Date()).getTime()/(5*60*1000));
		var head = document.head || document.getElementsByTagName("head")[0] || document.documentElement;
		var script_version = document.createElement("script"),script_cyan = document.createElement("script");
		script_version.type = script_cyan.type = "text/javascript";
		script_version.charset = script_cyan.charset = "utf-8";
		script_version.onload = function(){
			script_cyan.id = 'changyan_mobile_js';
			script_cyan.src = 'http://changyan.itc.cn/upload/mobile/wap-js/changyan_mobile.js?client_id=<?php echo $this->appId; ?>&'
							+ 'conf=<?php echo $this->conf; ?>&version=' + cyan_resource_version;
			head.insertBefore(script_cyan, head.firstChild);
		};
		script_version.src = 'http://changyan.sohu.com/upload/mobile/wap-js/version.js?_='+expire_time;
		head.insertBefore(script_version, head.firstChild);
	})();
	</script>
<?php else: ?>
	<?php if ($this->compatible): ?>
		<!--兼容版，可保证页面完全兼容-->
		<script>
		  (function(){
			var appid = '<?php echo $this->appId; ?>',
			conf = '<?php echo $this->conf; ?>';
			var doc = document,
			s = doc.createElement('script'),
			h = doc.getElementsByTagName('head')[0] || doc.head || doc.documentElement;
			s.type = 'text/javascript';
			s.charset = 'utf-8';
			s.src =  'http://assets.changyan.sohu.com/upload/changyan.js?conf='+ conf +'&appid=' + appid;
			h.insertBefore(s,h.firstChild);
		  })()
		</script>
	<?php else: ?>
		<!--高速版，加载速度快，使用前需测试页面的兼容性-->
		<script>
		  (function(){
			var appid = '<?php echo $this->appId; ?>',
			conf = '<?php echo $this->conf; ?>';
			var doc = document,
			s = doc.createElement('script'),
			h = doc.getElementsByTagName('head')[0] || doc.head || doc.documentElement;
			s.type = 'text/javascript';
			s.charset = 'utf-8';
			s.src =  'http://assets.changyan.sohu.com/upload/changyan.js?conf='+ conf +'&appid=' + appid;
			h.insertBefore(s,h.firstChild);
			window.SCS_NO_IFRAME = true;
		  })()
		</script>
	<?php endif; ?>
<?php endif; ?>