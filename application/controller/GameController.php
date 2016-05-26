<?php 

class GameController extends Controller
{
	public function index(){
		$this->View->renderGame('game/index');
	}
}