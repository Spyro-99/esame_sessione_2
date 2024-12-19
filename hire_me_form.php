<?php

require_once('Utility.php');

use MieClassi\Utility as UT;

$inviato = UT::richiestaHTTP("inviato");
$inviato = ($inviato == null || $inviato != 1) ? false : true;

$erroreNome = "";
$erroreCognome = "";
$erroreEmail = "";
$erroreTelefono = "";
$erroreOggetto = "";
$erroreTesto = "";

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
        $erroreNome = "Inserisci il tuo nome*";
    }

    if (($cognome != "") && UT::controllaRangeStringa($cognome, 0, 25)) {
        $clsErroreCognome = "";
    } else {
        $valido++;
        $clsErroreCognome = $clsErrore;
        $cognome = "Inserisci il tuo cognome*";
    }

    if (($email != "") && UT::controllaRangeStringa($email, 10, 100) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $clsErroreEmail = "";
    } else {
        $valido++;
        $clsErroreEmail = $clsErrore;
        $email = "Inserisci la tua e-mail*";
    }

    if (($telefono != "") || UT::controllaRangeStringa($telefono, 9, 15)) {
        $clsErroreTelefono = "";
    } else {
        $valido++;
        $clsErroreTelefono = $clsErrore;
        $telefono = "Inserisci il tuo telefono*";
    }

    if (($oggetto != "") && UT::controllaRangeStringa($oggetto, 4, 100)) {
        $clsErroreOggetto = "";
    } else {
        $valido++;
        $clsErroreOggetto = $clsErrore;
        $oggetto = "Inserisci l'oggetto della tua richiesta*";
    }

    if (($testo != "") && UT::controllaRangeStringa($testo, 10, 500)) {
        $clsErroreTesto = "";
    } else {
        $valido++;
        $clsErroreTesto = $clsErrore;
        $testo = "Inserisci il motivo della tua richiesta*";
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
    <!-- Funzione che richiama l'head e il css di questa pagina -->
    <?php
        include 'head.php';
        createHead("Hire me", "./CSS/scss_hire_me_form.min.css");
    ?>
<body>  
    <!-- Funzione che richiama il menù di navigazione del sito -->
    <?php include 'menuNav.php'; ?> 

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
                <div class="hire-me-input">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required value = "<?php echo $nome; ?>" placeholder = "(obbligatorio)"/>
                    <label for="nome" <?php echo $clsErroreNome; ?>><?php echo $erroreNome; ?></label>
                </div>
                <div class="hire-me-input">
                    <label for="cognome">Cognome</label>
                    <input type="text" id="cognome" name="cognome" required placeholder = "(obbligatorio)" />
                    <label for="cognome" <?php echo $clsErroreCognome; ?>><?php echo $cognome; ?></label>
                </div>
                <div class="hire-me-input">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required placeholder = "(obbligatorio)" />
                    <label for="email" <?php echo $clsErroreEmail; ?>><?php echo $email; ?></label>
                </div>
                <div class="hire-me-input">
                    <label for="tel">Telefono</label>
                    <input type="tel" id="telefono" name="telefono" maxlength="15" minlenght="9" required placeholder = "(obbligatorio)" />
                    <label for="tel" <?php echo $clsErroreTelefono; ?>><?php echo $telefono; ?></label>
                </div>
                <div class="hire-me-input">
                    <label for="oggetto">Oggetto</label>
                    <input type="text" id="oggetto" name="oggetto" required maxlength="100" placeholder="(obbligatorio)" />
                    <label for="oggetto" <?php echo $clsErroreOggetto; ?>><?php echo $oggetto; ?></label>
                </div>
                <div class="hire-me-input">
                    <label for="testo">Testo</label>
                    <textarea id="testo" name="testo" required maxlength="500" placeholder="(obbligatorio)"></textarea>
                    <label for="testo" <?php echo $clsErroreTesto; ?>><?php echo $testo; ?></label>
                <7div>
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
    
    <!-- Funzione che richiama il footer del sito -->
    <?php include 'footer.php'; ?>           
   
</body>

</html>