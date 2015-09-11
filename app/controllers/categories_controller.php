<?php
class CategoriesController extends AppController {

	var $name = 'Categories';
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
		$categories  = $this->Category->find('all');
		$this->set('categories', $categories);
		
		$findcatebook = $this->Category->find('all',array('conditions'=>array('Category.type'=>1)));
		$this->set('findcatebook', $findcatebook);
		$this->layout = 'default_blank';
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Category.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('pelajaran', $this->Category->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			
			$nametoResponse  = $this->data['Category']['name'];
			$this->Category->create();
			if ($this->Category->save($this->data)) {
				
				$idtoResponse  = $this->Category->getInsertID();
				
				$status = "true";
				$flashMessage = "Berhasil Menambahkan Kategori Baru";
				
				$this->redirect(array('action'=>'add_responses',$idtoResponse,$status,$nametoResponse,$flashMessage));
			} else {
				$idtoResponse='';
				$status = "false";
				$flashMessage = "Tidak Berhasil Menambahkan Kategori";
				$this->redirect(array('action'=>'add_responses',$idtoResponse,$status,$nametoResponse,$flashMessage));

			}
		}
	}

	function add_normal(){

		if (!empty($this->data)) {
			
			$nametoResponse  = $this->data['Category']['name'];
			$this->Category->create();
			if ($this->Category->save($this->data)) {
				
				
				$flashMessage = "Berhasil Menambahkan Kategori Baru";
				
				$this->redirect(array('action'=>'index'));
			} else {
				
				$flashMessage = "Tidak Berhasil Menambahkan Kategori";
				

			}
		}
		$this->layout = 'default_blank';
	}


	function add_responses($idtoResponse,$status,$nametoResponse,$flashMessage){
		
		if (!$idtoResponse && !$status) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('nametoResponse',$nametoResponse);
		$this->set('status',$status);
		$this->set('flashMessage',$flashMessage);
		$this->set('idtoResponse',$idtoResponse);

		$this->layout = 'default_blank';
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Category', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash(__('Kategori berhasil diupdate', 'flash_success'));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Mata Categorytidak berhasil diupdate silahkan ulangi','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Category->read(null, $id);
		}
		$this->layout = 'default_blank';
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Category->del($id)) {
			$this->Session->setFlash(__('Category berhasil dihapus', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>