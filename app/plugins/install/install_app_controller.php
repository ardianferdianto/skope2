<?php
class InstallAppController extends AppController {
	var $helpers = array('Javascript');
	public $components = array('RequestHandler', 'Security', 'Cookie', 'Auth');
	//var $components = array('Auth', 'Acl','Cookie','RequestHandler');
    function beforeFilter() {
		//Configure::write('debug', '2');
		//parent::beforeFilter();
        //$this->Auth->allow('*');
    }

}
?>