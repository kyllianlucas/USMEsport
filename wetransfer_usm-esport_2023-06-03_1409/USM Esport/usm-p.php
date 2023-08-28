<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./asset/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>USM eSport</title>
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="container-prim">

        <?php
        include 'header.php';
        ?>

        <main class="streamers-list">

            <ul class="rl-rows">
                <li class="rl-item">
                    <img src="./asset/img/logo.png" alt="ZeGuillotin" class="rl-box-logo">
                    <h3 class="rl-name">iiTzAsuka</h3>
                    <br>
                    <div class="rl-logo">
                        <a href="https://twitter.com/Asukaa_V1" target="_blank"><i class="fa-brands fa-twitter network-rl-twitter"></i></a>
                        <a href="https://rocketleague.tracker.network/rocket-league/profile/epic/%E3%81%AB%20Asuka.%20%E3%83%84/overview" target="_blank"><img src="./asset/img/rl.png"></a>
                    </div>
               </li>
                <li class="rl-item">
                    <img src="./asset/img/logo.png" alt="ZeGuillotin" class="rl-box-logo">
                    <h3 class="rl-name">KleazR</h3>
                    <br>
                    <div class="rl-logo">
                        <a href="https://twitter.com/StormKleazR" target="_blank"><i class="fa-brands fa-twitter network-rl-twitter"></i></a>
                        <a href="https://rocketleague.tracker.network/rocket-league/profile/epic/KleazRR/overview" target="_blank"><img src="./asset/img/rl.png"></a>
                    </div>
               </li>        
               <li class="rl-item">
                    <img src="./asset/img/logo.png" alt="ZeGuillotin" class="rl-box-logo">
                    <h3 class="rl-name">iiTzWiiron</h3>
                    <br>
                    <div class="rl-logo">
                        <a href="https://twitter.com/WiiRoN" target="_blank"><i class="fa-brands fa-twitter network-rl-twitter"></i></a>
                        <a href="https://rocketleague.tracker.network/rocket-league/profile/epic/iiTzWiiRoN/overview" target="_blank"><img src="./asset/img/rl.png"></a>
                    </div>
               </li>           
            </ul>
        </main>

        <?php
        include 'footer.php';
        ?>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="app.js"></script>
</body>

</html>