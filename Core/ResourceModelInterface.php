<?php

namespace MVC\Core;

interface ResourceModelInterface
{
    /**
     * Declare _init function
     * @param table
     * @param id
     * @param model
     */
    function _init($table, $id, $model);

    /**
     * Declare save function
     * @param model
     */
    function save($model);

    /**
     * Declare delete function
     * @param model
     */
    function delete($model);
}
