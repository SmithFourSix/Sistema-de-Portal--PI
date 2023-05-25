<?php
session_start();
if(empty($_SESSION)){
    print "<script>location.href='index.html';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/dashboard.css">
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="btn btn-dark" href="dashboard.php">Animes Online</a>
            <a class="btn btn-dark" href="https://mangalivre.net/">Mangá externo</a>
            <?php
                print "Olá, " . $_SESSION["nome"];
            ?>
            <a href='logout.php' class='btn btn-danger'>Sair</a>
        </div>
    </nav>
    
    <div class="animes-classico">
    <h1>Animes Classicos</h1>
        <header>
            <div class="videos">
                <a href="./animes-classicos/yuyu.php"><img src="./img/hakusho.jpg" title="YU YU HAKUSHO"></a>
                <a href="./animes-classicos/naruto.php"><img src="./img/naruto.jpg" title="NARUTO"></a>
                <a href="./animes-classicos/jujutsu.php"><img src="./img/jujutsu.jpg" title="Jujutsu"></a>

            </div>
            <div class="videos">
                <a href="./animes-classicos/onepiece.php"><img src="./img/onepiece.png" title="ONE PIECE"></a>
                <a href="./animes-classicos/drstone.php"><img src="./img/drstone.jpg" title="Dr. Stone"></a>
                <a href="./animes-classicos/kimetsu.php"><img src="./img/kimetsu.jpg" title="KIMETSU NO YABA"></a>

            </div>
        </header>
        <h1>Animes Recomendados</h1>
            <div class="videos">
                <a href="./animes-recomenda/bungo.php"><img src="./img/bungou.jpg" title="Bungou Stray Dogs"></a>
                <a href="./animes-recomenda/overlord.php"><img src="./img/overlord.jpg" title="Overlord"></a>
                <a href="./animes-recomenda/tokiorevengers.php"><img src="./img/tokio.jpg" title="Tokio Revengers"></a>

            </div>
    </div>
</body>
<footer>Site para o projeto integrador</footer>
</html>