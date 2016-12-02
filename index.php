<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=my_login_db', 'root', '');
 
if(isset($_GET['login'])) {
     $email = $_POST['email'];
     $passwort = $_POST['passwort'];
     $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
     $result = $statement->execute(array('email' => $email));
     $user = $statement->fetch();

     //Überprüfung des Passworts
     if ($user !== false && password_verify($passwort, $user['passwort'])) { 
         $_SESSION['userid'] = $user['id'];
         $bool = true;
        
         
           // header("Location: geheim.php");

            //exit();
             //die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>');
         } else {
            $errorMessage = "E-Mail oder Passwort war ungültig<br>";
     }
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>


        <!-- Custom CSS -->
        <link rel="stylesheet" href="main.css">
    </head>

    <body>
        <!-- static login (in php dynamical)-->
        <div class="login-panel">
            <form action="?login=1" method="post">
                E-Mail:
                <br>
                <input type="email" style="width:100%;" maxlength="250" name="email">
                <br>
                <br> Dein Passwort:
                <br>
                <input type="password" style="width:100%;" maxlength="250" name="passwort">
                <br>
                <input type="submit" value="Abschicken">
            </form>

            <div id="show-login">
                <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
            </div>
        </div>

        <div class="page-header">
            <div class="full-width-img-wrapper">
                <img src="img/adsLogoFullName.png" id="adsLogoFullName"></div>
        </div>
        <!-- Navigationbar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="http://www.airbusdefenceandspace.com" target="_blank">
                        <img alt="Brand" src="img/adsLogo.png" class="airbus-logo">
                    </a>
                </div>
            </div>
        </nav>
        <!-- Navigationbar -->
        <div class="container-fluid">

            <?php if ($bool): ?>

                <p>sdfsdfsdfsdfsdf</p>
                <p>sdfsdfsdfsdfsdf</p>
                <p>sdfsdfsdfsdfsdf</p>
                <p>sdfsdfsdfsdfsdf</p>

                <?php else: ?>

                    <?php endif ?>


                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
                        <p>hier stehen viele tolle sachen!</p>
        </div>
        <!-- Container END -->
    </body>

    </html>
