<h3>Disabled Comments</h3><br/>

	<table>
		<tr>
			<th>Post Code</th>
			<th>Comment</th>
			<th>By</th>
			<th>Created</th>
		</tr>
			<?php foreach ($comments as $comment): ?>
		<tr>
			<?php if ($comment['Comment']['status'] == 'disabled') {?>
				<td><?php echo $comment['Comment']['post_id']; ?></td>
				<td><?php echo $this->Html->link($comment['Comment']['comment'], array('action' => 'edit', $comment['Comment']['id'])); ?></td>
				<td><?php echo $comment['Comment']['name']; ?></td>
				<td><?php echo $comment['Comment']['created']; ?></td>
			<?php } ?>
		<tr>
			<?php endforeach; ?>
	</table>





