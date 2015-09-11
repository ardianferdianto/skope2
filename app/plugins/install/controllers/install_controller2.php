<?php
/**
 * Install Controller
 *
 * PHP version 5
 *
 * @category Controller
 * @package  Croogo
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class InstallController extends InstallAppController {
/**
 * Controller name
 *
 * @var string
 * @access public
 */
    var $name = 'Install';
/**
 * No models required
 *
 * @var array
 * @access public
 */
    var $uses = null;
/**
 * No components required
 *
 * @var array
 * @access public
 */
    var $components = null;
/**
 * beforeFilter
 *
 * @return void
 */
    function beforeFilter() {
        parent::beforeFilter();
        //$this->Auth->allow('*');
        $this->layout = 'install';
        App::import('Component', 'Session');
        $this->Session = new SessionComponent;
    }
/**
 * Step 0: welcome
 *
 * A simple welcome message for the installer.
 *
 * @return void
 */
    function index() {
        $this->pageTitle = __('Installation: Welcome', true);
    }
/**
 * Step 1: database
 *
 * @return void
 */
    function database() {
        $this->pageTitle = __('Langkah 1: Persiapan Database', true);
        if (!empty($this->data)) {
			$link = mysql_connect($this->data['Install']['host'], $this->data['Install']['login'], $this->data['Install']['password']);
			
			$databases = array();
			$databases['sims'] = "eschools_sims";
			$databases['eschool'] = "eschools_elips";
			$databases['lms'] = "eschools_lms";
			
			if (!$link) {
			    
				$this->Session->setFlash(__('Tidak dapat terhubung ke database, periksa login dan password DB anda.', true));
				
			}else{
				$this->Session->write('Install', array());
            	$db_count =0;
				
				foreach($databases as $database => $db_name){
					$sql = "CREATE DATABASE $db_name";
					if (mysql_query($sql, $link)){
					$db_count ++;
					}
				}
				if ($db_count == 3) {

					// Save the ini file
					
					$this->Session->write('Install.status', 1);
					$this->redirect(array('action' => 'data_sekolah'));
					
	                
				} else {
					$this->Session->setFlash(__('Erorr Database penginstallan sudah ada sebelumnya, silahkan dihapus terlebih dahulu.', true));
				    
				}
            }
        }
    }

	function data_sekolah() {
        $this->pageTitle = __('Langkah 2: Profile Sekolah', true);
        if (!empty($this->data)) {
			
			// open sql file
            App::import('Core', 'File');
            $file = new File(CONFIGS.'sql'.DS.'sims2.sql', true);
            $content = $file->read();

            // write database.php file
            $content = str_replace('{profile_name}', $this->data['Install']['profile_name'], $content);
            $content = str_replace('{profile_alamat}', $this->data['Install']['profile_alamat'], $content);
            $content = str_replace('{profile_telp}', $this->data['Install']['profile_telp'], $content);
            $content = str_replace('{profile_tahunBerdiri}', $this->data['Install']['profile_tahunBerdiri'], $content);
			$content = str_replace('{profile_status}', $this->data['Install']['profile_status'], $content);
			$content = str_replace('{profile_email}', $this->data['Install']['profile_email'], $content);
            if($file->write($content) ) {
                $this->redirect(array('action' => 'data'));
            } else {
                $this->Session->setFlash(__('Errorr Tidak bisa menyimpan profile sekolah, silahkan ulangi!.', true));
            }
        }
    }
/**
 * Step 2: insert required data
 *
 * @return void
 */
    function data() {
        $this->pageTitle = __('Step 3: Run SQL', true);
		
        //App::import('Core', 'Model');
        //$Model = new Model;

        if (isset($this->params['named']['run'])) {
			
            App::import('Core', 'File');
            App::import('Model', 'ConnectionManager');
            $db = ConnectionManager::getDataSource('test');

            if(!$db->isConnected()) {
                $this->Session->setFlash(__('Could not connect to database.', true));
            } else {
                $this->__executeSQLScript($db, CONFIGS.'sql'.DS.'sims2.sql');
				$this->__saveInifile();
				$this->render('successInstall','ajax');
				Configure::write('debug', '0');
                //$this->redirect(array('action' => 'finish'));
            }
        }
    }
	
	
/**
 * Step 3: finish
 *
 * Remind the user to delete 'install' plugin.
 *
 * @return void
 */
    function finish() {
        //$this->pageTitle = __('Installation completed successfully', true);

        if (isset($this->params['named']['delete'])) {
            App::import('Core', 'Folder');
            $this->folder = new Folder;
            if ($this->folder->delete(APP.'plugins'.DS.'install')) {
                $this->Session->setFlash(__('Installataion files deleted successfully.', true));
                $this->redirect('/');
            } else {
                $this->Session->setFlash(__('Could not delete installation files.', true));
            }
        }
		Configure::write('debug', '0');
    }
	function finish2() {
        //$this->render('finish2','ajax');
		Configure::write('debug', '0');
    }
	
	function __saveInifile(){
		//$content = str_replace('{default_database}', $this->data['Install']['database'], $content);
		
		$install = $this->Session->read('Install');
		$install['date'] = date('Y-m-d H:i:s');
        $settings = array();
		foreach ($install as $field => $value) {
			$settings[] = $field .' = "'. $value .'"';
		}
		
		$path = CONFIGS .'install.ini';
		$contents = implode("\n", $settings);
		
		$this->File = new File($path, true, 0777);
		$this->File->open('w', true);
		$this->File->write($contents);
		$this->File->close();
        // write database.php file
        //$content = str_replace('{default_host}', $this->data['Install']['host'], $content);
        //$content = str_replace('{default_login}', $this->data['Install']['login'], $content);
        //$content = str_replace('{default_password}', $this->data['Install']['password'], $content);
        //$content = str_replace('{default_database}', $this->data['Install']['database'], $content);
        if($this->File->write($contents) ) {
            
        } else {
            $this->Session->setFlash(__('Could not write database.php file.', true));
        }
	}
/**
 * Execute SQL file
 *
 * @link http://cakebaker.42dh.com/2007/04/16/writing-an-installer-for-your-cakephp-application/
 * @param object $db Database
 * @param string $fileName sql file
 * @return void
 */
    function __executeSQLScript($db, $fileName) {
        $statements = file_get_contents($fileName);
        $statements = explode(';', $statements);

        foreach ($statements as $statement) {
            if (trim($statement) != '') {
                $db->query($statement);
            }
        }
    }

}
?>