<?php

namespace app\controllers;


use suluuboi\phpmvc\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return $this->render('about');
    }
}