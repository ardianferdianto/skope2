<?php echo $javascript->link('jquery-1.10.1.min.js'); ?>
<?php echo $javascript->link('jquery.easing.1.3.js'); ?>
<?php echo $javascript->link('jquery.form.min.js'); ?>
<?php
  $session->flash();
  $session->flash('auth');
  echo $content_for_layout;
?>
        
