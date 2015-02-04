<h3> Edit Post </h3>

<?php
echo $this->Form->create('Comment', array('action'=>'edit'));
echo $this->Form->input('comment');
echo $this->Form->input('id', array('type'=>'hidden'));
echo $this->Form->end('Edit');

?>