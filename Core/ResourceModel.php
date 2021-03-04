<?php

namespace MVC\Core;

use MVC\Config\Database;
use PDO;

class ResourceModel implements ResourceModelInterface
{
	private $table;
	private $id;
	private $model;

	/**
	 * Execute the _init function
	 * @param table
	 * @param id
	 * @param model
	 */
	public function _init($table,$id,$model)
	{
		$this->table = $table;
		$this->id = $id;
		$this->model = $model;
	}

	/**
	 * @param model model needed to save
	 * Executes the sql command to save the model to the database
	 */
	public function save($model)
	{
		
		$arrData = $model->getProperties();
        $arrKey = array_keys($arrData);
		if (is_null($arrData["id"])) {
			unset($arrModel["id"]);
			unset($arrModel["updated_at"]);
            $arrData['created_at']=date('Y-m-d H:i:s');
			
			$strKey = implode(" , ",$arrKey);
			$strValue = ":" . implode(" , :",$arrKey);
			$sql = "INSERT INTO $this->table ( {$strKey} ) VALUES ( {$strValue} )";
			echo $sql;
		} else {
			unset($arrModel["created_at"]);
            $arrData['updated_at']=date('Y-m-d H:i:s');

			$strKey = implode(" , ",$arrKey);
			$str = "";

			foreach ($arrKey as $key => $value) {
				$str .= $value . " = :" . $value . ",";			
			}

			$str = substr($str,0,-1);
			$sql = "UPDATE $this->table SET {$str} WHERE id = :id";
		}
		$req = Database::getBdd()->prepare($sql);
		return $req->execute($arrData);
	}

	/**
	 * @param model model needed to delete
	 * Execute the sql command to remove the model from the database
	 */
	public function delete($model)
	{
        $arrDelete['id'] = $model->getId();
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $req = Database::getBdd()->prepare($sql);
        return $req->execute($arrDelete);
	}

	/**
	 * @param id id needed to get
	 * Execute the sql command to get the id from the database
	 */
	public function get($id)
    {
		$sql = "SELECT * FROM $this->table WHERE id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
	}

	// Execute the sql command to get all data from the database
	public function getAll()
	{
		$sql = "SELECT * FROM $this->table";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_OBJ);
	}
}
