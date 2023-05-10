<?php

require_once (__DIR__ . '/../Models/Candidato.php');
require_once 'candidatoController.php';


function validarCadastro($form)
{
    $candidato = validarCampos($form);

    //Cadastrar usuario no Banco
    if(CriarCandidato($candidato)) return "OK";
    else return "Houve um erro durante o cadastro!";
}

function validarAtualizacao($form)
{
    if($form['id'] === "") return "Informe um ID!";

       $candidato = validarCampos($form);

     //Criar um objeto Candidato
     $candidato = new Candidato(
        $form['nome'],  
        $form['rg'],  
        $form['telefone'],
        $form['publico']
    );

    //Atualizar candidato no banco

    if(AtualizarCandidato($candidato, $form['id'])) return "OK";
    else return "Erro na atualização, verifique os dados informados!";
}

function validarCampos($form)
{
    //Validar dados do formulario
    if($form['nome'] == "") return "Informe um nome válido!";
    if($form['rg'] == "") return "O campo RG é obrigatório!";
    if($form['telefone'] == "") return "Informe um telefone!";
    
    $candidato = new Candidato(
        $form['nome'],  
        $form['rg'],  
        $form['telefone'],
        $form['publico']
    );

    return $candidato;
    
}

?>
