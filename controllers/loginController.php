<?php
require_once 'route.php';
require_once './models/ropaModel.php';
require_once './models/categoriaModel.php';
require_once './models/usuarioModel.php';
require_once './Helpers/authHelper.php';
require_once './views/loginView.php';
require_once './libs/libs/Smarty.class.php';
class loginController
{
    private $modelUsuario;
    private $viewLogin;
    private $viewRopa;
    private $authHelper;
    public function __construct()
    {
        $this->authHelper = new AuthHelper();
        $this->modelUsuario = new usuarioModel();
        $this->viewLogin = new loginView();
        $this->viewRopa = new RopaView();
    }

    public function mostrarlogin()
    {
        $valor = $this->authHelper->verificarLogeado();
        if ($valor == false) {
            $this->viewLogin->mostrarLogin();
        } else {
            $this->viewRopa->relocateSesion();
        }
    }
    public function DesloguearAdmin()
    {
        $this->authHelper->logout();
        $sesion = $this->authHelper->isLoggedIn();
        $this->viewLogin->relocateLogin($sesion);
    }
    public function guardarUsuario()
    {
        if (!empty($_POST['usuario']) && !empty($_POST['contraseña'])) {
            $usuario = $_POST['usuario'];
            $usuarioContraseña = $_POST['contraseña'];
            $this->modelUsuario->guardarUsuario($usuario, $usuarioContraseña);
        }
    }
    public function verificarUsuario()
    {
        $valor = $this->authHelper->verificarLogeado();
            if (!empty($_POST['usuario']) && !empty($_POST['contraseña'])) {
                $nombreUsuario = $_POST['usuario'];
                $contraseña = $_POST['contraseña'];
                $usuario = $this->modelUsuario->obtenerUsuarioId($nombreUsuario);
                if ((!empty($usuario) && password_verify($contraseña, $usuario->contraseña))) {
                    session_start();
                    $_SESSION['ID__usuario'] = $usuario->id_usuario;
                    $_SESSION['nombreUsuario'] = $usuario->usuario;
                    $this->viewRopa->relocateSesion();
                } else {
                    $this->viewLogin->relocateLogin();
                }
            } else {
                $this->viewLogin->relocateLogin();
            }
        
    }
    public function registrarUsuario()
    {
        $valor = $this->authHelper->verificarLogeado();
        if ($valor) {
            $registroUsuario = $_POST['usuario'];
            $registroContraseña = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);
            $resultado = $this->modelUsuario->guardarUsuario($registroUsuario, $registroContraseña);
            if ($resultado) {
                $this->viewLogin->mostrarLogin();
            }
        } else {
            $this->viewLogin->relocateLogin();
        }
    }
    public function mostrarRegistro()
    {
        $this->viewLogin->mostrarRegistro();
    }





    // public function borrarCategoria($id){        
    //     try {
    //         $this -> modelRopa-> 
    //         $query =  $this -> db->prepare("DELETE INTO 'producto' WHERE id=?");
    //         $query->execute([$id]);
    //     } catch (Exception $e) {
    //         $this -> view -> showError();
    //     }
    // }

}
