<?php include(BASE_PATH . "/app/controllers/list_data.php") ?>

<body>
    <div class="container text-center mx-auto">
        <div class="row mt-3">
            <div class="col d-flex justify-content-between">
                <a href="http://localhost:8080/projeto-seminario-5/home" class="btn btn-lightgray">
                    <i class="bi bi-arrow-left-short"></i> </a>
                <a href="" class="btn btn-success">CRIAR +</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col table-responsive" style="max-height:80vh">
                <?php
                $table = str_replace("/list", "", $url);
                $table_data = $data[$table];
                if (!empty($table_data)) {
                    echo list_data($table_data);
                } else {
                    echo ' <div class="alert alert-info">Nenhum dado encontrado na tabela <strong>' . $table . '</strong>, por favor clique no botão CRIAR para adicionar itens a tabela</div>';
                }
                ?>
            </div>

           
        </div>

    </div>
</body>