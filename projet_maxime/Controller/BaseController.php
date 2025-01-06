<?php

namespace Controller;

class BaseController
{
    protected function render($view, $data = [])
    {
        extract($data);
        require 'public/header.html.php';
        require 'views/' . $view;
        require 'public/footer.html.php';
    }
}