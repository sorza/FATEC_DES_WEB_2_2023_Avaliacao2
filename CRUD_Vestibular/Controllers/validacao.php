<?php

require_once (__DIR__ . '/../Models/Candidato.php');
require_once 'candidatoController.php';


function validarCadastro($form)
{
    //Validar dados do formulario
    if($form['nome'] === "") return "Informe um nome válido!";
    if($form['rg'] === "") return "O campo RG é obrigatório!";
    if($form['telefone'] === "") return "Informe um telefone!";
   

    //Criar um objeto Candidato
    $candidato = new Candidato(
        $form['nome'],  
        $form['rg'],  
        $form['telefone'],
        $form['publico']
    );

    //Cadastrar usuario no Banco
    if(CriarCandidato($candidato)) return "OK";
    else return "Houve um erro durante o cadastro!";
}

?>
