<?php
class QuizzsController extends AppController {

	var $name = 'Quizzs';
	var $helpers = array('Html', 'Form','Video','Javascript','Fck');
	
	function beforeFilter() {
	    parent::beforeFilter();
		
	    //$this->Auth->allow('*');
		//$this->set('menuTab', 'kuis');
		//$this->set('menuTabChild', 'kuis');
	}
	
	function index() {
		
		$this->Quizz->recursive = 1;
		

	    $this->paginate = array(
	    'limit' => 25,
		'order' => array(
			'Quizz.created' => 'desc'
			)
		);
		
	    $quizzs = $this->paginate('Quizz');
	    $this->set(compact('quizzs'));
		
		
		
	
		/*$this->Quizz->recursive = 0;
		$quizzs = $this->Quizz->find('all',array('conditions'=>array('tahun_ajaran_id'=> $this->Session->read('tahunAjaran'),'semester'=>$this->Session->read('semester')),'limit'=>'20'));
		
		$this->set(compact('quizzs', $this->paginate()));
		
		$quizzGuru = $this->Quizz->find('all',array('conditions'=>array('author'=>$this->Auth->user('username'),'tahun_ajaran_id'=> $this->Session->read('tahunAjaran'),'semester'=>$this->Session->read('semester')),'limit'=>'20'));
		$this->set(compact('quizzGuru'));*/
		
		/*if($this->Auth->user('group_id')==3){
			
			$quizzMurid = $this->paginate('Quizz');
			 $this->set(compact('quizzMurid'));
			
			
		}*/

		$listMataPelajaran = $this->Quizz->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		$this->set(compact('listMataPelajaran'));

		$this->layout = 'default_iframe';
	}

	function view($id = null) {
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid Quizz.', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$this->Quizz->recursive = 2;
		$quizz = $this->Quizz->read(null, $id);
		$this->set('quizz',$quizz);
		
		/*if( ($this->Auth->user('group_id')!= 1) || ($quizz['Quizz']['author'] != $this->Auth->user('username'))){
		$this->Session->setFlash('Maaf anda tidak mempunyai hak untuk mengakses halamn latihan orang lain','flash_erorr');
		$this->redirect(array('action'=>'index'));
		}*/
	}

	function view_single($id = null) {
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid Quizz.', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$this->Quizz->recursive = 2;
		$quizz = $this->Quizz->read(null, $id);
		$this->set('quizz',$quizz);
		$this->layout = 'default_iframe';
	}

	function kelas($idKelas = null) {
		if(!$idKelas){
			$this->Session->setFlash(__('Tidak ada Kelas.', true));
			$this->redirect(array('action'=>'home'));
		}else{
			$this->Quizz->recursive = 0;
			$listMataPelajaran = $this->Quizz->Pelajaran->find('all');
			//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
			$this->set(compact('listMataPelajaran','idKelas'));
		}
	}

	function pelajaran($idKelas = null,$idPelajaran = null) {
		if((!$idKelas) ||(!$idPelajaran)){
			$this->Session->setFlash(__('Tidak ada Kelas.', true));
			$this->redirect(array('action'=>'home'));
		}else{
			$this->Quizz->recursive = 0;
			$conditions1 = array('Quizz.kelas'=>$idKelas,'Quizz.pelajaran_id'=>$idPelajaran);
		    $this->paginate = array(
		    'conditions' => $conditions1,
		    'limit' => 25,
			'order' => array(
				'Quizz.created' => 'desc'
				)
			);
			
		    $quizzs = $this->paginate('Quizz');
		    $this->set(compact('quizzs'));
			
		}
	}

	function add() {
		if (!empty($this->data)) {
			$matpelId =  $this->data['Quizz']['pelajaran_id'];
			$kelas =   $this->data['Quizz']['kelas'];
			$this->data['Quizz']['user_id'] = $this->Auth->user('id');
			//$this->data['Quizz']['tahun_ajaran_id'] = $this->Session->read('tahunAjaran');
			//$this->data['Quizz']['semester'] = $this->Session->read('semester');
			$this->Quizz->create();
			if ($this->Quizz->save($this->data)) {
				
				//$this->Session->setFlash('Quiz berhasil disimpan <br/> Selanjutnya silahkan anda isikan pertanyaan untuk kuis ini, dan centang jawaban yang benar','flash_success');
				//$this->Session->setFlash('','flash_attention');
				$idQuis = $this->Quizz->getLastInsertId();
				
				$this->redirect(array('controller'=>'questions','action'=>'add'.'/'.$idQuis.'/0/'.$matpelId.'/'.$kelas));
			} else {
				//$this->Session->setFlash('Quiz tidak berhasil disimpan','flash_erorr');
			}
		}
		
		
		$this->set(compact('questions'));
		
		$listMataPelajaran = $this->Quizz->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		
		$this->set(compact('listMataPelajaran'));
		$this->layout = 'default_iframe';
	}

	function add_single() {
		if (!empty($this->data)) {
			$matpelId =  $this->data['Quizz']['pelajaran_id'];
			$kelas =   $this->data['Quizz']['kelas'];
			$this->data['Quizz']['user_id'] = '1';
			//$this->data['Quizz']['tahun_ajaran_id'] = $this->Session->read('tahunAjaran');
			//$this->data['Quizz']['semester'] = $this->Session->read('semester');
			$this->Quizz->create();
			if ($this->Quizz->save($this->data)) {
				
				//$this->Session->setFlash('Tryout berhasil dibuat','flash_success');
				//$this->Session->setFlash('','flash_attention');
				//$idQuis = $this->Quizz->getLastInsertId();
				
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('Quiz tidak berhasil disimpan','flash_erorr');
			}
		}
		
		
		$this->set(compact('questions'));
		
		$listMataPelajaran = $this->Quizz->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		
		$this->set(compact('listMataPelajaran'));
		
	}
	
	function take_quiz($id = null){
		
		$this->set('id',$id);
		//set condition has take quiz
		$hastake = $this->Quizz->QuizzPoint->find('first',array('conditions'=>array('quizz_id'=>$id,'siswa'=>$this->Auth->user('id')),array('order' => array('QuizzPoint.modified DESC'))));
		
		
		$this->set(compact('hastake','remedId'));
		$this->set('quizz', $this->Quizz->read(null, $id));
		//$this->set('quizzs', $this->paginate());
		$this->set('MataPelajaran', $this->Quizz->Pelajaran->read(null, $id));
		
	}
	
	function do_quizz($id = null) {
		$this->set('id',$id);
        $this->Quizz->recursive = 2;
        $this->set('quizz', $this->Quizz->read(null, $id));
        
        $hastake = $this->Quizz->QuizzPoint->find('first',array('conditions'=>array('quizz_id'=>$id,'siswa'=>$this->Auth->user('id'))));
        
        if (!empty($hastake)){
        	$remedId = $hastake['QuizzPoint']['id'];
        }
        
        if($remedId != null){
        	$this->set('remedId',$remedId);	
        }else{
        	$this->set('remedId',0);	
        }
        
        $this->layout='quizz';
		
    }
    
    function results(){
    	$this->Quizz->recursive = 2;
	   	//storing post data
	   	$banyakSoal = $this->data['Quizz']['banyak_soal'];
		$dataJawaban = $this->data['jawaban'];
	
		//giving default value
		$countTrue = 0;
		$scoreNilai = 0;
		$pointNew = 0;
		$score = 0;
		
		//loop post data
		
		
		$listPoint = array();
		
		foreach ($dataJawaban as $n){
			$answer = $this->Quizz->Question->Answer->read(null, $n);
			
			
			$idQuestion = $answer['Answer']['question_id'];
			$question = $this->Quizz->Question->read(null, $idQuestion);
			$pointNew = $question['Question']['point_nilai'];
			array_push($listPoint, $pointNew);
			
			//conditional if true count true ++
			if($answer['Answer']['true'] == 1){
				//$pointNew ++;
			 	$countTrue ++;
			}
		
		}
		
		foreach ($listPoint as $n =>$k){
			$score += $k;
		}
	
		
			//}
		$this->set(compact('scoreNilai','score','countTrue','banyakSoal','pointNew','listPoint'));
		
	
		//define condition remedial or not
		if($this->data['QuizzPoint']['id'] != null){
		
			//update record
			$this->Quizz->QuizzPoint->set(array(
				'siswa' => $this->Auth->user('id'),
				'points' => $score,
				'quizz_id'=>$this->data['QuizzPoint']['quizz_id'],
				'id'=>$this->data['QuizzPoint']['id']
			));
			$this->Quizz->QuizzPoint->save();
		
	
		}else{
	
			//check first and submit if they has answer questions at least one, then savequiz new result
			if($dataJawaban != null){
				$this->Quizz->QuizzPoint->set(array(
					'siswa' => $this->Auth->user('id'),
					'points' => $score,
					'quizz_id'=>$this->data['QuizzPoint']['quizz_id']
				));
				$this->Quizz->QuizzPoint->save();
			
			
			}
		}
		
		
		$uraianSoal = $this->data['UraianAnswer'];
		
		
		
		//if remedial
		
			
		foreach ($uraianSoal as $k =>$v){
			//check first is there any data before ?
			$conditions = array(
			'UraianAnswer.user_id'=>$this->Auth->user('id'),
			'UraianAnswer.quizz_id'=>$this->data['UraianAnswer'][$k]['quizz_id'],
			'UraianAnswer.question_id'=>$this->data['UraianAnswer'][$k]['question_id'],
			);
			$hasData = $this->Quizz->UraianAnswer->find('first',array('conditions'=>$conditions));
		
			if (!empty($hasData)){
				//store id answeuraian
				$idAnswerUraian = $hasData['UraianAnswer']['id'];
				
				$this->Quizz->UraianAnswer->set(array(
					'user_id' => $this->Auth->user('id'),
					'quizz_id' => $this->data['UraianAnswer'][$k]['quizz_id'],
					'question_id'=>$this->data['UraianAnswer'][$k]['question_id'],
					'jawaban_uraian'=>$this->data['UraianAnswer'][$k]['jawaban_uraian'],
					'id'=>$idAnswerUraian
				));
		    	$this->Quizz->UraianAnswer->saveAll();
		
			}else{
				$this->Quizz->UraianAnswer->set(array(
					'user_id' => $this->Auth->user('id'),
					'quizz_id' => $this->data['UraianAnswer'][$k]['quizz_id'],
					'question_id'=>$this->data['UraianAnswer'][$k]['question_id'],
					'jawaban_uraian'=>$this->data['UraianAnswer'][$k]['jawaban_uraian']
				));
		    	$this->Quizz->UraianAnswer->saveAll();
			}
		
			
		}
		
		
	
	
    	
    }

	function edit($id = null) {
		$this->set('id',$id);	
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Quizz', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			$this->data['Quizz']['author'] = $this->Auth->user('username');
			$this->data['Quizz']['tahun_ajaran_id'] = $this->Session->read('tahunAjaran');
			$this->data['Quizz']['semester'] = $this->Session->read('semester');
			if ($this->Quizz->save($this->data)) {
				$this->Session->setFlash('Quiz berhasil diupdate!','flash_success');
				$this->redirect(array('action'=>'view',$id));
			} else {
				$this->Session->setFlash('Quiz tidak berhasil disimpan,silahkan ulangi!','flash_erorr');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Quizz->read(null, $id);
		}
		
		
		$listMataPelajaran = $this->Quizz->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';

		$this->set(compact('listMataPelajaran'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash('Quiz tidak ditemukan','flash_erorr');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Quizz->delete($id,$cascade = true)) {
			$this->Session->setFlash('Quiz berhasil dihapus ','flash_success');
			
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function view_all($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Latihan tidak ditemukan.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Quizz->recursive = 2;
			
		$this->set('quizz', $this->Quizz->read(null, $id));
		$quizSerahList = $this->Quizz->QuizzPoint->find('all',array('conditions'=>array('QuizzPoint.quizz_id'=>$id)));
		
		//$namaSiswa = $this->Quizz->SiswaPas->find('all',array('conditions'=>array('SiswaPas.NIS'=>$this->Auth->user('username'))));
			//$tugasSerahList = $this->Tuga->FileTuga->find('all',array('conditions'=>array('FileTuga.tugas_id'=>$id)));
		
		$this->set(compact('quizSerahList','namaSiswa'));
	}

	function update_quizz_select(){
		if(!empty($this->data['Quizz']['id'])) {
			$quizz_id = (int)$this->data['Quizz']['id'];
			$conditions = array('Quizz.id' => $quizz_id);
			$options = $this->Quizz->read(null, $quizz_id);
			$this->set('options',$options);
			$this->render('update_quizz_select','ajax');
		}
	}

	function view_pdf($id = null)
    { 
    	//Configure::write('debug',0); // Otherwise we cannot use this method while developing

    	if (!$id) {
			$this->Session->setFlash(__('Invalid Quizz.', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$this->Quizz->recursive = 2;
		$quizz = $this->Quizz->read(null, $id);
		$this->set('quizz',$quizz);


        $this->layout = 'pdf'; //this will use the pdf.ctp layout
		$this->render();
    }

    function present_single($id = null) {
    	if (!$id) {
			$this->Session->setFlash(__('Invalid Quizz.', true));
			$this->redirect(array('action'=>'index'));
		}
		
		$this->Quizz->recursive = 2;
		$quizz = $this->Quizz->read(null, $id);
		$this->set('quizz',$quizz);
    	$this->layout = 'default_bookblock'; //this will use the pdf.ctp layout
    }

}
?>