<?php

namespace app\controllers;

use app\models\ClientForm;
use suluuboi\phpmvc\Application;
use suluuboi\phpmvc\Controller;
use suluuboi\phpmvc\Request;
use suluuboi\phpmvc\View;

class ClientController extends Controller
{
    public function loadPage(Request $request)
    {
        
        $clientModel= new ClientForm();
        
        if ($request->getMethod() === 'post') {
            $clientModel->loadData($request->getBody());
            if ($clientModel->validate() && $clientModel->save()) {
                Application::$app->session->setFlash('success', "{$clientModel['name']} Added Successful");
                Application::$app->response->redirect('/clients/info');
                return;
            }
            
        }
        
        return $this->render('client/index', [
            'model' => $clientModel
        ]);
    }

    public function getClients(){
        $clients = new ClientForm();
        $a =  $clients->getAll();
        //echo json_encode($a);
        return $this->renderTemplate('client/templates/client-list',[
            'model' => $a
        ]);
    }
}