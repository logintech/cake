<?php
class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }
}
/**
*	Me tin entolh "set" apothikeuopume sto "posts"
*	ta apotelesmata apo to find(all)
*	pou trexoun sto Model Post.
*	
*	Ola auta kalountai molis kapoios episkeutei tin
*	selida INDEX tou fakelou Posts.
*/
?>
