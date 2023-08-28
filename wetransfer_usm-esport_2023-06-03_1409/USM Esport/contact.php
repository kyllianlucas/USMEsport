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
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-8 m-4">
                    <form method="POST">
                        <div class="form-group">
                            <div class="text-center">
                                <br>
                                <h1>Nous contacter </h1>
                                <br>
                            </div>
                            <input type="text" name="pseudo" placeholder=" Pseudo" autocomplete="off" class="form-control" required/>
                            <br/>
                            <input type="email" name="email" placeholder="Votre email" autocomplete="off" class="form-control" required/>
                            <br/>
                            <input type="texte" name="sujet" placeholder="Sujet" autocomplete="off" class="form-control" required/>
                            <br/>
                            <textarea rows="10" name="message" placeholder="Votre message" class="form-control" required></textarea>
                            <br/>
                            <button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
            if (isset($_POST["message"])){
                $message =  " Pseudo : " . $_POST["pseudo"] . "
                email : " . $_POST["email"] . "
                Sujet : " . $_POST["sujet"] . "
                message : " . $_POST["message"] . "
                ";
                $retour = mail("contact@usmesport.com", $_POST["sujet"], $message, "From:recrutement@usmesport.com" . "\r\n" . "Reply-to:" . $_POST["email"]);
                if ($retour) {
                    echo "<p>L'email a bien été envoyé.</p>";
                }
            }
        ?>
        <?php
            include 'footer.php';
        ?>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script src="app.js"></script>
    </body>
</html>