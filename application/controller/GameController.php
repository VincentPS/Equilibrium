<?php 

class GameController extends Controller
{
	public function index(){
		$this->View->renderGame('game/index');
	}

	public function showAllMaterials(){
		//get progress and show
	}

	public function combineMaterial(){
		//parent 1 + parent 2 makes a call to this function to ask the model if the parents make a material together
	}
}