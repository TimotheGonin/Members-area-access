<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/default.css">
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
                <thead>
                    <tr class="txt-center">
                        <th><h3>Connection</h3></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="index.php" method="post">
                        <!-- <tr  class="txt-center">
                            <td>
                                <label for="email">Email</label>
                            </td>
                        </tr> -->
                        <tr  class="txt-center">
                            <td>
                                <input type="text" name="email" placeholder="Email">
                            </td>
                        </tr>
                        <!-- <tr  class="txt-center">
                            <td>
                                <label for="password">Password</label>
                            </td>
                        </tr> -->
                        <tr  class="txt-center">
                            <td>
                                <input type="password" name="password" placeholder="Password">
                            </td>
                        </tr>
                    </form>
                </tbody>
                <tfoot>
                    <tr  class="txt-center">
                        <td>
                            <button type="submit" id="logInBtn" class="box-center btn">Log in</button>
                        </td>
                    </tr>
<!-- btn separation --><tr><td><hr></td></tr>
                    <tr  class="txt-center">
                        <td>
                            <button type="submit" id="signInBtn" class="box-center btn">Sign in</button>
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