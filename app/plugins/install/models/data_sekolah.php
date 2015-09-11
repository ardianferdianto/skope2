<?php
/** 
 * Cupcake - Setting Model
 *
 * @author 		Miles Johnson - www.milesj.me
 * @copyright	Copyright 2006-2009, Miles Johnson, Inc.
 * @license 	http://www.opensource.org/licenses/mit-license.php - Licensed under The MIT License
 * @link		www.milesj.me/resources/script/forum-plugin
 */
 
class Setting extends InstallAppModel {

	/**
	 * No table.
	 *
	 * @access public
	 * @var boolean
	 */
	public $useTable = false;
	
	/**
	 * Validate.
	 *
	 * @access public
	 * @var array
	 */
	public $validate = array(
		'profile_name' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'This setting is required'
			)
		),
		'profile_email' => array(
			'email' => array(
				'rule' => array('email', true),
				'message' => 'Please supply a valid email address'
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'This setting is required'
			)
		),
		'profile_status' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'This setting is required'
			)
		),
		/*'licenseKey' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'This setting is required'
			)
		),*/
		'profile_alamat' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'This setting is required'
			)
		),
		'profile_telp' => array(
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Please supply a number'
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'This setting is required'
			)
		),
		'profile_tahunBerdiri' => array(
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Please supply a number'
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'This setting is required'
			)
		),
	);
	
	
	
}
