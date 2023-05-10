<?php

require_once './Controllers/validacao.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $retorno = validarCadastro($_POST);

    if($retorno !== "OK")
    {     
        ?><div class="alert alert-danger" role="alert">
            <?php echo $retorno; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
        </div><?php
    }
    else
    {
        ?><div class="alert alert-success" role="alert">
            Usuário cadastrado com sucesso!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
        </div><?php
    }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Vestibular do Orlando</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Lista de Candidatos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cadastro.php">Cadastro</a>
                </li>                
            </ul>
            </div>
        </div>
        </nav>
    </header>

    <div class="container">
        <br><br>
        <h2>Cadastrar Candidato</h2>
        <p>Favor o inserir os dados do novo candidato</p>
        <form action="cadastro.php" method="post">
            <div class="form-group">
                <label>Nome do candidato</label>
                <input type="text" maxlength="50" name="nome" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>RG</label>
                <input type="text" maxlength="20" name="rg" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" name="telefone" maxlength="11" class="form-control">
                <span class="help-block"></span>
            </div>          

            <br>
            <label>Ensino Publico?</label><br>
            <div class="form-check">               
                <input class="form-check-input" type="radio" name="publico" id="flexRadioDefault2" value="true" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Sim
                </label> 
                <br>         
                <input class="form-check-input" type="radio" name="publico" value="false" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Não
                </label>
            </div>            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>