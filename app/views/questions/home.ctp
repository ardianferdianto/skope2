<script type="text/javascript">
	jQuery(document).ready(function(){

		jQuery('.box-list-mapel').hide();
		var kelasfiltered;
		var typesoalfiltered;
		var typemapelfiltered;
		jQuery('ul.list-kelas li a').click(function(){
			jQuery('.box-list-mapel').hide();
			jQuery('#box-' + jQuery(this).attr('id')).show('slow');
			kelasSelected = jQuery(this).text();
			kelasfiltered = jQuery(this).attr('rel');

			jQuery('#kelas-selected').text(kelasSelected);
			jQuery('ul.list-kelas li a').removeClass("selected");
			jQuery(this).addClass("selected");
			jQuery("#filter-soal").replaceWith( "<a id='filter-soal' href='<?php echo $this->webroot; ?>questions/proses/"+kelasfiltered+"/"+typemapelfiltered+"/"+typesoalfiltered+"' style='position:absolute;top:30px;right:100px;''><img src='<?php echo $this->webroot; ?>img/ok-btn1.png'> </a>" );
		});

		

		jQuery('.list-type-soal ul li a').click(function(){

			typesoalSelected = jQuery(this).text();
			typesoalfiltered = jQuery(this).attr('id');
			jQuery('#type-selected').text(typesoalSelected);
			jQuery('.list-type-soal ul li a').removeClass("selected");
			jQuery(this).addClass("selected");
			jQuery("#filter-soal").replaceWith( "<a id='filter-soal' href='<?php echo $this->webroot; ?>questions/proses/"+kelasfiltered+"/"+typemapelfiltered+"/"+typesoalfiltered+"' style='position:absolute;top:30px;right:100px;''><img src='<?php echo $this->webroot; ?>img/ok-btn1.png'> </a>" );

		});

		jQuery('.box-list-mapel a').click(function(){

			typemapelSelected = jQuery(this).text();
			typemapelfiltered = jQuery(this).attr('id');
			jQuery('#matpel-selected').text(typemapelSelected);
			jQuery("#filter-soal").replaceWith( "<a id='filter-soal' href='<?php echo $this->webroot; ?>questions/proses/"+kelasfiltered+"/"+typemapelfiltered+"/"+typesoalfiltered+"' style='position:absolute;top:30px;right:100px;''><img src='<?php echo $this->webroot; ?>img/ok-btn1.png'> </a>" );
			
			
		});

	});
</script>

<div id="banksoal index">
	<div class="bank-soal-wrapper clearfix">
		<h2>Pilih kelas, bidang study, kategory soal & level soal</h2>
		
			<ul class="list-kelas">
				<li><a id="kelas1" rel="1" href="#">Kelas 1</a></li>
				<li><a id="kelas2" rel="2" href="#">Kelas 2</a></li>
				<li><a id="kelas3" rel="3" href="#">Kelas 3</a></li>
				<li><a id="kelas4" rel="4" href="#">Kelas 4</a></li>
				<li><a id="kelas5" rel="5"href="#">Kelas 5</a></li>
				<li><a id="kelas6" rel="6" href="#">Kelas 6</a></li>
			</ul>
			<div class="main-content-banksoal clearfix">
				<div class="list-type-soal">
					<ul>
						<li><a id="1/1" href="#">Pilihan ganda mudah</a></li>
						<li><a id="1/2" href="#">Pilihan essay mudah</a></li>
					</ul>
					<ul>
						<li><a id="2/1" href="#">Pilihan ganda sedang</a></li>
						<li><a id="2/2" href="#">Pilihan essay sedang</a></li>
					</ul>
					<ul>
						<li><a id="3/1" href="#">Pilihan ganda sulit</a></li>
						<li><a id="3/2" href="#">Pilihan essay sulit</a></li>
					</ul>
				</div>
				<div class="list-matpel-soal">
					<div class="box-list-mapel" id="box-kelas1">
						<a href="#" id="pkn" style="top:50px;left:60px">PKN</a>
						<a href="#" id="ips" style="top:200px;left:200px">IPS</a>
						<a href="#" id="matematika" style="top:60px;left:331px">Matematika</a>
						<a href="#" id="bahasa-indonesia" style="top:200px;left:460px">Bahasa Indonesia</a>
						<a href="#" id="ipa" style="top:60px;left:600px">IPA</a>
					</div>
					<div class="box-list-mapel" id="box-kelas2">
						<a href="#" id="pkn" style="top:200px;left:60px">PKN</a>
						<a href="#" id="ips" style="top:60px;left:200px">IPS</a>
						<a href="#" id="matematika" style="top:200px;left:331px">Matematika</a>
						<a href="#" id="bahasa-indonesia" style="top:60px;left:460px">Bahasa Indonesia</a>
						<a href="#" id="ipa" style="top:200px;left:600px">IPA</a>
					</div>
					<div class="box-list-mapel" id="box-kelas3">
						<a href="#" id="pkn" style="top:50px;left:60px">PKN</a>
						<a href="#" id="ips" style="top:50px;left:200px">IPS</a>
						<a href="#" id="matematika" style="top:60px;left:331px">Matematika</a>
						<a href="#" id="bahasa-indonesia" style="top:200px;left:460px">Bahasa Indonesia</a>
						<a href="#" id="ipa" style="top:200px;left:600px">IPA</a>
					</div>
					<div class="box-list-mapel" id="box-kelas4">
						<a href="#" id="pkn" style="top:200px;left:60px">PKN</a>
						<a href="#" id="ips" style="top:200px;left:170px">IPS</a>
						<a href="#" id="ipa" style="top:50px;left:490px">IPA</a>
						<a href="#" id="matematika" style="top:200px;left:280px">Matematika</a>
						<a href="#" id="bahasa-indonesia" style="top:50px;left:375px">Bahasa Indonesia</a>
						<a href="#" id="bahasa-inggris" style="top:50px;left:610px">Bahasa Inggris</a>
					</div>
					<div class="box-list-mapel" id="box-kelas5">
						<a href="#" id="pkn" style="top:50px;left:60px">PKN</a>
						<a href="#" id="ips" style="top:50px;left:170px">IPS</a>
						<a href="#" id="ipa" style="top:200px;left:490px">IPA</a>
						<a href="#" id="matematika" style="top:50px;left:280px">Matematika</a>
						<a href="#" id="bahasa-indonesia" style="top:200px;left:375px">Bahasa Indonesia</a>
						<a href="#" id="bahasa-inggris" style="top:200px;left:610px">Bahasa Inggris</a>
					</div>
					<div class="box-list-mapel" id="box-kelas6">
						<a href="#" id="pkn" style="top:50px;left:60px">PKN</a>
						<a href="#" id="ips" style="top:200px;left:128px">IPS</a>
						<a href="#" id="ipa" style="top:50px;left:360px">IPA</a>
						<a href="#" id="matematika" style="top:50px;left:210px">Matematika</a>
						<a href="#" id="bahasa-indonesia" style="top:200px;left:280px">Bahasa Indonesia</a>
						<a href="#" id="bahasa-inggris" style="top:200px;left:427px">Bahasa Inggris</a>
						<a href="#" id="ketrampilan-edukatif" style="top:50px;left:505px">Ketrampilan Edukatif</a>
						<a href="#" id="komputer" style="top:200px;left:580px">Komputer</a>
					</div>

				</div>
			</div>
			<div class="bank-soal-footer clearfix">
				<a href="../users/home" style="position:absolute;top:0;left:50px;">
				<img src="<?php echo $this->webroot; ?>resources/images/back11.png" alt="icon">
				</a>
				<div class="" style="float:left;width:300px;margin-left:380px;">
					<span style="float:left;width:100px;margin-left:20px;">Pilihan Anda:</span>
					<p style="float:left;width:150px;margin-left:20px;">
						<span id="kelas-selected"></span><br/>
						<span id="matpel-selected"></span><br/>
						<span id="type-selected"></span><br/>

					</p>
				</div>
				<a id="filter-soal" href="<?php echo $this->webroot; ?>questions/proses/" style="position:absolute;top:30px;right:100px;">
					<img src="<?php echo $this->webroot; ?>img/ok-btn1.png" alt="icon">
				</a>
			</div>
		
	</div>
</div>