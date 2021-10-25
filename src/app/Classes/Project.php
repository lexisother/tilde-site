<?php

namespace App\Classes;

class Project
{
    public $name;
    public $description;
    public $html_url;
    public $language;

    function __construct($data = null)
    {
        $this->name = null;
        $this->description = null;
        $this->html_url = null;

        if (isset($data['name']) && is_string($data['name'])) {
            $this->name = $data['name'];
        }

        if (isset($data['description']) && is_string($data['description'])) {
            $this->description = $data['description'];
        }

        if (isset($data['html_url']) && is_string($data['html_url'])) {
            $this->html_url = $data['html_url'];
        }

        if (isset($data['language']) && is_string($data['language'])) {
            $this->language = $data['language'];
        }
    }
}
