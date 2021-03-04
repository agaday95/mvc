<?php

namespace MVC\Core;

class Model
{
    /**
     * @return array convert object into array
     */
    public function getProperties()
    {
        return get_object_vars($this);
    }
}
