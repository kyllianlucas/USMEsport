<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./asset/img/logo.png" type="image/x-icon">
    <title>USM eSport</title>
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="container-prim">
        <?php
        include 'header.php';
        ?>

        <main class="stream-box">
            <h1 class="index-home">
                Be Smart, Be <span class="footer-font">Monkey</span> !
            </h1>
            <p class="item-accueil">
                Nous sommes une association eSport, sous loi 1901 depuis 2020, basée à Nyons dans la Drôme (26)<br>
                Nous participons aux nombreux tournois français & européen avec l'objectif de faire briller nos joueurs au plus haut niveau possible !<br>
                Nous détectons et accompagnons des joueurs à fort potentiel afin de les préparer au monde professionnel de l'eSport.<br>
            </p>
        </main>
        <br>
        <div class="twitter">
        <a class="twitter-timeline" margin-left="50%" data-lang="fr" data-width="700" data-height="550" data-theme="dark"  href="https://twitter.com/USMeSport?ref_src=twsrc%5Etfw" alt="Tweets by USMeSport"></a> <script class="box-twitwi" async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

        <?php
        include 'footer.php';
        ?>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="app.js"></script>

</body>

</html>