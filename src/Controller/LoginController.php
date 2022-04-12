<?php


namespace App\Controller;


class LoginController extends BaseController
{
    public function __invoke()
    {
        if (
            isset($_POST['login']) && isset($_POST['pass'])
            && $_POST['login'] !== '' && $_POST['pass'] !== ''
        ) {
            $login = $_POST['login'];
            $pass = $_POST['pass'];

            $pdo = getConnection();
            try {
                $smtp = $pdo->query("select * from users where login = '$login'");
                $data = $smtp->fetchAll();
                if (count($data) > 1) {
                    $_SESSION['check_auth'] = false;
                } elseif (empty($data)) {
                    $_SESSION['check_auth'] = false;
                } else {
                    if (password_verify($pass, $data[0]['password'])) {
                        $_SESSION['user'] = [
                            'login' => $login
                        ];
                    } else {
                        $_SESSION['check_auth'] = false;
                    }
                }
            } catch (Exception $exception) {
                $_SESSION['check_auth'] = false;
            }

            header('Location: /lk');
        }
        return $this->render('login.php');
    }
}