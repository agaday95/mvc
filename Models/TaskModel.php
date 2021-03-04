<?php

namespace MVC\Models; 

use MVC\Core\Model;

class TaskModel extends Model
{
	protected $id;
	protected $title;
	protected $description;
	protected $created_at;
	protected $updated_at;

	/**
	 * @param id id to set
	 */
	function setId($id)
	{
		$this->id = $id; 
	}

	/**
	 * @return current id
	 */	
	function getId()
	{
		return $this->id;
	}

	/**
	 * @param title title to set
	 */
	function setTitle($title)
	{
		$this->title = $title; 
	}

	/**
	 * @return current title
	 */	
	function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param description description to set
	 */
	function setDescription($description)
	{
		$this->description = $description; 
	}

	/**
	 * @return current description
	 */	
	function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param created_at created_at to set
	 */
	function setCreated_at($created_at)
	{
		$this->created_at = $created_at; 
	}

	/**
	 * @return current created_at
	 */	
	function getCreated_at()
	{
		return $this->created_at;
	}

	/**
	 * @param updated_at updated_at to set
	 */
	function setUpdated_at($updated)
	{
		$this->updated_at = $updated_at; 
	}
	
	/**
	 * @return current updated_at
	 */	
	function getUpdated_at()
	{
		return $this->updated;
	}
}
