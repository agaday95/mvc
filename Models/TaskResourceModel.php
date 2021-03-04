<?php

namespace MVC\Models;

use MVC\Core\ResourceModel;
use MVC\Models\TaskModel;

class TaskResourceModel extends ResourceModel
{

	// Declare table name, primary key, model
	public function __construct()
	{
		$this->_init('tasks','id',new TaskModel);
	}
}
