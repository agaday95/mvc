<?php

namespace MVC\Models;

use MVC\Models\TaskResourceModel;

class TaskRepository
{
    protected $taskResourceModel;

    // Function contructor
    public function __construct()
    {
        $this->taskResourceModel = new TaskResourceModel;
    }

    /**
     * Add model
     * @param model current model
     * @return function save from ResourceModel
     */
    public function add($model)
    {
        return $this->taskResourceModel->save($model);
    }

    /**
     * Edit model
     * @param model current model
     * @return function save from ResourceModel
     */
    public function edit($model)
    {
        return $this->taskResourceModel->save($model);
    }

    /**
     * Get data by id
     * @param id current id
     * @return function get from ResourceModel
     */
    public function get($id)
    {
        return $this->taskResourceModel->get($id);
    }

    /**
     * Delete model
     * @param model current model
     * @return function delete from ResourceModel
     */
    public function delete($model)
    {
        return $this->taskResourceModel->delete($model);
    }

    /**
     * Get all data from database
     * @return function getAll from ResourceModel
     */
    public function getAll()
    {
        return $this->taskResourceModel->getAll();
    }
}
