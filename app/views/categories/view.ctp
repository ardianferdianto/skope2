<div class="pelajarans view">
<h2><?php  __('Pelajaran');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pelajaran['Pelajaran']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nama'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pelajaran['Pelajaran']['nama']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pelajaran['Pelajaran']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $pelajaran['Pelajaran']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Pelajaran', true), array('action' => 'edit', $pelajaran['Pelajaran']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Pelajaran', true), array('action' => 'delete', $pelajaran['Pelajaran']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pelajaran['Pelajaran']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Pelajarans', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Pelajaran', true), array('action' => 'add')); ?> </li>
	</ul>
</div>


<div class="users view">
<h2><?php  __('Detail MataPelajaran');?></h2>
	
	<dl class="info">
		<dt><?php __('Username'); ?></dt>
		<dd>: <?php echo $user['User']['username']; ?></dd>
		<dt><?php __('Nama'); ?></dt>
		<dd>: <?php echo $user['User']['nama']; ?></dd>	
		
		
		<dt><?php __('Kelas'); ?></dt>
		<dd>: <?php echo $user['User']['kelas']; ?></dd>
		<dt><?php __('Jenis Kelamin'); ?></dt>
		<dd><?php 
		$jenisKelamin = $user['User']['sex']; 
		if ($jenisKelamin == 1) {
		echo ': Pria';
		}else{
		echo ': Wanita';
		}
		
		?></dd>
		
		
		
	</dl>
</div>
<div class="clear"></div>
