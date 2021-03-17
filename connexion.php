<?php
    session_start();

    if(isset($_SESSION['connect'])){
        header('location: index.php');
    }


    require('src/connection.php');

    if (!empty($_POST['email']) && !empty($_POST['password'])){

        //VARIABLES
        $email = $_POST['email'];
        $password = $_POST['password'];
        $error = 1;

        //PASSWORD CRYPT
        $password = "aq1".sha1($password."1254")."25";

        //EMAIL AND PASSWORD MATCH
        $req = $db->prepare('SELECT * FROM users WHERE email= ?');
        $req->execute(array($email));

        while($user = $req->fetch()) {
            if($password == $user['password']) {
                $error = 0;
                $_SESSION['connect'] = 1;
                $_SESSION['pseudo'] = $user['pseudo'];
                header('location: connexion.php?success=1');
                exit();
            }
        }
        if($error == 1){
            header('location: connexion.php?error=1');
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design/default.css">
    <title>Homepage</title>
</head>
<body>
    <header class="txt-center">
        <h1>WELCOME</h1>
    </header>
    <main>

<!-- LOG IN -->
        <section>
            <table class="box-center">
            <!-- TITLE -->
                <thead>
                    <tr class="txt-center">
                        <th><h3>Connection</h3></th>
                    </tr>
                </thead>
                <tbody>
<?php
    if(isset($_GET['error'])){
        echo '<p class="error-msg box-center txt-center">nous ne pouvons pas vous authentifier.</p>';
    } else if(isset($_GET['success'])) {
        echo '<p class="succes-msg box-center txt-center">Vous êtes maintenant connecté.</p>';
    }
?>
                    <form action="connexion.php" method="post">
                        <tr  class="txt-center">
                            <td>
                                <input type="email" name="email" class="form-class" placeholder="Email" required>
                            </td>
                        </tr>
                        <tr  class="txt-center">
                            <td>
                                <input type="password" name="password" class="form-class" placeholder="******" required>
                            </td>
                        </tr>
                </tbody>
                <tfoot>
                    <tr class="txt-center">
                        <td>
                            <p><label><input type="checkbox" name="connect" checked> Automatic connection</p></label>
                        </td>
                    </tr>
                    <tr class="txt-center">
                        <td>
                            <button type="submit" id="logInBtn" name="login" class="box-center btn log-btn-mid pointer">Log in</button>
                        </td>
                    </tr>
                    </form>
<!-- btn separation --><tr><td><hr></td></tr>
                    <tr  class="txt-center">
                        <td>
                            <p id="signInProposition">Want to join us ?</p>
                            <a href="registration.php"><button type="submit" id="signInBtn" name="singin" class="box-center btn sign-btn-sml pointer">Sign in</button></a>
                        </td>
                    </tr>
                </tfoot>    
            </table>
        </section>
    </main>
    <!-- FOOTER -->
    <footer class="txt-center">
        <p>Timothé Gonin | &copy; 2021</p>
    </footer>
</body>
</html>