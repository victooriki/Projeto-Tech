<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= (isset($funcionario)) ? "Editar" : "Novo" ?> Funcionário</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="/funcionarios" class="btn btn-success" style="margin-right: 15px"><i class="fas fa-arrow-alt-circle-left"></i> Voltar</a>
                        <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="/clientes">Funcionários</a></li>
                        <li class="breadcrumb-item active">Novo</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dados Pessoais</h3>
                        </div>
                        <form action="/funcionarios/store" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Nome</label>
                                            <input type="text" name="nome" class="form-control" value="<?= (isset($funcionario)) ? $funcionario['nome'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Data de Nascimento</label>
                                            <input type="date" name="data_de_nascimento" class="form-control" value="<?= (isset($funcionario)) ? $funcionario['data_de_nascimento'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">RG</label>
                                            <input type="text" name="rg" class="form-control" value="<?= (isset($funcionario)) ? $funcionario['rg'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">CPF</label>
                                            <input type="text" name="cpf" class="form-control" value="<?= (isset($funcionario)) ? $funcionario['cpf'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Telefone</label>
                                            <input type="text" name="telefone" class="form-control" value="<?= (isset($funcionario)) ? $funcionario['telefone'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Endereço</label>
                                            <input type="text" name="endereco" class="form-control" value="<?= (isset($funcionario)) ? $funcionario['endereco'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Data de Contratação</label>
                                            <input type="date" name="data_de_contratacao" class="form-control" value="<?= (isset($funcionario)) ? $funcionario['data_de_contratacao'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Cargo</label>
                                            <input type="text" name="cargo" class="form-control" value="<?= (isset($funcionario)) ? $funcionario['cargo'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Salário</label>
                                            <input type="text" name="salario" class="form-control" value="<?= (isset($funcionario)) ? $funcionario['salario'] : "" ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Dia de Pagamento</label>
                                            <input type="text" name="dia_de_pagamento" class="form-control" value="<?= (isset($funcionario)) ? $funcionario['dia_de_pagamento'] : "" ?>">
                                        </div>
                                    </div>

                                    <?php if(isset($funcionario)): ?>
                                        <input type="hidden" name="id_funcionario" value="<?= $funcionario['id_funcionario'] ?>">
                                    <?php endif; ?>

                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> <?= (isset($funcionario)) ? "Atualizar" : "Cadastrar" ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->