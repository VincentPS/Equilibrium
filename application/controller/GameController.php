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

	public function combineMaterials($parent1, $parent2)
	{
		$creation = gameModel::getCreation($parent1, $parent2);
		$this->View->renderJSON($creation);
	}
}