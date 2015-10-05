<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout; ?></title>


<link rel="shortcut icon" href="../favicon.ico">
<link href="<?php echo $this->webroot;?>css/bootstrap.min.css" rel="stylesheet">

<?php echo $html->css('normalize'); ?>
<?php echo $html->css('demo'); ?>
<?php echo $html->css('bookblock'); ?>


<?php echo $html->css('jquery.fancybox'); ?>
<?php 
echo $html->css('notif-style'); 
echo $html->css('app.css');
?>

<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/videojs.css" />

<link rel="stylesheet" type="text/css" href="<?php echo $this->webroot;?>css/videojs.record.css" />
<?php echo $html->css('jquery.fancybox'); ?>

<?php echo $html->css('helpers/jquery.fancybox-buttons.css?v=1.0.5'); ?>
<?php echo $html->css('helpers/jquery.fancybox-thumbs.css?v=1.0.7'); ?>


<?php 
echo $javascript->link('jquery-2.1.4.min.js');
echo $javascript->link('jquery-ui.min.js');
?>

<?php echo $javascript->link('jquery.fancybox.pack.js'); ?>
    <?php echo $javascript->link('/css/helpers/jquery.fancybox-buttons.js?v=1.0.5'); ?>
    <?php echo $javascript->link('/css/helpers/jquery.fancybox-media.js?v=1.0.6'); ?>
    <?php 
    echo $javascript->link('/css/helpers/jquery.fancybox-thumbs.js?v=1.0.7');
    echo $javascript->link('video.js');
    echo $javascript->link('RecordRTC.js');
    echo $javascript->link('videojs.record.js');
    ?>

<?php 
echo $javascript->link('jwplayer.js'); 
echo $javascript->link('ckeditor/ckeditor.js');
?>
<script type="text/javascript">jwplayer.key="J0+IRhB3+LyO0fw2I+2qT2Df8HVdPabwmJVeDWFFoplmVxFF5uw6ZlnPNXo=";


</script>

<?php echo $scripts_for_layout; ?>


</head>

<body>

<?php
  $session->flash();
  $session->flash('auth');
  echo $content_for_layout;
?>
<script src="<?php echo $this->webroot;?>js/bootstrap.min.js"></script>
<script type="text/javascript">
    window.appurlname = <?php echo $urlappname;?>
</script>
</body>
</html>
