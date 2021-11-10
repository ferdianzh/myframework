<?php

namespace Core;

class Controller {
    public function view($view, $data = [])
    {
        if (is_array($data)) {
            extract($data);
        }
        require_once "../app/views/" . $view . ".php";
    }

    public function sectionCheck($title, $word)
    {
        $lowTitle = strtolower($title);
        if ($lowTitle==$word || strpos($title, $word)) {
            return 'active';
        }
    }
}