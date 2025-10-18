<?php
class InicioController extends Controller {
    public function index() {
        $this->view('inicio/index', [
            'titulo' => 'Proyecto MVC con PHP y XAMPP',
            'mensaje' => 'Bienvenido al sistema hecho sin frameworks'
        ]);
    }
}