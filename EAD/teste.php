<?php
include('conexao.php');

if(isset($_POST['telefone']) || isset($_POST['senha'])) {

    if(strlen($_POST['telefone']) == 0) {
        echo "Digite seu telefone !";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha !";
    } else {

        $telefone = $mysqli->real_escape_string($_POST['telefone']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM login WHERE telefone = '$telefone' and senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if(quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");
 
            } else {
                echo "Falha ao logar! E-mail ou senha incorretos";
            }
             
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>LS_PHOTO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="fotos, imagens, beleza, natureza, mundo, lugares, paisagens">
    <meta name="author" content="">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="script.js"></script>
</head>
<body>
    <div class="Login">
        
        <a href="#" class="button" id="button">LOGIN</a>
     </div>
    <div class="logo">
        LS_PHOTO
        
    </div>




    <div class="popup">
        <div class="popup-content">
            <h1 class="login1">LOGIN</h1>


            <form action="" method="post">
                <label>Telefone</label>
            <input type="tel" name='telefone'>
            </form>
            <br>


            <form action="" method="post">
                <label>Senha</label>
            <input type="password" name='senha'>

               
            <button type="submit">Entrar</a>
            <a href="#" class="button" id="close">Cancelar</a>  
            </form>


         

        </div>
    </div>

 <script>
 
 document.getElementById("button").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "flex";
})

document.getElementById("close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
})

</script>

    <header>
        
        <h1>MENU</h1>
        
    </header>

    

    <footer>
        <p>Copyright &copy; 2024, Desenvolvido por <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIxmNxJU8NO4D0bV6jSy9I7rtjimbHTufSUZl8Ie5UuwRYM_jBHHBXoKzcyOKHnFNWyfg&usqp=CAU" target="_blank">P&D</a>.</p>
    </footer>
</body>
</html>