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
    <style>
        body, html{
            height: 100%;
        }
        body{
            background: rgba(0, 0, 0, 0.7);
            background-image: url("https://t.ctcdn.com.br/5hJxUg-qSJ2QTBD_Lp6mW0lFT2Q=/720x405/smart/filters:format(webp)/i522181.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        

        .navbar{
            background-color: rgba(0, 0, 0, 1);
            color: white;
            text-decoration: none;
        }
        .video{
            text-align: center;
            height: 100%;
            
        }

        footer{
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
        }

    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="btn btn-dark" href="../dashboard.php">Pagina inicial</a>
            <?php
                print "Olá, " . $_SESSION["nome"];
                print "<a href='../logout.php' class='btn btn-danger'>Sair</a>";

            ?>
        </div>

    </nav>

    <div class="video">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/k5uecY2UFIQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>   
</body>
<footer>Site para o projeto integrador</footer>
</html>