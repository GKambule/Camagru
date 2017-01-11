<html>
    <head>
        <title>SNAPER</title>
        <link rel ="stylesheet" type="text/css" href="Styling.css">
    </head>
    <body>
        <center><h1>SnapeR</h1></center>
        <hr>
            <div class="top">
                <form action="actual.php" method="post">
                    Enter Email: </Email:><input type="email" name="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    <br>
                    Password: <input type="password" name="PassWord" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    <br>
                    <input type="submit" name="sign_in" value="sign_in">
                </form>
                <form action="Sign_up.php" method="post">
                    <input type="submit" name="sign_up" value="sign_up">
                    <br>
                    <a href="F_Password.php">forgotten password</a>
                </form>
        </div.top>
    </body>
</html>