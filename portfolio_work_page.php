<?php
    require_once('Utility.php');
    $id = $_GET["workId"];


    use MieClassi\Utility as UT;

    $file = "fileJSON/portfolioCards.json"; // File contenente card dei lavori mostrati
    $arr = json_decode(UT::leggiTesto($file));
    $selezionato = UT::trovaDaId($id, $arr)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="portfolio_work_page">
    <link href="./CSS/scss_portfolio_work_page.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>portfolio_work_page</title>
</head>
<body>    
    <!-- Funzione che richiama il menù di navigazione del sito -->
    <?php include 'menuNav.php'; ?> 

    <div class="image-container">
        
        <img src="./img/Portfolio_work_img.jpg" alt="Work title" class="image">
        <div class="text-container">
            <?php // Codice utilizzato per creare pagina dei lavori singoli in modo dinamico
                echo "<h1>".$selezionato->heading."</h1> 
                <p>".$selezionato->description."</p>";
            ?>
        </div>
    </div>
    <hr> 
    <h2>My services</h2>   
    <div class="card-container">
        <?php
            require('worklist.php') // File che contiene le card con i servizi che svolgo
        ?>
    </div>
    
    <!-- Funzione che richiama il footer del sito -->
    <?php include 'footer.php'; ?>          
   
</body>
</html>