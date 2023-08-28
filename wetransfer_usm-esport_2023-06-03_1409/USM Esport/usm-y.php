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
                    <h3 class="rl-name">Midas</h3>
                    <br>
                    <div class="rl-logo">
                        <a href="https://twitter.com/USMKrnage" target="_blank"><i class="fa-brands fa-twitter network-rl-twitter"></i></a>
                        <a href="" target="_blank"><img src="./asset/img/rl.png"></a>
                    </div>
                </li>
                <li class="rl-item">
                    <img src="./asset/img/logo.png" alt="ZeGuillotin" class="rl-box-logo">
                    <h3 class="rl-name">Deymio</h3>
                    <br>
                    <div class="rl-logo">
                        <a href="https://twitter.com/USMKrnage" target="_blank"><i class="fa-brands fa-twitter network-rl-twitter"></i></a>
                        <a href="" target="_blank"><img src="./asset/img/rl.png"></a>
                    </div>
                </li>
                <li class="rl-item">
                    <img src="./asset/img/logo.png" alt="ZeGuillotin" class="rl-box-logo">
                    <h3 class="rl-name">Twixelinc</h3>
                    <br>
                    <div class="rl-logo">
                        <a href="https://twitter.com/USMKrnage" target="_blank"><i class="fa-brands fa-twitter network-rl-twitter"></i></a>
                        <a href="" target="_blank"><img src="./asset/img/rl.png"></a>
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