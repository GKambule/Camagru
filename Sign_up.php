

<html>
    <head>
        <title>SNAPER</title>
        <link rel ="stylesheet" type="text/css" href="Styling.css">
    </head>
    <body>
        <center><h1>SnapeR</h1></center>
        <hr>
        <form action="./Configurations/DataBase.php" method="post">
            <div.top>
            <center>
            Enter First Name: <input type="text" name="firstname" required>
            <br>
            Enter Last Name: <input type="text" name="lastname" required>
            <br>
            Enter Password: <input type="text" name="password" required>
            <br>
            Conform Password: <input type="text" name="c_password" required>
            <br>
            Enter Email: <input type="email" name="Email" id="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            Confirm Email: <input type="email" name="c_Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            <br>
            <hr>
            <input type="submit" name="submit" value="submit">
            </center>
            </div.top>
        </form>
        <?php
        if (isset($_GET['msg']))
        echo "User for that Email already exists"; 
        ?>
    </body>
</html>