<div id="banksoal index">
	<div class="tryout-soal-wrapper clearfix">
		<h2 class="titleiframe">DAFTAR KODE SOAL</h2>
		
			<ul class="list-button-kuis1">
				
				<li>
					<a class="button-pembelajaran" id="newtryout-btn" href="<?php echo $this->webroot?>/quizzs/add"><img src="<?php echo $this->webroot?>images/plus_alt_32x32.png"/><br/> Tambah Tryout</a>
				</li>
			</ul>
			<div class="tabquiz">
			<table>
				
				<thead>

					<tr class="head">
					   <th><?php echo ('KODE')?></th>
					   
					   <th><?php echo 'TANGGAL';?></th>
					   <th></th>
					   <th colspan="3" class="spanning">SOAL PILIHAN GANDA</th>
					   <th colspan="3" class="spanning">SOAL URAIAN</th>
					   <th><?php echo ('JUMLAH SOAL')?></th>
						<th><?php echo ('WAKTU')?></th>
					</tr>
					<tr class="head">
						<td></td>
						<td></td>
						<td></td>
						<td class="spanning">MUDAH</td><td class="spanning">SEDANG</td><td class="spanning">SULIT</td>
						<td class="spanning">MUDAH</td><td class="spanning">SEDANG</td><td class="spanning">SULIT</td>
						<td></td>
						<td></td>
					</tr>
				</thead>
			 
				<tfoot>
					<tr>
						<td colspan="6">
							
							
							
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
					$banyaksoal = count($quizz['Question']);
					$gandamudah = 0;
					$gandasedang = 0;
					$gandasulit = 0;
					$uraianmudah = 0;
					$uraiansedang = 0;
					$uraiansulit = 0;

					foreach ($quizz['Question'] as $key ) {
						if($key['tipe']==1 && $key['level']==1){
							$gandamudah++;
						}
						if($key['tipe']==1 && $key['level']==2){
							$gandasedang++;
						}
						if($key['tipe']==1 && $key['level']==3){
							$gandasulit++;
						}
						if($key['tipe']==2 && $key['level']==1){
							$uraianmudah++;
						}
						if($key['tipe']==2 && $key['level']==2){
							$uraiansedang++;
						}
						if($key['tipe']==3 && $key['level']==3){
							$uraiansulit++;
						}
					}
				?>
					<tr<?php echo $class;?>>
						<td>
							<a class="codesoal" href="<?php echo $this->webroot?>quizzs/view_single/<?php echo $quizz['Quizz']['id']; ?>" ><?php echo $quizz['Quizz']['kode']; ?></a>
						</td>
						
						<td>
							<?php echo $quizz['Quizz']['created']; ?>
						</td>
						<td>
							
						</td>
						<td class="spanning">
							<?php echo $gandamudah;?>
						</td>
						<td class="spanning">
							<?php echo $gandasedang;?>
						</td class="spanning">
						<td class="spanning">
							<?php echo $gandasulit;?>
						</td>
						<td class="spanning">
							<?php echo $uraianmudah;?>
						</td>
						<td class="spanning">
							<?php echo $uraiansedang;?>
						</td>
						<td class="spanning">
							<?php echo $uraiansulit;?>
						</td>
						<td>
							<?php echo $banyaksoal; ?>
						</td>
						<td>
							<?php echo $quizz['Quizz']['time'].' Menit'; ?>
						</td>
						
						<!--<td class="actions">
							<?php echo $html->link(__('Lihat', true), array('action' => 'view_all', $quizz['Quizz']['id'])); ?>
							<?php echo $html->link(__('Edit', true), array('action' => 'view', $quizz['Quizz']['id'])); ?>
							<?php echo $html->link(__('Delete', true), array('action' => 'delete', $quizz['Quizz']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $quizz['Quizz']['id'])); ?>
						</td>-->
						
					</tr>
					<?php endforeach; ?>
					
					
				</tbody>
				
			</table>
			</div>
			<!--<div class="pagination">
				<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
				| 	<?php echo $paginator->numbers();?>
					<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
			</div> <!-- End .pagination -->

			<div class="bank-soal-footer clearfix">
				
			</div>
		
	</div>
</div>



	
	
