<?php 

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;

class Login extends Controller
{
    private $login_model;

    function __construct()
    {
        $this->login_model = new LoginModel();
    }

    public function index()
    {
        echo View('login/index');
    }

    public function autenticar()
    {
        $dados = $this->request->getVar();
        
        $usuario = $this->login_model
                        ->where('usuario', $dados['usuario'])
                        ->where('senha', $dados['senha'])
                        ->first();

        $session = session();

        if(!empty($usuario)):

            $session->set('primeiro_nome', $usuario['primeiro_nome'] );
            $session->setFlashdata('alert', 'success_login');

            return redirect()->to('inicio');

        endif;

        $session->setFlashdata('alert', 'erro_login');

        return redirect()->to('/login');
    }
}

?>