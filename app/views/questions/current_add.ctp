<div class="questions index">
<h2><?php __('Bank Soal');?></h2>
<p>
Silahkan tambahkan latihan dengan soal yang sudah ada sebelumnya di bawah ini, setelah selesai tekan Selesai di bawah halaman
</p>

<div class="clear"></div>
<br/>
<style type="text/css">
    form#filterSoal label { display: inline-block; font-weight:normal;}
</style>
<?php  
echo $ajax->form(array('type' => 'post',  
'options' => array(  
'update'=>'listSoal',
'id'=>'filterSoal',
'style' =>'border:1px solid #9e9e9e;padding:0px 15px 10px;',
'url' => array(  
'controller' => 'questions',  
'action' => 'filter'  
),  
'loading'=>"Element.show('plsLoaderID')",
  
'loaded'=>"Element.hide('plsLoaderID')"  
)  
));  
?>
<legend style="background-color:#fff;margin:-10px 0 5px;font-weight:bold;">Filter Soal</legend>
<table>
<tr>

<td style="background-color:transparent;">
<?php 
$jenisSoal=array('1'=>'Pilihan Ganda','2'=>'Uraian');
echo $form->input('Question.type_soal',array('label'=>'Tipe Soal:','style'=>'margin-left:6px','options' => $jenisSoal),array('id' => 'type'));  ?>&nbsp; 							
</td>

<td style="background-color:transparent;">
<?php 
$levels = array(1=>'Mudah',2=>'Normal',3=>'Sulit',4=>'Sangat Sulit');
echo $form->input('Question.level',array('label'=>'Tingkat Soal:','style'=>'margin-left:6px','options' => $levels),array('id' => 'level'));  ?>&nbsp; 							
</td>

<td style="background-color:transparent;"><?php echo $form->submit("Proses ",array('label'=>false,'div'=>false,'class'=>'button')).'</td>';

?>
</tr>
</table>
<?php echo $form->end();?>
<br/>
<div id="plsLoaderID" style="display:none;">
<?php echo $html->image("loading-ajax.gif");  ?> <span class="loading">Loading..</span>
</div>
<div id="listSoal">
	<p>
	<?php
	echo $paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?></p>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo $paginator->sort('id');?></th>
		<th><?php echo ('Pertanyaan');?></th>
		<th><?php echo ('Tipe');?></th>
		
		<th><?php echo ('Point');?></th>
		<th><?php echo ('Level');?></th>
		<th><?php echo $paginator->sort('created');?></th>
	
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($questions as $question):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	$tipe = $question['Question']['tipe'];
	if ($tipe ==1){
		$tipe = "Pilihan Ganda";
	}else if($tipe ==2){
		$tipe = "Uraian";
	}else{
		$tipe = "Tidak diketahui";
	}
	$level = $question['Question']['level'];
	$levels = array(1=>'Mudah',2=>'Normal',3=>'Sulit',4=>'Sangat Sulit');
	if ($level == 1){
		$level = "Mudah";
	}else if($level == 2){
		$level = "Normal";
	}
	else if($level == 3){
		$level = "Sulit";
	}
	else if($level == 4){
		$level = "Sangat Sulit";
	}
	else{
		$level = "Tidak diketahui";
	}
	?>
		<tr<?php echo $class;?>>
			<td>
				<?php echo $question['Question']['id']; ?>
			</td>
		
			<td>
				<?php echo $question['Question']['question']; ?>
			</td>
			<td>
				<?php echo $tipe; ?>
			</td>
			
			<td>
				<?php echo $question['Question']['point_nilai']; ?>
			</td>
			<td>
				<?php echo $level; ?>
			</td>
			<td>
				<?php echo $question['Question']['created']; ?>
			</td>
		
			<td class="actions">
				<?php echo $form->create('QuizzsQuestion');
				echo $form->hidden('QuizzsQuestion.quizz_id',array('value'=>$questionId));
				echo $form->hidden('QuizzsQuestion.question_id',array('value'=>$question['Question']['id']));
				
				
				
				echo $form->hidden('Question.quizzId',array('value'=>$questionId));
				echo $form->hidden('Question.fromId',array('value'=>$fromurl));
				echo $form->hidden('Question.matPel',array('value'=>$question['Question']['pelajaran_id']));
				echo $form->hidden('Question.kelasId',array('value'=>$question['Question']['kelas']));
				?>
				

				<?php echo $form->end('Tambahkan soal ini');?>
				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>

	<div class="paging">
		<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $paginator->numbers();?>
		<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>

