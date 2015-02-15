	@extends('core.document_head')
	<div id="pjax">
		<div id="wrapper" data-adminica-nav-top="1" data-adminica-side-top="1">
			<div id="topbar" class="clearfix">
			</div>

			@yield('content')

		</div>
<!-- Google Analytics Code (Remove if not needed)

		<script type="text/javascript">


		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-*******-*']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();


		</script>
-->
		@extends('core.document_footer');