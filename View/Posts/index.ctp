<h1>Blog posts</h1>

<table>

    <?php foreach ($posts as $post): ?>
		<tr>
			<td>
				<?php echo "<b>".$post['Post']['title'] ."</b> (".$post['Post']['created'].")"; ?>
				<br/>
				<?php echo $post['Post']['body']; ?>
			</td>
		</tr>
		
		<tr>
			<td>
				<?php foreach ($post['Comment'] as $comment): ?>
				<?php if ($comment['status'] == 'enabled') {?>
					<?php echo $comment['comment']; ?><br/>
					Posted By: <?php echo $comment['name']; ?> At <?php echo $comment['created']; ?><br/><br/>
					<?php } ?>
				<?php endforeach; ?>
			</td>
		</tr>
			<tr><td><?php echo $this->html->link('Eisagogh Sxoliou', array('controller'=>'comments', 'action'=>'add', $post['Post']['id']));
			

			?>
			
			</td></tr>

			<tr><td><hr></td></tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>