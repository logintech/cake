<h3>Eisagogh sxoliou</h3>
<?php
echo $this->Form->create('Comment', array('action'=>'add'));
echo $this->Form->input('name');
echo $this->Form->input('comment');
//$this->request->data['Comment']['post_id'] = $post_id;
//echo $this->Form->input('post_id', array('type' => 'hidden', 'value' => $post_id));
echo $this->Form->end('Eisagogh sxoliou');

?>