<?php 

class GameModel
{
	public static function getAllMaterials($circle)
	{
		$database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM materials WHERE circle='$circle'";
        $query = $database->prepare($sql);
        $query->execute();

        $materials = $query->fetchAll();

        return $materials;
	}

	public static function getCreation($parent1, $parent2)
	{
		$database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM materials WHERE parent_1_id = '$parent1' AND parent_2_id = '$parent2' OR parent_1_id = '$parent2' AND parent_2_id = '$parent1' ";
		$query = $database->prepare($sql);
        $query->execute();

        $creation = $query->fetch();

        return $creation;
	}
}