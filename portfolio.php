<?php
    require_once('Utility.php');

    use MieClassi\Utility as UT;

    $file = "fileJSON/portfolioCards.json"; // File contenente card dei lavori mostrati
    $portfolio = json_decode(UT::leggiTesto($file));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Funzione che richiama l'head e il css di questa pagina -->
    <?php
        include 'head.php';
        createHead("Portfolio", "./CSS/scss_portfolio.min.css");
    ?>
</head>
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
                    echo $work->id;
                    echo  "<div class='card'>
                        <img src='./img/webpage_creation_portfolio.png' alt='work-image'>
                        <h2>".$work->heading."</h2>       
                        <a href='portfolio_work_page.php?workId=".$work->id."' class='btn' title='clicca per accedere alla pagina ".$work->heading."'>
                            <button type='submit'>Read More</button>
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