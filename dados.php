<?php 

   if(isset($_POST['nome'])) {

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if($nome == "ajax" && $senha == 123) {
        echo 
        "
        <br>
        <div class='alert alert-success' role='alert'>
            USUÁRIO AUTENTICADO! :)!
        </div>

        <h5>BEM VINDO</h5>".$nome." !

        <style>
            body {
                background-color: green;
            }
        </style>
        
        ";
    } else {
        echo "
        
        <br>
        <div class='alert alert-danger' role='alert'>
        USUÁRIO INVÁLIDO! :(
        </div>

        <h6>Usuário digitado: ".$nome."</h6>
        <h6>Senha digitada: ".$senha."</h6>

        
        <style>
            body {
                background-color: red;
            }
        </style>
        
        ";
    }   
   }
    

?>