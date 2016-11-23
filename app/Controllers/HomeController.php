<?php


namespace App\Controllers;

use Slim\Views\Twig as View;

class HomeController extends Controller
{    
    public function index($request, $response)
    {
        //$user = $this->db->table('users')->where('id',1)->first();
        $user = $this->db->table('users')->find(1);
        
        //var_dump($user->email);
        var_dump($user);
                
        die();
        return $this->view->render($response, 'home.twig');
    } 
} 