<?php 

namespace App\Controllers;

use App\Models\FuncionarioModel;
use CodeIgniter\Config\View;
use CodeIgniter\Controller;

class Funcionarios extends Controller
{
    private $funcionario_model;

    function __construct()
    {
        $this->funcionario_model = new FuncionarioModel();
    }

    public function index()
    {
        $data['funcionarios'] = $this->funcionario_model
                                                    ->findAll();

        echo View('templates/header');
        echo View('funcionarios/index', $data);
        echo View('templates/footer');
    }

    public function novo()
    {
        echo View('templates/header');
        echo View('funcionarios/form');
        echo View('templates/footer');
    }

    public function store()
    {
        $dados = $this->request->getVar();
        
        $this->funcionario_model
            ->insert($dados);

        
        $session = session();
        $session->setFlashdata('alert', 'success_create');

        return redirect()->to('/funcionarios');
    }
}

?>