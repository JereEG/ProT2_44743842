<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Login_controller extends Controller{


    /** Login */
    public function ingreso() {
        helper(['form', 'url', 'html']);
        //$session = session();
        //$session->setFlashdata('success', 'Bienvenido!');
         $dato['titulo']='Ingreso'; 
         echo view('front/head_view',$dato);
         echo view('front/nav_view');
         echo view('front/login');
         echo view('front/footer_view');
    }


}
