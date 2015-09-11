

<!-- START NEW -->
<style type="text/css">
#presentase-template-content{
	font-family: 'Lato', Calibri, Arial, sans-serif;
	background-color: #c5cae9;
}
tr td{
	padding: 20px;
}

#menu_list_presentase{
	display: block;
	position: absolute;
	right: 50px;
	top: 20px;
}
#menu_list_presentase li{
	float: left;
}
#menu_list_presentase li
{
	width:32px;
	height: 32px;
	display: block;
}
#add-btn-black{
	background: url('/eteaching_sd/images/plus_alt_32x32.png') no-repeat;
	width:32px;
	height: 32px;
	display: block;
	margin-left: -30px;

	
}
#back-btn-black{
	background: url('/eteaching_sd/images/back_alt_32x32.png') no-repeat;
	width:32px;
	height: 32px;
	display: block;
	margin-right: 40px;
}
#flashMessage{
    display: block;
    width: 95%;
    background-color: #1cbbd2;
    padding: 10px;
    text-align: center;
}
</style>
<div id="presentase-template-content" class="clearfix">
	<img style="position:absolute;top:30px;left:20px;" src="<?php echo $this->webroot;?>images/categories-setting-ico2.png" alt="icon">



	<div id="presentase-content2" class="clearfix">
		<h2 style="padding-left: 60px;padding-top: 21px;">LIST <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CATEGORY</h2>

		<div style="margin-top:40px;" class="content-box-content">


			<table class="data display datatable " id="example">
				<thead>
					<th><?php echo ('No');?></th>
					<th><?php echo ('Nama');?></th>
					<th><?php echo ('Tipe Kategori');?></th>
					<th><?php echo ('Tanggal Dibuat');?></th>
					<th class="actions"><?php __('Edit / Hapus');?></th>
				</thead>

				<tbody>
				<?php
				$i = 0;
				$no = 0;
				foreach ($categories as $pelajaran):
					$no ++;
					$class = null;
					if($pelajaran['Category']['type'] == 1){
						$category = 'Ebook';
					}else if ($pelajaran['Category']['type'] == 2){
						$category = 'Video';
					}else{
						$category = '-';
					}
				?>
				<tr>
					<td>
						<?php echo $no; ?>
					</td>

					<td>
						<?php echo $pelajaran['Category']['name']; ?>
					</td>
					<td>
						<?php echo $category; ?>
					</td>
					<td>
						<?php  echo $pelajaran['Category']['created'];?>
					</td>

					<td class="actions">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image("pen_12x12.png"), array('action' => 'edit', $pelajaran['Category']['id']), array('escape' => false)); ?>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $html->link($html->image("trash_fill_12x12-2.png"), array('action' => 'delete', $pelajaran['Category']['id']),array('escape' => false), sprintf(__('Anda yakin ingin menghapus data # %s?', true), $pelajaran['Category']['nama'])); ?>
					</td>
				</tr>

				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<ul id="menu_list_presentase">
			<!--<li><a class="button-pembelajaran" id="upload-btn-black" href="#subjectadd" rel="modal">></a></li>-->

			<li><a class="button-pembelajaran" id="add-btn-black" href="<?php echo $this->webroot; ?>categories/add_normal"></a></li>

			<li><a class="button-pembelajaran" id="back-btn-black" href="<?php echo $this->webroot; ?>pelajarans/setting"></a></li>
		</ul>
	</div>

</div>

