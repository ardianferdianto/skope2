<?php
class QuizzesController extends AppController {

	var $name = 'Quizzes';
	var $helpers = array('Html', 'Form');
	function beforeFilter() {
	    parent::beforeFilter(); 
	}
	function index() {
		$this->Quiz->recursive = 0;
		$this->set('quizzes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Quiz.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('quiz', $this->Quiz->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Quiz->create();
			if ($this->Quiz->save($this->data)) {
				$idQuis = $this->data['Quiz']['id'];
				$this->Session->setFlash('Quiz berhasil disimpan','flash_success');
				$this->redirect(array('controller'=>'questions','action'=>'add'.$idQuis));
			} else {
				$this->Session->setFlash('Quiz tidak berhasil disimpan','flash_erorr');
			}
		}
		$this->data['Quiz']['author'] = $this->Auth->user('id');
		$questions = $this->Quiz->Question->find('list');
		$this->set(compact('questions'));
		
		$listMataPelajaran = $this->Quiz->PasMataPelajaran->find('list',array('fields'=>'PasMataPelajaran.NM_MATA_PELAJARAN_DIAJARKAN'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
		$listKelas = $this->Quiz->PasRombel->find('list',array('fields'=>'PasRombel.KETERANGAN'));
		$this->set(compact('listMataPelajaran','listKelas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Quiz', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Quiz->save($this->data)) {
				$this->Session->setFlash(__('The Quiz has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Quiz could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Quiz->read(null, $id);
		}
		$questions = $this->Quiz->Question->find('list');
		$this->set(compact('questions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Quiz', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Quiz->del($id)) {
			$this->Session->setFlash(__('Quiz deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>