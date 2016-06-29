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
}