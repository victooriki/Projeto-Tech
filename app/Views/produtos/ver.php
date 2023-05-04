<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dados do Produto</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="/produtos" class="btn btn-success" style="margin-right: 15px"><i class="fas fa-arrow-alt-circle-left"></i> Voltar</a>
                        <li class="breadcrumb-item"><a href="/inicio">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="/clientes">Produtos</a></li>
                        <li class="breadcrumb-item active">Dados</li>
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
                            <h3 class="card-title">Dados do Produto</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Nome</label>
                                        <input type="text" class="form-control" value="<?= $produto['nome'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="">Descrição</label>
                                        <input type="text" class="form-control" value="<?= $produto['descricao'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Quantidade</label>
                                        <input type="text" class="form-control" value="<?= $produto['quantidade'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Quantidade Mínima</label>
                                        <input type="text" class="form-control" value="<?= $produto['quantidade_minima'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Valor de Compra</label>
                                        <input type="text" class="form-control" value="<?= $produto['valor_de_compra'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Valor de Venda</label>
                                        <input type="text" class="form-control" value="<?= $produto['valor_de_venda'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Margem de Lucro</label>
                                        <input type="text" class="form-control" value="<?= $produto['margem_de_lucro'] ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Validade</label>
                                        <input type="date" class="form-control" value="<?= $produto['validade'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->