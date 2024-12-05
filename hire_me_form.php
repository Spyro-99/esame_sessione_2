<?php

require_once('Utility.php');

use MieClassi\Utility as UT;

$inviato = UT::richiestaHTTP("inviato");
$inviato = ($inviato == null || $inviato != 1) ? false : true;



if ($inviato) {
    $valido = 0;
    // Modalità per recuperare i dati 
    $nome = UT::richiestaHTTP("nome");
    $cognome = UT::richiestaHTTP("cognome");
    $email = UT::richiestaHTTP("email");
    $telefono = UT::richiestaHTTP("telefono");
    $oggetto = UT::richiestaHTTP("oggetto");
    $testo = UT::richiestaHTTP("testo");

    $clsErrore = ' class="errore" ';


    // Validazione dei dati contenuti nel form
    if (($nome != "") && (strlen($nome) <= 25)) {
        $clsErroreNome = "";
    } else {
        $valido++;
        $clsErroreNome = $clsErrore;
        $nome = "";
    }

    if (($cognome != "") && UT::controllaRangeStringa($cognome, 0, 25)) {
        $clsErroreCognome = "";
    } else {
        $valido++;
        $clsErroreCognome = $clsErrore;
        $cognome = "";
    }

    if (($email != "") && UT::controllaRangeStringa($email, 10, 100) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $clsErroreEmail = "";
    } else {
        $valido++;
        $clsErroreEmail = $clsErrore;
        $email = "";
    }

    if (($telefono == "") || UT::controllaRangeStringa($telefono, 5, 20)) {
        $clsErroreTelefono = "";
    } else {
        $valido++;
        $clsErroreTelefono = $clsErrore;
        $telefono = "";
    }

    if (($oggetto != "") && UT::controllaRangeStringa($oggetto, 4, 100)) {
        $clsErroreOggetto = "";
    } else {
        $valido++;
        $clsErroreOggetto = $clsErrore;
        $oggetto = "";
    }

    if (($testo != "") && UT::controllaRangeStringa($testo, 10, 500)) {
        $clsErroreTesto = "";
    } else {
        $valido++;
        $clsErroreTesto = $clsErrore;
        $testo = "";
    }

    $inviato = ($valido == 0) ? true : false;
} else {
    $nome = "";
    $cognome = "";
    $email = "";
    $telefono = "";
    $argomento = "";
    $oggetto = "";
    $testo = "";

    $clsErroreNome = "";
    $clsErroreCognome = "";
    $clsErroreEmail = "";
    $clsErroreTelefono = "";
    $clsErroreArgomento = "";
    $clsErroreOggetto = "";
    $clsErroreTesto = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="hire_me_form">
    <link href="./CSS/scss_generale.min.css" rel="stylesheet">
    <link href="./CSS/scss_hire_me_form.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>hire_me_form</title>
</head>
<body>  
    <nav class="topnav">
        <div class="logo">
            <a href="index.php" title="clicca per accedere all'index"><img src="./img/logo_personale_negativo.png" alt="logo" width="30"></a>
        </div>
        <ul> 
            <li><a href="hire_me_form.php" title="clicca per accedere al form">HIRE ME</a></li>  
            <li><a href="portfolio.php" title="clicca per accedere al portfolio">PORTFOLIO</a></li>            
        </ul>
    </nav>
    <?php
    if (!$inviato) {
    ?>      
        <section class="Form">
            <h1>Contact me</h1>
            <p>
                Fill the form to request information
            </p>
            <img src="./img/Web_Development_Form.jpeg" alt="Work example" class="image">
            <form action="hire_me_form.php?inviato=1" method="POST" novalidate>
                <fieldset>
                    <legend>Contattaci</legend>

                    <label for="nome" <?php echo $clsErroreNome; ?>>Nome</label>
                    <input type="text" id="nome" name="nome" required value="<?php echo $nome; ?>" />

                    <label for="cognome" <?php echo $clsErroreCognome; ?>>Cognome</label>
                    <input type="text" id="cognome" name="cognome" value="<?php echo $cognome; ?>" />

                    <label for="email" <?php echo $clsErroreEmail; ?>>E-mail</label>
                    <input type="email" id="email" name="email" required value="<?php echo $email; ?>" />

                    <label for="tel" <?php echo $clsErroreTelefono; ?>>Telefono</label>
                    <input type="tel" id="telefono name="telefono" maxlength="15" value="<?php echo $telefono; ?>" />

                    <label for="oggetto" <?php echo $clsErroreOggetto; ?>>Oggetto</label>
                    <input type="text" id="oggetto" name="oggetto" required maxlength="100" value="<?php echo $oggetto; ?>" />

                    <label for="testo" <?php echo $clsErroreTesto; ?>>Testo</label>
                    <textarea id="testo" name="testo" required maxlength="500"><?php echo $testo; ?></textarea>

                    <button type="submit" title="clicca per inviare il form">Submit</button>    
                </fieldset>
            </form>    
        </section>
    <?php
    }else{
        // Codice php per pagina di invio modulo richiesta contatto
        $str = "<strong>Nome:</strong> %s<br>" .
            "<strong>Cognome:</strong>: %s<br>" .
            "<strong>E-Mail:</strong> %s<br>" .
            "<strong>Telefono:</strong> %s<br>" .
            "<strong>Oggetto:</strong> %s<br>" .
            "<strong>Testo:</strong><br>%s<br>";
        $str = sprintf($str, $nome, $cognome, $email, $telefono, $oggetto, $testo);
        echo '<span style="color: whitesmoke">';
        echo "<h1>Thank you for contacting us</h1>Here is the summary of the data you entered:<br><br>$str";

        $str = str_replace('<br>', chr(10), $str);

        $file = 'ModuloRichiestaContatto.txt';

        $str = str_repeat("-", 30) . chr(10) . $str . chr(10) . str_repeat("-", 30) . chr(10);
        $rit = UT::scriviTesto($file, $str);

        if ($rit) {
            echo "<br>" . str_repeat("-", 30) . "<br>Modulo inviato correttamente<br>";
        } else {
            echo "<br>" . str_repeat("-", 30) . "<br>Problema nell'invio del modulo<br>";
        }
    }
    ?>
    
    <footer> 
        <div class="footerContainer">
            <div class="socialIcons">                    
                <a href="http://www.linkdedin.com" title="clicca per accedere a linkdedin"><i class="fa-brands fa-linkedin"></i></a>
                <a href="http://www.instagram.com" title="clicca per accedere a instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="http://www.twitter.com" title="clicca per accedere a x_twitter"><i class="fa-brands fa-square-x-twitter"></i></a>                    
            </div>
            <div class="footerNav">
                <ul>
                    <li><a href="tel:+39011.10101010" title="clicca per chiamare">+39 011.10101010</a><br></li>
                    <li><a href="mailto:miamail@email.it" title="clicca per mandare una e-mail">miamail@email.it</a></li>
                </ul>  
            </div>     
            <div class="footerBottom">
                <p>Copyright &copy; 2024; Designed by <span class="designer">Erik Pontecorvi</span></p>
                
            </div>  
        </div>
                                       
                      
    </footer>  
          
   
</body>

</html>