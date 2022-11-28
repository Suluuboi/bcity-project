<?php

namespace app\controllers;


use suluuboi\phpmvc\Controller;

class DataController extends Controller
{
    public function get()
    {
        return $this->getModelData();
    }
}