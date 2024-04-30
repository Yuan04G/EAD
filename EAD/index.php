    <?php
    include('conexao.php');
    session_start();

    if(isset($_POST['telefone']) && isset($_POST['senha'])) {
        $telefone = $mysqli->real_escape_string($_POST['telefone']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        if(strlen($telefone) == 0) {
            echo "Digite seu telefone!";
        } elseif(strlen($senha) == 0) {
            echo "Preencha sua senha!";
        } else {
            $sql_code = "SELECT * FROM login WHERE telefone = '$telefone' and senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade == 1){
                $usuario = $sql_query->fetch_assoc();

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];

                header("Location: painel.php");
                exit();
                
            } else {
                header("Location: loginfalha.php");
                exit();
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
                    <input type="tel" name="telefone">
                    <br>
                    <label>Senha</label>
                    <input type="password" name="senha">
                    <br>
                    <button type="submit">Entrar</button>
                    <a href="#" class="button" id="close">Cancelar</a>  
                </form>
            </div>
        </div>

        <script>
            
            document.getElementById("button").addEventListener("click", function(){
                document.querySelector(".popup").style.display = "flex";
            });

            document.getElementById("close").addEventListener("click", function(){
                document.querySelector(".popup").style.display = "none";
            });

            document.addEventListener("DOMContentLoaded", function() {
    var imagens = document.querySelectorAll(".fotografias img");
    imagens.forEach(function(imagem) {
        imagem.addEventListener("click", function() {
            document.querySelector(".popup").style.display = "flex";
        });
    });
});

        </script>

        <header>
            <h1>MENU</h1>
        </header>

        <main>
        <main>
            <section>
                <figure class="fotografias">
                    <a href="#">
                            <img src="itália.jpg" alt="Itália" id="imagemItalia" class=fotograria>
                            <figcaption>
                                <h1>Itália</h1>
                                <p> Gostou? Curta e Comente! </p>
                            </figcaption>
                        </a>
                </figure>

                <figure class="fotografias">
                <a href="#">
                        <img src="oceano_da_califórnia.jpg" alt="Oceano da Califórnia" class=fotograria>
                        <figcaption>
                            <h1>Oceano da Califórnia</h1>
                            <p> Gostou? Curta e Comente! </p>
                        </figcaption>
                    </a>
                </figure>

                <figure class="fotografias">
                <a href="#">
                        <img src="lago2.jpg" alt="Lago2" class=fotograria>
                        <figcaption>
                            <h1>Lago 2</h1>
                            <p> Gostou? Curta e Comente! </p>
                        </figcaption>
                    </a>    
                </figure>

                <figure class="fotografias">
                <a href="#">
                        <img src="alaska.jpg" alt="Alaska" class=fotograria> 
                        <figcaption>
                            <h1> Alaska</h1>
                            <p> Gostou? Curta e Comente! </p>
                        </figcaption>
                    </a>
                </figure>

                <figure class="fotografias">
                <a href="#">
                        <img src="parque_denali.jpg" alt="Parque Denali" class=fotograria>
                        <figcaption>
                            <h1>Parque Nacional e Reserva de Denali</h1>
                            <p> Gostou? Curta e Comente! </p>
                        </figcaption>
                    </a>    
                </figure>

                <figure class="fotografias">
                <a href="#">
                        <img src="lago.jpg" alt="Lago" class=fotograria>
                        <figcaption>
                            <h1>Lago</h1>
                            <p> Gostou? Curta e Comente! </p>
                        </figcaption>
                    </a>    
                </figure>

                <figure class="fotografias">
                <a href="#">
                        <img src="escócia.jpg" alt="Escócia" class=fotograria>
                        <figcaption>
                            <h1>Escócia</h1>
                            <p> Gostou? Curta e Comente! </p>
                        </figcaption>
                    </a>    
                </figure>

                <figure class="fotografias">
                <a href="#">
                        <img src="montanhoso.jpg" alt="Montanhoso" class=fotograria>
                        <figcaption>
                            <h1>Montanhoso</h1>
                            <p> Gostou? Curta e Comente! </p>
                        </figcaption>
                    </a>    
                </figure>

                <figure class="fotografias">
                <a href="#">
                        <img src="montanhas.jpg" alt="Montanhas" class=fotograria>
                        <figcaption>
                            <h1>Montanhas</h1>
                            <p> Gostou? Curta e Comente! </p>
                        </figcaption>
                    </a>
                </figure>
            </section>
        </main>

        <footer>
            <p>Copyright &copy; 2024, Desenvolvido por <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIxmNxJU8NO4D0bV6jSy9I7rtjimbHTufSUZl8Ie5UuwRYM_jBHHBXoKzcyOKHnFNWyfg&usqp=CAU" target="_blank">P&D</a>.</p>
        </footer>
    </body>
    </html>
