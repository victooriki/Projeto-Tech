<div class="modal fade" id="modal-confirmacao-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/clientes/excluir" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Confirme sua ação</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Deseja realmente excluir esse cliente?</p>
                    <input type="hidden" id="id_cliente" name="id_cliente" value="">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Sim</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Funcionários</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item active">Funcionários</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <?php
            $session = session();
            $alert = $session->get('alert');
            ?>

            <?php if (isset($alert)) : ?>

                <?php if ($alert == 'success_create') : ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Funcionário cadastrado com sucesso!
                            </div>
                        </div>
                    </div>
                <?php elseif ($alert == 'success_delete') : ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Cliente excluido com sucesso!
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

            <?php endif; ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/funcionarios/novo" class="btn btn-info"><i class="fas fa-user-plus"></i> Novo Funcionário</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">Cód:</th>
                                        <th>Nome</th>
                                        <th>Data de Nascimento</th>
                                        <th>RG</th>
                                        <th>CPF</th>
                                        <th>Telefone</th>
                                        <th>Endereço</th>
                                        <th>Data de Contratação</th>
                                        <th>Cargo</th>
                                        <th>Salário</th>
                                        <th>Dia de Pagamento</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php if (!empty($funcionarios)) : ?>
                                        <?php foreach ($funcionarios as $funcionario) : ?>
                                            <tr>
                                                <td><?= $funcionario['id_funcionario'] ?></td>
                                                <td><?= $funcionario['nome'] ?></td>
                                                <td><?= $funcionario['data_de_nascimento'] ?></td>
                                                <td><?= $funcionario['rg'] ?></td>
                                                <td><?= $funcionario['cpf'] ?></td>
                                                <td><?= $funcionario['telefone'] ?></td>
                                                <td><?= $funcionario['endereco'] ?></td>
                                                <td><?= $funcionario['data_de_contratacao'] ?></td>
                                                <td><?= $funcionario['cargo'] ?></td>
                                                <td><?= $funcionario['salario'] ?></td>
                                                <td><?= $funcionario['dia_de_pagamento'] ?></td>
                                                <td>
                                                    
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <tr>
                                            <td colspan="12">Nenhum Registro Encontrado!</td>
                                        </tr>
                                    <?php endif; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->