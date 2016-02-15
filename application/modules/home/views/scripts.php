<link rel="stylesheet" href="<?php echo base_url();?>public/styles/popup.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>public/styles/shCore.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>public/styles/shCoreDefault.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/shCore.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/shBrushJScript.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/shBrushPhp.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/shBrushCss.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/shBrushXml.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	$("#menu > ul > li > a").eq(<?php if(isset($eq)){ echo $eq;}else{ echo 0;} ?>).addClass("active");
});
</script>
<script type="text/javascript">SyntaxHighlighter.all();</script>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43484357-1', 'phpandmysql.net');
  ga('send', 'pageview');
</script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/popup.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/scripts/jquery.session.js"></script>
<script type="text/javascript">
	var popup_area = "";
	var base_url = '<?php echo base_url(); ?>';
	popup_area += "<div id='popupContact'>";
	popup_area += "<div><a id='popupContactClose' href='javascript:;'><img src='"+base_url+"public/images/ico_close.png' alt='close'></a></div>";
	popup_area += "<a href='#' target='_blank'><img src='"+base_url+"public/images/banner-php.jpg' style='width:500px;height:225px' alt='Khóa h&#7885;c php 2016' /></a>";
	popup_area += "</div><div id='backgroundPopup'></div>";
	document.write(popup_area);
</script>