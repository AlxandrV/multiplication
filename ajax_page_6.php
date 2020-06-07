<?php
session_start();
echo 'coucou';

$resultatPost = $_POST;
$resultatValid = $_SESSION['arrayResult'];
$resultatCount = count($resultatValid);

var_dump($_POST);                    
var_dump($resultatValid);
var_dump($resultatCount);

$correct = 0;
for($i = 0; $i < $resultatCount; $i++){
    if($resultatPost['resultatPost'][$i] !== '' && $resultatValid[$i] == $resultatPost['resultatPost'][$i]){
        $correct++;
    }
}
echo '<p id="reponsePost">Vous avez ' . $correct . ' réponse correct.</p>';
?>
