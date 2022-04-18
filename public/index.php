<?php
use App\Entity\User;
use App\App\Database\Database;
?>
<!-- session_start();
// require_once 'db.php';
// require_once '../vendor/autoload.php';

// if ($_SERVER['REQUEST_URI'] === '/') {
//     $action = new \App\Controller\HomeController();
// } elseif ($_SERVER['REQUEST_URI'] === '/login') {
//     $action = new \App\Controller\LoginController();
// } elseif ($_SERVER['REQUEST_URI'] === '/register') {
//     $action = new \App\Controller\RegisterController();
// }  elseif ($_SERVER['REQUEST_URI'] === '/lk') {
//     $action = new \App\Controller\UserController();
// } else {
//     Header('', true, 404);
//     die();
// }

// echo $action();  -->

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
    
    $dataBase = new Database(User::class);
        $data = $dataBase->select('*')
            ->query('where login = :login', $login)
            ->get();
        var_dump($database);   

    
    }

?>

<!-- // if (isset($_POST['login']))
// {
//     $login = $_POST['login'];
//     $pdo = getConnection();
//     $smtp = $pdo->prepare("select * from users where login = :login");
//     $smtp->execute(array('login' => $login));
//     $data = $smtp->fetchAll();    

    // if (count($data) >= 1){
    //     foreach($data as $column){
    //         $id = $column['id'];
    //         $login = $column['login'];
    //         $password = $column['password'];
    //         $email = $column['email'];
    //         $is_admin = $column['is_admin'];            
    //         }
    //     $dump = new User($id, $login, $password, $email, $is_admin);
    //     var_dump($dump);  
    // } else {
    //     echo 'Такого пользователя нет';
    // }   
          
