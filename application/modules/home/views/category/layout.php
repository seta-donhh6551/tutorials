<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php echo $title; ?></title>
<link rel="author" href="https://plus.google.com/102870804259820301805" />
<link rel="canonical" href="<?php echo base_url(); ?>" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" />
<meta name="keywords" content="<?php echo $result['cate_keys']; ?>" />
<meta name="description" content="<?php echo strip_tags($result['cate_ext']); ?>" />
<meta property="og:type" content="blog" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo strip_tags($result['cate_ext']); ?>" />
<meta property="og:url" content="<?php echo base_url(); ?>" />
<meta property="og:site_name" content="<?php echo $config['config_title']; ?>" />
<?php $this->load->view("scripts");?>
</head>

<body>
<div id="td-outer-wrap">
	<?php $this->load->view("head-mobile");?>

	<!-- Content -->
	<div class="td-transition-content-and-menu td-content-wrap">
		<?php $this->load->view("header");?>

		<?php $this->load->view("category/content");?>

		<!-- Footer -->
		<?php $this->load->view("footer"); ?>
		<!-- End footer -->
	</div>
	<!-- End content -->
</div>
</body>
</html>