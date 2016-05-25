<?php 

class GameController extends Controller
{
	public function index(){
		$this->View->render('game/index');
	}
}