<?php
class Ebook extends AppModel {

	var $name = 'Ebook';
	/*var $actsAs = array('MeioUpload' => array(
	       'file' => array(
	           'dir' => 'files/ebooks',
	           'create_directory' => false,
	           
	           
	       )
	     )
	 );*/
	var $belongsTo = array(
		'Pelajaran' => array(
	      'className' => 'Pelajaran',
	      'foreignKey'=> 'matapelajaran'
	   	),
		/*'User' => array(
		 'className' => 'User',
		 'foreignKey'=> 'author'
		),*/
		'Category' => array(
		 'className' => 'Category',
		 'foreignKey'=> 'category_id'
		),
		
	);

}
?>