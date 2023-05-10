<?php

require_once (__DIR__ . '/../Models/Candidato.php');
require_once ('dbUtils.php');

function CriarCandidato($candidato)
{
    $sql = "INSERT INTO candidatos (nome, rg, telefone, ensino_publico) VALUES ('" .
        $candidato->getNome() . "','".
        $candidato->getRG() . "','".
        $candidato->getTelefone() . "',".       
        $candidato->getEnsinoPublico() . ");";

    $db = new dbUtils();
    $db->DbCommandExec($sql);

    return "OK";
}

function ConsultarCandidatos()
{
    $sql = "SELECT * FROM candidatos";

    $db = new dbUtils();
    $result = $db->DbCommandQuery($sql);  

    if($result->rowCount() > 0)  
    {
        echo "
            <table class=\"table\">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>RG</th>
                <th>Telefone</th>
                <th>Ensino Publico</th>           
            </tr>";

        while($row = $result->fetch(PDO::FETCH_ASSOC)) 
        {
            echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["nome"]."</td>
                <td>".$row["rg"]."</td>
                <td>".$row["telefone"]."</td>
                <td>".$row["ensino_publico"]."</td>
            </tr>";
        }
        echo "</table>";
    }   
    else
    {
        echo "<h2 class=\"text-center\"> Ainda não há candidatos registrados para o Vestibular do Orlando!</h2>";
    }
}

function RemoverCandidato($id)
{
    if( isset($id) )
    {
        $sql = "delete from candidatos where id =" . $id;
        $db = new dbUtils();
        
        if($db->DbCommandExec($sql) > 0)
        {
            return "OK";
        }
        else
        {
            return "ID inválido!";
        }
    }    
}

function AtualizarCandidato($candidato, $id)
{
    $sql = "update candidatos set 
                nome = '" . $candidato->getNome() ."',
                rg = '" . $candidato->getRG() ."',
                telefone = '". $candidato->getTelefone() ."',
                ensino_publico = " . $candidato->getEnsinoPublico() ."
            where id = " . $id . ";";

    $db = new dbUtils();

    if($db->DbCommandExec($sql) > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
    
}


