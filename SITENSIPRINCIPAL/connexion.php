<!doctype html>
<html>

    <?php 
    session_start();

    try {
        $bdd = new PDO('mysql:host=sql7.freesqldatabase.com;dbname=sql7800701', 'sql7800701', 'bfhPTiR56K');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    if (isset($_SESSION['token'])) {
        $session=$bdd->prepare('SELECT token FROM utilisateur WHERE token=:token');
        $session->execute([
            'token'=> $_SESSION['token'],
        ]);

        $vsession=$session->fetch();

        if ($vsession['0']>=10000000) {
            if ($vsession['0'] == $_SESSION['token']) {
                echo "Connexion directe";
                header('Location: ./dashboard/eleves/index.php');
                exit();
            }
            else {
                echo "Veuyez vous connecter";
            }
        }
    }
    ?>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="accueil.css">
        <title>NSILPS - Connexion</title>
    </head>
    <body>
         <header>
            <nav>
                <ul>
                    <label>
                        <img src="images/nsi.png" width="13%">
                    </label>
                    <label class="center">
                        NSILPS > Connexion
                    </label>
                    <label>
                        <a href="index.html">Retour</a>
                    </label>
                </ul>
            </nav>
        </header>

        <section class="accueildeux">
            <form method="post" action="traitement-connexion.php" class="form">
                <label class="interform">Se connecter</label>
                <article class="interform">
                    <label>Mail : </label>
                    <input type="email" name="mail"/>
                </article>
                <article class="interform">
                    <label>Mot de passe : </label>
                    <input type="password" name="mdp"/>
                </article>
                <article class="interformsubmit">
                    <input class="submit" type="submit">
                </article>
                <article class="interform">
                    <label>
                        Pas de compte ? <a href="inscription.html">S'inscrire</a>
                    </label>
                </article>
            </form>
        </section>



</html>