<?php 

class GameModel
{
	public static function getAllMaterials()
	{
		$database = DatabaseFactory::getFactory()->getConnection();

        $sql = "SELECT * FROM materials";
        $query = $database->prepare($sql);
        $query->execute();

        $materials = $query->fetch();
	}
}