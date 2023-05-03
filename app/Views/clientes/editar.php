<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Atualizar Cliente</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="/clientes" class="btn btn-success" style="margin-right: 15px">Voltar</a>
                        <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="/clientes">Clientes</a></li>
                        <li class="breadcrumb-item active">Atualizar</li>
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

                <?php if ($alert == 'success_update') : ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Cliente atualizado com sucesso!
                            </div>
                        </div>
                    </div>

                <?php endif; ?>

            <?php endif; ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Dados Pessoais</h3>
                        </div>
                        <form action="/clientes/store" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Nome</label>
                                            <input type="text" name="nome" class="form-control" value="<?= $cliente['nome'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Data de Nascimento</label>
                                            <input type="date" name="data_de_nascimento" class="form-control" value="<?= $cliente['data_de_nascimento'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Telefone</label>
                                            <input type="text" name="telefone" class="form-control" value="<?= $cliente['telefone'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="">Endereço</label>
                                            <input type="text" name="endereco" class="form-control" value="<?= $cliente['endereco'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="">Limite de Crédito</label>
                                            <input type="text" name="limite_de_credito" class="form-control" value="<?= $cliente['limite_de_credito'] ?>">
                                        </div>
                                    </div>

                                    <input type="hidden" name="id_cliente" value="<?= $cliente['id_cliente'] ?>">

                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Atualizar</button>
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