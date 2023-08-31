<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/programacaoweb/aula3/model/EstudanteModel.php';

class EstudanteController
{

    public function listar()
    {
        //Instanciar a model
        //Chamar o metodo listar na model
        $estudanteModel = new EstudanteModel();
        $listaEstudantes = $estudanteModel->listarModel();
        $_REQUEST["estudante"] = $listaEstudantes;
        //Renderizar a view
        //AQUI
        require_once $_SERVER['DOCUMENT_ROOT'] . '/programacaoweb/aula3/view/listarEstudanteView.php';
    }

    public function salvar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/programacaoweb/aula3/view/EstudanteForm.php';
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            $estudanteModel = new EstudanteModel();
            $estudanteModel->salvarModel($nome, $idade);

            header('Location: http://localhost/programacaoweb/aula3/?controller=Estudante&acao=listar');
            exit();
        }

    }
}