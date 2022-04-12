<?php


namespace App\Controller;

class RegisterController extends BaseController
{
    public function __invoke()
    {
        if (
            isset($_POST['login']) && isset($_POST['email']) && isset($_POST['pass'])
            && $_POST['login'] !== '' && $_POST['email'] !== '' && $_POST['pass'] !== ''
        ) {
            $login = $_POST['login'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $pass = password_hash($pass, PASSWORD_DEFAULT);

            $pdo = getConnection();
            try {
                $pdo->query("insert into users(login, password, email) values('$login', '$pass', '$email')");
                $_SESSION['is_submited'] = true;
            } catch (\Exception $exception) {
                $_SESSION['is_submited'] = false;
            }

            header('Location: /register');
        }

        return $this->render('register.php');
    }
}