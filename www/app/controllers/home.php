<?php

class Home extends Controller
{
    public function index($name = 'Alex')
    {
        $user = $this->model('User');

        $user->name = $name;

        $food = array('Apple', 'Banana', 'Rye Bread');

        $this->view('home/index', array(
            'name' => $user->name,
            'food' => $food
        ));
    }

}