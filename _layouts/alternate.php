<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
  </head>
  <body>
    <div id="header">
      <?php render_partial('header'); ?>
    </div>
    <div id="content">
      <h1>WOW that's cheezy</h1>
      <?php echo $content_for_layout;?>
    </div>
    <div id="sidebar">
      <?php render_partial('menu'); ?>
    </div>
    
  </body>
</html>

