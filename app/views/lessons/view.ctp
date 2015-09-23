<div class="feaature bk-book book-1 bk-bookdefault viewlesson">
	<div class="bk-front">
        <div class="bk-cover">
            <h2>
                <span><?php echo $lesson['Lesson']['author']?></span>
                <span style="text-transform:uppercase;"><?php echo $lesson['Lesson']['title']?></span><br/>
                <span style="font-size:0.5em;font-family:arial,helvetica;text-transform:lowercase;"><?php echo $lesson['Lesson']['description']?></span>
            </h2>
        </div>
        <div class="bk-cover-back"></div>
    </div>
</div>
	<div class='feature'>
		<div class="contenttextbook nano">
			<div class="nano-content">
				<div class="contentareablock titlearea">
				
                <span><?php echo $lesson['Lesson']['author']?></span>
                <h1 style="text-transform:uppercase;font-size:43px;"><?php echo $lesson['Lesson']['title']?></h1>
                <span style="font-size:1em;font-family:arial,helvetica;text-transform:lowercase;"><?php echo $lesson['Lesson']['description']?></span>
            	<p>Kelas :  <?php echo $lesson['Lesson']['grade_id']?>
            	<br/>Pelajaran :  <?php echo $lesson['Pelajaran']['nama']?></p>
            	<br/>
            	<p style="font-weight:bold;">---- KELOMPOK ----</p>
            	<p><?php echo nl2br($lesson['Lesson']['kelompok']);?></p>
            	
			</div>
			</div>
		</div>
		
	</div>


	<div class='feature'>
		<div class="contenttextbook nano">
			<div class="nano-content">
				<div class="contentareablock titlearea">
				
                
			</div>
			</div>
		</div>
		
	</div>
<?php 
foreach ($pagesbook as $item): ?>
	<div class='feature'>
		<div class="contenttextbook nano">
			<div class="nano-content">
				<div class="contentareablock">
				<h2 style="font-size:33px;background-color:#66CAE8;color:#fff;padding:10px;"><?php echo $item['Halaman']['deskripsi_halaman'];?></h2>
				<?php echo $item['Halaman']['content'];?>
			</div>
			</div>
		</div>
		
	</div>

<?php endforeach;?>