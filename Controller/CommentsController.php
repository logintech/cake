<?php
class CommentsController extends AppController {
	
	public $helpers = array('Html', 'Form');

    public function index() {
		$comments = $this->Comment->find('all');
		$this -> set ('comments',$comments);
	}
	
	public function add() {
		if(!empty($this->data)) {
			if($this->Comment->save($this->data)) {
				$this->Comment->saveField("status","disabled");
				$this->Session->setFlash('To sxolio kataxorithike!');
				$this->redirect(array('controller'=>'posts', 'action'=>'index'));
			} else {
				$this->Session->setFlash('Den mporese na sothei to sxolio');
			}
		}
	}
	
	function edit($id = NULL) {
		if(empty($this->data)) {
			$this->request->data = $this->Comment->findById($id);
		} else {
			if($this->Comment->save($this->data)) {
				$this->Comment->saveField("status","enabled");
				$this->Session->setFlash('To comment ananeothike');
				$this->redirect(array('action' => 'index', $id));
			}
		}
	}
}




























?>
