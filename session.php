<?php
session_start();
if(isset($_POST['numberRadio'])){
    $_SESSION['numberRadio'] = $_POST['numberRadio'];
    $_SESSION['random'] = rand(0, 10);
    header('Location: index.php?page=4');
}
?>