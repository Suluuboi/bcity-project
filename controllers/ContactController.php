<?php

namespace app\controllers;

use app\models\ClientForm;
use app\models\Contact;
use suluuboi\phpmvc\Application;
use suluuboi\phpmvc\Controller;
use suluuboi\phpmvc\Request;
use suluuboi\phpmvc\View;

class ContactController extends Controller
{
    public function loadPage()
    {
        
        $contactModel= new Contact();
        
        /*if ($request->getMethod() === 'post') {
            $contactModel->loadData($request->getBody());
            if ($contactModel->validate() && $contactModel->save()) {
                Application::$app->session->setFlash('success', "{$contactModel['name']} Added Successful");
                Application::$app->response->redirect('/contacts/info');
                return;
            }
            
        }*/

        $a= array(
            array("name" => "John", "surname" => "Doe", "email"=>"hans@email"),
            array("name" => "Jane", "surname" => "Smith", "email"=>"hans@email")
        );
        
        return $this->render('contact/index', [
            'model' => $contactModel
        ]);
    }

    public function getContacts(){
        $contactModel = new Contact();
        $data =  $contactModel->getAll();
        return $this->renderTemplate('client/contact-list-item-template',[
            'model' => $data
        ]);
    }
}