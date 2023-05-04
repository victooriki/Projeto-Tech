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

    public function ver($id_funcionario)
    {
        $data['funcionario'] = $this->funcionario_model
                                            ->where('id_funcionario', $id_funcionario)
                                            ->first();

        echo View('templates/header');
        echo View('funcionarios/ver', $data);
        echo View('templates/footer');
    }

    public function novo()
    {
        echo View('templates/header');
        echo View('funcionarios/form');
        echo View('templates/footer');
    }

    public function editar($id_funcionario)
    {
        $data['funcionario'] = $this->funcionario_model
                                                ->where('id_funcionario', $id_funcionario)
                                                ->first();

        echo View('templates/header');
        echo View('funcionarios/form', $data);
        echo View('templates/footer');
    }

    public function store()
    {
        $dados = $this->request->getVar();

        $session = session();

        if (isset($dados['id_funcionario'])) :
            $this->funcionario_model
                ->where('id_funcionario', $dados['id_funcionario'])
                ->set($dados)
                ->update();

            $session->setFlashdata('alert', 'success_update');

            return redirect()->to("/funcionarios/editar/{$dados['id_funcionario']}");

        endif;
        $this->funcionario_model
            ->insert($dados);

        $session->setFlashdata('alert', 'success_create');

        return redirect()->to('/funcionarios');
    }

    public function delete()
    {
        $id_funcionario = $this->request->getVar('id_funcionario');

        $this->funcionario_model
            ->where('id_funcionario', $id_funcionario)
            ->delete();

        $session = session();
        $session->setFlashdata('alert', 'success_delete');

        return redirect()->to('/funcionarios');
    }
}

?>