<?php
class UraianAnswersController extends AppController {

	var $name = 'UraianAnswers';
	var $helpers = array('Html', 'Form','Video');
	
	function beforeFilter() {
	    parent::beforeFilter();
		
	    //$this->Auth->allow('*');
		$this->set('menuTab', 'kuis');
		$this->set('menuTabChild', 'kuis');
	}
	
	function index() {
		$this->UraianAnswer->recursive = 0;
		$this->set('uraianAnswers', $this->paginate());
	}

	function view($siswaId = null,$questionId = null) {
		$this->set('siswaId',$siswaId);
		$this->set('questionId',$questionId);
		$this->UraianAnswer->recursive = 2;
		if (!$siswaId || !$questionId) {
			$this->Session->setFlash(__('Invalid data.', true));
			$this->redirect(array('action'=>'index'));
		}
		$conditions = array('UraianAnswer.user_id'=>$siswaId,'UraianAnswer.quizz_id'=>$questionId);
		$uraianAnswers = $this->UraianAnswer->find('all',array('conditions'=>$conditions));
		$this->set(compact('uraianAnswers'));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UraianAnswer->create();
			if ($this->UraianAnswer->save($this->data)) {
				$this->Session->setFlash(__('The UraianAnswer has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The UraianAnswer could not be saved. Please, try again.', true));
			}
		}
		$users = $this->UraianAnswer->User->find('list');
		$questions = $this->UraianAnswer->Question->find('list');
		$quizzs = $this->UraianAnswer->Quizz->find('list');
		$this->set(compact('users', 'questions', 'quizzs'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid UraianAnswer', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->UraianAnswer->save($this->data)) {
				$this->Session->setFlash(__('The UraianAnswer has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The UraianAnswer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UraianAnswer->read(null, $id);
		}
		$users = $this->UraianAnswer->User->find('list');
		$questions = $this->UraianAnswer->Question->find('list');
		$quizzs = $this->UraianAnswer->Quizz->find('list');
		$this->set(compact('users','questions','quizzs'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for UraianAnswer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UraianAnswer->del($id)) {
			$this->Session->setFlash(__('UraianAnswer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>