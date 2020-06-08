<?php
session_start();
if(isset($_SESSION['arrayResult']) && isset($_POST['resultatPost'])){
    $_SESSION['resultPost'] = $_POST['resultatPost'];
    $validateArray = $_SESSION['arrayResult'];
    $resultatForPost = $_SESSION['resultPost'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
    <div class="pages">
        <ul class="nav-links">
            <li><a href="index.php?page=1">page 1</a></li>
            <li><a href="index.php?page=2">page 2</a></li>
            <li><a href="index.php?page=3">page 3</a></li>
            <li><a href="index.php?page=4">page 4</a></li>
            <li><a href="index.php?page=5">page 5</a></li>
            <li><a href="index.php?page=6">page 6</a></li>
        </ul>
    </div>

    </header>
    <main>
        <?php
        /* Page 1 _______________________________________________________________________*/
        if(!isset($_GET['page'])){
            $_GET['page'] = 1;
        }

        if(isset($_GET['page']) && $_GET['page'] == 1){
        ?>
            <div id="page1">
                <h2>Table de multiplication de 3</h2>
                <ul>
                    <?php
                    $multiple_3 = 3;
                    $resultat = $multiple_3;
                    for($i = 0; $resultat < $multiple_3 * 10; $i++){
                        $resultat = $multiple_3 * $i;
                    ?>
                        <li><?php echo $multiple_3 . ' X ' . $i . ' = ' . $resultat; ?></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        <?php
        }
        
        /* Page 2 _______________________________________________________________________________*/
        if(isset($_GET['page']) && $_GET['page'] == 2){
        ?>
            <div id="page2">
                <h2>Choisissez la table à réviser</h2>
                <?php $arrayNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); ?>
                <form action="" method="POST">
                    <select name="nombre">
                        <option value="<?php echo $arrayNumber[0] ?>"><?php echo $arrayNumber[0] ?></option >
                        <option value="<?php echo $arrayNumber[1] ?>"><?php echo $arrayNumber[1] ?></option >
                        <option value="<?php echo $arrayNumber[2] ?>"><?php echo $arrayNumber[2] ?></option >
                        <option value="<?php echo $arrayNumber[3] ?>"><?php echo $arrayNumber[3] ?></option >
                        <option value="<?php echo $arrayNumber[4] ?>"><?php echo $arrayNumber[4] ?></option >
                        <option value="<?php echo $arrayNumber[5] ?>"><?php echo $arrayNumber[5] ?></option >
                        <option value="<?php echo $arrayNumber[6] ?>"><?php echo $arrayNumber[6] ?></option >
                        <option value="<?php echo $arrayNumber[7] ?>"><?php echo $arrayNumber[7] ?></option >
                        <option value="<?php echo $arrayNumber[8] ?>"><?php echo $arrayNumber[8] ?></option >
                        <option value="<?php echo $arrayNumber[9] ?>"><?php echo $arrayNumber[9] ?></option >
                    </select>
                    <input type="submit" value="Valider">
                </form>

                <?php
                if(isset($_POST['nombre'])){
                    $nombre = $_POST['nombre'];
                ?>
                    <ul>
                        <?php
                        $resultat = $nombre;
                        for($i = 0; $resultat < $nombre * 10; $i++){
                            $resultat = $nombre * $i;
                            ?>
                            <li><?php echo $nombre . ' X ' . $i . ' = ' . $resultat; ?></li>
                        <?php
                        }
                        ?>
                    </ul>
                <?php
                }
                ?>
            </div>
        <?php
        }

        /* Page 3 _______________________________________________________________________________*/

        if(isset($_GET['page']) && $_GET['page'] == 3){
        ?>
            <div id="page3">
                <h2>Choisissez les tables à réviser</h2>
                <?php $arrayNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); ?>
                <form action="" method="POST">
                    <input type="checkbox" name="checkbox_id[]" value="<?php echo $arrayNumber[0] ?>"><?php echo $arrayNumber[0] ?></input >
                    <input type="checkbox" name="checkbox_id[]" value="<?php echo $arrayNumber[1] ?>"><?php echo $arrayNumber[1] ?></input >
                    <input type="checkbox" name="checkbox_id[]" value="<?php echo $arrayNumber[2] ?>"><?php echo $arrayNumber[2] ?></input >
                    <input type="checkbox" name="checkbox_id[]" value="<?php echo $arrayNumber[3] ?>"><?php echo $arrayNumber[3] ?></input >
                    <input type="checkbox" name="checkbox_id[]" value="<?php echo $arrayNumber[4] ?>"><?php echo $arrayNumber[4] ?></input >
                    <input type="checkbox" name="checkbox_id[]" value="<?php echo $arrayNumber[5] ?>"><?php echo $arrayNumber[5] ?></input >
                    <input type="checkbox" name="checkbox_id[]" value="<?php echo $arrayNumber[6] ?>"><?php echo $arrayNumber[6] ?></input >
                    <input type="checkbox" name="checkbox_id[]" value="<?php echo $arrayNumber[7] ?>"><?php echo $arrayNumber[7] ?></input >
                    <input type="checkbox" name="checkbox_id[]" value="<?php echo $arrayNumber[8] ?>"><?php echo $arrayNumber[8] ?></input >
                    <input type="checkbox" name="checkbox_id[]" value="<?php echo $arrayNumber[9] ?>"><?php echo $arrayNumber[9] ?></input >
                    <input type="submit" value="Valider">
                </form>

                <?php
                if(isset($_POST['checkbox_id'])){
                    $checkbox = $_POST['checkbox_id'];
                    $totalCheckbox = count($checkbox);
                    ?>
                    <div>
                        <?php
                        for($i = 0; $i < $totalCheckbox; $i++){
                        ?>
                            <ul>
                                <li>Table de multiplication de <?php echo $checkbox[$i] ?></li>
                                <?php
                                $resultat = $checkbox[$i];
                                for($n = 0;$resultat < $checkbox[$i] * 10; $n++){
                                    $resultat = $checkbox[$i] * $n;
                                    ?>
                                    <li><?php echo $checkbox[$i] . ' X ' . $n . ' = ' . $resultat; ?></li>
                                <?php    
                                }
                                ?>
                            </ul>
                        <?php
                        }
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        }

        /* Page 4 _______________________________________________________________________________*/
        if(isset($_GET['page']) && $_GET['page'] == 4){
            $arrayNumber = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
            ?>
            <div id="page4">
                <h2>Réviser vos tables de multiplication</h2>
                <p>Selectionner une table de multiplication et tester vos connaissances :</p>
                <form action="session.php" method="POST">
                    <ul>
                        <input type="radio" name="numberRadio" value="<?php echo $arrayNumber[0] ?>"> <label><?php echo $arrayNumber[0] ?></label>
                        <input type="radio" name="numberRadio" value="<?php echo $arrayNumber[1] ?>"> <label><?php echo $arrayNumber[1] ?></label>
                        <input type="radio" name="numberRadio" value="<?php echo $arrayNumber[2] ?>"> <label><?php echo $arrayNumber[2] ?></label>
                        <input type="radio" name="numberRadio" value="<?php echo $arrayNumber[3] ?>"> <label><?php echo $arrayNumber[3] ?></label>
                        <input type="radio" name="numberRadio" value="<?php echo $arrayNumber[4] ?>"> <label><?php echo $arrayNumber[4] ?></label>
                        <input type="radio" name="numberRadio" value="<?php echo $arrayNumber[5] ?>"> <label><?php echo $arrayNumber[5] ?></label>
                        <input type="radio" name="numberRadio" value="<?php echo $arrayNumber[6] ?>"> <label><?php echo $arrayNumber[6] ?></label>
                        <input type="radio" name="numberRadio" value="<?php echo $arrayNumber[7] ?>"> <label><?php echo $arrayNumber[7] ?></label>
                        <input type="radio" name="numberRadio" value="<?php echo $arrayNumber[8] ?>"> <label><?php echo $arrayNumber[8] ?></label>
                        <input type="radio" name="numberRadio" value="<?php echo $arrayNumber[9] ?>"> <label><?php echo $arrayNumber[9] ?></label>
                        <input type="submit" value="Valider" name="reqAjax">
                    </ul>
                </form>
                <?php
                if(isset($_SESSION['numberRadio']) && isset($_SESSION['random'])){
                    $numberRadio = $_SESSION['numberRadio'];
                    $randomNumber = $_SESSION['random'];
                    ?>
                    <form action="" method="POST">
                        <p><?php echo $numberRadio ?> X <?php echo $randomNumber ?> = <input type="text" name="resultat" placeholder="Votre réponse"></input></p>
                        <input type="submit" value="Valider">                    
                    </form>
                    <?php

                    if(isset($_POST['resultat'])){
                        $resultat = $_POST['resultat'];
                        $resultValid = $randomNumber * $numberRadio;
                        if($resultat !== '' && $resultValid == $resultat){
                            echo '<p>Bien jouer, la réponse étais bien : ' . htmlspecialchars($resultat) . '</p>';
                        }
                        else{
                            echo '<p>Raté, revisé vos tables de multiplication.</p>';
                        }
                    }
                }
                ?>
            </div>
            <?php
        }

        /* Page 5 _______________________________________________________________________________*/
        if(isset($_GET['page']) && $_GET['page'] == 5){
            ?>
            <div id="page5">
                <h2>Super mode révisons</h2>
                <p>Réponder au cinq questions suivantes :</p>
                <form action="" method="POST">
                    <?php
                    $array = array();
                    for($i = 0; $i < 5; $i++){
                        $randomNumberFor1 = rand(0, 10);
                        $randomNumberFor2 = rand(0, 10);
                        $resultat = $randomNumberFor1 * $randomNumberFor2;
                        array_push($array, $resultat);
                        ?>
                        <p>Question <?php echo $i + 1 . ' : ' . $randomNumberFor1 ?> X <?php echo $randomNumberFor2 ?> = <input type="text" name="resultatPost[]" placeholder="Votre réponse"></input></p>
                        <?php
                    }
                    $_SESSION['arrayResult'] = $array;
                    ?>
                    <input type="submit" value="Valider">
                </form>
                <?php
                if(isset($validateArray) && isset($resultatForPost)){
                    $resultatCount = count($resultatForPost);
                    $correct = 0;
                    for($i = 0; $i < $resultatCount; $i++){
                        if($resultatForPost[$i] !== '' && $validateArray[$i] == $resultatForPost[$i]){
                            $correct++;
                        }
                    }
                    echo '<p>Vous avez ' . $correct . ' réponse correct.</p>';
                }
            ?>
            </div>
        <?php
        }

        /* Page 6 _______________________________________________________________________________*/
        if(isset($_GET['page']) && $_GET['page'] == 6){

            ?>
            <div id="page6">
                <h2>Super mode révisons (AJAX version)</h2>
                <p>Répondez au cinq questions suivantes :</p>
                <form action="" method="POST" id="reqAjaxSubmit">
                    <?php
                    $array = array();
                    for($i = 0; $i < 5; $i++){
                        $randomNumberFor1 = rand(0, 10);
                        $randomNumberFor2 = rand(0, 10);
                        $resultat = $randomNumberFor1 * $randomNumberFor2;
                        array_push($array, $resultat);
                        ?>
                        <p>Question <?php echo $i + 1 . ' : ' . $randomNumberFor1 ?> X <?php echo $randomNumberFor2 ?> = <input type="text" name="resultatPost[]" placeholder="Votre réponse"></input></p>
                        <?php
                    }
                    $_SESSION['arrayResult'] = $array;

                    ?>
                    <input type="submit" value="Valider">
                </form> 
                <?php
            ?>
            </div>
        <?php
        }  
        ?>
    </main>
    <script src="script.js"></script>
</body>
</html>