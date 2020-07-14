<?php


namespace App\controllers;


class MainController extends Controller
{
    protected $defaultAction = 'index';

    public function indexAction(){
       return  $this->render("index");
    }
}
