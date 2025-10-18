<?php
class LoginController extends Controller {

    
    public function index() {
        $this->view('login/index');
    }

    public function autenticar() {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $correo = trim($_POST['correo']);
            $password = trim($_POST['password']);

            $usuarioModel = $this->model('Usuario');
            $usuario = $usuarioModel->buscarPorCorreo($correo);

            if ($usuario && $password == $usuario['password']) {
                $_SESSION['usuario'] = [
                    'id' => $usuario['id'],
                    'nombre' => $usuario['nombre'],
                    'rol_id' => $usuario['rol_id'],
                    'rol' => $usuario['rol_nombre']
                ];

                // Redirección según el rol
                switch ($usuario['rol_nombre']) {
                    case 'admin':
                        header('Location: /py_gestion/public/admin');
                        break;
                    default:
                        header('Location: /py_gestion/public/home');
                }
                exit;

            } else {
                $this->view('login/index', ['error' => 'Correo o contraseña incorrectos']);
            }
        }
    }

    // public function autenticar() {
    // session_start();

    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     $correo = trim($_POST['correo']);
    //     $password = trim($_POST['password']);

    //     $usuarioModel = $this->model('Usuario');
    //     $usuario = $usuarioModel->buscarPorCorreo($correo);

    //     echo "<pre> asdsasd";
    //     var_dump($usuario);
    //     echo "</pre>";
    //     exit; // Detenemos la ejecución para ver los datos
    // }
    
}



