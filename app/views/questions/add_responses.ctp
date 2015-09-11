<style type="text/css">
.backempty {
	position: relative;
	top: 0;
	left: 0;
	font-size: 20px;
	color: white;
	cursor: pointer;
}
</style>
<script type="text/javascript">
$(document).ready(function(){


	$('.hasTooltip').each(function() { // Notice the .each() loop, discussed below
	    $(this).qtip({
	        content: {
	            text: $(this).data('tooltip') // Use the "div" element next to this for the content
	        },

	        position: {
	        	my: 'top left',
        		at: 'right bottom',  // Position my top left..
    		}
	    });
	});

	setTimeout(function() {
        
        alert('<?php echo $status;?>');
        
    },1000); 

    $(".imagesoal").fancybox({
	    helpers : {
	        
	    }
	});
});
</script>
<?php
	
	$no = 0;
	//$choiceList = ('A','B','C','D');
	
	
	?>
<div id="question_id_<?php echo $n['Question']['id'];?>" class="clearfix questionentry"style="display:block;">
<div style="float:left;width:70px;">
	<?php echo $html->link($html->image("pen_12x12.png"), array('action' => 'edit_single', $n['Question']['id'],$kelas,$mapel,$level,$tipe), array('escape' => false,'class'=>'hasTooltip editquestion_button','data-tooltip'=>'Edit Soal','data-idquestion'=>$n['Question']['id'])); ?>
		&nbsp;&nbsp;&nbsp;
	<a class="hasTooltip deletesoal" data-tooltip="Hapus Soal" href="<?php echo $this->webroot?>/questions/delete/<?php echo $n['Question']['id'];?>"><img src="<?php echo $this->webroot?>img/trash_fill_12x12-2.png"/></a>
	
	<?php if($n['Question']['target'] == 1):?>
		<div class="questiontype icon-quizz"></div>
	<?php elseif($n['Question']['target'] == 2):?>
		<div class="questiontype icon-ujian"></div>
	<?php endif;?>
</div>
<div style="float:left;">
	<div class="soal-entry clearfix">
	
			<div class="soal-text" style="width:265px">

			<?php
			echo '<h6>'.$no.'.&nbsp;&nbsp;&nbsp;&nbsp;<span class="questionitem"> '.$n['Question']['question'].'</span></h6>';

			if ($n['Question']['tipe'] == 1){
				
				?>
				<?php 
				echo '<div class="option_a_item">';
				
				echo "a. &nbsp;".$n['Question']['answer_a'];?><span class="jawabanbenar"><?php if($n['Question']['answer_true']==1){echo " <span class='input-notification success png_bg'></span>";}?></span><br/><br/>
				
				</div>
				
				
				<?php 
				echo '<div class="option_b_item">';
				echo "b. &nbsp;".$n['Question']['answer_b'];?><span class="jawabanbenar"><?php if($n['Question']['answer_true']==2){echo " <span class='input-notification success png_bg'></span>";}?></span><br/><br/>
				</div>


				<?php 
				echo '<div class="option_c_item">';
				echo "c. &nbsp;".$n['Question']['answer_c'];?><span class="jawabanbenar"><?php if($n['Question']['answer_true']==3){echo " <span class='input-notification success png_bg'></span>";}?></span><br/><br/>
				</div>

				<?php 
				echo '<div class="option_d_item">';
				echo "d. &nbsp;".$n['Question']['answer_d'];?><dspanclass="jawabanbenar"><?php if($n['Question']['answer_true']==4){echo " <span class='input-notification success png_bg'></span>";}?></dspan<br/><br/>
				</div>

			<?php	
			}else if($n['Question']['tipe'] == 2){
				echo '<p><strong>Jawaban :</strong>  ';
				echo '<span class="option_essay_item">'.$n['Question']['answer2'].'</span>';
				echo '</p>';
				
			}?>
			</div><!--end soaltext-->

			<div class="soal-image" style="width:150px">
				<?php
				if($n['Question']['images'] != null){ ?>
					<a class="imagesoal" href="<?php echo $this->webroot.$n['Question']['images']; ?>"><img class="option_image_item" style="margin:0 auto;text-align:center;" align="center" src="<?php echo $this->webroot.$n['Question']['images']; ?>" width="140" /> </a>
				
				<?php }?>

			</div>

			<div class="soal-video" style="width:200px;">
			
				<?php if($n['Question']['video'] != null):?>
					
					<div id="question_videoid_<?php echo $n['Question']['id'];?>" class="myPlayer" style="width:180px;height:150px;float:right;" href="<?php echo $this->webroot.$n['Question']['video'];?>">
					    
					</div>

					<script type="text/javascript">

						jwplayer("question_videoid_<?php echo $n['Question']['id'];?>").setup({
				            'id': 'question_videoid_<?php echo $n['Question']['id'];?>',
				            'width': '200',
				            'height': '150',
				            'aboutlink': 'http://basedidea.com',
				            'autostart':false,
				            //'skin': 'skins/five.xml',
				            'image':'<?php echo $this->webroot;?>images/vid.png',
				            'file': '<?php echo $this->webroot.$n['Question']['video'];?>',
				        
				        });
					</script>
				<?php endif;
				?>

				
			</div>
	</div><!--end soalentry-->
	
</div>
</div>
<div class="clear"></div>


