<?php
class AnswersController extends AppController {

	var $name = 'Answers';
	var $helpers = array('Html', 'Form');
	function beforeFilter() {
	    parent::beforeFilter(); 
	    //$this->Auth->allow('*');
	    
	    $this->set('menuTab', 'kelas');
	    $this->set('menuTabChild', 'kuis');
	}
	function index() {
		$this->Answer->recursive = 0;
		$this->set('answers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Answer.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('answer', $this->Answer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Answer->create();
			if ($this->Answer->save($this->data)) {
				$this->Session->setFlash(__('The Answer has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Answer could not be saved. Please, try again.', true));
			}
		}
		$questions = $this->Answer->Question->find('list');
		$this->set(compact('questions'));
	}

	function edit($id = null,$QuizzId = null,$QuestionId = null) {
	
	
		$this->set('QuizzId',$QuizzId);
		if (!$id && empty($this->data )) {
			$this->Session->setFlash(__('Invalid Answer', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			
			
			if ($this->Answer->save($this->data)) {
				
				$this->Session->setFlash('Jawaban berhasil diupdate','flash_success');
				$idQuiz = $this->data['Answer']['quizz_id'];
				$this->redirect(array('controller'=>'quizzs','action'=>'view',$idQuiz));
			} else {
				$this->Session->setFlash('Jawaban tidak berhasil diupdate, silahkan ulangi','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Answer->read(null, $id);
			$answer = $this->Answer->read(null, $id);
			$this->set(compact('answer'));
		}
		
		
		$questions = $this->Answer->Question->find('list');
		$this->set(compact('questions'));
	}
	
	function edit_single($id = null,$QuestionId = null) {
	
		
		$questId = $this->data['Answer']['question_id'];
		
		if (!$id && empty($this->data )) {
			$this->Session->setFlash(__('Invalid Answer', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			
			
			if ($this->Answer->save($this->data)) {
				
				$this->Session->setFlash('Jawaban berhasil diupdate','flash_success');
				//$idQuiz = $this->data['Answer']['quizz_id'];
				$this->redirect(array('controller'=>'questions','action'=>'view',$questId));
			} else {
				$this->Session->setFlash('Jawaban tidak berhasil diupdate, silahkan ulangi','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Answer->read(null, $id);
			$answer = $this->Answer->read(null, $id);
			$this->set(compact('answer'));
			$this->set('QuestionId',$QuestionId);
			$this->set('id',$id);
		}
		
		
		$questions = $this->Answer->Question->find('list');
		$this->set(compact('questions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Answer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Answer->del($id)) {
			$this->Session->setFlash(__('Answer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>