<?php 

class GameController extends Controller
{
	public function index()
	{
		$this->View->renderGame('game/index');
	}

	public function getAllMaterials($circle)
	{
		$materials = gameModel::getAllMaterials($circle);
		$this->View->renderJSON($materials);
	}

	public function combineMaterial()
	{
		//parent 1 + parent 2 makes a call to this function to ask the model if the parents make a material together
	}
}