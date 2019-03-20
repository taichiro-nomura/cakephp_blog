

<h2>
<?php
if (!empty($post['Post']['thumbnail'])) {
  echo $this->Html->image($post['Post']['thumbnail']) ;
}else{
  echo $this->Html->image('https://placehold.jp/150x100.png?text=No Image');
}
echo "<br/>";
?>

<?php 
if (!empty($post['Post']['title'])) {
echo h($post['Post']['title']);
}
 ?>
</h2>

<p>
<?php 
if (!empty($post['Post']['title'])) {
echo h($post['Post']['body']);
}
 ?>
</p>


<h2>Comments</h2>

<ul>
<?php foreach ($post['Comment'] as $comment): ?>
<li id="comment_<?php echo h($comment['id']); ?>">
<?php echo h($comment['body']) ?> by <?php echo h($comment['commenter']); ?> 
<?php
    echo $this->Html->link('削除', array('controller'=>'Comments','action'=>'delete', 'data-comment-id' => $comment['id']));
?>
</li>
<?php endforeach; ?>
</ul>


<h2><Add Comment/h2>

<?php
echo $this->Form->create(null, ['url' => ['controller'=>'Comments','action'=>'add']]);
echo $this->Form->input('Comment.commenter');
echo $this->Form->input('Comment.body',array('rows'=>3));
echo $this->Form->input('Comment.post_id',array('type'=>'hidden','value'=>$post['Post']['id']));
echo $this->Form->end('post comment');
?>