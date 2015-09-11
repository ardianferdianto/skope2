<?php if ($halaman['Halaman']['template_type'] == 1):?>
	<div class="contenttextbook nano">
		<div class="nano-content">
			<div class="contentareablock">
			<?php echo $halaman['Halaman']['content'];?>
		</div>
		</div>
	</div>

<?php elseif ($halaman['Halaman']['template_type'] == 2):?>

		<div class="nano contenttextbook alignleft">
			<div class="nano-content">
				<div class="contentmedia_alignleft">
					<?php if ($halaman['Halaman']['file_type'] == 'image'):?>
						<img src="<?php echo $this->webroot.'files/lessons/'.$halaman['Halaman']['lesson_id'].'/images/pages/'.$halaman['Halaman']['file'];?>" style="width:280px;margin-top:20px;">
					
					<?php elseif ($halaman['Halaman']['file_type'] == 'video'):?>
						<div id="containerPlayer_<?php echo $halaman['Halaman']['id']?>">Loading the player ...</div>
						<script type="text/javascript">
						jwplayer("containerPlayer_<?php echo $halaman['Halaman']['id']?>").setup({
                            'id': 'playerID_<?php echo $halaman['Halaman']['id']?>',
                            'width': '280',
                            'height': '180',
                            'aboutlink': '#',
                            'autostart':false,
                            'primary': 'flash',
                            'image':'<?php echo $this->webroot;?>files/lessons/<?php echo $halaman['Halaman']['lesson_id']?>/images/pages/screenshot.png',
                            //'skin': 'skins/five.xml',

                            
                            'file': '<?php echo $this->webroot;?>files/lessons/<?php echo $halaman['Halaman']['lesson_id']?>/images/pages/<?php echo $halaman['Halaman']['file'];?>',
                            events: {
                                onPause: function(event) {
                                    setCookie(event.position);
                                }
                            }
                        });
                    	</script>

                    <?php elseif ($halaman['Halaman']['file_type'] == 'animation'):?>

                        <div id="containerPlayer_81_wrapper" style="position: relative; width: 300px;">

                        <object type="application/x-shockwave-flash" data="<?php echo $this->webroot;?>files/lessons/<?php echo $halaman['Halaman']['lesson_id']?>/images/pages/<?php echo $halaman['Halaman']['file'];?>" width="100%" height="100%" bgcolor="#000000" id="containerPlayer_<?php echo $halaman['Halaman']['id']?>" name="containerPlayer_<?php echo $halaman['Halaman']['id']?>" tabindex="0">

	                        <param name="allowfullscreen" value="true">
	                        <param name="allowscriptaccess" value="always">
	                        <param name="seamlesstabbing" value="true">
	                        <param name="wmode" value="opaque">
                        </object>
                        </div>
						
										
					<?php endif;?>
				</div>
				<div class="contentareablock">
					<?php echo $halaman['Halaman']['content'];?>
				</div>
			</div>
		</div>
	

<?php elseif ($halaman['Halaman']['template_type'] == 3):?>
	
	<div class="nano contenttextbook alignright">
		<div class="nano-content">
			<div class="contentmedia_alignright">
				<?php if ($halaman['Halaman']['file_type'] == 'image'):?>
					<img src="<?php echo $this->webroot.'files/lessons/'.$halaman['Halaman']['lesson_id'].'/images/pages/'.$halaman['Halaman']['file'];?>" style="width:280px;margin-top:10px;">


					<?php elseif ($halaman['Halaman']['file_type'] == 'video'):?>
						<div id="containerPlayer_<?php echo $halaman['Halaman']['id']?>">Loading the player ...</div>
						<script type="text/javascript">
						jwplayer("containerPlayer_<?php echo $halaman['Halaman']['id']?>").setup({
                            'id': 'playerID_<?php echo $halaman['Halaman']['id']?>',
                            'width': '280',
                            'height': '180',
                            'aboutlink': '#',
                            'autostart':false,
                            'primary': 'flash',
                            'image':'<?php echo $this->webroot;?>files/lessons/<?php echo $halaman['Halaman']['lesson_id']?>/images/pages/screenshot.png',
                            //'skin': 'skins/five.xml',

                            
                            'file': '<?php echo $this->webroot;?>files/lessons/<?php echo $halaman['Halaman']['lesson_id']?>/images/pages/<?php echo $halaman['Halaman']['file'];?>',
                            events: {
                                onPause: function(event) {
                                    setCookie(event.position);
                                }
                            }
                        });
						</script>


				<?php endif;?>
			</div>
			<div class="contentareablock">
				<?php echo $halaman['Halaman']['content'];?>
			</div>
		</div>
	</div>

<?php elseif ($halaman['Halaman']['template_type'] == 4):?>
	
	<div class="nano contenttextbook aligntop">
		<div class="nano-content">
			<div class="contentmedia_aligntop">
				<?php if ($halaman['Halaman']['file_type'] == 'image'):?>
					<img src="<?php echo $this->webroot.'files/lessons/'.$halaman['Halaman']['lesson_id'].'/images/pages/'.$halaman['Halaman']['file'];?>" style="width:280px;">

					<?php elseif ($halaman['Halaman']['file_type'] == 'video'):?>
						<div id="containerPlayer_<?php echo $halaman['Halaman']['id']?>">Loading the player ...</div>
						<script type="text/javascript">
						jwplayer("containerPlayer_<?php echo $halaman['Halaman']['id']?>").setup({
                            'id': 'playerID_<?php echo $halaman['Halaman']['id']?>',
                            'width': '300',
                            'height': '200',
                            'aboutlink': '#',
                            'autostart':false,
                            'primary': 'flash',
                            'image':'<?php echo $this->webroot;?>files/lessons/<?php echo $halaman['Halaman']['lesson_id']?>/images/pages/screenshot.png',
                            //'skin': 'skins/five.xml',

                            
                            'file': '<?php echo $this->webroot;?>files/lessons/<?php echo $halaman['Halaman']['lesson_id']?>/images/pages/<?php echo $halaman['Halaman']['file'];?>',
                            events: {
                                onPause: function(event) {
                                    setCookie(event.position);
                                }
                            }
                        });
						</script>

				<?php endif;?>
			</div>
			<div class="contentareablock">
				<?php echo $halaman['Halaman']['content'];?>
			</div>
		</div>
	</div>


<?php elseif ($halaman['Halaman']['template_type'] == 5):?>
	
	<div class="contentmedia_alignsingle">
		<?php if ($halaman['Halaman']['file_type'] == 'image'):?>
			<img src="<?php echo $this->webroot.'files/lessons/'.$halaman['Halaman']['lesson_id'].'/images/pages/'.$halaman['Halaman']['file'];?>" style="width:400px;">

			<?php elseif ($halaman['Halaman']['file_type'] == 'video'):?>
				<div id="containerPlayer_<?php echo $halaman['Halaman']['id']?>">Loading the player ...</div>
				<script type="text/javascript">
				jwplayer("containerPlayer_<?php echo $halaman['Halaman']['id']?>").setup({
                    'id': 'playerID_<?php echo $halaman['Halaman']['id']?>',
                    'width': '400',
                    'height': '300',
                    'aboutlink': '#',
                    'autostart':false,
                    'primary': 'flash',
                    'image':'<?php echo $this->webroot;?>files/lessons/<?php echo $halaman['Halaman']['lesson_id']?>/images/pages/screenshot.png',
                    //'skin': 'skins/five.xml',

                    
                    'file': '<?php echo $this->webroot;?>files/lessons/<?php echo $halaman['Halaman']['lesson_id']?>/images/pages/<?php echo $halaman['Halaman']['file'];?>',
                    events: {
                        onPause: function(event) {
                            setCookie(event.position);
                        }
                    }
                });
				</script>

		<?php endif;?>
	</div>


<?php endif;?>