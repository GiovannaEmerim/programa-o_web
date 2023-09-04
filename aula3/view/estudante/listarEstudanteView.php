<?php $estudantes = $_REQUEST["estudante"]; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bd-body-tertiary bg-dark " data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Meu Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo FOLDER; ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo FOLDER; ?>?controller=Estudante&acao=listar">Alunos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="<?php echo FOLDER; ?>?controller=Professor&acao=listar">Professores</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="/programacaoweb/aula3/?controller=Estudante&acao=salvar">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="mb-3">
                <label for="idade" class="form-label">Idade</label>
                <input type="number" class="form-control" id="idade" name="idade">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <div class="container">
        <div class="row text-center">
            <h2>Semana da Acessibilidade</h2>
        </div>

        <div class="text-center">
            <img src="https://diariodainclusaosocialdotcom.files.wordpress.com/2017/11/acessibilidade.jpg"
                alt="ilustração gráfica dos tipos de pessoas que necessitam de acessibilidade">
        </div>
        <br>
        <a href="/programacaoweb/aula3/?controller=Estudante&acao=salvar" class="btn btn-success">Cadastrar
            Estudante</a>
        <br>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudantes as $estudanteAtual) { ?>
                    <tr>
                        <td>
                            <?php echo $estudanteAtual["id"]; ?>
                        </td>
                        <td>
                            <?php echo $estudanteAtual["nome"]; ?>
                        </td>
                        <td>
                            <?php echo $estudanteAtual["idade"]; ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>




</body>

</html>