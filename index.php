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
                    <form action="index.php" method="post">
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
                    </form>
                </tbody>
                <tfoot>
                    <tr  class="txt-center">
                        <td>
                            <button type="submit" id="logInBtn" name="login" class="box-center btn log-btn-mid pointer">Log in</button>
                        </td>
                    </tr>
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