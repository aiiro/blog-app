<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Post extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'タイトルは必須入力です',
			),
			'maxLength' =>  array(
				'rule' => ['maxLength', '255'],
				'message' => 'タイトルは255文字以内で入力してください',
			),
		),
	);

}
