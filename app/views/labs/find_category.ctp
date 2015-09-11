<?php if (!$ebooks){
	echo 'Tidak ditemukan ebook';
}else{ ?>
<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel();
});

</script>

<ul id="mycarousel" class="jcarousel-skin-tango">
	<?php foreach ($ebooks as $ebook):?>
	
	<li>
		<?php 
		if($ebook['Lab']['cover']!=null){
			$vowels = array("img/");
			$onlyconsonants = str_replace($vowels, "", $ebook['Lab']['cover']);
			$cover  = $onlyconsonants;
		}else{
			$cover  = "no-cover.jpg";
		}
		echo $ajax->link($html->image($cover,array('class'=>'content','width'=>75,'height'=>58)), array('controller'=>'labs', 'action' => 'view_thumb',$ebook['Lab']['id']), array('class'=>'item','update' => 'preview-ebook' ,'escape' => false));
		echo $ebook['Lab']['title'];
		?>

	</li>
	<?php endforeach;?>
	
</ul>
<?php } ?>