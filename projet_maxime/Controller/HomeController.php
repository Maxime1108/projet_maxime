<?php 

namespace Controller;

use Controller\BaseController;

class HomeController extends BaseController
{
    public function index()
    {

        $this->render('home/index.html.php');
    }
}