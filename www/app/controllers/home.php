<?php

class Home extends Controller
{
    public function index($user = null)
    {
        $userModel = $this->model('User');


        if($user){
            $user = $userModel->get($user);
        }

        //var_dump($user);

        $this->view('templates/header');
        $this->view('home/index', array(
            'user' => $user
        ));
        $this->view('templates/footer');
    }

}