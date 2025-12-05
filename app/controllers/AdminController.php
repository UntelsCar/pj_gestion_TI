<?php
class AdminController extends Controller {
    
    public function index() {
        $this->view('menu/index', [
            'titulo' => 'Proyectandote ',
            'mensaje' => 'Bienvenido papu'
        ]);
    }
}