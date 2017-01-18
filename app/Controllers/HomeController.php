<?php

namespace App\Controllers;

use Slim\Views\Twig as View;

class HomeController extends Controller
{
    public function index($request, $response)
    {
      //var_dump($request->getParam('name'));
      //va raspunde la un request url de tipul calea/?name=vasile

       //$user = $this->db->table('users')->where('id',1)->first();
       //$user = $this->db->table('users')->find(1);
       //var_dump($user->email);
       //var_dump($user);

       // crearea de query complexe se regaseste in documentatia Laravel Eloquent
       //die();

      return $this->view->render($response, 'home.twig');
    }
}
