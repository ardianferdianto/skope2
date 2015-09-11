<?php
/** 
 * Cupcake - Setting Model
 *
 * @author 		Miles Johnson - www.milesj.me
 * @copyright	Copyright 2006-2009, Miles Johnson, Inc.
 * @license 	http://www.opensource.org/licenses/mit-license.php - Licensed under The MIT License
 * @link		www.milesj.me/resources/script/forum-plugin
 */
 
class Data extends InstallAppModel {

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
			'minLength' => array(
				'rule' => array('minLength', 6),
				'message' => 'Nama Sekolah terlalu singkat'
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Data tidak boleh kosong'
			)
		),
		'profile_email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Email tidak valid'
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Data tidak boleh kosong'
			)
		),
		'profile_status' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Data tidak boleh kosong'
			)
		),
		'profile_alamat' => array(
			'minLength' => array(
				'rule' => array('minLength', 10),
				'message' => 'Alamat terlalu singkat'
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Data tidak boleh kosong'
			)
		),
		'profile_telp' => array(
			'numeric' => array(
				'rule' => 'numeric',
				'message' => 'Masukkan angka yang benar, contoh : 0218080889'
			),
			'minLength' => array(
				'rule' => array('minLength', 5),
				'message' => 'Masukkan angka yang benar, contoh : 0218080889'
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Data tidak boleh kosong'
			)
		),
		'profile_tahunBerdiri' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Data tidak boleh kosong'
			)
		),
	);
	
	
	
}
