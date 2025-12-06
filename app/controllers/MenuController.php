<?php

class MenuController extends Controller
{   

    // public function __construct() {
    //     Auth::verificar();
    // }

    public function index()
    {
        $this->view("menu/index");
    }
}
