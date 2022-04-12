<?php


namespace App\Controller;


class UserController extends BaseController
{
    public function __invoke()
    {
        if (isset($_SESSION['user'])) {

            if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
                //move_uploaded_file($_FILES['file']['tmp_name'], '/');
                //var_dump($_FILES);
                die();
            }

            return $this->render('lk.php');
        } else {
            Header('Location: /login');
        }
    }
}