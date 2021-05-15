<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sutairu.css">
    <title>禁書目録</title>
</head>
<body background="https://wallpapercave.com/wp/wp2754864.jpg">
    <div class="box_index">
        <div id="judul">
            <h3>
                Selamat Datang, <?php echo $_SESSION['user']; ?>
            </h3>
        </div>
        <div id="input_box">
            <div id="home_map">
                <table id="maptabel">
                    <tr>
                        <td>
                            <form action="https://github.com/ReikaArv">
                                <input id="index_btn" type="submit" value="Reika's Github Page">
                            </form>
                        </td>
                        <td>
                            <form action="add_data.php">
                                <input id="index_btn" type="submit" value="PLACEHOLDER #2">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <form action="edit_data.php">
                                <input id="index_btn" type="submit" value="PLACEHOLDER #3">
                            </form>
                        </td>
                        <td>
                            <form action="logout.php">
                                <input id="index_btn" type="submit" value="LOGOUT">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
