<?php

if(!isset($_SESSION)) {
    session_start();
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
    <link rel="stylesheet" href="style2.css" type="text/css">
    <script src="script.js"></script>
</head>
<body>

    <div class="logo">
        LS_PHOTO

        <div class="logov1">
        Bem-Vindo, <?php echo $_SESSION['nome']; ?>
        </div>

            <a href="index.php" id="deslogar">Sair</a>
    

    </div>  
            
    
        


    <header>
        
        <h1>MENU</h1>
        
    </header>

    <main>
            <section>
                <div class="image-container">
                    <div class="image"><img src="itália.jpg" alt="";></div>
                    <div class="image"><img src="oceano_da_califórnia.jpg" alt="";></div>
                    <div class="image"><img src="lago2.jpg" alt="";></div>
                    <div class="image"><img src="alaska.jpg" alt="";></div>
                    <div class="image"><img src="parque_denali.jpg" alt="";></div>
                    <div class="image"><img src="lago.jpg" alt="";></div>
                    <div class="image"><img src="escócia.jpg" alt="";></div>
                    <div class="image"><img src="montanhoso.jpg" alt="";></div>
                    <div class="image"><img src="montanhas.jpg" alt="";></div>
            </section>
        </main>

    <footer>
        <p>Copyright &copy; 2024, Desenvolvido por <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIxmNxJU8NO4D0bV6jSy9I7rtjimbHTufSUZl8Ie5UuwRYM_jBHHBXoKzcyOKHnFNWyfg&usqp=CAU" target="_blank">P&D</a>.</p>
    </footer>
</body>
</html>