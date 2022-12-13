<?php

namespace app\controllers;

use app\models\ClientForm;
use app\models\Contacts;
use suluuboi\phpmvc\Application;
use suluuboi\phpmvc\Controller;
use suluuboi\phpmvc\Request;

class ContactController extends Controller
{
    public function loadPage(Request $request)
    {
        
        $contactModel= new Contacts();
        
        if ($request->getMethod() === 'post') {
            $contactModel->loadData($request->getBody());
            if ($contactModel->validate() && $contactModel->save()) {
                //Application::$app->session->setFlash('success', "{$contactModel['name']} Added Successful");
                Application::$app->response->redirect('/contacts/info');
                return;
            }
            
        }
        
        return $this->render('contact/index', [
            'model' => $contactModel
        ]);
    }

    public function getContacts(){
        $contactModel = new Contacts();
        $data =  $contactModel->getAll();
        return $this->renderTemplate('contact/templates/contact-list',[
            'model' => $data
        ]);
    }
}