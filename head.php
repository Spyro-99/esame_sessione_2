<!-- Funzione head generale sito -->
<?php
    function createHead($title, $cssLink) {
        echo '<head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="./CSS/scss_generale.min.css" rel="stylesheet">
            <link href="'.$cssLink.'" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
            crossorigin="anonymous" referrerpolicy="no-referrer">
            <title>'.$title.'</title>
            </head>';
    }
?>
