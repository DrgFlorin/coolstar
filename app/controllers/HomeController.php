<?php

class HomeController extends Controller
{
    public function index()
    {
        $home = $this->model('Home'); 

        $this->view('home', 
        [
            'title' => $home->title, 
            'tab_icon' => $home->tab_icon
        ]);
        }
}