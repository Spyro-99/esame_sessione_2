<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hire_me_Form">
    <link href="./CSS/scss_generale.min.css" rel="stylesheet">
    <link href="./CSS/scss_hire_me_form.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>Hire_me_Form</title>
</head>
<body>    
    <nav class="topnav">
        <div class="logo">
            <a href="index.php" title="clicca per accedere all'index"><img src="./img/logo_personale_negativo.png" alt="logo" width="30"></a>
        </div>
        <ul> 
            <li><a href="Hire_me_Form.php" title="clicca per accedere al form">HIRE ME</a></li>  
            <li><a href="Portfolio.php" title="clicca per accedere al portfolio">PORTFOLIO</a></li>            
        </ul>
    </nav>
    <section class="Form">
        <h1>Contact me</h1>
        <p>
            Fill the form to request information
        </p>
        <img src="./img/Web_Development_Form.jpeg" alt="Work example" class="image">
        <form action="aggiungi_richiesta.php" method="post">
            
            <fieldset>
                <legend>Contattaci</legend>

                <label for="nome">Nome<span>*</span></label>
                <input type="text" id="nome" name="nome" placeholder="Nome" required>

                <label for="cognome">Cognome</label>
                <input type="text" id="cognome" name="cognome" placeholder="Cognome">

                <label for="email">E-mail<span>*</span></label>
                <input type="email" id="email" name="email" placeholder="E-mail" required>

                <label for="tel">Telefono</label>
                <input type="tel" id="tel" name="tel" placeholder="Telefono" maxlength="15">

                <label for="oggetto">Oggetto<span>*</span></label>
                <input type="text" id="oggetto" name="oggetto" placeholder="Oggetto" required maxlength="100">

                <label for="testo">Testo<span>*</span></label>
                <textarea id="testo" name="testo" placeholder="Testo" required maxlength="500"></textarea>

                <button type="submit" title="clicca per inviare il form">Submit</button>    
            </fieldset>
        </form>    
    </section>
    
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