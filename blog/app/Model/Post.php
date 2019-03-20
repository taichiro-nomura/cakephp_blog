<?php

class Post extends AppModel{

  public $name = 'Post';

	public $hasMany = array(
    'Comment',
    'PostTag' => array(
      'className' => 'PostTag',
      'foreignKey' => 'post_id'
    )
  );

  	public $validate = array(
  		'title'=>array(
  			'rule'=>'notBlank',
  			'message'=>'タイトルを入力してください。'
  		),
      'thumbnail'=>array(
        'rule'=>'url',
        'message'=>'画像アドレス以外のものは入力しないでください。',
        'allowEmpty'=>true
      ),
  	);
}