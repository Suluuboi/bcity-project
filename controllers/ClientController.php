<?php

namespace app\controllers;

use app\models\ClientForm;
use suluuboi\phpmvc\Application;
use suluuboi\phpmvc\Controller;
use suluuboi\phpmvc\Request;

class ClientController extends Controller
{
    public function loadPage(Request $request)
    {
        
        $clientModel= new ClientForm();
        
        if ($request->getMethod() === 'post') {
            $clientModel->loadData($request->getBody());
            if ($clientModel->validate() && $clientModel->save()) {
                Application::$app->response->redirect('/');
            }
            
        }
        
        return $this->render('client/clients-info', [
            'model' => $clientModel
        ]);
    }

    public function getClients(){
        $clients = new ClientForm();
        $a =  $clients->getAll();
        //echo json_encode($a);
        return $this->renderTemplate('client/client-list-template',[
            'model' => $a
        ]);
    }
}