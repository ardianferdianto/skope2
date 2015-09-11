<div class="quizzs form">
	
	
	<div class="clear"></div> 
	<div class="content-box"><!-- Start Content Box -->
		
		<div class="content-box-header">
			
			<h3>From Edit Jawaban Uraian</h3>
			
						
			<div class="clear"></div>
			
		</div> <!-- End .content-box-header -->
		
		<div class="content-box-content">
			<?php echo $form->create('Question',array('action'=>'edit_uraian','enctype'=>'multipart/form-data'));?>
				<fieldset>
			 		
				<?php
					echo $form->hidden('Question.id',array('value'=>$id));
					echo '<p>';
					echo'<label>Jawaban</label>';
					echo $form->input('Question.answer2',array('label'=>false));
					echo '</p>';
					
					
					
				?>
				
				</fieldset>
			<p>
			<?php echo $form->end('Submit');?>
			</p>
			
		</div>
	</div>
	
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Kembali', true), array('action' => 'index'));?></li>
	</ul>
</div>
