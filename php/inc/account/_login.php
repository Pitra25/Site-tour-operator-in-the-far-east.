<?php
    session_start();
    include('../../classes/PdoConnect.php');
    
    
    $PDO = PdoConnect::getInstance();
    
    $login = $_POST['login'];
    $Password = $_POST['pass']; 
    $Password = md5("$Password");
    // password_hash("rasmuslerdorf", $_POST['Password']);
    
    // password_hash("rasmuslerdorf", $_POST['Password'])

    $sql_login_con = $PDO->PDO->query("
        SELECT * FROM `Users` WHERE `login` = '$login' AND `pass` = '$Password'
    ");
    
    $User_login = array();
    while ($use = $sql_login_con->fetch()){
        $User_login[] = $use; 
    }
    
    if(!empty($User_login)){
        header('location: ../../../index.php');
    }
    else {
        // echo('no <br>');
        // print_r($User_login);
        // echo('<br>');
        // print_r($sql_login_con);
        // echo('<br>');
        // print_r($use);

        

        $_SESSION['message'] = 'Неверный логин или пароль!';
        // header('Location: ../../page/include/login.php');
    }
?>