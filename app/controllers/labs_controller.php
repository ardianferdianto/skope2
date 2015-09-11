<?php
class EbooksController extends AppController {

	var $name = 'Ebooks';
	//var $helpers = array('Html', 'Form','Video');
	var $helpers = array('Html', 'Form');
	var $components = array('Filter');
	function beforeFilter() {
	    parent::beforeFilter(); 
	    //$this->set('menuTab', 'Ebooks');
	    //$this->set('menuTabChild', 'Ebooks');
	    //$this->Auth->allow('download');
	}
	function index() {
		$this->Ebook->recursive = 2;
		
		
		$this->set('Ebooks', $this->paginate());
		
		
		if($this->Auth->user('group_id')==3){
		$EbooksMurid = $this->Ebook->find('all');
		$this->set(compact('EbooksMurid'));
		
		}
		
		
	}

	function video() {
		$this->Ebook->recursive = 2;
		
		
		$this->set('Ebooks', $this->paginate());
		
		
		if($this->Auth->user('group_id')==3){
		$EbooksMurid = $this->Ebook->find('all');
		$this->set(compact('EbooksMurid'));
		
		}
		
		
	}



	function find_category($id = null ) {
		$this->Ebook->recursive = 2;
		$conditions = array('Ebook.type'=>$id);
		$ebooks = $this->Ebook->find('all',array('conditions'=>$conditions));
		$this->set(compact('ebooks'));
		//6 for BSE
		//7 for BSE Non kemendiknas
		//8 for cahracterbulding
		//9 for lifeskill
		//10 for computer
		//11 for fiksi
		//12 video Dokumenter Sejarah Indonesia
		//13 video IPTEK
		//14 video Life Skill
		//15 video Carachter Building


		$this->render('find_category','ajax');
	}

	function find_category_video($id = null ) {
		$this->Ebook->recursive = 2;
		$conditions = array('Ebook.type'=>$id);
		$ebooks = $this->Ebook->find('all',array('conditions'=>$conditions));
		$this->set(compact('ebooks'));
		//6 for BSE
		//7 for BSE Non kemendiknas
		//8 for cahracterbulding
		//9 for lifeskill
		//10 for computer
		//11 for fiksi
		//12 video Dokumenter Sejarah Indonesia
		//13 video IPTEK
		//14 video Life Skill
		//15 video Carachter Building


		$this->render('find_category_video','ajax');
	}

	function view_thumb($id=null){

		if (!$id) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Ebook', $this->Ebook->read(null, $id));
		$this->render('view_thumb','ajax');
	}
	function view_thumb_video($id=null){

		if (!$id) {
			$this->Session->setFlash(__('Invalid Video.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Ebook', $this->Ebook->read(null, $id));
		$this->render('view_thumb_video','ajax');
	}

	function lifeskill() {
		$this->Ebook->recursive = 2;
		$conditions = array('Ebook.type'=>4);
		$eboks = $this->Ebook->find('all',array('conditions'=>$conditions));
		$this->set(compact('eboks'));
	}

	function carachter() {
		$this->Ebook->recursive = 2;
		$conditions = array('Ebook.type'=>5);
		$eboks = $this->Ebook->find('all',array('conditions'=>$conditions));
		$this->set(compact('eboks'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Ebook', $this->Ebook->read(null, $id));
	}

	function view_video($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Ebook', $this->Ebook->read(null, $id));
	}
	
	function find() {
		$this->Ebook->recursive = 0;
	    $filter = $this->Filter->process($this);
	    $this->set('Ebooks', $this->paginate(null, $filter));
	    $listMataPelajaran = $this->Ebook->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
	    //$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
	    $listGuru = $this->Ebook->User->find('list',array('fields'=>'User.nama','conditions'=>array('User.group_id'=>array(1,2))));
	    
	    /*$listTahunAjaran = $this->Ebook->PasTahunAjaran->find('list',array('fields'=>'PasTahunAjaran.tahun','order'=>'PasTahunAjaran.id DESC'));*/
	    //$this->set(compact('assets', $this->paginate()));
	    $this->set(compact('listMataPelajaran','listGuru','listTahunAjaran'));
	    $this->set('menuTabChild', 'EbookFind');
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
				$this->data['Ebook']['cover'] = $result['urls'][0];
			}
		}

	return $image_ok;
	}



	function add($type = null) {
		if (!empty($this->data)) {
			
			$this->data['Ebook']['author'] = $this->Auth->user('username');
			$typeSubmitted = $this->data['Ebook']['type'];
			
			// check for image
			$image_ok = $this->_upload_cover();

			$this->data['Ebook']['tahun'] = $this->data['Ebook']['tahunBerdiri']['year']; 

			$this->Ebook->create();
			if ($this->Ebook->save($this->data)) {
				

				
				if($typeSubmitted == 12 || $typeSubmitted == 13 ||$typeSubmitted == 14 ||$typeSubmitted == 15){
					$this->Session->setFlash('Video berhasil disimpan','flash_success');
					$this->redirect(array('action'=>'video'));
				}else{
					$this->Session->setFlash('Ebook berhasil disimpan','flash_success');
					$this->redirect(array('action'=>'index'));
				}
			} else {
				$this->Session->setFlash('Data tidak berhasil disimpan, silahkan coba lagi','flash_erorr');
				$this->redirect(array('action'=>'index'));
			}
		}
		
		$listMataPelajaran = $this->Ebook->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$typeEbook = $type;
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
		/*$listKelas = $this->Ebook->PasRombel->find('list',array('fields'=>'PasRombel.nama','conditions'=>array('tahun_ajaran_id'=>$this->Session->read('tahunAjaran'))));*/
		$this->set(compact('listMataPelajaran','typeEbook'));
	}

	function edit($tipe=null,$id = null) {
		//type 1 for ebook 2 for video
		if (!$tipe && !$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Ebook', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {

			$this->data['Ebook']['author'] = $this->Auth->user('username');
			$typeSubmitted = $this->data['Ebook']['type'];
			
			// check for image
			
			$image_ok = $this->_upload_cover();
			

			$this->data['Ebook']['tahun'] = $this->data['Ebook']['tahunBerdiri']['year']; 

			
			if ($this->Ebook->save($this->data)) {
				if($typeSubmitted == 12 || $typeSubmitted == 13 ||$typeSubmitted == 14 ||$typeSubmitted == 15){
					$this->Session->setFlash('Video berhasil disimpan','flash_success');
					$this->redirect(array('action'=>'video'));
				}else{
					$this->Session->setFlash('Ebook berhasil disimpan','flash_success');
					$this->redirect(array('action'=>'index'));
				}
			} else {
				$this->Session->setFlash('Data tidak berhasil disimpan, silahkan coba lagi','flash_erorr');
				$this->redirect(array('action'=>'index'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ebook->read(null, $id);
		}
		$this->set('Ebook', $this->Ebook->read(null, $id));
		$listMataPelajaran = $this->Ebook->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
		/*$listKelas = $this->Ebook->PasRombel->find('list',array('fields'=>'PasRombel.nama','conditions'=>array('tahun_ajaran_id'=>$this->Session->read('tahunAjaran'))));*/
		$this->set(compact('listMataPelajaran','tipe'));
	}

	function delete($id = null) {
		if (!$id) {
			
			$this->Session->setFlash('Tidak Berhasil Menghapus','flash_erorr');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ebook->del($id)) {
			$this->Session->setFlash('Berhasil Menghapus','flash_success');
			$this->redirect(array('action'=>'index'));
		}
	}


	function administrator_index() {
		$this->Ebook->recursive = 0;
		$this->set('Ebooks', $this->paginate());
	}

	function administrator_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Ebook', $this->Ebook->read(null, $id));
	}

	function administrator_add() {
		if (!empty($this->data)) {
			$this->Ebook->create();
			if ($this->Ebook->save($this->data)) {
				$this->Session->setFlash(__('The Ebook has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Ebook could not be saved. Please, try again.', true));
			}
		}
	}

	function administrator_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Ebook', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ebook->save($this->data)) {
				$this->Session->setFlash(__('The Ebook has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Ebook could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ebook->read(null, $id);
		}
	}

	function administrator_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Ebook', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ebook->del($id)) {
			$this->Session->setFlash(__('Ebook deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	function download($filename) {
		$this->set('filename',$filename );
	}

}
?>