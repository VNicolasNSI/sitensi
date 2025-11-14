<?php 
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=nsilps', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">    
        <link rel="stylesheet" href="./fichiers.css">
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
            <section class="dossier">
                <article class="titre">
                    <label>Première ---</label>
                </article>
                <section class="fleche">
                    <article class="parties">
                        <label>Web</label>
                        <br>
                        <label><a class="noir" href="./stockage/Premiere/LesbalisesHTML.pdf">test</a></label>
                    </article>
                    <article>
                        <img src="../../images/fleche.png" width="10%">
                        <br>
                        <a href="./stockage/Premiere/LesbalisesHTML.pdf" download="LesbalisesHTML.pdf"><img src="../../images/telecharger.png" width="5%">
                        </a>
                    </article>
                </section>
                    <br>
                <section class="fleche">
                    <article class="parties">
                        <label>Formulaires</label>
                    </article>
                </section>
                    <br>
                <section class="fleche">
                    <article class="parties">
                        <label>Python</label>
                    </article>
                </section>
                    <br>
                <section class="fleche">
                    <article class="parties">
                        <label>binaire</label>  
                    </article>
                </section>
                </section>
            </section>   
        </section>

        <section class="casedash2">
            <section>
                <section>

                </section>
            </section>    
        </section>
    </body>


</html>