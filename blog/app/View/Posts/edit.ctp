<h2>Edit Post</h2>

<?php 
echo $this->Form->create('Post',array('url'=>'edit'));
echo $this->Form->hidden('id');
echo $this->Form->input('title');
echo $this->Form->input('thumbnail');
echo $this->Form->input('body',array('rows'=>3));
echo $this->Form->end('Save!');
?>