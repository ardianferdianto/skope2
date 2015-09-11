<div class="quizzs index">
<?php if ($groupAuth == 1 || $groupAuth == 2) {

?>

	<h2><?php __('Direktori Try Out');?></h2>
	<p>
	Selamat datang di latihan berikut ini kumpulan latihan
	</p>
	<a class="shortcut-button-small" href="<?php echo $this->webroot; ?>quizzs/home" id="addData_left">
		<span>
			<img src="<?php echo $this->webroot; ?>resources/images/icons/arrow_left_alt1_32x32.png" alt="icon"><br>
			Kembali
		</span>
	</a>
	<div class="clear"></div> 
	<br/>
	<br/>
	<div class="content-box-header">
		
		<h3>List Latihan</h3>
		
		<div class="clear"></div>
		
	</div> <!-- End .content-box-header -->
	<div class="content-box-content">
		
		<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
			
			<table>
				
				<thead>
					<tr>
					   <th><?php echo ('No');?></th>
					   <th><?php echo ('Judul')?></th>
					   <th><?php echo 'matapelajaran';?></th>
					   <th><?php echo $paginator->sort('kelas');?></th>
					   <th><?php echo ('Waktu Mengerjakan')?></th>
						<th><?php echo ('Guru Yang Membuat')?></th>
					   <th><?php echo $paginator->sort('published');?></th>
					   <th><?php echo $paginator->sort('created');?></th>
					   <th><?php echo $paginator->sort('modified');?></th>
					   <th class="actions"><?php __('Actions');?></th>
					</tr>
					
				</thead>
			 
				<tfoot>
					<tr>
						<td colspan="6">
							
							
							<div class="pagination">
								<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
								| 	<?php echo $paginator->numbers();?>
									<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
							</div> <!-- End .pagination -->
							<div class="clear"></div>
						</td>
					</tr>
				</tfoot>
			 
				<tbody>
				<?php
				$no = 0;
				$i = 0;
				foreach ($quizzs as $quizz):
					$class = null;
					$status = $quizz['Quizz']['published'];
					if ($status == 1){
						$status = 'Iya';
					}else{
						$status = 'Tidak';
					}
					$no ++;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
					<tr<?php echo $class;?>>
						<td>
							<?php echo $no; ?>
						</td>
						<td>
							<?php echo $quizz['Quizz']['title']; ?>
						</td>
						<td>
							<?php echo $quizz['Pelajaran']['nama']; ?>
						</td>
						<td>
							<?php echo $quizz['Quizz']['kelas']; ?>
						</td>
						<td>
							<?php echo $quizz['Quizz']['time'].' Menit'; ?>
						</td>
						<td>
							<?php echo $quizz['User']['nama']; ?>
						</td>
						<td>
							<?php echo $status; ?>
						</td>
						<td>
							<?php echo $quizz['Quizz']['created']; ?>
						</td>
						<td>
							<?php echo $quizz['Quizz']['modified']; ?>
						</td>
						
						
						<td class="actions">
							<?php echo $html->link(__('Lihat', true), array('action' => 'view_all', $quizz['Quizz']['id'])); ?>
							<?php echo $html->link(__('Edit', true), array('action' => 'view', $quizz['Quizz']['id'])); ?>
							<?php echo $html->link(__('Delete', true), array('action' => 'delete', $quizz['Quizz']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $quizz['Quizz']['id'])); ?>
						</td>
						
					</tr>
					<?php endforeach; ?>
					
					
				</tbody>
				
			</table>
			
		</div> <!-- End #tab1 -->

	<?php }else{?>
			<h2><?php __('Latihan');?></h2>
			<p>
			Selamat datang di latihan berikut ini kumpulan latihan yang bisa anda kerjakan,
			</p>
			<div class="clear"></div> 
			<div class="content-box-header">
				
				<h3>List Latihan</h3>
				
				<div class="clear"></div>
				
			</div> <!-- End .content-box-header -->
			<div class="content-box-content">
				
				<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
					
					<table>
						
						<thead>
							<tr>
							   <th><?php echo ('No');?></th>
							   <th><?php echo ('Judul')?></th>
							   <th><?php echo 'matapelajaran';?></th>
							   <th><?php echo ('kelas');?></th>
								<th><?php echo ('Guru Yang Membuat')?></th>
							   <th><?php echo ('Waktu Mengerjakan')?></th>
							   <th><?php echo ('created');?></th>
							   
							   <th class="actions"><?php __('Actions');?></th>
							</tr>
							
						</thead>
					 
						<tfoot>
							<tr>
								<td colspan="6">
									
									
									<div class="pagination">
										<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
										| 	<?php echo $paginator->numbers();?>
											<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
									</div> <!-- End .pagination -->
									<div class="clear"></div>
								</td>
							</tr>
						</tfoot>
					 
						<tbody>
						<?php
						$no = 0;
						$i = 0;
						foreach ($quizzMurid as $quizz):
							$class = null;
							
							$no ++;
							if ($i++ % 2 == 0) {
								$class = ' class="altrow"';
							}
						?>
							<tr<?php echo $class;?>>
								<td>
									<?php echo $no; ?>
								</td>
								<td>
									<?php echo $quizz['Quizz']['title']; ?>
								</td>
								<td>
									<?php echo $quizz['Pelajaran']['nama']; ?>
								</td>
								<td>
									<?php echo $quizz['Quizz']['kelas']; ?>
								</td>
								<td>
									<?php echo $quizz['User']['nama']; ?>
								</td>
								<td>
									<?php echo $quizz['Quizz']['time'].' Menit'; ?>
								</td>
								
								<td>
									<?php echo $quizz['Quizz']['created']; ?>
								</td>
								
								
								
								
								<td class="actions">
									<?php echo $html->link(__('Masuk ke latihan ini', true), array('action' => 'take_quiz', $quizz['Quizz']['id']),array('class'=>'button')); ?>
									
								</td>
								
							</tr>
							<?php endforeach; ?>
							
							
						</tbody>
						
					</table>
					
				</div> <!-- End #tab1 -->
	<?php }?>		
	</div><!-- End content box -->
	
	
