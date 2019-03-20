<?php

Class PostTag extends AppModel{

  public $name = 'PostTag';
  public $belongsTo = array(
    'Post' => array(
      'className' => 'Post',
      'foreignKey' => 'post_id'
    ),
    'Tag' => array(
    )
  );
}
