<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php wp_title('-',true,'right'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/arial.js"></script>
<script type="text/javascript" src="j<?php bloginfo('template_directory'); ?>/s/cuf_run.js"></script>
<?php wp_head(); ?>
</head>

<body>
<div class="main">
  <div class="header">
    <div class="logo">
      <h1><a href="index.html"><?php bloginfo('name'); ?></a></h1>
      <p><?php bloginfo('description'); ?></p>
    </div>
    <div class="menu_nav">
    <!--  <ul>
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="support.html">Support</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>!-->
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('testmenu') ) : 
 
endif; ?> 
<?php //wp_page_menu(); ?>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
    <div class="hbg"><img src="<?php bloginfo('template_directory'); ?>/images/header_images.jpg" width="653" height="271" alt="" />
      <div class="text">
        <h3>Creating Futures</h3>
      </div>
    </div>
  </div>
