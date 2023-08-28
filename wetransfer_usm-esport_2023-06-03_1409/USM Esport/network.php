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

        <main class="network-page">

            <section class="network-list">
                <ul class="list-network">
                 <li class="item-network"><a target="_blank" href="https://www.twitch.tv/usmesport">Twitch</a></li>
                 <li class="item-network"><a target="_blank" href="http://discord.gg/XEj562V">Discord</a></li>
                 <li class="item-network"><a target="_blank" href="https://twitter.com/USMeSport">Twitter</a></li>
                 <li class="item-network"><a target="_blank" href="https://www.instagram.com/usm.esport/?hl=fr">Instagram</a></li>
                 <li class="item-network"><a target="_blank" href="https://www.tiktok.com/@usm_esport">TikTok</a></li>
                 <li class="item-network"><a target="_blank" href="https://www.youtube.com/channel/UCU2d2fGoNMq3oKZjkl25xrw?view_as=subscriber?sub_confirmation=1">Youtube</a></li>
                </ul>
            </section>

        </main>

        <?php
        include 'footer.php';
        ?>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="app.js"></script>

</body>

</html>