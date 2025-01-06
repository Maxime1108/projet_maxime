<?php 

namespace Controller;

class CategoriesController extends BaseController
{
    public function index()
    {
        $this->render('categories/index.html.php');
    }
}