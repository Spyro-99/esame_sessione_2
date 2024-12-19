<!DOCTYPE html>
<html lang="en">
    <?php
        include 'head.php';
        createHead("Index", "./CSS/scss_index.min.css");
    ?>
<body>  
    <!-- Funzione che richiama il menù di navigazione del sito -->
    <?php include 'menuNav.php'; ?> 
    
    <section class="riga">
        <div class="riquadro">
            <div class="main-card">
                <h2>Aboute me</h2>
                <p>
                   Hello,
                   I'm Erik and i'm a <b>Graphic Designer</b> 
                   and a <b>Full Stack Developer</b> 
                </p>
            </div>
        </div>
    </section>
<hr>
    <h4>My services</h4> 
    <div class="card-container">
        <?php
            require('worklist.php') // File che contiene le card con i servizi che svolgo
        ?>
     </div>
    
    <!-- Funzione che richiama il footer del sito -->
    <?php include 'footer.php'; ?> 
   
</body>
</html>