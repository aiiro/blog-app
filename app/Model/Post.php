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

	public $actsAs = array('Containable');
	public $recurseve = -1;
	public $belongsTo = array(
		'Author' => array(
			'className' => 'Users.User',
			'foreignKey' => 'author_id'
		)
	);

	public function getPaginateSettings($username) {
		return [
			'limit' => 5,
			'order' => ['Post.id' => 'desc'],
			'contain' => ['Author'],
			'conditions' => ['Author.username' => $username],
		];
	}

}
