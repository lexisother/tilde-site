<?php

namespace App\Classes;

class ProjectInfo
{
    public $list;

    function __construct($data = null)
    {
        $_list = [];

        if (isset($data)) {
            foreach ($data as &$value) {
                array_push($_list, new \App\Classes\Project($value));
            }
        }

        $this->list = $_list;
    }
}
