<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sutairu.css">
    <title>Login Form</title>
</head>
<body background="https://wallpapercave.com/wp/wp2754864.jpg">
    <div class="box_input">
        <div id="remote">
            <!-- <a href="mokuryoku.php"><-- Back to Console</a> -->
        </div>
        <div id="judul">
            <h3>Login ke chandrael.net</h3>
        </div>
        <div id="input_box">
            <form action="login.php" method="POST">
                <input id="inputbox" type="text" name="username" placeholder="Masukkan Username" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>"> <br> <br>
                <input id="inputbox" type="password" name="password" placeholder="Masukkan Password" value="<?php if (isset($_COOKIE["pw"])){echo $_COOKIE["pw"];}?>"> <br> <br>
                <input id="btn" type="submit" name="submit_btn" value="Login">
            </form>

            <span>
                <?php
                    if (isset($_SESSION['message'])){
                        echo $_SESSION['message'];
                    } else unset($_SESSION['message']);
                ?>
            </span>
        </div>
    </div>
</body>
</html>