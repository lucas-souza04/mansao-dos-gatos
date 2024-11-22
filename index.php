<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/logo.png" />
    <title>Mansão dos Cats</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/slide.css">
</head>

<body>
    <header>
        <div class="top-bar">
            <img src="assets/logo.png" alt="Logo" class="logo">
            <h2>www.mansaodoscats.org.br</h2>
            <div class="social-icons">
                <a href="https://www.instagram.com/mansaodoscats/" target="_blank"><img src="assets/instagram.png"></a>
                <a href="https://www.facebook.com/mansaodoscats?locale=pt_BR" target="_blank"><img src="assets/facebook.png"></a>
                <a href="https://wa.me/5511982590004" target="_blank"><img src="assets/whatsapp.png"></a>
            </div>
        </div>
    </header>

    <main>
        <section class="slider">
            <div class="slider-content">

                <input type="radio" name="btn-radio" id="radio1">
                <input type="radio" name="btn-radio" id="radio2">
                <input type="radio" name="btn-radio" id="radio3">
                <input type="radio" name="btn-radio" id="radio4">

                <div class="slide-box primeiro">
                    <img class="img-desktop" src="assets/gatos.jpg" alt="slide1">
                </div>
                <div class="slide-box">
                    <img class="img-desktop" src="assets/gatos2.png" alt="slide2">
                </div>
                <div class="slide-box">
                    <img class="img-desktop" src="assets/gatos3.png" alt="slide3">
                </div>
                <div class="slide-box">
                    <img class="img-desktop" src="assets/gatos4.png" alt="slide4">
                </div>

                <div class="nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>

                <div class="nav-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>

            </div>

            <div class="buttons">

                <a class="button" href="adotar.php">
                    <img src="assets/pata.png">
                    <p>QUERO ADOTAR</p>
                </a>
                <a class="button" href="ajudar.php">
                    <img src="assets/coracao.png">
                    <p>QUERO AJUDAR</p>
                </a>
                <a class="button" href="ong.php">
                    <img src="assets/mansao.png" alt="Logo da Mansão dos Gatos">
                    <p>A ONG</p>
                </a>

            </div>

        </section>
        <section class="info">
            <div class="top-section">
                <div class="text-section">
                    <h2>Mansão dos Cats</h2>
                    <div class="description">
                        <p>A Mansão dos Cats busca lares para gatos encontrados abandonados na Grande São Paulo<br>e
                            também trabalha para conscientizar as pessoas sobre a importância da castração e
                            posse<br>responsável. Também, resgata, trata, castra e doa gatinhos para lares seguros em
                            São Paulo.</p>
                    </div>
                </div>
                <div class="menu-section">
                    <h3>Menu</h3>
                    <div class="menu-buttons">
                        <a href="ong.php" class="menu-button">A ONG</a>
                        <a href="adotar.php" class="menu-button">Quero adotar</a>
                        <a href="ajudar.php" class="menu-button">Quero ajudar</a>
                    </div>
                </div>
            </div>
            <p class="copyright"><img src="assets/copyright.png" alt="Copyright">2024 - Mansão dos Cats. Todos os
                direitos reservados.</p>
        </section>
    </main>
    <script src="script.js"></script>
    <script src="slide.js"></script>
</body>

</html>