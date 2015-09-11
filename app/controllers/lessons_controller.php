<?php
class LessonsController extends AppController {

	var $name = 'Lessons';
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
		$this->Lesson->recursive = 0;
		$this->set('categories', $this->paginate());
	}

	function view($id = null) {
		
		$this->Lesson->recursive = 1;
		if (!$id) {
			$this->Session->setFlash(__('Invalid Lesson.', true));
			$this->redirect(array('action'=>'index'));
		}
		
		//count page
		$this->set('lesson', $this->Lesson->read(null, $id));
		$conditions = array('conditions'=>array('Halaman.lesson_id'=>$id),'order' => array('Halaman.order' => 'ASC'));

		$countpage = $this->Lesson->Halaman->find('count');
		$pagesbook = $this->Lesson->Halaman->find('all', $conditions);
		
		$this->set('lessonEdit', $id);
		$this->set('pagesbook',$pagesbook);
		$this->set('countpage',$countpage);
		$this->layout ='default_wow';
	}

	function add() {
		$this->Lesson->recursive = 1;
		if (!empty($this->data)) {
			
			$nametoResponse  = $this->data['Lesson']['title'];
			$this->Lesson->create();
			if ($this->Lesson->save($this->data)) {
				
				
				$idtoResponse  = $this->Lesson->getInsertID();

				$newdirectory = WWW_ROOT.'files'.DS.'lessons'.DS.$idtoResponse;
				mkdir($newdirectory);

				$this->_cpyrec(WWW_ROOT.'files'.DS.'lessons'.DS.'default',$newdirectory);
				
				$status = "true";
				$flashMessage = "Berhasil Menambahkan Bahan Ajar Baru, sekarang silahkan susun bahan ajar anda";
				
				$this->redirect(array('action'=>'add_responses',$idtoResponse,$status,$flashMessage));
			} else {
				$idtoResponse='';
				$status = "false";
				$flashMessage = "Tidak Berhasil Menambahkan Bahan Ajar";
				$this->redirect(array('action'=>'add_responses',$idtoResponse,$status,$flashMessage));

			}
		}


		$arrayKelas = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6');
		$listPelajaran2 = $this->Lesson->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$this->set(compact('listPelajaran2','arrayKelas'));
		$this->layout = 'default_blank';


	}


	function add_responses($idtoResponse,$status,$flashMessage){
		
		if (!$idtoResponse && !$status) {
			$this->Session->setFlash(__('Invalid Lesson.', true));
			$this->redirect(array('action'=>'index'));
		}
		//$this->set('nametoResponse',$nametoResponse);

		$this->set('lesson', $this->Lesson->read(null, $idtoResponse));
		$this->set('status',$status);
		$this->set('flashMessage',$flashMessage);
		$this->set('idtoResponse',$idtoResponse);
		$tipe = 'add';
		$this->set('tipe',$tipe);

		$this->layout = 'default_blank';
	}

	

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Lesson', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Lesson->save($this->data)) {

				$idtoResponse  = $id;
				$status = "true";
				$flashMessage = "Berhasil Mengupdate Bahan Ajar , sekarang silahkan susun bahan ajar anda";
				
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));
			} else {
				$idtoResponse='';
				$status = "false";
				$flashMessage = "Tidak Berhasil Mengupdate Bahan Ajar";
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));

			}
		}
		if (empty($this->data)) {
			$this->data = $this->Lesson->read(null, $id);
		}
		$this->set('lesson', $this->Lesson->read(null, $id));
		$arrayKelas = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6');
		$listPelajaran2 = $this->Lesson->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$this->set(compact('listPelajaran2','arrayKelas'));
		$this->layout = 'default_blank';

	}

	function edit_responses($idtoResponse,$status,$flashMessage){
		$this->Lesson->recursive = 2;
		if (!$idtoResponse && !$status) {
			$this->Session->setFlash(__('Invalid Lesson.', true));
			$this->redirect(array('action'=>'index'));
		}
		$conditions = array('conditions'=>array('Halaman.lesson_id'=>$idtoResponse),'order' => array('Halaman.order' => 'ASC'));
		$halaman = $this->Lesson->Halaman->find('all',$conditions);

		//$this->set('nametoResponse',$nametoResponse);
		$tipe = 'edit';
		$this->set('tipe',$tipe);
		$this->set('halaman',$halaman);

		$this->set('lesson', $this->Lesson->read(null, $idtoResponse));
		$this->set('status',$status);
		$this->set('flashMessage',$flashMessage);
		$this->set('idtoResponse',$idtoResponse);


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
		if ($this->Lesson->del($id)) {

			$directory = WWW_ROOT.'files'.DS.'lessons'.DS.$id;
			$this->_delete_recursive($directory);

			$status = "true";
			$flashMessage = "Berhasil Menghapus";
			$idtodelete = $id;

		}
		$this->set(compact('status','flashMessage','idtodelete'));
		$this->layout = 'default_blank';
		
	}


	




}
?>