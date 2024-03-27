<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rafael</title>
    <link rel="stylesheet" href="style/reset.css"/>
    <link rel="stylesheet" href="style/global.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="https://github.com/rafaelnascimentodevs"></a>
                    <img src="public/assets/logotipooficial.png" alt="rafaelnascimentodev">
                </li>
                    <?php
                        print "Olá, ". $_SESSION['nome'];
                        print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
                    ?>
            </ul>
        </nav>        
    </header>
    <main>
        <section class="foto-section">
            <img src="public/assets/foto.png" alt="foto">
        </section>
        <section class="main-section">
            <div class="text-wrapper">
                <h2>Estudante dedicado de Análise e Desenvolvimento de Sistemas na Estácio de Sá em busca de oportunidades de<br/> estágio para aplicar e aprimorar habilidades. Motivado,<br/> proativo e pronto para aprender, estou entusiasmado em<br/> fazer parte de uma equipe inovadora.</h2>
            </div>
        </section>
        <section class="icons-section">
          <img src="public/assets/html5.png" alt="html">
          <img src="public/assets/Css3.png" alt="css">
        </section>
        <section class="icons-section1">
            <img src="public/assets/php.png" alt="php">
            <img src="public/assets/ASP.Net.png" alt="asp.net">
        </section>
            
    </main>
    <main class="bottom">
        <section class="bottom-section">
            <a href="https://github.com/rafaelnascimentodevs"><img src="public/assets/gith.svg" alt="github"></a>
        </section>
        <section class="bottom-section2">
            <a href="mailto:rafaelnascimenton65@gmail.com"><img src="public/assets/contat.svg" alt="contato"></a>
        </section>
    </main>
</body>
</html>