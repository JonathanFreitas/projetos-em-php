<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*Sanitizaçao
         * Funçoes (filter_input - filter_var)
         * FILTER_SANITIZE_SPECIAL_CHARS
         * FILTER_SANITIZE_NUMBER_INT
         * FILTER_SANITIZE_EMAIL
         * FILTER_SANITIZE_URL
         * 
         */
        
        if(isset($_POST['enviar-formulario'])){
            echo "enviou <br><pre>";
            //var_dump($_POST);
             $erros = array();
                
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            echo "$nome <br>";
            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);    
            echo "$idade <br>"; 
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);    
            echo "$email <br>"; 
            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);    
            echo "$url <br>";
            
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
                <label>URL: </label> <input type="text" name="url" value="" /><br>
                <button type="submit" name="enviar-formulario" > Enviar </button> <br
            </form>
            
        </fieldset>
        
        
        
    </body>
</html>
