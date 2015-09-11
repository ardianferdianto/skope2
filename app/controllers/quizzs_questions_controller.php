<?php
class QuizzsQuestionsController extends AppController {

	var $name = 'QuizzsQuestions';
	var $helpers = array('Html', 'Form');

	function beforeFilter() {
	    parent::beforeFilter();
	   // $this->Auth->allow('*');

	    //$this->set('menuTab', 'kelas');
	    //$this->set('menuTabChild', 'kuis');
	}

	function index() {
		$this->QuizzsQuestion->recursive = 0;
		$this->set('quizzsQuestions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid QuizzsQuestion.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('quizzsQuestion', $this->QuizzsQuestion->read(null, $id));
	}

	function add() {


		if (!empty($this->data)) {
			//$questionId = $this->data['Question']['quizzId'];
			//$fromId = $this->data['Question']['fromId'];
			//$matPel = $this->data['Question']['matPel'];
			//$kelasId = $this->data['Question']['kelasId'];
			$questionId = $this->data['QuizzsQuestion']['question_id'];
			$quizzId = $this->data['QuizzsQuestion']['quizz_id'];
			$questionTipe = $this->data['QuizzsQuestion']['question_tipe'];
			$questionLevel = $this->data['QuizzsQuestion']['question_level'];

			//find first
			$conditions = array('QuizzsQuestion.quizz_id'=>$quizzId,'QuizzsQuestion.question_id'=>$questionId);
			$sudahadakah = $this->QuizzsQuestion->find('all',array('conditions'=>$conditions));

			//find time
			$this->QuizzsQuestion->bindModel(
		    	array('belongsTo' =>
			    	array(
					'Profile' => array(
			             	'className' => 'Profile',
			             	'foreignKey'=> ''
			         	)
			        )
			    )
			);

			$profils = $this->QuizzsQuestion->Profile->read(null, 1);

			$configGandaMudah = $profils['Profile']['time_ganda_mudah'];
			$configGandaSedang = $profils['Profile']['time_ganda_sedang'];
			$configGandaSulit = $profils['Profile']['time_ganda_sulit'];
			$configEssayMudah = $profils['Profile']['time_essay_mudah'];
			$configEssaySedang = $profils['Profile']['time_essay_sedang'];
			$configEssaySulit = $profils['Profile']['time_essay_sulit'];

			if(($questionTipe == 1)&&($questionLevel == 1)){
				$timeQuizz = $profils['Profile']['time_ganda_mudah'];
			}elseif (($questionTipe == 1)&&($questionLevel == 2)) {
				$timeQuizz = $profils['Profile']['time_ganda_sedang'];
			}elseif (($questionTipe == 1)&&($questionLevel == 3)) {
				$timeQuizz = $profils['Profile']['time_ganda_sulit'];
			}elseif (($questionTipe == 2)&&($questionLevel == 1)) {
				$timeQuizz = $profils['Profile']['time_essay_mudah'];
			}elseif (($questionTipe == 2)&&($questionLevel == 2)) {
				$timeQuizz = $profils['Profile']['time_essay_sedang'];
			}elseif (($questionTipe == 2)&&($questionLevel == 3)) {
				$timeQuizz = $profils['Profile']['time_essay_sulit'];
			}



			if($sudahadakah==null){
				$this->QuizzsQuestion->create();
				$quizzSelected = $this->QuizzsQuestion->Quizz->read(null,$quizzId);
				$current=$quizzSelected['Quizz']['time']+$timeQuizz;
				$this->QuizzsQuestion->Quizz->saveField('time',$current);
				if ($this->QuizzsQuestion->saveAll($this->data)) {
					$status =1;

					//$this->Session->setFlash('Pertanyaan berhasil ditambahkan ke kuis','flash_success');


					//if($fromId == 1){
					//$this->redirect(array('controller'=>'questions','action'=>'add_success'.'/'.$questionId.'/'.$matPel.'/'.$kelasId));


					//}else{
					//$this->redirect(array('controller'=>'quizzs','action'=>'view'.'/'.$questionId));

					//}


				} else {
					$status = 2;
				}
			}else{
				$status = 3;
			}
			
			$this->set(compact('status'));
			$this->layout='default_blank';
			
		}
		
		//$this->render('add','ajax');
		//$quizzs = $this->QuizzsQuestion->Quizz->find('list');
		//$questions = $this->QuizzsQuestion->Question->find('list');

	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid QuizzsQuestion', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->QuizzsQuestion->save($this->data)) {
				$this->Session->setFlash(__('The QuizzsQuestion has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The QuizzsQuestion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->QuizzsQuestion->read(null, $id);
		}
		$quizzs = $this->QuizzsQuestion->Quizz->find('list');
		$questions = $this->QuizzsQuestion->Question->find('list');
		$this->set(compact('quizzs','questions'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for QuizzsQuestion', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->QuizzsQuestion->del($id)) {
			$this->Session->setFlash(__('QuizzsQuestion deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

	function deleteEntries($questionId = null, $QuizzId = null){
		$this->set('questionId',$questionId);
		$this->set('QuizzId',$QuizzId);
		if (!$questionId || !$QuizzId) {
			$this->Session->setFlash(__('Erorr data tidak ditemukan', true));
			$this->redirect(array('controller'=>'quizzs','action'=>'index'));
		}
		$conditions = array('QuizzsQuestion.quizz_id' =>$QuizzId,'QuizzsQuestion.question_id' =>$questionId);
		$findId = $this->QuizzsQuestion->find('first',array('conditions'=>$conditions));
		$id = $findId['QuizzsQuestion']['id'];



		if ($this->QuizzsQuestion->del($id)) {
			$this->Session->setFlash('Pertanyaan berhasil dibuang dalam ke kuis','flash_success');
			$this->redirect(array('controller'=>'quizzs','action'=>'view/'.$QuizzId));
		}
	}

}
?>