<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>A Cheezy Example<?php if(isset($title)) echo ' - '. $title;?></title>
  <link rel="stylesheet" href="/stylesheets/screen.css" type="text/css" media="screen" title="no title" charset="utf-8">
</head>

<body>
  <div id="container">
    <div id="header">
      <?php render_partial('header'); ?>
    </div>
    <div id="sidebar">
      <?php render_partial('menu'); ?>
    </div>
    <div id="content">
      <?php echo $content_for_layout; ?>
    </div>
    <?php if (Timer::$started): ?>
    <div id="footer">
      A Prototype App &copy; 2010 
      <div id="timer">
        <?php echo Timer::end(5);?>
        <?php echo " - " .round(memory_get_usage(true) / (1024*1024),3)." MB";?>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <?php render_partial('google_analytics'); ?>
</body>
</html>