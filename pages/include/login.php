<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <?php
        include('../../php/inc/_link.php');
    ?>
</head>
<body>
    <?php
        spl_autoload_register(function ($PdoConnect) {
            include $PdoConnect . '../../php/classes/PdoConnect.php';
        });
    ?>
    <div class="wrapper">
        <?php
            include('../../php/inc/_header.php');
        ?>

        <div class="main">
            <div class="container">
                <div class="container_log">
                    <div class="message signup">
                        <div class="btn-wrapper">
                            <button class="button" id="signup">Sign Up</button>
                            <button class="button" id="login"> Login</button>
                        </div>
                    </div>
                    <div class="form form--signup">
                        <div class="form--heading">Welcome! Sign Up</div>
                        <form action="../../php/inc/account/_singlup.php" method="post">
                            <input type="text" name="login" placeholder="Name">
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="pass" placeholder="Password">
                            <input type="password" name="pass_confirm" placeholder="Password">
                            <button class="button">Sign Up</button>
                        </form>
                    </div>
                    <div class="form form--login">
                        <div class="form--heading">Welcome back! </div>
                        <form action="../../php/inc/account/_login.php" method="post">
                            <input type="text" name="login" placeholder="Name">
                            <input type="password" name="pass" placeholder="Password">
                            <button class="button">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
            include('../../php/inc/_footer.php');
        ?>
    </div>
    <?php
        include('../../php/inc/_script.php');
    ?>
</body>
</html>