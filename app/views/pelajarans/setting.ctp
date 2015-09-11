<style type="text/css">
#setting{
	font-family: 'Lato', Calibri, Arial, sans-serif; 
	display:block;
	width:100%;
	background:#3b4dac;
	float:left;
	margin:0 auto;
	padding:0;
	padding-top:100px;
	height: 78%;
	text-align: center;
}
ul li{
	display:block;width:42%;
	
	float:left;
	
}
ul li:hover{
	
}
ul li a{
	color:#fff;font-size:40px;text-decoration:none;
}
ul li a img{
	margin-right:10px;margin-bottom: 20px;
}
#setting-pelajaran{
	background: transparent url('../images/subject-setting-ico.png') no-repeat top left;
	width: 136px;
	height: 136px;
	display: block;
	margin-left: 200px;
}
#setting-pelajaran:hover{
	background: transparent url('../images/subject-setting-ico.png') no-repeat bottom left;
}

#setting-categories{
	background: transparent url('../images/categories-setting-ico.png') no-repeat top left;
	width: 136px;
	height: 136px;
	display: block;
	margin-left: 86px;
}
#setting-categories:hover{
	background: transparent url('../images/categories-setting-ico.png') no-repeat bottom left;
}
#flashMessage{
    display: block;
    width: 95%;
    background-color: #1cbbd2;
    padding: 10px;
    text-align: center;
}
</style>
<div id="setting">
<ul >
	<li>
		<a id="setting-pelajaran" href="<?php echo $this->webroot?>pelajarans/" style=""></a></li>
	<li><a id="setting-categories" href="<?php echo $this->webroot?>categories/" style="">
		</a>
	</li>
</ul>
<br/>
<br/>
<h2 style="color: #FFFFFF;padding-top: 153px;">PENGATURAN</h2>
</div>

