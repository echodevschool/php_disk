<?php

use App\Entity\User;
require_once 'db.php';
require_once '../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Vvedite login usera</p>
    <form action="index.php" method="post">
        <input type="text" name="login"> 
        <input type="submit">       
    </form>
    
</body>
</html>
<?php
    if (isset($_POST['login']))
    {
        $login = $_POST['login'];
        $pdo = getConnection();

        $smtp = $pdo->prepare("select * from users where login = :login");
        $smtp->execute(array('login' => $login));
        $data = $smtp->fetchAll();
        
        if (count($data) >= 1){
            foreach($data as $column){
                $id = $column['id'];
                $login = $column['login'];
                $password = $column['password'];
                $email = $column['email'];
                $is_admin = $column['is_admin'];            
                }
            $dump = new User($id, $login, $password, $email, $is_admin);
            var_dump($dump);  
        } else {
            echo 'Такого пользователя нет';
        }
        
                
    }   
?>
<!-- // $user = new User('admin', '1234', 'test@test.com');
// $user = '123';
// $user1 = "$user";
// echo $user1;
// var_dump($user); -->