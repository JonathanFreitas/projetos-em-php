<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*Validações
         * Funçoes (filter_input - filter_var)
         * FILTER_VALIDATE_INT
         * FILTER_VALIDATE_EMAIL
         * FILTER_VALIDATE_FLOAT
         * FILTER_VALIDATE_IP
         * FILTER_VALIDATE_URL
         */
        
        if(isset($_POST['enviar-formulario'])){
            echo "enviou <br><pre>";
            //var_dump($_POST);
             $erros = array();
                if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
                    $erros[] = "Idade precisa ser em numeros";
                }
                if(!$idade = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
                    $erros[] = "Email incorreto";
                }
                if(!$idade = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
                    $erros[] = "Peso incorreto";
                }
                if(!$idade = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
                    $erros[] = "IP incorreto";
                }
                if(!$idade = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
                    $erros[] = "URL incorreto";
                }
                
                
                if(!empty($erros)){
                    foreach ($erros as $erro){
                        echo "<li> $erro </li>";
                    }
                }else{
                    echo "Parabens, seus dados estao corretos!";
                }
            echo "</pre>";
        }
        
        ?>
        <fieldset>
            
            <legend>Cadastro</legend>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <label>Nome: </label> <input type="text" name="nome" value="" /><br>
                <label>idade: </label> <input type="text" name="idade" value="" /><br>
                <label>E-mail: </label> <input type="text" name="email" value="" /><br>
                <label>Peso: </label> <input type="text" name="peso" value="" /><br>
                <label>IP: </label> <input type="text" name="ip" value="" /><br>
                <label>URL: </label> <input type="text" name="url" value="" /><br>
                <button type="submit" name="enviar-formulario" > Enviar </button> <br
            </form>
            
        </fieldset>
        
        
        
    </body>
</html>
