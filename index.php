<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="index">
    <link href="./CSS/scss_generale.min.css" rel="stylesheet">
    <link href="./CSS/scss_index.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Index</title>
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
    <footer> 
        <div class="footerContainer">
            <div class="socialIcons">                    
                <a href="http://www.linkdedin.com" title="clicca per accedere a linkdedin"><i class="fa-brands fa-linkedin"></i></a>
                <a href="http://www.instagram.com" title="clicca per accedere a instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="http://www.twitter.com" title="clicca per accedere a x_twitter"><i class="fa-brands fa-square-x-twitter"></i></a>                    
            </div>
            <div class="footerNav">
                <ul>
                    <li><a href="tel:+39.01110101010" title="clicca per chiamare">+39.01110101010</a></li>
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