<?php
require_once('Utility.php');

use MieClassi\Utility as UT;

$file = "fileJSON/works.json"; // File contenente card servizi 
$arr = json_decode(UT::leggiTesto($file)); // Conversione in array del file processato
foreach ($arr as $work) {
    echo  '<div class="card">
        <h3>'.$work->nameWork.'</h3>
        <p>'.$work->description.'</p>
    </div>';
}
?>