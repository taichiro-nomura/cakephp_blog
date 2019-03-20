<h2>Add post</h2>

<?php
echo $this->Form->create('Post',array('url'=>'add'));
# echo $this->Form->input('id',array('type'=>'hidden'));
echo $this->Form->input('title');
echo $this->Form->input('thumbnail');
echo $this->Form->input('body',array('rows'=>3));
# echo $this->Form->input('Tag.id',array('type'=>'hidden'));
echo $this->Form->input('Tag.name', array(
  'label' => 'Tag',
  'rows'=>3));
echo $this->Form->end('Save Post');