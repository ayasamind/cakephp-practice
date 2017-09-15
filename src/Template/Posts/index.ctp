<?php
$this->assign('title', 'Blog Posts');
?>

<?= $this->Flash->render(); ?>
<h1>Blog Posts
<?= $this->Html->link('Add New', ['action'=>'add'], ['class'=>['fs12', 'pull-right']]); ?>
</h1>


<ul>
	<?php foreach ($posts as $post){ ; ?>
		<li><?= $this->Html->link($post->title, ['controller'=>'Posts', 'action'=>'view', $post->id]);//h($post->title); ?>
            <?= $this->Html->link('[edit]', ['action'=>'edit', $post->id], ['class'=>'fs12']); ?>
<?= $this->Form->postLink(
           '[x]',
           ['action'=>'delete', $post->id],
           ['confirm'=>'Are you sure?', 'class'=>'fs12']
           );
?>
<!--<a href="<?= $this->Url->build(['action'=>'view', $post->id]); ?>">
        <a href="<?=$this->Url->build('[edit]', ['action'=>'edit', $post->id]); ?>">
<?= h($post->title); ?>-->



        </li>
    <?php }; ?>

</ul>
