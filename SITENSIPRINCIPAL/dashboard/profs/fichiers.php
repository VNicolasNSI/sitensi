<?php 
session_start();

try {
    $bdd = new PDO('mysql:host=sql7.freesqldatabase.com;dbname=sql7800701', 'sql7800701', 'bfhPTiR56K');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">    
        <link rel="stylesheet" href="../../Accueil/accueil.css">
        <title>NSILPS - Dashboard professeurs</title>
    </head>
    <body class="bodydash">
        <header>
            <nav class="navdash">
                <ul>
                    <label>
                        <img src="../../images/nsi.png" width="13%">
                    </label>
                    <label class="center">
                        NSILPS - Dashboard professeurs
                    </label>
                    <label>
                        <a class="adash" href="../../index.html">Accueil</a>&emsp;&emsp;
                    </label>
                </ul>
            </nav>
        </header>
        <aside>
            <article class="espaceaside">
                <label>Navigation</label>
            </article>
            <article class="espaceaside">
                <a class="adash" href="menu.php">Menu</a>
                <hr>
                <a class="adash" href="classes.html">Mes classes</a>
            </article>
            <article class="espaceaside">
                <a class="adash" href="leçons.html">Mes leçons</a>
            </article>
            <article class="espaceaside">    
                <a class="adash" href="fichiers.html">Fichiers</a>
            </article>    
            <article class="espaceaside">
                <a class="adash" href="quiz.html">Quiz</a>
            </article>
            <article class="espaceaside">
                <a class="adash" href="statistiques.html">Stats</a>
            </article>     
        </aside>

        <section class="casedash">
            <section>
                <label> 
                    <?php
            $res = fopen('./stockage/LesbalisesHTML.pdf', 'rb');
            
            /*Tant que la fin du fichier n'est pas atteninte, c'est-à-dire
             *tant que feof() renvoie FALSE (= tant que !feof() renvoie TRUE)
             *on echo une nouvelle ligne du fichier*/
            while(!feof($res)){
                $ligne = fgets($res);
                echo $ligne.'<br>';
            }
                    ?>
                </label>
            </section>    
        </section>

    </body>


</html>