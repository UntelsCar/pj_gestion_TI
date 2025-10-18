<?php
class AdminController extends Controller {
    public function index() {
        $this->view('inicio/index', [
            'titulo' => 'Proyectandote ',
            'mensaje' => 'Bienvenido papu'
        ]);
    }
}