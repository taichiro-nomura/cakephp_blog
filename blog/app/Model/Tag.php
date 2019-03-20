<?php

class Tag extends AppModel{

  public $name = 'Tag';

  public $hasMany = array(
    'PostTag' => array(
      'className' => 'PostTag',
      'foreignKey' => 'tag_id'
    )
  );
}