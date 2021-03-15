<?php
    require('src/connection.php');

    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])){
        
        //VARIABLES
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $pass_confirm = $_POST['password_confirm'];

        //IF PASSWORD = PASSWORD_CONFIRM
        if($password != $pass_confirm){
            header('location: index.php?error=1&pass=1');
        };

        //IF EMAIL EXIST
        $req = $db->prepare('SELECT count(*) as numberEmail FROM users WHERE email= ?');
        $req->execute(array($email));
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="design/default.css">
    <title>Registration</title>
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
                        <th><h3>Register</h3></th>
                    </tr>
                </thead>
                <tbody>
<?php
    if(isset($_GET['error'])){
        if(isset($_GET['pass']))
        echo '<p class="error-msg box-center txt-center">Les mots de pass ne sont pas identiques.</p>';
    }
?>
                    <form action="index.php" method="post">
                        <tr  class="txt-center">
                            <td>
                                <input type="text" name="pseudo" class="form-class" placeholder="Pseudo" required>
                            </td>
                        </tr>
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
                        <tr  class="txt-center">
                            <td>
                                <input type="password" name="password_confirm" class="form-class" placeholder="******" required>
                            </td>
                        </tr>
                    
                </tbody>
                <tfoot>
                    <tr  class="txt-center">
                        <td>
                        <button type="submit" id="signInBtn" name="singin" class="box-center btn sign-btn-mid pointer">Sign in</button>
                        </td>
                    </form>
                    </tr>
<!-- btn separation --><tr><td><hr></td></tr>
                    <tr  class="txt-center">
                        <td>
                            <p id="signInProposition">Want to log in ?</p>
                            <!-- <a href="#"><button type="submit" id="logInBtn" name="login" class="box-center btn log-btn-sml pointer">Log in</button></a> -->
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