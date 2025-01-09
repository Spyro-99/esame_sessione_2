<?php
    require_once('Utility.php');

    use MieClassi\Utility as UT;

    $file = "fileJSON/portfolioCards.json"; // File contenente card dei lavori mostrati
    $portfolio = json_decode(UT::leggiTesto($file));
?>
<!DOCTYPE html>
<html lang="en">
    <!-- Funzione che richiama l'head e il css di questa pagina -->
    <?php
        include 'head.php';
        createHead("Portfolio", "./CSS/scss_portfolio.min.css");
    ?>
<body>    
    <!-- Funzione che richiama il menù di navigazione del sito -->
    <?php include 'menuNav.php'; ?> 

    <header>
        <h1>My Portfolio</h1>
    </header>
    <section class="portfolio">
        <div class="card-container">
            <?php
                foreach ($portfolio as $work) {
                    $heading = htmlspecialchars($work->heading, ENT_QUOTES, 'UTF-8');
                    $workId = htmlspecialchars($work->id, ENT_QUOTES, 'UTF-8');
                    echo  "<div class='card'>
                        <img src='./img/webpage_creation_portfolio.png' alt='work-image'>
                        <h2>$heading</h2>       
                        <a href='portfolio_work_page.php?workId=$workId' class='btn' title='Clicca per accedere alla pagina $heading'>
                            Read more
                        </a>             
                    </div>";
                }
            ?>
        </div>
    </section>
    
    <!-- Funzione che richiama il footer del sito -->
    <?php include 'footer.php'; ?> 
   
</body>
</html>