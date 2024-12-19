<?php
    require_once('Utility.php');

    use MieClassi\Utility as UT;

    $file = "fileJSON/portfolioCards.json"; // File contenente card dei lavori mostrati
    $portfolio = json_decode(UT::leggiTesto($file));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="portfolio">
    <link href="./CSS/scss_portfolio.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Portfolio</title>
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