<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/logo.png" />
    <title>Mansão dos Cats</title>
    <link rel="stylesheet" href="../assets/styles/index.css">
    <link rel="stylesheet" href="../assets/styles/slide.css">
</head>

<body>

    <?php include('../includes/header.php'); ?>

    <main>
        <section class="slider">
            <div class="slider-content">

                <input type="radio" name="btn-radio" id="radio1">
                <input type="radio" name="btn-radio" id="radio2">
                <input type="radio" name="btn-radio" id="radio3">
                <input type="radio" name="btn-radio" id="radio4">

                <div class="slide-box primeiro">
                    <img class="img-desktop" src="../assets/images/gatos.jpg" alt="slide1">
                </div>
                <div class="slide-box">
                    <img class="img-desktop" src="../assets/images/gatos2.png" alt="slide2">
                </div>
                <div class="slide-box">
                    <img class="img-desktop" src="../assets/images/gatos3.png" alt="slide3">
                </div>
                <div class="slide-box">
                    <img class="img-desktop" src="../assets/images/gatos4.png" alt="slide4">
                </div>

            </div>

            <div class="buttons">

                <a class="button" href="adotar.php">
                    <img src="../assets/images/pata.png">
                    <p>QUERO ADOTAR</p>
                </a>
                <a class="button" href="ajudar.php">
                    <img src="../assets/images/coracao.png">
                    <p>QUERO AJUDAR</p>
                </a>
                <a class="button" href="ong.php">
                    <img src="../assets/images/mansao.png" alt="Logo da Mansão dos Gatos">
                    <p>A ONG</p>
                </a>

            </div>

        </section>
    </main>

    <?php include('../includes/footer.php'); ?>

    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/slide.js"></script>
</body>

</html>