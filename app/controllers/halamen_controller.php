<?php
class HalamenController extends AppController {

	var $name = 'Halamen';
	var $helpers = array('Html', 'Form');
	function beforeFilter() {
	    parent::beforeFilter();
		//$this->Auth->allow('logout','__getlic','__ceklicense','login');
		//$this->Auth->allow('logout','login');
		//$this->Auth->allow('*');
		//$this->set('menuTab', 'admin');
		//$this->set('menuTabChild', 'matpel');
	    
		
	}
	
	function index() {
		$this->Category->recursive = 0;
		$this->set('categories', $this->paginate());
	}

	function home(){
		$variabelsidebar = 'taufiq keren';
		$this->set('variabelsidebar',$variabelsidebar);
	}
	function tes_node(){
		$this->layout = 'default_node';
	}
	function skope_conference(){
		$this->layout = 'default_server';
	}

	function bikin(){

		$favorite = $this->params['url']['lesson_id'];
		$cat_id = $this->params['url']['template_type'];


		$conditions = array('Halaman.lesson_id'=>$favorite,'Halaman.template_type'=>$cat_id);
		$lessontersedia = $this->Halaman->find('all',array('conditions'=>$conditions));

		$this->set('lessontersedia',$lessontersedia);
		

		$variabelsidebar = 'taufiq cakep';
		$this->set('variabelsidebar',$variabelsidebar);
		$this->set('favorite',$favorite);
		$this->set('cat_id',$cat_id);
	}

	function browse($id){

		if(!$id){
			
			echo 'salah';exit();

		}else{


			$halaman_yang_dipilih  = $this->Halaman->read(null,$id);
			$this->set('halamanbuatkeview',$halaman_yang_dipilih);
			//$kondisi = array('Halaman.lesson_id'=>193,'Halaman.template_type'=>1);


			//$kumpulanhalaman = $this->Halaman->find('first',array('conditions'=>$kondisi));

			//$this->set('halamanbuatkeview',$kumpulanhalaman);	
		}
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Category.', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$this->set('halaman', $this->Halaman->read(null, $id));
		$this->layout = 'default_blank';
	}

	function view_single($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Category.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('tipe','edit');
		$halaman = $this->Halaman->read(null, $id);

		$template = $halaman['Halaman']['template_type'];

		if($template == 1){
			$template = 'text';
		}else{
			$template = 'file';
		}

		$this->set('halaman',$halaman);
		$this->set('template',$template);
		
		$this->layout = 'default_blank';
	}

	function add() {
		$this->Halaman->recursive = 1;
		if (!empty($this->data)) {
			
			$nametoResponse  = $this->data['Halaman']['title'];

			$this->Halaman->create();
			if ($this->Halaman->save($this->data)) {
				
				
				$idtoResponse  = $this->Halaman->getInsertID();

				
				$status = "true";
				$flashMessage = "Berhasil Menambahkan Halaman baru";
				
				$this->redirect(array('action'=>'add_responses',$idtoResponse,$status,$flashMessage));
			} else {
				$idtoResponse='';
				$status = "false";
				$flashMessage = "Tidak Berhasil Menambahkan Halaman Ajar";
				$this->redirect(array('action'=>'add_responses',$idtoResponse,$status,$flashMessage));

			}
		}


	}


	function add_responses($idtoResponse,$status,$flashMessage){
		
		if (!$idtoResponse && !$status) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		//$this->set('nametoResponse',$nametoResponse);

		$this->set('page', $this->Halaman->read(null, $idtoResponse));
		$this->set('status',$status);
		$this->set('flashMessage',$flashMessage);
		$this->set('idtoResponse',$idtoResponse);


		$this->layout = 'default_blank';
	}





	function edit($id = null) {
		$this->Halaman->recursive = 1;
		if (!empty($this->data)) {
			
			$nametoResponse  = $this->data['Halaman']['title'];
			$idtoResponse  = $this->data['Halaman']['id'];
			//$this->Halaman->create();
			if ($this->Halaman->save($this->data)) {

				$status = "true";
				$flashMessage = "Berhasil Mengupdate Halaman";
				
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));
			} else {
				$idtoResponse='';
				$status = "false";
				$flashMessage = "Tidak Berhasil Mengupdate Halaman";
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));

			}
		}


	}

	function updateorder(){
		//if ($this->Halaman->save($this->data)) {
		
			/*foreach($this->data['Halaman'] as $index => $halaman) {
			++;
		        
		        $halaman['Halaman']['id'] = $halamanid;
		        $halaman['Halaman']['order'] = $halamanorder;


		        

		        $active = $this->Halaman->read(null, $halamanid);
				
				//$do_update = ;
				$this->Halaman->saveAll($this->data);
	      	}*/
	    
		$this->Halaman->saveAll($this->data);
	}


	function edit_responses($idtoResponse,$status,$flashMessage){
		
		if (!$idtoResponse && !$status) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		//$this->set('nametoResponse',$nametoResponse);

		$this->set('page', $this->Halaman->read(null, $idtoResponse));
		$this->set('status',$status);
		$this->set('flashMessage',$flashMessage);
		$this->set('idtoResponse',$idtoResponse);


		$this->layout = 'default_blank';
	}

	

	function delete_pages($id = null) {
		$this->autoRender = false;
		$status = "false";
		$flashMessage = "";
		$idtodelete = "";
		if (!$id) {
			$status = "false";
			$flashMessage = "Tidak Berhasil Menghapus";
			$idtodelete = "";
		}
		if ($this->Halaman->del($id)) {
			$status = "true";
			$flashMessage = "Berhasil Menghapus";
			$idtodelete = $id;

		}
		//$this->set(compact('status','flashMessage','idtodelete'));
		$this->layout = 'default_blank';
		
	}

	

	function uploadfiles(){
		$this->autoRender = false;
		$str_random  = $this->_str_random(8);
		$file = $this->data['Halaman']['mediafiles']; // your file upload input field in the form should be named 'file'
		$idfolder = $this->data['Halaman']['lessonId'];

		if($file)
		{
			
			$output_dir = WWW_ROOT.'files'.DS.'lessons'.DS.$idfolder.DS.'images'.DS.'pages'.DS;
			
		    //$output_dir = "uploads/";
		    //ini_set("display_errors",1);
		    if(isset($file))
		    {
		        //$RandomNum   = time();
		        
		        $ImageName      = str_replace(' ','-',strtolower($this->data['Halaman']['mediafiles']['name']));
		        $ImageType      = $this->data['Halaman']['mediafiles']['type']; //"image/png", image/jpeg etc.
		     
		        $ImageExt 		= substr($ImageName, strrpos($ImageName, '.'));
		        $ImageExt       = str_replace('.','',$ImageExt);
		        
	            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	            $NewImageName   = $ImageName.'_'.$str_random.'.'.$ImageExt;

	            if($ImageExt == 'jpg' || $ImageExt == 'png' || $ImageExt == 'jpeg' || $ImageExt == 'gif' || $ImageExt == 'tiff'){
	            
	            	$fileType = 'image';
	            
	            }elseif ($ImageExt == 'mp4' || $ImageExt == 'flv' || $ImageExt == 'Webm') {
	            	
	            	$fileType = 'video';
	            
	            }elseif ($ImageExt == 'swf') {
	            	
	            	$fileType = 'animation';
	            }



	         
	            move_uploaded_file($this->data['Halaman']['mediafiles']["tmp_name"],$output_dir. $NewImageName);
	        	
	            $obj['status'] = TRUE;
	            $obj['idfolder'] = $idfolder;
	            $obj['file_name'] = $NewImageName;
	            $obj['file_extension'] = $ImageExt;
	            $obj['file_type'] = $fileType;
	            $result = $obj;

		            
		        
		    }
		}



		header('Content-type: text/json');
    	header('Content-type: application/json');
	    echo json_encode($result);
	}

	function generatexml($number = null){
		
		$this->set(compact('number'));
		$this->layout = 'default_blank';
		
	}

	function showcam(){
		
	}
	
	function cari($pelajaranId=null, $kelasId=null){
		$this->Halaman->recursive = 2;
		
		$this->Halaman->bindModel(
	    	array('belongsTo' => 
		    	array(
				'Pelajaran' => array(
		            'className' => 'Pelajaran',
		            'foreignKey'=> ''
		        	),
				'Grade' => array(
					'className' => 'Grade',
					'foreignKey' => ''
					)
		        )
		    )
		);

		$listPelajaran = $this->Halaman->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$this->set('listPelajaran',$listPelajaran);
		
		$listGrade = $this->Halaman->Grade->find('list',array('fields'=>'Grade.title'));
		$this->set('listGrade',$listGrade);

		if(!$pelajaranId){	
			$listLesson=$this->Halaman->Lesson->find('all');
			$this->layout ='default';
			$this->set('pelajaranId',$pelajaranId);
			$this->set('kelasId',$kelasId);

		}else{
			if($pelajaranId==="all"){
				
				if($kelasId==='all'){
					$listLesson=$this->Halaman->Lesson->find('all');
					$this->layout ='default_blank';
					$this->set('pelajaranId',$pelajaranId);
					$this->set('kelasId',$kelasId);
				}else if($kelasId==null){
					$listLesson=$this->Halaman->Lesson->find('all');
					$this->layout ='default_blank';
					$this->set('pelajaranId',$pelajaranId);
					$this->set('kelasId',$kelasId);
				}
				else{
					$listLesson=$this->Halaman->Lesson->find('all',array('conditions'=>array('Lesson.grade_id'=>$kelasId)));
					$this->layout ='default_blank';
					$this->set('pelajaranId',$pelajaranId);
					$this->set('kelasId',$kelasId);
				}
			}else{
				
				if($kelasId==='all'){
					$listLesson=$this->Halaman->Lesson->find('all',array('conditions'=>array('Lesson.pelajaran_id'=>$pelajaranId)));
					$this->layout ='default_blank';
					$this->set('pelajaranId',$pelajaranId);
				}else if($kelasId==null){
					$listLesson=$this->Halaman->Lesson->find('all',array('conditions'=>array('Lesson.pelajaran_id'=>$pelajaranId)));
					$this->layout ='default_blank';
					$this->set('pelajaranId',$pelajaranId);
					$this->set('kelasId',$kelasId);
				}
				else{
					$listLesson=$this->Halaman->Lesson->find('all',array('conditions'=>array('Lesson.pelajaran_id'=>$pelajaranId,'Lesson.grade_id'=>$kelasId)));
					$this->layout ='default_blank';
					$this->set('pelajaranId',$pelajaranId);
				}
			}
		}

		/*$this->paginate['Lesson'] = array(
		  'order' => array('Lesson.id' => 'desc'),
		  'limit' => 6,
		);
		$listLesson = $this->paginate('Lesson');*/

		$this->set('listLesson', $listLesson);

		//var_dump($listLesson);exit();
		$this->set('contentdisplay','content');
	}

	function status_responses($status){
		$this->set('status',$status);
	}

	function createnew(){
		$this->Halaman->bindModel(
	    	array('belongsTo' => 
		    	array(
				'Pelajaran' => array(
		            'className' => 'Pelajaran',
		            'foreignKey'=> ''
		        	),
				'Grade' => array(
					'className' => 'Grade',
					'foreignKey' => 'grade_id'
					)
		        )
		    )
		);

		$listPelajaran = $this->Halaman->Pelajaran->find('all');
		$this->set('listPelajaran',$listPelajaran);
		//var_dump($this->data);exit();
		if (!empty($this->data)) {

			$this->Halaman->Lesson->create();

			if ($this->Halaman->Lesson->save($this->data)) {
				$lessonID=$this->Halaman->Lesson->getInsertID();
				$status = 'Sukses';
				
				//$this->redirect(array('action'=>'add_responses',$idtoResponse,$status,$flashMessage));
			} else {
				$status = 'Gagal';				

			}
			
			$this->redirect(array('action'=>'write',$lessonID));

		}
		$kelas=$this->Halaman->Grade->find('list',array('fields'=>'Grade.title'));
		$this->set('kelasID',$kelas);
		$this->set('contentdisplay','content');
	}
	function write($id){
		$this->Halaman->recursive = 2;
		if (!empty($this->data)) {
			
			$nametoResponse  = $this->data['Halaman']['title'];
			$idtoResponse  = $this->data['Halaman']['id'];
			//$this->Halaman->create();
			if ($this->Halaman->save($this->data)) {

				$status = "true";
				$flashMessage = "Berhasil Mengupdate Halaman";
				
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));
			} else {
				$idtoResponse='';
				$status = "false";
				$flashMessage = "Tidak Berhasil Mengupdate Halaman";
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));

			}
		}/*else{
			$this->Halaman->Lesson->find('list',array('conditions'=>array('Lesson.id'=>$id));
		}*/
		if (empty($this->data)) {
			//$this->data = $this->Question->read(null, $id);
			$pel=$this->Halaman->Lesson->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
			$this->data=$this->Halaman->Lesson->read(null,$id);
			$this->set('pelajaranlist',$pel);
		}
		$this->set('halamanID',$id);
		$this->set('contentdisplay','content');
	}
	function edit_title($id){
		$this->Halaman->recursive = 1;
		$this->Halaman->bindModel(
	    	array('belongsTo' => 
		    	array(
				'Pelajaran' => array(
		            'className' => 'Pelajaran',
		            'foreignKey'=> ''
		        	),
				'Grade' => array(
					'className' => 'Grade',
					'foreignKey' => 'grade_id'
					)
		        )
		    )
		);
	
		if (empty($this->data)) {
			//$this->data = $this->Question->read(null, $id);
			$pel=$this->Halaman->Lesson->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
			$this->data=$this->Halaman->Lesson->read(null,$id);
			$b=$this->Halaman->Grade->find('list',array('fields'=>'Grade.title'));
			$this->set('pelajaranlist',$pel);
			$this->set('opsi',$b);
			$this->layout = 'default_blank';
		}else{
			$this->data['Lesson']['id']=$id;
			if ($this->Halaman->Lesson->save($this->data)) {

				$status = "true";
				$flashMessage = "Berhasil Mengupdate Halaman";
				$pel=$this->Halaman->Lesson->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
				$this->data=$this->Halaman->Lesson->read(null,$id);
				$b=$this->Halaman->Grade->find('list',array('fields'=>'Grade.title'));
				$this->set('opsi',$b);
				$this->set('pelajaranlist',$pel);
				$this->set('result',$flashMessage);
			} else {
				$flashMessage = "Tidak Berhasil Mengupdate Halaman";
				$this->set('result',$flashMessage);

			}
			$this->layout = 'default_blank';
		}

		//$this->set('flash',$flashMessage);
		$this->set('halamanID',$id);
	}
	function explorer(){
		$this->layout = 'default_exp';
	}
	function pages($id){
		//$this->autoRender = false;
		$hal=$this->Halaman->find('all',array('fields' => array('Halaman.order','Halaman.id','Halaman.deskripsi_halaman'),'conditions'=>array('Halaman.lesson_id'=>$id),'order' => array('Halaman.order' => 'asc')));
		//print_r($hal[3]['Halaman']['deskripsi_halaman']);exit();
		$i=0;
		foreach ($hal as $row) {
			$trunc=$this->truncate($hal[$i]['Halaman']['deskripsi_halaman'],15);
			$hal[$i]['Halaman']['deskripsi_halaman']=$trunc;
			$i++;
		}
		$this->set('halamanlist',$hal);
		$this->layout = 'default_blank';
	}
	function edit_order(){
		$this->autoRender = false;
		$i = 0;

		foreach ($_POST['item'] as $value) {
			$this->data['Halaman']['id']=$value;
			$this->data['Halaman']['order']=$i;
			$this->Halaman->save($this->data);
		    $i++;
		}
	}
	function edit_pages($id=null){
		//$this->Halaman->recursive = 1;
		if (empty($this->data)) {
			$this->data=$this->Halaman->read(null,$id);
			$this->layout = 'default_blank';
		}else{
			$this->data['Halaman']['id']=$id;
			if ($this->Halaman->save($this->data)) {
				$status = "true";
				$flashMessage = "Berhasil Mengupdate Halaman";
				$this->data=$this->Halaman->Lesson->read(null,$id);
				$this->set('result',$flashMessage);
			} else {
				$flashMessage = "Tidak Berhasil Mengupdate Halaman";
				$this->set('result',$flashMessage);
			}
			$this->layout = 'default_blank';
		}
		$this->set('halamanID',$id);
	}
	function view_pages($id){
		//$this->autoRender = false;
		$isi=$this->Halaman->read(null,$id);
		$this->set('content_page',$isi);
		$this->layout = 'default_blank';
	}
	function add_pages($lesson_id,$last_page){
		if (!empty($this->data)) {
			$this->Halaman->create();
			$this->data['Halaman']['lesson_id']=$lesson_id;
			$this->data['Halaman']['order']=$last_page;
			if ($this->Halaman->save($this->data)) {

				$this->layout = 'default_blank';
			} else {

			}
		}else{
			$this->set('lessonID',$lesson_id);
			$this->set('page',$last_page);
		}
		$this->layout = 'default_blank';
	}
	function search(){

		$this->Halaman->recursive = 2;
		$this->Halaman->bindModel(
	    	array('belongsTo' => 
		    	array(
				'Pelajaran' => array(
		            'className' => 'Pelajaran',
		            'foreignKey'=> ''
		        	),
				'Grade' => array(
					'className' => 'Grade',
					'foreignKey' => ''
					)
		        )
		    )
		);

		$listPelajaran = $this->Halaman->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$this->set('listPelajaran',$listPelajaran);
		
		$listGrade = $this->Halaman->Grade->find('list',array('fields'=>'Grade.title'));
		$this->set('listGrade',$listGrade);
		
		$keyword=$this->params['url']['keyword_string'];
		$conditions = array(
			'or' => array(
				'Lesson.title LIKE'=>'%'.$keyword.'%',
				'Lesson.author LIKE'=>'%'.$keyword.'%',
				'Lesson.description LIKE'=>'%'.$keyword.'%'
			)
		);
		$listLesson=$this->Halaman->Lesson->find('all',array('conditions'=>$conditions));

		$this->set('listLesson', $listLesson);
		$this->set('keyword',$keyword);

		$this->set('pelajaranId',1);
		$this->set('kelasId',1);

		//$this->render('cari');
		$this->layout = 'default_blank';


	}
	function showlandingmikroskop(){
		$this->layout = 'default_blank';
	}

	function showmikro_gambar(){

		$this->layout = 'default_iframe';
	}

	function saveimage(){
		$data = $_POST['image'];
		$data = str_replace('data:image/png;base64,', '', $data);
		$data = str_replace(' ', '+', $data);
		$data = base64_decode($data);
		$uniqfilename = uniqid().'.png';
		$file = WWW_ROOT.DS.'files'.DS.'image_mikroskop'.DS. $uniqfilename;
		$success = file_put_contents($file, $data);
		$this->set('urlimage',$uniqfilename);
		$this->layout = 'default_blank';
	}

	function savevideo(){
		foreach(array('video', 'audio') as $type) {
		    if (isset($_FILES["${type}-blob"])) {

		        $fileName = $_POST["${type}-filename"];
		        $uploadDirectory = WWW_ROOT.DS.'files'.DS.'video_mikroskop'.DS.$fileName;

		        if (!move_uploaded_file($_FILES["${type}-blob"]["tmp_name"], $uploadDirectory)) {
		            echo(" problem moving uploaded file");
		        }

		        //echo($uploadDirectory);
		    }
		}
		$this->set('urlimage',$fileName);
		$this->layout = 'default_blank';
	}

	function editimagemikro(){
		$imageurl=$this->params['url']['filename']; //get keyword from querystring//
		$this->set('imageurl',$imageurl);
		$this->layout = 'default_blank';	
	}
	function download($id){
		$conditions = array('conditions'=>array('Halaman.lesson_id'=>$id),'order' => array('Halaman.order' => 'ASC'));
		$isi=$this->Halaman->find('all', $conditions);
		$lesson=$this->Halaman->Lesson->read(null, $id);
		$this->kosongin(WWW_ROOT.DS.'wow_book/files/*');
		$servername=$_SERVER['SERVER_NAME'];
		foreach ($isi as $item) {
				$source=$this->getContents($item['Halaman']['content'],'http://'.$servername.'/skope/app/webroot/','"');
				$count=$item['Halaman']['order'];
				$count=0;
				foreach ($source as $row) {
					//echo $count.' '.$row."</br>";
					$row=str_replace("%20", " ", $row);
					mkdir(dirname(WWW_ROOT."wow_book/files/".$row), 0777, true);
					copy( WWW_ROOT.$row, WWW_ROOT."wow_book/files/".$row);
					$count++;
				}
				$source2=$this->getContents($item['Halaman']['content'],'src="/skope/files/image_mikroskop/','"');
				foreach ($source2 as $row2) {
					//echo $count.' '.$row."</br>";

					$row2=trim(str_replace("%20", " ", $row2));
					mkdir(dirname(WWW_ROOT."wow_book/files/image_mikroskop/".$row2), 0777, true);
					copy( WWW_ROOT."files/image_mikroskop/".$row2, WWW_ROOT."wow_book/files/image_mikroskop/".$row2);
				}
				$source3=$this->getContents($item['Halaman']['content'],'src="/skope/files/video_mikroskop/','"');
				foreach ($source3 as $row2) {
					//echo $count.' '.$row."</br>";

					$row2=trim(str_replace("%20", " ", $row2));
					mkdir(dirname(WWW_ROOT."wow_book/files/video_mikroskop/".$row2), 0777, true);
					copy( WWW_ROOT."files/video_mikroskop/".$row2, WWW_ROOT."wow_book/files/video_mikroskop/".$row2);
				}
				//var_dump($source);

		}
		$isifeature='<!doctype html>
		<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
		<head>
			<meta charset="utf-8">
			<style>
			.js #features {
			margin-left: -12000px; width: 100%;
		}
		</style>
			<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
			   Remove this if you use the .htaccess -->
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		    <!--  Mobile viewport optimized: j.mp/bplateviewport -->
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
		    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		    <meta name="description" content="">
			<title>SKOPE</title>
			
			<!-- Bootstrap core CSS -->
			<!-- CSS : implied media="all" -->
		    <link href="css/style.css" rel="stylesheet">
		    <link href="wow_book.css" rel="stylesheet">
		    <link href="css/preview.css" rel="stylesheet">
		    <link href="css/nanoscroller.css" rel="stylesheet">
		    <link href="css/component_lesson.css" rel="stylesheet">
			<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		
		</head>
		<body>
			<div id="container">
			<div id="main">
				<img id="click_to_open" src="images/click_to_open.png" alt="click to open" />
		  		<div id="features">';
		$isifeature.='<div class="feaature bk-book book-1 bk-bookdefault viewlesson">
				<div class="bk-front">
			        <div class="bk-cover">
			            <h2>
			                <span>'.$lesson['Lesson']['author'].'</span>
			                <span style="text-transform:uppercase;">'.$lesson['Lesson']['title'].'</span><br/>
			                <span style="font-size:0.5em;font-family:arial,helvetica;text-transform:lowercase;">'.$lesson['Lesson']['description'].'</span>
			            </h2>
			        </div>
			        <div class="bk-cover-back"></div>
			    </div>
			</div>
				<div class="feature">
					<div class="contenttextbook nano">
						<div class="nano-content">
							<div class="contentareablock titlearea">
							
			                <span>'.$lesson['Lesson']['author'].'</span>
			                <h1 style="text-transform:uppercase;font-size:43px;">'.$lesson['Lesson']['title'].'</h1>
			                <span style="font-size:1em;font-family:arial,helvetica;text-transform:lowercase;">'.$lesson['Lesson']['description'].'</span>
			            	<p>Kelas :  '.$lesson['Lesson']['grade_id'].'
			            	<br/>Pelajaran :  '.$lesson['Pelajaran']['nama'].'</p>
			            	<br/>
			            	<p style="font-weight:bold;">---- KELOMPOK ----</p>
			            	<p>'.nl2br($lesson['Lesson']['kelompok']).'</p>
			            	
						</div>
						</div>
					</div>
					
				</div>


				<div class="feature">
					<div class="contenttextbook nano">
						<div class="nano-content">
							<div class="contentareablock titlearea">
							
			                
						</div>
						</div>
					</div>
					
				</div>';
			foreach ($isi as $item){
				//$this->getContents($item['Halaman']['content'],'http://localhost/skope/app/webroot/','"')
				$item['Halaman']['content']=str_replace("http://".$servername."/skope/app/webroot/", "files/", $item['Halaman']['content']);
				$item['Halaman']['content']=str_replace("/skope/files/image_mikroskop/", "files/image_mikroskop/", $item['Halaman']['content']);
				$item['Halaman']['content']=str_replace("/skope/files/video_mikroskop/", "files/video_mikroskop/", $item['Halaman']['content']);
				$isifeature.='<div class="echo">
									<div class="contenttextbook nano">
										<div class="nano-content">
											<div class="contentareablock">
											<h2 style="font-size:37px;">'.$item['Halaman']['deskripsi_halaman'].'</h2>
											 '.$item['Halaman']['content'].'
										</div>
										</div>
									</div>
									
								</div>';
			}
			$isifeature.='</div><nav class="navigasiwow">
					<ul>
						<li><a id="first"     href="#" title="goto first page"   >First page</a></li>
						<li><a id="back"      href="#" title="go back one page"  >Back</a></li>
						<li><a id="next"      href="#" title="go foward one page">Next</a></li>
						<li><a id="last"      href="#" title="goto last page"    >last page</a></li>
						<li><a id="zoomin"    href="#" title="zoom in"           >Zoom In</a></li>
						<li><a id="zoomout"   href="#" title="zoom out"          >Zoom Out</a></li>
						<li><a id="slideshow" href="#" title="start slideshow"   >Slide Show</a></li>
						<li><a id="flipsound" href="#" title="flip sound on/off" >Flip sound</a></li>
					</ul>
				</nav>
				
				</div> <!--! end of #container -->
				<footer>
					
				</footer>
			</div>
				<script type="text/javascript" src="wow_book.min.js"></script>
				<script type="text/javascript" src="js/jquery.nanoscroller.min.js"></script>
			<style>
			.makecenter{
				position: absolute;
				display: inline-block;
				right: 0;
				width: 61px;
				padding: 5px 10px;
			}
			.makecenter > a {
				color: #000;
				background-color: transparent;
				border: 1px solid;
				margin: 2px;
			
			}
			</style>
			
				<script type="text/javascript" src="wow_conf.js"></script>
				<script type="text/javascript" src="js/plugins.js"></script>
				<script type="text/javascript" src="js/script.js"></script>
			
			</body>
			</html>';
			//var_dump($isifeature);exit();
			$path=WWW_ROOT.DS.'wow_book/index.html';
			$file = new File($path,true,0777);
			$file->open('w',true);
			$file->write($isifeature);
			$file->close();
			// Get real path for our folder
			$rootPath = realpath(WWW_ROOT.DS.'wow_book');

			// Initialize archive object
			$zip = new ZipArchive();
			$zip->open('file.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

			// Create recursive directory iterator
			/** @var SplFileInfo[] $files */
			$files = new RecursiveIteratorIterator(
			    new RecursiveDirectoryIterator($rootPath),
			    RecursiveIteratorIterator::LEAVES_ONLY
			);

			foreach ($files as $name => $file)
			{
			    // Skip directories (they would be added automatically)
			    if (!$file->isDir())
			    {
			        // Get real and relative path for current file
			        $filePath = $file->getRealPath();
			        $relativePath = substr($filePath, strlen($rootPath) + 1);

			        // Add current file to archive
			        $zip->addFile($filePath, $relativePath);
			    }
			}

			// Zip archive will be created only after closing object
			$zip->close();

			$this->layout = 'default_blank';
	}
}
?>