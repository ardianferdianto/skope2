
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout; ?></title>


<link rel="shortcut icon" href="../favicon.ico">

<?php echo $html->css('/bookblock/css/default.css'); ?>
<?php echo $html->css('/bookblock/css/bookblock.css'); ?>
<?php echo $html->css('/bookblock/css/demo4.css'); ?>
<?php echo $html->css('/bookblock/css/component_modal.css'); ?>



<?php echo $javascript->link('jquery-1.10.1.min.js'); ?>


<?php echo $javascript->link('jwplayer.js'); ?>
<script type="text/javascript">jwplayer.key="J0+IRhB3+LyO0fw2I+2qT2Df8HVdPabwmJVeDWFFoplmVxFF5uw6ZlnPNXo=";



</script>


<?php echo $javascript->link('modernizr.custom.js'); ?>


<?php echo $scripts_for_layout; ?>
</head>
<body>
<?php e($content_for_layout); ?>

</body>
</html>
