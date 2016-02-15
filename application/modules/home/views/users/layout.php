<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="600" />
<title><?php echo $title; ?></title>
<link rel="author" href="https://plus.google.com/102870804259820301805" />
<link rel="canonical" href="<?php echo base_url(); ?>" />
<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" />
<meta name="keywords" content="Dang nhap, Tao tai khoan, Dang ky tai khoan" />
<meta name="description" content="Đăng nhập tài khoản của bạn, để sử dụng được hệ thống câu hỏi trên phpandmysql.net bạn cần phải đăng nhập" />
<meta property="og:type" content="blog" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="Đăng nhập tài khoản của bạn trên Phpandmysql.net" />
<meta property="og:url" content="<?php echo base_url(); ?>" />
<meta property="fb:admins" content="100003239486888"/>
<meta name="twitter:card" content="summary" />
<link rel="stylesheet" href="<?php echo base_url();?>public/styles/newstyle.css" type="text/css" media="screen" />
<?php $this->load->view("scripts");?>
</head>

<body>
<?php $this->load->view("header");?>
<div id="main">
    <?php $this->load->view($template, $data); ?>
    <?php $this->load->view("footer"); ?>
</div>
</body>
</html>