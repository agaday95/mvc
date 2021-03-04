<?php

namespace MVC\Core;
    
class Controller
{
    var $vars = [];
    var $layout = "default";

    /**
     * @param d d is current array
     * Merge 2 arrays into 1 array
     */
    function set($d)
    {
        $this->vars = array_merge($this->vars, $d);
    }

    /**
     * @param filename filename is file name of views
     * Navigate to path view
     */
    function render($filename)
    {
        extract($this->vars);
        ob_start();
        
        $urlView = str_replace('Controller', '', get_class($this));
        $urlView = str_replace('MVC\s', '', $urlView);
        $urlView = str_replace("\\", '', $urlView);
        
        require( ROOT . '/Views/' . $urlView . '/' . $filename . '.php');

        $content_for_layout = ob_get_clean();

        if ($this->layout == false) {
            $content_for_layout;
        } else {
            require(ROOT . "Views/Layouts/" . $this->layout . '.php');
        }
    }
}
