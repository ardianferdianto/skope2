<?php
class VideosController extends AppController {

	var $name = 'Videos';
	var $helpers = array('Html', 'Form','Excerpt','Magick');
	//var $helpers = array('Html', 'Form');
	//var $components = array('Filter');
	function beforeFilter() {
	    parent::beforeFilter(); 
	    //$this->set('menuTab', 'Videos');
	    //$this->set('menuTabChild', 'Videos');
	    //$this->Auth->allow('download');
	}
	function index() {
		$this->Video->recursive = 2;
		
		$videos = $this->Video->find('all');
		$this->set('videos',$videos);
	    $listCategory = $this->Video->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.type'=>1)));
		$this->set(compact('listCategory'));
		
	}

	function videos() {
		$this->Video->recursive = 2;
		
		$videos = $this->Video->find('all');
		$this->set('videos',$videos);
	    $listCategory = $this->Video->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.type'=>1)));
		$this->set(compact('listCategory'));
		
	}

	function search(){
		$keyword=$this->params['url']['keyword']; //get keyword from querystring//
		//used simpme or condition with singe value checking
		//replace ModelName with actual name of your Appmodel
		$cond=array('OR'=>array("Video.title LIKE '%$keyword%'","Video.sutradara LIKE '%$keyword%'", "Video.produksi LIKE '%$keyword%'","Video.details LIKE '%$keyword%'")  );

		$videos = $this->Video->find('all',array('conditions'=>$cond));
		$this->set(compact('videos'));
		
		$this->layout = 'default_blank';

	}

	function video() {
		$this->Video->recursive = 2;
		
		
		$this->set('Videos', $this->paginate());
		
		
		if($this->Auth->user('group_id')==3){
		$VideosMurid = $this->Video->find('all');
		$this->set(compact('VideosMurid'));
		
		}
		
		
	}



	function find_category($id = null ) {
		$this->Video->recursive = 2;
		if ($id == 'empty'){
			$videos = $this->Video->find('all',array('order' => array('Video.created' => 'DESC')));		
		}else{
			$conditions = array('Video.category_id'=>$id);
			$videos = $this->Video->find('all',array('conditions'=>$conditions,'order' => array('Video.created' => 'DESC')));	
		}
		
		$this->set(compact('videos'));
		$this->layout = 'default_blank';

		//$this->render('find_category','ajax');
	}

	

	function view_thumb($id=null){

		if (!$id) {
			$this->Session->setFlash(__('Invalid Video.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Video', $this->Video->read(null, $id));
		$this->render('view_thumb','ajax');
	}
	function view_thumb_video($id=null){

		if (!$id) {
			$this->Session->setFlash(__('Invalid Video.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Video', $this->Video->read(null, $id));
		$this->render('view_thumb_video','ajax');
	}

	function lifeskill() {
		$this->Video->recursive = 2;
		$conditions = array('Video.type'=>4);
		$eboks = $this->Video->find('all',array('conditions'=>$conditions));
		$this->set(compact('eboks'));
	}

	function carachter() {
		$this->Video->recursive = 2;
		$conditions = array('Video.type'=>5);
		$eboks = $this->Video->find('all',array('conditions'=>$conditions));
		$this->set(compact('eboks'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Video.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('ebook', $this->Video->read(null, $id));
		$this->layout = 'default_popup';
	}

	function view_video($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Video.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Video', $this->Video->read(null, $id));
	}
	
	function find() {
		$this->Video->recursive = 0;
	    $filter = $this->Filter->process($this);
	    $this->set('Videos', $this->paginate(null, $filter));
	    $listMataPelajaran = $this->Video->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
	    //$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
	    $listGuru = $this->Video->User->find('list',array('fields'=>'User.nama','conditions'=>array('User.group_id'=>array(1,2))));
	    
	    /*$listTahunAjaran = $this->Video->PasTahunAjaran->find('list',array('fields'=>'PasTahunAjaran.tahun','order'=>'PasTahunAjaran.id DESC'));*/
	    //$this->set(compact('assets', $this->paginate()));
	    $this->set(compact('listMataPelajaran','listGuru','listTahunAjaran'));
	    $this->set('menuTabChild', 'VideoFind');
	}

	function _upload_cover() {
	// init
	$image_ok = TRUE;
	
		// if a file has been added
		if($this->data['File']['image1']['error'] != 4) {
			// try to upload the file
			$result = $this->upload_files('img', $this->data['File']);

			// if there are errors
			if(array_key_exists('errors', $result)) {
				// set image ok to false
				$image_ok = FALSE;
				// set the error for the view
				$this->set('errors', $result['errors']);
			} else {
				// save the url
				$this->data['Video']['cover'] = $result['urls'][0];
			}
		}

	return $image_ok;
	}



	function add($type = null) {
		$status = "false";
		if (!empty($this->data)) {
			
			$this->data['Video']['author'] = 1;
			$this->data['Video']['type'] = 1;
			$typeSubmitted = $this->data['Video']['type'];
			
			
			// check for image
			$image_ok = $this->_upload_cover();

			$this->data['Video']['tahun'] = $this->data['Video']['tahunBerdiri']['year']; 

			$this->Video->create();
			if ($this->Video->save($this->data)) {
				$status = "true";
				$lastID  = $this->Video->getInsertID();
				//$this->set('ebookID', $lastID);
				$this->redirect(array('action'=>'add_responses',$lastID,$status));
				
			} else {
				$status = "false";
				$this->redirect(array('action'=>'add_responses',$lastID,$status));
				/*$this->Session->setFlash('Data tidak berhasil disimpan, silahkan coba lagi','flash_erorr');
				$this->redirect(array('action'=>'index'));*/
			}
		}
		
		$listMataPelajaran = $this->Video->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$listCategory = $this->Video->Category->find('list',array('fields'=>'Category.nama'));
		$typeEbook = $type;
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
		/*$listKelas = $this->Ebook->PasRombel->find('list',array('fields'=>'PasRombel.nama','conditions'=>array('tahun_ajaran_id'=>$this->Session->read('tahunAjaran'))));*/
		$this->set(compact('listMataPelajaran','typeEbook','status','listCategory'));
		$this->layout = 'default_blank';
	}

	function add_responses($id,$status){
		if (!$id && !$status) {
			$this->Session->setFlash(__('Invalid Video.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('video', $this->Video->read(null, $id));
		$this->layout = 'default_blank';
	}

	
	function edit($tipe=null,$id = null) {

		

		//type 1 for ebook 2 for video
		if (!$tipe && !$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Video', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {

			$this->data['Video']['author'] = 1;
			$this->data['Video']['type'] = 1;
			$typeSubmitted = $this->data['Video']['type'];
			
			// check for image
			
			$image_ok = $this->_upload_cover();
			

			$this->data['Video']['tahun'] = $this->data['Video']['tahunBerdiri']['year']; 

			
			if ($this->Video->save($this->data)) {

				$status = "true";
				$flashMessage = "Berhasil Mengedit Data";
				$idtoResponse = $this->data['Video']['id'];
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));

			} else {

				$status = "false";
				$flashMessage = "Tidak Berhasil Mengedit Data";
				$idtoResponse = 0;
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Video->read(null, $id);
		}

		$this->set('video', $this->Video->read(null, $id));
		$listMataPelajaran = $this->Video->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$listCategory = $this->Video->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.type'=>2)));
		$this->set(compact('listCategory'));
		$this->set(compact('listMataPelajaran','tipe'));

		//$this->set(compact('status','flashMessage','idtoResponse'));

		$this->layout = 'default_blank';
	}


	function edit_responses($id,$status,$flashMessage){
		
		if (!$id && !$status) {
			$this->Session->setFlash(__('Invalid Video.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('video', $this->Video->read(null, $id));
		$this->set('status',$status);
		$this->set('flashMessage',$flashMessage);
		$this->set('idtoResponse',$id);

		$this->layout = 'default_blank';
	}

	function delete($id = null) {
		$status = "false";
		$flashMessage = "";
		$idtodelete = "";
		if (!$id) {
			$status = "false";
			$flashMessage = "Tidak Berhasil Menghapus";
			$idtodelete = "";
			//$this->Session->setFlash('Tidak Berhasil Menghapus','flash_erorr');
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Video->del($id)) {
			$status = "true";
			$flashMessage = "Berhasil Menghapus";
			$idtodelete = $id;
			//$this->Session->setFlash('Berhasil Menghapus','flash_success');
			//$this->redirect(array('action'=>'index'));

		}
		$this->set(compact('status','flashMessage','idtodelete'));
		$this->layout = 'default_blank';
		
	}


	function administrator_index() {
		$this->Video->recursive = 0;
		$this->set('Videos', $this->paginate());
	}

	function administrator_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Video.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Video', $this->Video->read(null, $id));
	}

	function administrator_add() {
		if (!empty($this->data)) {
			$this->Video->create();
			if ($this->Video->save($this->data)) {
				$this->Session->setFlash(__('The Video has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Video could not be saved. Please, try again.', true));
			}
		}
	}

	function administrator_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Video', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Video->save($this->data)) {
				$this->Session->setFlash(__('The Video has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Video could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Video->read(null, $id);
		}
	}

	function administrator_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Video', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Video->del($id)) {
			$this->Session->setFlash(__('Video deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	function download($filename) {
		$filename=$this->params['url']['linkurl']; 
		$this->set('filename',$filename );
	}

}
?>