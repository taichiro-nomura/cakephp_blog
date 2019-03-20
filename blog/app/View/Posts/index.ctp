<h2>記事一覧</h2>

<ul>
<?php foreach ($posts as $post): ?>
<li id="post_<?php echo h($post['Post']['id']); ?>">
<?php
if (!empty($post['Post']['thumbnail'])) {
  echo $this->Html->image($post['Post']['thumbnail']) ;
}else{
  echo $this->Html->image('https://placehold.jp/150x100.png?text=No Image');
}
echo "<br/>";
?>
<?php echo $this->Html->link($post['Post']['title'],'/posts/view/'.$post['Post']['id']); ?> 
<?php echo $this->Html->link('編集',array('action'=>'edit',$post['Post']['id'])) ?> 
<?php
  echo $this->Form->postlink('削除',array('action'=>'delete',$post['Post']['id']),
array('confirm'=>'sure?'));
?>
</li>
<?php endforeach; ?>
</ul>



<h2>Add Post</h2>
<?php echo $this->Html->link('Add post',array('controller'=>'posts','action'=>'add'));
?>