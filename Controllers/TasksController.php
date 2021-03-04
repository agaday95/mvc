<?php

namespace MVC\Controllers;

use MVC\Models\TaskModel;
use MVC\Core\Controller;
use MVC\Models\TaskRepository;

class TasksController extends Controller
{
    /**
     * Get all the data to display the index page
     */
    function index()
    {
        $tasks = new TaskRepository();
        $d['tasks'] = $tasks->getAll();
        $this->set($d);
        $this->render("index");
    }

    /**
     * Create data in create page
     * Set data for model
     * Return to index page when Created successfully
     */
    function create()
    {
        if (isset($_POST["title"])) 
        {
            $tasks = new TaskRepository();
            $taskModel = new TaskModel();
            $taskModel->setTitle($_POST["title"]);
            $taskModel->setDescription($_POST["description"]);

            if ($tasks->add($taskModel)) {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->render("create");
    }

    /**
     * Edit data in edit page
     * Set data for model
     * Return to index page when Successfully edited
     */
    function edit($id)
    {
        $tasks = new TaskRepository();
        $d["task"] = $tasks->get($id);

        if (isset($_POST["title"])) {
            $taskModel = new TaskModel();
            $taskModel->setId($id);
            $taskModel->setTitle($_POST["title"]);
            $taskModel->setDescription($_POST["description"]);

            if ($tasks->edit($taskModel)) {
                header("Location: " . WEBROOT . "tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    /**
     * @param id id to delete
     * Delete data by id
     * Return to index page when Successfully Deleted
     */
    function delete($id)
    {
        $tasks = new TaskRepository();
        $taskModel = new TaskModel();
        $taskModel->setId($id);

        if ($tasks->delete($taskModel)) {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
