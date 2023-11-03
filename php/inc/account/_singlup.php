
<?php
    print_r($_POST);
    
    session_start();
    // require_once'PdoConnect.php';

    // spl_autoload_register(function ($class) {
    //     include '../classes/' . $class . '.php';
    // });
    
    include "../../classes/PdoConnect.php";

    $PDO = PdoConnect::getInstance();

    // var_dump($PDO);
    // die();

    // $Name = $_POST['name'];
    $login = $_POST['login'];
    $Email = $_POST['email'];
    $Password = $_POST['pass'];
    $Password_confirm = $_POST['pass_confirm'];

    if($Password === $Password_confirm){
        
        // $path = 'uploads/' . time() . $_FILES['Avatar']['name'];
        
        // move_uploaded_file($_FILES['Avatar']['tmp_name'], '../../img/' . $path);
        // $_SESSION['message'] = 'Ошибка загрузки картинки';
            // header('Location: ../../page/Log-in/Sing_up.php');
        
        // $Password = password_hash("$Password", PASSWORD_DEFAULT);
        $Password = md5("$Password");

        $incl = $PDO->PDO->query("
            INSERT INTO `Users` (`id`, `Name`, `login`, `pass`, `email`, `avatar`) 
            VALUES (NULL, '$Name', '$login', '$Password', '$Email', '')
        ");
  
        $_SESSION['message'] = 'Вы зарегестрированны';
        header('Location: ../../../pages/include/login.php');
        
    }
    else{
        $_SESSION['message'] = 'Пароли не совпадают!';
        header('Location: ../../page/Log-in/Sing_up.php');
    }
?>