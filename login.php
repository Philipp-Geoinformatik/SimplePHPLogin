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
    <html>

    <head>
        <title>Login</title>
    </head>

    <body>

        <?php 
if(isset($errorMessage)) {
 echo $errorMessage;
}
?>
            <?php if ($bool): ?>

                <p>sdfsdfsdfsdfsdf</p>
                <p>sdfsdfsdfsdfsdf</p>
                <p>sdfsdfsdfsdfsdf</p>
                <p>sdfsdfsdfsdfsdf</p>

                <?php else: ?>

                    <?php endif ?>



                        <form action="?login=1" method="post">
                            E-Mail:
                            <br>
                            <input type="email" size="40" maxlength="250" name="email">
                            <br>
                            <br> Dein Passwort:
                            <br>
                            <input type="password" size="40" maxlength="250" name="passwort">
                            <br>

                            <input type="submit" value="Abschicken">
                        </form>
    </body>

    </html>
