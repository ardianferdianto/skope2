


<?php
echo $cat_id;
echo $favorite;
echo $form->create('Halaman');
echo $form->input('content');
echo $form->input('template_type');
//echo $form->select('lesson_id',$lessontersedia);
echo $form->end('submit');

foreach ($lessontersedia as $item) :?>
  <h2><?php echo $item['Lesson']['title'];?></h2>  
<?php endforeach;?>
?>

