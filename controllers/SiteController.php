<?php

namespace app\controllers;

use app\models\Client;
use suluuboi\phpmvc\Application;
use suluuboi\phpmvc\Controller;
use suluuboi\phpmvc\middlewares\AuthMiddleware;
use suluuboi\phpmvc\Request;
use suluuboi\phpmvc\Response;
use app\models\LoginForm;
use app\models\User;
use app\models\ClientForm;
use suluuboi\phpmvc\Router;

class SiteController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function home()
    {
        return $this->render('homee', [
            'name' => 'Binary City'
        ]);
    }

    public function getClients(){
        $clients = new ClientForm();
        $a =  $clients->getAll();
        echo json_encode($a);
    }

    public function addClient(Request $request)
    {
        
        $clientModel= new ClientForm();
        
        if ($request->getMethod() === 'post') {
            $clientModel->loadData($request->getBody());
            if ($clientModel->validate() && $clientModel->save()) {
                Application::$app->response->redirect('/');
            }
            
        }

        if(Router::hasUrl('contacts')){
            $clients = new ClientForm();
            $clientModel = $clients->getAll();
        }

        
        return $this->render('add-client', [
            'model' => $clientModel
        ]);
    }

    public function login(Request $request)
    {
        echo '<pre>';
        var_dump($request->getBody(), $request->getRouteParam('id'));
        echo '</pre>';
        $loginForm = new LoginForm();
        if ($request->getMethod() === 'post') {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                Application::$app->response->redirect('/');
                return;
            }
        }
        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $loginForm
        ]);
    }

    public function register(Request $request)
    {
        $registerModel = new User();
        if ($request->getMethod() === 'post') {
            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
                return 'Show success page';
            }

        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function profile()
    {
        return $this->render('profile');
    }

    public function profileWithId(Request $request)
    {
        echo '<pre>';
        var_dump($request->getBody());
        echo '</pre>';
    }

    
}
