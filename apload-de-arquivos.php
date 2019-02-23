<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if(isset($_POST['enviar-form'])){
                echo "<pre>";
                $formatos = array("png", "jpeg", "jpg", "gif");
                $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
                
                if(in_array($extensao, $formatos)){
                    $pasta = "src/";
                    $temporario = $_FILES['arquivo']['tmp_name'];
                    $novoNome = uniqid()."$extensao";
                    
                    if(move_uploaded_file($temporario, $pasta.$novoNome)){
                        $msg = "Upload feito com sucesso!";
                    }else{
                        $msg = "Erro, não foi possivel fazer o Upload!";
                    }
                }else{
                    $msg = "Formato inválido";
                }
             echo $msg;   
            }
            
            echo "</pre>";
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo"><br>
            <input type="submit" name="enviar-form">
        
        </form>
    </body>
</html>
