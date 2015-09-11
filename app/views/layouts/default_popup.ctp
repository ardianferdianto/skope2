
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout; ?></title>


<link rel="shortcut icon" href="../favicon.ico">

<?php echo $html->css('style_popup'); ?>

</head>
<body>
        <?php
          $session->flash();
          $session->flash('auth');
          echo $content_for_layout;
        ?>
</body>
</html>
        
